<?php
date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') or exit('No direct script access allowed');

class Bpb extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik', TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);

		$this->db_logistik_msal = $this->load->database('db_logistik_msal', TRUE);
		$this->db_logistik_mapa = $this->load->database('db_logistik_mapa', TRUE);
		$this->db_logistik_psam = $this->load->database('db_logistik_psam', TRUE);
		$this->db_logistik_peak = $this->load->database('db_logistik_peak', TRUE);

		$this->db_msal_personalia = $this->load->database('db_msal_personalia', TRUE);
		$this->load->model('M_bpb');
	}

	function index()
	{
		$this->template->utama('V_bpb/vw_bpb_index');
	}

	function approval()
	{
		$this->template->utama('V_bpb/vw_bpb_approval');
	}

	function blmapproval()
	{
		$this->template->utama('V_bpb/vw_bpb_blm_approval');
	}

	function cari_dept()
	{
		$query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function list_bpb()
	{
		$data = $this->M_bpb->get_list_bpb();
		echo json_encode($data);
	}

	function list_bpb_approval()
	{
		$data = $this->M_bpb->get_list_bpb_approval();
		echo json_encode($data);
	}

	function list_bpb_blm_approval()
	{
		$data = $this->M_bpb->get_list_bpb_blm_approval();
		echo json_encode($data);
	}

	function list_bpbitem()
	{
		$data = $this->M_bpb->get_list_bpbitem();
		echo json_encode($data);
	}

	function input()
	{
		$sess_app_pt = $this->session->userdata('app_pt');
		$this->template->utama('V_bpb/vw_bpb_input');
	}

	function list_barang()
	{
		$data = $this->M_bpb->get_list_barang();
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
		// $query = "SELECT * FROM afd WHERE tmtbm = '$tmtbm' AND AFD <> '' ORDER BY afd ASC";
		// $data = $this->db_logistik_pt->query($query)->result();

		$query = "SELECT DISTINCT(afd) FROM masterblok WHERE afd <> '00' ORDER BY afd ASC";
		$data = $this->db_msal_personalia->query($query)->result();
		echo json_encode($data);
	}

	function pilih_blok_sub()
	{
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
		$query_master_blok = "SELECT DISTINCT blok FROM masterblok WHERE afd = '$afd_unit'";
		$data = $this->db_msal_personalia->query($query_master_blok)->result();

		// $data = array('data_thn_tanam'=>$data_thn_tanam,'data_master_blok'=>$data_master_blok);
		echo json_encode($data);
	}

	function pilih_tahun_tanam()
	{
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
		// $query_thn_tanam = "SELECT DISTINCT thn_tanam FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' ORDER BY thn_tanam ASC";
		// $data_thn_tanam = $this->db_logistik_pt->query($query_thn_tanam)->result();
		$query_thn_tanam = "SELECT DISTINCT tahuntanam FROM masterblok WHERE AFD = '$afd_unit' AND blok = '$blok_sub' ORDER BY tahuntanam ASC";
		$data = $this->db_msal_personalia->query($query_thn_tanam)->result();

		echo json_encode($data);
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
		// $query = "SELECT DISTINCT ket, coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam' ORDER BY thn_tanam ASC";
		$query = "SELECT DISTINCT coa_material FROM tahun_tanam WHERE tmtbm = '$tmtbm' AND AFD = '$afd_unit' AND thn_tanam = '$thn_tanam' ORDER BY thn_tanam ASC";
		$data_coa_material = $this->db_logistik_pt->query($query)->result();
		$data = array();
		foreach ($data_coa_material as $list_coa_material) {
			$data_coa = array();
			$noac = $list_coa_material->coa_material;
			$query_coa = "SELECT noac, nama FROM noac WHERE noac = '$noac'";
			$get_coa = $this->db_logistik->query($query_coa)->row();
			$data_coa[] = $get_coa->noac;
			$data_coa[] = $get_coa->nama;
			array_push($data, $data_coa);
		}
		echo json_encode($data);
	}

	function list_acc_beban()
	{
		$data = $this->M_bpb->get_list_acc_beban();
		echo json_encode($data);
	}

	function sum_stok()
	{
		$id = $this->input->post('kodbar');
		$sess_kode_pt = $this->session->userdata('kode_pt');


		$ym_periode  = $this->session->userdata('ym_periode');
		$query_stockawal = "SELECT saldoawal_qty, QTY_MASUK, QTY_KELUAR, QTY_ADJMASUK, QTY_ADJKELUAR FROM stockawal WHERE KODE = '$sess_kode_pt' AND kodebartxt = '$id' AND txtperiode = '$ym_periode'";
		// var_dump($query_stockawal);exit();
		// $query_stockawal = "SELECT saldoawal_qty FROM stockawal WHERE kodebartxt = '$id' AND tglinput = (SELECT MIN(tglinput) FROM stockawal WHERE kodebartxt = '$id')";

		$stockawal = $this->db_logistik_pt->query($query_stockawal);
		$stockawal_numrow = $stockawal->num_rows();

		if ($stockawal_numrow == "0") {
			$get_saldoawal_qty = "0";
			$data = FALSE;
		} else {
			$get_stockawal = $stockawal->row();
			$get_saldoawal_qty = $get_stockawal->saldoawal_qty;
			$get_QTY_MASUK = $get_stockawal->QTY_MASUK;
			$get_QTY_KELUAR = $get_stockawal->QTY_KELUAR;
			$get_QTY_ADJMASUK = $get_stockawal->QTY_ADJMASUK;
			$get_QTY_ADJKELUAR = $get_stockawal->QTY_ADJKELUAR;

			$query_masuk = "SELECT SUM(qty) as totqtymasuk FROM masukitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kdpt = '$sess_kode_pt'";
			$summasuk = $this->db_logistik_pt->query($query_masuk)->row();

			$totqtymasuk = $summasuk->totqtymasuk;
			if (empty($summasuk->totqtymasuk)) {
				$totqtymasuk = "0";
			}

			$query_keluar = "SELECT SUM(qty2) as totqtykeluar FROM keluarbrgitem WHERE kodebartxt = '$id' AND kodept = '$sess_kode_pt' AND txtperiode = '$ym_periode' AND BATAL = '0'";
			$sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

			$totqtykeluar = $sumkeluar->totqtykeluar;
			if (empty($sumkeluar->totqtykeluar)) {
				$totqtykeluar = "0";
			}

			$data = ($get_saldoawal_qty + $totqtymasuk) - $totqtykeluar;
		}
		echo json_encode($data);
	}

	function sum_stok_booking()
	{
		$id = $this->input->post('kodbar');

		$query_booking = "SELECT SUM(qty) as stokbooking FROM bpbitem_booking WHERE kodebar = '$id'";
		$get_booking = $this->db_logistik_pt->query($query_booking)->row();

		if (empty($get_booking->stokbooking)) {
			$data = 0;
		} else {
			$data = $get_booking->stokbooking;
		}

		echo json_encode($data);
	}

	function simpan_rinci_bpb()
	{
		$data = $this->M_bpb->simpan_rinci_bpb();
		echo json_encode($data);
	}

	function ubah_rinci_bpb()
	{
		$data = $this->M_bpb->ubah_rinci_bpb();
		echo json_encode($data);
	}

	function cancel_ubah_rinci()
	{
		// Error Get Data : array(3) {
		//   ["hidden_no_bpb"]=>string(9) "190700001"
		//   ["hidden_id_bpb"]=>string(1) "1"
		//   ["hidden_id_bpbitem"]=>string(1) "3"
		// }
		// var_dump($_POST);exit();

		$no_bpb = $this->input->post('hidden_no_bpb');
		$id_bpb = $this->input->post('hidden_id_bpb');
		$hidden_id_bpbitem = $this->input->post('hidden_id_bpbitem');

		$query_bpb = "SELECT * FROM bpb WHERE nobpb = '$no_bpb' AND id = '$id_bpb'";
		$data_bpb = $this->db_logistik_pt->query($query_bpb)->row();

		$query_bpbitem = "SELECT * FROM bpbitem WHERE nobpb = '$no_bpb' AND id = '$hidden_id_bpbitem'";
		$data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->row();
		echo json_encode(array('data_bpb' => $data_bpb, 'data_bpbitem' => $data_bpbitem));
	}


	function hapus_rinci()
	{
		// var_dump($_POST);exit();

		$id_bpb = $this->input->post('hidden_id_bpb');
		$id_bpbitem = $this->input->post('hidden_id_bpbitem');

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
		$data_delete = $this->db_logistik_pt->delete('bpbitem', array('id' => $id_bpbitem));
		// var_dump($this->db_logistik_pt->last_query());exit();

		// if($bool_itempohistory === TRUE && $data_delete === TRUE){
		if ($data_delete === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}
		echo json_encode($data);
	}

	function detail_bpb()
	{
		$this->template->utama('V_bpb/vw_bpb_edit');
	}

	function get_edit_bpb()
	{
		// var_dump($_POST);exit();
		// array(2) {
		//   ["no_bpb"]=>
		//   string(7) "6100001"
		//   ["id"]=>
		//   string(2) "14"
		// }

		$id = $this->input->post('id');
		$no_bpb = $this->input->post('no_bpb');

		$query_bpb = "SELECT * FROM bpb WHERE id = '$id' AND nobpb = '$no_bpb'";

		$data_bpb = $this->db_logistik_pt->query($query_bpb)->row();

		$query_bpbitem = "SELECT * FROM bpbitem WHERE nobpb = '$no_bpb'";
		$data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();

		echo json_encode(array('data_bpb' => $data_bpb, 'data_bpbitem' => $data_bpbitem));
	}

	function cetak()
	{
		$no_bpb = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$data['no_bpb'] = $no_bpb;
		$data['id'] = $id;
		$data['bpb'] = $this->db_logistik_pt->get_where('bpb', array('id' => $id, 'nobpb' => $no_bpb))->row();
		$data['bpbitem'] = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $no_bpb))->result();
		$data['bpb_approval'] = $this->db_logistik_pt->get_where('approval_bpb', array('no_bpb' => $no_bpb))->result();

		$noref = $data['bpb']->norefbpb;
		$this->qrcode($no_bpb, $id, $noref);

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
                                	<td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                </tr>
                                <!-- <tr>
                                    <td rowspan="2" width="15%" height="10px"><img width="10%" height="60px" style="padding-left:8px" src="' . base_url() . 'assets/img/msal.jpg"></td>
                                    <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                </tr> -->
                                <!-- <tr>
                                    <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr> -->
                            </table>
                            <hr style="width:100%;margin:0px;">
                            ');
		// $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

		$html = $this->load->view('V_bpb/vw_bpb_print', $data, true);

		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	function qrcode($no_bpb, $id, $noref)
	{
		$this->load->library('ciqrcode');

		$config['cacheable']    = false; //boolean, the default is true
		$config['cachedir']     = './assets/qrcode/cache/'; //string, the default is application/cache/
		$config['errorlog']     = './assets/qrcode/errorlog/'; //string, the default is application/logs/
		$config['imagedir']     = './assets/qrcode/qr/bpb/'; //direktori penyimpanan qr code
		$config['quality']      = true; //boolean, the default is true
		$config['size']         = '1024'; //interger, the default is 1024
		$config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
		$config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name = $id . '_' . $no_bpb . '.png'; //buat name dari qr code

		// $params['data'] = site_url('bpb/cetak/'.$no_bpb.'/'.$id); //data yang akan di jadikan QR CODE
		$params['data'] = $noref; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	}

	function batal()
	{
		$id_bpb = $this->input->post('id');
		$no_bpb = $this->input->post('no_bpb');
		$alasan =  $this->input->post('alasan');

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$get_bpb = $this->db_logistik_pt->get_where('bpb', array('id' => $id_bpb, 'nobpb' => $no_bpb))->row();

		$get_bpbitem = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $no_bpb))->result();

		// $query = "INSERT INTO bpb_history SELECT null, a.*,'DATA SEBELUM BATAL BKB, Alasan Batal : $alasan ', '$user membatalkan BKB $no_ref_bpb', NOW(), '$user', '$ip', '$platform' FROM bpb a WHERE a.id = $id_bpb";
		// $this->db_logistik_pt->query($query);
		// if($this->db_logistik_pt->affected_rows() > 0){
		//     $bool_bpbhistory = TRUE;
		// }
		// else {
		//     $bool_bpbhistory = FALSE;
		// }

		$dataedit['batal'] = "1";
		$dataedit['alasan_batal'] = $alasan;
		$this->db_logistik_pt->set($dataedit);
		$this->db_logistik_pt->where('id', $id_bpb);
		$this->db_logistik_pt->where('nobpb', $no_bpb);
		$this->db_logistik_pt->update('bpb');
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_bpb = TRUE;
		} else {
			$bool_bpb = FALSE;
		}

		$dataedit_bpbitem['batal'] = '1';
		$dataedit_bpbitem['alasan_batal'] = $alasan;
		$this->db_logistik_pt->set($dataedit_bpbitem);
		$this->db_logistik_pt->where('nobpb', $no_bpb);
		$this->db_logistik_pt->update('bpbitem');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_bpbitem = TRUE;
		} else {
			$bool_bpbitem = FALSE;
		}

		// if ($bool_bpbhistory === TRUE && $bool_bpb === TRUE && $bool_bpbitem === TRUE){
		if ($bool_bpb === TRUE && $bool_bpbitem === TRUE) {
			$data = TRUE;
		} else {
			$data = FALSE;
		}

		echo json_encode($data);
	}

	function get_all_cmb()
	{
		$bahan = $this->input->post('bahan');
		$query = "SELECT * FROM tahun_tanam WHERE coa_material = '$bahan' ORDER BY thn_tanam ASC";
		$data = $this->db_logistik_pt->query($query)->row();
		echo json_encode($data);
	}

	function konfirmasi_approval()
	{
		// array(5) {
		//   ["nobpb"]=>string(7) "6600001"
		//   ["norefbpb"]=>string(25) "EST-BPB/SWJ/07/2019/00001"
		//   ["kodebar"]=>string(15) "102505420000001"
		//   ["jabatan"]=>string(3) "KTU"
		//   ["approval"]=>string(6) "setuju"
		// }

		$nobpb		= $this->input->post('nobpb');
		$norefbpb	= $this->input->post('norefbpb');
		$kodebar	= $this->input->post('kodebar');
		$jabatan	= $this->input->post('jabatan');
		$approval	= $this->input->post('approval');

		// if(empty(var)){

		// }
		// $dataedit['qty_disetujui'] 	= $qty_disetujui;

		switch ($jabatan) {
			case 'AsistenAfd':
				if ($approval == "setuju") {
					$dataedit_approval['status_asisten_afd'] 	= "1";
				} elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_asisten_afd'] 	= "2";
				}
				$dataedit_approval['tgl_asisten_afd'] 		= date('Y-m-d H:i:s');
				$data_appr['approval_afd'] 				= '1';
				// $dataedit_approval['ket_asisten_afd'] 		= $ket_asisten_afd;
				break;
			case 'KepalaKebun':
				if ($approval == "setuju") {
					$dataedit_approval['status_kepala_kebun'] 	= "1";
				} elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_kepala_kebun'] 	= "2";
				}
				$dataedit_approval['tgl_kepala_kebun'] 		= date('Y-m-d H:i:s');
				$data_appr['approval_kpl_kebun'] 	= '1';
				// $dataedit_approval['ket_asisten_kepala_kebun'] 		= $ket_asisten_kepala_kebun;
				break;
			case 'KasieAgronomi':
				if ($approval == "mengetahui") {
					$dataedit_approval['status_kasie_agronomi'] 	= "3";
				}
				$dataedit_approval['tgl_kasie_agronomi'] 		= date('Y-m-d H:i:s');
				$data_appr['approval_kasie'] 	= '1';
				// $dataedit_approval['ket_kasie_agronomi'] 		= $ket_kasie_agronomi;
				break;
			case 'KTU':
				if ($approval == "setuju") {
					$dataedit_approval['status_ktu'] 	= "1";
				} elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_ktu'] 	= "2";
				}
				$dataedit_approval['tgl_ktu'] 		= date('Y-m-d H:i:s');
				$data_appr['approval'] 	= '1';
				// $dataedit_approval['ket_ktu'] 		= $ket_ktu;
				break;
			case 'GM':
				if ($approval == "mengetahui") {
					$dataedit_approval['status_gm'] 		= "3";
				}
				$dataedit_approval['tgl_gm'] 		= date('Y-m-d H:i:s');
				$data_appr['approval_gm'] 		= '1';
				// $dataedit_approval['ket_gm'] 		= $ket_gm;
				break;
			default:
				break;
		}

		// $this->db_logistik_pt->trans_start();
		$this->db_logistik_pt->set($dataedit_approval);
		$this->db_logistik_pt->where('no_bpb', $nobpb);
		$this->db_logistik_pt->where('norefbpb', $norefbpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('approval_bpb');
		// $this->db_logistik_pt->trans_complete();
		if ($this->db_logistik_pt->affected_rows() > 0) {
			$bool_approval_bpb = TRUE;
		} else {
			$bool_approval_bpb = FALSE;
		}

		if ($jabatan == "KTU") {
			$query_qty = "SELECT qty, qty_disetujui FROM bpbitem WHERE nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND kodebar = '$kodebar'";
			$get_qty = $this->db_logistik_pt->query($query_qty)->row();
			//$qty_disetujui = $get_qty->qty;
			if ($get_qty->qty_disetujui == 0) {
				$qty_disetujui = $get_qty->qty;
			} else {
				$qty_disetujui = $get_qty->qty_disetujui;
			}

			$dataedit_bpbitem['qty_disetujui'] = $qty_disetujui;

			$this->db_logistik_pt->set($dataedit_bpbitem);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->where('kodebar', $kodebar);
			$this->db_logistik_pt->update('bpbitem');

			$this->_count_item_appr($nobpb, $norefbpb);

			// if($bool_approval_bpb === TRUE && $bool_bpbitem === TRUE){
			if ($bool_approval_bpb === TRUE) {
				echo json_encode(TRUE);
			} else {
				return FALSE;
			}
		} else {
			$this->_count_item_appr($nobpb, $norefbpb);

			if ($bool_approval_bpb === TRUE) {
				echo json_encode(TRUE);
			} else {
				return FALSE;
			}
		}
	}

	function _count_item_appr($nobpb, $norefbpb)
	{
		$count_item_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_ktu' => '1', 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		$count_flag_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_asisten_afd !=' => NULL, 'status_kasie_agronomi !=' => NULL, 'status_kepala_kebun !=' => NULL, 'status_gm !=' => '0', 'status_ktu' => '1', 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		$count_afd_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_asisten_afd !=' => NULL, 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		$count_kplkbn_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_kepala_kebun !=' => NULL, 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		$count_kasie_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_kasie_agronomi !=' => NULL, 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		$count_gm_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_gm !=' => NULL, 'no_bpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		//$count_flag_appr1 = $this->db_logistik_pt->get_where('approval_bpb', array('status_gm'=>'1','no_bpb'=>$nobpb,'norefbpb'=>$norefbpb))->num_rows();
		$count_bpbitem = $this->db_logistik_pt->get_where('bpbitem', array('nobpb' => $nobpb, 'norefbpb' => $norefbpb))->num_rows();
		if ($count_afd_appr == $count_bpbitem) {
			$dataedit_bpb['approval_afd'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
		if ($count_kplkbn_appr == $count_bpbitem) {
			$dataedit_bpb['approval_kpl_kbn'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
		if ($count_kasie_appr == $count_bpbitem) {
			$dataedit_bpb['approval_kasie'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
		if ($count_item_appr == $count_bpbitem) {
			$dataedit_bpb['approval'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
		if ($count_gm_appr == $count_bpbitem) {
			$dataedit_bpb['approval_gm'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
		if ($count_flag_appr == $count_bpbitem) {
			$dataedit_bpb['flag_approval'] = "1";
			$this->db_logistik_pt->set($dataedit_bpb);
			$this->db_logistik_pt->where('nobpb', $nobpb);
			$this->db_logistik_pt->where('norefbpb', $norefbpb);
			$this->db_logistik_pt->update('bpb');
		}
	}

	function rev_qty()
	{
		$nobpb			= $this->input->post('nobpb');
		$norefbpb		= $this->input->post('norefbpb');
		$kodebar		= $this->input->post('kodebar');
		$jabatan		= $this->input->post('jabatan');
		$approval		= $this->input->post('approval');
		$qty_disetujui	= $this->input->post('qty_disetujui');

		$dataedit_bpbitem['qty_disetujui'] = $qty_disetujui;

		$this->db_logistik_pt->set($dataedit_bpbitem);
		$this->db_logistik_pt->where('nobpb', $nobpb);
		$this->db_logistik_pt->where('norefbpb', $norefbpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('bpbitem');

		if ($this->db_logistik_pt->affected_rows() > 0) {
			echo json_encode(TRUE);
		} else {
			return FALSE;
		}
	}
}
