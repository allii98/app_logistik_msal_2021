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
			<h2>BKB <small>Bukti Keluar Barang Mutasi</small></h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('bkb/input'); ?>">Input BKB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data BKB</h2>
					<!-- <div class="form-group nav navbar-right">
						<button class="btn btn-primary btn-sm fa fa-filter" onclick="showHideFilter()"> Filter</button>
					</div> -->	
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListBKB" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>No. BKB</th>
								<th>No. Ref BKB</th>
								<th>No. BPB</th>
								<th>No. Mutasi</th>
								<th>Bagian</th>
								<th>Item Barang</th>
								<th>Keperluan</th>
								<th>Tgl Input</th>
								<th>Petugas</th>
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
								<!-- <th>KTU</th> -->
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
		var filter = "Semua";
		listBKB(filter);

	});



	function listBKB(filter){
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
            "url"         : "<?php echo site_url('bkb/list_bkb');?>",
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

	function showHideFilter(){
		if($('#div_filter').is(":hidden")){
			$('#div_filter').show();
		}
		else{
			$('#div_filter').hide();
		}
	}

	function konfirmasiBatalBKB(id,nobkb){
		$('#hidden_id_stok_masuk').val(id);
		$('#hidden_no_bkb').val(nobkb);
		$('#b_no_bkb').text(nobkb);
		$('#modalBatalBKB').modal('show');
	}

	function batalBKB(){
		var id_stok_masuk = $('#hidden_id_stok_masuk').val();
		var no_bkb = $('#hidden_no_bkb').val();
		var txt_alasan_batal_bkb = $('#txt_alasan_batal_bkb').val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bkb/batal'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {

	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id_stok_masuk,'no_bkb': no_bkb,'alasan': txt_alasan_batal_bkb},
	        success: function(data){
	        	listBKB('','');
	        	$('#modalBatalBKB').modal('hide');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function modalListApproval(nobkb, norefbkb){
		console.log(nobkb);
		console.log(norefbkb);
		$('#modalListApproval').modal('show');
		listBKBItem(nobkb,norefbkb);
	}

	function listBKBItem(nobkb, norefbkb){
		$('#tableListBKBItem').DataTable().destroy();
		var dt = $('#tableListBKBItem').DataTable({
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
            "url"         : "<?php echo site_url('bkb/list_bkbitem');?>",
            "type"        : "POST",
            "data"        : {'nobkb':nobkb, 'norefbkb':norefbkb},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});
	}

	function konfirmasi(nobkb, norefbkb, kodebar, jabatan, approval){
		console.log(nobkb, norefbkb, kodebar, jabatan, approval)
		// $('#modalKonfirmasi').modal('show');
		// $('#hidden_nobkb').val(nobkb);
		// $('#hidden_norefbkb').val(norefbkb);
		// $('#hidden_kodebar').val(kodebar);
		// $('#hidden_jabatan').val(jabatan);
		// $('#hidden_approval').val(approval);
		var conf = confirm("Apakah Anda Yakin ?");
		if(conf == true){
			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('bkb/konfirmasi_approval'); ?>",
		        dataType  : "JSON",
		        beforeSend: function() {

		        },
		        cache   : false,
		        // contentType : false,
		        // processData : false,
		        
		        data    : {'nobkb':nobkb, 'norefbkb':norefbkb, 'kodebar':kodebar, 'jabatan':jabatan, 'approval':approval},
		        success: function(data){
		        	listBKBItem(nobkb,norefbkb);
		        },
		        error   : function(request){
		          alert(request.responseText);
		          // alert('error');
		        }
		    });
		}
	}

	function revQty(nobkb, norefbkb, kodebar, jabatan, approval){
		console.log(nobkb, norefbkb, kodebar, jabatan, approval)
		var qty_disetujui = parseFloat(prompt("Masukan jumlah Qty yang disetujui :", ""));
		if(isNaN(qty_disetujui)){
			alert('Qty Harus berupa Angka');
		}
		else{
			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('bkb/rev_qty'); ?>",
		        dataType  : "JSON",
		        beforeSend: function() {

		        },
		        cache   : false,
		        // contentType : false,
		        // processData : false,
		        
		        data    : {'nobkb':nobkb, 'norefbkb':norefbkb, 'kodebar':kodebar, 'jabatan':jabatan, 'approval':approval, 'qty_disetujui':qty_disetujui},
		        success: function(data){
		        	listBKBItem(nobkb,norefbkb);
		        },
		        error   : function(request){
		          alert(request.responseText);
		          // alert('error');
		        }
		    });
		}
	}
</script>