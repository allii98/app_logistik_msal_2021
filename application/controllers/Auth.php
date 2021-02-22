<?php

date_default_timezone_set("Asia/Jakarta");

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$db_pt = check_db_pt();
		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
	}

	function login()
	{
		if (isset($_SESSION['status_login'])) {
			redirect('dashboard');
		} else {
			if (isset($_POST['submit'])) {
				$agent = $this->platform->agent();
				$ip = $this->input->ip_address();

				$username = $this->security->xss_clean($this->input->post('username'));
				$password = $this->security->xss_clean($this->input->post('password'));
				$periode = $this->security->xss_clean($this->input->post('periode'));

				// $ldapconn = ldap_connect("192.168.1.234") or die("Could not connect to LDAP Server");
				// if($username == '404'){
				$get_username = $this->db_logistik_pt->get_where('usr', array('username' => $username));
				$user = $get_username->row();

				$pt_alias = $this->input->post('pt_alias');

				if ($get_username->num_rows() > 0 && password_verify($password, $user->password)) {
					// switch ($pt_alias) {
					// 	case 'MSAL':
					// 		# code...
					// 		break;
					// 	case 'MAPA':
					// 		# code...
					// 		break;
					// 	case 'PSAM':
					// 		# code...
					// 		break;
					// 	case 'PEAK':
					// 		# code...
					// 		break;
					// 	default:
					// 		# code...
					// 		break;
					// }

					switch ($user->status_lokasi) {
						case 'HO':
							$get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '01'));
							$pt 	= $get_pt->row();

							$kode_pt = $pt->kodetxt;
							$nama_pt = $pt->PT;
							break;
						case 'RO':
							$get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '02'));
							$pt 	= $get_pt->row();

							$kode_pt = $pt->kodetxt;
							$nama_pt = $pt->PT;
							break;
						case 'SITE':
							$get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '06'));
							$pt 	= $get_pt->row();

							$kode_pt = $pt->kodetxt;
							$nama_pt = $pt->PT;
							break;
						case 'PKS':
							$get_pt = $this->db_logistik_pt->get_where('pt', array('kodetxt' => '03'));
							$pt 	= $get_pt->row();

							$kode_pt = $pt->kodetxt;
							$nama_pt = $pt->PT;
							break;
						default:
							# code...
							break;
					}

					$d_periode =  date("j", strtotime($periode));

					if ($d_periode >= 26) {
						$ym_periode = date('Ym', strtotime($periode . " +1 month"));
					} else {
						$ym_periode = date('Ym', strtotime($periode));
					}

					$Ymd_periode =  date('Y-m-d', strtotime($periode));
					// switch($username){
					// 	case 'KTU';
					// 		$kode_l = '11';
					// 	break;
					// 	case 'Kasie Gudang';
					// 		$kode_l = '18';
					// 	break;
					// 	case 'Asisten Afdeling';
					// 		$kode_l = '20';
					// 	break;
					// 	case 'Kepala Kebun';
					// 		$kode_l = '10';
					// 	break;
					// 	case 'Kepala Kebun';
					// 		$kode_l = '10';
					// 	break;
					// }

					$this->session->set_userdata(array(
						'id_user' => $user->no,
						'user' => $user->nama,
						'status_lokasi' => $user->status_lokasi, //HO, RO, SITE, PKS
						// 'app_pt' => 'MSAL', //MSAL, MAPA, PSAM, PEAK
						'app_pt' => $pt_alias,
						'kode_pt' => $kode_pt,
						'pt' => $nama_pt,
						// 'level' => $user->level,
						// 'kode_level' => $user->kode_level,
						'status_login'	=> 'oke',
						'dept' => $user->dept,
						'periode' => $periode,
						'ym_periode' => $ym_periode,
						'Ymd_periode' => $Ymd_periode,
						//11. KTU, 
						//12. Kasie HRD GA, 
						//13. Kasie Agronomi, 
						//14. Kasie Pabrik, 
						//15. GM, s/t/d
						//16. Mill Manager, s/t
						//17. Pimpinan Dept., 
						//21. Dept. Head, s/t
						//22. Dir. Ops, 
						//23. Dept. Head Purchasing, 
						//24. Dir. Purchasing s/t
						//31. User HO Pembuat SPP
						//32. User RO Pembuat SPP
						//33. User SITE Pembuat SPP
						//34. User PKS Pembuat SPP
					));

					// header("Location: http://mips.msalgroup.com:8181/mips/user/index.php/dashboard");
					$base = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
					$url = $base . "://" . $_SERVER['HTTP_HOST'] . "/app_logistik_msal_2021/index.php/dashboard";
					// var_dump($url);exit();
					header("Location: " . $url);
				} else {
					// echo "username atau password salah";
					$this->session->set_flashdata('notif', '
							<div class="center">
								<div class="alert alert-danger" role="alert"> 
								Username atau Password Salah !
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								</button>
								</div>
							</div>
							');
					redirect('auth/login');
				}

				// $this->session->set_userdata(array(
				// 	'status_login'		=> 'oke',
				// 	'username'			=> 'adioza',
				// 	'nik'				=> 'MSAL18100001',
				// 	'divisi'			=> 'MIS',
				// 	'departemen'		=> 'MIS',
				// 	'lokasi_kerja'		=> 'HO',
				// 	'jabatan'			=> 'IT Programmer',
				// 	'pt'				=> 'PT Mulia Sawit Agro Lestari',
				// 	'atasan_langsung'	=> 'MSAL18090168',
				// ));
				// }
				// else
				// if($ldapconn)
				// {
				// 	$dn = "DC=msalgroup,DC=com";
				// 	ldap_set_option(@$ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
				// 	ldap_set_option(@$ldapconn, LDAP_OPT_REFERRALS, 0);

				// 	$us_ldap = "cn=admin,dc=msalgroup,dc=com";
				// 	$pw_ldap = "msaljkt@88";
				// 	$ldapbind = ldap_bind($ldapconn,$us_ldap,$pw_ldap);

				// 	if($ldapbind){
				// 		@$sr 	 = ldap_search($ldapconn, $dn, "uid=$username") or die("Could not search.");
				// 		@$srmail = ldap_search($ldapconn, $dn, "mail=$username@msalgroup.com") or die("Could not search.");

				// 		@$info 	 	= ldap_get_entries($ldapconn, @$sr);
				// 		@$infomail 	= ldap_get_entries($ldapconn, @$srmail);

				// 		@$usermail	= substr(@$infomail[0]["mail"][0], 0, strpos(@$infomail[0]["mail"][0], '@'));
				// 		@$bind 		= @ldap_bind($ldapconn, $info[0][dn], $password);

				// 		$employeenumber = @$info[0]["employeenumber"][0];

				// 		if(@$info[0]["uid"][0] != $username){
				// 			// echo "username ga ada di ldap";
				// 			$this->session->set_flashdata('notif','
				// 				<div class="center">
				// 					<div class="alert alert-danger" role="alert"> 
				// 					Username tidak ditemukan !
				// 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				// 					</button>
				// 					</div>
				// 				</div>
				// 				');
				// 			redirect('auth/login');
				// 		}
				// 		else{
				// 			if((@$info[0]["uid"][0] == $username && $bind)){
				// 				// echo "login benar";
				// 				$query_msal = "SELECT a.nik, a.divisi, a.departemen, a.lokasi_kerja, a.jabatan, a.pt, a.atasan_langsung, a.status_aktif, b.nama_karyawan
				// 		            FROM msalgrou_ho.master_pegawai a
				// 		            JOIN msalgrou_ho.detail_data_diri b ON a.nik = b.nik
				// 		            WHERE a.nik LIKE '$employeenumber%' OR b.nama_karyawan LIKE '%$employeenumber%'
				// 		            AND a.status_aktif = '1'";
				// 		       	$query_mapa = "SELECT a.nik, a.divisi, a.departemen, a.lokasi_kerja, a.jabatan, a.pt, a.atasan_langsung, a.status_aktif, b.nama_karyawan
				// 		            FROM msalgrou_ho_mapa.master_pegawai a
				// 		            JOIN msalgrou_ho_mapa.detail_data_diri b ON a.nik = b.nik
				// 		            WHERE a.nik LIKE '$employeenumber%' OR b.nama_karyawan LIKE '%$employeenumber%'
				// 		            AND a.status_aktif = '1'";
				// 		        $query_psam = "SELECT a.nik, a.divisi, a.departemen, a.lokasi_kerja, a.jabatan, a.pt, a.atasan_langsung, a.status_aktif, b.nama_karyawan
				// 		            FROM msalgrou_ho_psam.master_pegawai a
				// 		            JOIN msalgrou_ho_psam.detail_data_diri b ON a.nik = b.nik
				// 		            WHERE a.nik LIKE '$employeenumber%' OR b.nama_karyawan LIKE '%$employeenumber%'
				// 		            AND a.status_aktif = '1'";
				// 		        $query_peak = "SELECT a.nik, a.divisi, a.departemen, a.lokasi_kerja, a.jabatan, a.pt, a.atasan_langsung, a.status_aktif, b.nama_karyawan
				// 		            FROM msalgrou_ho_peak.master_pegawai a
				// 		            JOIN msalgrou_ho_peak.detail_data_diri b ON a.nik = b.nik
				// 		            WHERE a.nik LIKE '$employeenumber%' OR b.nama_karyawan LIKE '%$employeenumber%'
				// 		            AND a.status_aktif = '1'";

				// 				if($this->db->query($query_msal)->num_rows() > 0){
				// 		        	$get_detail = $this->db->query($query_msal)->row();
				// 		        }
				// 		        else if($this->db_mapa->query($query_mapa)->num_rows() > 0){
				// 		        	$get_detail = $this->db_mapa->query($query_mapa)->row();	
				// 		        }
				// 		        else if($this->db_psam->query($query_psam)->num_rows() > 0){
				// 		        	$get_detail = $this->db_psam->query($query_psam)->row();	
				// 		        }
				// 		        else if($this->db_peak->query($query_peak)->num_rows() > 0){
				// 		        	$get_detail = $this->db_peak->query($query_peak)->row();	
				// 		        }
				// 		        if(!empty($get_detail->divisi)){
				// 	        		$divisi = $get_detail->divisi;
				// 	        	}
				// 	        	else{
				// 	        		$divisi = "";
				// 	        	}

				// 	        	if(!empty($get_detail->departemen)){
				// 	        		$departemen = $get_detail->departemen;
				// 	        	}
				// 	        	else{
				// 	        		$departemen = "";
				// 	        	}
				// 	        	if(!empty($get_detail->lokasi_kerja)){
				// 	        		$lokasi_kerja = $get_detail->lokasi_kerja;
				// 	        	}
				// 	        	else{
				// 	        		$lokasi_kerja = "";
				// 	        	}
				// 	        	if(!empty($get_detail->jabatan)){
				// 	        		$jabatan = $get_detail->jabatan;
				// 	        	}
				// 	        	else{
				// 	        		$jabatan = "";
				// 	        	}
				// 	        	if(!empty($get_detail->pt)){
				// 	        		$pt = $get_detail->pt;
				// 	        	}
				// 	        	else{
				// 	        		$pt = "";
				// 	        	}
				// 	        	if(!empty($get_detail->atasan_langsung)){
				// 	        		$atasan_langsung = $get_detail->atasan_langsung;
				// 	        	}
				// 	        	else{
				// 	        		$atasan_langsung = "";
				// 	        	}

				// 				$this->session->set_userdata(array(
				// 					'status_login'		=> 'oke',
				// 					'username'			=> $username,
				// 					'nik'				=> $employeenumber,
				// 					'divisi'			=> $divisi,
				// 					'departemen'		=> $departemen,
				// 					'lokasi_kerja'		=> $lokasi_kerja,
				// 					'jabatan'			=> $jabatan,
				// 					'pt'				=> $pt,
				// 					'atasan_langsung'	=> $atasan_langsung,
				// 				));

				// 				// header("Location: http://mips.msalgroup.com:8181/mips/user/index.php/dashboard");
				// 				$base = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
				// 				$url = $base."://".$_SERVER['HTTP_HOST']."/mips/user/index.php/dashboard";
				// 				header("Location: ".$url);
				// 			}
				// 			else{
				// 				// echo "password salah";
				// 				$this->session->set_flashdata('notif','
				// 					<div class="center">
				// 						<div class="alert alert-danger" role="alert"> 
				// 						Password Salah !
				// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				// 						</button>
				// 						</div>
				// 					</div>
				// 					');
				// 				redirect('auth/login');
				// 			}
				// 		}
				// 		ldap_close($ldapconn);
				// 	}
				// 	else{
				// 		// echo "enggak konek LDAP";
				// 		$this->session->set_flashdata('notif','
				// 			<div class="center">
				// 				<div class="alert alert-danger" role="alert"> 
				// 				Failed connect to LDAP !
				// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				// 				</button>
				// 				</div>
				// 			</div>
				// 			');
				// 		redirect('auth/login');
				// 	}
				// }
			} else {
				$this->load->view('V_auth/vw_auth_login');
			}
		}
	}

	function network_check()
	{
		$connected = @fsockopen("192.168.1.231", 80);
		if ($connected) {
			echo "connected";
		} else {
			echo "disconnect";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		// $array_session = array('id_user','user','status_lokasi','app_pt','kode_pt','pt','level','kode_level','status_login','periode','ym_periode','Ymd_periode');
		// $this->session->unset_userdata($array_session);
		redirect('auth/login');
	}

	public function add_userzzxxzxcxzcxzcasdadaqweqewqxdadasdd()
	{
		$get_user = $this->db_logistik_pt->get('user')->result();

		foreach ($get_user as $list_user) {
			$query_no = "SELECT MAX(no)+1 as max_no FROM `user`";
			$get_no = $this->db_logistik_pt->query($query_no)->row();

			$no = $get_no->max_no;
			$nama = $list_user->nama;
			$username = $list_user->username;
			$password = "1";
			$status_lokasi = $list_user->status_lokasi;
			$kode_level = $list_user->kode_level;
			$level = $list_user->level;

			$datainsert['no'] = $no;
			$datainsert['nama'] = $nama;
			$datainsert['username'] = $username;
			$datainsert['password'] = password_hash($password, PASSWORD_BCRYPT);
			$datainsert['status_lokasi'] = $status_lokasi;
			$datainsert['kode_level'] = $kode_level;
			$datainsert['level'] = $level;

			// $this->db_logistik_pt->insert('user', $datainsert);	
		}
	}
}