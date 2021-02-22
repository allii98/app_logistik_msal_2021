<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Retur_lpb extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_retur_lpb');
	}

	function index(){
		// $this->template->utama('V_retur_lpb/vw_retur_index');
		show_404();
	}

	function input(){
		$namapt = $this->session->userdata('pt');
		$kode_pt = $this->session->userdata('kode_pt');

		$query_pt= "SELECT kodetxt, PT FROM pt WHERE kodetxt IN ('03','06')";
		$data['get_pt'] = $this->db_logistik_pt->query($query_pt)->result();
		// PT.MULIA SAWIT AGRO LESTARI (SITE) // 06
		// PT.MULIA SAWIT AGRO LESTARI (PKS) // 03
		// PT.MULIA SAWIT AGRO LESTARI (HO) // 01
		// PT.MULIA SAWIT AGRO LESTARI (RO) // 02

		$query_acc_hutang_dagang = "SELECT noac, nama FROM noac WHERE noac = '301000000000000'";
		$data['get_acc_hutang_dagang'] = $this->db_logistik->query($query_acc_hutang_dagang)->row();
		$this->template->utama('V_retur_lpb/vw_retur_lpb_input',$data);
	}

	function get_lpb(){
		$no_lpb = $this->input->post('txt_no_lpb');
		$no_ref_lpb = $this->input->post('txt_ref_lpb');

		$data_stokmasuk = $this->db_logistik_pt->get_where('stokmasuk', array('ttgtxt'=>$no_lpb));
		$count_stokmasuk = $data_stokmasuk->num_rows();
		if($count_stokmasuk == "0"){
			echo("LPB tidak ditemukan");
			exit();
		}
		$get_stokmasuk = $data_stokmasuk->row();

		$no_po = $get_stokmasuk->nopotxt;
		$no_ref_po = $get_stokmasuk->refpo;

		$query_po = "SELECT tglpo FROM po WHERE nopotxt = '$no_po' AND noreftxt = '$no_ref_po'";
		$data_po = $this->db_logistik_pt->query($query_po);
		$count_po = $this->db_logistik_pt->query($query_po)->num_rows();
		if($count_po == "0"){
			echo("Data PO tidak ditemukan");
			exit();
		}
		$get_po = $this->db_logistik_pt->query($query_po)->row();

		echo json_encode(array('data_stokmasuk' => $get_stokmasuk, 'data_po' => $get_po ));
	}

	function get_list_barang(){
		$data = $this->M_retur_lpb->get_list_barang();
		echo json_encode($data);
	}

	function get_detail_barang(){
		$no_lpb = $this->input->post('no_lpb');
		$no_ref_lpb = $this->input->post('no_ref_lpb');
		$kodebar = $this->input->post('kodebar');
		$nabar = $this->input->post('nabar');

		$data = $this->db_logistik_pt->get_where('masukitem', array('ttgtxt'=>$no_lpb,'noref'=>$no_ref_lpb,'kodebar'=>$kodebar, 'nabar'=>$nabar, 'BATAL'=>'0'))->row();
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	function simpan_rinci_lpb(){
		$data = $this->M_retur_lpb->simpan_rinci_lpb();
		echo json_encode($data);
	}
}