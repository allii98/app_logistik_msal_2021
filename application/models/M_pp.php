<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pp extends CI_Model {

    function get_list_pp(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
		$periode = $this->session->userdata('ym_periode');
		$periode = "AND txtperiode = ".$periode;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, nopptxt, nopotxt, tglpp, tglpo, ref_po, kode_supplytxt, nama_supply, kepada, bayar, KURS, jumlah, jumlahpo, total_po, terbilang, ket, pt, kodept, periode, user, tglisi, status_vou, no_voutxt, tgl_vou, kasir_bayar, grup, batal FROM pp WHERE batal = '0' $periode AND (nopptxt LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR tglpp LIKE '%$keyword%'
                    OR tglpo LIKE '%$keyword%'
                    OR ref_po LIKE '%$keyword%'
                    OR kode_supplytxt LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, nopptxt, nopotxt, tglpp, tglpo, ref_po, kode_supplytxt, nama_supply, kepada, bayar, KURS, jumlah, jumlahpo, total_po, terbilang, ket, pt, kodept, periode, user, tglisi, status_vou, no_voutxt, tgl_vou, kasir_bayar, grup, batal FROM pp WHERE batal = '0' $periode ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            /*$row[] = $hasil->user == $this->session->userdata('user') ? '<a href="'.site_url('pp/edit_pp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail" id="btn_edit_pp"> Ubah</a>
                <a href="javascript:;" id="a_batal_pp">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_pp" name="btn_batal_pp" data-toggle="tooltip" data-placement="top" title="Batal PP" onClick="konfirmasiBatalPP('.$id.','.$hasil->nopptxt.')"> Batal
                    </button>
                </a>
                <a href="'.site_url('pp/cetak/'.$hasil->nopptxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_po"> Cetak
                </a>
                ' : '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';*/
			
			$row[] = '<a href="'.site_url('pp/edit_pp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail" id="btn_edit_pp"> Ubah</a>
                <a href="javascript:;" id="a_batal_pp">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_pp" name="btn_batal_pp" data-toggle="tooltip" data-placement="top" title="Batal PP" onClick="konfirmasiBatalPP('.$id.','.$hasil->nopptxt.')"> Batal
                    </button>
                </a>
                <a href="'.site_url('pp/cetak/'.$hasil->nopptxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_po"> Cetak
                </a>' ;			

            $row[] = $no++;
            $row[] = $hasil->nopptxt;
            $row[] = $hasil->nopotxt;
            $row[] = $hasil->tglpp;
            $row[] = $hasil->tglpo;
            $row[] = $hasil->ref_po;
            $row[] = $hasil->nama_supply; 
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

    function get_list_po(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
		$periode = $this->session->userdata('ym_periode');
		$periode = "AND periodetxt = ".$periode;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            // $query = "SELECT id, DATE(tglpo) as tglpo, nopotxt, noreftxt, kode_supply, nama_supply, FORMAT(totalbayar,0) as totalbayar, bayar, grup FROM po WHERE (batal = '0') AND
            $query = "SELECT id, DATE(tglpo) as tglpo, nopotxt, noreftxt, kode_supply, nama_supply, FORMAT(totalbayar,0) as totalbayar, bayar, grup, terbayar FROM po WHERE (batal = '0') $periode AND (terbayar IN ('0','2') OR terbayar IS NULL)
                    AND (tglpo LIKE '%$keyword%'
                    OR noreftxt LIKE '%$keyword%'
                    OR kode_supply LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR bayar LIKE '%$keyword%'
                    OR totalbayar LIKE '%$keyword%')
                ORDER BY id DESC";
                var_dump($query);exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, DATE(tglpo) as tglpo, nopotxt, noreftxt, kode_supply, nama_supply, totalbayar, bayar, grup, terbayar FROM po WHERE (batal = '0') $periode AND (terbayar IN ('0','2') OR terbayar IS NULL) ORDER BY id DESC";
            // $query = "SELECT id, DATE(tglpo) as tglpo, nopotxt, noreftxt, kode_supply, nama_supply, totalbayar, bayar, grup FROM po WHERE (batal = '0') ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $ref_po = $hasil->noreftxt;

            $query_kurs = "SELECT DISTINCT kurs FROM item_po WHERE nopo = '$hasil->nopotxt' AND noref = '$ref_po'";
            $get_kurs = $this->db_logistik_pt->query($query_kurs)->row();

            $query_harga_po = "SELECT SUM(harga*qty) AS hargapo FROM item_po WHERE noref = '$ref_po'";
            $get_harga_po = $this->db_logistik_pt->query($query_harga_po)->row();

            // $query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$ref_po'";
            $query_jumlah_sudah_bayar = "SELECT SUM(kasir_bayar) AS kasir_bayar FROM pp where ref_po = '$ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();

            $query_jumlah_bpo = "SELECT SUM(JUMLAHBPO) AS jumlahbpo FROM item_po where noref = '$ref_po'";
            $get_jumlah_bpo = $this->db_logistik_pt->query($query_jumlah_bpo)->row();
			
			$hpo = number_format($get_harga_po->hargapo);
			$kb = number_format($get_jumlah_sudah_bayar->kasir_bayar);

            $row[] = $hasil->tglpo;
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->nopotxt;
            $row[] = $hasil->kode_supply;
            $row[] = $hasil->nama_supply;
            $row[] = $hasil->bayar; 
            // $row[] = number_format($hasil->totalbayar);
            $row[] = number_format($get_harga_po->hargapo);
            $row[] = number_format($get_jumlah_bpo->jumlahbpo);
            $row[] = number_format($get_jumlah_sudah_bayar->kasir_bayar);
            $row[] = number_format(($hasil->totalbayar) - $get_jumlah_sudah_bayar->kasir_bayar);
            // $row[] = number_format($get_jumlah_sudah_bayar->jumlah);
            // $row[] = number_format(($hasil->totalbayar+$get_jumlah_bpo->jumlahbpo) - $get_jumlah_sudah_bayar->jumlah);
            $row[] = $get_kurs->kurs;
            $row[] = $hasil->grup;
            //$row[] = $hasil->terbayar;
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

    function simpan_pp(){
        $query_id_pp = "SELECT MAX(id)+1 as id_pp FROM pp";
        $generate_id_pp = $this->db_logistik_pt->query($query_id_pp)->row();
        $id_pp = $generate_id_pp->id_pp;
        if(empty($id_pp)){
            $id_pp = 1;
        }

        $sess_lokasi = $this->session->userdata('status_lokasi');

        if($sess_lokasi == "HO"){
            $dig_1 = "1";
            $dig_2 = "1";
        }
        else if($sess_lokasi == "SITE"){
            $dig_1 = "6";
            $dig_2 = "6";
        }
        else if($sess_lokasi == "RO"){
            $dig_1 = "2";
            $dig_2 = "2";
        }
        else if($sess_lokasi == "PKS"){
            $dig_1 = "3";
            $dig_2 = "3";
        }

        $query_no_pp = "SELECT MAX(SUBSTR(nopptxt,3,4)) AS max_id_pp FROM pp ORDER BY id DESC";
        $generate_id_pp = $this->db_logistik_pt->query($query_no_pp)->row();
        $noUrut_pp = (int)($generate_id_pp->max_id_pp);
        $noUrut_pp++;
        $print_pp = sprintf("%04s", $noUrut_pp);

        if(empty($this->input->post('hidden_no_pp'))){
            $nopp = $dig_1.$dig_2.$print_pp;
        }
        else{
            $nopp = $this->input->post('hidden_no_pp');
        }

        $tglpp = date("Y-m-d H:i:s",strtotime($this->input->post('txt_tgl_pp')));
        $tglpptxt = date("Ymd",strtotime($this->input->post('txt_tgl_pp')));
        $tglpo = date("Y-m-d H:i:s",strtotime($this->input->post('txt_tgl_po')));
        $tglpotxt = date("Ymd",strtotime($this->input->post('txt_tgl_po')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode = date("Y-m-d",strtotime($this->session->userdata('periode')));
        // $txtperiode = date("Ym",strtotime($this->session->userdata('periode')));

        if(!empty($this->input->post('txt_tgl_voucher'))){
            $tgl_vou = date("Y-m-d",strtotime($this->input->post('txt_tgl_voucher')));
            $tgl_voutxt = date("Ymd",strtotime($this->input->post('txt_tgl_voucher')));
        }
        else{
            $tgl_vou = NULL;
            $tgl_voutxt = NULL;
        }

        if($this->input->post('txt_no_voucher')){
            $no_vou = $this->input->post('txt_no_voucher');
        }
        else{
            $no_vou = NULL;
        }

        // Error Save Data : array(22) {
        //   ["hidden_no_pp"]=>string(0) ""
        //   ["txt_no_ref_po"]=>string(25) "FAC/BWJ/JKT/03/19/6100001"
        //   ["hidden_no_po"]=>string(7) "6100001"
        //   ["hidden_grup"]=>string(0) ""
        //   ["txt_tgl_pp"]=>string(10) "04/20/2019"
        //   ["txt_tgl_po"]=>string(10) "03/28/2019"
        //   ["txt_pembayaran"]=>string(4) "Cash"
        //   ["txt_kode_supplier"]=>string(4) "0003"
        //   ["txt_supplier"]=>string(16) "ABADI JAYA, TOKO"
        //   ["txt_nilai_po"]=>string(8) "17256000"
        //   ["txt_pajak"]=>string(1) "0"
        //   ["txt_nilai_bpo1"]=>string(1) "0"
        //   ["txt_nilai_bpo2"]=>string(1) "0"
        //   ["txt_total_po"]=>string(8) "17256000"
        //   ["txt_dibayar_ke"]=>string(10) "dibayar ke"
        //   ["txt_jumlah"]=>string(8) "17256000"
        //   ["txt_terbilang"]=>string(47) "Tujuh Belas Juta Dua Ratus Lima Puluh Enam Ribu"
        //   ["txt_keterangan"]=>string(14) "keterangan all"
        //   ["hidden_main_account"]=>string(0) ""
        //   ["hidden_nama_account"]=>string(0) ""
        //   ["txt_no_voucher"]=>string(10) "no voucher"
        //   ["txt_tgl_voucher"]=>string(10) "04/20/2019"
        // }
        $jumlah = $this->input->post('txt_jumlah');
        $total_po = $this->input->post('txt_total_po');
        
        $data_pp['id']              = $id_pp;
        $data_pp['nopp']            = $nopp;
        $data_pp['nopptxt']         = $nopp;
        $data_pp['nopo']            = $this->input->post('hidden_no_po');
        $data_pp['nopotxt']         = $this->input->post('hidden_no_po');
        $data_pp['tglpp']           = $tglpp;
        $data_pp['tglpptxt']        = $tglpptxt;
        $data_pp['tglpo']           = $tglpo;
        $data_pp['tglpotxt']        = $tglpotxt;
        $data_pp['ref_po']          = $this->input->post('txt_no_ref_po');
        $data_pp['kode_supply']     = $this->input->post('txt_kode_supplier');
        $data_pp['kode_supplytxt']  = $this->input->post('txt_kode_supplier');
        $data_pp['nama_supply']     = $this->input->post('txt_supplier');
        $data_pp['kepada']          = $this->input->post('txt_dibayar_ke');
        $data_pp['bayar']           = $this->input->post('txt_pembayaran');
        $data_pp['KURS']            = $this->input->post('hidden_kurs');
        $data_pp['jumlah']          = $jumlah;
        $data_pp['pajak']           = $this->input->post('txt_pajak');
        $data_pp['jumlahpo']        = $this->input->post('txt_nilai_po');
        $data_pp['KODE_BPO']        = $this->input->post('txt_nilai_bpo1');
        $data_pp['jumlah_bpo']      = $this->input->post('txt_nilai_bpo2');
        $data_pp['total_po']        = $total_po;
        $data_pp['terbilang']       = $this->input->post('txt_terbilang');
        $data_pp['ket']             = $this->input->post('txt_keterangan');
        // $data_pp['pt']              = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pp['pt']              = $this->session->userdata('pt');
        $data_pp['kodept']          = $this->session->userdata('kode_pt');
        $data_pp['periode']         = $periode." 00:00:00";
        $data_pp['txtperiode']      = $txtperiode;
        $data_pp['user']            = $this->session->userdata('user');
        $data_pp['tglisi']          = date("Y-m-d H:i:s");
        $data_pp['status_vou']      = "0";
		// $data_pp['status_vou']      = "1";
        $data_pp['no_vou']          = $no_vou;
        $data_pp['no_voutxt']       = $no_vou;
        $data_pp['tgl_vou']         = $tgl_vou;
        $data_pp['tgl_voutxt']      = $tgl_voutxt;
        $data_pp['tgl_bayar_real']  = NULL;
        $data_pp['kasir_bayar']     = $this->input->post('txt_jumlah');
        $data_pp['kode_budget']     = "0";
        $data_pp['grup']            = $this->input->post('hidden_grup');
        $data_pp['main_account']    = $this->input->post('hidden_main_account');
        $data_pp['nama_account']    = $this->input->post('hidden_nama_account');
        $data_pp['batal']           = "0";

        $query_id_logistik_caba = "SELECT max(id)+1 as new_id FROM pp_logistik";
        $data_logistik_caba = $this->db_caba->query($query_id_logistik_caba)->row();

        $id_pplogistik_caba = $data_logistik_caba->new_id;
        if(empty($data_logistik_caba->new_id)){
            $id_pplogistik_caba = "1";
        }

        $data_pplogistikdicaba['id']                = $id_pplogistik_caba;
        $data_pplogistikdicaba['RM']                = "0";
        $data_pplogistikdicaba['nopp']              = $nopp;
        $data_pplogistikdicaba['nopptxt']           = $nopp;
        $data_pplogistikdicaba['nopo']              = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['nopotxt']           = $this->input->post('hidden_no_po');
        $data_pplogistikdicaba['ref_po']            = $this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['tglpp']             = $tglpp;
        $data_pplogistikdicaba['tglpptxt']          = $tglpptxt;
        $data_pplogistikdicaba['tglpo']             = $tglpo;
        $data_pplogistikdicaba['tglpotxt']          = $tglpotxt;
        $data_pplogistikdicaba['kode_supply']       = $this->input->post('txt_kode_supplier');
        $data_pplogistikdicaba['kode_supplytxt']    = $this->input->post('txt_kode_supplier');
        $data_pplogistikdicaba['nama_supply']       = $this->input->post('txt_supplier');
        $data_pplogistikdicaba['kepada']            = $this->input->post('txt_dibayar_ke');
        $data_pplogistikdicaba['bayar']             = $this->input->post('txt_pembayaran');
        $data_pplogistikdicaba['jumlah']            = $jumlah;
        $data_pplogistikdicaba['PAJAK']             = $this->input->post('txt_pajak');
        $data_pplogistikdicaba['COA_PAJAK']         = NULL;
        $data_pplogistikdicaba['jumlahpo']          = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['HARGAPO']           = $this->input->post('txt_nilai_po');
        $data_pplogistikdicaba['terbilang']         = $this->input->post('txt_terbilang');
        $data_pplogistikdicaba['ket']               = $this->input->post('txt_keterangan');
        // $data_pplogistikdicaba['pt']                = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $data_pplogistikdicaba['pt']                = $this->session->userdata('pt');
        $data_pplogistikdicaba['kodept']            = $this->session->userdata('kode_pt');
        $data_pplogistikdicaba['periode']           = $periode." 00:00:00";
        $data_pplogistikdicaba['txtperiode']        = $txtperiode;
        $data_pplogistikdicaba['user']              = $this->session->userdata('user');
        $data_pplogistikdicaba['tglisi']            = date("Y-m-d H:i:s");
        $data_pplogistikdicaba['status_vou']        = "0";
		// $data_pplogistikdicaba['status_vou']        = "1";
        $data_pplogistikdicaba['no_vou']            = $no_vou;
        $data_pplogistikdicaba['no_voutxt']         = $no_vou;
        $data_pplogistikdicaba['tgl_vou']           = $tgl_vou;
        $data_pplogistikdicaba['tgl_voutxt']        = $tgl_voutxt;
        $data_pplogistikdicaba['TGL_BAYAR_REAL']    = NULL;
        $data_pplogistikdicaba['kode_budget']       = "0";
        $data_pplogistikdicaba['grup']              = $this->input->post('hidden_grup');
        $data_pplogistikdicaba['main_account']      = $this->input->post('hidden_main_account');
        $data_pplogistikdicaba['nama_account']      = $this->input->post('hidden_nama_account');
        $data_pplogistikdicaba['jum_bpo']           = $this->input->post('txt_nilai_bpo2');
        $data_pplogistikdicaba['kode_bpo']          = $this->input->post('txt_nilai_bpo1');
        $data_pplogistikdicaba['ket_bpo']           = "Biaya atas PO:".$this->input->post('txt_no_ref_po');
        $data_pplogistikdicaba['batal']             = "0";

        if(empty($this->input->post('hidden_no_pp'))){
            $this->db_logistik_pt->insert('pp',$data_pp);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_pp = TRUE;
            }
            else {
                $bool_pp = FALSE;
            }

            $data_pp['keterangan_transaksi'] = "INSERT";
            $data_pp['log'] = $this->session->userdata('user')." membuat PP baru $nopp";
            $data_pp['tgl_transaksi'] = date('Y-m-d H:i:s');
            $data_pp['user_transaksi'] = $this->session->userdata('user');
            $data_pp['client_ip'] = $this->input->ip_address();
            $data_pp['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('pp_history',$data_pp);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_pp_history = TRUE;
            }
            else{
                $bool_pp_history = FALSE;
            }

            $this->db_caba->insert('pp_logistik',$data_pplogistikdicaba);
            if($this->db_caba->affected_rows() > 0){
                $bool_pp_logistik_caba = TRUE;
            }
            else{
                $bool_pp_logistik_caba = FALSE;
            }
			
            $no_ref_po = $this->input->post('txt_no_ref_po');
            $query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$no_ref_po'";
            $get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();

            // var_dump($get_jumlah_sudah_bayar->jumlah);
            // var_dump($total_po);
            // exit();

            // if($get_jumlah_sudah_bayar->jumlah >=  $total_po){ // jika jumlah dibayar sama dengan total po, maka update flag terbayar dan nopp di tabel po
                // $data_po['terbayar'] = 1;
                // $data_po['nopp'] = $nopp;

                // $this->db_logistik_pt->set($data_po);
                // $this->db_logistik_pt->where('nopotxt', $this->input->post('hidden_no_po'));
                // $this->db_logistik_pt->where('noreftxt', $no_ref_po);
                // $this->db_logistik_pt->update('po');
                // if ($this->db_logistik_pt->affected_rows() > 0){
                    // $bool_po = TRUE;
                // }
                // else{
                    // $bool_po = FALSE;
                // }

                // if ($bool_pp === TRUE && $bool_pp_history === TRUE && $bool_po === TRUE){
                    // return array('status' => TRUE, 'nopp' => $nopp);
                // }
                // else{
                    // return FALSE;
                // }
            // }
            // else{
                if ($bool_pp === TRUE && $bool_pp_history === TRUE){
                    return array('status' => TRUE, 'nopp' => $nopp, 'que'=>$data_pplogistikdicaba);
                }
                else{
                    return FALSE;
                }
				 
				//return array('status' => TRUE, 'nopp' => $nopp, 'que'=>$data_pplogistikdicaba);
            // }
        }else{
            $id_pp = $this->input->post('id_pp');
            $no_pp = $this->input->post('hidden_no_pp');

            $user = $this->session->userdata('user');
            $ip = $this->input->ip_address();
            $platform = $this->platform->agent();

            $query_1 = "INSERT INTO pp_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)','$user mengupdate PP $no_pp', NOW(), '$user', '$ip', '$platform' FROM pp a WHERE a.id = $id_pp AND a.nopptxt = $no_pp";
            // var_dump($query_1);exit();
            $this->db_logistik_pt->query($query_1);
            if($this->db_logistik_pt->affected_rows() > 0){
                $bool_pp_history = TRUE;
            }
            else {
                $bool_pp_history = FALSE;
            }

            $this->db_caba->set($data_pplogistikdicaba);
            $this->db_caba->where('id', $id_pp);
            $this->db_caba->where('nopptxt', $no_pp);
            $this->db_caba->update('pp_logistik');
            if ($this->db_caba->affected_rows() > 0){
                $bool_pp = TRUE;
            }
            else{
                $bool_pp = FALSE;
            }

            $this->db_logistik_pt->set($data_pp);
            $this->db_logistik_pt->where('id', $id_pp);
            $this->db_logistik_pt->where('nopptxt', $no_pp);
            $this->db_logistik_pt->update('pp');
            if ($this->db_logistik_pt->affected_rows() > 0){
                $bool_pp = TRUE;
            }
            else{
                $bool_pp = FALSE;
            }

            if ($bool_pp_history === TRUE && $bool_pp === TRUE){
                return array('status' => TRUE);
            }
            else{
                return FALSE;
            }
        }
    }
}
