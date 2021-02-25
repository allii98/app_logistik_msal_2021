<style type="text/css">
	td.details-control {
		background: url('/app_logistik_msal/assets/icon/info.png') no-repeat center center;
		cursor: pointer;
	}

	tr.details td.details-control {
		background: url('/app_logistik_msal/assets/icon/minus.png') no-repeat center center;
	}

	@media (min-width: 768px) {
		.modal-xl {
			width: 90%;
			max-width: 1200px;
		}
	}

	.modal {
		overflow-y: auto;
	}

	/* /p.p_approval_1 {
		color: #1abb9c;
	}

	p.p_approval_3 {
		color: #d9534f;
	}

	p.p_approval_4 {
		color: #f0ad4e;
	} */
</style>

<?php

use phpDocumentor\Reflection\Types\This;

$level = $this->session->userdata('level');
$kode_level = $this->session->userdata('kode_level');
//11. KTU, 
//12. Kasie HRD GA, 
//13. Kasie Agronomi, 
//14. Kasie Pabrik, 
//15. GM, s/t
//16. Mill Manager, s/t
//17. Pimpinan Dept., 
//21. Dept. Head, s/t
//22. Dir. Ops, 
//23. Dept. Head Purchasing, 
//24. Dir. Purchasing s/t
if ($this->session->userdata('status_lokasi') == "PKS") {
	switch ($kode_level) {
		case "11":
		case "12":
		case "13":
		case "14":
		case "15":
			$status = "DIKETAHUI";
			$status2 = "4";
			$status3 = NULL;
			$status4 = NULL;
			break;
		case "16":
			$status = "DISETUJUI";
			$status2 = "1";
			$status3 = "TIDAK DISETUJUI";
			$status4 = "3";
			break;
		default:
			break;
	}
}
if ($this->session->userdata('status_lokasi') == "SITE") {
	switch ($kode_level) {
		case "11":
		case "12":
		case "13":
			$status = "DIKETAHUI";
			$status2 = "4";
			$status3 = NULL;
			$status4 = NULL;
			break;
		case "15":
			$status = "DISETUJUI";
			$status2 = "1";
			$status3 = "TIDAK DISETUJUI";
			$status4 = "3";
			break;
		default:
			break;
	}
}
if ($this->session->userdata('status_lokasi') == "HO" || $this->session->userdata('status_lokasi') == "RO") {
	switch ($kode_level) {
		case "22":
		case "23":
			$status = "DIKETAHUI";
			$status2 = "4";
			$status3 = NULL;
			$status4 = NULL;
			break;
		case "21":
		case "24":
			$status = "DISETUJUI";
			$status2 = "1";
			$status3 = "TIDAK DISETUJUI";
			$status4 = "3";
			break;
		default:
			break;
	}
}
// var_dump($this->session->userdata('status_lokasi'));
// var_dump($status2);
// var_dump($level);
// var_dump($kode_level);
// exit();
?>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>SPP <small>Surat Permintaan Pembelian</small></h2>
		</div>
		<!-- <div class="title_right">
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
		</div> -->
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<!-- <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalInputSPP">Input SPP</button> -->
				<div class="x_title">
					<h2>Approval SPP</h2>
					<div class="form-group nav navbar-right col-md-4">
						<div class="form-group">
							<select class="form-control" id="filter" name="filter"></select>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListSPP" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<!-- <th></th> -->
								<th>#</th>
								<th>Approval</th>
								<th>No.</th>
								<th>No. SPP</th>
								<th>No. Ref</th>
								<th>Tgl. Ref</th>
								<th>Tanggal</th>
								<th>Tgl. Terima</th>
								<th>Departemen</th>
								<th>Lokasi</th>
								<th>Keterangan</th>
								<th>Item Barang</th>
								<th>Status</th>
								<th>Input Oleh</th>
							</tr>
						</thead>
						<tbody id="tbody_list_po">
						</tbody>
					</table>
					<br />
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalApprovalSPP">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span></button>
					<h4 class="modal-title" id="myModalLabel">Approval SPP</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table id="tableApprovalSPP" width="100%" class="table table-striped table-bordered">
							<thead>
								<tr id="th_dept">
									<th>No</th>
									<th>No. SPP</th>
									<th>No. Ref SPP</th>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Sat</th>
									<th>Qty</th>
									<th>Stok</th>
									<th>Ket</th>
									<th>Status PO</th>
									<th>Approval</th>
								</tr>
							</thead>
							<tbody id="td_dept"></tbody>
						</table>
					</div>
				</div>
				<center>
					<div class="modal-body">
						<?php
						$thisUser = $this->session->userdata('dept');
						switch ($thisUser) {
							case "Purchasing":
						?>
								<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
								<button type="button" id="approve" class="btn btn-success btncon1">Approve</button>
								<button type="button" id="not" class="btn btn-danger btncon2">Not Approve</button>
						<?php
								break;
							default:
								break;
						}
						?>
					</div>
				</center>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalApproval">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel">Detail SPP</h4>
				</div>
				<div class="modal-body">
					<h5 id="h5_no_spp"></h5>
					<h5 id="h5_no_ref_spp"></h5>
					<input type="hidden" id="hidden_no_spp" name="hidden_no_spp">
					<input type="hidden" id="hidden_no_ref_spp" name="hidden_no_ref_spp">
					<div class="table-responsive">
						<table id="tableDetailSPP" class="table table-bordered">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Sat</th>
									<th>Qty</th>
									<th>Stok</th>
									<th>Keterangan</th>
									<th>Status SPP</th>
									<th>Status PO</th>
									<th>Koreksi</th>
									<?php
									switch ($kode_level) {
										case '11':
										case '12':
										case '13':
										case '14':
										case '15':
										case '16':
										case '21':
										case '22':
										case '23':
										case '24':
									?>
											<th>Approval</th>
										<?php
											break;
										default:
										?>
											<th>Kasie</th>
											<th>KTU</th>
											<th>GM</th>
											<th>Mill Manager</th>
											<th>Dept. Head</th>
											<th>Dir. Ops</th>
											<!-- <th>Dept. Head Purchasing</th>
					          		<th>Dir. Purchasing</th> -->
									<?php
											break;
									}
									?>
								</tr>
							</thead>
							<tbody id="tbody_detail_spp">
							</tbody>
						</table>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
								<!-- <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="modalSetujuSemua()">Setujui Semua</button> -->
								<!-- <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tidak disetujui Semua" id="btn_tidak_setuju_all" name="btn_tidak_setuju_all" onclick="modalTdkSetujuSemua()">Tidak disetujui Semua</button> -->
								<!-- <button class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Mengetahui Semua" id="btn_mengetahui_all" name="btn_mengetahui_all" onclick="modalSetujuSemua()">Mengetahui Semua</button> -->
								<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail Approval" id="btn_detail_approval" name="btn_detail_approval" onclick="modalDetailApproval()">Detail Approval</button>
							</div>

							<!-- <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4"> -->
							<?php
							// if(isset($status2) && $status2 == "1"){
							?>
							<!-- <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="modalSetujuSemua()">Setujui Semua</button> -->
							<?php
							// }
							// if(isset($status4) && $status4 == "3") {
							?>
							<!-- <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tidak disetujui Semua" id="btn_tidak_setuju_all" name="btn_tidak_setuju_all" onclick="modalTdkSetujuSemua()">Tidak disetujui Semua</button> -->
							<?php
							// }
							// if(isset($status2) && $status2 == "4") {
							?>
							<!-- <button class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Mengetahui Semua" id="btn_mengetahui_all" name="btn_mengetahui_all" onclick="modalSetujuSemua()">Mengetahui Semua</button> -->
							<?php
							// }
							// if((isset($status2) && $status2 == "4") || (isset($status4) && $status4 == "3") || (isset($status2) && $status2 == "4")) {
							?>
							<!-- <button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail Approval" id="btn_detail_approval" name="btn_detail_approval" onclick="modalDetailApproval()">Detail Approval</button> -->
							<?php
							// }
							?>
							<!-- </div> -->
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiSetuju">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Approval</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_setuju" name="hidden_id_setuju">
					<input type="hidden" id="hidden_noppotxt_setuju" name="hidden_noppotxt_setuju">
					<p>Apakah Anda Yakin ?</p>
				</div>
				<div class="modal-footer">
					<?php
					if ($status2 == "1") {
					?>
						<button type="button" class="btn btn-success" id="btn_setuju" onclick="setuju()">Setuju</button>
					<?php
					} elseif ($status2 == "4") {
					?>
						<button type="button" class="btn btn-warning" id="btn_mengetahui" onclick="setuju()">Mengetahui</button>
					<?php
					}
					?>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiTdkSetuju">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Approval</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_tdk_setuju" name="hidden_id_tdk_setuju">
					<input type="hidden" id="hidden_noppotxt_tdk_setuju" name="hidden_noppotxt_tdk_setuju">
					<p>Apakah Anda Yakin ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="btn_tidak_setuju" onclick="tidakSetuju()">Tidak Setuju</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalSetujuSemua">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Approval</h4>
				</div>
				<div class="modal-body">
					<p>Apakah Anda Yakin ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_setujuSemua" onclick="setujuAll()">Ya</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalTdkSetujuSemua">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Approval</h4>
				</div>
				<div class="modal-body">
					<p>Apakah Anda Yakin ingin tidak menyetujui semua ???</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="btn_tidak_setujuSemua" onclick="tidakSetujuAll()">Tidak Setuju</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalSPP">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal SPP</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_spp_batal" name="hidden_id_spp_batal">
					<p>Apakah Anda Yakin ingin membatalkan SPP <b id="b_no_spp_batal"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="batalSPP()">Batalkan SPP</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalHapusSPP">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus SPP</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_spp_hapus" name="hidden_id_spp_hapus">
					<p>Apakah Anda Yakin ingin menghapus SPP <b id="b_no_spp_hapus"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="btn_hapusSPP" onclick="hapusSPP()">Hapus SPP</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalRevQty">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Revisi Qty</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<input type="hidden" id="hidden_rev_id_item" name="hidden_rev_id_item">
						<input type="hidden" id="hidden_rev_noppo" name="hidden_rev_noppo">
						<input type="hidden" id="hidden_noref" name="hidden_noref">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Revisi Qty <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<input id="txt_rev_qty" name="txt_rev_qty" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Qty">
							</div>
							<label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_satuan">
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Alasan <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-6 col-xs-12">
								<textarea id="txt_alasan_rev_qty" name="txt_alasan_rev_qty" class="resizable_textarea form-control" placeholder="Alasan Revisi Qty" required></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="revQty()">Revisi Qty</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalRequestUbah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Request</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<input type="hidden" id="hidden_req_id_item" name="hidden_req_id_item">
						<input type="hidden" id="hidden_req_noppo" name="hidden_req_noppo">
						<p>Apakah Anda yakin ingin request perubahan data ke KTU ?</p>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Alasan <span class="required">*</span>
							</label>
							<div class="col-md-9 col-sm-6 col-xs-12">
								<textarea id="txt_alasan_req_ubah" name="txt_alasan_req_ubah" class="resizable_textarea form-control" placeholder="Alasan Request Perubahan Data" required></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="requestUbah()">Request Ubah</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalDetailApproval">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail Approval</h4>
				</div>
				<div class="modal-body">
					<table class="table table-bordered" width="100%">
						<thead>
							<tr>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Qty</th>
								<th>Stok</th>
								<th>Kasie</th>
								<th>KTU</th>
								<th>GM</th>
								<th>Mill Manager</th>
								<th>Dept. Head</th>
								<th>Dir. Ops</th>
							</tr>
						</thead>
						<tbody id="tbody_detail_approval">
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihEstate">
		<div class="modal-dialog modal-sm" style="width: 30%;">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Devisi</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label">Pilih Devisi</label>
					</div>
					<div class="form-group">
						<select class="form-control" id="cmb_pilih_est"></select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="pilihEST()">Pilih</button>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/jquerynumber/jquery.number.js"></script>
<script>
	$(document).ready(function() {
		var filter = "Semua";
		var cari_no_spp = "";
		$('#modalPilihEstate').modal('show');
		pilihDevisi();
		pilihDevisiFilter();
		listSPP(filter, cari_no_spp);
	});

	function pilihDevisi() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_pilih_est').append(opsi_cmb_devisi);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisiFilter() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				var opsi_cmb_all = '<option value="Semua">Semua</option>';
				$('#filter').append(opsi_cmb_all);
				$.each(data, function(index) {
					var opsi_cmb_devisi_filter = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#filter').append(opsi_cmb_devisi_filter);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihEST() {
		$('#modalPilihEstate').modal('hide');
		var est = $('#cmb_pilih_est').val();
		console.log(est);
		var filter = est;
		var cari_no_spp = "";
		$('#filter option[value="' + est + '"]').attr("selected", true);
		listSPP(filter, cari_no_spp);
	}

	$('#filter').change(function() {
		var filter = this.value;
		console.log(filter);
		var cari_no_spp = "";
		listSPP(filter, cari_no_spp);
	});

	function format(d) {
		var arr = new Array();
		$.each(d, function(index) {
			arr.push(d[index][1]);
		});
		return arr.join();
	}

	function listSPP(filter, cari_no_spp) {
		$('#tableListSPP').DataTable().destroy();
		var dt = $('#tableListSPP').DataTable({
			"paging": true,
			"scrollY": true,
			"scrollX": true,
			"searching": true,
			"select": false,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"order": [],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				if (aData[0][11] == "DISETUJUI") {
					$('td', nRow).css('background-color', '#5cb85c');
					$('td', nRow).css('color', '#ffffff');
				}
				if (aData[0][11] == "SEBAGIAN") {
					$('td', nRow).css('background-color', '#5bc0de');
					$('td', nRow).css('color', '#ffffff');
				} else if (aData[0][11] == "DITOLAK") {
					$('td', nRow).css('background-color', '#d9534f');
					$('td', nRow).css('color', '#ffffff');
				} else if (aData[0][11] == "UBAH") {
					$('td', nRow).css('background-color', '#f0ad4e');
					$('td', nRow).css('color', '#ffffff');
				}
				// console.log(aData[0]);
				// var dh_mis= 0 ;
				// var a = nilai_dh('MIS', 17);
				// var dh_mis = a[dh_mis];
				// console.log(dh_mis);
			},
			"ajax": {
				"url": "<?php if ($url == 1) echo site_url('spp/approval_baru/1');
						else echo site_url('spp/approval_baru/0'); ?>",
				"type": "POST",
				"data": {
					'filter': filter,
					'cari_no_spp': cari_no_spp
				},
				"error": function(request) {
					// alert(request.responseText);
					console.log(request.responseText);
				}
			},
			"columns": [{
					"data": "0.0"
				},
				{
					"data": "0.13"
				},
				{
					"data": "0.1"
				},
				{
					"data": "0.2"
				},
				{
					"data": "0.3"
				},
				{
					"data": "0.4"
				},
				{
					"data": "0.5"
				},
				{
					"data": "0.6"
				},
				{
					"data": "0.7"
				},
				{
					"data": "0.9"
				},
				{
					"data": "0.10"
				},
				{
					"data": "0.14"
				},
				{
					"data": "0.11"
				},
				{
					"data": "0.12"
				},
			],
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});

		var detailRows = [];

		$('#tableListSPP tbody').on('click', 'tr td.details-control', function() {
			var tr = $(this).closest('tr');
			var row = dt.row(tr);
			var idx = $.inArray(tr.attr('id'), detailRows);

			if (row.child.isShown()) {
				tr.removeClass('details');
				row.child.hide();

				// Remove from the 'open' array
				detailRows.splice(idx, 1);
			} else {
				tr.addClass('details');
				row.child(format(row.data()[1])).show();

				// Add to the 'open' array
				if (idx === -1) {
					detailRows.push(tr.attr('id'));
				}
			}
		});

		dt.on('draw', function() {
			$.each(detailRows, function(i, id) {
				$('#' + id + ' td.details-control').trigger('click');
			});
		});
	}

	function showHideFilter() {
		if ($('#div_filter').is(":hidden")) {
			$('#div_filter').show();
		} else {
			$('#div_filter').hide();
		}
	}
	$('input[type=radio][name=rbt_filter]').change(function() {
		var filter = this.value;
		console.log(filter);
		var cari_no_spp = $('#txt_cari_no_spp').val();
		// var cari_no_spp = "";
		listSPP(filter, cari_no_spp);
	});
	// function cari_no_spp() {
	// 	var filter = $('input[type=radio][name=rbt_filter]').val();
	// 	var cari_no_spp = $('#txt_cari_no_spp').val();
	// 	listSPP(filter, cari_no_spp);
	// }

	function modalApproval1(noppotxt, noref, jenis1, dept1, dept2, lokasi) {
		// switch (jenis1) {
		// 	case 'SPPI/':
		// 		jenis1 = 'SPPI';
		// 		break;
		// 	case 'SPPA/':
		// 		jenis1 = 'SPPA';
		// 		break;
		// 	default:
		// 		jenis1 = 'SPP';
		// 		break;
		// }
		// console.log(noppotxt, noref, jenis1, dept1, dept2, lokasi);
		// $('.n_th').remove();
		// $('#modalApprovalSPP').modal({
		// 	backdrop: 'static',
		// 	keyboard: false
		// });
		$('#modalApprovalSPP').modal('show');
		tableApprovalSPP(noppotxt, noref);
	}

	$(document).ready(function() {
    $(document).on('click', '#approve', function() {
        
        $("#modalApprovalSPP").modal('hide');
    });
});

	function tableApprovalSPP(noppotxt, noref) {
		$('#tableApprovalSPP').DataTable().destroy();
		var dt = $('#tableApprovalSPP').DataTable({
			"paging": true,
			"searching": true,
			"scrollY": true,
			"scrollX": true,
			"select": true,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"fixedHeader": true,
			"order": [],
			"select": {
				"style": "multi",
			},
			"dom": 'Bfrtip',
			"buttons": [{
					"text": "Select All",
					"action": function() {
						$('#tableApprovalSPP').DataTable().rows('.qwe').select();
					}
				},
				{
					"text": "Unselect All",
					"action": function() {
						$('#tableApprovalSPP').DataTable().rows().deselect();
					}
				}
			],
			"fnInitComplete": function() {
				//    $('#btninfo').removeAttr('display');
				//    $('.btncon1').removeAttr('display');
				//    $('.btncon2').removeAttr('display');
				//    $('.btncon').removeAttr('display');
				//    $('#btninfo').removeAttr('display');
				if ($('#tableApprovalSPP').DataTable().rows('.qwe').count() == 0) {
					$('#btnfo').css('display', 'block');
					$('.btncon1').css('display', 'none');
					$('.btncon2').css('display', 'none');
					$('.btncon').css('display', 'none');
				} else {
					$('#btnfo').css('display', 'none');
					$('.btncon1').css('display', 'block');
					$('.btncon2').css('display', 'block');
					$('.btncon').css('display', 'block');
				}
			},
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				var aL = aData.length;
				var konfirUser = '<?= $this->session->userdata('user'); ?>';
				var konfirUser = konfirUser.replace(' ', '');
				$('.btncon').removeAttr('onclick');
				$('.btncon1').removeAttr('onclick');
				$('.btncon2').removeAttr('onclick');
				<?php if ($this->session->userdata('dept') == 'Purchasing') { ?>
					if (aData[10].substr(0, 2) == "<a") {
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
					$('.btncon1').attr('onClick', 'konfir("Purchasing","setuju", "0")');
					$('.btncon2').attr('onClick', 'konfir("Purchasing","tidaksetuju", "0")');
				<?php } ?>
			},
			"ajax": {
				"url": "<?= site_url('spp/list_sppitem'); ?>",
				"type": "POST",
				"data": {
					'noref': noref,
					'noppo': noppotxt,
				},
				"error": function(request) {
					console.log(request.responseText);
				},
			},
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});
		var rel = setInterval(function() {
			$('#tableApprovalSPP').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100);
	}

	function konfir(jabatan, approval, n) {
		var rowcol = $('#tableApprovalSPP').DataTable().rows({
			selected: true
		}).count();
		if (rowcol == 0) {
			swal("No Data Selected");
		} else {
			var conf = confirm("Apakah Anda Yakin ?");
			if (conf == true) {
				var rowcollection = $('#tableApprovalSPP').DataTable().rows('.qwe', {
					selected: true
				}).data().toArray();
				$.each(rowcollection, function(index, elem) {
					var nospp = rowcollection[index][1];
					var norefspp = rowcollection[index][2];
					var kodebar = rowcollection[index][3];
					var nabar = btoa(rowcollection[index][4]);
					konfirmasi(nospp, norefspp, kodebar, nabar, jabatan, approval, n);
					// console.log(nospp, norefspp, kodebar, nabar, jabatan, approval, n);
				});
			}
		}

	}

	function konfirmasi(nospp, norefspp, kodebar, nabar, jabatan, approval, n) {
		// console.log(jabatan);
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/konfirmasi_approval'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,

			data: {
				'nospp': nospp,
				'norefspp': norefspp,
				'kodebar': kodebar,
				'jabatan': jabatan,
				'approval': approval,
				'nabar': nabar,
				'n': n
			},
			success: function(data) {
				tableApprovalSPP(nospp, norefspp);
			},
			error: function(request) {
				//alert(request);
				console.log(request.responseText);
			}
		});
	}


	// function approvalCheck(a, b, c, d){
	// 	switch(d){
	// 		case 'SPP':
	// 			if(c == 'SITE'){
	// 				$('#th_dept').append('<th>a</th>');
	// 				// break;
	// 			}
	// 			break;
	// 	}
	// }

	// function modalApprovalGM(id){
	// 	// $('#modalApprovalGM').modal('show');
	// 	$('#modalApproval').modal('show');
	// 	tableDetailSPP(id);
	// }

	function tableDetailSPP(id) {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/get_detail_spp'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id
			},
			success: function(data) {
				$('#h5_no_spp').empty();
				$('#h5_no_spp').append("No. SPP : " + data[0].noppotxt);
				$('#h5_no_ref_spp').html("No. Ref SPP : " + data[0].noreftxt);

				$('#hidden_no_spp').val(data[0].noppotxt);
				$('#hidden_no_ref_spp').val(data[0].noreftxt);

				var no_ref_spp = data[0].noreftxt;
				var substr_no_ref_spp = no_ref_spp.substr(0, 3);

				var kode_level_sesi = '<?php echo $this->session->userdata('kode_level'); ?>';
				var lokasi_sesi = '<?php echo $this->session->userdata('status_lokasi'); ?>';

				switch (substr_no_ref_spp) {
					case 'FAC':
						switch (kode_level_sesi) {
							case '11': // KTU
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
								break;
							case '12': // Kasie HRD GA
							case '13': // Kasie Agronomi
							case '14': // Kasie Pabrik
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
								break;
							case '15': // GM
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
								break;
							case '16': // Mill Manager
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
								break;
							case '21': // Dept. Head
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
								break;
							case '22': // Dir. Ops
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
								break;
							default:
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').hide();

								// td_12 = '<td>'+status_ktu+'</td>'//Status KTU
								// 		+'<td>'+status_kasie+'</td>'//Status Kasie
								// 		+'<td>'+status_gm+'</td>'//Status GM
								// 		+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
								// 		+'<td>'+status_dept_head+'</td>'//Status Dept. Head
								// 		+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
								break;
						}
						break;
					case 'EST':
						switch (kode_level_sesi) {
							case '11': // KTU
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
								break;
							case '12': // Kasie HRD GA
							case '13': // Kasie Agronomi
							case '14': // Kasie Pabrik
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
								break;
							case '15': // GM
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
								break;
							case '16': // Mill Manager
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
								break;
							case '21': // Dept. Head
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
								break;
							case '22': // Dir. Ops
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();

								// td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
								break;
							default:
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').hide();
								// td_12 = '<td>'+status_ktu+'</td>'//Status KTU
								// 		+'<td>'+status_kasie+'</td>'//Status Kasie
								// 		+'<td>'+status_gm+'</td>'//Status GM
								// 		+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
								// 		+'<td>'+status_dept_head+'</td>'//Status Dept. Head
								// 		+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
								break;
						}
						break;
					case 'ROM':
						//    	switch(kode_level_sesi){
						// 	case '17': // Kepala Perwakilan
						// 		$('#btn_setuju_all').show();
						// 		$('#btn_tidak_setuju_all').show();
						// 		$('#btn_mengetahui_all').hide();
						// 		$('#btn_detail_approval').show();

						// 		break;
						// 	case '21': // Dept. Head
						// 		td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
						// 		break;
						// 	case '22': // Dir. Ops
						// 		td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
						// 		break;
						// 	default:
						// 		// td_12 = '<td>'+status_ktu+'</td>'//Status KTU
						// 		// 		+'<td>'+status_kasie+'</td>'//Status Kasie
						// 		// 		+'<td>'+status_gm+'</td>'//Status GM
						// 		// 		+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
						// 		// 		+'<td>'+status_dept_head+'</td>'//Status Dept. Head
						// 		// 		+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
						// 		break;
						// }
					case 'PST':
						switch (kode_level_sesi) {
							case '21': // Dept. Head
								$('#btn_setuju_all').show();
								$('#btn_tidak_setuju_all').show();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').show();

								// td_12 = status2_dept_head == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
								break;
								// case '22': // Dir. Ops
								// td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
								// break;
							case '22': // Dir. Ops
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').show();
								$('#btn_detail_approval').show();
								break;

							default:
								$('#btn_setuju_all').hide();
								$('#btn_tidak_setuju_all').hide();
								$('#btn_mengetahui_all').hide();
								$('#btn_detail_approval').hide();
								// td_12 = '<td>'+status_dept_head+'</td>'//Status Dept. Head
								// 		+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
								break;
						}
						break;
					default:
						break;
				}

				$('#tbody_detail_spp').empty();
				$.each(data, function(index) {
					var kode_level_sesi = '<?php echo $this->session->userdata('kode_level'); ?>';
					var lokasi_sesi = '<?php echo $this->session->userdata('status_lokasi'); ?>';

					var tr_buka = '<tr id="tr_' + index + '">'
					// var td_1 = '<td><input type="checkbox" class="chk_item" disabled /></td>';
					var td_2 = '<td>' + data[index].kodebartxt + '</td>';
					var td_3 = '<td>' + data[index].nabar + '</td>';
					var td_4 = '<td>' + data[index].sat + '</td>';
					var td_5 = '<td>' + data[index].qty + '</td>';
					var td_20 = '<td>' + data[index].STOK + '</td>';
					// var td_6 = '<td>'+data[index].harga+'</td>';
					var td_7 = '<td>' + data[index].ket + '</td>';
					var td_8 = '<td>' + data[index].status + '</td>';
					var td_9 = '<td>' + data[index].po + '</td>';
					// var td_10 = '<td></td>';

					// var td_11 = '<td><button class="btn btn-xs btn-primary btn-default" type="button" onclick="promptQty('+data[index].id+','+data[index].noppotxt+')">Qty</button></td>';

					var mengetahui = '<button class="btn btn-xs btn-warning btn-default" type="button" onclick="modalKonfirmasiSetuju(' + data[index].id + ',' + data[index].noppotxt + ')">Mengetahui</button>';
					var setujui = '<button class="btn btn-xs btn-success btn-default" type="button" onclick="modalKonfirmasiSetuju(' + data[index].id + ',' + data[index].noppotxt + ')">Setujui</button>';
					var tidakDisetujui = '<button class="btn btn-xs btn-danger btn-default" type="button" onclick="modalKonfirmasiTdkSetuju(' + data[index].id + ',' + data[index].noppotxt + ')">Tdk disetujui</button>';

					var td_12;
					var status_ktu, status_kasie, status_gm, status_mill_mgr, status_dept_head, status_dir_ops;

					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_ktu != null && data[index].status2_ktu == 4) {
						status_ktu = '<p class="p_approval_' + data[index].status2_ktu + '"><b>' + data[index].status_ktu + '</b><br />' + data[index].tgl_approval_ktu + '</p>';
					} else {
						status_ktu = '-';
					}

					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_kasie != null && data[index].status2_kasie == 4) {
						status_kasie = '<p class="p_approval_' + data[index].status2_kasie + '"><b>' + data[index].status_kasie + '</b><br />' + data[index].tgl_approval_kasie + '</p>';
					} else {
						status_kasie = '-';
					}


					if (data[index].status2_gm != null && (data[index].status2_gm == 4 || data[index].status2_gm == 1 || data[index].status2_gm == 3)) {
						status_gm = '<p class="p_approval_' + data[index].status2_gm + '"><b>' + data[index].status_gm + '</b><br />' + data[index].tgl_approval_gm + '</p>';
					} else {
						status_gm = '-';
					}

					if (data[index].status2_mill_mgr != null && (data[index].status2_mill_mgr == 1 || data[index].status2_mill_mgr == 3)) {
						status_mill_mgr = '<p class="p_approval_' + data[index].status2_mill_mgr + '"><b>' + data[index].status_mill_mgr + '</b><br />' + data[index].tgl_approval_mill_mgr + '</p>';
					} else {
						status_mill_mgr = '-';
					}

					if (data[index].status2_dept_head != null && (data[index].status2_dept_head == 1 || data[index].status2_dept_head == 3)) {
						status_dept_head = '<p class="p_approval_' + data[index].status2_dept_head + '"><b>' + data[index].status_dept_head + '</b><br />' + data[index].tgl_approval_dept_head + '</p>';
					} else {
						status_dept_head = '-';
					}

					// console.log(data[index].status2_dir_ops+" dari db");
					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_dir_ops != null && data[index].status2_dir_ops == 4) {
						status_dir_ops = '<p class="p_approval_' + data[index].status2_dir_ops + '"><b>' + data[index].status_dir_ops + '</b><br />' + data[index].tgl_approval_dir_ops + '</p>';
					} else {
						status_dir_ops = '-';
					}
					// console.log(status_dir_ops+" dir_ops");

					/*** Jika akses level ktu(11) atau dept head = 21 atau dept head purch = 22 atau dir purch, enable button rev qty dan belum sama sekali diketahui/setujui/tidak disetujui, jika bukan , disabled button rev qty ***/
					var td_11 = (kode_level_sesi == "11" || kode_level_sesi == "21" || kode_level_sesi == "22" || kode_level_sesi == "23") && (status_ktu != "-" || status_kasie != "-" || status_gm != "-" || status_mill_mgr != "-" || status_dept_head != "-" || status_dir_ops != "-") ? '<td><button class="btn btn-xs btn-primary btn-default" type="button" onclick="promptQty(' + data[index].id + ',' + data[index].noppotxt + ',\'' + data[index].sat + '\')">Qty</button></td>' : '<td><button class="btn btn-xs btn-primary btn-default" type="button" disabled>Qty</button></td>';

					var no_ref_spp = data[index].noreftxt;
					var substr_no_ref_spp = no_ref_spp.substr(0, 3);

					// console.log(substr_no_ref_spp+"substr apa");
					switch (substr_no_ref_spp) {
						case 'FAC':
							switch (kode_level_sesi) {
								case '11': // KTU
									td_12 = status_ktu == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_ktu + '</td>';
									break;
								case '12': // Kasie HRD GA
								case '13': // Kasie Agronomi
								case '14': // Kasie Pabrik
									td_12 = status_kasie == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_kasie + '</td>';
									break;
								case '15': // GM
									td_12 = status_gm == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_gm + '</td>'; //GM
									// if(lokasi_sesi == "PKS"){
									// 	td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
									// }
									// else if(lokasi_sesi == "SITE"){
									// 	td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
									// }
									break;
								case '16': // Mill Manager
									td_12 = status_mill_mgr == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_mill_mgr + '</td>'; // Mill Manager
									break;
								case '21': // Dept. Head
									td_12 = status_dept_head == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_dept_head + '</td>'; // Dept. Head
									break;
								case '22': // Dir. Ops
									td_12 = status_dir_ops == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_dir_ops + '</td>'; // Dir. Ops
									break;
								default:
									td_12 = +'<td>' + status_kasie + '</td>' //Status Kasie
										+
										'<td>' + status_ktu + '</td>' //Status KTU
										+
										'<td>' + status_gm + '</td>' //Status GM
										+
										'<td>' + status_mill_mgr + '</td>' //Status Mill Manager
										+
										'<td>' + status_dept_head + '</td>' //Status Dept. Head
										+
										'<td>' + status_dir_ops + '</td>' //Status Dir. Ops
									break;
							}
							break;
						case 'EST':
							// console.log(kode_level_sesi+ 'sesi apa');
							switch (kode_level_sesi) {
								case '11': // KTU
									td_12 = status_ktu == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_ktu + '</td>';
									break;
								case '12': // Kasie HRD GA
								case '13': // Kasie Agronomi
								case '14': // Kasie Pabrik
									console.log(status_kasie);
									td_12 = status_kasie == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_kasie + '</td>';
									break;
								case '15': // GM
									td_12 = status_gm == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_gm + '</td>'; // GM
									// if(lokasi_sesi == "PKS"){
									// 	td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
									// }
									// else if(lokasi_sesi == "SITE"){
									// 	td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
									// }
									break;
								case '16': // Mill Manager
									td_12 = status_mill_mgr == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_mill_mgr + '</td>'; // Mill Manager
									break;
								case '21': // Dept. Head
									td_12 = status_dept_head == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_dept_head + '</td>'; // Dept. Head
									break;
								case '22': // Dir. Ops
									td_12 = status_dir_ops == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_dir_ops + '</td>'; // Dir. Ops
									break;
								default:
									// console.log(status_kasie+' asdsadad');
									td_12 = '<td>' + status_kasie + '</td>' //Status Kasie
										+
										'<td>' + status_ktu + '</td>' //Status KTU
										+
										'<td>' + status_gm + '</td>' //Status GM
										+
										'<td>' + status_mill_mgr + '</td>' //Status Mill Manager
										+
										'<td>' + status_dept_head + '</td>' //Status Dept. Head
										+
										'<td>' + status_dir_ops + '</td>' //Status Dir. Ops

									// console.log("ini isinya "+td_12);
									break;
							}
							break;
						case 'ROM':
							switch (kode_level_sesi) {
								case '17': // Kepala Perwakilan
									td_12 = status_mill_mgr == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_mill_mgr + '</td>'; // Mill Manager
									break;
								case '21': // Dept. Head
									td_12 = status_dept_head == "-" ? '<td>' + setujui + '<br />' + tidakDisetujui + '</td>' : '<td>' + status_dept_head + '</td>'; // Dept. Head
									break;
								case '22': // Dir. Ops
									td_12 = status_dir_ops == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_dir_ops + '</td>'; // Dir. Ops
									break;
								default:
									td_12 = +'<td>' + status_kasie + '</td>' //Status Kasie
										+
										'<td>' + status_ktu + '</td>' //Status KTU
										+
										'<td>' + status_gm + '</td>' //Status GM
										+
										'<td>' + status_mill_mgr + '</td>' //Status Mill Manager
										+
										'<td>' + status_dept_head + '</td>' //Status Dept. Head
										+
										'<td>' + status_dir_ops + '</td>' //Status Dir. Ops
									break;
							}
							case 'PST':
								switch (kode_level_sesi) {
									case '11': // KTU
										td_12 = '';
										break;
									case '12': // Kasie HRD GA
									case '13': // Kasie Agronomi
									case '14': // Kasie Pabrik
										td_12 = '';
										break;
									case '15': // GM
										td_12 = '';
										break;
									case '16': // Mill Manager
										td_12 = '';
										break;
									case '21': // Dept. Head
										td_12 = status_dept_head == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_dept_head + '</td>'; // Dept. Head
										break;
									case '22': // Dir. Ops
										td_12 = status_dir_ops == "-" ? '<td>' + mengetahui + '</td>' : '<td>' + status_dir_ops + '</td>'; // Dir. Ops
										break;
									default:
										td_12 = '<td>-</td>' //Status KTU
											+
											'<td>-</td>' //Status Kasie
											+
											'<td>-</td>' //Status GM
											+
											'<td>-</td>' //Status Mill Manager
											+
											'<td>' + status_dept_head + '</td>' //Status Dept. Head
											+
											'<td>' + status_dir_ops + '</td>' //Status Dir. Ops
										break;
								}
								break;
							default:
								break;
					}

					// switch(kode_level_sesi){
					//  			case '11': // KTU
					//  				td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
					//  				// td_12 = '<td>'+mengetahui+'<br />'+status_ktu+'</td>'; //KTU
					//  				break;
					//  			case '12': // Kasie
					//  			case '13': // Kasie
					//  			case '14': // Kasie
					//  				td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
					//  				// td_12 = '<td>'+mengetahui+'<br />'+status_kasie+'</td>'; // Kasie
					//  				break;
					//  			case '15': // GM
					//  				if(lokasi_sesi == "PKS"){
					//  					td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
					//  					// td_12 = '<td>'+mengetahui+'<br />'+status_gm+'</td>'; //GM
					//  				}
					//  				else if(lokasi_sesi == "SITE"){
					//  					td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
					//  					// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_gm+'</td>'; //GM
					//  				}
					//  				break;
					//  			case '16': // Mill Manager
					//  				td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
					//  				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_mill_mgr+'</td>'; // Mill Manager
					//  				break;
					//  			case '21': // Dept. Head
					//  				td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
					//  				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_dept_head+'</td>'; //Dept. Head
					//  				break;
					//  			case '22': // Dir. Ops
					//  				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
					//  				// td_12 = '<td>'+mengetahui+'<br />'+status_dir_ops+'</td>'; // Dir. Ops
					//  				break;
					//  			case '23': // Dept. Head Purchasing
					//  				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
					//  				// td_12 = '<td>'+mengetahui+'<br />'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
					//  				break;
					//  			case '24': // Dir. Purchasing
					//  				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
					//  				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_dir_purchasing+'</td>'; // Dir. Purchasing
					//  				break;
					//  			default:
					//  				td_12 = '<td>'+status_ktu+'</td>'//Status KTU
					//  						+'<td>'+status_kasie+'</td>'//Status Kasie
					//  						+'<td>'+status_gm+'</td>'//Status GM
					//  						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
					//  						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
					//  						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
					//  						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
					//  						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
					//  				break;
					//  		}
					var tr_tutup = '</tr>';
					$('#tbody_detail_spp').append(tr_buka + td_2 + td_3 + td_4 + td_5 + td_20 + td_7 + td_8 + td_9 + td_11 + td_12 + tr_tutup);
					// $('#tbody_detail_spp').append(tr_buka+td_2+td_3+td_4+td_5+td_20+td_7+td_8+td_9+td_10+td_11+td_12+td_13+td_14+td_15+td_16+td_17+td_18+td_19+tr_tutup);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	$('#cmb_status_spp').change(function() {
		if ($('#cmb_status_spp').val() == "DA") {
			$('#tableDetailSPP tbody tr td input.chk_item').attr('disabled', '');
			$('#tableDetailSPP tbody tr td input.chk_item').prop('checked', true);
		} else if ($('#cmb_status_spp').val() == "DS") {
			$('#tableDetailSPP tbody tr td input.chk_item').removeAttr('disabled', '');
			$('#tableDetailSPP tbody tr td input.chk_item').removeAttr('checked', '');
		} else if ($('#cmb_status_spp').val() == "TD") {

		}
	})

	function promptQty(id, noppotxt, noreftxt) {
		console.log(id, noppotxt, noreftxt);
		$('#modalRevQty').modal('show');
		$('#txt_rev_qty').number(true);

		$('#txt_rev_qty').val('');
		$('#txt_alasan_rev_qty').val('');

		$('#hidden_rev_id_item').val(id);
		$('#hidden_rev_noppo').val(noppotxt);

		// $('#lbl_satuan').empty();
		// $('#lbl_satuan').append(satuan);
	}

	function revQty() {
		console.log('testing');
		var isValid = true;
		$('#txt_rev_qty,#txt_alasan_rev_qty').each(function() {
			if ($.trim($(this).val()) == '') {
				isValid = false;
				$(this).css({
					"background": "#FFCECE"
				})
				if (!$(this).next().is('br#br_pesan')) {
					$(this).after('<br id="br_pesan" /><small id="pesan_error" style="margin-top:0px;color:red;">Harus diisi</small>');
				}
			}else if($.trim($(this).val()) == '0'){
				isValid = false;
				$(this).css({
					"background": "#FFCECE"
				})
				if (!$(this).next().is('br#br_pesan')) {
					$(this).after('<br id="br_pesan" /><small id="pesan_error" style="margin-top:0px;color:red;">Qty tidak boleh 0</small>');
				}
			}
		})
		if (isValid == true) {
			var id = $('#hidden_rev_id_item').val();
			var noppotxt = $('#hidden_rev_noppo').val();
			var noreftxt = $('#hidden_noref').val();
			var rev_qty = $('#txt_rev_qty').val();
			var alasan_rev_qty = $('#txt_alasan_rev_qty').val();

			$.ajax({
				type: "POST",
				url: "<?php echo site_url('spp/rev_qty'); ?>",
				dataType: "JSON",
				beforeSend: function() {},
				cache: false,
				// contentType : false,
				// processData : false,

				data: {
					'id': id,
					'noppotxt': noppotxt,
					'qty': rev_qty,
					'alasan': alasan_rev_qty
				},
				success: function(data) {
					$('#tbody_detail_spp').empty();
					$('#modalRevQty').modal('hide');
					tableDetailSPP(noppotxt);
					// tableApprovalSPP(noppotxt, noreftxt);
					var rel = setInterval(function() {
						$('#tableApprovalSPP').DataTable().ajax.reload();
						clearInterval(rel);
					}, 100);
				},
				error: function(request) {
					alert(request.responseText);
				}
			});
		}

	}

	// function promptQty(id,noppotxt){
	// 	var boxPrompt = prompt("Update Qty","");
	// 	if (boxPrompt == null || boxPrompt == ""){
	// 		//prompt cancel
	// 	}
	// 	else {
	// 		if(isNaN(parseInt(boxPrompt))){
	// 			alert('Error : Masukan angka !');
	// 		}
	// 		else{
	// 			$.ajax({
	// 		        type    : "POST",
	// 		        url     : "<?php // echo site_url('spp/rev_qty'); 
									?>",
	// 		        dataType  : "JSON",
	// 		        beforeSend: function(){
	// 		        },
	// 		        cache   : false,
	// 		        // contentType : false,
	// 		        // processData : false,

	// 		        data    : {'id':id,'qty':boxPrompt},
	// 		        success: function(data){
	// 		        	$('#tbody_detail_spp').empty();
	// 		        	tableDetailSPP(noppotxt);
	// 		        },
	// 		        error   : function(request){
	// 		          alert(request.responseText);
	// 		        }
	// 		    });
	// 		}
	// 	}
	// }

	function modalKonfirmasiSetuju(id, noppotxt) {
		$('#modalKonfirmasiSetuju').modal('show');
		$('#modalKonfirmasiTdkSetuju').modal('hide');

		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('hide');
		$('#hidden_id_setuju').val(id);
		$('#hidden_noppotxt_setuju').val(noppotxt);
	}

	function modalKonfirmasiTdkSetuju(id, noppotxt) {
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('show');

		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('hide');
		$('#hidden_id_tdk_setuju').val(id);
		$('#hidden_noppotxt_tdk_setuju').val(noppotxt);
	}

	function setuju() {
		var id;
		var noppotxt;
		if ($('#hidden_id_setuju').length) {
			id = $('#hidden_id_setuju').val();
			noppotxt = $('#hidden_noppotxt_setuju').val();
			norefppo = $('#hidden_no_ref_spp').val();
		}

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/setuju'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id,
				'nospp': noppotxt,
				'norefppo': norefppo
			},
			success: function(data) {
				console.log(data);
				$('#tbody_detail_spp').empty();
				$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
				tableDetailSPP(noppotxt);
				var filter = "Semua";
				var cari_no_spp = "";
				listSPP(filter, cari_no_spp);
			},
			error: function(request) {
				console.log(request.responseText);
				swal('Perhatikan kembali koneksi jaringan Anda');
			}
		});
	}

	function tidakSetuju() {
		var id;
		var noppotxt;
		if ($('#hidden_id_tdk_setuju').length) {
			id = $('#hidden_id_tdk_setuju').val();
			noppotxt = $('#hidden_noppotxt_tdk_setuju').val();
			norefppo = $('#hidden_no_ref_spp').val();
		}

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/tdkSetuju'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id,
				'nospp': noppotxt,
				'norefppo': norefppo
			},
			success: function(data) {
				$('#tbody_detail_spp').empty();
				$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
				tableDetailSPP(noppotxt);
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function modalSetujuSemua() {
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('hide');

		$('#modalSetujuSemua').modal('show');
		$('#modalTdkSetujuSemua').modal('hide');
	}

	function modalTdkSetujuSemua() {
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('hide');

		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('show');
	}

	function setujuAll() {
		var no_spp = $('#hidden_no_spp').val();
		var norefppo = $('#hidden_no_ref_spp').val();

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/setujuAll'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'nospp': no_spp,
				'norefppo': norefppo
			},
			success: function(data) {
				$('#tbody_detail_spp').empty();
				$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
				tableDetailSPP(no_spp);
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function tidakSetujuAll() {
		var no_spp = $('#hidden_no_spp').val();
		var norefppo = $('#hidden_no_ref_spp').val();

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/tdkSetujuAll'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'nospp': no_spp,
				'norefppo': norefppo
			},
			success: function(data) {
				$('#tbody_detail_spp').empty();
				$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
				tableDetailSPP(no_spp);
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function konfirmasiBatalSPP(id, nospp) {
		$('#hidden_id_spp_batal').val(id);
		$('#b_no_spp_batal').text(nospp);
		$('#modalBatalSPP').modal('show');
	}

	function batalSPP() {
		var id_spp = $('#hidden_id_spp_batal').val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/batal'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id_spp
			},
			success: function(data) {
				// alert('SPP Dibatalkan');
				var filter = "Semua";
				var cari_no_spp = "";
				listSPP(filter, cari_no_spp);
				$('#modalBatalSPP').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function konfirmasiHapusSPP(id, nospp) {
		$('#hidden_id_spp_hapus').val(id);
		$('#b_no_spp_hapus').text(nospp);
		$('#modalHapusSPP').modal('show');
	}

	function hapusSPP() {
		var id_spp = $('#hidden_id_spp_hapus').val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/hapus'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id_spp
			},
			success: function(data) {
				var filter = "Semua";
				var cari_no_spp = "";
				listSPP(filter, cari_no_spp);
				$('#modalHapusSPP').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	// $('#modalApproval').on('shown.bs.modal', function () {
	$('#tbody_detail_spp tr').click(function(event) {
		if (event.target.type !== 'checkbox') {
			$(':checkbox', this).trigger('click');
		}
	});

	// $("input[type='checkbox']").change(function (e) {
	$(".chk_item").change(function(e) {
		if ($(this).is(":checked")) {
			// $(this).closest('tr').addClass("highlight_row");
			$(this).closest('tr').css("background-color", "#4caf50");
			$(this).closest('tr').css("color", "#ffffff");
		} else {
			// $(this).closest('tr').removeClass("highlight_row");
			$(this).closest('tr').css("background-color", "#ffffff");
			$(this).closest('tr').css("color", "#968ab4");
		}
	});
	// });

	function modalDetailApproval() {
		var nospp = $('#hidden_no_spp').val();
		$('#modalDetailApproval').modal('show');
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/detail_approval'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'nospp': nospp
			},
			success: function(data) {
				$('#tbody_detail_approval').empty();
				$.each(data, function(index) {
					var kode_level_sesi = '<?php echo $this->session->userdata('kode_level'); ?>';
					var lokasi_sesi = '<?php echo $this->session->userdata('status_lokasi'); ?>';
					var status_ktu, status_kasie, status_gm, status_mill_mgr, status_dept_head, status_dir_ops;

					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_ktu != null && data[index].status2_ktu == 4) {
						status_ktu = '<p class="p_approval_' + data[index].status2_ktu + '"><b>' + data[index].status_ktu + '</b><br />' + data[index].tgl_approval_ktu + '</p>';
					} else {
						status_ktu = '-';
					}

					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_kasie != null && data[index].status2_kasie == 4) {
						status_kasie = '<p class="p_approval_' + data[index].status2_kasie + '"><b>' + data[index].status_kasie + '</b><br />' + data[index].tgl_approval_kasie + '</p>';
					} else {
						status_kasie = '-';
					}


					if (data[index].status2_gm != null && (data[index].status2_gm == 4 || data[index].status2_gm == 1 || data[index].status2_gm == 3)) {
						status_gm = '<p class="p_approval_' + data[index].status2_gm + '"><b>' + data[index].status_gm + '</b><br />' + data[index].tgl_approval_gm + '</p>';
					} else {
						status_gm = '-';
					}

					if (data[index].status2_mill_mgr != null && (data[index].status2_mill_mgr == 1 || data[index].status2_mill_mgr == 3)) {
						status_mill_mgr = '<p class="p_approval_' + data[index].status2_mill_mgr + '"><b>' + data[index].status_mill_mgr + '</b><br />' + data[index].tgl_approval_mill_mgr + '</p>';
					} else {
						status_mill_mgr = '-';
					}

					if (data[index].status2_dept_head != null && (data[index].status2_dept_head == 1 || data[index].status2_dept_head == 3)) {
						status_dept_head = '<p class="p_approval_' + data[index].status2_dept_head + '"><b>' + data[index].status_dept_head + '</b><br />' + data[index].tgl_approval_dept_head + '</p>';
					} else {
						status_dept_head = '-';
					}

					/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
					if (data[index].status2_dir_ops != null && data[index].status2_dir_ops == 4) {
						status_dir_ops = '<p class="p_approval_' + data[index].status2_dir_ops + '"><b>' + data[index].status_dir_ops + '</b><br />' + data[index].tgl_approval_dir_ops + '</p>';
					} else {
						status_dir_ops = '-';
					}

					var tr_buka = '<tr id="tr_' + index + '">'
					// var td_1 = '<td><input type="checkbox" class="chk_item" disabled /></td>';
					var td_2 = '<td>' + data[index].kodebartxt + '</td>';
					var td_3 = '<td>' + data[index].nabar + '</td>';
					var td_4 = '<td>' + data[index].sat + '</td>';
					var td_5 = '<td>' + data[index].qty + '</td>';
					var td_20 = '<td>' + data[index].STOK + '</td>';
					var td_12 = '<td>' + status_kasie + '</td>' //Status Kasie
						+
						'<td>' + status_ktu + '</td>' //Status KTU
						+
						'<td>' + status_gm + '</td>' //Status GM
						+
						'<td>' + status_mill_mgr + '</td>' //Status Mill Manager
						+
						'<td>' + status_dept_head + '</td>' //Status Dept. Head
						+
						'<td>' + status_dir_ops + '</td>'; //Status Dir. Ops
					var tr_tutup = '</tr>';
					$('#tbody_detail_approval').append(tr_buka + td_2 + td_3 + td_4 + td_5 + td_20 + td_12 + tr_tutup);
				})
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function modalRequestUbah(id_spp, nospp) {
		$('#modalRequestUbah').modal('show');
		$('#hidden_req_id_item').val(id_spp);
		$('#hidden_req_noppo').val(nospp);
	}

	function requestUbah() {
		var id_spp = $('#hidden_req_id_item').val();
		var nospp = $('#hidden_req_noppo').val();
		var alasan_req = $('#txt_alasan_req_ubah').val();

		// if(confirm("Anda ingin request ubah data ?") == true){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('spp/requestUbah'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id_spp': id_spp,
				'nospp': nospp,
				'alasan_req': alasan_req
			},
			success: function(data) {
				var filter = "Semua";
				var cari_no_spp = "";
				listSPP(filter, cari_no_spp);
				$('#modalRequestUbah').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
		// }
		// else{
		// 	return false;
		// }
	}

	function konfirmasiUnlockUbah(id_spp, nospp) {
		if (confirm("Anda ingin unlock untuk ubah data ?") == true) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('spp/unlock'); ?>",
				dataType: "JSON",
				beforeSend: function() {

				},
				cache: false,
				// contentType : false,
				// processData : false,

				data: {
					'id_spp': id_spp,
					'nospp': nospp
				},
				success: function(data) {
					// alert('SPP Dibatalkan');
					var filter = "Semua";
					var cari_no_spp = "";
					listSPP(filter, cari_no_spp);
					$('#modalBatalSPP').modal('hide');
				},
				error: function(request) {
					alert(request.responseText);
				}
			});
		} else {
			return false;
		}
	}
</script>