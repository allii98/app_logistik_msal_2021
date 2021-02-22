<?php

defined('BASEPATH') OR exit('No direct script access allowed');

ini_set('max_execution_time', '0');

class Lap_rinci_stock extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		// $this->load->model('M_bkb');
	}

	public function index(){
		$this->template->utama('V_lap_rinci_stock/vw_lap_rinci_stock_index');
	}

	function get_pt(){
		$sess_lokasi = $this->session->userdata('status_lokasi');

		switch ($sess_lokasi) {
			case 'HO':
				$where = "";
			break;
			case 'RO':
				$where = "WHERE kodetxt IN('02','03','06')";
			break;
			case 'SITE':
				$where = "WHERE kodetxt IN('06','03')";
			break;
			case 'PKS':
				$where = "WHERE kodetxt IN('03')";
			break;
			default:
				# code...
			break;
		}

		$query = "SELECT * FROM pt $where";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	function get_kodebar(){
		// $query = "SELECT kodebartxt, nabar FROM kodebar";
		// $data = $this->db_logistik->query($query)->result();
		$query = "SELECT DISTINCT kodebartxt, nabar FROM stockawal ORDER BY kodebartxt ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data, JSON_PRETTY_PRINT);
	}

	// public function rinci_tampil($kdpt,$kodebarstart,$kodebarfinish,$pilihan){
	public function print_stock(){
		// $pt = $this->input->post('pt');
		// $kd_stock_1 = $this->input->post('kd_stock_1');
		// $kd_stock_2 = $this->input->post('kd_stock_2');
		// $periode = $this->input->post('periode');
		// $pilihan = $this->input->post('pilihan');

		$pt = $this->uri->segment(3);

		$query_alamat = "SELECT lokasi FROM pt WHERE kodetxt = '$pt'";
		$get_alamat_pt = $this->db_logistik_pt->query($query_alamat)->row();


		$kd_stock_1 = $this->uri->segment(4);
		$kd_stock_2 = $this->uri->segment(5);
		$pilihan = $this->uri->segment(7);
		$namapt = urldecode($this->uri->segment(8));
		
		$str_periode = $this->uri->segment(6);
		$periode = str_replace("_", "/", $str_periode);

		$d_periode =  date("j",strtotime($periode));

		if($d_periode >= 26){
			$ym_periode = date('Ym', strtotime($periode." +1 month"));
		}
		else {
			$ym_periode = date('Ym', strtotime($periode));
		}

		$data['kd_stock_1'] = $kd_stock_1;
		$data['kd_stock_2'] = $kd_stock_2;
		$data['pt'] = $pt;
		$data['namapt'] = $namapt;
		$data['alamatpt'] = $get_alamat_pt->lokasi;
		$data['ym_periode'] = $ym_periode;
		$data['periode_str'] = $periode;
		
		if($pilihan == "Rinci"){
			if($kd_stock_1 == "Semua"){
				$query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan FROM stockawal WHERE KODE = '$pt' AND txtperiode = '$ym_periode'";
			}
			else{
				$query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan FROM stockawal WHERE (kodebartxt BETWEEN '$kd_stock_1' AND '$kd_stock_2') AND KODE = '$pt' AND txtperiode = '$ym_periode'";
			}
			$data['stockawal'] = $this->db_logistik_pt->query($query_stockawal)->result();
			$this->load->view('V_lap_rinci_stock/vw_lap_rinci_tampil',$data);
		}
		else if($pilihan == "Summary"){
			$query_stockawal = "SELECT DISTINCT grp FROM stockawal WHERE KODE = '$pt' AND txtperiode = '$ym_periode' ORDER BY grp ASC";
			$data['grp_stockawal'] = $this->db_logistik_pt->query($query_stockawal)->result();
			$this->load->view('V_lap_rinci_stock/vw_lap_summary',$data);
		}
		else if($pilihan == "Nilai_Rupiah"){
			$query_stockawal = "SELECT DISTINCT grp FROM stockawal WHERE KODE = '$pt' AND txtperiode = '$ym_periode' ORDER BY grp ASC";
			// if($kd_stock_1 == "Semua"){
			// 	$query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, HARGAPORAT, nilai_masuk, QTY_MASUK, QTY_KELUAR, saldoakhir_qty, saldoakhir_nilai FROM stockawal WHERE KODE = '$pt' AND txtperiode = '$ym_periode'";
			// }
			// else{
			// 	$query_stockawal = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, HARGAPORAT, nilai_masuk, QTY_MASUK, QTY_KELUAR, saldoakhir_qty, saldoakhir_nilai FROM stockawal WHERE (kodebartxt BETWEEN '$kd_stock_1' AND '$kd_stock_2') AND KODE = '$pt' AND txtperiode = '$ym_periode'";
			// }
			$data['grp_stockawal'] = $this->db_logistik_pt->query($query_stockawal)->result();
			$this->load->view('V_lap_rinci_stock/vw_lap_nilai_rupiah',$data);
		}
		else if($pilihan == "Rupiah_Rata_-_Rata_Harian"){
			$query_stockawal_harian = "SELECT DISTINCT grp FROM stockawal_harian WHERE KODE = '$pt' AND txtperiode = '$ym_periode' ORDER BY grp ASC";
			
			// if($kd_stock_1 == "Semua"){
			// 	$query_stockawal_harian = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, HARGAPORAT, nilai_masuk, QTY_MASUK, QTY_KELUAR, saldoakhir_qty, saldoakhir_nilai, tgl_transaksi, qty_masuk_per_tgl, qty_keluar_per_tgl FROM stockawal_harian WHERE KODE = '$pt' AND txtperiode = '$ym_periode' ORDER BY tgl_transaksi ASC, kodebartxt ASC";
			// }
			// else{
			// 	$query_stockawal_harian = "SELECT kodebartxt, nabar, saldoawal_qty, saldoawal_nilai, KODE, txtperiode, satuan, HARGAPORAT, nilai_masuk, QTY_MASUK, QTY_KELUAR, saldoakhir_qty, saldoakhir_nilai, tgl_transaksi, qty_masuk_per_tgl, qty_keluar_per_tgl FROM stockawal_harian WHERE (kodebartxt BETWEEN '$kd_stock_1' AND '$kd_stock_2') AND KODE = '$pt' AND txtperiode = '$ym_periode' ORDER BY tgl_transaksi ASC, kodebartxt ASC";
			// }
			$data['grp_stockawal_harian'] = $this->db_logistik_pt->query($query_stockawal_harian)->result();
			$this->load->view('V_lap_rinci_stock/vw_lap_nilai_rupiah_harian',$data);
		}
	}
}