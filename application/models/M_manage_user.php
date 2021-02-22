<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manage_user extends CI_Model {

    function get_list_user(){
        $data = array();
        $start = $_POST['start'];
        $length = $_POST['length'];
        $no = $start+1;

        if(!empty($_POST['search']['value'])){
            $keyword = $_POST['search']['value'];
            $query = "SELECT no, nama, username, status_lokasi, kode_level, level FROM user 
            			WHERE nama LIKE '%$keyword%'
            			OR username LIKE '%$keyword%'
            			OR status_lokasi LIKE '%$keyword%'
                        -- OR kode_level LIKE '%$keyword%'
                        OR level LIKE '%$keyword%'
            			ORDER BY nama DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        else{
            $query = "SELECT no, nama, username, status_lokasi, kode_level, level FROM user ORDER BY nama DESC";
            $count_all = $this->db_logistik_pt->query($query)->num_rows();
            $data_tabel = $this->db_logistik_pt->query($query." LIMIT $start,$length")->result();
        }
        foreach ($data_tabel as $hasil) {
            $row   = array();
            $id    = "'".$hasil->username."'";
            // $id    = $hasil->username;
            $row[] = '<a href="javascript:;" class="btn btn-info fa fa-info btn-xs" data-toggle="tooltip" data-placement="top" title="Detail User" id="btn_detail_user" onclick="detail_user('.$hasil->no.','.$id.')"> Detail</a>
                <a href="javascript:;" class="btn btn-danger fa fa-trash btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus User" id="btn_hapus_user" onclick="konfirmasi_hapus('.$hasil->no.','.$id.')"> Hapus</a>
                ';
            $row[] = $no++;
            $row[] = $hasil->nama;
            $row[] = $hasil->username;
            $row[] = $hasil->status_lokasi;
            // $row[] = $hasil->kode_level;
            $row[] = $hasil->level;
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

    function simpan_manage_user(){
        // var_dump($_POST);exit();
        // array(7) {
        //     ["hidden_id"] => string(0) ""
        //     ["txt_nama"] => string(13) "Administrator"
        //     ["txt_username"] => string(10) "superadmin"
        //     ["txt_password"] => string(9) "spermimin"
        //     ["cmb_lokasi"] => string(2) "HO"
        //     ["kode_level"] => string(2) "31"
        //     ["level"] => string(7) "User HO"
        // }

        $query_no = "SELECT MAX(no)+1 as max_no FROM `user`";
        $get_no = $this->db_logistik_pt->query($query_no)->row();
        $no = $get_no->max_no;
        if(empty($no)){
            $no = 1;
        }

        $nama = $this->input->post('txt_nama');
        $username = $this->input->post('txt_username');
        $password = $this->input->post('txt_password');
        $status_lokasi = $this->input->post('cmb_lokasi');
        $kode_level = $this->input->post('kode_level');
        $level = $this->input->post('level');

        $data_manage_user['nama'] = $nama;
        $data_manage_user['username'] = $username;
        $data_manage_user['password'] = password_hash($password, PASSWORD_BCRYPT);
        $data_manage_user['status_lokasi'] = $status_lokasi;
        $data_manage_user['kode_level'] = $kode_level;
        $data_manage_user['level'] = $level;

        $check_username = $this->db_logistik_pt->get_where('user', array('username'=> $username ));
        
        if(empty( $this->input->post('hidden_id'))){
            if($check_username->num_rows() > 0){
                return "username_sudah_ada";
            }
            else {
                $data_manage_user["no"] = $no;

                $this->db_logistik_pt->insert('user',$data_manage_user);
                if($this->db_logistik_pt->affected_rows() > 0){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }
        }
        else{
            $id = $this->input->post('hidden_id');

            $data_manage_user["no"]   = $id;

            $this->db_logistik_pt->set($data_manage_user);
            $this->db_logistik_pt->where('no', $id);
            $this->db_logistik_pt->where('username', $username);
            $this->db_logistik_pt->update('user');
            if ($this->db_logistik_pt->affected_rows() > 0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
}
