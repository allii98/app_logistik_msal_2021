<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_po extends CI_Model {

    function get_list_po(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $filter = $this->input->post('filter');
        switch ($filter) {
            case "PKS":
                $keyfilter1 = "AND lokasi = 'PKS'";
                break;
            case "SITE":
                $keyfilter1 = "AND lokasi = 'SITE'";
                break;
            case "RO":
                $keyfilter1 = "AND lokasi = 'RO'";
                break;
            case "HO":
                $keyfilter1 = "AND lokasi = 'HO'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE batal <> 1 AND noreftxt LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR noppotxt LIKE '%$keyword%'
                    OR tglppotxt LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR no_refppo LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%'
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE batal <> 1 ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = '<a href="'.site_url('po/edit_po/'.$id).'" target="_blank" class="btn btn-info fa fa-info btn-xs" data-toggle="tooltip" data-placement="top" title="Detail PO" id="btn_edit_barang"> Detail
                <a href="javascript:;" id="a_batal_po">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_po" name="btn_batal_po" data-toggle="tooltip" data-placement="top" title="Batal po" onClick="konfirmasiBatalpo('.$id.','.$hasil->nopotxt.')"> Batal
                    </button>
                </a>
                <a href="'.site_url('po/cetak/'.$hasil->nopotxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_po"> Cetak
                </a>
                ';

            $row[] = $no++;
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->nopotxt;
            // $row[] = $hasil->noppotxt;
            $row[] = $hasil->tglpo;
            $row[] = $hasil->nama_supply;
            // $row[] = $hasil->no_refppo;
            
            $query_item_po = "SELECT nabar FROM item_po WHERE nopotxt = '$hasil->nopotxt' AND noref = '$hasil->noreftxt'";
            $data_item_po = $this->db_logistik_pt->query($query_item_po)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_item_po as $item_spp){
                // $row_detail = array();
                // $row_detail[] = $item_spp->kodebartxt;
                array_push($data_detail_nama, $item_spp->nabar);
            }
            $row[] = join(", ",$data_detail_nama);
            $row[] = $hasil->ket;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function get_list_spp(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $lokasi = $this->session->userdata('status_lokasi');
        // switch ($lokasi) {
        //     case 'PKS':
        //         $jenis_spp = "AND jenis = 'SPPI'";
        //         break;
        //     case 'SITE':
        //         $jenis_spp = "AND jenis = 'SPPI'";
        //         break;
        //     case 'RO':
        //         $jenis_spp = "AND jenis = 'SPPI'";
        //         break;
        //     case 'HO':
        //         $jenis_spp = "AND jenis IN ('SPP','SPPA') ";
        //         break;
        //     default:
        //         break;
        // }

        $filter = $this->input->post('filter');
        switch ($filter) {
            case "PKS":
                $keyfilter1 = "AND lokasi = 'PKS'";
                break;
            case "SITE":
                $keyfilter1 = "AND lokasi = 'SITE'";
                break;
            case "RO":
                $keyfilter1 = "AND lokasi = 'RO'";
                break;
            case "HO":
                $keyfilter1 = "AND lokasi = 'HO'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }

        $spp_apa = $this->input->post('jenis_spp');
        
        switch ($spp_apa) {
            case 'SPPA':
                $jenis_spp = "AND noreftxt LIKE '%SPPA%'";
                break;
            case 'SPPI':
                $jenis_spp = "AND noreftxt LIKE '%SPPI%'";
                break;
            case 'SPPK':
                $jenis_spp = "AND noreftxt LIKE '%SPPK%'";
                break;
            default:
                $jenis_spp = "AND noreftxt LIKE '%SPP%' AND (noreftxt NOT LIKE '%SPPA%' AND noreftxt NOT LIKE '%SPPI%' AND noreftxt NOT LIKE '%SPPK%')";
                break;
        }

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, kodebartxt, nabar, tglppo, namadept, ket, kodedept, namadept, lokasi, status, status2, po, qty FROM item_ppo WHERE po = '0' AND (status2 IN ('1','2') $keyfilter1 $jenis_spp)
                        AND (noppotxt LIKE '%$keyword%'
                        OR tglppo LIKE '%$keyword%'
                        OR noreftxt LIKE '%$keyword%'
                        OR namadept LIKE '%$keyword%'
                        OR kodebartxt LIKE '%$keyword%'
                        OR nabar LIKE '%$keyword%'
                        OR ket LIKE '%$keyword%'
                        OR lokasi LIKE '%$keyword%'
                        OR status LIKE '%$keyword%'
                        OR po LIKE '%$keyword%')
                        ORDER BY id DESC";
            // var_dump($query);exit();

            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        // SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, kodedept, namadept, ket, pt, kodept, lokasi, status, status2, po, jenis FROM ppo WHERE status2 IN ('1','2') AND noppotxt = '$no_spp' AND noreftxt = '$no_ref_spp' AND po = '0' ORDER BY id DESC, tglisi DESC
        
        else{
            // $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, po FROM ppo WHERE po = '0' AND (status2 IN ('1','2') $keyfilter1 $jenis_spp) ORDER BY id DESC";
            $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, kodebartxt, nabar, tglppo, namadept, ket, kodedept, namadept, lokasi, status, status2, po, qty FROM item_ppo WHERE po = '0' AND (status2 IN ('1','2') $keyfilter1 $jenis_spp) ORDER BY id DESC";
            // var_dump($query);exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = $no++;
            $row[] = $hasil->noppotxt;
            $row[] = date("Y-m-d",strtotime($hasil->tglppo)); 
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->namadept;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nabar;
            
            // $query_item_po = "SELECT kodebartxt, nabar, sat, qty, ket FROM item_ppo WHERE noppotxt = '$hasil->noppotxt' AND status2 = '1'";
            // $data_item_po = $this->db_logistik_pt->query($query_item_po)->result();
            // $data_detail = array();
            // $data_detail_nama = array();
            // foreach ($data_item_po as $item_spp){
            //     $row_detail = array();
            //     $row_detail[] = $item_spp->kodebartxt;
            //     $row_detail[] = $item_spp->nabar;
            //     $row_detail[] = $item_spp->sat;
            //     $row_detail[] = $item_spp->qty;
            //     $row_detail[] = $item_spp->ket;
            //     $data_detail[] = $row_detail;
            //     array_push($data_detail_nama, $item_spp->nabar);
            // }
            // $row[] = join(", ",$data_detail_nama);
            
            $row[] = $hasil->ket;
            $row[] = $hasil->lokasi;
            $row[] = $hasil->status;
            $row[] = $hasil->po;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function get_list_supplier(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kode, supplier, usaha FROM supplier
                        WHERE kode LIKE '%$keyword%'
                        OR supplier LIKE '%$keyword%'
                        OR usaha LIKE '%$keyword%'
                        ORDER BY supplier ASC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kode, supplier, usaha FROM supplier ORDER BY supplier ASC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = $no++;
            $row[] = $hasil->kode;
            $row[] = $hasil->supplier;
            $row[] = $hasil->usaha;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function get_list_barang_spp(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
        // $no_spp = $this->input->post('no_spp');
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM item_ppo WHERE status2 IN ('1','2')
                        ORDER BY nabar ASC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT * FROM item_ppo WHERE status2 IN ('1','2') ORDER BY nabar ASC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = "'".$hasil->id."'";
            $row[] = '<a href="javascript:;" id="btn_data_barang">
                    <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
                        Pilih
                    </button>
                </a>
                ';
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nabar;
            $row[] = $hasil->noppotxt;
            $row[] = $hasil->noreftxt;
            // $row[] = $hasil->grp;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    // function get_list_barangg(){
    //     $data = array();
    //     $start = $_POST['start'];
    //     $length = $_POST['length'];
    //     $no = $start+1;
    //     // $no_spp = $this->input->post('no_spp');
    //     // var_dump($no_spp);exit();

    //     if(!empty($_POST['search']['value'])){
    //         $keyword = $_POST['search']['value'];
    //         $query = "SELECT id, kodebar, nabar, grp FROM kodebar 
    //                     WHERE kodebar LIKE '%$keyword%'
    //                     OR nabar LIKE '%$keyword%'
    //                     OR grp LIKE '%$keyword%'
    //                     ORDER BY nabar ASC";
    //         $count_all = $this->db_logistik->query($query)->num_rows();
    //         $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
    //     }
    //     else{
    //         $query = "SELECT id, kodebar, nabar, grp FROM kodebar ORDER BY nabar ASC";
    //         $count_all = $this->db_logistik->query($query)->num_rows();
    //         $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
    //     }
    //     foreach ($data_tabel as $hasil) {
    //         $row   = array();
    //         $id    = "'".$hasil->id."'";
    //         $row[] = '<a href="javascript:;" id="btn_data_barang">
    //                 <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
    //                     Pilih
    //                 </button>
    //             </a>
    //             ';
    //         $row[] = $no++;
    //         $row[] = $hasil->kodebar;
    //         $row[] = $hasil->nabar;
    //         $row[] = $hasil->grp;
    //         $data[] = $row;
    //     }
    //     $output = array(
    //         "draw"              => $_POST['draw'], 
    //         "recordsTotal"      => $count_all, 
    //         "recordsFiltered"   => $count_all, 
    //         "data"              => $data, 
    //     );
    //     return $output;   
    // }

    function _cek_flag_po($no_po){
        $no_spp = $this->input->post('txt_no_spp');
        $no_ref_spp = $this->input->post('hidden_no_ref');
        $kodebar = $this->input->post('hidden_kode_brg');

        $cek_spp = "SELECT * FROM item_ppo WHERE noppotxt = '$no_spp' AND noreftxt = '$no_ref_spp'";
        $num_row_spp = $this->db_logistik_pt->query($cek_spp)->num_rows();

        $cek_po = "SELECT * FROM item_po WHERE noppotxt = '$no_spp' AND refppo = '$no_ref_spp' AND nopotxt = '$no_po'";
        $num_row_po = $this->db_logistik_pt->query($cek_po)->num_rows();

        $dataedititempo['po'] = '1';
        $this->db_logistik_pt->set($dataedititempo);
        $this->db_logistik_pt->where('noreftxt', $no_ref_spp);
        $this->db_logistik_pt->where('noppotxt', $no_spp);
        $this->db_logistik_pt->where('kodebartxt', $kodebar);
        $this->db_logistik_pt->update('item_ppo');

        if($num_row_spp == $num_row_po){
            $dataeditpo['po'] = '1';
            $this->db_logistik_pt->set($dataeditpo);
            $this->db_logistik_pt->where('noreftxt', $no_ref_spp);
            $this->db_logistik_pt->where('noppotxt', $no_spp);
            $this->db_logistik_pt->update('ppo');
        }
    }

    function simpan_rinci_po(){
        // var_dump($_POST);exit();
//         Error Save Data : array(38) {
//   ["txt_no_spp"]=>
//   string(0) ""
//   ["txt_no_ref"]=>
//   string(0) ""
//   ["txt_tgl_ref"]=>
//   string(0) ""
//   ["txt_kode_departemen"]=>
//   string(0) ""
//   ["txt_departemen"]=>
//   string(0) ""
//   ["txt_tanggal"]=>
//   string(10) "02/27/2019"
//   ["cmb_jenis_budget"]=>
//   string(0) ""
//   ["txt_tgl_po"]=>
//   string(10) "02/27/2019"
//   ["txt_kode_supplier"]=>
//   string(0) ""
//   ["txt_supplier"]=>
//   string(0) ""
//   ["cmb_status_bayar"]=>
//   string(4) "Cash"
//   ["txt_tempo_pembayaran"]=>
//   string(1) "0"
//   ["txt_tempo_pengiriman"]=>
//   string(1) "0"
//   ["txt_ket_pengiriman"]=>
//   string(0) ""
//   ["txt_lokasi_pengiriman"]=>
//   string(0) ""
//   ["cmb_lokasi_pembelian"]=>
//   string(0) ""
//   ["txt_no_penawaran"]=>
//   string(0) ""
//   ["txt_pemesan"]=>
//   string(0) ""
//   ["txt_kode_pemesan"]=>
//   string(0) ""
//   ["txt_uang_muka"]=>
//   string(1) "0"
//   ["txt_no_voucher"]=>
//   string(0) ""
//   ["cmb_ppn"]=>
//   string(1) "N"
//   ["txt_keterangan"]=>
//   string(0) ""
//   ["cmb_dikirim_ke_kebun"]=>
//   string(1) "N"
//   ["txt_cari_kode_brg"]=>
//   string(0) ""
//   ["txt_qty"]=>
//   string(1) "1"
//   ["txt_harga"]=>
//   string(5) "10000"
//   ["cmb_kurs"]=>
//   string(2) "Rp"
//   ["txt_disc"]=>
//   string(2) "10"
//   ["txt_biaya_lain"]=>
//   string(3) "100"
//   ["txt_keterangan_biaya_lain"]=>
//   string(21) "keterangan biaya lain"
//   ["txt_keterangan_rinci"]=>
//   string(12) "keterangan 1"
//   ["txt_jumlah"]=>
//   string(4) "9100"
//   ["hidden_no_po"]=>
//   string(0) ""
//   ["hidden_kode_brg"]=>
//   string(15) "102505530000023"
//   ["hidden_nama_brg"]=>
//   string(20) "39T HELICAL GEAR -TR"
//   ["hidden_satuan_brg"]=>
//   string(3) "PCS"
//   ["hidden_stok"]=>
//   string(1) "3"
// }
// ===========================================
// Error Save Data : array(40) {
//   ["cmb_jenis_budget"]=>
//   string(0) ""
//   ["txt_tgl_po"]=>
//   string(10) "03/13/2019"
//   ["txt_kode_supplier"]=>
//   string(4) "0002"
//   ["txt_supplier"]=>
//   string(12) "A YONG, BPK."
//   ["cmb_status_bayar"]=>
//   string(4) "Cash"
//   ["txt_tempo_pembayaran"]=>
//   string(2) "10"
//   ["txt_tempo_pengiriman"]=>
//   string(2) "30"
//   ["txt_ket_pengiriman"]=>
//   string(21) "keterangan pengiriman"
//   ["txt_lokasi_pengiriman"]=>
//   string(17) "lokasi pengiriman"
//   ["cmb_lokasi_pembelian"]=>
//   string(2) "HO"
//   ["txt_no_penawaran"]=>
//   string(12) "no penawaran"
//   ["txt_pemesan"]=>
//   string(6) "AGUS P"
//   ["txt_kode_pemesan"]=>
//   string(2) "02"
//   ["txt_uang_muka"]=>
//   string(7) "1000000"
//   ["txt_no_voucher"]=>
//   string(10) "no voucher"
//   ["cmb_ppn"]=>
//   string(1) "N"
//   ["txt_keterangan"]=>
//   string(7) "ket all"
//   ["cmb_dikirim_ke_kebun"]=>
//   string(1) "Y"
//   ["txt_total_pembayaran"]=>
//   string(0) ""
//   ["txt_no_spp"]=>
//   string(7) "6600001"
//   ["txt_merk"]=>
//   string(6) "merk 1"
//   ["txt_qty"]=>
//   string(1) "4"
//   ["txt_harga"]=>
//   string(7) "1000000"
//   ["cmb_kurs"]=>
//   string(2) "Rp"
//   ["txt_disc"]=>
//   string(1) "0"
//   ["txt_biaya_lain"]=>
//   string(6) "100000"
//   ["txt_keterangan_biaya_lain"]=>
//   string(10) "biaya lain"
//   ["txt_keterangan_rinci"]=>
//   string(5) "ket 1"
//   ["txt_jumlah"]=>
//   string(7) "4100000"
//   ["hidden_jenis_spp"]=>
//   string(3) "SPP"
//   ["hidden_no_po"]=>
//   string(0) ""
//   ["hidden_no_ref_po"]=>
//   string(0) ""
//   ["hidden_no_ref"]=>
//   string(25) "EST-SPP/SWJ/03/19/6600001"
//   ["hidden_tgl_ref"]=>
//   string(10) "03/11/2019"
//   ["hidden_kode_departemen"]=>
//   string(1) "2"
//   ["hidden_departemen"]=>
//   string(12) "TANAMAN UMUM"
//   ["hidden_tanggal"]=>
//   string(10) "03/11/2019"
//   ["hidden_kode_brg"]=>
//   string(15) "102505990000190"
//   ["hidden_nama_brg"]=>
//   string(15) "AC SPLIT 1/2 PK"
//   ["hidden_satuan_brg"]=>
//   string(4) "UNIT"
// }
        // form_data.append('txt_cari_kode_brg',$('#txt_cari_kode_brg_'+no).val());
      // form_data.append('hidden_no_ref',$('#hidden_no_ref'+no).val());
      // form_data.append('hidden_tgl_ref',$('#hidden_tgl_ref'+no).val());
      // form_data.append('hidden_kode_departemen',$('#hidden_kode_departemen'+no).val());
      // form_data.append('hidden_departemen',$('#hidden_departemen'+no).val());
      // form_data.append('hidden_tanggal',$('#hidden_tanggal'+no).val());
        
        $lokasibuatspp = substr($this->input->post('hidden_no_ref'),0,3);
        switch ($lokasibuatspp) {
            case 'PST': // HO
                $lokasispp = 1;
                break;
            case 'ROM': // RO
                $lokasispp = 2;
                break;
            case 'EST': // SITE
                $lokasispp = 3;
                break;
            case 'FAC': // PKS
                $lokasispp = 6;
                break;
            default:
                break;
        }

        $lokasibuatpo = $this->session->userdata('status_lokasi');
        switch ($lokasibuatpo) {
            case 'HO':
                $lokasipo = 1;
                $kodepo = "BWJ";
                break;
            case 'RO':
                $lokasipo = 2;
                $kodepo = "PKY";
                break;
            case 'SITE':
                $lokasipo = 3;
                $kodepo = "SWJ";
                break;
            case 'PKS':
                $lokasipo = 6;
                $kodepo = "SWJ";
                break;
            default:
                break;
        }
        
        $key = $lokasispp.$lokasipo;

        $query_po = "SELECT MAX(SUBSTRING(nopotxt, 3)) as maxpo from po WHERE nopotxt LIKE '$key%'";
        $generate_po = $this->db_logistik_pt->query($query_po)->row();
        $noUrut = (int)($generate_po->maxpo);
        $noUrut++;
        $print = sprintf("%05s", $noUrut);

        if(empty($this->input->post('hidden_no_po'))){
            $no_po = $lokasispp.$lokasipo.$print;
        }
        else{
            $no_po = $this->input->post('hidden_no_po');
        }

        $query_id = "SELECT MAX(id)+1 as no_id FROM po";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $no_id = $generate_id->no_id;
        if(empty($no_id)){
            $no_id = 1;
        }

        $query_id_item = "SELECT MAX(id)+1 as no_id_item FROM item_po";
        $generate_id_item = $this->db_logistik_pt->query($query_id_item)->row();
        $no_id_item = $generate_id_item->no_id_item;
        if(empty($no_id_item)){
            $no_id_item = 1;
        }

        $hidden_jenis_spp = $this->input->post('hidden_jenis_spp'); 
        
        if(!empty($this->input->post('hidden_no_ref_po'))){
            $norefpo = $this->input->post('hidden_no_ref_po');
        }
        else{
            // Est/swj/PO-Lokal/11/18/00034 atau Fac/swj/jkt/12/18/6100005 atau Est-POA/swj/jkt/12/18/6100004 atau Est2/swj/jkt/01/16/7100029
            if($hidden_jenis_spp == "SPPA"){
                $norefpo = $lokasibuatspp."/".$kodepo."/POA/JKT/".date('m')."/".date('y')."/".$no_po; 
            }
            else if($hidden_jenis_spp == "SPPI"){
                $norefpo = $lokasibuatspp."/".$kodepo."/PO-Lokal/JKT/".date('m')."/".date('y')."/".$no_po;
            }
            else if($hidden_jenis_spp == "SPPK"){
                $norefpo = $lokasibuatspp."/".$kodepo."/PO-Khusus/JKT/".date('m')."/".date('y')."/".$no_po;
            }
            else{
                $norefpo = $lokasibuatspp."/".$kodepo."/JKT/".date('m')."/".date('y')."/".$no_po; 
            }
        }

        $tgl_po = date("Y-m-d", strtotime($this->input->post('txt_tgl_po')));
        $tgl_po_txt = date("Ymd", strtotime($this->input->post('txt_tgl_po')));

        $tgl_ppo = date("Y-m-d", strtotime($this->input->post('hidden_tanggal')));
        $tgl_ppo_txt = date("Ymd", strtotime($this->input->post('hidden_tanggal')));

        $tgl_ref = date("Y-m-d", strtotime($this->input->post('hidden_tgl_ref')));
        $tgl_ref_txt = date("Ymd", strtotime($this->input->post('hidden_tgl_ref')));

        if($this->input->post('cmb_dikirim_ke_kebun') == 'Y' ){
            $dikirim_ke_kebun = 1;
        }
        else {
            $dikirim_ke_kebun = 0;
        }

        $datainsert['id']               = $no_id;
        $datainsert['kd_dept']          = ""; //$this->input->post('hidden_kode_departemen');
        $datainsert['ket_dept']         = ""; //$this->input->post('hidden_departemen');
        $datainsert['grup']             = ""; //$this->input->post('cmb_jenis_budget');
        $datainsert['kode_budet']       = "0";
        $datainsert['kd_subbudget']     = "0";
        $datainsert['ket_subbudget']    = NULL;
        $datainsert['kode_supply']      = $this->input->post('txt_kode_supplier');
        $datainsert['nama_supply']      = $this->input->post('txt_supplier');
        $datainsert['kode_pemesan']     = $this->input->post('txt_kode_pemesan');
        $datainsert['pemesan']          = $this->input->post('txt_pemesan');
        $datainsert['nopo']             = $no_po;
        $datainsert['nopotxt']          = $no_po;
        $datainsert['noppo']            = $this->input->post('txt_no_spp');
        $datainsert['noppotxt']         = $this->input->post('txt_no_spp');
        $datainsert['no_refppo']        = ""; //$this->input->post('hidden_no_ref');
        $datainsert['tgl_refppo']       = ""; //$tgl_ref;
        $datainsert['tgl_reftxt']       = ""; //$tgl_ref_txt;
        $datainsert['tglpo']            = $tgl_po;
        $datainsert['tglpotxt']         = $tgl_po_txt;
        $datainsert['tglppo']           = "";//$tgl_ppo;
        $datainsert['tglppotxt']        = "";//$tgl_ppo_txt;
        $datainsert['bayar']            = $this->input->post('cmb_status_bayar');
        $datainsert['tempo_bayar']      = $this->input->post('txt_tempo_pembayaran');
        $datainsert['lokasikirim']      = $this->input->post('txt_lokasi_pengiriman');
        $datainsert['tempo_kirim']      = $this->input->post('txt_tempo_pengiriman');
        $datainsert['lokasi_beli']      = $this->input->post('cmb_lokasi_pembelian');
        $datainsert['ket']              = $this->input->post('txt_keterangan');
        $datainsert['kodept']           = "0";
        $datainsert['namapt']           = "";
        $datainsert['no_acc']           = "";
        // $datainsert['ket_acc']          = $this->input->post('txt_keterangan');
        $datainsert['ket_acc']          = $this->input->post('txt_no_penawaran');
        $datainsert['periode']          = date('Y-m-d H:i:s');
        $datainsert['periodetxt']       = date('Ym');
        $datainsert['thn']              = date('Y');
        $datainsert['tglisi']           = date('Y-m-d H:i:s');
        $datainsert['user']             = $this->session->userdata('user');
        $datainsert['ppn']              = $this->input->post('cmb_ppn');
        $datainsert['totalbayar']       = "";//$this->input->post('txt_jumlah');
        $datainsert['ket_kirim']        = $this->input->post('txt_ket_pengiriman');
        $datainsert['lokasi']           = $this->session->userdata('status_lokasi');
        $datainsert['noreftxt']         = $norefpo;
        $datainsert['uangmuka']         = $this->input->post('txt_uang_muka');
        $datainsert['voucher']          = $this->input->post('txt_no_voucher');
        $datainsert['terbayar']         = "0";
        $datainsert['nopp']             = NULL;
        $datainsert['batal']            = "0";
        $datainsert['kirim']            = $dikirim_ke_kebun;

        $datainsertitem['id']               = $no_id_item;
        $datainsertitem['nopo']             = $no_po;
        $datainsertitem['nopotxt']          = $no_po;
        $datainsertitem['noppo']            = $this->input->post('txt_no_spp');
        $datainsertitem['noppotxt']         = $this->input->post('txt_no_spp');
        $datainsertitem['refppo']           = $this->input->post('hidden_no_ref');
        $datainsertitem['tglppo']           = $tgl_ppo;
        $datainsertitem['tglppotxt']        = $tgl_ppo_txt;
        $datainsertitem['tglpo']            = $tgl_po;
        $datainsertitem['tglpotxt']         = $tgl_po_txt;
        $datainsertitem['kodebar']          = $this->input->post('hidden_kode_brg');
        $datainsertitem['kodebartxt']       = $this->input->post('hidden_kode_brg');
        $datainsertitem['nabar']            = $this->input->post('hidden_nama_brg');
        $datainsertitem['sat']              = $this->input->post('hidden_satuan_brg');
        $datainsertitem['qty']              = $this->input->post('txt_qty');
        $datainsertitem['harga']            = $this->input->post('txt_harga');
        $datainsertitem['jumharga']         = $this->input->post('txt_jumlah');
        $datainsertitem['kodept']           = $this->input->post('hidden_kode_departemen');//"0";
        $datainsertitem['namapt']           = $this->input->post('hidden_departemen');//""
        $datainsertitem['periode']          = date('Y-m-d H:i:s');
        $datainsertitem['periodetxt']       = date('Ym');
        $datainsertitem['thn']              = date('Y');
        $datainsertitem['merek']            = $this->input->post('txt_merk');
        $datainsertitem['tglisi']           = date('Y-m-d H:i:s');
        $datainsertitem['user']             = $this->session->userdata('user');
        $datainsertitem['ket']              = $this->input->post('txt_keterangan_rinci');
        $datainsertitem['noref']            = $norefpo;
        $datainsertitem['lokasi']           = $this->session->userdata('status_lokasi');
        $datainsertitem['hargasblm']        = $this->input->post('txt_harga');
        $datainsertitem['disc']             = $this->input->post('txt_disc');
        $datainsertitem['kurs']             = $this->input->post('cmb_kurs');
        $datainsertitem['kode_budget']      = "0";
        $datainsertitem['grup']             = $this->input->post('cmb_jenis_budget');
        $datainsertitem['main_acct']        = "0";
        $datainsertitem['nama_main']        = NULL;
        $datainsertitem['batal']            = "0";
        $datainsertitem['cek_pp']           = "0";
        $datainsertitem['KODE_BPO']         = "0";
        $datainsertitem['JUMLAHBPO']        = $this->input->post('txt_biaya_lain');
        $datainsertitem['kode_bebanbpo']    = NULL;
        $datainsertitem['nama_bebanbpo']    = $this->input->post('txt_keterangan_biaya_lain');
        $datainsertitem['konversi']         = "0";

        $user = $this->session->userdata('user');
        if(empty($this->input->post('hidden_no_po'))){
            $this->db_logistik_pt->insert('po',$datainsert);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_po = TRUE;
            }
            else {
                $bool_po = FALSE;
            }

            $this->db_logistik_pt->insert('item_po',$datainsertitem);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_itempo = TRUE;
            }
            else{
                $bool_itempo = FALSE;
            }

            $datainsert['keterangan_transaksi'] = "INSERT";
            $datainsert['log'] = $user." membuat PO baru";
            $datainsert['tgl_transaksi'] = date('Y-m-d H:i:s');
            $datainsert['user_transaksi'] = $this->session->userdata('user');
            $datainsert['client_ip'] = $this->input->ip_address();
            $datainsert['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('po_history',$datainsert);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_pohistory = TRUE;
            }
            else{
                $bool_pohistory = FALSE;
            }

            $datainsertitem['keterangan_transaksi'] = "INSERT";
            $datainsertitem['log'] = $user." membuat PO baru";
            $datainsertitem['tgl_transaksi'] = date('Y-m-d H:i:s');
            $datainsertitem['user_transaksi'] = $this->session->userdata('user');
            $datainsertitem['client_ip'] = $this->input->ip_address();
            $datainsertitem['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('item_po_history',$datainsertitem);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_itempohistory = TRUE;
            }
            else{
                $bool_itempohistory = FALSE;
            }

            $this->_cek_flag_po($no_po);

            if ($bool_po === TRUE && $bool_itempo === TRUE && $bool_pohistory === TRUE && $bool_itempohistory === TRUE){
                return array('status' => TRUE, 'no_po' => $no_po, 'id_po' => $no_id, 'id_po_item' => $no_id_item, 'no_ref_po' => $norefpo);
            }
            else{
                return FALSE;
            }

        }
        else{
            $kodebar    = $this->input->post('hidden_kode_brg');
            $nabar      = $this->input->post('hidden_nama_brg');

            $query = "SELECT * FROM item_po WHERE nopotxt = '$no_po' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);
            
            /*** Check apakah barang sudah pernah ditambahkan pada PO yang sama  ***/
            if($check_brg->num_rows() > 0){
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada PO yang sama ***/
            else{
                $this->db_logistik_pt->insert('item_po',$datainsertitem);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_itempo = TRUE;
                }
                else{
                    $bool_itempo = FALSE;
                }

                $datainsertitem['keterangan_transaksi'] = "INSERT";
                $datainsertitem['log'] = $user." membuat PO baru";
                $datainsertitem['tgl_transaksi'] = date('Y-m-d H:i:s');
                $datainsertitem['user_transaksi'] = $this->session->userdata('user');
                $datainsertitem['client_ip'] = $this->input->ip_address();
                $datainsertitem['client_platform'] = $this->platform->agent();

                $this->db_logistik_pt->insert('item_po_history',$datainsertitem);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_itempohistory = TRUE;
                }
                else{
                    $bool_itempohistory = FALSE;
                }

                $this->_cek_flag_po($no_po);

                if ($bool_itempo === TRUE && $bool_itempohistory === TRUE){
                    return array('status' => TRUE, 'no_po' => $no_po, 'id_po' => $no_id-1, 'id_po_item' => $no_id_item, 'no_ref_po' => $norefpo);
                }
                else{
                    return FALSE;
                }
            }
        }
    }

    function ubah_rinci_po(){
        $lokasibuatspp = substr($this->input->post('hidden_no_ref'),0,3);
        switch ($lokasibuatspp) {
            case 'PST': // HO
                $lokasispp = 1;
                break;
            case 'ROM': // RO
                $lokasispp = 2;
                break;
            case 'EST': // SITE
                $lokasispp = 3;
                break;
            case 'FAC': // PKS
                $lokasispp = 6;
                break;
            default:
                break;
        }

        $lokasibuatpo = $this->session->userdata('status_lokasi');
        switch ($lokasibuatpo) {
            case 'HO':
                $lokasipo = 1;
                $kodepo = "BWJ";
                break;
            case 'RO':
                $lokasipo = 2;
                $kodepo = "PKY";
                break;
            case 'SITE':
                $lokasipo = 3;
                $kodepo = "SWJ";
                break;
            case 'PKS':
                $lokasipo = 6;
                $kodepo = "SWJ";
                break;
            default:
                break;
        }

        $key = $lokasispp.$lokasipo;

        $query_po = "SELECT MAX(SUBSTRING(nopotxt, 3)) as maxpo from po WHERE nopotxt LIKE '$key%'";
        $generate_po = $this->db_logistik_pt->query($query_po)->row();
        $noUrut = (int)($generate_po->maxpo);
        $noUrut++;
        $print = sprintf("%05s", $noUrut);

        // Est/swj/PO-Lokal/11/18/00034 atau Fac/swj/jkt/12/18/6100005 atau Est-POA/swj/jkt/12/18/6100004
        // $no_po = $lokasispp.$lokasipo.$print;
        // var_dump($_POST);exit();
        $no_id = $this->input->post('hidden_id_po');
        $no_id_item = $this->input->post('hidden_id_po_item');
        // var_dump($_POST);exit();

        $no_po = $this->input->post('hidden_no_po');
        $norefpo = $this->input->post('hidden_no_ref_po');

        $no_spp = $this->input->post('hidden_no_spp');
        $no_ref_spp = $this->input->post('hidden_no_ref');

        $tgl_po = date("Y-m-d", strtotime($this->input->post('txt_tgl_po')));
        $tgl_po_txt = date("Ymd", strtotime($this->input->post('txt_tgl_po')));

        $tgl_ppo = date("Y-m-d", strtotime($this->input->post('hidden_tanggal')));
        $tgl_ppo_txt = date("Ymd", strtotime($this->input->post('hidden_tanggal')));

        $tgl_ref = date("Y-m-d", strtotime($this->input->post('hidden_tgl_ref')));
        $tgl_ref_txt = date("Ymd", strtotime($this->input->post('hidden_tgl_ref')));

        if($this->input->post('cmb_dikirim_ke_kebun') == 'Y' ){
            $dikirim_ke_kebun = 1;
        }
        else {
            $dikirim_ke_kebun = 0;
        }

        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_1 = "INSERT INTO po_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)', '$user melakukan perubahan data PO $norefpo',NOW(), '$user', '$ip', '$platform' FROM po a WHERE a.id = $no_id AND a.nopotxt = $no_po";
        $this->db_logistik_pt->query($query_1);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_pohistory_old = TRUE;
        }
        else {
            $bool_pohistory_old = FALSE;
        }

        $query_2 = "INSERT INTO item_po_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)', '$user melakukan perubahan data PO $norefpo', NOW(), '$user', '$ip', '$platform' FROM item_po a WHERE a.id = $no_id_item AND a.nopotxt = $no_po";

        $this->db_logistik_pt->query($query_2);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_itempohistory_old = TRUE;
        }
        else{
            $bool_itempohistory_old = FALSE;
        }

        $dataedit['id']               = $no_id;
        $dataedit['kd_dept']          = "";//$this->input->post('hidden_kode_departemen');
        $dataedit['ket_dept']         = "";//$this->input->post('hidden_departemen');
        $dataedit['grup']             = "";//$this->input->post('cmb_jenis_budget');
        $dataedit['kode_budet']       = "0";
        $dataedit['kd_subbudget']     = "0";
        $dataedit['ket_subbudget']    = NULL;
        $dataedit['kode_supply']      = $this->input->post('txt_kode_supplier');
        $dataedit['nama_supply']      = $this->input->post('txt_supplier');
        $dataedit['kode_pemesan']     = $this->input->post('txt_kode_pemesan');
        $dataedit['pemesan']          = $this->input->post('txt_pemesan');
        $dataedit['nopo']             = $no_po;
        $dataedit['nopotxt']          = $no_po;
        $dataedit['noppo']            = $no_spp;
        $dataedit['noppotxt']         = $no_spp;
        $dataedit['no_refppo']        = $no_ref_spp;
        $dataedit['tgl_refppo']       = "";//$tgl_ref;
        $dataedit['tgl_reftxt']       = "";//$tgl_ref_txt;
        $dataedit['tglpo']            = $tgl_po;
        $dataedit['tglpotxt']         = $tgl_po_txt;
        $dataedit['tglppo']           = "";//$tgl_ppo;
        $dataedit['tglppotxt']        = "";//$tgl_ppo_txt;
        $dataedit['bayar']            = $this->input->post('cmb_status_bayar');
        $dataedit['tempo_bayar']      = $this->input->post('txt_tempo_pembayaran');
        $dataedit['lokasikirim']      = $this->input->post('txt_lokasi_pengiriman');
        $dataedit['tempo_kirim']      = $this->input->post('txt_tempo_pengiriman');
        $dataedit['lokasi_beli']      = $this->input->post('cmb_lokasi_pembelian');
        $dataedit['ket']              = $this->input->post('txt_keterangan');
        $dataedit['kodept']           = "0";
        $dataedit['namapt']           = "";
        $dataedit['no_acc']           = "";
        // $datainsert['ket_acc']          = $this->input->post('txt_keterangan');
        $dataedit['ket_acc']          = $this->input->post('txt_no_penawaran');
        $dataedit['periode']          = date('Y-m-d H:i:s');
        $dataedit['periodetxt']       = date('Ym');
        $dataedit['thn']              = date('Y');
        $dataedit['tglisi']           = date('Y-m-d H:i:s');
        $dataedit['user']             = $this->session->userdata('user');
        $dataedit['ppn']              = $this->input->post('cmb_ppn');
        $dataedit['totalbayar']       = "";//$this->input->post('txt_jumlah');
        $dataedit['ket_kirim']        = $this->input->post('txt_ket_pengiriman');
        $dataedit['lokasi']           = $this->session->userdata('status_lokasi');
        $dataedit['noreftxt']         = $norefpo;
        $dataedit['uangmuka']         = $this->input->post('txt_uang_muka');
        $dataedit['voucher']          = $this->input->post('txt_no_voucher');
        $dataedit['terbayar']         = "0";
        $dataedit['nopp']             = NULL;
        $dataedit['batal']            = "0";
        $dataedit['kirim']            = $dikirim_ke_kebun;

        $dataedititem['id']               = $no_id_item;
        $dataedititem['nopo']             = $no_po;
        $dataedititem['nopotxt']          = $no_po;
        $dataedititem['noppo']            = $no_spp;
        $dataedititem['noppotxt']         = $no_spp;
        $dataedititem['refppo']           = $this->input->post('hidden_no_ref');
        $dataedititem['tglppo']           = $tgl_ppo;
        $dataedititem['tglppotxt']        = $tgl_ppo_txt;
        $dataedititem['tglpo']            = $tgl_po;
        $dataedititem['tglpotxt']         = $tgl_po_txt;
        $dataedititem['kodebar']          = $this->input->post('hidden_kode_brg');
        $dataedititem['kodebartxt']       = $this->input->post('hidden_kode_brg');
        $dataedititem['nabar']            = $this->input->post('hidden_nama_brg');
        $dataedititem['sat']              = $this->input->post('hidden_satuan_brg');
        $dataedititem['qty']              = $this->input->post('txt_qty');
        $dataedititem['harga']            = $this->input->post('txt_harga');
        $dataedititem['jumharga']         = $this->input->post('txt_jumlah');
        $dataedititem['kodept']           = $this->input->post('hidden_kode_departemen');//"0";
        $dataedititem['namapt']           = $this->input->post('hidden_departemen');//""
        $dataedititem['periode']          = date('Y-m-d H:i:s');
        $dataedititem['periodetxt']       = date('Ym');
        $dataedititem['thn']              = date('Y');
        $dataedititem['merek']            = $this->input->post('txt_merk');
        $dataedititem['tglisi']           = date('Y-m-d H:i:s');
        $dataedititem['user']             = $this->session->userdata('user');
        $dataedititem['ket']              = $this->input->post('txt_keterangan_rinci');
        $dataedititem['noref']            = $norefpo;
        $dataedititem['lokasi']           = $this->session->userdata('status_lokasi');
        $dataedititem['hargasblm']        = $this->input->post('txt_harga');
        $dataedititem['disc']             = $this->input->post('txt_disc');
        $dataedititem['kurs']             = $this->input->post('cmb_kurs');
        $dataedititem['kode_budget']      = "0";
        $dataedititem['grup']             = $this->input->post('cmb_jenis_budget');
        $dataedititem['main_acct']        = "0";
        $dataedititem['nama_main']        = NULL;
        $dataedititem['batal']            = "0";
        $dataedititem['cek_pp']           = "0";
        $dataedititem['KODE_BPO']         = "0";
        $dataedititem['JUMLAHBPO']        = $this->input->post('txt_biaya_lain');
        $dataedititem['kode_bebanbpo']    = NULL;
        $dataedititem['nama_bebanbpo']    = $this->input->post('txt_keterangan_biaya_lain');
        $dataedititem['konversi']         = "0";

        var_dump($dataedit);
        var_dump($dataedititem);
        exit();

        $this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $no_id);
        $this->db_logistik_pt->where('nopotxt', $no_po);
        $this->db_logistik_pt->update('po');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_po = TRUE;
        }
        else{
            $bool_po = FALSE;
        }

        $this->db_logistik_pt->set($dataedititem);
        $this->db_logistik_pt->where('id', $no_id_item);
        $this->db_logistik_pt->where('nopotxt', $no_po);
        $this->db_logistik_pt->update('item_po');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_itempo = TRUE;
        }
        else{
            $bool_itempo = FALSE;
        }

        $this->_cek_flag_po($no_po);

        if ($bool_pohistory_old === TRUE && $bool_itempohistory_old === TRUE 
            && $bool_po === TRUE && $bool_itempo === TRUE){
            return array('status' => TRUE, 'no_po' => $no_po, 'id_po' => $no_id, 'id_po_item' => $no_id_item);
        }
        else{
            return FALSE;
        }
    }

}
