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
			<h2>Kode Barang </h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info btn-sm" onclick="modalInputBarang()" data-toogle="tooltip" data-placement="top" title="" data-original-title="Input Kode Barang">Input Kode Barang</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Barang</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListBarang" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<!-- <th></th> -->
								<th>#</th>
								<th>No.</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Group</th>
							</tr>
						</thead>
						<tbody id="tbody_list_barang">
						</tbody>
					</table>
					<br />
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalInputBarang">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail Barang</h4>
				</div>
				<div class="modal-body">
					<form action="javascript:;" class="form-horizontal" id="form_input_master_barang" name="form_input_master_barang" method="POST">
						<input type="hidden" id="hidden_id" name="hidden_id">
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Nomor Part</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_nmr_part" name="txt_nmr_part" placeholder="Nomor Part" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Kode Barang</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_kd_barang" name="txt_kd_barang" placeholder="Kode Barang" required="" onfocus="modalListCOA()">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Nama Barang</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_nm_barang" name="txt_nm_barang" placeholder="Nama Barang" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Group Barang</label>
								<div class="col-md-6">
									<select class="form-control" id="cmb_grup_barang" name="cmb_grup_barang" required="">
										<option value="">Pilih</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Satuan</label>
								<div class="col-md-6">
									<select class="form-control" id="cmb_satuan" name="cmb_satuan" required="">
										<option value="">--Pilih--</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Spesifikasi</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_spesifikasi" name="txt_spesifikasi" placeholder="Spesifikasi" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Keterangan</label>
								<div class="col-md-6">
									<textarea class="resizable_textarea form-control" id="txt_keterangan" name="txt_keterangan" placeholder="Keterangan" required=""></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-sm btn-success col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
								<button class="btn btn-sm btn-warning col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Ubah" id="btn_ubah" name="btn_ubah">Ubah</button>
							</div>
						</div>
					</form>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_simpan">Simpan</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div> -->
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListCOA">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Akun COA</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-striped" id="tableListCOA">
							<thead>
								<tr>
									<th>No</th>
									<th>No. COA</th>
									<th>Nama Account</th>
									<th>Type</th>
									<th>Grup</th>
								</tr>
							</thead>
							<tbody id="tbody_list_coa"></tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalHapusBarang">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_barang_hapus" name="hidden_id_barang_hapus">
					<input type="hidden" id="hidden_kode_barang_hapus" name="hidden_kode_barang_hapus">
					<p>Apakah Anda yakin ingin menghapus barang ini ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn_close" onclick="hapus_barang()">Hapus</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-validate/jquery.validate.min.js"></script>
<script>
	$(document).ready(function(){
		listBarang();
		satuan();
	});

	function group_barang(no_coa){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('master_barang/get_group_barang'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'no_coa':no_coa},
	        success: function(data){
	        	var opsi_grup_barang = '<option value="'+data.nama+'">'+data.nama+'</option>';
	          	$('#cmb_grup_barang').empty();
	          	$('#cmb_grup_barang').append(opsi_grup_barang);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function satuan(){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('master_barang/get_satuan'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : '',
	        success: function(data){
	          	$('#cmb_satuan').empty();
	          	var no_opsi = '<option value="-">-</option>';
				$('#cmb_satuan').append(no_opsi);

	        	$.each(data, function(index) {
	        		var opsi_cmb_satuan = '<option value="'+data[index].satuan+'">'+data[index].satuan+'</option>';
	          		$('#cmb_satuan').append(opsi_cmb_satuan);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function listBarang(){
		$('#tableListBarang').DataTable().destroy();
		var dt = $('#tableListBarang').DataTable({
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
            "url"         : "<?php echo site_url('master_barang/list_barang');?>",
            "type"        : "POST",
            "data"        : {},
          },
          "columns"		: [
          	{"width":"5%"},
          	{"width":"5%"},
          	{"width":null},
          	{"width":null},
          	{"width":null},
          ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
            },
          ],
    	});
	}

	function modalInputBarang(){
		$('#modalInputBarang').modal('show');
		$('#form_input_master_barang')[0].reset();
		$('#btn_simpan').show();
		$('#btn_ubah').hide();

		$('#cmb_grup_barang').removeAttr('disabled');
		$('#txt_nmr_part').removeAttr('disabled');
		$('#txt_kd_barang').removeAttr('disabled');
		$('#txt_nm_barang').removeAttr('disabled');

		var opsi_grup_barang = '<option value="">Pilih</option>';
		$('#cmb_grup_barang').empty();
		$('#cmb_grup_barang').append(opsi_grup_barang);
	}

	function modalListCOA(){
		$('#modalListCOA').modal('show');
		tableListCOA();
	}
	
	function tableListCOA(){
		$('#tableListCOA').DataTable().destroy();
    	$('#tableListCOA').DataTable({
      		"paging"          : true,
			"scrollY"         : false,
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
          	},
          	"ajax"            : {
          	  "url"         : "<?php echo site_url('master_barang/list_coa');?>",
          	  "type"        : "POST",
          	  "data"        : {},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
			"columns": [
				{ "width": "5%" },
				{ "width": "20%" },
			    { "width": "30%" },
			    { "width": "10%" },
			    { "width": "10%" },
			],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableListCOA tr').each(function() {
	            	var Cell = $(this).find('td');

		        	Cell.parent().on('mouseover', Cell, function() {
		          		Cell.parent().css('background-color', '#26b99a');
		          		Cell.parent().css('color', '#ffffff');

			        	Cell.parent().bind("mouseout", function() {
		    	        	Cell.parent().css('background-color', '');
		        	    	Cell.parent().css('color', '#73879c');
		          		});
		        	});
	      		});
          	},
      	});
	}

	$('#tableListCOA tbody').on('click', 'tr', function () {
		var dataClick = $('#tableListCOA').DataTable().row( this ).data();
        var no_coa = dataClick[1].trim();
        var nama_account = dataClick[2].trim();
        // var grup = dataClick[2];
        var row = $('#hidden_no_row').val();

        // $('#lbl_no_acc_'+row).html(no_coa);
        // $('#lbl_nama_acc_'+row).html(nama_account);
        $('#txt_kd_barang').val(no_coa);
        $('#txt_nm_barang').val(nama_account);

        $('#hidden_no_acc_'+row).val(no_coa);
        $('#hidden_nama_acc_'+row).val(nama_account);

        $('#modalListCOA').modal('hide');
        group_barang(no_coa);
	})

	$("#form_input_master_barang").validate({
  		ignore: [],
    	submitHandler: function(form) {
            simpan_barang();
        }
  	});

	function simpan_barang(){
		var form_data = new FormData();

		form_data.append('hidden_id',$('#hidden_id').val());
		form_data.append('txt_nmr_part',$('#txt_nmr_part').val());
		form_data.append('txt_kd_barang',$('#txt_kd_barang').val());
		form_data.append('txt_nm_barang',$('#txt_nm_barang').val());
		form_data.append('cmb_grup_barang',$('#cmb_grup_barang').val());
		form_data.append('cmb_satuan',$('#cmb_satuan').val());
		form_data.append('txt_spesifikasi',$('#txt_spesifikasi').val());
		form_data.append('txt_keterangan',$('#txt_keterangan').val());

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('master_barang/simpan_barang'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	        	$('#modalInputBarang').modal('hide');
	        	listBarang();
	        	new PNotify({
	                title: 'Sukses',
                    text: 'Data Berhasil Disimpan',
                    type: 'success',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        },
	        error   : function(request){
	          	alert(request.responseText);
	          	new PNotify({
	                title: 'Gagal',
                    text: 'Data Gagal Tersimpan',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        }
	    });
	}

	function detail_barang(kodebar, id){
		$('#modalInputBarang').modal('show');
		$('#btn_simpan').hide();
		$('#btn_ubah').show();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('master_barang/detail_barang'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        // cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id, 'kodebar':kodebar},
	        success: function(data){
	        	group_barang(data.kodebartxt);
	        	
	        	$('#cmb_grup_barang').attr('disabled','');
	        	$('#txt_nmr_part').attr('disabled','');
	        	$('#txt_kd_barang').attr('disabled','');
	        	$('#txt_nm_barang').attr('disabled','');

	        	$('#hidden_id').val(data.id);
	        	$('#txt_nmr_part').val(data.nopart);
	        	$('#txt_kd_barang').val(data.kodebartxt);
	        	$('#txt_nm_barang').val(data.nabar);
	        	$('#cmb_satuan').val(data.satuan);
	        	$('#txt_spesifikasi').val(data.spek);
	        	$('#txt_keterangan').val(data.ket);
	        },
	        error   : function(request){
	          	alert(request.responseText);
	          	new PNotify({
	                title: 'Error',
                    text: 'Gagal mengambil data barang',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        }
	    });
	}

	function konfirmasi_hapus(kodebar, id){
		$('#modalHapusBarang').modal('show');
		$('#hidden_id_barang_hapus').val(id);
		$('#hidden_kode_barang_hapus').val(kodebar);
	}

	function hapus_barang(){
		var id = $('#hidden_id_barang_hapus').val();
		var kodebar = $('#hidden_kode_barang_hapus').val();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('master_barang/hapus_barang'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        // cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id, 'kodebar':kodebar},
	        success: function(data){
	        	$('#modalHapusBarang').modal('hide');
	        	new PNotify({
	                title: 'Sukses',
                    text: 'Data Berhasil Dihapus',
                    type: 'success',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        },
	        error   : function(request){
	          	alert(request.responseText);
	          	new PNotify({
	                title: 'Error',
                    text: 'Gagal Hapus Data Barang',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        }
	    });
	}

</script>