<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MSAL Logistik</title>

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">


	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-select/css/select.dataTables.min.css" rel="stylesheet">

	<!-- DataTables 
	<link rel="stylesheet" href="<?= base_url(); ?>assets3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">-->


	<!-- include summernote css/js -->
	<!-- <link href="<?php // echo base_url(); 
						?>assets/summernote/summernote.css" rel="stylesheet"> -->

	<!-- Autocomplete -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/autocomplete/jquery.autocomplete.css">

	<!-- PNotify -->
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
	<style>
		.error {
			color: red;
			font-weight: normal;
		}

		.nav.child_menu span.fa {
			display: block;
			/*display: none;*/
		}
	</style>

	<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

</head>

<!-- <body class="nav-md footer_fixed"> -->
<!-- <body class="nav-sm"> -->

<body class="nav-md footer_fixed">
	<div class="container body">
		<div class="main_container">
			<!-- <div class="col-md-3 left_col menu_fixed"> -->
			<div class="col-md-3 left_col menu_fixed">
				<!-- <div class="left_col scroll-view"> -->
				<div class="left_col scroll-view">
					<?php echo $leftsidenya; ?>
				</div>

				<div class="top_nav">
					<?php echo $headernya; ?>
				</div>

				<div class="right_col" role="main">
					<?php echo $contentnya; ?>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapSPP">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan SPP</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">PT <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi" name="cmb_devisi" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Bagian <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_bagian" name="cmb_bagian" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode" name="txt_periode">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode1" name="txt_periode1">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="semua" id="rbt_semua" name="rbt_pilihan" checked> Semua SPP
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="proses" id="rbt_proses" name="rbt_pilihan"> Dalam Proses
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="setujui" id="rbt_setujui" name="rbt_pilihan"> Disetujui
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="sppi" id="rbt_sppi" name="rbt_pilihan"> SPPI
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="sppa" id="rbt_sppa" name="rbt_pilihan"> SPPA
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_spp" onclick="tampilkanspp()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapPO">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan PO</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Company <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_company" name="cmb_company" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Periode <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode2" name="txt_periode2">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode3" name="txt_periode3">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="register" id="rbt_register" name="rbt_pilihan1" checked> Register PO
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="cetakan" id="rbt_cetakan" name="rbt_pilihan1"> Cetakan
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="cash" id="rbt_cash" name="rbt_pilihan1"> PO (Cash)
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_lokal_r" id="rbt_po_lokal_r" name="rbt_pilihan1"> PO Lokal (Register)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_lokal_t" id="rbt_po_lokal_t" name="rbt_pilihan1"> PO Lokal (Total PO)
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkanpo()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapPP">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan PP</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Devisi <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi1" name="cmb_devisi1" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Periode <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode4" name="txt_periode4">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode5" name="txt_periode5">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="register1" id="rbt_register1" name="rbt_pilihan2" checked> Register PO
																	</label>
																</div>
															</div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="cetakan1" id="rbt_cetakan1" name="rbt_pilihan2"> Cetakan
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkanpp()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapSPPPO">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan Monitoring SPP vs PO</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tangal PP <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode6" name="txt_periode6">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode7" name="txt_periode7">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="semua_data" id="rbt_semua_data" name="rbt_pilihan3" checked> Semua Data
																	</label>
																</div>
															</div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="spp_sdh_po" id="rbt_spp_sdh_po" name="rbt_pilihan3"> SPP sudah PO
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="spp_blm_po" id="rbt_spp_blm_po" name="rbt_pilihan3"> Belum PO
																	</label>
																</div>
															</div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="graphic" id="rbt_graphic" name="rbt_pilihan3"> Graphic
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkanspp_po()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapLPBPO">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan Monitoring LPB vs PO</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Devisi <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi2" name="cmb_devisi2" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">No Ref PO <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="noref_po" name="noref_po">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tangal <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode8" name="txt_periode8">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode9" name="txt_periode9">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="semua_tr" id="rbt_semua_tr" name="rbt_pilihan4" checked> Semua Transaksi
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="by_barang" id="rbt_by_barang" name="rbt_pilihan4"> By Barang
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="by_supplier" id="rbt_by_supplier" name="rbt_pilihan4"> By Supplier
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_blm_lpb_po" id="rbt_po_blm_lpb_po" name="rbt_pilihan4"> PO Belum LPB (Urut PO)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_cash_sh" id="rbt_po_cash_sh" name="rbt_pilihan4"> PO Cash/0 Hari (Semua Data)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_lokal" id="rbt_po_lokal" name="rbt_pilihan4"> PO Lokal Belum LPB
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_blm_lpb_brg" id="rbt_po_blm_lpb_brg" name="rbt_pilihan4"> PO Belum LPB (Urut Barang)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_cash_blm_lpb" id="rbt_po_cash_sh" name="rbt_pilihan4"> PO Cash/0 Hari (Belum LPB)
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkanpo_lpb()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapDurTrans">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Histori Transaksi (SPP-PO-PP-LPB)</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tangal PP <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode10" name="txt_periode10">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode11" name="txt_periode11">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="semua_data_trans" id="rbt_semua_data_trans" name="rbt_pilihan5" checked> Semua Data
																	</label>
																</div>
															</div>
															<div class="col-md-4">
																<div class="radio">
																	<label>
																		<input type="radio" value="graphic_trans" id="rbt_graphic_trans" name="rbt_pilihan5"> Graphic
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkan_data_tr()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapLPB">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Laporan Penerimaan Barang</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Devisi <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi3" name="cmb_devisi3" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group" style="display: none;">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">No LPB <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="no_lpb" name="no_lpb">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode12" name="txt_periode12">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode13" name="txt_periode13">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="register_lpb" id="rbt_register_lpb" name="rbt_pilihan6" checked> Register LPB
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="slip_lpb" id="rbt_slip_lpb" name="rbt_pilihan6"> Slip LPB
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_brg_lpb" id="rbt_per_brg_lpb" name="rbt_pilihan6"> Per Barang
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_tgl_lpb" id="rbt_per_tgl_lpb" name="rbt_pilihan6"> Per Tanggal
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po" id="rbt_po" name="rbt_pilihan6"> PO
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="po_lokal_lpb" id="rbt_po_lokal_lpb" name="rbt_pilihan6"> PO Lokal
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="lpb_asset" id="rbt_lpb_asset" name="rbt_pilihan6"> LPB Assets
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="lpb_mutasi" id="rbt_lpb_mutasi" name="rbt_pilihan6"> LPB Mutasi
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="slip_retur" id="rbt_slip_retur" name="rbt_pilihan6"> Slip Retur
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="regis_retur" id="rbt_regis_retur" name="rbt_pilihan6"> Register Retur
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkan_lpb()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapBKB">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Bukti Keluar Barang</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Devisi <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi4" name="cmb_devisi4" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group" style="display: none;">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">No BKB <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="no_bkb" name="no_bkb">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Bagian <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_bagian1" name="cmb_bagian1" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Tangal <span class="required">*</span></label>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode14" name="txt_periode14">
															</div>
															<div class="col-md-1 col-sm-6 col-xs-12">
																<label class="control-label">s/d</label>
															</div>
															<div class="col-md-4 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="txt_periode15" name="txt_periode15">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="register_bkb" id="rbt_register_bkb" name="rbt_pilihan7" checked> Register BKB
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="slip_bkb" id="rbt_slip_bkb" name="rbt_pilihan7"> Slip BKB
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_brg_bkb" id="rbt_per_brg_bkb" name="rbt_pilihan7"> Per Barang
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_tgl_bkb" id="rbt_per_tgl_bkb" name="rbt_pilihan7"> Per Tanggal
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_bgn_rinci_tgl" id="rbt_per_bgn_rinci_tgl" name="rbt_pilihan7"> Per Bagian Rinci Tgl
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_bgn_grp_brg" id="rbt_per_bgn_grp_brg" name="rbt_pilihan7"> Per Bagian Group Barang
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_kerja" id="rbt_per_kerja" name="rbt_pilihan7"> Per Pekerjaan (Tanaman)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="mutasi_pt" id="rbt_mutasi_pt" name="rbt_pilihan7"> Mutasi Antar PT
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-3">
																<label class="control-label col-md-12 col-sm-3 col-xs-12">Nominal RP </label>
															</div>
															<div class="col-md-8">
																<hr>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_bgn_grp_brg_n" id="rbt_per_bgn_grp_brg_n" name="rbt_pilihan7"> Per Bagian Group Barang
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="per_kerja1" id="rbt_per_kerja1" name="rbt_pilihan7"> Per Pekerjaan (Tanaman)
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="summary_rsh" id="rbt_summary_rsh" name="rbt_pilihan7"> Summary
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="sum_blok_ub" id="rbt_sum_blok_ub" name="rbt_pilihan7"> Sum Blok Unit Barang
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="sum_blok_pk" id="rbt_sum_blok_pk" name="rbt_pilihan7"> Sum Blok Pekerjaan
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkan_bkb()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalLapRSH">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title" id="myModalLabel">Register Stok Harian</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<div id="" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group div_form_1">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Devisi <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_devisi5" name="cmb_devisi5" required="">
																	<option value="" selected>-- Pilih --</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Kode Stok <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<input type="text" class="form-control" id="kode_stok" name="kode_stok" onkeydown="cariKodeBrg();">
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-2 col-sm-3 col-xs-12">Grup Barang <span class="required">*</span></label>
															<div class="col-md-9 col-sm-6 col-xs-12">
																<select class="form-control" id="cmb_group_brg" name="cmb_group_brg" required="">
																	<option value="Semua" selected>Semua</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-2"></div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="rinci_rsh" id="rbt_rinci_rsh" name="rbt_pilihan9" checked> Rinci
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="summary_rsh" id="rbt_summary_rsh" name="rbt_pilihan9"> Summary
																	</label>
																</div>
															</div>
															<div class="col-md-3">
																<div class="radio">
																	<label>
																		<input type="radio" value="non_saldo" id="rbt_non_saldo" name="rbt_pilihan9"> Non Saldo
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="tampilkan_rsh()">Tampilkan</button>
									<button type="button" class="btn btn-default" id="btn_cancel" class="close" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBarang">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List Barang</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<input type="hidden" id="hidden_no_row" name="hidden_no_row">
										<table id="tableListBarang" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 10% !important;">Kode Barang</th>
													<th style="width: 20% !important;">Nama Barang</th>
													<th style="width: 20% !important;">Grup</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang">
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapSPP">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List SPP</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapSPP" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 10% !important;">Tgl</th>
													<th style="width: 10% !important;">Dept</th>
													<th style="width: 25% !important;">Noref</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang">
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapPO">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List PO</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapPOCetakan" class="table table-striped table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 20% !important;">Tanggal</th>
													<th style="width: 20% !important;">Noref PO</th>
													<th style="width: 20% !important;">Noref SPP</th>
													<th style="width: 25% !important;">Supplier</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapPP">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List PP</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapPP" class="table table-striped table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th>No</th>
													<th>Tanggal PP</th>
													<th>Nomor PP</th>
													<th>Noref PO</th>
													<th>Supplier</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang">
												<!-- <tr>
													<td>1</td>
													<td>EST/SWJ/PO-Lokal/07/20/00002</td>
													<td><button class="btn btn-xs btn-success fa fa-print" id="btn_print" target="_blank" name="btn_print" type="button" data-toggle="tooltip" data-placement="right" title="Print" onclick="printPPClick()"></button></td>
												</tr>
												<tr>
													<td>2</td>
													<td>EST/SWJ/PO-Lokal/07/20/00002</td>
													<td><button class="btn btn-xs btn-success fa fa-print" id="btn_print" target="_blank" name="btn_print" type="button" data-toggle="tooltip" data-placement="right" title="Print" onclick="printPPClick()"></button></td>
												</tr>
												<tr>
													<td>3</td>
													<td>EST/SWJ/PO-Lokal/07/20/00002</td>
													<td><button class="btn btn-xs btn-success fa fa-print" id="btn_print" target="_blank" name="btn_print" type="button" data-toggle="tooltip" data-placement="right" title="Print" onclick="printPPClick()"></button></td>
												</tr> -->
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapLPBSlip">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List Slip LPB</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapLPBSlip" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 10% !important;">Tgl</th>
													<th style="width: 25% !important;">No PO</th>
													<th style="width: 25% !important;">No LPB</th>
													<th style="width: 25% !important;">Departement</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapSlipBKB">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List Slip BKB</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapSlipBKB" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 20% !important;">Tgl</th>
													<!-- <th style="width: 20% !important;">No BPB</th> -->
													<th style="width: 20% !important;">No BKB</th>
													<th style="width: 25% !important;">No Ref BKB</th>
													<th style="width: 20% !important;">Departement</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapBgnTgl">
						<div class="modal-dialog modal-xs">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List Afd</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapBgnTgl" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 85% !important;">Afd</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapLPBTgl">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List LPB Per Tanggal</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapLPBTgl" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 25% !important;">Tanggal</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapLPBPO">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List LPB Per PO</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapLPBPO" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 25% !important;">Tanggal</th>
													<th style="width: 25% !important;">No Ref PO</th>
													<th style="width: 25% !important;">No Ref LPB</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang">
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalListLapLPBSlipR">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">List LPB Slip Retur</h4>
								</div>
								<div class="modal-body">
									<div class="table-responsive">
										<table id="tableListLapLPBSlipR" class="table table-bordered" style="width: 100%;">
											<thead>
												<tr>
													<th style="width: 5% !important;">No</th>
													<th style="width: 15% !important;">Tgl</th>
													<th style="width: 35% !important;">No PO</th>
													<th style="width: 35% !important;">No LPB</th>
													<th style="width: 10% !important;">Opsi</th>
												</tr>
											</thead>
											<tbody id="tbody_listbarang"></tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
								</div>
							</div>
						</div>
					</div>
					<footer>
						<?php echo $footernya; ?>
					</footer>
				</div>
			</div>

			<!--script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script-->
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>

			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.js"></script>

			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/moment/min/moment.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/iCheck/icheck.min.js"></script>

			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net-select/js/dataTables.select.min.js"></script>

			<!-- DataTables 
		<script src="<?= base_url(); ?>assets3/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url(); ?>assets3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url(); ?>assets3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url(); ?>assets3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>-->
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jszip/dist/jszip.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

			<!-- Sumernote -->
			<!-- <script src="<?php // echo base_url() 
								?>assets/summernote/summernote.js"></script> -->

			<!-- Autocomplete -->
			<script src="<?php echo base_url(); ?>assets/autocomplete/jquery.autocomplete.js"></script>

			<!-- JQuery Number -->
			<script src="<?php echo base_url(); ?>assets/jquerynumber/jquery.number.js"></script>

			<!-- Sweet Alert -->
			<script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>

			<!-- PNotify -->
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.buttons.js"></script>
			<script src="<?php echo base_url(); ?>assets/gentelella/vendors/pnotify/dist/pnotify.nonblock.js"></script>

			<!-- <script src="<?php echo base_url(); ?>assets/gentelella/build/js/custom.min.js"></script> -->
			<script src="<?php echo base_url(); ?>assets/gentelella/build/js/custom.js"></script>

			<script>
				// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				// })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				// ga('create', 'UA-23581568-13', 'auto');
				// ga('send', 'pageview');
			</script>

			<script>
				$(document).ready(function() {
					// if ($('body').hasClass('nav-md')) {
					// 	$('#sidebar-menu').find('li.active ul').hide();
					// 	$('#sidebar-menu').find('li.active').addClass('active-sm').removeClass('active');
					// } else {
					// 	$('#sidebar-menu').find('li.active-sm ul').show();
					// 	$('#sidebar-menu').find('li.active-sm').addClass('active').removeClass('active-sm');
					// }

					/*************************/
					//$('body').removeClass('nav-md').addClass('nav-sm');
					$('.left_col').removeClass('scroll-view').removeAttr('style');
					$('#sidebar-menu li').removeClass('active');
					$('#sidebar-menu li ul').slideUp();
					/*************************/

					//  $('.summernote').summernote({
					//  	height: 200,                 // set editor height
					// minHeight: null,             // set minimum height of editor
					// maxHeight: null,             // set maximum height of editor
					// focus: false                  // set focus to editable area after initializing summernote
					//  });

				});

				$(function() {
					$('.number').number(true);
					$('.currencyduadigit').number(true, 2);
				});
			</script>
		</div>
</body>

</html>