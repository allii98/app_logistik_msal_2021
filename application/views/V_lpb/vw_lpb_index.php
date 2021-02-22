<!-- <link href="<?php // echo base_url(); 
					?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> -->

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
</style>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>LPB <small>Laporan Penerimaan Barang</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" id="btn_input" href="<?php echo site_url('lpb/input'); ?>">Input LPB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data LPB</h2>
					<div class="form-group nav navbar-right col-md-4">
						<div class="form-group">
							<select class="form-control" id="filter" name="filter"></select>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListLPB" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. LPB</th>
								<th>No. Ref LPB</th>
								<th>No. PO</th>
								<th>No. Ref PO</th>
								<th>Supplier</th>
								<th>Item Barang</th>
								<th>Keterangan</th>
								<th>Tgl Input</th>
								<th>User</th>
								<th>Approval</th>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalLPB">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal LPB</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_stok_masuk" name="hidden_id_stok_masuk">
					<input type="hidden" id="hidden_no_lpb" name="hidden_no_lpb">
					<p>Apakah Anda Yakin ingin membatalkan LPB <b id="b_no_lpb"></b> ?</p>
					<label class="control-label">Alasan : </label>
					<textarea class="form-control" id="txt_alasan_batal_lpb" name="txt_alasan_batal_lpb"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanLPB" onclick="batalLPB()">Batalkan LPB</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListApproval">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">List Item LPB</h4>
				</div>
				<div class="modal-body">

					<div class="table-responsive">
						<table id="tableListLPBItem" width="100%" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>No. LPB</th>
									<th>No. REF LPB</th>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Qty Diminta</th>
									<th>Qty Disetujui</th>
									<th>Satuan</th>
									<th>Kasie Gudang</th>
									<th>KTU</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
				<center>
					<div class="modal-body">
						<?php
						$thisUser = $this->session->userdata('user');
						$konfirUser = "";
						if ($thisUser == "Kasie Gudang" || $thisUser == "KTU") {
							switch ($thisUser) {
								case "Kasie Gudang":
									$konfirUser = "KasieGudang";?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-success btncon" onclick="konfir('<?= $konfirUser; ?>','setuju');">Approve</button>
									<button type="button" class="btn btn-danger btncon" onclick="konfir('<?= $konfirUser; ?>','tidaksetuju');">Not Approve</button>
									<?php
									break;
								case "KTU":
									$konfirUser = "KTU";?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-success btncon" onclick="konfir('<?= $konfirUser; ?>','setuju');">Approve</button>
									<button type="button" class="btn btn-danger btncon" onclick="konfir('<?= $konfirUser; ?>','tidaksetuju');">Not Approve</button>
									<?php
									break;
								default:
									break;
							}
						} ?>
					</div>
				</center>
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
					<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="pilihEST()" >Pilih</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#div_filter').hide();
		var filter = "Semua";
		$('#modalPilihEstate').modal('show');
		pilihDevisi();
		pilihDevisiFilter();
		listLPB(filter);
	});
	function pilihDevisi(){
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
	function pilihDevisiFilter(){
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
	function pilihEST(){
  		$('#modalPilihEstate').modal('hide');
  		var est = $('#cmb_pilih_est').val();
		var filter = est;
		$('#filter option[value="'+est+'"]').attr("selected", true);
		listLPB(filter);
  	}
	$('#filter').change(function(){
		var filter = this.value;
		console.log(filter);
		listLPB(filter);
	});

	function listLPB(filter) {
		$('#tableListLPB').DataTable().destroy();
		var dt = $('#tableListLPB').DataTable({
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
				if (aData[12] == '1') {
					$('td', nRow).css('background-color', '#5cb85c');
					$('td', nRow).css('color', '#ffffff');
				} else if (aData[12] == '2') {
					$('td', nRow).css('background-color', '#5cb85c');
					$('td', nRow).css('color', '#ffffff');
				}
			},
			"ajax": {
				"url": "<?php if ($url == 1) echo site_url('lpb/list_lpb/1'); else echo site_url('lpb/list_lpb/0');?>",
				"type": "POST",
				"data": {
					'filter': filter
				},
				"error": function(request) {
					alert(request.responseText);
					console.log(request.responseText);
				}
			},
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});

		var detailRows = [];

		$('#tableListLPB tbody').on('click', 'tr td.details-control', function() {
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

	function modalApproval(nolpb, noreflpb) {
		$('#modalListApproval').modal('show');
		listLPBItem(nolpb, noreflpb);
	}

	function listLPBItem(nolpb, noreflpb) {
		$('#tableListLPBItem').DataTable().destroy();
		var dt = $('#tableListLPBItem').DataTable({
			"paging": true,
			"scrollY": true,
			"scrollX": true,
			"searching": true,
			"select": true,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": false,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"fixedHeader": true,
			"fnInitComplete": function() {
				if ($('#tableListLPBItem').DataTable().rows('.qwe').count() == 0) {
					$('#btnfo').css('display', 'block');
					$('.btncon').css('display', 'none');
				} else {
					$('#btnfo').css('display', 'none');
					$('.btncon').css('display', 'block');
				}
			},
			"order": [],
			"select": {
				"style": "multi",
			},
			"dom": 'Bfrtip',
			"buttons": [{
					"text": "Select All",
					"action": function() {
						$('#tableListLPBItem').DataTable().rows('.qwe').select();
					}
				},
				{
					"text": "Unselect All",
					"action": function() {
						$('#tableListLPBItem').DataTable().rows().deselect();
					}
				}
			],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				<?php if ($this->session->userdata('user') == "Kasie Gudang") { ?>
					if (aData[8] == "No Action") {
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } else if ($this->session->userdata('user') == "KTU") { ?>
					if (aData[9].substr(0, 2) == "<a") {
						//nRow.style.display = nRow.style.display == "none" ? "table-row" : "none";
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } ?>
			},
			"ajax": {
				"url": "<?php echo site_url('lpb/list_lpbitem'); ?>",
				"type": "POST",
				"data": {
					'nolpb': nolpb,
					'noreflpb': noreflpb
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
			$('#tableListLPBItem').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100);
	}

	function konfir(jabatan, approval) {
		var rowcol = $('#tableListLPBItem').DataTable().rows({
			selected: true
		}).count();
		if (rowcol == 0) {
			swal("No Data Selected");
		} else {
			var conf = confirm("Apakah Anda Yakin ?");
			if (conf == true) {
				var rowcollection = $('#tableListLPBItem').DataTable().rows('.qwe', {
					selected: true
				}).data().toArray();
				$.each(rowcollection, function(index, elem) {
					var nolpb = rowcollection[index][1];
					var noreflpb = rowcollection[index][2];
					var kodebar = rowcollection[index][3];
					var nabar = btoa(rowcollection[index][4]);
					konfirmasi(nolpb, noreflpb, kodebar, jabatan, approval, nabar);
				});
			}
		}

	}

	function konfirmasi(nolpb, noreflpb, kodebar, jabatan, approval, nabar) {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('lpb/konfirmasi_approval'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,

			data: {
				'nolpb': nolpb,
				'noreflpb': noreflpb,
				'kodebar': kodebar,
				'jabatan': jabatan,
				'approval': approval,
				'nabar': nabar
			},
			success: function(data) {
				listLPBItem(nolpb, noreflpb);
			},
			error: function(request) {
				//alert(request);
				console.log(request.responseText);
			}
		});
	}

	function revQty(nolpb, noreflpb, kodebar, jabatan, approval, qtybar) {
		var qty_disetujui = parseInt(prompt("Masukan jumlah Qty yang disetujui :", ""));
		var qtybarang = parseInt(qtybar);

		if (qty_disetujui <= 0) {
			swal('Qty tidak boleh lebih kecil atau sama dengan 0');
		} else if (qty_disetujui > qtybar) {
			swal('Qty tidak boleh lebih besar dari jumlah permintaan');
		} else if (isNaN(qty_disetujui)) {
			swal('Qty Harus berupa Angka');
		} else {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('lpb/rev_qty'); ?>",
				dataType: "JSON",
				beforeSend: function() {

				},
				cache: false,
				// contentType : false,
				// processData : false,

				data: {
					'nolpb': nolpb,
					'noreflpb': noreflpb,
					'kodebar': kodebar,
					'jabatan': jabatan,
					'approval': approval,
					'qty_disetujui': qty_disetujui
				},
				success: function(data) {
					listLPBItem(nolpb, noreflpb);
				},
				error: function(request) {
					alert(request.responseText);
					// alert('error');
				}
			});
		}
	}

	function showHideFilter() {
		if ($('#div_filter').is(":hidden")) {
			$('#div_filter').show();
		} else {
			$('#div_filter').hide();
		}
	}

	function konfirmasiBatalLPB(id, nolpb) {
		$('#hidden_id_stok_masuk').val(id);
		$('#hidden_no_lpb').val(nolpb);
		$('#b_no_lpb').text(nolpb);
		$('#modalBatalLPB').modal('show');
	}

	function batalLPB() {
		var txt_alasan_batal_lpb = $('#txt_alasan_batal_lpb').val();
		if ($.trim(txt_alasan_batal_lpb) == '') {
			$('#txt_alasan_batal_lpb').css('background-color', '#ff3232');
			$('#txt_alasan_batal_lpb').attr('placeholder', 'Masukan alasan batal !');
		} else {
			var id_stok_masuk = $('#hidden_id_stok_masuk').val();
			var no_lpb = $('#hidden_no_lpb').val();

			console.log(id_stok_masuk);
			console.log(no_lpb);
			console.log(txt_alasan_batal_lpb);
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('lpb/batal'); ?>",
				dataType: "JSON",
				beforeSend: function() {

				},
				cache: false,
				// contentType : false,
				// processData : false,

				data: {
					'id': id_stok_masuk,
					'no_lpb': no_lpb,
					'alasan': txt_alasan_batal_lpb
				},
				success: function(data) {
					listLPB('', '');
					$('#modalBatalLPB').modal('hide');
					new PNotify({
						title: 'Sukses',
						text: 'LPB Berhasil dibatalkan',
						type: 'success',
						// hide: false,
						styling: 'bootstrap3'
					});
				},
				error: function(request) {
					alert(request.responseText);
					console.log(request.responseText);
				}
			});
		}
	}
</script>