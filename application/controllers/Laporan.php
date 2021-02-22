<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

ini_set('memory_limit', -1);
ini_set('max_execution_time', '0');

class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_session();

		$db_pt = check_db_pt();

		$this->db_logistik = $this->load->database('db_logistik', TRUE);
		$this->db_logistik_pt = $this->load->database('db_logistik_' . $db_pt, TRUE);
		$this->load->model('M_laporan');
	}

	function cari_devisi()
	{
		$lokasi = $this->session->userdata('status_lokasi');
		if ($lokasi == 'SITE') {
			$query = "SELECT PT, kodetxt FROM pt_copy WHERE kodetxt IN ('06', '07') ORDER BY kodetxt ASC";
		} else if ($lokasi == 'HO') {
			$query = "SELECT PT, kodetxt FROM pt_copy ORDER BY kodetxt ASC";
		} else {
			$query = "SELECT PT, kodetxt FROM pt_copy WHERE PT LIKE '%$lokasi%' ORDER BY kodetxt ASC";
		}

		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function list_group_brg()
	{
		$query = "SELECT DISTINCT(grp) FROM kodebar ";

		$data = $this->db_logistik->query($query)->result();
		echo json_encode($data);
	}

	function cari_bagian()
	{
		$query = "SELECT kode, nama FROM dept ORDER BY kode ASC";
		$data = $this->db_logistik_pt->query($query)->result();
		echo json_encode($data);
	}

	function list_barang()
	{
		$data = $this->M_laporan->get_list_barang();
		echo json_encode($data);
	}

	function tampilkan_spp()
	{
		$data = $this->M_laporan->get_data_spp();
		echo json_encode($data);
	}

	function listPOCetakan()
	{
		$data = $this->M_laporan->get_list_po_cetakan();
		echo json_encode($data);
	}
	function listPPCetakan()
	{
		$data = $this->M_laporan->get_list_pp_cetakan();
		echo json_encode($data);
	}
	function listLapLPBSlip()
	{
		$data = $this->M_laporan->get_list_lap_lpb_slip();
		echo json_encode($data);
	}
	function listLapLPBPO()
	{
		$data = $this->M_laporan->get_list_lap_lpb_po();
		echo json_encode($data);
	}
	function listLapLPBSlipR()
	{
		$data = $this->M_laporan->get_list_lap_lpb_slip_r();
		echo json_encode($data);
	}
	function listLapSlipBKB()
	{
		$data = $this->M_laporan->get_list_lap_slip_bkb();
		echo json_encode($data);
	}
	function listLapBgnTgl()
	{
		$data = $this->M_laporan->get_list_lap_bgn_tgl();
		echo json_encode($data);
	}

	function print_lap_spp()
	{
		$noref = str_replace('.', '/', $this->uri->segment(3));
		$data['ppo'] = $this->db_logistik_pt->get_where('ppo', ['noreftxt' => $noref])->row();
		$data['item_ppo'] = $this->db_logistik_pt->get_where('item_ppo', array('noreftxt' => $noref))->result();

		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		// $mpdf->SetHTMLHeader('<h3>' . $this->session->userdata('pt') . '</h3>');
		$html = $this->load->view('V_lap/vw_lap_spp_print', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	function print_lap_po_register()
	{
		// ini_set('max_execution_time', '300');
		ini_set("pcre.backtrack_limit", "50000000");
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "SITE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		// $data['lokasi']= $this->uri->segment(3);
		$query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2";
		$data['po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;

		$data['lokasi1'] = $lokasi1;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		// $mpdf->SetHTMLHeader('<h3>' . $this->session->userdata('pt') . '</h3><h6>JL. Radio Dalam Raya, No. 87 A, RT 005/RW 014 Gandaria Utara, KebayoranBaru, Jakarta Selatan, DKI Jakarta Raya - 12140</h6>');
		$html = $this->load->view('V_lap/vw_lap_po_print_register', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		// var_dump($query);
	}

	function print_lap_po_cetakan()
	{
		$noreftxt = str_replace('.', '/', $this->uri->segment(3));
		$no_refppo = str_replace('.', '/', $this->uri->segment(4));
		$kode_supply = $this->uri->segment(5);
		$lokasi = $this->session->userdata('status_lokasi');
		$query = "SELECT * FROM po WHERE noreftxt = '" . $noreftxt . "' AND no_refppo = '" . $no_refppo . "'";
		$query2 = "SELECT * FROM pt WHERE PT LIKE '%$lokasi%'";
		$query3 = "SELECT * FROM supplier WHERE kode = '" . $kode_supply . "'";
		$query4 = "SELECT * FROM item_po WHERE noref = '" . $noreftxt . "' AND refppo = '" . $no_refppo . "'";
		$data['po'] = $this->db_logistik_pt->query($query)->row();
		$data['pt'] = $this->db_logistik_pt->query($query2)->row();
		$data['supply'] = $this->db_logistik->query($query3)->row();
		$data['item_po'] = $this->db_logistik_pt->query($query4)->result();
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('V_lap/vw_lap_po_print_cetakan', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lokal_r()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "ESTATE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND no_refppo LIKE '%SPPI%'";
		$data['po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('V_lap/vw_lap_po_print_lr', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_cash()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "SITE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND bayar = 'CASH'";
		$data['po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);
		$html = $this->load->view('V_lap/vw_lap_po_print_cs', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lokal_t()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = "'" . $this->uri->segment(6) . "-" . $this->uri->segment(5) . "-" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$tahun = $this->uri->segment(9);
		switch ($this->uri->segment(8)) {
			case '01':
				$bulan = "Januari";
				break;
			case '02':
				$bulan = "Februari";
				break;
			case '03':
				$bulan = "Maret";
				break;
			case '04':
				$bulan = "April";
				break;
			case '05':
				$bulan = "Mei";
				break;
			case '06':
				$bulan = "Juni";
				break;
			case '07':
				$bulan = "Juli";
				break;
			case '08':
				$bulan = "Agustus";
				break;
			case '09':
				$bulan = "September";
				break;
			case '10':
				$bulan = "Oktober";
				break;
			case '11':
				$bulan = "November";
				break;
			case '12':
				$bulan = "Desember";
				break;
			default:
				$bulan = "";
				break;
		}
		switch ($lokasi) {
			case '01':
				$lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				$lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				$lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '07':
			case '06':
				$lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "ESTATE";
				break;
			default:
				$lokasi = "";
				$lokasi1 = "";
				break;
		}
		$query = "SELECT * FROM item_po WHERE batal = '0' $lokasi AND tglpo BETWEEN $tanggal1 AND $tanggal2 AND refppo LIKE '%SPPI%'";
		$data['item_po'] = $this->db_logistik_pt->query($query)->result();
		$data['periode'] = $bulan . " " . $tahun;
		$data['lokasi1'] = $lokasi1;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_print_lt', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_pp_register()
	{
		$lokasi = $this->uri->segment(3);
		switch ($lokasi) {
			case '01':
				// $lokasi = "AND lokasi = 'HO'";
				$lokasi1 = "HO";
				break;
			case '02':
				// $lokasi = "AND lokasi = 'RO'";
				$lokasi1 = "RO";
				break;
			case '03':
				// $lokasi = "AND lokasi = 'PKS'";
				$lokasi1 = "PKS";
				break;
			case '06':
				$lokasi1 = "ESTATE1";
				break;
			case '07':
				// $lokasi = "AND lokasi = 'SITE'";
				$lokasi1 = "ESTATE2";
				break;
			default:
				// $lokasi = "";
				$lokasi1 = "";
				break;
		}
		$tanggal1 = "'" . $this->uri->segment(6) . "/" . $this->uri->segment(5) . "/" . $this->uri->segment(4) . "'";
		$tanggal2 = "'" . $this->uri->segment(9) . "/" . $this->uri->segment(8) . "/" . $this->uri->segment(7) . "'";
		$query = "SELECT * FROM pp WHERE batal = '0' AND kodept = '$lokasi' AND tglpp BETWEEN $tanggal1 AND $tanggal2 ";
		$data['pp'] = $this->db_logistik_pt->query($query)->result();
		$tanggal1 = str_replace("/", "-", ($tanggal1));
		$tanggal1 = str_replace("'", "", ($tanggal1));
		$tanggal1 = date_format(date_create($tanggal1), 'd/m/Y');
		$tanggal2 = str_replace("/", "-", ($tanggal2));
		$tanggal2 = str_replace("'", "", ($tanggal2));
		$tanggal2 = date_format(date_create($tanggal2), 'd/m/Y');
		$data['periode'] = str_replace("'", " ", ($tanggal1 . ' - ' . $tanggal2));
		$data['lokasi'] = $lokasi1;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_pp_print_r', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}

	function print_lap_pp_cetakan()
	{
		$nopp = $this->uri->segment(3);
		$ref_po = str_replace(".", "/", $this->uri->segment(4));
		$kode_supply = $this->uri->segment(5);
		$query = "SELECT * FROM pp WHERE nopp='$nopp' AND ref_po = '$ref_po' AND kode_supply= '$kode_supply'";
		$data['pp'] = $this->db_logistik_pt->query($query)->row();
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_pp_print_c', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_spp_po_semua()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_spp_po_print_semua', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_spp_po_sdhpo()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_spp_po_print_sdhpo', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_spp_po_blmpo()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_spp_po_print_blmpo', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_spp_po_graphic()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_spp_po_print_graphic', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();

		// $this->load->view('V_lap/vw_lap_spp_po_print_graphic');
	}
	function print_lap_po_lpb_semua()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_semua', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_bybrg()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_bybrg', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_bysup()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_bysup', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_blm_lpb_po()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_blm_lpb_po', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_po_cash_sh()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_po_cash_sh', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_po_cash_blm_lpb()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_po_cash_blm_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_po_lpb_po_gab()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_po_lpb_print_po_gab', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_data_tr_semua()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'margin_top' => '15',
			'orientation' => 'p'
		]);

		$html = $this->load->view('V_lap/vw_lap_data_tr_print_semua', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_register()
	{
		ini_set("pcre.backtrack_limit", "50000000");
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT a.ttg, b.tglinput, a.nopo, a.nama_supply, b.nabar, b.satuan, b.qty, b.kodebar, b.ket FROM stokmasuk a INNER JOIN masukitem b USING (ttg) WHERE b.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND kdpt = '$lokasi'";
		$data['item_lpb'] = $this->db_logistik_pt->query($query)->result();
		$tanggal1 = date_format(date_create($tanggal1), 'd/m/Y');
		$tanggal2 = date_format(date_create($tanggal2), 'd/m/Y');
		$data['periode'] = $tanggal1 . ' - ' . $tanggal2;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_register', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function cekcetak()
	{
		ini_set("pcre.backtrack_limit", "50000000");
		$noref = str_replace('.', '/', $this->input->post('noref'));
		$refpo = str_replace('.', '/', $this->input->post('refpo'));
		$query = "SELECT cetak FROM stokmasuk WHERE noref = '$noref' AND refpo = '$refpo'";
		$lpb = $this->db_logistik_pt->query($query)->row();
		// var_dump($lpb->cetak,'tes');
		if ($lpb->cetak == NULL) {
			$query_cetak = "UPDATE stokmasuk SET cetak = '1' WHERE noref = '$noref' AND refpo = '$refpo'";
			$lpb_cetak = $this->db_logistik_pt->query($query_cetak);
			if ($lpb_cetak) {
				$data = [
					'status' => 'true',
					'cetak' => '1'
				];
				echo json_encode($data);
			}
		} else if ($lpb->cetak == '1') {
			$query_cetak = "UPDATE stokmasuk SET cetak = '2' WHERE noref = '$noref' AND refpo = '$refpo'";
			$lpb_cetak = $this->db_logistik_pt->query($query_cetak);
			if ($lpb_cetak) {
				$data = [
					'status' => 'true',
					'cetak' => '2'
				];
				echo json_encode($data);
			}
		} else {
			$data = [
				'status' => 'false',
				'cetak' => '2'
			];
			echo json_encode($data);
		}
	}
	function print_lap_lpb_slip_lpb()
	{
		$noref = str_replace('.', '/', $this->uri->segment(3));
		$refpo = str_replace('.', '/', $this->uri->segment(4));
		// $dept = str_replace('.', ' ', $this->uri->segment(5));
		// $dept = str_replace('-', '&', $this->uri->segment(5));
		$query = "SELECT a.*, b.* FROM stokmasuk a, po b WHERE a.refpo = b.noreftxt AND a.noref = '$noref' AND a.refpo = '$refpo'";
		$data['lpb'] = $this->db_logistik_pt->query($query)->row();
		$query1 = "SELECT * FROM masukitem WHERE noref = '$noref' AND refpo = '$refpo'";
		$data['lpb_item'] = $this->db_logistik_pt->query($query1)->result();
		// $data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_slip_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_per_brg_lpb()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT DISTINCT kodebar, nabar, satuan FROM masukitem WHERE tgl BETWEEN '" . $tanggal1 . "' AND '" . $tanggal2 . "' AND kdpt = '" . $lokasi . "' AND batal = '0'";
		$data['brg'] = $this->db_logistik_pt->query($query)->result();
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$data['periode'] = (str_replace('-', '/', $tanggal1)) . '-' . (str_replace('-', '/', $tanggal2));
		$data['tanggal1'] = $tanggal1;
		$data['tanggal2'] = $tanggal2;
		$data['lokasi'] = $lok;
		$data['lokasi1'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_per_brg_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_per_tgl_lpb()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT DISTINCT tgl FROM masukitem WHERE tgl BETWEEN '" . $tanggal1 . "' AND '" . $tanggal2 . "' AND kdpt = '" . $lokasi . "' AND batal = '0'";
		$data['tgl'] = $this->db_logistik_pt->query($query)->result();
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$data['periode'] = (str_replace('-', '/', $tanggal1)) . '-' . (str_replace('-', '/', $tanggal2));
		$data['tanggal1'] = $tanggal1;
		$data['tanggal2'] = $tanggal2;
		$data['lokasi'] = $lok;
		$data['lokasi1'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_per_tgl_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_per_po_lpb()
	{
		$noref = str_replace('.', '/', $this->uri->segment(3));
		$refpo = str_replace('.', '/', $this->uri->segment(4));
		$data['tgl1'] = $this->uri->segment(5);
		$data['tgl2'] = $this->uri->segment(6);
		// $data['lokasi1'] = "Tes";
		$query = "SELECT * FROM stokmasuk WHERE noref = '$noref' AND refpo = '$refpo'";
		$data['st_msk'] = $this->db_logistik_pt->query($query)->row();
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_per_po_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_po_lokal_lpb()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT a.*, b.nama_supply FROM masukitem a, stokmasuk b WHERE a.refpo = b.refpo AND a.noref = b.noref AND a.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND a.kdpt = '$lokasi' AND a.refpo LIKE '%PO-Lokal%'";
		$data['per_po'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_po_lokal_lpb', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_po_asset()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT a.*, b.nama_supply FROM masukitem a, stokmasuk b WHERE a.refpo = b.refpo AND a.noref = b.noref AND a.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND a.kdpt = '$lokasi' AND a.refpo LIKE '%POA%'";
		$data['per_pol'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lokasi;
		$data['lokasi1'] = $lok;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_po_asset', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_mutasi()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$query = "SELECT a.*, b.nama_supply FROM masukitem a, stokmasuk b WHERE a.refpo = b.refpo AND a.noref = b.noref AND a.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND a.kdpt = '$lokasi' AND a.refpo LIKE '%MUTASI%'";
		$data['mutasi'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lokasi;
		$data['lokasi1'] = $lok;
		// $data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_mutasi', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_slip_retur()
	{
		$lokasi = $this->uri->segment(3);
		$noref = $this->uri->segment(4);
		$noref = str_replace("-", " ", $noref);
		$noref = str_replace(":", "/", $noref);
		$refpo = $this->uri->segment(5);
		$refpo = str_replace(".", "/", $refpo);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		// $query = "SELECT a.*, b.nama_supply FROM masukitem a, stokmasuk b WHERE a.refpo = b.refpo AND a.noref = b.noref AND a.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND a.kdpt = '$lokasi' AND a.refpo LIKE '%MUTASI%'";
		$query = "SELECT * FROM stokmasuk WHERE kode = '$lokasi' AND refpo ='$refpo' AND noref ='$noref'";
		$data['retur'] = $this->db_logistik_pt->query($query)->row();
		$data['lokasi'] = $lokasi;
		$data['lokasi1'] = $lok;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_retur', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_lpb_regis_retur()
	{
		$lokasi = $this->uri->segment(3);
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$query = "SELECT a.*, b.nama_supply FROM masukitem a, stokmasuk b WHERE a.refpo = b.refpo AND a.noref = b.noref AND a.tgl BETWEEN '$tanggal1' AND '$tanggal2' AND a.kdpt = '$lokasi' AND a.refpo LIKE '%RET%'";
		$data['r_retur'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lokasi;
		$data['lokasi1'] = $lok;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_lpb_print_regis_retur', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_register_bkb()
	{
		ini_set("pcre.backtrack_limit", "5000000");
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$bagian = $this->uri->segment(10);
		if ($bagian == "HRD.-.UMUM") $bagian = "UMUM.-.HRD";
		$bagian = str_replace('-', '&', $bagian);
		$bagian = str_replace('.', ' ', $bagian);
		if ($bagian == 'Semua') {
			$q_bag = '';
		} else {
			$q_bag = "AND b.bag = '" . $bagian . "'";
		}
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.periode BETWEEN '$tanggal1' AND '$tanggal2' AND a.batal = '0' AND a.pt LIKE '%$lok%' $q_bag ORDER BY a.periode ASC";
		$data['bkb'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_register', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_slip_bkb()
	{
		ini_set("pcre.backtrack_limit", "5000000");
		// $NO_REF = $this->uri->segment(3);
		$NO_REF = str_replace('.', '/', $this->uri->segment(3));
		$skb = str_replace('.', '/', $this->uri->segment(4));
		$tgl1 = str_replace('-', '/', $this->uri->segment(6));
		$tgl2 = str_replace('-', '/', $this->uri->segment(7));
		$bag = $this->uri->segment(5);
		$bag = str_replace('-', '&', $bag);
		$bag = str_replace('.', ' ', $bag);
		$query = "SELECT * FROM stockkeluar WHERE NO_REF = '$NO_REF' AND skb='$skb' ";
		$data['slip_bkb'] = $this->db_logistik_pt->query($query)->row();
		$data['bag'] = $bag;
		$data['tgl1'] = $tgl1;
		$data['tgl2'] = $tgl2;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_slip', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_brg()
	{
		ini_set("pcre.backtrack_limit", "5000000");
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$bagian = $this->uri->segment(10);
		if ($bagian == "HRD.-.UMUM") $bagian = "UMUM.-.HRD";
		$bagian = str_replace('-', '&', $bagian);
		$bagian = str_replace('.', ' ', $bagian);
		if ($bagian == 'Semua') {
			$q_bag = '';
		} else {
			$q_bag = "AND b.bag = '" . $bagian . "'";
		}
		$tanggal1 = $this->uri->segment(6) . '-' . $this->uri->segment(5) . '-' . $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(9) . '-' . $this->uri->segment(8) . '-' . $this->uri->segment(7);
		$query = "SELECT DISTINCT a.kodebar, a.nabar, a.satuan, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND  a.periode BETWEEN '$tanggal1' AND '$tanggal2' AND a.batal = '0' AND a.pt LIKE '%$lok%' $q_bag";
		$data['bkb_brg'] = $this->db_logistik_pt->query($query)->result();
		$data['tgl1'] = $tanggal1;
		$data['tgl2'] = $tanggal2;
		$data['lokasi'] = $lok;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_brg', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_tgl()
	{
		ini_set("pcre.backtrack_limit", "50000000");
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tgl1 = str_replace('.', '-', $this->uri->segment(4));
		$tgl2 = str_replace('.', '-', $this->uri->segment(5));

		$tgl14 = date_format(date_create($tgl1), 'Y-m-d');
		$tgl15 = date_format(date_create($tgl2), 'Y-m-d');
		$bag = $this->uri->segment(6);
		if ($bag == 'Semua') {
			$q_bag = '';
		} else {
			$q_bag = "AND b.bag = '$bag'";
		}
		$query = "SELECT DISTINCT tgl FROM keluarbrgitem WHERE tgl BETWEEN '$tgl14' AND '$tgl15' AND pt LIKE '%$lok%' AND batal = '0'";
		$data['p_tgl'] = $this->db_logistik_pt->query($query)->result();
		$data['lokasi'] = $lok;
		$data['tgl1'] = str_replace('.', '/', $this->uri->segment(4));
		$data['tgl2'] = str_replace('.', '/', $this->uri->segment(5));
		$data['bag'] = $bag;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_tgl', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_bgn_rinci_tgl()
	{
		set_time_limit(0);
		ini_set('memory_limit', '20000M');
		ini_set("pcre.backtrack_limit", "50000000");
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == 'Semua') {
			$q_bag = '';
		} else {
			$q_bag = "AND bag = '$bagian'";
		}
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_bgn_rinci_tgl', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bgn_tgl_rinci_bkb()
	{
		set_time_limit(0);
		ini_set('memory_limit', '200000M');
		ini_set("pcre.backtrack_limit", "50000000");
		$afd = $this->uri->segment(3);
		$tperiode1 = $this->uri->segment(4);
		$tperiode2 = $this->uri->segment(5);
		$cbagian = str_replace('.', ' ', $this->uri->segment(6));
		$lokasi = $this->uri->segment(7);
		$query = "SELECT a.*, b.bag FROM keluarbrgitem a, stockkeluar b WHERE a.NO_REF = b.NO_REF AND a.pt LIKE '%$lokasi%' AND a.periode BETWEEN '$tperiode1' AND '$tperiode2' AND a.batal = '0' AND b.bag = '$cbagian' AND a.afd ='$afd'";
		$data['list_afd'] = $this->db_logistik_pt->query($query)->result();
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_bgn_tgl', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_bgn_grp_brg()
	{
		set_time_limit(0);
		ini_set('memory_limit', '200000M');
		ini_set('pcre.backtrack_limit', '50000000');
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_bgn_grp_brg', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_kerja()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_kerja', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_mutasi()
	{
		ini_set("pcre.backtrack_limit", "50000000");
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$tgl1 = str_replace('.', '-', $tanggal1);
		$tgl2 = str_replace('.', '-', $tanggal2);
		$tgl1 = date_format(date_create($tgl1), 'Y-m-d');
		$tgl2 = date_format(date_create($tgl2), 'Y-m-d');
		// $bagian = $this->uri->segment(6);
		// if($bagian == 'HRD.-.UMUM')$bagian="UMUM.-.HRD";
		// $bagian = str_replace('.',' ',$bagian);
		// $bagian = str_replace('-','&',$bagian);
		// if($bagian == 'Semua'){
		// 	$q_dev = '';
		// }else{
		// 	$q_dev = "AND b.bag = '$bagian'";
		// }
		$query = "SELECT * FROM keluarbrgitem  WHERE ketsub LIKE 'PT%' AND pt LIKE '%$lok%' AND periode BETWEEN '$tgl1' AND '$tgl2'";
		$data['bmut'] = $this->db_logistik_pt->query($query)->result();
		$data['lokasi1'] = $lokasi;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_mutasi', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_bgn_grp_brg_n()
	{
		set_time_limit(0);
		ini_set('memory_limit', '200000M');
		ini_set('pcre.backtrack_limit', '50000000');
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_bgn_grp_brg_n', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_per_kerja1()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_per_kerja1', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_summary_rsh()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_summary_rsh', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_sum_blok_ub()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_sum_blok_ub', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_bkb_sum_blok_pk()
	{
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$lok = 'HO';
		} else if ($lokasi == '02') {
			$lok = 'RO';
		} else if ($lokasi == '03') {
			$lok = 'PKS';
		} else if ($lokasi == '06') {
			$lok = 'ESTATE1';
		} else if ($lokasi == '07') {
			$lok = 'ESTATE2';
		}
		$tanggal1 = $this->uri->segment(4);
		$tanggal2 = $this->uri->segment(5);
		$p1 = date_format(date_create(str_replace('.', '-', $tanggal1)), 'Y-m-d');
		$p2 = date_format(date_create(str_replace('.', '-', $tanggal2)), 'Y-m-d');
		$bagian = $this->uri->segment(6);
		if ($bagian == 'HRD.-.UMUM') $bagian = 'UMUM.-.HRD';
		$bagian = str_replace('.', ' ', $bagian);
		$bagian = str_replace('-', '&', $bagian);
		if ($bagian == "TANAMAN" || $bagian == "TANAMAN UMUM") {
			$query = "SELECT DISTINCT(afd) FROM keluarbrgitem WHERE pt LIKE '%$lok%' AND periode BETWEEN '$p1' AND '$p2' AND batal = '0' ORDER BY afd ASC";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		} else {
			$query = "SELECT DISTINCT(bag) FROM stockkeluar WHERE pt LIKE '%$lok%' AND periode1 BETWEEN '$p1' AND '$p2' AND bag = '$bagian' AND batal = '0'";
			$data['bt'] = $this->db_logistik_pt->query($query)->result();
		}
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$data['pt'] = $lok;
		$data['bagian'] = $bagian;
		$dev = $this->uri->segment(7);
		$dev = str_replace('._', '(', $dev);
		$dev = str_replace('_.', ')', $dev);
		$dev = str_replace('-', ' ', $dev);
		$data['dev'] = $dev;
		$data['periode'] = str_replace('.', '/', $tanggal1) . ' - ' . str_replace('.', '/', $tanggal2);
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_sum_blok_pk', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_rsh_rinci()
	{
		ini_set('pcre.backtrack_limit', '50000000');
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$posisi = 'HO';
		} else if ($lokasi == '02') {
			$posisi = 'RO';
		} else if ($lokasi == '03') {
			$posisi = 'PKS';
		} else if ($lokasi == '06') {
			$posisi = 'ESTATE1';
		} else if ($lokasi == '07') {
			$posisi = 'ESTATE2';
		}
		$bagian = $this->uri->segment(4);
		if ($bagian == 'Semua') {
			$q_bag = "";
		} else {
			$q_bag = "AND a.grp = '$bagian'";
		}
		$kode_stok = $this->uri->segment(5);
		$txtperiode = $this->session->userdata('ym_periode');
		$periode = $this->session->userdata('Ymd_periode');
		$d_periode = date("j", strtotime($this->session->userdata('Ymd_periode')));
		if ($d_periode >= 26) {
			$p1 = date_format(date_create($periode), 'Y-m-') . '26';
			$periode = date('Y-m-d', strtotime($periode . " +1 month"));
			$p2 = date_format(date_create($periode), 'Y-m-') . '25';
		} else {
			$periode = date('Y-m-d', strtotime($periode));
			$p1 = date('Y-m-d', strtotime($periode . " -1 month"));
			$p1 = date_format(date_create($p1), 'Y-m-') . '26';
			$p2 = date_format(date_create($periode), 'Y-m-') . '25';
		}
		$periode = date_format(date_create($periode), 'M Y');
		if ($kode_stok == '') {
			$query = "SELECT DISTINCT b.kodebar, b.nabar FROM masukitem a, keluarbrgitem b WHERE a.kodebar = b.kodebar AND b.batal = '0' AND a.kdpt = '$lokasi' $q_bag AND a.tgl BETWEEN '$p1' AND '$p2'";
		} else {
			$query = "SELECT DISTINCT b.kodebar, b.nabar FROM masukitem a, keluarbrgitem b WHERE a.kodebar = b.kodebar AND b.batal = '0' AND b.kodebar='$kode_stok' AND a.kdpt = '$lokasi' $q_bag AND a.tgl BETWEEN '$p1' AND '$p2'";
		}
		$data['kode_stock'] = $this->db_logistik_pt->query($query)->result();
		$data['lokasi'] = $lokasi;
		$data['posisi'] = $posisi;
		$data['periode'] = $periode;
		$data['txtperiode'] = $txtperiode;
		$data['bagian'] = $bagian;
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_rsh_rinci', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_rsh_summary()
	{
		ini_set('pcre.backtrack_limit', '50000000');
		$lokasi = $this->uri->segment(3);
		if ($lokasi == '01') {
			$posisi = 'HO';
		} else if ($lokasi == '02') {
			$posisi = 'RO';
		} else if ($lokasi == '03') {
			$posisi = 'PKS';
		} else if ($lokasi == '06') {
			$posisi = 'ESTATE1';
		} else if ($lokasi == '07') {
			$posisi = 'ESTATE2';
		}
		$bagian = $this->uri->segment(4);
		if ($bagian == 'Semua') {
			$q_bag = "";
		} else {
			$q_bag = "AND a.grp = '$bagian'";
		}
		$kode_stok = $this->uri->segment(5);
		$txtperiode = $this->session->userdata('ym_periode');
		$periode = $this->session->userdata('Ymd_periode');
		$d_periode = date("j", strtotime($this->session->userdata('Ymd_periode')));
		if ($d_periode >= 26) {
			$p1 = date_format(date_create($periode), 'Y-m-') . '26';
			$periode = date('Y-m-d', strtotime($periode . " +1 month"));
			$p2 = date_format(date_create($periode), 'Y-m-') . '25';
		} else {
			$periode = date('Y-m-d', strtotime($periode));
			$p1 = date('Y-m-d', strtotime($periode . " -1 month"));
			$p1 = date_format(date_create($p1), 'Y-m-') . '26';
			$p2 = date_format(date_create($periode), 'Y-m-') . '25';
		}
		$periode = date_format(date_create($periode), 'M Y');
		if ($kode_stok == '') {
			$query = "SELECT DISTINCT b.kodebar, b.nabar FROM masukitem a, keluarbrgitem b WHERE a.kodebar = b.kodebar AND b.batal = '0' AND a.kdpt = '$lokasi' $q_bag AND a.tgl BETWEEN '$p1' AND '$p2'";
		} else {
			$query = "SELECT DISTINCT b.kodebar, b.nabar FROM masukitem a, keluarbrgitem b WHERE a.kodebar = b.kodebar AND b.batal = '0' AND b.kodebar='$kode_stok' AND a.kdpt = '$lokasi' $q_bag AND a.tgl BETWEEN '$p1' AND '$p2'";
		}
		$data['kode_stock'] = $this->db_logistik_pt->query($query)->result();
		$data['lokasi'] = $lokasi;
		$data['posisi'] = $posisi;
		$data['periode'] = $periode;
		$data['txtperiode'] = $txtperiode;
		$data['bagian'] = $bagian;
		$data['p1'] = $p1;
		$data['p2'] = $p2;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'L'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_rsh_summary', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	function print_lap_rsh_non_saldo()
	{
		$data['lokasi1'] = "Tes";
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [190, 236],
			'margin_top' => '15',
			'orientation' => 'P'
		]);

		$html = $this->load->view('V_lap/vw_lap_bkb_print_rsh_non_saldo', $data, true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}
