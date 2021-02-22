<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_retur_bkb extends CI_Model {

    function list_bkb(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $kodept = $this->session->userdata('kode_pt');
        $periode = $this->session->userdata('ym_periode');
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, no_ret, kpd, pt, DATE(tgl) as tgl, keperluan, bag, tglinput FROM retskb WHERE (kode = '$kodept' AND batal = '0' AND txtperiode1 = '$periode') AND
                (no_ret LIKE '%$keyword%' OR
                kpd LIKE '%$keyword%' OR
                pt LIKE '%$keyword%' OR
                DATE(tgl) LIKE '%$keyword%' OR
                keperluan LIKE '%$keyword%' OR
                bag LIKE '%$keyword%' OR
                tglinput LIKE '%$keyword%')
                ORDER BY id DESC";
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, no_ret, kpd, pt, DATE(tgl) as tgl, keperluan, bag, tglinput FROM retskb WHERE kode = '$kodept' AND batal = '0' AND txtperiode1 = '$periode' ORDER BY id DESC";
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            // $row[] = "<button class='btn btn-success btn-xs' id='data_barang' name='data_barang' data-toggle='tooltip' data-placement='top' title='Pilih' onclick='return false'>Pilih</button>";
            $row[] = '<a href="'.site_url('retur_bkb/detail_retur_bkb/'.$hasil->no_ret.'/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Retur BKB" id="btn_detail_barang"> Ubah
                <a href="javascript:;" id="a_batal_bkb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bkb" name="btn_batal_bkb" data-toggle="tooltip" data-placement="top" title="Batal bkb" onClick="konfirmasiBatalReturBKB('.$id.','.$hasil->no_ret.')"> Batal
                    </button>
                </a>
                ';

            $row[] = $no++;
            $row[] = $hasil->no_ret;
            $row[] = $hasil->kpd; //no ba
            $row[] = $hasil->pt;
            $row[] = $hasil->tgl;
            $row[] = $hasil->keperluan; //keterangan
            $row[] = $hasil->bag;
            $row[] = $hasil->tglinput;
            $data[] = $row;
        }
        $count_all = $this->db_logistik_pt->query($query)->num_rows();
            
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;
    }

    function get_list_barang(){
        $no_bkb = $_POST['no_bkb'];
        $no_ref_bkb = $_POST['no_ref_bkb'];

        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebar, nabar, grp, satuan, nobpb FROM keluarbrgitem 
                        WHERE (SKBTXT = '$no_bkb' AND NO_REF = '$no_ref_bkb') AND 
                        (kodebar LIKE '%$keyword%'
                        OR nabar LIKE '%$keyword%'
                        OR grp LIKE '%$keyword%'
                        OR satuan LIKE '%$keyword%'
                        OR nobpb LIKE '%$keyword%')
                        ORDER BY nabar ASC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kodebar, nabar, grp, satuan, nobpb FROM keluarbrgitem WHERE SKBTXT = '$no_bkb' AND NO_REF = '$no_ref_bkb' ORDER BY nabar ASC";
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
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->grp;
            $row[] = $hasil->satuan;
            $row[] = $hasil->nobpb;
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

    function get_list_bkb(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        // $no_bkb = $this->input->post('no_bkb');
        // $no_ref_bkb = $this->input->post('no_ref_bkb');
        $kodept = $this->input->post('kodept');
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, SKBTXT, NO_REF, bag FROM stockkeluar WHERE (batal = '0' AND kode = '$kodept') 
                AND (SKBTXT LIKE '%$keyword%'
                OR NO_REF LIKE '%$keyword%')
                ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, SKBTXT, NO_REF, bag FROM stockkeluar WHERE batal = '0' AND kode = '$kodept' ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = "<button class='btn btn-success btn-xs' id='data_barang' name='data_barang' data-toggle='tooltip' data-placement='top' title='Pilih' onclick='return false'>Pilih</button>";
            $row[] = $no++;
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = $hasil->bag;
            $data[] = $row;
        }
        $count_all = $this->db_logistik_pt->query($query)->num_rows();
            
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;
    }

    function simpan_rinci_bkb(){
        // var_dump($_POST);exit();
        // Error Save Data : array(24) {
          // ["txt_no_bkb"]              => string(7) "7219665"
          // ["txt_no_ref_bkb"]          => string(23) "Est-BKB/swj/11/17/19665"
          // ["txt_tgl_retur"]           => string(10) "10/10/2019"
          // ["txt_no_ba"]               => string(0) ""
          // ["txt_keterangan"]          => string(0) ""
          // ["hidden_kode_pt"]          => string(2) "06"
          // ["hidden_nama_pt"]          => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
          // ["hidden_acc_hutang_usaha"] => string(15) "301000000000000"
          // ["hidden_bagian"]           => string(7) "TANAMAN"
          // ["hidden_kode_barang"]      => string(15) "102505010200015"
          // ["hidden_nama_barang"]      => string(18) "PARAKUAT DIKLORIDA"
          // ["hidden_grup_barang"]      => string(9) "PESTISIDA"
          // ["cmb_afd_unit"]            => string(2) "99"
          // ["cmb_blok_sub"]            => string(3) "K20"
          // ["hidden_ket_beban"]        => string(12) "UPKEEP BAHAN"
          // ["txt_kode_beban"]          => string(15) "700599201102100"
          // ["txt_account_beban"]       => string(15) "700599201102117"
          // ["hidden_no_acc"]           => string(15) "700599201102117"
          // ["hidden_nama_acc"]         => string(22) "RAWAT GAWANGAN CHEMIST"
          // ["txt_qty_retur"]           => string(2) "10"
          // ["hidden_stok_tgl_ini"]     => string(4) "-461"
          // ["hidden_satuan"]           => string(3) "LTR"
          // ["hidden_qty_bkb"]          => string(2) "15"
          // ["txt_ket_rinci"]           => string(21) "Retur BPB No. 7219665"
        // }

        $query_id_retskb = "SELECT MAX(id)+1 as id_retskb FROM retskb";
        $generate_id_retskb = $this->db_logistik_pt->query($query_id_retskb)->row();
        $id_retskb = $generate_id_retskb->id_retskb;
        if(empty($id_retskb)){
            $id_retskb = 1;
        }

        if(empty($this->input->post('hidden_no_ret'))){
            $query_no_ret = "SELECT MAX(no_ret)+1 as no_ret FROM retskb";
            $generate_no_ret = $this->db_logistik_pt->query($query_no_ret)->row();
            $no_ret = $generate_no_ret->no_ret;
            if(empty($no_ret)){
                $no_ret = 1;
            }
        }
        else{
            $no_ret = $this->input->post('hidden_no_ret');
        }

        $query_id_retskbitem = "SELECT MAX(id)+1 as id_retskbitem FROM ret_skbitem";
        $generate_id_retskbitem = $this->db_logistik_pt->query($query_id_retskbitem)->row();
        $id_retskbitem = $generate_id_retskbitem->id_retskbitem;
        if(empty($id_retskbitem)){
            $id_retskbitem = 1;
        }

        $skb = $this->input->post('txt_no_bkb');

        $kodebar = $this->input->post('hidden_kode_barang');
        $tgl = date("Y-m-d",strtotime($this->input->post('txt_tgl_retur')));
        $thn = date("Y",strtotime($this->input->post('txt_tgl_retur')));

        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        $txttgl = date("Ymd",strtotime($this->input->post('txt_tgl_retur')));

        $afd_unit = $this->input->post('cmb_afd_unit');
        $kodept = $this->input->post('hidden_kode_pt');

        $blok = $this->input->post('cmb_blok_sub');

        $data_retskb['id']              = $id_retskb;
        $data_retskb['no_ret']          = $no_ret;
        $data_retskb['tgl']             = $tgl." 00:00:00";
        $data_retskb['skb']             = $skb;
        $data_retskb['tglinput']        = date("Y-m-d H:i:s");
        $data_retskb['txttgl']          = $txttgl;
        $data_retskb['thn']             = $thn;
        $data_retskb['periode1']        = $periode1." 00:00:00";;
        $data_retskb['periode2']        = NULL;
        $data_retskb['txtperiode1']     = $txtperiode;
        $data_retskb['txtperiode2']     = $txtperiode;
        $data_retskb['pt']              = $this->input->post('hidden_nama_pt');
        $data_retskb['kode']            = $kodept;
        $data_retskb['kpd']             = $this->input->post('txt_no_ba');
        $data_retskb['keperluan']       = $this->input->post('txt_keterangan');
        $data_retskb['bag']             = $this->input->post('hidden_bagian');
        $data_retskb['batal']           = "0";
        $data_retskb['alasan_batal']    = NULL;

        $data_retskbitem['id']              = $id_retskbitem;
        $data_retskbitem['no_ret']          = $no_ret;
        $data_retskbitem['kodebar']         = $kodebar;
        $data_retskbitem['kodebartxt']      = $kodebar;
        $data_retskbitem['nabar']           = $this->input->post('hidden_nama_barang');
        $data_retskbitem['satuan']          = $this->input->post('hidden_satuan');
        $data_retskbitem['grp']             = $this->input->post('hidden_grup_barang');
        $data_retskbitem['kodept']          = $kodept;
        $data_retskbitem['pt']              = $this->input->post('hidden_nama_pt');
        $data_retskbitem['afd']             = $afd_unit;
        $data_retskbitem['blok']            = $blok;
        $data_retskbitem['qty']             = $this->input->post('txt_qty_retur');
        $data_retskbitem['tgl']             = $tgl." 00:00:00";
        $data_retskbitem['skb']             = $skb;
        $data_retskbitem['tglinput']        = date("Y-m-d H:i:s");
        $data_retskbitem['txttgl']          = $txttgl;
        $data_retskbitem['thn']             = $thn;
        $data_retskbitem['periode']         = $this->session->userdata('Ymd_periode')." 00:00:00";
        $data_retskbitem['txtperiode']      = $txtperiode;
        $data_retskbitem['ket']             = $this->input->post('txt_ket_rinci');
        $data_retskbitem['kodebeban']       = $this->input->post('txt_kode_beban');
        $data_retskbitem['kodebebantxt']    = $this->input->post('txt_kode_beban');
        $data_retskbitem['ketbeban']        = $this->input->post('hidden_ket_beban');
        $data_retskbitem['kodesub']         = $this->input->post('hidden_no_acc');
        $data_retskbitem['kodesubtxt']      = $this->input->post('hidden_no_acc');
        $data_retskbitem['ketsub']          = $this->input->post('hidden_nama_acc');
        $data_retskbitem['batal']           = "0";
        $data_retskbitem['alasan_batal']    = NULL;

        // var_dump($data_retskb);
        // var_dump($data_retskbitem);
        // exit();

        // Error Save Data : array(16) {
          // ["id"] => string(3) "982"
          // ["no_ret"] => string(3) "616"
          // ["tgl"] => string(19) "1970-01-01 00:00:00"
          // ["skb"] => string(7) "7219665"
          // ["tglinput"] => string(19) "2019-10-10 14:34:43"
          // ["txttgl"] => string(8) "19700101"
          // ["thn"] => string(4) "1970"
          // ["periode1"] => string(19) "2019-10-10 00:00:00"
          // ["periode2"] => NULL
          // ["txtperiode1"] => string(6) "201910"
          // ["txtperiode2"] => string(6) "201910"
          // ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
          // ["kode"] => string(2) "06"
          // ["kpd"] => string(5) "no ba"
          // ["keperluan"] => string(10) "keterangan"
          // ["bag"] => string(7) "TANAMAN"
        // }
        // array(26) {
          // ["id"] => string(4) "1100"
          // ["no_ret"] => string(3) "616"
          // ["kodebar"] => string(15) "102505010200015"
          // ["kodebartxt"] => string(15) "102505010200015"
          // ["nabar"] => string(18) "PARAKUAT DIKLORIDA"
          // ["satuan"] => string(3) "LTR"
          // ["grp"] => string(9) "PESTISIDA"
          // ["kodept"] => string(2) "06"
          // ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
          // ["afd"] => string(2) "99"
          // ["blok"] => string(3) "K20"
          // ["qty"] => string(3) "2.3"
          // ["tgl"] => string(19) "1970-01-01 00:00:00"
          // ["skb"] => string(7) "7219665"
          // ["tglinput"] => string(19) "2019-10-10 14:34:43"
          // ["txttgl"] => string(8) "19700101"
          // ["thn"] => string(4) "1970"
          // ["periode"] => string(19) "2019-10-10 00:00:00"
          // ["txtperiode"] => string(6) "201910"
          // ["ket"] => string(21) "Retur BPB No. 7219665"
          // ["kodebeban"] => string(15) "700599201102100"
          // ["kodebebantxt"] => string(15) "700599201102100"
          // ["ketbeban"] => string(12) "UPKEEP BAHAN"
          // ["kodesub"] => string(15) "700599201102117"
          // ["kodesubtxt"] => string(15) "700599201102117"
          // ["ketsub"] => string(22) "RAWAT GAWANGAN CHEMIST"
        // }

        if(empty($this->input->post('hidden_no_ret'))){
            $this->db_logistik_pt->insert('retskb',$data_retskb);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_retskb = TRUE;
            }
            else{
                $bool_retskb = FALSE;
            }

            $this->db_logistik_pt->insert('ret_skbitem',$data_retskbitem);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_ret_skbitem = TRUE;
            }
            else{
                $bool_ret_skbitem = FALSE;
            }

            $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
            $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
            $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

            $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty_retur') + $curr_QTY_MASUK;
            
            $this->db_logistik_pt->trans_start();
            $this->db_logistik_pt->set($dataedit_stockawal);
            $this->db_logistik_pt->where('kodebartxt', $kodebar);
            $this->db_logistik_pt->where('KODE', $kodept);
            $this->db_logistik_pt->where('txtperiode', $txtperiode);
            $this->db_logistik_pt->update('stockawal');
            $this->db_logistik_pt->trans_complete();

            if ($this->db_logistik_pt->affected_rows() > 0){
                $bool_stockawal = TRUE;
            }
            else{
                if ($this->db_logistik_pt->trans_status() === FALSE)
                {
                    $bool_stockawal = FALSE;
                }
                else {
                    $bool_stockawal = TRUE;
                }
            }

            if ($bool_ret_skbitem === TRUE && $bool_retskb === TRUE && $bool_stockawal === TRUE){
                return array('status' => TRUE, 'skb' => $skb, 'id_retskb' => $id_retskb ,'id_retskbitem' => $id_retskbitem, 'no_ret' => $no_ret);
            }
            else{
                return FALSE;
            }
        }
        else{
            $kodebar    = $this->input->post('hidden_kode_barang');
            $nabar      = $this->input->post('hidden_nama_barang');
            $no_ret     = $this->input->post('hidden_no_ret');
            $skb        = $this->input->post('txt_no_bkb');

            $query = "SELECT * FROM ret_skbitem WHERE afd = '$afd_unit' AND blok = '$blok' AND skb = '$skb' AND no_ret = '$no_ret' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);
        
            if($check_brg->num_rows() > 0){
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada Retur BKB yang sama ***/
            else{
                $this->db_logistik_pt->insert('ret_skbitem',$data_retskbitem);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_ret_skbitem = TRUE;
                }
                else{
                    $bool_ret_skbitem = FALSE;
                }

                $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
                $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
                $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

                $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty_retur') + $curr_QTY_MASUK;

                $this->db_logistik_pt->trans_start();
                $this->db_logistik_pt->set($dataedit_stockawal);
                $this->db_logistik_pt->where('kodebartxt', $kodebar);
                $this->db_logistik_pt->where('KODE', $kodept);
                $this->db_logistik_pt->where('txtperiode', $txtperiode);
                $this->db_logistik_pt->update('stockawal');
                $this->db_logistik_pt->trans_complete();

                if ($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stockawal = TRUE;
                }
                else{
                    if ($this->db_logistik_pt->trans_status() === FALSE)
                    {
                        $bool_stockawal = FALSE;
                    }
                    else {
                        $bool_stockawal = TRUE;
                    }
                }

                if ($bool_ret_skbitem === TRUE && $bool_stockawal === TRUE){
                    return array('status' => TRUE, 'skb' => $skb, 'id_retskbitem' => $id_retskbitem, 'no_ret' => $no_ret);
                }
                else{
                    return FALSE;
                }
            }
        }
    }

    function ubah_rinci_bkb(){
        // var_dump($_POST);exit();
        // Error Update Data : array(33) {
        //   ["txt_no_bkb"] => string(7) "7219665"
        //   ["txt_no_ref_bkb"] => string(23) "Est-BKB/swj/11/17/19665"
        //   ["txt_tgl_retur"] => string(10) "10/11/2019"
        //   ["txt_no_ba"] => string(0) ""
        //   ["txt_keterangan"] => string(0) ""
        //   ["hidden_kode_pt"] => string(2) "06"
        //   ["hidden_nama_pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
        //   ["hidden_acc_hutang_usaha"] => string(15) "301000000000000"
        //   ["hidden_bagian"] => string(7) "TANAMAN"
        //   ["hidden_no_ret"] => string(3) "618"
        //   ["hidden_kode_barang"] => string(15) "102505010200015"
        //   ["hidden_nama_barang"] => string(18) "PARAKUAT DIKLORIDA"
        //   ["hidden_grup_barang"] => string(9) "PESTISIDA"
        //   ["cmb_afd_unit"] => string(2) "99"
        //   ["cmb_blok_sub"] => string(3) "K20"
        //   ["hidden_ket_beban"] => string(12) "UPKEEP BAHAN"
        //   ["txt_kode_beban"] => string(15) "700599201102100"
        //   ["txt_account_beban"] => string(15) "700599201102117"
        //   ["hidden_no_acc"] => string(15) "700599201102117"
        //   ["hidden_nama_acc"] => string(22) "RAWAT GAWANGAN CHEMIST"
        //   ["txt_qty_retur"] => string(1) "1"
        //   ["hidden_stok_tgl_ini"] => string(1) "0"
        //   ["hidden_satuan"] => string(3) "LTR"
        //   ["hidden_qty_bkb"] => string(2) "15"
        //   ["txt_ket_rinci"] => string(21) "Retur BPB No. 7219665"
        //   // ["hidden_id_keluarbrgitem"] => string(9) "undefined"
        //   // ["hidden_no_bkb"] => string(9) "undefined"
        //   // ["hidden_id_stok_keluar"] => string(9) "undefined"
        //   // ["hidden_no_ref_bkb"] => string(9) "undefined"
        //   // ["hidden_no_bpb"] => string(9) "undefined"
        //   // ["hidden_no_ref_bpb"] => string(9) "undefined"
        //   ["hidden_id_retskb"] => string(3) "984"
        //   ["hidden_id_retskbitem"] => string(4) "1102"
        // }

        $id_retskb = $this->input->post('hidden_id_retskb');
        $no_ret = $this->input->post('hidden_no_ret');
        $id_retskbitem = $this->input->post('hidden_id_retskbitem');

        $skb = $this->input->post('txt_no_bkb');

        $kodebar = $this->input->post('hidden_kode_barang');
        $tgl = date("Y-m-d",strtotime($this->input->post('txt_tgl_retur')));
        $thn = date("Y",strtotime($this->input->post('txt_tgl_retur')));

        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        $txttgl = date("Ymd",strtotime($this->input->post('txt_tgl_retur')));

        $afd_unit = $this->input->post('cmb_afd_unit');
        $kodept = $this->input->post('hidden_kode_pt');

        // $data_retskb['id']          = $id_retskb;
        // $data_retskb['no_ret']      = $no_ret;
        $data_retskb['tgl']         = $tgl." 00:00:00";
        $data_retskb['skb']         = $skb;
        $data_retskb['tglinput']    = date("Y-m-d H:i:s");
        $data_retskb['txttgl']      = $txttgl;
        $data_retskb['thn']         = $thn;
        $data_retskb['periode1']    = $periode1." 00:00:00";;
        $data_retskb['periode2']    = NULL;
        $data_retskb['txtperiode1'] = $txtperiode;
        $data_retskb['txtperiode2'] = $txtperiode;
        $data_retskb['pt']          = $this->input->post('hidden_nama_pt');
        $data_retskb['kode']        = $kodept;
        $data_retskb['kpd']         = $this->input->post('txt_no_ba');
        $data_retskb['keperluan']   = $this->input->post('txt_keterangan');
        $data_retskb['bag']         = $this->input->post('hidden_bagian');

        // $data_retskbitem['id']              = $id_retskbitem;
        // $data_retskbitem['no_ret']          = $no_ret;
        $data_retskbitem['kodebar']         = $kodebar;
        $data_retskbitem['kodebartxt']      = $kodebar;
        $data_retskbitem['nabar']           = $this->input->post('hidden_nama_barang');
        $data_retskbitem['satuan']          = $this->input->post('hidden_satuan');
        $data_retskbitem['grp']             = $this->input->post('hidden_grup_barang');
        $data_retskbitem['kodept']          = $kodept;
        $data_retskbitem['pt']              = $this->input->post('hidden_nama_pt');
        $data_retskbitem['afd']             = $afd_unit;
        $data_retskbitem['blok']            = $this->input->post('cmb_blok_sub');
        $data_retskbitem['qty']             = $this->input->post('txt_qty_retur');
        $data_retskbitem['tgl']             = $tgl." 00:00:00";
        $data_retskbitem['skb']             = $skb;
        $data_retskbitem['tglinput']        = date("Y-m-d H:i:s");
        $data_retskbitem['txttgl']          = $txttgl;
        $data_retskbitem['thn']             = $thn;
        $data_retskbitem['periode']         = $this->session->userdata('Ymd_periode')." 00:00:00";
        $data_retskbitem['txtperiode']      = $txtperiode;
        $data_retskbitem['ket']             = $this->input->post('txt_ket_rinci');
        $data_retskbitem['kodebeban']       = $this->input->post('txt_kode_beban');
        $data_retskbitem['kodebebantxt']    = $this->input->post('txt_kode_beban');
        $data_retskbitem['ketbeban']        = $this->input->post('hidden_ket_beban');
        $data_retskbitem['kodesub']         = $this->input->post('hidden_no_acc');
        $data_retskbitem['kodesubtxt']      = $this->input->post('hidden_no_acc');
        $data_retskbitem['ketsub']          = $this->input->post('hidden_nama_acc');

        // Error Update Data : array(16) {
          // ["id"] => string(3) "990"
          // ["no_ret"] => string(3) "624"
          // ["tgl"] => string(19) "2019-10-11 00:00:00"
          // ["skb"] => string(7) "7219665"
          // ["tglinput"] => string(19) "2019-10-11 16:56:13"
          // ["txttgl"] => string(8) "20191011"
          // ["thn"] => string(4) "2019"
          // ["periode1"] => string(19) "2019-10-11 00:00:00"
          // ["periode2"] => NULL
          // ["txtperiode1"] => string(6) "201910"
          // ["txtperiode2"] => string(6) "201910"
          // ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
          // ["kode"] => string(2) "06"
          // ["kpd"] => string(0) ""
          // ["keperluan"] => string(0) ""
          // ["bag"] => string(7) "TANAMAN"
        // }
        // array(26) {
          // ["id"] => string(4) "1110"
          // ["no_ret"] => string(3) "624"
          // ["kodebar"] => string(15) "102505010200012"
          // ["kodebartxt"] => string(15) "102505010200012"
          // ["nabar"] => string(17) "METIL METSULFURON"
          // ["satuan"] => string(2) "KG"
          // ["grp"] => string(9) "PESTISIDA"
          // ["kodept"] => string(2) "06"
          // ["pt"] => string(34) "PT.MULIA SAWIT AGRO LESTARI (SITE)"
          // ["afd"] => string(2) "99"
          // ["blok"] => string(3) "K20"
          // ["qty"] => string(3) "0.1"
          // ["tgl"] => string(19) "2019-10-11 00:00:00"
          // ["skb"] => string(7) "7219665"
          // ["tglinput"] => string(19) "2019-10-11 16:56:13"
          // ["txttgl"] => string(8) "20191011"
          // ["thn"] => string(4) "2019"
          // ["periode"] => string(19) "2019-10-11 00:00:00"
          // ["txtperiode"] => string(6) "201910"
          // ["ket"] => string(24) "Retur BPB No. 7219665 ya"
          // ["kodebeban"] => string(15) "700599201102100"
          // ["kodebebantxt"] => string(15) "700599201102100"
          // ["ketbeban"] => string(12) "UPKEEP BAHAN"
          // ["kodesub"] => string(15) "700599201102117"
          // ["kodesubtxt"] => string(15) "700599201102117"
          // ["ketsub"] => string(22) "RAWAT GAWANGAN CHEMIST"
        // }

        // var_dump($data_retskb);
        // var_dump($data_retskbitem);
        // exit();

        $this->db_logistik_pt->set($data_retskb);
        $this->db_logistik_pt->where('id', $id_retskb);
        $this->db_logistik_pt->where('no_ret', $no_ret);
        // $this->db_logistik_pt->where('skb', $skb);
        $this->db_logistik_pt->update('retskb');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_retskb = TRUE;
        }
        else{
            $bool_retskb = FALSE;
        }

        $this->db_logistik_pt->set($data_retskbitem);
        $this->db_logistik_pt->where('id', $id_retskbitem);
        $this->db_logistik_pt->where('no_ret', $no_ret);
        // $this->db_logistik_pt->where('skb', $skb);
        $this->db_logistik_pt->update('ret_skbitem');
        // var_dump($this->db_logistik_pt->last_query());exit();
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_retskbitem = TRUE;
        }
        else{
            $bool_retskbitem = FALSE;
        }

        $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
        $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
        $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

        $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty_retur') + $curr_QTY_MASUK;

        $this->db_logistik_pt->trans_start();
        $this->db_logistik_pt->set($dataedit_stockawal);
        $this->db_logistik_pt->where('kodebartxt', $kodebar);
        $this->db_logistik_pt->where('KODE', $kodept);
        $this->db_logistik_pt->where('txtperiode', $txtperiode);
        $this->db_logistik_pt->update('stockawal');
        $this->db_logistik_pt->trans_complete();

        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_stockawal = TRUE;
        }
        else{
            $bool_stockawal = FALSE;
        }

        if ($bool_retskbitem === TRUE && $bool_retskb === TRUE  && $bool_stockawal === TRUE){
            return array('status' => TRUE, 'skb' => $skb, 'id_retskb' => $id_retskb ,'id_retskbitem' => $id_retskbitem, 'no_ret' => $no_ret);
        }
        else{
            return FALSE;
        }
    }
}