<?php
date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class List_function extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->db_msal_personalia = $this->load->database('db_msal_personalia',TRUE);
		$this->load->model('M_bpb');
	}

	function sum_stok(){
		$id = $this->input->post('kodbar');
		$sess_kode_pt = $this->session->userdata('kode_pt');

		$ym_periode  = $this->session->userdata('ym_periode');
		$query_stockawal = "SELECT saldoawal_qty, QTY_MASUK, QTY_KELUAR, QTY_ADJMASUK, QTY_ADJKELUAR FROM stockawal WHERE KODE = '$sess_kode_pt' AND kodebartxt = '$id' AND txtperiode = '$ym_periode'";

		$stockawal = $this->db_logistik_pt->query($query_stockawal);
		$stockawal_numrow = $stockawal->num_rows();
		
		if($stockawal_numrow == "0"){
			$get_saldoawal_qty = "0";
			$data = FALSE;
		}
		else {
			$get_stockawal = $stockawal->row();
			$get_saldoawal_qty = $get_stockawal->saldoawal_qty;
			$get_QTY_MASUK = $get_stockawal->QTY_MASUK;
			$get_QTY_KELUAR = $get_stockawal->QTY_KELUAR;
			$get_QTY_ADJMASUK = $get_stockawal->QTY_ADJMASUK;
			$get_QTY_ADJKELUAR = $get_stockawal->QTY_ADJKELUAR;

			$query_masuk = "SELECT SUM(qty) as totqtymasuk FROM masukitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kdpt = '$sess_kode_pt'";

			$summasuk = $this->db_logistik_pt->query($query_masuk)->row();
			
			$totqtymasuk = $summasuk->totqtymasuk;
			if(empty($summasuk->totqtymasuk)){
				$totqtymasuk = "0";
			}

			$query_retskbitem = "SELECT SUM(qty) as totqtyretskbitem FROM ret_skbitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kodept = '$sess_kode_pt'";

			$sumretskbitem = $this->db_logistik_pt->query($query_retskbitem)->row();
			
			$totqtyretskbitem = $sumretskbitem->totqtyretskbitem;
			if(empty($sumretskbitem->totqtyretskbitem)){
				$totqtyretskbitem = "0";
			}

			$query_keluar = "SELECT SUM(qty2) as totqtykeluar FROM keluarbrgitem WHERE kodebartxt = '$id' AND kodept = '$sess_kode_pt' AND txtperiode = '$ym_periode' AND BATAL = '0'";
			$sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

			$totqtykeluar = $sumkeluar->totqtykeluar;
			if(empty($sumkeluar->totqtykeluar)){
				$totqtykeluar = "0";
			}

			$data = ($get_saldoawal_qty+$totqtymasuk+$totqtyretskbitem) - $totqtykeluar;
		}
		echo json_encode($data);
	}

	// function sum_stok_retur_bkb(){
	// 	$id = $this->input->post('kodbar');
	// 	$sess_kode_pt = $this->session->userdata('kode_pt');

	// 	$ym_periode  = $this->session->userdata('ym_periode');
	// 	$query_stockawal = "SELECT saldoawal_qty, QTY_MASUK, QTY_KELUAR, QTY_ADJMASUK, QTY_ADJKELUAR FROM stockawal WHERE KODE = '$sess_kode_pt' AND kodebartxt = '$id' AND txtperiode = '$ym_periode'";
		
	// 	$stockawal = $this->db_logistik_pt->query($query_stockawal);
	// 	$stockawal_numrow = $stockawal->num_rows();
		
	// 	if($stockawal_numrow == "0"){
	// 		$get_saldoawal_qty = "0";
	// 		$data = FALSE;
	// 	}
	// 	else {
	// 		$get_stockawal = $stockawal->row();
	// 		$get_saldoawal_qty = $get_stockawal->saldoawal_qty;
	// 		$get_QTY_MASUK = $get_stockawal->QTY_MASUK;
	// 		$get_QTY_KELUAR = $get_stockawal->QTY_KELUAR;
	// 		$get_QTY_ADJMASUK = $get_stockawal->QTY_ADJMASUK;
	// 		$get_QTY_ADJKELUAR = $get_stockawal->QTY_ADJKELUAR;

	// 		$query_masuk = "SELECT SUM(qty) as totqtymasuk FROM masukitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kdpt = '$sess_kode_pt'";
	// 		$summasuk = $this->db_logistik_pt->query($query_masuk)->row();
			
	// 		$totqtymasuk = $summasuk->totqtymasuk;
	// 		if(empty($summasuk->totqtymasuk)){
	// 			$totqtymasuk = "0";
	// 		}

	// 		$query_keluar = "SELECT SUM(qty2) as totqtykeluar FROM keluarbrgitem WHERE kodebartxt = '$id' AND kodept = '$sess_kode_pt' AND txtperiode = '$ym_periode' AND BATAL = '0'";
	// 		$sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

	// 		$totqtykeluar = $sumkeluar->totqtykeluar;
	// 		if(empty($sumkeluar->totqtykeluar)){
	// 			$totqtykeluar = "0";
	// 		}

	// 		$data = ($get_saldoawal_qty+$totqtymasuk) - $totqtykeluar;

	// 	}
	// 	echo json_encode($data);
	// }

}