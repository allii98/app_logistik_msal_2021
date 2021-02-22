<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lpb extends CI_Model {
	
	function get_list_approved(){
		$periode = $this->session->userdata('ym_periode');
        $lok = $this->session->userdata('status_lokasi');
        $thisUser = $this->session->userdata('user');
		if($lok == 'SITE'){
            if($thisUser != 'KTU' && $thisUser != 'Kasie Gudang'){
                $this->db_logistik_pt->where('lokasi',$lok);
            }
			// $this->db_logistik_pt->where('lokasi',$lok);
		}
		$this->db_logistik_pt->where('approval','1');
		$this->db_logistik_pt->where('txtperiode1',$periode);
		$this->db_logistik_pt->where('BATAL','0');
		return $this->db_logistik_pt->get('stokmasuk')->num_rows();
	}
	
	function get_list_waiting(){
		$thisUser = $this->session->userdata('user');
		$periode = $this->session->userdata('ym_periode');
		$lok = $this->session->userdata('status_lokasi');
		switch($thisUser){
			case "Kasie Gudang":
				$this->db_logistik_pt->where('approval_kasie','0');
				break;
			case "KTU":
				$this->db_logistik_pt->where('approval_kasie','1');
				break;
			default:
				break;
		}
		if($lok == 'SITE'){
            if($thisUser != 'KTU' && $thisUser != 'Kasie Gudang'){
                $this->db_logistik_pt->where('lokasi',$lok);
            }
		}else if($lok == 'RO'){
			$this->db_logistik_pt->where('lokasi',$lok);
		}else if($lok == 'PKS'){
			$this->db_logistik_pt->where('lokasi',$lok);
		}
		$this->db_logistik_pt->where('approval','0');
		$this->db_logistik_pt->where('txtperiode1',$periode);
		$this->db_logistik_pt->where('BATAL','0');
		//$this->db_logistik_pt->where('lokasi',$this->session->userdata('status_lokasi'));
		return $this->db_logistik_pt->get('stokmasuk')->num_rows(); 
	}

    function get_list_lpb($teks = null){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $filter = $this->input->post('filter');
        $keyfilter1 = "";

        switch ($filter) {
            case "03":
                $keyfilter1 = "AND lokasi = 'PKS'";
                break;
            case "02":
                $keyfilter1 = "AND lokasi = 'RO'";
                break;
            case "01":
                $keyfilter1 = "AND lokasi = 'HO'";
                break;
            case "06":
                $keyfilter1 = "AND noref LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND noref LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
		$periode = $this->session->userdata('ym_periode');
		$periode = "AND txtperiode1 = '".$periode."'";
		if($teks !== null){
			$app = "AND approval = '0'";
		}else{
			$app = "";
		}
		$lok = $this->session->userdata('status_lokasi');
		$thisUser = $this->session->userdata('user');
		switch($lok){
			case "HO"	:
				$lok = '';
				break;
            case "SITE"	:
                if($thisUser != 'KTU' && $thisUser != 'Kasie Gudang'){
                    $lok = 'AND lokasi = "'.$lok.'"';
                }else{
                    $lok ='';
                }
				break;
			case "RO"	:
				$lok = 'AND lokasi = "'.$lok.'"';
				break;
			case "PKS"	:
				$lok = 'AND lokasi = "'.$lok.'"';
				break;
		}
		$jjg_appr = $this->session->userdata('user');
		switch($jjg_appr){
			case "Kasie Gudang"	:
				$jjg_appr = "AND approval_kasie ='0'";
				break;
			case "KTU"	:
				$jjg_appr = "AND approval_kasie ='1' AND approval ='0'";
				break;
			/*case "Mandor"	:
				$jjg_appr = "AND approval_mandor ='0'";
				break;
			case "Vendor"	:
				$jjg_appr = "AND approval_vendor ='0'";
				break;*/
			default:
				$jjg_appr = "";
				break;
		}
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stokmasuk WHERE BATAL <> 1 $periode $keyfilter1 $jjg_appr $lok $app AND (ttgtxt LIKE '%$keyword%'
                    OR noref LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR refpo LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
			$query = "SELECT * FROM stokmasuk WHERE BATAL <> 1 $periode $keyfilter1 $jjg_appr $lok $app ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;
			
            $row[] = $hasil->approval == 0 && $hasil->USER == $this->session->userdata('user') ? '<a href="'.site_url('lpb/detail_lpb/'.$hasil->ttgtxt.'/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah LPB" id="btn_detail_barang"> Ubah </a>
                <a href="javascript:;" id="a_batal_lpb"><button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_lpb" name="btn_batal_lpb" data-toggle="tooltip" data-placement="top" title="Batal lpb" onClick="konfirmasiBatalLPB('.$id.','.$hasil->ttgtxt.')"> Batal</button></a>'
				:'<a href="javascript:;" class="btn btn-warning btn-xs">No Option</a>';
            
			$row[] = $no++;
            // $row[] = $hasil->tgl;
            $row[] = $hasil->ttgtxt;
            $row[] = $hasil->noref;
            $row[] = $hasil->nopotxt;
            $row[] = $hasil->refpo;
            $row[] = $hasil->nama_supply;
			$noref = "'".$hasil->noref."'";
			$notrylpb = "'".$hasil->ttgtxt."'";
            $query_masukitem = "SELECT nabar FROM masukitem WHERE ttgtxt = '$hasil->ttgtxt' AND noref = '$hasil->noref'";
            $data_masukitem = $this->db_logistik_pt->query($query_masukitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_masukitem as $masukitem){
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $masukitem->nabar);
            }
            $row[] = join(", ",$data_detail_nama);
            $row[] = $hasil->ket;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->USER;
			$row[] = '<a href="javascript:;" id="a_approval">
                    <button class="btn btn-primary btn-xs fa fa-square" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top"  title="Approval" onClick="modalApproval('.$notrylpb.','.$noref.')">
                    </button>
                    </a>';
			$row[] = $hasil->approval;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }
	
	function get_list_lpbitem(){
		$data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $nolpb = $this->input->post('nolpb');
        $noreflpb = $this->input->post('norelbpb');
		
		/*$periode = $this->session->userdata('ym_periode');
		$periode = "AND txtperiode1 = ".$periode;*/
		
		
		if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM masukitem WHERE (batal <> 1 AND ttgtxt LIKE '%$nolpb%' AND noref LIKE '%$noreflpb%') 
                    AND (nopotxt LIKE '%$keyword%'
                    OR refpo LIKE '%$keyword%'
                    OR nabar LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }else{
            $query = "SELECT * FROM masukitem WHERE (batal <> 1 AND ttgtxt LIKE '%$nolpb%' AND noref LIKE '%$noreflpb%') ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
		
		foreach($data_tabel as $hasil){
			$row   = array();
            $id = $hasil->id;
            $qtybar = $hasil->qty;
			
			$nolpb = "'".$hasil->ttgtxt."'";
            $noreflpb = "'".$hasil->noref."'";
            $kodebar = "'".$hasil->kodebar."'";
            $nabar = "'".$hasil->nabar."'";
			$nabar = "'".base64_encode($nabar)."'";
			
			if($hasil->qtyditerima == NULL){
				$qty = "'".$hasil->qty."'";
			}else{
				$qty = "'".$hasil->qtyditerima."'";
			}
            
            $nom = "'".$hasil->id."'";
			
            $KasieGudang = "'KasieGudang'";
            $KTU = "'KTU'";
			$Mandor = "'Mandor'";
            $Vendor = "'Vendor'";
			
			$setuju = "'setuju'";
            $tidaksetuju = "'tidaksetuju'";
            $mengetahui = "'mengetahui'";
            $revqty = "'revqty'";
			
            // $kode_level_sesi = $this->session->userdata('kode_level');
            $thisUser = $this->session->userdata('user');
            if($thisUser == 'Kasie Gudang')
            $kode_level_sesi = '18';
            else if ($thisUser == 'KTU')
            $kode_level_sesi = '11';
            
            // $lokasi = $this->session->userdata('status_lokasi');
            // $user_sesi = $this->session->userdata('user');
            $nolpb_query = $hasil->ttgtxt;
            $noreflpb_query = $hasil->noref;
            $kodebar_query = $hasil->kodebar;
            $qty_diminta = $hasil->qty;
			
			/***** Kasie Gudang *****/
            /***************/
            $query_status_kasie_gudang = "SELECT status_kasie_gudang, tgl_kasie_gudang FROM approval_lpb WHERE status_kasie_gudang <> '0' AND ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
            //$query_status_kasie_gudang = "SELECT status_kasie_gudang, tgl_kasie_gudang FROM approval_lpb WHERE ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
            $get_status_kasie_gudang = $this->db_logistik_pt->query($query_status_kasie_gudang);
            if($get_status_kasie_gudang->num_rows() > 0){
                $get_status_approval_kasie_gudang = $this->db_logistik_pt->query($query_status_kasie_gudang)->row();
                if($get_status_approval_kasie_gudang->status_kasie_gudang ==  "1"){
                    $konfirmasi_kasie_gudang = "<strong style='color:green;'>DISETUJUI <br/>".$get_status_approval_kasie_gudang->tgl_kasie_gudang."</strong><br/>";
                }
                else if($get_status_approval_kasie_gudang->status_kasie_gudang ==  "2"){
                    $konfirmasi_kasie_gudang = "<strong style='color:red'>TDK DISETUJUI <br/>".$get_status_approval_kasie_gudang->tgl_kasie_gudang."</strong><br/>";
                }
            }
            else {
                $list_level_approval_kasie_gudang = "SELECT lpb_appr_kasie_gudang FROM list_level_approval WHERE lpb_appr_kasie_gudang = '$kode_level_sesi'";
                $get_appr_kasie_gudang = $this->db_logistik_pt->query($list_level_approval_kasie_gudang)->num_rows();
				
                if($get_appr_kasie_gudang > 0){
                    /*$konfirmasi_kasie_gudang = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$KasieGudang.','.$setuju.','.$nabar.','.$qty.','.$nom.')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$KasieGudang.','.$tidaksetuju.','.$nabar.','.$qty.','.$nom.')">
                                </button>
                            </a>
                            ';*/
					$konfirmasi_kasie_gudang = "No Action";		
                }	
                else {
                    $konfirmasi_kasie_gudang = "";
                }
            }
			
			/***** KTU *****/
            /***************/
            // $query_status_ktu = "SELECT status_ktu, tgl_ktu FROM approval_bpb WHERE (status_ktu <> '0' AND status_asisten_afd = '1' AND status_kepala_kebun = '1') AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $query_status_ktu = "SELECT status_kasie_gudang, status_ktu, tgl_ktu FROM approval_lpb WHERE status_ktu <> '0' AND ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
            $get_status_ktu = $this->db_logistik_pt->query($query_status_ktu);
            if($get_status_ktu->num_rows() > 0){
                $get_status_approval_ktu = $this->db_logistik_pt->query($query_status_ktu)->row();
                if($get_status_approval_ktu->status_ktu ==  "1"){
                    $konfirmasi_ktu = "<strong style='color:green;'>DISETUJUI <br/>".$get_status_approval_ktu->tgl_ktu."</strong><br/>";
                }
                else if($get_status_approval_ktu->status_ktu ==  "2"){
                    $konfirmasi_ktu = "<strong style='color:red'>TDK DISETUJUI <br/>".$get_status_approval_ktu->tgl_ktu."</strong><br/>";
                }
            }
            else {
                $query_status_kasie_gudang = "SELECT status_kasie_gudang, status_ktu, tgl_ktu FROM approval_lpb WHERE status_kasie_gudang <> '0' AND ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
                $get_status_kasie_gudang = $this->db_logistik_pt->query($query_status_kasie_gudang)->row();
                
                // jika sudah disetujui Kasie Gudang
                if(isset($get_status_kasie_gudang)){
                    if($get_status_kasie_gudang->status_kasie_gudang == "1"){
                        $list_level_approval_ktu = "SELECT lpb_appr_ktu FROM list_level_approval WHERE lpb_appr_ktu = '$kode_level_sesi'";
                        $get_appr_ktu = $this->db_logistik_pt->query($list_level_approval_ktu)->num_rows();

                        if($get_appr_ktu > 0){
                            /*$konfirmasi_ktu = '<a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$KTU.','.$setuju.','.$nabar.','.$qty.','.$nom.')">
                                        </button>
                                    </a>
                                    <a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$KTU.','.$tidaksetuju.','.$nabar.','.$qty.','.$nom.')">
                                        </button>
                                    </a>*/
                            $konfirmasi_ktu = '<a href="javascript:;" id="a_appproval"><button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty('.$nolpb.','.$noreflpb.','.$kodebar.','.$KTU.','.$revqty.','.$qtybar.')"> Rev Qty</button></a>';
                        }
                        else {
                            $konfirmasi_ktu = "";
                        }
                    }
                    else {
                        $konfirmasi_ktu = "";
                    }
                }
                else{
                    $konfirmasi_ktu = "";
                }
            }
			
			/***** Mandor *****/
            /***************/
            $query_status_mandor = "SELECT status_mandor, tgl_mandor FROM approval_lpb WHERE status_mandor <> '0' AND ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
            $get_status_mandor = $this->db_logistik_pt->query($query_status_mandor)->num_rows();

            if($get_status_mandor > 0){
                $get_status_approval_mandor = $this->db_logistik_pt->query($query_status_mandor)->row();
                if($get_status_approval_mandor->status_mandor ==  "3"){
                    $konfirmasi_mandor = "<strong style='color:blue;'>MENGETAHUI <br/>".$get_status_approval_mandor->tgl_mandor."</strong><br/>";
                }
            }
            else {
                $list_level_approval_mandor = "SELECT lpb_appr_mandor FROM list_level_approval WHERE lpb_appr_mandor = '$kode_level_sesi'";
                $get_appr_mandor = $this->db_logistik_pt->query($list_level_approval_mandor)->num_rows();
                
                if($get_appr_mandor > 0){
                    $konfirmasi_mandor = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_mandor" name="btn_konfirmasi_mandor" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$Mandor.','.$mengetahui.','.$nabar.','.$qty.','.$nom.')"> Mengetahui
                                </button>
                            </a>';
                }
                else {
                    $konfirmasi_mandor = "";
                }
            }
			
			/***** Vendor *****/
            /***************/
            $query_status_vendor = "SELECT status_vendor, tgl_vendor FROM approval_lpb WHERE status_vendor <> '0' AND ttgtxt = '$nolpb_query' AND noref = '$noreflpb_query' AND kodebar = '$kodebar_query'";
            $get_status_vendor = $this->db_logistik_pt->query($query_status_vendor)->num_rows();

            if($get_status_vendor > 0){
                $get_status_approval_vendor = $this->db_logistik_pt->query($query_status_vendor)->row();
                if($get_status_approval_vendor->status_vendor ==  "3"){
                    $konfirmasi_vendor = "<strong style='color:blue;'>MENGETAHUI <br/>".$get_status_approval_vendor->tgl_vendor."</strong><br/>";
                }
            }
            else {
                $list_level_approval_vendor = "SELECT lpb_appr_vendor FROM list_level_approval WHERE lpb_appr_vendor = '$kode_level_sesi'";
                $get_appr_vendor = $this->db_logistik_pt->query($list_level_approval_vendor)->num_rows();
                
                if($get_appr_vendor > 0){
                    $konfirmasi_vendor = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_vendor" name="btn_konfirmasi_vendor" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nolpb.','.$noreflpb.','.$kodebar.','.$Vendor.','.$mengetahui.','.$nabar.','.$qty.','.$nom.')"> Mengetahui
                                </button>
                            </a>';
                }
                else {
                    $konfirmasi_vendor = "";
                }
            }
			
			$row[] = $no++;
			$row[] = $hasil->ttgtxt;
			$row[] = $hasil->noref;
			$row[] = $hasil->kodebar;
			$row[] = $hasil->nabar;
			$row[] = $hasil->qty;
			$row[] = $hasil->qtyditerima;
			$row[] = $hasil->satuan;
			$row[] = $konfirmasi_kasie_gudang;
			$row[] = $konfirmasi_ktu;
			//$row[] = $konfirmasi_mandor;
			//$row[] = $konfirmasi_vendor;
			$data[] = $row;
		}
		$output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
		
        return $output;  
	}
	
	function get_list_lpb_approval(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $filter = $this->input->post('filter');
        $keyfilter1 = "";

        switch ($filter) {
            case "03":
                $keyfilter1 = "AND lokasi = 'PKS'";
                break;
            case "02":
                $keyfilter1 = "AND lokasi = 'RO'";
                break;
            case "01":
                $keyfilter1 = "AND lokasi = 'HO'";
                break;
            case "06":
                $keyfilter1 = "AND noref LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND noref LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
		$periode = $this->session->userdata('ym_periode');
		$periode = "AND txtperiode1 = ".$periode;
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stokmasuk WHERE BATAL <> 1 $periode $keyfilter1  AND approval = '1' AND (ttgtxt LIKE '%$keyword%'
                    OR noref LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR refpo LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT * FROM stokmasuk WHERE BATAL <> 1 $periode $keyfilter1 AND approval = '1' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = '<a href="'.site_url('lpb/cetak/'.$hasil->ttgtxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_lpb"> Cetak</a>';
            $row[] = $no++;
            // $row[] = $hasil->tgl;
            $row[] = $hasil->ttgtxt;
            $row[] = $hasil->noref;
            $row[] = $hasil->nopotxt;
            $row[] = $hasil->refpo;
            $row[] = $hasil->nama_supply;

            $query_masukitem = "SELECT nabar FROM masukitem WHERE ttgtxt = '$hasil->ttgtxt' AND noref = '$hasil->noref'";
            $data_masukitem = $this->db_logistik_pt->query($query_masukitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_masukitem as $masukitem){
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $masukitem->nabar);
            }
            $row[] = join(", ",$data_detail_nama);
            $row[] = $hasil->ket;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->USER;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function get_list_po(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $filter = $this->input->post('filter');
        switch ($filter) {
            case "PKS":
                $keyfilter1 = "AND lokasi = 'PKS'";
                break;
            case "SITE":
                $keyfilter1 = "AND lokasi = 'SITE'";
                break;
            case "RO":
                $keyfilter1 = "AND lokasi = 'RO'";
                break;
            case "HO":
                $keyfilter1 = "AND lokasi = 'HO'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
		$periode = $this->session->userdata('ym_periode');
		$periode = "AND periodetxt = ".$periode;
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            // $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE (kirim <> '1' AND batal <> '1') AND (tglpo LIKE '%$keyword%'
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE (noppotxt = '0' AND batal <> '1') $periode AND (tglpo LIKE '%$keyword%'
                    OR noreftxt LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR tglpotxt LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            // $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE kirim <> '1' AND batal <> '1' ORDER BY id DESC";
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE noppotxt = '0' AND batal <> '1' $periode ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $row[] = $no++;
            $row[] = $hasil->tglpo;
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->nopotxt;
            // $row[] = $hasil->noppotxt;
            $row[] = $hasil->tglpo;
            $row[] = $hasil->nama_supply;
            // $row[] = $hasil->no_refppo;
            $row[] = $hasil->ket;
            $data[] = $row;
        }
        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function get_list_barang(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        $no_po = $this->input->post('no_po');
        $no_ref_po = $this->input->post('no_ref_po');
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE (nopotxt = '$no_po' AND noref = '$no_ref_po')
                AND (kodebartxt LIKE '%$keyword%'
                OR nabar LIKE '%$keyword%'
                OR qty LIKE '%$keyword%'
                OR sat LIKE '%$keyword%'
                OR ket LIKE '%$keyword%')
                ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE nopotxt = '$no_po' AND noref = '$no_ref_po' ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        
        foreach ($data_tabel as $hasil) {
            $query_sisa_qty_lpb = "SELECT SUM(qty) as qty_lpb FROM masukitem WHERE BATAL <> 1 AND kodebartxt = '$hasil->kodebartxt' AND nopotxt = '$hasil->nopotxt' AND refpo = '$hasil->noref'";
            $data_sisa_qty_lpb = $this->db_logistik_pt->query($query_sisa_qty_lpb)->row();

            $row   = array();
            $id = $hasil->id;

            if($hasil->qty - $data_sisa_qty_lpb->qty_lpb != 0){   
                $row[] = $no++;
                $row[] = $hasil->kodebartxt;
                $row[] = $hasil->nabar;
                $row[] = number_format($hasil->qty,0);
                $row[] = number_format($data_sisa_qty_lpb->qty_lpb,0);
                $row[] = number_format($hasil->qty - $data_sisa_qty_lpb->qty_lpb,0);
                $row[] = $hasil->sat;
                $row[] = $hasil->ket;
                $data[] = $row;
            }
        }
        $count_all = $no-1;

        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }

    function simpan_rinci_lpb(){
        // var_dump($_POST);exit();

//         Error Save Data : array(16) {
//   ["txt_tgl_terima"]=>string(0) ""
//   ["txt_no_pengantar"]=>string(0) ""
//   ["txt_no_po"]=>string(7) "3100002"
//   ["txt_ref_po"]=>string(25) "EST/BWJ/JKT/03/19/3100002"
//   ["txt_kd_supplier"]=>string(4) "0475"
//   ["txt_supplier"]=>string(12) "TOKO ( KAS )"
//   ["txt_lpb_dari_pt"]=>string(0) ""
//   ["txt_tgl_input"]=>string(0) ""
//   ["txt_lokasi_gudang"]=>string(0) ""
//   ["txt_tgl_po"]=>string(0) ""
//   ["txt_ket_pengiriman"]=>string(0) ""
//   ["txt_kode_barang"]=>string(15) "102505950000045"
//   ["txt_nama_brg"]=>string(14) "ABBOCATH NO.22"
//   ["txt_satuan"]=>string(3) "PCS"
//   ["txt_qty"]=>string(1) "2"
//   ["txt_ket_rinci"]=>string(1) "-"
// }
        $query_id_stok_masuk = "SELECT MAX(id)+1 as id_stok_masuk FROM stokmasuk";
        $generate_id_stok_masuk = $this->db_logistik_pt->query($query_id_stok_masuk)->row();
        $id_stok_masuk = $generate_id_stok_masuk->id_stok_masuk;
        if(empty($id_stok_masuk)){
            $id_stok_masuk = 1;
        }

        $query_id_masuk_item = "SELECT MAX(id)+1 as id_stok_masuk FROM masukitem";
        $generate_id_masuk_item = $this->db_logistik_pt->query($query_id_masuk_item)->row();
        $id_masuk_item = $generate_id_masuk_item->id_stok_masuk;
        if(empty($id_masuk_item)){
            $id_masuk_item = 1;
        }

        $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
        $nopo = $this->input->post('txt_no_po');
        $refpo = $this->input->post('txt_ref_po');

        if ($refpo == "MUTASI") {
            $refpo = $this->input->post('hidden_no_ref_bkb');
        }

        $lokasibuatpo = substr($refpo,0,3);
        switch ($lokasibuatpo) {
            case 'PST': // HO
                $digit1 = "1";
                $ref_1 = "LPB";
                break;
            case 'ROM': // RO
                $digit1 = "2";
                $ref_1 = "ROM-LPB";
                break;
            case 'FAC': // PKS
                $digit1 = "3";
                $ref_1 = "FAC";
                break;
            case 'EST': // SITE
                $digit1 = "6";
                $ref_1 = "EST-LPB";
                break;
            default:
                break;
        }

        $polokal = substr($refpo,8,8); // PO-Lokal
        switch ($polokal) {
            case "PO-Lokal":
                $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
                switch ($lokasilpb) {
                    case 'HO': // HO
                        $digit2 = "1";
                        break;
                    case 'RO': // RO
                        $digit2 = "2";
                        break;
                    case 'PKS': // PKS
                        $digit2 = "3";
                        break;
                    case 'SITE': // SITE
                        $digit2 = "6";
                        break;
                    default:
                        break;
                }
                break;
            default:
                if (substr($refpo, 4,3) == "POA"){
                    $digit2 = "1";
                }
                else{
                    switch ($lokasilpb) {
                        case 'HO': // HO
                            $digit2 = "1";
                            break;
                        case 'RO': // RO
                            $digit2 = "2";
                            break;
                        case 'PKS': // PKS
                            $digit2 = "3";
                            break;
                        case 'SITE': // SITE
                            $digit2 = "6";
                            break;
                        default:
                            break;
                    }
                }
                break;
        }

        $digit1_2 = $digit1.$digit2;

        switch ($lokasilpb) {
            case 'HO':
                $ref_2 = "PST";
                break;
            case 'SITE':
                $ref_2 = "SWJ";
                break;
            case 'PKS':
                $ref_2 = "SWJ";
                break;
            case 'RO':
                $ref_2 = "PKY";
                break;
            default:
                break;
        }

        $kodebar = $this->input->post('txt_kode_barang');
        $nabar = $this->input->post('txt_nama_brg');

        $query_masuk_item = "SELECT MAX(SUBSTRING(ttgtxt, 3)) as maxttg from masukitem WHERE ttg LIKE '$digit1_2%'";
        $generate_masuk_item = $this->db_logistik_pt->query($query_masuk_item)->row();
        $noUrut_masuk_item = (int)($generate_masuk_item->maxttg);
        $noUrut_masuk_item++;
        $print_masuk_item = sprintf("%05s", $noUrut_masuk_item);
        
        $ref_3 = date("m/y",strtotime($this->input->post('txt_tgl_terima')));

        if(empty($this->input->post('hidden_no_lpb'))){
            $no_lpb = $digit1_2.$print_masuk_item; // 6207836;
        }
        else{
            $no_lpb = $this->input->post('hidden_no_lpb');
        }

        if(empty($this->input->post('hidden_no_ref_lpb'))){
            $no_ref_lpb = $ref_1."/".$ref_2."/".$ref_3."/".$print_masuk_item;//LPB/PST/01/00233 // Est-LPB/swj/12/18/07836 // EST/SWJ/RETURN/642/XIV/12/2018
        }
        else{
            $no_ref_lpb = $this->input->post('hidden_no_ref_lpb');
        }

        $check_po = $this->input->post('txt_no_po');
        if(substr($check_po, 8,8) == "PO-Lokal"){
            $po_lokal = "1";
        }
        else{
            $po_lokal = "0";
        }

        $check_asset = $this->input->post('chk_asset');
        if($check_asset == "Asset"){
            $asset = "1";
        }
        else {
            $asset = "0";
        }

        if(!empty($_POST['txt_bkb_dari_pt'])){
            $mutasi = "1";
        }
        else{
            $mutasi = "0";
        }

        $tgl_terima = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        $tgl_input = date("Y-m-d", strtotime($this->input->post('txt_tgl_input')));

        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_terima')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_terima')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');

        $kodept = $this->session->userdata('kode_pt');
        // $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        // $txtperiode = date("Ym", strtotime($this->input->post('txt_tgl_terima')));

        $query_get_po = "SELECT id, nopotxt, kode_supply, nama_supply FROM po WHERE nopotxt = '$nopo' AND noreftxt = '$refpo'";
        $get_po = $this->db_logistik_pt->query($query_get_po)->row();

        $query_get_item_po = "SELECT id, nopotxt, kurs, konversi FROM item_po WHERE nopotxt = '$nopo' AND noref = '$refpo' AND kodebartxt = '$kodebar' AND nabar = '$nabar'";
        $get_item_po = $this->db_logistik_pt->query($query_get_item_po)->row();

        if(!empty($get_item_po)){
            $kurs = $get_item_po->kurs;
            $konversi = $get_item_po->konversi;
        }
        else{
            $kurs = "Rp";
            $konversi = "0";
        }

        if(!empty($get_po)){
            $kode_supply = $get_po->kode_supply;
            $nama_supply = $get_po->nama_supply;            
        }
        else{
            $kode_supply = $this->input->post('txt_kd_supplier');
            $nama_supply = $this->input->post('txt_supplier');
        }

        $no_po = $this->input->post('txt_no_po');
        $no_ref_po = $this->input->post('txt_ref_po');
        if($no_ref_po == 'MUTASI'){
            $no_ref_po = str_replace("BKB", "MUTASI", $refpo);
        }

        $datainsert_stokmasuk['id']             = $id_stok_masuk;
        $datainsert_stokmasuk['tgl']            = $tgl_terima." 00:00:00";
        $datainsert_stokmasuk['nopo']           = $no_po;
        $datainsert_stokmasuk['nopotxt']        = $no_po;
        $datainsert_stokmasuk['LOKAL']          = $po_lokal;
        $datainsert_stokmasuk['ASSET']          = "0"; //$asset;
        $datainsert_stokmasuk['kode_supply']    = $kode_supply;
        $datainsert_stokmasuk['nama_supply']    = $nama_supply;
        $datainsert_stokmasuk['ttg']            = $no_lpb;
        $datainsert_stokmasuk['ttgtxt']         = $no_lpb;
        $datainsert_stokmasuk['no_pengtr']      = $this->input->post('txt_no_pengantar');
        $datainsert_stokmasuk['lokasi_gudang']  = $this->input->post('txt_lokasi_gudang');
        $datainsert_stokmasuk['ket']            = $this->input->post('txt_ket_pengiriman');
        $datainsert_stokmasuk['tglinput']       = $tgl_input.date(" H:i:s");
        $datainsert_stokmasuk['txttgl']         = $txttgl;
        $datainsert_stokmasuk['thn']            = $thn;
        $datainsert_stokmasuk['periode1']       = $periode;
        $datainsert_stokmasuk['periode2']       = NULL;
        $datainsert_stokmasuk['txtperiode1']    = $txtperiode;
        $datainsert_stokmasuk['txtperiode2']    = NULL;
        $datainsert_stokmasuk['pt']             = $this->session->userdata('pt');
        $datainsert_stokmasuk['kode']           = $kodept;
        $datainsert_stokmasuk['mutasi']         = $mutasi;
        $datainsert_stokmasuk['lokasi']         = $this->session->userdata('status_lokasi');
        $datainsert_stokmasuk['refpo']          = $no_ref_po;
        $datainsert_stokmasuk['noref']          = $no_ref_lpb;
        $datainsert_stokmasuk['BATAL']          = '0';
        $datainsert_stokmasuk['USER']           = $this->session->userdata('user');
        $datainsert_stokmasuk['cetak']          = '0';
        $datainsert_stokmasuk['posting']        = '0';
        $datainsert_stokmasuk['approval']        = '1';
        $datainsert_stokmasuk['flag_lpb']        = '1';

        $datainsert_masukitem["id"]           = $id_masuk_item;
        $datainsert_masukitem["kdpt"]         = $this->session->userdata('kode_pt');
        $datainsert_masukitem["nopo"]         = $no_po;
        $datainsert_masukitem["nopotxt"]      = $no_po;
        $datainsert_masukitem["LOKAL"]        = $po_lokal;
        $datainsert_masukitem["ASSET"]        = $asset;
        $datainsert_masukitem["pt"]           = $this->session->userdata('pt');
        $datainsert_masukitem["afd"]          = '-';
        $datainsert_masukitem["kodebar"]      = $this->input->post('txt_kode_barang');
        $datainsert_masukitem["kodebartxt"]   = $this->input->post('txt_kode_barang');
        $datainsert_masukitem["nabar"]        = $this->input->post('txt_nama_brg');
        $datainsert_masukitem["satuan"]       = $this->input->post('txt_satuan');
        $datainsert_masukitem["grp"]          = $this->input->post('hidden_grup');
        $datainsert_masukitem["qty"]          = $this->input->post('txt_qty');
        $datainsert_masukitem["tgl"]          = $tgl_terima." 00:00:00";
        $datainsert_masukitem["ttg"]          = $no_lpb;
        $datainsert_masukitem["ttgtxt"]       = $no_lpb;
        $datainsert_masukitem["tglinput"]     = $tgl_input.date(" H:i:s");
        $datainsert_masukitem["txttgl"]       = $txttgl;
        $datainsert_masukitem["thn"]          = $thn;
        $datainsert_masukitem["periode"]      = $periode;
        $datainsert_masukitem["txtperiode"]   = $txtperiode;
        $datainsert_masukitem["noadjust"]     = "0";
        $datainsert_masukitem["ket"]          = $this->input->post('txt_ket_rinci');
        $datainsert_masukitem["lokasi"]       = $this->session->userdata('status_lokasi');
        $datainsert_masukitem["refpo"]        = $no_ref_po;
        $datainsert_masukitem["noref"]        = $no_ref_lpb;
        $datainsert_masukitem["BATAL"]        = '0';
        $datainsert_masukitem["kurs"]         = $kurs;
        $datainsert_masukitem["konversi"]     = $konversi;
        $datainsert_masukitem["USER"]         = $this->session->userdata('user');
        $datainsert_masukitem["cetak"]        = '0';
        $datainsert_masukitem["posting"]      = '0';

        $kodebar = $this->input->post('txt_kode_barang');
        $sum_stok = $this->sum_stok($kodebar);

        $query_max_id_stock_awal = "SELECT id as max_id_stock_awal from stockawal where kodebartxt = '$kodebar' AND txtperiode = '$txtperiode' AND KODE = '$kodept'";

        $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();
        // $query_max_id_stock_awal = "SELECT max(id)+1 as max_id_stock_awal from stockawal";
        // $query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = '$kodebar'";
        // if(empty($data_max_id_stock_awal->max_id_stock_awal)){
        if($sum_stok === FALSE){
            $data = "input_stock_awal";
            return $data;
        }
        else {
            $no_id = $data_max_id_stock_awal->max_id_stock_awal;
            $user = $this->session->userdata('user');
            $ip = $this->input->ip_address();
            $platform = $this->platform->agent();

            $txtperiode = $this->session->userdata('ym_periode');
            $kodept = $this->session->userdata('kode_pt');

            $norefbkb = $this->input->post('hidden_no_ref_bkb');

            if(empty($this->input->post('hidden_no_lpb'))){
            	// $this->db_logistik_pt->insert('stokmasuk_harian',$datainsert_stokmasuk);
            	$this->db_logistik_pt->insert('stokmasuk',$datainsert_stokmasuk);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stokmasuk = TRUE;
                }
                else{
                    $bool_stokmasuk = FALSE;
                }

                $this->db_logistik_pt->insert('masukitem',$datainsert_masukitem);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_masukitemlpb = TRUE;
                }
                else{
                    $bool_masukitemlpb = FALSE;
                }

                if($bool_masukitemlpb === TRUE){
                    if($this->input->post('txt_ref_po') == "MUTASI"){
                        $data_keluarbrgitem_mutasi['flag_lpb'] = "1";
                        $this->db_logistik_pt->set($data_keluarbrgitem_mutasi);
                        $this->db_logistik_pt->where('kodebartxt', $kodebar);
                        $this->db_logistik_pt->where('kodept', $kodept);
                        // $this->db_logistik_pt->where('txtperiode', $txtperiode);
                        $this->db_logistik_pt->where('NO_REF', $norefbkb);
                        $this->db_logistik_pt->update('keluarbrgitem_mutasi');
                    }
                }
                    
                if($bool_stokmasuk === TRUE){
                    if($this->input->post('txt_ref_po') == "MUTASI"){
                        $query_count_udah_lpb = "SELECT * FROM keluarbrgitem_mutasi WHERE kodept = '$kodept' AND NO_REF = '$norefbkb' AND (flag_lpb = '0' OR flag_lpb IS NULL)";
                        $get_count_udah_lpb = $this->db_logistik_pt->query($query_count_udah_lpb);

                        if($get_count_udah_lpb->num_rows() == "0"){
                            $data_stockkeluar_mutasi['flag_lpb'] = "1";
                            $this->db_logistik_pt->set($data_stockkeluar_mutasi);
                            $this->db_logistik_pt->where('kode', $kodept);
                            // $this->db_logistik_pt->where('txtperiode1', $txtperiode);
                            $this->db_logistik_pt->where('NO_REF', $norefbkb);
                            $this->db_logistik_pt->update('stockkeluar_mutasi');
                        }
                    }
                }

                $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '$user menambahkan barang pada LPB $no_lpb', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
                $this->db_logistik_pt->query($query_1);
                if($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stockawalhistory_old = TRUE;
                }
                else {
                    $bool_stockawalhistory_old = FALSE;
                }

                $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
                $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
                $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

                // $dataedit_stockawal["nilai_masuk"] = 
                $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty') + $curr_QTY_MASUK;
                // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
                
                $this->db_logistik_pt->set($dataedit_stockawal);
                $this->db_logistik_pt->where('kodebartxt', $kodebar);
				$this->db_logistik_pt->where('KODE', $kodept);
				$this->db_logistik_pt->where('txtperiode', $txtperiode);
                $this->db_logistik_pt->update('stockawal');

                // var_dump($this->db_logistik_pt->last_query());exit();

                if ($this->db_logistik_pt->affected_rows() > 0){
                    $bool_stockawal = TRUE;
                }
                else{
                    $bool_stockawal = FALSE;
                }

                $this->_check_sum_po_dan_lpb($no_po,$no_ref_po);

                // if ($bool_masukitemlpb === TRUE && $bool_stokmasuk === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE){
                if ($bool_masukitemlpb === TRUE && $bool_stokmasuk === TRUE){
                    return array('status' => TRUE, 'no_lpb' => $no_lpb, 'id_stok_masuk' => $id_stok_masuk ,'id_masuk_item' => $id_masuk_item, 'no_ref_lpb' => $no_ref_lpb);
                }
                else{
                    return FALSE;
                }
            }
            else{
            	$kodebar    = $this->input->post('txt_kode_barang');
                $nabar      = $this->input->post('txt_nama_brg');

                $query = "SELECT * FROM masukitem WHERE ttgtxt = '$no_lpb' AND noref = '$no_ref_lpb' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
                $check_brg = $this->db_logistik_pt->query($query);

                if($check_brg->num_rows() > 0){
                    return "kodebar_exist";
                }
                /*** Jika barang belum pernah ditambahkan pada LPB yang sama ***/
                else{
                    $this->db_logistik_pt->insert('masukitem',$datainsert_masukitem);
                    if($this->db_logistik_pt->affected_rows() > 0){
                        $bool_masukitemlpb = TRUE;
                    }
                    else{
                        $bool_masukitemlpb = FALSE;
                    }

                    if($bool_masukitemlpb === TRUE){
                        if($this->input->post('txt_ref_po') == "MUTASI"){
                            $data_keluarbrgitem_mutasi['flag_lpb'] = "1";
                            $this->db_logistik_pt->set($data_keluarbrgitem_mutasi);
                            $this->db_logistik_pt->where('kodebartxt', $kodebar);
                            $this->db_logistik_pt->where('kodept', $kodept);
                            // $this->db_logistik_pt->where('txtperiode', $txtperiode);
                            $this->db_logistik_pt->where('NO_REF', $norefbkb);
                            $this->db_logistik_pt->update('keluarbrgitem_mutasi');
                        }
                    }
                        
                    // if($bool_stokmasuk === TRUE){
                        if($this->input->post('txt_ref_po') == "MUTASI"){
                            $query_count_udah_lpb = "SELECT * FROM keluarbrgitem_mutasi WHERE kodept = '$kodept' AND NO_REF = '$norefbkb' AND (flag_lpb = '0' OR flag_lpb IS NULL)";
                            $get_count_udah_lpb = $this->db_logistik_pt->query($query_count_udah_lpb);

                            if($get_count_udah_lpb->num_rows() == "0"){
                                $data_stockkeluar_mutasi['flag_lpb'] = "1";
                                $this->db_logistik_pt->set($data_stockkeluar_mutasi);
                                $this->db_logistik_pt->where('kode', $kodept);
                                // $this->db_logistik_pt->where('txtperiode1', $txtperiode);
                                $this->db_logistik_pt->where('NO_REF', $norefbkb);
                                $this->db_logistik_pt->update('stockkeluar_mutasi');
                            }
                        }
                    // }

                    $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '$user menambahkan barang $kodebar|$nabar pada LPB $no_lpb', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
                    $this->db_logistik_pt->query($query_1);
                    if($this->db_logistik_pt->affected_rows() > 0){
                        $bool_stockawalhistory_old = TRUE;
                    }
                    else {
                        $bool_stockawalhistory_old = FALSE;
                    }

                    $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
                    $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
                    $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

                    // $dataedit_stockawal["nilai_masuk"] = 
                    $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty') + $curr_QTY_MASUK;
                    // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
                    
                    $this->db_logistik_pt->set($dataedit_stockawal);
                    // $this->db_logistik_pt->where('id', $no_id);
                    $this->db_logistik_pt->where('kodebartxt', $kodebar);
                    $this->db_logistik_pt->where('KODE', $kodept);
                    $this->db_logistik_pt->where('txtperiode', $txtperiode);
                    $this->db_logistik_pt->update('stockawal');

                    // var_dump($this->db_logistik_pt->last_query());exit();
                    if ($this->db_logistik_pt->affected_rows() > 0){
                        $bool_stockawal = TRUE;
                    }
                    else{
                        $bool_stockawal = FALSE;
                    }

                    $this->_check_sum_po_dan_lpb($no_po,$no_ref_po);

                    if ($bool_masukitemlpb === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE){
                        return array('status' => TRUE, 'no_lpb' => $no_lpb, 'id_masuk_item' => $id_masuk_item, 'no_ref_lpb' => $no_ref_lpb);
                    }
                    else{
                        return FALSE;
                    }
                }
            }
        }
    }

    function ubah_rinci_lpb(){
        // var_dump($_POST);exit();
// Error Update Data : array(20) {
//   ["txt_tgl_terima"]=>string(10) "03/26/2019"
//   ["txt_no_pengantar"]=>string(12) "no pengantar"
//   ["txt_no_po"]=>string(7) "3100002"
//   ["txt_ref_po"]=>string(25) "EST/BWJ/JKT/03/19/3100002"
//   ["txt_kd_supplier"]=>string(4) "0475"
//   ["txt_supplier"]=>string(12) "TOKO ( KAS )"
//   ["txt_lpb_dari_pt"]=>string(11) "lpb dari pt"
//   ["txt_tgl_input"]=>string(10) "03/26/2019"
//   ["txt_lokasi_gudang"]=>string(12) "lokasi gdang"
//   ["txt_tgl_po"]=>string(10) "03/26/2019"
//   ["txt_ket_pengiriman"]=>string(21) "keterangan pengiriman"
//   ["txt_kode_barang"]=>string(15) "102505530000023"
//   ["txt_nama_brg"]=>string(20) "39T HELICAL GEAR -TR"
//   ["txt_qty"]=>string(1) "1"
//   ["txt_satuan"]=>string(3) "PCS"
//   ["txt_ket_rinci"]=>string(10) "- okekeooe"
//   ["hidden_no_lpb"]=>string(7) "6600002"
//   ["hidden_no_ref_lpb"]=>string(23) "EST-LPB/SWJ/03/19/00002"
//   ["hidden_id_stok_masuk"]=>string(1) "3"
//   ["hidden_id_masuk_item"]=>string(1) "3"
// }

        // $query_id_stok_masuk = "SELECT MAX(id)+1 as id_stok_masuk FROM stokmasuk";
        // $generate_id_stok_masuk = $this->db_logistik_pt->query($query_id_stok_masuk)->row();
        // $id_stok_masuk = $generate_id_stok_masuk->id_stok_masuk;
        // if(empty($id_stok_masuk)){
        //     $id_stok_masuk = 1;
        // }
        $id_stok_masuk = $this->input->post('hidden_id_stok_masuk');

        // $query_id_masuk_item = "SELECT MAX(id)+1 as id_stok_masuk FROM masukitem";
        // $generate_id_masuk_item = $this->db_logistik_pt->query($query_id_masuk_item)->row();
        // $id_masuk_item = $generate_id_masuk_item->id_stok_masuk;
        // if(empty($id_masuk_item)){
        //     $id_masuk_item = 1;
        // }
        $id_masuk_item = $this->input->post('hidden_id_masuk_item');

        $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
        $nopo = $this->input->post('txt_no_po');
        $refpo = $this->input->post('txt_ref_po');

        if ($refpo == "MUTASI") {
            $refpo = $this->input->post('hidden_no_ref_bkb');
        }

        // $lokasibuatpo = substr($refpo,0,3);
        // switch ($lokasibuatpo) {
        //     case 'PST': // HO
        //         $digit1 = "1";
        //         $ref_1 = "LPB";
        //         break;
        //     case 'ROM': // RO
        //         $digit1 = "2";
        //         $ref_1 = "ROM-LPB";
        //         break;
        //     case 'FAC': // PKS
        //         $digit1 = "3";
        //         $ref_1 = "FAC";
        //         break;
        //     case 'EST': // SITE
        //         $digit1 = "6";
        //         $ref_1 = "EST-LPB";
        //         break;
        //     default:
        //         break;
        // }

        // $polokal = substr($refpo,8,8); // PO-Lokal
        // switch ($polokal) {
        //     case "PO-Lokal":
        //         $lokasilpb = $this->session->userdata('status_lokasi'); //HO, RO, SITE, PKS
        //         switch ($lokasilpb) {
        //             case 'HO': // HO
        //                 $digit2 = "1";
        //                 break;
        //             case 'RO': // RO
        //                 $digit2 = "2";
        //                 break;
        //             case 'PKS': // PKS
        //                 $digit2 = "3";
        //                 break;
        //             case 'SITE': // SITE
        //                 $digit2 = "6";
        //                 break;
        //             default:
        //                 break;
        //         }
        //         break;
        //     default:
        //         if (substr($refpo, 4,3) == "POA"){
        //             $digit2 = "1";
        //         }
        //         else{
        //             switch ($lokasilpb) {
        //                 case 'HO': // HO
        //                     $digit2 = "1";
        //                     break;
        //                 case 'RO': // RO
        //                     $digit2 = "2";
        //                     break;
        //                 case 'PKS': // PKS
        //                     $digit2 = "3";
        //                     break;
        //                 case 'SITE': // SITE
        //                     $digit2 = "6";
        //                     break;
        //                 default:
        //                     break;
        //             }
        //         }
        //         break;
        // }

        // $digit1_2 = $digit1.$digit2;

        // switch ($lokasilpb) {
        //     case 'HO':
        //         $ref_2 = "PST";
        //         break;
        //     case 'SITE':
        //         $ref_2 = "SWJ";
        //         break;
        //     case 'PKS':
        //         $ref_2 = "SWJ";
        //         break;
        //     case 'RO':
        //         $ref_2 = "PKY";
        //         break;
        //     default:
        //         break;
        // }

        $kodebar = $this->input->post('txt_kode_barang');
        $nabar = $this->input->post('txt_nama_brg');

        // $query_masuk_item = "SELECT MAX(SUBSTRING(ttgtxt, 3)) as maxttg from masukitem WHERE ttg LIKE '$digit1_2%'";
        // $generate_masuk_item = $this->db_logistik_pt->query($query_masuk_item)->row();
        // $noUrut_masuk_item = (int)($generate_masuk_item->maxttg);
        // $noUrut_masuk_item++;
        // $print_masuk_item = sprintf("%05s", $noUrut_masuk_item);
        
        // $ref_3 = date("m/y",strtotime($this->input->post('txt_tgl_terima')));

        // if(empty($this->input->post('hidden_no_lpb'))){
        //     $no_lpb = $digit1_2.$print_masuk_item; // 6207836;
        // }
        // else{
        //     $no_lpb = $this->input->post('hidden_no_lpb');
        // }

        // if(empty($this->input->post('hidden_no_ref_lpb'))){
        //     $no_ref_lpb = $no_ref_lpb = $ref_1."/".$ref_2."/".$ref_3."/".$print_masuk_item;//LPB/PST/01/00233 // Est-LPB/swj/12/18/07836 // EST/SWJ/RETURN/642/XIV/12/2018
        // }
        // else{
        //     $no_ref_lpb = $this->input->post('hidden_no_ref_lpb');
        // }
        $no_lpb = $this->input->post('hidden_no_lpb');
        $no_ref_lpb = $this->input->post('hidden_no_ref_lpb');

        $check_po = $this->input->post('txt_no_po');
        if(substr($check_po, 8,8) == "PO-Lokal"){
            $po_lokal = "1";
        }
        else{
            $po_lokal = "0";
        }

        $check_asset = $this->input->post('chk_asset');
        if($check_asset == "Asset"){
            $asset = "1";
        }
        else {
            $asset = "0";
        }

        if(!empty($_POST['txt_bkb_dari_pt'])){
            $mutasi = "1";
        }
        else{
            $mutasi = "0";
        }
        
        $tgl_terima = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        $tgl_input = date("Y-m-d", strtotime($this->input->post('txt_tgl_input')));

        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_terima')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_terima')));
        $periode = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');

        $kodept = $this->session->userdata('kode_pt');
        // $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        // $txtperiode = date("Ym", strtotime($this->input->post('txt_tgl_terima')));

        $query_get_po = "SELECT id, nopotxt, kode_supply, nama_supply FROM po WHERE nopotxt = '$nopo' AND noreftxt = '$refpo'";
        $get_po = $this->db_logistik_pt->query($query_get_po)->row();

        $query_get_item_po = "SELECT id, nopotxt, kurs, konversi FROM item_po WHERE nopotxt = '$nopo' AND noref = '$refpo' AND kodebartxt = '$kodebar' AND nabar = '$nabar'";
        $get_item_po = $this->db_logistik_pt->query($query_get_item_po)->row();

        if(!empty($get_item_po)){
            $kurs = $get_item_po->kurs;
            $konversi = $get_item_po->konversi;
        }
        else{
            $kurs = "Rp";
            $konversi = NULL;
        }

        if(!empty($get_po)){
            $kode_supply = $get_po->kode_supply;
            $nama_supply = $get_po->nama_supply;            
        }
        else{
            $kode_supply = $this->input->post('txt_kd_supplier');
            $nama_supply = $this->input->post('txt_supplier');
        }

        $arr_bulan = ['01','02','03','04','05','06','07','08','09','11','12'];
        
        $tgl_min = "26";

        $max_feb = $thn % 4 == 0 ? "29" : "28";
        $tgl_max = ["31",$max_feb,"31","30","31","30","31","31","30","31","30","31"];

        $kodebar = $this->input->post('txt_kode_barang');

        $no_po = $this->input->post('txt_no_po');
        $no_ref_po = $this->input->post('txt_ref_po');
        if($no_ref_po == 'MUTASI'){
            $no_ref_po = str_replace("BKB", "MUTASI", $refpo);
        }

        $dataedit_stokmasuk['id']             = $id_stok_masuk;
        $dataedit_stokmasuk['tgl']            = $tgl_terima." 00:00:00";
        $dataedit_stokmasuk['nopo']           = $no_po;
        $dataedit_stokmasuk['nopotxt']        = $no_po;
        $dataedit_stokmasuk['LOKAL']          = $po_lokal;
        $dataedit_stokmasuk['ASSET']          = $asset;
        $dataedit_stokmasuk['kode_supply']    = $kode_supply;
        $dataedit_stokmasuk['nama_supply']    = $nama_supply;
        $dataedit_stokmasuk['ttg']            = $no_lpb;
        $dataedit_stokmasuk['ttgtxt']         = $no_lpb;
        $dataedit_stokmasuk['no_pengtr']      = $this->input->post('txt_no_pengantar');
        $dataedit_stokmasuk['lokasi_gudang']  = $this->input->post('txt_lokasi_gudang');
        $dataedit_stokmasuk['ket']            = $this->input->post('txt_ket_pengiriman');
        $dataedit_stokmasuk['tglinput']       = $tgl_input.date(" H:i:s");
        $dataedit_stokmasuk['txttgl']         = $txttgl;
        $dataedit_stokmasuk['thn']            = $thn;
        $dataedit_stokmasuk['periode1']       = $periode;
        $dataedit_stokmasuk['periode2']       = NULL;
        $dataedit_stokmasuk['txtperiode1']    = $txtperiode;
        $dataedit_stokmasuk['txtperiode2']    = NULL;
        $dataedit_stokmasuk['pt']             = $this->session->userdata('pt');
        $dataedit_stokmasuk['kode']           = $kodept;
        $dataedit_stokmasuk['mutasi']         = $mutasi;
        $dataedit_stokmasuk['lokasi']         = $this->session->userdata('status_lokasi');
        $dataedit_stokmasuk['refpo']          = $no_ref_po;
        $dataedit_stokmasuk['noref']          = $no_ref_lpb;
        $dataedit_stokmasuk['BATAL']          = '0';
        $dataedit_stokmasuk['USER']           = $this->session->userdata('user');
        $dataedit_stokmasuk['cetak']          = '0';
        $dataedit_stokmasuk['posting']        = '0';

        $dataedit_masukitem["id"]           = $id_masuk_item;
        $dataedit_masukitem["kdpt"]         = $this->session->userdata('kode_pt');
        $dataedit_masukitem["nopo"]         = $no_po;
        $dataedit_masukitem["nopotxt"]      = $no_po;
        $dataedit_masukitem["LOKAL"]        = $po_lokal;
        $dataedit_masukitem["ASSET"]        = $asset;
        $dataedit_masukitem["pt"]           = $this->session->userdata('pt');
        $dataedit_masukitem["afd"]          = '-';
        $dataedit_masukitem["kodebar"]      = $kodebar;
        $dataedit_masukitem["kodebartxt"]   = $kodebar;
        $dataedit_masukitem["nabar"]        = $this->input->post('txt_nama_brg');
        $dataedit_masukitem["satuan"]       = $this->input->post('txt_satuan');
        $dataedit_masukitem["grp"]          = $this->input->post('hidden_grup');
        $dataedit_masukitem["qty"]          = $this->input->post('txt_qty');
        $dataedit_masukitem["tgl"]          = $tgl_terima." 00:00:00";
        $dataedit_masukitem["ttg"]          = $no_lpb;
        $dataedit_masukitem["ttgtxt"]       = $no_lpb;
        $dataedit_masukitem["tglinput"]     = $tgl_input.date(" H:i:s");
        $dataedit_masukitem["txttgl"]       = $txttgl;
        $dataedit_masukitem["thn"]          = $thn;
        $dataedit_masukitem["periode"]      = $periode;
        $dataedit_masukitem["txtperiode"]   = $txtperiode;
        $dataedit_masukitem["noadjust"]     = "0";
        $dataedit_masukitem["ket"]          = $this->input->post('txt_ket_rinci');
        $dataedit_masukitem["lokasi"]       = $this->session->userdata('status_lokasi');
        $dataedit_masukitem["refpo"]        = $no_ref_po;
        $dataedit_masukitem["noref"]        = $no_ref_lpb;
        $dataedit_masukitem["BATAL"]        = '0';
        $dataedit_masukitem["kurs"]         = $kurs;
        $dataedit_masukitem["konversi"]     = $konversi;
        $dataedit_masukitem["USER"]         = $this->session->userdata('user');
        $dataedit_masukitem["cetak"]        = '0';
        $dataedit_masukitem["posting"]      = '0';

        $this->db_logistik_pt->set($dataedit_stokmasuk);
        $this->db_logistik_pt->where('id', $id_stok_masuk);
        $this->db_logistik_pt->where('ttgtxt', $no_lpb);
        $this->db_logistik_pt->where('noref', $no_ref_lpb);
        $this->db_logistik_pt->update('stokmasuk');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_stokmasuk = TRUE;
        }
        else{
            $bool_stokmasuk = FALSE;
        }

        $this->db_logistik_pt->set($dataedit_masukitem);
        $this->db_logistik_pt->where('id', $id_masuk_item);
        $this->db_logistik_pt->where('ttgtxt', $no_lpb);
        $this->db_logistik_pt->where('noref', $no_ref_lpb);
        $this->db_logistik_pt->update('masukitem');
        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_masukitem = TRUE;
        }
        else{
            $bool_masukitem = FALSE;
        }

        $query_max_id_stock_awal = "SELECT id as max_id_stock_awal from stockawal where kodebartxt = '$kodebar' AND txtperiode = '$txtperiode' AND KODE = '$kodept'";
        $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();

        $no_id = $data_max_id_stock_awal->max_id_stock_awal;
        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = '$no_id' AND a.kodebartxt = '$kodebar'";
        $this->db_logistik_pt->query($query_1);
        if($this->db_logistik_pt->affected_rows() > 0){
            $bool_stockawalhistory_old = TRUE;
        }
        else {
            $bool_stockawalhistory_old = FALSE;
        }

        $query_QTY_MASUK = "SELECT QTY_MASUK FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
        $get_current_QTY_MASUK = $this->db_logistik_pt->query($query_QTY_MASUK)->row();
        $curr_QTY_MASUK = $get_current_QTY_MASUK->QTY_MASUK;

        // $dataedit_stockawal["nilai_masuk"] = 
        $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty') + $curr_QTY_MASUK;
        // $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('');
        
        $this->db_logistik_pt->set($dataedit_stockawal);
        $this->db_logistik_pt->where('kodebartxt', $kodebar);
        $this->db_logistik_pt->where('KODE', $kodept);
        $this->db_logistik_pt->where('txtperiode', $txtperiode);
        $this->db_logistik_pt->update('stockawal');

        if ($this->db_logistik_pt->affected_rows() > 0){
            $bool_stockawal = TRUE;
        }
        else{
            $bool_stockawal = FALSE;
        }

        $this->_check_sum_po_dan_lpb($no_po,$no_ref_po);

        if ($bool_masukitem === TRUE && $bool_stokmasuk === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE){
            return array('status' => TRUE, 'no_lpb' => $no_lpb, 'id_stok_masuk' => $id_stok_masuk ,'id_masuk_item' => $id_masuk_item, 'no_ref_lpb' => $no_ref_lpb);
        }
        else{
            return FALSE;
        }
    }

    function _check_sum_po_dan_lpb($no_po,$no_ref_po){
        $query_sum_masukitem = "SELECT SUM(qty) AS total_masukitem FROM masukitem WHERE BATAL<>1 AND nopotxt = '$no_po' AND refpo = '$no_ref_po'";
        $query_sum_itempo = "SELECT SUM(qty) AS total_itempo FROM item_po WHERE nopotxt = '$no_po' AND noref = '$no_ref_po'";

        $sum_masukitem = $this->db_logistik_pt->query($query_sum_masukitem)->row();
        $sum_itempo = $this->db_logistik_pt->query($query_sum_itempo)->row();

        if($sum_masukitem->total_masukitem == $sum_itempo->total_itempo){
            // $dataedit_po["kirim"] = "1";
            $dataedit_po["noppotxt"] = "1";
            $this->db_logistik_pt->set($dataedit_po);
            $this->db_logistik_pt->where('noreftxt', $no_ref_po);
            $this->db_logistik_pt->where('nopotxt', $no_po);
            $this->db_logistik_pt->update('po');
        }
        else {
            // $dataedit_po["kirim"] = "0";
            $dataedit_po["noppotxt"] = "0";
            $this->db_logistik_pt->set($dataedit_po);
            $this->db_logistik_pt->where('noreftxt', $no_ref_po);
            $this->db_logistik_pt->where('nopotxt', $no_po);
            $this->db_logistik_pt->update('po');
        }
    }

    function sum_stok($id){
        // $id = $this->input->post('kodbar');
        $sess_kode_pt = $this->session->userdata('kode_pt');

        $ym_periode  = $this->session->userdata('ym_periode');
        $query_stockawal = "SELECT saldoawal_qty, QTY_MASUK, QTY_KELUAR, QTY_ADJMASUK, QTY_ADJKELUAR FROM stockawal WHERE KODE = '$sess_kode_pt' AND kodebartxt = '$id' AND txtperiode = '$ym_periode'";

        $stockawal = $this->db_logistik_pt->query($query_stockawal);
        $stockawal_numrow = $stockawal->num_rows();
        
        if($stockawal_numrow == "0"){
            $get_saldoawal_qty = "0";
            $data = FALSE;
        }
        else {
            $get_stockawal = $stockawal->row();
            $get_saldoawal_qty = $get_stockawal->saldoawal_qty;
            $get_QTY_MASUK = $get_stockawal->QTY_MASUK;
            $get_QTY_KELUAR = $get_stockawal->QTY_KELUAR;
            $get_QTY_ADJMASUK = $get_stockawal->QTY_ADJMASUK;
            $get_QTY_ADJKELUAR = $get_stockawal->QTY_ADJKELUAR;

            $query_masuk = "SELECT SUM(qty) as totqtymasuk FROM masukitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kdpt = '$sess_kode_pt'";

            $summasuk = $this->db_logistik_pt->query($query_masuk)->row();
            
            $totqtymasuk = $summasuk->totqtymasuk;
            if(empty($summasuk->totqtymasuk)){
                $totqtymasuk = "0";
            }

            $query_retskbitem = "SELECT SUM(qty) as totqtyretskbitem FROM ret_skbitem WHERE kodebartxt = '$id' AND batal = '0' AND txtperiode = '$ym_periode' AND kodept = '$sess_kode_pt'";

            $sumretskbitem = $this->db_logistik_pt->query($query_retskbitem)->row();
            
            $totqtyretskbitem = $sumretskbitem->totqtyretskbitem;
            if(empty($sumretskbitem->totqtyretskbitem)){
                $totqtyretskbitem = "0";
            }

            $query_keluar = "SELECT SUM(qty2) as totqtykeluar FROM keluarbrgitem WHERE kodebartxt = '$id' AND kodept = '$sess_kode_pt' AND txtperiode = '$ym_periode' AND BATAL = '0'";
            $sumkeluar = $this->db_logistik_pt->query($query_keluar)->row();

            $totqtykeluar = $sumkeluar->totqtykeluar;
            if(empty($sumkeluar->totqtykeluar)){
                $totqtykeluar = "0";
            }

            $data = ($get_saldoawal_qty+$totqtymasuk+$totqtyretskbitem) - $totqtykeluar;
        }
        // echo json_encode($data);
        return $data;
    }

    function get_list_bkb_mutasi(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stockkeluar_mutasi WHERE 
                DATE(tgl) LIKE '%$keyword%'
                OR SKBTXT LIKE '%$keyword%'
                OR NO_REF LIKE '%$keyword%'
                OR pt LIKE '%$keyword%'
                ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT * FROM stockkeluar_mutasi ORDER BY tglinput DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $id = $hasil->id;

            $query_itemmutasi_bkb = "SELECT nabar FROM keluarbrgitem_mutasi WHERE SKBTXT = '$hasil->SKBTXT' AND NO_REF = '$hasil->NO_REF'";
            $data_itemmutasi_bkb = $this->db_logistik_pt->query($query_itemmutasi_bkb)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_itemmutasi_bkb as $keluaritem){
                array_push($data_detail_nama, $keluaritem->nabar);
            }

            $row[] = $no++;
            $row[] = date("Y-m-d",strtotime($hasil->tgl));
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = join(", ",$data_detail_nama);
            $row[] = $hasil->pt;
            $data[] = $row;
            // $no++;
        }
        $count_all = $no-1;

        $output = array(
            "draw"              => $_POST['draw'], 
            "recordsTotal"      => $count_all, 
            "recordsFiltered"   => $count_all, 
            "data"              => $data, 
        );
        return $output;   
    }
}
