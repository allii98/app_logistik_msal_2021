<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

ini_set('max_execution_time', '0');
ini_set('memory_limit', '-1');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
		$this->load->model('M_dashboard');
	}

	function index()
	{
		$this->load->model('M_spp');
		$this->load->model('M_bkb');
		$this->load->model('M_bpb');
		$this->load->model('M_lpb');
		$periode = $this->session->userdata('ym_periode');

		$data['count_ppo_0'] 			= $this->M_spp->get_list_waiting();
		$data['count_ppo_1'] 			= $this->M_spp->get_list_approved();
		// $data['count_ppo_0'] 			= "0";
		// $data['count_ppo_1'] 			= "0";
		$data['count_po'] 				= $this->db_logistik_pt->get_where('po', ['periodetxt' => $periode, 'batal' => '0'])->num_rows();
		$data['count_stokmasuk_0']		= $this->M_lpb->get_list_approved();
		$data['count_stokmasuk']		= $this->M_lpb->get_list_waiting();
		$data['count_bpb'] 				= $this->M_bpb->get_list_approved();
		$data['count_bpb_0'] 			= $this->M_bpb->get_list_waiting();
		$data['count_stockkeluar'] 		= $this->M_bkb->get_list_waiting();
		$data['count_stockkeluar_1'] 	= $this->M_bkb->get_list_approved();
		$data['count_pp'] 				= $this->db_logistik_pt->get_where('pp', ['txtperiode' => $periode])->num_rows();

		$this->template->utama('V_dashboard/vw_dashboard_index', $data);
	}

	function get_list_bkb_mutasi()
	{
		$data = $this->M_dashboard->get_list_bkb_mutasi();
		echo json_encode($data);
	}

	function get_bkb_mutasi()
	{
		$SKBTXT = $this->input->post('no_bkb');
		$NO_REF = $this->input->post('no_ref_bkb');

		$query_stockkeluar_mutasi = "SELECT * FROM stockkeluar_mutasi WHERE (SKBTXT = '$SKBTXT' AND NO_REF = '$NO_REF') AND (flag_lpb IS NULL OR flag_lpb = '0')";
		$query_keluarbrgitem_mutasi = "SELECT * FROM keluarbrgitem_mutasi WHERE (SKBTXT = '$SKBTXT' AND NO_REF = '$NO_REF') AND (flag_lpb IS NULL OR flag_lpb = '0')";

		$data_stockkeluar_mutasi = $this->db_logistik_pt->query($query_stockkeluar_mutasi)->row();
		$keluarbrgitem_mutasi = $this->db_logistik_pt->query($query_keluarbrgitem_mutasi)->result();
		// $data_stockkeluar_mutasi = $this->db_logistik_pt->get_where('stockkeluar_mutasi', array('SKBTXT' => $SKBTXT, 'NO_REF' => $NO_REF))->row();
		// $keluarbrgitem_mutasi = $this->db_logistik_pt->get_where('keluarbrgitem_mutasi', array('SKBTXT' => $SKBTXT, 'NO_REF' => $NO_REF))->result();

		// var_dump($query_keluarbrgitem_mutasi);
		// exit();

		$data_keluarbrgitem_mutasi = [];
		foreach ($keluarbrgitem_mutasi as $list_keluarbrgitem_mutasi) {
			$no_ref_lpb = $list_keluarbrgitem_mutasi->NO_REF;

			// $query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE kodebartxt = '$list_keluarbrgitem_mutasi->kodebartxt' AND nopotxt = '$SKBTXT'";
			$query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE kodebartxt = '$list_keluarbrgitem_mutasi->kodebartxt' AND nopotxt = '$SKBTXT' AND noref = '$no_ref_lpb'";
			$data_sisa_qty_lpb = $this->db_logistik_pt->query($query_sisa_qty_lpb)->row();

			if (empty($data_sisa_qty_lpb->qty_lpb)) {
				$data_sisa_qty_lpb->qty_lpb = "0";
			}

			$sisa_qty = number_format($list_keluarbrgitem_mutasi->qty - $data_sisa_qty_lpb->qty_lpb, 0);

			$get_keluarbrgitem_mutasi = [];
			$get_keluarbrgitem_mutasi['kodebartxt'] = $list_keluarbrgitem_mutasi->kodebartxt;
			$get_keluarbrgitem_mutasi['nabar'] = $list_keluarbrgitem_mutasi->nabar;
			$get_keluarbrgitem_mutasi['qty2'] = $list_keluarbrgitem_mutasi->qty2;
			$get_keluarbrgitem_mutasi['satuan'] = $list_keluarbrgitem_mutasi->satuan;
			$get_keluarbrgitem_mutasi['grp'] = $list_keluarbrgitem_mutasi->grp;
			$get_keluarbrgitem_mutasi['ket'] = $list_keluarbrgitem_mutasi->ket;
			$get_keluarbrgitem_mutasi['sisa_qty'] = $sisa_qty;
			$data_keluarbrgitem_mutasi[] = $get_keluarbrgitem_mutasi;
		}

		$data = array('data_stockkeluar_mutasi' => $data_stockkeluar_mutasi, 'data_keluarbrgitem_mutasi' => $data_keluarbrgitem_mutasi);
		echo json_encode($data);
	}

	function ubah_session_ymd()
	{
		if (isset($_POST['periode_ubah'])) {
			$periode = $this->input->post('periode_ubah');

			$d_periode =  date("j", strtotime($periode));

			if ($d_periode >= 26) {
				$ym_periode = date('Ym', strtotime($periode . " +1 month"));
			} else {
				$ym_periode = date('Ym', strtotime($periode));
			}

			$Ymd_periode =  date('Y-m-d', strtotime($periode));

			$this->session->set_userdata(array(
				'periode' => $periode,
				'ym_periode' => $ym_periode,
				'Ymd_periode' => $Ymd_periode,
			));

			$data = TRUE;
		} else {
			$data = FALSE;
		}
		echo json_encode($data);
	}
}
