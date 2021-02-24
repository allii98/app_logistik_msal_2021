<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_spp extends CI_Model
{


    function get_list_approved()
    {
        $data = array();
        $kode_level_sesi = $this->session->userdata('kode_level');
        $lokasi = $this->session->userdata('status_lokasi');
        $user_sesi = $this->session->userdata('user');
        $jenis_spp = "";

        switch ($kode_level_sesi) {
            case '11': // KTU
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '12': // Kasie HRD GA
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '13': // Kasie Agronomi
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '14': // Kasie Pabrik
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '15': // GM
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '16': // Mill Manager
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '21': // Dept. Head
            case '22': // Dir. Ops
                $jenis_spp = "";
                break;
            case '23': // Dept. Head Purchasing
            case '24': // Dir. Purchasing
            case '35': // Staff Purchasing
                $jenis_spp = "";
                break;
            case '36': // User Gudang
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                break;
            default:
                if ($lokasi == "HO") {
                    // User HO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "RO") {
                    // User RO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "SITE") {
                    // User SITE
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                } else if ($lokasi == "PKS") {
                    // User PKS
                    // $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%') AND user = '$user_sesi'";
                    $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%')";
                }
                break;
        }
        // $keyfilter1 = "";
        $filter = $this->input->post('filter');
        switch ($filter) {
            case "Sudah PO":
                $keyfilter1 = "AND po = '1'";
                // $keyfilter2 = "WHERE po = '1'";
                break;
            case "Belum PO":
                $keyfilter1 = "AND po = '0'";
                // $keyfilter2 = "WHERE po = '0'";
                break;
            case "SPPI":
                $keyfilter1 = "AND jenis = 'SPPI'";
                // $keyfilter2 = "WHERE jenis = 'SPPI'";
                break;
            case "SPPA":
                $keyfilter1 = "AND jenis = 'SPPA'";
                // $keyfilter2 = "WHERE jenis = 'SPPA'";
                break;
            default:
                $keyfilter1 = "";
                $keyfilter2 = "";
                break;
        }
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periodetxt = '" . $periode . "'";
        $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('1','2','3','8') $periode $keyfilter1 $jenis_spp ORDER BY tglisi DESC";
        // var_dump($query);exit();
        return $count_all = $this->db_logistik_pt->query($query)->num_rows();
    }

    function get_list_waiting()
    {

        $kode_level_sesi = $this->session->userdata('kode_level');
        $lokasi = $this->session->userdata('status_lokasi');
        $user_sesi = $this->session->userdata('user');
        $jenis_spp = '';

        switch ($kode_level_sesi) {
            case '11': // KTU
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '12': // Kasie HRD GA
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '13': // Kasie Agronomi
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '14': // Kasie Pabrik
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '15': // GM
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '16': // Mill Manager
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '21': // Dept. Head
            case '22': // Dir. Ops
                $jenis_spp = "";
                break;
            case '23': // Dept. Head Purchasing
            case '24': // Dir. Purchasing
            case '35': // Staff Purchasing
                $jenis_spp = "";
                break;
            case '36': // User Gudang
                // $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            default:
                if ($lokasi == "HO") {
                    // User HO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "RO") {
                    // User RO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "SITE") {
                    // User SITE
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPI') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                } else if ($lokasi == "PKS") {
                    // User PKS
                    // $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%') AND user = '$user_sesi'";
                    $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') AND (noreftxt LIKE '%FAC%')";
                }
                break;
        }
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periodetxt = '" . $periode . "'";

        $query = "SELECT * FROM ppo WHERE status2 IN ('0') $periode ORDER BY tglisi DESC";
        return $count_all = $this->db_logistik_pt->query($query)->num_rows();
    }



    function get_list_spp()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $kode_level_sesi = $this->session->userdata('kode_level');
        $lokasi = $this->session->userdata('status_lokasi');
        $user_sesi = $this->session->userdata('user');

        // $cari_no_spp = $this->input->post('cari_no_spp');
        // $no_spp = "AND noppotxt LIKE '%$cari_no_spp%'";

        // $this->session->set_userdata(array(
        //  'user' => 'Arman',
        //  'status_lokasi' => 'PKS', //HO, RO, SITE, PKS
        //  'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
        //  'level' => 'User',
        //  'kode_level' => '31',
        //      //11. KTU, 
        //      //12. Kasie HRD GA, 
        //      //13. Kasie Agronomi, 
        //      //14. Kasie Pabrik, 
        //      //15. GM, s/t/d
        //      //16. Mill Manager, s/t
        //      //17. Pimpinan Dept., 
        //      //21. Dept. Head, s/t
        //      //22. Dir. Ops, 
        //      //23. Dept. Head Purchasing, 
        //      //24. Dir. Purchasing s/t
        //      //31. User HO Pembuat SPP
        //      //32. User RO Pembuat SPP
        //      //33. User SITE Pembuat SPP
        //      //34. User PKS Pembuat SPP
        // ));

        switch ($kode_level_sesi) {
            case '11': // KTU
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '12': // Kasie HRD GA
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '13': // Kasie Agronomi
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '14': // Kasie Pabrik
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '15': // GM
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '16': // Mill Manager
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '21': // Dept. Head
            case '22': // Dir. Ops
                $jenis_spp = "";
                break;
            case '23': // Dept. Head Purchasing
            case '24': // Dir. Purchasing
            case '35': // Staff Purchasing
                $jenis_spp = "";
                break;
            case '36': // User Gudang
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                break;
            default:
                if ($lokasi == "HO") {
                    // User HO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "RO") {
                    // User RO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "SITE") {
                    // User SITE
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPI') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                } else if ($lokasi == "PKS") {
                    // User PKS
                    // $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%') AND user = '$user_sesi'";
                    $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%')";
                }
                break;
        }


        // $jenis_spp = "";
        // switch ($lokasi) {
        //     case 'PKS':
        //         // $jenis_spp = "AND jenis = 'SPPI' OR lokasi IN ('PKS','SITE')";
        //         $jenis_spp = "AND jenis = 'SPPI' OR noreftxt LIKE 'FAC%'";
        //         break;
        //     case 'SITE':
        //         // $jenis_spp = "AND jenis = 'SPPI' OR lokasi IN ('PKS','SITE')";
        //         $jenis_spp = "AND jenis = 'SPPI' OR noreftxt LIKE 'EST%'";
        //         break;
        //     case 'RO':
        //         // $jenis_spp = "AND jenis = 'SPPI' OR lokasi IN ('PKS','SITE','RO')";
        //         $jenis_spp = "AND jenis = 'SPPI' OR (noreftxt LIKE 'EST%' OR noreftxt LIKE 'SITE%' OR noreftxt LIKE 'RO%')";
        //         break;
        //     case 'HO':
        //         $jenis_spp = "AND jenis IN ('SPP','SPPA') ";
        //         break;
        //     default:
        //         break;
        // }

        // $keyfilter1 = "";
        $filter = $this->input->post('filter');
        switch ($filter) {
            case "Sudah PO":
                $keyfilter1 = "AND po = '1'";
                break;
            case "Belum PO":
                $keyfilter1 = "AND po = '0'";
                break;
            case "SPPI":
                $keyfilter1 = "AND jenis = 'SPPI'";
                break;
            case "SPPA":
                $keyfilter1 = "AND jenis = 'SPPA'";
                break;
            case "06":
                $keyfilter1 = "AND noreftxt LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND noreftxt LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                $keyfilter2 = "";
                break;
        }

        // 0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periodetxt = " . $periode;
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo
                        WHERE (status2 IN ('1','2','3','8') $periode $keyfilter1 $jenis_spp) AND
                        (noppotxt LIKE '%$keyword%'
                        OR noreftxt LIKE '%$keyword%'
                        OR tglref LIKE '%$keyword%'
                        -- OR tglppo LIKE '%$keyword%'
                        OR tgltrm LIKE '%$keyword%'
                        OR namadept LIKE '%$keyword%'
                        OR ket LIKE '%$keyword%'
                        OR lokasi LIKE '%$keyword%'
                        OR status LIKE '%$keyword%')
                        ORDER BY tglisi DESC";
            // var_dump($query);exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT id, noppo, noppotxt, tglppo, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('1','2','3','8') $periode $keyfilter1 $jenis_spp ORDER BY tglisi DESC";
            // var_dump($query);exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            // $check_approval = $this->db_logistik_pt->get_where('v_list_item_approval',array('noppotxt'=>$hasil->noppotxt,'noreftxt'=>$hasil->noreftxt))->row();

            // switch (substr($hasil->noreftxt,0,3)) {
            //     case 'FAC':
            //         /*** Jika belum di approval dan alokasi spp FAC(PKS) ***/
            //         if((empty($check_approval->status_ktu) || empty($check_approval->status_kasie) || empty($check_approval->status_gm)) && (empty($check_approval->status_mill_mgr))){
            //             $edit = '<a href="'.site_url('spp/edit_spp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah';
            //         }
            //         else{
            //             $edit = "";
            //         }
            //         break;
            //     case 'EST':
            //         /*** Jika belum di approval dan alokasi spp EST(SITE) ***/
            //         if((empty($check_approval->status_ktu) && empty($check_approval->status_kasie)) && (empty($check_approval->status_gm)) ) {
            //             $edit = '<a href="'.site_url('spp/edit_spp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah';
            //         }
            //         else{
            //             $edit = "";
            //         }
            //         break;
            //     case 'ROM':
            //     case 'PST':
            //         /*** Jika belum di approval dan alokasi spp PST(HO) ***/
            //         if((empty($check_approval->status_dept_head))) {
            //             $edit = '<a href="'.site_url('spp/edit_spp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah';
            //         }
            //         else{
            //             $edit = "";
            //         }
            //         break;
            //     default:
            //         break;
            // }

            /*** jika sudah disetujui dan akses level ktu(11), munculkan tombol batal ***/
            // $hasil->status2 == "1" && $this->session->userdata('kode_level') == "11" ? $batal = '<a href="javascript:;" id="a_batal_spp">
            //         <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_spp" name="btn_batal_spp" data-toggle="tooltip" data-placement="top" title="Batal SPP" onClick="konfirmasiBatalSPP('.$id.','.$hasil->noppotxt.')"> Batal
            //         </button>
            //     </a>' : $batal = '';

            // $request_ubah = '<a href="javascript:;" id="a_unlock_ubah">
            //         <button class="btn btn-primary fa fa-square btn-xs" id="btn_unlock_ubah" name="btn_unlock_ubah" data-toggle="tooltip" data-placement="top" title="Request Ubah" onClick="requestUbah('.$id.','.$hasil->noppotxt.')"> Request <br /> Ubah
            //         </button>
            //     </a>';

            // $hasil->status2 != "6" && $this->session->userdata('kode_level') == "11" ? $unlock_ubah = '<a href="javascript:;" id="a_unlock_ubah">
            //         <button class="btn btn-info fa fa-unlock btn-xs" id="btn_unlock_ubah" name="btn_unlock_ubah" data-toggle="tooltip" data-placement="top" title="Unlock Ubah" onClick="konfirmasiUnlockUbah('.$id.','.$hasil->noppotxt.')"> Unlock <br /> Ubah
            //         </button>
            //     </a>' : $unlock_ubah = '';

            // 0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN

            $hasil->status2 == 2 || $hasil->status2 == 1 || $hasil->status2 == 8 ? $cetak = '
                <a href="' . site_url('spp/cetak/' . $hasil->noppotxt . '/' . $id) . '" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_spp"> Cetak
                </a>
                ' : $cetak = "";


            // $row[] = $request_ubah.$unlock_ubah.$edit.$batal.$cetak;
            $row[] = $cetak;

            $row[] = $no++;
            $row[] = $hasil->noppotxt;
            $row[] = $hasil->noreftxt;
            $row[] = date("Y-m-d", strtotime($hasil->tglref));
            // $row[] = date("Y-m-d",strtotime($hasil->tglppo));
            $row[] = date("Y-m-d", strtotime($hasil->tgltrm));
            $row[] = $hasil->namadept;
            // $row[] = $hasil->pt;
            $row[] = $hasil->lokasi;


            // $row[] = '<a href="javascript:;" id="a_approval_ktu">
            //         <button class="btn btn-primary btn-xs fa fa-square" id="btn_approval_ktu" name="btn_approval_ktu" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalApproval('.$hasil->noppotxt.')">
            //         </button>
            //         </a>';
            // $row[] = '<a href="javascript:;" id="a_approval_gm">
            //         <button class="btn btn-primary btn-xs fa fa-square" id="btn_approval_gm" name="btn_approval_gm" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalApprovalGM('.$hasil->noppotxt.')">
            //         </button>
            //         </a>';

            $query_item_ppo = "SELECT kodebartxt, nabar, sat, qty, ket FROM item_ppo WHERE noppotxt = '$hasil->noppotxt' AND status2 = '1'";
            $data_item_ppo = $this->db_logistik_pt->query($query_item_ppo)->result();
            // var_dump($query_item_ppo);exit();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_item_ppo as $item_spp) {
                $row_detail = array();
                // $row_detail[] = $item_spp->kodebartxt;
                // $row_detail[] = $item_spp->nabar;
                // $row_detail[] = $item_spp->sat;
                // $row_detail[] = $item_spp->qty;
                // $row_detail[] = $item_spp->merk;
                // $row_detail[] = $item_spp->ket;
                // $data_detail[] = $row_detail;
                array_push($data_detail_nama, $item_spp->nabar);
            }
            $row[] = substr_replace((join(", ", $data_detail_nama)), "...", 50);
            $row[] = $hasil->ket;
            $row[] = $hasil->status;
            $row[] = $hasil->user;
            // $data[] = array($row,$data_detail);
            $data[] = $row;
        }
        // var_dump($data);exit();
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
    }

    function get_list_approval_baru($teks = null)
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $kode_level_sesi = $this->session->userdata('kode_level');
        $lokasi = $this->session->userdata('status_lokasi');
        if ($lokasi == 'HO')
            $query_lokasi = "";
        else {
            $query_lokasi = "AND lokasi ='" . $lokasi . "'";
        }
        $user_sesi = $this->session->userdata('user');
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periodetxt = '" . $periode . "'";
        $null = "status2 IN ('0','2','6','7','8')";
        if ($teks != null) {
            $null = "status2 IN ('0')";
        }
        $filter = $this->input->post('filter');
        switch ($filter) {
            case "Sudah PO":
                $keyfilter1 = "AND po = '1'";
                break;
            case "Belum PO":
                $keyfilter1 = "AND po = '0'";
                break;
            case "SPPI":
                $keyfilter1 = "AND jenis = 'SPPI'";
                break;
            case "SPPA":
                $keyfilter1 = "AND jenis = 'SPPA'";
                break;
            case "06":
                $keyfilter1 = "AND noreftxt LIKE '%EST-%'";
                break;
            case "07":
                $keyfilter1 = "AND noreftxt LIKE '%EST2%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo
                        WHERE ($null $query_lokasi $periode $keyfilter1) AND
                        (noppotxt LIKE '%$keyword%'
                        OR noreftxt LIKE '%$keyword%'
                        OR tglref LIKE '%$keyword%'
                        OR tglppo LIKE '%$keyword%'
                        OR tgltrm LIKE '%$keyword%'
                        OR namadept LIKE '%$keyword%'
                        OR ket LIKE '%$keyword%'
                        OR lokasi LIKE '%$keyword%'
                        OR status LIKE '%$keyword%')
                        ORDER BY tglisi DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE $null $query_lokasi $periode $keyfilter1 ORDER BY tglisi DESC";
            // var_dump($query);exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;
            $noref1 = "'" . $hasil->noreftxt . "'";
            $noppo1 = "'" . $hasil->noppotxt . "'";
            $dept1 = "'" . $hasil->namadept . "'";
            $lokasi1 = "'" . $hasil->lokasi . "'";
            $jenis1 = "'" . substr($hasil->noreftxt, 4, 5) . "'";
            $dept2 = "'" . $hasil->user . "'";
            $query_dept_user_input = "SELECT dept FROM usr WHERE nama=$dept2";
            $get_dept_user_input = $this->db_logistik_pt->query($query_dept_user_input)->row();
            // $dept2 = "'".$get_dept_user_input->dept."'";

            $row[] = $hasil->status2 == 0 && $hasil->user == $this->session->userdata('user') ? '<a href="' . site_url('spp/edit_spp/' . $hasil->noppotxt . '/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_detail_barang"> Ubah </a>
            <a href="javascript:;" id="a_hapus_spp"><button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="Hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Batal</button></a>'
                : '<a href="javascript:;" class="btn btn-warning btn-xs">No Option</a>';

            $row[] = $no++;
            $row[] = $hasil->noppotxt;
            $row[] = $hasil->noreftxt;
            $row[] = date("Y-m-d", strtotime($hasil->tglref));
            $row[] = date("Y-m-d", strtotime($hasil->tglppo));
            $row[] = date("Y-m-d", strtotime($hasil->tgltrm));
            $row[] = $hasil->namadept;
            $row[] = $hasil->pt;
            $row[] = $hasil->lokasi;
            $row[] = $hasil->ket;
            $row[] = $hasil->status;
            $row[] = $hasil->user;
            $row[] = '<a href="javascript:;" id="a_approval_ktu">
                    <button class="btn btn-primary btn-xs fa fa-eye" id="btn_approval" name="btn_approval" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalApproval1(' . $noppo1 . ',' . $noref1 . ',' . $jenis1 . ',' . $dept1 . ',' . $dept2 . ',' . $lokasi1 . ');">
                    </button>
                    </a>';
            $query_item_ppo = "SELECT kodebartxt, nabar, sat, qty, ket FROM item_ppo WHERE noppotxt = '$hasil->noppotxt'";
            $data_item_ppo = $this->db_logistik_pt->query($query_item_ppo)->result();
            // var_dump($query_item_ppo);exit();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_item_ppo as $item_spp) {
                $row_detail = array();
                $row_detail[] = $item_spp->kodebartxt;
                $row_detail[] = $item_spp->nabar;
                $row_detail[] = $item_spp->sat;
                $row_detail[] = $item_spp->qty;
                // $row_detail[] = $item_spp->merk;
                $row_detail[] = $item_spp->ket;
                $data_detail[] = $row_detail;
                array_push($data_detail_nama, $item_spp->nabar);
            }
            $row[] = substr_replace((join(", ", $data_detail_nama)), '...', 50);
            $data[] = array($row, $data_detail);
        }
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
    }

    function get_list_sppitem()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $noppotxt = $this->input->post('noppo');
        $noref = $this->input->post('noref');
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM item_ppo WHERE po = '0' AND noppotxt LIKE '%$noppotxt%' AND noreftxt LIKE '%$noref%'
                AND (kodebar LIKE '%$keyword%'
                OR nabar LIKE '%$keyword%'
                OR sat LIKE '%$keyword%'
                OR qty LIKE '%$keyword%'
                OR STOK LIKE '%$keyword%'
                OR ket LIKE '%$keyword%'
                OR po LIKE '%$keyword%'
                OR user LIKE '%$keyword%')
            ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT * FROM item_ppo WHERE po ='0' AND noppotxt LIKE '%$noppotxt%' AND noreftxt LIKE '%$noref%' ORDER BY id DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start, $length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row = array();
            $id = $hasil->id;

            // $noppotxt = "'" . $hasil->noppotxt . "'";
            $noreftxt = "'" . $hasil->noreftxt . "'";
            $kodebar = "'" . $hasil->kodebar . "'";
            // $nabar = "'" . $hasil->nabar . "'";
            // $nabar = "'" . base64_encode($nabar) . "'";
            // $sat = "'" . $hasil->sat . "'";
            $qty = "'" . $hasil->qty . "'";
            // $stok = "'" . $hasil->STOK . "'";
            // $ket = "'" . $hasil->ket . "'";
            // $po = "'" . $hasil->po . "'";

            $dept_query = "";
            switch ($hasil->namadept) {
                case 'TANAMAN':
                case 'TANAMAN UMUM':
                    $dept_query = "Agronomi";
                    break;
                case 'LEGAL DAN HUMAS':
                    $dept_query = "LegalHumas";
                    break;
                case 'FINANCE & ACCOUNTING':
                    $dept_query = "FA";
                    break;
                case 'HRD & UMUM':
                    $dept_query = "HRD";
                    break;
                case 'PABRIK':
                    $dept_query = "PKS";
                    break;
                default:
                    $dept_query = $hasil->namadept;
                    break;
            }
            $query_dept_user_input = "SELECT dept FROM usr WHERE nama='" . $hasil->user . "'";
            $get_dept_user_input = $this->db_logistik_pt->query($query_dept_user_input)->row();
            $dept_user_input = $get_dept_user_input->dept;

            // $AsistenAfd = "'AsistenAfd'";
            // $KpKebun = "'KpKebun'";
            // $KasieDept1 = "'KasieDept1'";
            // $KasieDept2 = "'KasieDept2'";
            // $KasieGudang = "'KasieGudang'";
            $KTU = "'KTU'";
            $Purchasing = "'Purchasing'";
            // $GM = "'GM'";
            // $DeptHead1 = "'DeptHead1'";
            // $DeptHead2 = "'DeptHead2'";
            // $DeptHead3 = "'DeptHead3'";
            // $DirDept1 = "'DirDept1'";
            // $DirDept2 = "'DirDept2'";

            // $setuju = "'setuju'";
            // $tidaksetuju = "'tidaksetuju'";
            // $mengetahui = "'mengetahui'";
            $revqty = "'revqty'";

            $noppo_query = $hasil->noppotxt;
            $noref_query = $hasil->noreftxt;
            $kodebar_query = $hasil->kodebar;

            $lokasi_query = substr($hasil->noreftxt, 0, 3);
            $jenis_query = substr($hasil->noreftxt, 4, 4);
            switch ($lokasi_query) {
                case 'PST':
                    $lokasi_query = "HO";
                    break;
                case 'EST':
                    $lokasi_query = "SITE";
                    break;
                case 'FAC':
                    $lokasi_query = "PKS";
                    break;
                case 'ROM':
                    $lokasi_query = "RO";
                    break;
                default:
                    $lokasi_query = "";
            }

            switch ($jenis_query) {
                case 'SPPI':
                    $jenis_query = "SPPI";
                    break;
                case 'SPPA':
                    $jenis_query = "SPPA";
                    break;
                default:
                    $jenis_query = "SPP";
                    break;
            }

            // Kasie Gudang
            // **************
            // $query_status_kasie_gudang = "SELECT kasie_gudang, tgl_kasie_gudang FROM approval_spp WHERE kasie_gudang <> '0' AND noppotxt = '$noppo_query' AND noreftxt = '$noref_query' AND kodebartxt ='$kodebar_query'";
            // $get_status_kasie_gudang = $this->db_logistik_pt->query($query_status_kasie_gudang);
            // if ($get_status_kasie_gudang->num_rows() > 0) {
            //     $get_status_approval_kasie_gudang = $this->db_logistik_pt->query($query_status_kasie_gudang)->row();
            //     if ($get_status_approval_kasie_gudang->kasie_gudang == '3') {
            //         $konfirmasi_kasie_gudang = "<strong style='color:blue;'>DIKETAHUI <br/>" . $get_status_approval_kasie_gudang->tgl_kasie_gudang . "</strong><br/>";
            //     }
            // } else {
            //     if ($this->session->userdata('user') == 'Kasie Gudang') {
            //         $konfirmasi_kasie_gudang = "No Action";
            //     } else {
            //         $konfirmasi_kasie_gudang = "";
            //     }
            // }

            // Staff Purchasing
            // **************
            $query_status_purchasing = "SELECT purchasing, tgl_purchasing FROM approval_spp WHERE purchasing <> '0' AND noppotxt = '$noppo_query' AND noreftxt = '$noref_query' AND kodebartxt ='$kodebar_query'";
            $get_status_purchasing = $this->db_logistik_pt->query($query_status_purchasing);
            if ($get_status_purchasing->num_rows() > 0) {
                $get_status_approval_purchasing = $this->db_logistik_pt->query($query_status_purchasing)->row();
                if ($get_status_approval_purchasing->purchasing == '1') {
                    $konfirmasi_purchasing = "<strong style='color:green;'>DISETUJUI <br/>" . $get_status_approval_purchasing->tgl_purchasing . "</strong><br/>";
                } else if ($get_status_approval_purchasing->purchasing == '2') {
                    $konfirmasi_purchasing = "<strong style='color:red;'> TDK DISETUJUI <br/>" . $get_status_approval_purchasing->tgl_purchasing . "</strong><br/>";
                }
            } else {
                if ($this->session->userdata('dept') == 'Purchasing') {
                    $konfirmasi_purchasing = '<a href="javascript:;" id="a_appproval"><button class="btn btn-warning btn-xs" id="btn_rev_qty" name="btn_rev_qty" data-toggle="tooltip" data-placement="top" title="Rev Qty" onClick="promptQty('.$hasil->id.','.$noppotxt.','.$noreftxt.')"> Rev Qty</button></a>';
                } else {
                    $konfirmasi_purchasing = "";
                }
            }
            $row[] = $no++;
            $row[] = $hasil->noppotxt;
            $row[] = $hasil->noreftxt;
            $row[] = $hasil->kodebar;
            $row[] = $hasil->nabar;
            $row[] = $hasil->sat;
            $row[] = $hasil->qty;
            $row[] = $hasil->STOK;
            $row[] = $hasil->ket;
            $row[] = $hasil->po;
            $row[] = $konfirmasi_purchasing;
            $data[] = $row;
        }

        // var_dump($jenis_query);
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );

        return $output;
    }

    function get_list_approval($teks = null)
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        $kode_level_sesi = $this->session->userdata('kode_level');
        $lokasi = $this->session->userdata('status_lokasi');
        $user_sesi = $this->session->userdata('user');

        // $this->session->set_userdata(array(
        //  'user' => 'Arman',
        //  'status_lokasi' => 'PKS', //HO, RO, SITE, PKS
        //  'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
        //  'level' => 'User',
        //  'kode_level' => '31',
        //      //11. KTU, 
        //      //12. Kasie HRD GA, 
        //      //13. Kasie Agronomi, 
        //      //14. Kasie Pabrik, 
        //      //15. GM, s/t/d
        //      //16. Mill Manager, s/t
        //      //17. Pimpinan Dept., 
        //      //21. Dept. Head, s/t
        //      //22. Dir. Ops, 
        //      //23. Dept. Head Purchasing, 
        //      //24. Dir. Purchasing s/t
        //      //31. User HO Pembuat SPP
        //      //32. User RO Pembuat SPP
        //      //33. User SITE Pembuat SPP
        //      //34. User PKS Pembuat SPP
        // ));

        switch ($kode_level_sesi) {
            case '11': // KTU
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '12': // Kasie HRD GA
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '13': // Kasie Agronomi
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                break;
            case '14': // Kasie Pabrik
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '15': // GM
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            case '16': // Mill Manager
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%')";
                break;
            case '21': // Dept. Head
            case '22': // Dir. Ops
                $jenis_spp = "";
                break;
            case '23': // Dept. Head Purchasing
            case '24': // Dir. Purchasing
            case '35': // Staff Purchasing
                $jenis_spp = "";
                break;
            case '36': // User Gudang
                // $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                $jenis_spp = "AND (jenis = 'SPPI' OR jenis = 'SPP' OR jenis = 'SPPA') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                break;
            default:
                if ($lokasi == "HO") {
                    // User HO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%PST%' OR noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "RO") {
                    // User RO
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') OR (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%' OR noreftxt LIKE '%ROM%')";
                } else if ($lokasi == "SITE") {
                    // User SITE
                    // $jenis_spp = "AND jenis in ('SPP','SPPA','SPPK') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%') AND user = '$user_sesi'";
                    $jenis_spp = "AND jenis in ('SPP','SPPA','SPPI') AND (noreftxt LIKE '%FAC%' OR noreftxt LIKE '%EST%')";
                } else if ($lokasi == "PKS") {
                    // User PKS
                    // $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') OR (noreftxt LIKE '%FAC%') AND user = '$user_sesi'";
                    $jenis_spp = "AND (jenis = 'SPPI' and jenis = 'SPP') AND (noreftxt LIKE '%FAC%')";
                }
                break;
        }

        $filter = $this->input->post('filter');
        switch ($filter) {
            case 'SPPI':
                $keyfilter1 = "AND jenis = 'SPPI'";
                break;
            case 'SPPA':
                $keyfilter1 = "AND jenis = 'SPPA'";
                break;
            case 'EST':
                $keyfilter1 = "AND noreftxt LIKE '%EST-%'";
                break;
            case 'EST2':
                $keyfilter1 = "AND noreftxt LIKE '%EST2%'";
                break;
            case 'EST3':
                $keyfilter1 = "AND noreftxt LIKE '%EST3%'";
                break;
            case 'EST4':
                $keyfilter1 = "AND noreftxt LIKE '%EST4%'";
                break;
            default:
                $keyfilter1 = "";
                break;
        }

        // 0=DALAM PROSES, 1=DISETUJUI, 2=SEBAGIAN, 3=TIDAK DISETUJUI, 4=DIKETAHUI, 5=BATAL, 6=UBAH, 7=REQUEST UBAH, 8=TIDAK DISETUJUI SEBAGIAN
        $periode = $this->session->userdata('ym_periode');
        $periode = "AND periodetxt = " . $periode;
        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo
                        WHERE (status2 IN ('0','2','6','7','8') $periode $keyfilter1 $jenis_spp) AND
                        (noppotxt LIKE '%$keyword%'
                        OR noreftxt LIKE '%$keyword%'
                        OR tglref LIKE '%$keyword%'
                        OR tglppo LIKE '%$keyword%'
                        OR tgltrm LIKE '%$keyword%'
                        OR namadept LIKE '%$keyword%'
                        OR ket LIKE '%$keyword%'
                        OR lokasi LIKE '%$keyword%'
                        OR status LIKE '%$keyword%')
                        ORDER BY tglisi DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        } else {
            if ($teks === null) {
                //$query = "SELECT tb.*, a.status_ktu, a.status_kasie, a.status_gm, a.status_mill_mgr, a.status_dept_head, a.status_dir_ops, a.status_dir_hrd, a.status_dir_mis, a.status_dir_legal, a.status_dir_area, a.status_kp FROM v_list_item_approval a LEFT JOIN ((SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('0','1','2','6','7','8') $keyfilter1 $jenis_spp ORDER BY tglisi DESC) as tb) on a.noppotxt = tb.noppotxt";
                $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('0','1','2','6','7','8') $periode $keyfilter1 $jenis_spp ORDER BY tglisi DESC";
            } else {
                $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('0') $periode $keyfilter1 $jenis_spp ORDER BY tglisi DESC";
            }
            $query = "SELECT id, noppo, noppotxt, noref, noreftxt, tglref, tglppo, tgltrm, namadept, ket, pt, kodept, lokasi, status, status2, user FROM ppo WHERE status2 IN ('0','1','2','6','7','8') $periode $keyfilter1 $jenis_spp ORDER BY tglisi DESC";
            var_dump($query);
            exit();
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query . " LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id = $hasil->id;

            $check_approval = $this->db_logistik_pt->get_where('v_list_item_approval', array('noppotxt' => $hasil->noppotxt, 'noreftxt' => $hasil->noreftxt))->row();

            // var_dump(substr($hasil->noreftxt,0,3));exit();
            switch (substr($hasil->noreftxt, 0, 3)) {
                case 'FAC':
                    /*** Jika belum di approval dan alokasi spp FAC(PKS) ***/
                    if ((empty($check_approval->status_ktu) && empty($check_approval->status_kasie) && empty($check_approval->status_gm)) && (empty($check_approval->status_mill_mgr)) && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } elseif ($hasil->status2 == "6" && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } else {
                        $edit = "";
                        $hapus = "";
                    }

                    if ((!empty($check_approval->status_ktu) || !empty($check_approval->status_kasie) || !empty($check_approval->status_gm)) && (!empty($check_approval->status_mill_mgr)) && ($hasil->user == $user_sesi) && ($hasil->status2 != "7")) {
                        $request_ubah = '<a href="javascript:;" id="a_request_ubah">
                            <button class="btn btn-primary fa fa-edit btn-xs" id="btn_request_ubah" name="btn_request_ubah" data-toggle="tooltip" data-placement="top" title="Request Ubah" onClick="modalRequestUbah(' . $id . ',' . $hasil->noppotxt . ')"> Request <br /> Ubah
                            </button>
                        </a>';
                    } else {
                        $request_ubah = '';
                    }
                    break;
                case 'EST':
                    /*** Jika belum di approval dan alokasi spp EST(SITE) ***/
                    if ((empty($check_approval->status_ktu) && empty($check_approval->status_kasie)) && (empty($check_approval->status_gm)) && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } elseif ($hasil->status2 == "6" && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } else {
                        $edit = "";
                        $hapus = "";
                    }
                    // var_dump($hasil->status2);exit();
                    if ((!empty($check_approval->status_ktu) || !empty($check_approval->status_kasie)) && (!empty($check_approval->status_gm)) && $hasil->user == $user_sesi && $hasil->status2 != "7" && $hasil->status2 != "6") {
                        $request_ubah = '<a href="javascript:;" id="a_request_ubah">
                            <button class="btn btn-primary fa fa-edit btn-xs" id="btn_request_ubah" name="btn_request_ubah" data-toggle="tooltip" data-placement="top" title="Request Ubah" onClick="modalRequestUbah(' . $id . ',' . $hasil->noppotxt . ')"> Request <br /> Ubah
                            </button>
                        </a>';
                    } else {
                        $request_ubah = '';
                    }
                    break;
                case 'ROM':
                    //break;
                case 'PST':
                    /*** Jika belum di approval dan alokasi spp PST(HO) ***/
                    if (empty($check_approval->status_dept_head) && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } elseif ($hasil->status2 == "6" && $hasil->user == $user_sesi) {
                        $edit = '<a href="' . site_url('spp/edit_spp/' . $id) . '" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah </a>';
                        $hapus = '<a href="javascript:;" id="a_hapus_spp">
                            <button class="btn btn-danger fa fa-trash btn-xs" id="btn_hapus_spp" name="btn_hapus_spp" data-toggle="tooltip" data-placement="top" title="hapus SPP" onClick="konfirmasiHapusSPP(' . $id . ',' . $hasil->noppotxt . ')"> Hapus
                            </button>
                        </a>';
                    } else {
                        $edit = "";
                        $hapus = "";
                    }

                    if (!empty($check_approval->status_dept_head) && $hasil->user == $user_sesi && $hasil->status2 != "7") {
                        $request_ubah = '<a href="javascript:;" id="a_request_ubah">
                            <button class="btn btn-primary fa fa-edit btn-xs" id="btn_request_ubah" name="btn_request_ubah" data-toggle="tooltip" data-placement="top" title="Request Ubah" onClick="modalRequestUbah(' . $id . ',' . $hasil->noppotxt . ')"> Request <br /> Ubah
                            </button>
                        </a>';
                    } else {
                        $request_ubah = '';
                    }

                    break;
                default:
                    break;
            }

            // jika belum disetujui, masih bisa dilakukan ubah oleh usernya sendiri atau ktu
            // ($hasil->status2 != "1" && $hasil->status2 == "6") && ($hasil->user == $this->session->userdata('user') || $this->session->userdata('kode_level') == "11" ) ? $edit = '<a href="'.site_url('spp/edit_spp/'.$id).'" target="_blank" class="btn btn-info fa fa-edit btn-xs" data-toggle="tooltip" data-placement="top" title="Edit SPP" id="btn_edit_barang"> Ubah' : $edit = '';

            // jika sudah disetujui dan akses level ktu(11), munculkan tombol batal
            $hasil->status2 == "1" && $this->session->userdata('kode_level') == "11" ? $batal = '<a href="javascript:;" id="a_batal_spp">
                    <button class="btn btn-warning fa fa-undo btn-xs" id="btn_batal_spp" name="btn_batal_spp" data-toggle="tooltip" data-placement="top" title="Batal SPP" onClick="konfirmasiBatalSPP(' . $id . ',' . $hasil->noppotxt . ')"> Batal
                    </button>
                </a>' : $batal = '';

            // $request_ubah = '<a href="javascript:;" id="a_unlock_ubah">
            //         <button class="btn btn-primary fa fa-square btn-xs" id="btn_unlock_ubah" name="btn_unlock_ubah" data-toggle="tooltip" data-placement="top" title="Request Ubah" onClick="requestUbah('.$id.','.$hasil->noppotxt.')"> Request <br /> Ubah
            //         </button>
            //     </a>';

            /*** Jika status request ***/
            $hasil->status2 == "7" && $this->session->userdata('kode_level') == "11" ? $unlock_ubah = '<a href="javascript:;" id="a_unlock_ubah">
                    <button class="btn btn-info fa fa-unlock btn-xs" id="btn_unlock_ubah" name="btn_unlock_ubah" data-toggle="tooltip" data-placement="top" title="Unlock Ubah" onClick="konfirmasiUnlockUbah(' . $id . ',' . $hasil->noppotxt . ')"> Unlock <br /> Ubah
                    </button>
                </a>' : $unlock_ubah = '';


            // $row[] = $unlock_ubah.$edit.$batal.'
            //     <a href="'.site_url('spp/cetak/'.$hasil->noppotxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_spp"> Cetak
            //     </a>
            //     ';

            // $row[] = '
            //     <a href="'.site_url('spp/cetak/'.$hasil->noppotxt.'/'.$id).'" target="_blank" class="btn btn-primary btn-xs fa fa-print" id="a_print_spp"> Cetak
            //     </a>
            //     ';

            $row[] = $request_ubah . $unlock_ubah . $edit . $hapus . $batal;

            $row[] = $no++;
            $row[] = $hasil->noppotxt;
            $row[] = $hasil->noreftxt;
            $row[] = date("Y-m-d", strtotime($hasil->tglref));
            $row[] = date("Y-m-d", strtotime($hasil->tglppo));
            $row[] = date("Y-m-d", strtotime($hasil->tgltrm));
            $row[] = $hasil->namadept;
            $row[] = $hasil->pt;
            $row[] = $hasil->lokasi;
            $row[] = $hasil->ket;
            $row[] = $hasil->status;
            $row[] = $hasil->user;

            $row[] = '<a href="javascript:;" id="a_approval_ktu">
                    <button class="btn btn-primary btn-xs fa fa-eye" id="btn_approval_ktu" name="btn_approval_ktu" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalApproval(' . $hasil->noppotxt . ')">
                    </button>
                    </a>';
            // $row[] = '<a href="javascript:;" id="a_approval_gm">
            //         <button class="btn btn-primary btn-xs fa fa-square" id="btn_approval_gm" name="btn_approval_gm" data-toggle="tooltip" data-placement="top" title="Approval" onClick="modalApprovalGM('.$hasil->noppotxt.')">
            //         </button>
            //         </a>';

            $query_item_ppo = "SELECT kodebartxt, nabar, sat, qty, ket FROM item_ppo WHERE noppotxt = '$hasil->noppotxt'";
            $data_item_ppo = $this->db_logistik_pt->query($query_item_ppo)->result();
            // var_dump($query_item_ppo);exit();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_item_ppo as $item_spp) {
                $row_detail = array();
                $row_detail[] = $item_spp->kodebartxt;
                $row_detail[] = $item_spp->nabar;
                $row_detail[] = $item_spp->sat;
                $row_detail[] = $item_spp->qty;
                // $row_detail[] = $item_spp->merk;
                $row_detail[] = $item_spp->ket;
                $data_detail[] = $row_detail;
                array_push($data_detail_nama, $item_spp->nabar);
            }
            $row[] = join(", ", $data_detail_nama);
            $data[] = array($row, $data_detail);
        }
        // var_dump($data);exit();
        $output = array(
            "draw"              => $_POST['draw'],
            "recordsTotal"      => $count_all,
            "recordsFiltered"   => $count_all,
            "data"              => $data,
        );
        return $output;
    }

    function simpan_rinci_spp()
    {
        // "SIMPAN"
        // var_dump($_POST);exit();
        // array(18) {
        //   ["cmb_divisi"]=>string(8) "PT.MULIA"
        //   ["cmb_jenis_permohonan"]=>string(3) "SPP"
        //   ["cmb_alokasi"]=>string(4) "SITE"
        //   ["txt_no_ref"]=>string(0) ""
        //   ["txt_tgl_ref"]=>string(10) "02/07/2019"
        //   ["txt_tanggal"]=>string(10) "02/07/2019"
        //   ["txt_tgl_terima"]=>string(10) "02/07/2019"
        //   ["txt_kode_departemen"]=>string(1) "2"
        //   ["cmb_departemen"]=>string(12) "TANAMAN UMUM"
        //   ["txt_keterangan"]=>string(16) "Keterangan semua"
        //   ["txt_cari_kode_brg_1"]=>string(0) ""
        //   ["txt_qty_1"]=>string(2) "30"
        //   ["txt_merk_type_jenis_1"]=>string(14) "Merk apa aja 1"
        //   ["txt_keterangan_rinci_1"]=>string(18) "Keterangan apa aja"
        //   ["hidden_kode_brg_1"]=>string(15) "102505950000183"
        //   ["hidden_nama_brg_1"]=>string(14) "ABBOCATH NO 24"
        //   ["hidden_satuan_brg_1"]=>string(3) "PCS"
        //   ["hidden_stok_1"]=>string(1) "0"
        // }

        //      array(18) {
        //   ["cmb_divisi"]=>string(8) "PT.MULIA"
        //   ["cmb_jenis_permohonan"]=>string(3) "SPP"
        //   ["cmb_alokasi"]=>string(4) "SITE"
        //   ["txt_no_ref"]=>string(0) ""
        //   ["txt_tgl_ref"]=>string(10) "02/07/2019"
        //   ["txt_tanggal"]=>string(10) "02/07/2019"
        //   ["txt_tgl_terima"]=>string(10) "02/07/2019"
        //   ["txt_kode_departemen"]=>string(1) "2"
        //   ["cmb_departemen"]=>string(12) "TANAMAN UMUM"
        //   ["txt_keterangan"]=>string(16) "Keterangan semua"
        //   ["txt_cari_kode_brg_2"]=>string(0) ""
        //   ["txt_qty_2"]=>string(1) "1"
        //   ["txt_merk_type_jenis_2"]=>string(34) "Apa aja merknya yang penting bagus"
        //   ["txt_keterangan_rinci_2"]=>string(11) "Apa aja lah"
        //   ["hidden_kode_brg_2"]=>string(15) "102505990000200"
        //   ["hidden_nama_brg_2"]=>string(15) "AC SPLIT 1.5 PK"
        //   ["hidden_satuan_brg_2"]=>string(4) "UNIT"
        //   ["hidden_stok_2"]=>string(1) "0"
        // }

        $kpd = 'Bagian Purchasing';

        $query_id = "SELECT MAX(id)+1 as no_id FROM ppo";
        $generate_id = $this->db_logistik_pt->query($query_id)->row();
        $no_id = $generate_id->no_id;
        if (empty($no_id)) {
            $no_id = 1;
        }

        $query_id_item = "SELECT MAX(id)+1 as no_id_item FROM item_ppo";
        $generate_id_item = $this->db_logistik_pt->query($query_id_item)->row();
        $no_id_item = $generate_id_item->no_id_item;
        if (empty($no_id_item)) {
            $no_id_item = 1;
        }

        $cmb_alokasi = $this->input->post("cmb_alokasi");
        // $cmb_estate = $this->input->post("cmb_estate");
        // $cmb_alokasi = $this->session->userdata('status_lokasi');

        if ($cmb_alokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
        } else if ($cmb_alokasi == "SITE") {
            // $text1 = $cmb_estate;
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
        } else if ($cmb_alokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
        } else if ($cmb_alokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
        }

        if ($this->session->userdata('status_lokasi') == "HO") {
            $dig_2 = "1";
        } else if ($this->session->userdata('status_lokasi') == "RO") {
            $dig_2 = "2";
        } else if ($this->session->userdata('status_lokasi') == "PKS") {
            $dig_2 = "3";
        } else if ($this->session->userdata('status_lokasi') == "SITE") {
            $dig_2 = "6";
        }

        // if($this->session->userdata('app_pt') == "MSAL"){
        //     $dig_1 = "4";
        // }
        // else if($this->session->userdata('app_pt') == "PSAM"){
        //     $dig_1 = "5";
        // }
        // else if($this->session->userdata('app_pt') == "MAPA"){
        //     $dig_1 = "6";
        // }
        // if($this->session->userdata('app_pt') == "PEAK"){
        //     $dig_1 = "7";
        // }

        // $query_ppo = "SELECT MAX(noppo)+1 as nospp FROM ppo";
        // $generate_ppo = $this->db_logistik_pt->query($query_ppo)->row();
        $key = $dig_1 . $dig_2;

        $query_ppo = "SELECT MAX(SUBSTRING(noppotxt, 3)) as maxspp from ppo WHERE noppotxt LIKE '$key%'";
        $generate_ppo = $this->db_logistik_pt->query($query_ppo)->row();
        $noUrut = (int)($generate_ppo->maxspp);
        $noUrut++;
        $print = sprintf("%05s", $noUrut);

        if (empty($this->input->post('hidden_no_spp'))) {
            // $nospp = $generate_ppo->nospp;
            $nospp = $dig_1 . $dig_2 . $print;
        } else {
            // $nospp = $this->input->post('hidden_no_spp');
            $nospp = $this->input->post('hidden_no_spp');
        }

        $tgl_ppo = date("Y-m-d", strtotime($this->input->post('txt_tanggal')));
        $tgl_ppo_txt = date("Ymd", strtotime($this->input->post('txt_tanggal')));
        $tgl_trm = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        $tgl_ref = date("Y-m-d", strtotime($this->input->post('txt_tgl_ref')));

        $getmonth = date("m", strtotime($this->input->post('txt_tgl_ref')));
        $getyear = date("y", strtotime($this->input->post('txt_tgl_ref')));

        $noref = $text1 . "-" . $_POST['cmb_jenis_permohonan'] . "/" . $text2 . "/" . $getmonth . "/" . $getyear . "/" . $nospp;

        $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_ref')));
        $d_periode =  date("j", strtotime($periode));
        if ($d_periode >= 26) {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref') . " +1 month"));
        } else {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref')));
        }
        $thn = date("Y", strtotime($this->input->post('txt_tgl_ref')));

        // ppo
        $datainsert['id']               = $no_id;
        $datainsert['kpd']              = $kpd;
        $datainsert['noppo']            = $nospp;
        $datainsert['noppotxt']         = $nospp;
        $datainsert['jenis']            = $this->input->post('cmb_jenis_permohonan');
        $datainsert['tglppo']           = $tgl_ppo . date(" H:i:s");
        $datainsert['tglppotxt']        = $tgl_ppo_txt;
        $datainsert['tgltrm']           = $tgl_trm . date(" H:i:s");
        $datainsert['kodedept']         = $this->input->post('txt_kode_departemen');
        $datainsert['namadept']         = $this->input->post('cmb_departemen');
        $datainsert['noref']            = $nospp;
        $datainsert['noreftxt']         = $noref;
        $datainsert['tglref']           = $tgl_ref . date(" H:i:s");
        $datainsert['ket']              = $this->input->post('txt_keterangan');
        $datainsert['no_acc']           = "0";
        $datainsert['ket_acc']          = "";
        $datainsert['kodept']           = $this->session->userdata('kode_pt');
        $datainsert['pt']               = $this->session->userdata('pt');
        // $datainsert['pt']               = $this->session->userdata('app_pt');
        // $datainsert['kodept']           = "0";
        // $datainsert['pt'] 				= $this->input->post('cmb_divisi');
        // $datainsert['kodept'] 			= $this->input->post('cmb_kode_divisi');
        $datainsert['periode']          = $periode . date(" H:i:s");
        $datainsert['periodetxt']       = $periodetxt;
        $datainsert['thn']              = $thn;
        $datainsert['tglisi']           = $tgl_ref . " " . date("H:i:s");
        $datainsert['user']             = $this->session->userdata('user');
        $datainsert['status']           = "DALAM PROSES";
        $datainsert['status2']          = "0";
        // $datainsert['status']             = "DISETUJUI";
        // $datainsert['status2']             = "1";
        // $datainsert['TGL_APPROVE']        = "9999-12-31 23:59:59"; // ini masih ngasal
        $datainsert['lokasi']           = $this->session->userdata('status_lokasi');
        // $datainsert['lokasi'] 			= $cmb_alokasi;
        // $datainsert['po']                 = "0";
        $datainsert['po']               = "0";
        $datainsert['kode_budget']      = "0";
        $datainsert['grup']             = "";
        $datainsert['main_acct']        = "0";
        $datainsert['nama_main']        = "";

        // item ppo
        $datainsertitem['id']           = $no_id_item;
        $datainsertitem['noppo']        = $nospp;
        $datainsertitem['noppotxt']     = $nospp;
        $datainsertitem['tglppo']       = $tgl_ppo . date(" H:i:s");
        $datainsertitem['tglppotxt']    = $tgl_ppo_txt;
        $datainsertitem['kodedept']     = $this->input->post('txt_kode_departemen');
        $datainsertitem['namadept']     = $this->input->post('cmb_departemen');
        $datainsertitem['noref']        = $nospp;
        $datainsertitem['noreftxt']     = $noref;
        $datainsertitem['kodebar']      = $this->input->post('hidden_kode_brg');
        $datainsertitem['kodebartxt']   = $this->input->post('hidden_kode_brg');
        $datainsertitem['nabar']        = $this->input->post('hidden_nama_brg');
        $datainsertitem['sat']          = $this->input->post('hidden_satuan_brg');
        $datainsertitem['qty']          = $this->input->post('txt_qty');
        $datainsertitem['QTY2']         = NULL;
        $datainsertitem['STOK']         = $this->input->post('hidden_stok');
        $datainsertitem['harga']        = "0";
        $datainsertitem['jumharga']     = "0";
        $datainsertitem['kodept']       = $this->session->userdata('kode_pt');
        $datainsertitem['namapt']       = $this->session->userdata('pt');
        // $datainsertitem['kodept']       = "0";
        // $datainsertitem['namapt']       = $this->session->userdata('app_pt');
        // $datainsertitem['kodept'] 		= $this->input->post('cmb_kode_divisi');
        // $datainsertitem['namapt'] 		= $this->input->post('cmb_divisi');
        $datainsertitem['periode']      = $periode . date(" H:i:s");
        $datainsertitem['periodetxt']   = $periodetxt;
        $datainsertitem['thn']          = "2019";
        $datainsertitem['ket']          = $this->input->post('txt_keterangan_rinci');
        $datainsertitem['tglisi']       = $tgl_ref . " " . date("H:i:s");
        $datainsertitem['user']         = $this->session->userdata('user');
        $datainsertitem['status']       = "DALAM PROSES";
        $datainsertitem['status2']      = "0";
        // $datainsertitem['status']         = "DISETUJUI";
        // $datainsertitem['status2']         = "1";
        // $datainsertitem['TGL_APPROVE']  = "9999-12-31 23:59:59"; // ini masih ngasal
        $datainsertitem['ada_penawar']  = "";
        $datainsertitem['LOKASI']       = $this->session->userdata('status_lokasi');
        // $datainsertitem['LOKASI'] 		= $cmb_alokasi;
        $datainsertitem['po']           = "0";
        $datainsertitem['saldo_po']     = "0";
        $datainsertitem['kode_budget']  = "0";
        $datainsertitem['grup']         = "";
        $datainsertitem['main_acct']    = "0";
        $datainsertitem['nama_main']    = "";
        // $datainsertitem['merk'] 	    = $this->input->post('txt_merk_type_jenis');

        // approval_spp
        $datainsertappr['no_id_item_ppo'] = $no_id_item;
        $datainsertappr['noppotxt']     = $nospp;
        $datainsertappr['tglppotxt']    = $tgl_ppo_txt;
        $datainsertappr['noreftxt']     = $noref;
        $datainsertappr['kodebartxt']   = $this->input->post('hidden_kode_brg');
        $datainsertappr['nabar']        = $this->input->post('hidden_nama_brg');
        $datainsertappr['sat']          = $this->input->post('hidden_satuan_brg');
        $datainsertappr['qty']          = $this->input->post('txt_qty');
        $datainsertappr['STOK']         = $this->input->post('hidden_stok');

        $this->db_logistik_pt->insert('approval_spp', $datainsertappr);

        $user = $this->session->userdata('user');
        if (empty($this->input->post('hidden_no_spp'))) {
            $this->db_logistik_pt->insert('ppo', $datainsert);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_ppo = TRUE;
            } else {
                $bool_ppo = FALSE;
            }

            $this->db_logistik_pt->insert('item_ppo', $datainsertitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_itemppo = TRUE;
            } else {
                $bool_itemppo = FALSE;
            }

            $datainsert['keterangan_transaksi'] = "INSERT";
            $datainsert['log'] = $user . " membuat SPP baru";
            $datainsert['tgl_transaksi'] = date('Y-m-d H:i:s');
            $datainsert['user_transaksi'] = $this->session->userdata('user');
            $datainsert['client_ip'] = $this->input->ip_address();
            $datainsert['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('ppo_history', $datainsert);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_ppohistory = TRUE;
            } else {
                $bool_ppohistory = FALSE;
            }

            $datainsertitem['keterangan_transaksi'] = "INSERT";
            $datainsertitem['log'] = $user . " membuat SPP baru";
            $datainsertitem['tgl_transaksi'] = date('Y-m-d H:i:s');
            $datainsertitem['user_transaksi'] = $this->session->userdata('user');
            $datainsertitem['client_ip'] = $this->input->ip_address();
            $datainsertitem['client_platform'] = $this->platform->agent();

            $this->db_logistik_pt->insert('item_ppo_history', $datainsertitem);
            if ($this->db_logistik_pt->affected_rows() > 0) {
                $bool_itemppohistory = TRUE;
            } else {
                $bool_itemppohistory = FALSE;
            }

            if ($bool_ppo === TRUE && $bool_itemppo === TRUE && $bool_ppohistory === TRUE && $bool_itemppohistory === TRUE) {
                return array('status' => TRUE, 'no_spp' => $nospp, 'id_ppo' => $no_id, 'id_ppo_item' => $no_id_item, 'no_ref_ppo' => $noref);
            } else {
                return FALSE;
            }
        } else {
            $nospp      = $this->input->post('hidden_no_spp');
            $kodebar    = $this->input->post('hidden_kode_brg');
            $nabar      = $this->input->post('hidden_nama_brg');

            $query = "SELECT * FROM item_ppo WHERE noppotxt = '$nospp' AND (kodebartxt = '$kodebar' OR nabar = '$nabar')";
            $check_brg = $this->db_logistik_pt->query($query);

            /*** Check apakah barang sudah pernah ditambahkan pada SPP yang sama  ***/
            if ($check_brg->num_rows() > 0) {
                return "kodebar_exist";
            }
            /*** Jika barang belum pernah ditambahkan pada SPP yang sama ***/
            else {
                $this->db_logistik_pt->insert('item_ppo', $datainsertitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_itemppo = TRUE;
                } else {
                    $bool_itemppo = FALSE;
                }

                $datainsertitem['keterangan_transaksi'] = "INSERT";
                $datainsertitem['log'] = $user . " membuat SPP baru";
                $datainsertitem['tgl_transaksi'] = date('Y-m-d H:i:s');
                $datainsertitem['user_transaksi'] = $this->session->userdata('user');
                $datainsertitem['client_ip'] = $this->input->ip_address();
                $datainsertitem['client_platform'] = $this->platform->agent();

                $this->db_logistik_pt->insert('item_ppo_history', $datainsertitem);
                if ($this->db_logistik_pt->affected_rows() > 0) {
                    $bool_itemppohistory = TRUE;
                } else {
                    $bool_itemppohistory = FALSE;
                }

                if ($bool_itemppo === TRUE && $bool_itemppohistory === TRUE) {
                    return array('status' => TRUE, 'no_spp' => $nospp, 'id_ppo' => $no_id - 1, 'id_ppo_item' => $no_id_item, 'no_ref_ppo' => $noref);
                } else {
                    return FALSE;
                }
            }
        }
    }

    function get_list_barang()
    {
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start + 1;

        // $arrListTelahDipilih = $this->session->userdata("kodebarTelahDipilih");
        // $kecuali = [];
        // if(!empty($arrListTelahDipilih)){
        //     foreach ($arrListTelahDipilih as $list_data) {
        //         array_push($kecuali, $list_data["kodebarTelahDipilih"]);
        //         $list_kecuali = join("','",$kecuali);
        //     }
        // }
        // if(!isset($list_kecuali)){
        //     $list_kecuali = "";
        // }

        if (!empty($_POST['search']['value'])) {
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebar, nabar, grp FROM kodebar 
            			WHERE kodebar LIKE '%$keyword%'
            			OR nabar LIKE '%$keyword%'
            			OR grp LIKE '%$keyword%'
            			ORDER BY nabar ASC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query . " LIMIT $start,$length")->result();
        } else {
            $query = "SELECT id, kodebar, nabar, grp FROM kodebar ORDER BY nabar ASC";
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

    function ubah_rinci_spp()
    {
        // var_dump($_POST);exit();
        // array(20) {
        //   ["cmb_divisi"]=>
        //   string(33) "PT.MULIA SAWIT AGRO LESTARI (PKS)"
        //   ["cmb_kode_divisi"]=>
        //   string(1) "3"
        //   ["cmb_jenis_permohonan"]=>
        //   string(3) "SPP"
        //   ["cmb_alokasi"]=>
        //   string(4) "SITE"
        //   ["txt_no_ref"]=>
        //   string(0) ""
        //   ["txt_tgl_ref"]=>
        //   string(10) "02/08/2019"
        //   ["txt_tanggal"]=>
        //   string(10) "02/08/2019"
        //   ["txt_tgl_terima"]=>
        //   string(10) "02/08/2019"
        //   ["txt_kode_departemen"]=>
        //   string(1) "1"
        //   ["cmb_departemen"]=>
        //   string(7) "TANAMAN"
        //   ["txt_keterangan"]=>
        //   string(0) ""
        //   ["hidden_no_spp"]=>
        //   string(7) "7210115"
        //   ["txt_cari_kode_brg"]=>
        //   string(0) ""
        //   ["txt_qty"]=>
        //   string(2) "90"
        //   ["txt_merk_type_jenis"]=>
        //   string(6) "nmnkjk"
        //   ["txt_keterangan_rinci"]=>
        //   string(8) "53453`
        // "
        //   ["hidden_kode_brg"]=>
        //   string(15) "102505990000190"
        //   ["hidden_nama_brg"]=>
        //   string(15) "AC SPLIT 1/2 PK"
        //   ["hidden_satuan_brg"]=>
        //   string(4) "UNIT"
        //   ["hidden_stok"]=>
        //   string(1) "0"
        // }

        $kpd = 'Bagian Purchasing';

        $no_id = $this->input->post('hidden_id_ppo');
        $no_id_item = $this->input->post('hidden_id_ppo_item');
        $nospp = $this->input->post('hidden_no_spp');

        $cmb_alokasi = $this->input->post("cmb_alokasi");

        if ($cmb_alokasi == "HO") {
            $text1 = "PST";
            $text2 = "BWJ";
            $dig_1 = "1";
        } else if ($cmb_alokasi == "SITE") {
            $text1 = "EST";
            $text2 = "SWJ";
            $dig_1 = "6";
        } else if ($cmb_alokasi == "RO") {
            $text1 = "ROM";
            $text2 = "PKY";
            $dig_1 = "2";
        } else if ($cmb_alokasi == "PKS") {
            $text1 = "FAC";
            $text2 = "SWJ";
            $dig_1 = "3";
        }

        if ($this->session->userdata('status_lokasi') == "HO") {
            $dig_2 = "1";
        } else if ($this->session->userdata('status_lokasi') == "RO") {
            $dig_2 = "2";
        } else if ($this->session->userdata('status_lokasi') == "PKS") {
            $dig_2 = "3";
        } else if ($this->session->userdata('status_lokasi') == "SITE") {
            $dig_2 = "6";
        }

        $tgl_ppo = date("Y-m-d", strtotime($this->input->post('txt_tanggal')));
        $tgl_ppo_txt = date("Ymd", strtotime($this->input->post('txt_tanggal')));
        $tgl_trm = date("Y-m-d", strtotime($this->input->post('txt_tgl_terima')));
        $tgl_ref = date("Y-m-d", strtotime($this->input->post('txt_tgl_ref')));

        $getmonth = date("m", strtotime($this->input->post('txt_tgl_ref')));
        $getyear = date("y", strtotime($this->input->post('txt_tgl_ref')));

        // $noref = $text1."-".$_POST['cmb_jenis_permohonan']."/".$text2."/".$getmonth."/".$getyear."/".$nospp;
        $noref = $this->input->post('hidden_no_ref_ppo');

        $periode = date("Y-m-d", strtotime($this->input->post('txt_tgl_ref')));
        $d_periode =  date("j", strtotime($periode));
        if ($d_periode >= 26) {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref') . " +1 month"));
        } else {
            $periodetxt = date("Ym", strtotime($this->input->post('txt_tgl_ref')));
        }
        $thn = date("Y", strtotime($this->input->post('txt_tgl_ref')));

        $get_ppo = $this->db_logistik_pt->get_where('ppo', array('id' => $no_id))->row();
        // $get_item_ppo = $this->db_logistik_pt->get_where('item_ppo',array('id' => $no_id_item))->row();

        $no_ppo = $get_ppo->noppotxt;
        $no_ref_ppo = $get_ppo->noreftxt;
        // $item_ppo_kodebar = $get_item_ppo->kodebartxt;
        // $item_ppo_nabar = $get_item_ppo->nabar;

        $user = $this->session->userdata('user');
        $ip = $this->input->ip_address();
        $platform = $this->platform->agent();

        $query_1 = "INSERT INTO ppo_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)', '$user melakukan perubahan data SPP $no_ref_ppo',NOW(), '$user', '$ip', '$platform' FROM ppo a WHERE a.id = $no_id AND a.noppotxt = $nospp";
        $this->db_logistik_pt->query($query_1);
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_ppohistory_old = TRUE;
        } else {
            $bool_ppohistory_old = FALSE;
        }

        $query_2 = "INSERT INTO item_ppo_history SELECT null, a.*,'DATA LAMA (SEBELUM UPDATE)', '$user melakukan perubahan data SPP $no_ref_ppo', NOW(), '$user', '$ip', '$platform' FROM item_ppo a WHERE a.id = $no_id_item AND a.noppotxt = $nospp";

        $this->db_logistik_pt->query($query_2);
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_itemppohistory_old = TRUE;
        } else {
            $bool_itemppohistory_old = FALSE;
        }


        // ppo
        // $dataedit['id']               = $no_id;
        $dataedit['kpd']              = $kpd;
        // $dataedit['noppo']            = $nospp;
        // $dataedit['noppotxt']         = $nospp;
        $dataedit['jenis']            = $this->input->post('cmb_jenis_permohonan');
        $dataedit['tglppo']           = $tgl_ppo . date(" H:i:s");
        $dataedit['tglppotxt']        = $tgl_ppo_txt;
        $dataedit['tgltrm']           = $tgl_trm . date(" H:i:s");
        $dataedit['kodedept']         = $this->input->post('txt_kode_departemen');
        $dataedit['namadept']         = $this->input->post('cmb_departemen');
        // $dataedit['noref']            = $nospp;
        // $dataedit['noreftxt']         = $noref;
        $dataedit['tglref']           = $tgl_ref . date(" H:i:s");
        $dataedit['ket']              = $this->input->post('txt_keterangan');
        $dataedit['no_acc']           = "0";
        $dataedit['ket_acc']          = "";
        $dataedit['kodept']           = $this->session->userdata('kode_pt');
        $dataedit['pt']               = $this->session->userdata('pt');
        // $dataedit['pt']               = $this->session->userdata('app_pt');
        // $dataedit['kodept']           = "0";
        // $dataedit['pt']               = $this->input->post('cmb_divisi');
        // $dataedit['kodept']           = $this->input->post('cmb_kode_divisi');
        $dataedit['periode']          = $periode . date(" H:i:s");
        $dataedit['periodetxt']       = $periodetxt;
        $dataedit['thn']              = $thn;
        $dataedit['tglisi']           = $tgl_ref . " " . date("H:i:s");
        $dataedit['user']             = $this->session->userdata('user');
        // $dataedit['status']           = "DALAM PROSES";
        // $dataedit['status2']          = "0";
        // $dataedit['TGL_APPROVE']      = "9999-12-31 23:59:59"; // ini masih ngasal
        $dataedit['lokasi']           = $this->session->userdata('status_lokasi');
        // $dataedit['lokasi']           = $cmb_alokasi;
        $dataedit['po']               = "0";
        $dataedit['kode_budget']      = "0";
        $dataedit['grup']             = "";
        $dataedit['main_acct']        = "0";
        $dataedit['nama_main']        = "";

        // item ppo
        // $dataedititem['id']          = $no_id_item;
        // $dataedititem['noppo']       = $nospp;
        // $dataedititem['noppotxt']    = $nospp;
        $dataedititem['tglppo']      = $tgl_ppo . date(" H:i:s");
        $dataedititem['tglppotxt']   = $tgl_ppo_txt;
        $dataedititem['kodedept']    = $this->input->post('txt_kode_departemen');
        $dataedititem['namadept']    = $this->input->post('cmb_departemen');
        // $dataedititem['noref']       = $nospp;
        // $dataedititem['noreftxt']    = $noref;
        $dataedititem['kodebar']     = $this->input->post('hidden_kode_brg');
        $dataedititem['kodebartxt']  = $this->input->post('hidden_kode_brg');
        $dataedititem['nabar']       = $this->input->post('hidden_nama_brg');
        $dataedititem['sat']         = $this->input->post('hidden_satuan_brg');
        $dataedititem['qty']         = $this->input->post('txt_qty');
        $dataedititem['QTY2']        = NULL;
        $dataedititem['STOK']        = $this->input->post('hidden_stok');
        $dataedititem['harga']       = "0";
        $dataedititem['jumharga']    = "0";
        $dataedititem['kodept']      = $this->session->userdata('kode_pt');
        $dataedititem['namapt']      = $this->session->userdata('pt');
        // $dataedititem['kodept']      = "0";
        // $dataedititem['namapt']      = $this->session->userdata('app_pt');
        // $dataedititem['kodept']      = $this->input->post('cmb_kode_divisi');
        // $dataedititem['namapt']      = $this->input->post('cmb_divisi');
        $dataedititem['periode']     = $periode . date(" H:i:s");
        $dataedititem['periodetxt']  = $periodetxt;
        $dataedititem['thn']         = $thn;
        $dataedititem['ket']         = $this->input->post('txt_keterangan_rinci');
        $dataedititem['tglisi']      = $tgl_ref . " " . date("H:i:s");
        $dataedititem['user']        = $this->session->userdata('user');
        // $dataedititem['status']      = "DALAM PROSES";
        // $dataedititem['status2']     = "0";
        // $dataedititem['TGL_APPROVE'] = "9999-12-31 23:59:59"; // ini masih ngasal
        $dataedititem['ada_penawar'] = "";
        $dataedititem['LOKASI']      = $this->session->userdata('status_lokasi');
        // $dataedititem['LOKASI']      = $cmb_alokasi;
        $dataedititem['po']          = "0";
        $dataedititem['saldo_po']    = "0";
        $dataedititem['kode_budget'] = "0";
        $dataedititem['grup']        = "";
        $dataedititem['main_acct']   = "0";
        $dataedititem['nama_main']   = "";
        // $dataedititem['merk']        = $this->input->post('txt_merk_type_jenis');

        $this->db_logistik_pt->set($dataedit);
        $this->db_logistik_pt->where('id', $no_id);
        $this->db_logistik_pt->where('noppotxt', $nospp);
        $this->db_logistik_pt->update('ppo');
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_ppo = TRUE;
        } else {
            $bool_ppo = FALSE;
        }

        $this->db_logistik_pt->set($dataedititem);
        $this->db_logistik_pt->where('id', $no_id_item);
        $this->db_logistik_pt->where('noppotxt', $nospp);
        $this->db_logistik_pt->update('item_ppo');
        if ($this->db_logistik_pt->affected_rows() > 0) {
            $bool_itemppo = TRUE;
        } else {
            $bool_itemppo = FALSE;
        }

        // $dataedit['keterangan_transaksi'] = "DATA BARU (SETELAH UPDATE)";
        // $dataedit['tgl_transaksi'] = date('Y-m-d H:i:s');
        // $this->db_logistik_pt->insert('ppo_history',$dataedit);
        // if($this->db_logistik_pt->affected_rows() > 0){
        //     $bool_ppohistory_new = TRUE;
        // }
        // else{
        //     $bool_ppohistory_new = FALSE;
        // }

        // $dataedititem['keterangan_transaksi'] = "DATA BARU (SETELAH UPDATE)";
        // $dataedititem['tgl_transaksi'] = date('Y-m-d H:i:s');
        // $this->db_logistik_pt->insert('item_ppo_history',$dataedititem);
        // if($this->db_logistik_pt->affected_rows() > 0){
        //     $bool_itemppohistory_new = TRUE;
        // }
        // else{
        //     $bool_itemppohistory_new = FALSE;
        // }

        if (
            $bool_ppohistory_old === TRUE && $bool_itemppohistory_old === TRUE
            && $bool_ppo === TRUE && $bool_itemppo === TRUE
        ) {
            return array('status' => TRUE, 'no_spp' => $nospp, 'id_ppo' => $no_id, 'id_ppo_item' => $no_id_item);
        } else {
            return FALSE;
        }
    }
}
