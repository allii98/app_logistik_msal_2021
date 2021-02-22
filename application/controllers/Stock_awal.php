<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_awal extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_stock_awal');
	}

	public function index(){
		$this->template->utama('V_stock_awal/vw_stock_awal_index');
	}

	function simpan_stock(){
		$data = $this->M_stock_awal->simpan_stock();
		echo json_encode($data);
	}

	function detail_stock(){
		$id = $this->input->post('id');
		$kodebar = $this->input->post('kodebar');

		$data = $this->db_logistik_pt->get_where('stockawal', array('id'=> $id, 'kodebartxt' => $kodebar))->row();
		echo json_encode($data);
	}

	function list_barang(){
		$data = $this->M_stock_awal->get_list_barang();
		echo json_encode($data);
	}

	function list_stock_awal(){
		$data = $this->M_stock_awal->get_list_stock_awal();
		echo json_encode($data);
	}
}