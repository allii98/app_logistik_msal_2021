<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Retur_bkb extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->db_msal_personalia = $this->load->database('db_msal_personalia',TRUE);
		$this->load->model('M_retur_bkb');
	}

	function index(){
		$this->template->utama('V_retur_bkb/vw_retur_bkb_index');
		// show_404();
	}

	function detail_retur_bkb(){
		$this->template->utama('V_retur_bkb/vw_retur_bkb_edit');
	}

	function input(){
		$namapt = $this->session->userdata('pt');
		$kode_pt = $this->session->userdata('kode_pt');

		// PT.MULIA SAWIT AGRO LESTARI (SITE) // 06
		// PT.MULIA SAWIT AGRO LESTARI (PKS) // 03
		// PT.MULIA SAWIT AGRO LESTARI (HO) // 01
		// PT.MULIA SAWIT AGRO LESTARI (RO) // 02

		if($kode_pt == "03"){
			$query_pt= "SELECT kodetxt, PT FROM pt WHERE kodetxt = '03'";

			$data['get_pt'] = $this->db_logistik_pt->query($query_pt)->result();
			
			// $query_acc_hutang_dagang = "SELECT noac, nama FROM noac WHERE noac = '301000000000000'";
			// $data['get_acc_hutang_dagang'] = $this->db_logistik->query($query_acc_hutang_dagang)->row();
			$this->template->utama('V_retur_bkb/vw_retur_bkb_input',$data);
		}
		else if($kode_pt == "06"){
			$query_pt= "SELECT kodetxt, PT FROM pt WHERE kodetxt = '06'";

			$data['get_pt'] = $this->db_logistik_pt->query($query_pt)->result();
			
			// $query_acc_hutang_dagang = "SELECT noac, nama FROM noac WHERE noac = '301000000000000'";
			// $data['get_acc_hutang_dagang'] = $this->db_logistik->query($query_acc_hutang_dagang)->row();
			$this->template->utama('V_retur_bkb/vw_retur_bkb_input',$data);
		}
		else {
			show_404();
		}
	}

	function get_bkb(){
		$no_bkb = $this->input->post('txt_no_bkb');
	
		$data_stockkeluar = $this->db_logistik_pt->get_where('stockkeluar', array('SKBTXT'=>$no_bkb));
		$count_stockkeluar = $data_stockkeluar->num_rows();
		if($count_stockkeluar == "0"){
			echo("bkb tidak ditemukan");
			exit();
		}
		$get_stockkeluar = $data_stockkeluar->row();
		echo json_encode(array('data_stockkeluar' => $get_stockkeluar));
	}

	function list_barang(){
		$data = $this->M_retur_bkb->get_list_barang();
		echo json_encode($data);
	}

	function list_bkb(){
		$data = $this->M_retur_bkb->list_bkb();
		echo json_encode($data);
	}

	function get_list_bkb(){
		$data = $this->M_retur_bkb->get_list_bkb();
		echo json_encode($data);
	}

	function get_bkb_item(){
		$kode_barang = $this->input->post('kode_barang');
		$no_bkb = $this->input->post('no_bkb');
		$no_ref_bkb = $this->input->post('no_ref_bkb');
		$kodept = $this->input->post('kodept');

		$data_keluarbrgitem = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $no_bkb, 'NO_REF' => $no_ref_bkb, 'kodebartxt' => $kode_barang))->row();

		$query_ret_skbitem = "SELECT SUM(qty) as qty FROM ret_skbitem WHERE skb = '$no_bkb' AND kodept = '$kodept' AND kodebartxt = '$kode_barang'";
		$data_ret_skbitem = $this->db_logistik_pt->query($query_ret_skbitem)->row();
		
		$data = array('data_keluarbrgitem' => $data_keluarbrgitem, 'data_ret_skbitem' => $data_ret_skbitem);
		echo json_encode($data);
	}

	function pilih_blok_sub(){
		// $tm_tbm = $this->input->post('tm_tbm');
		$afd_unit = $this->input->post('afd_unit');
		// $blok_sub = $this->input->post('blok_sub');
		// switch ($tm_tbm) {
		// 	case 'TM':
		// 		$tmtbm = 'TM';
		// 		break;
		// 	default:
		// 		$tmtbm = 'TBM';
		// 		break;
		// }
		$query_master_blok = "SELECT DISTINCT blok FROM masterblok WHERE afd = '$afd_unit'";
		$data = $this->db_msal_personalia->query($query_master_blok)->result();
		// var_dump($data);exit();
		echo json_encode($data);
	}

	function simpan_rinci_bkb(){
		$data = $this->M_retur_bkb->simpan_rinci_bkb();
		echo json_encode($data);
	}

	function ubah_rinci_bkb(){
		$data = $this->M_retur_bkb->ubah_rinci_bkb();
		echo json_encode($data);
	}

	function hapus_rinci(){
		// var_dump($_POST);exit();
		
		$id_retskb = $this->input->post('hidden_id_retskb');
		$no_ret = $this->input->post('hidden_no_ret');
		$id_retskbitem = $this->input->post('hidden_id_retskbitem');

		$data_delete = $this->db_logistik_pt->delete('ret_skbitem', array('id' => $id_retskbitem));

		if($data_delete === TRUE){
			$data = TRUE;
		}
		else{
			$data = FALSE;
		}
		echo json_encode($data);
	}

	function get_edit_bkb(){
		// var_dump($_POST);exit();
		// array(2) {
		//   ["id"]=>
		//   string(3) "996"
		//   ["no_ret"]=>
		//   string(3) "630"
		// }
		$kodept = $this->session->userdata('kode_pt');
		
		$id = $this->input->post('id');
		$no_ret = $this->input->post('no_ret');

		$query_retskb = "SELECT * FROM retskb WHERE id = '$id' AND no_ret = '$no_ret' AND batal = '0' AND kode = '$kodept'";
		$data_retskb = $this->db_logistik_pt->query($query_retskb)->row();

		$no_bkb = $data_retskb->skb;
		$kodept = $data_retskb->kode;

		if($kodept < 10){
			$kodept = "0".$kodept;
		}
		else{
			$kodept = $kodept;
		}
		$periode = $data_retskb->txttgl;

		// $query_norefbkb = "SELECT NO_REF FROM stockkeluar WHERE skb = '$no_bkb' AND batal = '0' AND kode = '$kodept' AND txttgl = '$periode'";
		$query_norefbkb = "SELECT NO_REF FROM stockkeluar WHERE skb = '$no_bkb' AND batal = '0' AND kode = '$kodept'";
		$data_noref = $this->db_logistik_pt->query($query_norefbkb)->row();
		$norefbkb = $data_noref->NO_REF;
		
		$query_retskbitem = "SELECT * FROM ret_skbitem WHERE no_ret = '$no_ret' AND skb = '$no_bkb' AND batal = '0' AND kodept = '$kodept'";
		$data_retskbitem = $this->db_logistik_pt->query($query_retskbitem)->result();

		$all_detailitembkb = [];
		foreach ($data_retskbitem as $list_retskbitem) {
			$detailitembkb = [];
			$detailitembkb['nabar'] = $list_retskbitem->nabar;
			$detailitembkb['kodebartxt'] = $list_retskbitem->kodebartxt;
			$detailitembkb['grp'] = $list_retskbitem->grp;
			$detailitembkb['afd'] = $list_retskbitem->afd;
			$detailitembkb['blok'] = $list_retskbitem->blok;
			$detailitembkb['kodebebantxt'] = $list_retskbitem->kodebebantxt;
			$detailitembkb['ketbeban'] = $list_retskbitem->ketbeban;
			$detailitembkb['kodesubtxt'] = $list_retskbitem->kodesubtxt;
			$detailitembkb['ketsub'] = $list_retskbitem->ketsub;
			$detailitembkb['qty'] = $list_retskbitem->qty;
			$detailitembkb['satuan'] = $list_retskbitem->satuan;
			$detailitembkb['ket'] = $list_retskbitem->ket;
			$detailitembkb['id'] = $list_retskbitem->id;
			$detailitembkb['txtperiode'] = $list_retskbitem->txtperiode;

			$kodebartxt = $detailitembkb['kodebartxt'];

			$query_qty_keluarbrgitem = "SELECT qty2 FROM keluarbrgitem WHERE batal = '0' AND kodept = '$kodept' AND kodebartxt = '$kodebartxt' AND SKBTXT = '$no_bkb'";
			$data_keluarbrgitem = $this->db_logistik_pt->query($query_qty_keluarbrgitem)->row();

			$detailitembkb['qty2'] = $data_keluarbrgitem->qty2; // Qty BKB

			$query_ret_skbitem = "SELECT SUM(qty) as qty_sudah_pernah_retur FROM ret_skbitem WHERE skb = '$no_bkb' AND kodept = '$kodept' AND kodebartxt = '$kodebartxt'";
			$data_ret_skbitem = $this->db_logistik_pt->query($query_ret_skbitem)->row();

			$detailitembkb['sudah_ret'] = $data_ret_skbitem->qty_sudah_pernah_retur; // Sudah Pernah Retur
			$all_detailitembkb[] = $detailitembkb;
		}
		// echo json_encode(array('data_retskb' => $data_retskb, 'data_retskbitem' => $data_retskbitem, 'norefbkb' => $norefbkb, 'data_keluarbrgitem' => $data_keluarbrgitem));
		echo json_encode(array('data_retskb' => $data_retskb, 'data_retskbitem' => $data_retskbitem, 'norefbkb' => $norefbkb, 'all_detailitembkb' => $all_detailitembkb));
	}

	function batal(){
		// var_dump($_POST);exit();
		// array(3) {
		  // ["id"] => string(3) "981"
		  // ["noretskb"] => string(3) "615"
		  // ["alasan"] => string(11) "batal retur"
		// }

	    $id_retskb = $this->input->post('id');
	    $no_retskb = $this->input->post('noretskb');
	    $alasan =  $this->input->post('alasan');

	    $user = $this->session->userdata('user');
	    $ip = $this->input->ip_address();
	    $platform = $this->platform->agent();

	    $data_retskb['batal'] = "1";
	    $data_retskb['alasan_batal'] = $alasan;
	    $this->db_logistik_pt->set($data_retskb);
	    $this->db_logistik_pt->where('id', $id_retskb);
	    $this->db_logistik_pt->where('no_ret', $no_retskb);
	    $this->db_logistik_pt->update('retskb');
	    if ($this->db_logistik_pt->affected_rows() > 0){
	        $bool_retskb = TRUE;
	    }
	    else{
	        $bool_retskb = FALSE;
	    }

	    $dataedit_retskbitem['batal'] = "1";
	    $dataedit_retskbitem['alasan_batal'] = $alasan;
	    $this->db_logistik_pt->set($dataedit_retskbitem);
	    $this->db_logistik_pt->where('no_ret', $no_retskb);
	    $this->db_logistik_pt->update('ret_skbitem');

	    if ($this->db_logistik_pt->affected_rows() > 0){
	        $bool_retskbitem = TRUE;
	    }
	    else{
	        $bool_retskbitem = FALSE;
	    }

	    if ($bool_retskb === TRUE && $bool_retskbitem === TRUE){
	        $data = TRUE;
	    }
	    else{
	        $data = FALSE;
	    }

	    echo json_encode($data);
	}

	// function cancel_ubah_rinci(){
	// 	// Error Get Data : array(3) {
	// 	//   ["hidden_no_ret"] => string(3) "622"
	// 	//   ["hidden_id_retskb"] => string(3) "988"
	// 	//   ["hidden_id_retskbitem"] => string(4) "1106"
	// 	// }
	// 	// var_dump($_POST);exit();
		
	// 	$no_ret = $this->input->post('hidden_no_ret');
	// 	$id_retskb = $this->input->post('hidden_id_retskb');
	// 	$hidden_id_retskbitem = $this->input->post('hidden_id_retskbitem');

	// 	$query_retskb = "SELECT * FROM retskb WHERE no_ret = '$no_ret' AND id = '$id_retskb'";
	// 	$data_retskb = $this->db_logistik_pt->query($query_retskb)->row();

	// 	$query_retskbitem = "SELECT * FROM ret_skbitem WHERE no_ret = '$no_ret' AND id = '$hidden_id_retskbitem'";
	// 	$data_retskbitem = $this->db_logistik_pt->query($query_retskbitem)->row();
	// 	echo json_encode(array('data_retskb' => $data_retskb, 'data_retskbitem' => $data_retskbitem));
	// }
}