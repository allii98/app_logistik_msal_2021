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
			<a class="btn btn-round btn-info" id="btn_input" href="<?php echo site_url('bkb/input'); ?>">Input BKB</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data BKB</h2>
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
	$(document).ready(function(){
		$('#div_filter').hide();
		var filter = "Semua";
		$('#modalPilihEstate').modal('show');
		pilihDevisi();
		listBKB(filter);
		var thisUsr = '<?= $this->session->userdata('user');?>';
		if(thisUsr == 'Kasie HRD GA' || thisUsr == 'Kasie Pabrik' ||  
			thisUsr == 'User HO' || thisUsr == 'User RO' || 
			thisUsr == 'User SITE' || thisUsr == 'User PKS' || 
			thisUsr == 'Staff Purcashing' || thisUsr == 'User Gudang' ||
			thisUsr == 'Dept Head Purcashing' || thisUsr == 'Kasie Gudang' ||
			thisUsr == 'Asisten Afdeling'){
			$('#menu_tr').removeAttr('style');
		}else{
			$('#menu_tr').css('display','none');
			$('#btn_input').css('display','none');
		}
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
		listBKB(filter);
  	}
	$('#filter').change(function(){
		var filter = this.value;
		console.log(filter);
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
			console.log(aData);
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('bkb/list_bkb_approved');?>",
            "type"        : "POST",
            "data"        : {'filter':filter},
            "error"       : function(request){
              alert(request.responseText);
			  console.log(request.responseText);
            }
          },
          
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

	function modalListApproval(nobkb, norefbkb){
		// console.log(nobkb);
		// console.log(norefbkb);
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
			  console.log(aData);
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
		var rel = setInterval( function () {
			$('#tableListBKBItem').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100 );
	}

	
</script>