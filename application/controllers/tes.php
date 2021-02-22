<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->db_lokal = $this->load->database('db_lokal',TRUE);
	}

	public function indexxx(){
		$this->template->utama('V_stock_awal/vw_stock_awal_index');
	}

	public function tescoa10digit(){
		ini_set( 'memory_limit', '500M' );
		ini_set('upload_max_filesize', '500M');  
		ini_set('post_max_size', '500M');  
		ini_set('max_input_time', 3600);  
		ini_set('max_execution_time', 3600);

		ini_set("memory_limit","999M");

		// $gd_1 = "G"; 
		// $lvl_1 = "1";
		// $noac_1 = "2200000000"; 
		// $noac_desc_1 = "TANAMAN BELUM MENGHASILKAN";

		$query = "SELECT gd, lvl, noac, noac_desc, rp FROM noac10digit_tes WHERE lvl = '1'";
		// $query = "SELECT gd, lvl, noac, noac_desc, rp FROM noac10digit_tes WHERE lvl = '1' AND gd = 'G' AND noac = '2200000000'";
		$data['get_all_coa10'] = $this->db_lokal->query($query)->result();
		$this->load->view('vw_tes',$data);
	}

	public function tescoa10digit_2(){
		ini_set( 'memory_limit', '500M' );
		ini_set('upload_max_filesize', '500M');  
		ini_set('post_max_size', '500M');  
		ini_set('max_input_time', 3600);  
		ini_set('max_execution_time', 3600);

		ini_set("memory_limit","999M");

		$query = "SELECT gd, lvl, noac, noac_desc, rp FROM noac10digit_tes WHERE lvl = '1'";
		$data['get_all_coa10'] = $this->db_lokal->query($query)->result();
		$this->load->view('vw_tes_2',$data);
	}

}