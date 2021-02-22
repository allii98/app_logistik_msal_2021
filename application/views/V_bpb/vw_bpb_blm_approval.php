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
			<h2>BPB <small>Bon Permintaan Barang</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" id="btn_input" href="<?php echo site_url('bpb/input'); ?>">Input BPB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data BPB</h2>
					<div class="form-group nav navbar-right col-md-2">
						<div class="form-group">
							<select class="form-control" id="filter" name="filter">
								<option value="Semua">Semua</option>
								<?php if($this->session->userdata('status_lokasi') == 'HO'){?>
									<option value="01">HO</option>
									<option value="03">PKS</option>
									<option value="02">RO</option>
									<option value="06">Estate 1</option>
									<option value="07">Estate 2</option>
								<?php }else if($this->session->userdata('status_lokasi') == 'PKS'){?>
									<option value="03">PKS</option>
								<?php }else if($this->session->userdata('status_lokasi') == 'RO'){?>
									<option value="02">RO</option>
								<?php }else if($this->session->userdata('status_lokasi') == 'SITE'){?>
									<option value="06">Estate 1</option>
									<option value="07">Estate 2</option>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListBPB" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. BPB</th>
								<th>Item Barang</th>
								<th>Keperluan</th>
								<th>Tgl Input</th>
								<th>Diminta Oleh</th>
								<!-- <th>KTU</th> -->
								<!-- <th>Mgr</th> -->
								<!-- <th>GM</th> -->
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalBPB">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal BPB</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_bpb" name="hidden_id_bpb">
					<input type="hidden" id="hidden_no_bpb" name="hidden_no_bpb">
					<p>Apakah Anda Yakin ingin membatalkan BPB <b id="b_no_bpb"></b> ?</p>
					<label class="control-label">Alasan : </label>
					<textarea class="form-control" id="txt_alasan_batal_bpb" name="txt_alasan_batal_bpb"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanBPB" onclick="batalBPB()">Batalkan BPB</button>
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
					<h4 class="modal-title" id="myModalLabel">List Item BPB</h4>
				</div>
				<div class="modal-body">
					<!-- <input type="hidden" id="hidden_id_setuju" name="hidden_id_setuju"> -->
					<!-- <input type="hidden" id="hidden_noppotxt_setuju" name="hidden_noppotxt_setuju"> -->
					<div class="table-responsive">
						<table id="tableListBPBItem" class="table table-striped table-bordered" width="100%">
							<thead>
								<tr>
									<th>No.</th>
									<th>No. BPB</th>
									<th>No. REF BPB</th>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Qty Diminta</th>
									<th>Qty Disetujui</th>
									<th>Satuan</th>
									<th>Asisten Afd</th>
									<th>Kepala Kebun</th>
									<th>Kasie Agronomi</th>
									<th>KTU</th>
									<th>GM</th>
								</tr>
							</thead>

							<tbody id="tbody_list_po">
							</tbody>
						</table>
					</div>
				</div>
				<center>
					<div class="modal-body">
						<?php
						$thisUser = $this->session->userdata('user');
						$konfirUser = "";
						if ($thisUser == "Asisten Afdeling" || $thisUser == "KTU" || $thisUser == "Kepala Kebun" || $thisUser == "Kasie Agronomi" || $thisUser == "GM") {
							switch ($thisUser) {
								case "Asisten Afdeling":
									$konfirUser = "AsistenAfd";
						?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-success btncon" onclick="konfir('<?= $konfirUser; ?>','setuju');">Approve</button>
									<button type="button" class="btn btn-danger btncon" onclick="konfir('<?= $konfirUser; ?>','tidaksetuju');">Not Approve</button>
								<?php
									break;
								case "KTU":
									$konfirUser = "KTU";
								?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-success btncon" onclick="konfir('<?= $konfirUser; ?>','setuju');">Approve</button>
									<button type="button" class="btn btn-danger btncon" onclick="konfir('<?= $konfirUser; ?>','tidaksetuju');">Not Approve</button>
								<?php
									break;
								case "Kepala Kebun":
									$konfirUser = "KepalaKebun";
								?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-success btncon" onclick="konfir('<?= $konfirUser; ?>','setuju');">Approve</button>
									<button type="button" class="btn btn-danger btncon" onclick="konfir('<?= $konfirUser; ?>','tidaksetuju');">Not Approve</button>
								<?php
									break;
								case "Kasie Agronomi":
									$konfirUser = "KasieAgronomi";
								?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-info btncon" onclick="konfir('<?= $konfirUser; ?>','mengetahui');">Mengetahui</button>
								<?php
									break;
								case "GM":
									$konfirUser = "GM";
								?>
									<div id="btnfo"><button type="button" class="btn btn-default">No data available to select</button></div>
									<button type="button" class="btn btn-info btncon" onclick="konfir('<?= $konfirUser; ?>','mengetahui');">Mengetahui</button>
						<?php
									break;
								default:
									break;
							}
						} ?>
					</div>
				</center>
				<div class="modal-footer">
					<!-- <?php
							if ($status2 == "1") {
							?>
					<button type="button" class="btn btn-success" id="btn_setuju" onclick="setuju()" >Setuju</button>
					<?php
							} elseif ($status2 == "4") {
					?>
					<button type="button" class="btn btn-warning" id="btn_mengetahui" onclick="setuju()" >Mengetahui</button>
					<?php
							}
					?> -->
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasi">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Approval</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_nobpb" name="hidden_nobpb">
					<input type="hidden" id="hidden_norefbpb" name="hidden_norefbpb">
					<input type="hidden" id="hidden_kodebar" name="hidden_kodebar">
					<input type="hidden" id="hidden_jabatan" name="hidden_jabatan">
					<input type="hidden" id="hidden_approval" name="hidden_approval">
					<p>Apakah Anda yakin ?</p>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div> -->
	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihEstate">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Kebun</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label">Pilih Kebun</label>
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
		listBPB(filter);
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

	function pilihEST(){
  		$('#modalPilihEstate').modal('hide');
  		var est = $('#cmb_pilih_est').val();
		var filter = est;
		$('#filter option[value="'+est+'"]').attr("selected", true);
		listBPB(filter);
  	}
	$('#filter').change(function(){
		var filter = this.value;
		console.log(filter);
		listBPB(filter);
	});

	function listBPB(filter) {
		$('#tableListBPB').DataTable().destroy();
		var dt = $('#tableListBPB').DataTable({
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
				console.log(aData);
			},
			"ajax": {
				"url": "<?php echo site_url('bpb/list_bpb_blm_approval'); ?>",
				"type": "POST",
				"data": {
					'filter': filter
				},
				"error": function(request) {
					alert(request.responseText);
				}
			},
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});

		var detailRows = [];

		$('#tableListBPB tbody').on('click', 'tr td.details-control', function() {
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

	function konfirmasiBatalBPB(id, nobpb) {
		$('#hidden_id_bpb').val(id);
		$('#hidden_no_bpb').val(nobpb);
		$('#b_no_bpb').text(nobpb);
		$('#modalBatalBPB').modal('show');
	}

	function batalBPB() {
		var id_bpb = $('#hidden_id_bpb').val();
		var no_bpb = $('#hidden_no_bpb').val();
		var txt_alasan_batal_bpb = $('#txt_alasan_batal_bpb').val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('bpb/batal'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id': id_bpb,
				'no_bpb': no_bpb,
				'alasan': txt_alasan_batal_bpb
			},
			success: function(data) {
				listBPB('', '');
				$('#modalBatalBPB').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function modalListApproval(nobpb, norefbpb) {
		$('#modalListApproval').modal('show');
		listBPBItem(nobpb, norefbpb);
	}

	function listBPBItem(nobpb, norefbpb) {
		$('#tableListBPBItem').DataTable().destroy();
		var dt = $('#tableListBPBItem').DataTable({
			"paging": true,
			"scrollY": true,
			"scrollX": true,
			"searching": true,
			"select": true,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"order": [],
			"select": {
				"style": "multi",
			},
			"fnInitComplete": function() {
				if ($('#tableListBPBItem').DataTable().rows('.qwe').count() == 0) {
					$('#btnfo').css('display', 'block');
					$('.btncon').css('display', 'none');
				} else {
					$('#btnfo').css('display', 'none');
					$('.btncon').css('display', 'block');
				}
			},
			"dom": 'Bfrtip',
			"buttons": [{
					"text": "Select All",
					"action": function() {
						$('#tableListBPBItem').DataTable().rows('.qwe').select();
					}
				},
				{
					"text": "Unselect All",
					"action": function() {
						$('#tableListBPBItem').DataTable().rows().deselect();
					}
				}
			],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				<?php if ($this->session->userdata('user') == "Asisten Afdeling") { ?>
					if (aData[8] == "No Action") {
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } else if ($this->session->userdata('user') == "Kepala Kebun") { ?>
					if (aData[9].substr(0, 2) == "<a") {
						//nRow.style.display = nRow.style.display == "none" ? "table-row" : "none";
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } else if ($this->session->userdata('user') == "Kasie Agronomi") { ?>
					if (aData[10] == "No Action") {
						//nRow.style.display = nRow.style.display == "none" ? "table-row" : "none";
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } else if ($this->session->userdata('user') == "KTU") { ?>
					if (aData[11].substr(0, 2) == "<a") {
						//nRow.style.display = nRow.style.display == "none" ? "table-row" : "none";
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } else if ($this->session->userdata('user') == "GM") { ?>
					if (aData[12] == "No Action") {
						//nRow.style.display = nRow.style.display == "none" ? "table-row" : "none";
						$(nRow).addClass('qwe');
					} else {
						$(nRow).removeClass('qwe');
					}
				<?php } ?>
			},
			"ajax": {
				"url": "<?php echo site_url('bpb/list_bpbitem'); ?>",
				"type": "POST",
				"data": {
					'nobpb': nobpb,
					'norefbpb': norefbpb
				},
				"error": function(request) {
					alert(request.responseText);
				}
			},
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});
		var rel = setInterval(function() {
			$('#tableListBPBItem').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100);
	}

	function konfir(jabatan, approval) {
		var rowcol = $('#tableListBPBItem').DataTable().rows({
			selected: true
		}).count();
		if (rowcol == 0) {
			swal("No Data Selected");
		} else {
			var conf = confirm("Apakah Anda Yakin ?");
			if (conf == true) {
				var rowcollection = $('#tableListBPBItem').DataTable().rows('.qwe', {
					selected: true
				}).data().toArray();
				$.each(rowcollection, function(index, elem) {
					var nobpb = rowcollection[index][1];
					var norefbpb = rowcollection[index][2];
					var kodebar = rowcollection[index][3];
					konfirmasi(nobpb, norefbpb, kodebar, jabatan, approval);
					//console.log(kodebar);
				});
			}
		}

	}

	function konfirmasi(nobpb, norefbpb, kodebar, jabatan, approval) {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('bpb/konfirmasi_approval'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'nobpb': nobpb,
				'norefbpb': norefbpb,
				'kodebar': kodebar,
				'jabatan': jabatan,
				'approval': approval
			},
			success: function(data) {
				listBPBItem(nobpb, norefbpb);
			},
			error: function(request) {
				alert(request.responseText);
				// alert('error');
			}
		});
	}

	function revQty(nobpb, norefbpb, kodebar, jabatan, approval) {
		var qty_disetujui = parseFloat(prompt("Masukan jumlah Qty yang disetujui :", ""));
		if (isNaN(qty_disetujui)) {
			alert('Qty Harus berupa Angka');
		} else {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('bpb/rev_qty'); ?>",
				dataType: "JSON",
				beforeSend: function() {

				},
				cache: false,
				// contentType : false,
				// processData : false,

				data: {
					'nobpb': nobpb,
					'norefbpb': norefbpb,
					'kodebar': kodebar,
					'jabatan': jabatan,
					'approval': approval,
					'qty_disetujui': qty_disetujui
				},
				success: function(data) {
					listBPBItem(nobpb, norefbpb);
				},
				error: function(request) {
					alert(request.responseText);
					// alert('error');
				}
			});
		}
	}
</script>