<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') or exit('No direct script access allowed');

class Bkb extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik', TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
		$this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);

		switch ($db_pt) {
			case 'msal':
				$this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);
				$this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
				$this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
				break;
			case 'peak':
				$this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
				$this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
				$this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
				break;
			case 'mapa':
				$this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);
				$this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
				$this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
				break;
			case 'psam':
				$this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);
				$this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
				$this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
				break;
			default:
				# code...
				break;
		}

		$this->load->model('M_bkb');
	}

	function index()
	{
		$this->template->utama('V_bkb/vw_bkb_index');
	}

	function approval()
	{
		$this->template->utama('V_bkb/vw_bkb_approval');
	}

	function blmapproval()
	{
		$this->template->utama('V_bkb/vw_bkb_blm_approval');
	}

	function cari_dept()
	{
		$query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function input()
	{
		$this->template->utama('V_bkb/vw_bkb_input');
	}

	function list_barang()
	{
		$data = $this->M_bkb->get_list_barang();
		echo json_encode($data);
	}

	function get_list_barang()
	{
		$data = $this->M_bkb->get_list_barang();
		echo json_encode($data);
	}

	function pilih_afd()
	{
		$tm_tbm = $this->input->post('tm_tbm');
		switch ($tm_tbm) {
			case 'TM':
				$tmtbm = 'TM';
				break;
			default:
				$tmtbm = 'TBM';
				break;
		}
		$query = "SELECT * FROM afd WHERE tmtbm = '$tmtbm' AND AFD <> '' ORDER BY afd ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function pilih_tahun_tanam()
	{
		// var_dump("yak");exit();
		$tm_tbm = $this->input->post('tm_tbm');
		$afd_unit = $this->input->post('afd_unit');
		$blok_sub = $this->input->post('blok_sub');
		switch ($tm_tbm) {
			case 'TM':
				$tmtbm = 'TM';
				break;
			default:
				$tmtbm = 'TBM';
				break;
		}
		$query_thn_tanam = "SELECT DISTINCT thn_tanam FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' ORDER BY thn_tanam ASC";
		$data_thn_tanam = $this->db_logistik_pt->query($query_thn_tanam)->result();

		$query_master_blok = "SELECT DISTINCT blok FROM masterblok WHERE afd = '$afd_unit'";
		var_dump($query_master_blok);
		exit();
		$data_master_blok = $this->db_msal_personalia->query($query_master_blok)->result();
		var_dump($data_thn_tanam);
		var_dump($data_master_blok);
		exit();

		$data = array('data_thn_tanam' => $data_thn_tanam, 'data_master_blok' => $data_master_blok);
	}

	function pilih_bahan()
	{
		$tm_tbm = $this->input->post('tm_tbm');
		$afd_unit = $this->input->post('afd_unit');
		$blok_sub = $this->input->post('blok_sub');
		$thn_tanam = $this->input->post('thn_tanam');
		switch ($tm_tbm) {
			case 'TM':
				$tmtbm = 'TM';
				break;
			default:
				$tmtbm = 'TBM';
				break;
		}
		$query = "SELECT DISTINCT ket, coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam' ORDER BY thn_tanam ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function list_acc_beban()
	{
		$data = $this->M_bkb->get_list_acc_beban();
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
			$data = FALSE;
		} else {
			$get_stockawal = $stockawal->saldoawal_qty;

			$query_masuk = "SELECT SUM(qty) as stokmasuk FROM masukitem WHERE kodebartxt = '$id'";
			$summasuk = $this->db_logistik_pt->query($query_masuk)->row();

			$query_keluar = "SELECT SUM(qty2) as stokkeluar FROM keluarbrgitem WHERE kodebartxt = '$id'";
			$sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

			$data = ($get_stockawal + $summasuk->stokmasuk) - $sumkeluar->stokkeluar;
		}
		echo json_encode($data);
	}

	function list_bkb()
	{
		$data = $this->M_bkb->get_list_bkb();
		echo json_encode($data);
	}

	function list_bkb_approved()
	{
		$data = $this->M_bkb->get_list_bkb_approved();
		echo json_encode($data);
	}

	function list_bkb_blm_approval()
	{
		$data = $this->M_bkb->get_list_bkb_blm_approved();
		echo json_encode($data);
	}

	function list_bpb()
	{
		$data = $this->M_bkb->get_list_bpb();
		echo json_encode($data);
	}

	function list_bkbitem()
	{
		$data = $this->M_bkb->get_list_bkbitem();
		echo json_encode($data);
	}

	function get_bpbitem()
	{
		$nobpb = $this->input->post('nobpb');
		$norefbpb = $this->input->post('norefbpb');
		$data_bpb = $this->db_logistik_pt->get_where('bpb', array('nobpb' => $nobpb, 'norefbpb' => $norefbpb))->row();
		// $data_bpbitem = $this->db_logistik_pt->get_where('bpbitem',array('nobpb' => $nobpb, 'norefbpb' => $norefbpb, 'norefbkb IS' => NULL ))->result();
		$data_bpbitem = $this->db_logistik_pt->query("SELECT * FROM bpbitem WHERE nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND norefbkb IS NULL")->result();
		$data_approvalbpb = $this->db_logistik_pt->get_where('approval_bpb', array('no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->result();
		$data = array('data_bpb' => $data_bpb, 'data_bpbitem' => $data_bpbitem, 'data_approvalbpb' => $data_approvalbpb);
		echo json_encode($data);
	}

	function cetak()
	{
		$no_bkb = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$data['no_bkb'] = $no_bkb;
		$data['id'] = $id;
		$data['stockkeluar'] = $this->db_logistik_pt->get_where('stockkeluar', array('id' => $id, 'SKBTXT' => $no_bkb))->row();
		$noref = $data['stockkeluar']->NO_REF;
		$data['keluarbrgitem'] = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $no_bkb, 'NO_REF' => $data['stockkeluar']->NO_REF))->result();
		$data['bkb_approval'] = $this->db_logistik_pt->get_where('approval_bkb', array('no_bkb' => $no_bkb, 'no_ref_bkb' => $noref))->result();


		$this->qrcode($no_bkb, $id, $noref);

		$lokasibuatbkb = substr($noref, 0, 3);
		switch ($lokasibuatbkb) {
			case 'PST': // HO
				$lokasibkb = "HO";
				break;
			case 'ROM': // RO
				$lokasibkb = "RO";
				break;
			case 'FAC': // PKS
				$lokasibkb = "PKS";
				break;
			case 'EST': // SITE
				$lokasibkb = "SITE";
				break;
			default:
				break;
		}

		// var_dump($data['po']);exit();
		// $mpdf = new \Mpdf\Mpdf([
		//                       'mode' => 'utf-8', 
		//                       // 'format' => [190, 236],
		//                       'format' => 'A4',
		//                       'setAutoTopMargin' => 'stretch',
		//                       'orientation' => 'P'
		//                   ]);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'setAutoTopMargin' => 'stretch',
			'orientation' => 'P'
		]);

		// $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
		$mpdf->SetHTMLHeader('
                            <table width="100%" border="0" align="center">
                                <tr>
                                    <td rowspan="2" width="15%" height="10px"><!--img width="10%" height="60px" style="padding-left:8px" src="././assets/img/msal.jpg"--></td>
                                    <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari (' . $lokasibkb . ')</td>
                                </tr>
                                <!--tr>
                                    <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr-->
                            </table>
                            <hr style="width:100%;margin:0px;">
                            ');
		// $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

		$html = $this->load->view('V_bkb/vw_bkb_print', $data, true);

		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	function simpan_rinci_bkb()
	{
		$data = $this->M_bkb->simpan_rinci_bkb();
		echo json_encode($data);
	}

	function ubah_rinci_bkb()
	{
		$data = $this->M_bkb->ubah_rinci_bkb();
		echo json_encode($data);
	}

	function cancel_ubah_rinci()
	{
		// var_dump($_POST);exit();
		// Error Get Data : array(4) {
		//   ["hidden_no_bkb"]=>string(7) "6600006"
		//   ["hidden_no_ref_bkb"]=>string(25) "EST-BKB/SWJ/04/2019/00006"
		//   ["hidden_id_stok_keluar"]=>string(1) "5"
		//   ["hidden_id_keluarbrgitem"]=>string(2) "10"
		// }


		$no_bkb = $this->input->post('hidden_no_bkb');
		$no_ref_bkb = $this->input->post('hidden_no_ref_bkb');
		$id_stok_keluar = $this->input->post('hidden_id_stok_keluar');
		$hidden_id_keluarbrgitem = $this->input->post('hidden_id_keluarbrgitem');

		$query_stokkeluar = "SELECT * FROM stockkeluar WHERE SKBTXT = '$no_bkb' AND NO_REF = '$no_ref_bkb' AND id = '$id_stok_keluar'";
		// var_dump($query_stokkeluar);exit();
		$data_stokkeluar = $this->db_logistik_pt->query($query_stokkeluar)->row();

		// $no_po = $data_stokkeluar->nopotxt;
		// $no_ref_po = $data_stokkeluar->refpo;
		// $query_po = "SELECT tglpo FROM po WHERE nopotxt = '$no_po' AND noreftxt = '$no_ref_po'";

		$query_keluarbrgitem = "SELECT * FROM keluarbrgitem WHERE SKBTXT = '$no_bkb' AND NO_REF = '$no_ref_bkb' AND id = '$hidden_id_keluarbrgitem'";
		// var_dump($query_keluarbrgitem);exit();
		// $data_po = $this->db_logistik_pt->query($query_po)->row();
		$data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->row();
		// var_dump($data_stokkeluar);
		// var_dump($data_keluarbrgitem);
		// exit();

		echo json_encode(array('data_stokkeluar' => $data_stokkeluar, 'data_keluarbrgitem' => $data_keluarbrgitem));
	}

	function detail_bkb()
	{
		$this->template->utama('V_bkb/vw_bkb_edit');
	}

	function get_edit_bkb()
	{
		// var_dump($_POST);exit();
		// array(2) {
		//   ["no_bkb"]=>
		//   string(7) "6100001"
		//   ["id"]=>
		//   string(2) "14"
		// }

		$id = $this->input->post('id');
		$no_bkb = $this->input->post('no_bkb');

		$query_stokkeluar = "SELECT * FROM stockkeluar WHERE id = '$id' AND SKBTXT = '$no_bkb'";

		$data_stokkeluar = $this->db_logistik_pt->query($query_stokkeluar)->row();

		// $no_po = $data_stokkeluar->nopotxt;
		// $no_ref_po = $data_stokkeluar->refpo;
		$no_ref_bkb = $data_stokkeluar->NO_REF;

		// $query_po = "SELECT tglpo FROM po WHERE nopotxt = '$no_po' AND noreftxt = '$no_ref_po'";

		$query_keluarbrgitem = "SELECT * FROM keluarbrgitem WHERE SKBTXT = '$no_bkb' AND NO_REF = '$no_ref_bkb'";
		// $data_po = $this->db_logistik_pt->query($query_po)->row();
		$data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->result();

		echo json_encode(array('data_stokkeluar' => $data_stokkeluar, 'data_keluarbrgitem' => $data_keluarbrgitem));
	}

	function qrcode($no_bkb, $id, $noref)
	{
		$this->load->library('ciqrcode');
		// header("Content-Type: image/png");

		$config['cacheable']    = false; //boolean, the default is true
		$config['cachedir']     = './assets/qrcode/cache/'; //string, the default is application/cache/
		$config['errorlog']     = './assets/qrcode/errorlog/'; //string, the default is application/logs/
		$config['imagedir']     = './assets/qrcode/qr/bkb/'; //direktori penyimpanan qr code
		$config['quality']      = true; //boolean, the default is true
		$config['size']         = '1024'; //interger, the default is 1024
		$config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
		$config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name = $id . '_' . $no_bkb . '.png'; //buat name dari qr code

		$params['data'] = $noref; //data yang akan di jadikan QR CODE
		// $params['data'] = site_url('bkb/cetak/'.$no_bkb.'/'.$id); //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	}

	function get_all_cmb()
	{
		$bahan = $this->input->post('bahan');
		$query = "SELECT * FROM tahun_tanam WHERE coa_material = '$bahan' ORDER BY thn_tanam ASC";
		$data = $this->db_logistik_pt->query($query)->row();
		echo json_encode($data);
	}

	function list_po()
	{
		$data = $this->M_bkb->get_list_po();
		echo json_encode($data);
	}

	function get_detail_po()
	{
		$no_po = $this->input->post('no_po');
		$no_ref_po = $this->input->post('no_ref_po');

		$data = $this->db_logistik_pt->get_where('po', array('nopotxt' => $no_po, 'noreftxt' => $no_ref_po))->result();
		echo json_encode($data);
	}

	function hapus_rinci()
	{
		// var_dump($_POST);exit();
		// array(2) {
		//   ["hidden_id_stok_keluar"]=>
		//   string(1) "3"
		//   ["hidden_id_keluarbrgitem"]=>
		//   string(1) "9"
		// }

		$id_stok_keluar = $this->input->post('hidden_id_stok_keluar');
		$id_keluarbrgitem = $this->input->post('hidden_id_keluarbrgitem');

		// $user = $this->session->userdata('user');
		// $ip = $this->input->ip_address();
		// $platform = $this->platform->agent();

		// $query = "INSERT INTO item_po_history SELECT null, a.*,'DATA SEBELUM DIHAPUS', NOW(), '$user', '$ip', '$platform' FROM item_po a WHERE a.id = $id_po_item";

		//       $this->db_logistik_pt->query($query);
		//       if($this->db_logistik_pt->affected_rows() > 0){
		//           $bool_itempohistory = TRUE;
		//       }
		//       else{
		//           $bool_itempohistory = FALSE;
		//       }

		$data_delete = $this->db_logistik_pt->delete('keluarbrgitem', array('id' => $id_keluarbrgitem));

		// if($bool_itempohistory === TRUE && $data_delete === TRUE){
		if ($data_delete === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}
		echo json_encode($data);
	}

	// function batal(){
	// 	$id_stok_keluar = $this->input->post('id');
	// 	$no_bkb = $this->input->post('no_bkb');
	// 	$alasan =  $this->input->post('alasan');

	// 	$user = $this->session->userdata('user');
	// 	$ip = $this->input->ip_address();
	// 	$platform = $this->platform->agent();

	// 	$query = "INSERT INTO stokmasuk_history SELECT null, a.*,'DATA SEBELUM BATAL LPB, Alasan Batal : $alasan ','$user membatalkan LPB',NOW(), '$user', '$ip', '$platform' FROM stokmasuk a WHERE a.id = $id_stok_keluar";
	//        $this->db_logistik_pt->query($query);
	//        if($this->db_logistik_pt->affected_rows() > 0){
	//            $bool_stokmasukhistory = TRUE;
	//        }
	//        else {
	//            $bool_stokmasukhistory = FALSE;
	//        }

	// 	$dataedit['BATAL'] = "1";
	// 	$this->db_logistik_pt->set($dataedit);
	//        $this->db_logistik_pt->where('id', $id_stok_keluar);
	//        $this->db_logistik_pt->update('stockkeluar');
	//        if ($this->db_logistik_pt->affected_rows() > 0){
	//            $bool_stokmasuk = TRUE;
	//        }
	//        else{
	//            $bool_stokmasuk = FALSE;
	//        }

	//        if ($bool_stokmasukhistory === TRUE && $bool_stokmasuk === TRUE){
	//        	$data = TRUE;
	//        }
	//        else{
	//        	$data = FALSE;
	//        }

	// 	echo json_encode($data);
	// }

	function batal()
	{
		$id_stockkeluar = $this->input->post('id');
		$no_bkb = $this->input->post('no_bkb');
		$alasan =  $this->input->post('alasan');

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$get_stockkeluar = $this->db_logistik_pt->get_where('stockkeluar', array('id' => $id_stockkeluar, 'SKBTXT' => $no_bkb))->row();
		$no_ref_bkb = $get_stockkeluar->NO_REF;
		// $no_ref_po = $get_stockkeluar->refpo;

		$get_keluarbrgitem = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $no_bkb, 'NO_REF' => $no_ref_bkb))->result();

		$query = "INSERT INTO stockkeluar_history SELECT null, a.*,'DATA SEBELUM BATAL BKB, Alasan Batal : $alasan ', '$user membatalkan BKB $no_ref_bkb', NOW(), '$user', '$ip', '$platform' FROM stockkeluar a WHERE a.id = '$id_stockkeluar'";
		$this->db_logistik_pt->query($query);
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_stockkeluarhistory = TRUE;
		} else {
			$bool_stockkeluarhistory = FALSE;
		}

		$dataedit['batal'] = "1";
		$dataedit['alasan_batal'] = $alasan;
		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id_stockkeluar);
		$this->db_logistik_pt->update('stockkeluar');
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_stockkeluar = TRUE;
		} else {
			$bool_stockkeluar = FALSE;
		}

		$dataedit_keluarbrgitem['batal'] = '1';
		$dataedit_keluarbrgitem['alasan_batal'] = $alasan;
		$this->db_logistik_pt->set($dataedit_keluarbrgitem);
		$this->db_logistik_pt->where('NO_REF', $no_ref_bkb);
		$this->db_logistik_pt->where('SKBTXT', $no_bkb);
		$this->db_logistik_pt->update('keluarbrgitem');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_keluarbrgitem = TRUE;
		} else {
			$bool_keluarbrgitem = FALSE;
		}

		if ($bool_stockkeluarhistory === TRUE && $bool_stockkeluar === TRUE && $bool_keluarbrgitem === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function konfirmasi_approval()
	{
		// array(5) {
		//   ["nobkb"]=>string(7) "6600001"
		//   ["norefbkb"]=>string(25) "EST-BPB/SWJ/07/2019/00001"
		//   ["kodebar"]=>string(15) "102505420000001"
		//   ["jabatan"]=>string(3) "KTU"
		//   ["approval"]=>string(6) "setuju"
		// }

		$nobkb		= $this->input->post('nobkb');
		$norefbkb	= $this->input->post('norefbkb');
		$kodebar	= $this->input->post('kodebar');
		$jabatan	= $this->input->post('jabatan');
		$approval	= $this->input->post('approval');

		switch ($jabatan) {
			case 'KTU':
			case 'KasieGudang':
				if ($approval == "setuju") {
					$dataedit_approval['status_kasie_gudang'] 	= "1";
				} elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_kasie_gudang'] 	= "2";
				}
				$dataedit_approval['tgl_kasie_gudang'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_ktu'] 		= $ket_ktu;
				break;
			case 'KasiePembukuan':
				if ($approval == "mengetahui") {
					$dataedit_approval['status_kasie_pembukuan'] 		= "3";
				}
				$dataedit_approval['tgl_kasie_pembukuan'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_gm'] 		= $ket_gm;
				break;
			default:
				break;
		}

		// $this->db_logistik_pt->trans_start();
		$this->db_logistik_pt->set($dataedit_approval);
		$this->db_logistik_pt->where('no_bkb', $nobkb);
		$this->db_logistik_pt->where('no_ref_bkb', $norefbkb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('approval_bkb');
		// $this->db_logistik_pt->trans_complete();
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_approval_bkb = TRUE;
		} else {
			// if ($this->db_logistik_pt->trans_status() === FALSE){
			$bool_approval_bkb = FALSE;
			// }
			// else{
			// $bool_approval_bkb = TRUE;
			// }
		}

		$query_qty = "SELECT qty2 FROM keluarbrgitem WHERE SKBTXT = '$nobkb' AND NO_REF = '$norefbkb' AND kodebartxt = '$kodebar'";
		$get_qty = $this->db_logistik_pt->query($query_qty)->row();
		$qty_disetujui = $get_qty->qty2;

		$dataedit_bkbitem['qty2'] = $qty_disetujui;

		$this->db_logistik_pt->set($dataedit_bkbitem);
		$this->db_logistik_pt->where('SKBTXT', $nobkb);
		$this->db_logistik_pt->where('NO_REF', $norefbkb);
		$this->db_logistik_pt->where('kodebartxt', $kodebar);
		$this->db_logistik_pt->update('keluarbrgitem');
		// var_dump($this->db_logistik_pt->last_query());exit();

		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_bkbitem = TRUE;
		} else {
			$bool_bkbitem = FALSE;
		}

		// $count_item_appr = $this->db_logistik_pt->get_where('approval_bkb', array('status_ktu <>'=>'0','status_mgr <>'=>'0','status_gm <>'=>'0','no_bkb'=>$nobkb,'norefbkb'=>$norefbkb))->num_rows();
		$count_item_appr = $this->db_logistik_pt->get_where('approval_bkb', array('status_kasie_gudang' => '1', 'no_bkb' => $nobkb, 'no_ref_bkb' => $norefbkb))->num_rows();
		$count_flag_appr = $this->db_logistik_pt->get_where('approval_bkb', array('status_kasie_gudang' => '1', 'status_kasie_pembukuan' => '3', 'no_bkb' => $nobkb, 'no_ref_bkb' => $norefbkb))->num_rows();
		$count_kasie_appr = $this->db_logistik_pt->get_where('approval_bkb', array('status_kasie_pembukuan' => '3', 'no_bkb' => $nobkb, 'no_ref_bkb' => $norefbkb))->num_rows();
		$count_bkbitem = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $nobkb, 'NO_REF' => $norefbkb))->num_rows();

		// var_dump($count_item_appr);
		// var_dump($count_bkbitem);
		// exit();
		if ($count_kasie_appr  == $count_bkbitem) {
			$dataedit_bkb['approval'] = "1";
			$this->db_logistik_pt->set($dataedit_bkb);
			$this->db_logistik_pt->where('SKBTXT', $nobkb);
			$this->db_logistik_pt->where('NO_REF', $norefbkb);
			$this->db_logistik_pt->update('stockkeluar');
		}

		if ($count_flag_appr == $count_bkbitem) {
			$dataedit_bkb['flag_approval'] = "1";
			$this->db_logistik_pt->set($dataedit_bkb);
			$this->db_logistik_pt->where('SKBTXT', $nobkb);
			$this->db_logistik_pt->where('NO_REF', $norefbkb);
			$this->db_logistik_pt->update('stockkeluar');
		}

		if ($count_item_appr == $count_bkbitem) {
			$dataedit_bkb['approval_kasie'] = "1";
			$this->db_logistik_pt->set($dataedit_bkb);
			$this->db_logistik_pt->where('SKBTXT', $nobkb);
			$this->db_logistik_pt->where('NO_REF', $norefbkb);
			$this->db_logistik_pt->update('stockkeluar');
		}

		// if($jabatan == "KTU"){
		// 	if($bool_approval_bkb === TRUE && $bool_bkbitem === TRUE){
		// 		echo json_encode(TRUE);
		// 	}
		// 	else {
		// 		return FALSE;
		// 	}
		// }
		// else {
		if ($bool_approval_bkb === TRUE) {
			echo json_encode(TRUE);
		} else {
			return FALSE;
		}
		// }
	}

	function rev_qty()
	{
		$nobkb			= $this->input->post('nobkb');
		$norefbkb		= $this->input->post('norefbkb');
		$kodebar		= $this->input->post('kodebar');
		$jabatan		= $this->input->post('jabatan');
		$approval		= $this->input->post('approval');
		$qty_disetujui	= $this->input->post('qty_disetujui');

		// var_dump($_POST);exit();

		$dataedit_bkbitem['qty2'] = $qty_disetujui;

		$this->db_logistik_pt->set($dataedit_bkbitem);
		$this->db_logistik_pt->where('SKBTXT', $nobkb);
		$this->db_logistik_pt->where('NO_REF', $norefbkb);
		$this->db_logistik_pt->where('kodebartxt', $kodebar);
		$this->db_logistik_pt->update('keluarbrgitem');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			echo json_encode(TRUE);
		} else {
			return FALSE;
		}
	}

	function req_rev_qty()
	{
		// array(3) {
		//   ["nobpb"]=>string(7) "6600002"
		//   ["norefbpb"]=>string(25) "EST-BPB/SWJ/07/2019/00002"
		//   ["kodebar"]=>string(15) "102505950000183"
		// }
		// var_dump($_POST);exit();
		// var_dump($_SESSION);exit();
		$nobpb = $this->input->post('nobpb');
		$norefbpb = $this->input->post('norefbpb');
		$kodebar = $this->input->post('kodebar');

		$data_reqrevqty['flag_req_rev_qty'] = '1';
		$data_reqrevqty['user_req_rev_qty'] =  $this->session->userdata('user');
		$this->db_logistik_pt->set($data_reqrevqty);
		$this->db_logistik_pt->where('no_bpb', $nobpb);
		$this->db_logistik_pt->where('norefbpb', $norefbpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('approval_bpb');
		// var_dump($this->db_logistik_pt->last_query());exit();

		if ($this->db_logistik_pt->affected_rows() > 0) {
			echo json_encode(TRUE);
		} else {
			return FALSE;
		}
	}

	function menunggu_approval()
	{
		$this->template->utama('V_bkb/vw_bkb_menunggu_approval');
	}

	function list_appr_rev_qty_bpb()
	{
		$data = $this->M_bkb->get_appr_rev_qty_bpb();
		echo json_encode($data);
	}

	function approve_req_rev_qty()
	{
		// var_dump($_POST);exit();
		// array(3) {
		//   ["no_bpb"]=>string(7) "6600002"
		//   ["norefbpb"]=>string(25) "EST-BPB/SWJ/07/2019/00002"
		//   ["kodebar"]=>string(15) "102505950000183"
		// }
		$no_bpb = $this->input->post('no_bpb');
		$norefbpb = $this->input->post('norefbpb');
		$kodebar = $this->input->post('kodebar');

		$data_reqrevqty['flag_req_rev_qty'] = '2';
		$data_reqrevqty['tgl_appr_req_ktu'] = date('Y-m-d H:i:s');
		$this->db_logistik_pt->set($data_reqrevqty);
		$this->db_logistik_pt->where('no_bpb', $no_bpb);
		$this->db_logistik_pt->where('norefbpb', $norefbpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('approval_bpb');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			echo json_encode(TRUE);
		} else {
			return FALSE;
		}
	}
}
