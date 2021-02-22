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
			<h2>Retur BKB <small>Retur Bukti Keluar Barang</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('retur_bkb/input'); ?>">Input Retur BKB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Retur BKB</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListReturBKB" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. Retur</th>
								<th>No. BA</th>
								<th>No. PT</th>
								<th>No. Tgl</th>
								<th>Keterangan</th>
								<th>Bagian</th>
								<th>Tgl Input</th>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalReturBKB">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal BKB</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_idretskb" name="hidden_idretskb">
					<input type="hidden" id="hidden_noretskb" name="hidden_noretskb">
					<p>Apakah Anda Yakin ingin membatalkan Retur BKB <b id="b_noretskb"></b> ?</p>
					<label class="control-label">Alasan : </label>
					<textarea class="form-control" id="txt_alasan_batal_retur_bkb" name="txt_alasan_batal_retur_bkb"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanBKB" onclick="batalReturBKB()" >Batalkan Retur BKB</button>
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
		listReturBKB(filter);

	});

	function listReturBKB(filter){
		$('#tableListReturBKB').DataTable().destroy();
		var dt = $('#tableListReturBKB').DataTable({
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
            "url"         : "<?php echo site_url('retur_bkb/list_bkb');?>",
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
		  "columns": [
				{ "width": "5%" },
			    { "width": "5%" },
				{ "width": "5%" },
			    { "width": "10%" },
			    { "width": "30%" },
			    { "width": "5%" },
			    { "width": null },
			    { "width": "5%" },
			    { "width": null },
			],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});

    	var detailRows = [];
 
	    $('#tableListReturBKB tbody').on( 'click', 'tr td.details-control', function () {
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

	function konfirmasiBatalReturBKB(id,noretskb){
		$('#hidden_idretskb').val(id);
		$('#hidden_noretskb').val(noretskb);
		$('#b_noretskb').text(noretskb);
		$('#modalBatalReturBKB').modal('show');
	}

	function batalReturBKB(){
		var txt_alasan_batal_retur_bkb = $('#txt_alasan_batal_retur_bkb').val();
		if($.trim(txt_alasan_batal_retur_bkb) == ''){
			$('#txt_alasan_batal_retur_bkb').css('background-color','#ff3232');
			$('#txt_alasan_batal_retur_bkb').attr('placeholder','Masukan alasan batal !');
		}
		else{
			var retskb = $('#hidden_idretskb').val();
			var noretskb = $('#hidden_noretskb').val();
			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('retur_bkb/batal'); ?>",
		        dataType  : "JSON",
		        beforeSend: function() {

		        },
		        cache   : false,
		        // contentType : false,
		        // processData : false,
		        
		        data    : {'id': retskb,'noretskb': noretskb,'alasan': txt_alasan_batal_retur_bkb},
		        success: function(data){
		        	listReturBKB('','');
		        	$('#modalBatalReturBKB').modal('hide');
		        	new PNotify({
		                title: 'Sukses',
	                    text: 'Retur BKB Berhasil dibatalkan',
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