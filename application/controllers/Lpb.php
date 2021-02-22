<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') OR exit('No direct script access allowed');

class Lpb extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_lpb');
	}

	function index(){
		$data['url'] = 0;
		$this->template->utama('V_lpb/vw_lpb_index', $data);		
	}
	
	function approval(){
		$this->template->utama('V_lpb/vw_lpb_approval');
	}
	
	function blmapproval(){
		$url = $this->uri->segment(2);
		if($url == 'blmapproval')
		$data['url'] = 1;
		$this->template->utama('V_lpb/vw_lpb_index',$data);
	}

	function input(){
		// var_dump($_SESSION);exit();
		// 01 = PT.MULIA SAWIT AGRO LESTARI (HO)
		// 02 = PT.MULIA SAWIT AGRO LESTARI (RO)
		// 03 = PT.MULIA SAWIT AGRO LESTARI (PKS)
		// 06 = PT.MULIA SAWIT AGRO LESTARI (SITE)
		$this->template->utama('V_lpb/vw_lpb_input');
	}

	function list_po(){
		$data = $this->M_lpb->get_list_po();
		echo json_encode($data);
	}

	function list_lpb(){
		$url = $this->uri->segment(3);
		if($url == 0)
			$data = $this->M_lpb->get_list_lpb();
		else
			$data = $this->M_lpb->get_list_lpb($url);
		echo json_encode($data);
	}
	function list_lpbitem(){
		$data = $this->M_lpb->get_list_lpbitem();
		echo json_encode($data);
	}
	
	function list_lpb_approval(){
		$data = $this->M_lpb->get_list_lpb_approval();
		echo json_encode($data);
	}

	function get_detail_po(){
		$no_po = $this->input->post('no_po');
		$no_ref_po = $this->input->post('no_ref_po');

		$data = $this->db_logistik_pt->get_where('po', array('nopotxt' => $no_po, 'noreftxt' => $no_ref_po))->result();

		echo json_encode($data);
	}

	function get_list_barang(){
		$data = $this->M_lpb->get_list_barang();
		echo json_encode($data);
	}

	function get_grup_barang(){
		$kodebar =  $this->input->post('kodebar');
		$data =  $this->db_logistik->get_where('kodebar', array('kodebartxt'=> $kodebar))->row();
		echo json_encode($data);
	}

	function simpan_rinci_lpb(){
		$data = $this->M_lpb->simpan_rinci_lpb();
		echo json_encode($data);
	}

	function ubah_rinci_lpb(){
		$data = $this->M_lpb->ubah_rinci_lpb();
		echo json_encode($data);
	}

	function cancel_ubah_rinci(){
		// var_dump($_POST);exit();
		// Error Get Data : array(4) {
		//   ["hidden_no_lpb"]=>string(7) "6600002"
		//   ["hidden_no_ref_lpb"]=>string(23) "EST-LPB/SWJ/03/19/00002"
		//   ["hidden_id_stok_masuk"]=>string(1) "2"
		//   ["hidden_id_masuk_item"]=>string(1) "3"
		// }

		$no_lpb = $this->input->post('hidden_no_lpb');
		$no_ref_lpb = $this->input->post('hidden_no_ref_lpb');
		$id_stokmasuk = $this->input->post('hidden_id_stok_masuk');
		$id_masukitem = $this->input->post('hidden_id_masuk_item');

		$query_stokmasuk = "SELECT * FROM stokmasuk WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND id = '$id_stokmasuk'";
		$data_stokmasuk = $this->db_logistik_pt->query($query_stokmasuk)->row();
		
		$no_po = $data_stokmasuk->nopotxt;
		$no_ref_po = $data_stokmasuk->refpo;

		$query_masukitem = "SELECT * FROM masukitem WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND id = '$id_masukitem'";
		$data_masukitem = $this->db_logistik_pt->query($query_masukitem)->row();
		
		$query_po = "SELECT tglpo FROM po WHERE nopotxt = '$no_po' AND noreftxt = '$no_ref_po'";
		$data_po = $this->db_logistik_pt->query($query_po)->row();
		
		$query_item_po = "SELECT SUM(qty) as qty_po FROM item_po WHERE kodebartxt = '$data_masukitem->kodebartxt' AND nopotxt = '$no_po' AND noref = '$no_ref_po'";
		$data_qty_po = $this->db_logistik_pt->query($query_item_po)->row();

		echo json_encode(array('data_stokmasuk' => $data_stokmasuk, 'data_masukitem' => $data_masukitem, 'data_po' => $data_po, 'data_qty_po' => $data_qty_po));
	}

	function hapus_rinci(){
		$id_stokmasuk = $this->input->post('hidden_id_stok_masuk');
		$id_masukitem = $this->input->post('hidden_id_masuk_item');

		$get_stokmasuk = $this->db_logistik_pt->get_where('stokmasuk',array('id' => $id_stokmasuk))->row();
		$get_masukitem = $this->db_logistik_pt->get_where('masukitem',array('id' => $id_masukitem))->row();

		$no_lpb = $get_stokmasuk->ttgtxt;
		$no_ref_lpb = $get_stokmasuk->noref;
		$no_ref_po = $get_stokmasuk->refpo;
		$nabar = $get_masukitem->nabar;
		$kodebar = $get_masukitem->kodebartxt;

		$data_masukitem = $this->db_logistik_pt->get_where('masukitem', array('id'=>$id_masukitem))->row();
		$query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = '$kodebar'";
		$data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();

		$no_id = $data_max_id_stock_awal->max_id_stock_awal;
		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

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
		$query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)', '$user menghapus barang $kodebar|$nabar pada LPB $no_ref_lpb', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
		$this->db_logistik_pt->query($query_1);
		if($this->db_logistik_pt->affected_rows() > 0){
		    $bool_stockawalhistory_old = TRUE;
		}
		else {
		    $bool_stockawalhistory_old = FALSE;
		}

		$data_stockawal = $this->db_logistik_pt->get_where('stockawal', array('id'=>$no_id))->row();

		// $dataedit_stockawal["nilai_masuk"] = 
		$dataedit_stockawal["QTY_MASUK"] = $data_stockawal->QTY_MASUK - $data_masukitem->qty;
		// $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
		$this->db_logistik_pt->set($dataedit_stockawal);
		$this->db_logistik_pt->where('id', $no_id);
		$this->db_logistik_pt->where('kodebartxt', $data_masukitem->kodebartxt);
		$this->db_logistik_pt->update('stockawal');

		if ($this->db_logistik_pt->affected_rows() > 0){
		    $bool_stockawal = TRUE;
		}
		else{
		    $bool_stockawal = FALSE;
		}

		$dataedit_masukitem['BATAL'] = '1';

		$this->db_logistik_pt->set($dataedit_masukitem);
		$this->db_logistik_pt->where('id', $id_masukitem);
		$this->db_logistik_pt->where('kodebartxt', $data_masukitem->kodebartxt);
		$this->db_logistik_pt->update('masukitem');

		if ($this->db_logistik_pt->affected_rows() > 0){
		    $bool_batal = TRUE;
		}
		else{
		    $bool_batal = FALSE;
		}

		// $data_cancel = $this->db_logistik_pt->delete('masukitem', array('id' => $id_masukitem));
		// if($bool_itempohistory === TRUE && $data_delete === TRUE){
		
		if($bool_stockawalhistory_old === TRUE && $bool_stockawal === TRUE && $bool_batal === TRUE){
			$data = TRUE;
		}
		else{
			$data = FALSE;
		}
		echo json_encode($data);
	}

	function detail_lpb(){
		$this->template->utama('V_lpb/vw_lpb_edit');
	}

	function get_edit_lpb(){
		// var_dump($_POST);exit();
		// array(2) {
		//   ["no_lpb"]=>
		//   string(7) "6100001"
		//   ["id"]=>
		//   string(2) "14"
		// }

		$id = $this->input->post('id');
		$no_lpb = $this->input->post('no_lpb');
		
		$query_stokmasuk = "SELECT * FROM stokmasuk WHERE id = '$id' AND ttgtxt = '$no_lpb' AND BATAL = '0'";
		$data_stokmasuk = $this->db_logistik_pt->query($query_stokmasuk)->row();
		
		$no_po = $data_stokmasuk->nopotxt;
		$no_ref_po = $data_stokmasuk->refpo;
		$no_ref_lpb = $data_stokmasuk->noref;

		$query_masukitem = "SELECT * FROM masukitem WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND BATAL = '0'";
		$data_masukitem = $this->db_logistik_pt->query($query_masukitem)->result();

		$query_po = "SELECT * FROM po WHERE nopotxt = '$no_po' AND noreftxt = '$no_ref_po'";
		$data_po = $this->db_logistik_pt->query($query_po)->row();

		$data_qty_po = array();
		$data_real_qty_terima = array();
		foreach ($data_masukitem as $list_masukitem) {
			$list_qty = array();
			$kodebar = $list_masukitem->kodebartxt;

			$query_item_po = "SELECT SUM(qty) as qty_po FROM item_po WHERE kodebartxt = '$kodebar' AND nopotxt = '$no_po' AND noref = '$no_ref_po'";
			$data_item_po = $this->db_logistik_pt->query($query_item_po)->row();
			$data_qty_po[] = $data_item_po->qty_po;

			$query_real_masukitem = "SELECT sum(qty) as real_qty_terima FROM masukitem WHERE BATAL='0' AND nopotxt = '$no_po' AND refpo = '$no_ref_po' AND kodebartxt = '$kodebar'";
			$data_real_masukitem = $this->db_logistik_pt->query($query_real_masukitem)->row();
			$data_real_qty_terima[] = $data_real_masukitem->real_qty_terima;
		}

		echo json_encode(array('data_stokmasuk' => $data_stokmasuk, 'data_masukitem' => $data_masukitem, 'data_po' => $data_po, 'data_qty_po' => $data_qty_po, 'data_real_qty_terima' => $data_real_qty_terima));
	}

	function cetak(){
		$no_lpb = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$data['no_lpb'] = $no_lpb;
		$data['id'] = $id;
		$data['stokmasuk'] = $this->db_logistik_pt->get_where('stokmasuk', array('id' => $id, 'ttgtxt' => $no_lpb))->row();
		$data['masukitem'] = $this->db_logistik_pt->get_where('masukitem', array('ttgtxt' => $no_lpb, 'noref' => $data['stokmasuk']->noref))->result();

		$noref = $data['stokmasuk']->noref;
		$this->qrcode($no_lpb,$id,$noref);
		// $data['po'] = $this->db_logistik_pt->get_where('po', array('nopotxt' => $data['stokmasuk']->nopotxt, 'noreftxt' => $data['stokmasuk']->refpo ))->row();

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

		$lokasibuatlpb = substr($noref,0,3);
		switch ($lokasibuatlpb) {
		    case 'LPB': // HO
		    	$lokasilpb = "HO";
		        break;
		    case 'ROM': // RO
		    	$lokasilpb = "RO";
		        break;
		    case 'FAC': // PKS
		    	$lokasilpb = "PKS";
		        break;
		    case 'EST': // SITE
		    	$lokasilpb = "SITE";
		        break;
		    default:
		        break;
		}
        
        // $mpdf->SetHTMLHeader('<h4>PT MULIA SAWIT AGRO LESTARI</h4>');
        $mpdf->SetHTMLHeader('
                            <table width="100%" border="0" align="center">
                                <tr>
                                    <td rowspan="5" width="15%" height="10px"><!--img width="10%" height="60px" style="padding-left:8px" src="././assets/img/msal.jpg"--></td>
                                    <td rowspan="5" align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari ('.$lokasilpb.')</td>
                                    <td>Putih</td>
                                    <td>:</td>
                                    <td>Finance HO</td>
                                </tr>
                                <!--tr>
                                    <td align="center" rowspan="5">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr-->
                                <tr>
                                	<td>Merah</td>
                                	<td>:</td>
                                	<td>Accounting HO</td>
                                </tr>
                                <tr>
                                	<td>Kuning</td>
                                	<td>:</td>
                                	<td>Gudang Est</td>
                                </tr>
                                <tr>
                                	<td>Hijau</td>
                                	<td>:</td>
                                	<td>Accounting Est</td>
                                </tr>
                                <tr>
                                	<td>Biru</td>
                                	<td>:</td>
                                	<td>Purchasing HO</td>
                                </tr>
                            </table>
                            <hr style="width:100%;margin:0px;">
                            ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('V_lpb/vw_lpb_print',$data,true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

	function qrcode($no_lpb,$id,$noref){
        $this->load->library('ciqrcode');
        // header("Content-Type: image/png");
        
        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/qrcode/cache/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/qrcode/errorlog/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/qr/lpb/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        
        $image_name=$id.'_'.$no_lpb.'.png'; //buat name dari qr code
 
        // $params['data'] = site_url('lpb/cetak/'.$no_lpb.'/'.$id); //data yang akan di jadikan QR CODE
        $params['data'] = $noref; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }

    function batal(){
  //   	var_dump($_POST);
  //   	exit();
  //   	array(2) {
		//   ["id"]=>
		//   string(1) "1"
		//   ["alasan"]=>
		//   string(12) "alasan batal"
		// }

		$id_stokmasuk = $this->input->post('id');
		$no_lpb = $this->input->post('no_lpb');
		$alasan =  $this->input->post('alasan');

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$get_stokmasuk = $this->db_logistik_pt->get_where('stokmasuk',array('id' => $id_stokmasuk, 'ttgtxt' => $no_lpb))->row(); 
		// $no_lpb = $get_stokmasuk->ttgtxt;
		$no_ref_lpb = $get_stokmasuk->noref;
		$no_ref_po = $get_stokmasuk->refpo;

		$get_masukitem = $this->db_logistik_pt->get_where('masukitem',array('ttgtxt' => $no_lpb, 'noref' => $no_ref_lpb))->result();

		// $item_po_kodebar = $get_item_po->kodebartxt;
		// $item_po_nabar = $get_item_po->nabar;

		// $data_stokmasuk = $this->db_logistik_pt->get_where('stokmasuk', array('id'=>$id_stokmasuk))->row();
		// $data_masukitem = $this->db_logistik_pt->get_where('masukitem', array('ttgtxt'=>$data_stokmasuk->ttgtxt,'noref'=>$data_stokmasuk->noref))->result();

		// foreach ($data_masukitem as $list_masukitem) {
		// 	$query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM BATAL LPB)', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = $no_id AND a.kodebartxt = $list_masukitem->kodebartxt";
		// 	$this->db_logistik_pt->query($query_1);
		// 	if($this->db_logistik_pt->affected_rows() > 0){
		// 	    $bool_stockawalhistory_old = TRUE;
		// 	}
		// 	else {
		// 	    $bool_stockawalhistory_old = FALSE;
		// 	}
		// }
		
		// $data_stockawal = $this->db_logistik_pt->get_where('stockawal', array('id'=>$no_id))->row();

		// // $dataedit_stockawal["nilai_masuk"] = 
		// $dataedit_stockawal["QTY_MASUK"] = $data_stockawal->QTY_MASUK - $data_masukitem->qty;
		// // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
		// $this->db_logistik_pt->set($dataedit_stockawal);
		// $this->db_logistik_pt->where('id', $no_id);
		// $this->db_logistik_pt->where('kodebartxt', $data_masukitem->kodebartxt);
		// $this->db_logistik_pt->update('stockawal');

		// if ($this->db_logistik_pt->affected_rows() > 0){
		//     $bool_stockawal = TRUE;
		// }
		// else{
		//     $bool_stockawal = FALSE;
		// }

		$query = "INSERT INTO stokmasuk_history SELECT null, a.id, a.tgl, a.nopo, a.nopotxt, a.LOKAL, a.ASSET,a.kode_supply, a.nama_supply, a.ttg, a.ttgtxt,a.no_pengtr,a.lokasi_gudang,a.ket,a.tglinput,a.txttgl,a.thn,a.periode1,a.periode2,a.txtperiode1,a.txtperiode2,a.pt,a.kode, a.mutasi,a.lokasi,a.refpo,a.noref,a.BATAL,a.alasan_batal,a.USER,a.cetak,a.posting,'DATA SEBELUM BATAL LPB, Alasan Batal : $alasan ', '$user membatalkan LPB $no_ref_lpb', NOW(), '$user', '$ip', '$platform' FROM stokmasuk a WHERE a.id = $id_stokmasuk";
        $this->db_logistik_pt->query($query);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_stokmasukhistory = TRUE;
        }
        else {
            $bool_stokmasukhistory = FALSE;
        }
		
		$dataedit['BATAL'] = "1";
		$dataedit['alasan_batal'] = $alasan;
		$this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $id_stokmasuk);
        $this->db_logistik_pt->update('stokmasuk');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_stokmasuk = TRUE;
        }
        else{
            $bool_stokmasuk = FALSE;
        }

        $dataedit_masukitem['BATAL'] = '1';
        $dataedit_masukitem['alasan_batal'] = $alasan;
        $this->db_logistik_pt->set($dataedit_masukitem);
        $this->db_logistik_pt->where('noref', $no_ref_lpb);
        $this->db_logistik_pt->where('ttgtxt', $no_lpb);
        $this->db_logistik_pt->update('masukitem');

        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_masukitem = TRUE;
        }
        else{
            $bool_masukitem = FALSE;
        }

  //       $dataedit_masukitem['BATAL'] = "1";
		// $this->db_logistik_pt->set($dataedit_masukitem);
  //       $this->db_logistik_pt->where('ttgtxt',$data_stokmasuk->ttgtxt);
  //       $this->db_logistik_pt->where('noref',$data_stokmasuk->noref);
  //       $this->db_logistik_pt->update('masukitem');
  //       if ($this->db_logistik_pt->affected_rows() > 0){
  //           $bool_masukitem = TRUE;
  //       }
  //       else{
  //           $bool_masukitem = FALSE;
  //       }

        if ($bool_stokmasukhistory === TRUE && $bool_stokmasuk === TRUE && $bool_masukitem === TRUE){
        	$data = TRUE;
        }
        else{
        	$data = FALSE;
        }

		echo json_encode($data);
	}

	function get_list_bkb_mutasi(){
		$data = $this->M_lpb->get_list_bkb_mutasi();
		echo json_encode($data);
	}

	function get_bkb_mutasi(){
		$SKBTXT = $this->input->post('no_bkb');
		$NO_REF = $this->input->post('no_ref_bkb');

		$data_stockkeluar_mutasi = $this->db_logistik_pt->get_where('stockkeluar_mutasi', array('SKBTXT' => $SKBTXT, 'NO_REF' => $NO_REF))->row();
		$keluarbrgitem_mutasi = $this->db_logistik_pt->get_where('keluarbrgitem_mutasi', array('SKBTXT' => $SKBTXT, 'NO_REF' => $NO_REF))->result();

		$data_keluarbrgitem_mutasi = [];
		foreach ($keluarbrgitem_mutasi as $list_keluarbrgitem_mutasi) {
			$query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE kodebartxt = '$list_keluarbrgitem_mutasi->kodebartxt' AND nopotxt = '$SKBTXT'";
			$data_sisa_qty_lpb = $this->db_logistik_pt->query($query_sisa_qty_lpb)->row();

			$get_keluarbrgitem_mutasi = [];
			$get_keluarbrgitem_mutasi['kodebartxt'] = $list_keluarbrgitem_mutasi->kodebartxt;
			$get_keluarbrgitem_mutasi['nabar'] = $list_keluarbrgitem_mutasi->nabar;
			$get_keluarbrgitem_mutasi['qty2'] = $list_keluarbrgitem_mutasi->qty2;
			$get_keluarbrgitem_mutasi['satuan'] = $list_keluarbrgitem_mutasi->satuan;
			$get_keluarbrgitem_mutasi['grp'] = $list_keluarbrgitem_mutasi->grp;
			$get_keluarbrgitem_mutasi['ket'] = $list_keluarbrgitem_mutasi->ket;
			$get_keluarbrgitem_mutasi['sisa_qty'] = number_format($list_keluarbrgitem_mutasi->qty - $data_sisa_qty_lpb->qty_lpb,0);
			$data_keluarbrgitem_mutasi[] = $get_keluarbrgitem_mutasi;
		}

		$data = array('data_stockkeluar_mutasi' => $data_stockkeluar_mutasi, 'data_keluarbrgitem_mutasi' => $data_keluarbrgitem_mutasi);
		// $query = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE nopotxt = '$no_po' AND noref = '$no_ref_po' ORDER BY id DESC";

		// $query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE kodebartxt = '$hasil->kodebartxt' AND nopotxt = '$hasil->nopotxt' AND refpo = '$hasil->noref'";
		echo json_encode($data);
	}

	function sum_sisa_qty_po(){
		$no_ref_po = $this->input->post('no_ref_po');
		$no_po = $this->input->post('no_po');
		$kodebar = $this->input->post('kodebar');

		$query_qty_po = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE nopotxt = '$no_po' AND noref = '$no_ref_po' AND kodebartxt = '$kodebar' ORDER BY id DESC";
		$data_qty_po = $this->db_logistik_pt->query($query_qty_po)->row();

		$query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE BATAL<>1 AND kodebartxt = '$kodebar' AND nopotxt = '$no_po' AND refpo = '$no_ref_po'";
		$data_sisa_qty_lpb = $this->db_logistik_pt->query($query_sisa_qty_lpb)->row();

		$sisa_qty_po  =  number_format($data_qty_po->qty - $data_sisa_qty_lpb->qty_lpb,0);
		echo json_encode($sisa_qty_po);
	}
	
	function konfirmasi_approval(){
    	// array(5) {
    	//   ["nobpb"]=>string(7) "6600001"
    	//   ["norefbpb"]=>string(25) "EST-BPB/SWJ/07/2019/00001"
    	//   ["kodebar"]=>string(15) "102505420000001"
    	//   ["jabatan"]=>string(3) "KTU"
    	//   ["approval"]=>string(6) "setuju"
    	// }

    	$nolpb		= $this->input->post('nolpb');
    	$noreflpb	= $this->input->post('noreflpb');
    	$kodebar	= $this->input->post('kodebar');
    	$jabatan	= $this->input->post('jabatan');
    	$approval	= $this->input->post('approval');
    	$nabar		= base64_decode($this->input->post('nabar'));
		$query_nom 	= "SELECT id FROM masukitem WHERE kodebar='".$kodebar."' AND noref = '".$noreflpb."' AND nabar = '".$nabar."' AND ttgtxt = '".$nolpb."'";
		$nom_que 	= $this->db_logistik_pt->query($query_nom)->row();
		$nom		= $nom_que->id;
		
		switch ($jabatan) {
			case 'KasieGudang':
				if($approval == "setuju"){
					$dataedit_approval['status_kasie_gudang'] 	= "1";
				}
				elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_kasie_gudang'] 	= "2";
				}
				$dataedit_approval['tgl_kasie_gudang'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_asisten_afd'] 		= $ket_asisten_afd;
				break;
			case 'KTU':
				if($approval == "setuju"){
					$dataedit_approval['status_ktu'] 	= "1";
				}
				elseif ($approval == "tidaksetuju") {
					$dataedit_approval['status_ktu'] 	= "2";
				}
				$dataedit_approval['tgl_ktu'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_ktu'] 		= $ket_ktu;
				break;
			case 'Mandor':
				if($approval == "mengetahui"){
					$dataedit_approval['status_mandor'] 		= "3";
				}
				$dataedit_approval['tgl_mandor'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_mandor'] 		= $ket_mandor;
				break;
			case 'Vendor':
				if($approval == "mengetahui"){
					$dataedit_approval['status_vendor'] 		= "3";
				}
				$dataedit_approval['tgl_vendor'] 		= date('Y-m-d H:i:s');
				// $dataedit_approval['ket_vendor'] 		= $ket_vendor;
				break;
			default:
				break;
		}
		
		$query_cek = $this->db_logistik_pt->query("SELECT * FROM approval_lpb WHERE ttgtxt = '$nolpb' AND noref = '$noreflpb' AND kodebar='$kodebar'");
		
		if($query_cek->num_rows() > 0){
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->where('kodebar', $kodebar);
			$this->db_logistik_pt->update('approval_lpb', $dataedit_approval);
			// $this->db_logistik_pt->trans_complete();
			if ($this->db_logistik_pt->affected_rows() > 0){
				$bool_approval_lpb = TRUE;
			}
			else{
				$bool_approval_lpb = FALSE;
			}
		}else{
			$data_insert = [
				'id'=> $nom,
				'ttgtxt' => $nolpb,
				'noref' => $noreflpb,
				'kodebar' => $kodebar,
				'nabar' => $nabar,
				'qtyditerima' => null
			];
			$this->db_logistik_pt->insert('approval_lpb', $data_insert);
			
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->where('kodebar', $kodebar);
			$this->db_logistik_pt->update('approval_lpb', $dataedit_approval);
			// $this->db_logistik_pt->trans_complete();
			if ($this->db_logistik_pt->affected_rows() > 0){
				$bool_approval_lpb = TRUE;
			}
			else{
				$bool_approval_lpb = FALSE;
			}
		}
		

		// $count_item_appr = $this->db_logistik_pt->get_where('approval_bpb', array('status_ktu <>'=>'0','status_mgr <>'=>'0','status_gm <>'=>'0','no_bpb'=>$nobpb,'norefbpb'=>$norefbpb))->num_rows();

		// var_dump($jabatan);
		// var_dump($bool_approval_bpb);
		
		if($jabatan == "KTU"){
			$query_qty = "SELECT qty, qtyditerima FROM masukitem WHERE ttgtxt = '$nolpb' AND noref = '$noreflpb' AND kodebar = '$kodebar'";
			$get_qty = $this->db_logistik_pt->query($query_qty)->row();
			if($get_qty->qtyditerima == null){
				$qty_disetujui = $get_qty->qty;
			}else{
				$qty_disetujui = $get_qty->qtyditerima;
			}
			
			$dataedit_masukitem['qtyditerima'] = $qty_disetujui;

			$this->db_logistik_pt->set($dataedit_masukitem);
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->where('kodebar', $kodebar);
			$this->db_logistik_pt->update('masukitem');
			
			$this->db_logistik_pt->set($dataedit_masukitem);
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->where('kodebar', $kodebar);
			$this->db_logistik_pt->update('approval_lpb');
			$this->_count_item_appr($nolpb,$noreflpb);

				// if($bool_approval_bpb === TRUE && $bool_bpbitem === TRUE){
			if($bool_approval_lpb === TRUE){
				echo json_encode(TRUE);
			}
			else {
				return FALSE;
			}
		}
		else {
			$this->_count_item_appr($nolpb,$noreflpb);

			if($bool_approval_lpb === TRUE){
				echo json_encode(TRUE);
			}
			else {
				return FALSE;
			}
		}
		
	}
	function _count_item_appr($nolpb,$noreflpb){
		$count_item_appr = $this->db_logistik_pt->get_where('approval_lpb', array('status_ktu'=>'1','ttgtxt'=>$nolpb,'noref'=>$noreflpb))->num_rows();
		$count_kasie_appr = $this->db_logistik_pt->get_where('approval_lpb', array('status_kasie_gudang'=>'1','ttgtxt'=>$nolpb,'noref'=>$noreflpb))->num_rows();
		$count_masukitem = $this->db_logistik_pt->get_where('masukitem', array('ttgtxt'=>$nolpb,'noref'=>$noreflpb,'BATAL'=>'0'))->num_rows();
		
		if($count_item_appr == $count_masukitem){
			$dataedit_lpb['approval'] = "1"; 
			$this->db_logistik_pt->set($dataedit_lpb);
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->update('stokmasuk');		
		}
		if($count_kasie_appr == $count_masukitem){
			$dataedit_lpb['approval_kasie'] = "1"; 
			$this->db_logistik_pt->set($dataedit_lpb);
			$this->db_logistik_pt->where('ttgtxt', $nolpb);
			$this->db_logistik_pt->where('noref', $noreflpb);
			$this->db_logistik_pt->update('stokmasuk');		
		}
	}
	
	function rev_qty(){
		$nolpb			= $this->input->post('nolpb');
		$noreflpb		= $this->input->post('noreflpb');
		$kodebar		= $this->input->post('kodebar');
		$jabatan		= $this->input->post('jabatan');
		$approval		= $this->input->post('approval');
		$qty_disetujui	= $this->input->post('qty_disetujui');

		$dataedit_masukitem['qtyditerima'] = $qty_disetujui;

		$this->db_logistik_pt->set($dataedit_masukitem);
		$this->db_logistik_pt->where('ttgtxt', $nolpb);
		$this->db_logistik_pt->where('noref', $noreflpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('masukitem');
		
		$this->db_logistik_pt->set($dataedit_masukitem);
		$this->db_logistik_pt->where('ttgtxt', $nolpb);
		$this->db_logistik_pt->where('noref', $noreflpb);
		$this->db_logistik_pt->where('kodebar', $kodebar);
		$this->db_logistik_pt->update('approval_lpb');

		if ($this->db_logistik_pt->affected_rows() > 0){
		    echo json_encode(TRUE);
		}
		else{
			return FALSE;
		}
	}
}

?>