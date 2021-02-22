<?php defined('BASEPATH') OR exit('No direct script access allowed');

ini_set('max_execution_time', '0');

class Transfer_gl extends CI_Controller {

	function __construct(){
		parent::__construct();
		check_session();
		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik',TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
		$this->db_gl_pt = $this->load->database('db_gl_'.$db_pt,TRUE);

	}

	public function _get_max_id_header_entry() {
		$query_max_id_header_entry =  "SELECT MAX(NOID) as max_id_header_entry FROM header_entry";
		$get_max_id_header_entry = $this->db_gl_pt->query($query_max_id_header_entry)->row(); 

		return $get_max_id_header_entry->max_id_header_entry;
	}

	public function transfer(){
		// var_dump($_SESSION);exit();
		$txtperiode = $this->session->userdata('ym_periode');
		$KODE = $this->session->userdata('kode_pt');
		$lokasi = $this->session->userdata('status_lokasi');
		$periode = $this->session->userdata('Ymd_periode');

		switch ($lokasi) {
			case 'HO':
				$ref_lokasi = "PST";
				break;
			case 'RO':
				$ref_lokasi = "ROM";
				break;
			case 'SITE':
				$ref_lokasi = "EST";
				break;
			case 'PKS':
				$ref_lokasi = "PKS";
				break;
			default:
				# code...
				break;
		}

		$this->_ulang_bkb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi);
		$this->_post_lpb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi);
	}

	public function _ulang_bkb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi){
		$data_update_stockawal1['QTY_KELUAR'] = "0";
		$data_update_stockawal1['saldoakhir_qty'] = "0";

		$this->db_logistik_pt->set($data_update_stockawal1);
		$this->db_logistik_pt->where('kode', $KODE);
		$this->db_logistik_pt->where('txtperiode', $txtperiode);
		$this->db_logistik_pt->update('stockawal');

		$itemttg = $this->db_logistik_pt->get_where('keluar_query', array('KODE' => $KODE, 'txtperiode' => $txtperiode, 'BATAL' => '0'));
		if($itemttg->num_rows() > 0){
			foreach ($itemttg->result() as $datattg) {
				$KODEBAR = $datattg->kodebartxt;
				$STOK = $datattg->SumOfqty;

				$data_update_stockawal2['QTY_KELUAR'] = $STOK;

				$this->db_logistik_pt->set($data_update_stockawal2);
				$this->db_logistik_pt->where('kode', $KODE);
				$this->db_logistik_pt->where('kodebartxt', $KODEBAR);
				$this->db_logistik_pt->where('txtperiode', $txtperiode);
				$this->db_logistik_pt->update('stockawal');
			}
		}
		$query_update_stockawal3 = "UPDATE stockawal SET saldoakhir_qty = ((saldoawal_qty + QTY_MASUK) - QTY_KELUAR), saldoakhir_nilai = ((saldoawal_nilai + nilai_masuk) - (QTY_KELUAR * HARGAPORAT)) WHERE KODE = '$KODE' AND txtperiode = '$txtperiode'";
		$this->db_logistik_pt->query($query_update_stockawal3);
	}

	public function _post_lpb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi){
		$query_stokmasuk1 = "SELECT * FROM stokmasuk WHERE txtperiode1 = '$txtperiode' AND batal = '0' AND lokasi = '$lokasi' AND kode = '$KODE' AND LEFT(refpo,3) = '$ref_lokasi' ORDER BY ttg ASC";
		$data_stok_masuk1 = $this->db_logistik_pt->query($query_stokmasuk1);

		// ISIDATA.Open "select * from stokmasuk WHERE cdbl(txtperiode1)='" & CDbl(txtperiode1) & "' and cint(batal)='" & "0" & "' and trim(lokasi)='" & "HO" & "' and trim(kode)='" & "01" & "' and  left(refpo,3)='" & "Pst" & "' order by ttg asc", mydb
		// '

		// If ISIDATA.RecordCount > 0 Then
		//     i = 1
		//     ISIDATA.MoveFirst
		//     While Not ISIDATA.EOF
		//         i = i + 1
		//         ISIDATA.MoveNext
		//     Wend
		//     ProgressBar1.Max = i
		//     ProgressBar1.Value = 0
		//     ISIDATA.MoveFirst
		// '
		//     Do While Not ISIDATA.EOF
		// DoEvents

		//         ProgressBar1.Value = ProgressBar1.Value + 1

		if($data_stok_masuk1->num_rows() > 0){
			$i = "1";
			$i = $i + 1;

			foreach ($data_stok_masuk1->result() as $list_stok_masuk1) {
				// tglisi = ISIDATA!tgl
				// kodept = ISIDATA!kode
				// periodetxt = ISIDATA!txtperiode1
				// TGLTXT = ISIDATA!txttgl
				// ketgl = "LPB No: " & ISIDATA!noref
				// refno = "LPB-" & ISIDATA!TTG
				// kodettg = ISIDATA!TTG
				// kodepo = ISIDATA!refpo
				// NOPO = ISIDATA!NOPO
				// kodesupply = ISIDATA!kode_supply
				// mutasi = ISIDATA!mutasi

				// TGLSET3 = Format(periode1, "dd/mm/yyyy")
				// THN3 = Right(TGLSET3, 4)
				// BLN3 = Mid(TGLSET3, 4, 2)
				// TGL3 = "01" & "/" & BLN3 & "/" & THN3
				// TGL3 = CDate(Format(TGL3, "dd/MM/yyyy"))
				// SETTGL2 = THN3 & BLN3
				// TGLPER = CDate(TGLSET3)
				// BLN2 = Mid(TGL3, 4, 2)
				// BLN3 = CInt(BLN3)

				$tglisi = $list_stok_masuk1->tgl;
		        $kodept = $list_stok_masuk1->kode;
		        $periodetxt = $list_stok_masuk1->txtperiode1;
		        $TGLTXT = $list_stok_masuk1->txttgl;
		        $ketgl = "LPB No: ".$list_stok_masuk1->noref;
		        $refno = "LPB-".$list_stok_masuk1->ttg;
		        $kodettg = $list_stok_masuk1->ttg;
		        $kodepo = $list_stok_masuk1->refpo;
		        $NOPO = $list_stok_masuk1->nopo;
		        $kodesupply = $list_stok_masuk1->kode_supply;
		        $mutasi = $list_stok_masuk1->mutasi;

		        $TGLSET3 = date("d/m/Y",strtotime($periode));
		        // $TGLSET3 = Format($periode, "dd/mm/yyyy");

		        $THN3 = date("Y",strtotime($TGLSET3));
		        // $THN3 = substr($TGLSET3, 4);
		        
		        $BLN3 = date("m",strtotime($TGLSET3));
		        // $BLN3 = Mid($TGLSET3, 4, 2);

		        $TGL3 = "01"."/".$BLN3."/".$THN3;

		        $TGL3 = date("Y-m-d",strtotime($TGL3));
		        // $TGL3 = CDate(Format($TGL3, "dd/MM/yyyy"));

		        $SETTGL2 = $THN3.$BLN3;

		        $TGLPER = date("Y-m-d",strtotime($TGLSET3));
		        // $TGLPER = CDate($TGLSET3);
		        
		        $BLN2 = date("m",strtotime($TGL3));
		        // $BLN2 = Mid($TGL3, 4, 2);

		        // $BLN3 = CInt($BLN3);

		        if($BLN3 > 9) {
		            $bln1 = $BLN3;
		        }
		        else {
		            $bln1 = "0".$BLN3;
		            $BLN2 = $BLN3 + 1;
		            if ($BLN2 > 9) {
		                $BLN2 = $BLN2;
		            }
		            else {
		                $BLN2 = "0".$BLN2;
		            }
		        }
		        $debet1 = "SALDO".$bln1."D";
		        $KREDIT1 = "SALDO".$bln1."C";

		        // '  mygl.Execute "delete * from entry WHERE ref='" & Trim(refno) & "' AND CDATE(PERIODE)='" & TGL3 & "'"
		        // '  mygl.Execute "delete * from header_entry WHERE ref='" & refno & "' AND CDBL(PERIODETXT)='" & CDbl(SETTGL2) & "'"

		        // ISI HEADER ENTRY DI GL
		        $data_header_entry = $this->db_gl_pt->get('header_entry')->row();

		        $max_id_header_entry = $this->_get_max_id_header_entry();

		        $data_insert_header_entry['NOID'] = $max_id_header_entry;
		        $data_insert_header_entry['date'] = $tglisi;
		        $data_insert_header_entry['periode'] = $TGL3;
		        $data_insert_header_entry['ref'] = $refno;
		        $data_insert_header_entry['modul'] = "LOGISTIK";
		        $data_insert_header_entry['lokasi'] = $lokasi;
		        $data_insert_header_entry['sbu'] = $KODE;
		        $data_insert_header_entry['totaldr'] = "0";
		        $data_insert_header_entry['totalcr'] = "0";
		        $data_insert_header_entry['periodetxt'] = $SETTGL2;
		        
		        $this->db_gl_pt->insert('header_entry',$data_insert_header_entry);
		        
		        // cek account suplier
		        if($kodesupply <> "6" && $kodesupply <> "7" && $kodesupply <> "3") {
	                $data_supplier = $this->db_logistik_pt->get_where('supplier', array('KODE' => $kodesupply));
                    if($data_supplier->num_rows() > 0){
                    	$get_data_supplier = $data_supplier->row();
                    	$NAMA_ACC_SUPPLY = $get_data_supplier->nama_account;
                    	$ACC_SUPPLY = $get_data_supplier->account;
                    }
					else {
						print_r("Supplier tidak ada COA, kode suplier = ".$kodesupply);
						exit();
					}
		        }

		        $qtylpb = "0";
		        if($mutasi == "0"){
		        	$query_masuk_item = "SELECT * FROM masukitem WHERE txtperiode = '$txtperiode' AND TRIM(NOREF) = '$list_stok_masuk1->noref' AND batal = '0' ORDER BY TGL ASC";
		        	$get_masuk_item = $this->db_logistik_pt->query($query_masuk_item);

		        	if ($get_masuk_item->num_rows() > 0) {
		        		foreach ($get_masuk_item->result() as $list_masuk_item) {
		        			$qtylpb = $list_masuk_item->qty;
			                $kodesbu = $list_masuk_item->kdpt;
			                $KETCASE = $list_masuk_item->ket;
			                $cekasset = $list_masuk_item->ASSET;
			                
			                $LOKAlaset = substr($kodepo, 0, 7);
			                // $LOKAlaset = Left(Trim($kodepo), 7);

			                if($LOKAlaset == $ref_lokasi."-POA") {
			                    $cekasset = "1";
			                }
			                else {
			                	if($cekasset == "1") {
			                	    $cekasset = $list_masuk_item->asset;
			                	}
			                	else {
			                	    $cekasset = "0";
			                	}
			                }

			                $get_noac3 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item->kodebar ));
			                // simpan.Open "select * from noac WHERE noac='" & isidata2!KODEBAR & "'", mygl
			                // If simpan.RecordCount > 0 Then
			                if ($get_noac3->num_rows() > 0) {
			                	$data_coa3 = $get_noac3->row();

			                    $Group = $data_coa3->group;
			                    $tipe = $data_coa3->type;
			                    $Level = $data_coa3->level;
			                    $Generala = $data_coa3->general;

			                    $BULAN = date("m",strtotime($list_masuk_item->tgl));
			                    // $BULAN = Format($list_masuk_item->tgl, "mm");
			                    
			                    // $BULAN = CInt($BULAN);
			                    
			                    $akhirdb = $debet1;
			                    // $akhirdb = simpan([$debet1]);

			                    $akhirCR = $KREDIT1;
			                    // $akhirCR = simpan([$KREDIT1]);
			                }

			                $qtypo = "0";
                            $HARGAPO = "0";
                            $jumlahpo = "0";
                            $JUMLAHBPO = "0";
                            $jumlahlpb = "0";
                            $KURS = "";
                            $KONVERSI = "0";
                            $HARGASATX = "0";

                            // 'khusus kasus koreksi gl
                            $query_item_po = "SELECT * FROM item_po WHERE batal = '0' and TRIM(noref) = '$kodepo' AND kodebar = '$list_masuk_item->kodebar'";
                            $get_item_po = $this->db_logistik_pt->query($query_item_po);
                            if ($get_item_po->num_rows() > 0) {
                            	$totalpo = $get_item_po->num_rows();
                            	$datapo = $get_item_po->row();

                            	$totalbpo = $datapo->JUMLAHBPO;
                            	$qtypo = $datapo->qty;
                        	    if($totalpo > 1) {	
                    	            $query_sum_po = "SELECT SUM(jumharga) AS ttlharga, SUM(qty) as ttlqty, SUM(JUMLAHBPO) as ttlJUMLAHBPO from item_po WHERE batal = '0' and noref = '$kodepo ' AND kodebar = '$list_masuk_item->kodebar'";
                    	            $get_sum_po = $this->db_logistik_pt->query($query_sum_po)->row();

                    	            if(!empty($get_sum_po->ttlharga)){
                    	            	$jumlahpo = $get_sum_po->ttlharga + $get_sum_po->ttlJUMLAHBPO;
                    	                $qtypo = $get_sum_po->ttlqty;
                    	                $jumlahpo = $jumlahpo / $qtypo;
                    	                $qtypo = "1";
                    	            }
                        	    }
                        	    else {
                        	    	$jumlahpo = $datapo->jumharga + $totalbpo;
                        	    	$qtypo = $datapo->qty;
                        	    }

                        	    $KODEBPO = $datapo->KODE_BPO;
                        	    $kodebebanbpo = $datapo->JUMLAHBPO;
                        	    $NAMABEBANBPO = $datapo->nama_bebanbpo;
                        	    $nopocek = $datapo->noref;
                        	    $nabar = $datapo->nabar;
                        	    $KURS = $datapo->kurs;
                        	    $KONVERSI = $datapo->konversi;
                        	    $HARGASATX = $jumlahpo / $qtypo;

                        	    if($KURS <> "Rp") {
                        	        if($KONVERSI == "0") {
                        	        	print_r("Ada PO dgn mata uang asing dgn PO No: ".$nopocek.". Mohon dibuatkan konversinya di LPB, proses dibatalkan");
                        	        	exit();
                        	        }
                        	    }
                        	    if($KONVERSI <> 0) {
                        	        $HARGAPO = $HARGASATX * $KONVERSI;
                        	    }
                        	    else {
                        	        $HARGAPO = $HARGASATX;
                        	    }

                        	    $jumlahlpb = $qtylpb * $HARGAPO;
                            
                                $COABIAYA = "0";
                                $namabiaya = "";

                                if($list_masuk_item->kodebar == "102505990000078") {

                                }

                                $minasset = "1000000";
                        		if($cekasset == "1" && ($HARGAPO > $minasset)) {
                                	// 'debet dibiayakan tdk distok
                                	// if simpan.State = adStateOpen Then simpan.Close
                                	$get_histori_stockawal = $this->db_logistik_pt->get_where('histori_stokawal', array('kodebar' => $list_masuk_item->kodebar ));
                                	// simpan.Open "select * from histori_stokawal WHERE CDBL(kodebar)='" & CDbl(isidata2!KODEBAR) & "'", mydb

                            		if($get_histori_stockawal->num_rows() > 0) {
                            	        $data_histori_stockawal = $get_histori_stockawal->row();
                            	        if($HARGAPO > $minasset) {
                            	        	$COABIAYA = $data_histori_stockawal->qty2;
                            	            $namabiaya = $data_histori_stockawal->TRANSAKSI;
                            	            $cekasset = "1";
                            	        }
                            	        else {
                            	            $COABIAYA = $data_histori_stockawal->qty;
                            	            $namabiaya = $data_histori_stockawal->grp;
                            	            $cekasset = "0";
                            	        }
                            		}
                            		else {
                            	        if($HARGAPO > $minasset) {
                            	            $cekasset = "0";
                            	            print_r($nabar." Nama barang belum terdaftar didalam daftar Asset!");
                            	        }
                            	        else {
                            	            $cekasset = "0";
                            	        }
                            		}
                        		}
                            }
			        		else {
			        			print_r("LPB:".$kodettg."- Item barang LPB tidak sesuai dengan PO, mohon dicek datanya!");
			        			exit();
			        		}

			        		// 'cek pajak
			        		$query_po = "SELECT * from po WHERE batal = '0' AND TRIM(noreftxt) = '$kodepo'";
			        		$get_po = $this->db_logistik_pt->query($query_po);
			        		if ($get_po->num_rows() > 0) {
			        			$data_po = $get_po->row();
			        			if($data_po->ppn == "Y") {
			        		        $ppn = "1";
			        			}
			        			else{
			        		        $ppn = "0";
			        			}
			        		}

			        		// ' jika asset buat jurnal baru
		               		if($cekasset == "1" AND ($HARGAPO > $minasset)) {
		               			// 'account biayakan
		               			// If simpan.State = adStateOpen Then simpan.Close
		               			$get_noac4 = $this->db_logistik->get_where('noac', array('noac' => $COABIAYA )); // 'account asset
		               			// If simpan.RecordCount > 0 Then
		               			if($get_noac4->num_rows() > 0){
		               				$data_noac4 = $get_noac4->row();

		               			    $Group = $data_noac4->group;
		               			    $tipe = $data_noac4->type;
		               			    $Level = $data_noac4->level;
		               			    $Generala = $data_noac4->general;

		               			    $BULAN = date("m",strtotime($list_masuk_item->tgl));
		               			    // $BULAN = Format($list_masuk_item->tgl, "mm");
		               			    
		               			    $BULAN = $BULAN;
		               			    $namaaset = $data_noac4->nama;
		               			    
		               			    $akhirdb = $debet1;
		               			    // $akhirdb = simpan([$debet1]);

		               			    $akhirCR = $KREDIT1;
		               			    // $akhirCR = simpan([$KREDIT1]);
		               			}

		               			// 'isi biaya
	                            $ketgl = "Alokasi Asset ".$lokasi." atas No.PO:".$nopocek;
	                            // $query_insert_entry3 = "INSERT INTO entry ([DATE], SBU, NOAC, [GROUP], [TYPE], [LEVEL], [GENERAL], DC, DR, CR, PERIODE, REF, DESCAC, KET, begindr, beginCr, [module], PERIODETXT, LOKASI, TGLINPUT) VALUES ('$list_masuk_item->tgl', '01','$COABIAYA', '$Group', '$tipe', '$Level', '$Generala', 'D', '$jumlahlpb', '0', '$TGL3', '$refno', '$namaaset', '$ketgl', '$akhirdb', '$akhirCR', 'LOGISTIK', '$txtperiode', 'HO', NOW)";

	                            var_dump("iu");exit();

	                            $data_insert_entry3['DATE'] = $list_masuk_item->tgl;
	                            $data_insert_entry3['SBU'] = $KODE;
	                            $data_insert_entry3['NOAC'] = $COABIAYA;
	                            $data_insert_entry3['GROUP'] = $Group;
	                            $data_insert_entry3['TYPE'] = $tipe;
	                            $data_insert_entry3['LEVEL'] = $Level;
	                            $data_insert_entry3['GENERAL'] = $Generala;
	                            $data_insert_entry3['DC'] = 'D';
	                            $data_insert_entry3['DR'] = $jumlahlpb;
	                            $data_insert_entry3['CR'] = '0';
	                            $data_insert_entry3['PERIODE'] = $TGL3;
	                            $data_insert_entry3['REF'] = $refno;
	                            $data_insert_entry3['DESCAC'] = $namaaset;
	                            $data_insert_entry3['KET'] = $ketgl;
	                            $data_insert_entry3['begindr'] = $akhirdb;
	                            $data_insert_entry3['beginCr'] = $akhirCR;
	                            $data_insert_entry3['module'] = 'LOGISTIK';
	                            $data_insert_entry3['PERIODETXT'] = $txtperiode;
	                            $data_insert_entry3['LOKASI'] = $lokasi;
	                            $data_insert_entry3['TGLINPUT'] = date("Y-m-d H:i:s");

	                            $this->db_gl_pt->insert('entry', $data_insert_entry3);
	                            
	                            // 'asset langsung dikeluarkan
	                            $get_noac5 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item->kodebar ));
	                            if($get_noac5->num_rows() > 0){
	                            	$data_noac5 = $get_noac5->row();
	                            	$Group = $data_noac5->group;
	                            	$tipe = $data_noac5->type;
	                            	$Level = $data_noac5->level;
	                            	$Generala = $data_noac5->general;

	                            	$BULAN = date("m",strtotime($list_masuk_item->tgl));
	                            	// $BULAN = Format($list_masuk_item->tgl, "mm");
	                            	
	                            	$BULAN = $BULAN;
	                            	$namabarangaset = $data_noac5->nama;
	                            	
	                            	$akhirdb = $debet1;
	                            	// $akhirdb = simpan([$debet1]);
	                            	
	                            	$akhirCR = $KREDIT1;
	                            	// $akhirCR = simpan([$KREDIT1]);

	                                $ketgl = "Persediaan Asset ".$lokasi." : ".$nopocek;

	                                $data_insert_entry4['DATE'] = $list_masuk_item->tgl;
	                                $data_insert_entry4['SBU'] = $KODE;
	                                $data_insert_entry4['NOAC'] = $list_masuk_item->kodebar;
	                                $data_insert_entry4['GROUP'] = $Group;
	                                $data_insert_entry4['TYPE'] = $tipe;
	                                $data_insert_entry4['LEVEL'] = $Level;
	                                $data_insert_entry4['GENERAL'] = $Generala;
	                                $data_insert_entry4['DC'] = 'C';
	                                $data_insert_entry4['DR'] = '0';
	                                $data_insert_entry4['CR'] = $jumlahlpb;
	                                $data_insert_entry4['PERIODE'] = $TGL3;
	                                $data_insert_entry4['REF'] = $refno;
	                                $data_insert_entry4['DESCAC'] = $namabarangaset;
	                                $data_insert_entry4['KET'] = $ketgl;
	                                $data_insert_entry4['begindr'] = $akhirdb;
	                                $data_insert_entry4['beginCr'] = $akhirCR;
	                                $data_insert_entry4['module'] = 'LOGISTIK';
	                                $data_insert_entry4['PERIODETXT'] = $txtperiode;
	                                $data_insert_entry4['LOKASI'] = $lokasi;
	                                $data_insert_entry4['TGLINPUT'] = date("Y-m-d H:i:s");

	                                // $this->db_gl_pt->insert('entry', $data_insert_entry4);
	                            }

	                            if($KODEBPO <> 0) {
	                                // 'isi bpo
	                                $ketgl = "BPO No: ".$KODEBPO;

	                                $data_insert_entry5['DATE'] = $list_masuk_item->tgl;
	                                $data_insert_entry5['SBU'] = $KODE;
	                                $data_insert_entry5['NOAC'] = $list_masuk_item->kodebar;
	                                $data_insert_entry5['GROUP'] = $Group;
	                                $data_insert_entry5['TYPE'] = $tipe;
	                                $data_insert_entry5['LEVEL'] = $Level;
	                                $data_insert_entry5['GENERAL'] = $Generala;
	                                $data_insert_entry5['DC'] = 'D';
	                                $data_insert_entry5['DR'] = $JUMLAHBPO;
	                                $data_insert_entry5['CR'] = "0";
	                                $data_insert_entry5['PERIODE'] = $TGL3;
	                                $data_insert_entry5['REF'] = $refno;
	                                $data_insert_entry5['DESCAC'] = $list_masuk_item->nabar;
	                                $data_insert_entry5['KET'] = $ketgl;
	                                $data_insert_entry5['begindr'] = $akhirdb;
	                                $data_insert_entry5['beginCr'] = $akhirCR;
	                                $data_insert_entry5['module'] = 'LOGISTIK';
	                                $data_insert_entry5['PERIODETXT'] = $txtperiode;
	                                $data_insert_entry5['LOKASI'] = $lokasi;
	                                $data_insert_entry5['TGLINPUT'] = date("Y-m-d H:i:s");

	                                // $this->db_gl_pt->insert('entry', $data_insert_entry5);
	                            }

	                            // 'isi persediaan
	                            $get_noac6 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item->kodebar ));
	                            if($get_noac6->num_rows() > 0) {
	                            	$data_noac6 = $get_noac6->row();
	                            	$Group = $data_noac6->group;
	                            	$tipe = $data_noac6->type;
	                            	$Level = $data_noac6->level;
	                            	$Generala = $data_noac6->general;

	                            	$BULAN = date("m",strtotime($list_masuk_item->tgl));
	                            	// $BULAN = Format($list_masuk_item->tgl, "mm");
	                            	
	                            	// $BULAN = CInt($BULAN);

	                            	$namabiaya = $data_noac6->nama;
	                            	
	                            	$akhirdb = $debet1;
	                            	// $akhirdb = simpan([$debet1]);
	                            	
	                            	$akhirCR = $KREDIT1;
	                            	// $akhirCR = simpan([$KREDIT1]);
	                            }

	                            if($KURS <> "Rp") {
	                                $ketgl = "Persediaan ".$lokasi." ".$nopocek."/(".$KURS.")";

	                            }
	                            else {
	                                $ketgl = "Persediaan ".$lokasi." No.PO: ".$nopocek."/".$nabar;
	                            }

	                            $data_insert_entry6['DATE'] = $list_masuk_item->tgl;
	                            $data_insert_entry6['SBU'] = $KODE;
	                            $data_insert_entry6['NOAC'] = $list_masuk_item->kodebar;
	                            $data_insert_entry6['GROUP'] = $Group;
	                            $data_insert_entry6['TYPE'] = $tipe;
	                            $data_insert_entry6['LEVEL'] = $Level;
	                            $data_insert_entry6['GENERAL'] = $Generala;
	                            $data_insert_entry6['DC'] = 'D';
	                            $data_insert_entry6['DR'] = $jumlahlpb;
	                            $data_insert_entry6['CR'] = "0";
	                            $data_insert_entry6['PERIODE'] = $TGL3;
	                            $data_insert_entry6['REF'] = $refno;
	                            $data_insert_entry6['DESCAC'] = $namabiaya;
	                            $data_insert_entry6['KET'] = $ketgl;
	                            $data_insert_entry6['begindr'] = $akhirdb;
	                            $data_insert_entry6['beginCr'] = $akhirCR;
	                            $data_insert_entry6['module'] = 'LOGISTIK';
	                            $data_insert_entry6['PERIODETXT'] = $txtperiode;
	                            $data_insert_entry6['LOKASI'] = $lokasi;
	                            $data_insert_entry6['TGLINPUT'] = date("Y-m-d H:i:s");

	                            // $this->db_gl_pt->insert('entry', $data_insert_entry6);
		               		
	                            // 'HUTANG SUPLIER
	                                // If simpan.State = adStateOpen Then simpan.Close
	                            $get_noac7 = $this->db_logistik->get_where('noac', array('noac' => $ACC_SUPPLY ));
	                                // simpan.Open "select * from noac WHERE noac='" & ACC_SUPPLY & "'", mygl

	                                // If simpan.RecordCount > 0 Then
	                            if($get_noac7->num_rows() > 0) {
	                            	$data_noac7 = $get_noac7->row();
	                            	$Group = $data_noac7->group;
	                                $tipe = $data_noac7->type;
	                                $Level = $data_noac7->level;
	                                $Generala = $data_noac7->general;

	                                $BULAN = date("m",strtotime($list_masuk_item->tgl));
	                                // $BULAN = Format($list_masuk_item->tgl, "mm");
	                                
	                                // $BULAN = CInt($BULAN);
	                                
	                                $namaSUPLIER = $data_noac7->nama;
	                                
	                                $akhirdb = $debet1;
	                                // $akhirdb = simpan([$debet1]);
	                                
	                                $akhirCR = $KREDIT1;
	                                // $akhirCR = simpan([$KREDIT1]);
	                                
	                                $ketgl = "Hutang Supplier ".$lokasi." No.PO: ".$nopocek;

	                                $data_insert_entry7['DATE'] = $list_masuk_item->tgl;
	                                $data_insert_entry7['SBU'] = $KODE;
	                                $data_insert_entry7['NOAC'] = $ACC_SUPPLY;
	                                $data_insert_entry7['GROUP'] = $Group;
	                                $data_insert_entry7['TYPE'] = $tipe;
	                                $data_insert_entry7['LEVEL'] = $Level;
	                                $data_insert_entry7['GENERAL'] = $Generala;
	                                $data_insert_entry7['DC'] = 'D';
	                                $data_insert_entry7['DR'] = "0";
	                                $data_insert_entry7['CR'] = $jumlahlpb;
	                                $data_insert_entry7['PERIODE'] = $TGL3;
	                                $data_insert_entry7['REF'] = $refno;
	                                $data_insert_entry7['DESCAC'] = $NAMA_ACC_SUPPLY;
	                                $data_insert_entry7['KET'] = $ketgl;
	                                $data_insert_entry7['begindr'] = $akhirdb;
	                                $data_insert_entry7['beginCr'] = $akhirCR;
	                                $data_insert_entry7['module'] = 'LOGISTIK';
	                                $data_insert_entry7['PERIODETXT'] = $txtperiode;
	                                $data_insert_entry7['LOKASI'] = $lokasi;
	                                $data_insert_entry7['TGLINPUT'] = date("Y-m-d H:i:s");

	                                // $this->db_gl_pt->insert('entry',$data_insert_entry7);
	                            }
	                            else {
	                            	print_r("COA Hutang supplier tidak terdaftar proses dibatalkan-coa: ".$ACC_SUPPLY);
	                                exit();
	                            }

	                            // 'UPDATE STOCKAWAL ATAS BKB ASSET
	                            if($list_masuk_item->kodebar == "102505990000078") {


	                            }   
								$query_update_stockawal4 = "UPDATE stockawal SET QTY_KELUAR = '(QTY_KELUAR + $qtylpb)' WHERE kodebartxt = '$list_masuk_item->kodebar' AND txtperiode = '$txtperiode'";
								$this->db_logistik_pt->query($query_update_stockawal4);
		               		}
		               		else {
		               			$COAX = $list_masuk_item->kodebar;
	                            // 'isi persediaan
	                            $get_noac8 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item->kodebar ));
	                            if($get_noac8->num_rows() > 0){
		                        	$data_noac8 = $get_noac8->row();
		                        	$Group = $data_noac8->group;
		                        	$tipe = $data_noac8->type;
		                        	$Level = $data_noac8->level;
		                        	$Generala = $data_noac8->general;

		                        	$BULAN = date("m",strtotime($list_masuk_item->tgl));
		                        	// $BULAN = Format($list_masuk_item->tgl, "mm");
		                        	
		                        	// $BULAN = CInt($BULAN);
		                        	
		                        	$namabiaya = $data_noac8->nama;
		                        	
		                        	$akhirdb = $debet1;
				                    // $akhirdb = simpan([$debet1]);

				                    $akhirCR = $KREDIT1;
				                    // $akhirCR = simpan([$KREDIT1]);
		                        }
	                            if($KURS <> "Rp") {
	                                $ketgl = "Persediaan ".$lokasi." ".$nopocek."/(".$KURS.")";
	                            }
	                            else {
	                                $ketgl = "Persediaan ".$lokasi." No.PO: ".$nopocek."/".$nabar;
	                            }

	                            $data_insert_entry8['DATE'] = $list_masuk_item->tgl;
	                            $data_insert_entry8['SBU'] = $KODE;
	                            $data_insert_entry8['NOAC'] = $COAX;
	                            $data_insert_entry8['GROUP'] = $Group;
	                            $data_insert_entry8['TYPE'] = $tipe;
	                            $data_insert_entry8['LEVEL'] = $Level;
	                            $data_insert_entry8['GENERAL'] = $Generala;
	                            $data_insert_entry8['DC'] = 'D';
	                            $data_insert_entry8['DR'] = $jumlahlpb;
	                            $data_insert_entry8['CR'] = "0";
	                            $data_insert_entry8['PERIODE'] = $TGL3;
	                            $data_insert_entry8['REF'] = $refno;
	                            $data_insert_entry8['DESCAC'] = $namabiaya;
	                            $data_insert_entry8['KET'] = $ketgl;
	                            $data_insert_entry8['begindr'] = $akhirdb;
	                            $data_insert_entry8['beginCr'] = $akhirCR;
	                            $data_insert_entry8['module'] = 'LOGISTIK';
	                            $data_insert_entry8['PERIODETXT'] = $txtperiode;
	                            $data_insert_entry8['LOKASI'] = $lokasi;
	                            $data_insert_entry8['TGLINPUT'] = date("Y-m-d H:i:s");

	                            // $this->db_gl_pt->query('entry', $data_insert_entry8);

	                            // 'HUTANG SUUPLIER
	                            $get_noac9 = $this->db_logistik->get_where('noac', array('noac' => $ACC_SUPPLY ));
	                            // simpan.Open "select * from noac WHERE noac='" & ACC_SUPPLY & "'", mygl
	                            // If simpan.RecordCount > 0 Then
	                            if($get_noac9->num_rows() > 0){
	                                $data_noac9 = $get_noac9->row();
	                                $Group = $data_noac9->group;
	                                $tipe = $data_noac9->type;
	                                $Level = $data_noac9->level;
	                                $Generala = $data_noac9->general;

	                                $BULAN = date("m",strtotime($list_masuk_item->tgl));
	                                // $BULAN = Format($list_masuk_item->tgl, "mm");

	                                // $BULAN = CInt($BULAN);
	                                
	                                $namaSUPLIER = $data_noac9->nama;
	                                
	                                $akhirdb = $debet1;
				                    // $akhirdb = simpan([$debet1]);

				                    $akhirCR = $KREDIT1;
				                    // $akhirCR = simpan([$KREDIT1]);
	                            }

	                            // 'isi hutang suplier
		                        if($KURS <> "Rp") {
		                            $ketgl = "Hutang Supplier No.PO: ".$nopocek."/".$nabar."/(".$KURS.")";
		                        }
		                        else {
		                            $ketgl = "Hutang Supplier No.PO: ".$nopocek."/".$nabar;
		                        }
	                           	
		                        $data_insert_entry9['DATE'] = $list_masuk_item->tgl;
	                            $data_insert_entry9['SBU'] = $KODE;
	                            $data_insert_entry9['NOAC'] = $ACC_SUPPLY;
	                            $data_insert_entry9['GROUP'] = $Group;
	                            $data_insert_entry9['TYPE'] = $tipe;
	                            $data_insert_entry9['LEVEL'] = $Level;
	                            $data_insert_entry9['GENERAL'] = $Generala;
	                            $data_insert_entry9['DC'] = 'D';
	                            $data_insert_entry9['DR'] = "0";
	                            $data_insert_entry9['CR'] = $jumlahlpb;
	                            $data_insert_entry9['PERIODE'] = $TGL3;
	                            $data_insert_entry9['REF'] = $refno;
	                            $data_insert_entry9['DESCAC'] = $NAMA_ACC_SUPPLY;
	                            $data_insert_entry9['KET'] = $ketgl;
	                            $data_insert_entry9['begindr'] = $akhirdb;
	                            $data_insert_entry9['beginCr'] = $akhirCR;
	                            $data_insert_entry9['module'] = 'LOGISTIK';
	                            $data_insert_entry9['PERIODETXT'] = $txtperiode;
	                            $data_insert_entry9['LOKASI'] = $lokasi;
	                            $data_insert_entry9['TGLINPUT'] = date("Y-m-d H:i:s");

	                            // $this->db_gl_pt->insert('entry', $data_insert_entry9);

	                            if($JUMLAHBPO > 0) {
		                            // 'isi persediaan
		                            $ketgl = "BPO No: ".$KODEBPO;

		                           	$data_insert_entry9['DATE'] = $list_masuk_item->tgl;
		                            $data_insert_entry9['SBU'] = $KODE;
		                            $data_insert_entry9['NOAC'] = $list_masuk_item->kodebar;
		                            $data_insert_entry9['GROUP'] = $Group;
		                            $data_insert_entry9['TYPE'] = $tipe;
		                            $data_insert_entry9['LEVEL'] = $Level;
		                            $data_insert_entry9['GENERAL'] = $Generala;
		                            $data_insert_entry9['DC'] = 'D';
		                            $data_insert_entry9['DR'] = $JUMLAHBPO;
		                            $data_insert_entry9['CR'] = '0';
		                            $data_insert_entry9['PERIODE'] = $TGL3;
		                            $data_insert_entry9['REF'] = $refno;
		                            $data_insert_entry9['DESCAC'] = $list_masuk_item->nabar;
		                            $data_insert_entry9['KET'] = $ketgl;
		                            $data_insert_entry9['begindr'] = $akhirdb;
		                            $data_insert_entry9['beginCr'] = $akhirCR;
		                            $data_insert_entry9['module'] = 'LOGISTIK';
		                            $data_insert_entry9['PERIODETXT'] = $txtperiode;
		                            $data_insert_entry9['LOKASI'] = $lokasi;
		                            $data_insert_entry9['TGLINPUT'] = date("Y-m-d H:i:s");

		                            // $this->db_gl_pt->insert('entry', $data_insert_entry9);
	                            }
		               		}

	               		// 'hutang suplier atas bpo
		        	}
		        }
		        else if ($mutasi == "1") { // 'mutasi
		        	// ' KON_MUTASI
		        	var_dump("mutasi");exit();
		        	$query_masuk_item2 = "SELECT * FROM masukitem WHERE txtperiode = '$txtperiode' AND TRIM(NOREF) = '$list_stok_masuk1->noref' AND BATAL = '0' ORDER BY TGL ASC";
		        	$get_masuk_item2 = $this->db_logistik_pt->query($query_masuk_item2);
		        	if($get_masuk_item2->num_rows() > 0){
		        	    // If isidata2.RecordCount > 0 Then
		        	        // isidata2.MoveFirst
		        	        // Do While Not isidata2.EOF
		        		$list_masuk_item2 = $get_masuk_item2->row();
		        		$qtylpb = $list_masuk_item2->qty;
		        		$kodesbu = $list_masuk_item2->kdpt;
		        		$KETCASE = $list_masuk_item2->ket;
		        		$KODEBARX = $list_masuk_item2->kodebartxt;

		        		$query_stockawal2 = "SELECT * FROM stockawal WHERE kodebar = '$KODEBARX' AND txtperiode = '$txtperiode' ORDER BY txtperiode ASC"; 
		        		$get_stockawal2 = $this->db_logistik_pt->query($query_stockawal2);
		        		if($KODEBARX == "102505010100025") {

		        		}

		        		if($get_stockawal2->num_rows() > 0 ) {
		        		    $data_stockawal2 = $get_stockawal2->row();
		        		    $HARGAX = $data_stokawal2->HARGAPORAT;
		        		}
		        		else {
		        			print_r("Barang Mutasi tidak ada Harga PO, proses dibatalkan");
		        			exit();
		        		}

		        		$get_noac10 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item2->KODEBAR ));
		        		if($get_noac10->num_rows() > 0){
		        			$data_noac10 = $get_noac10->row();
		        			$Group = $data_noac10->group;
		        		    $tipe = $data_noac10->type;
		        		    $Level = $data_noac10->level;
		        		    $Generala = $data_noac10->general;

		        		    $BULAN = date("m",strtotime($list_masuk_item2->tgl));
		        		    // $BULAN = Format($list_masuk_item2->tgl, "mm");

		        		    // $BULAN = CInt($BULAN);
		        		    
		        		    $akhirdb = $debet1;
		                    // $akhirdb = simpan([$debet1]);

		                    $akhirCR = $KREDIT1;
		                    // $akhirCR = simpan([$KREDIT1]);
		        		}
		        		$jumlahlpb = $qtylpb * $HARGAX;
		        		$ketgl = "Persediaan ".$KETCASE;
		        		
		        		$data_insert_entry10['DATE'] = $list_masuk_item2->tgl;
		        		$data_insert_entry10['SBU'] = $KODE;
		        		$data_insert_entry10['NOAC'] = $list_masuk_item2->KODEBAR;
		        		$data_insert_entry10['GROUP'] = $Group;
		        		$data_insert_entry10['TYPE'] = $tipe;
		        		$data_insert_entry10['LEVEL'] = $Level;
		        		$data_insert_entry10['GENERAL'] = $Generala;
		        		$data_insert_entry10['DC'] = 'D';
		        		$data_insert_entry10['DR'] = $jumlahlpb;
		        		$data_insert_entry10['CR'] = '0';
		        		$data_insert_entry10['PERIODE'] = $TGL3;
		        		$data_insert_entry10['REF'] = $refno;
		        		$data_insert_entry10['DESCAC'] = $list_masuk_item2->nabar;
		        		$data_insert_entry10['KET'] = $ketgl;
		        		$data_insert_entry10['begindr'] = $akhirdb;
		        		$data_insert_entry10['beginCr'] = $akhirCR;
		        		$data_insert_entry10['module'] = 'LOGISTIK';
		        		$data_insert_entry10['PERIODETXT'] = $txtperiode;
		        		$data_insert_entry10['LOKASI'] = $lokasi;
		        		$data_insert_entry10['TGLINPUT'] = date("Y-m-d H:i:s");

		        		// $this->db_gl_pt->insert('entry', $data_insert_entry10);
		        	
		        		// '  kodemutasi = "100301000000000"
						if($kodesupply == "3") {
							$kodemutasi = "100302000000000";
						}
		        		else if($kodesupply == "6") {
		        		    $kodemutasi = "100301000000000";
		        		}
		        		else if($kodesupply = "8") {
		        		    $kodemutasi = "100304000000000";
		        		}

		        		$get_noac11 = $this->db_logistik->get_where('noac', array('noac' => $kodemutasi ));
		        		// simpan.Open "select * from noac WHERE noac='" & kodemutasi & "'", mygl
		        		// If simpan.RecordCount > 0 Then
		        		if($get_noac11->num_rows() > 0) {
		        		    $data_noac11 = $get_noac11->row();
		        		    $Group = $data_noac11->group;
		        		    $tipe = $data_noac11->type;
		        		    $Level = $data_noac11->level;
		        		    $Generala = $data_noac11->general;
		        		    $BULAN = date("m",strtotime($list_masuk_item2->tgl));
		        		    // $BULAN = Format($list_masuk_item2->tgl, "mm");

		        		    // $BULAN = CInt($BULAN);

	        		        $akhirdb = $debet1;
		                    // $akhirdb = simpan([$debet1]);

		                    $akhirCR = $KREDIT1;
		                    // $akhirCR = simpan([$KREDIT1]);
		        		}

		        		$data_insert_entry11['DATE'] = $list_masuk_item2->tgl;
		        		$data_insert_entry11['SBU'] = $KODE;
		        		$data_insert_entry11['NOAC'] = $kodemutasi;
		        		$data_insert_entry11['GROUP'] = $Group;
		        		$data_insert_entry11['TYPE'] = $tipe;
		        		$data_insert_entry11['LEVEL'] = $Level;
		        		$data_insert_entry11['GENERAL'] = $Generala;
		        		$data_insert_entry11['DC'] = 'C';
		        		$data_insert_entry11['DR'] = '0';
		        		$data_insert_entry11['CR'] = $jumlahlpb;
		        		$data_insert_entry11['PERIODE'] = $TGL3;
		        		$data_insert_entry11['REF'] = $refno;
		        		$data_insert_entry11['DESCAC'] = $list_masuk_item2->nabar;
		        		$data_insert_entry11['KET'] = $ketgl;
		        		$data_insert_entry11['begindr'] = $akhirdb;
		        		$data_insert_entry11['beginCr'] = $akhirCR;
		        		$data_insert_entry11['module'] = 'LOGISTIK';
		        		$data_insert_entry11['PERIODETXT'] = $txtperiode;
		        		$data_insert_entry11['LOKASI'] = $lokasi;
		        		$data_insert_entry11['TGLINPUT'] = date("Y-m-d H:i:s");

		        		var_dump("iu");exit();

		        		// $this->db_gl_pt->insert('entry', $data_insert_entry11);
		        	}
		        }
		        elseif ($mutasi == "2") { // 'RETUR
        	        // '   KON_MUTASI
		        	var_dump("retur");exit();
        	        // If isidata2.State = adStateOpen Then isidata2.Close
		        	$query_masuk_item3 = "SELECT * FROM masukitem WHERE txtperiode = '$txtperiode' AND TRIM(NOREF) = '$list_stok_masuk1->noref' AND batal = '0' ORDER BY TGL ASC";
		        	$get_masuk_item3 = $this->db_logistik_pt->query($query_masuk_item3);
        	        // isidata2.Open "select * from masukitem WHERE cdbl(txtperiode)='" & CDbl(txtperiode1) & "' and TRIM(NOREF)='" & ISIDATA!noref & "' and cint(batal)='" & "0" & "'  order by TGL asc", mydb
        	        if ($get_masuk_item3->num_rows() > 0) {
        	        	// 'CEK HARGA RATA2X SEBELUM BARANG TSB
        	        	$list_masuk_item3 = $get_masuk_item3->row();
        	        	$KODEBAR = $list_masuk_item3->KODEBAR;
        	        	$STOK = $qtylpb;
        	            // If stokawalx.State = adStateOpen Then stokawalx.Close
        	            $query_masuk_item4 = "SELECT * FROM masukitem WHERE BATAL = '0' AND asset = '0' AND kodebar = '$KODEBAR' AND txtperiode = '$txtperiode' ORDER BY kodebar";
        	            $get_masuk_item4 = $this->db_logistik_pt->query($query_masuk_item4);

		        	    if($get_masuk_item4->num_rows() > 0) {
		        	    	$HARGASTOK = 0;
		        	    	$t = 0;
		        	    	$KURS = "";
		        	    	$nilai = 0;
		        	    	$harganet = 0;
		        	    	$BIAYAPBBKB = 0;
		        	    		            
		        	    	// For t = 1 To stokawalx.RecordCount
		        	    	foreach ($get_masuk_item4->result() as $list_masuk_item4) {
		        	    		$noref = $list_masuk_item4->refpo;
		        	    		$qtylpb = $list_masuk_item4->qty + $qtylpb;
		        	    		$KURS = $list_masuk_item4->KURS;
		        	    		$nilai = $list_masuk_item4->KONVERSI;
		        	    		// If ITEMPO.State = adStateOpen Then ITEMPO.Close
	        	    		    $query_item_po2 = "SELECT * FROM item_po WHERE BATAL = '0' AND kodebar = '$KODEBAR' AND TRIM(noref) = 'TRIM($noref)' ORDER BY kodebar";
	        	    		    // ITEMPO.Open "Select * from item_po where CINT(BATAL)=" & 0 & " AND cdbl(kodebar)='" & CDbl(KODEBAR) & "' and trim(noref)='" & Trim(noref) & "'  order by kodebar", mydb
	        	    		    $get_item_po2 = $this->db_logistik_pt->query($query_item_po2);
    		                    if($get_item_po2->num_rows() > 0) {
	    		                    // If ITEMPO.RecordCount > 0 Then
	        	    		        $totalpo = $get_item_po2->num_rows();
	        	    		        $data_item_po2 = $get_item_po2->row();
	        	    		        $BIAYAPBBKB = $get_item_po2->JUMLAHBPO;

	        	    		        if($totalpo > 1){
	        	    		        	$query_sum_item_po = "SELECT SUM(jumharga) AS ttlharga, SUM(qty) AS ttlqty, SUM(JUMLAHBPO) AS ttlPBBKB FROM item_po WHERE BATAL = '0' AND kodebar = '$KODEBAR' AND TRIM(noref) = 'TRIM($noref)'";
	        	    		            $get_sum_item_po = $this->db_logistik_pt->query($query_sum_item_po);
	        	    		            $data_sum_item_po = $get_sum_item_po->row();
	        	    		        	if(!empty($data_sum_item_po->ttlharga)) {
    	    		        	            $jumlahpo = $data_sum_item_po->ttlharga;
    	    		        	            $qtypo = $data_sum_item_po->ttlqty;
    	    		        	            $jumlahpo = ($data_sum_item_po->ttlharga + $data_sum_item_po->ttlPBBKB) / $qtypo;
        	    		        	        $qtypo = "1";
        	    		        	        $harganet = $jumlahpo;
        	    		        	        if($KURS <> "Rp") {
        	    		        	            $HARGASTOK = $HARGASTOK + ($harganet * $nilai);
        	    		        	        }
        	    		        	        else {
        	    		        	            $HARGASTOK = $HARGASTOK + ($harganet * $list_masuk_item4->qty);
        	    		        	        }
	        	    		        	}
	        	    		        }
	        	    		        else {
	        	    		        	$query_sum_item_po2 = "SELECT SUM(jumharga) AS ttlharga, SUM(qty) AS ttlqty, SUM(JUMLAHBPO) AS ttlPBBKB FROM item_po WHERE BATAL = '0' AND kodebar = '$KODEBAR' AND TRIM(noref) = 'TRIM($noref)'";
	        	    		        	    $get_sum_item_po2 = $this->db_logistik_pt->query($query_sum_item_po2);
	        	    		        	    $data_sum_item_po2 = $get_sum_item_po2->row();

	        	    		        	// ' qtypo = ITEMPO!ttlqty
										$harganet = ($data_sum_item_po2->jumharga + $BIAYAPBBKB) / $data_sum_item_po2->qty;
										if($KURS <> "Rp") {
											$HARGASTOK = $HARGASTOK + ($harganet * $nilai);
										}
										else {
										 	$HARGASTOK = $HARGASTOK + ($harganet * $list_masuk_item4->qty);
										}
	        	    		        }
    		                    }
		        	    	}

		        	    	// If stokawalx.State = adStateOpen Then stokawalx.Close
		        	    	$query_stockawal3 = "SELECT * FROM STOCKAWAL WHERE kodebar = '$KODEBAR' AND txtperiode = '$txtperiode' ORDER BY txtperiode ASC";
	    	                $get_stockawal3 = $this->db_logistik_pt->query($query_stockawal3);
	    	                
	    	                if($get_stockawal3->num_rows() > 0) {
	    	                	$data_stockawal3 = $get_stockawal3->row();
	    	                	$totalharga = $data_stockawal3->saldoawal_nilai;
	    	                    $TOTALQTY = $data_stockawal3->saldoawal_qty;
	    	                    if($totalharga <> 0 AND $TOTALQTY <> 0) {
	    	                        $HARGARATA = ($totalharga + $HARGASTOK) / ($qtylpb + $TOTALQTY);
	    	                    }
	    	                    else {
	    	                        $HARGARATA = $HARGASTOK / $qtylpb;
	    	                    }
	    	                }
	    	                if($HARGARATA <> 0 ) {
	    	                   // ' HARGARATA = CCur(HARGARATA)
	    	                }

	    	                // 'HARGASTOK = qtylpb * HARGASTOK
	    	                $HARGASTOK = $HARGASTOK;

	    	                $qtylpb = $list_masuk_item3->qty;
	    	                $kodesbu = $list_masuk_item3->kdpt;
	    	                $KETCASE = $list_masuk_item3->ket;
	    	                $KODEBARX = $list_masuk_item3->kodebartxt;

	    	                $get_noac12 = $this->db_logistik->get_where('noac', array('noac' => $list_masuk_item3->KODEBAR ));
	    	                // simpan.Open "select * from noac WHERE noac='" & isidata2!KODEBAR & "'", mygl
		                    // If simpan.RecordCount > 0 Then
                    		if($get_noac12->num_rows() > 0){
                    			$data_noac12 = $get_noac12->row();
                    			$Group = $data_noac12->group;
                    			$tipe = $data_noac12->type;
                    			$Level = $data_noac12->level;
                    			$Generala = $data_noac12->general;
                    			$BULAN = date("m",strtotime($list_masuk_item3->tgl));
                    			// $BULAN = Format($list_masuk_item3->tgl, "mm");

                    			// $BULAN = CInt($BULAN);
                    			
                    			$akhirdb = $debet1;
			                    // $akhirdb = simpan([$debet1]);

			                    $akhirCR = $KREDIT1;
			                    // $akhirCR = simpan([$KREDIT1]);
                    		}	
							// End If
		                    $jumlahlpb = $qtylpb * $HARGARATA;

                    		$ketgl = "Persediaan Retur ".$KETCASE;

                    		$data_insert_entry12['DATE'] = $list_masuk_item3->tgl;
                    		$data_insert_entry12['SBU'] = $KODE;
                    		$data_insert_entry12['NOAC'] = $list_masuk_item3->KODEBAR;
                    		$data_insert_entry12['GROUP'] = $Group;
                    		$data_insert_entry12['TYPE'] = $tipe;
                    		$data_insert_entry12['LEVEL'] = $Level;
                    		$data_insert_entry12['GENERAL'] = $Generala;
                    		$data_insert_entry12['DC'] = 'D';
                    		$data_insert_entry12['DR'] = $jumlahlpb;
                    		$data_insert_entry12['CR'] = '0';
                    		$data_insert_entry12['PERIODE'] = $TGL3;
                    		$data_insert_entry12['REF'] = $refno;
                    		$data_insert_entry12['DESCAC'] = $list_masuk_item3->nabar;
                    		$data_insert_entry12['KET'] = $ketgl;
                    		$data_insert_entry12['begindr'] = $akhirdb;
                    		$data_insert_entry12['beginCr'] = $akhirCR;
                    		$data_insert_entry12['module'] = 'LOGISTIK';
                    		$data_insert_entry12['PERIODETXT'] = $txtperiode;
                    		$data_insert_entry12['LOKASI'] = $lokasi;
                    		$data_insert_entry12['TGLINPUT'] = date("Y-m-d H:i:s");

                    		// $this->db_gl_pt->insert('entry', $data_insert_entry12);

                    		$kodemutasi = "701530300000000";
                    		// ' If kodesupply = "3" Then
                    		 // '    kodemutasi = "100302000000000"
                    		// ' ElseIf kodesupply = "6" Then
                    		// '     kodemutasi = "100301000000000"
                    		// ' ElseIf kodesupply = "8" Then
                    		// '     kodemutasi = "100304000000000"
                    		// ' End If

                    		// If simpan.State = adStateOpen Then simpan.Close
                    		$get_noac13 = $this->db_logistik->get_where('noac', array('noac' => $kodemutasi ));
                    		// simpan.Open "select * from noac WHERE noac='" & kodemutasi & "'", mygl
                    		// If simpan.RecordCount > 0 Then
                    		$data_noac13 = $get_noac13->row(); 
                    		if ($get_noac13->num_rows() > 0) {
                    		    $Group = $data_noac13->group;
                    		    $tipe = $data_noac13->type;
                    		    $Level = $data_noac13->level;
                    		    $Generala = $data_noac13->general;
                    		    
                    		    $BULAN = date("m",strtotime($list_masuk_item3->tgl));
                    		    // $BULAN = Format($list_masuk_item3->tgl, "mm");
                    		    
                    		    // $BULAN = CInt($BULAN);

                    		    $akhirdb = $debet1;
			                    // $akhirdb = simpan([$debet1]);

			                    $akhirCR = $KREDIT1;
			                    // $akhirCR = simpan([$KREDIT1]);
                    		}
                    		// End If

                    		$data_insert_entry13['DATE'] = $list_masuk_item3->tgl;
                    		$data_insert_entry13['SBU'] = $KODE;
                    		$data_insert_entry13['NOAC'] = $kodemutasi;
                    		$data_insert_entry13['GROUP'] = $Group;
                    		$data_insert_entry13['TYPE'] = $tipe;
                    		$data_insert_entry13['LEVEL'] = $Level;
                    		$data_insert_entry13['GENERAL'] = $Generala;
                    		$data_insert_entry13['DC'] = 'C';
                    		$data_insert_entry13['DR'] = '0';
                    		$data_insert_entry13['CR'] = $jumlahlpb;
                    		$data_insert_entry13['PERIODE'] = $TGL3;
                    		$data_insert_entry13['REF'] = $refno;
                    		$data_insert_entry13['DESCAC'] = $data_noac13->nama;
                    		$data_insert_entry13['KET'] = $ketgl;
                    		$data_insert_entry13['begindr'] = $akhirdb;
                    		$data_insert_entry13['beginCr'] = $akhirCR;
                    		$data_insert_entry13['module'] = 'LOGISTIK';
                    		$data_insert_entry13['PERIODETXT'] = $txtperiode;
                    		$data_insert_entry13['LOKASI'] = $lokasi;
                    		$data_insert_entry13['TGLINPUT'] = date("Y-m-d H:i:s");

                    		// $this->db_gl_pt->insert('entry', $data_insert_entry13);
		        	    }
        	        }
		        	                            
		        	// batas terakhir mutasi 2
		        }
		        var_dump("oouqow");
			}
			var_dump("wereqweq");
		}

		var_dump("go post bkb");exit();
        $this->_post_bkb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi);
        // Call POST_BKB
	    // End Sub
	}

	function _post_bkb($txtperiode, $KODE, $lokasi, $periode, $ref_lokasi){
		// Sub POST_BKB()
		// Dim ISIDATA As New ADODB.Recordset
		// Dim adjstok As New ADODB.Recordset

		// Dim simpan As New ADODB.Recordset
		// If ISIDATA.State = adStateOpen Then ISIDATA.Close
		// ISIDATA.CursorLocation = adUseClient
		// ISIDATA.CursorType = adOpenStatic
		// ISIDATA.LockType = adLockOptimistic

		// If simpan.State = adStateOpen Then simpan.Close
		// simpan.CursorLocation = adUseClient
		// simpan.CursorType = adOpenStatic
		// simpan.LockType = adLockOptimistic
		// koneksi_gl
		// Me.MousePointer = 11
		// Dim BLN2 As String
		// Dim i, N As Long
		// 'Buat temp distinct kodebar
		// Set wksp = DBEngine.Workspaces(0)   ' set up a transaction buffer
		// wksp.BeginTrans      ' all record set changes are buffered after this
		// 'On Error GoTo roll0
		$query_stockawal = "UPDATE stockawal SET saldoakhir_qty = ((saldoawal_qty + QTY_MASUK) - QTY_KELUAR), saldoakhir_nilai = ((saldoawal_nilai + nilai_masuk ) - (QTY_KELUAR * HARGAPORAT)) WHERE KODE = '$KODE' AND txtperiode = '$txtperiode'";

		$TGLSET3 = date("d/m/Y",strtotime($periode));
        // $TGLSET3 = Format($periode, "dd/mm/yyyy");

		$THN3 = date("Y",strtotime($TGLSET3));
        // $THN3 = Right($TGLSET3, 4);

		$BLN3 = date("m",strtotime($TGLSET3));
        // $BLN3 = Mid($TGLSET3, 4, 2);
        
        $BLN2 = $BLN3;
        if($BLN2 = "01") {
            $BLN2 = "01";
        }
        else {
        	$BLN2 = $BLN2 - 1;
            if($BLN2 > 9) {
                $BLN2 = $BLN2;
            }
            else {
                $BLN2 = "0".$BLN2;
            }
        }

        $TGL3 = "01/".$BLN3."/".$THN3;

        $TGL3 = date("Y-m-d",strtotime($TGL3));
        // $TGL3 = CDate(Format($TGL3, "dd/MM/yyyy"));
        
        $SETTGL2 = $THN3.$BLN3;

		// 'ProgressBar1.Visible = True
		// 'ISIDATA.Open "select * from stockkeluar WHERE cdbl(txtperiode1)='" & CDbl(txtperiode1) & "' and cint(batal)='" & "0" & "' order by skb asc", mydb
		   // LOKASIDATA = mygl.DefaultDatabase & ".MDB"

        // $data_insert_header_entry['PERIODE'] = "";
        // $data_insert_header_entry['REF'] = "";
        // $data_insert_header_entry['MODUL'] = "";
        // $data_insert_header_entry['LOKASI'] = "";
        // $data_insert_header_entry['TOTALDR'] = "";
        // $data_insert_header_entry['TOTALCR'] = "";
        // $data_insert_header_entry['PERIODETXT'] = "";
        // $data_insert_header_entry['SBU'] = "";

        $max_id_header_entry = $this->_get_max_id_header_entry();

		$query_insert_header_entry = "INSERT INTO header_entry (NOID, PERIODE,`date`,REF,MODUL,LOKASI,TOTALDR,TOTALCR,PERIODETXT,SBU) SELECT '$max_id_header_entry', '$TGL3', tgl , ('BKB-'skbtxt),('LOGISTIK'),('$lokasi'),0,0,txtperiode1,('$KODE') FROM  stockkeluar WHERE kode = '$KODE' AND txtperiode1 = '$txtperiode' and batal = '0'";

        $this->db_gl_pt->query($query_insert_header_entry);

		$qtylpb = "0";

		$query_join_keluarbrgitem_stockawal = "SELECT keluarbrgitem.tgl, keluarbrgitem.txttgl, keluarbrgitem.kodebartxt, keluarbrgitem.nabar, keluarbrgitem.satuan, keluarbrgitem.grp, keluarbrgitem.kodept, keluarbrgitem.qty, keluarbrgitem.SKBTXT, keluarbrgitem.NO_REF, keluarbrgitem.kodesub, keluarbrgitem.kodebebantxt, keluarbrgitem.ket,keluarbrgitem.blok, keluarbrgitem.batal, stockawal.HARGAPORAT FROM stockawal INNER JOIN keluarbrgitem ON (stockawal.txtperiode = keluarbrgitem.txtperiode) AND (stockawal.kodebartxt = keluarbrgitem.kodebartxt) WHERE kodept = '$KODE' AND stockawal.txtperiode = '$txtperiode' AND keluarbrgitem.txtperiode = '$txtperiode' AND keluarbrgitem.batal = '0' ORDER BY keluarbrgitem.tgl";

		$get_join_keluarbrgitem_stockawal = $this->db_logistik_pt->query($query_join_keluarbrgitem_stockawal);
		// ISIDATA.Open SQL, mydb
		 
		        // If ISIDATA.RecordCount > 0 Then
		            // ISIDATA.MoveFirst
		if($get_join_keluarbrgitem_stockawal->num_rows() > 0){
		    $i = "1";
		    $N = "0";
		            // ISIDATA.MoveFirst
		            // While Not ISIDATA.EOF
		        // ISIDATA.MoveNext
		            // Wend
		            // ProgressBar1.Max = i
		            // ProgressBar1.Value = 0
		            // ISIDATA.MoveFirst
		            // Command3.Caption = ISIDATA.RecordCount
		    $nabar1 = "";
		    $nabar = "";
		    $NOMINAL2 = "0";
		    $qty2 = "0";

		    foreach ($get_join_keluarbrgitem_stockawal->result() as $list_data) {
		        $i = $i + 1;

		        $nabar1 = "";
		        $nabar = "";
		        $N = $N + 1;
		        $qtylpb = $list_data->qty; // 'qty skb
		        $kodesub = $list_data->kodesub;
		        $ttlhargasat = "0";
		        $ttlqtyttg = "0";
		        $HARGASAT = "0";
		        $NOMINAL = "0";
		        $hargasat1 = "0";
		        $TTLBPO = "0";
		        $KODEPT2 = $list_data->kodept;
		        $tglisi = $list_data->tgl;
		        $TGLTXT = $list_data->txttgl;
		        $nabar1 = $list_data->nabar;
		        
		        $kettrans = $list_data->ket;
		        $bloktrans = $list_data->blok;
		        
		        // 'CEK NILAI DI SALDOAWAL
		        $hargasat1 = $list_data->HARGAPORAT;
		        if($hargasat1 <> 0){
		            // ' hargasat1 = Format(hargasat1, "##,##0.00")
		        }

		        $nabar = $nabar1;
		        $ketgl = "BKB ".$lokasi." : ".$nabar;
		        $refno = "BKB ".$lokasi."-".$list_data->skbtxt;
		        
		        $query_sum ="SELECT SUM(jumharga) as ttlharga, SUM(JUMLAHBPO) AS TTLBPO FROM item_po WHERE kodept = '$KODE' AND kodebar = '$list_data->kodebartxt'";
		     	$get_sum = $this->db_logistik_pt->query($query_sum);
		    	
		    	$data_sum = $get_sum->row();

		    	if($data_sum->TTLBPO <> 0) {
		    		$TTLBPO = CCur($data_sum->TTLBPO / $get_sum->num_rows());
		    	   // ' ttlhargasat = hargasat1 + TTLBPO
		    	}
		    	else {
		    	    $TTLBPO = 0;
		    	    // 'ttlhargasat = hargasat1
		    	}

				// ' ''    If ttlhargasat <> 0 Then
				// '       HARGASAT = ttlhargasat
				// '   ElseIf hargasat1 <> 0 Then
				// '      HARGASAT = hargasat1
				// '  Else
				// '      HARGASAT = 0
				// '   End If

				// '     If HARGASAT <> 0 Then
				   // ' HARGASAT = Format(HARGASAT, "##,##0.00")
				// '   End If
		    	$NOMINAL = ($list_data->qty * $hargasat1);
		    	                
                if($list_data->kodebartxt == "102505990000256") {
					// '
                	// '  NOMINAL2 = NOMINAL + NOMINAL2
                	// '  QTY2 = ISIDATA!qty + QTY2
                }
		    	
		    	if($NOMINAL <> 0)
                    // If simpan.State = adStateOpen Then simpan.Close
                    $get_noac = $this->db_logistik->get_where('noac', array('noac' => $list_data->kodebartxt));
                         // simpan.Open "select * from noac WHERE noac='" & ISIDATA!kodebartxt & "'", mygl
                         // If simpan.RecordCount > 0 Then
                	if($get_noac->num_rows() > 0){
                		$Group = $get_noac->group;
                		$tipe = $get_noac->type;
                		$Level = $get_noac->level;
                		$Generala = $get_noac->general;
                		
                		$BULAN = date("m",strtotime($list_data->tgl));
                		// $BULAN = Format($list_data->tgl, "mm");

                		// $BULAN = CInt($BULAN);

                		$DEBET = "SALDO".$BLN2."D";
                		$KREDIT = "SALDO".$BLN2."C";
                		$akhirdb = simpan([$DEBET]);
                		$akhirCR = simpan([$KREDIT]);
                	}
                    else {
                    	print_r("..Account Persediaan tidak terdaftar di GL!, Proses dibatalkan");
                    	exit();
                    }    
                         // Else
                         //     MsgBox ISIDATA!kodebartxt & "..Account Persediaan tidak terdaftar di GL!, Proses dibatalkan"
                         //     Me.MousePointer = 0
                         //     Unload Me
                         //     Exit Sub
                         // End If
                         
                
                    $ketgl = $ketgl."(".$qtylpb."/".$hargasat1.")";
                   
                    // $query_insert_entry = "INSERT INTO entry (`date`, NOAC, `GROUP`, `TYPE`, `LEVEL`, `GENERAL`, DC, DR, CR, PERIODE, REF, DESCAC, KET, begindr, beginCr, [module], PERIODETXT, LOKASI, TGLINPUT) VALUES ('$list_data->tgl', '$list_data->tglkodebartxt', '$Group', '$tipe', '$Level', '$Generala', 'C', '0', '$NOMINAL', '$TGL3', '$refno', '$list_data->nabar', '$ketgl', '$akhirdb', '$akhirCR', 'LOGISTIK', '$list_data->txttgl', '$lokasi',NOW)";

                    $data_insert_entry14['DATE'] = $list_data->tgl;
                    $data_insert_entry14['NOAC'] = $COABIAYA;
                    $data_insert_entry14['GROUP'] = $Group;
                    $data_insert_entry14['TYPE'] = $tipe;
                    $data_insert_entry14['LEVEL'] = $Level;
                    $data_insert_entry14['GENERAL'] = $Generala;
                    $data_insert_entry14['DC'] = 'D';
                    $data_insert_entry14['DR'] = $jumlahlpb;
                    $data_insert_entry14['CR'] = '0';
                    $data_insert_entry14['PERIODE'] = $TGL3;
                    $data_insert_entry14['REF'] = $refno;
                    $data_insert_entry14['DESCAC'] = $namaaset;
                    $data_insert_entry14['KET'] = $ketgl;
                    $data_insert_entry14['begindr'] = $akhirdb;
                    $data_insert_entry14['beginCr'] = $akhirCR;
                    $data_insert_entry14['module'] = 'LOGISTIK';
                    $data_insert_entry14['PERIODETXT'] = $txtperiode;
                    $data_insert_entry14['LOKASI'] = $lokasi;
                    $data_insert_entry14['TGLINPUT'] = date("Y-m-d H:i:s");

                    // $this->db_gl_pt->insert('entry', $data_insert_entry14);

                       	// 'biaya/HPP (+)
                        
                               // If simpan.State = adStateOpen Then simpan.Close
                              // simpan.Open "select * from noac WHERE  noac='" & kodesub & "'", mygl
                              $get_noac2 = $this->db_logistik->get_where('noac', array('noac' => $kodesub));
                              
                              // If simpan.RecordCount > 0 Then
                              if($get_noac2->num_rows() > 0){
                              	$data_noac2 = $get_noac2->row();
                              	$Group = $data_noac2->group;
                              	$tipe = $data_noac2->type;
                              	$Level = $data_noac2->level;
                              	$Generala = $data_noac2->general;

                              	$BULAN = date("m",strtotime($periode));
                              	// $BULAN = Format($periode, "mm");
                              	
                              	// $BULAN = CInt($BULAN);
                              	
                              	$namaaccount = Trim($data_noac2->nama);
                              	$DEBET = "SALDO".$BLN2."D";
                              	$KREDIT = "SALDO".$BLN2."C";
                              	$akhirdb = simpan([$DEBET]);
                              	$akhirCR = simpan([$KREDIT]);
                              }
                              // Else
                              else {
                                  print_r("..Account Beban BKB tidak terdaftar di GL!, Proses dibatalkan");
                                  exit();
                                  // Me.MousePointer = 0
                                  // Unload Me
                                  // Exit Sub
                              }
                              // End If

                              $data_insert_entry13['DATE'] = $list_data->tgl;
                              $data_insert_entry13['NOAC'] = $kodesub;
                              $data_insert_entry13['GROUP'] = $Group;
                              $data_insert_entry13['TYPE'] = $tipe;
                              $data_insert_entry13['LEVEL'] = $Level;
                              $data_insert_entry13['GENERAL'] = $Generala;
                              $data_insert_entry13['DC'] = 'D';
                              $data_insert_entry13['DR'] = $NOMINAL;
                              $data_insert_entry13['CR'] = '0';
                              $data_insert_entry13['PERIODE'] = $TGL3;
                              $data_insert_entry13['REF'] = $refno;
                              $data_insert_entry13['DESCAC'] = $namaaccount;
                              $data_insert_entry13['KET'] = $ketgl;
                              $data_insert_entry13['begindr'] = $akhirdb;
                              $data_insert_entry13['beginCr'] = $akhirCR;
                              $data_insert_entry13['module'] = 'LOGISTIK';
                              $data_insert_entry13['PERIODETXT'] = $list_data->txttgl;
                              $data_insert_entry13['LOKASI'] = $lokasi;
                              $data_insert_entry13['TGLINPUT'] = date("Y-m-d H:i:s");

                              // $this->db_gl_pt->insert('entry', $data_insert_entry13);
                }
                // End If
		    }
		}               
	}


}