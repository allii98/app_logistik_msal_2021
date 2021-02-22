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
								
								<th>#</th>
								<th>No.</th>
								<th>No. SPP</th>
								<th>No. Ref</th>
								<th>Tgl. Ref</th>
								<th>Tgl. Terima</th>
								<th>Departemen</th>
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
		// $('#div_filter').hide();
		var filter = "Semua";
		var cari_no_spp = "";
		$('#modalPilihEstate').modal('show');
        pilihDevisi();
        pilihDevisiFilter();
		listSPP(filter, cari_no_spp);
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
  		// console.log(est);
		var filter = est;
		var cari_no_spp = "";
		$('#filter option[value="'+est+'"]').attr("selected", true);
		listSPP(filter, cari_no_spp);
  	}
	
	$('#filter').change(function(){
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
		console.log(filter);
		var cari_no_spp = $('#txt_cari_no_spp').val();
		listSPP(filter, cari_no_spp);
	});
</script>