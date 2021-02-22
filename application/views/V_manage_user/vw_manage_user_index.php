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
			<h2>Manage User </h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info btn-sm" onclick="modalInputUser()" data-toogle="tooltip" data-placement="top" title="" data-original-title="Input User">Input User</a>
			<div class="x_panel">
				<div class="x_title">
					<h2>Data User</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="tableListUser" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Status Lokasi</th>
								<!-- <th>Kode Level</th> -->
								<th>Level</th>
							</tr>
						</thead>
						<tbody id="tbody_list_user">
						</tbody>
					</table>
					<br />
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalInputUser">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail User</h4>
				</div>
				<div class="modal-body">
					<form action="javascript:;" class="form-horizontal" id="form_input_manage_user" name="form_input_manage_user" method="POST">
						<input type="hidden" id="hidden_id" name="hidden_id">
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Nama Pengguna</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_nama" name="txt_nama" placeholder="Nama Pengguna" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Username</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="txt_username" name="txt_username" placeholder="Username" required="" onkeyup="checkUsername(this.value)">
									<label id="lbl_hasil_username"></label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Password</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="txt_password" name="txt_password" placeholder="*******************" required="">
									<label id="lbl_ket_password"></label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Lokasi</label>
								<div class="col-md-6">
									<select class="form-control" id="cmb_lokasi" name="cmb_lokasi" required="">
										<option value="">Pilih</option>
										<option value="HO">HO</option>
										<option value="RO">RO</option>
										<option value="SITE">SITE</option>
										<option value="PKS">PKS</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label col-md-4">Level</label>
								<div class="col-md-6">
									<select class="form-control" id="cmb_level" name="cmb_level" required="">
										<option value="">Pilih</option>
									</select>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalHapusUser">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_id_user_hapus" name="hidden_id_user_hapus">
					<input type="hidden" id="hidden_username_hapus" name="hidden_username_hapus">
					<p>Apakah Anda yakin ingin menghapus user ini ?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn_close" onclick="hapus_user()">Hapus</button>
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
		listUser();
		level();
	});

	function level(){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('manage_user/get_level'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : '',
	        success: function(data){
	          	$.each(data, function(index) {
	        		var opsi_cmb_level = '<option value="'+data[index].kode_level+'">'+data[index].level+'</option>';
	          		$('#cmb_level').append(opsi_cmb_level);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function listUser(){
		$('#tableListUser').DataTable().destroy();
		var dt = $('#tableListUser').DataTable({
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
            "url"         : "<?php echo site_url('manage_user/list_user');?>",
            "type"        : "POST",
            "data"        : {},
          },
          "columns"		: [
          	{"width":"5%"},
          	{"width":"5%"},
          	{"width":null},
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

	function modalInputUser(){
		$('#lbl_hasil_username').html('');
		$('#lbl_hasil_username').hide();

		$('#lbl_ket_password').html('');
		$('#lbl_ket_password').hide();
		$('#modalInputUser').modal('show');
		$('#form_input_manage_user')[0].reset();
		$('#btn_simpan').show();
		$('#btn_ubah').hide();

		$('#cmb_lokasi').removeAttr('disabled');
		$('#txt_nama').removeAttr('disabled');
		$('#txt_username').removeAttr('disabled');

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
          	  "url"         : "<?php echo site_url('manage_user/list_coa');?>",
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
        var row = $('#hidden_no_row').val();

        $('#txt_username').val(nama_account);

        $('#hidden_no_acc_'+row).val(no_coa);
        $('#hidden_nama_acc_'+row).val(nama_account);

        $('#modalListCOA').modal('hide');
    })

	$("#form_input_manage_user").validate({
  		ignore: [],
    	submitHandler: function(form) {
            simpan_user();
        }
  	});

	function simpan_user(){
		var form_data = new FormData();

		form_data.append('hidden_id',$('#hidden_id').val());
		form_data.append('txt_nama',$('#txt_nama').val());
		form_data.append('txt_username',$.trim($('#txt_username').val()));
		form_data.append('txt_password',$('#txt_password').val());
		form_data.append('cmb_lokasi',$('#cmb_lokasi').val());
		form_data.append('kode_level',$('#cmb_level').val());
		form_data.append('level',$('#cmb_level :selected').text());
		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('manage_user/simpan_user'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	        	if (data == "username_sudah_ada") {
	        		new PNotify({
		                title: 'Gagal',
	                    text: 'Username sudah ada !',
	                    type: 'error',
	                    // hide: false,
	                    styling: 'bootstrap3'
		            });
	        	}
	        	else {        		
		        	$('#modalInputUser').modal('hide');
		        	listUser();
		        	new PNotify({
		                title: 'Sukses',
	                    text: 'Data Berhasil Disimpan',
	                    type: 'success',
	                    // hide: false,
	                    styling: 'bootstrap3'
		            });
	        	}
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

	function detail_user(no, username){
		$('#modalInputUser').modal('show');
		$('#btn_simpan').hide();
		$('#btn_ubah').show();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('manage_user/detail_user'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        // cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'no':no, 'username':username},
	        success: function(data){
	        	console.log(data);
	        	$('#hidden_id').val(data.no);
	        	$('#txt_nama').val(data.nama);
	        	$('#txt_username').val(data.username);
	        	$('#cmb_lokasi').val(data.status_lokasi);
	        	$('#cmb_level').val(data.kode_level);

	        	$('#lbl_hasil_username').html('');
	        	$('#lbl_hasil_username').hide();
	        	$('#txt_username').attr('disabled','');

	        	$('#lbl_ket_password').show();
	        	$('#lbl_ket_password').html('Isi password jika ingin mengubah');

	        	// $('#').val(data.level);
	        	// $('#').val(data.level_dept_head);
	        	// $('#').val(data.level_dept_head_purchasing);
	        	// $('#').val(data.level_dir_ops);
	        	// $('#').val(data.level_dir_purchasing);
	        	// $('#').val(data.level_gm);
	        	// $('#').val(data.level_kasie);
	        	// $('#').val(data.level_ktu);
	        	// $('#').val(data.level_mill_mgr);
	        	// $('#').val(data.password);
	        	
	        	// $('#cmb_lokasi').attr('disabled','');
	        	// $('#txt_nama').attr('disabled','');

	        	// $('#hidden_id').val(data.id);
	        	// $('#txt_nama').val(data.nopart);
	        	// $('#txt_username').val(data.nabar);
	        	// $('#cmb_level').val(data.level);
	        },
	        error   : function(request){
	          	alert(request.responseText);
	          	new PNotify({
	                title: 'Error',
                    text: 'Gagal mengambil data user',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        }
	    });
	}

	function konfirmasi_hapus(id, username){
		$('#modalHapusUser').modal('show');
		$('#hidden_id_user_hapus').val(id);
		$('#hidden_username_hapus').val(username);
	}

	function hapus_user(){
		var id = $('#hidden_id_user_hapus').val();
		var username = $('#hidden_username_hapus').val();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('manage_user/hapus_user'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        // cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id':id, 'username':username},
	        success: function(data){
	            listUser();
	        	$('#modalHapusUser').modal('hide');
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
                    text: 'Gagal Hapus Data User',
                    type: 'error',
                    // hide: false,
                    styling: 'bootstrap3'
	            });
	        }
	    });
	}

	function checkUsername(usern){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('manage_user/check_username'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'username' : $.trim(usern)},
	        success: function(data){
	        	if(data > 0){
	        		$('#lbl_hasil_username').show();
	        		$('#lbl_hasil_username').html('Username sudah ada !');
	        		$('#lbl_hasil_username').css('color','#ff0034');
	        		$('#btn_simpan').attr('disabled','disabled');
	        	}
	        	else{
	        		$('#lbl_hasil_username').html('');
	        		$('#lbl_hasil_username').hide();
	        		$('#lbl_hasil_username').css('color','#ffffff');
	        		$('#btn_simpan').removeAttr('disabled');
	        	}
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

</script>