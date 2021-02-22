<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stock_awal extends CI_Model {

    function get_list_barang(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebar, kodebartxt, nabar, grp, satuan FROM kodebar 
                        WHERE kodebar LIKE '%$keyword%'
                        OR nabar LIKE '%$keyword%'
                        OR grp LIKE '%$keyword%'
                        ORDER BY inputtgl DESC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kodebar, kodebartxt, nabar, grp, satuan FROM kodebar ORDER BY inputtgl DESC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = $hasil->id;
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nabar;
            $row[] = $hasil->grp;
            $row[] = $hasil->satuan;
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

    function simpan_stock(){
        // var_dump($_POST);
        // var_dump($_SESSION);
        // exit();
        // array(10) {
        //   ["txt_kode_barang"]=>string(15) "102505170000253"
        //   ["txt_nama_barang"]=>string(38) "HOSE HP 3/4 BSP X 480MM  PN 35AP/DA048"
        //   ["txt_satuan"]=>string(3) "PCS"
        //   ["txt_grup"]=>string(25) "SPARE PART BACKHOE LOADER"
        //   ["txt_min_stock_qty"]=>string(1) "5"
        //   ["txt_saldo_awal_nilai"]=>string(6) "200000"
        //   ["txt_saldo_awal_qty"]=>string(2) "20"
        //   ["txt_saldo_akhir_qty"]=>string(2) "20"
        //   ["txt_saldo_akhir_nilai"]=>string(6) "200000"
        //   ["txt_keterangan_stock_awal"]=>string(14) "tes keterangan"
        // }
        $query_id = "SELECT MAX(id)+1 as no_id FROM stockawal";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $no_id = $generate_id->no_id;
        if(empty($no_id)){
            $no_id = 1;
        }
        else {
            $no_id = $generate_id->no_id;
        }

        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode = date("Y-m-d",strtotime($this->session->userdata('periode')));
        // $txtperiode = date("Ym",strtotime($this->session->userdata('periode')));

        $pt = $this->session->userdata('pt');
        $KODE = $this->session->userdata('kode_pt');
        $kodebar = $this->input->post('txt_kode_barang');

        $data_input_stock_awal["id"] = $no_id;
		$data_input_stock_awal["pt"] = $pt;
        // $data_input_stock_awal["pt"] = $this->session->userdata('app_pt');
        $data_input_stock_awal["KODE"] = $KODE;
        $data_input_stock_awal["afd"] = "-";
        $data_input_stock_awal["kodebar"] = $kodebar;
        $data_input_stock_awal["kodebartxt"] = $kodebar;
        $data_input_stock_awal["nabar"] = $this->input->post('txt_nama_barang');
        $data_input_stock_awal["satuan"] = $this->input->post('txt_satuan');
        $data_input_stock_awal["grp"] = $this->input->post('txt_grup');
        $data_input_stock_awal["saldoawal_qty"] = $this->input->post('txt_saldo_awal_qty');
        $data_input_stock_awal["saldoawal_nilai"] = $this->input->post('txt_saldo_awal_nilai');
        $data_input_stock_awal["tglinput"] = date("Y-m-d H:i:s");
        $data_input_stock_awal["thn"] = date("Y");
        $data_input_stock_awal["saldoakhir_qty"] = $this->input->post('txt_saldo_akhir_qty');
        $data_input_stock_awal["saldoakhir_nilai"] = $this->input->post('txt_saldo_akhir_nilai');
        // $data_input_stock_awal["nilai_masuk"] = $this->input->post('');
        // $data_input_stock_awal["QTY_MASUK"] = $this->input->post('');
        // $data_input_stock_awal["QTY_KELUAR"] = $this->input->post('');
        // $data_input_stock_awal["QTY_ADJMASUK"] = $this->input->post('');
        // $data_input_stock_awal["QTY_ADJKELUAR"] = $this->input->post('');
        // $data_input_stock_awal["HARGAPORAT"] = $this->input->post('');
        $data_input_stock_awal["periode"] = $periode." 00:00:00";
        $data_input_stock_awal["txtperiode"] = $txtperiode;
        $data_input_stock_awal["ket"] = $this->input->post('txt_keterangan_stock_awal');
        $data_input_stock_awal["account"] = "-";
        $data_input_stock_awal["ket_account"] = "-";
        $data_input_stock_awal["minstok"] = $this->input->post('txt_min_stock_qty');

        if(empty($this->input->post('hidden_id'))){
            $get_stock_awal = $this->db_logistik_pt->get_where('stockawal', array('pt' => $pt, 'KODE' => $KODE, 'kodebartxt' => $kodebar, 'txtperiode' => $txtperiode ));
            if($get_stock_awal->num_rows() > 0){
                return "barang_sudah_ada_di_stok_awal";
            }
            else {
                $this->db_logistik_pt->insert('stockawal',$data_input_stock_awal);
                if($this->db_logistik_pt->affected_rows() > 0){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }
        }
        else{
            $id = $this->input->post('hidden_id');

            $data_input_stock_awal["id"]   = $id;

            $this->db_logistik_pt->set($data_input_stock_awal);
            $this->db_logistik_pt->where('id', $id);
            $this->db_logistik_pt->update('stockawal');
            if ($this->db_logistik_pt->affected_rows() > 0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }

    function get_list_stock_awal(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebartxt, nabar, satuan, grp, saldoawal_qty, saldoawal_nilai, saldoakhir_qty, saldoakhir_nilai, ket, minstok FROM stockawal 
                        WHERE kodebartxt LIKE '%$keyword%'
                        OR nabar LIKE '%$keyword%'
                        OR satuan LIKE '%$keyword%'
                        OR grp LIKE '%$keyword%'
                        OR saldoawal_qty LIKE '%$keyword%'
                        OR saldoawal_nilai LIKE '%$keyword%'
                        OR saldoakhir_qty LIKE '%$keyword%'
                        OR saldoakhir_nilai LIKE '%$keyword%'
                        OR ket LIKE '%$keyword%'
                        OR minstok LIKE '%$keyword%'
                        ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kodebartxt, nabar, satuan, grp, saldoawal_qty, saldoawal_nilai, saldoakhir_qty, saldoakhir_nilai, ket, minstok FROM stockawal ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = $hasil->id;
            $row[] = '<a href="javascript:;" class="btn btn-info fa fa-info btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Barang" id="btn_detail_barang" onclick="detail_barang('.$hasil->kodebartxt.','.$id.')"> Detail</a>
                <!--a href="javascript:;" class="btn btn-danger fa fa-trash btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus Barang" id="btn_hapus_barang" onclick="konfirmasi_hapus('.$hasil->kodebartxt.','.$id.')"> Hapus</a-->
                ';
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
            $row[] = $hasil->nabar;
            $row[] = $hasil->satuan;
            $row[] = $hasil->grp;
            $row[] = $hasil->saldoawal_qty;
            $row[] = $hasil->saldoawal_nilai;
            $row[] = $hasil->saldoakhir_qty;
            $row[] = $hasil->saldoakhir_nilai;
            $row[] = $hasil->ket;
            $row[] = $hasil->minstok;
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
}
