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
	   max-width:1200px;
	  }
	}

	.modal {
	  overflow-y:auto;
	}
	
	p.p_approval_1{
		color: #1abb9c;
	}

	p.p_approval_3{
		color: #d9534f;
	}

	p.p_approval_4{
		color: #f0ad4e;
	}
</style>

<?php
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
	if($this->session->userdata('status_lokasi') == "PKS"){
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
	if($this->session->userdata('status_lokasi') == "SITE"){
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
	if($this->session->userdata('status_lokasi') == "HO" || $this->session->userdata('status_lokasi') == "RO"){
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
					<h2> Menunggu Approval SPP</h2>
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
								<!-- <th>PT</th> -->
								<th>Lokasi</th>
								<th>Keterangan</th>
								<th>Item Barang</th>
								<th>Status</th>
								<th>Input Oleh</th>
								<!-- <th>Kasie.</th> -->
								<!-- <th>GM</th> -->
								<!-- <th>Mill Mgr.</th> -->
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"  id="modalApproval">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail SPP</h4>
				</div>
				<div class="modal-body">
					<h5 id="h5_no_spp"></h5>
					<input type="hidden" id="hidden_no_spp" name="hidden_no_spp">
					<input type="hidden" id="hidden_no_ref_spp" name="hidden_no_ref_spp">
					<div class="table-responsive">
						<table id="tableDetailSPP" class="table table-bordered">
							<thead>
								<tr>
									<!-- <th>#</th> -->
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Sat</th>
									<th>Qty</th>
									<th>Stok</th>
									<!-- <th>Harga</th> -->
									<th>Keterangan</th>
									<th>Status SPP</th>
									<th>Status PO</th>
									<!-- <th>Ket. Batal</th> -->
									<th>Koreksi</th>
									<?php 
										switch($kode_level){
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
					          		<th>KTU</th>
					          		<th>Kasie</th>
					          		<th>GM</th>
					          		<th>Mill Manager</th>
					          		<th>Dept. Head</th>
					          		<th>Dir. Ops</th>
					          		<th>Dept. Head Purchasing</th>
					          		<th>Dir. Purchasing</th>
					          		<?php
					          				break;
					          		}
									?>
									<!-- <th>KTU</th>
									<th>Kasie.</th>
									<th>GM</th>
									<th>Mill Manager</th>
									<th>Dept. Head</th>
									<th>Dir. Ops</th>
									<th>Dept. Head Purchasing</th>
									<th>Dir. Purchasing</th> -->
								</tr>
							</thead>
							<tbody id="tbody_detail_spp">
								<!-- <tr>
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
									<td>1</td>
									<td></td>
								</tr> -->
							</tbody>
						</table>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Approval</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<select id="cmb_status_spp" name="cmb_status_spp" class="form-control">
									<option value="">-- Pilih --</option>
									<option value="DA">Pilih Semua</option>
									<option value="DS">Pilih Sebagian</option>
								</select>
							</div> -->
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
							<?php 
								if(isset($status2) && $status2 == "1"){
							?>
							<button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="modalSetujuSemua()">Setujui Semua</button>
							<?php
								}
								if(isset($status4) && $status4 == "3") {
							?>
							<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tidak disetujui Semua" id="btn_tidak_setuju_all" name="btn_tidak_setuju_all" onclick="modalTdkSetujuSemua()">Tidak disetujui Semua</button>
							<?php
								}
								if(isset($status2) && $status2 == "4") {
							?>
							<!-- <button class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Mengetahui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="modalSetujuSemua()">Mengetahui Semua</button> -->
							<?php 
								}
								if((isset($status2) && $status2 == "4") || (isset($status4) && $status4 == "3") || (isset($status2) && $status2 == "4")) {
							?>
							<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail Approval" id="btn_detail_approval" name="btn_detail_approval" onclick="modalDetailApproval()">Detail Approval</button>
							<?php
								}
							?>
							</div>
						</div>	
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalApprovalGM">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail SPP</h4>
				</div>
				<div class="modal-body">
					<h5 id="h5_no_spp"></h5>
					<input type="hidden" id="hidden_no_spp" name="hidden_no_spp">
					<div class="table-responsive">
						<table id="tableDetailSPP" class="table table-bordered">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Sat</th>
									<th>Qty</th>
									<th>Keterangan</th>
									<th>Status SPP</th>
									<th>Status PO</th>
									<th>Ket. Batal</th>
									<th>Koreksi</th>
									<th>Approval</th>
								</tr>
							</thead>
							<tbody id="tbody_detail_spp">
								
							</tbody>
						</table>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
								<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Disetujui" id="btn_setuju_all" name="btn_setuju_all" onclick="modalSetujuSemua()">Setujui Semua</button>
								<button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tidak disetujui" id="btn_tidak_setuju_all" name="btn_tidak_setuju_all" onclick="modalTdkSetujuSemua()">Tidak disetujui Semua</button>
							</div>
						</div>	
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div> -->

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
						if($status2 == "1"){
					?>
					<button type="button" class="btn btn-success" id="btn_setuju" onclick="setuju()" >Setuju</button>
					<?php
						}
						elseif($status2 == "4") {
					?>
					<button type="button" class="btn btn-warning" id="btn_mengetahui" onclick="setuju()" >Mengetahui</button>
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
					<button type="button" class="btn btn-danger" id="btn_tidak_setuju" onclick="tidakSetuju()" >Tidak Setuju</button>
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
					<button type="button" class="btn btn-success" id="btn_setujuSemua" onclick="setujuAll()" >Ya</button>
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
					<button type="button" class="btn btn-danger" id="btn_tidak_setujuSemua" onclick="tidakSetujuAll()" >Tidak Setuju</button>
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
					<input type="hidden" id="hidden_id_spp" name="hidden_id_spp">
					<p>Apakah Anda Yakin ingin membatalkan SPP <b id="b_no_spp"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="batalSPP()" >Batalkan SPP</button>
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
								<th>KTU</th>
						        <th>Kasie</th>
						        <th>GM</th>
						        <th>Mill Manager</th>
						        <th>Dept. Head</th>
						        <th>Dir. Ops</th>
						        <th>Dept. Head Purchasing</th>
						        <th>Dir. Purchasing</th>
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

</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function(){
		listSPP();
	});

	function format(d) {
		var arr = new Array();
		$.each(d, function(index) {
			arr.push(d[index][1]);
		});
		return arr.join();
	}

	function listSPP(){
		$('#tableListSPP').DataTable().destroy();
		var dt = $('#tableListSPP').DataTable({
		  "paging"	        : true,
      	  "scrollY"         : true,
          "scrollX"         : true,
          "searching"       : true,
          "select"          : true,
          "bLengthChange"   : true,
          "scrollCollapse"  : true,
          "bPaginate"       : true,
          "bInfo"           : true,
          "bSort"           : false,
          "processing"      : true,
          "serverSide"      : true,
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          	if ( aData[0][11] == "DISETUJUI" )
            {
                $('td', nRow).css('background-color', '#5cb85c');
                $('td', nRow).css('color', '#ffffff');
            }
            else if ( aData[0][11] == "DITOLAK" )
            {
                $('td', nRow).css('background-color', '#d9534f');
                $('td', nRow).css('color', '#ffffff');
            }
            else if ( aData[0][11] == "UBAH" )
            {
                $('td', nRow).css('background-color', '#f0ad4e');
                $('td', nRow).css('color', '#ffffff');
            }
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('spp/list_spp');?>",
            "type"        : "POST",
          //   "data"        : {},
          //   "error"       : function(request){
          //     alert(request.responseText);
          //   }
          },
          "columns": [
			// { 
			// 	"class" 		: "details-control",
			// 	"orderable"		: false,
			// 	"data"			: null,
			// 	"defaultContent": ""
			// },
			{ "data": "0.0" },
			{ "data": "0.13" },
            { "data": "0.1" },
            { "data": "0.2" },
            { "data": "0.3" },
            { "data": "0.4" },
            { "data": "0.5" },
            { "data": "0.6" },
            { "data": "0.7" },
            // { "data": "0.8" },
            { "data": "0.9" },
            { "data": "0.10" },
            { "data": "0.14" },
            { "data": "0.11" },
            { "data": "0.12" },
		  ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});

    	var detailRows = [];
 
	    $('#tableListSPP tbody').on( 'click', 'tr td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = dt.row( tr );
	        var idx = $.inArray( tr.attr('id'), detailRows );
	        
	        if ( row.child.isShown() ) {
	            tr.removeClass( 'details' );
	            row.child.hide();
	 
	            // Remove from the 'open' array
	            detailRows.splice( idx, 1 );
	        }
	        else {
	            tr.addClass( 'details' );
	            row.child( format( row.data()[1] ) ).show();
	 
	            // Add to the 'open' array
	            if ( idx === -1 ) {
	                detailRows.push( tr.attr('id') );
	            }
	        }
	    } );

	    dt.on( 'draw', function () {
	        $.each( detailRows, function ( i, id ) {
	        	$('#'+id+' td.details-control').trigger( 'click' );
	        } );
	    } );
	}

	function modalApproval(id){
		$('#modalApproval').modal('show');
		tableDetailSPP(id);
	}

	// function modalApprovalGM(id){
	// 	// $('#modalApprovalGM').modal('show');
	// 	$('#modalApproval').modal('show');
	// 	tableDetailSPP(id);
	// }

	function tableDetailSPP(id){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/get_detail_spp'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id},
	        success: function(data){
	        	$('#h5_no_spp').empty();
	        	$('#h5_no_spp').append("No. SPP : "+data[0].noppotxt);
	        	$('#hidden_no_spp').val(data[0].noppotxt);
	        	$('#hidden_no_ref_spp').val(data[0].noreftxt);

	        	$('#tbody_detail_spp').empty();	
	        	$.each(data, function(index) {
	        		var kode_level_sesi = '<?php echo $this->session->userdata('kode_level'); ?>';
	          		var lokasi_sesi = '<?php echo $this->session->userdata('status_lokasi'); ?>';
	          		
	        		var tr_buka = '<tr id="tr_'+index+'">'
	          		// var td_1 = '<td><input type="checkbox" class="chk_item" disabled /></td>';
	          		var td_2 = '<td>'+data[index].kodebartxt+'</td>';
	          		var td_3 = '<td>'+data[index].nabar+'</td>';
	          		var td_4 = '<td>'+data[index].sat+'</td>';
	          		var td_5 = '<td>'+data[index].qty+'</td>';
	          		var td_20 = '<td>'+data[index].STOK+'</td>';
	          		// var td_6 = '<td>'+data[index].harga+'</td>';
	          		var td_7 = '<td>'+data[index].ket+'</td>';
	          		var td_8 = '<td>'+data[index].status+'</td>';
	          		var td_9 = '<td>'+data[index].po+'</td>';
	          		// var td_10 = '<td></td>';

	          		// var td_11 = '<td><button class="btn btn-xs btn-primary btn-default" type="button" onclick="promptQty('+data[index].id+','+data[index].noppotxt+')">Qty</button></td>';

	          		/*** Jika akses level ktu(11) atau dept head = 21 atau dept head purch = 22 atau dir purch, enable button rev qty, jika bukan , disabled button rev qty ***/
	          		var td_11 = (kode_level_sesi == "11" || kode_level_sesi == "21" || kode_level_sesi == "22" || kode_level_sesi == "23") ? '<td><button class="btn btn-xs btn-primary btn-default" type="button" onclick="promptQty('+data[index].id+','+data[index].noppotxt+')">Qty</button></td>' : '<td><button class="btn btn-xs btn-primary btn-default" type="button" disabled>Qty</button></td>';

	          		var mengetahui = '<button class="btn btn-xs btn-warning btn-default" type="button" onclick="modalKonfirmasiSetuju('+data[index].id+','+data[index].noppotxt+')">Mengetahui</button>';
	          		var setujui = '<button class="btn btn-xs btn-success btn-default" type="button" onclick="modalKonfirmasiSetuju('+data[index].id+','+data[index].noppotxt+')">Setujui</button>';
	          		var tidakDisetujui = '<button class="btn btn-xs btn-danger btn-default" type="button" onclick="modalKonfirmasiTdkSetuju('+data[index].id+','+data[index].noppotxt+')">Tdk disetujui</button>';

	          		var td_12;
	          		var status_ktu,status_kasie,status_gm,status_mill_mgr,status_dept_head,status_dir_ops,status_dept_head_purchasing,status_dir_purchasing;

	          		/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_ktu != null && data[index].status2_ktu == 4){
      					status_ktu = '<p class="p_approval_'+data[index].status2_ktu+'"><b>'+data[index].status_ktu+'</b><br />'+data[index].tgl_approval_ktu+'</p>';
      				}
      				else{
      					status_ktu = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_kasie != null && data[index].status2_kasie == 4){
      					status_kasie = '<p class="p_approval_'+data[index].status2_kasie+'"><b>'+data[index].status_kasie+'</b><br />'+data[index].tgl_approval_kasie+'</p>';
      				}
      				else{
      					status_kasie = '-';
      				}
      				

      				if(data[index].status2_gm != null && (data[index].status2_gm == 4 || data[index].status2_gm == 1 || data[index].status2_gm == 3)){
      					status_gm = '<p class="p_approval_'+data[index].status2_gm+'"><b>'+data[index].status_gm+'</b><br />'+data[index].tgl_approval_gm+'</p>';
      				}
      				else{
      					status_gm = '-';
      				}

      				if(data[index].status2_mill_mgr != null && (data[index].status2_mill_mgr == 1 || data[index].status2_mill_mgr == 3)){
      					status_mill_mgr = '<p class="p_approval_'+data[index].status2_mill_mgr+'"><b>'+data[index].status_mill_mgr+'</b><br />'+data[index].tgl_approval_mill_mgr+'</p>';
      				}
      				else{
      					status_mill_mgr = '-';
      				}

      				if(data[index].status2_dept_head != null && (data[index].status2_dept_head == 1 || data[index].status2_dept_head == 3)){
      					status_dept_head = '<p class="p_approval_'+data[index].status2_dept_head+'"><b>'+data[index].status_dept_head+'</b><br />'+data[index].tgl_approval_mill_mgr+'</p>';
      				}
      				else{
      					status_dept_head = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_dir_ops != null && data[index].status2_dir_ops == 4){
      					status_dir_ops = '<p class="p_approval_'+data[index].status2_dir_ops+'"><b>'+data[index].status_dir_ops+'</b><br />'+data[index].tgl_approval_dir_ops+'</p>';
      				}
      				else{
      					status_dir_ops = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_dept_head_purchasing != null && data[index].status2_dept_head_purchasing == 4){
      					status_dept_head_purchasing = '<p class="p_approval_'+data[index].status2_dept_head_purchasing+'"><b>'+data[index].status_dept_head_purchasing+'</b><br />'+data[index].tgl_approval_dept_head_purchasing+'</p>';
      				}
      				else{
      					status_dept_head_purchasing = '-';
      				}

      				if(data[index].status2_dir_purchasing != null && (data[index].status2_dir_purchasing == 1 || data[index].status2_dir_purchasing == 3)){
      					status_dir_purchasing = '<p class="p_approval_'+data[index].status2_dir_purchasing+'"><b>'+data[index].status_dir_purchasing+'</b><br />'+data[index].tgl_approval_dir_purchasing+'</p></td>';
      				}
      				else{
      					status_dir_purchasing = '-';
      				}
      				var no_ref_spp = data[index].noreftxt;
      				var substr_no_ref_spp = no_ref_spp.substr(0,3);







      				switch (substr_no_ref_spp) {
		                case 'FAC':
	                    	switch(kode_level_sesi){
			          			case '11': // KTU
			          				td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
			          				break;
			          			case '12': // Kasie
			          			case '13': // Kasie
			          			case '14': // Kasie
			          				td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
			          				break;
			          			case '15': // GM
			          				td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
			          				// if(lokasi_sesi == "PKS"){
			          				// 	td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
			          				// }
			          				// else if(lokasi_sesi == "SITE"){
			          				// 	td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
			          				// }
			          				break;
			          			case '16': // Mill Manager
			          				td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
			          				break;
			          			case '21': // Dept. Head
			          				td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
			          				break;
			          			case '22': // Dir. Ops
			          				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
			          				break;
			          			case '23': // Dept. Head Purchasing
			          				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
			          				break;
			          			case '24': // Dir. Purchasing
			          				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
			          				break;
			          			default:
			          				td_12 = '<td>'+status_ktu+'</td>'//Status KTU
			          						+'<td>'+status_kasie+'</td>'//Status Kasie
			          						+'<td>'+status_gm+'</td>'//Status GM
			          						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
			          						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
			          						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
			          						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
			          						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
			          				break;
			          		}
		                    break;
		                case 'EST':
		                    switch(kode_level_sesi){
			          			case '11': // KTU
			          				td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
			          				break;
			          			case '12': // Kasie
			          			case '13': // Kasie
			          			case '14': // Kasie
			          				td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
			          				break;
			          			case '15': // GM
			          				td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
			          				// if(lokasi_sesi == "PKS"){
			          				// 	td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
			          				// }
			          				// else if(lokasi_sesi == "SITE"){
			          				// 	td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
			          				// }
			          				break;
			          			case '16': // Mill Manager
			          				td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
			          				break;
			          			case '21': // Dept. Head
			          				td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
			          				break;
			          			case '22': // Dir. Ops
			          				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
			          				break;
			          			case '23': // Dept. Head Purchasing
			          				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
			          				break;
			          			case '24': // Dir. Purchasing
			          				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
			          				break;
			          			default:
			          				td_12 = '<td>'+status_ktu+'</td>'//Status KTU
			          						+'<td>'+status_kasie+'</td>'//Status Kasie
			          						+'<td>'+status_gm+'</td>'//Status GM
			          						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
			          						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
			          						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
			          						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
			          						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
			          				break;
			          		}
		                    break;
		                case 'RO':
		                	switch(kode_level_sesi){
			          			case '17': // Kepala Perwakilan
			          				td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
			          				break;
			          			case '21': // Dept. Head
			          				td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
			          				break;
			          			case '22': // Dir. Ops
			          				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
			          				break;
			          			case '23': // Dept. Head Purchasing
			          				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
			          				break;
			          			case '24': // Dir. Purchasing
			          				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
			          				break;
			          			default:
			          				td_12 = '<td>'+status_ktu+'</td>'//Status KTU
			          						+'<td>'+status_kasie+'</td>'//Status Kasie
			          						+'<td>'+status_gm+'</td>'//Status GM
			          						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
			          						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
			          						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
			          						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
			          						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
			          				break;
			          		}
		                case 'HO':
		                    switch(kode_level_sesi){
			          			case '11': // KTU
			          				td_12 = '';
			          				break;
			          			case '12': // Kasie
			          			case '13': // Kasie
			          			case '14': // Kasie
			          				td_12 = '';
			          				break;
			          			case '15': // GM
			          				td_12 = '';
			          				break;
			          			case '16': // Mill Manager
			          				td_12 = '';
			          				break;
			          			case '21': // Dept. Head
			          				td_12 = status2_dept_head == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
			          				break;
			          			case '22': // Dir. Ops
			          				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
			          				break;
			          			case '23': // Dept. Head Purchasing
			          				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
			          				break;
			          			case '24': // Dir. Purchasing
			          				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
			          				break;
			          			default:
			          				td_12 = '<td>'+status_dept_head+'</td>'//Status Dept. Head
			          						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
			          						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
			          						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
			          				break;
			          		}
		                    break;
		                default:
		                    break;
		            }







      				switch(kode_level_sesi){
	          			case '11': // KTU
	          				td_12 = status_ktu == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_ktu+'</td>';
	          				// td_12 = '<td>'+mengetahui+'<br />'+status_ktu+'</td>'; //KTU
	          				break;
	          			case '12': // Kasie
	          			case '13': // Kasie
	          			case '14': // Kasie
	          				td_12 = status_kasie == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_kasie+'</td>';
	          				// td_12 = '<td>'+mengetahui+'<br />'+status_kasie+'</td>'; // Kasie
	          				break;
	          			case '15': // GM
	          				if(lokasi_sesi == "PKS"){
	          					td_12 = status_gm == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_gm+'</td>'; //GM
	          					// td_12 = '<td>'+mengetahui+'<br />'+status_gm+'</td>'; //GM
	          				}
	          				else if(lokasi_sesi == "SITE"){
	          					td_12 = status_gm == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_gm+'</td>'; // GM
	          					// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_gm+'</td>'; //GM
	          				}
	          				break;
	          			case '16': // Mill Manager
	          				td_12 = status_mill_mgr == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_mill_mgr+'</td>'; // Mill Manager
	          				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_mill_mgr+'</td>'; // Mill Manager
	          				break;
	          			case '21': // Dept. Head
	          				td_12 = status2_dept_head == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dept_head+'</td>'; // Dept. Head
	          				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_dept_head+'</td>'; //Dept. Head
	          				break;
	          			case '22': // Dir. Ops
	          				td_12 = status_dir_ops == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dir_ops+'</td>'; // Dir. Ops
	          				// td_12 = '<td>'+mengetahui+'<br />'+status_dir_ops+'</td>'; // Dir. Ops
	          				break;
	          			case '23': // Dept. Head Purchasing
	          				td_12 = status2_dept_head_purchasing == "-" ? '<td>'+mengetahui+'</td>' : '<td>'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
	          				// td_12 = '<td>'+mengetahui+'<br />'+status_dept_head_purchasing+'</td>'; // Dept. Head Purchasing
	          				break;
	          			case '24': // Dir. Purchasing
	          				td_12 = status_dir_purchasing == "-" ? '<td>'+setujui+'<br />'+tidakDisetujui+'</td>' : '<td>'+status_dir_purchasing+'</td>'; // Dir. Purchasing
	          				// td_12 = '<td>'+setujui+'<br />'+tidakDisetujui+'<br />'+status_dir_purchasing+'</td>'; // Dir. Purchasing
	          				break;
	          			default:
	          				td_12 = '<td>'+status_ktu+'</td>'//Status KTU
	          						+'<td>'+status_kasie+'</td>'//Status Kasie
	          						+'<td>'+status_gm+'</td>'//Status GM
	          						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
	          						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
	          						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
	          						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
	          						+'<td>'+status_dir_purchasing+'</td>'//Status Dir. Purchasing
	          				break;
	          		}
	          		// var td_12 = '<td>'+mengetahui+'</td>'; //KTU
	          		// var td_13 = '<td>'+mengetahui+'</td>'; // Kasie
	          		// var td_14 = '<td>'+mengetahui+'<br />'+setujui+'<br />'+tidakDisetujui+'</td>'; //GM
	          		// var td_15 = '<td>'+setujui+'<br />'+tidakDisetujui+'</td>'; //Mill Manager
	          		// var td_16 = '<td>'+setujui+'<br />'+tidakDisetujui+'</td>'; //Dept. Head
	          		// var td_17 = '<td>'+mengetahui+'</td>'; //Dir. Ops
	          		// var td_18 = '<td>'+mengetahui+'</td>'; //Dept. Head Purchasing
	          		// var td_19 = '<td>'+setujui+'<br />'+tidakDisetujui+'</td>'; //Dir. Purchasing

					var tr_tutup = '</tr>';

	          		$('#tbody_detail_spp').append(tr_buka+td_2+td_3+td_4+td_5+td_20+td_7+td_8+td_9+td_11+td_12+tr_tutup);
	          		// $('#tbody_detail_spp').append(tr_buka+td_2+td_3+td_4+td_5+td_20+td_7+td_8+td_9+td_10+td_11+td_12+td_13+td_14+td_15+td_16+td_17+td_18+td_19+tr_tutup);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	$('#cmb_status_spp').change(function(){
		if($('#cmb_status_spp').val() == "DA") {
			$('#tableDetailSPP tbody tr td input.chk_item').attr('disabled','');
			$('#tableDetailSPP tbody tr td input.chk_item').prop('checked',true);
		}
		else if($('#cmb_status_spp').val() == "DS") {
			$('#tableDetailSPP tbody tr td input.chk_item').removeAttr('disabled','');
			$('#tableDetailSPP tbody tr td input.chk_item').removeAttr('checked','');
		}
		else if($('#cmb_status_spp').val() == "TD") {
			
		}
	})

	function promptQty(id,noppotxt){
		var boxPrompt = prompt("Update Qty","");
		if (boxPrompt == null || boxPrompt == ""){
			//prompt cancel
		}
		else {
			if(isNaN(parseInt(boxPrompt))){
				alert('Error : Masukan angka !');
			}
			else{
				$.ajax({
			        type    : "POST",
			        url     : "<?php echo site_url('spp/rev_qty'); ?>",
			        dataType  : "JSON",
			        beforeSend: function(){
			        },
			        cache   : false,
			        // contentType : false,
			        // processData : false,
			        
			        data    : {'id':id,'qty':boxPrompt},
			        success: function(data){
			        	$('#tbody_detail_spp').empty();
			        	tableDetailSPP(noppotxt);
			        },
			        error   : function(request){
			          alert(request.responseText);
			        }
			    });
			}
		}
	}

	function modalKonfirmasiSetuju(id,noppotxt){
		$('#modalKonfirmasiSetuju').modal('show');
		$('#modalKonfirmasiTdkSetuju').modal('hide');

		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('hide');
		$('#hidden_id_setuju').val(id);
		$('#hidden_noppotxt_setuju').val(noppotxt);
	}

	function modalKonfirmasiTdkSetuju(id,noppotxt){
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('show');

		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('hide');
		$('#hidden_id_tdk_setuju').val(id);
		$('#hidden_noppotxt_tdk_setuju').val(noppotxt);
	}

	function setuju(){
		var id;
		var noppotxt;
		if($('#hidden_id_setuju').length){
			id = $('#hidden_id_setuju').val();
			noppotxt = $('#hidden_noppotxt_setuju').val();
		}

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/setuju'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id,'nospp':noppotxt},
	        success: function(data){
	        	$('#tbody_detail_spp').empty();
	        	$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
	        	tableDetailSPP(noppotxt);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function tidakSetuju(){
		var id;
		var noppotxt;
		if($('#hidden_id_tdk_setuju').length){
			id = $('#hidden_id_tdk_setuju').val();
			noppotxt = $('#hidden_noppotxt_tdk_setuju').val();
		}

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/tdkSetuju'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id,'nospp':noppotxt},
	        success: function(data){
	        	$('#tbody_detail_spp').empty();
	        	$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
	        	tableDetailSPP(noppotxt);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function modalSetujuSemua(){
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('hide');
		
		$('#modalSetujuSemua').modal('show');
		$('#modalTdkSetujuSemua').modal('hide');
	}

	function modalTdkSetujuSemua(){
		$('#modalKonfirmasiSetuju').modal('hide');
		$('#modalKonfirmasiTdkSetuju').modal('hide');
		
		$('#modalSetujuSemua').modal('hide');
		$('#modalTdkSetujuSemua').modal('show');
	}

	function setujuAll(){
		var no_spp = $('#hidden_no_spp').val();
		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/setujuAll'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'nospp':no_spp},
	        success: function(data){
	        	$('#tbody_detail_spp').empty();
	        	$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
	        	tableDetailSPP(no_spp);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function tidakSetujuAll(){
		var no_spp = $('#hidden_no_spp').val();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/tdkSetujuAll'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'nospp':no_spp},
	        success: function(data){
	        	$('#tbody_detail_spp').empty();
	        	$('#modalKonfirmasiSetuju').modal('hide');
				$('#modalKonfirmasiTdkSetuju').modal('hide');

				$('#modalSetujuSemua').modal('hide');
				$('#modalTdkSetujuSemua').modal('hide');
	        	tableDetailSPP(no_spp);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function konfirmasiBatalSPP(id,nospp){
		$('#hidden_id_spp').val(id);
		$('#b_no_spp').text(nospp);
		$('#modalBatalSPP').modal('show');
	}

	function batalSPP(){
		var id_spp = $('#hidden_id_spp').val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/batal'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {

	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id_spp},
	        success: function(data){
	        	// alert('SPP Dibatalkan');
	        	listSPP();
	        	$('#modalBatalSPP').modal('hide');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	// $('#modalApproval').on('shown.bs.modal', function () {
	$('#tbody_detail_spp tr').click(function (event) {
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
   // });

   function modalDetailApproval(){
   		var nospp = $('#hidden_no_spp').val();
   		$('#modalDetailApproval').modal('show');
   		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/detail_approval'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'nospp':nospp},
	        success: function(data){
	        	$('#tbody_detail_approval').empty();
	        	$.each(data, function(index) {
	        		var kode_level_sesi = '<?php echo $this->session->userdata('kode_level'); ?>';
	          		var lokasi_sesi = '<?php echo $this->session->userdata('status_lokasi'); ?>';
	          		var status_ktu,status_kasie,status_gm,status_mill_mgr,status_dept_head,status_dir_ops,status_dept_head_purchasing,status_dir_purchasing;

	          		/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_ktu != null && data[index].status2_ktu == 4){
      					status_ktu = '<p class="p_approval_'+data[index].status2_ktu+'"><b>'+data[index].status_ktu+'</b><br />'+data[index].tgl_approval_ktu+'</p>';
      				}
      				else{
      					status_ktu = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_kasie != null && data[index].status2_kasie == 4){
      					status_kasie = '<p class="p_approval_'+data[index].status2_kasie+'"><b>'+data[index].status_kasie+'</b><br />'+data[index].tgl_approval_kasie+'</p>';
      				}
      				else{
      					status_kasie = '-';
      				}
      				

      				if(data[index].status2_gm != null && (data[index].status2_gm == 4 || data[index].status2_gm == 1 || data[index].status2_gm == 3)){
      					status_gm = '<p class="p_approval_'+data[index].status2_gm+'"><b>'+data[index].status_gm+'</b><br />'+data[index].tgl_approval_gm+'</p>';
      				}
      				else{
      					status_gm = '-';
      				}

      				if(data[index].status2_mill_mgr != null && (data[index].status2_mill_mgr == 1 || data[index].status2_mill_mgr == 3)){
      					status_mill_mgr = '<p class="p_approval_'+data[index].status2_mill_mgr+'"><b>'+data[index].status_mill_mgr+'</b><br />'+data[index].tgl_approval_mill_mgr+'</p>';
      				}
      				else{
      					status_mill_mgr = '-';
      				}

      				if(data[index].status2_dept_head != null && (data[index].status2_dept_head == 1 || data[index].status2_dept_head == 3)){
      					status_dept_head = '<p class="p_approval_'+data[index].status2_dept_head+'"><b>'+data[index].status_dept_head+'</b><br />'+data[index].tgl_approval_mill_mgr+'</p>';
      				}
      				else{
      					status_dept_head = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_dir_ops != null && data[index].status2_dir_ops == 4){
      					status_dir_ops = '<p class="p_approval_'+data[index].status2_dir_ops+'"><b>'+data[index].status_dir_ops+'</b><br />'+data[index].tgl_approval_dir_ops+'</p>';
      				}
      				else{
      					status_dir_ops = '-';
      				}

      				/*** Jika status2 exist(tidak null) dan status2 == DIKETAHUI(4) ***/
      				if(data[index].status2_dept_head_purchasing != null && data[index].status2_dept_head_purchasing == 4){
      					status_dept_head_purchasing = '<p class="p_approval_'+data[index].status2_dept_head_purchasing+'"><b>'+data[index].status_dept_head_purchasing+'</b><br />'+data[index].tgl_approval_dept_head_purchasing+'</p>';
      				}
      				else{
      					status_dept_head_purchasing = '-';
      				}

      				if(data[index].status2_dir_purchasing != null && (data[index].status2_dir_purchasing == 1 || data[index].status2_dir_purchasing == 3)){
      					status_dir_purchasing = '<p class="p_approval_'+data[index].status2_dir_purchasing+'"><b>'+data[index].status_dir_purchasing+'</b><br />'+data[index].tgl_approval_dir_purchasing+'</p></td>';
      				}
      				else{
      					status_dir_purchasing = '-';
      				}


	        		var tr_buka = '<tr id="tr_'+index+'">'
	          		// var td_1 = '<td><input type="checkbox" class="chk_item" disabled /></td>';
	          		var td_2 = '<td>'+data[index].kodebartxt+'</td>';
	          		var td_3 = '<td>'+data[index].nabar+'</td>';
	          		var td_4 = '<td>'+data[index].sat+'</td>';
	          		var td_5 = '<td>'+data[index].qty+'</td>';
	          		var td_20 = '<td>'+data[index].STOK+'</td>';
	          		var td_12 = '<td>'+status_ktu+'</td>'//Status KTU
      						+'<td>'+status_kasie+'</td>'//Status Kasie
      						+'<td>'+status_gm+'</td>'//Status GM
      						+'<td>'+status_mill_mgr+'</td>'//Status Mill Manager
      						+'<td>'+status_dept_head+'</td>'//Status Dept. Head
      						+'<td>'+status_dir_ops+'</td>'//Status Dir. Ops
      						+'<td>'+status_dept_head_purchasing+'</td>'//Status Dept. Head Purchasing
      						+'<td>'+status_dir_purchasing+'</td>';//Status Dir. Purchasing
      				var tr_tutup = '</tr>';
      				$('#tbody_detail_approval').append(tr_buka+td_2+td_3+td_4+td_5+td_20+td_12+tr_tutup);
	        	})
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
   }

</script>