<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// $this->session->sess_destroy();
		// var_dump($_SESSION);exit();
		check_session();
		// unset($_SESSION['status_lokasi']);
		// $this->session->set_userdata(array(
		// 	'user' => 'Arman',
		// 	'status_lokasi' => 'PKS', //HO, RO, SITE, PKS
		// 	'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
		// 	'level' => 'User',
		// 	'kode_level' => '31',
		// 		//11. KTU, 
		// 		//12. Kasie HRD GA, 
		// 		//13. Kasie Agronomi, 
		// 		//14. Kasie Pabrik, 
		// 		//15. GM, s/t/d
		// 		//16. Mill Manager, s/t
		// 		//17. Pimpinan Dept., 
		// 		//21. Dept. Head, s/t
		// 		//22. Dir. Ops, 
		// 		//23. Dept. Head Purchasing, 
		// 		//24. Dir. Purchasing s/t
		// 		//31. User HO Pembuat SPP
		// 		//32. User RO Pembuat SPP
		// 		//33. User SITE Pembuat SPP
		// 		//34. User PKS Pembuat SPP
		// ));
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik', TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
		$this->load->model('M_spp');
	}

	public function index()
	{
		$this->template->utama('V_spp/vw_spp_index_baru');
	}

	function list_spp()
	{
		$data = $this->M_spp->get_list_spp();
		echo json_encode($data);
	}

	function list_sppitem()
	{
		$data = $this->M_spp->get_list_sppitem();
		echo json_encode($data);
	}

	function list_approval()
	{
		$url = $this->uri->segment(3);
		if ($url == 0)
			$data = $this->M_spp->get_list_approval();
		else
			$data = $this->M_spp->get_list_approval($url);
		echo json_encode($data);
	}
	function list_approval_baru()
	{
		$url = $this->uri->segment(3);
		if ($url == 0)
			$data = $this->M_spp->get_list_approval_baru();
		else
			$data = $this->M_spp->get_list_approval_baru($url);
		echo json_encode($data);
	}

	function input()
	{
		unset($_SESSION['kodebarTelahDipilih']);
		// $this->template->utama('V_spp/vw_spp_input');
		$this->template->utama('V_spp/vw_spp_input_baru');
	}

	function simpan_rinci_spp()
	{
		$data = $this->M_spp->simpan_rinci_spp();
		echo json_encode($data);
	}

	function ubah_rinci_spp()
	{
		$data = $this->M_spp->ubah_rinci_spp();
		echo json_encode($data);
	}

	function approval()
	{
		// $kode_level_sesi = $this->session->userdata('kode_level');
		// switch ($kode_level_sesi) {
		// 	case '11' :
		// 	case '12' :
		// 	case '13' :
		// 	case '14' :
		// 	case '15' :
		// 	case '16' :
		// 	case '21' :
		// 	case '22' :
		// 	case '23' :
		// 	case '24' :
		// 	case '25' :
		// 	case '26' :
		// 	case '27' :
		// 	case '17' :
		$url = $this->uri->segment(3);
		if ($url == 1) {
			$data['url'] = $url;
			$this->template->utama('V_spp/vw_spp_approval_baru', $data);
		} else {
			$data['url'] = 0;
			$this->template->utama('V_spp/vw_spp_approval_baru', $data);
		}
		// 		break;
		// 	default :
		// 		echo "<script>alert('Maaf Anda tidak memiliki akses !')</script>";
		// 		redirect(site_url('spp'));
		// 		break;
		// }
	}

	function approvall()
	{
		$this->template->utama('V_spp/vw_spp_approvall');
	}

	// function opsi_cmb_divisi(){
	// 	if($this->session->userdata('status_lokasi') == 'HO' || $this->session->userdata('status_lokasi') == 'RO'){
	// 		$query = "SELECT kode, PT from pt WHERE kodetxt IN ('01','02','03','06') ORDER BY kode ASC ";
	// 	}
	// 	else if($this->session->userdata('status_lokasi') == 'SITE' || $this->session->userdata('status_lokasi') == 'PKS'){
	// 		$query = "SELECT kode, PT from pt WHERE kodetxt IN ('03','06') ORDER BY kode ASC ";
	// 	}

	// 	$data = $this->db_logistik_pt->query($query)->result();
	// 	echo json_encode($data);
	// }

	function cari_dept()
	{
		$query = "SELECT kode, nama FROM dept ORDER BY kode ASC";

		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function cari_devisi()
	{
		$lokasi = $this->session->userdata('status_lokasi');
		if ($lokasi == 'SITE') {
			$query = "SELECT PT, kodetxt FROM pt_copy WHERE kodetxt IN ('06', '07') ORDER BY kodetxt ASC";
		} else if ($lokasi == 'HO') {
			$query = "SELECT PT, kodetxt FROM pt_copy ORDER BY kodetxt ASC";
		} else {
			$query = "SELECT PT, kodetxt FROM pt_copy WHERE PT LIKE '%$lokasi%' ORDER BY kodetxt ASC";
		}

		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function cari_bagian()
	{
		$query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function list_barang()
	{
		$data = $this->M_spp->get_list_barang();
		echo json_encode($data);
	}

	function get_kodebar()
	{
		$row_id = $this->input->post('row_id');

		// $allData = array(
		//          	'kodebarTelahDipilih'  => $row_id,
		//       );

		// if($this->session->userdata("kodebarTelahDipilih")){
		//           $kodebarTelahDipilih = $this->session->userdata("kodebarTelahDipilih");
		//       }
		//       else{
		//           $kodebarTelahDipilih = array();
		//       }

		//       array_push($kodebarTelahDipilih,$allData);
		//       $this->session->set_userdata("kodebarTelahDipilih",$kodebarTelahDipilih);

		$query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar WHERE kodebar = '$row_id'";
		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function data_barang()
	{
		$id = $this->input->post('id');
		$query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar WHERE id = '$id'";
		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function sum_stok()
	{
		$id = $this->input->post('kodbar');

		$ym_periode  = $this->session->userdata('ym_periode');
		$query_stockawal = "SELECT saldoawal_qty FROM stockawal WHERE kodebartxt = '$id' AND txtperiode = '$ym_periode'";
		// $query_stockawal = "SELECT saldoawal_qty FROM stockawal WHERE kodebartxt = '$id' AND tglinput = (SELECT MIN(tglinput) FROM stockawal WHERE kodebartxt = '$id')";

		$stockawal = $this->db_logistik_pt->query($query_stockawal)->row();

		if (empty($stockawal)) {
			$get_stockawal = "0";
		} else {
			$get_stockawal = $stockawal->saldoawal_qty;
		}

		$query_masuk = "SELECT SUM(qty) as stokmasuk FROM masukitem WHERE kodebartxt = '$id'";
		$summasuk = $this->db_logistik_pt->query($query_masuk)->row();

		$query_keluar = "SELECT SUM(qty2) as stokkeluar FROM keluarbrgitem WHERE kodebartxt = '$id'";
		$sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

		$data = ($get_stockawal + $summasuk->stokmasuk) - $sumkeluar->stokkeluar;
		// $data = $summasuk->stokmasuk - $sumkeluar->stokkeluar;
		echo json_encode($data);
	}

	function generate_ppo()
	{
		$query = "SELECT MAX(noppo)+1 as noppo FROM ppo";
		$data = $this->db_logistik_pt->query($query)->row();
		echo json_encode($data);
	}

	function cancel_ubah_rinci()
	{
		$id_ppo = $this->input->post('hidden_id_ppo');
		$id_ppo_item = $this->input->post('hidden_id_ppo_item');

		$query = "SELECT id, noppo, noppotxt, kodebar, kodebartxt, nabar, qty, stok, sat, ket FROM item_ppo WHERE id = '$id_ppo_item'";

		$data = $this->db_logistik_pt->query($query)->result();

		echo json_encode($data);
	}

	function hapus_rinci()
	{
		$id_ppo = $this->input->post('hidden_id_ppo');
		$id_ppo_item = $this->input->post('hidden_id_ppo_item');

		$get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
		$get_item_ppo = $this->db_logistik_pt->get_where('item_ppo', array('id' => $id_ppo_item))->row();

		$no_ppo = $get_ppo->noppotxt;
		$no_ref_ppo = $get_ppo->noreftxt;
		$item_ppo_kodebar = $get_item_ppo->kodebartxt;
		$item_ppo_nabar = $get_item_ppo->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO item_ppo_history SELECT null, a.*,'DATA SEBELUM DIHAPUS', '$user menghapus barang $item_ppo_kodebar|$item_ppo_nabar pada SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM item_ppo a WHERE a.id = $id_ppo_item";

		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_itemppohistory = TRUE;
		} else {
			$bool_itemppohistory = FALSE;
		}

		$data_delete = $this->db_logistik_pt->delete('item_ppo', array('id' => $id_ppo_item));

		if ($bool_itemppohistory === TRUE && $data_delete === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}
		echo json_encode($data);
	}

	function edit_spp()
	{
		$this->template->utama('V_spp/vw_spp_edit');
	}

	function get_edit_spp()
	{
		$id = $this->input->post('id');

		$query_ppo = "SELECT * FROM ppo WHERE id = '$id'";
		$data_ppo = $this->db_logistik_pt->query($query_ppo)->row();

		$noppo = $data_ppo->noppotxt;

		$query_item_ppo = "SELECT * FROM item_ppo WHERE noppotxt = '$noppo'";
		$data_item_ppo = $this->db_logistik_pt->query($query_item_ppo)->result();

		$data = array(
			'ppo' => $data_ppo,
			'item_ppo' => $data_item_ppo
		);

		echo json_encode($data);
	}

	function get_detail_spp()
	{
		$id = $this->input->post('id');
		// $query = "SELECT id, noppo, noppotxt, kodebartxt, nabar, sat, qty, harga, ket, status, po, stok FROM item_ppo WHERE noppotxt = '$id'";
		$query = "SELECT * FROM v_list_item_approval WHERE noppotxt = '$id' ORDER BY  nabar ASC";
		$data = $this->db_logistik_pt->query($query)->result();

		// foreach ($data_spp as $key => $value) {
		// 	# code...
		// }
		// $query_approval = "SELECT * FROM item_ppo_approval_history WHERE `level` = 'GM' AND kode_level = '15' AND tgl_approval = (SELECT MAX(tgl_approval) FROM item_ppo_approval_history)";
		// $get_approval = $this->db_logistik_pt->query($query_approval);

		// if($get_approval->num_rows() > 0){
		// 	$
		// }


		echo json_encode($data);
	}

	function konfirmasi_approval()
	{
		$nospp = $this->input->post('nospp');
		$norefspp = $this->input->post('norefspp');
		$kodebar = $this->input->post('kodebar');
		$jabatan = str_replace(' ', '', $this->input->post('jabatan'));
		$approval = $this->input->post('approval');
		$nabar = base64_decode($this->input->post('nabar'));
		// $n = $this->input->post('n');

		switch ($jabatan) {
			case 'KasieGudang':
				if ($approval == 'mengetahui') {
					$dataedit_approval['kasie_gudang'] = '3';
				}
				$dataedit_approval['tgl_kasie_gudang'] = date('Y-m-d H:i:s');
				break;
			case 'Purchasing':
				if ($approval == 'setuju') {
					$dataedit_approval['purchasing'] = '1';
				} elseif ($approval == 'tidaksetuju') {
					$dataedit_approval['purchasing'] = '2';
				}
				$dataedit_approval['tgl_purchasing'] = date('Y-m-d H:i:s');
				break;
			default:
				break;
		}
		$this->db_logistik_pt->where('noppotxt', $nospp);
		$this->db_logistik_pt->where('noreftxt', $norefspp);
		$this->db_logistik_pt->where('kodebartxt', $kodebar);
		$this->db_logistik_pt->where('nabar', $nabar);
		$this->db_logistik_pt->update('approval_spp', $dataedit_approval);
		// if ($this->db_logistik_pt->affected_rows() > 0) {
		// 	$bool_approval_spp = TRUE;
		// } else {
		// 	$bool_approval_spp = FALSE;
		// }
		$dataapprovalitem['status'] = 'DISETUJUI';
		$dataapprovalitem['status2'] = '1';
		$this->db_logistik_pt->set($dataapprovalitem);
		$this->db_logistik_pt->where('noppotxt', $nospp);
		$this->db_logistik_pt->where('noreftxt', $norefspp);
		$this->db_logistik_pt->update('item_ppo');

		$count_item_spp = $this->db_logistik_pt->get_where('item_ppo', ['noppotxt' => $nospp, 'noreftxt' => $norefspp])->num_rows();
		$count_appr_spp = $this->db_logistik_pt->get_where('approval_spp', ['purchasing !=' => '0'])->num_rows();
		// $count_appr_spp_terima = $this->db_logistik_pt->get_where('approval_spp', ['purchasing' => '1'])->num_rows();
		// $count_appr_spp_tolak = $this->db_logistik_pt->get_where('approval_spp', ['purchasing' => '2'])->num_rows();
		if ($count_item_spp == $count_appr_spp) {
			$dataapproval['status'] = 'DISETUJUI';
			$dataapproval['status2'] = '1';
			$this->db_logistik_pt->set($dataapproval);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->where('noreftxt', $norefspp);
			$this->db_logistik_pt->update('ppo');
			echo json_encode(TRUE);
		}
		// if ($bool_approval_spp === TRUE) {
		// 	echo json_encode(TRUE);
		// } else {
		// 	return FALSE;
		// }
	}

	function rev_qty()
	{
		$id = $this->input->post('id');
		$noppotxt = $this->input->post('noppotxt');

		// $get_ppo = $this->db_logistik_pt->get_where('ppo',array('id' => $id_ppo))->row();
		$get_item_ppo = $this->db_logistik_pt->get_where('item_ppo', array('id' => $id))->row();

		$no_ppo = $get_item_ppo->noppotxt;
		$no_ref_ppo = $get_item_ppo->noreftxt;
		$item_ppo_kodebar = $get_item_ppo->kodebartxt;
		$item_ppo_nabar = $get_item_ppo->nabar;
		$qty_sblm_revisi = $get_item_ppo->qty;
		$satuan = $get_item_ppo->sat;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();
		$lokasi = $this->session->userdata('status_lokasi');

		$query = "INSERT INTO item_ppo_history SELECT null, a.*,'DATA SEBELUM REV QTY', '$user melakukan revisi qty pada barang $item_ppo_kodebar|$item_ppo_nabar dengan qty sebelum di revisi $qty_sblm_revisi $satuan', NOW(), '$user', '$ip', '$platform' FROM item_ppo a WHERE a.id = $id";

		$this->db_logistik_pt->query($query);
		// var_dump($this->db_logistik_pt->last_query());exit();
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_itemppohistory = TRUE;
		} else {
			$bool_itemppohistory = FALSE;
		}

		$dataedit['qty'] = $this->input->post('qty');
		$dataedit['nama_main'] = $this->input->post('alasan');

		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id);
		$this->db_logistik_pt->where('noppotxt', $noppotxt);
		$this->db_logistik_pt->update('item_ppo');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			$data_update = TRUE;
		} else {
			$data_update = FALSE;
		}

		$query = "INSERT INTO item_ppo_approval_history SELECT null,
					a.id,
					a.noppotxt,
					a.noreftxt,
					a.kodebartxt,
					a.nabar,
					a.qty,
					null,
					null,
					null,
					null,
					null,
					null,
					'$lokasi',
					'DATA SEBELUM REV QTY', 
					'$user melakukan revisi qty pada barang $item_ppo_kodebar|$item_ppo_nabar dengan qty sebelum di revisi $qty_sblm_revisi $satuan',
					NOW(), '$user', '$ip', '$platform' FROM item_ppo_approval a WHERE a.no_id_item_ppo = $id AND noppotxt = $noppotxt";
		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$insert_item_ppo_approval_history = TRUE;
		} else {
			$insert_item_ppo_approval_history = FALSE;
		}


		$dataupdate_itemppoapproval['flag_waiting_ktu']			= NULL;
		$dataupdate_itemppoapproval['nama_approval_ktu']		= NULL;
		$dataupdate_itemppoapproval['tgl_approval_ktu']			= NULL;
		$dataupdate_itemppoapproval['status_ktu'] 				= NULL;
		$dataupdate_itemppoapproval['status2_ktu']				= NULL;
		$dataupdate_itemppoapproval['status_lokasi_ktu']		= NULL;
		$dataupdate_itemppoapproval['flag_waiting_kasie']		= NULL;
		$dataupdate_itemppoapproval['nama_approval_kasie']		= NULL;
		$dataupdate_itemppoapproval['tgl_approval_kasie']		= NULL;
		$dataupdate_itemppoapproval['status_kasie'] 			= NULL;
		$dataupdate_itemppoapproval['status2_kasie']			= NULL;
		$dataupdate_itemppoapproval['status_lokasi_kasie']		= NULL;
		// $dataupdate_itemppoapproval['kode_level_kasie']			= NULL;
		$dataupdate_itemppoapproval['flag_waiting_gm'] 			= NULL;
		$dataupdate_itemppoapproval['nama_approval_gm'] 		= NULL;
		$dataupdate_itemppoapproval['tgl_approval_gm'] 			= NULL;
		$dataupdate_itemppoapproval['status_gm'] 				= NULL;
		$dataupdate_itemppoapproval['status2_gm'] 				= NULL;
		$dataupdate_itemppoapproval['status_lokasi_gm'] 		= NULL;
		$dataupdate_itemppoapproval['flag_waiting_mill_mgr'] 	= NULL;
		$dataupdate_itemppoapproval['nama_approval_mill_mgr'] 	= NULL;
		$dataupdate_itemppoapproval['tgl_approval_mill_mgr'] 	= NULL;
		$dataupdate_itemppoapproval['status_mill_mgr'] 			= NULL;
		$dataupdate_itemppoapproval['status_lokasi_mill_mgr'] 	= NULL;
		$dataupdate_itemppoapproval['status2_mill_mgr'] 		= NULL;
		$dataupdate_itemppoapproval['flag_waiting_dept_head'] 	= NULL;
		$dataupdate_itemppoapproval['nama_approval_dept_head'] 	= NULL;
		$dataupdate_itemppoapproval['tgl_approval_dept_head'] 	= NULL;
		$dataupdate_itemppoapproval['status_dept_head'] 		= NULL;
		$dataupdate_itemppoapproval['status2_dept_head'] 		= NULL;
		$dataupdate_itemppoapproval['status_lokasi_dept_head'] 	= NULL;
		$dataupdate_itemppoapproval['flag_waiting_dir_ops'] 	= NULL;
		$dataupdate_itemppoapproval['nama_approval_dir_ops'] 	= NULL;
		$dataupdate_itemppoapproval['tgl_approval_dir_ops'] 	= NULL;
		$dataupdate_itemppoapproval['status_dir_ops'] 			= NULL;
		$dataupdate_itemppoapproval['status2_dir_ops'] 			= NULL;
		$dataupdate_itemppoapproval['status_lokasi_dir_ops'] 	= NULL;

		$this->db_logistik_pt->set($dataupdate_itemppoapproval);
		$this->db_logistik_pt->where('no_id_item_ppo', $id);
		$this->db_logistik_pt->where('noppotxt', $noppotxt);
		$this->db_logistik_pt->update('item_ppo_approval');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			$update_itemppoapproval = TRUE;
		} else {
			$update_itemppoapproval = FALSE;
		}

		if ($bool_itemppohistory === TRUE && $data_update === TRUE && $insert_item_ppo_approval_history === TRUE && $update_itemppoapproval === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function _checkApproval($nospp, $norefppo)
	{
		$level = $this->session->userdata('level');
		$kode_level = $this->session->userdata('kode_level');
		$substr_refppo = substr($norefppo, 0, 3);
		//11. KTU, 
		//12. Kasie HRD GA, 
		//13. Kasie Agronomi, 
		//14. Kasie Pabrik, 
		//15. GM, s/t
		//16. Mill Manager, s/t
		//17. Pimpinan Dept., 
		//21. Dept. Head, s/t
		//22. Dir. Ops, 
		//23. Dept. Head Purchasing, 
		//24. Dir. Purchasing s/t
		// if($this->session->userdata('status_lokasi') == "PKS"){
		if ($substr_refppo == "FAC") {
			switch ($kode_level) {
				case "11":
				case "12":
				case "13":
				case "14":
				case "15":
				case "22":
					$status = "DIKETAHUI";
					$status2 = "4";
					$status3 = NULL;
					$status4 = NULL;
					break;
				case "16":
				case "21":
					$status = "DISETUJUI";
					$status2 = "1";
					$status3 = "TIDAK DISETUJUI";
					$status4 = "3";
					break;
				default:
					break;
			}
		}
		// if($this->session->userdata('status_lokasi') == "SITE"){
		if ($substr_refppo == "EST") {
			switch ($kode_level) {
				case "11":
				case "12":
				case "13":
				case "22":
					$status = "DIKETAHUI";
					$status2 = "4";
					$status3 = NULL;
					$status4 = NULL;
					break;
				case "15":
				case "21":
					$status = "DISETUJUI";
					$status2 = "1";
					$status3 = "TIDAK DISETUJUI";
					$status4 = "3";
					break;
				default:
					break;
			}
		}
		// if($this->session->userdata('status_lokasi') == "HO" || $this->session->userdata('status_lokasi') == "RO"){
		if ($substr_refppo == "PST" || $substr_refppo == "ROM") {
			switch ($kode_level) {
				case "22":
				case "23":
					$status = "DIKETAHUI";
					$status2 = "4";
					$status3 = NULL;
					$status4 = NULL;
					break;
				case "21":
					$status = "DISETUJUI";
					$status2 = "1";
					$status3 = "TIDAK DISETUJUI";
					$status4 = "3";
					break;
				default:
					break;
			}
		}
		return array($status, $status2, $status3, $status4);
	}

	function setuju()
	{
		$id = $this->input->post('id');
		$nospp = $this->input->post('nospp');
		$norefppo = $this->input->post('norefppo');

		$query_item = "SELECT id, noppotxt, noreftxt, kodebartxt, nabar, qty FROM item_ppo WHERE id = '$id' AND noppotxt = '$nospp' AND noreftxt='$norefppo'";
		$data_queryitem = $this->db_logistik_pt->query($query_item)->row();

		$checkAppr = $this->_checkApproval($nospp, $norefppo);
		$status = $checkAppr[0];
		$status2 = $checkAppr[1];

		$level = $this->session->userdata('level');
		$kode_level = $this->session->userdata('kode_level');

		// $dataapproval['id']               = $data[''];
		$dataapproval['no_id_item_ppo']   	= $id;
		$dataapproval['noppotxt']         	= $nospp;
		$dataapproval['noreftxt']       	= $data_queryitem->noreftxt;
		$dataapproval['kodebartxt']       	= $data_queryitem->kodebartxt;
		$dataapproval['nabar']            	= $data_queryitem->nabar;
		$dataapproval['qty']            	= $data_queryitem->qty;

		switch ($kode_level) {
			case '11':
				$dataapproval['nama_approval_ktu']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_ktu']   = date('Y-m-d H:i:s');
				$dataapproval['status_ktu']         = $status;
				$dataapproval['status2_ktu']        = $status2;
				$dataapproval['status_lokasi_ktu']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_ktu']   = '0';
				$dataapproval['flag_waiting_gm']    = '1';
				break;
			case '12':
			case '13':
			case '14':
				$dataapproval['nama_approval_kasie']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_kasie']   = date('Y-m-d H:i:s');
				$dataapproval['status_kasie']         = $status;
				$dataapproval['status2_kasie']        = $status2;
				$dataapproval['status_lokasi_kasie']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_kasie']   = '0';
				$dataapproval['flag_waiting_ktu']     = '1';
				break;
			case '15':
				$dataapproval['nama_approval_gm']  		= $this->session->userdata('user');
				$dataapproval['tgl_approval_gm']   		= date('Y-m-d H:i:s');
				$dataapproval['status_gm']         		= $status;
				$dataapproval['status2_gm']        		= $status2;
				$dataapproval['status_lokasi_gm']  		= $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_gm']   		= '0';
				$dataapproval['flag_waiting_mill_mgr']  = '1';
				// if(lokasi_sesi == "PKS"){
				// 	td_12 = '<td>'+mengetahui+'</td>'; //GM
				// }
				// else if(lokasi_sesi == "SITE"){
				// 	td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'</td>'; //GM
				// }
				break;
			case '16':
				$dataapproval['nama_approval_mill_mgr']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_mill_mgr']   = date('Y-m-d H:i:s');
				$dataapproval['status_mill_mgr']         = $status;
				$dataapproval['status2_mill_mgr']        = $status2;
				$dataapproval['status_lokasi_mill_mgr']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_mill_mgr']   = '0';
				$dataapproval['flag_waiting_dept_head']  = '1';
				break;
			case '21':
				$dataapproval['nama_approval_dept_head']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dept_head']   = date('Y-m-d H:i:s');
				$dataapproval['status_dept_head']         = $status;
				$dataapproval['status2_dept_head']        = $status2;
				$dataapproval['status_lokasi_dept_head']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_dept_head']   = '0';
				$dataapproval['flag_waiting_dir_ops']     = '1';
				break;
			case '22':
				$dataapproval['nama_approval_dir_ops']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dir_ops']   = date('Y-m-d H:i:s');
				$dataapproval['status_dir_ops']         = $status;
				$dataapproval['status2_dir_ops']        = $status2;
				$dataapproval['status_lokasi_dir_ops']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_dir_ops']   = '0';
				break;
			default:
				break;
		}

		$query_check_item_approval = "SELECT * FROM item_ppo_approval WHERE no_id_item_ppo = $id AND noppotxt = $nospp";

		$check_item_approval = $this->db_logistik_pt->query($query_check_item_approval)->num_rows();
		if ($check_item_approval > 0) {
			$this->db_logistik_pt->set($dataapproval);
			$this->db_logistik_pt->where('no_id_item_ppo', $id);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->update('item_ppo_approval');
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$approval = TRUE;
			} else {
				$approval = FALSE;
			}
		} else {
			$this->db_logistik_pt->insert('item_ppo_approval', $dataapproval);
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$approval = TRUE;
			} else {
				$approval = FALSE;
			}
		}

		$dataapprovalhistory['no_id_item_ppo']   		= $id;
		$dataapprovalhistory['noppotxt']         		= $nospp;
		$dataapprovalhistory['noreftxt']       			= $data_queryitem->noreftxt;
		$dataapprovalhistory['kodebartxt']       		= $data_queryitem->kodebartxt;
		$dataapprovalhistory['nabar']            		= $data_queryitem->nabar;
		$dataapprovalhistory['qty']            			= $data_queryitem->qty;
		$dataapprovalhistory['nama_approval']    		= $this->session->userdata('user');
		$dataapprovalhistory['tgl_approval']     		= date('Y-m-d H:i:s');
		$dataapprovalhistory['status']           		= $status;
		$dataapprovalhistory['status2']          		= $status2;
		$dataapprovalhistory['level']            		= $level;
		$dataapprovalhistory['kode_level']       		= $kode_level;
		$dataapprovalhistory['status_lokasi']    		= $this->session->userdata('status_lokasi');
		$dataapprovalhistory['keterangan_transaksi']	= NULL;
		$dataapprovalhistory['tgl_transaksi']			= date("Y-m-d H:i:s");
		$dataapprovalhistory['user_transaksi']			= $this->session->userdata('user');
		$dataapprovalhistory['client_ip']				= $this->input->ip_address();
		$dataapprovalhistory['client_platform']			= $this->platform->agent();

		$this->db_logistik_pt->insert('item_ppo_approval_history', $dataapprovalhistory);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$approvalhistory = TRUE;
		} else {
			$approvalhistory = FALSE;
		}

		// $get_all_status_item = "SELECT status, status2, status_ktu, status2_ktu, status_kasie, status2_kasie, status_gm, status2_gm, status_mill_mgr, status2_mill_mgr, status_dept_head, status2_dept_head, status_dir_ops, status2_dir_ops, status_dir_hrd, status2_dir_hrd, status_dir_mis, status2_dir_mis, status_dir_legal, status2_dir_legal, status_dir_area, status2_dir_area, status_kp, status2_kp, kodedept, namadept FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
		// $get_all_status_item = $this->db_logistik_pt->query($get_all_status_item)->result();

		// $count_status = count($get_all_status_item);

		$count_status = 0;
		$no = 0;
		$status_oke = 0;
		// $status_tolak = 0;

		switch (substr($data_queryitem->noreftxt, 0, 3)) {
			case 'FAC':
				if ($kode_level == "21") {
					$dataedit['status'] = $status;
					$dataedit['status2'] = $status2;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2, FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						if ($list_status->status2 == 1 || $list_status->status2 == 2) {
							$status_oke += 1;
						}
						// if($list_status->status2 == 3){
						// 	$status_tolak += 1;
						// }
					}
				}
				break;
			case 'EST':
				if ($kode_level == "21") {
					$dataedit['status'] = $status;
					$dataedit['status2'] = $status2;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						if ($list_status->status2 == 1 || $list_status->status2 == 2) {
							$status_oke += 1;
						}
						// if($list_status->status2 == 3){
						// 	$status_tolak += 1;
						// }
					}
				}
				break;
			case 'ROM':
				if ($kode_level == "21") {
					$dataedit['status'] = $status;
					$dataedit['status2'] = $status2;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						if ($list_status->status2 == 1 || $list_status->status2 == 2) {
							$status_oke += 1;
						}
						// if($list_status->status2 == 3){
						// 	$status_tolak += 1;
						// }
					}
				}
			case 'PST':
				if ($kode_level == "21") {
					$dataedit['status'] = $status;
					$dataedit['status2'] = $status2;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						if ($list_status->status2 == 1 || $list_status->status2 == 2) {
							$status_oke += 1;
						}
						// if($list_status->status2 == 3){
						// 	$status_tolak += 1;
						// }
					}

					// switch ($list_status->kodedept) {
					// 	case '11': // MIS
					// 		if($list_status->status2 != 0){
					//    			if($list_status->status2 == 1 || $list_status->status2 == 2){
					//    				$status_oke += 1;
					//    			}
					//    			// if($list_status->status2 == 3){
					//    			// 	$status_tolak += 1;
					//    			// }
					//    		}
					// 		break;
					// 	case '7': // Umum & HRD
					// 		if($list_status->status2 != 0){
					//    			if($list_status->status2 == 1 || $list_status->status2 == 2){
					//    				$status_oke += 1;
					//    			}
					//    			// if($list_status->status2 == 3){
					//    			// 	$status_tolak += 1;
					//    			// }
					//    		}
					// 	break;
					// 	default:
					// 		if($list_status->status2 != 0){
					//    			if($list_status->status2 == 1 || $list_status->status2 == 2){
					//    				$status_oke += 1;
					//    			}
					//    			// if($list_status->status2 == 3){
					//    			// 	$status_tolak += 1;
					//    			// }
					//    		}
					// 		break;
					// }
				}
				break;
			default:
				break;
		}

		if ($status_oke == $count_status) {
			$updateppo['status'] = "DISETUJUI";
			$updateppo['status2'] = "1";
		}

		if ($status_oke < $count_status) {
			$updateppo['status'] = "SEBAGIAN";
			$updateppo['status2'] = "2";
		}

		// if($status_tolak == $count_status){
		// 	$updateppo['status'] = "TIDAK DISETUJUI";
		// 	$updateppo['status2'] = "3";
		// }

		if ($kode_level == "21") {
			$this->db_logistik_pt->set($updateppo);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->where('noreftxt', $data_queryitem->noreftxt);
			$this->db_logistik_pt->update('ppo');
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$check_updateppo = TRUE;
			}
		}

		if (isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE && $data_item_ppo === TRUE) {
				$data = TRUE;
			}
		} else if (!isset($data_item_ppo)) {
			if (isset($check_updateppo)) {
				if ($approval === TRUE && $approvalhistory === TRUE && $check_updateppo === TRUE) {
					$data = TRUE;
				}
			} else {
				if ($approval === TRUE && $approvalhistory === TRUE) {
					$data = TRUE;
				}
			}
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function tdkSetuju()
	{
		$id = $this->input->post('id');
		$nospp = $this->input->post('nospp');
		$norefppo = $this->input->post('norefppo');

		$query_item = "SELECT id, noppotxt, noreftxt, kodebartxt, nabar, qty FROM item_ppo WHERE id = '$id' AND noppotxt = '$nospp' AND noreftxt = '$norefppo'";
		$data_queryitem = $this->db_logistik_pt->query($query_item)->row();

		$checkAppr = $this->_checkApproval($nospp, $norefppo);
		$status3 = $checkAppr[2];
		$status4 = $checkAppr[3];

		$level = $this->session->userdata('level');
		$kode_level = $this->session->userdata('kode_level');

		$dataapproval['no_id_item_ppo']   	= $id;
		$dataapproval['noppotxt']         	= $nospp;
		$dataapproval['noreftxt']       	= $data_queryitem->noreftxt;
		$dataapproval['kodebartxt']       	= $data_queryitem->kodebartxt;
		$dataapproval['nabar']            	= $data_queryitem->nabar;
		$dataapproval['qty']            	= $data_queryitem->qty;

		switch ($kode_level) {
			case '11':
				$dataapproval['nama_approval_ktu']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_ktu']   = date('Y-m-d H:i:s');
				$dataapproval['status_ktu']         = $status3;
				$dataapproval['status2_ktu']        = $status4;
				$dataapproval['status_lokasi_ktu']  = $this->session->userdata('status_lokasi');
				break;
			case '12':
			case '13':
			case '14':
				$dataapproval['nama_approval_kasie']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_kasie']   = date('Y-m-d H:i:s');
				$dataapproval['status_kasie']         = $status3;
				$dataapproval['status2_kasie']        = $status4;
				$dataapproval['status_lokasi_kasie']  = $this->session->userdata('status_lokasi');
				break;
			case '15':
				$dataapproval['nama_approval_gm']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_gm']   = date('Y-m-d H:i:s');
				$dataapproval['status_gm']         = $status3;
				$dataapproval['status2_gm']        = $status4;
				$dataapproval['status_lokasi_gm']  = $this->session->userdata('status_lokasi');
				break;
			case '16':
				$dataapproval['nama_approval_mill_mgr']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_mill_mgr']   = date('Y-m-d H:i:s');
				$dataapproval['status_mill_mgr']         = $status3;
				$dataapproval['status2_mill_mgr']        = $status4;
				$dataapproval['status_lokasi_mill_mgr']  = $this->session->userdata('status_lokasi');
				break;
			case '21':
				$dataapproval['nama_approval_dept_head']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dept_head']   = date('Y-m-d H:i:s');
				$dataapproval['status_dept_head']         = $status3;
				$dataapproval['status2_dept_head']        = $status4;
				$dataapproval['status_lokasi_dept_head']  = $this->session->userdata('status_lokasi');
				break;
			case '22':
				$dataapproval['nama_approval_dir_ops']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dir_ops']   = date('Y-m-d H:i:s');
				$dataapproval['status_dir_ops']         = $status3;
				$dataapproval['status2_dir_ops']        = $status4;
				$dataapproval['status_lokasi_dir_ops']  = $this->session->userdata('status_lokasi');
				break;
			default:
				break;
		}

		$query_check_item_approval = "SELECT * FROM item_ppo_approval WHERE no_id_item_ppo = $id AND noppotxt = $nospp";

		$check_item_approval = $this->db_logistik_pt->query($query_check_item_approval)->num_rows();
		if ($check_item_approval > 0) {
			$this->db_logistik_pt->set($dataapproval);
			$this->db_logistik_pt->where('no_id_item_ppo', $id);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->update('item_ppo_approval');
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$approval = TRUE;
			} else {
				$approval = FALSE;
			}
		} else {
			$this->db_logistik_pt->insert('item_ppo_approval', $dataapproval);
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$approval = TRUE;
			} else {
				$approval = FALSE;
			}
		}

		// $dataapprovalhistory['id']               = $data[''];
		$dataapprovalhistory['no_id_item_ppo']   		= $id;
		$dataapprovalhistory['noppotxt']         		= $nospp;
		$dataapprovalhistory['noreftxt']       			= $data_queryitem->noreftxt;
		$dataapprovalhistory['kodebartxt']       		= $data_queryitem->kodebartxt;
		$dataapprovalhistory['nabar']            		= $data_queryitem->nabar;
		$dataapprovalhistory['qty']            			= $data_queryitem->qty;
		$dataapprovalhistory['nama_approval']    		= $this->session->userdata('user');
		$dataapprovalhistory['tgl_approval']     		= date('Y-m-d H:i:s');
		$dataapprovalhistory['status']           		= $status3;
		$dataapprovalhistory['status2']          		= $status4;
		$dataapprovalhistory['level']            		= $level;
		$dataapprovalhistory['kode_level']       		= $kode_level;
		$dataapprovalhistory['status_lokasi']    		= $this->session->userdata('status_lokasi');
		$dataapprovalhistory['keterangan_transaksi']	= NULL;
		$dataapprovalhistory['tgl_transaksi']			= date("Y-m-d H:i:s");
		$dataapprovalhistory['user_transaksi']			= $this->session->userdata('user');
		$dataapprovalhistory['client_ip']				= $this->input->ip_address();
		$dataapprovalhistory['client_platform']			= $this->platform->agent();

		$this->db_logistik_pt->insert('item_ppo_approval_history', $dataapprovalhistory);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$approvalhistory = TRUE;
		} else {
			$approvalhistory = FALSE;
		}

		if ($kode_level == "15" || $kode_level == "16" || $kode_level == "21") {
			$dataedit['status'] = $status3;
			$dataedit['status2'] = $status4;

			$this->db_logistik_pt->set($dataedit);
			$this->db_logistik_pt->where('id', $id);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->update('item_ppo');

			if ($this->db_logistik_pt->affected_rows() > 0) {
				$data_item_ppo = TRUE;
			}
			// else{
			//     $data_item_ppo = FALSE;
			// }
		}

		$count_status = 0;
		$no = 0;
		// $status_oke = 0;
		$status_tolak = 0;

		switch (substr($data_queryitem->noreftxt, 0, 3)) {
			case 'FAC':
				if ($kode_level == "21") {
					$dataedit['status'] = $status3;
					$dataedit['status2'] = $status4;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2, FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						// if($list_status->status2 == 1 || $list_status->status2 == 2){
						// 	$status_oke += 1;
						// }
						if ($list_status->status2 == 3) {
							$status_tolak += 1;
						}
					}
				}
				break;
			case 'EST':
				if ($kode_level == "21") {
					$dataedit['status'] = $status3;
					$dataedit['status2'] = $status4;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						// if($list_status->status2 == 1 || $list_status->status2 == 2){
						// 	$status_oke += 1;
						// }
						if ($list_status->status2 == 3) {
							$status_tolak += 1;
						}
					}
				}
				break;
			case 'ROM':
				if ($kode_level == "21") {
					$dataedit['status'] = $status3;
					$dataedit['status2'] = $status4;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						// if($list_status->status2 == 1 || $list_status->status2 == 2){
						// 	$status_oke += 1;
						// }
						if ($list_status->status2 == 3) {
							$status_tolak += 1;
						}
					}
				}
			case 'PST':
				if ($kode_level == "21") {
					$dataedit['status'] = $status3;
					$dataedit['status2'] = $status4;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('id', $id);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
				}

				$query_all_status_item = "SELECT status, status2 FROM v_list_item_approval WHERE noppotxt = '$nospp' AND noreftxt= '$data_queryitem->noreftxt'";
				$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
				$count_status = count($get_all_status_item);

				foreach ($get_all_status_item as $list_status) {
					if ($list_status->status2 != 0) {
						if ($list_status->status2 == 3) {
							$status_tolak += 1;
						}
					}
					// switch ($list_status->kodedept) {
					// 	case '11': // MIS
					// 		if($list_status->status2 != 0){
					//    			// if($list_status->status2 == 1 || $list_status->status2 == 2){
					//    			// 	$status_oke += 1;
					//    			// }
					//    			if($list_status->status2 == 3){
					//    				$status_tolak += 1;
					//    			}
					//    		}
					// 		break;
					// 	case '7': // Umum & HRD
					// 		if($list_status->status2 != 0){
					//    			// if($list_status->status2 == 1 || $list_status->status2 == 2){
					//    			// 	$status_oke += 1;
					//    			// }
					//    			if($list_status->status2 == 3){
					//    				$status_tolak += 1;
					//    			}
					//    		}
					// 	break;
					// 	default:
					// 		break;
					// }
				}
				break;
			default:
				break;
		}

		if ($status_tolak == $count_status) {
			$updateppo['status'] = "TIDAK DISETUJUI";
			$updateppo['status2'] = "3";
		}

		if ($status_tolak < $count_status) {
			$updateppo['status'] = "TIDAK DISETUJUI SEBAGIAN";
			$updateppo['status2'] = "8";
		}

		if ($kode_level == "21") {
			$this->db_logistik_pt->set($updateppo);
			$this->db_logistik_pt->where('noppotxt', $nospp);
			$this->db_logistik_pt->where('noreftxt', $data_queryitem->noreftxt);
			$this->db_logistik_pt->update('ppo');
			if ($this->db_logistik_pt->affected_rows() > 0) {
				$check_updateppo = TRUE;
			}
		}

		if (isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE && $data_item_ppo === TRUE) {
				$data = TRUE;
			}
		} else if (!isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE) {
				$data = TRUE;
			}
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function setujuAll()
	{
		$nospp = $this->input->post('nospp');
		$norefppo = $this->input->post('norefppo');

		$checkAppr = $this->_checkApproval($nospp, $norefppo);

		$status = $checkAppr[0];
		$status2 = $checkAppr[1];

		$level = $this->session->userdata('level');
		$kode_level = $this->session->userdata('kode_level');

		switch ($kode_level) {
			case '11':
				$dataapproval['nama_approval_ktu']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_ktu']   = date('Y-m-d H:i:s');
				$dataapproval['status_ktu']         = $status;
				$dataapproval['status2_ktu']        = $status2;
				$dataapproval['status_lokasi_ktu']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_ktu']   = '0';
				$dataapproval['flag_waiting_gm']    = '1';
				break;
			case '12':
			case '13':
			case '14':
				$dataapproval['nama_approval_kasie']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_kasie']   = date('Y-m-d H:i:s');
				$dataapproval['status_kasie']         = $status;
				$dataapproval['status2_kasie']        = $status2;
				$dataapproval['status_lokasi_kasie']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_kasie']   = '0';
				$dataapproval['flag_waiting_ktu']     = '1';
				break;
			case '15':
				$dataapproval['nama_approval_gm']  		= $this->session->userdata('user');
				$dataapproval['tgl_approval_gm']   		= date('Y-m-d H:i:s');
				$dataapproval['status_gm']         		= $status;
				$dataapproval['status2_gm']        		= $status2;
				$dataapproval['status_lokasi_gm']  		= $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_gm']   		= '0';
				$dataapproval['flag_waiting_mill_mgr']  = '1';
				// if(lokasi_sesi == "PKS"){
				// 	td_12 = '<td>'+mengetahui+'</td>'; //GM
				// }
				// else if(lokasi_sesi == "SITE"){
				// 	td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'</td>'; //GM
				// }
				break;
			case '16':
				$dataapproval['nama_approval_mill_mgr']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_mill_mgr']   = date('Y-m-d H:i:s');
				$dataapproval['status_mill_mgr']         = $status;
				$dataapproval['status2_mill_mgr']        = $status2;
				$dataapproval['status_lokasi_mill_mgr']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_mill_mgr']   = '0';
				$dataapproval['flag_waiting_dept_head']  = '1';
				break;
			case '21':
				$dataapproval['nama_approval_dept_head']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dept_head']   = date('Y-m-d H:i:s');
				$dataapproval['status_dept_head']         = $status;
				$dataapproval['status2_dept_head']        = $status2;
				$dataapproval['status_lokasi_dept_head']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_dept_head']   = '0';
				$dataapproval['flag_waiting_dir_ops']     = '1';
				break;
			case '22':
				$dataapproval['nama_approval_dir_ops']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dir_ops']   = date('Y-m-d H:i:s');
				$dataapproval['status_dir_ops']         = $status;
				$dataapproval['status2_dir_ops']        = $status2;
				$dataapproval['status_lokasi_dir_ops']  = $this->session->userdata('status_lokasi');
				$dataapproval['flag_waiting_dir_ops']   = '0';
				break;
			default:
				break;
		}

		// switch($kode_level){
		// 			case '11':
		// 				$dataapproval['nama_approval_ktu']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_ktu']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_ktu']         = $status;
		//         $dataapproval['status2_ktu']        = $status2;
		//         $dataapproval['status_lokasi_ktu']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			case '12':
		// 			case '13':
		// 			case '14':
		// 				$dataapproval['nama_approval_kasie']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_kasie']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_kasie']         = $status;
		//         $dataapproval['status2_kasie']        = $status2;
		//         $dataapproval['status_lokasi_kasie']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			case '15':
		// 				$dataapproval['nama_approval_gm']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_gm']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_gm']         = $status;
		//         $dataapproval['status2_gm']        = $status2;
		//         $dataapproval['status_lokasi_gm']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			case '16':
		// 				$dataapproval['nama_approval_mill_mgr']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_mill_mgr']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_mill_mgr']         = $status;
		//         $dataapproval['status2_mill_mgr']        = $status2;
		//         $dataapproval['status_lokasi_mill_mgr']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			case '21':
		// 				$dataapproval['nama_approval_dept_head']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_dept_head']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_dept_head']         = $status;
		//         $dataapproval['status2_dept_head']        = $status2;
		//         $dataapproval['status_lokasi_dept_head']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			case '22':
		// 				$dataapproval['nama_approval_dir_ops']  = $this->session->userdata('user');
		//         $dataapproval['tgl_approval_dir_ops']   = date('Y-m-d H:i:s');
		//         $dataapproval['status_dir_ops']         = $status;
		//         $dataapproval['status2_dir_ops']        = $status2;
		//         $dataapproval['status_lokasi_dir_ops']  = $this->session->userdata('status_lokasi');
		// 				break;
		// 			default:
		// 				break;
		// 		}

		$query_item = "SELECT id, noppotxt, noreftxt, kodebartxt, nabar, qty FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt = '$norefppo'";
		$data_queryitem = $this->db_logistik_pt->query($query_item)->result();

		$i = 0;
		$len = count($data_queryitem);
		foreach ($data_queryitem as $list_data_queryitem) {
			$query_check_item_approval = "SELECT * FROM item_ppo_approval WHERE no_id_item_ppo = $list_data_queryitem->id AND noppotxt = $nospp";

			$dataapproval['no_id_item_ppo']   	= $list_data_queryitem->id;
			$dataapproval['noppotxt']         	= $nospp;
			$dataapproval['noreftxt']       	= $list_data_queryitem->noreftxt;
			$dataapproval['kodebartxt']       	= $list_data_queryitem->kodebartxt;
			$dataapproval['nabar']            	= $list_data_queryitem->nabar;
			$dataapproval['qty']            	= $list_data_queryitem->qty;

			$check_item_approval = $this->db_logistik_pt->query($query_check_item_approval)->num_rows();
			if ($check_item_approval > 0) {
				$this->db_logistik_pt->set($dataapproval);
				$this->db_logistik_pt->where('no_id_item_ppo', $list_data_queryitem->id);
				$this->db_logistik_pt->where('noppotxt', $nospp);
				$this->db_logistik_pt->update('item_ppo_approval');
				if ($this->db_logistik_pt->affected_rows() > 0) {
					$approval = TRUE;
				} else {
					$approval = FALSE;
				}
			} else {
				$this->db_logistik_pt->insert('item_ppo_approval', $dataapproval);
				if ($this->db_logistik_pt->affected_rows() > 0) {
					$approval = TRUE;
				} else {
					$approval = FALSE;
				}
			}

			// $datainsertapproval['id']               = $data[''];
			$datainsertapproval['no_id_item_ppo']   		= $list_data_queryitem->id;
			$datainsertapproval['noppotxt']         		= $nospp;
			$datainsertapproval['kodebartxt']       		= $list_data_queryitem->kodebartxt;
			$datainsertapproval['nabar']            		= $list_data_queryitem->nabar;
			$datainsertapproval['nama_approval']    		= $this->session->userdata('user');
			$datainsertapproval['tgl_approval']     		= date('Y-m-d H:i:s');
			$datainsertapproval['status']           		= $status;
			$datainsertapproval['status2']          		= $status2;
			$datainsertapproval['level']            		= $level;
			$datainsertapproval['kode_level']       		= $kode_level;
			$datainsertapproval['status_lokasi']    		= $this->session->userdata('status_lokasi');
			$dataapprovalhistory['keterangan_transaksi']	= NULL;
			$dataapprovalhistory['tgl_transaksi']			= date("Y-m-d H:i:s");
			$dataapprovalhistory['user_transaksi']			= $this->session->userdata('user');
			$dataapprovalhistory['client_ip']				= $this->input->ip_address();
			$dataapprovalhistory['client_platform']			= $this->platform->agent();

			$this->db_logistik_pt->insert('item_ppo_approval_history', $datainsertapproval);
			if ($this->db_logistik_pt->affected_rows() > 0) {
				if ($i == $len - 1 && $kode_level == "21") {
					$dataedit['status'] = $status;
					$dataedit['status2'] = $status2;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');
					// var_dump($this->db_logistik_pt->affected_rows());

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
					// else{
					//     $data_item_ppo = FALSE;
					// }
					// var_dump($data_item_ppo);
				}
				$approvalhistory = TRUE;
			} else {
				$approvalhistory = FALSE;
			}
			$i++;
		}

		$query_all_status_item = "SELECT status, status2 FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt= '$norefppo'";
		$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
		$count_status = count($get_all_status_item);

		$query_status_setuju = "SELECT status, status2 FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt= '$norefppo' AND status2 = '1'";
		$get_all_status_setuju = $this->db_logistik_pt->query($query_status_setuju)->result();
		$status_oke = count($get_all_status_setuju);

		// $query_status_tolak = "SELECT status, status2 FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt= '$norefppo' AND status2 = '3'";
		// $get_all_status_tolak = $this->db_logistik_pt->query($query_status_setuju)->result();
		// $status_tolak = count($get_all_status_tolak);

		if ($status_oke == $count_status) {
			$updateppo['status'] = "DISETUJUI";
			$updateppo['status2'] = "1";
		}

		if ($status_oke < $count_status) {
			$updateppo['status'] = "SEBAGIAN";
			$updateppo['status2'] = "2";
		}

		// if($status_tolak == $count_status){
		// 	$updateppo['status'] = "TIDAK DISETUJUI";
		// 	$updateppo['status2'] = "3";
		// }

		switch (substr($norefppo, 0, 3)) {
			case 'FAC':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'EST':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'ROM':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'PST':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			default:
				break;
		}

		if (isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE && $data_item_ppo === TRUE) {
				$data = TRUE;
			}
		} else if (!isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE) {
				$data = TRUE;
			}
		} else {
			$data = FALSE;
		}
		// var_dump($data_item_ppo);
		// var_dump($approval);
		// var_dump($approvalhistory);
		// var_dump($data);
		// exit();

		echo json_encode($data);
	}

	function tdkSetujuAll()
	{
		$nospp = $this->input->post('nospp');
		$norefppo = $this->input->post('norefppo');

		$checkAppr = $this->_checkApproval($nospp, $norefppo);
		$status3 = $checkAppr[2];
		$status4 = $checkAppr[3];

		$level = $this->session->userdata('level');
		$kode_level = $this->session->userdata('kode_level');

		switch ($kode_level) {
			case '11':
				$dataapproval['nama_approval_ktu']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_ktu']   = date('Y-m-d H:i:s');
				$dataapproval['status_ktu']         = $status3;
				$dataapproval['status2_ktu']        = $status4;
				$dataapproval['status_lokasi_ktu']  = $this->session->userdata('status_lokasi');
				break;
			case '12':
			case '13':
			case '14':
				$dataapproval['nama_approval_kasie']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_kasie']   = date('Y-m-d H:i:s');
				$dataapproval['status_kasie']         = $status3;
				$dataapproval['status2_kasie']        = $status4;
				$dataapproval['status_lokasi_kasie']  = $this->session->userdata('status_lokasi');
				break;
			case '15':
				$dataapproval['nama_approval_gm']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_gm']   = date('Y-m-d H:i:s');
				$dataapproval['status_gm']         = $status3;
				$dataapproval['status2_gm']        = $status4;
				$dataapproval['status_lokasi_gm']  = $this->session->userdata('status_lokasi');
				break;
			case '16':
				$dataapproval['nama_approval_mill_mgr']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_mill_mgr']   = date('Y-m-d H:i:s');
				$dataapproval['status_mill_mgr']         = $status3;
				$dataapproval['status2_mill_mgr']        = $status4;
				$dataapproval['status_lokasi_mill_mgr']  = $this->session->userdata('status_lokasi');
				break;
			case '21':
				$dataapproval['nama_approval_dept_head']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dept_head']   = date('Y-m-d H:i:s');
				$dataapproval['status_dept_head']         = $status3;
				$dataapproval['status2_dept_head']        = $status4;
				$dataapproval['status_lokasi_dept_head']  = $this->session->userdata('status_lokasi');
				break;
			case '22':
				$dataapproval['nama_approval_dir_ops']  = $this->session->userdata('user');
				$dataapproval['tgl_approval_dir_ops']   = date('Y-m-d H:i:s');
				$dataapproval['status_dir_ops']         = $status3;
				$dataapproval['status2_dir_ops']        = $status4;
				$dataapproval['status_lokasi_dir_ops']  = $this->session->userdata('status_lokasi');
				break;
			default:
				break;
		}

		$query_item = "SELECT id, noppotxt, noreftxt, kodebartxt, nabar, qty FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt = '$norefppo'";
		$data_queryitem = $this->db_logistik_pt->query($query_item)->result();

		$i = 0;
		$len = count($data_queryitem);
		foreach ($data_queryitem as $list_data_queryitem) {
			$query_check_item_approval = "SELECT * FROM item_ppo_approval WHERE no_id_item_ppo = $list_data_queryitem->id AND noppotxt = $nospp";

			$dataapproval['no_id_item_ppo']   	= $list_data_queryitem->id;
			$dataapproval['noppotxt']         	= $nospp;
			$dataapproval['noreftxt']       	= $list_data_queryitem->noreftxt;
			$dataapproval['kodebartxt']       	= $list_data_queryitem->kodebartxt;
			$dataapproval['nabar']            	= $list_data_queryitem->nabar;
			$dataapproval['qty']            	= $list_data_queryitem->qty;

			$check_item_approval = $this->db_logistik_pt->query($query_check_item_approval)->num_rows();
			if ($check_item_approval > 0) {
				$this->db_logistik_pt->set($dataapproval);
				$this->db_logistik_pt->where('no_id_item_ppo', $list_data_queryitem->id);
				$this->db_logistik_pt->where('noppotxt', $nospp);
				$this->db_logistik_pt->update('item_ppo_approval');
				if ($this->db_logistik_pt->affected_rows() > 0) {
					$approval = TRUE;
				} else {
					$approval = FALSE;
				}
			} else {
				$this->db_logistik_pt->insert('item_ppo_approval', $dataapproval);
				if ($this->db_logistik_pt->affected_rows() > 0) {
					$approval = TRUE;
				} else {
					$approval = FALSE;
				}
			}

			// $datainsertapproval['id']               = $data[''];
			$datainsertapproval['no_id_item_ppo']   		= $list_data_queryitem->id;
			$datainsertapproval['noppotxt']         		= $nospp;
			$datainsertapproval['kodebartxt']       		= $list_data_queryitem->kodebartxt;
			$datainsertapproval['nabar']            		= $list_data_queryitem->nabar;
			$datainsertapproval['nama_approval']    		= $this->session->userdata('user');
			$datainsertapproval['tgl_approval']     		= date('Y-m-d H:i:s');
			$datainsertapproval['status']           		= $status3;
			$datainsertapproval['status2']          		= $status4;
			$datainsertapproval['level']            		= $level;
			$datainsertapproval['kode_level']       		= $kode_level;
			$datainsertapproval['status_lokasi']    		= $this->session->userdata('status_lokasi');
			$datainsertapproval['keterangan_transaksi']	= NULL;
			$datainsertapproval['tgl_transaksi']			= date("Y-m-d H:i:s");
			$datainsertapproval['user_transaksi']			= $this->session->userdata('user');
			$datainsertapproval['client_ip']				= $this->input->ip_address();
			$datainsertapproval['client_platform']			= $this->platform->agent();

			$this->db_logistik_pt->insert('item_ppo_approval_history', $datainsertapproval);
			if ($this->db_logistik_pt->affected_rows() > 0) {
				if ($i == $len - 1 && $kode_level == "15" || $kode_level == "16" || $kode_level == "21") {
					$dataedit['status'] = $status3;
					$dataedit['status2'] = $status4;

					$this->db_logistik_pt->set($dataedit);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->update('item_ppo');

					if ($this->db_logistik_pt->affected_rows() > 0) {
						$data_item_ppo = TRUE;
					}
					// else{
					//     $data_item_ppo = FALSE;
					// }
				}
				$approvalhistory = TRUE;
			} else {
				$approvalhistory = FALSE;
			}
			$i++;
		}

		$query_all_status_item = "SELECT status, status2 FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt= '$norefppo'";
		$get_all_status_item = $this->db_logistik_pt->query($query_all_status_item)->result();
		$count_status = count($get_all_status_item);

		$query_status_tolak = "SELECT status, status2 FROM item_ppo WHERE noppotxt = '$nospp' AND noreftxt= '$norefppo' AND status2 = '3'";
		$get_all_status_tolak = $this->db_logistik_pt->query($query_status_tolak)->result();
		$status_tolak = count($get_all_status_tolak);

		if ($status_tolak == $count_status) {
			$updateppo['status'] = "TIDAK DISETUJUI";
			$updateppo['status2'] = "3";
		}

		switch (substr($norefppo, 0, 3)) {
			case 'FAC':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'EST':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'ROM':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			case 'PST':
				if ($kode_level == "21") {
					$this->db_logistik_pt->set($updateppo);
					$this->db_logistik_pt->where('noppotxt', $nospp);
					$this->db_logistik_pt->where('noreftxt', $norefppo);
					$this->db_logistik_pt->update('ppo');
					if ($this->db_logistik_pt->affected_rows() > 0) {
						$check_updateppo = TRUE;
					}
				}
				break;
			default:
				break;
		}

		if (isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE && $data_item_ppo === TRUE) {
				$data = TRUE;
			}
		} else if (!isset($data_item_ppo)) {
			if ($approval === TRUE && $approvalhistory === TRUE) {
				$data = TRUE;
			}
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function cetak()
	{
		$nospp = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$data['ppo'] = $this->db_logistik_pt->get_where('ppo', array('noppotxt' => $nospp, 'id' => $id))->row();

		$noreftxt = $data['ppo']->noreftxt;
		$data['item_ppo'] = $this->db_logistik_pt->get_where('item_ppo', array('noreftxt' => $noreftxt,  'status2' => '1'))->result();

		$query_approval = "SELECT DISTINCT nama_approval_ktu, tgl_approval_ktu, nama_approval_dept_head, tgl_approval_dept_head, nama_approval_gm, tgl_approval_gm FROM item_ppo_approval WHERE noreftxt = '$noreftxt' AND status2_ktu = '4' AND status2_dept_head = '1'";
		$data['item_ppo_approval'] = $this->db_logistik_pt->query($query_approval)->row();

		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			// 'format' => 'A4',
			// 'setAutoTopMargin' => 'stretch',
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		// $pdf = new \Mpdf\Mpdf([
		// 			'mode' => 'utf-8',
		// 			'format' => 'A4'.($orientation == 'L' ? '-L' : ''),
		// 			'orientation' => $orientation,
		// 			'margin_left' => $margin_left,
		// 			'margin_right' => $margin_right,
		// 			'margin_top' => $margin_top,
		// 			'margin_bottom' => $margin_bottom,
		// 			'margin_header' => 0,
		// 			'margin_footer' => 0,
		// 		]);

		$mpdf->SetHTMLHeader('<h3>' . $this->session->userdata('pt') . '</h3>');
		// $mpdf->SetHTMLHeader('
		//                     <table width="100%" border="0" align="center">
		//                         <tr>
		//                             <td rowspan="2" width="15%" height="10px"><img width="10%" height="60px" style="padding-left:8px" src="././assets/img/msal.jpg"></td>
		//                             <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
		//                         </tr>
		//                         <tr>
		//                             <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
		//                             </td>
		//                         </tr>
		//                     </table>
		//                     <hr style="width:100%;">
		//                     ');
		// $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

		$html = $this->load->view('V_spp/vw_spp_print', $data, true);

		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	function batal()
	{
		$id_ppo = $this->input->post('id');

		$get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
		// $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo',array('id' => $id_ppo_item))->row();

		$no_ppo = $get_ppo->noppotxt;
		$no_ref_ppo = $get_ppo->noreftxt;
		// $item_ppo_kodebar = $get_item_ppo->kodebartxt;
		// $item_ppo_nabar = $get_item_ppo->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO ppo_history SELECT null, a.*,'DATA SEBELUM BATAL SPP', '$user membatalkan SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM ppo a WHERE a.id = $id_ppo";
		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppohistory = TRUE;
		} else {
			$bool_ppohistory = FALSE;
		}

		$dataedit['status'] = "BATAL";
		$dataedit['status2'] = "5";
		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id_ppo);
		$this->db_logistik_pt->update('ppo');
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppo = TRUE;
		} else {
			$bool_ppo = FALSE;
		}

		if ($bool_ppohistory === TRUE && $bool_ppo === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function hapus()
	{
		$id_ppo = $this->input->post('id');

		$get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
		// $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo',array('id' => $id_ppo_item))->row();

		$no_ppo = $get_ppo->noppotxt;
		$no_ref_ppo = $get_ppo->noreftxt;
		// $item_ppo_kodebar = $get_item_ppo->kodebartxt;
		// $item_ppo_nabar = $get_item_ppo->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query_delete_ppo = "INSERT INTO ppo_history SELECT null, a.*,'DATA SEBELUM HAPUS SPP', '$user menghapus SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM ppo a WHERE a.id = $id_ppo";
		$this->db_logistik_pt->query($query_delete_ppo);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppohistory = TRUE;
		} else {
			$bool_ppohistory = FALSE;
		}

		$query_delete_item_ppo = "INSERT INTO item_ppo_history SELECT null, a.*,'DATA SEBELUM HAPUS SPP', '$user menghapus SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM item_ppo a WHERE a.noreftxt = '$no_ref_ppo'";
		$this->db_logistik_pt->query($query_delete_item_ppo);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_itemppohistory = TRUE;
		} else {
			$bool_itemppohistory = FALSE;
		}




		$data_delete_ppo = $this->db_logistik_pt->delete('ppo', array('id' => $id_ppo));
		$data_delete_item_ppo = $this->db_logistik_pt->delete('item_ppo', array('noreftxt' => $no_ref_ppo));

		if ($bool_itemppohistory === TRUE && $bool_itemppohistory === TRUE && $data_delete_ppo === TRUE && $data_delete_item_ppo === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function detail_approval()
	{
		$nospp = $this->input->post('nospp');

		$query = "SELECT * FROM v_list_item_approval WHERE noppotxt = '$nospp'";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function requestUbah()
	{
		$id_ppo = $this->input->post('id_spp');
		$nospp = $this->input->post('nospp');

		$get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
		// $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo',array('id' => $id_ppo_item))->row();

		$no_ppo = $get_ppo->noppotxt;
		$no_ref_ppo = $get_ppo->noreftxt;
		// $item_ppo_kodebar = $get_item_ppo->kodebartxt;
		// $item_ppo_nabar = $get_item_ppo->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO ppo_history SELECT null, a.*,'Data sebelum User request untuk ubah data', '$user request ubah SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM ppo a WHERE a.id = $id_ppo";
		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppohistory = TRUE;
		} else {
			$bool_ppohistory = FALSE;
		}

		$dataedit['status'] = "REQUEST UBAH";
		$dataedit['status2'] = "7";
		$dataedit['nama_main'] = $this->input->post('alasan_req');

		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id_ppo);
		$this->db_logistik_pt->update('ppo');
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppo = TRUE;
		} else {
			$bool_ppo = FALSE;
		}

		if ($bool_ppohistory === TRUE && $bool_ppo === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function unlock()
	{
		$id_ppo = $this->input->post('id_spp');
		$nospp = $this->input->post('nospp');

		$get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $id_ppo))->row();
		// $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo',array('id' => $id_ppo_item))->row();

		$no_ppo = $get_ppo->noppotxt;
		$no_ref_ppo = $get_ppo->noreftxt;
		// $item_ppo_kodebar = $get_item_ppo->kodebartxt;
		// $item_ppo_nabar = $get_item_ppo->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO ppo_history SELECT null, a.*,'User melakukan unlock ubah data', '$user menyetujui unlock ubah data SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM ppo a WHERE a.id = $id_ppo";
		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppohistory = TRUE;
		} else {
			$bool_ppohistory = FALSE;
		}

		$dataedit['status'] = "UBAH";
		$dataedit['status2'] = "6";
		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id_ppo);
		$this->db_logistik_pt->update('ppo');
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_ppo = TRUE;
		} else {
			$bool_ppo = FALSE;
		}

		$data_delete = $this->db_logistik_pt->delete('item_ppo_approval', array('noreftxt' => $no_ref_ppo, 'noppotxt' => $no_ppo));

		if ($bool_ppohistory === TRUE && $bool_ppo === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function hapus_temp()
	{
		$id_ppo = $this->input->post('hidden_id_ppo');
		$id_ppo_item = $this->input->post('hidden_id_ppo_item');

		$data_delete = $this->db_logistik_pt->delete('item_ppo', array('id' => $id_ppo_item));
		$data_delete_temp = $this->db_logistik_pt->delete('ppo', array('id' => $id_ppo));

		if ($data_delete === TRUE && $data_delete_temp === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}
		echo json_encode($data);
	}

	// function menunggu_approval(){
	// 	$this->template->utama('V_spp/vw_spp_menunggu_approval');	
	// }
}
