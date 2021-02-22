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
				<div class="x_title">
					<h2>Appproval SPP</h2>
					<!-- <ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul> -->
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-2 col-sm-3 col-xs-12">Filter </label>
							<div class="col-md-2 col-sm-9 col-xs-12">
								<select class="form-control" id="cmb_filter" name="cmb_filter">
									<option value="" selected>-- Pilih --</option>
									<option value="HO">SPP Belum PO</option>
									<option value="Site">SPP Sudah PO</option>
									<option value="Site">SPPI</option>
									<option value="Site">SPPA</option>
									<option value="Site">SPP Dibatalkan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="table-responsive">
									<table id="datatable" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>No. PO</th>
												<th>No. Ref</th>
												<th>Tgl. Ref</th>
												<th>Tanggal</th>
												<th>Tgl. Terima</th>
												<th>Departemen Tujuan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>123456</td>
												<td>123456</td>
												<td>2011/04/25</td>
												<td>2011/04/25</td>
												<td>2011/04/25</td>
												<td>MIS</td>
												<td>
													<button type="button" class="btn btn-primary fa fa-info" data-toggle="modal" data-target="#modalDetailSPP" title="Detail"></button>
													<button class="btn btn-sm btn-warning fa fa-edit" type="button" data-toggle="tooltip" data-placement="top" title="Ubah" onclick="ubahRinci('1')"></button>
													<button class="btn btn-sm btn-danger fa fa-trash" type="button" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusRinci('1')"></button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  id="modalDetailSPP">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail SPP</h4>
				</div>
				<div class="modal-body">
					<h5>Rubah Quantity yang Disetujui</h5>
					<div class="table-responsive">
						<table id="tableDetailSPP" class="table table-bordered">
							<thead>
								<th>
									<td>Kode Barang</td>
									<td>Nama Barang</td>
									<td>Sat</td>
									<td>Qty</td>
									<td>Harga</td>
									<td>Keterangan</td>
									<td>Status SPP</td>
								</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="checkbox" class="chk_item" />
									</td>
									<td>kodebar</td>
									<td>nama bar</td>
									<td>sat</td>
									<td>qty</td>
									<td>harga</td>
									<td>keterangan</td>
									<td>st spp</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" class="chk_item" />
									</td>
									<td>kodebar</td>
									<td>nama bar</td>
									<td>sat</td>
									<td>qty</td>
									<td>harga</td>
									<td>keterangan</td>
									<td>st spp</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Status SPP</label>
							<div class="col-md-5 col-sm-6 col-xs-12">
								<select id="cmb_status_spp" name="cmb_status_spp" class="form-control">
									<option value="">-- Pilih --</option>
									<option value="DS">Disetujui</option>
									<option value="DT">Ditolak</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-3 col-xs-12">
								<button class="btn btn-md btn-info" data-toggle="tooltip" data-placement="right" title="Simpan" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()">Simpan</button>
							</div>
						</div>	
					</div>
					
					<!-- <div class="x_content"> -->
						<!-- <div id="" data-parsley-validate class="form-horizontal form-label-left"> -->
							<!-- <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status SPP <span class="required">*</span></label>
								<div class="col-md-5 col-sm-9 col-xs-12">
									<select class="form-control" id="cmb_divisi" name="cmb_divisi">
										<option value="" selected>-- Pilih --</option>
										<option value="PT MULIA SAWIT AGRO LESTARI (HO)">PT MULIA SAWIT AGRO LESTARI (HO)</option>
									</select>
								</div>
							</div> -->
						<!-- </div> -->
					<!-- </div> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<script>
	$(document).ready(function () {
	    $('#tableDetailSPP tbody tr').click(function (event) {
	        if (event.target.type !== 'checkbox') {
	            $(':checkbox', this).trigger('click');
	        }
	    });

	    // $("input[type='checkbox']").change(function (e) {
	    $(".chk_item").change(function (e) {
	    	if ($(this).is(":checked")) {
	            // $(this).closest('tr').addClass("highlight_row");
	            $(this).closest('tr').css("background-color","#4caf50");
	            $(this).closest('tr').css("color","#ffffff");
	        } else {
	            // $(this).closest('tr').removeClass("highlight_row");
	            $(this).closest('tr').css("background-color","#ffffff");
	            $(this).closest('tr').css("color","#968ab4");
	        }
	    });
	});
</script>