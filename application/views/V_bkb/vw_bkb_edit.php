<style type="text/css">
	#tbodyPemesan tr:hover {
        background-color: #26b99a;
        color: #ffffff;
    }

    @media (min-width: 768px) {
	  .modal-xl {
	    width: 90%;
	   max-width:1200px;
	  }
	}

	/*#tableRinciBKB{
	   overflow-x:scroll;
	   width:120%;
	   max-width:150%;
	   display:block;
	}*/

	.modal {
	  overflow-y:auto;
	}
</style>

<?php 
	$lokasi_sesi = $this->session->userdata('status_lokasi');
?>

<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>BKB <small>Bukti Keluar Barang</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<div id="" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group div_form_1">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No BPB <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_bpb" name="txt_no_bpb" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No. BPB" readonly="" onkeypress="modalBPB(event)">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Diberikan kepada <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_diberikan_kpd" name="txt_diberikan_kpd" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Diberikan kepada" required="" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Untuk keperluan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<textarea class="resizable_textarea form-control" id="txt_untuk_keperluan" name="txt_untuk_keperluan" placeholder="Untuk keperluan" required="" readonly=""></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl BKB <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_tgl_bkb" name="txt_tgl_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl BKB" readonly disabled>
											</div>
										</div>				
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Bagian <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<select class="form-control" id="cmb_bagian" name="cmb_bagian" required="" onchange="cek_tm_tbm(1)" disabled="">
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Alokasi Estate <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<select class="form-control" id="cmb_alokasi_est" name="cmb_alokasi_est" required="" disabled="">
													<option value="" selected>-- Pilih --</option>
													<option value="03">03</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="21">21</option>
													<option value="22">22</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x_content div_form_2">
					<label id="lbl_bkb_status" name="lbl_bkb_status">No. BKB : ... &nbsp; No. Ref. BKB : ...</label>
					<h4 id="h4_no_bkb" name="h4_no_bkb"></h4>
					<h4 id="h4_no_ref_bkb" name="h4_no_ref_bkb"></h4>
					<input type="hidden" id="hidden_no_bkb" name="hidden_no_bkb">
					<input type="hidden" id="hidden_id_stok_keluar" name="hidden_id_stok_keluar">
					<input type="hidden" id="hidden_no_ref_bkb" name="hidden_no_ref_bkb">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="tableRinciBKB" width="150%">
							<thead>
								<tr>
									<th width="3%"></th>
									<th width="10%">TM/TBM</th>
									<th width="10%">Afd/Unit</th>
									<th width="8%">Blok/Sub</th>
									<th width="10%">Thn Tanam</th>
									<th width="20%">Bahan</th>
									<th width="25%">Account Beban</th>
									<th width="25%">Barang</th>
									<th width="8%">Qty Disetujui</th>
									<th width="8%">Qty Dikeluarkan</th>
									<th width="25%">Keterangan</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="tbody_rincian" name="tbody_rincian">
								<!-- <tr id="tr_1">
									<td>
										<input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
										<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
										<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('1')"></button>
									</td>
									<form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
										<td>
											<select class="form-control" id="cmb_tm_tbm_1" name="cmb_tm_tbm_1" onchange="cmb_afd_unit(1)">
												<option value=""></option>
												<option value="TM">TM</option>
												<option value="TBM">TBM</option>
												<option value="LANDCLEARING">LANDCLEARING</option>
												<option value="PEMBIBITAN">PEMBIBITAN</option>
											</select>
										</td>
										<td>
											<select class="form-control" id="cmb_afd_unit_1" name="cmb_afd_unit_1" onchange="cmb_tahun_tanam(1)">
												<option value=""></option>
											</select>
										</td>
										<td>
											<select class="form-control" id="cmb_blok_sub_1" name="cmb_blok_sub_1">
												<option value=""></option>
											</select>
										</td>
										<td>
											<select class="form-control" id="cmb_tahun_tanam_1" name="cmb_tahun_tanam_1" onchange="cmb_bahan(1)">
												<option value=""></option>
											</select>
										</td>
										<td>
											<select class="form-control" id="cmb_bahan_1" name="cmb_bahan_1">
												<option value=""></option>
											</select>
										</td>
										<td>
											<input type="text" class="form-control" id="txt_account_beban_1" name="txt_account_beban_1" placeholder="Account Beban" onfocus="pilihModalAccBeban('1')" >
											<label class="control-label" id="lbl_no_acc_1"></label>
											<label class="control-label" id="lbl_nama_acc_1"></label>
											<input type="hidden" id="hidden_no_acc_1" name="hidden_no_acc_1">
											<input type="hidden" id="hidden_nama_acc_1" name="hidden_nama_acc_1">
										</td>
										<td>
											<input type="text" class="form-control" id="txt_barang_1" name="txt_barang_1" onfocus="cari_barang('1')" placeholder="Barang">
											<label id="lbl_kode_barang_1"></label>
											<label id="lbl_nama_barang_1"></label>
											<input type="hidden" id="hidden_kode_barang_1" name="hidden_kode_barang_1">
											<input type="hidden" id="hidden_nama_barang_1" name="hidden_nama_barang_1">
										</td>
										<td>
											<input type="text" class="form-control" id="txt_qty_diminta_1" name="txt_qty_diminta_1" placeholder="Qty Diminta">
											<label>Stok di tgl ini. <b id="b_stok_tgl_ini_1" name="b_stok_tgl_ini_1"></b></label>
											<label>Satuan : <b id="b_satuan_1" name="b_satuan_1"></b></label>
											<input type="hidden" id="hidden_stok_tgl_ini_1" name="hidden_stok_tgl_ini_1">
											<input type="hidden" id="hidden_satuan_1" name="hidden_satuan_1">
										</td>
										<td>
											<input type="text" class="form-control" id="txt_qty_disetujui_1" name="txt_qty_disetujui_1" placeholder="Qty Disetujui">
										</td>
										<td>
											<textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'1')"></textarea>
											<label id="lbl_status_simpan_1"></label>
											<input type="hidden" id="hidden_id_keluarbrgitem_1" name="hidden_id_keluarbrgitem_1">
										</td>
										<td>
											<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
										</td>
									</form>
								</tr> -->
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br />
	<br />

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalAccBeban">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Account Beban</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="table-responsive">
								<input type="hidden" id="hidden_no_row" name="hidden_no_row">
								<table id="tableAccBeban" class="table table-bordered" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>No. COA</th>
											<th>Nama Account</th>
											<th>Type</th>
											<th>Grup</th>
										</tr>
									</thead>
									<tbody id="tbody_listaccbeban">
									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>











	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalDataPO">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pilih PO</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Alokasi 
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<select class="form-control" id="cmb_filter_alokasi" name="cmb_filter_alokasi">
									<option value="SEMUA" selected>TAMPILKAN SEMUA</option>
									<?php 
										switch ($this->session->userdata('status_lokasi')) {
											case 'PKS':
											case 'SITE':
									?>
										<option value="PKS">PKS</option>
										<option value="SITE">SITE</option>
									<?php
												break;
											case 'RO':
									?>
										<option value="PKS">PKS</option>
										<option value="SITE">SITE</option>
										<option value="RO">RO</option>
									<?php
												break;
											case 'HO':
									?>
										<option value="PKS">PKS</option>
										<option value="SITE">SITE</option>
										<option value="RO">RO</option>
										<option value="HO">HO</option>
									<?php
												break;
											default:
												break;
										}
									?>
								</select>
							</div>
						</div>
						<div class="table-responsive">
							<table id="tableDetailPO" class="table table-bordered" width="100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tgl</th>
										<th>Ref. PO</th>
										<th>No. PO</th>
										<th>Supplier</th>
										<th>Lokasi Beli</th>
									</tr>
								</thead>
								<tbody id="tbodyDetailSPP">
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBarang">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">List Barang</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="table-responsive">
								<input type="hidden" id="hidden_no_row" name="hidden_no_row">
								<table id="tableListBarang" class="table table-bordered" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>No</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>
											<th>Grup</th>
											<th>Satuan</th>
										</tr>
									</thead>
									<tbody id="tbody_listbarang">
									</tbody>
								</table>
							</div>	
						</div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
								<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="pilihItem()">Pilih Item</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBarang">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">List Barang</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="table-responsive">
								<input type="hidden" id="hidden_no_row_barang" name="hidden_no_row_barang">
								<table id="tableBarang" class="table table-bordered" style="width: 100%;">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>
											<th>Qty</th>
											<th>Sat</th>
											<th>Keterangan</th>
										</tr>
									</thead>
									<tbody id="tbody_listbarang">
									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalBPB">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">List BPB</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="table-responsive">
								<input type="hidden" id="hidden_no_bpb" name="hidden_no_bpb">
								<table id="tableBPB" class="table table-bordered" width="100%">
									<thead>
										<tr>
											<th>No.</th>
											<th>No. BPB</th>
											<th>No. Ref BPB</th>
											<th>Item Barang</th>
											<th>Keperluan</th>
											<th>Tgl Input</th>
											<th>Diminta Oleh</th>
										</tr>
									</thead>
									<tbody id="tbody_listbpb">
									</tbody>
								</table>
							</div>	
						</div>
						<!-- <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
								<button class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Setujui Semua" id="btn_setuju_all" name="btn_setuju_all" onclick="pilihItem()">Pilih Item</button>
							</div>
						</div> -->
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalKonfirmasiHapus">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
					<p>Apakah Anda yakin ingin menghapus data ini ???</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="btn_delete" onclick="deleteData()" >Hapus</button>
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

</div>
<input type="hidden" id="hidden_no_table" name="hidden_no_table">

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<!-- JQuery Number -->
<script src="<?php echo base_url();?>assets/jquerynumber/jquery.number.js"></script>

<script>
	$(document).ready(function(){
		var id = <?php echo $this->uri->segment(4) ?>;
		var no_bkb = <?php echo $this->uri->segment(3) ?>;

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bkb/get_edit_bkb'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id, 'no_bkb':no_bkb},
	        success: function(data){
	        	// console.log(data);
        		$.ajax({
        			// async	: false,
        	        type    : "POST",
        	        url     : "<?php echo site_url('bkb/cari_dept'); ?>",
        	        dataType  : "JSON",
        	        beforeSend: function(){
        	        },
        	        cache   : false,
        	        // contentType : false,
        	        // processData : false,
        	        
        	        data    : '',
        	        success: function(data_bag){
        	        	$('#cmb_bagian').empty();
        	        	$('#cmb_bagian').append('<option value="">-- Pilih --</option>');
        	        	$.each(data_bag, function(index) {
        	        		var opsi_cmb_bagian = '<option value="'+data_bag[index].kode+'">'+data_bag[index].nama+'</option>';
        	          		$('#cmb_bagian').append(opsi_cmb_bagian);

        	          		// $('#cmb_bagian :selected').text(data.data_stokkeluar.bag);
        	          		var cmb_bagian = document.getElementById('cmb_bagian');
        	          		// for (var i = 0; i < cmb_bagian.options.length; i++) {
        	          		    if (cmb_bagian.options[index].text === data.data_stokkeluar.bag) {
        	          		        cmb_bagian.selectedIndex = index;
        	          		    }
        	          		// }
        				});
        	        },
        	        error   : function(request){
        	          alert(request.responseText);
        	        }
        	    });

	        	var tglbkb = new Date(data.data_stokkeluar.tglinput);

	        	$('#txt_diberikan_kpd').val(data.data_stokkeluar.kpd);
	        	$('#txt_untuk_keperluan').val(data.data_stokkeluar.keperluan);

	        	$('#txt_tgl_bkb').val(dateToMDY(tglbkb));
	        	$('#txt_no_bpb').val(data.data_stokkeluar.nobpb);
	        	$('#cmb_alokasi_est').val(data.data_stokkeluar.alokasi);

	        	$('#hidden_no_bkb').val(data.data_stokkeluar.SKBTXT);
	        	$('#hidden_id_stok_keluar').val(data.data_stokkeluar.id);
	        	$('#hidden_no_ref_bkb').val(data.data_stokkeluar.NO_REF);

	        	$('#lbl_bkb_status').empty();
	  	        $('#h4_no_bkb').html('No. BKB : '+data.data_stokkeluar.SKBTXT);
	  	        $('#h4_no_ref_bkb').html('No. Ref BKB : '+data.data_stokkeluar.NO_REF);

	  	        $('#hidden_no_table').val(1);

	        	$.each(data.data_keluarbrgitem, function(index) {
	        		// var n = 1+index;
	        		var n = $('#hidden_no_table').val();
	        		
	        		var tr_buka = '<tr id="tr_'+n+'">';
	        		var td_col_1 = 	'<td>'
	        							+'<input type="hidden" id="hidden_proses_status_'+n+'" name="hidden_proses_status_'+n+'" value="insert">'
	        							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+n+')"></button><br />'
	        							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+n+')"></button>'
	        						+'</td>';
	        		var form_buka =	'<form id="form_rinci_'+n+'" name="form_rinci_'+n+'" method="POST" action="javascript:;">';
	        		var td_col_2 = '<td>'
	        							+'<!-- TM/TBM -->'
	        							+'<select class="form-control set_strip_cmb" id="cmb_tm_tbm_'+n+'" name="cmb_tm_tbm_'+n+'" onchange="cmb_afd_unit('+n+')" disabled>'
	        								+'<option value=""></option>'
	        								+'<option value="TM">TM</option>'
	        								+'<option value="TBM">TBM</option>'
	        								+'<option value="LANDCLEARING">LANDCLEARING</option>'
	        								+'<option value="PEMBIBITAN">PEMBIBITAN</option>'
	        							+'</select>'
	        						+'</td>';
	        		var td_col_3 = '<td>'
	        							+'<!-- AFD/UNIT -->'
	        							+'<select class="form-control" id="cmb_afd_unit_'+n+'" name="cmb_afd_unit_'+n+'" onchange="cmb_blok_sub('+n+')" disabled>'
	        								+'<option value=""></option>'
	        								+'<option value="01">01</option>'
	        								+'<option value="02">02</option>'
	        								+'<option value="03">03</option>'
	        								+'<option value="04">04</option>'
	        								+'<option value="05">05</option>'
	        								+'<option value="06">06</option>'
	        								+'<option value="07">07</option>'
	        								+'<option value="08">08</option>'
	        								+'<option value="09">09</option>'
	        								+'<option value="10">10</option>'
	        								+'<option value="11">11</option>'
	        								+'<option value="12">12</option>'
	        								+'<option value="14">14</option>'
	        								+'<option value="15">15</option>'
	        								+'<option value="16">16</option>'
	        								+'<option value="17">17</option>'
	        								+'<option value="99">99</option>'
	        							+'</select>'
	        						+'</td>';
	        		var td_col_4 = '<td>'
	        							+'<!-- BLOK/SUB -->'
	        							+'<select class="form-control" id="cmb_blok_sub_'+n+'" name="cmb_blok_sub_'+n+'" onchange="cmb_tahun_tanam('+n+')" disabled>'
	        								+'<option value=""></option>'
	        							+'</select>'
	        						+'</td>';
	        		var td_col_5 = '<td>'
	        							+'<!-- Tahun Tanam -->'
	        							+'<select class="form-control" id="cmb_tahun_tanam_'+n+'" name="cmb_tahun_tanam_'+n+'" onchange="cmb_bahan('+n+')" disabled>'
	        								+'<option value=""></option>'
	        							+'</select>'
	        						+'</td>';
	        		var td_col_6 = '<td>'
	        							+'<!-- Bahan -->'
	        							+'<select class="form-control" id="cmb_bahan_'+n+'" name="cmb_bahan_'+n+'" disabled>'
	        								+'<option value="" disabled></option>'
	        							+'</select>'
	        						+'</td>';
	        		var td_col_7 = '<td>'
	        							+'<!-- Account Beban -->'
	        							+'<input type="text" class="form-control" id="txt_account_beban_'+n+'" name="txt_account_beban_'+n+'" placeholder="Account Beban" onfocus="pilihModalAccBeban('+n+')" disabled>'
	        							+'<label class="control-label" id="lbl_no_acc_'+n+'"></label>'
	        							+'<label class="control-label" id="lbl_nama_acc_'+n+'"></label>'
	        							+'<input type="hidden" id="hidden_no_acc_'+n+'" name="hidden_no_acc_'+n+'">'
	        							+'<input type="hidden" id="hidden_nama_acc_'+n+'" name="hidden_nama_acc_'+n+'">'
	        						+'</td>';
	        		var td_col_8 = '<td>'
	        							+'<!-- Barang -->'
	        							+'<input type="text" class="form-control" id="txt_barang_'+n+'" name="txt_barang_'+n+'" onfocus="cari_barang('+n+')" placeholder="Barang" disabled>'
	        							+'<label id="lbl_kode_barang_'+n+'"></label>'
	        							+'<label id="lbl_nama_barang_'+n+'"></label>'
	        							+'<input type="hidden" id="hidden_kode_barang_'+n+'" name="hidden_kode_barang_'+n+'">'
	        							+'<input type="hidden" id="hidden_nama_barang_'+n+'" name="hidden_nama_barang_'+n+'">'
	        							+'<input type="hidden" id="hidden_grup_barang_'+n+'" name="hidden_grup_barang_'+n+'">'
	        						+'</td>';
	        		var td_col_9 = '<td>'
	        							+'<!-- Qty Diminta & Stok di Tgl ini & Satuan -->'
	        							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_diminta_'+n+'" name="txt_qty_diminta_'+n+'" placeholder="Qty Diminta" readonly>'
	        							+'<label>Stok di tgl ini. <b id="b_stok_tgl_ini_'+n+'" name="b_stok_tgl_ini_'+n+'"></b></label>'
	        							+'<label>Satuan : <b id="b_satuan_'+n+'" name="b_satuan_'+n+'"></b></label>'
	        							+'<input type="hidden" id="hidden_stok_tgl_ini_'+n+'" name="hidden_stok_tgl_ini_'+n+'">'
	        							+'<input type="hidden" id="hidden_satuan_'+n+'" name="hidden_satuan_'+n+'">'
	        						+'</td>';
	        		var td_col_10 = '<td>'
	        							+'<!-- Qty Disetujui -->'
	        							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_disetujui_'+n+'" name="txt_qty_disetujui_'+n+'" placeholder="Qty Disetujui" readonly>'
	        						+'</td>';
	        		var td_col_11 = '<td>'
	        							+'<!-- Keterangan -->'
	        							+'<textarea class="resizable_textarea form-control" id="txt_ket_rinci_'+n+'" name="txt_ket_rinci_'+n+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+n+')" readonly></textarea>'
	        							+'<label id="lbl_status_simpan_'+n+'"></label>'
	        							+'<input type="hidden" id="hidden_id_keluarbrgitem_'+n+'" name="hidden_id_keluarbrgitem_'+n+'">'
	        						+'</td>';
	        		var td_col_12 = '<td width="5%">'
										+'<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+n+'" name="btn_simpan_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+n+')"></button>'
										+'<button style="display:block;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+n+'" name="btn_ubah_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+n+')"></button>'
										+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+n+'" name="btn_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+n+')"></button>'
										+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+n+'" name="btn_cancel_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+n+')"></button>'
										+'<button style="display:block;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+n+'" name="btn_hapus_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+n+')"></button>'
									+'</td>';
	        		var form_tutup = '</form>';
	        		var tr_tutup = '</tr>';

	        		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+td_col_8+td_col_9+td_col_10+td_col_11+td_col_12+form_tutup+tr_tutup);

	        		$('#btn_simpan_'+n).hide();
	        		$('#btn_ubah_'+n).hide();
	        		// $('#cmb_tm_tbm_'+).val(data[index].);
	        		// $('#cmb_afd_unit_'+n).val(data.data_keluarbrgitem[index].afd);
	        		// $('#cmb_blok_sub_'+n).val(data.data_keluarbrgitem[index].blok);
	        		// $('#cmb_tahun_tanam_'+n).val(data.data_keluarbrgitem[index].);
	        		var opsi_cmb_bahan = '<option value="'+data.data_keluarbrgitem[index].kodebebantxt+'">'+data.data_keluarbrgitem[index].kodebebantxt+'</option>';
	        		$('#cmb_bahan_'+n).empty();
	        		$('#cmb_bahan_'+n).append(opsi_cmb_bahan);

	        		var opsi_cmb_blok_sub = '<option value="'+data.data_keluarbrgitem[index].blok+'">'+data.data_keluarbrgitem[index].blok+'</option>';
	        		$('#cmb_blok_sub_'+n).empty();
	        		$('#cmb_blok_sub_'+n).append(opsi_cmb_blok_sub);

	        		// $('#cmb_bahan_'+n).val(data.data_keluarbrgitem[index].kodebebantxt);
	        		$('#txt_account_beban_'+n).val(data.data_keluarbrgitem[index].kodesubtxt);
	        		$('#txt_barang_'+n).val(data.data_keluarbrgitem[index].nabar);
	        		$('#txt_qty_diminta_'+n).val(data.data_keluarbrgitem[index].qty);
	        		$('#txt_qty_disetujui_'+n).val(data.data_keluarbrgitem[index].qty2);
	        		$('#txt_ket_rinci_'+n).val(data.data_keluarbrgitem[index].ket);

	        		$('#lbl_no_acc_'+n).html(data.data_keluarbrgitem[index].kodesubtxt);
	        		$('#lbl_nama_acc_'+n).html(data.data_keluarbrgitem[index].ketsub);
	        		$('#lbl_kode_barang_'+n).html(data.data_keluarbrgitem[index].kodebartxt);
	        		$('#lbl_nama_barang_'+n).html(data.data_keluarbrgitem[index].nabar);
	        		
	        		$('#hidden_no_acc_'+n).val(data.data_keluarbrgitem[index].kodesubtxt);
	        		$('#hidden_nama_acc_'+n).val(data.data_keluarbrgitem[index].ketsub);

	        		$('#hidden_kode_barang_'+n).val(data.data_keluarbrgitem[index].kodebartxt);
	        		$('#hidden_nama_barang_'+n).val(data.data_keluarbrgitem[index].nabar);
	        		$('#hidden_grup_barang_'+n).val(data.data_keluarbrgitem[index].grp);

	        		$('#b_satuan_'+n).html(data.data_keluarbrgitem[index].satuan);
	        		$('#hidden_satuan_'+n).val(data.data_keluarbrgitem[index].satuan);

	        		$('#hidden_id_keluarbrgitem_'+n).val(data.data_keluarbrgitem[index].id);
	        		// $('#b_stok_tgl_ini_'+n).html(data.data_keluarbrgitem[index].);
	        		// $('#b_satuan_'+n).html(data.data_keluarbrgitem[index].);

	        		$('.currencyduadigit').number(true, 2);

	        		sum_stok(data.data_keluarbrgitem[index].kodebartxt,n);

	        		get_all_cmb(data.data_keluarbrgitem[index].kodebebantxt,n);

	        		n++;
					$('#hidden_no_table').val(n);
	        	})
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });






		// =========================

		$('#txt_tgl_terima,#txt_tgl_bkb').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"

			// "singleDatePicker": true,
		 //    "timePicker": true,
		 //    "timePicker24Hour": true,
		 //    "timePickerSeconds": true,
		 //    "startDate": "03/20/2019",
		 //    "endDate": "03/26/2019"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});

	})

	function cek_tm_tbm(row){
		if($('#cmb_bagian :selected').text() != "TANAMAN"){
			var strip_cmb = '<option value="-">-</option>';
	        // $('.set_strip_cmb').empty();
	        // $('.set_strip_cmb').append(strip_cmb);
	        $('.set_strip_cmb').html(strip_cmb);
	        // $('#cmb_tm_tbm_'+row).html(strip_cmb);
		}
		else{
			var cmb_tm_tbm = '<option value=""></option>';
			cmb_tm_tbm += '<option value="TM">TM</option>';
			cmb_tm_tbm += '<option value="TBM">TBM</option>';
			cmb_tm_tbm += '<option value="LANDCLEARING">LANDCLEARING</option>';
			cmb_tm_tbm += '<option value="PEMBIBITAN">PEMBIBITAN</option>';
			
			var strip_cmb = '<option value="-">-</option>';
			// $('.set_strip_cmb').empty();
			// $('.set_strip_cmb').append(strip_cmb);
			$('.set_strip_cmb').html(strip_cmb);
			// $('#cmb_tm_tbm_'+row).html(strip_cmb);

			// $('.cmb_tm_tbm').empty();
			// $('.cmb_tm_tbm').append(cmb_tm_tbm);			
			$('.cmb_tm_tbm').html(cmb_tm_tbm);
			// $('#cmb_tm_tbm_'+row).html(cmb_tm_tbm);		
		}
	}

	function cek_bagian(row){
		if($('#cmb_bagian :selected').text() != "TANAMAN"){
			var strip_cmb = '<option value="-">-</option>';
	        // $('.set_strip_cmb').empty();
	        // $('.set_strip_cmb').append(strip_cmb);
	        $('.set_strip_cmb').html(strip_cmb);
	        // $('#cmb_tm_tbm_'+row).html(strip_cmb);
		}
		else{
			var cmb_tm_tbm = '<option value=""></option>';
			cmb_tm_tbm += '<option value="TM">TM</option>';
			cmb_tm_tbm += '<option value="TBM">TBM</option>';
			cmb_tm_tbm += '<option value="LANDCLEARING">LANDCLEARING</option>';
			cmb_tm_tbm += '<option value="PEMBIBITAN">PEMBIBITAN</option>';
			
			var strip_cmb = '<option value="-">-</option>';
			// $('.set_strip_cmb').empty();
			// $('.set_strip_cmb').append(strip_cmb);
			// $('.set_strip_cmb').html(strip_cmb);
			$('#cmb_tm_tbm_'+row).html(strip_cmb);

			// $('.cmb_tm_tbm').empty();
			// $('.cmb_tm_tbm').append(cmb_tm_tbm);			
			// $('.cmb_tm_tbm').html(cmb_tm_tbm);
			$('#cmb_tm_tbm_'+row).html(cmb_tm_tbm);		
		}
	}

	function cmb_afd_unit(row){
		var tm_tbm = $('#cmb_tm_tbm_'+row).val();
		if(tm_tbm == ""){
			$('#txt_account_beban_'+row).attr('disabled','');
		}
		else {
			$('#txt_account_beban_'+row).removeAttr('disabled');
		}

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bpb/pilih_afd'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'tm_tbm' : tm_tbm },
	        success: function(data){
	        	$('#cmb_afd_unit_'+row).empty();

	        	var opsi_pilih = '<option value=""></option>';
	        	$('#cmb_afd_unit_'+row).append(opsi_pilih);

	        	$.each(data, function(index) {
	        		// var opsi_afd_unit = '<option value="'+data[index].AFD+'">'+data[index].AFD+'</option>';
	        		var opsi_afd_unit = '<option value="'+data[index].afd+'">'+data[index].afd+'</option>';
	          		$('#cmb_afd_unit_'+row).append(opsi_afd_unit);
				});
				// cmb_tahun_tanam(row);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function cmb_blok_sub(row){
		var tm_tbm = $('#cmb_tm_tbm_'+row).val();
		var afd_unit = $('#cmb_afd_unit_'+row).val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bpb/pilih_blok_sub'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'tm_tbm' : tm_tbm, 'afd_unit' : afd_unit},
	        success: function(data){
	        	$('#cmb_blok_sub_'+row).empty();
	        	var opsi_pilih_master_blok = '<option value=""></option>';
	        	$('#cmb_blok_sub_'+row).append(opsi_pilih_master_blok);

				$.each(data, function(index) {
	        		var opsi_master_blok = '<option value="'+data[index].blok+'">'+data[index].blok+'</option>';
	          		$('#cmb_blok_sub_'+row).append(opsi_master_blok);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function cmb_tahun_tanam(row){
		var tm_tbm = $('#cmb_tm_tbm_'+row).val();
		var afd_unit = $('#cmb_afd_unit_'+row).val();
		var blok_sub = $('#cmb_blok_sub_'+row).val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bpb/pilih_tahun_tanam'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'tm_tbm' : tm_tbm, 'afd_unit' : afd_unit, 'blok_sub' : blok_sub},
	        success: function(data){
	        	$('#cmb_tahun_tanam_'+row).empty();
	        	var opsi_pilih_tahun_tanam = '<option value=""></option>';
	        	$('#cmb_tahun_tanam_'+row).append(opsi_pilih_tahun_tanam);

	        	$.each(data, function(index) {
	        		var opsi_tahun_tanam = '<option value="'+data[index].tahuntanam+'">'+data[index].tahuntanam+'</option>';
	          		$('#cmb_tahun_tanam_'+row).append(opsi_tahun_tanam);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function cmb_bahan(row){
		var tm_tbm = $('#cmb_tm_tbm_'+row).val();
		var afd_unit = $('#cmb_afd_unit_'+row).val();
		var blok_sub = $('#cmb_blok_sub_'+row).val();
		var thn_tanam = $('#cmb_tahun_tanam_'+row).val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bpb/pilih_bahan'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'tm_tbm' : tm_tbm, 'afd_unit' : afd_unit, 'blok_sub' : blok_sub, 'thn_tanam' : thn_tanam},
	        success: function(data){
	        	$('#cmb_bahan_'+row).empty();

	        	var opsi_pilih = '<option value=""></option>';
	        	$('#cmb_bahan_'+row).append(opsi_pilih);

	        	$.each(data, function(index) {
	        		// var opsi_cmb_bahan = '<option value="'+data[index].coa_material+'">'+data[index].coa_material+'-'+data[index].ket+'</option>';
	        		var opsi_cmb_bahan = '<option value="'+data[index][0]+'">'+data[index][0]+'-'+data[index][1]+'</option>';
	          		$('#cmb_bahan_'+row).append(opsi_cmb_bahan);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function get_all_cmb(bahan,n){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bkb/get_all_cmb'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'bahan' : bahan },
	        success: function(data){
	        	$('#cmb_tm_tbm_'+n).val(data.tmtbm);

				var opsi_afd_unit = '<option value="'+data.afd+'">'+data.afd+'</option>';
				$('#cmb_afd_unit_'+n).empty();
				$('#cmb_afd_unit_'+n).append(opsi_afd_unit);

				// var opsi_blok_sub = '<option value=""></option>';
				// $('#cmb_blok_sub_'+n).empty();
				// $('#cmb_blok_sub_'+n).append(opsi_blok_sub);

				var opsi_cmb_thn_tanam = '<option value="'+data.thn_tanam+'">'+data.thn_tanam+'</option>';
				$('#cmb_tahun_tanam_'+n).empty();
				$('#cmb_tahun_tanam_'+n).append(opsi_cmb_thn_tanam);				
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function pilihModalAccBeban(row){
		$('#modalAccBeban').modal('show');
		$('#hidden_no_row').val(row);
		tableAccBeban(row);
	}

	function tableAccBeban(row){
		var cmb_bahan = $('#cmb_bahan_'+row).val();
		$('#tableAccBeban').DataTable().destroy();
    	$('#tableAccBeban').DataTable({
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
          	  "url"         : "<?php echo site_url('bkb/list_acc_beban');?>",
          	  "type"        : "POST",
          	  "data"        : {'cmb_no_ac' : cmb_bahan},
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
	          	$('#tableAccBeban tr').each(function() {
	            	var Cell = $(this).find('td');
					var tipe = $(this).find('td').eq(3).html();
					if(tipe == 'G'){
						Cell.parent().on('mouseover', Cell, function() {
							Cell.parent().css('background-color', '#e6e600');
							Cell.parent().css('color', '#ffffff');

							Cell.parent().bind("mouseout", function() {
								Cell.parent().css('background-color', '');
								Cell.parent().css('color', '#73879c');
							});
						});
					}else{
						Cell.parent().on('mouseover', Cell, function() {
							Cell.parent().css('background-color', '#26b99a');
							Cell.parent().css('color', '#ffffff');

							Cell.parent().bind("mouseout", function() {
								Cell.parent().css('background-color', '');
								Cell.parent().css('color', '#73879c');
							});
						});
					}
	      		});
          	},
      	});
	}

	$('#tableAccBeban tbody').on('click', 'tr', function () {
  		var dataClick = $('#tableAccBeban').DataTable().row( this ).data();
        var no_coa = dataClick[1];
        var nama_account = dataClick[2];
        var row = $('#hidden_no_row').val();
		
		if(dataClick[3] == 'G'){
			alert('Account beban tidak dapat dipilih');
		}else{
			$('#lbl_no_acc_'+row).html(no_coa);
			$('#lbl_nama_acc_'+row).html(nama_account);
			$('#txt_account_beban_'+row).val(no_coa);

			$('#hidden_no_acc_'+row).val(no_coa);
			$('#hidden_nama_acc_'+row).val(nama_account);

			$('#modalAccBeban').modal('hide');
		}
	})

	function cari_barang(no_row){
		$('#hidden_no_row').empty();
		$('#hidden_no_row').val(no_row);
		$('#modalListBarang').modal('show');
		$('#tableListBarang').DataTable().destroy();
		listBarang(no_row);
	}

	function listBarang(no_row){
		$('#tableListBarang').DataTable().destroy();
		$('#tableListBarang').DataTable({
		  // "fixedHeader"		: true,
      	  "paging"	        : true,
      	  "scrollY"         : false,
          "scrollX"         : false,
          "searching"       : true,
          "select"          : true,
          "bLengthChange"   : true,
          "scrollCollapse"  : true,
          "bPaginate"       : true,
          "bInfo"           : true,
          "bSort"           : false,
          "processing"      : true,
          "serverSide"      : true,
          "stateSave"		: true,
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('bkb/list_barang');?>",
            "type"        : "POST",
            "data"        : {},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
          "columns": [
		    { "width": "3%" },
		    { "width": "5%" },
		    { "width": "10%" },
		    { "width": "20%" },
		    { "width": "20%" },
		    { "width": "5%" }
		  ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
              // "width"	  : 200,
              // "targets"	  : 0,
            },
          ],
          "drawCallback": function(settings) {
      		$('#tableListBarang tr').each(function() {
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

	$('#tableListBarang tbody').on('click', 'tr', function () {
		var dataClick = $('#tableListBarang').DataTable().row( this ).data();
        var kode_barang = dataClick[2];
        var nama_barang = dataClick[3];
        var grup_barang = dataClick[4];
        var satuan = dataClick[5];
        var row = $('#hidden_no_row').val();

        $('#lbl_kode_barang_'+row).html(kode_barang);
        $('#lbl_nama_barang_'+row).html(nama_barang);
        $('#txt_barang_'+row).val(nama_barang);

        $('#hidden_kode_barang_'+row).val(kode_barang);
        $('#hidden_nama_barang_'+row).val(nama_barang);
        $('#hidden_grup_barang_'+row).val(grup_barang);

        $('#b_satuan_'+row).html(satuan);
        $('#hidden_satuan_'+row).val(satuan);

		sum_stok(kode_barang, row);
	})

	function sum_stok(kodbar,row){
		$.ajax({
	        type    : "POST",
	        // url     : "<?php echo site_url('bkb/sum_stok'); ?>",
	        url     : "<?php echo site_url('list_function/sum_stok'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'kodbar': kodbar},
	        success: function(data){
	        	// console.log(data);
	        	$('#b_stok_tgl_ini_'+row).html(data);
	        	
	        	$('#hidden_stok_tgl_ini_'+row).val(data);
	        	
	        	$('#modalListBarang').modal('hide');

				// $('#txt_qty_'+no_row).focus();
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });	
	}


	function tambah_row(num_last){
		// var row = ++num_last;
		var row = $('#hidden_no_table').val();
		var tr_buka = '<tr id="tr_'+row+'">';
		var td_col_1 = 	'<td>'
							+'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+row+')"></button><br />'
							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+row+')"></button>'
						+'</td>';
		var form_buka =	'<form id="form_rinci_'+row+'" name="form_rinci_'+row+'" method="POST" action="javascript:;">';
		var td_col_2 = '<td>'
							+'<!-- TM/TBM -->'
							+'<select class="form-control set_strip_cmb" id="cmb_tm_tbm_'+row+'" name="cmb_tm_tbm_'+row+'" onchange="cmb_afd_unit('+row+')">'
								+'<option value=""></option>'
								+'<option value="TM">TM</option>'
								+'<option value="TBM">TBM</option>'
								+'<option value="LANDCLEARING">LANDCLEARING</option>'
								+'<option value="PEMBIBITAN">PEMBIBITAN</option>'
							+'</select>'
						+'</td>';
		var td_col_3 = '<td>'
							+'<!-- AFD/UNIT -->'
							+'<select class="form-control" id="cmb_afd_unit_'+row+'" name="cmb_afd_unit_'+row+'" onchange="cmb_blok_sub('+row+')">'
								+'<option value=""></option>'
								+'<option value="01">01</option>'
								+'<option value="02">02</option>'
								+'<option value="03">03</option>'
								+'<option value="04">04</option>'
								+'<option value="05">05</option>'
								+'<option value="06">06</option>'
								+'<option value="07">07</option>'
								+'<option value="08">08</option>'
								+'<option value="09">09</option>'
								+'<option value="10">10</option>'
								+'<option value="11">11</option>'
								+'<option value="12">12</option>'
								+'<option value="14">14</option>'
								+'<option value="15">15</option>'
								+'<option value="16">16</option>'
								+'<option value="17">17</option>'
								+'<option value="99">99</option>'
							+'</select>'
						+'</td>';
		var td_col_4 = '<td>'
							+'<!-- BLOK/SUB -->'
							+'<select class="form-control set_strip_cmb" id="cmb_blok_sub_'+row+'" name="cmb_blok_sub_'+row+'" onchange="cmb_tahun_tanam('+row+')">'
							+'</select>'
						+'</td>';
		var td_col_5 = '<td>'
							+'<!-- Tahun Tanam -->'
							+'<select class="form-control" id="cmb_tahun_tanam_'+row+'" name="cmb_tahun_tanam_'+row+'" onchange="cmb_bahan('+row+')">'
								+'<option value=""></option>'
							+'</select>'
						+'</td>';
		var td_col_6 = '<td>'
							+'<!-- Bahan -->'
							+'<select class="form-control" id="cmb_bahan_'+row+'" name="cmb_bahan_'+row+'">'
								+'<option value=""></option>'
							+'</select>'
						+'</td>';
		var td_col_7 = '<td>'
							+'<!-- Account Beban -->'
							+'<input type="text" class="form-control" id="txt_account_beban_'+row+'" name="txt_account_beban_'+row+'" placeholder="Account Beban" onfocus="pilihModalAccBeban('+row+')" >'
							+'<label class="control-label" id="lbl_no_acc_'+row+'"></label>'
							+'<label class="control-label" id="lbl_nama_acc_'+row+'"></label>'
							+'<input type="hidden" id="hidden_no_acc_'+row+'" name="hidden_no_acc_'+row+'">'
							+'<input type="hidden" id="hidden_nama_acc_'+row+'" name="hidden_nama_acc_'+row+'">'
						+'</td>';
		var td_col_8 = '<td>'
							+'<!-- Barang -->'
							+'<input type="text" class="form-control" id="txt_barang_'+row+'" name="txt_barang_'+row+'" onfocus="cari_barang('+row+')" placeholder="Barang">'
							+'<label id="lbl_kode_barang_'+row+'"></label>'
							+'<label id="lbl_nama_barang_'+row+'"></label>'
							+'<input type="hidden" id="hidden_kode_barang_'+row+'" name="hidden_kode_barang_'+row+'">'
							+'<input type="hidden" id="hidden_nama_barang_'+row+'" name="hidden_nama_barang_'+row+'">'
							+'<input type="hidden" id="hidden_grup_barang_'+row+'" name="hidden_grup_barang_'+row+'">'
						+'</td>'
		var td_col_9 = '<td>'
							+'<!-- Qty Diminta & Stok di Tgl ini & Satuan -->'
							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_diminta_'+row+'" name="txt_qty_diminta_'+row+'" placeholder="Qty Diminta">'
							+'<label>Stok di tgl ini. <b id="b_stok_tgl_ini_'+row+'" name="b_stok_tgl_ini_'+row+'"></b></label>'
							+'<label>Satuan : <b id="b_satuan_'+row+'" name="b_satuan_'+row+'"></b></label>'
							+'<input type="hidden" id="hidden_stok_tgl_ini_'+row+'" name="hidden_stok_tgl_ini_'+row+'">'
							+'<input type="hidden" id="hidden_satuan_'+row+'" name="hidden_satuan_'+row+'">'
						+'</td>';
		var td_col_10 = '<td>'
							+'<!-- Qty Disetujui -->'
							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_disetujui_'+row+'" name="txt_qty_disetujui_'+row+'" placeholder="Qty Disetujui">'
						+'</td>';
		var td_col_11 = '<td>'
							+'<!-- Keterangan -->'
							+'<textarea class="resizable_textarea form-control" id="txt_ket_rinci_'+row+'" name="txt_ket_rinci_'+row+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+row+')"></textarea>'
							+'<label id="lbl_status_simpan_'+row+'"></label>'
							+'<input type="hidden" id="hidden_id_keluarbrgitem_'+row+'" name="hidden_id_keluarbrgitem_'+row+'">'
						+'</td>';
		var td_col_12 = '<td>'
							+'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+row+'" name="btn_simpan_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+row+'" name="btn_ubah_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+row+'" name="btn_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+row+'" name="btn_cancel_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+row+'" name="btn_hapus_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+row+')"></button>'
						+'</td>';
		var form_tutup = '</form>';
		var tr_tutup = '</tr>';

		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+td_col_8+td_col_9+td_col_10+td_col_11+td_col_12+form_tutup+tr_tutup);

		$('.currencyduadigit').number(true, 2);

		cek_bagian(row);

		$('html, body').animate({
	        scrollTop: $("#tr_"+row).offset().top
	    }, 2000);

	    row++;
		$('#hidden_no_table').val(row);
	}

	function saveRinciEnter(e,no){
	  if(e.keyCode == 13 && !e.shiftKey){
	  	// console.log(e.keyCode);
	  	console.log($('#hidden_proses_status_'+no).val());
	    if($('#hidden_proses_status_'+no).val() == 'insert'){
  	      saveRinci(no);
  	    }
  	    else if($('#hidden_proses_status_'+no).val() == 'update'){
  	      updateRinci(no);
  	    }
  	  }
  	}

	function saveRinciClick(no){
  	 	if($('#hidden_proses_status_'+no).val() == 'insert'){
  	      	saveRinci(no);
  	    }
  	    else if($('#hidden_proses_status_'+no).val() == 'update'){
  	      	updateRinci(no);
  	    }
  	}

  	function validasi(arr_id,no){
  		if(Array.isArray(arr_id)){
  			$.each(arr_id, function( index, value ){
  				// $(arr_id[index]).css({
  	            	// "background": "#FFCECE"
  	            // })
  	            // $(arr_id[index]).after('<div class="pesan_error"><br /><small style="margin-top:0px;color:red;">Harus diisi</small></div>');
  			});
  		}
  		else{
  			if($('#'+arr_id).is('input') || $('#'+arr_id).is('textarea') || $('#'+arr_id).is('select')){
  				if(arr_id == 'hidden_no_acc_'+no){
  	            	$('#lbl_no_acc_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_no_acc_'+no).next().is('br#br_'+no)){
  		            	$('#lbl_no_acc_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');	
  	            	}
  	            }
  	            else if(arr_id == 'hidden_nama_acc_'+no){
  	            	$('#lbl_nama_acc_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_nama_acc_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_nama_acc_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_kode_barang_'+no){
  	            	$('#lbl_kode_barang_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_kode_barang_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_kode_barang_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_nama_barang_'+no){
  	            	$('#lbl_nama_barang_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_nama_barang_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_nama_barang_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_stok_tgl_ini_'+no){
  	            	$('#b_stok_tgl_ini_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#b_stok_tgl_ini_'+no).next().is('br#br_'+no)){
  	            		$('#b_stok_tgl_ini_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_satuan_'+no){
  	            	$('#b_satuan_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#b_satuan_'+no).next().is('br#br_'+no)){
  	            		$('#b_satuan_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'cmb_tm_tbm_'+no){
  	            	$('#cmb_tm_tbm_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#cmb_tm_tbm_'+no).next().is('br#br_'+no)){
  	            		$('#cmb_tm_tbm_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'cmb_afd_unit_'+no){
  	            	$('#cmb_afd_unit_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#cmb_afd_unit_'+no).next().is('br#br_'+no)){
  	            		$('#cmb_afd_unit_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'cmb_tahun_tanam_'+no){
  	            	$('#cmb_tahun_tanam_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#cmb_tahun_tanam_'+no).next().is('br#br_'+no)){
  	            		$('#cmb_tahun_tanam_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'cmb_bahan_'+no){
  	            	$('#cmb_bahan_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#cmb_bahan_'+no).next().is('br#br_'+no)){
  	            		$('#cmb_bahan_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else{
  	            	// console.log('kosong ni');
  					$('#'+arr_id).css({
  		            	"background": "#FFCECE"
  		            })
  		            if(!$('#'+arr_id).next().is('br#br_'+no)){
  			        	$('#'+arr_id).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  			    	}
  		        }
  		    }
  		}
  	}

  	function saveRinci(no){
  		var isValid = true;
  	    $('#cmb_tm_tbm_'+no
  	    	+',#cmb_afd_unit_'+no
  	    	// +',#cmb_blok_sub_'+no
  	    	+',#cmb_tahun_tanam_'+no
  	    	+',#cmb_bahan_'+no
  	    	+',#txt_account_beban_'+no
  	    	+',#hidden_no_acc_'+no
  	    	+',#hidden_nama_acc_'+no
  	    	+',#txt_barang_'+no
  	    	+',#hidden_kode_brg_'+no
  	    	+',#hidden_nama_barang_'+no
  	    	+',#txt_qty_diminta_'+no
  	    	+',#hidden_stok_tgl_ini_'+no
  	    	+',#hidden_satuan_'+no
  	    	+',#txt_qty_disetujui_'+no
  	    	+',#txt_ket_rinci_'+no).each(function (e) {
  	        if ($.trim($(this).val()) == '') {
  	            isValid = false;
  	            validasi($(this).attr("id"),no);
  	        }
  	        else {
				if($(this).attr('id') == 'hidden_kode_brg_'+no){
					$('#lbl_kode_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_kode_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_kode_barang_'+no).next().remove();
						$('#lbl_kode_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_brg_'+no){
					$('#lbl_nama_brg_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_brg_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_brg_'+no).next().remove();
						$('#lbl_nama_brg_'+no).next().remove();
					}	
  	            }
  	            else if($(this).attr('id') == 'hidden_stok_'+no){
					$('#lbl_stok_'+no).css({
					  "background": ""
					});
					if($('#lbl_stok_'+no).next().is('br#br_'+no)){
						$('#lbl_stok_'+no).next().remove();
						$('#lbl_stok_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_satuan_brg_'+no){
					$('#lbl_satuan_brg_'+no).css({
					  "background": ""
					});
					if($('#lbl_satuan_brg_'+no).next().is('br#br_'+no)){
					$('#lbl_satuan_brg_'+no).next().remove();
					$('#lbl_satuan_brg_'+no).next().remove();
					}
  	            }
  	            else{
					$(this).css({
					  "background": ""
					});
					if($(this).next().is('br#br_'+no)){
					$(this).next().remove();
					$(this).next().remove();
					}
  	          	}
  	        }
  	    });
  	    if (isValid == true){
  	    	if($('#txt_qty_diminta_'+no).val() != $('#txt_qty_disetujui_'+no).val()){
  	    		var confirm = window.confirm("Qty dikeluarkan tidak sama dengan qty yang disetujui. Apakah Anda yakin ?");
  	    		if(confirm){
  	    			saveData(no);
  	    		}
  	    	}
  	    	else {
  	    		saveData(no);
  	    	}
  	    }
  	    // console.log(isValid);
  	}

  	function saveData(no){
		var form_data = new FormData();

		form_data.append('txt_diberikan_kpd',$('#txt_diberikan_kpd').val());  	  
		form_data.append('txt_untuk_keperluan',$('#txt_untuk_keperluan').val());  	  
		form_data.append('txt_tgl_bkb',$('#txt_tgl_bkb').val());  	  
		form_data.append('txt_no_bpb',$('#txt_no_bpb').val());  	  
		form_data.append('cmb_bagian',$('#cmb_bagian :selected').text());
		form_data.append('cmb_alokasi_est',$('#cmb_alokasi_est').val());

		form_data.append('cmb_tm_tbm',$('#cmb_tm_tbm_'+no).val()); 
		form_data.append('cmb_afd_unit',$('#cmb_afd_unit_'+no).val()); 
		form_data.append('cmb_blok_sub',$('#cmb_blok_sub_'+no).val()); 
		form_data.append('cmb_tahun_tanam',$('#cmb_tahun_tanam_'+no).val()); 
		form_data.append('cmb_bahan',$('#cmb_bahan_'+no).val()); 
		
		form_data.append('hidden_no_acc',$('#hidden_no_acc_'+no).val()); 
		form_data.append('hidden_nama_acc',$('#hidden_nama_acc_'+no).val()); 
		form_data.append('hidden_kode_barang',$('#hidden_kode_barang_'+no).val()); 
		form_data.append('hidden_nama_barang',$('#hidden_nama_barang_'+no).val());
		form_data.append('hidden_grup_barang',$('#hidden_grup_barang_'+no).val());
		form_data.append('hidden_stok_tgl_ini',$('#hidden_stok_tgl_ini_'+no).val()); 
		form_data.append('hidden_satuan',$('#hidden_satuan_'+no).val()); 
		
		form_data.append('txt_qty_diminta',$('#txt_qty_diminta_'+no).val()); 
		form_data.append('txt_qty_disetujui',$('#txt_qty_disetujui_'+no).val()); 
		form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val()); 

		form_data.append('hidden_no_bkb',$('#hidden_no_bkb').val());
		form_data.append('hidden_id_stok_keluar',$('#hidden_id_stok_keluar').val());
		form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val())
		
  	  	$.ajax({
  	        type    : "POST",
  	        url     : "<?php echo site_url('bkb/simpan_rinci_bkb'); ?>",
  	        dataType  : "JSON",
  	        beforeSend: function() {
  	          	$('#lbl_status_simpan_'+no).empty();
  	          	$('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
  	          	if($.trim($('#hidden_no_bkb').val()) == ''){
  	            	$('#lbl_bkb_status').empty();
  	            	$('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
  	          	}
  	          	$('#btn_ubah_'+no).css('display','block');
  	          	$('#btn_hapus_'+no).css('display','block');
  	        },
  	        cache   : false,
  	        contentType : false,
  	        processData : false,
  	        
  	        data    : form_data,
  	        success: function(data){
  	          if(data == "kodebar_exist"){
        		swal('Tidak bisa ditambahkan. Barang sudah ada pada BKB yang sama !');
        		$('#lbl_status_simpan_'+no).empty();
	        	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
        	  }
        	  else{
        	  	if(data.status == true){
        	  		$('.div_form_1').find('input,textarea').attr('readonly','');
        	  		$('.div_form_1').find('select').attr('disabled','');
	  	            
	  	            $('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_account_beban_'+no+',#txt_barang_'+no).attr('readonly','');
	  	            $('#tableRinciBKB tbody #tr_'+no+' td').find('select,#txt_account_beban_'+no+',#txt_barang_'+no).attr('disabled','');

	  	            $('#lbl_status_simpan_'+no).empty();
	  	            $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

	  	            $('#lbl_bkb_status').empty();
	  	            $('#h4_no_bkb').empty();
	  	            
	  	            $('#h4_no_ref_bkb').empty();
	  	            
	  	            $('#h4_no_bkb').append('No. BKB : '+data.skb);
	  	            $('#h4_no_ref_bkb').append('No. Ref BKB : '+data.no_ref);

	  	            $('#hidden_no_bkb').val(data.skb);
	  	            $('#hidden_no_ref_bkb').val(data.no_ref);

	  	            if($.trim($('#hidden_id_stok_keluar').val()) == ''){
		  	            $('#hidden_id_stok_keluar').val(data.id_stockkeluar);
		  	        }
	  	            $('#hidden_id_keluarbrgitem_'+no).val(data.id_keluarbrgitem);

	  	            $('#btn_simpan_'+no).css('display','none');
	  	        }
				else{
					alert('Error Save Data');
				  	$('#lbl_status_simpan_'+no).empty();
					$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
				}
        	  }
  	        },
  	        error   : function(request){
  	          alert('Error Save Data : '+request.responseText);
  	            
  	          $('#lbl_status_simpan_'+no).empty();
  	          $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
  	          
  	          if($.trim($('#hidden_no_bkb').val()) == ''){
  	            $('#lbl_spp_status').empty();
  	            $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
  	          }
  	        }
  	    });
  	}

  	function ubahRinci(no){
		$('.div_form_1').find('input,textarea').attr('readonly','');
		$('.div_form_1').find('select').attr('disabled','');
        
        // $('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_account_beban_'+no+',#txt_barang_'+no).attr('readonly','');
        // $('#tableRinciBKB tbody #tr_'+no+' td').find('select,#txt_account_beban_'+no+',#txt_barang_'+no).attr('disabled','');

  		$('.div_form_1').find('input,textarea').not('#txt_tgl_bkb').removeAttr('readonly');
  		$('.div_form_1').find('select').removeAttr('disabled');
  		$('.div_form_1').find('#txt_tgl_bkb').removeAttr('disabled');

        $('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_account_beban_'+no+',#txt_barang_'+no).removeAttr('readonly');
        $('#tableRinciBKB tbody #tr_'+no+' td').find('select,#txt_account_beban_'+no+',#txt_barang_'+no).removeAttr('disabled');
        $('#tableRinciBKB tbody #tr_'+no+' td').find('#btn_simpan_'+no).attr('readonly','');

	    $('#lbl_status_simpan_'+no).empty();
	    $('#btn_ubah_'+no).css('display','none');
	    $('#btn_update_'+no).css('display','block');
	    $('#btn_cancel_update_'+no).css('display','block');
	    $('#btn_hapus_'+no).attr('disabled','');

	    $('#hidden_proses_status_'+no).empty();
	    $('#hidden_proses_status_'+no).val('update');
	}

  	function updateRinci(no){
  		var isValid = true;
  	    $('#cmb_tm_tbm_'+no
  	    	+',#cmb_afd_unit_'+no
  	    	// +',#cmb_blok_sub_'+no
  	    	+',#cmb_tahun_tanam_'+no
  	    	+',#cmb_bahan_'+no
  	    	+',#txt_account_beban_'+no
  	    	+',#hidden_no_acc_'+no
  	    	+',#hidden_nama_acc_'+no
  	    	+',#txt_barang_'+no
  	    	+',#hidden_kode_brg_'+no
  	    	+',#hidden_nama_barang_'+no
  	    	+',#txt_qty_diminta_'+no
  	    	+',#hidden_stok_tgl_ini_'+no
  	    	+',#hidden_satuan_'+no
  	    	+',#txt_qty_disetujui_'+no
  	    	+',#txt_ket_rinci_'+no).each(function (e) {
  	    		// console.log($(this).val());
  	        if ($.trim($(this).val()) == '') {
  	            isValid = false;
  	            validasi($(this).attr("id"),no);
  	        }
  	        else {
				if($(this).attr('id') == 'hidden_kode_brg_'+no){
					$('#lbl_kode_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_kode_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_kode_barang_'+no).next().remove();
						$('#lbl_kode_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_brg_'+no){
					$('#lbl_nama_brg_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_brg_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_brg_'+no).next().remove();
						$('#lbl_nama_brg_'+no).next().remove();
					}	
  	            }
  	            else if($(this).attr('id') == 'hidden_stok_'+no){
					$('#lbl_stok_'+no).css({
					  "background": ""
					});
					if($('#lbl_stok_'+no).next().is('br#br_'+no)){
						$('#lbl_stok_'+no).next().remove();
						$('#lbl_stok_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_satuan_brg_'+no){
					$('#lbl_satuan_brg_'+no).css({
					  "background": ""
					});
					if($('#lbl_satuan_brg_'+no).next().is('br#br_'+no)){
					$('#lbl_satuan_brg_'+no).next().remove();
					$('#lbl_satuan_brg_'+no).next().remove();
					}
  	            }
  	            else{
					$(this).css({
					  "background": ""
					});
					if($(this).next().is('br#br_'+no)){
					$(this).next().remove();
					$(this).next().remove();
					}
  	          	}
  	        }
  	    });
	    if (isValid == true){
	    	if($('#txt_qty_diminta_'+no).val() != $('#txt_qty_disetujui_'+no).val()){
  	    		var confirm = window.confirm("Qty dikeluarkan tidak sama dengan qty yang disetujui. Apakah Anda yakin ?");
  	    		if(confirm){
  	    			updateData(no);
  	    		}
  	    	}
  	    	else {
  	    		updateData(no);
  	    	}
	    }
	    // console.log(isValid); 
	}

	function updateData(no){
		var form_data = new FormData();

		form_data.append('txt_diberikan_kpd',$('#txt_diberikan_kpd').val());  	  
		form_data.append('txt_untuk_keperluan',$('#txt_untuk_keperluan').val());  	  
		form_data.append('txt_tgl_bkb',$('#txt_tgl_bkb').val());  	  
		form_data.append('txt_no_bpb',$('#txt_no_bpb').val());  	  
		form_data.append('cmb_bagian',$('#cmb_bagian :selected').text());
		form_data.append('cmb_alokasi_est',$('#cmb_alokasi_est').val());

		form_data.append('cmb_tm_tbm',$('#cmb_tm_tbm_'+no).val()); 
		form_data.append('cmb_afd_unit',$('#cmb_afd_unit_'+no).val()); 
		form_data.append('cmb_blok_sub',$('#cmb_blok_sub_'+no).val()); 
		form_data.append('cmb_tahun_tanam',$('#cmb_tahun_tanam_'+no).val()); 
		form_data.append('cmb_bahan',$('#cmb_bahan_'+no).val()); 
		
		form_data.append('hidden_no_acc',$('#hidden_no_acc_'+no).val()); 
		form_data.append('hidden_nama_acc',$('#hidden_nama_acc_'+no).val()); 
		form_data.append('hidden_kode_barang',$('#hidden_kode_barang_'+no).val()); 
		form_data.append('hidden_nama_barang',$('#hidden_nama_barang_'+no).val());
		form_data.append('hidden_grup_barang',$('#hidden_grup_barang_'+no).val());
		form_data.append('hidden_stok_tgl_ini',$('#hidden_stok_tgl_ini_'+no).val()); 
		form_data.append('hidden_satuan',$('#hidden_satuan_'+no).val()); 
		
		form_data.append('txt_qty_diminta',$('#txt_qty_diminta_'+no).val()); 
		form_data.append('txt_qty_disetujui',$('#txt_qty_disetujui_'+no).val()); 
		form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());
		form_data.append('hidden_id_keluarbrgitem',$('#hidden_id_keluarbrgitem_'+no).val());

		form_data.append('hidden_no_bkb',$('#hidden_no_bkb').val());
		form_data.append('hidden_id_stok_keluar',$('#hidden_id_stok_keluar').val());
		form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());
	  
	  	$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bkb/ubah_rinci_bkb'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	          $('#lbl_status_simpan_'+no).empty();
	          $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Update</label>');
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	        	$('.div_form_1').find('input,textarea').attr('readonly','');
    	  		$('.div_form_1').find('select').attr('disabled','');
	  	            
	  	        $('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_account_beban_'+no+',#txt_barang_'+no).attr('readonly','');
  	            $('#tableRinciBKB tbody #tr_'+no+' td').find('select,#txt_account_beban_'+no+',#txt_barang_'+no).attr('disabled','');

  	            $('#lbl_status_simpan_'+no).empty();
	          	$('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil diubah</label>');

  	            $('#btn_ubah_'+no).css('display','block');
				$('#btn_update_'+no).css('display','none');
				$('#btn_cancel_update_'+no).css('display','none');
				$('#btn_hapus_'+no).removeAttr('disabled');

				$('#hidden_proses_status_'+no).empty();
	          	$('#hidden_proses_status_'+no).val('');
	        },
	        error   : function(request){
	          alert('Error Update Data : '+request.responseText);

	          $('#lbl_status_simpan_'+no).empty();
	          $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
	        }
	    });
	}






















	function pilihModalDataPO(){
		$('#modalDataPO').modal('show');
		tableDataPO();
	}

	function tableDataPO(){
		$('#tableDetailPO').DataTable().destroy();
    	$('#tableDetailPO').DataTable({
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
          	  "url"         : "<?php echo site_url('bkb/list_po');?>",
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
			    { "width": "20%" },
			    { "width": null },
			 ],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableDetailPO tr').each(function() {
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

	$('#tableDetailPO tbody').on('click', 'tr', function () {
  		var dataClick = $('#tableDetailPO').DataTable().row( this ).data();
        var no_ref_po = dataClick[2];
        var no_po = dataClick[3];
        
        $.ajax({
          	type    : "POST",
          	url     : "<?php echo site_url('bkb/get_detail_po'); ?>",
          	dataType  : "JSON",
          	beforeSend: function(){
          	},
          	cache   : false,
          	// contentType : false,
          	// processData : false,
          
          	data    : {'no_po': no_po, 'no_ref_po': no_ref_po},
          	success: function(data){
          		var tglpo = new Date(data[0].tglpo);

          		$('#txt_no_po').val(data[0].nopotxt);
            	$('#txt_ref_po').val(data[0].noreftxt);
            	$('#txt_kd_supplier').val(data[0].kode_supply);
            	$('#txt_supplier').val(data[0].nama_supply);

            	$('#txt_tgl_po').val(dateToMDY(tglpo));
            	$('#modalDataPO').modal('hide');
          	},
        	error   : function(request){
            	alert(request.responseText);
        	}
        })
	})

	// function pilihModalListBarang(row){
	// 	$('#modalListBarang').modal('show');
	// 	tableListBarang();
	// 	$('#hidden_no_row').val(row);
	// }

	// function tableListBarang(){
	// 	var no_po = $('#txt_no_po').val();
	// 	var no_ref_po = $('#txt_ref_po').val();
	// 	$('#tableListBarang').DataTable().destroy();
 //    	$('#tableListBarang').DataTable({
 //      		"paging"          : true,
	// 		"scrollY"         : false,
	// 		"scrollX"         : true,
	// 		"searching"       : true,
	// 		"select"          : true,
	// 		"bLengthChange"   : true,
	// 		"scrollCollapse"  : true,
	// 		"bPaginate"       : true,
	// 		"bInfo"           : true,
	// 		"bSort"           : false,
	// 		"processing"      : true,
	// 		"serverSide"      : true,
	// 		"order"           : [],
	// 		"fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
 //          	},
 //          	"ajax"            : {
 //          	  "url"         : "<?php echo site_url('bkb/get_list_barang');?>",
 //          	  "type"        : "POST",
 //          	  "data"        : {'no_po':no_po,'no_ref_po':no_ref_po},
 //          	  "error"       : function(request){
 //          	    alert(request.responseText);
 //          	  }
 //          	},
	// 		"columnDefs"    : [
	// 			{
	// 			  	"targets"   	 : [],
	// 			  	"orderable" 	 : false,
	// 			},
	// 		],
	// 		"select" 		: {
 //            	"style"		: "multi",
 //        	},
 //          	"drawCallback": function(settings) {
	//           	$('#tableListBarang tr').each(function() {
	//             	var Cell = $(this).find('td');

	// 	        	Cell.parent().on('mouseover', Cell, function() {
	// 	          		Cell.parent().css('background-color', '#26b99a');
	// 	          		Cell.parent().css('color', '#ffffff');

	// 		        	Cell.parent().bind("mouseout", function() {
	// 	    	        	Cell.parent().css('background-color', '');
	// 	        	    	Cell.parent().css('color', '#73879c');
	// 	          		});
	// 	        	});
	//       		});
 //          	},
 //      	});
	// }

	// function pilihItem(){
	// 	var row = $('#hidden_no_row').val();
 //  		var rowcollection = $('#tableListBarang').DataTable().rows({selected:true}).data().toArray();
 //  		console.log(rowcollection.length);
 //  		$.each(rowcollection,function(index,elem){
 //  			tambah_row(row);
 //  			row++;

 //  			$('#txt_kode_barang_'+row).val(rowcollection[index][1]);
 //        	$('#txt_nama_brg_'+row).val(rowcollection[index][2]);
 //        	$('#txt_qty_'+row).val(rowcollection[index][3]);
 //        	$('#txt_satuan_'+row).val(rowcollection[index][4]);
 //        	$('#txt_ket_rinci_'+row).val(rowcollection[index][5]);
 //    	})
 //    	$('#modalListBarang').modal('hide');
 //  	}

	function pilihModalBarang(row){
		$('#modalBarang').modal('show');
		tableBarang();
		$('#hidden_no_row_barang').val(row);
	}

	function tableBarang(){
  		var no_po = $('#txt_no_po').val();
		var no_ref_po = $('#txt_ref_po').val();

		$('#tableBarang').DataTable().destroy();
    	$('#tableBarang').DataTable({
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
          	  "url"         : "<?php echo site_url('bkb/get_list_barang');?>",
          	  "type"        : "POST",
          	  "data"        : {'no_po':no_po,'no_ref_po':no_ref_po},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
          	"columns"		: [
          		{"width":"5%"},
          		{"width":"20%"},
          		{"width":"30%"},
          		{"width":"10%"},
          		{"width":"10%"},
          		{"width":"50%"},
          	],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableBarang tr').each(function() {
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

   $('#tableBarang tbody').on('click', 'tr', function () {
   		var dataClick = $('#tableBarang').DataTable().row( this ).data();
        var no_row = $('#hidden_no_row_barang').val();
        
        $('#txt_kode_barang_'+no_row).val(dataClick[1]);
        $('#txt_nama_brg_'+no_row).val(dataClick[2]);
        $('#txt_qty_'+no_row).val(dataClick[3]);
        $('#txt_satuan_'+no_row).val(dataClick[4]);
        $('#txt_ket_rinci_'+no_row).val(dataClick[5]);

        $('#modalBarang').modal('hide');
   })

	function hapus_row(id){
		var rowCount = $("#tableRinciBKB td").closest("tr").length;
		if (rowCount != 1){
			$('#tr_'+id).remove();
		}
		else{
			swal('Tidak Bisa dihapus, item PO tinggal 1');
		}
  	}

  	function cancelUpdate(no){
     	$('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_bkb,#txt_tgl_po').attr('readonly','');
		$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_bkb,#txt_tgl_po').attr('disabled','');

		$('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
		$('#tableRinciBKB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

		$('#btn_cancelUpdate_ubah_'+no).css('display','block');
		$('#btn_update_'+no).css('display','none');
		$('#btn_cancel_update_'+no).css('display','none');
		$('#btn_hapus_'+no).removeAttr('disabled');

		$('#hidden_proses_status_'+no).empty();
		$('#hidden_proses_status_'+no).val('');
		getPreviousData(no);
    }

    function getPreviousData(no){
      var form_data = new FormData();
      
      form_data.append('hidden_no_bkb',$('#hidden_no_bkb').val());
      form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());
      form_data.append('hidden_id_stok_keluar',$('#hidden_id_stok_keluar').val());
      form_data.append('hidden_id_keluarbrgitem',$('#hidden_id_keluarbrgitem_'+no).val());

      $.ajax({
          type    : "POST",
          url     : "<?php echo site_url('bkb/cancel_ubah_rinci'); ?>",
          dataType  : "JSON",
          beforeSend: function(){
            $('#lbl_status_simpan_'+no).empty();
            $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
          },
          cache   : false,
          contentType : false,
          processData : false,
          
          data    : form_data,
          success: function(data){
          	// console.log(data);
			var tgl_bkb = new Date(data.data_stokkeluar.tgl);
          	
          	$('#hidden_no_bkb').val(data.data_stokkeluar.SKBTXT);
          	$('#hidden_id_stok_keluar').val(data.data_stokkeluar.id);
          	$('#hidden_no_ref_bkb').val(data.data_stokkeluar.NO_REF);

          	$('#hidden_no_acc_'+no).val(data.data_keluarbrgitem.kodesubtxt);
          	$('#hidden_nama_acc_'+no).val(data.data_keluarbrgitem.ketsub);
          	$('#hidden_kode_barang_'+no).val(data.data_keluarbrgitem.kodebartxt);
          	$('#hidden_nama_barang_'+no).val(data.data_keluarbrgitem.nabar);
          	$('#hidden_grup_barang_'+no).val(data.data_keluarbrgitem.grp);
          	// $('#hidden_stok_tgl_ini_'+no).val(data.data_keluarbrgitem.); //
          	$('#hidden_satuan_'+no).val(data.data_keluarbrgitem.satuan);
          	$('#hidden_id_keluarbrgitem_'+no).val(data.data_keluarbrgitem.id);

          	$('#txt_diberikan_kpd').val(data.data_stokkeluar.kpd);
          	$('#txt_untuk_keperluan').val(data.data_stokkeluar.keperluan);
          	$('#cmb_bagian').val(data.data_stokkeluar.bag);
          	$('#txt_tgl_bkb').val(dateToMDY(tgl_bkb));
          	$('#txt_no_bpb').val(data.data_stokkeluar.nobpb);
          	$('#cmb_alokasi_est').val(data.data_stokkeluar.alokasi);
          	
          	// $('#cmb_tm_tbm_'+no).val(data.data_keluarbrgitem.); //
          	$('#cmb_afd_unit_'+no).val(data.data_keluarbrgitem.afd);
          	$('#cmb_blok_sub_'+no).val(data.data_keluarbrgitem.blok);
          	// $('#cmb_tahun_tanam_'+no).val(data.data_keluarbrgitem.); //
          	$('#cmb_bahan_'+no).val(data.data_keluarbrgitem.kodebebantxt);
          	// $('#txt_account_beban_'+no).val(data.data_keluarbrgitem.); //
          	// $('#txt_barang_'+no).val(data.data_keluarbrgitem.); //
          	$('#txt_qty_diminta_'+no).val(data.data_keluarbrgitem.qty);
          	$('#txt_qty_disetujui_'+no).val(data.data_keluarbrgitem.qty2);
          	$('#txt_ket_rinci_'+no).val(data.data_keluarbrgitem.ket);

			$('#lbl_status_simpan_'+no).empty();
			$('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');

			$('#btn_ubah_'+no).css('display','block');
			$('#btn_update_'+no).css('display','none');
			$('#btn_cancel_update_'+no).css('display','none');
			$('#btn_hapus_'+no).removeAttr('disabled');

			$('#hidden_proses_status_'+no).empty();
			$('#hidden_proses_status_'+no).val('');
          },
          error   : function(request){
            alert('Error Get Data : '+request.responseText);
          }
      });   
    }

    function dateToMDY(date) {
		var d = date.getDate();
		var m = date.getMonth() + 1;
		var y = date.getFullYear();
		// return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
		return (m<=9 ? '0' + m : m) + '/' + (d <= 9 ? '0' + d : d) + '/' + y;
  	}

  	function hapusRinci(no){
  	  $('#hidden_no_delete').val(no);
  	  $('#modalKonfirmasiHapus').modal('show');
  	}

  	function deleteData(){
  	  var no = $('#hidden_no_delete').val();
  	  $('#modalKonfirmasiHapus').modal('hide');

  	  var rowCount = $("#tableRinciBKB td").closest("tr").length;
  	      
  	  if (rowCount != 1){
  	    var form_data = new FormData();
  	    
  	    // form_data.append('hidden_id_po',$('#hidden_id_po_'+no).val());
  	    form_data.append('hidden_id_stok_keluar',$('#hidden_id_stok_keluar').val());
  	    form_data.append('hidden_id_masuk_item',$('#hidden_id_masuk_item_'+no).val());
  	    
  	    $.ajax({
			type    : "POST",
			url     : "<?php echo site_url('bkb/hapus_rinci'); ?>",
			dataType  : "JSON",
			beforeSend: function() {

			},
			cache   : false,
			contentType : false,
			processData : false,

			data    : form_data,
			success: function(data){
				$('#tr_'+no).remove();
				alert('Data Berhasil dihapus');
				// $('#btn_konfirmasi_terima_'+index).removeAttr('disabled');
				// $('.modal-success').modal('show');
			},
			error   : function(request){
				alert(request.responseText);
			}
  	    });
  	  }
  	  else{
  	    swal('Tidak Bisa dihapus, item PO tinggal 1');
  	  }
  	}

  	function modalBPB(e){
  		// alert('oioioi');
  		// console.log(e.keyCode);
  		if(e.keyCode == 13) {
			// $('#hidden_no_row_barang').val(no_row);
			$('#modalBPB').modal('show');
			$('#tableBPB').DataTable().destroy();
			// listBPB(no_row);
			listBPB();
  		}
	}

	function listBPB(){
		$('#tableBPB').DataTable().destroy();
		$('#tableBPB').DataTable({
		  // "fixedHeader"		: true,
      	  "paging"	        : true,
      	  "scrollY"         : false,
          "scrollX"         : false,
          "searching"       : true,
          "select"          : true,
          "bLengthChange"   : true,
          "scrollCollapse"  : true,
          "bPaginate"       : true,
          "bInfo"           : true,
          "bSort"           : false,
          "processing"      : true,
          "serverSide"      : true,
          "stateSave"		: true,
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('bkb/list_bpb');?>",
            "type"        : "POST",
            "data"        : {},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
          "columns": [
		    { "width": "3%" },
		    { "width": "5%" },
		    { "width": "10%" },
		    { "width": "20%" },
		    { "width": "20%" },
		    { "width": "5%" }
		  ],
          "columnDefs"    : [
            {
              "targets"   : [],
              "orderable" : false,
              // "width"	  : 200,
              // "targets"	  : 0,
            },
          ],
          "drawCallback": function(settings) {
      		$('#tableBPB tr').each(function() {
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

	$('#tableBPB tbody').on('click', 'tr', function () {
  		var dataClick = $('#tableBPB').DataTable().row( this ).data();
        var nobpb = dataClick[1];

        // $('#lbl_no_acc_'+row).html(no_coa);
        // $('#lbl_nama_acc_'+row).html(nama_account);
        // $('#txt_account_beban_'+row).val(no_coa);

        // $('#hidden_no_acc_'+row).val(no_coa);
        // $('#hidden_nama_acc_'+row).val(nama_account);

        $.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('bkb/get_bpbitem'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'nobpb': nobpb},
	        success: function(data){
	        	// console.log(data);
	        	// var arr_bpb = new Array();
	        	// var arr_bpbitem = new Array();
	        	var arr_bpb = data.data_bpb;
	        	var arr_bpbitem = data.data_bpbitem;

	        	// arr_bpb.push(data.data_bpb);
	        	// arr_bpbitem.push(data.data_bpbitem);
	        	
	    //     	$.each(data, function(index) {
					// var afd = data[index].afd;
					// var alasan_batal = data[index].alasan_batal;
					// var alokasi = data[index].alokasi;
					// var batal = data[index].batal;
					// var blok = data[index].blok;
					// var cetak = data[index].cetak;
					// var grp = data[index].grp;
					// var id = data[index].id;
					// var jaminput = data[index].jaminput;
					// var ket = data[index].ket;
					// var ketbeban = data[index].ketbeban;
					// var ketsub = data[index].ketsub;
					// var kodebar = data[index].kodebar;
					// var kodebebantxt = data[index].kodebebantxt;
					// var kodept = data[index].kodept;
					// var kodesubtxt = data[index].kodesubtxt;
					// var nabar = data[index].nabar;
					// var noadjust = data[index].noadjust;
					// var nobpb = data[index].nobpb;
					// var periode = data[index].periode;
					// var posting = data[index].posting;
					// var pt = data[index].pt;
					// var qty = data[index].qty;
					// var satuan = data[index].satuan
					// var tglbpb = data[index].tglbpb;
					// var tglinput = data[index].tglinput;
					// var user = data[index].user;
	        		

	    //     		// get_row_bpbitem(afd, alasan_batal, alokasi, batal, blok, cetak, grp, id, jaminput, ket, ketbeban, ketsub, kodebar, kodebebantxt, kodept, kodesubtxt, nabar, noadjust, nobpb, periode, posting, pt, qty, satuan, tglbpb, tglinput, user);
	    //     	});

	        	get_row_bpbitem(arr_bpb, arr_bpbitem);
	        	$('#modalBPB').modal('hide');
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	})

	// function get_row_bpbitem(alokasi,grp,idbpb,ket,kodebar,nabar,nobpb,qty,satuan){
	// function get_row_bpbitem(afd, alasan_batal, alokasi, batal, blok, cetak, grp, id, jaminput, ket, ketbeban, ketsub, kodebar, kodebebantxt, kodept, kodesubtxt, nabar, noadjust, nobpb, periode, posting, pt, qty, satuan, tglbpb, tglinput, user){
	function get_row_bpbitem(arr_bpb, arr_bpbitem){
		console.log(arr_bpb,arr_bpbitem);

		var alasan_batal = arr_bpb.alasan_batal;
		var alokasi = arr_bpb.alokasi;
		var bag = arr_bpb.bag;
		var batal = arr_bpb.batal;
		var cetak = arr_bpb.cetak;
		var id = arr_bpb.id;
		var jaminput = arr_bpb.jaminput;
		var keperluan = arr_bpb.keperluan;
		var kode = arr_bpb.kode;
		var nobkb_ro = arr_bpb.nobkb_ro;
		var nobpb = arr_bpb.nobpb;
		var nopo_ro = arr_bpb.nopo_ro;
		var periode = arr_bpb.periode;
		var posting = arr_bpb.posting;
		var pt = arr_bpb.pt;
		var tglbpb = arr_bpb.tglbpb;
		var tglinput = arr_bpb.tglinput;
		var user = arr_bpb.user;

		$('#txt_no_bpb').val(nobpb);
		$('#txt_diberikan_kpd').val(nobpb);
		$('#txt_untuk_keperluan').val(keperluan);
		$('#cmb_alokasi_est').val(alokasi);

		// $.ajax({
	 //        type    : "POST",
	 //        url     : "<?php echo site_url('bkb/cari_dept'); ?>",
	 //        dataType  : "JSON",
	 //        beforeSend: function(){
	 //        },
	 //        cache   : false,
	 //        // contentType : false,
	 //        // processData : false,
	        
	 //        data    : '',
	 //        success: function(data){
	 //        	$.each(data, function(index) {
	 //        		var opsi_cmb_bagian = '<option value="'+data[index].kode+'">'+data[index].nama+'</option>';
	 //          		$('#cmb_bagian').append(opsi_cmb_bagian);
		// 		});
	 //        },
	 //        error   : function(request){
	 //          alert(request.responseText);
	 //        }
	 //    });
		// $('#cmb_bagian').html(bag);
		var cmb_bagian = document.getElementById('cmb_bagian');
		for (var i = 0; i < cmb_bagian.options.length; i++) {
		    if (cmb_bagian.options[i].text === bag) {
		        cmb_bagian.selectedIndex = i;
		    }
		}
		// $('#cmb_bagian :selected').text(bag);

		$.each(arr_bpbitem, function(index) {
			var afd = arr_bpbitem[index].afd;
			var alasan_batal = arr_bpbitem[index].alasan_batal;
			var alokasi = arr_bpbitem[index].alokasi;
			var batal = arr_bpbitem[index].batal;
			var blok = arr_bpbitem[index].blok;
			var cetak = arr_bpbitem[index].cetak;
			var grp = arr_bpbitem[index].grp;
			var id = arr_bpbitem[index].id;
			var jaminput = arr_bpbitem[index].jaminput;
			var ket = arr_bpbitem[index].ket;
			var ketbeban = arr_bpbitem[index].ketbeban;
			var ketsub = arr_bpbitem[index].ketsub;
			var kodebar = arr_bpbitem[index].kodebar;
			var kodebebantxt = arr_bpbitem[index].kodebebantxt;
			var kodept = arr_bpbitem[index].kodept;
			var kodesubtxt = arr_bpbitem[index].kodesubtxt;
			var nabar = arr_bpbitem[index].nabar;
			var noadjust = arr_bpbitem[index].noadjust;
			var nobpb = arr_bpbitem[index].nobpb;
			var periode = arr_bpbitem[index].periode;
			var posting = arr_bpbitem[index].posting;
			var pt = arr_bpbitem[index].pt;
			var qty = arr_bpbitem[index].qty;
			var qty_diminta = arr_bpbitem[index].qty_disetujui;
			var satuan = arr_bpbitem[index].satuan
			var tglbpb = arr_bpbitem[index].tglbpb;
			var tglinput = arr_bpbitem[index].tglinput;
			var user = arr_bpbitem[index].user;

			var row = $('#hidden_no_table').val();
			var tr_buka = '<tr id="tr_'+row+'">';
			var td_col_1 = '<td>'
								+'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
								+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+row+')"></button><br />'
								+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+row+')"></button>'
							+'</td>';
			var form_buka =	'<form id="form_rinci_'+row+'" name="form_rinci_'+row+'" method="POST" action="javascript:;">';
			var td_col_2 = '<td>'
								+'<!-- TM/TBM -->'
								+'<select class="form-control set_strip_cmb cmb_tm_tbm" id="cmb_tm_tbm_'+row+'" name="cmb_tm_tbm_'+row+'" onchange="cmb_afd_unit('+row+')" disabled>'
									// +'<option value=""></option>'
									// +'<option value="TM">TM</option>'
									// +'<option value="TBM">TBM</option>'
									// +'<option value="LANDCLEARING">LANDCLEARING</option>'
									// +'<option value="PEMBIBITAN">PEMBIBITAN</option>'
								+'</select>'
							+'</td>';
			var td_col_3 = '<td>'
								+'<!-- AFD/UNIT -->'
								+'<select class="form-control set_strip_cmb" id="cmb_afd_unit_'+row+'" name="cmb_afd_unit_'+row+'" onchange="cmb_blok_sub('+row+')" disabled>'
									+'<option value=""></option>'
									+'<option value="01">01</option>'
									+'<option value="02">02</option>'
									+'<option value="03">03</option>'
									+'<option value="04">04</option>'
									+'<option value="05">05</option>'
									+'<option value="06">06</option>'
									+'<option value="07">07</option>'
									+'<option value="08">08</option>'
									+'<option value="09">09</option>'
									+'<option value="10">10</option>'
									+'<option value="11">11</option>'
									+'<option value="12">12</option>'
									+'<option value="14">14</option>'
									+'<option value="15">15</option>'
									+'<option value="16">16</option>'
									+'<option value="17">17</option>'
									+'<option value="99">99</option>'
								+'</select>'
							+'</td>';
			var td_col_4 = '<td>'
								+'<!-- BLOK/SUB -->'
								+'<select class="form-control set_strip_cmb" id="cmb_blok_sub_'+row+'" name="cmb_blok_sub_'+row+'" onchange="cmb_tahun_tanam('+row+')" disabled>'
									+'<option value=""></option>'
								+'</select>'
							+'</td>';
			var td_col_5 = '<td>'
								+'<!-- Tahun Tanam -->'
								+'<select class="form-control set_strip_cmb" id="cmb_tahun_tanam_'+row+'" name="cmb_tahun_tanam_'+row+'" onchange="cmb_bahan('+row+')" disabled>'
									+'<option value=""></option>'
								+'</select>'
							+'</td>';
			var td_col_6 = '<td>'
								+'<!-- Bahan -->'
								+'<select class="form-control set_strip_cmb" id="cmb_bahan_'+row+'" name="cmb_bahan_'+row+'" disabled>'
									+'<option value=""></option>'
								+'</select>'
							+'</td>';

			// $('#txt_account_beban_'+n).val(data.data_keluarbrgitem[index].kodesubtxt);
			// $('#txt_barang_'+n).val(data.data_keluarbrgitem[index].nabar);
			// $('#txt_qty_diminta_'+n).val(data.data_keluarbrgitem[index].qty);
			// $('#txt_qty_disetujui_'+n).val(data.data_keluarbrgitem[index].qty2);
			// $('#txt_ket_rinci_'+n).val(data.data_keluarbrgitem[index].ket);

			// $('#lbl_no_acc_'+n).html(data.data_keluarbrgitem[index].kodesubtxt);
			// $('#lbl_nama_acc_'+n).html(data.data_keluarbrgitem[index].ketsub);
			// $('#lbl_kode_barang_'+n).html(data.data_keluarbrgitem[index].kodebartxt);
			// $('#lbl_nama_barang_'+n).html(data.data_keluarbrgitem[index].nabar);
			
			// $('#hidden_no_acc_'+n).val(data.data_keluarbrgitem[index].kodesubtxt);
			// $('#hidden_nama_acc_'+n).val(data.data_keluarbrgitem[index].ketsub);

			// $('#hidden_kode_barang_'+n).val(data.data_keluarbrgitem[index].kodebartxt);
			// $('#hidden_nama_barang_'+n).val(data.data_keluarbrgitem[index].nabar);
			// $('#hidden_grup_barang_'+n).val(data.data_keluarbrgitem[index].grp);

			// $('#b_satuan_'+n).html(data.data_keluarbrgitem[index].satuan);
			// $('#hidden_satuan_'+n).val(data.data_keluarbrgitem[index].satuan);

			var td_col_7 = '<td>'
								+'<!-- Account Beban -->'
								+'<input type="text" class="form-control" id="txt_account_beban_'+row+'" name="txt_account_beban_'+row+'" placeholder="Account Beban" onfocus="pilihModalAccBeban('+row+')" value="'+kodesubtxt+'" readonly>'
								+'<label class="control-label" id="lbl_no_acc_'+row+'">'+kodesubtxt+'</label>'
								+'<label class="control-label" id="lbl_nama_acc_'+row+'">'+ketsub+'</label>'
								+'<input type="hidden" id="hidden_no_acc_'+row+'" name="hidden_no_acc_'+row+'" value="'+kodesubtxt+'">'
								+'<input type="hidden" id="hidden_nama_acc_'+row+'" name="hidden_nama_acc_'+row+'" value="'+ketsub+'">'
							+'</td>';
			var td_col_8 = '<td>'
								+'<!-- Barang -->'
								+'<input type="text" class="form-control" id="txt_barang_'+row+'" name="txt_barang_'+row+'" onfocus="cari_barang('+row+')" value="'+nabar+'" placeholder="Barang" readonly>'
								+'<label id="lbl_kode_barang_'+row+'">'+kodebar+'</label>'
								+'<label id="lbl_nama_barang_'+row+'">'+nabar+'</label>'
								+'<input type="hidden" id="hidden_kode_barang_'+row+'" name="hidden_kode_barang_'+row+'" value="'+kodebar+'">'
								+'<input type="hidden" id="hidden_nama_barang_'+row+'" name="hidden_nama_barang_'+row+'" value="'+nabar+'">'
								+'<input type="hidden" id="hidden_grup_barang_'+row+'" name="hidden_grup_barang_'+row+'" value="'+grp+'">'
							+'</td>'
			var td_col_9 = '<td>'
								+'<!-- Qty Diminta & Stok di Tgl ini & Satuan -->'
								+'<input type="text" class="form-control currencyduadigit" id="txt_qty_diminta_'+row+'" name="txt_qty_diminta_'+row+'" value="'+qty_diminta+'" placeholder="Qty Diminta" readonly>'
								+'<label>Stok di tgl ini. <b id="b_stok_tgl_ini_'+row+'" name="b_stok_tgl_ini_'+row+'"></b></label>'
								+'<label>Satuan : <b id="b_satuan_'+row+'" name="b_satuan_'+row+'">'+satuan+'</b></label>'
								+'<input type="hidden" id="hidden_stok_tgl_ini_'+row+'" name="hidden_stok_tgl_ini_'+row+'">'
								+'<input type="hidden" id="hidden_satuan_'+row+'" name="hidden_satuan_'+row+'" value="'+satuan+'">'
							+'</td>';
			var td_col_10 = '<td>'
								+'<!-- Qty Dikeluarkan -->'
								+'<input type="text" class="form-control currencyduadigit" id="txt_qty_disetujui_'+row+'" name="txt_qty_disetujui_'+row+'" placeholder="Qty Dikeluarkan">'
							+'</td>';
			var td_col_11 = '<td>'
								+'<!-- Keterangan -->'
								+'<textarea class="resizable_textarea form-control" id="txt_ket_rinci_'+row+'" name="txt_ket_rinci_'+row+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+row+')">'+ket+'</textarea>'
								+'<label id="lbl_status_simpan_'+row+'"></label>'
								+'<input type="hidden" id="hidden_id_keluarbrgitem_'+row+'" name="hidden_id_keluarbrgitem_'+row+'">'
							+'</td>';
			var td_col_12 = '<td>'
								+'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+row+'" name="btn_simpan_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+row+')"></button>'
								+'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+row+'" name="btn_ubah_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+row+')"></button>'
								+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+row+'" name="btn_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+row+')"></button>'
								+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+row+'" name="btn_cancel_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+row+')"></button>'
								+'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+row+'" name="btn_hapus_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+row+')"></button>'
							+'</td>';
			var form_tutup = '</form>';
			var tr_tutup = '</tr>';

			$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+td_col_8+td_col_9+td_col_10+td_col_11+td_col_12+form_tutup+tr_tutup);

			var opsi_cmb_bahan = '<option value="'+kodebebantxt+'">'+kodebebantxt+'</option>';
	        		$('#cmb_bahan_'+row).empty();
	        		$('#cmb_bahan_'+row).append(opsi_cmb_bahan);

	        // var opsi_cmb_blok_sub = '<option value="'+data.data_bpbitem[index].blok+'">'+data.data_bpbitem[index].blok+'</option>';
	        // 		$('#cmb_blok_sub_'+n).empty();
	        // 		$('#cmb_blok_sub_'+n).append(opsi_cmb_blok_sub);

			cek_bagian(row);
			var frombpb = 'frombpb';
			sum_stok(kodebar, row, frombpb);

			get_all_cmb(kodebebantxt,row);

			var cmb_tm_tbm = document.getElementById('cmb_tm_tbm_'+row);
			for (var i = 0; i < cmb_tm_tbm.options.length; i++) {
			    if (cmb_tm_tbm.options[i].text === bag) {
			        cmb_tm_tbm.selectedIndex = i;
			    }
			}

			$('html, body').animate({
		        scrollTop: $("#tr_"+row).offset().top
		    }, 2000);

		    row++;
			$('#hidden_no_table').val(row);

	    });
		$('.currencyduadigit').number(true, 2);
	}

</script>