<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();
		
		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_manage_user');
	}

	public function index(){
		$this->template->utama('V_manage_user/vw_manage_user_index');
	}

	function list_user(){
		$data = $this->M_manage_user->get_list_user();
		echo json_encode($data);
	}

	function get_level(){
		$query = "SELECT DISTINCT kode_level, level FROM user ORDER BY level ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function simpan_user(){
		$data = $this->M_manage_user->simpan_manage_user();
		echo json_encode($data);
	}

	function detail_user(){
		$no = $this->input->post('no');
		$username = $this->input->post('username');

		$data = $this->db_logistik_pt->get_where('user', array('no'=> $no, 'username' => $username))->row();
		echo json_encode($data);
	}

	function hapus_user(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');

		$data = $this->db_logistik_pt->delete('user', array('no' => $id, 'username' => $username));
		echo json_encode($data);
	}

	function check_username(){
		$username = $this->input->post('username');
		$get_username = $this->db_logistik_pt->get_where('user', array('username' => $username ));
		$count = $get_username->num_rows();
		echo json_encode($count);
	}
}