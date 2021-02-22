<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bkb extends CI_Model
{

    function get_list_barang()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar 
                        WHERE kodebar LIKE '%$keyword%'
                        OR nabar LIKE '%$keyword%'
                        OR grp LIKE '%$keyword%'
                        OR satuan LIKE '%$keyword%'
                        ORDER BY nabar ASC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT id, kodebar, nabar, grp, satuan FROM kodebar ORDER BY nabar ASC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = "'" . $hasil->id . "'";
            $row[] = '<a href="javascript:;" id="btn_data_barang">
                    <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
                        Pilih
                    </button>
                </a>
                ';
            $row[] = $no++;
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->grp;
            $row[] = $hasil->satuan;
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

    function get_list_bkbitem()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $nobkb = $this->input->post('nobkb');
        $norefbkb = $this->input->post('norefbkb');

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM keluarbrgitem WHERE (batal <> 1 AND SKBTXT LIKE '%$nobkb%' AND NO_REF LIKE '%$norefbkb%') 
                    AND (SKBTXT LIKE '%$keyword%'
                    OR NO_REF LIKE '%$keyword%'
                    OR kodebartxt LIKE '%$keyword%'
                    OR nabar LIKE '%$keyword%'
                    OR qty LIKE '%$keyword%'
                    OR qty2 LIKE '%$keyword%'
                    OR satuan LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM keluarbrgitem WHERE (batal <> 1 AND SKBTXT LIKE '%$nobkb%' AND NO_REF LIKE '%$norefbkb%') ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobkb = "'" . $hasil->SKBTXT . "'";
            $norefbkb = "'" . $hasil->NO_REF . "'";
            $kodebar = "'" . $hasil->kodebartxt . "'";
            $KTU = "'KTU'";
            $KasieGudang = "'KasieGudang'";
            $KasiePembukuan = "'KasiePembukuan'";

            $setuju = "'setuju'";
            $tidaksetuju = "'tidaksetuju'";
            $mengetahui = "'mengetahui'";
            $revqty = "'revqty'";

            $kode_level_sesi = $this->session->userdata('kode_level');
            // $lokasi = $this->session->userdata('status_lokasi');
            // $user_sesi = $this->session->userdata('user');
            $nobkb_query = $hasil->SKBTXT;
            $norefbkb_query = $hasil->NO_REF;
            $kodebar_query = $hasil->kodebar;
            $qty_diminta = $hasil->qty;

            /***** KasieGudang *****/
            /***************/
            $query_kasie_gudang = "SELECT status_kasie_gudang, tgl_kasie_gudang FROM approval_bkb WHERE status_kasie_gudang <> '0' AND no_bkb = '$nobkb_query' AND no_ref_bkb = '$norefbkb_query' AND kodebar = '$kodebar_query'";
            $get_kasie_gudang = $this->db_logistik_pt->query($query_kasie_gudang)->num_rows();

            if ($get_kasie_gudang > 0) {
                $get_status_approval_kasie_gudang = $this->db_logistik_pt->query($query_kasie_gudang)->row();
                if ($get_status_approval_kasie_gudang->status_kasie_gudang ==  "1") {
                    $konfirmasi_kasie_gudang = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_kasie_gudang->tgl_kasie_gudang . "</strong><br/>";
                } else if ($get_status_approval_kasie_gudang->status_kasie_gudang ==  "2") {
                    $konfirmasi_kasie_gudang = "<strong style='color:red;'>TDK DISETUJUI <br/>" . $get_status_approval_kasie_gudang->tgl_kasie_gudang . "</strong><br/>";
                }
            } else {
                $list_level_approval_kasie_gudang = "SELECT bkb_appr_kasie_gudang FROM list_level_approval WHERE bkb_appr_kasie_gudang = '$kode_level_sesi'";
                $get_appr_kasie_gudang = $this->db_logistik_pt->query($list_level_approval_kasie_gudang)->num_rows();

                if ($this->session->userdata('user')=='Kasie Gudang') {
                // if ($get_appr_kasie_gudang > 0) {
                    // $konfirmasi_kasie_gudang = '<a href="javascript:;" id="a_appproval">
                    //             <button class="btn btn-info btn-xs" id="btn_mengetahui" name="btn_mengetahui" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nobkb.','.$norefbkb.','.$kodebar.','.$KasieGudang.','.$mengetahui.')"> Mengetahui
                    //             </button>
                    //         </a>';
                    /*$konfirmasi_kasie_gudang = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi(' . $nobkb . ',' . $norefbkb . ',' . $kodebar . ',' . $KasieGudang . ',' . $setuju . ')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi(' . $nobkb . ',' . $norefbkb . ',' . $kodebar . ',' . $KasieGudang . ',' . $tidaksetuju . ')">
                                </button>
                            </a>
                            <!--a href="javascript:;" id="a_appproval">
                                <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobkb . ',' . $norefbkb . ',' . $kodebar . ',' . $KasieGudang . ',' . $revqty . ')"> Rev Qty
                                </button>
                            </a-->
                            ';*/
                    $konfirmasi_kasie_gudang = "No Action";
                } else {
                    $konfirmasi_kasie_gudang = "";
                }
            }

            /***** KasiePembukuan *****/
            /***************/
            $query_status_kasie_pembukuan = "SELECT status_kasie_pembukuan, tgl_kasie_pembukuan FROM approval_bkb WHERE status_kasie_pembukuan <> '0' AND no_bkb = '$nobkb_query' AND no_ref_bkb = '$norefbkb_query' AND kodebar = '$kodebar_query'";
            $get_status_kasie_pembukuan = $this->db_logistik_pt->query($query_status_kasie_pembukuan)->num_rows();

            if ($get_status_kasie_pembukuan > 0) {
                $get_status_approval_kasie_pembukuan = $this->db_logistik_pt->query($query_status_kasie_pembukuan)->row();
                if ($get_status_approval_kasie_pembukuan->status_kasie_pembukuan ==  "3") {
                    $konfirmasi_kasie_pembukuan = "<strong style='color:blue;'>MENGETAHUI <br/>" . $get_status_approval_kasie_pembukuan->tgl_kasie_pembukuan . "</strong><br/>";
                }
            } else {
                $list_level_approval_kasie_pembukuan = "SELECT bkb_appr_kasie_pembukuan FROM list_level_approval WHERE bkb_appr_kasie_pembukuan = '$kode_level_sesi'";
                $get_appr_kasie_pembukuan = $this->db_logistik_pt->query($list_level_approval_kasie_pembukuan)->num_rows();

                if ($this->session->userdata('user')=='Kasie Pembukuan') {
                // if ($get_appr_kasie_pembukuan > 0) {
                    /*$konfirmasi_kasie_pembukuan = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_kasie_pembukuan" name="btn_konfirmasi_kasie_pembukuan" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi(' . $nobkb . ',' . $norefbkb . ',' . $kodebar . ',' . $KasiePembukuan . ',' . $mengetahui . ')"> Mengetahui
                                </button>
                            </a>';*/
                    $konfirmasi_kasie_pembukuan = "No Action";
                } else {
                    $konfirmasi_kasie_pembukuan = "";
                }
            }


            // $row[] = '<a href="'.site_url('bkb/detail_bkb/'.$hasil->nobkb.'/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah
            //     <a href="javascript:;" id="a_batal_bkb">
            //         <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bkb" name="btn_batal_bkb" data-toggle="tooltip" data-placement="top" title="Batal bkb" onClick="konfirmasiBatalBPB('.$id.','.$hasil->nobkb.')"> Batal
            //         </button>
            //     </a>
            //     <a href="'.site_url('bkb/cetak/'.$hasil->nobkb.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bkb"> Cetak
            //     </a>
            //     ';
            $row[] = $no++;
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->qty;
            $row[] = $hasil->qty2;
            $row[] = $hasil->satuan;

            // $query_keluarbrgitem = "SELECT nabar FROM keluarbrgitem WHERE nobkb = '$hasil->nobkb'";
            // $data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->result();
            // $data_detail = array();
            // $data_detail_nama = array();
            // foreach ($data_keluarbrgitem as $keluarbrgitem){
            //     array_push($data_detail_nama, $keluarbrgitem->nabar);
            // }
            // $row[] = join(", ",$data_detail_nama);
            // $row[] = $konfirmasi_ktu;
            $row[] = $konfirmasi_kasie_gudang;
            $row[] = $konfirmasi_kasie_pembukuan;
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

    function get_list_acc_beban()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $cmb_no_ac = $this->input->post('cmb_no_ac');
        // var_dump($cmb_no_ac);exit();
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            if ($cmb_no_ac == "-") { // jika Bagian bukan TANAMAN
                $query = "SELECT noid, noac, nama, `group`, type FROM noac 
                            WHERE 
                            -- general = '$cmb_no_ac' AND 
                            (noac LIKE '%$keyword%'
                            OR nama LIKE '%$keyword%'
                            OR type LIKE '%$keyword%'
                            OR `group` LIKE '%$keyword%')
                            ORDER BY noac ASC";
            } else { // jika TANAMAN
                $query = "SELECT noid, noac, nama, `group`, type FROM noac 
                            WHERE 
                            general = '$cmb_no_ac' AND 
                            (noac LIKE '%$keyword%'
                            OR nama LIKE '%$keyword%'
                            OR type LIKE '%$keyword%'
                            OR `group` LIKE '%$keyword%')
                            ORDER BY noac ASC";
            }
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query . " LIMIT $start,$length")->result();
        } else {
            if ($cmb_no_ac == "-") { // jika Bagian bukan TANAMAN
                $query = "SELECT noid, noac, nama, `group`, type FROM noac ORDER BY noac ASC";
            } else {
                $query = "SELECT noid, noac, nama, `group`, type FROM noac WHERE general = '$cmb_no_ac' ORDER BY noac ASC";
            }
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = "'" . $hasil->noid . "'";
            // $row[] = '<a href="javascript:;" id="btn_data_barang">
            //         <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
            //             Pilih
            //         </button>
            //     </a>
            //     ';
            $row[] = $no++;
            $row[] = $hasil->noac;
            $row[] = $hasil->nama;
            $row[] = $hasil->type;
            $row[] = $hasil->group;
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

    function simpan_rinci_bkb()
    {
        // var_dump($_POST);exit();

        // Error Save Data : array(19) {
        //   ["txt_diberikan_kpd"]=>string(16) "diberikan kepada"
        //   ["txt_untuk_keperluan"]=>string(15) "untuk keperluan"
        //   ["txt_tgl_bkb"]=>string(10) "04/04/2019"
        //   ["txt_no_bpb"]=>string(6) "no bpb"
        //   ["cmb_bagian"]=>string(1) "1"
        //   ["cmb_tm_tbm"]=>string(3) "TBM"
        //   ["cmb_afd_unit"]=>string(2) "01"
        //   ["cmb_blok_sub"]=>string(0) ""
        //   ["cmb_tahun_tanam"]=>string(4) "2011"
        //   ["cmb_bahan"]=>string(15) "202401201102100"
        //   ["hidden_no_acc"]=>string(15) "202401201102114"
        //   ["hidden_nama_acc"]=>string(22) "BUAT/ RAWAT TPH MANUAL"
        //   ["hidden_kode_barang"]=>string(15) "102505990000200"
        //   ["hidden_nama_barang"]=>string(15) "AC SPLIT 1.5 PK"
        //   ["hidden_stok_tgl_ini"]=>string(2) "-3"
        //   ["hidden_satuan"]=>string(4) "UNIT"
        //   ["txt_qty_diminta"]=>string(11) "qty diminta"
        //   ["txt_qty_disetujui"]=>string(13) "qty disetujui"
        //   ["txt_ket_rinci"]=>string(11) "ket rinci 1"
        // }
        $sess_lokasi = $this->session->userdata('status_lokasi');

        if ($sess_lokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
            $dig_2 = "6";
        } else if ($sess_lokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
            $dig_2 = "3";
        }

        $query_id_stockkeluar = "SELECT MAX(id)+1 as id_stockkeluar FROM stockkeluar";
        $generate_id_stockkeluar = $this->db_logistik_pt->query($query_id_stockkeluar)->row();
        $id_stockkeluar = $generate_id_stockkeluar->id_stockkeluar;
        if (empty($id_stockkeluar)) {
            $id_stockkeluar = 1;
        }

        $query_id_keluarbrgitem = "SELECT MAX(id)+1 as id_keluarbrgitem FROM keluarbrgitem";
        $generate_id_keluarbrgitem = $this->db_logistik_pt->query($query_id_keluarbrgitem)->row();
        $id_keluarbrgitem = $generate_id_keluarbrgitem->id_keluarbrgitem;
        if (empty($id_keluarbrgitem)) {
            $id_keluarbrgitem = 1;
        }

        $digit = $dig_1 . $dig_2;

        $query_stockkeluar = "SELECT MAX(SUBSTRING(SKBTXT, 3)) as maxid_skb from stockkeluar WHERE SKBTXT LIKE '$digit%'";
        $generate_stockkeluar = $this->db_logistik_pt->query($query_stockkeluar)->row();
        $noUrut_stockkeluar = (int)($generate_stockkeluar->maxid_skb);
        $noUrut_stockkeluar++;
        $print_stockkeluar = sprintf("%05s", $noUrut_stockkeluar);

        $format_m_y = date("m/Y");

        if (empty($this->input->post('hidden_no_bkb'))) {
            $skb = $digit . $print_stockkeluar; //7201159 atau 1200903 atau 6271722 atau 7230088
        } else {
            $skb = $this->input->post('hidden_no_bkb');
        }

        if (empty($this->input->post('hidden_no_ref_bkb'))) {
            $no_ref = $text1 . "-BKB/" . $text2 . "/" . $format_m_y . "/" . $print_stockkeluar; //EST-BKB/SWJ/06/15/001159 atau //EST-BKB/SWJ/10/18/71722
        } else {
            $no_ref = $this->input->post('hidden_no_ref_bkb');
        }

        // $skb = $this->input->post('txt_no_bpb');
        $nobpb = $this->input->post('txt_no_bpb');
        if (empty($nobpb) || $nobpb == "-") {
            $nobpb = $skb;
        }

        $alokasi = $this->input->post('cmb_alokasi_est');

        $tgl = date("Y-m-d", strtotime($this->input->post('txt_tgl_bkb')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_bkb')));

        $sess_periode = $this->session->userdata('periode');
        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode1 = date("Y-m-d",strtotime($sess_periode));
        // $txtperiode = date("Ym",strtotime($sess_periode));
        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_bkb')));

        $kodebar = $this->input->post('hidden_kode_barang');
        $nabar = $this->input->post('hidden_nama_barang');
        $qty = $this->input->post('txt_qty_diminta');
        $qty2 = $this->input->post('txt_qty_disetujui');

        $afd_unit = $this->input->post('cmb_afd_unit');
        $blok = $this->input->post('cmb_blok_sub');
        $satuan = $this->input->post('hidden_satuan');
        $grup_brg = $this->input->post('hidden_grup_barang');

        $datastockkeluar['id']              = $id_stockkeluar;
        $datastockkeluar['tgl']             = $tgl . " 00:00:00";
        $datastockkeluar['skb']             = $skb;
        $datastockkeluar['SKBTXT']          = $skb;
        $datastockkeluar['NO_REF']          = $no_ref;
        $datastockkeluar['nobpb']           = $nobpb;
        $datastockkeluar['mutasi']          = NULL;
        $datastockkeluar['no_mutasi']       = NULL;
        $datastockkeluar['tujuan_mutasi']   = NULL;
        $datastockkeluar['kode_pt_mutasi']  = NULL;
        $datastockkeluar['tglinput']        = date('Y-m-d H:i:s');
        $datastockkeluar['txttgl']          = $txttgl;
        $datastockkeluar['thn']             = $thn;
        $datastockkeluar['periode1']        = $periode1 . " 00:00:00";
        $datastockkeluar['periode2']        = NULL;
        $datastockkeluar['txtperiode1']     = $txtperiode;
        $datastockkeluar['txtperiode2']     = $txtperiode;
        $datastockkeluar['alokasi']         = $alokasi;
        $datastockkeluar['pt']              = $this->session->userdata('pt');
        $datastockkeluar['kode']            = $this->session->userdata('kode_pt');
        $datastockkeluar['kpd']             = $this->input->post('txt_diberikan_kpd');
        $datastockkeluar['keperluan']       = $this->input->post('txt_untuk_keperluan');
        $datastockkeluar['bag']             = $this->input->post('cmb_bagian');
        $datastockkeluar['batal']           = '0';
        $datastockkeluar['USER']            = $this->session->userdata('user');
        $datastockkeluar['SUB']             = NULL;
        $datastockkeluar['USER1']           = NULL;
        $datastockkeluar['cetak']           = '0';
        $datastockkeluar['posting']         = '0';
        $datastockkeluar['approval']        = '0';
        $datastockkeluar['flag_approval']   = '0';

        $datakeluarbrgitem['id']            = $id_keluarbrgitem;
        $datakeluarbrgitem['kodebar']       = $kodebar;
        $datakeluarbrgitem['kodebartxt']    = $kodebar;
        $datakeluarbrgitem['nabar']         = $nabar;
        $datakeluarbrgitem['satuan']        = $satuan;
        $datakeluarbrgitem['grp']           = $grup_brg;
        $datakeluarbrgitem['alokasi']       = $alokasi;
        $datakeluarbrgitem['kodept']        = $this->session->userdata('kode_pt');
        $datakeluarbrgitem['nobpb']         = $this->input->post('txt_no_bpb');
        $datakeluarbrgitem['pt']            = $this->session->userdata('pt');
        $datakeluarbrgitem['afd']           = $afd_unit;
        $datakeluarbrgitem['blok']          = $blok;
        $datakeluarbrgitem['qty']           = $qty;
        $datakeluarbrgitem['qty2']          = $qty2;
        $datakeluarbrgitem['tgl']           = $tgl . " 00:00:00";
        $datakeluarbrgitem['skb']           = $skb;
        $datakeluarbrgitem['SKBTXT']        = $skb;
        $datakeluarbrgitem['NO_REF']        = $no_ref;
        $datakeluarbrgitem['tglinput']      = date('Y-m-d H:i:s');
        $datakeluarbrgitem['txttgl']        = $txttgl;
        $datakeluarbrgitem['thn']           = $thn;
        $datakeluarbrgitem['periode']       = $this->session->userdata('Ymd_periode') . " 00:00:00";
        $datakeluarbrgitem['txtperiode']    = $txtperiode;
        $datakeluarbrgitem['noadjust']      = "0";
        $datakeluarbrgitem['ket']           = $this->input->post('txt_ket_rinci');
        $datakeluarbrgitem['kodebeban']     = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['kodebebantxt']  = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['ketbeban']      = NULL;
        $datakeluarbrgitem['kodesub']       = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['kodesubtxt']    = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['ketsub']        = $this->input->post('hidden_nama_acc');
        $datakeluarbrgitem['batal']         = '0';
        $datakeluarbrgitem['USER']          = $this->session->userdata('user');
        $datakeluarbrgitem['cetak']         = '0';
        $datakeluarbrgitem['posting']       = '0';

        $query_max_id_approval_bkb = "SELECT max(id)+1 as max_id_approval_bkb from approval_bkb";
        $data_max_id_approval_bkb = $this->db_logistik_pt->query($query_max_id_approval_bkb)->row();

        $no_id_approval = $data_max_id_approval_bkb->max_id_approval_bkb;

        if (empty($no_id_approval)) {
            $no_id_approval = "1";
        }

        $data_approval_bkb['id']                        = $no_id_approval;
        $data_approval_bkb['no_bkb']                    = $skb;
        $data_approval_bkb['no_ref_bkb']                = $no_ref;
        $data_approval_bkb['kodebar']                   = $kodebar;
        $data_approval_bkb['nabar']                     = $nabar;
        $data_approval_bkb['qty_diminta']               = $qty2;
        // $data_approval_bkb['qty_disetujui'] = "0";
        $data_approval_bkb['status_ktu']                = "0";
        $data_approval_bkb['tgl_ktu']                   = NULL;
        $data_approval_bkb['ket_ktu']                   = NULL;
        $data_approval_bkb['status_kasie_gudang']       = "0";
        $data_approval_bkb['tgl_kasie_gudang']          = NULL;
        $data_approval_bkb['ket_kasie_gudang']          = NULL;
        $data_approval_bkb['status_kasie_pembukuan']    = "0";
        $data_approval_bkb['tgl_kasie_pembukuan']       = NULL;
        $data_approval_bkb['ket_kasie_pembukuan']       = NULL;

        // $kodebar = $this->input->post('hidden_kode_barang');
        $query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = '$kodebar'";
        $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();

        $no_id = $data_max_id_stock_awal->max_id_stock_awal;
        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $nobpb = $this->input->post('hidden_no_bpb');
        $norefbpb = $this->input->post('hidden_no_ref_bpb');
        $kodebar = $kodebar;

        $dataedit_bpbitem['norefbkb'] = $no_ref;
        $this->db_logistik_pt->set($dataedit_bpbitem);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->update('bpbitem');

        $query_count_bpb_noref = "SELECT norefbkb FROM bpbitem WHERE nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND norefbkb IS NULL";
        $get_count_bpb_noref = $this->db_logistik_pt->query($query_count_bpb_noref);
        // var_dump($get_count_bpb_noref->num_rows());exit();
        if ($get_count_bpb_noref->num_rows() == 0) {
            $dataedit_bpb['flag_bkb'] = "1";
            $this->db_logistik_pt->set($dataedit_bpb);
            $this->db_logistik_pt->where('nobpb', $nobpb);
            $this->db_logistik_pt->where('norefbpb', $norefbpb);
            $this->db_logistik_pt->update('bpb');
        }

        $txtperiode = $this->session->userdata('ym_periode');
        $kodept = $this->session->userdata('kode_pt');

        if (empty($this->input->post('hidden_no_bkb'))) {
            $this->db_logistik_pt->insert('stockkeluar', $datastockkeluar);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_stockkeluar = TRUE;
            } else {
                $bool_stockkeluar = FALSE;
            }

            $this->db_logistik_pt->insert('keluarbrgitem', $datakeluarbrgitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_keluarbrgitem = TRUE;
            } else {
                $bool_keluarbrgitem = FALSE;
            }

            $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) BKB', '$user menambahkan BKB $no_ref dengan barang $kodebar|$nabar', NOW(), '$user','$ip', '$platform' FROM stockawal a WHERE a.id = $no_id AND a.kodebartxt = $kodebar";
            $this->db_logistik_pt->query($query_1);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_stockawalhistory_old = TRUE;
            } else {
                $bool_stockawalhistory_old = FALSE;
            }

            $query_QTY_KELUAR = "SELECT QTY_KELUAR FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
            $get_current_QTY_KELUAR = $this->db_logistik_pt->query($query_QTY_KELUAR)->row();
            $curr_QTY_KELUAR = $get_current_QTY_KELUAR->QTY_KELUAR;

            // $dataedit_stockawal["nilai_masuk"] = 
            // $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty');
            $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('txt_qty_disetujui') + $curr_QTY_KELUAR;

            $this->db_logistik_pt->trans_start();
            $this->db_logistik_pt->set($dataedit_stockawal);
            // $this->db_logistik_pt->where('id', $no_id);
            $this->db_logistik_pt->where('kodebartxt', $kodebar);
            $this->db_logistik_pt->where('KODE', $kodept);
            $this->db_logistik_pt->where('txtperiode', $txtperiode);
            $this->db_logistik_pt->update('stockawal');
            $this->db_logistik_pt->trans_complete();
            // var_dump($this->db_logistik_pt->last_query());exit();

            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_stockawal = TRUE;
            } else {
                if ($this->db_logistik_pt->trans_status() === FALSE) {
                    $bool_stockawal = FALSE;
                } else {
                    $bool_stockawal = TRUE;
                }
            }
            // if ($this->db_logistik_pt->affected_rows() > 0){
            //     $bool_stockawal = TRUE;
            // }
            // else{
            //     $bool_stockawal = FALSE;
            // }

            $this->db_logistik_pt->insert('approval_bkb', $data_approval_bkb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_approval_bkb = TRUE;
            } else {
                $bool_approval_bkb = FALSE;
            }

            $query_id_stok_masuk = "SELECT MAX(id)+1 as id_stok_masuk FROM stokmasuk";
            $generate_id_stok_masuk = $this->db_logistik_pt->query($query_id_stok_masuk)->row();
            $id_stok_masuk = $generate_id_stok_masuk->id_stok_masuk;
            if (empty($id_stok_masuk)) {
                $id_stok_masuk = 1;
            }

            $query_id_masuk_item = "SELECT MAX(id)+1 as id_stok_masuk FROM masukitem";
            $generate_id_masuk_item = $this->db_logistik_pt->query($query_id_masuk_item)->row();
            $id_masuk_item = $generate_id_masuk_item->id_stok_masuk;
            if (empty($id_masuk_item)) {
                $id_masuk_item = 1;
            }

            $acc_beban = $this->input->post('hidden_no_acc');
            $this->_check_insert_to_mutasi($acc_beban, $datastockkeluar, $datakeluarbrgitem);

            if ($bool_keluarbrgitem === TRUE && $bool_stockkeluar === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE) {
                return array('status' => TRUE, 'skb' => $skb, 'id_stockkeluar' => $id_stockkeluar, 'id_keluarbrgitem' => $id_keluarbrgitem, 'no_ref' => $no_ref);
            } else {
                return FALSE;
            }
        } else {
            $kodebar    = $this->input->post('hidden_kode_barang');
            $nabar      = $this->input->post('hidden_nama_barang');

            $query = "SELECT * FROM keluarbrgitem WHERE afd = '$afd_unit' AND blok = '$blok' AND SKBTXT = '$skb' AND NO_REF = '$no_ref' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);

            if ($check_brg->num_rows() > 0) {
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada LPB yang sama ***/
            else {
                $this->db_logistik_pt->insert('keluarbrgitem', $datakeluarbrgitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_keluarbrgitem = TRUE;
                } else {
                    $bool_keluarbrgitem = FALSE;
                }

                $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) BKB', '$user menambahkan BKB $no_ref dengan barang $kodebar|$nabar', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = $no_id AND a.kodebartxt = $kodebar";
                $this->db_logistik_pt->query($query_1);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_stockawalhistory_old = TRUE;
                } else {
                    $bool_stockawalhistory_old = FALSE;
                }

                $query_QTY_KELUAR = "SELECT QTY_KELUAR FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
                $get_current_QTY_KELUAR = $this->db_logistik_pt->query($query_QTY_KELUAR)->row();
                $curr_QTY_KELUAR = $get_current_QTY_KELUAR->QTY_KELUAR;

                // $dataedit_stockawal["nilai_masuk"] = 
                // $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty');
                $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('txt_qty_disetujui') + $curr_QTY_KELUAR;

                $this->db_logistik_pt->trans_start();
                $this->db_logistik_pt->set($dataedit_stockawal);
                // $this->db_logistik_pt->where('id', $no_id);
                $this->db_logistik_pt->where('kodebartxt', $kodebar);
                $this->db_logistik_pt->where('KODE', $kodept);
                $this->db_logistik_pt->where('txtperiode', $txtperiode);
                $this->db_logistik_pt->update('stockawal');
                $this->db_logistik_pt->trans_complete();

                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_stockawal = TRUE;
                } else {
                    if ($this->db_logistik_pt->trans_status() === FALSE) {
                        $bool_stockawal = FALSE;
                    } else {
                        $bool_stockawal = TRUE;
                    }
                }

                // var_dump($this->db_logistik_pt->last_query());exit();
                // if ($this->db->trans_status() === FALSE)
                // {
                //     $bool_stockawal = FALSE;
                // }
                // else {
                //     $bool_stockawal = TRUE;
                // }

                $this->db_logistik_pt->insert('approval_bkb', $data_approval_bkb);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_approval_bkb = TRUE;
                } else {
                    $bool_approval_bkb = FALSE;
                }

                $acc_beban = $this->input->post('hidden_no_acc');
                $this->_check_insert_to_mutasi($acc_beban, NULL, $datakeluarbrgitem);

                if ($bool_keluarbrgitem === TRUE && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE) {
                    return array('status' => TRUE, 'skb' => $skb, 'id_keluarbrgitem' => $id_keluarbrgitem, 'no_ref' => $no_ref);
                } else {
                    return FALSE;
                }
            }
        }
    }

    function get_list_bkb()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND txtperiode1 = " . $periode;

        $filter = $this->input->post('filter');
        $keyfilter1 = "";

        // switch ($filter) {
        //     case "PKS":
        //         $keyfilter1 = "AND lokasi = 'PKS'";
        //         break;
        //     case "SITE":
        //         $keyfilter1 = "AND lokasi = 'SITE'";
        //         break;
        //     case "RO":
        //         $keyfilter1 = "AND lokasi = 'RO'";
        //         break;
        //     case "HO":
        //         $keyfilter1 = "AND lokasi = 'HO'";
        //         break;
        //     default:
        //         $keyfilter1 = "";
        //         break;
        // }
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stockkeluar WHERE (BATAL <> 1) $periode AND (SKBTXT LIKE '%$keyword%' 
                    OR SKBTXT LIKE '%$keyword%'
                    OR NO_REF LIKE '%$keyword%'
                    OR nobpb LIKE '%$keyword%'
                    OR no_mutasi LIKE '%$keyword%'
                    OR bag LIKE '%$keyword%'
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM stockkeluar WHERE BATAL <> 1 $periode ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobkb = "'" . $hasil->SKBTXT . "'";
            $norefbkb = "'" . $hasil->NO_REF . "'";

            // $approval_ktu = "";
            // $approval_kasie_gudang = "";
            // $pembukuan_kasie_pembukuan = "";
            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobkb . ',' . $norefbkb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $print = "";
            } else {
                $print = '<a href="' . site_url('bkb/cetak/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bkb"> Cetak
                </a>';
            }

            $noopsi = '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';

            $row[] = $hasil->USER == $this->session->userdata('user') ? '<a href="' . site_url('bkb/detail_bkb/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail BKB" id="btn_detail_barang"> Ubah
                <a href="javascript:;" id="a_batal_bkb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bkb" name="btn_batal_bkb" data-toggle="tooltip" data-placement="top" title="Batal bkb" onClick="konfirmasiBatalBKB(' . $id . ',' . $hasil->SKBTXT . ')"> Batal
                    </button>
                </a>
                ' . $print : $noopsi;
            $row[] = $no++;
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = $hasil->nobpb;
            $row[] = $hasil->no_mutasi;
            $row[] = $hasil->bag;

            $query_keluarbrgitem = "SELECT nabar FROM keluarbrgitem WHERE SKBTXT = '$hasil->SKBTXT' AND NO_REF = '$hasil->NO_REF'";
            $data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_keluarbrgitem as $keluaritem) {
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $keluaritem->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $row[] = $hasil->keperluan;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->USER;
            // $row[] = $approval_ktu;
            // $row[] = $approval_kasie_gudang;
            // $row[] = $pembukuan_kasie_pembukuan;
            $row[] = $approval;
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

    function get_list_waiting()
    {
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND txtperiode1 = '" . $periode . "'";
        $thisUser = $this->session->userdata('user');
        switch ($thisUser) {
            case "Kasie Gudang":
                $thisUser = "AND approval_kasie = '0'";
                break;
            case "Kasie Pembukuan":
                $thisUser = "AND approval_kasie = '1' AND approval = '0'";
                break;
            default:
                $thisUser = "";
                break;
        }
        $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $thisUser $periode AND flag_approval = '0'";
        $count_all = $this->db_logistik_pt->query($query)->num_rows();
        return $count_all;
    }
    function get_list_approved()
    {
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND txtperiode1 = '" . $periode . "'";
        $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $periode AND flag_approval = '1' ";
        $count_all = $this->db_logistik_pt->query($query)->num_rows();
        return $count_all;
    }

    function get_list_bkb_approved()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND txtperiode1 = " . $periode;

        $filter = $this->input->post('filter');
        $keyfilter1 = "";
        switch ($filter) {
            case "03":
                $keyfilter1 = "AND pt LIKE '%(PKS)%'";
                break;
            case "02":
                $keyfilter1 = "AND pt LIKE '%(RO)%'";
                break;
            case "01":
                $keyfilter1 = "AND pt LIKE '%(HO)%'";
                break;
            case "06":
                $keyfilter1 = "AND NO_REF LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND NO_REF LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $periode $keyfilter1 AND flag_approval = '1' AND approval = '1' AND (SKBTXT LIKE '%$keyword%' 
                    OR SKBTXT LIKE '%$keyword%'
                    OR NO_REF LIKE '%$keyword%'
                    OR nobpb LIKE '%$keyword%'
                    OR no_mutasi LIKE '%$keyword%'
                    OR bag LIKE '%$keyword%'
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $periode $keyfilter1 AND flag_approval = '1' AND approval = '1' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobkb = "'" . $hasil->SKBTXT . "'";
            $norefbkb = "'" . $hasil->NO_REF . "'";

            // $approval_ktu = "";
            // $approval_kasie_gudang = "";
            // $pembukuan_kasie_pembukuan = "";
            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobkb . ',' . $norefbkb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $batal = '<a href="javascript:;" id="a_batal_bkb">
							<button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bkb" name="btn_batal_bkb" data-toggle="tooltip" data-placement="top" title="Batal bkb" onClick="konfirmasiBatalBKB(' . $id . ',' . $hasil->SKBTXT . ')"> Batal</button>
					</a>';
                $ubah = '<a href="' . site_url('bkb/detail_bkb/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail BKB" id="btn_detail_barang"> Ubah</a>';
                $print = "";
            } else {
                $ubah = '';
                $batal = '';
                $print = '<a href="' . site_url('bkb/cetak/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bkb"> Cetak</a>';
            }

            $row[] = $ubah . $batal . $print;
            $row[] = $no++;
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = $hasil->nobpb;
            $row[] = $hasil->no_mutasi;
            $row[] = $hasil->bag;

            $query_keluarbrgitem = "SELECT nabar FROM keluarbrgitem WHERE SKBTXT = '$hasil->SKBTXT' AND NO_REF = '$hasil->NO_REF'";
            $data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_keluarbrgitem as $keluaritem) {
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $keluaritem->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $row[] = $hasil->keperluan;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->USER;
            // $row[] = $approval_ktu;
            // $row[] = $approval_kasie_gudang;
            // $row[] = $pembukuan_kasie_pembukuan;
            $row[] = $approval;
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

    function get_list_bkb_blm_approved()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND txtperiode1 = '" . $periode . "'";
        $thisUser = $this->session->userdata('user');
        switch ($thisUser) {
            case "Kasie Gudang":
                $thisUser = "AND approval_kasie = '0'";
                break;
            case "Kasie Pembukuan":
                $thisUser = "AND approval_kasie = '1' AND approval = '0'";
                break;
            default:
                $thisUser = "";
                break;
        }

        $filter = $this->input->post('filter');
        $keyfilter1 = "";

        // switch ($filter) {
        //     case "PKS":
        //         $keyfilter1 = "AND lokasi = 'PKS'";
        //         break;
        //     case "SITE":
        //         $keyfilter1 = "AND lokasi = 'SITE'";
        //         break;
        //     case "RO":
        //         $keyfilter1 = "AND lokasi = 'RO'";
        //         break;
        //     case "HO":
        //         $keyfilter1 = "AND lokasi = 'HO'";
        //         break;
        //     default:
        //         $keyfilter1 = "";
        //         break;
        // }
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $thisUser $periode AND flag_approval = '0' AND (SKBTXT LIKE '%$keyword%' 
                    OR SKBTXT LIKE '%$keyword%'
                    OR NO_REF LIKE '%$keyword%'
                    OR nobpb LIKE '%$keyword%'
                    OR no_mutasi LIKE '%$keyword%'
                    OR bag LIKE '%$keyword%'
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM stockkeluar WHERE batal <> 1 $thisUser $periode AND flag_approval = '0'  ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobkb = "'" . $hasil->SKBTXT . "'";
            $norefbkb = "'" . $hasil->NO_REF . "'";

            // $approval_ktu = "";
            // $approval_kasie_gudang = "";
            // $pembukuan_kasie_pembukuan = "";
            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobkb . ',' . $norefbkb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $batal = '<a href="javascript:;" id="a_batal_bkb">
							<button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bkb" name="btn_batal_bkb" data-toggle="tooltip" data-placement="top" title="Batal bkb" onClick="konfirmasiBatalBKB(' . $id . ',' . $hasil->SKBTXT . ')"> Batal</button>
					</a>';
                $ubah = '<a href="' . site_url('bkb/detail_bkb/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail BKB" id="btn_detail_barang"> Ubah</a>';
                $print = "";
            } else {
                $ubah = '';
                $batal = '';
                $print = '<a href="' . site_url('bkb/cetak/' . $hasil->SKBTXT . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bkb"> Cetak</a>';
            }

            $noopsi = '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';

            $row[] = $hasil->USER == $this->session->userdata('user') ? $ubah . $batal . $print : $noopsi;
            $row[] = $no++;
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            $row[] = $hasil->nobpb;
            $row[] = $hasil->no_mutasi;
            $row[] = $hasil->bag;

            $query_keluarbrgitem = "SELECT nabar FROM keluarbrgitem WHERE SKBTXT = '$hasil->SKBTXT' AND NO_REF = '$hasil->NO_REF'";
            $data_keluarbrgitem = $this->db_logistik_pt->query($query_keluarbrgitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_keluarbrgitem as $keluaritem) {
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $keluaritem->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $row[] = $hasil->keperluan;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->USER;
            // $row[] = $approval_ktu;
            // $row[] = $approval_kasie_gudang;
            // $row[] = $pembukuan_kasie_pembukuan;
            $row[] = $approval;
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

    function get_list_bpb()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periode = " . $periode;

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM bpb WHERE (BATAL <> 1 $periode AND approval = '1' AND flag_bkb = '0' OR flag_bkb IS NULL) AND (nobpb LIKE '%$keyword%' 
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM bpb WHERE BATAL <> 1 $periode AND approval = '1' AND (flag_bkb = '0' OR flag_bkb IS NULL) ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            // $row[] = '<a href="'.site_url('bpb/detail_bpb/'.$hasil->nobpb.'/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah
            //     <a href="javascript:;" id="a_batal_bpb">
            //         <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB('.$id.','.$hasil->nobpb.')"> Batal
            //         </button>
            //     </a>
            //     <a href="'.site_url('bpb/cetak/'.$hasil->nobpb.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb"> Cetak
            //     </a>
            //     ';
            $row[] = $no++;
            $row[] = $hasil->nobpb;
            $row[] = $hasil->norefbpb;

            $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb' AND norefbkb IS NULL";
            $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_bpbitem as $bpbitem) {
                // $row_detail = array();
                // $row_detail[] = $masukitem->kodebartxt;
                array_push($data_detail_nama, $bpbitem->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $row[] = $hasil->keperluan;
            $row[] = $hasil->tglinput;
            $row[] = $hasil->user;
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

    function ubah_rinci_bkb()
    {
        // var_dump($_POST);exit();

        // Error Update Data : array(24) {
        //   ["txt_diberikan_kpd"]=>string(16) "diberikan kepada"
        //   ["txt_untuk_keperluan"]=>string(15) "untuk keperluan"
        //   ["txt_tgl_bkb"]=>string(10) "04/06/2019"
        //   ["txt_no_bpb"]=>string(6) "no bpb"
        //   ["cmb_bagian"]=>string(1) "1"
        //   ["cmb_alokasi_est"]=>string(2) "03"
        //   ["cmb_tm_tbm"]=>string(3) "TBM"
        //   ["cmb_afd_unit"]=>string(2) "01"
        //   ["cmb_blok_sub"]=>string(0) ""
        //   ["cmb_tahun_tanam"]=>string(4) "2011"
        //   ["cmb_bahan"]=>string(15) "202401201102100"
        //   ["hidden_no_acc"]=>string(15) "202401201102143"
        //   ["hidden_nama_acc"]=>string(21) "KASTRASI DAN SANITASI"
        //   ["hidden_kode_barang"]=>string(15) "102505530000024"
        //   ["hidden_nama_barang"]=>string(19) "59T HELICAL GEAR-TL"
        //   ["hidden_stok_tgl_ini"]=>string(1) "0"
        //   ["hidden_satuan"]=>string(3) "PCS"
        //   ["txt_qty_diminta"]=>string(3) "150"
        //   ["txt_qty_disetujui"]=>string(3) "150"
        //   ["txt_ket_rinci"]=>string(7) "ket 2"
        //   ["hidden_id_keluarbrgitem"]=>string(1) "2"
        //   ["hidden_no_bkb"]=>string(7) "6600002"
        //   ["hidden_id_stok_keluar"]=>string(1) "1"
        //   ["hidden_no_ref_bkb"]=>string(25) "EST-BKB/SWJ/04/2019/00002"
        // }       

        $sess_lokasi = $this->session->userdata('status_lokasi');

        if ($sess_lokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
            $dig_2 = "1";
        } else if ($sess_lokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
            $dig_2 = "6";
        } else if ($sess_lokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
            $dig_2 = "2";
        } else if ($sess_lokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
            $dig_2 = "3";
        }

        $id_stockkeluar = $this->input->post('hidden_id_stok_keluar');

        $id_keluarbrgitem = $this->input->post('hidden_id_keluarbrgitem');

        $skb = $this->input->post('hidden_no_bkb'); //7201159 atau 1200903 atau 6271722 atau 7230088
        $no_ref = $this->input->post('hidden_no_ref_bkb'); //EST-BKB/SWJ/06/15/001159 atau //EST-BKB/SWJ/10/18/71722

        $nobpb = $this->input->post('txt_no_bpb');
        if (empty($nobpb) || $nobpb == "-") {
            $nobpb = $skb;
        }

        $alokasi = $this->input->post('cmb_alokasi_est');

        $tgl = date("Y-m-d", strtotime($this->input->post('txt_tgl_bkb')));
        $thn = date("Y", strtotime($this->input->post('txt_tgl_bkb')));

        $sess_periode = $this->session->userdata('periode');
        $periode1 = $this->session->userdata('Ymd_periode');
        $txtperiode = $this->session->userdata('ym_periode');
        // $periode1 = date("Y-m-d",strtotime($sess_periode));
        // $txtperiode = date("Ym",strtotime($sess_periode));
        $txttgl = date("Ymd", strtotime($this->input->post('txt_tgl_bkb')));
        $kodept = $this->session->userdata('kode_pt');

        $datastockkeluar['id']              = $id_stockkeluar;
        $datastockkeluar['tgl']             = $tgl . " 00:00:00";
        $datastockkeluar['skb']             = $skb;
        $datastockkeluar['SKBTXT']          = $skb;
        $datastockkeluar['NO_REF']          = $no_ref;
        $datastockkeluar['nobpb']           = $nobpb;
        $datastockkeluar['mutasi']          = NULL;
        $datastockkeluar['no_mutasi']       = NULL;
        $datastockkeluar['tujuan_mutasi']   = NULL;
        $datastockkeluar['kode_pt_mutasi']  = NULL;
        // $datastockkeluar['tglinput']        = date('Y-m-d H:i:s');
        $datastockkeluar['txttgl']          = $txttgl;
        $datastockkeluar['thn']             = $thn;
        $datastockkeluar['periode1']        = $periode1 . " 00:00:00";
        $datastockkeluar['periode2']        = NULL;
        $datastockkeluar['txtperiode1']     = $txtperiode;
        $datastockkeluar['txtperiode2']     = $txtperiode;
        $datastockkeluar['alokasi']         = $alokasi;
        $datastockkeluar['pt']              = $this->session->userdata('pt');
        $datastockkeluar['kode']            = $this->session->userdata('kode_pt');
        $datastockkeluar['kpd']             = $this->input->post('txt_diberikan_kpd');
        $datastockkeluar['keperluan']       = $this->input->post('txt_untuk_keperluan');
        $datastockkeluar['bag']             = $this->input->post('cmb_bagian');
        $datastockkeluar['batal']           = '0';
        $datastockkeluar['USER']            = $this->session->userdata('user');
        $datastockkeluar['SUB']             = NULL;
        $datastockkeluar['USER1']           = NULL;
        $datastockkeluar['cetak']           = '0';
        $datastockkeluar['posting']         = '0';

        $datakeluarbrgitem['id']            = $id_keluarbrgitem;
        $datakeluarbrgitem['kodebar']       = $this->input->post('hidden_kode_barang');
        $datakeluarbrgitem['kodebartxt']    = $this->input->post('hidden_kode_barang');
        $datakeluarbrgitem['nabar']         = $this->input->post('hidden_nama_barang');
        $datakeluarbrgitem['satuan']        = $this->input->post('hidden_satuan');
        $datakeluarbrgitem['grp']           = $this->input->post('hidden_grup_barang');
        $datakeluarbrgitem['alokasi']       = $alokasi;
        $datakeluarbrgitem['kodept']        = $this->session->userdata('kode_pt');
        $datakeluarbrgitem['nobpb']         = $this->input->post('txt_no_bpb');
        $datakeluarbrgitem['pt']            = $this->session->userdata('pt');
        // $datakeluarbrgitem['pt']            = $this->session->userdata('app_pt')." ".$this->session->userdata('status_lokasi');
        $datakeluarbrgitem['afd']           = $this->input->post('cmb_afd_unit');
        $datakeluarbrgitem['blok']          = $this->input->post('cmb_blok_sub');
        $datakeluarbrgitem['qty']           = $this->input->post('txt_qty_diminta');
        $datakeluarbrgitem['qty2']          = $this->input->post('txt_qty_disetujui');
        $datakeluarbrgitem['tgl']           = $tgl . " 00:00:00";
        $datakeluarbrgitem['skb']           = $skb;
        $datakeluarbrgitem['SKBTXT']        = $skb;
        $datakeluarbrgitem['NO_REF']        = $no_ref;
        // $datakeluarbrgitem['tglinput']      = date('Y-m-d H:i:s');
        $datakeluarbrgitem['txttgl']        = $txttgl;
        $datakeluarbrgitem['thn']           = $thn;
        $datakeluarbrgitem['periode']       = $this->session->userdata('Ymd_periode') . " 00:00:00";
        $datakeluarbrgitem['txtperiode']    = $txtperiode;
        $datakeluarbrgitem['noadjust']      = "0";
        $datakeluarbrgitem['ket']           = $this->input->post('txt_ket_rinci');
        $datakeluarbrgitem['kodebeban']     = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['kodebebantxt']  = $this->input->post('cmb_bahan');
        $datakeluarbrgitem['ketbeban']      = NULL;
        $datakeluarbrgitem['kodesub']       = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['kodesubtxt']    = $this->input->post('hidden_no_acc');
        $datakeluarbrgitem['ketsub']        = $this->input->post('hidden_nama_acc');
        $datakeluarbrgitem['batal']         = '0';
        $datakeluarbrgitem['USER']          = $this->session->userdata('user');
        $datakeluarbrgitem['cetak']         = '0';
        $datakeluarbrgitem['posting']       = '0';

        $this->db_logistik_pt->set($datastockkeluar);
        $this->db_logistik_pt->where('id', $id_stockkeluar);
        $this->db_logistik_pt->where('SKBTXT', $skb);
        $this->db_logistik_pt->where('NO_REF', $no_ref);
        $this->db_logistik_pt->update('stockkeluar');
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_stockkeluar = TRUE;
        } else {
            $bool_stockkeluar = FALSE;
        }

        $this->db_logistik_pt->set($datakeluarbrgitem);
        $this->db_logistik_pt->where('id', $id_keluarbrgitem);
        $this->db_logistik_pt->where('SKBTXT', $skb);
        $this->db_logistik_pt->where('NO_REF', $no_ref);
        $this->db_logistik_pt->update('keluarbrgitem');
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_keluarbrgitem = TRUE;
        } else {
            $bool_keluarbrgitem = FALSE;
        }

        $kodebar = $this->input->post('hidden_kode_barang');
        $nabar = $this->input->post('hidden_nama_barang');
        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = '$kodebar'";
        $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();
        $no_id = $data_max_id_stock_awal->max_id_stock_awal;

        $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) LPB', '$user mengupdate BKB $no_ref dengan barang $kodebar|$nabar', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = $no_id AND a.kodebartxt = $kodebar";
        $this->db_logistik_pt->query($query_1);
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_stockawalhistory_old = TRUE;
        } else {
            $bool_stockawalhistory_old = FALSE;
        }

        $query_QTY_KELUAR = "SELECT QTY_KELUAR FROM stockawal WHERE kodebartxt = '$kodebar' AND KODE = '$kodept' AND txtperiode = '$txtperiode'";
        $get_current_QTY_KELUAR = $this->db_logistik_pt->query($query_QTY_KELUAR)->row();
        $curr_QTY_KELUAR = $get_current_QTY_KELUAR->QTY_KELUAR;

        // $dataedit_stockawal["nilai_masuk"] = 
        // $dataedit_stockawal["QTY_MASUK"] = $this->input->post('txt_qty');
        $dataedit_stockawal["QTY_KELUAR"] = $this->input->post('txt_qty_disetujui') + $curr_QTY_KELUAR;

        $this->db_logistik_pt->set($dataedit_stockawal);
        // $this->db_logistik_pt->where('id', $no_id);
        $this->db_logistik_pt->where('kodebartxt', $kodebar);
        $this->db_logistik_pt->where('KODE', $kodept);
        $this->db_logistik_pt->where('txtperiode', $txtperiode);
        $this->db_logistik_pt->update('stockawal');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_stockawal = TRUE;
        } else {
            $bool_stockawal = FALSE;
        }

        $acc_beban = $this->input->post('hidden_no_acc');
        // $this->_check_insert_to_mutasi($acc_beban, $datastockkeluar, $datakeluarbrgitem);

        if ($bool_keluarbrgitem === TRUE && $bool_stockkeluar === TRUE  && $bool_stockawal === TRUE && $bool_stockawalhistory_old === TRUE) {
            return array('status' => TRUE, 'skb' => $skb, 'id_stockkeluar' => $id_stockkeluar, 'id_keluarbrgitem' => $id_keluarbrgitem, 'no_ref' => $no_ref);
        } else {
            return FALSE;
        }
    }

    function get_list_po()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

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
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po WHERE tglpo LIKE '%$keyword%'
                    OR noreftxt LIKE '%$keyword%' 
                    OR nopotxt LIKE '%$keyword%'
                    OR tglpotxt LIKE '%$keyword%'
                    OR nama_supply LIKE '%$keyword%'
                    OR ket LIKE '%$keyword%'
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT id, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tglpo, tglpotxt, tglppo, tglppotxt, ket, noreftxt FROM po ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
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

    function get_appr_rev_qty_bpb()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;


        $no_bpb = $this->input->post('no_bpb');
        $norefbpb = $this->input->post('norefbpb');

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM approval_bpb WHERE flag_req_rev_qty = 1 
                    AND (no_bpb LIKE '%$keyword%'
                    OR norefbpb LIKE '%$keyword%'
                    OR kodebar LIKE '%$keyword%'
                    OR nabar LIKE '%$keyword%'
                    OR qty_diminta LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM approval_bpb WHERE flag_req_rev_qty = '1' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $no_bpb = "'" . $hasil->no_bpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";
            $kodebar = "'" . $hasil->kodebar . "'";

            $kode_level_sesi = $this->session->userdata('kode_level');
            // $lokasi = $this->session->userdata('status_lokasi');
            // $user_sesi = $this->session->userdata('user');
            $nobpb_query = $hasil->no_bpb;
            $norefbpb_query = $hasil->norefbpb;
            $kodebar_query = $hasil->kodebar;
            $qty_diminta = $hasil->qty_diminta;

            $konfirmasi_ktu = '<button class="btn btn-xs btn-warning" id="btn_appr_req_rev_qty" name="btn_appr_req_rev_qty" type="button" data-toggle="tooltip" data-placement="right" title="Approve Rev Qty" onclick="ApprReqRevQty(' . $no_bpb . ',' . $norefbpb . ',' . $kodebar . ')">Approve Rev Qty</button>';

            $row[] = $no++;
            $row[] = $hasil->no_bpb;
            $row[] = $hasil->norefbpb;
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->qty_diminta;
            $row[] = $hasil->user_req_rev_qty;
            // $row[] = $hasil->satuan;

            // $query_bpbitem = "SELECT nabar FROM bpbitem WHERE no_bpb = '$hasil->no_bpb'";
            // $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();
            // $data_detail = array();
            // $data_detail_nama = array();
            // foreach ($data_bpbitem as $bpbitem){
            //     array_push($data_detail_nama, $bpbitem->nabar);
            // }
            // $row[] = join(", ",$data_detail_nama);
            $row[] = $konfirmasi_ktu;
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

    function _check_insert_to_mutasi($acc_beban, $datastockkeluar, $datakeluarbrgitem)
    {
        switch ($acc_beban) {
            case '102005010100000': // PT PEAK
                if (!empty($datastockkeluar)) {
                    $this->db_logistik_peak->insert('stockkeluar_mutasi', $datastockkeluar);
                }
                $this->db_logistik_peak->insert('keluarbrgitem_mutasi', $datakeluarbrgitem);
                break;
            case '102005010200000': // PT PSAM
                if (!empty($datastockkeluar)) {
                    $this->db_logistik_psam->insert('stockkeluar_mutasi', $datastockkeluar);
                }
                $this->db_logistik_psam->insert('keluarbrgitem_mutasi', $datakeluarbrgitem);
                break;
            case '102005010300000': // PT MAPA
                if (!empty($datastockkeluar)) {
                    $this->db_logistik_mapa->insert('stockkeluar_mutasi', $datastockkeluar);
                }
                $this->db_logistik_mapa->insert('keluarbrgitem_mutasi', $datakeluarbrgitem);
                break;
            case '102005010700000': // PT MSAL
                if (!empty($datastockkeluar)) {
                    $this->db_logistik_msal->insert('stockkeluar_mutasi', $datastockkeluar);
                }
                $this->db_logistik_msal->insert('keluarbrgitem_mutasi', $datakeluarbrgitem);
                break;
            default:
                # code...
                break;
        }
    }

    // function get_list_barang(){
    //     $data = array();
    //     $start = $_POST['start'];
    //     $length = $_POST['length'];
    //     $no = $start+1;

    //     $no_po = $this->input->post('no_po');
    //     $no_ref_po = $this->input->post('no_ref_po');

    //     if(!empty($_POST['search']['value'])){
    //         $keyword = $_POST['search']['value'];
    //         $query = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE (nopotxt = '$no_po' AND noref = '$no_ref_po')
    //             AND (kodebartxt LIKE '%$keyword%'
    //             OR nabar LIKE '%$keyword%'
    //             OR qty LIKE '%$keyword%'
    //             OR sat LIKE '%$keyword%'
    //             OR ket LIKE '%$keyword%')
    //             ORDER BY id DESC";
    //         $count_all = $this->db_logistik_pt->query($query)->num_rows();
    //         $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
    //     }
    //     else{
    //         $query = "SELECT id, nopotxt, noppotxt, refppo, noref, kodebartxt, nabar, qty, sat, ket FROM item_po WHERE nopotxt = '$no_po' AND noref = '$no_ref_po' ORDER BY id DESC";
    //         $count_all = $this->db_logistik_pt->query($query)->num_rows();
    //         $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
    //     }

    //     foreach ($data_tabel as $hasil) {
    //         $row   = array();
    //         $id = $hasil->id;

    //         $row[] = $no++;
    //         $row[] = $hasil->kodebartxt;
    //         $row[] = $hasil->nabar;
    //         $row[] = $hasil->qty;
    //         $row[] = $hasil->sat;
    //         $row[] = $hasil->ket;
    //         $data[] = $row;
    //     }
    //     $output = array(
    //         "draw"              => $_POST['draw'], 
    //         "recordsTotal"      => $count_all, 
    //         "recordsFiltered"   => $count_all, 
    //         "data"              => $data, 
    //     );
    //     return $output;   
    // }
}
