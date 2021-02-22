<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pp extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		//$this->db_caba = $this->load->database('db_cashbank',TRUE); 
		$this->db_caba = $this->load->database('db_caba',TRUE);

		$this->load->model('M_pp');
	}
	
	/*public function deletelogistik(){
		$this->db_caba->where('id','103');
		$this->db_caba->delete('pp_logistik');
		$this->db_caba->where('id','102');
		$this->db_caba->delete('pp_logistik');
		$this->db_caba->where('id','101');
		$this->db_caba->delete('pp_logistik');
		$this->db_caba->where('id','100');
		$this->db_caba->delete('pp_logistik');
		$this->db_caba->where('id','99');
		$this->db_caba->delete('pp_logistik');
		$this->db_caba->where('id','98');
		$this->db_caba->delete('pp_logistik');
	}*/

	public function index(){
		$this->template->utama('V_pp/vw_pp_index');
	}

	public function input(){
		$this->template->utama('V_pp/vw_pp_input');
	}

	public function edit_pp(){
		$this->template->utama('V_pp/vw_pp_edit');
	}	

	function list_pp(){
		$data = $this->M_pp->get_list_pp();
		echo json_encode($data);
	}

	function list_po(){
		$data = $this->M_pp->get_list_po();
		echo json_encode($data);
	}

	function simpan_pp(){
		// var_dump('yak');exit();
		$data = $this->M_pp->simpan_pp();
		echo json_encode($data);
	}

	function get_data_pp(){
		$id_pp = $this->input->post('id');
		$data_pp = $this->db_logistik_pt->get_where('pp',array('id'=>$id_pp))->row();

		$ref_po = $data_pp->ref_po;

		$query_jumlah_sudah_bayar = "SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$ref_po'";
		// var_dump("SELECT SUM(jumlah) AS jumlah FROM pp where ref_po = '$ref_po'");exit();
		$get_jumlah_sudah_bayar = $this->db_logistik_pt->query($query_jumlah_sudah_bayar)->row();
		// var_dump($get_jumlah_sudah_bayar->jumlah);exit();
		echo json_encode(array('data_pp' => $data_pp, 'sudah_bayar' => $get_jumlah_sudah_bayar->jumlah));
	}

	function cetak(){
		$no_pp = $this->uri->segment('3');
		$id = $this->uri->segment('4');

		$this->qrcode($no_pp,$id);

		// $data['no_bkb'] = $no_bkb;
		// $data['id'] = $id;
		// $data['stockkeluar'] = $this->db_logistik_pt->get_where('stockkeluar', array('id' => $id, 'SKBTXT' => $no_bkb))->row();
		// $data['keluarbrgitem'] = $this->db_logistik_pt->get_where('keluarbrgitem', array('SKBTXT' => $no_bkb, 'NO_REF' => $data['stockkeluar']->NO_REF))->result();
		$data['data_pp'] = $this->db_logistik_pt->get_where('pp', array('nopptxt' => $no_pp , 'id' => $id ))->row();
		
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
        					<table width="100%" border="0" align="left">
        						<tr>
        							<td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
        						</tr>
        					</table>
                            <!--table width="100%" border="0" align="center">
                                <tr>
                                    <td rowspan="2" width="15%" height="10px"><img width="10%" height="60px" style="padding-left:8px" src="'.base_url().'assets/img/msal.jpg"></td>
                                    <td align="center" style="font-size:14px;font-weight:bold;">PT Mulia Sawit Agro Lestari</td>
                                </tr>
                                <tr>
                                    <td align="center">Jl. Radio Dalam Raya No.87A, RT.005/RW.014, Gandaria Utara, Kebayoran Baru,  JakartaSelatan, DKI Jakarta Raya-12140 <br /> Telp : 021-7231999, 7202418 (Hunting) <br /> Fax : 021-7231819
                                    </td>
                                </tr>
                            </table-->
                            <hr style="width:100%;margin:0px;">
                            ');
        // $mpdf->SetHTMLFooter('<h4>footer Nih</h4>');

        $html = $this->load->view('V_pp/vw_pp_print',$data,true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

	function qrcode($no_pp,$id){
        $this->load->library('ciqrcode');
        // header("Content-Type: image/png");
        
        $config['cacheable']    = false; //boolean, the default is true
        $config['cachedir']     = './assets/qrcode/cache/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/qrcode/errorlog/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/qr/bkb/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        
        $image_name=$id.'_'.$no_pp.'.png'; //buat name dari qr code
 
        $params['data'] = site_url('bkb/cetak/'.$no_pp.'/'.$id); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
    }
	
	function batal(){
		
		$id_pp = $this->input->post('id_pp');
		$nopptxt = $this->input->post('nopptxt');
		
		$user = $this->session->userdata('user');
		$ip = $this->input->ip_address();
		$platform = $this->platform->agent();

		$query = "INSERT INTO pp_history SELECT null, a.*,'DATA SEBELUM BATAL PP', '$user membatalkan PP $nopptxt', NOW(), '$user', '$ip', '$platform' FROM pp a WHERE a.id = $id_pp";
        $this->db_logistik_pt->query($query);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_pphistory = TRUE;
        }
        else {
            $bool_pphistory = FALSE;
        }
		
		//$dataedit['status'] = "BATAL";
		$dataedit['status2'] = "5";
		$this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $id_pp);
        $this->db_logistik_pt->update('ppo');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_ppo = TRUE;
        }
        else{
            $bool_ppo = FALSE;
        }
		
		/*$this->db_logistik_pt->where('id', $id_pp);
		$this->db_logistik_pt->where('nopptxt', $nopptxt);
		$this->db_logistik_pt->delete('pp');
		if($this->db_logistik_pt->affected_rows() > 0){
			$bool_pp = TRUE;
		}
		else{
			$bool_pp = FALSE;
		}*/
		
	}
}