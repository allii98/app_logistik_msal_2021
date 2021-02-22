<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set('memory_limit', -1);
ini_set('max_execution_time', '0');

class Lap_spp extends CI_Controller
{
	function __construct(){
		parent::__construct();
		check_session();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->load->model('M_lap_spp');
	}

	function index(){
		$this->template->utama('V_lap_barang/vw_lap_barang_index');
	}

	function list_lap_spp(){
		$data = $this->M_lap_spp->get_lap_spp();
		echo json_encode($data);
	}


	function cetak(){
		$mpdf = new \Mpdf\Mpdf([
				    'mode' => 'utf-8', 
				    'format' => [190, 236], 
				    'setAutoTopMargin' => 'stretch',
				    'orientation' => 'P'
				]);
        
		$query = "SELECT id, kodebartxt, nabar, nopart, satuan FROM kodebar ORDER BY nabar ASC";
		$data['data_barang'] = $this->db_logistik->query($query)->result();

		// $data['data_barang'] = $this->db_logistik->get('kodebar')->result();

        $mpdf->SetHTMLHeader('<h4 align="center">MASTER KODE BARANG</h4>');
        $mpdf->SetHTMLFooter(' {DATE j-m-Y H:i:s} <h5 align="right">Halaman {PAGENO } dari {nb}</h5>');

        $html = $this->load->view('V_lap_barang/vw_lap_barang_print',$data,true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}
}


?>