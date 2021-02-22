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
			<h2>BKB <small>Bukti Keluar Barang</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('bkb/input'); ?>">Input BKB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Request Rev. Qty BKB</h2>
					<!-- <div class="form-group nav navbar-right">
						<button class="btn btn-primary btn-sm fa fa-filter" onclick="showHideFilter()"> Filter</button>
					</div> -->	
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListBKB" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>No. BPB</th>
								<th>No. Ref BPB</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Qty</th>
								<th>Request Oleh</th>
								<!-- <th>KTU</th> -->
								<!-- <th>Kasie Gudang</th> -->
								<!-- <th>Kasie Pembukuan</th> -->
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBatalBKB">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Batal BKB</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_stok_masuk" name="hidden_id_stok_masuk">
					<input type="hidden" id="hidden_no_bkb" name="hidden_no_bkb">
					<p>Apakah Anda Yakin ingin membatalkan BKB <b id="b_no_bkb"></b> ?</p>
					<label class="control-label">Alasan : </label>
					<textarea class="form-control" id="txt_alasan_batal_bkb" name="txt_alasan_batal_bkb"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" id="btn_batalkanBKB" onclick="batalBKB()" >Batalkan BKB</button>
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
					<h4 class="modal-title" id="myModalLabel">List Item BKB</h4>
				</div>
				<div class="modal-body">
					<!-- <input type="hidden" id="hidden_id_setuju" name="hidden_id_setuju"> -->
					<!-- <input type="hidden" id="hidden_noppotxt_setuju" name="hidden_noppotxt_setuju"> -->
					<table id="tableListBKBItem" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>No.</th>
								<th>No. BKB</th>
								<th>No. REF BKB</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Qty Diminta</th>
								<th>Qty Disetujui</th>
								<th>Satuan</th>
								<th>KTU</th>
								<th>Kasie Gudang</th>
								<th>Kasie Pembukuan</th>
							</tr>
						</thead>

						<tbody id="tbody_list_po">
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<!-- <?php 
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
					?> -->
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
		// var filter = "Semua";
		// listBKB(filter);
		listBKB();

	});

	function listBKB(){
		$('#tableListBKB').DataTable().destroy();
		var dt = $('#tableListBKB').DataTable({
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
            "url"         : "<?php echo site_url('bkb/list_appr_rev_qty_bpb');?>",
            "type"        : "POST",
            "data"        : {},
            "error"       : function(request){
              alert(request.responseText);
              console.log(request.responseText);
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
 
	    $('#tableListBKB tbody').on( 'click', 'tr td.details-control', function () {
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

	function ApprReqRevQty(no_bpb, norefbpb, kodebar){
		var user_sesi = '<?php echo $this->session->userdata('user'); ?>'
		if(user_sesi != 'KTU'){
			swal('Maaf hanya KTU yang memiliki akses ini !');
		}
		else{
			var conf = confirm('Approve agar user bisa revisi qty ?');
			if(conf){
				$.ajax({
			        type    : "POST",
			        url     : "<?php echo site_url('bkb/approve_req_rev_qty'); ?>",
			        dataType  : "JSON",
			        beforeSend: function(){
			        },
			        cache   : false,
			        // contentType : false,
			        // processData : false,
			        
			        data    : {'no_bpb' : no_bpb, 'norefbpb': norefbpb, 'kodebar': kodebar},
			        success: function(data){
			        	listBKB();
			        	new PNotify({
			                title: 'Sukses',
		                    text: 'Data Berhasil diapprove',
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
	}
</script>