<?php defined('BASEPATH') OR exit('No direct script access allowed');

ini_set('max_execution_time', '0');

class Posting extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		// $this->load->model('M_posting');
	}

	public function hitul_stokk(){
		return TRUE;
		$date_periode = date("d", strtotime($this->session->userdata('periode')));
		$month_periode = date("m", strtotime($this->session->userdata('periode')));
		
		// $ym_periode_skrg = date("Ym", strtotime($this->session->userdata('periode')));
		$ym_periode_skrg = "201901";

		$data_masukitem = $this->db_logistik_pt->get_where('masukitem',array('txtperiode'=> $ym_periode_skrg,'BATAL'=>'0'))->result();
		$this->db_logistik_pt->truncate('tmp_posting_masukitem');
		foreach ($data_masukitem as $list_masukitem) {
			$data_tmp_posting_masukitem['id'] = $list_masukitem->id;
			$data_tmp_posting_masukitem['kdpt'] = $list_masukitem->kdpt;
			$data_tmp_posting_masukitem['nopo'] = $list_masukitem->nopo;
			$data_tmp_posting_masukitem['nopotxt'] = $list_masukitem->nopotxt;
			$data_tmp_posting_masukitem['LOKAL'] = $list_masukitem->LOKAL;
			$data_tmp_posting_masukitem['ASSET'] = $list_masukitem->ASSET;
			$data_tmp_posting_masukitem['pt'] = $list_masukitem->pt;
			$data_tmp_posting_masukitem['afd'] = $list_masukitem->afd;
			$data_tmp_posting_masukitem['kodebar'] = $list_masukitem->kodebar;
			$data_tmp_posting_masukitem['kodebartxt'] = $list_masukitem->kodebartxt;
			$data_tmp_posting_masukitem['nabar'] = $list_masukitem->nabar;
			$data_tmp_posting_masukitem['satuan'] = $list_masukitem->satuan;
			$data_tmp_posting_masukitem['grp'] = $list_masukitem->grp;
			$data_tmp_posting_masukitem['qty'] = $list_masukitem->qty;
			$data_tmp_posting_masukitem['tgl'] = $list_masukitem->tgl;
			$data_tmp_posting_masukitem['ttg'] = $list_masukitem->ttg;
			$data_tmp_posting_masukitem['ttgtxt'] = $list_masukitem->ttgtxt;
			$data_tmp_posting_masukitem['tglinput'] = $list_masukitem->tglinput;
			$data_tmp_posting_masukitem['txttgl'] = $list_masukitem->txttgl;
			$data_tmp_posting_masukitem['thn'] = $list_masukitem->thn;
			$data_tmp_posting_masukitem['periode'] = $list_masukitem->periode;
			$data_tmp_posting_masukitem['txtperiode'] = $list_masukitem->txtperiode;
			$data_tmp_posting_masukitem['noadjust'] = $list_masukitem->noadjust;
			$data_tmp_posting_masukitem['ket'] = $list_masukitem->ket;
			$data_tmp_posting_masukitem['lokasi'] = $list_masukitem->lokasi;
			$data_tmp_posting_masukitem['refpo'] = $list_masukitem->refpo;
			$data_tmp_posting_masukitem['noref'] = $list_masukitem->noref;
			$data_tmp_posting_masukitem['BATAL'] = $list_masukitem->BATAL;
			// $data_tmp_posting_masukitem['alasan_batal'] = $list_masukitem->alasan_batal;
			$data_tmp_posting_masukitem['kurs'] = $list_masukitem->kurs;
			$data_tmp_posting_masukitem['konversi'] = $list_masukitem->konversi;
			$data_tmp_posting_masukitem['USER'] = $list_masukitem->USER;
			$data_tmp_posting_masukitem['cetak'] = $list_masukitem->cetak;
			$data_tmp_posting_masukitem['posting'] = $list_masukitem->posting;

			$this->db_logistik_pt->insert('tmp_posting_masukitem',$data_tmp_posting_masukitem);

			// $sum_masuk_item = "SELECT SUM(qty) as sum_qty ";

			// $data_stockawal_masuk['saldoakhir_qty'] 	= $saldoakhir_qty;		
			// $data_stockawal_masuk['saldoakhir_nilai'] 	= $saldoakhir_nilai;		
			// $data_stockawal_masuk['nilai_masuk'] 		= $nilai_masuk;		
			// $data_stockawal_masuk['QTY_MASUK'] 			= $QTY_MASUK;		
			// $data_stockawal_masuk['QTY_ADJMASUK']		= $QTY_ADJMASUK;		
			// $data_stockawal_masuk['HARGAPORAT']			= $HARGAPORAT;

			// $this->db_logistik_pt->set($data_stockawal_masuk);
			// $this->db_logistik_pt->where('id', $no_id);
			// $this->db_logistik_pt->where('nopotxt', $no_po);
			// $this->db_logistik_pt->update('po');
		}

		$data_keluarbrgitem = $this->db_logistik_pt->get_where('keluarbrgitem',array('txtperiode'=> $ym_periode_skrg,'batal'=>'0'))->result();
		$this->db_logistik_pt->truncate('tmp_posting_keluarbrgitem');
		foreach ($data_keluarbrgitem as $list_keluarbrgitem) {
			$data_tmp_posting_keluarbrgitem['id'] = $list_keluarbrgitem->id;
			$data_tmp_posting_keluarbrgitem['kodebar'] = $list_keluarbrgitem->kodebar;
			$data_tmp_posting_keluarbrgitem['kodebartxt'] = $list_keluarbrgitem->kodebartxt;
			$data_tmp_posting_keluarbrgitem['nabar'] = $list_keluarbrgitem->nabar;
			$data_tmp_posting_keluarbrgitem['satuan'] = $list_keluarbrgitem->satuan;
			$data_tmp_posting_keluarbrgitem['grp'] = $list_keluarbrgitem->grp;
			$data_tmp_posting_keluarbrgitem['alokasi'] = $list_keluarbrgitem->alokasi;
			$data_tmp_posting_keluarbrgitem['kodept'] = $list_keluarbrgitem->kodept;
			$data_tmp_posting_keluarbrgitem['nobpb'] = $list_keluarbrgitem->nobpb;
			$data_tmp_posting_keluarbrgitem['pt'] = $list_keluarbrgitem->pt;
			$data_tmp_posting_keluarbrgitem['afd'] = $list_keluarbrgitem->afd;
			$data_tmp_posting_keluarbrgitem['blok'] = $list_keluarbrgitem->blok;
			$data_tmp_posting_keluarbrgitem['qty'] = $list_keluarbrgitem->qty;
			$data_tmp_posting_keluarbrgitem['qty2'] = $list_keluarbrgitem->qty2;
			$data_tmp_posting_keluarbrgitem['tgl'] = $list_keluarbrgitem->tgl;
			$data_tmp_posting_keluarbrgitem['skb'] = $list_keluarbrgitem->skb;
			$data_tmp_posting_keluarbrgitem['SKBTXT'] = $list_keluarbrgitem->SKBTXT;
			$data_tmp_posting_keluarbrgitem['NO_REF'] = $list_keluarbrgitem->NO_REF;
			$data_tmp_posting_keluarbrgitem['tglinput'] = $list_keluarbrgitem->tglinput;
			$data_tmp_posting_keluarbrgitem['txttgl'] = $list_keluarbrgitem->txttgl;
			$data_tmp_posting_keluarbrgitem['thn'] = $list_keluarbrgitem->thn;
			$data_tmp_posting_keluarbrgitem['periode'] = $list_keluarbrgitem->periode;
			$data_tmp_posting_keluarbrgitem['txtperiode'] = $list_keluarbrgitem->txtperiode;
			$data_tmp_posting_keluarbrgitem['noadjust'] = $list_keluarbrgitem->noadjust;
			$data_tmp_posting_keluarbrgitem['ket'] = $list_keluarbrgitem->ket;
			$data_tmp_posting_keluarbrgitem['kodebeban'] = $list_keluarbrgitem->kodebeban;
			$data_tmp_posting_keluarbrgitem['kodebebantxt'] = $list_keluarbrgitem->kodebebantxt;
			$data_tmp_posting_keluarbrgitem['ketbeban'] = $list_keluarbrgitem->ketbeban;
			$data_tmp_posting_keluarbrgitem['kodesub'] = $list_keluarbrgitem->kodesub;
			$data_tmp_posting_keluarbrgitem['kodesubtxt'] = $list_keluarbrgitem->kodesubtxt;
			$data_tmp_posting_keluarbrgitem['ketsub'] = $list_keluarbrgitem->ketsub;
			$data_tmp_posting_keluarbrgitem['batal'] = $list_keluarbrgitem->batal;
			// $data_tmp_posting_keluarbrgitem['alasan_batal'] = $list_keluarbrgitem->alasan_batal;
			$data_tmp_posting_keluarbrgitem['USER'] = $list_keluarbrgitem->USER;
			$data_tmp_posting_keluarbrgitem['cetak'] = $list_keluarbrgitem->cetak;
			$data_tmp_posting_keluarbrgitem['posting'] = $list_keluarbrgitem->posting;

			$this->db_logistik_pt->insert('tmp_posting_keluarbrgitem',$data_tmp_posting_keluarbrgitem);


			// $data_stockawal_keluar['QTY_KELUAR'] 		= $QTY_KELUAR;		
			// $data_stockawal_keluar['QTY_ADJKELUAR']		= $QTY_ADJKELUAR;		
			// $data_stockawal_keluar['HARGAPORAT']		= $HARGAPORAT;

			// $this->db_logistik_pt->set($data_stockawal_keluar);
			// $this->db_logistik_pt->where('id', $no_id);
			// $this->db_logistik_pt->where('nopotxt', $no_po);
			// $this->db_logistik_pt->update('po');
		}


		$query_tmp_masukitem = "SELECT DISTINCT kodebartxt, nabar FROM tmp_posting_masukitem WHERE txtperiode = '$ym_periode_skrg' ORDER BY kodebartxt ASC";
		$data_tmp_masukitem = $this->db_logistik_pt->query($query_tmp_masukitem)->result(); 

		$data_masukitem = [];
		foreach ($data_tmp_masukitem as $list_tmp_masukitem) {
			$kodebartxt = $list_tmp_masukitem->kodebartxt;
			$nabar = $list_tmp_masukitem->nabar;
			$query_sum_masukitem = "SELECT SUM(qty) AS total_qty_masuk_brg FROM tmp_posting_masukitem WHERE kodebartxt = '$kodebartxt' AND txtperiode = '$ym_periode_skrg'";
			$get_sum_masukitem = $this->db_logistik_pt->query($query_sum_masukitem)->row();
			$QTY_MASUK = $get_sum_masukitem->total_qty_masuk_brg;

			$get_brg_masuk = $this->db_logistik_pt->get_where('stockawal', array('kodebartxt' => $kodebartxt, 'txtperiode' => $ym_periode_skrg))->num_rows();

			if ($get_brg_masuk > 0) {
				$data_stockawal_masuk_default['QTY_MASUK'] 	= "0"; // set 0

				$this->db_logistik_pt->set($data_stockawal_masuk_default);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
				$this->db_logistik_pt->update('stockawal');

				$query_get_max_periode_sblmnya = "SELECT MAX(txtperiode) AS max_periode_sblmya FROM stockawal WHERE kodebartxt = '$kodebartxt' AND txtperiode <> (SELECT MAX(txtperiode) FROM stockawal WHERE kodebartxt = '$kodebartxt')";
				$get_max_periode_sblmnya = $this->db_logistik_pt->query($query_get_max_periode_sblmnya)->row();
				$ym_periode_sblmnya = $get_max_periode_sblmnya->max_periode_sblmya;
				
				$get_periode_sblmnya = $this->db_logistik_pt->get_where('stockawal',array('txtperiode'=>$ym_periode_sblmnya, 'kodebartxt'=>$kodebartxt))->row();

				$saldoawal_qty = $get_periode_sblmnya->saldoakhir_qty;
				$saldoawal_nilai = $get_periode_sblmnya->saldoakhir_nilai;

				$data_stockawal_masuk['saldoawal_qty'] 		= $saldoawal_qty;
				$data_stockawal_masuk['saldoawal_nilai'] 	= $saldoawal_nilai;
				$data_stockawal_masuk['QTY_MASUK'] 			= $QTY_MASUK;

				$this->db_logistik_pt->set($data_stockawal_masuk);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
				$this->db_logistik_pt->update('stockawal');
			}
			else {
				$list_itemmasuk = [];
				$list_itemmasuk[] = $kodebartxt;
				$list_itemmasuk[] = $nabar;
				$list_itemmasuk[] = $QTY_MASUK;
				$data_masukitem[] = $list_itemmasuk;
			}
		}

		if(count($data_masukitem) > 0){
			var_dump("Barang Masuk yang tidak ada di stockawal");
			var_dump($data_masukitem);
		}
		else{
			echo "Sukses posting QTY_KELUAR";
		}

		$query_tmp_keluarbrgitem = "SELECT DISTINCT kodebartxt, nabar FROM tmp_posting_keluarbrgitem WHERE txtperiode = '$ym_periode_skrg' ORDER BY kodebartxt ASC";
		$data_tmp_keluarbrgitem = $this->db_logistik_pt->query($query_tmp_keluarbrgitem)->result(); 

		$data_keluaritem = [];
			foreach ($data_tmp_keluarbrgitem as $list_tmp_keluarbrgitem) {
				$kodebartxt = $list_tmp_keluarbrgitem->kodebartxt;
				$nabar = $list_tmp_keluarbrgitem->nabar;
				$query_sum_keluarbrgitem = "SELECT SUM(qty2) AS total_qty_keluar_brg FROM tmp_posting_keluarbrgitem WHERE kodebartxt = '$kodebartxt' AND txtperiode = '$ym_periode_skrg'";
				$get_sum_keluarbrgitem = $this->db_logistik_pt->query($query_sum_keluarbrgitem)->row();
				$QTY_KELUAR = $get_sum_keluarbrgitem->total_qty_keluar_brg;

				$query_stockawal = "SELECT saldoawal_qty, saldoawal_nilai, QTY_MASUK from stockawal WHERE kodebartxt = '$kodebartxt' AND txtperiode = '$ym_periode_skrg'";
				$get_stockawal = $this->db_logistik_pt->query($query_stockawal)->row();
				$saldoawal_qty = $get_stockawal->saldoawal_qty;
				$saldoawal_nilai = $get_stockawal->saldoawal_nilai;
				$QTY_MASUK = $get_stockawal->QTY_MASUK;

				$get_brg_keluar = $this->db_logistik_pt->get_where('stockawal', array('kodebartxt' => $kodebartxt, 'txtperiode' => $ym_periode_skrg))->num_rows();

				if ($get_brg_keluar > 0) {
					$data_stockawal_keluar_default['QTY_KELUAR'] = "0"; // set 0

					$this->db_logistik_pt->set($data_stockawal_keluar_default);
					$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
					$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
					$this->db_logistik_pt->update('stockawal');

					$saldoakhir_qty = $QTY_MASUK-$QTY_KELUAR;
					$saldoakhir_nilai = ($saldoawal_nilai/$saldoawal_qty)*$saldoakhir_qty;

					$data_stockawal_masuk['saldoakhir_qty'] 	= $saldoakhir_qty;
					$data_stockawal_masuk['saldoakhir_nilai'] 	= $saldoakhir_nilai;
					$data_stockawal_keluar['QTY_KELUAR'] 		= $QTY_KELUAR;

					$this->db_logistik_pt->set($data_stockawal_keluar);
					$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
					$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
					$this->db_logistik_pt->update('stockawal');
				}
				else {
					$list_itemkeluar = [];
					$list_itemkeluar[] = $kodebartxt;
					$list_itemkeluar[] = $nabar;
					$list_itemkeluar[] = $QTY_KELUAR;
					$data_keluaritem[] = $list_itemkeluar;
				}
			}

			if(count($data_keluaritem) > 0){
				var_dump("Barang Keluar yang tidak ada di stockawal");
				var_dump($data_keluaritem);
			}
			else{
				echo "Sukses posting QTY_KELUAR";
			}
			exit();

		// $ym_periode_sblmnya = $this->session->userdata('periode');
		
		// var_dump($month_periode);	
		// exit();
	}

	public function hitul_stok(){
		$kdpt = $this->session->userdata('kode_pt');
		// $ym_periode_skrg = $this->session->userdata('ym_periode');
		// $Ymd_periode_skrg = $this->session->userdata('Ymd_periode');
		$ym_periode_skrg = "201901";
		$Ymd_periode_skrg = "2019-01-12";

		/*** cek tersedia kode stok awal ***/
		$query_itemttg = "SELECT DISTINCT(kodebar) as kodebar, kodebartxt, nabar, satuan, grp, KDPT, PT FROM masukitem WHERE kdpt = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL= '0' ORDER BY kodebar";
		$get_itemttg = $this->db_logistik_pt->query($query_itemttg)->result();
		$tes1 = array();

		foreach ($get_itemttg as $list_item_ttg) {
			$tes2 = array();

			$KODE = $kdpt;
			$pt = $list_item_ttg->PT;
			$kodebartxt = $list_item_ttg->kodebartxt;
			$nabar = $list_item_ttg->nabar;
			$satuan = $list_item_ttg->satuan;
			$grp = $list_item_ttg->grp;
		
			/*** check stockawal ***/
			$query_kodebar_stockawal = "SELECT * FROM stockawal WHERE KODE = '$kdpt' AND kodebartxt = '$kodebartxt' AND txtperiode = '$ym_periode_skrg' ORDER BY kodebar";
			$get_kodebar_stockawal = $this->db_logistik_pt->query($query_kodebar_stockawal);
			
			if($get_kodebar_stockawal->num_rows() == 0){
				$query_id_stockawal = "SELECT MAX(id)+1 as id_stockawal FROM stockawal";
				$generate_id_stockawal = $this->db_logistik_pt->query($query_id_stockawal)->row();
				$id_stockawal = $generate_id_stockawal->id_stockawal;
		        if(empty($id_stockawal)){
		            $id_stockawal = 1;
		        }

				$data_stockawal['id'] = $id_stockawal;
				$data_stockawal['pt'] = $pt;
				$data_stockawal['KODE'] = $KODE;
				$data_stockawal['afd'] = "-";
				$data_stockawal['kodebar'] = $kodebartxt;
				$data_stockawal['kodebartxt'] = $kodebartxt;
				$data_stockawal['nabar'] = $nabar;
				$data_stockawal['satuan'] = $satuan;
				$data_stockawal['grp'] = $grp;
				$data_stockawal['saldoawal_qty'] = "0";
				$data_stockawal['saldoawal_nilai'] = "0";
				$data_stockawal['tglinput'] = date('Y-m-d H:i:s');
				$data_stockawal['thn'] = date('Y');
				$data_stockawal['saldoakhir_qty'] = "0";
				$data_stockawal['saldoakhir_nilai'] = "0";
				// $data_stockawal['nilai_masuk'] = ;
				// $data_stockawal['QTY_MASUK'] = ;
				// $data_stockawal['QTY_KELUAR'] = ;
				// $data_stockawal['QTY_ADJMASUK'] = ;
				// $data_stockawal['QTY_ADJKELUAR'] = ;
				// $data_stockawal['HARGAPORAT'] = ;
				$data_stockawal['periode'] = $Ymd_periode_skrg." 00:00:00";
				$data_stockawal['txtperiode'] = $ym_periode_skrg;
				$data_stockawal['ket'] = "-";
				$data_stockawal['account'] = "-";
				$data_stockawal['ket_account'] = "-";
				$data_stockawal['minstok'] = "0";

				$this->db_logistik_pt->insert('stockawal',$data_stockawal);
				
			}
		}
		
		$data_stockawal_update['QTY_MASUK'] = "0";
		$data_stockawal_update['QTY_KELUAR'] = "0";
		$data_stockawal_update['QTY_ADJMASUK'] = "0";
		$data_stockawal_update['QTY_ADJKELUAR'] = "0";
		$data_stockawal_update['HARGAPORAT'] = "0";
		$data_stockawal_update['saldoakhir_qty'] = "0";
		$data_stockawal_update['saldoakhir_nilai'] = "0";
		$data_stockawal_update['nilai_masuk'] = "0";

		$this->db_logistik_pt->set($data_stockawal_update);
        $this->db_logistik_pt->where('KODE', $kdpt);
        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
        $this->db_logistik_pt->update('stockawal');

        $get_stockawal_2 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg));
        // var_dump($this->db_logistik_pt->last_query());
        // exit();

        if($get_stockawal_2->num_rows() > 0){
        	foreach($get_stockawal_2->result() as $list_stockawal_2){
        		/*** Update LPB dan Harga AVG PO ***/
        		$KODEBAR = $list_stockawal_2->kodebar;
        		$nilaimasukawal = $list_stockawal_2->nilai_masuk;
        		$HARGASTOK = "0";
        		$STOK = "0";
        		$HARGARATA = "0";
        		$TOTALQTY = "0";
        		$totalharga = "0";
        		$hargastokfinal = "0";

        		$get_masukitem = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('masukitem', array('kdpt' => $kdpt, 'BATAL' => '0' , 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
        		// var_dump($this->db_logistik_pt->last_query());
        		// exit();
        		// if(count($get_masukitem) > 0){
        		if($get_masukitem->num_rows() > 0){
        			$qtylpb = "0";
        			$HARGASTOK = "0";
        			$z = "0";
        			$t = "0";
        			$KURS = "";
        			$nilai = "0";
        			$harganet = "0";
        			$BIAYAPBBKB = "0";

        			foreach ($get_masukitem->result() as $list_masukitem) {
        				$noref = $list_masukitem->refpo;
		                $qtylpb = $list_masukitem->qty + $qtylpb;
		                $KURS = $list_masukitem->kurs;
		                $nilai = $list_masukitem->konversi;

		                $get_item_po = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('item_po', array('kodept' => $kdpt, 'BATAL' => '0', 'kodebar' => $KODEBAR, 'noref' => $noref ));
		                if($get_item_po->num_rows() > 0){
		                	$totalpo = $get_item_po->num_rows();
		                	$data_item_po = $get_item_po->row();
                            $BIAYAPBBKB = $data_item_po->JUMLAHBPO;

                            if($totalpo > 1){
                            	$query_sum_all = "SELECT SUM(jumharga) AS ttlharga, SUM(qty) AS ttlqty, SUM(JUMLAHBPO) AS ttlPBBKB FROM item_po WHERE kodept= '$kdpt' AND BATAL = '0' AND kodebar = '$KODEBAR' and noref='$noref'";
                            	$get_sum_all = $this->db_logistik_pt->query($query_sum_all)->row();
                            	if(!empty($get_sum_all->ttlharga)){
                            		$jumlahpo = $get_sum_all->ttlharga;
                                    $qtypo = $get_sum_all->ttlqty;
                                    $jumlahpo = ($get_sum_all->ttlharga) / $qtypo;
                                    $qtypo = "1";
                                    $harganet = $jumlahpo;
                                    $ttlPBBKB = $get_sum_all->ttlPBBKB;

                                   if ($KURS != "Rp"){
                                        $HARGASTOK = $HARGASTOK + ($harganet * $nilai) + $ttlPBBKB;
                                    }
                                    else {
                                        $HARGASTOK = $HARGASTOK + ($harganet * $list_masukitem->qty) + $ttlPBBKB;
                                    }
                            	}
                            }
                            else{
                            	$harganet = ($data_item_po->jumharga) / $data_item_po->qty;
                            	if ($KURS != "Rp") {
                                	$HARGASTOK = $HARGASTOK + ($harganet * $nilai) + $BIAYAPBBKB;
                            	}
                            	else {
                                	$HARGASTOK = $HARGASTOK + ($harganet * $list_masukitem->qty) + $BIAYAPBBKB;
                            	}
                            }
		                }
        			}

        			if ($KODEBAR == "102505910000133"){

        			}
        			$HARGASTOK = $HARGASTOK;
		            $STOK = $qtylpb;
		            // $STOK = $qtylpb + $BAJUS;
		            // $qtyretur = $qtyretur + $BAJUS;
		            // if ($BAJUS <> 0){
		                // $ketretur = $ketretur & "," & "BA Adjusment Stok";
		            // }
		            // var_dump($KODEBAR);
		            // var_dump($STOK);
        			// var_dump($HARGASTOK);
        			

		            $data_stockawal_update_2['qty_masuk'] = $STOK;
		            $data_stockawal_update_2['nilai_masuk'] = $HARGASTOK;
		            $data_stockawal_update_2['KODE'] = $kdpt;
		            $data_stockawal_update_2['kodebartxt'] = $KODEBAR;
		            $data_stockawal_update_2['txtperiode'] = $ym_periode_skrg;

		            $this->db_logistik_pt->set($data_stockawal_update_2);
			        $this->db_logistik_pt->where('KODE', $kdpt);
			        $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        $this->db_logistik_pt->update('stockawal');

			        // $tes2[] = $this->db_logistik_pt->last_query();
			        // $tes1[] = $tes2;

			        $get_stockawal_3 = $this->db_logistik_pt->get_where('stockawal', array('KODE' => $kdpt, 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
				
			        if($get_stockawal_3->num_rows() > 0 ){
			        	$data_stockawal_3 = $get_stockawal_3->row();
			        	$totalharga = $data_stockawal_3->saldoawal_nilai;
			        	$TOTALQTY = $data_stockawal_3->saldoawal_qty;
			        	
			        	if($totalharga != 0 && $TOTALQTY != 0){
			        		$HARGARATA = ($totalharga + $HARGASTOK) / ($STOK + $TOTALQTY);
			        	}
			        	else{
			        		$HARGARATA = $HARGASTOK / $STOK;
			        	}
			        }

			        if($HARGARATA != 0){
			        	// HARGARATA = CCur(HARGARATA)
			        	// $HARGARATA = $HARGARATA;
			        }

			        $data_stockawal_update_3['HARGAPORAT'] = $HARGARATA;

			        $this->db_logistik_pt->set($data_stockawal_update_3);
			        $this->db_logistik_pt->where('KODE', $kdpt);
			        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        $this->db_logistik_pt->update('stockawal');
        		}
        		else{
        			/*** TIDAK ADA LPB KEMBALI KE SALDO AWAL ***/
        			$get_stockawal_4 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
        			if($get_stockawal_4->num_rows() > 0){
        				$data_stockawal_4 = $get_stockawal_4->row();
        				$totalharga = $data_stockawal_4->saldoawal_nilai;
		                $TOTALQTY = $data_stockawal_4->saldoawal_qty;
		               	if($totalharga != 0 && $TOTALQTY != 0){
		               		$HARGARATA = $totalharga / $TOTALQTY;
		               	}
		               	else{
		               		$HARGARATA = 0;
		               	}
        			}
        			$HARGASTOK = 0;

        			$data_stockawal_update_4['nilai_masuk'] = $HARGASTOK;
        			$data_stockawal_update_4['HARGAPORAT'] = $HARGARATA;

			        $this->db_logistik_pt->set($data_stockawal_update_4);
			        $this->db_logistik_pt->where('KODE', $kdpt);
			        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        $this->db_logistik_pt->update('stockawal');
        		}
        	}
        	// var_dump($tes1);
        	// exit();
        }
        // exit();

        $HARGASTOK = 0;
        $STOK = 0;
        $HARGARATA = 0;
        $TOTALQTY = 0;
        $totalharga = 0;
        $hargastokfinal = 0;

        $query_keluar = "SELECT DISTINCT(kodebar) AS kodebar, kodebartxt, nabar, satuan, grp, kodept, pt, SUM(qty) as qty, SUM(qty2) as qty2 FROM keluarbrgitem WHERE kodept = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL= '0' GROUP BY kodebartxt ORDER BY kodebar";
        $get_keluar = $this->db_logistik_pt->query($query_keluar);

        if($get_keluar->num_rows() > 0){
        	foreach ($get_keluar as $result) {
        		/*** Update BKB ***/
				$KODEBAR = $itemttg->kodebartxt;
				$STOK = $itemttg->qty2;

				$data_stockawal_update_5['QTY_KELUAR'] = $STOK;
				
				$this->db_logistik_pt->set($data_stockawal_update_5);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $KODEBAR);
				$this->db_logistik_pt->update('stockawal');

				$get_stockawal_5 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg, 'kodebartxt' => $KODEBAR))->row();

				$saldoawal_qty = $get_stockawal_5->saldoawal_qty;
				$QTY_MASUK = $get_stockawal_5->QTY_MASUK;
				$QTY_KELUAR = $get_stockawal_5->QTY_KELUAR;
				$saldoawal_nilai = $get_stockawal_5->saldoawal_nilai;
				$nilai_masuk = $get_stockawal_5->nilai_masuk;
				$HARGAPORAT = $get_stockawal_5->HARGAPORAT;
				$kodebartxt = $get_stockawal_5->kodebartxt;

				$data_stockawal_update_6['saldoakhir_qty'] = ($saldoawal_qty + $QTY_MASUK) - $QTY_KELUAR;
				$data_stockawal_update_6['saldoakhir_nilai'] = ($saldoawal_nilai+ $nilai_masuk ) - ($QTY_KELUAR * $HARGAPORAT);

				$this->db_logistik_pt->set($data_stockawal_update_6);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
				$this->db_logistik_pt->update('stockawal');

        	}
        }

  //       $query_keluar = "SELECT * FROM keluar_query WHERE KODE = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL = '0' ORDER BY kodebartxt";
  //       $get_keluar = $this->db_logistik_pt->query($query_keluar);

		// if($get_keluar->num_rows() > 0){
		// 	foreach ($get_keluar->result() as $itemttg) {
		// 		/*** Update BKB ***/
		// 		$KODEBAR = $itemttg->kodebartxt;
		// 		$STOK = $itemttg->SumOfqty;

		// 		$data_stockawal_update_5['qty_keluar'] = $STOK;
				
		// 		$this->db_logistik_pt->set($data_stockawal_update_5);
		// 		$this->db_logistik_pt->where('KODE', $kdpt);
		// 		$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
		// 		$this->db_logistik_pt->where('kodebartxt', $KODEBAR);
		// 		$this->db_logistik_pt->update('stockawal');
		// 	}
		// }

		// $get_stockawal_5 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg))->result();

		// foreach ($get_stockawal_5 as $data_stockawal_5) {
		// 	/*** Update SALDO Data Stock ***/
		// 	$saldoawal_qty = $data_stockawal_5->saldoawal_qty;
		// 	$QTY_MASUK = $data_stockawal_5->QTY_MASUK;
		// 	$QTY_KELUAR = $data_stockawal_5->QTY_KELUAR;
		// 	$saldoawal_nilai = $data_stockawal_5->saldoawal_nilai;
		// 	$nilai_masuk = $data_stockawal_5->nilai_masuk;
		// 	$HARGAPORAT = $data_stockawal_5->HARGAPORAT;
		// 	$kodebartxt = $data_stockawal_5->kodebartxt;

		// 	$data_stockawal_update_6['saldoakhir_qty'] = ($saldoawal_qty + $QTY_MASUK) - $QTY_KELUAR;
		// 	$data_stockawal_update_6['saldoakhir_nilai'] = ($saldoawal_nilai+ $nilai_masuk ) - ($QTY_KELUAR * $HARGAPORAT);

		// 	$this->db_logistik_pt->set($data_stockawal_update_6);
		// 	$this->db_logistik_pt->where('KODE', $kdpt);
		// 	$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
		// 	$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
		// 	$this->db_logistik_pt->update('stockawal');
		// }
		
		$data = TRUE;
		echo json_encode($data);
	}

	function posting_lpb_bkb(){
		$kdpt = $this->session->userdata('kode_pt');
		// $ym_periode_skrg = $this->session->userdata('ym_periode');
		// $Ymd_periode_skrg = $this->session->userdata('Ymd_periode');
		$ym_periode_skrg = "201901";
		$Ymd_periode_skrg = "2019-01-12";

		/*** cek tersedia kode stok awal ***/
		$query_itemttg = "SELECT DISTINCT(kodebar) as kodebar, kodebartxt, nabar, satuan, grp, KDPT, PT FROM masukitem WHERE kdpt = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL= '0' ORDER BY kodebar";
		$get_itemttg = $this->db_logistik_pt->query($query_itemttg)->result();
		$tes1 = array();

		foreach ($get_itemttg as $list_item_ttg) {
			$tes2 = array();

			$KODE = $kdpt;
			$pt = $list_item_ttg->PT;
			$kodebartxt = $list_item_ttg->kodebartxt;
			$nabar = $list_item_ttg->nabar;
			$satuan = $list_item_ttg->satuan;
			$grp = $list_item_ttg->grp;
		
			/*** check stockawal ***/
			$query_kodebar_stockawal = "SELECT * FROM stockawal WHERE KODE = '$kdpt' AND kodebartxt = '$kodebartxt' AND txtperiode = '$ym_periode_skrg' ORDER BY kodebar";
			$get_kodebar_stockawal = $this->db_logistik_pt->query($query_kodebar_stockawal);
			
			if($get_kodebar_stockawal->num_rows() == 0){
				$query_id_stockawal = "SELECT MAX(id)+1 as id_stockawal FROM stockawal";
				$generate_id_stockawal = $this->db_logistik_pt->query($query_id_stockawal)->row();
				$id_stockawal = $generate_id_stockawal->id_stockawal;
		        if(empty($id_stockawal)){
		            $id_stockawal = 1;
		        }

				$data_stockawal['id'] = $id_stockawal;
				$data_stockawal['pt'] = $pt;
				$data_stockawal['KODE'] = $KODE;
				$data_stockawal['afd'] = "-";
				$data_stockawal['kodebar'] = $kodebartxt;
				$data_stockawal['kodebartxt'] = $kodebartxt;
				$data_stockawal['nabar'] = $nabar;
				$data_stockawal['satuan'] = $satuan;
				$data_stockawal['grp'] = $grp;
				$data_stockawal['saldoawal_qty'] = "0";
				$data_stockawal['saldoawal_nilai'] = "0";
				$data_stockawal['tglinput'] = date('Y-m-d H:i:s');
				$data_stockawal['thn'] = date('Y');
				$data_stockawal['saldoakhir_qty'] = "0";
				$data_stockawal['saldoakhir_nilai'] = "0";
				// $data_stockawal['nilai_masuk'] = ;
				// $data_stockawal['QTY_MASUK'] = ;
				// $data_stockawal['QTY_KELUAR'] = ;
				// $data_stockawal['QTY_ADJMASUK'] = ;
				// $data_stockawal['QTY_ADJKELUAR'] = ;
				// $data_stockawal['HARGAPORAT'] = ;
				$data_stockawal['periode'] = $Ymd_periode_skrg." 00:00:00";
				$data_stockawal['txtperiode'] = $ym_periode_skrg;
				$data_stockawal['ket'] = "-";
				$data_stockawal['account'] = "-";
				$data_stockawal['ket_account'] = "-";
				$data_stockawal['minstok'] = "0";

				$this->db_logistik_pt->insert('stockawal',$data_stockawal);
				
			}
		}
		
		$data_stockawal_update['QTY_MASUK'] = "0";
		$data_stockawal_update['QTY_KELUAR'] = "0";
		$data_stockawal_update['QTY_ADJMASUK'] = "0";
		$data_stockawal_update['QTY_ADJKELUAR'] = "0";
		$data_stockawal_update['HARGAPORAT'] = "0";
		$data_stockawal_update['saldoakhir_qty'] = "0";
		$data_stockawal_update['saldoakhir_nilai'] = "0";
		$data_stockawal_update['nilai_masuk'] = "0";

		$this->db_logistik_pt->set($data_stockawal_update);
        $this->db_logistik_pt->where('KODE', $kdpt);
        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
        $this->db_logistik_pt->update('stockawal');

        $get_stockawal_2 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg));
        // var_dump($this->db_logistik_pt->last_query());
        // exit();

        if($get_stockawal_2->num_rows() > 0){
        	foreach($get_stockawal_2->result() as $list_stockawal_2){
        		/*** Update LPB dan Harga AVG PO ***/
        		$KODEBAR = $list_stockawal_2->kodebar;
        		$nilaimasukawal = $list_stockawal_2->nilai_masuk;
        		$HARGASTOK = "0";
        		$STOK = "0";
        		$HARGARATA = "0";
        		$TOTALQTY = "0";
        		$totalharga = "0";
        		$hargastokfinal = "0";

        		$get_masukitem = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('masukitem', array('kdpt' => $kdpt, 'BATAL' => '0' , 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
        		// var_dump($this->db_logistik_pt->last_query());
        		// exit();
        		// if(count($get_masukitem) > 0){
        		if($get_masukitem->num_rows() > 0){
        			$qtylpb = "0";
        			$HARGASTOK = "0";
        			$z = "0";
        			$t = "0";
        			$KURS = "";
        			$nilai = "0";
        			$harganet = "0";
        			$BIAYAPBBKB = "0";

        			// foreach ($get_masukitem->result() as $list_masukitem) {
        			// 	$noref = $list_masukitem->refpo;
		         //        $qtylpb = $list_masukitem->qty + $qtylpb;
		         //        $KURS = $list_masukitem->kurs;
		         //        $nilai = $list_masukitem->konversi;

		         //        $get_item_po = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('item_po', array('kodept' => $kdpt, 'BATAL' => '0', 'kodebar' => $KODEBAR, 'noref' => $noref ));
		         //        if($get_item_po->num_rows() > 0){
		         //        	$totalpo = $get_item_po->num_rows();
		         //        	$data_item_po = $get_item_po->row();
           //                  $BIAYAPBBKB = $data_item_po->JUMLAHBPO;

           //                  if($totalpo > 1){
           //                  	$query_sum_all = "SELECT SUM(jumharga) AS ttlharga, SUM(qty) AS ttlqty, SUM(JUMLAHBPO) AS ttlPBBKB FROM item_po WHERE kodept= '$kdpt' AND BATAL = '0' AND kodebar = '$KODEBAR' and noref='$noref'";
           //                  	$get_sum_all = $this->db_logistik_pt->query($query_sum_all)->row();
           //                  	if(!empty($get_sum_all->ttlharga)){
           //                  		$jumlahpo = $get_sum_all->ttlharga;
           //                          $qtypo = $get_sum_all->ttlqty;
           //                          $jumlahpo = ($get_sum_all->ttlharga) / $qtypo;
           //                          $qtypo = "1";
           //                          $harganet = $jumlahpo;
           //                          $ttlPBBKB = $get_sum_all->ttlPBBKB;

           //                         if ($KURS != "Rp"){
           //                              $HARGASTOK = $HARGASTOK + ($harganet * $nilai) + $ttlPBBKB;
           //                          }
           //                          else {
           //                              $HARGASTOK = $HARGASTOK + ($harganet * $list_masukitem->qty) + $ttlPBBKB;
           //                          }
           //                  	}
           //                  }
           //                  else{
           //                  	$harganet = ($data_item_po->jumharga) / $data_item_po->qty;
           //                  	if ($KURS != "Rp") {
           //                      	$HARGASTOK = $HARGASTOK + ($harganet * $nilai) + $BIAYAPBBKB;
           //                  	}
           //                  	else {
           //                      	$HARGASTOK = $HARGASTOK + ($harganet * $list_masukitem->qty) + $BIAYAPBBKB;
           //                  	}
           //                  }
		         //        }
        			// }

        			if ($KODEBAR == "102505910000133"){

        			}
        			$HARGASTOK = $HARGASTOK;
		            $STOK = $qtylpb;
		            // $STOK = $qtylpb + $BAJUS;
		            // $qtyretur = $qtyretur + $BAJUS;
		            // if ($BAJUS <> 0){
		                // $ketretur = $ketretur & "," & "BA Adjusment Stok";
		            // }
		            // var_dump($KODEBAR);
		            // var_dump($STOK);
        			// var_dump($HARGASTOK);
        			

		            $data_stockawal_update_2['qty_masuk'] = $STOK;
		            $data_stockawal_update_2['nilai_masuk'] = $HARGASTOK;
		            $data_stockawal_update_2['KODE'] = $kdpt;
		            $data_stockawal_update_2['kodebartxt'] = $KODEBAR;
		            $data_stockawal_update_2['txtperiode'] = $ym_periode_skrg;

		            $this->db_logistik_pt->set($data_stockawal_update_2);
			        $this->db_logistik_pt->where('KODE', $kdpt);
			        $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        $this->db_logistik_pt->update('stockawal');

			        // $tes2[] = $this->db_logistik_pt->last_query();
			        // $tes1[] = $tes2;

			        // $get_stockawal_3 = $this->db_logistik_pt->get_where('stockawal', array('KODE' => $kdpt, 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
				
			        // if($get_stockawal_3->num_rows() > 0 ){
			        // 	$data_stockawal_3 = $get_stockawal_3->row();
			        // 	$totalharga = $data_stockawal_3->saldoawal_nilai;
			        // 	$TOTALQTY = $data_stockawal_3->saldoawal_qty;
			        	
			        // 	if($totalharga != 0 && $TOTALQTY != 0){
			        // 		$HARGARATA = ($totalharga + $HARGASTOK) / ($STOK + $TOTALQTY);
			        // 	}
			        // 	else{
			        // 		$HARGARATA = $HARGASTOK / $STOK;
			        // 	}
			        // }

			        // if($HARGARATA != 0){
			        // 	// HARGARATA = CCur(HARGARATA)
			        // 	// $HARGARATA = $HARGARATA;
			        // }

			        // $data_stockawal_update_3['HARGAPORAT'] = $HARGARATA;

			        // $this->db_logistik_pt->set($data_stockawal_update_3);
			        // $this->db_logistik_pt->where('KODE', $kdpt);
			        // $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        // $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        // $this->db_logistik_pt->update('stockawal');
        		}
        		else{
        			// /*** TIDAK ADA LPB KEMBALI KE SALDO AWAL ***/
        			// $get_stockawal_4 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'kodebar' => $KODEBAR, 'txtperiode' => $ym_periode_skrg));
        			// if($get_stockawal_4->num_rows() > 0){
        			// 	$data_stockawal_4 = $get_stockawal_4->row();
        			// 	$totalharga = $data_stockawal_4->saldoawal_nilai;
		         //        $TOTALQTY = $data_stockawal_4->saldoawal_qty;
		         //       	if($totalharga != 0 && $TOTALQTY != 0){
		         //       		$HARGARATA = $totalharga / $TOTALQTY;
		         //       	}
		         //       	else{
		         //       		$HARGARATA = 0;
		         //       	}
        			// }
        			$HARGASTOK = 0;

        			$data_stockawal_update_4['nilai_masuk'] = $HARGASTOK;
        			// $data_stockawal_update_4['HARGAPORAT'] = $HARGARATA;

			        $this->db_logistik_pt->set($data_stockawal_update_4);
			        $this->db_logistik_pt->where('KODE', $kdpt);
			        $this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
			        $this->db_logistik_pt->where('kodebartxt', $KODEBAR);
			        $this->db_logistik_pt->update('stockawal');
        		}
        	}
        	// var_dump($tes1);
        	// exit();
        }



		

		$HARGASTOK = 0;
        $STOK = 0;
        $HARGARATA = 0;
        $TOTALQTY = 0;
        $totalharga = 0;
        $hargastokfinal = 0;

        $query_keluar = "SELECT DISTINCT(kodebar) AS kodebar, kodebartxt, nabar, satuan, grp, kodept, pt, SUM(qty) as qty, SUM(qty2) as qty2 FROM keluarbrgitem WHERE kodept = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL= '0' GROUP BY kodebartxt ORDER BY kodebar";
        $get_keluar = $this->db_logistik_pt->query($query_keluar);

        if($get_keluar->num_rows() > 0){
        	// var_dump($get_keluar->result());exit();
        	foreach ($get_keluar->result() as $itemkeluar) {
        		/*** Update BKB ***/
				$KODEBAR = $itemkeluar->kodebartxt;
				$STOK = $itemkeluar->qty2;

				$data_stockawal_update_5['QTY_KELUAR'] = $STOK;
				
				$this->db_logistik_pt->set($data_stockawal_update_5);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $KODEBAR);
				$this->db_logistik_pt->update('stockawal');

				$get_stockawal_5 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg, 'kodebartxt' => $KODEBAR))->row();

				$saldoawal_qty = $get_stockawal_5->saldoawal_qty;
				$QTY_MASUK = $get_stockawal_5->QTY_MASUK;
				$QTY_KELUAR = $get_stockawal_5->QTY_KELUAR;
				$saldoawal_nilai = $get_stockawal_5->saldoawal_nilai;
				$nilai_masuk = $get_stockawal_5->nilai_masuk;
				$HARGAPORAT = $get_stockawal_5->HARGAPORAT;
				$kodebartxt = $get_stockawal_5->kodebartxt;

				$data_stockawal_update_6['saldoakhir_qty'] = ($saldoawal_qty + $QTY_MASUK) - $QTY_KELUAR;
				$data_stockawal_update_6['saldoakhir_nilai'] = ($saldoawal_nilai+ $nilai_masuk ) - ($QTY_KELUAR * $HARGAPORAT);

				$this->db_logistik_pt->set($data_stockawal_update_6);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
				$this->db_logistik_pt->update('stockawal');

        	}
        }
	}

	function posting_keluar_stok(){
		$kdpt = $this->session->userdata('kode_pt');
		// $ym_periode_skrg = $this->session->userdata('ym_periode');
		// $Ymd_periode_skrg = $this->session->userdata('Ymd_periode');
		$ym_periode_skrg = "201901";
		$Ymd_periode_skrg = "2019-01-12";

		$HARGASTOK = 0;
        $STOK = 0;
        $HARGARATA = 0;
        $TOTALQTY = 0;
        $totalharga = 0;
        $hargastokfinal = 0;

        $query_keluar = "SELECT DISTINCT(kodebar) AS kodebar, kodebartxt, nabar, satuan, grp, kodept, pt, SUM(qty) as qty, SUM(qty2) as qty2 FROM keluarbrgitem WHERE kodept = '$kdpt' AND txtperiode = '$ym_periode_skrg' AND BATAL= '0' GROUP BY kodebartxt ORDER BY kodebar";
        $get_keluar = $this->db_logistik_pt->query($query_keluar);

        if($get_keluar->num_rows() > 0){
        	// var_dump($get_keluar->result());exit();
        	foreach ($get_keluar->result() as $itemkeluar) {
        		/*** Update BKB ***/
				$KODEBAR = $itemkeluar->kodebartxt;
				$STOK = $itemkeluar->qty2;

				$data_stockawal_update_5['QTY_KELUAR'] = $STOK;
				
				$this->db_logistik_pt->set($data_stockawal_update_5);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $KODEBAR);
				$this->db_logistik_pt->update('stockawal');

				$get_stockawal_5 = $this->db_logistik_pt->order_by('kodebar', 'ASC')->get_where('stockawal',array('KODE' => $kdpt, 'txtperiode' => $ym_periode_skrg, 'kodebartxt' => $KODEBAR))->row();

				$saldoawal_qty = $get_stockawal_5->saldoawal_qty;
				$QTY_MASUK = $get_stockawal_5->QTY_MASUK;
				$QTY_KELUAR = $get_stockawal_5->QTY_KELUAR;
				$saldoawal_nilai = $get_stockawal_5->saldoawal_nilai;
				$nilai_masuk = $get_stockawal_5->nilai_masuk;
				$HARGAPORAT = $get_stockawal_5->HARGAPORAT;
				$kodebartxt = $get_stockawal_5->kodebartxt;

				$data_stockawal_update_6['saldoakhir_qty'] = ($saldoawal_qty + $QTY_MASUK) - $QTY_KELUAR;
				$data_stockawal_update_6['saldoakhir_nilai'] = ($saldoawal_nilai+ $nilai_masuk ) - ($QTY_KELUAR * $HARGAPORAT);

				$this->db_logistik_pt->set($data_stockawal_update_6);
				$this->db_logistik_pt->where('KODE', $kdpt);
				$this->db_logistik_pt->where('txtperiode', $ym_periode_skrg);
				$this->db_logistik_pt->where('kodebartxt', $kodebartxt);
				$this->db_logistik_pt->update('stockawal');

        	}
        }
	}
}