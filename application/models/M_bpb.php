<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bpb extends CI_Model
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

    function get_list_waiting()
    {
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periode = '" . $periode . "'";
        $thisUser = $this->session->userdata('user');
        switch ($thisUser) {
            case "Asisten Afdeling":
                $thisUser = "AND approval_afd = '0'";
                break;
            case "Kepala Kebun":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '0'";
                break;
            case "Kasie Agronomi":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '0'";
                break;
            case "KTU":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '1' AND approval = '0'";
                break;
            case "GM":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '1' AND approval = '1' AND approval_gm = '0'";
                break;
            default:
                $thisUser = "";
                break;
        }
        $query = "SELECT * FROM bpb WHERE batal <> 1 $thisUser $periode AND flag_approval = '0' ORDER BY id DESC";
        return $count_all = $this->db_logistik_pt->query($query)->num_rows();
    }

    function get_list_approved()
    {
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periode = '" . $periode . "'";
        $query = "SELECT * FROM bpb WHERE batal <> 1 $periode AND flag_approval = '1' ORDER BY id DESC";
        return $count_all = $this->db_logistik_pt->query($query)->num_rows();
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
            $query = "SELECT * FROM bpb WHERE BATAL <> $periode 1 AND nobpb LIKE '%$keyword%' 
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%'
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM bpb WHERE BATAL <> 1 $periode ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";

            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-primary btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobpb . ',' . $norefbpb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $print = "";
                $ubah = '<a href="' . site_url('bpb/detail_bpb/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah';
                $batal = '<a href="javascript:;" id="a_batal_bpb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB(' . $id . ',' . $hasil->nobpb . ')"> Batal
                    </button>
                </a>';
            } else {
                $print = '<a href="' . site_url('bpb/cetak/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb"> Cetak
                </a>';
                $ubah = "";
                $batal = "";
            }

            /*if($hasil->user == $this->session->userdata('user')|| $hasil->approval=='1'){
				if($hasil->flag_approval=='0'){
					$ops = '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';
				}else{
					
				}
			}*/

            $row[] = $hasil->user == $this->session->userdata('user') ? $ubah . $batal . $print : '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';
            $row[] = $no++;
            $row[] = $hasil->nobpb;

            $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
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
            // $row[] = $approval_ktu;
            // $row[] = $approval_mgr;
            // $row[] = $approval_gm;
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

    function get_list_bpb_approval()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
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
                $keyfilter1 = "AND norefbpb LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND norefbpb LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periode = '" . $periode . "'";
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM bpb WHERE batal <> 1 $periode $keyfilter1 AND approval = '1' AND flag_approval = '1' AND (nobpb LIKE '%$keyword%' 
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM bpb WHERE batal <> 1 $periode $keyfilter1 AND approval = '1' AND flag_approval = '1' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";

            // $data_approval = $this->db_logistik_pt->get_where('approval_bpb', array('no_bpb' => $nobpb , 'norefbpb' => $norefbpb, 'kodebar' => $kodebar))->row();

            // if(){
            //     $approval_ktu = "";

            // }
            // $approval_ktu = "";
            // $approval_mgr = "";
            // $approval_gm = "";
            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-success btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobpb . ',' . $norefbpb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $print = "";
                $ubah = '<a href="' . site_url('bpb/detail_bpb/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah';
                $batal = '<a href="javascript:;" id="a_batal_bpb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB(' . $id . ',' . $hasil->nobpb . ')"> Batal
                    </button>
                </a>';
            } else {
                $print = '<a href="' . site_url('bpb/cetak/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb"> Cetak
                </a>';
                $ubah = "";
                $batal = "";
            }

            $row[] = $ubah . $batal . $print;
            $row[] = $no++;
            $row[] = $hasil->nobpb;

            $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
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
            // $row[] = $approval_ktu;
            // $row[] = $approval_mgr;
            // $row[] = $approval_gm;
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

    function get_list_bpb_blm_approval()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periode = '" . $periode . "'";
        $thisUser = $this->session->userdata('user');
        switch ($thisUser) {
            case "Asisten Afdeling":
                $thisUser = "AND approval_afd = '0'";
                break;
            case "Kepala Kebun":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '0'";
                break;
            case "Kasie Agronomi":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '0'";
                break;
            case "KTU":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '1' AND approval = '0'";
                break;
            case "GM":
                $thisUser = "AND approval_afd = '1' AND approval_kpl_kbn = '1' AND approval_kasie = '1'  AND approval = '1' AND approval_gm = '0'";
                break;
            default:
                $thisUser = "";
                break;
        }
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
                $keyfilter1 = "AND norefbpb LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND norefbpb LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM bpb WHERE batal <> 1 $thisUser $periode $keyfilter1 AND flag_approval = '0'  AND (nobpb LIKE '%$keyword%' 
                    OR keperluan LIKE '%$keyword%'
                    OR tglinput LIKE '%$keyword%'
                    OR USER LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM bpb WHERE batal <> 1 $thisUser $periode $keyfilter1 AND flag_approval = '0' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";
            $approval = '<a href="javascript:;" id="a_appproval">
                            <button class="btn btn-success btn-xs" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalListApproval(' . $nobpb . ',' . $norefbpb . ')"> Approval
                            </button>
                        </a>';
            if (empty($hasil->approval) || $hasil->approval == "0") {
                $print = "";
                $ubah = '<a href="' . site_url('bpb/detail_bpb/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Detail LPB" id="btn_detail_barang"> Ubah';
                $batal = '<a href="javascript:;" id="a_batal_bpb">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_bpb" name="btn_batal_bpb" data-toggle="tooltip" data-placement="top" title="Batal bpb" onClick="konfirmasiBatalBPB(' . $id . ',' . $hasil->nobpb . ')"> Batal
                    </button>
                </a>';
            } else {
                if ($hasil->user == $this->session->userdata('user')) {
                } else {
                }
                $print = '<a href="' . site_url('bpb/cetak/' . $hasil->nobpb . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_bpb"> Cetak
                </a>';
                $ubah = "";
                $batal = "";
            }

            $row[] = $hasil->user == $this->session->userdata('user') ? $ubah . $batal . $print : '<a href="javascript:;"><button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" > No Option</button></a>';
            $row[] = $no++;
            $row[] = $hasil->nobpb;

            $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
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
            // $row[] = $approval_ktu;
            // $row[] = $approval_mgr;
            // $row[] = $approval_gm;
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

    function get_list_bpbitem()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $nobpb = $this->input->post('nobpb');
        $norefbpb = $this->input->post('norefbpb');

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM bpbitem WHERE (batal <> 1 AND nobpb LIKE '%$nobpb%' AND norefbpb LIKE '%$norefbpb%') 
                    AND (nobpb LIKE '%$keyword%'
                    OR norefbpb LIKE '%$keyword%'
                    OR kodebar LIKE '%$keyword%'
                    OR nabar LIKE '%$keyword%'
                    OR qty LIKE '%$keyword%'
                    OR satuan LIKE '%$keyword%')
                ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM bpbitem WHERE (batal <> 1 AND nobpb LIKE '%$nobpb%' AND norefbpb LIKE '%$norefbpb%') ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $nobpb = "'" . $hasil->nobpb . "'";
            $norefbpb = "'" . $hasil->norefbpb . "'";
            $kodebar = "'" . $hasil->kodebar . "'";

            $AsistenAfd = "'AsistenAfd'";
            $KepalaKebun = "'KepalaKebun'";
            $KasieAgronomi = "'KasieAgronomi'";
            $KTU = "'KTU'";
            $GM = "'GM'";

            $setuju = "'setuju'";
            $tidaksetuju = "'tidaksetuju'";
            $mengetahui = "'mengetahui'";
            $revqty = "'revqty'";

            $kode_level_sesi = $this->session->userdata('kode_level');
            // $lokasi = $this->session->userdata('status_lokasi');
            // $user_sesi = $this->session->userdata('user');
            $nobpb_query = $hasil->nobpb;
            $norefbpb_query = $hasil->norefbpb;
            $kodebar_query = $hasil->kodebar;
            $qty_diminta = $hasil->qty;

            /***** ASISTEN AFD *****/
            /***************/
            $query_status_asisten_afd = "SELECT status_asisten_afd, tgl_asisten_afd FROM approval_bpb WHERE status_asisten_afd <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd);
            if ($get_status_asisten_afd->num_rows() > 0) {
                $get_status_approval_asisten_afd = $this->db_logistik_pt->query($query_status_asisten_afd)->row();
                if ($get_status_approval_asisten_afd->status_asisten_afd ==  "1") {
                    $konfirmasi_asisten_afd = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                } else if ($get_status_approval_asisten_afd->status_asisten_afd ==  "2") {
                    $konfirmasi_asisten_afd = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_asisten_afd->tgl_asisten_afd . "</strong><br/>";
                }
            } else {
                $list_level_approval_asisten_afd = "SELECT bpb_appr_asisten_afd FROM list_level_approval WHERE bpb_appr_asisten_afd = '$kode_level_sesi'";
                $get_appr_asisten_afd = $this->db_logistik_pt->query($list_level_approval_asisten_afd)->num_rows();

                if ($this->session->userdata('user') == 'Asisten Afdeling') {
                // if ($get_appr_asisten_afd > 0) {
                    /*$konfirmasi_asisten_afd = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$AsistenAfd.','.$setuju.')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$AsistenAfd.','.$tidaksetuju.')">
                                </button>
                            </a>
                            <!--a href="javascript:;" id="a_appproval">
                                <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty('.$nobpb.','.$norefbpb.','.$kodebar.','.$AsistenAfd.','.$revqty.')"> Rev Qty
                                </button>
                            </a-->
                            ';*/
                    $konfirmasi_asisten_afd = "No Action";
                } else {
                    $konfirmasi_asisten_afd = "";
                }
            }

            /***** KEPALA KEBUN *****/
            /***************/
            $query_status_kepala_kebun = "SELECT status_kepala_kebun, tgl_kepala_kebun FROM approval_bpb WHERE status_kepala_kebun <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_kepala_kebun = $this->db_logistik_pt->query($query_status_kepala_kebun)->num_rows();
            if ($get_status_kepala_kebun > 0) {
                $get_status_approval_kepala_kebun = $this->db_logistik_pt->query($query_status_kepala_kebun)->row();
                // var_dump($get_status_approval_kepala_kebun->status_kepala_kebun);
                if ($get_status_approval_kepala_kebun->status_kepala_kebun ==  "1") {
                    // var_dump($get_status_approval_kepala_kebun->status_kepala_kebun);
                    $konfirmasi_kepala_kebun = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_kepala_kebun->tgl_kepala_kebun . "</strong><br/>";
                } else if ($get_status_approval_kepala_kebun->status_kepala_kebun ==  "2") {
                    $konfirmasi_kepala_kebun = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_kepala_kebun->tgl_kepala_kebun . "</strong><br/>";
                }
            } else {
                $list_level_approval_kepala_kebun = "SELECT bpb_appr_kepala_kebun FROM list_level_approval WHERE bpb_appr_kepala_kebun = '$kode_level_sesi'";
                $get_appr_kepala_kebun = $this->db_logistik_pt->query($list_level_approval_kepala_kebun)->num_rows();

                if ($this->session->userdata('user') == 'Kepala Kebun') {
                // if ($get_appr_kepala_kebun > 0) {
                    /*$konfirmasi_kepala_kebun = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$KepalaKebun.','.$setuju.')">
                                </button>
                            </a>
                            <a href="javascript:;" id="a_appproval">
                                <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$KepalaKebun.','.$tidaksetuju.')">
                                </button>
                            </a>*/
                    $konfirmasi_kepala_kebun = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KepalaKebun . ',' . $revqty . ')"> Rev Qty
                                </button>
                            </a>
                            ';
                } else {
                    $konfirmasi_kepala_kebun = "";
                }
            }

            /***** KASIE AGRONOMI *****/
            /***************/
            $query_status_kasie_agronomi = "SELECT status_kasie_agronomi, tgl_kasie_agronomi FROM approval_bpb WHERE status_kasie_agronomi <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_kasie_agronomi = $this->db_logistik_pt->query($query_status_kasie_agronomi)->num_rows();

            if ($get_status_kasie_agronomi > 0) {
                $get_status_approval_kasie_agronomi = $this->db_logistik_pt->query($query_status_kasie_agronomi)->row();
                if ($get_status_approval_kasie_agronomi->status_kasie_agronomi ==  "3") {
                    $konfirmasi_kasie_agronomi = "<strong style='color:blue;'>MENGETAHUI <br/>" . $get_status_approval_kasie_agronomi->tgl_kasie_agronomi . "</strong><br/>";
                }
            } else {
                $list_level_approval_kasie_agronomi = "SELECT bpb_appr_kasie_agronomi FROM list_level_approval WHERE bpb_appr_kasie_agronomi = '$kode_level_sesi'";
                $get_appr_kasie_agronomi = $this->db_logistik_pt->query($list_level_approval_kasie_agronomi)->num_rows();

                if ($this->session->userdata('user') == 'Kasie Agronomi') {
                // if ($get_appr_kasie_agronomi > 0) {
                    /*$konfirmasi_kasie_agronomi = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_kasie_agronomi" name="btn_konfirmasi_kasie_agronomi" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$KasieAgronomi.','.$mengetahui.')"> Mengetahui
                                </button>
                            </a>';*/
                    $konfirmasi_kasie_agronomi = "No Action";
                } else {
                    $konfirmasi_kasie_agronomi = "";
                }
            }

            /***** KTU *****/
            /***************/
            // $query_status_ktu = "SELECT status_ktu, tgl_ktu FROM approval_bpb WHERE (status_ktu <> '0' AND status_asisten_afd = '1' AND status_kepala_kebun = '1') AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $query_status_ktu = "SELECT status_asisten_afd, status_kepala_kebun, status_ktu, tgl_ktu FROM approval_bpb WHERE status_ktu <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_ktu = $this->db_logistik_pt->query($query_status_ktu);
            if ($get_status_ktu->num_rows() > 0) {
                $get_status_approval_ktu = $this->db_logistik_pt->query($query_status_ktu)->row();
                if ($get_status_approval_ktu->status_ktu ==  "1") {
                    $konfirmasi_ktu = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_ktu->tgl_ktu . "</strong><br/>";
                } else if ($get_status_approval_ktu->status_ktu ==  "2") {
                    $konfirmasi_ktu = "<strong style='color:red'>TDK DISETUJUI <br/>" . $get_status_approval_ktu->tgl_ktu . "</strong><br/>";
                }
            } else {
                $query_status_asisten_afd_kabun = "SELECT status_asisten_afd, status_kepala_kebun, status_ktu, tgl_ktu FROM approval_bpb WHERE status_ktu = '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
                $get_status_asisten_afd_kabun = $this->db_logistik_pt->query($query_status_asisten_afd_kabun)->row();

                // jika sudah disetujui Asisten AFD dan Kepala Kebun
                if (isset($get_status_asisten_afd_kabun)) {
                    if ($get_status_asisten_afd_kabun->status_asisten_afd == "1" && $get_status_asisten_afd_kabun->status_kepala_kebun == "1") {
                        $list_level_approval_ktu = "SELECT bpb_appr_ktu FROM list_level_approval WHERE bpb_appr_ktu = '$kode_level_sesi'";
                        $get_appr_ktu = $this->db_logistik_pt->query($list_level_approval_ktu)->num_rows();

                        if ($this->session->userdata('user') == 'KTU') {
                        // if ($get_appr_ktu > 0) {
                            /*$konfirmasi_ktu = '<a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-success btn-xs fa fa-check" id="btn_setuju" name="btn_setuju" data-toggle="tooltip" data-placement="top" title="Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$KTU.','.$setuju.')">
                                        </button>
                                    </a>
                                    <a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-danger btn-xs fa fa-times" id="btn_tdk_setuju" name="btn_tdk_setuju" data-toggle="tooltip" data-placement="top" title="Tdk Setuju" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$KTU.','.$tidaksetuju.')">
                                        </button>
                                    </a>*/
                            $konfirmasi_ktu = '<a href="javascript:;" id="a_appproval">
                                        <button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="revQty(' . $nobpb . ',' . $norefbpb . ',' . $kodebar . ',' . $KTU . ',' . $revqty . ')"> Rev Qty
                                        </button>
                                    </a>
                                    ';
                        } else {
                            $konfirmasi_ktu = "";
                        }
                    } else {
                        $konfirmasi_ktu = "";
                    }
                } else {
                    $konfirmasi_ktu = "";
                }
            }

            /***** GM *****/
            /***************/
            $query_status_gm = "SELECT status_gm, tgl_gm FROM approval_bpb WHERE status_gm <> '0' AND no_bpb = '$nobpb_query' AND norefbpb = '$norefbpb_query' AND kodebar = '$kodebar_query'";
            $get_status_gm = $this->db_logistik_pt->query($query_status_gm)->num_rows();

            if ($get_status_gm > 0) {
                $get_status_approval_gm = $this->db_logistik_pt->query($query_status_gm)->row();
                if ($get_status_approval_gm->status_gm ==  "3") {
                    $konfirmasi_gm = "<strong style='color:blue;'>MENGETAHUI <br/>" . $get_status_approval_gm->tgl_gm . "</strong><br/>";
                }
            } else {
                $list_level_approval_gm = "SELECT bpb_appr_gm FROM list_level_approval WHERE bpb_appr_gm = '$kode_level_sesi'";
                $get_appr_gm = $this->db_logistik_pt->query($list_level_approval_gm)->num_rows();

                if ($this->session->userdata('user') == 'GM') {
                // if ($get_appr_gm > 0) {
                    /*$konfirmasi_gm = '<a href="javascript:;" id="a_appproval">
                                <button class="btn btn-info btn-xs" id="btn_konfirmasi_gm" name="btn_konfirmasi_gm" data-toggle="tooltip" data-placement="top" title="Mengetahui" onClick="konfirmasi('.$nobpb.','.$norefbpb.','.$kodebar.','.$GM.','.$mengetahui.')"> Mengetahui
                                </button>
                            </a>';*/
                    $konfirmasi_gm = 'No Action';
                } else {
                    $konfirmasi_gm = "";
                }
            }


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
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->qty;
            $row[] = $hasil->qty_disetujui;
            $row[] = $hasil->satuan;

            // $query_bpbitem = "SELECT nabar FROM bpbitem WHERE nobpb = '$hasil->nobpb'";
            // $data_bpbitem = $this->db_logistik_pt->query($query_bpbitem)->result();
            // $data_detail = array();
            // $data_detail_nama = array();
            // foreach ($data_bpbitem as $bpbitem){
            //     array_push($data_detail_nama, $bpbitem->nabar);
            // }
            // $row[] = join(", ",$data_detail_nama);
            $row[] = $konfirmasi_asisten_afd;
            $row[] = $konfirmasi_kepala_kebun;
            $row[] = $konfirmasi_kasie_agronomi;
            $row[] = $konfirmasi_ktu;
            // $row[] = $konfirmasi_mgr;
            $row[] = $konfirmasi_gm;
            //$row[] = "";
            //$row[] = "";
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
                            `general` = '$cmb_no_ac' AND 
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
            } else { // jika TANAMAN
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

    function simpan_rinci_bpb()
    {
        // Error Save Data : array(12) {
        //   ["txt_untuk_keperluan"]=>string(15) "untuk keperluan"
        //   ["txt_tgl_bpb"]=>string(10) "07/12/2019"
        //   ["cmb_alokasi_est"]=>string(0) ""
        //   ["hidden_kode_barang"]=>string(15) "102505530000023"
        //   ["hidden_nama_barang"]=>string(20) "39T HELICAL GEAR -TR"
        //   ["hidden_grup_barang"]=>string(28) "SPARE PART MESIN ST PRESSING"
        //   ["hidden_satuan"]=>string(3) "PCS"
        //   ["txt_qty_diminta"]=>string(1) "1"
        //   ["txt_ket_rinci"]=>string(11) "ket rinci 1"
        //   ["hidden_no_bpb"]=>string(0) ""
        //   ["hidden_id_stok_keluar"]=>string(0) ""
        //   ["hidden_no_ref_bpb"]=>string(0) ""
        // }

        // Error Save Data : array(22) {
        //   ["txt_diberikan_kpd"]=>tring(3) "asd"
        //   ["txt_untuk_keperluan"]=>tring(6) "assdad"
        //   ["txt_tgl_bpb"]=>tring(10) "07/18/2019"
        //   ["cmb_bagian"]=>tring(7) "TANAMAN"
        //   ["cmb_alokasi_est"]=>tring(2) "03"
        //   ["cmb_tm_tbm"]=>tring(2) "TM"
        //   ["cmb_afd_unit"]=>tring(2) "01"
        //   ["cmb_blok_sub"]=>tring(1) "-"
        //   ["cmb_tahun_tanam"]=>tring(4) "2008"
        //   ["cmb_bahan"]=>tring(15) "700501200802100"
        //   ["hidden_no_acc"]=>tring(15) "102505550000331"
        //   ["hidden_nama_acc"]=>tring(80) " FLOW METER KAP.0-50 TON I.SOLV 721001290.002.105.1 D IV 105 SLUDGE WATER 1.03 S"
        //   ["hidden_kode_barang"]=>tring(15) "102505530000024"
        //   ["hidden_nama_barang"]=>tring(19) "59T HELICAL GEAR-TL"
        //   ["hidden_grup_barang"]=>tring(28) "SPARE PART MESIN ST PRESSING"
        //   ["hidden_stok_tgl_ini"]=>tring(1) "5"
        //   ["hidden_satuan"]=>tring(3) "PCS"
        //   ["txt_qty_diminta"]=>tring(1) "1"
        //   ["txt_ket_rinci"]=>tring(5) "ket 1"
        //   ["hidden_no_bpb"]=>tring(0) ""
        //   ["hidden_id_bpb"]=>tring(0) ""
        // }

        // var_dump($_POST);exit();

        // $diberikan_kpd = $this->input->post('txt_diberikan_kpd');
        $keperluan      = $this->input->post('txt_untuk_keperluan');
        // $tgl           = $this->input->post('txt_tgl_bpb');
        $tgl            = date("Y-m-d", strtotime($this->input->post('txt_tgl_bpb')));
        $bagian         = $this->input->post('cmb_bagian');
        $alokasi        = $this->input->post('cmb_alokasi_est');
        $tm_tbm         = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $blok_sub       = $this->input->post('cmb_blok_sub');
        $tahun_tanam    = $this->input->post('cmb_tahun_tanam');
        $bahan          = $this->input->post('cmb_bahan');
        $no_acc         = $this->input->post('hidden_no_acc');
        $nama_acc       = $this->input->post('hidden_nama_acc');
        $kodebar        = $this->input->post('hidden_kode_barang');
        $nabar          = $this->input->post('hidden_nama_barang');
        $grup           = $this->input->post('hidden_grup_barang');
        $stok_tgl_ini   = $this->input->post('hidden_stok_tgl_ini');
        $satuan         = $this->input->post('hidden_satuan');
        $qty            = $this->input->post('txt_qty_diminta');
        $ket            = $this->input->post('txt_ket_rinci');
        $no_bpb         = $this->input->post('hidden_no_bpb');
        $id_bpb         = $this->input->post('hidden_id_bpb');
        $sess_lokasi    = $this->session->userdata('status_lokasi');
        $sess_periode   = $this->session->userdata('periode');
        $periode        = $this->session->userdata('ym_periode');
        // $periode        =  date("Ym",strtotime($sess_periode));
        $nobkb_ro       = "";
        $nopo_ro        = "";


        // $tgl = date("Y-m-d",strtotime($this->input->post('txt_tgl_bpb')));
        // $kodebar = $this->input->post('hidden_kode_barang');
        // $nabar = $this->input->post('hidden_nama_barang');
        // $grup = $this->input->post('hidden_grup_barang');
        // $alokasi = $this->input->post('cmb_alokasi_est');
        // $keperluan = $this->input->post('txt_untuk_keperluan');
        // $satuan = $this->input->post('hidden_satuan');
        // $qty = $this->input->post('txt_qty_diminta');
        // $ket = $this->input->post('txt_ket_rinci');

        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_id_bpb = "SELECT MAX(id)+1 as id_bpb FROM bpb";
        $generate_id_bpb = $this->db_logistik_pt->query($query_id_bpb)->row();
        $id_bpb = $generate_id_bpb->id_bpb;
        if (empty($id_bpb)) {
            $id_bpb = 1;
        }
        // var_dump($id_bpb);
        // exit();

        $query_id_bpbitem = "SELECT MAX(id)+1 as id_bpbitem FROM bpbitem";
        $generate_id_bpbitem = $this->db_logistik_pt->query($query_id_bpbitem)->row();
        $id_bpbitem = $generate_id_bpbitem->id_bpbitem;
        if (empty($id_bpbitem)) {
            $id_bpbitem = 1;
        }

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

        $digit = $dig_1 . $dig_2;

        // $ym = date("ym");

        // $query_bpb = "SELECT MAX(SUBSTRING(nobpb, 5)) as max_nobpb from bpb WHERE nobpb LIKE '$ym%'";
        $query_bpb = "SELECT MAX(SUBSTRING(nobpb, 5)) as max_nobpb from bpb WHERE nobpb LIKE '$digit%'";
        // var_dump($query_bpb);exit();
        $generate_bpb = $this->db_logistik_pt->query($query_bpb)->row();
        $noUrut_bpb = (int)($generate_bpb->max_nobpb);
        $noUrut_bpb++;
        $print_bpb = sprintf("%05s", $noUrut_bpb);
        // var_dump($print_bpb);exit();

        // if(empty($this->input->post('hidden_no_bpb'))){
        //     $nobpb = $ym.$print_bpb;
        // }
        // else{
        //     $nobpb = $this->input->post('hidden_no_bpb');
        // }

        if (empty($this->input->post('hidden_no_bpb'))) {
            $nobpb = $digit . $print_bpb;
        } else {
            $nobpb = $this->input->post('hidden_no_bpb');
        }

        $format_m_y = date("m/Y");

        if (empty($this->input->post('hidden_no_ref_bpb'))) {
            $norefbpb = $text1 . "-BPB/" . $text2 . "/" . $format_m_y . "/" . $print_bpb; //EST-BPB/SWJ/06/15/001159 atau //EST-BPB/SWJ/10/18/71722
        } else {
            $norefbpb = $this->input->post('hidden_no_ref_bpb');
        }

        // Error Save Data : array(17) {
        //   ["id"]=>int(1)
        //   ["nobpb"]=>string(0) ""
        //   ["nobkb_ro"]=>string(0) ""
        //   ["nopo_ro"]=>string(0) ""
        //   ["tglbpb"]=>string(19) "2019-07-12 15:41:29"
        //   ["tglinput"]=>string(10) "2019-07-12"
        //   ["jaminput"]=>string(8) "15:41:29"
        //   ["periode"]=>string(10) "07/12/2019"
        //   ["alokasi"]=>string(0) ""
        //   ["pt"]=>string(32) "PT.MULIA SAWIT AGRO LESTARI (HO)"
        //   ["kode"]=>string(2) "01"
        //   ["keperluan"]=>string(15) "untuk keperluan"
        //   ["batal"]=>string(1) "0"
        //   ["USER"]=>string(16) "Staff Purchasing"
        //   ["cetak"]=>string(0) ""
        //   ["posting"]=>string(0) ""
        // }
        // array(19) {
        //   ["id"]=>int(1)
        //   ["kodebar"]=>string(15) "102505530000023"
        //   ["nabar"]=>string(20) "39T HELICAL GEAR -TR"
        //   ["satuan"]=>string(3) "PCS"
        //   ["grp"]=>string(28) "SPARE PART MESIN ST PRESSING"
        //   ["alokasi"]=>string(0) ""
        //   ["kodept"]=>string(2) "01"
        //   ["nobpb"]=>string(0) ""
        //   ["pt"]=>string(32) "PT.MULIA SAWIT AGRO LESTARI (HO)"
        //   ["qty"]=>string(1) "1"
        //   ["tglbpb"]=>string(19) "2019-07-12 15:41:29"
        //   ["tglinput"]=>string(10) "2019-07-12"
        //   ["jaminput"]=>string(8) "15:41:29"
        //   ["periode"]=>string(10) "07/12/2019"
        //   ["ket"]=>string(13) "ket rinci 1"
        //   ["batal"]=>string(1) "0"
        //   ["USER"]=>string(16) "Staff Purchasing"
        //   ["cetak"]=>string(0) ""
        //   ["posting"]=>string(0) ""
        // }

        $databpb['id']              = $id_bpb;
        $databpb['nobpb']           = $nobpb;
        $databpb['norefbpb']        = $norefbpb;
        $databpb['nobkb_ro']        = $nobkb_ro;
        $databpb['nopo_ro']         = $nopo_ro;
        $databpb['tglbpb']          = $tgl . date(' H:i:s');
        $databpb['tglinput']        = date('Y-m-d');
        $databpb['jaminput']        = date('H:i:s');
        $databpb['periode']         = $periode;
        $databpb['alokasi']         = $alokasi;
        $databpb['pt']              = $this->session->userdata('pt');
        $databpb['kode']            = $this->session->userdata('kode_pt');
        // $databpb['kpd']             = "";
        $databpb['keperluan']       = $keperluan;
        $databpb['bag']             = $bagian;
        $databpb['batal']           = "0";
        $databpb['alasan_batal']    = NULL;
        $databpb['USER']            = $this->session->userdata('user');
        $databpb['cetak']           = "";
        $databpb['posting']         = "";
        $databpb['approval']        = "0";
        $databpb['flag_bkb']        = "0";
        // $databpb['tgl']             = $tgl.date(" H:i:s");
        // $databpb['skb']             = "";
        // $databpb['SKBTXT']          = "";
        // $databpb['bpb']             = "";
        // $databpb['NO_REF']          = "";
        // $databpb['mutasi']          = "";
        // $databpb['no_mutasi']       = "";
        // $databpb['tujuan_mutasi']   = "";
        // $databpb['kode_pt_mutasi']  = "";
        // $databpb['thn']             = "";
        // $databpb['periode2']        = "";
        // $databpb['txtperiode1']     = "";
        // $databpb['txtperiode2']     = "";
        // $databpb['SUB']             = "";
        // $databpb['USER1']           = "";

        $databpbitem['id']            = $id_bpbitem;
        $databpbitem['kodebar']       = $kodebar;
        $databpbitem['nabar']         = $nabar;
        $databpbitem['satuan']        = $satuan;
        $databpbitem['grp']           = $grup;
        $databpbitem['alokasi']       = $alokasi;
        $databpbitem['kodept']        = $this->session->userdata('kode_pt');
        $databpbitem['nobpb']         = $nobpb;
        $databpbitem['norefbpb']      = $norefbpb;
        $databpbitem['pt']            = $this->session->userdata('pt');
        $databpbitem['qty']           = $qty;
        $databpbitem['qty_disetujui'] = "0";
        $databpbitem['tglbpb']        = $tgl . date(' H:i:s');
        $databpbitem['tglinput']      = date('Y-m-d');
        $databpbitem['jaminput']      = date('H:i:s');
        $databpbitem['periode']       = $periode;
        $databpbitem['ket']           = $ket;
        $databpbitem['afd']           = $afd_unit;
        $databpbitem['blok']          = $blok_sub;
        $databpbitem['noadjust']      = "0";
        $databpbitem['kodebebantxt']  = $bahan;
        $databpbitem['ketbeban']      = NULL;
        $databpbitem['kodesubtxt']    = $no_acc;
        $databpbitem['ketsub']        = $nama_acc;
        $databpbitem['batal']         = "0";
        $databpbitem['alasan_batal']  = NULL;
        $databpbitem['USER']          = $this->session->userdata('user');
        $databpbitem['cetak']         = "";
        $databpbitem['posting']       = "";
        // $databpbitem['kodebartxt']    = "";
        // $databpbitem['qty2']          = "";
        // $databpbitem['skb']           = "";
        // $databpbitem['SKBTXT']        = "";
        // $databpbitem['NO_REF']        = "";
        // $databpbitem['txttgl']        = "";
        // $databpbitem['thn']           = "";
        // $databpbitem['txtperiode']    = "";
        // $databpbitem['kodebeban']     = $bahan;
        // $databpbitem['kodesub']       = $no_acc;


        // $kodebar = $this->input->post('hidden_kode_barang');
        // $query_max_id_stock_awal = "SELECT max(id) as max_id_stock_awal from stockawal where kodebartxt = '$kodebar'";
        // $data_max_id_stock_awal = $this->db_logistik_pt->query($query_max_id_stock_awal)->row();

        // $no_id = $data_max_id_stock_awal->max_id_stock_awal;

        // $id_approval_bpb = $this->input->post('hidden_kode_barang');
        $query_max_id_approval_bpb = "SELECT max(id)+1 as max_id_approval_bpb from approval_bpb";
        $data_max_id_approval_bpb = $this->db_logistik_pt->query($query_max_id_approval_bpb)->row();

        $no_id_approval = $data_max_id_approval_bpb->max_id_approval_bpb;

        if (empty($no_id_approval)) {
            $no_id_approval = "1";
        }

        $data_approval_bpb['id']                = $no_id_approval;
        $data_approval_bpb['no_bpb']            = $nobpb;
        $data_approval_bpb['norefbpb']          = $norefbpb;
        $data_approval_bpb['kodebar']           = $kodebar;
        $data_approval_bpb['nabar']             = $nabar;
        $data_approval_bpb['qty_diminta']       = $qty;
        // $data_approval_bpb['qty_disetujui'] = "0";
        $data_approval_bpb['status_ktu']        = "0";
        $data_approval_bpb['tgl_ktu']           = NULL;
        $data_approval_bpb['ket_ktu']           = NULL;
        // $data_approval_bpb['status_mgr']        = "0";
        // $data_approval_bpb['tgl_mgr']           = NULL;
        // $data_approval_bpb['ket_mgr']           = NULL;
        $data_approval_bpb['status_gm']         = "0";
        $data_approval_bpb['tgl_gm']            = NULL;
        $data_approval_bpb['ket_gm']            = NULL;
        $data_approval_bpb['flag_req_rev_qty']  = "0";

        if (empty($this->input->post('hidden_no_bpb'))) {
            // $acc_beban = $this->input->post('hidden_no_acc');

            // switch ($acc_beban) {
            //     case '102005010100000': // PT PEAK
            //         $this->db_logistik_peak->insert('bpb',$databpb);
            //         break;
            //     case '102005010200000': // PT PSAM
            //         $this->db_logistik_psam->insert('bpb',$databpb);
            //         break;
            //     case '102005010300000': // PT MAPA
            //         $this->db_logistik_mapa->insert('bpb',$databpb);
            //         break;
            //     case '102005010700000': // PT MSAL
            //         $this->db_logistik_msal->insert('bpb',$databpb);
            //         break;
            //     default:
            //         # code...
            //         break;
            // }

            $this->db_logistik_pt->insert('bpb', $databpb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpb = TRUE;
            } else {
                $bool_bpb = FALSE;
            }

            $this->db_logistik_pt->insert('bpbitem', $databpbitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpbitem = TRUE;
            } else {
                $bool_bpbitem = FALSE;
            }

            $this->db_logistik_pt->insert('approval_bpb', $data_approval_bpb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_approval_bpb = TRUE;
            } else {
                $bool_approval_bpb = FALSE;
            }


            $this->db_logistik_pt->insert('bpb_booking', $databpb);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpb = TRUE;
            } else {
                $bool_bpb = FALSE;
            }

            $this->db_logistik_pt->insert('bpbitem_booking', $databpbitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_bpb = TRUE;
            } else {
                $bool_bpb = FALSE;
            }

            if ($bool_bpb === TRUE && $bool_bpbitem === TRUE && $bool_approval_bpb === TRUE) {
                // if ($bool_bpb === TRUE && $bool_bpbitem === TRUE){
                return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb);
            } else {
                return FALSE;
            }
        } else {
            // Error Save Data : array(11) {
            //   ["txt_untuk_keperluan"]=>string(4) "tees"
            //   ["txt_tgl_bpb"]=>string(10) "07/15/2019"
            //   ["cmb_alokasi_est"]=>string(2) "03"
            //   ["hidden_kode_barang"]=>string(15) "102505120000040"
            //   ["hidden_nama_barang"]=>string(32) "ADJUSTER GEAR ASSY 23A-32-111520"
            //   ["hidden_grup_barang"]=>string(17) "SPARE PART GRADER"
            //   ["hidden_satuan"]=>string(3) "PCS"
            //   ["txt_qty_diminta"]=>string(1) "3"
            //   ["txt_ket_rinci"]=>string(5) "ket 2"
            //   ["hidden_no_bpb"]=>string(9) "190700007"
            //   ["hidden_id_bpb"]=>string(1) "7"
            // }

            // var_dump($_POST);exit();
            $nobpb      = $this->input->post('hidden_no_bpb');

            $kodebar    = $this->input->post('hidden_kode_barang');
            $nabar      = $this->input->post('hidden_nama_barang');

            $query = "SELECT * FROM bpbitem WHERE afd = '$afd_unit' AND blok = '$blok_sub' AND nobpb = '$nobpb' AND norefbpb = '$norefbpb' AND (kodebar = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);

            if ($check_brg->num_rows() > 0) {
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada LPB yang sama ***/
            else {
                $this->db_logistik_pt->insert('bpbitem', $databpbitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_bpbitem = TRUE;
                } else {
                    $bool_bpbitem = FALSE;
                }

                // $query_1 = "INSERT INTO stockawal_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE) BKB', '$user menambahkan BKB $no_ref dengan barang $kodebar|$nabar', NOW(), '$user', '$ip', '$platform' FROM stockawal a WHERE a.id = $no_id AND a.kodebartxt = $kodebar";
                // $this->db_logistik_pt->query($query_1);
                // if($this->db_logistik_pt->affected_rows() > 0){
                //     $bool_stockawalhistory_old = TRUE;
                // }
                // else {
                //     $bool_stockawalhistory_old = FALSE;
                // }

                // var_dump($this->db_logistik_pt->last_query());exit();
                // if ($this->db->trans_status() === FALSE)
                // {
                //     $bool_stockawal = FALSE;
                // }
                // else {
                //     $bool_stockawal = TRUE;
                // }

                $this->db_logistik_pt->insert('approval_bpb', $data_approval_bpb);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_approval_bpb = TRUE;
                } else {
                    $bool_approval_bpb = FALSE;
                }

                $this->db_logistik_pt->insert('bpbitem_booking', $databpbitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_bpb = TRUE;
                } else {
                    $bool_bpb = FALSE;
                }

                if ($bool_bpbitem === TRUE && $bool_approval_bpb === TRUE) {
                    return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb);
                } else {
                    return FALSE;
                }
            }
        }
    }

    function ubah_rinci_bpb()
    {
        // Error Update Data : array(11) {
        //   ["txt_untuk_keperluan"]=>string(15) "untuk keperluan" v
        //   ["txt_tgl_bpb"]=>string(10) "07/15/2019" v
        //   ["cmb_alokasi_est"]=>string(2) "03" v
        //   ["hidden_kode_barang"]=>string(15) "102505950000044" v
        //   ["hidden_nama_barang"]=>string(14) "ABBOCATH NO.20" v
        //   ["hidden_grup_barang"]=>string(22) "PERSEDIAAN OBAT OBATAN" v
        //   ["hidden_satuan"]=>string(3) "PCS" v
        //   ["txt_qty_diminta"]=>string(1) "8" v
        //   ["txt_ket_rinci"]=>string(5) "ket 4" v
        //   ["hidden_no_bpb"]=>string(9) "190700008"
        //   ["hidden_id_bpb"]=>string(1) "8"
        // }
        // var_dump($_POST);exit();

        // $diberikan_kpd = $this->input->post('txt_diberikan_kpd');
        $keperluan      = $this->input->post('txt_untuk_keperluan');
        // $tgl           = $this->input->post('txt_tgl_bpb');
        $tgl            = date("Y-m-d", strtotime($this->input->post('txt_tgl_bpb')));
        $bagian         = $this->input->post('cmb_bagian');
        $alokasi        = $this->input->post('cmb_alokasi_est');
        $tm_tbm         = $this->input->post('cmb_tm_tbm');
        $afd_unit       = $this->input->post('cmb_afd_unit');
        $blok_sub       = $this->input->post('cmb_blok_sub');
        $tahun_tanam    = $this->input->post('cmb_tahun_tanam');
        $bahan          = $this->input->post('cmb_bahan');
        $no_acc         = $this->input->post('hidden_no_acc');
        $nama_acc       = $this->input->post('hidden_nama_acc');
        $kodebar        = $this->input->post('hidden_kode_barang');
        $nabar          = $this->input->post('hidden_nama_barang');
        $grup           = $this->input->post('hidden_grup_barang');
        $stok_tgl_ini   = $this->input->post('hidden_stok_tgl_ini');
        $satuan         = $this->input->post('hidden_satuan');
        $qty            = $this->input->post('txt_qty_diminta');
        $ket            = $this->input->post('txt_ket_rinci');
        $nobpb          = $this->input->post('hidden_no_bpb');
        $norefbpb       = $this->input->post('hidden_no_ref_bpb');
        $id_bpb         = $this->input->post('hidden_id_bpb');
        $id_bpbitem     = $this->input->post('hidden_id_bpbitem');
        $sess_lokasi    = $this->session->userdata('status_lokasi');
        $sess_periode   = $this->session->userdata('periode');
        $periode        = $this->session->userdata('ym_periode');
        // $periode        =  date("Ym",strtotime($sess_periode));
        $nobkb_ro       = "";
        $nopo_ro        = "";

        // $sess_lokasi        = $this->session->userdata('status_lokasi');
        // $tgl                = date("Y-m-d",strtotime($this->input->post('txt_tgl_bpb')));
        // $kodebar            = $this->input->post('hidden_kode_barang');
        // $nabar              = $this->input->post('hidden_nama_barang');
        // $alokasi            = $this->input->post('cmb_alokasi_est');
        // $keperluan          = $this->input->post('txt_untuk_keperluan');
        // $satuan             = $this->input->post('hidden_satuan');
        // $qty                = $this->input->post('txt_qty_diminta');
        // $ket                = $this->input->post('txt_ket_rinci');
        // $grup               = $this->input->post('hidden_grup_barang');

        // $nobpb              = $this->input->post('hidden_no_bpb');
        // $id_bpb             = $this->input->post('hidden_id_bpb');

        $databpb['id']              = $id_bpb;
        $databpb['nobpb']           = $nobpb;
        $databpb['nobkb_ro']        = $nobkb_ro;
        $databpb['nopo_ro']         = $nopo_ro;
        $databpb['tglbpb']          = $tgl . date(' H:i:s');
        $databpb['tglinput']        = date('Y-m-d');
        $databpb['jaminput']        = date('H:i:s');
        $databpb['periode']         = $periode;
        $databpb['alokasi']         = $alokasi;
        $databpb['pt']              = $this->session->userdata('pt');
        $databpb['kode']            = $this->session->userdata('kode_pt');
        // $databpb['kpd']             = "";
        $databpb['keperluan']       = $keperluan;
        $databpb['bag']             = $bagian;
        $databpb['batal']           = "0";
        $databpb['alasan_batal']    = NULL;
        $databpb['USER']            = $this->session->userdata('user');
        $databpb['cetak']           = "";
        $databpb['posting']         = "";
        // $databpb['tgl']             = $tgl.date(" H:i:s");
        // $databpb['skb']             = "";
        // $databpb['SKBTXT']          = "";
        // $databpb['bpb']             = "";
        // $databpb['NO_REF']          = "";
        // $databpb['mutasi']          = "";
        // $databpb['no_mutasi']       = "";
        // $databpb['tujuan_mutasi']   = "";
        // $databpb['kode_pt_mutasi']  = "";
        // $databpb['thn']             = "";
        // $databpb['periode2']        = "";
        // $databpb['txtperiode1']     = "";
        // $databpb['txtperiode2']     = "";
        // $databpb['SUB']             = "";
        // $databpb['USER1']           = "";

        $databpbitem['id']            = $id_bpbitem;
        $databpbitem['kodebar']       = $kodebar;
        $databpbitem['nabar']         = $nabar;
        $databpbitem['satuan']        = $satuan;
        $databpbitem['grp']           = $grup;
        $databpbitem['alokasi']       = $alokasi;
        $databpbitem['kodept']        = $this->session->userdata('kode_pt');
        $databpbitem['nobpb']         = $nobpb;
        $databpbitem['pt']            = $this->session->userdata('pt');
        $databpbitem['qty']           = $qty;
        $databpbitem['tglbpb']        = $tgl . date(' H:i:s');
        $databpbitem['tglinput']      = date('Y-m-d');
        $databpbitem['jaminput']      = date('H:i:s');
        $databpbitem['periode']       = $periode;
        $databpbitem['ket']           = $ket;
        $databpbitem['afd']           = $afd_unit;
        $databpbitem['blok']          = $blok_sub;
        $databpbitem['noadjust']      = "0";
        $databpbitem['kodebebantxt']  = $bahan;
        $databpbitem['ketbeban']      = NULL;
        $databpbitem['kodesubtxt']    = $no_acc;
        $databpbitem['ketsub']        = $nama_acc;
        $databpbitem['batal']         = "0";
        $databpbitem['alasan_batal']  = NULL;
        $databpbitem['USER']          = $this->session->userdata('user');
        $databpbitem['cetak']         = "";
        $databpbitem['posting']       = "";
        // $databpbitem['kodebartxt']    = "";
        // $databpbitem['qty2']          = "";
        // $databpbitem['skb']           = "";
        // $databpbitem['SKBTXT']        = "";
        // $databpbitem['NO_REF']        = "";
        // $databpbitem['txttgl']        = "";
        // $databpbitem['thn']           = "";
        // $databpbitem['txtperiode']    = "";
        // $databpbitem['kodebeban']     = $bahan;
        // $databpbitem['kodesub']       = $no_acc;

        $query_max_id_approval_bpb = "SELECT max(id) as max_id_approval_bpb from approval_bpb";
        $data_max_id_approval_bpb = $this->db_logistik_pt->query($query_max_id_approval_bpb)->row();

        $no_id_approval = $data_max_id_approval_bpb->max_id_approval_bpb;

        if (empty($no_id_approval)) {
            $no_id_approval = "1";
        }

        // $data_approval_bpb['id']            = $no_id_approval;
        // $data_approval_bpb['no_bpb']        = $nobpb;
        // $data_approval_bpb['kodebar']       = $kodebar;
        // $data_approval_bpb['nabar']         = $nabar;
        // $data_approval_bpb['qty_diminta']   = $qty;
        // $data_approval_bpb['qty_disetujui'] = "0";
        // $data_approval_bpb['status_ktu']    = "0";
        // $data_approval_bpb['tgl_ktu']       = NULL;
        // $data_approval_bpb['ket_ktu']       = NULL;
        // $data_approval_bpb['status_mgr']    = "0";
        // $data_approval_bpb['tgl_mgr']       = NULL;
        // $data_approval_bpb['ket_mgr']       = NULL;
        // $data_approval_bpb['status_gm']     = "0";
        // $data_approval_bpb['tgl_gm']        = NULL;
        // $data_approval_bpb['ket_gm']        = NULL;

        $this->db_logistik_pt->set($databpb);
        $this->db_logistik_pt->where('id', $id_bpb);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpb');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpb = TRUE;
        } else {
            $bool_bpb = FALSE;
        }

        $this->db_logistik_pt->set($databpbitem);
        $this->db_logistik_pt->where('id', $id_bpbitem);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpbitem');

        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_bpbitem = TRUE;
        } else {
            $bool_bpbitem = FALSE;
        }

        $data_approvalbpb['qty_diminta'] = $qty;

        $this->db_logistik_pt->set($data_approvalbpb);
        $this->db_logistik_pt->where('no_bpb', $nobpb);
        $this->db_logistik_pt->where('norefbpb', $norefbpb);
        $this->db_logistik_pt->where('kodebar', $kodebar);
        $this->db_logistik_pt->update('approval_bpb');

        $this->db_logistik_pt->set($databpb);
        $this->db_logistik_pt->where('id', $id_bpb);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpb_booking');

        $this->db_logistik_pt->set($databpbitem);
        $this->db_logistik_pt->where('id', $id_bpbitem);
        $this->db_logistik_pt->where('nobpb', $nobpb);
        $this->db_logistik_pt->update('bpbitem_booking');

        if ($bool_bpbitem === TRUE) {
            return array('status' => TRUE, 'nobpb' => $nobpb, 'id_bpb' => $id_bpb, 'id_bpbitem' => $id_bpbitem, 'norefbpb' => $norefbpb);
        } else {
            return FALSE;
        }
    }
}
