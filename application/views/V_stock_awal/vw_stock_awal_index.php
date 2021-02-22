<style type="text/css">
	td.details-control {
		background: url('/app_logistik_msal/assets/icon/info.png') no-repeat center center;
		cursor: pointer;
	}

	tr.details td.details-control {
		background: url('/app_logistik_msal/assets/icon/minus.png') no-repeat center center;
	}

	.thtable {
		width: 20%;
	}
</style>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>Stock Awal</h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info btn-sm" onclick="modalInputStockAwal()" data-toogle="tooltip" data-placement="top" title="" data-original-title="Input Stock Awal">Input Stock Awal</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Barang</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="table-responsive">
						<table id="tableStockAwal" class="table table-striped table-bordered" style="width: 100%">
							<thead>
								<tr>
									<!-- <th></th> -->
									<th>#</th>
									<th>No.</th>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Satuan</th>
									<th>Group</th>
									<th>Saldo Awal (Qty)</th>
									<th>Saldo Awal (Nilai)</th>
									<th>Saldo Akhir (Qty)</th>
									<th>Saldo Akhir (Nilai)</th>
									<th>Keterangan</th>
									<th>Min. Stock</th>
								</tr>
							</thead>
							<tbody id="tbody_list_stock_awal">
							</tbody>
						</table>
					</div>
					<br />
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalInputStockAwal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Stock Awal</h4>
				</div>
				<div class="modal-body">
					<form action="javascript:;" class="form-horizontal" id="form_input_stock_awal" name="form_input_stock_awal" method="POST">
						<input type="hidden" id="hidden_id" name="hidden_id">
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Kode Barang</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_kode_barang" name="txt_kode_barang" placeholder="Kode Barang" required="" onfocus="modalListBarang()">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Nama Barang</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_nama_barang" name="txt_nama_barang" placeholder="Nama Barang" readonly="" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Satuan</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="txt_satuan" name="txt_satuan" placeholder="Satuan" readonly="" required="">
								</div>
								<!-- <input type="hidden" id="hidden_grup" name="hidden_grup" required=""> -->
								<label class="control-label col-md-2">Group</label>
								<div class="col-md-3">
									<!-- <input type="text" class="form-control" id="txt_grup" name="txt_grup" placeholder="Grup" readonly="" required=""> -->
									<textarea class="resizable_textarea form-control" id="txt_grup" name="txt_grup" placeholder="Grup" readonly="" required=""></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Min. Stock (Qty)</label>
								<div class="col-md-3">
									<input type="text" class="form-control currencyduadigit" id="txt_min_stock_qty" name="txt_min_stock_qty" placeholder="Min. Stock (Qty)" required="" value="0.00">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Saldo Awal (Qty)</label>
								<div class="col-md-3">
									<input type="text" class="form-control currencyduadigit" id="txt_saldo_awal_qty" name="txt_saldo_awal_qty" placeholder="Saldo Awal (Qty)" required="" value="0.00">
								</div>
								<label class="control-label col-md-2">Saldo Awal (Nilai)</label>
								<div class="col-md-3">
									<input type="text" class="form-control currencyduadigit" id="txt_saldo_awal_nilai" name="txt_saldo_awal_nilai" placeholder="Saldo Awal (Nilai)" required="" value="0.00">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Saldo Akhir (Qty)</label>
								<div class="col-md-3">
									<input type="text" class="form-control currencyduadigit" id="txt_saldo_akhir_qty" name="txt_saldo_akhir_qty" placeholder="Saldo Akhir (Qty)" required="" value="0.00">
								</div>
								<label class="control-label col-md-2">Saldo Akhir (Nilai)</label>
								<div class="col-md-3">
									<input type="text" class="form-control currencyduadigit" id="txt_saldo_akhir_nilai" name="txt_saldo_akhir_nilai" placeholder="Saldo Akhir (Nilai)" required="" value="0.00">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-3">Keterangan</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="txt_keterangan_stock_awal" name="txt_keterangan_stock_awal" placeholder="Keterangan" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-sm btn-success col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
								<button class="btn btn-sm btn-warning col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Ubah" id="btn_ubah" name="btn_ubah">Ubah</button>
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_simpan">Simpan</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div> -->
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBarang">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Cari Kode Barang</h4>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-responsive" id="tableListBarang" width="100%">
						<thead>
							<tr>
								<th class="thtable">No</th>
								<th class="thtable">Kode Brg</th>
								<th class="thtable">Nama Brg</th>
								<th class="thtable">Group</th>
								<th class="thtable">Satuan</th>
							</tr>
						</thead>
						<tbody id="tbody_list_coa"></tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/jquery-validate/jquery.validate.min.js"></script>
<script>
	$(document).ready(function() {
		listStockAwal();
		// $('.dataTables_scrollHeadInner,.dataTables_scrollHeadInner table').width(100%);
	});

	function modalInputStockAwal() {
		$('#modalInputStockAwal').modal('show');
		$('#form_input_stock_awal')[0].reset();
		$('#btn_simpan').show();
		$('#btn_ubah').hide();
	}

	$("#form_input_stock_awal").validate({
		ignore: [],
		submitHandler: function(form) {
			simpan_stock_awal();
		}
	});

	function simpan_stock_awal() {
		var form_data = new FormData();

		form_data.append('hidden_id', $('#hidden_id').val());
		form_data.append('txt_kode_barang', $('#txt_kode_barang').val());
		form_data.append('txt_nama_barang', $('#txt_nama_barang').val());
		form_data.append('txt_satuan', $('#txt_satuan').val());
		form_data.append('txt_grup', $('#txt_grup').val());
		form_data.append('txt_min_stock_qty', $('#txt_min_stock_qty').val());
		form_data.append('txt_saldo_awal_nilai', $('#txt_saldo_awal_nilai').val());
		form_data.append('txt_saldo_awal_qty', $('#txt_saldo_awal_qty').val());
		form_data.append('txt_saldo_akhir_qty', $('#txt_saldo_akhir_qty').val());
		form_data.append('txt_saldo_akhir_nilai', $('#txt_saldo_akhir_nilai').val());
		form_data.append('txt_keterangan_stock_awal', $('#txt_keterangan_stock_awal').val());

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('stock_awal/simpan_stock'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			contentType: false,
			processData: false,

			data: form_data,
			success: function(data) {
				if (data == 'barang_sudah_ada_di_stok_awal') {
					swal('Barang sudah ada di stok awal pada periode ini')
				} else {
					$('#modalInputStockAwal').modal('hide');
					listStockAwal();
					new PNotify({
						title: 'Sukses',
						text: 'Data Berhasil Disimpan',
						type: 'success',
						// hide: false,
						styling: 'bootstrap3'
					});
				}
			},
			error: function(request) {
				alert(request.responseText);
				new PNotify({
					title: 'Gagal',
					text: 'Data Gagal Tersimpan',
					type: 'error',
					// hide: false,
					styling: 'bootstrap3'
				});
			}
		});
	}

	function modalListBarang() {
		$('#modalListBarang').modal('show');
		tableListBarang();
	}

	function tableListBarang() {
		$('#tableListBarang').DataTable().destroy();
		$('#tableListBarang').DataTable({
			"paging": true,
			"scrollY": false,
			"scrollX": false,
			"searching": true,
			"select": true,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"responsive": true,
			"order": [],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
			"ajax": {
				"url": "<?php echo site_url('stock_awal/list_barang'); ?>",
				"type": "POST",
				"data": {},
				"error": function(request) {
					alert(request.responseText);
				}
			},
			"columns": [{
					"width": "5%"
				},
				{
					"width": "10%"
				},
				{
					"width": "30%"
				},
				{
					"width": "30%"
				},
				{
					"width": "5%"
				},
			],
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
			"drawCallback": function(settings) {
				$('#tableListBarang tr').each(function() {
					var Cell = $(this).find('td');

					Cell.parent().on('mouseover', Cell, function() {
						Cell.parent().css('background-color', '#26b99a');
						Cell.parent().css('color', '#ffffff');

						Cell.parent().bind("mouseout", function() {
							Cell.parent().css('background-color', '');
							Cell.parent().css('color', '#73879c');
						});
					});
				});
			},
		});
	}

	$('#tableListBarang tbody').on('click', 'tr', function() {
		var dataClick = $('#tableListBarang').DataTable().row(this).data();
		var kode_brg = dataClick[1].trim();
		var nama_brg = dataClick[2].trim();
		var satuan = dataClick[4].trim();
		var group_brg = dataClick[3].trim();
		var row = $('#hidden_no_row').val();

		$('#txt_kode_barang').val(kode_brg);
		$('#txt_nama_barang').val(nama_brg);
		$('#txt_satuan').val(satuan);
		// $('#hidden_grup').val(group_brg);
		$('#txt_grup').val(group_brg);

		$('#modalListBarang').modal('hide');
	})

	function listStockAwal() {
		$('#tableStockAwal').DataTable().destroy();
		var dt = $('#tableStockAwal').DataTable({
			"paging": true,
			// "scrollY"         : true,
			// "scrollX"         : true,
			"searching": true,
			"select": false,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"responsive": true,
			"order": [],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
			"ajax": {
				"url": "<?php echo site_url('stock_awal/list_stock_awal'); ?>",
				"type": "POST",
				"data": {},
			},
			"columns": [{
					"width": "5%"
				},
				{
					"width": "5%"
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
				{
					"width": null
				},
			],
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});
	}

	function detail_barang(kodebar, id) {
		$('#modalInputStockAwal').modal('show');
		$('#btn_simpan').hide();
		$('#btn_ubah').show();

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('stock_awal/detail_stock'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			// cache   : false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id,
				'kodebar': kodebar
			},
			success: function(data) {
				$('#hidden_id').val(data.id);
				$('#txt_kode_barang').val(data.kodebartxt);
				$('#txt_nama_barang').val(data.nabar);
				$('#txt_satuan').val(data.satuan);
				$('#txt_min_stock_qty').val(data.minstok);
				$('#txt_saldo_awal_qty').val(data.saldoawal_qty);
				$('#txt_saldo_awal_nilai').val(data.saldoawal_nilai);
				$('#txt_saldo_akhir_qty').val(data.saldoakhir_qty);
				$('#txt_saldo_akhir_nilai').val(data.saldoakhir_nilai);
				$('#txt_keterangan_stock_awal').val(data.ket);
				// $('#hidden_grup').val(data.grp);
				$('#txt_grup').val(data.grp);

			},
			error: function(request) {
				alert(request.responseText);
				new PNotify({
					title: 'Error',
					text: 'Gagal mengambil data barang',
					type: 'error',
					// hide: false,
					styling: 'bootstrap3'
				});
			}
		});
	}
</script>