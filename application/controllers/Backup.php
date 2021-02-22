<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set('max_execution_time','0');
ini_set('memory_limit', '-1');

class Backup extends CI_Controller
{

  function __construct(){
    parent::__construct();
    // $this->db_logistik = $this->load->database('db_logistik',TRUE);
    // $this->db_logistik_pt = $this->load->database('db_logistik_'.$db_pt,TRUE);
  }

  function backup_table(){
    $this->load->dbutil();
    $prefs = array(
            'tables'     => array('stockawal', 'keluarbrgitem','stockkeluar'),
            // Array table yang akan dibackup
            'ignore'     => array(),
            // Daftar table yang tidak akan dibackup
            'format'     => 'txt',
            // gzip, zip, txt format filenya
            'filename'   => 'mybackup.sql',
            // Nama file
            'add_drop'   => TRUE, 
            // Untuk menambahkan drop table di backup
            'add_insert' => TRUE,
            // Untuk menambahkan data insert di file backup
            'newline'    => "\n"
            // Baris baru yang digunakan dalam file backup
    );

    $backup = $this->dbutil->backup($prefs);

    // Load the download helper dan melalukan download ke komputer
    $this->load->helper('download');
    force_download('mybackup.sql', $backup);
  }
   
  // backup files in directory
  function files()
  {
     $opt = array(
       'src' => '../www', // dir name to backup
       'dst' => 'backup/files' // dir name backup output destination
     );
     
     // Codeigniter v3x
     $this->load->library('recurseZip_lib', $opt);
     $download = $this->recursezip_lib->compress();
     
     /* Codeigniter v2x
     $zip    = $this->load->library('recurseZip_lib', $opt);     
     $download = $zip->compress();
     */
     
     redirect(base_url($download));
  }

  public function index(){
    $this->load->dbutil();
         // $this->load->dbutil($this->db_logistik,TRUE);
    // $this->myutil = $this->load->dbutil($this->db_logistik, TRUE);
    // $this->myutil = $this->load->dbutil($this->db_logistik, TRUE);
    $dbs = $this->dbutil->list_databases();
    foreach ($dbs as $db)
    {
        echo $db.'<br />';
    }
  }
   
  // backup database.sql
  public function db()
  {
     $this->load->dbutil();
     // $this->load->dbutil($this->db_logistik,TRUE);
     // $this->load->dbutil($this->db_logistik_pt,TRUE);
   
     $prefs = array(
       'format' => 'zip',
       'filename' => 'my_db_backup.sql'
     );
   
     $backup =& $this->dbutil->backup($prefs);
   
     $db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip'; // file name
     $save  = 'backup/db/' . $db_name; // dir name backup output destination
   
     $this->load->helper('file');
     write_file($save, $backup);
   
     $this->load->helper('download');
     force_download($db_name, $backup);
  }
   
}