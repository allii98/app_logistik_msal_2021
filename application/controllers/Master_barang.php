<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_barang extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();
		
		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_master_barang');
	}

	public function index(){
		$this->template->utama('V_master_barang/vw_master_barang_index');
	}

	function list_barang(){
		$data = $this->M_master_barang->get_list_barang();
		echo json_encode($data);
	}

	function get_group_barang(){
		$no_coa = $this->input->post('no_coa');

		$query = "SELECT general FROM noac where noac = '$no_coa'";
		$data_general = $this->db_logistik->query($query)->row();

		$query = "SELECT nama FROM noac where noac = '$data_general->general'";
		$data = $this->db_logistik->query($query)->row();		
		echo json_encode($data);
	}

	function get_satuan(){
		$query = "SELECT DISTINCT kode, satuan FROM satuan ORDER BY satuan ASC";
		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function list_coa(){
		$data = $this->M_master_barang->get_list_coa();
		echo json_encode($data);
	}

	function simpan_barang(){
		$data = $this->M_master_barang->simpan_master_barang();
		echo json_encode($data);
	}

	function detail_barang(){
		$id = $this->input->post('id');
		$kodebar = $this->input->post('kodebar');

		$data = $this->db_logistik->get_where('kodebar', array('id'=> $id, 'kodebartxt' => $kodebar))->row();
		echo json_encode($data);
	}

	function hapus_barang(){
		$id = $this->input->post('id');
		$kodebar = $this->input->post('kodebar');

		$data = $this->db_logistik->delete('kodebar', array('id' => $id, 'kodebartxt' => $kodebar));
		echo json_encode($data);
	}
}