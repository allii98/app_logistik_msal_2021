<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set('memory_limit', -1);
ini_set('max_execution_time', '0');
ini_set("pcre.backtrack_limit", "5000000");

class Lap_barang extends CI_Controller
{
	function __construct(){
		parent::__construct();
		check_session();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->load->model('M_lap_barang');
	}

	function index(){
		$this->template->utama('V_lap_barang/vw_lap_barang_index');
	}

	function list_lapbarang(){
		$data = $this->M_lap_barang->get_lap_barang();
		echo json_encode($data);
	}


	function cetak(){
		$mpdf = new \Mpdf\Mpdf([
				    'mode' => 'utf-8', 
				    'format' => [190, 236], 
				    'setAutoTopMargin' => 'stretch',
				    'orientation' => 'P'
				]);

		$query_grp = "SELECT DISTINCT grp FROM  kodebar ORDER BY grp ASC LIMIT 100";
		$data['data_grp'] = $this->db_logistik->query($query_grp)->result();
        
		$query = "SELECT id, kodebartxt, nabar, nopart, satuan FROM kodebar ORDER BY nabar ASC LIMIT 100";
		$data['data_barang'] = $this->db_logistik->query($query)->result();
		
		// var_dump(json_decode($this->list_barang()));exit();
		// $data['data_barang'] = json_decode($this->list_barang());


        $mpdf->SetHTMLHeader('<h4 align="center">MASTER KODE BARANG</h4>');
        $mpdf->SetHTMLFooter('<h5 align="left">{DATE j-m-Y H:i:s} - '.$this->input->ip_address().' - '.$this->platform->agent().'</h5> <h5 align="right">Halaman {PAGENO} dari {nb}</h5>');

        $html = $this->load->view('V_lap_barang/vw_lap_barang_print',$data,true);
        // $html = $this->load->view('V_lap_barang/vw_lap_barang_print',null,TRUE);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

	function list_barang(){
		$query = "SELECT id, kodebartxt, nabar, nopart, satuan FROM kodebar ORDER BY nabar ASC";
		$data = $this->db_logistik->query($query)->result();

		// echo json_encode($data, JSON_PRETTY_PRINT);
		// echo json_decode($data, JSON_PRETTY_PRINT);
		return json_encode($data, JSON_PRETTY_PRINT);
		// return json_decode($data);
	}
}


?>