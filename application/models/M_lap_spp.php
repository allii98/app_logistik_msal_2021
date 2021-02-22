<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lap_spp extends CI_Model {

    function get_lapbarang(){
    	$data = array();
    	$start = $_POST['start'];
    	$length = $_POST['length'];
    	$no = $start+1;

    	if(!empty($_POST['search']['value'])){
    	    $keyword = $_POST['search']['value'];
    	    $query = "SELECT id, kodebartxt, nabar, nopart, grp, satuan FROM kodebar 
    	                WHERE kodebar LIKE '%$keyword%'
    	                OR nabar LIKE '%$keyword%'
    	                OR nopart LIKE '%$keyword%'
    	                OR grp LIKE '%$keyword%'
    	                OR satuan LIKE '%$keyword%'
    	                ORDER BY nabar ASC";
    	    $count_all = $this->db_logistik->query($query)->num_rows();
    	    $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
    	}
    	else{
    	    $query = "SELECT id, kodebartxt, nabar, nopart, grp, satuan FROM kodebar ORDER BY nabar ASC";
    	    $count_all = $this->db_logistik->query($query)->num_rows();
    	    $data_tabel = $this->db_logistik->query($query." LIMIT $start,$length")->result();
    	}
    	foreach ($data_tabel as $hasil) {
    	    $row   = array();
    	    $id    = "'".$hasil->id."'";
    	    // $row[] = '<a href="javascript:;" id="btn_data_barang">
    	    //         <button class="btn btn-success btn-xs" id="data_barang" name="data_barang" data-toggle="tooltip" data-placement="top" title="Pilih" onClick="return false">
    	    //             Pilih
    	    //         </button>
    	    //     </a>
    	    //     ';
    	    $row[] = $no++;
    	    $row[] = $hasil->kodebartxt;
    	    $row[] = $hasil->nopart;
    	    $row[] = $hasil->nabar;
    	    // $row[] = $hasil->grp;
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
}