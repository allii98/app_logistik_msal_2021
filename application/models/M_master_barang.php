<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_barang extends CI_Model {

    function get_list_barang(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

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

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT id, kodebar, kodebartxt, nabar, grp, satuan FROM kodebar 
            			WHERE kodebar LIKE '%$keyword%'
            			OR nabar LIKE '%$keyword%'
            			OR grp LIKE '%$keyword%'
            			ORDER BY inputtgl DESC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT id, kodebar, kodebartxt, nabar, grp, satuan FROM kodebar ORDER BY inputtgl DESC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            // $id    = "'".$hasil->id."'";
            $id    = $hasil->id;
            $row[] = '<a href="javascript:;" class="btn btn-info fa fa-info btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Barang" id="btn_detail_barang" onclick="detail_barang('.$hasil->kodebartxt.','.$id.')"> Detail</a>
                <!--a href="javascript:;" class="btn btn-danger fa fa-trash btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus Barang" id="btn_hapus_barang" onclick="konfirmasi_hapus('.$hasil->kodebartxt.','.$id.')"> Hapus</a-->
                ';
            $row[] = $no++;
            $row[] = $hasil->kodebartxt;
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

    function get_list_coa(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
        // var_dump($cmb_no_ac);exit();
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT noid, noac, nama, `group`, type FROM noac 
                        WHERE type <> 'G' AND (noac LIKE '%$keyword%'
                        OR nama LIKE '%$keyword%'
                        OR type LIKE '%$keyword%'
                        OR `group` LIKE '%$keyword%')
                        ORDER BY nama ASC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT noid, noac, nama, `group`, type FROM noac WHERE type <> 'G' ORDER BY nama ASC";
            $count_all = $this->db_logistik->query($query)->num_rows();
            $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = "'".$hasil->noid."'";
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

    function simpan_master_barang(){
        $query_id = "SELECT MAX(id)+1 as no_id FROM kodebar";
        $generate_id = $this->db_logistik->query($query_id)->row();
        $no_id = $generate_id->no_id;
        if(empty($no_id)){
            $no_id = 1;
        }

        $data_master_barang["kodebar"]    = $this->input->post('txt_kd_barang');
        $data_master_barang["kodebartxt"] = $this->input->post('txt_kd_barang');
        $data_master_barang["nabar"]      = $this->input->post('txt_nm_barang');
        $data_master_barang["grp"]        = $this->input->post('cmb_grup_barang');
        $data_master_barang["satuan"]     = $this->input->post('cmb_satuan');
        $data_master_barang["spek"]       = $this->input->post('txt_spesifikasi');
        $data_master_barang["nopart"]     = $this->input->post('txt_nmr_part');
        $data_master_barang["ket"]        = $this->input->post('txt_keterangan');
        $data_master_barang["inputtgl"]   = date("Y-m-d H:i:s");
        $data_master_barang["pt"]         = $this->session->userdata('pt');
        $data_master_barang["kode"]       = $this->session->userdata('kode_pt');

        if(empty($this->input->post('hidden_id'))){
            $data_master_barang["id"]         = $no_id;

            $this->db_logistik->insert('kodebar',$data_master_barang);
            if($this->db_logistik->affected_rows() > 0){
                // $bool_master_barang = TRUE;
                return TRUE;
            }
            else{
                // $bool_master_barang = FALSE;
                return FALSE;
            }
        }
        else{
            $id = $this->input->post('hidden_id');

            $data_master_barang["id"]   = $id;

            $this->db_logistik->set($data_master_barang);
            $this->db_logistik->where('id', $id);
            $this->db_logistik->update('kodebar');
            // var_dump($this->db_logistik->last_query());exit();
            if ($this->db_logistik->affected_rows() > 0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
}
