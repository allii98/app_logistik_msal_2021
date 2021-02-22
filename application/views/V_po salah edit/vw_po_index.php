<!-- <link href="<?php // echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> -->

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
			<h2>PO <small>Permohonan Order</small></h2>
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
			<a class="btn btn-round btn-info" href="<?php echo site_url('po/input'); ?>">Input PO</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data PO</h2>
					<!-- <div class="form-group nav navbar-right">
						<button class="btn btn-primary btn-sm fa fa-filter" onclick="showHideFilter()"> Filter</button>
					</div> -->	
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!-- <div data-parsley-validate class="form-horizontal form-label-left" id="div_filter">
						<div class="form-group">
							<div class="col-md-3 col-sm-6 col-xs-12 col-md-offset-2">
								<div class="radio">
									<label>
										<input type="radio" value="Semua" id="rbt_filter_semua" name="rbt_filter" checked> Semua SPP
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="Belum Proses" id="rbt_filter_belum_proses" name="rbt_filter" > SPP belum diproses
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="Sudah Proses" id="rbt_filter_sudah_proses" name="rbt_filter" > SPP sudah diproses
									</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="radio">
									<label>
										<input type="radio" value="Sudah PO" id="rbt_filter_PO_sudah" name="rbt_filter" > SPP sudah PO
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="Belum PO" id="rbt_filter_PO_belum" name="rbt_filter" > SPP belum PO
									</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="radio">
									<label>
										<input type="radio" value="SPPI" id="rbt_filter_SPI" name="rbt_filter" > SPPI
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="SPPA" id="rbt_filter_SPPA" name="rbt_filter" > SPPA
									</label>
								</div>
							</div>
						</div>
					</div> -->
					<table id="tableListPO" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. Ref</th>
								<th>No. PO</th>
								<th>Tgl. PO</th>
								<th>Supplier</th>
								<th>Item Barang</th>
								<th>Ket</th>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalPO">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal PO</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_po" name="hidden_id_po">
					<p>Apakah Anda Yakin ingin membatalkan PO <b id="b_no_po"></b> ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanSPP" onclick="batalPO()" >Batalkan PO</button>
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
		// $('#div_filter').hide();
		var filter = "Semua";
		listPO(filter);

	});

	function listPO(filter){
		$('#tableListPO').DataTable().destroy();
		var dt = $('#tableListPO').DataTable({
		  "paging"	        : true,
      	  "scrollY"         : true,
          "scrollX"         : true,
          "searching"       : true,
          "select"          : false,
          "bLengthChange"   : true,
          "scrollCollapse"  : true,
          "bPaginate"       : true,
          "bInfo"           : true,
          "bSort"           : false,
          "processing"      : true,
          "serverSide"      : true,
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('po/list_po');?>",
            "type"        : "POST",
            "data"        : {'filter':filter},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
   //        "columns": [
			// // { 
			// // 	"class" 		: "details-control",
			// // 	"orderable"		: false,
			// // 	"data"			: null,
			// // 	"defaultContent": ""
			// // },
			// { "data": "0" },
   //          { "data": "1" },
   //          { "data": "2" },
   //          { "data": "3" },
   //          // { "data": "4" },
   //          { "data": "4" },
   //          { "data": "5" },
   //          // { "data": "7" },
   //          { "data": "6" },
		 //  ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});

    	var detailRows = [];
 
	    $('#tableListPO tbody').on( 'click', 'tr td.details-control', function () {
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

	function showHideFilter(){
		if($('#div_filter').is(":hidden")){
			$('#div_filter').show();
		}
		else{
			$('#div_filter').hide();
		}
	}

	function konfirmasiBatalpo(id,nopo){
		$('#hidden_id_po').val(id);
		$('#b_no_po').text(nopo);
		$('#modalBatalPO').modal('show');
	}

	function batalPO(){
		var id_po = $('#hidden_id_po').val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/batal'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {

	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id_po},
	        success: function(data){
	        	listPO('','');
	        	$('#modalBatalPO').modal('hide');
	        	new PNotify({
	                title: 'Sukses',
                    text: 'PO Berhasil Dibatalkan',
                    type: 'success',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}
</script>