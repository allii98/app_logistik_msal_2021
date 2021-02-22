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
</style>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>PP <small>Permohonan Pembayaran</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" id="btn_input" href="<?php echo site_url('pp/input'); ?>">Input PP</a>
			<!--a class="btn btn-round btn-info" href="<?php echo site_url('pp/deletelogistik'); ?>">Delete PP</a-->
			<div class="x_panel">
				<div class="x_title">
					<h2>Data PP</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListPP" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. PP</th>
								<th>No. PO</th>
								<th>Tgl. PP</th>
								<th>Tgl. PO</th>
								<th>Ref PO</th>
								<th>Nama Supplier</th>
								<th>Ket</th>
							</tr>
						</thead>

						<tbody id="tbody_list_pp">
						</tbody>
					</table>
					<br />
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalPP">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal PP</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_pp" name="hidden_id_pp">
					<input type="hidden" id="hidden_nopptxt_pp" name="hidden_nopptxt_pp">
					<p>Apakah Anda Yakin ingin membatalkan PP <b id="b_no_pp"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanPP" onclick="batalPP()">Batalkan PP</button>
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
		listPP();
		// $(document).ready(function(){
		var thisUsr = '<?= $this->session->userdata('user'); ?>';
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
		}
		// });
	});

	function listPP() {
		var dt = $('#tableListPP').DataTable({
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
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
			"ajax": {
				"url": "<?php echo site_url('pp/list_pp'); ?>",
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

	function konfirmasiBatalPP(id, nopptxt) {
		$('#hidden_id_pp').val(id);
		$('#hidden_nopptxt_pp').val(nopptxt);
		$('#b_no_pp').text(nopptxt);
		$('#modalBatalPP').modal('show');
	}

	function batalPP() {
		var id_pp = $('#hidden_id_pp').val();
		var nopptxt = $('#hidden_nopptxt_pp').val();
		console.log(id_pp);
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('pp/batal'); ?>",
			dataType: "JSON",
			beforeSend: function() {

			},
			cache: false,
			// contentType : false,
			// processData : false,

			data: {
				'id_pp': id_pp,
				'nopptxt': nopptxt
			},
			success: function(data) {
				// alert('SPP Dibatalkan');
				listSPP('', '');
				$('#modalBatalPP').modal('hide');
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}
</script>