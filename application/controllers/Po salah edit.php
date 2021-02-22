<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Po extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		// $this->session->set_userdata(array(
		// 	'user' => 'Arman',
		// 	'status_lokasi' => 'HO', //HO, RO, SITE, PKS
		// 	'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
		// 	'level' => 'User',
		// 	'kode_level' => '0',
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

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->load->model('M_po');
	}

	public function index(){
		$this->template->utama('V_po/vw_po_index');
	}	

	function input(){
		$this->template->utama('V_po/vw_po_input');
	}

	function list_po(){
		$data = $this->M_po->get_list_po();
		echo json_encode($data);
	}

	function list_spp(){
		$data = $this->M_po->get_list_spp();
		echo json_encode($data);
	}

	function get_detail_spp(){
		$no_spp = $this->input->post('no_spp');
		$no_ref_spp = $this->input->post('no_ref_spp');
		$kodebar = $this->input->post('kodebar');

		$query_ppo = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, kodedept, namadept, ket, pt, kodept, lokasi, status, status2, po, jenis FROM ppo WHERE status2 IN ('1','2') AND noppotxt = '$no_spp' AND noreftxt = '$no_ref_spp' AND po = '0' ORDER BY id DESC, tglisi DESC";
		// var_dump($query_ppo);exit();

		$query_item = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, kodebartxt, nabar, tglppo, qty, kodedept, namadept, ket, kodept, lokasi, status, status2, po, sat FROM item_ppo WHERE status2 IN ('1','2') AND noppotxt = '$no_spp' AND noreftxt = '$no_ref_spp' AND kodebartxt = '$kodebar' ORDER BY id DESC, tglisi DESC";
		
		$data_ppo = $this->db_logistik_pt->query($query_ppo)->row();
		$data_item = $this->db_logistik_pt->query($query_item)->result();
		// var_dump(array($data_ppo,$data_item));
		// exit();
		echo json_encode(array($data_ppo,$data_item));
	}

	function list_supplier(){
		$data = $this->M_po->get_list_supplier();
		echo json_encode($data);
	}

	function get_pemesan(){
		$this->db_logistik_pt->from('pemesan');
		$this->db_logistik_pt->order_by("kode", "asc");
		$this->db_logistik_pt->where("status", "A");
		$data = $this->db_logistik_pt->get()->result();
		echo json_encode($data);
	}

	function list_barang_spp(){
		$data = $this->M_po->get_list_barang_spp();
		echo json_encode($data);
	}

	function get_kodebar(){
		$row_id = $this->input->post('row_id');
		$query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar WHERE kodebar = '$row_id'";
		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function data_barang(){
		$id = $this->input->post('id');
		$query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar WHERE id = '$id'";
		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function simpan_rinci_po(){
		$data = $this->M_po->simpan_rinci_po();
		echo json_encode($data);
	}

	function ubah_rinci_po(){
		$data = $this->M_po->ubah_rinci_po();
		echo json_encode($data);
	}

	function hapus_rinci(){
		$id_po = $this->input->post('hidden_id_po');
		$id_po_item = $this->input->post('hidden_id_po_item');

		$get_po = $this->db_logistik_pt->get_where('po',array('id' => $id_po))->row();
		$get_item_po = $this->db_logistik_pt->get_where('item_po',array('id' => $id_po_item))->row();

		$no_po = $get_po->nopotxt;
		$no_ref_po = $get_po->noreftxt;
		$item_po_kodebar = $get_item_po->kodebartxt;
		$item_po_nabar = $get_item_po->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO item_po_history SELECT null, a.*,'DATA SEBELUM DIHAPUS','$user menghapus barang $item_po_kodebar|$item_po_nabar pada SPP $no_ref_po', NOW(), '$user', '$ip', '$platform' FROM item_po a WHERE a.id = $id_po_item";
		
        $this->db_logistik_pt->query($query);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_itempohistory = TRUE;
        }
        else{
            $bool_itempohistory = FALSE;
        }
		
		$data_delete = $this->db_logistik_pt->delete('item_po', array('id' => $id_po_item));

		if($bool_itempohistory === TRUE && $data_delete === TRUE){
			$data = TRUE;
		}
		else{
			$data = FALSE;
		}
		echo json_encode($data);
	}

	function cancel_ubah_rinci(){
		$id_po = $this->input->post('hidden_id_po');
		$id_po_item = $this->input->post('hidden_id_po_item');
		$no_ref_po = $this->input->post('hidden_no_ref_po');

		$query = "SELECT id, nopotxt, noppotxt, refppo, kodebartxt, nabar, sat, qty, harga, jumharga, ket, noref, hargasblm, disc, kurs, grup, jumlahbpo, nama_bebanbpo, merek FROM item_po WHERE id = '$id_po_item' AND noref = '$no_ref_po'";
		
		$data = $this->db_logistik_pt->query($query)->result();
		
		echo json_encode($data);
	}

	function simpan_po(){
		var_dump('SIMPAN');
		var_dump($_POST);exit();
	}

	function edit_po(){
		$this->template->utama('V_po/vw_po_edit');
	}

	function get_edit_po(){
		$id = $this->input->post('id');

		$query_po = "SELECT * FROM po WHERE id = '$id'";
		$data_po = $this->db_logistik_pt->query($query_po)->row();

		$nopo = $data_po->nopotxt;
		$norefpo = $data_po->noreftxt;

		$query_item_po = "SELECT * FROM item_po WHERE nopotxt = '$nopo' AND noref = '$norefpo'";
		$data_item_po = $this->db_logistik_pt->query($query_item_po)->result();

		$query_jenis_spp = "SELECT DISTINCT(SUBSTR(refppo,5,4)) as jenis_spp FROM item_po WHERE nopotxt = '$nopo' AND noref = '$norefpo'";
		$data_jenis_spp = $this->db_logistik_pt->query($query_jenis_spp)->row();

		$query_jenis_po = "SELECT DISTINCT(SUBSTR(noreftxt,9,3)) as jenis_po FROM po WHERE nopotxt = '$nopo' AND noreftxt = '$norefpo'";
		$data_jenis_po = $this->db_logistik_pt->query($query_jenis_po)->row();

		$data = array(
			'po' => $data_po,
			'item_po' => $data_item_po,
			'jenis_spp' => $data_jenis_spp,
			'jenis_po' => $data_jenis_po
		);
		// var_dump($data);exit();

		echo json_encode($data);
	}

	function total_bayar(){
		$no_po = $this->input->post('no_po');
		$no_ref_po = $this->input->post('no_ref_po');

		$query = "SELECT SUM(jumharga) as totalbayar FROM item_po WHERE nopo = '$no_po' AND noref = '$no_ref_po'";
		$data = $this->db_logistik_pt->query($query)->row();

		$dataedit['totalbayar'] = $data->totalbayar;
		$this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('nopotxt', $no_po);
        $this->db_logistik_pt->where('noreftxt', $no_ref_po);
        $this->db_logistik_pt->update('po');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_update_po = TRUE;
        }
        else{
            $bool_update_po = FALSE;
        }

		echo json_encode($data);
	}

	function cetak(){
		$nopo = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$data['pt'] = $this->db_logistik_pt->get_where('pt', array('kodetxt'=>'01'))->row();

		$data['po'] = $this->db_logistik_pt->get_where('po', array('nopotxt'=>$nopo, 'id'=>$id))->row();

		$kode_supplier = $data['po']->kode_supply;
		$data['supplier'] = $this->db_logistik_pt->get_where('supplier', array('kode'=>$kode_supplier))->row();

		$no_refpo = $data['po']->noreftxt;
		$data['item_po'] = $this->db_logistik_pt->get_where('item_po', array('nopotxt'=>$nopo,'noref'=>$no_refpo))->result();

		// var_dump($this->db->last_query());exit();
		
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
                                    <td rowspan="2" width="15%" height="10px"><img width="10%" height="60px" style="padding-left:8px" src="'.base_url().'assets/img/msal.jpg"></td>
                                    <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                </tr>
                                <tr>
                                    <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr>
                            </table>
                            <hr style="width:100%;margin:0px;">
                            ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('V_po/vw_po_print',$data,true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

	function approval(){
		$this->template->utama('V_po/vw_po_approval');
	}

	function batal(){
		$id_po = $this->input->post('id');

		$get_po = $this->db_logistik_pt->get_where('po',array('id' => $id_po))->row();
		// $get_item_po = $this->db_logistik_pt->get_where('item_po',array('id' => $id_po_item))->row();

		$no_po = $get_po->nopotxt;
		$no_ref_po = $get_po->noreftxt;
		// $item_po_kodebar = $get_item_po->kodebartxt;
		// $item_po_nabar = $get_item_po->nabar;

		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO po_history SELECT null, a.*,'DATA SEBELUM BATAL SPP', '$user membatalkan SPP $no_ref_po', NOW(), '$user', '$ip', '$platform' FROM po a WHERE a.id = $id_po";
        $this->db_logistik_pt->query($query);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_pohistory = TRUE;
        }
        else {
            $bool_pohistory = FALSE;
        }
		
		// $dataedit['status'] = "BATAL";
		// $dataedit['status2'] = "5";
		$dataedit['batal'] = "1";
		$this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $id_po);
        $this->db_logistik_pt->update('po');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_po = TRUE;
        }
        else{
            $bool_po = FALSE;
        }

        if ($bool_pohistory === TRUE && $bool_po === TRUE){
        	$data = TRUE;
        }
        else{
        	$data = FALSE;
        }

		echo json_encode($data);
	}
}