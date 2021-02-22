<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	function get_list_bkb_mutasi(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;
        
        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT * FROM stockkeluar_mutasi WHERE 
                (flag_lpb IS NULL OR flag_lpb = '0') AND
                (DATE(tgl) LIKE '%$keyword%'
                OR SKBTXT LIKE '%$keyword%'
                OR NO_REF LIKE '%$keyword%')
                ORDER BY id DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT * FROM stockkeluar_mutasi WHERE flag_lpb IS NULL OR flag_lpb = '0' ORDER BY tglinput DESC";
            // $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }

        foreach ($data_tabel as $hasil) {
            $id = $hasil->id;

            $query_itemmutasi_bkb = "SELECT nabar FROM keluarbrgitem_mutasi WHERE (flag_lpb IS NULL OR flag_lpb = '0') AND (SKBTXT = '$hasil->SKBTXT' AND NO_REF = '$hasil->NO_REF')";
            $data_itemmutasi_bkb = $this->db_logistik_pt->query($query_itemmutasi_bkb)->result();
            $data_detail = array();
            $data_detail_nama = array();
            foreach ($data_itemmutasi_bkb as $keluaritem){
                array_push($data_detail_nama, $keluaritem->nabar);
            }

            // $row[] = $no++;
            $row[] = date("Y-m-d",strtotime($hasil->tgl));
            $row[] = $hasil->SKBTXT;
            $row[] = $hasil->NO_REF;
            // $row[] = join(", ",$data_detail_nama);
            // $row[] = $hasil->pt;
            $data[] = $row;
            $no++;
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