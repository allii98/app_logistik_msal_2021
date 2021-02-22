<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_retur_lpb extends CI_Model {

    function get_list_barang(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $no_lpb = $this->input->post('no_lpb');
        $no_ref_lpb = $this->input->post('no_ref_lpb');
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebartxt, nabar FROM masukitem WHERE (ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND BATAL = '0')
                AND (kodebartxt LIKE '%$keyword%'
                OR nabar LIKE '%$keyword%')
                ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kodebartxt, nabar FROM masukitem WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND BATAL = '0' ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;
            
            $row[] = "";
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nabar;
            $data[] = $row;
        }
        $count_all = $no-1;

        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function simpan_rinci_lpb(){
        // var_dump($_POST);exit();
        // Error Save Data : array(17) {
        //   ["chk_asset"] => string(0) ""
        //   ["txt_no_pengantar"] => string(1) "-"
        //   ["txt_no_po"] => string(7) "3100002"
        //   ["txt_ref_po"] => string(29) "EST/BWJ/POA/JKT/09/19/3100002"
        //   ["txt_kd_supplier"] => string(4) "0001"
        //   ["txt_supplier"] => string(15) "999 BACKHOE, CV"
        //   ["txt_lokasi_gudang"] => string(1) "a"
        //   ["txt_tgl_po"] => string(10) "09/12/2019"
        //   ["txt_ket_pengiriman"] => string(1) "a"
        //   ["txt_kode_barang"] => string(15) "102505990000222"
        //   ["txt_nama_brg"] => string(12) "GENSET 15KVA"
        //   ["txt_qty"] => string(1) "1"
        //   ["txt_satuan"] => string(4) "UNIT"
        //   ["txt_ket_rinci"] => string(5) "ket 1"
        //   ["hidden_grup"] => string(32) "BARANG LOGISTIK TRANSIT ( ASET )"
        //   ["txt_no_lpb"] => string(7) "6600001"
        //   ["txt_ref_lpb"] => string(23) "EST-LPB/SWJ/10/19/00001"
        // }

        $query_id_stok_masuk = "SELECT MAX(id)+1 as id_stok_masuk FROM stokmasuk";
        $generate_id_stok_masuk = $this->db_logistik_pt->query($query_id_stok_masuk)->row();
        $id_stok_masuk = $generate_id_stok_masuk->id_stok_masuk;
        if(empty($id_stok_masuk)){
            $id_stok_masuk = 1;
        }

        $query_id_masuk_item = "SELECT MAX(id)+1 as id_stok_masuk FROM masukitem";
        $generate_id_masuk_item = $this->db_logistik_pt->query($query_id_masuk_item)->row();
        $id_masuk_item = $generate_id_masuk_item->id_stok_masuk;
        if(empty($id_masuk_item)){
            $id_masuk_item = 1;
        }

        $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
        $nopo = $this->input->post('txt_no_po');
        $refpo = $this->input->post('txt_ref_po');

        $lokasibuatpo = substr($refpo,0,3);
        switch ($lokasibuatpo) {
            case 'PST': // HO
                $digit1 = "1";
                $ref_1 = "LPB";
                break;
            case 'ROM': // RO
                $digit1 = "2";
                $ref_1 = "ROM-LPB";
                break;
            case 'FAC': // PKS
                $digit1 = "3";
                $ref_1 = "FAC";
                break;
            case 'EST': // SITE
                $digit1 = "6";
                $ref_1 = "EST-LPB";
                break;
            default:
                break;
        }

        $polokal = substr($refpo,8,8); // PO-Lokal
        switch ($polokal) {
            case "PO-Lokal":
                $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
                switch ($lokasilpb) {
                    case 'HO': // HO
                        $digit2 = "1";
                        break;
                    case 'RO': // RO
                        $digit2 = "2";
                        break;
                    case 'PKS': // PKS
                        $digit2 = "3";
                        break;
                    case 'SITE': // SITE
                        $digit2 = "6";
                        break;
                    default:
                        break;
                }
                break;
            default:
                if (substr($refpo, 4,3) == "POA"){
                    $digit2 = "1";
                }
                else{
                    switch ($lokasilpb) {
                        case 'HO': // HO
                            $digit2 = "1";
                            break;
                        case 'RO': // RO
                            $digit2 = "2";
                            break;
                        case 'PKS': // PKS
                            $digit2 = "3";
                            break;
                        case 'SITE': // SITE
                            $digit2 = "6";
                            break;
                        default:
                            break;
                    }
                }
                break;
        }

        $digit1_2 = $digit1.$digit2;

        switch ($lokasilpb) {
            case 'HO':
                $ref_2 = "PST";
                break;
            case 'SITE':
                $ref_2 = "SWJ";
                break;
            case 'PKS':
                $ref_2 = "SWJ";
                break;
            case 'RO':
                $ref_2 = "PKY";
                break;
            default:
                break;
        }

        $kodebar = $this->input->post('txt_kode_barang');
        $nabar = $this->input->post('txt_nama_brg');

        $query_masuk_item = "SELECT MAX(SUBSTRING(ttgtxt, 3)) as maxttg from masukitem WHERE ttg LIKE '$digit1_2%'";
        $generate_masuk_item = $this->db_logistik_pt->query($query_masuk_item)->row();
        $noUrut_masuk_item = (int)($generate_masuk_item->maxttg);
        $noUrut_masuk_item++;
        $print_masuk_item = sprintf("%05s", $noUrut_masuk_item);
        
        $ref_3 = date("m/y",strtotime($this->input->post('txt_tgl_terima')));

        if(empty($this->input->post('hidden_no_lpb'))){
            $no_lpb = $digit1_2.$print_masuk_item; // 6207836;
        }
        else{
            $no_lpb = $this->input->post('hidden_no_lpb');
        }

        if(empty($this->input->post('hidden_no_ref_lpb'))){
            $no_ref_lpb = $no_ref_lpb = $ref_1."/".$ref_2."/".$ref_3."/".$print_masuk_item;//LPB/PST/01/00233 // Est-LPB/swj/12/18/07836 // EST/SWJ/RETURN/642/XIV/12/2018
        }
        else{
            $no_ref_lpb = $this->input->post('hidden_no_ref_lpb');
        }

        $check_po = $this->input->post('txt_no_po');
        if(substr($check_po, 8,8) == "PO-Lokal"){
            $po_lokal = "1";
        }
        else{
            $po_lokal = "0";
        }

        $check_asset = $this->input->post('chk_asset');
        if($check_asset == "Asset"){
            $asset = "1";
        }
        else {
            $asset = "0";
        }

        if(!empty($_POST['txt_bkb_dari_pt'])){
            $mutasi = "1";
        }
        else{
            $mutasi = "0";
        }

        $tgl_terima = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        $tgl_input = date("Y-m-d", strtotime($this->input->post('txt_tgl_input')));

        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_terima')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_terima')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        // $txtperiode = date("Ym", strtotime($this->input->post('txt_tgl_terima')));

        $query_get_po = "SELECT id, nopotxt, kode_supply, nama_supply FROM po WHERE nopotxt = '$nopo' AND noreftxt = '$refpo'";
        $get_po = $this->db_logistik_pt->query($query_get_po)->row();

        $query_get_item_po = "SELECT id, nopotxt, kurs, konversi FROM item_po WHERE nopotxt = '$nopo' AND noref = '$refpo' AND kodebartxt = '$kodebar' AND nabar = '$nabar'";
        $get_item_po = $this->db_logistik_pt->query($query_get_item_po)->row();

        $kurs = $get_item_po->kurs;
        $konversi = $get_item_po->konversi;

        $kode_supply = $get_po->kode_supply;
        $nama_supply = $get_po->nama_supply;

        $no_po = $this->input->post('txt_no_po');
        $no_ref_po = $this->input->post('txt_ref_po');

        // Error Save Data : array(30) {
        //   ["id"] => string(1) "2"
        //   ["tgl"] => string(19) "1970-01-01 00:00:00"
        //   ["nopo"] => string(7) "3100002"
        //   ["nopotxt"] => string(7) "3100002"
        //   ["LOKAL"] => string(1) "0"
        //   ["ASSET"] => string(1) "0"
        //   ["kode_supply"] => string(4) "0001"
        //   ["nama_supply"] => string(15) "999 BACKHOE, CV"
        //   ["ttg"] => string(7) "6600002"
        //   ["ttgtxt"] => string(7) "6600002"
        //   ["no_pengtr"] => string(1) "-"
        //   ["lokasi_gudang"] => string(1) "a"
        //   ["ket"] => string(1) "a"
        //   ["tglinput"] => string(19) "1970-01-01 11:14:17"
        //   ["txttgl"] => string(8) "19700101"
        //   ["thn"] => string(4) "1970"
        //   ["periode1"] => string(10) "2019-10-07"
        //   ["periode2"]=> NULL
        //   ["txtperiode1"] => string(6) "201910"
        //   ["txtperiode2"]=> NULL
        //   ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
        //   ["kode"] => string(2) "06"
        //   ["mutasi"] => string(1) "0"
        //   ["lokasi"] => string(4) "SITE"
        //   ["refpo"] => string(29) "EST/BWJ/POA/JKT/09/19/3100002"
        //   ["noref"] => string(23) "EST-LPB/SWJ/01/70/00002"
        //   ["BATAL"] => string(1) "0"
        //   ["USER"] => string(11) "User Gudang"
        //   ["cetak"] => string(1) "0"
        //   ["posting"] => string(1) "0"
        // }
        // array(33) {
        //   ["id"] => string(1) "3"
        //   ["kdpt"] => string(2) "06"
        //   ["nopo"] => string(7) "3100002"
        //   ["nopotxt"] => string(7) "3100002"
        //   ["LOKAL"] => string(1) "0"
        //   ["ASSET"] => string(1) "0"
        //   ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
        //   ["afd"] => string(1) "-"
        //   ["kodebar"] => string(15) "102505990000222"
        //   ["kodebartxt"] => string(15) "102505990000222"
        //   ["nabar"] => string(12) "GENSET 15KVA"
        //   ["satuan"] => string(4) "UNIT"
        //   ["grp"] => string(32) "BARANG LOGISTIK TRANSIT ( ASET )"
        //   ["qty"] => string(1) "1"
        //   ["tgl"] => string(19) "1970-01-01 00:00:00"
        //   ["ttg"] => string(7) "6600002"
        //   ["ttgtxt"] => string(7) "6600002"
        //   ["tglinput"] => string(19) "1970-01-01 11:14:17"
        //   ["txttgl"] => string(8) "19700101"
        //   ["thn"] => string(4) "1970"
        //   ["periode"] => string(10) "2019-10-07"
        //   ["txtperiode"] => string(6) "201910"
        //   ["noadjust"] => string(1) "0"
        //   ["ket"] => string(5) "ket 1"
        //   ["lokasi"] => string(4) "SITE"
        //   ["refpo"] => string(29) "EST/BWJ/POA/JKT/09/19/3100002"
        //   ["noref"] => string(23) "EST-LPB/SWJ/01/70/00002"
        //   ["BATAL"] => string(1) "0"
        //   ["kurs"] => string(2) "Rp"
        //   ["konversi"] => string(1) "0"
        //   ["USER"] => string(11) "User Gudang"
        //   ["cetak"] => string(1) "0"
        //   ["posting"] => string(1) "0"
        // }

        // refpo /* EST-RET */, noref /* BA-RETUR */ // stokmasuk
        // refpo /* EST-RET */, noref /* BA-RETUR */ // masukitem

        $datainsert_stokmasuk['id']             = $id_stok_masuk;
        $datainsert_stokmasuk['tgl']            = $tgl_terima." 00:00:00";
        $datainsert_stokmasuk['nopo']           = $no_po;
        $datainsert_stokmasuk['nopotxt']        = $no_po;
        $datainsert_stokmasuk['LOKAL']          = $po_lokal;
        $datainsert_stokmasuk['ASSET']          = "0"; //$asset;
        $datainsert_stokmasuk['kode_supply']    = $kode_supply;
        $datainsert_stokmasuk['nama_supply']    = $nama_supply;
        $datainsert_stokmasuk['ttg']            = $no_lpb;
        $datainsert_stokmasuk['ttgtxt']         = $no_lpb;
        $datainsert_stokmasuk['no_pengtr']      = $this->input->post('txt_no_pengantar');
        $datainsert_stokmasuk['lokasi_gudang']  = $this->input->post('txt_lokasi_gudang');
        $datainsert_stokmasuk['ket']            = $this->input->post('txt_ket_pengiriman');
        $datainsert_stokmasuk['tglinput']       = $tgl_input.date(" H:i:s");
        $datainsert_stokmasuk['txttgl']         = $txttgl;
        $datainsert_stokmasuk['thn']            = $thn;
        $datainsert_stokmasuk['periode1']       = $periode;
        $datainsert_stokmasuk['periode2']       = NULL;
        $datainsert_stokmasuk['txtperiode1']    = $txtperiode;
        $datainsert_stokmasuk['txtperiode2']    = NULL;
        $datainsert_stokmasuk['pt']             = $this->session->userdata('pt');
        $datainsert_stokmasuk['kode']           = $this->session->userdata('kode_pt');
        $datainsert_stokmasuk['mutasi']         = $mutasi;
        $datainsert_stokmasuk['lokasi']         = $this->session->userdata('status_lokasi');
        $datainsert_stokmasuk['refpo']          = $no_ref_po;
        $datainsert_stokmasuk['noref']          = $no_ref_lpb;
        $datainsert_stokmasuk['BATAL']          = '0';
        $datainsert_stokmasuk['USER']           = $this->session->userdata('user');
        $datainsert_stokmasuk['cetak']          = '0';
        $datainsert_stokmasuk['posting']        = '0';

        $datainsert_masukitem["id"]           = $id_masuk_item;
        $datainsert_masukitem["kdpt"]         = $this->session->userdata('kode_pt');
        $datainsert_masukitem["nopo"]         = $no_po;
        $datainsert_masukitem["nopotxt"]      = $no_po;
        $datainsert_masukitem["LOKAL"]        = $po_lokal;
        $datainsert_masukitem["ASSET"]        = $asset;
        $datainsert_masukitem["pt"]           = $this->session->userdata('pt');
        $datainsert_masukitem["afd"]          = '-';
        $datainsert_masukitem["kodebar"]      = $this->input->post('txt_kode_barang');
        $datainsert_masukitem["kodebartxt"]   = $this->input->post('txt_kode_barang');
        $datainsert_masukitem["nabar"]        = $this->input->post('txt_nama_brg');
        $datainsert_masukitem["satuan"]       = $this->input->post('txt_satuan');
        $datainsert_masukitem["grp"]          = $this->input->post('hidden_grup');
        $datainsert_masukitem["qty"]          = $this->input->post('txt_qty');
        $datainsert_masukitem["tgl"]          = $tgl_terima." 00:00:00";
        $datainsert_masukitem["ttg"]          = $no_lpb;
        $datainsert_masukitem["ttgtxt"]       = $no_lpb;
        $datainsert_masukitem["tglinput"]     = $tgl_input.date(" H:i:s");
        $datainsert_masukitem["txttgl"]       = $txttgl;
        $datainsert_masukitem["thn"]          = $thn;
        $datainsert_masukitem["periode"]      = $periode;
        $datainsert_masukitem["txtperiode"]   = $txtperiode;
        $datainsert_masukitem["noadjust"]     = "0";
        $datainsert_masukitem["ket"]          = $this->input->post('txt_ket_rinci');
        $datainsert_masukitem["lokasi"]       = $this->session->userdata('status_lokasi');
        $datainsert_masukitem["refpo"]        = $no_ref_po;
        $datainsert_masukitem["noref"]        = $no_ref_lpb;
        $datainsert_masukitem["BATAL"]        = '0';
        $datainsert_masukitem["kurs"]         = $kurs;
        $datainsert_masukitem["konversi"]     = $konversi;
        $datainsert_masukitem["USER"]         = $this->session->userdata('user');
        $datainsert_masukitem["cetak"]        = '0';
        $datainsert_masukitem["posting"]      = '0';

        var_dump($datainsert_stokmasuk);
        var_dump($datainsert_masukitem);
        exit();

        $kodebar = $this->input->post('txt_kode_barang');
        $query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = $kodebar";
        $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();
        if(empty($data_max_id_stock_awal->max_id_stock_awal)){
            $data = "input_stock_awal";
            return $data;
        }
        else {
            $no_id = $data_max_id_stock_awal->max_id_stock_awal;
            $user = $this->session->userdata('user');
            $ip = $this->input->ip_address();
            $platform = $this->platform->agent();

            if(empty($this->input->post('hidden_no_lpb'))){
                $this->db_logistik_pt->insert('stokmasuk',$datainsert_stokmasuk);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stokmasuk = TRUE;
                }
                else{
                    $bool_stokmasuk = FALSE;
                }

                $this->db_logistik_pt->insert('masukitem',$datainsert_masukitem);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_masukitemlpb = TRUE;
                }
                else{
                    $bool_masukitemlpb = FALSE;
                }

                $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '$user menambahkan barang pada LPB $no_lpb', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
                // var_dump($query_1);exit();
                $this->db_logistik_pt->query($query_1);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stockawalhistory_old = TRUE;
                }
                else {
                    $bool_stockawalhistory_old = FALSE;
                }

                // $dataedit_stockawal["nilai_masuk"] = 
                $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty');
                // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
                $this->db_logistik_pt->set($dataedit_stockawal);
                $this->db_logistik_pt->where('id', $no_id);
                $this->db_logistik_pt->where('kodebartxt', $kodebar);
                $this->db_logistik_pt->update('stockawal');

                // var_dump($this->db_logistik_pt->last_query());exit();

                if ($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stockawal = TRUE;
                }
                else{
                    $bool_stockawal = FALSE;
                }

                $this->_check_sum_po_dan_lpb($no_po,$no_ref_po);

                // if ($bool_masukitemlpb === TRUE && $bool_stokmasuk === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE){
                if ($bool_masukitemlpb === TRUE && $bool_stokmasuk === TRUE){
                    return array('status' => TRUE, 'no_lpb' => $no_lpb, 'id_stok_masuk' => $id_stok_masuk ,'id_masuk_item' => $id_masuk_item, 'no_ref_lpb' => $no_ref_lpb);
                }
                else{
                    return FALSE;
                }
            }
            else{
                $kodebar    = $this->input->post('txt_kode_barang');
                $nabar      = $this->input->post('txt_nama_brg');

                $query = "SELECT * FROM masukitem WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
                $check_brg = $this->db_logistik_pt->query($query);

                if($check_brg->num_rows() > 0){
                    return "kodebar_exist";
                }
                /*** Jika barang belum pernah ditambahkan pada LPB yang sama ***/
                else{
                    $this->db_logistik_pt->insert('masukitem',$datainsert_masukitem);
                    if($this->db_logistik_pt->affected_rows() > 0){
                        $bool_masukitemlpb = TRUE;
                    }
                    else{
                        $bool_masukitemlpb = FALSE;
                    }

                    $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '$user menambahkan barang $kodebar|$nabar pada LPB $no_lpb', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
                    $this->db_logistik_pt->query($query_1);
                    if($this->db_logistik_pt->affected_rows() > 0){
                        $bool_stockawalhistory_old = TRUE;
                    }
                    else {
                        $bool_stockawalhistory_old = FALSE;
                    }

                    // $dataedit_stockawal["nilai_masuk"] = 
                    $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty');
                    // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
                    $this->db_logistik_pt->set($dataedit_stockawal);
                    $this->db_logistik_pt->where('id', $no_id);
                    $this->db_logistik_pt->where('kodebartxt', $this->input->post('txt_kode_barang'));
                    $this->db_logistik_pt->update('stockawal');

                    // var_dump($this->db_logistik_pt->last_query());exit();
                    if ($this->db_logistik_pt->affected_rows() > 0){
                        $bool_stockawal = TRUE;
                    }
                    else{
                        $bool_stockawal = FALSE;
                    }

                    $this->_check_sum_po_dan_lpb($no_po,$no_ref_po);

                    if ($bool_masukitemlpb === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE){
                        return array('status' => TRUE, 'no_lpb' => $no_lpb, 'id_masuk_item' => $id_masuk_item, 'no_ref_lpb' => $no_ref_lpb);
                    }
                    else{
                        return FALSE;
                    }
                }
            }
        }
    }
}