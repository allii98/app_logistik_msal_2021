<style type="text/css">
	td.details-control {
		background: url('/app_logistik_msal/assets/icon/info.png') no-repeat center center;
		cursor: pointer;
	}

	tr.details td.details-control {
		background: url('/app_logistik_msal/assets/icon/minus.png') no-repeat center center;
	}
</style>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>SPP <small>Surat Permintaan Pembelian</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" id="btn_input" href="<?php echo site_url('spp/input'); ?>">Input SPP</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data SPP</h2>

					<div class="form-group nav navbar-right">
						<button class="btn btn-primary btn-sm fa fa-filter" onclick="showHideFilter()"> Filter</button>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div data-parsley-validate class="form-horizontal form-label-left" id="div_filter">
						<div class="form-group">
							<div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-2">
								<div class="radio">
									<label>
										<input type="radio" value="Semua" id="rbt_filter_semua" name="rbt_filter" checked> Semua SPP
									</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="radio">
									<label>
										<input type="radio" value="Sudah PO" id="rbt_filter_PO_sudah" name="rbt_filter"> SPP sudah PO
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="Belum PO" id="rbt_filter_PO_belum" name="rbt_filter"> SPP belum PO
									</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="radio">
									<label>
										<input type="radio" value="SPPI" id="rbt_filter_SPI" name="rbt_filter"> SPPI
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="SPPA" id="rbt_filter_SPPA" name="rbt_filter"> SPPA
									</label>
								</div>
							</div>
						</div>

					</div>
					<table id="tableListSPP" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<!-- <th></th> -->
								<th>#</th>
								<th>No.</th>
								<th>No. SPP</th>
								<th>No. Ref</th>
								<th>Tgl. Ref</th>
								<!-- <th>Tanggal</th> -->
								<th>Tgl. Terima</th>
								<th>Departemen</th>
								<!-- <th>PT</th> -->
								<th>Lokasi</th>
								<th>Item Barang</th>
								<th>Keterangan</th>
								<th>Status</th>
								<th>Input Oleh</th>
							</tr>
						</thead>
						<tbody id="tbody_list_spp">
						</tbody>
					</table>
					<br />
					<br />
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
					<input type="hidden" id="hidden_id_spp" name="hidden_id_spp">
					<p>Apakah Anda Yakin ingin membatalkan SPP <b id="b_no_spp"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="batalSPP()">Batalkan SPP</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
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
		var cari_no_spp = "";
		listSPP(filter, cari_no_spp);
		/*var thisUsr = '<?= $this->session->userdata('user'); ?>';
		if (thisUsr == 'Kasie HRD GA' || thisUsr == 'Kasie Pabrik' ||
			thisUsr == 'User HO' || thisUsr == 'User RO' ||
			thisUsr == 'User SITE' || thisUsr == 'User PKS' ||
			thisUsr == 'Staff Purchasing' || thisUsr == 'User Gudang' ||
			thisUsr == 'Dept Head Purchasing' || thisUsr == 'Kasie Gudang' ||
			thisUsr == 'Asisten Afdeling') {
			$('#menu_tr').removeAttr('style');
		} else {
			$('#menu_tr').css('display', 'none');
			$('#btn_input').css('display', 'none');
		}*/
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
				} else if (aData[0][11] == "DITOLAK") {
					$('td', nRow).css('background-color', '#d9534f');
					$('td', nRow).css('color', '#ffffff');
				} else if (aData[0][11] == "UBAH") {
					$('td', nRow).css('background-color', '#f0ad4e');
					$('td', nRow).css('color', '#ffffff');
				}
			},
			"ajax": {
				"url": "<?php echo site_url('spp/list_spp'); ?>",
				"type": "POST",
				"data": {
					'filter': filter,
					'cari_no_spp': cari_no_spp
				},
			},

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

	function konfirmasiBatalSPP(id, nospp) {
		$('#hidden_id_spp').val(id);
		$('#b_no_spp').text(nospp);
		$('#modalBatalSPP').modal('show');
	}

	function batalSPP() {
		var id_spp = $('#hidden_id_spp').val();
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
				listSPP('', '');
				$('#modalBatalSPP').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
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
		var cari_no_spp = $('#txt_cari_no_spp').val();
		listSPP(filter, cari_no_spp);
		// if (this.value == 'Semua') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'Belum Proses') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'Sudah Proses') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'Sudah PO') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'Belum PO') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'Sudah Proses') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'SPPI') {
		// filter = this.value;
		// listSPP(filter);
		// }
		// else if (this.value == 'SPPA') {
		// filter = this.value;
		// listSPP(filter);
		// }
	});

	function cari_no_spp() {
		var filter = $('input[type=radio][name=rbt_filter]').val();
		var cari_no_spp = $('#txt_cari_no_spp').val();
		listSPP(filter, cari_no_spp);
	}
</script>