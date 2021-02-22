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
			<h2>Retur LPB <small>Laporan Penerimaan Barang</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('retur_lpb/input'); ?>">Input Retur LPB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Retur LPB</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListReturLPB" class="table table-striped table-bordered" width="100%">
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
					<button type="button" class="btn btn-warning" id="btn_batalkanLPB" onclick="batalLPB()" >Batalkan LPB</button>
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
		var filter = "Semua";
		listLPB(filter);

	});

	function listLPB(filter){
		$('#tableListReturLPB').DataTable().destroy();
		var dt = $('#tableListReturLPB').DataTable({
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
            "url"         : "<?php echo site_url('retur_lpb/list_lpb');?>",
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
 
	    $('#tableListReturLPB tbody').on( 'click', 'tr td.details-control', function () {
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

	function konfirmasiBatalLPB(id,nolpb){
		$('#hidden_id_stok_masuk').val(id);
		$('#hidden_no_lpb').val(nolpb);
		$('#b_no_lpb').text(nolpb);
		$('#modalBatalLPB').modal('show');
	}

	function batalLPB(){
		var txt_alasan_batal_lpb = $('#txt_alasan_batal_lpb').val();
		if($.trim(txt_alasan_batal_lpb) == ''){
			$('#txt_alasan_batal_lpb').css('background-color','#ff3232');
			$('#txt_alasan_batal_lpb').attr('placeholder','Masukan alasan batal !');
		}
		else{
			var id_stok_masuk = $('#hidden_id_stok_masuk').val();
			var no_lpb = $('#hidden_no_lpb').val();
			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('retur_lpb/batal'); ?>",
		        dataType  : "JSON",
		        beforeSend: function() {

		        },
		        cache   : false,
		        // contentType : false,
		        // processData : false,
		        
		        data    : {'id': id_stok_masuk,'no_lpb': no_lpb,'alasan': txt_alasan_batal_lpb},
		        success: function(data){
		        	listLPB('','');
		        	$('#modalBatalLPB').modal('hide');
		        	new PNotify({
		                title: 'Sukses',
	                    text: 'LPB Berhasil dibatalkan',
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
	}
</script>