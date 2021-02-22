<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>SPP <small>Surat Permintaan Pembelian</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group" class="div_form_1">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Divisi <span class="required">*</span></label>
							<div class="col-md-5 col-sm-9 col-xs-12">
								<select class="form-control" id="cmb_divisi" name="cmb_divisi">
									<option value="" selected>-- Pilih --</option>
									<option value="PT MULIA SAWIT AGRO LESTARI (HO)">PT MULIA SAWIT AGRO LESTARI (HO)</option>
								</select>
							</div>
						</div>
						<div class="form-group" class="div_form_1">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Permohonan <span class="required">*</span></label>
							<div class="col-md-5 col-sm-9 col-xs-12">
								<select class="form-control" id="cmb_jenis_permohonan" name="cmb_jenis_permohonan">
									<option value="" selected>-- Pilih --</option>
									<option value="SPP">SPP - Surat Permohonan Pembelian</option>
								</select>
							</div>
							<label class="control-label col-md-1 col-sm-3 col-xs-12">Lokasi <span class="required">*</span></label>
							<div class="col-md-2 col-sm-9 col-xs-12">
								<select class="form-control" id="cmb_lokasi" name="cmb_lokasi">
									<option value="" selected>-- Pilih --</option>
									<option value="HO">HO</option>
									<option value="Site">Site</option>
								</select>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group div_form_2">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Referensi <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="txt_no_ref" name="txt_no_ref" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="No. Referensi">
							</div>
						</div>
						<div class="form-group div_form_2">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl. Referensi <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_tgl_ref" name="txt_tgl_ref" class="form-control col-md-7 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" value="<?= date('m/d/Y'); ?>">
							</div>
						</div>
						<div class="form-group div_form_2">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_tanggal" name="txt_tanggal" class="form-control col-md-7 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
							</div>
							<label class="control-label col-md-2 col-sm-3 col-xs-12">Tgl. Terima <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_tgl_terima" name="txt_tgl_terima" class="form-control col-md-7 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" placeholder="Tgl. Terima">
							</div>
						</div>
						<div class="form-group div_form_2">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Departemen Tujuan <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<input id="txt_cari_departemen" name="txt_cari_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Cari Departemen">
							</div>
							<div class="col-md-1 col-sm-6 col-xs-12">
								<input id="txt_kode_departemen" name="txt_kode_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Kode">
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<input id="txt_departemen" name="txt_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Nama Departemen">
							</div>
						</div>
						<div class="form-group div_form_2">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan </label>
							<div class="col-md-8 col-sm-9 col-xs-12">
								<textarea id="txt_keterangan" name="txt_keterangan" class="resizable_textarea form-control" placeholder="Keterangan, jika ada"></textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="x_content div_form_3">
					<table id="" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Kode Barang</th>
								<th>Qty</th>
								<th>Merk/Type/Jenis</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="tbody_rincian" name="tbody_rincian">
								<tr id="tr_1">
									<td width="3%">
										<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>
										<!-- <button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row()"></button> -->
									</td>
									<form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
									<td width="5%">
										<input type="text" id="txt_cari_kode_brg_1" name="txt_cari_kode_brg_1" placeholder="Cari Kode/Nama Barang"><br />
										<label>Kode : <?php ?></label>&nbsp;<label><?php ?></label><br />
										<label>Satuan : <?php ?></label>
									</td>
									<td>
										<input type="text" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="10" required /><br />
										<label>Stok : <?php ?></label>
									</td>
									<td>
										<input type="text" id="txt_merk_type_jenis_1" name="txt_merk_type_jenis_1" size="26" placeholder="Merk/Type/Jenis"/>
									</td>
									<td>
										<textarea id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" class="resizable_textarea form-control" size="26" placeholder="Keterangan, jika ada" onkeypress="saveRinciEnter(event,'1')"></textarea>
									</td>
									<td width="5%">
										<button class="btn btn-xs btn-success fa fa-save" type="button" data-toggle="tooltip" data-placement="top" title="Simpan" onclick="saveRinciClick('1')"></button>
										<button class="btn btn-xs btn-warning fa fa-edit" type="button" data-toggle="tooltip" data-placement="top" title="Ubah" onclick="ubahRinci('1')"></button>
										<button class="btn btn-xs btn-danger fa fa-trash" type="button" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusRinci('1')"></button>
									</td>
									</form>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- <script src="<?php // echo base_url(); ?>assets/gentelella/vendors/moment/min/moment.min.js"></script> -->
<!-- <script src="<?php // echo base_url(); ?>assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- <script src="<?php // echo base_url(); ?>assets/gentelella/build/js/custom.min.js"></script> -->
<script>
	$(document).ready(function(){
		$('#cmb_divisi').focus();
		$('.div_form_2').hide();
		$('.div_form_3').hide();

		$('#txt_tanggal,#txt_tgl_terima').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
			// singleDatePicker: true,
			// showDropdowns: true,
			// minYear: 1901,
			// maxYear: parseInt(moment().format('YYYY'),10)
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		})

		setInterval(function(){
		  check_form_2();
		}, 1000);

	});
	function getText(){
		var markupStr = $('#summernote').summernote('code');
		console.log(markupStr);
	}

	var n = 2;
	
	function tambah_row(){
		var tr_buka = '<tr id="tr_'+n+'">';
		var td_col_1 = '<td width="3%">'
							// +'<button class="btn btn-xs btn-info fa fa-plus" type="button" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>'
							+'<button class="btn btn-xs btn-danger fa fa-minus" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+n+')"></button>'
						+'</td>';
		var form_buka = '<form id="form_rinci_'+n+'" name="form_rinci_'+n+'" method="POST" action="javascript:;">';
		var td_col_2 = '<td width="5%">'
							+'<input type="text" id="txt_cari_kode_brg_'+n+'" name="txt_cari_kode_brg_'+n+'" placeholder="Cari Kode/Nama Barang"><br />'
							+'<label>Kode : </label>&nbsp;<label></label><br />'
							+'<label>Satuan : </label>'
						+'</td>';
		var td_col_3 = '<td>'
							+'<input type="text" id="txt_qty_'+n+'" name="txt_qty_'+n+'" placeholder="Qty" size="10" required><br />'
							+'<label>Stok : </label>'
						+'</td>';
		var td_col_4 = '<td>'
							+'<input type="text" id="txt_merk_type_jenis_'+n+'" name="txt_merk_type_jenis_'+n+'" size="26" placeholder="Merk/Type/Jenis">'
						+'</td>';
		var td_col_5 = '<td>'
							+'<textarea id="txt_keterangan_rinci_'+n+'" name="txt_keterangan_rinci_'+n+'" class="resizable_textarea form-control" size="26" placeholder="Keterangan, jika ada" onkeypress="saveRinciEnter(event,'+n+')"></textarea>'
						+'</td>';
		var td_col_6 = '<td width="5%">'
							+'<button class="btn btn-xs btn-success fa fa-save" type="button" data-toggle="tooltip" data-placement="top" title="Simpan" onclick="saveRinciClick('+n+')"></button>'
							+'<button class="btn btn-xs btn-warning fa fa-edit" type="button" data-toggle="tooltip" data-placement="top" title="Ubah" onclick="ubahRinci('+n+')"></button>'
							+'<button class="btn btn-xs btn-danger fa fa-trash" type="button" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusRinci('+n+')"></button>'
						+'</td>';
		var form_tutup = '</form>';
		var tr_tutup = '</tr>';

		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+form_tutup+tr_tutup);
		n = parseInt(n)+ parseInt(1);
	}

	function hapus_row(id){
		$('#tr_'+id).remove();
		// if(id != 2){
			// n = parseInt(n)- parseInt(1);
			// $('#tr_'+n).remove();
		// }
	}

	$('#cmb_divisi,#cmb_jenis_permohonan,#cmb_lokasi').change(function(){
		if($.trim($('#cmb_divisi').val()) != '' && $.trim($('#cmb_jenis_permohonan').val()) != '' && $.trim($('#cmb_lokasi').val()) != ''){
			$('.div_form_2').show();
		}
		else{
			$('.div_form_2').hide();	
		}
	})

	// $('#cmb_divisi,#cmb_jenis_permohonan,#cmb_lokasi').change(function(){
	function check_form_2(){
		if($.trim($('#txt_no_ref').val()) != '' && $.trim($('#txt_tgl_ref').val()) != '' && $.trim($('#txt_tanggal').val()) != '' && $.trim($('#txt_tgl_terima').val()) != '' && $.trim($('#txt_kode_departemen').val()) && $.trim($('#txt_departemen').val()) != '' && $('#div_form_2').show() ){
			$('.div_form_3').show();
		}
		else{
			$('.div_form_3').hide();
		}
	}
	// })

	function saveRinciEnter(e,no){
		if(e.keyCode == 13){
			saveRinci(no);
		}
	}

	function saveRinciClick(no){
		saveRinci(no);
	}

	function saveRinci(no){
		var form_data = new FormData();

		form_data.append('cmb_divisi',$('#cmb_divisi').val());
		form_data.append('cmb_jenis_permohonan',$('#cmb_jenis_permohonan').val());
		form_data.append('cmb_lokasi',$('#cmb_lokasi').val());
		form_data.append('txt_no_ref',$('#txt_no_ref').val());
		form_data.append('txt_tgl_ref',$('#txt_tgl_ref').val());
		form_data.append('txt_tanggal',$('#txt_tanggal').val());
		form_data.append('txt_tgl_terima',$('#txt_tgl_terima').val());
		form_data.append('txt_kode_departemen',$('#txt_kode_departemen').val());
		form_data.append('txt_departemen',$('#txt_departemen').val());
		form_data.append('txt_keterangan',$('#txt_keterangan').val());
		
		form_data.append('txt_cari_kode_brg_'+no,$('#txt_cari_kode_brg_'+no).val());
		form_data.append('txt_qty_'+no,$('#txt_qty_'+no).val());
		form_data.append('txt_merk_type_jenis_'+no,$('#txt_merk_type_jenis_'+no).val());
		form_data.append('txt_keterangan_rinci_'+no,$('#txt_keterangan_rinci_'+no).val());

		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/simpan_rinci_spp'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {
	          // $('#btn_konfirmasi_terima_'+index).attr('disabled','');
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	          // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
	          // $('.modal-success').modal('show');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function ubahRinci(no){
		var form_data = new FormData();

		form_data.append('cmb_divisi',$('#cmb_divisi').val());
		form_data.append('cmb_jenis_permohonan',$('#cmb_jenis_permohonan').val());
		form_data.append('cmb_lokasi',$('#cmb_lokasi').val());
		form_data.append('txt_no_ref',$('#txt_no_ref').val());
		form_data.append('txt_tgl_ref',$('#txt_tgl_ref').val());
		form_data.append('txt_tanggal',$('#txt_tanggal').val());
		form_data.append('txt_tgl_terima',$('#txt_tgl_terima').val());
		form_data.append('txt_kode_departemen',$('#txt_kode_departemen').val());
		form_data.append('txt_departemen',$('#txt_departemen').val());
		form_data.append('txt_keterangan',$('#txt_keterangan').val());
		
		form_data.append('txt_cari_kode_brg_'+no,$('#txt_cari_kode_brg_'+no).val());
		form_data.append('txt_qty_'+no,$('#txt_qty_'+no).val());
		form_data.append('txt_merk_type_jenis_'+no,$('#txt_merk_type_jenis_'+no).val());
		form_data.append('txt_keterangan_rinci_'+no,$('#txt_keterangan_rinci_'+no).val());

		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/ubah_rinci_spp'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {
	          // $('#btn_konfirmasi_terima_'+index).attr('disabled','');
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	          // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
	          // $('.modal-success').modal('show');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function hapusRinci(no){
		var form_data = new FormData();

		form_data.append('cmb_divisi',$('#cmb_divisi').val());
		form_data.append('cmb_jenis_permohonan',$('#cmb_jenis_permohonan').val());
		form_data.append('cmb_lokasi',$('#cmb_lokasi').val());
		form_data.append('txt_no_ref',$('#txt_no_ref').val());
		form_data.append('txt_tgl_ref',$('#txt_tgl_ref').val());
		form_data.append('txt_tanggal',$('#txt_tanggal').val());
		form_data.append('txt_tgl_terima',$('#txt_tgl_terima').val());
		form_data.append('txt_kode_departemen',$('#txt_kode_departemen').val());
		form_data.append('txt_departemen',$('#txt_departemen').val());
		form_data.append('txt_keterangan',$('#txt_keterangan').val());
		
		form_data.append('txt_cari_kode_brg_'+no,$('#txt_cari_kode_brg_'+no).val());
		form_data.append('txt_qty_'+no,$('#txt_qty_'+no).val());
		form_data.append('txt_merk_type_jenis_'+no,$('#txt_merk_type_jenis_'+no).val());
		form_data.append('txt_keterangan_rinci_'+no,$('#txt_keterangan_rinci_'+no).val());

		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('spp/hapus_rinci_spp'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {
	          // $('#btn_konfirmasi_terima_'+index).attr('disabled','');
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	          // $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
	          // $('.modal-success').modal('show');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

</script>