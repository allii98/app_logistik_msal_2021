<!-- <link href="<?php // echo base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> -->

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
</style>
<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>Laporan Barang</h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('lap_barang/cetak'); ?>"><span class="fa fa-print"></span> Print</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Laporan Barang</h2>
					<!-- <div class="form-group nav navbar-right">
						<button class="btn btn-primary btn-sm fa fa-filter" onclick="showHideFilter()"> Filter</button>
					</div> -->	
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListLapBarang" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>Kode Barang</th>
								<th>Part Number</th>
								<th>Nama Barang/Material</th>
								<th>Satuan</th>
							</tr>
						</thead>

						<tbody id="tbody_list_lap_barang">
						</tbody>
					</table>
					<br />
					<br />
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
		listLapBarang(filter);

	});

	function listLapBarang(filter){
		$('#tableListLapBarang').DataTable().destroy();
		var dt = $('#tableListLapBarang').DataTable({
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
            "url"         : "<?php echo site_url('lap_barang/list_lapbarang');?>",
            "type"        : "POST",
            "data"        : {'filter':filter},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
          // "columns": [
			// { 
			// 	"class" 		: "details-control",
			// 	"orderable"		: false,
			// 	"data"			: null,
			// 	"defaultContent": ""
			// },
			// { "data": "0" },
   //          { "data": "1" },
   //          { "data": "2" },
   //          { "data": "3" },
   //          { "data": "4" },
   //          { "data": "5" },
   //          { "data": "6" },
		  // ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});

    	var detailRows = [];
 
	    $('#tableListLapBarang tbody').on( 'click', 'tr td.details-control', function () {
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
</script>