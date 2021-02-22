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
					<h2>Retur BKB <small>Retur Bukti Keluar Barang</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<a href="<?php echo site_url('retur_bkb/input'); ?>" class="btn btn-sm btn-info" id="a_retur_bkb_baru"><span class="fa fa-plus"></span> Retur BKB Baru</a>
					<div id="" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group div_form_1">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No Retur <span class="required">*</span>
											</label>
											<label class="col-md-4 col-sm-6 col-xs-12" id="lbl_no_ret">-</label>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No BKB <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_bkb" name="txt_no_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" onfocus="getListBKB()" onkeypress="getEventBKB(event,this.value)" placeholder="No BKB">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No Ref BKB <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_ref_bkb" name="txt_no_ref_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" readonly="" placeholder="No Ref BKB">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Retur <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_tgl_retur" name="txt_tgl_retur" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl Retur" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No BA <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_ba" name="txt_no_ba" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No BA">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<textarea class="resizable_textarea form-control col-md-2 col-xs-12" id="txt_keterangan" name="txt_keterangan" placeholder="Keterangan"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x_content div_form_2">
					<input type="hidden" id="hidden_kode_pt" name="hidden_kode_pt">
					<input type="hidden" id="hidden_nama_pt" name="hidden_nama_pt">
					<input type="hidden" id="hidden_acc_hutang_usaha" name="hidden_acc_hutang_usaha">
					<input type="hidden" id="hidden_bagian" name="hidden_bagian">
					<input type="hidden" id="hidden_id_retskb" name="hidden_id_retskb">
					<input type="hidden" id="hidden_no_ret" name="hidden_no_ret">

					<label id="lbl_nama_pt" name="lbl_nama_pt">PT : ...</label><br>
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="tableRinciReturBKB" width="150%">
							<thead>
								<tr>
									<th width="3%"></th>
									<th width="25%">Barang</th>
									<th width="10%">Afd/Unit</th>
									<th width="8%">Blok/Sub</th>
									<th width="20%">Kode Beban</th>
									<th width="25%">Sub Beban</th>
									<th width="8%">Qty Retur</th>
									<!-- <th width="8%">Qty Dikeluarkan</th> -->
									<th width="25%">Keterangan</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="tbody_rincian" name="tbody_rincian">
								
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br />
	<br />

	<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true" id="modalPilihCompany">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Pilih Company</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-2">Company :</label>
								<div class="col-md-8">
									<select class="form-control" id="cmb_company">
										<?php 
											foreach ($get_pt as $list_pt) {
										?>
											<option value="<?= $list_pt->kodetxt; ?>"><?= $list_pt->PT; ?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2">Account :</label>
								<div class="col-md-8">
									<select class="form-control" id="cmb_acc_hutang_usaha">
										<option value="<?= $get_acc_hutang_dagang->noac; ?>"><?= $get_acc_hutang_dagang->noac; ?> - <?= $get_acc_hutang_dagang->nama; ?></option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" id="btn_delete" onclick="pilihCompany()" >Pilih</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalListBKB">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Data BKB</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="table-responsive">
								<table id="tableListBKB" class="table table-bordered" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>No</th>
											<th>No. BKB</th>
											<th>No. Ref BKB</th>
											<th>Bagian</th>
											<!-- <th>Type</th> -->
											<!-- <th>Grup</th> -->
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
								<input type="hidden" id="hidden_no_row_barang" name="hidden_no_row_barang">
								<table id="tableListBarang" class="table table-bordered" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>No</th>
											<th>Kode Barang</th>
											<th>Nama Barang</th>
											<th>Grup</th>
											<th>Satuan</th>
											<th>BPB</th>
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
		$('#a_retur_bkb_baru').hide();
		// $('#modalPilihCompany').modal('show');

		// setInterval(function(){
		//   check_form_1();
		// }, 1000);
		var id = <?php echo $this->uri->segment(4) ?>;
		var no_ret = <?php echo $this->uri->segment(3) ?>;

			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('retur_bkb/get_edit_bkb'); ?>",
		        dataType  : "JSON",
		        beforeSend: function(){
		        },
		        cache   : false,
		        // contentType : false,
		        // processData : false,
		        
		        data    : {'id': id, 'no_ret':no_ret},
		        success: function(data){
		        	// console.log(data);        	
		        	$('#lbl_no_ret').html(data.data_retskb.no_ret);
		        	$('#txt_no_bkb').val(data.data_retskb.skb);
		        	$('#txt_no_ref_bkb').val(data.norefbkb);
		        	
		        	var tglretskb = new Date(data.data_retskb.tgl);
		        	$('#txt_tgl_retur').val(dateToMDY(tglretskb));

		        	$('#txt_no_ba').val(data.data_retskb.kpd);
		        	$('#txt_keterangan').val(data.data_retskb.keperluan);

		        	var kodept = data.data_retskb.kode;
		        	var kdpt;
		        	if(kodept < 10){
		        		kdpt = '0'+kodept;
		        	}
		        	else{
		        		kdpt = kodept;
		        	}

		        	$('#hidden_kode_pt').val(kdpt);
		        	$('#hidden_nama_pt').val(data.data_retskb.pt);
		        	// $('#hidden_acc_hutang_usaha').val(data.data_retskb.);
		        	$('#hidden_bagian').val(data.data_retskb.bag);
		        	$('#hidden_id_retskb').val(data.data_retskb.id);
		        	$('#hidden_no_ret').val(data.data_retskb.no_ret);

		        	$('#lbl_nama_pt').html(data.data_retskb.pt);

		  	        $('#hidden_no_table').val(1);

		        	$.each(data.data_retskbitem, function(index) {
		        		// console.log(data);
		        		var n = $('#hidden_no_table').val();

		        		var tr_buka = '<tr id="tr_'+n+'">';
		        		var td_col_1 = '<td>'
		        							+'<input type="hidden" id="hidden_proses_status_'+n+'" name="hidden_proses_status_'+n+'" value="insert">'
		        							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_n" name="btn_tambah_n" onclick="tambah_n('+n+')"></button><br />'
		        							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_n" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_n" name="btn_hapus_n" onclick="hapus_n('+n+')"></button>'
		        						+'</td>';
		        		var form_buka = '<form id="form_rinci_'+n+'" name="form_rinci_'+n+'" method="POST" action="javascript:;">'
		        		var td_col_2 = '<td>'
		        							+'<!-- Barang -->'
		        							+'<input type="text" class="form-control" id="txt_barang_'+n+'" name="txt_barang_'+n+'" onfocus="cari_barang('+n+')" placeholder="Barang">'
		        							+'<label id="lbl_kode_barang_'+n+'"></label>'
		        							+'<label id="lbl_nama_barang_'+n+'"></label>'
		        							+'<label id="lbl_grup_barang_'+n+'">Grup : </label>'
		        							+'<input type="hidden" id="hidden_kode_barang_'+n+'" name="hidden_kode_barang_'+n+'">'
		        							+'<input type="hidden" id="hidden_nama_barang_'+n+'" name="hidden_nama_barang_'+n+'">'
		        							+'<input type="hidden" id="hidden_grup_barang_'+n+'" name="hidden_grup_barang_'+n+'">'
		        						+'</td>';
		        		var td_col_3 = '<td>'
		        							+'<!-- AFD/UNIT -->'
		        							+'<select class="form-control set_strip_cmb" id="cmb_afd_unit_'+n+'" name="cmb_afd_unit_'+n+'" onchange="cmb_blok_sub('+n+')">'
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
		        							+'<select class="form-control set_strip_cmb" id="cmb_blok_sub_'+n+'" name="cmb_blok_sub_'+n+'">'
		        								+'<option value=""></option>'
		        							+'</select>'
		        						+'</td>';
		        		var td_col_5 = '<td>'
		        							+'<!-- Kode Beban -->'
		        							+'<input type="text" class="form-control" id="txt_kode_beban_'+n+'" name="txt_kode_beban_'+n+'" placeholder="Kode Beban" readonly="">'
		        							+'<label class="control-label" id="lbl_ket_beban_'+n+'"></label>'
		        							+'<input type="hidden" id="hidden_ket_beban_'+n+'" name="hidden_ket_beban_'+n+'">'
		        						+'</td>';
		        		var td_col_6 = '<td>'
		        							+'<!-- Account Beban -->'
		        							+'<input type="text" class="form-control" id="txt_account_beban_'+n+'" name="txt_account_beban_'+n+'" placeholder="Sub Beban" readonly="">'
		        							+'<label class="control-label" id="lbl_no_acc_'+n+'"></label>'
		        							+'<label class="control-label" id="lbl_nama_acc_'+n+'"></label>'
		        							+'<input type="hidden" id="hidden_no_acc_'+n+'" name="hidden_no_acc_'+n+'">'
		        							+'<input type="hidden" id="hidden_nama_acc_'+n+'" name="hidden_nama_acc_'+n+'">'
		        						+'</td>';
		        		var td_col_7 = '<td>'
		        							+'<!-- Qty Retur & Stok di Tgl ini & Satuan -->'
		        							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_retur_'+n+'" name="txt_qty_retur_'+n+'" onkeyup="validasiQty(this.value,'+n+')" placeholder="Qty Retur">'
		        							+'<label>Qty BKB : <b id="b_qty_bkb_'+n+'" name="b_qty_bkb_'+n+'"></b> </label>'
		        							+'<label>Sudah Pernah Retur : <b id="b_qty_sdh_pernah_ret_'+n+'" name="b_qty_sdh_pernah_ret_'+n+'"></b> </label>'
		        							+'<label>Stok di tgl ini. <b id="b_stok_tgl_ini_'+n+'" name="b_stok_tgl_ini_'+n+'"></b></label>'
		        							+'<label>Satuan : <b id="b_satuan_'+n+'" name="b_satuan_'+n+'"></b></label>'
		        							+'<input type="hidden" id="hidden_qty_bkb_'+n+'" name="hidden_qty_bkb_'+n+'">'
		        							+'<input type="hidden" id="hidden_qty_sdh_pernah_ret_'+n+'" name="hidden_qty_sdh_pernah_ret_'+n+'">'
		        							+'<input type="hidden" id="hidden_stok_tgl_ini_'+n+'" name="hidden_stok_tgl_ini_'+n+'">'
		        							+'<input type="hidden" id="hidden_satuan_'+n+'" name="hidden_satuan_'+n+'">'
		        						+'</td>';
		        		var td_col_8 = '<td>'
		        							+'<!-- Keterangan -->'
		        							+'<textarea style="width: 112px; height: 69px;" class="resizable_textarea form-control" id="txt_ket_rinci_'+n+'" name="txt_ket_rinci_'+n+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+n+')"></textarea>'
		        							+'<label id="lbl_status_simpan_'+n+'"></label>'
		        							+'<input type="hidden" id="hidden_id_retskbitem_'+n+'" name="hidden_id_retskbitem_'+n+'">'
		        						+'</td>';
		        		var td_col_9 = '<td>'
		        							+'<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+n+'" name="btn_simpan_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+n+')"></button>'
		        							+'<button style="display:block;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+n+'" name="btn_ubah_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+n+')"></button>'
		        							+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+n+'" name="btn_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+n+')"></button>'
		        							// +'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+n+'" name="btn_cancel_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+n+')"></button>'
		        							+'<button style="display:block;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+n+'" name="btn_hapus_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+n+')"></button>'
		        						'</td>'
		        		var form_tutup = '</form>';
		        		var tr_tutup = '</tr>';

		        		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+td_col_8+td_col_9+form_tutup+tr_tutup);

						$('#txt_barang_'+n).val(data.all_detailitembkb[index].nabar);
						$('#lbl_kode_barang_'+n).html(data.all_detailitembkb[index].kodebartxt);
						$('#lbl_nama_barang_'+n).html(data.all_detailitembkb[index].kodebartxt);
						$('#lbl_grup_barang_'+n).html(data.all_detailitembkb[index].kodebartxt);
						
						$('#hidden_kode_barang_'+n).val(data.all_detailitembkb[index].kodebartxt);
						$('#hidden_nama_barang_'+n).val(data.all_detailitembkb[index].nabar);
						$('#hidden_grup_barang_'+n).val(data.all_detailitembkb[index].grp);

						$('#cmb_afd_unit_'+n).val(data.all_detailitembkb[index].afd);

						var blok = data.all_detailitembkb[index].blok;
						cmb_blok_sub(n,blok);

						$('#txt_kode_beban_'+n).val(data.all_detailitembkb[index].kodebebantxt);
						$('#lbl_ket_beban_'+n).html(data.all_detailitembkb[index].ketbeban);
						$('#hidden_ket_beban_'+n).val(data.all_detailitembkb[index].ketbeban);

						$('#txt_account_beban_'+n).val(data.all_detailitembkb[index].kodesubtxt);
						$('#lbl_no_acc_'+n).html(data.all_detailitembkb[index].kodesubtxt);
						$('#lbl_nama_acc_'+n).html(data.all_detailitembkb[index].ketsub);
						$('#hidden_no_acc_'+n).val(data.all_detailitembkb[index].kodesubtxt);
						$('#hidden_nama_acc_'+n).val(data.all_detailitembkb[index].ketsub);

						$('#txt_qty_retur_'+n).val(data.all_detailitembkb[index].qty);
						$('#b_qty_bkb_'+n).html(data.all_detailitembkb[index].qty2);
						$('#b_qty_sdh_pernah_ret_'+n).html(data.all_detailitembkb[index].sudah_ret);
						// $('#b_stok_tgl_ini_'+n).html(data.all_detailitembkb[index].qty);
						$('#b_satuan_'+n).html(data.all_detailitembkb[index].satuan);
						$('#hidden_qty_bkb_'+n).val(data.all_detailitembkb[index].qty2);
						$('#hidden_qty_sdh_pernah_ret_'+n).val(data.all_detailitembkb[index].sudah_ret);
						// $('#hidden_stok_tgl_ini_'+n).html(data.all_detailitembkb[index].qty);
						$('#hidden_satuan_'+n).val(data.all_detailitembkb[index].satuan);

						$('#txt_ket_rinci_'+n).val(data.all_detailitembkb[index].ket);
						$('#hidden_id_retskbitem_'+n).val(data.all_detailitembkb[index].id);

		        		$('#txt_qty_retur_'+n).addClass('currencyduadigit');
		        		$('.currencyduadigit').number( true,2 );

		        		sum_stok(data.all_detailitembkb[index].kodebartxt,n);

						$('.div_form_1').find('input,textarea').attr('readonly','');
	        	  		$('.div_form_1').find('select,#txt_no_bkb').attr('disabled','');
	  	            
		  	            $('#tableRinciReturBKB tbody #tr_'+n+' td').find('input,textarea').not('#txt_barang_'+n).attr('readonly','');
	  		            $('#tableRinciReturBKB tbody #tr_'+n+' td').find('select,#txt_barang_'+n).attr('disabled','');		        		

		        		// get_all_cmb(data.data_retskbitem[index].kodebebantxt,n);

		        		n++;
						$('#hidden_no_table').val(n);
		        	})
		        },
		        error   : function(request){
		          alert(request.responseText);
		        }
		    });


		$('#txt_tgl_retur').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
	})

	function pilihCompany(){
		$('#modalPilihCompany').modal('hide');
		var kode_pt = $('#cmb_company').val();
		var nama_pt = $('#cmb_company :selected').text();
		var cmb_acc_hutang_usaha = $('#cmb_acc_hutang_usaha').val();
		
		$('#hidden_kode_pt').val(kode_pt);
		$('#hidden_nama_pt').val(nama_pt);
		$('#lbl_nama_pt').html(nama_pt);
		$('#hidden_acc_hutang_usaha').val(cmb_acc_hutang_usaha);
	}

	function check_form_1(){
		if($.trim($('#txt_no_bkb').val()) != '' && 
			$.trim($('#txt_no_ref_bkb').val()) != '' && 
			$.trim($('#txt_tgl_retur').val()) != '' && 
			$.trim($('#txt_no_ba').val()) != '' && 
			$.trim($('#txt_keterangan').val()) != '' &&
			$.trim($('#hidden_kode_pt').val()) != '' &&
			$.trim($('#hidden_nama_pt').val()) != '' &&
			$.trim($('#hidden_acc_hutang_usaha').val()) != '' &&
			$.trim($('#hidden_bagian').val()) != ''){
			$('.div_form_2').show();
		}
		else{
			$('.div_form_2').hide();
		}
	}

	function getListBKB(){
		$('#modalListBKB').modal('show');
		tableListBKB();
	}

	function tableListBKB(){
		var kodept = $('#hidden_kode_pt').val();
		$('#tableListBKB').DataTable().destroy();
    	$('#tableListBKB').DataTable({
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
          	  "url"         : "<?php echo site_url('retur_bkb/get_list_bkb');?>",
          	  "type"        : "POST",
          	  "data"        : {'kodept':kodept},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
			"columns": [
				{ "width": "5%" },
			    { "width": "10%" },
				{ "width": "20%" },
			    { "width": "30%" },
			    { "width": null },
			],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableListBKB tr').each(function() {
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

	$('#tableListBKB tbody').on('click', 'tr', function () {
  		var dataClick = $('#tableListBKB').DataTable().row( this ).data();
        var no_bkb = dataClick[2];
        var no_ref_bkb = dataClick[3];
        var bag = dataClick[4];

        $('#txt_no_bkb').val(no_bkb);
        $('#lbl_no_ref_bkb').html(no_ref_bkb);
        $('#txt_no_ref_bkb').val(no_ref_bkb);
        $('#hidden_bagian').val(bag);

        $('#modalListBKB').modal('hide');
	})

	function cari_barang(no_row){
		var txt_no_bkb = $('#txt_no_bkb').val();
		var txt_no_ref_bkb = $('#txt_no_ref_bkb').val();

		$('#hidden_no_row_barang').val(no_row);
		$('#modalListBarang').modal('show');
		$('#tableListBarang').DataTable().destroy();
		listBarang(no_row,txt_no_bkb,txt_no_ref_bkb);
	}

	function listBarang(no_row,txt_no_bkb,txt_no_ref_bkb){
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
            "url"         : "<?php echo site_url('retur_bkb/list_barang');?>",
            "type"        : "POST",
            "data"        : {'no_bkb':txt_no_bkb,'no_ref_bkb':txt_no_ref_bkb},
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
		    { "width": "5%" },
		    { "width": null }
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
        var nobpb = dataClick[6];
        var row = $('#hidden_no_row_barang').val();

        $('#lbl_kode_barang_'+row).html(kode_barang);
        $('#lbl_nama_barang_'+row).html(nama_barang);
        $('#lbl_grup_barang_'+row).html('Grup : '+grup_barang);
        $('#txt_barang_'+row).val(nama_barang);
        $('#txt_ket_rinci_'+row).val('Retur BPB No. '+nobpb);

        $('#hidden_kode_barang_'+row).val(kode_barang);
        $('#hidden_nama_barang_'+row).val(nama_barang);
        $('#hidden_grup_barang_'+row).val(grup_barang);

        $('#b_satuan_'+row).html(satuan);
        $('#hidden_satuan_'+row).val(satuan);

		sum_stok(kode_barang, row,'');

		var no_bkb = $('#txt_no_bkb').val();
		var no_ref_bkb = $('#txt_no_ref_bkb').val();
		getBKBItem(kode_barang, row, no_bkb, no_ref_bkb);

	})

	function sum_stok(kodbar,row,frombpb){
		var kodept = $('#hidden_kode_pt').val();

		$.ajax({
	        type    : "POST",
	        // url     : "<?php // echo site_url('list_function/sum_stok_retur_bkb'); ?>",
	        url     : "<?php echo site_url('list_function/sum_stok'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'kodbar': kodbar},
	        success: function(data){
	        	console.log(data);
	        	if (data === false){
	        		swal("Stock Awal belum ada, silahkan input dahulu !", {
	        		  buttons: {
	        		    ya: {
	        		      text: "Ya",
	        		      value: "iya",
	        		    },
	        		    cancel: "Tutup",
	        		  },
	        		})
	        		.then((value) => {
	        		  switch (value) {
	        		 	case "iya":
	        		      window.open('<?php echo site_url('stock_awal'); ?>','_blank');
	        		      break;
	        		 	default:
	        		      swal.close();
	        		  }
	        		});
	        		if(frombpb == 'frombpb'){
	        			$('#tr_'+row).css('background-color','#ffcece');
	        			// $('#txt_ket_rinci_'+row).attr('readonly','');
	        			$('#btn_simpan_'+row).attr('disabled','');
	        		}
	        	}
	        	else{
		        	$('#b_stok_tgl_ini_'+row).html(data);
		        	$('#hidden_stok_tgl_ini_'+row).val(data);

		        	$('#tr_'+row).css('background-color','#f9f9f9');
		        	$('#btn_simpan_'+row).removeAttr('disabled');

		        	$('#modalListBarang').modal('hide');
		        }
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });	
	}

	function getBKBItem(kode_barang, row, no_bkb, no_ref_bkb){
		var kodept = $('#hidden_kode_pt').val();
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('retur_bkb/get_bkb_item'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'kode_barang': kode_barang, 'no_bkb':no_bkb, 'no_ref_bkb':no_ref_bkb, 'kodept':kodept},
	        success: function(data){
	        	var NO_REF = data.data_keluarbrgitem.NO_REF;
	        	var SKBTXT = data.data_keluarbrgitem.SKBTXT;
	        	var USER = data.data_keluarbrgitem.USER;
	        	var afd = data.data_keluarbrgitem.afd;
	        	var alokasi = data.data_keluarbrgitem.alokasi;
	        	var batal = data.data_keluarbrgitem.batal;
	        	var blok = data.data_keluarbrgitem.blok;
	        	var cetak = data.data_keluarbrgitem.cetak;
	        	var grp = data.data_keluarbrgitem.grp;
	        	var id = data.data_keluarbrgitem.id;
	        	var ket = data.data_keluarbrgitem.ket;
	        	var ketbeban = data.data_keluarbrgitem.ketbeban;
	        	var ketsub = data.data_keluarbrgitem.ketsub;
	        	var kodebar = data.data_keluarbrgitem.kodebar;
	        	var kodebartxt = data.data_keluarbrgitem.kodebartxt;
	        	var kodebeban = data.data_keluarbrgitem.kodebeban;
	        	var kodebebantxt = data.data_keluarbrgitem.kodebebantxt;
	        	var kodept = data.data_keluarbrgitem.kodept;
	        	var kodesub = data.data_keluarbrgitem.kodesub;
	        	var kodesubtxt = data.data_keluarbrgitem.kodesubtxt;
	        	var nabar = data.data_keluarbrgitem.nabar;
	        	var noadjust = data.data_keluarbrgitem.noadjust;
	        	var nobpb = data.data_keluarbrgitem.nobpb;
	        	var periode = data.data_keluarbrgitem.periode;
	        	var posting = data.data_keluarbrgitem.posting;
	        	var pt = data.data_keluarbrgitem.pt;
	        	var qty = data.data_keluarbrgitem.qty;
	        	var qty2 = data.data_keluarbrgitem.qty2;
	        	var satuan = data.data_keluarbrgitem.satuan;
	        	var skb = data.data_keluarbrgitem.skb;
	        	var tgl = data.data_keluarbrgitem.tgl;
	        	var tglinput = data.data_keluarbrgitem.tglinput;
	        	var thn = data.data_keluarbrgitem.thn;
	        	var txtperiode = data.data_keluarbrgitem.txtperiode;
	        	var txttgl = data.data_keluarbrgitem.txttgl;
	        	
	        	var sudah_ret;
	        	if(data.data_ret_skbitem === null){
	        		sudah_ret = 0;
	        	}
	        	else{
	        		sudah_ret = data.data_ret_skbitem.qty;
	        	}

	        	$('#cmb_afd_unit_'+row).val(afd);
	        	
	        	$('#txt_kode_beban_'+row).val(kodebebantxt);
				$('#lbl_ket_beban_'+row).html(ketbeban);	        	
	        	$('#hidden_ket_beban_'+row).val(ketbeban);
	        	
	        	$('#txt_account_beban_'+row).val(kodesubtxt);

	        	$('#lbl_no_acc_'+row).html(kodesubtxt);
	        	$('#lbl_nama_acc_'+row).html(ketsub);

	        	$('#hidden_no_acc_'+row).val(kodesubtxt);
	        	$('#hidden_nama_acc_'+row).val(ketsub);

	        	$('#b_qty_bkb_'+row).html(qty2);
	        	$('#hidden_qty_bkb_'+row).val(qty2);

	        	$('#b_qty_sdh_pernah_ret_'+row).html(sudah_ret);
	        	$('#hidden_qty_sdh_pernah_ret_'+row).val(sudah_ret);

	        	cmb_blok_sub(row,blok);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function cmb_blok_sub(row, blok){
		var afd_unit = $('#cmb_afd_unit_'+row).val();

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('retur_bkb/pilih_blok_sub'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'afd_unit' : afd_unit},
	        success: function(data){
	        	$('#cmb_blok_sub_'+row).empty();
	        	var opsi_pilih_master_blok = '<option value=""></option>';
	        	$('#cmb_blok_sub_'+row).append(opsi_pilih_master_blok);

				$.each(data, function(index) {
					var opsi_master_blok = '<option value="'+data[index].blok+'">'+data[index].blok+'</option>';
	          		$('#cmb_blok_sub_'+row).append(opsi_master_blok);
				});
				$('#cmb_blok_sub_'+row).val(blok);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function tambah_row(num_last){
		// var row = ++num_last;
		var row = $('#hidden_no_table').val();

		var tr_buka = '<tr id="tr_'+row+'">'
		var td_col_1 = '<td>'
							+'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+row+')"></button><br />'
							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+row+')"></button>'
						+'</td>';
		var form_buka = '<form id="form_rinci_'+row+'" name="form_rinci_'+row+'" method="POST" action="javascript:;">'
		var td_col_2 = '<td>'
							+'<!-- Barang -->'
							+'<input type="text" class="form-control" id="txt_barang_'+row+'" name="txt_barang_'+row+'" onfocus="cari_barang('+row+')" placeholder="Barang">'
							+'<label id="lbl_kode_barang_'+row+'"></label>'
							+'<label id="lbl_nama_barang_'+row+'"></label>'
							+'<label id="lbl_grup_barang_'+row+'">Grup : </label>'
							+'<input type="hidden" id="hidden_kode_barang_'+row+'" name="hidden_kode_barang_'+row+'">'
							+'<input type="hidden" id="hidden_nama_barang_'+row+'" name="hidden_nama_barang_'+row+'">'
							+'<input type="hidden" id="hidden_grup_barang_'+row+'" name="hidden_grup_barang_'+row+'">'
						+'</td>';
		var td_col_3 = '<td>'
							+'<!-- AFD/UNIT -->'
							+'<select class="form-control set_strip_cmb" id="cmb_afd_unit_'+row+'" name="cmb_afd_unit_'+row+'" onchange="cmb_blok_sub('+row+')">'
								+'<option value=""></option>'
								+'<option value="0'+row+'">01</option>'
								+'<option value="02">02</option>'
								+'<option value="03">03</option>'
								+'<option value="04">04</option>'
								+'<option value="05">05</option>'
								+'<option value="06">06</option>'
								+'<option value="07">07</option>'
								+'<option value="08">08</option>'
								+'<option value="09">09</option>'
								+'<option value="10">10</option>'
								+'<option value="1'+row+'">11</option>'
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
							+'<select class="form-control set_strip_cmb" id="cmb_blok_sub_'+row+'" name="cmb_blok_sub_'+row+'">'
								+'<option value=""></option>'
							+'</select>'
						+'</td>';
		var td_col_5 = '<td>'
							+'<!-- Kode Beban -->'
							+'<input type="text" class="form-control" id="txt_kode_beban_'+row+'" name="txt_kode_beban_'+row+'" placeholder="Kode Beban" readonly="">'
							+'<label class="control-label" id="lbl_ket_beban_'+row+'"></label>'
							+'<input type="hidden" id="hidden_ket_beban_'+row+'" name="hidden_ket_beban_'+row+'">'
						+'</td>';
		var td_col_6 = '<td>'
							+'<!-- Account Beban -->'
							+'<input type="text" class="form-control" id="txt_account_beban_'+row+'" name="txt_account_beban_'+row+'" placeholder="Sub Beban" readonly="">'
							+'<label class="control-label" id="lbl_no_acc_'+row+'"></label>'
							+'<label class="control-label" id="lbl_nama_acc_'+row+'"></label>'
							+'<input type="hidden" id="hidden_no_acc_'+row+'" name="hidden_no_acc_'+row+'">'
							+'<input type="hidden" id="hidden_nama_acc_'+row+'" name="hidden_nama_acc_'+row+'">'
						+'</td>';
		var td_col_7 = '<td>'
							+'<!-- Qty Retur & Stok di Tgl ini & Satuan -->'
							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_retur_'+row+'" name="txt_qty_retur_'+row+'" onkeyup="validasiQty(this.value,'+row+')" placeholder="Qty Retur">'
							+'<label>Qty BKB : <b id="b_qty_bkb_'+row+'" name="b_qty_bkb_'+row+'"></b> </label>'
							+'<label>Sudah Pernah Retur : <b id="b_qty_sdh_pernah_ret_'+row+'" name="b_qty_sdh_pernah_ret_'+row+'"></b> </label>'
							+'<label>Stok di tgl ini. <b id="b_stok_tgl_ini_'+row+'" name="b_stok_tgl_ini_'+row+'"></b></label>'
							+'<label>Satuan : <b id="b_satuan_'+row+'" name="b_satuan_'+row+'"></b></label>'
							+'<input type="hidden" id="hidden_qty_bkb_'+row+'" name="hidden_qty_bkb_'+row+'">'
							+'<input type="hidden" id="hidden_qty_sdh_pernah_ret_'+row+'" name="hidden_qty_sdh_pernah_ret_'+row+'">'
							+'<input type="hidden" id="hidden_stok_tgl_ini_'+row+'" name="hidden_stok_tgl_ini_'+row+'">'
							+'<input type="hidden" id="hidden_satuan_'+row+'" name="hidden_satuan_'+row+'">'
						+'</td>';
		var td_col_8 = '<td>'
							+'<!-- Keterangan -->'
							+'<textarea style="width: 112px; height: 69px;" class="resizable_textarea form-control" id="txt_ket_rinci_'+row+'" name="txt_ket_rinci_'+row+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+row+')"></textarea>'
							+'<label id="lbl_status_simpan_'+row+'"></label>'
							+'<input type="hidden" id="hidden_id_retskbitem_'+row+'" name="hidden_id_retskbitem_'+row+'">'
						+'</td>';
		var td_col_9 = '<td>'
							+'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+row+'" name="btn_simpan_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+row+'" name="btn_ubah_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+row+'" name="btn_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+row+')"></button>'
							// +'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+row+'" name="btn_cancel_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+row+'" name="btn_hapus_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+row+')"></button>'
						'</td>'
		var form_tutup = '</form>';
		var tr_tutup = '</tr>';

		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+td_col_8+td_col_9+form_tutup+tr_tutup);

		// cek_bagian(row);

		$('html, body').animate({
	        scrollTop: $("#tr_"+row).offset().top
	    }, 2000);

	    row++;
		$('#hidden_no_table').val(row);
	}

	function validasiQty(qtyretur,row){
		var qty_bkb = $('#hidden_qty_bkb_'+row).val();
		var qty_sudah_ret = $('#hidden_qty_sdh_pernah_ret_'+row).val();
		console.log(qty_bkb);
		console.log(qty_sudah_ret);

		if(parseFloat(qtyretur) > (parseFloat(qty_bkb) - parseFloat(qty_sudah_ret)) ){
			new PNotify({
                title: 'Error Qty',
                text: 'Qty Retur melebihi Qty BKB',
                type: 'error',
                // hide: false,
                styling: 'bootstrap3'
            });
            $('#txt_qty_retur_'+row).val('');
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
  			if($('#'+arr_id).is('input') || $('#'+arr_id).is('textarea')  || $('#'+arr_id).is('select')){
  				if(arr_id == 'hidden_kode_barang_'+no){
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
  	            else if(arr_id == 'hidden_grup_barang_'+no){
  	            	$('#lbl_grup_barang_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_grup_barang_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_grup_barang_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
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
  	            else if(arr_id == 'cmb_blok_sub_'+no){
  	            	$('#cmb_blok_sub_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#cmb_blok_sub_'+no).next().is('br#br_'+no)){
  	            		$('#cmb_blok_sub_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_ket_beban_'+no){
  	            	$('#lbl_ket_beban_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_ket_beban_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_ket_beban_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else if(arr_id == 'hidden_no_acc_'+no){
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
  	            else if(arr_id == 'hidden_qty_bkb_'+no){
  	            	$('#b_qty_bkb_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#b_qty_bkb_'+no).next().is('br#br_'+no)){
  	            		$('#b_qty_bkb_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
  	            	}
  	            }
  	            else{
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

	function saveRinciEnter(e,no){
  	  if(e.keyCode == 13 && !e.shiftKey){
  	    if($('#hidden_proses_status_'+no).val() == 'insert'){
  	      saveRinci(no);
  	    }
  	    else if($('#hidden_proses_status_'+no).val() == 'update'){
  	      updateRinci(no);
  	    }
  	  }
  	}

	function saveRinciClick(no){
  	  // saveRinci(no);
  	  if($('#hidden_proses_status_'+no).val() == 'insert'){
  	    saveRinci(no);
  	  }
  	  else if($('#hidden_proses_status_'+no).val() == 'update'){
  	    updateRinci(no);
  	  }
  	}

  	function saveRinci(no){
  	  	var isValid = true;
  	  	$('#txt_barang_'+no
  	    	+',#hidden_kode_barang_'+no
  	    	+',#hidden_nama_barang_'+no
  	    	+',#hidden_grup_barang_'+no
  	    	+',#cmb_afd_unit_'+no
  	    	+',#cmb_blok_sub_'+no
  	    	+',#txt_kode_beban_'+no
  	    	+',#txt_account_beban_'+no
  	    	+',#hidden_no_acc_'+no
  	    	+',#hidden_nama_acc_'+no
  	    	+',#txt_qty_retur_'+no
  	    	+',#hidden_stok_tgl_ini_'+no
  	    	+',#hidden_satuan_'+no
  	    	+',#hidden_qty_bkb_'+no
  	    	+',#txt_ket_rinci_'+no).each(function (e) {
			
			if ($.trim($(this).val()) == '') {
  	            isValid = false;
  	            validasi($(this).attr("id"),no);
  	        }
  	        else {
  	         	if($(this).attr('id') == 'hidden_kode_barang_'+no){
					$('#lbl_kode_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_kode_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_kode_barang_'+no).next().remove();
						$('#lbl_kode_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_barang_'+no){
					$('#lbl_nama_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_barang_'+no).next().remove();
						$('#lbl_nama_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_grup_barang_'+no){
					$('#lbl_grup_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_grup_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_grup_barang_'+no).next().remove();
						$('#lbl_grup_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_grup_barang_'+no){
					$('#lbl_grup_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_grup_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_grup_barang_'+no).next().remove();
						$('#lbl_grup_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_no_acc_'+no){
					$('#lbl_no_acc_'+no).css({
					  	"background": ""
					});
					if($('#lbl_no_acc_'+no).next().is('br#br_'+no)){
						$('#lbl_no_acc_'+no).next().remove();
						$('#lbl_no_acc_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_acc_'+no){
					$('#lbl_nama_acc_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_acc_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_acc_'+no).next().remove();
						$('#lbl_nama_acc_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_stok_tgl_ini_'+no){
					$('#b_stok_tgl_ini_'+no).css({
					  	"background": ""
					});
					if($('#b_stok_tgl_ini_'+no).next().is('br#br_'+no)){
						$('#b_stok_tgl_ini_'+no).next().remove();
						$('#b_stok_tgl_ini_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_satuan_'+no){
					$('#b_satuan_'+no).css({
					  	"background": ""
					});
					if($('#b_satuan_'+no).next().is('br#br_'+no)){
						$('#b_satuan_'+no).next().remove();
						$('#b_satuan_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_qty_bkb_'+no){
					$('#b_qty_bkb_'+no).css({
					  	"background": ""
					});
					if($('#b_qty_bkb_'+no).next().is('br#br_'+no)){
						$('#b_qty_bkb_'+no).next().remove();
						$('#b_qty_bkb_'+no).next().remove();
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
  	  	console.log(isValid);
  	    if (isValid == true){
	        saveData(no);
	    }
  	}

  	function saveData(no){
  		var form_data = new FormData();

		form_data.append('txt_no_bkb',$('#txt_no_bkb').val());
		form_data.append('txt_no_ref_bkb',$('#txt_no_ref_bkb').val());
		form_data.append('txt_tgl_retur',$('#txt_tgl_retur').val());
		form_data.append('txt_no_ba',$('#txt_no_ba').val());
		form_data.append('txt_keterangan',$('#txt_keterangan').val());
		form_data.append('hidden_kode_pt',$('#hidden_kode_pt').val());
		form_data.append('hidden_nama_pt',$('#hidden_nama_pt').val());
		form_data.append('hidden_acc_hutang_usaha',$('#hidden_acc_hutang_usaha').val());
		form_data.append('hidden_bagian',$('#hidden_bagian').val());
		form_data.append('hidden_no_ret',$('#hidden_no_ret').val());
		
		form_data.append('hidden_kode_barang',$('#hidden_kode_barang_'+no).val());
		form_data.append('hidden_nama_barang',$('#hidden_nama_barang_'+no).val());
		form_data.append('hidden_grup_barang',$('#hidden_grup_barang_'+no).val());
		form_data.append('cmb_afd_unit',$('#cmb_afd_unit_'+no).val());
		form_data.append('cmb_blok_sub',$('#cmb_blok_sub_'+no).val());
		form_data.append('hidden_ket_beban',$('#hidden_ket_beban_'+no).val());
		form_data.append('txt_kode_beban',$('#txt_kode_beban_'+no).val());
		form_data.append('txt_account_beban',$('#txt_account_beban_'+no).val());
		form_data.append('hidden_no_acc',$('#hidden_no_acc_'+no).val());
		form_data.append('hidden_nama_acc',$('#hidden_nama_acc_'+no).val());
		form_data.append('txt_qty_retur',$('#txt_qty_retur_'+no).val());
		form_data.append('hidden_stok_tgl_ini',$('#hidden_stok_tgl_ini_'+no).val());
		form_data.append('hidden_satuan',$('#hidden_satuan_'+no).val());
		form_data.append('hidden_qty_bkb',$('#hidden_qty_bkb_'+no).val());
		form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());

  	  	$.ajax({
  	        type    : "POST",
  	        url     : "<?php echo site_url('retur_bkb/simpan_rinci_bkb'); ?>",
  	        dataType  : "JSON",
  	        beforeSend: function() {
  	          	$('#lbl_status_simpan_'+no).empty();
  	          	$('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
  	          	if($.trim($('#hidden_no_bkb').val()) == ''){
  	            	$('#lbl_bkb_status').empty();
  	            	$('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate BKB Number</label>');
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
        	  		// console.log(data);
        	  		$('#a_retur_bkb_baru').show();

        	  		$('.div_form_1').find('input,textarea').attr('readonly','');
        	  		$('.div_form_1').find('select,#txt_no_bkb').attr('disabled','');
	  	            
	  	            $('#tableRinciReturBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_barang_'+no).attr('readonly','');
	  	            $('#tableRinciReturBKB tbody #tr_'+no+' td').find('select,#txt_barang_'+no).attr('disabled','');

	  	            $('#lbl_status_simpan_'+no).empty();
	  	            $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

	  	            $('#lbl_bkb_status').empty();

	  	            $('#lbl_no_ret').html(data.no_ret);

	  	            $('#hidden_no_ret').val(data.no_ret);
	  	        
	  	            if($.trim($('#hidden_id_retskb').val()) == ''){
		  	            $('#hidden_id_retskb').val(data.id_retskb);
		  	        }
	  	            $('#hidden_id_retskbitem_'+no).val(data.id_retskbitem);

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
  	        }
  	    });
  	}

  	function hapus_row(id){
		var rowCount = $("#tableRinciReturBKB td").closest("tr").length;
		if (rowCount != 1){
			$('#tr_'+id).remove();
		}
		else{
			swal('Tidak Bisa dihapus, item Retur BKB tinggal 1');
		}
  	}

  	function ubahRinci(no){
		// $('.div_form_1').find('input,textarea').attr('readonly','');
		// $('.div_form_1').find('select').attr('disabled','');
        
        // $('#tableRinciReturBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_barang_'+no).attr('readonly','');
        // $('#tableRinciReturBKB tbody #tr_'+no+' td').find('select,#txt_barang_'+no).attr('disabled','');

  		$('.div_form_1').find('input,textarea').not('#txt_no_ref_bkb,#txt_tgl_retur').removeAttr('readonly');
  		$('.div_form_1').find('select,#txt_no_bkb').removeAttr('disabled');

        $('#tableRinciReturBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_kode_beban_'+no+',#txt_account_beban_'+no).removeAttr('readonly');
        $('#tableRinciReturBKB tbody #tr_'+no+' td').find('select,#txt_barang_'+no).removeAttr('disabled');
        $('#tableRinciReturBKB tbody #tr_'+no+' td').find('#btn_simpan_'+no).attr('readonly','');

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
  	  	$('#txt_barang_'+no
  	    	+',#hidden_kode_barang_'+no
  	    	+',#hidden_nama_barang_'+no
  	    	+',#hidden_grup_barang_'+no
  	    	+',#cmb_afd_unit_'+no
  	    	+',#cmb_blok_sub_'+no
  	    	+',#txt_kode_beban_'+no
  	    	+',#txt_account_beban_'+no
  	    	+',#hidden_no_acc_'+no
  	    	+',#hidden_nama_acc_'+no
  	    	+',#txt_qty_retur_'+no
  	    	+',#hidden_stok_tgl_ini_'+no
  	    	+',#hidden_satuan_'+no
  	    	+',#hidden_qty_bkb_'+no
  	    	+',#txt_ket_rinci_'+no).each(function (e) {
			
			if ($.trim($(this).val()) == '') {
  	            isValid = false;
  	            validasi($(this).attr("id"),no);
  	        }
  	        else {
  	         	if($(this).attr('id') == 'hidden_kode_barang_'+no){
					$('#lbl_kode_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_kode_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_kode_barang_'+no).next().remove();
						$('#lbl_kode_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_barang_'+no){
					$('#lbl_nama_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_barang_'+no).next().remove();
						$('#lbl_nama_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_grup_barang_'+no){
					$('#lbl_grup_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_grup_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_grup_barang_'+no).next().remove();
						$('#lbl_grup_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_grup_barang_'+no){
					$('#lbl_grup_barang_'+no).css({
					  	"background": ""
					});
					if($('#lbl_grup_barang_'+no).next().is('br#br_'+no)){
						$('#lbl_grup_barang_'+no).next().remove();
						$('#lbl_grup_barang_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_no_acc_'+no){
					$('#lbl_no_acc_'+no).css({
					  	"background": ""
					});
					if($('#lbl_no_acc_'+no).next().is('br#br_'+no)){
						$('#lbl_no_acc_'+no).next().remove();
						$('#lbl_no_acc_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_nama_acc_'+no){
					$('#lbl_nama_acc_'+no).css({
					  	"background": ""
					});
					if($('#lbl_nama_acc_'+no).next().is('br#br_'+no)){
						$('#lbl_nama_acc_'+no).next().remove();
						$('#lbl_nama_acc_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_stok_tgl_ini_'+no){
					$('#b_stok_tgl_ini_'+no).css({
					  	"background": ""
					});
					if($('#b_stok_tgl_ini_'+no).next().is('br#br_'+no)){
						$('#b_stok_tgl_ini_'+no).next().remove();
						$('#b_stok_tgl_ini_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_satuan_'+no){
					$('#b_satuan_'+no).css({
					  	"background": ""
					});
					if($('#b_satuan_'+no).next().is('br#br_'+no)){
						$('#b_satuan_'+no).next().remove();
						$('#b_satuan_'+no).next().remove();
					}
  	            }
  	            else if($(this).attr('id') == 'hidden_qty_bkb_'+no){
					$('#b_qty_bkb_'+no).css({
					  	"background": ""
					});
					if($('#b_qty_bkb_'+no).next().is('br#br_'+no)){
						$('#b_qty_bkb_'+no).next().remove();
						$('#b_qty_bkb_'+no).next().remove();
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
	        updateData(no);
	    }
  	}

  	function updateData(no){
		var form_data = new FormData();

		form_data.append('txt_no_bkb',$('#txt_no_bkb').val());
	  	form_data.append('txt_no_ref_bkb',$('#txt_no_ref_bkb').val());
	  	form_data.append('txt_tgl_retur',$('#txt_tgl_retur').val());
	  	form_data.append('txt_no_ba',$('#txt_no_ba').val());
	  	form_data.append('txt_keterangan',$('#txt_keterangan').val());
	  	form_data.append('hidden_kode_pt',$('#hidden_kode_pt').val());
	  	form_data.append('hidden_nama_pt',$('#hidden_nama_pt').val());
	  	form_data.append('hidden_acc_hutang_usaha',$('#hidden_acc_hutang_usaha').val());
	  	form_data.append('hidden_bagian',$('#hidden_bagian').val());
	  	form_data.append('hidden_no_ret',$('#hidden_no_ret').val());
	  	
	  	form_data.append('hidden_kode_barang',$('#hidden_kode_barang_'+no).val());
	  	form_data.append('hidden_nama_barang',$('#hidden_nama_barang_'+no).val());
	  	form_data.append('hidden_grup_barang',$('#hidden_grup_barang_'+no).val());
	  	form_data.append('cmb_afd_unit',$('#cmb_afd_unit_'+no).val());
	  	form_data.append('cmb_blok_sub',$('#cmb_blok_sub_'+no).val());
	  	form_data.append('hidden_ket_beban',$('#hidden_ket_beban_'+no).val());
	  	form_data.append('txt_kode_beban',$('#txt_kode_beban_'+no).val());
	  	form_data.append('txt_account_beban',$('#txt_account_beban_'+no).val());
	  	form_data.append('hidden_no_acc',$('#hidden_no_acc_'+no).val());
	  	form_data.append('hidden_nama_acc',$('#hidden_nama_acc_'+no).val());
	  	form_data.append('txt_qty_retur',$('#txt_qty_retur_'+no).val());
	  	form_data.append('hidden_stok_tgl_ini',$('#hidden_stok_tgl_ini_'+no).val());
	  	form_data.append('hidden_satuan',$('#hidden_satuan_'+no).val());
	  	form_data.append('hidden_qty_bkb',$('#hidden_qty_bkb_'+no).val());
	  	form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());

		form_data.append('hidden_id_retskb',$('#hidden_id_retskb').val());
		form_data.append('hidden_id_retskbitem',$('#hidden_id_retskbitem_'+no).val());

	  	$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('retur_bkb/ubah_rinci_bkb'); ?>",
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
	  	            
    	  		$('#tableRinciReturBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_barang_'+no).attr('readonly','');
    	  		$('#tableRinciReturBKB tbody #tr_'+no+' td').find('select,#txt_barang_'+no).attr('disabled','');

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

	function cancelUpdate(no){
  		$('.div_form_1').find('input,textarea').attr('readonly','');
  		$('.div_form_1').find('select').attr('disabled','');
        
  		$('#tableRinciReturBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_barang_'+no).attr('readonly','');
  		$('#tableRinciReturBKB tbody #tr_'+no+' td').find('select,#txt_barang_'+no).attr('disabled','');

        $('#btn_cancelUpdate_ubah_'+no).css('display','block');
		$('#btn_update_'+no).css('display','none');
		$('#btn_cancel_update_'+no).css('display','none');
		$('#btn_hapus_'+no).removeAttr('disabled');

		$('#hidden_proses_status_'+no).empty();
		$('#hidden_proses_status_'+no).val('');
		getPreviousData(no);
    }

   //  function getPreviousData(no){
   //    var form_data = new FormData();
      
   //    form_data.append('hidden_no_ret',$('#hidden_no_ret').val());
      
   //    form_data.append('hidden_id_retskb',$('#hidden_id_retskb').val());
   //    form_data.append('hidden_id_retskbitem',$('#hidden_id_retskbitem_'+no).val());
      
   //    // form_data.append('hidden_no_bkb',$('#hidden_no_bkb').val());
   //    // form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());

   //    $.ajax({
   //        type    : "POST",
   //        url     : "<?php echo site_url('retur_bkb/cancel_ubah_rinci'); ?>",
   //        dataType  : "JSON",
   //        beforeSend: function(){
   //          $('#lbl_status_simpan_'+no).empty();
   //          $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Cancel Update</label>');
   //        },
   //        cache   : false,
   //        contentType : false,
   //        processData : false,
          
   //        data    : form_data,
   //        success: function(data){
	  // //       data_retskb: {…}
	  // //         	bag: "TANAMAN"
			// // 	id: "989"
			// // 	keperluan: ""
			// // 	kode: "6"
			// // 	kpd: ""
			// // 	no_ret: "623"
			// // 	periode1: "2019-10-11 00:00:00"
			// // 	periode2: null
			// // 	pt: "PT.MULIA SAWIT AGRO LESTARI (SITE)"
			// // 	skb: "7219665"
			// // 	tgl: "2019-10-11 00:00:00"
			// // 	tglinput: "2019-10-11 15:39:15"
			// // 	thn: "2019"
			// // 	txtperiode1: "201910"
			// // 	txtperiode2: "201910"
			// // 	txttgl: "20191011"
			// // data_retskbitem: {…}
			// // 	afd: "99"
			// // 	blok: "K20"
			// // 	grp: "PESTISIDA"
			// // 	id: "1107"
			// // 	ket: "Retur BPB No. 7219665"
			// // 	ketbeban: "UPKEEP BAHAN"
			// // 	ketsub: "RAWAT GAWANGAN CHEMIST"
			// // 	kodebar: "102505010200015"
			// // 	kodebartxt: "102505010200015"
			// // 	kodebeban: "700599201102100"
			// // 	kodebebantxt: "700599201102100"
			// // 	kodept: "6"
			// // 	kodesub: "700599201102117"
			// // 	kodesubtxt: "700599201102117"
			// // 	nabar: "PARAKUAT DIKLORIDA"
			// // 	no_ret: "623"
			// // 	periode: "2019-10-11 00:00:00"
			// // 	pt: "PT.MULIA SAWIT AGRO LESTARI (SITE)"
			// // 	qty: "0.5"
			// // 	satuan: "LTR"
			// // 	skb: "7219665"
			// // 	tgl: "2019-10-11 00:00:00"
			// // 	tglinput: "2019-10-11 15:39:15"
			// // 	thn: "2019"
			// // 	txtperiode: "201910"
			// // 	txttgl: "20191011"
   //        	console.log(data);
			// var tgl_bkb = new Date(data.data_retskb.tgl);
          	
   //        	$('#lbl_no_ret').html(data.data_retskb.no_ret);
   //        	$('#txt_no_bkb').val(data.data_retskb.skb);
   //        	// $('#txt_no_ref_bkb').val(data.data_retskb.);
   //        	$('#txt_no_ba').val(data.data_retskb.kpd);
   //        	$('#txt_keterangan').val(data.data_retskb.keperluan);

   //        	$('#hidden_kode_pt').val(data.data_retskb.);
   //        	$('#hidden_nama_pt').val(data.data_retskb.pt);
   //        	$('#hidden_acc_hutang_usaha').val(data.data_retskb.);
   //        	$('#hidden_bagian').val(data.data_retskb.);
   //        	$('#hidden_id_retskb').val(data.data_retskb.);
   //        	$('#hidden_no_ret').val(data.data_retskb.);
   //        	$('#lbl_nama_pt').htnl(data.data_retskb.);

   //        	$('#txt_barang_'+no).val(data.data_retskbitem.nabar);

   //        	// ====================


   //        	$('#hidden_no_bkb').val(data.data_retskb.SKBTXT);
   //        	$('#hidden_id_stok_keluar').val(data.data_retskb.id);
   //        	$('#hidden_no_ref_bkb').val(data.data_retskb.NO_REF);

   //        	$('#hidden_no_acc_'+no).val(data.data_retskbitem.kodesubtxt);
   //        	$('#hidden_nama_acc_'+no).val(data.data_retskbitem.ketsub);
   //        	$('#hidden_kode_barang_'+no).val(data.data_retskbitem.kodebartxt);
   //        	$('#hidden_nama_barang_'+no).val(data.data_retskbitem.nabar);
   //        	$('#hidden_grup_barang_'+no).val(data.data_retskbitem.grp);
   //        	// $('#hidden_stok_tgl_ini_'+no).val(data.data_retskbitem.); //
   //        	$('#hidden_satuan_'+no).val(data.data_retskbitem.satuan);
   //        	$('#hidden_id_keluarbrgitem_'+no).val(data.data_retskbitem.id);

   //        	$('#txt_diberikan_kpd').val(data.data_retskb.kpd);
   //        	$('#txt_untuk_keperluan').val(data.data_retskb.keperluan);
   //        	$('#cmb_bagian').val(data.data_retskb.bag);
   //        	$('#txt_tgl_bkb').val(dateToMDY(tgl_bkb));
   //        	$('#txt_no_bpb').val(data.data_retskb.nobpb);
   //        	$('#cmb_alokasi_est').val(data.data_retskb.alokasi);
          	
   //        	// $('#cmb_tm_tbm_'+no).val(data.data_retskbitem.); //
   //        	$('#cmb_afd_unit_'+no).val(data.data_retskbitem.afd);
   //        	$('#cmb_blok_sub_'+no).val(data.data_retskbitem.blok);
   //        	// $('#cmb_tahun_tanam_'+no).val(data.data_retskbitem.); //
   //        	$('#cmb_bahan_'+no).val(data.data_retskbitem.kodebebantxt);
   //        	// $('#txt_account_beban_'+no).val(data.data_retskbitem.); //
   //        	// $('#txt_barang_'+no).val(data.data_retskbitem.); //
   //        	$('#txt_qty_diminta_'+no).val(data.data_retskbitem.qty);
   //        	$('#txt_qty_disetujui_'+no).val(data.data_retskbitem.qty2);
   //        	$('#txt_ket_rinci_'+no).val(data.data_retskbitem.ket);

			// $('#lbl_status_simpan_'+no).empty();
			// $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-undo" style="color:#6fc1ad;"></i> Edit dibatalkan</label>');

			// $('#btn_ubah_'+no).css('display','block');
			// $('#btn_update_'+no).css('display','none');
			// $('#btn_cancel_update_'+no).css('display','none');
			// $('#btn_hapus_'+no).removeAttr('disabled');

			// $('#hidden_proses_status_'+no).empty();
			// $('#hidden_proses_status_'+no).val('');
   //        },
   //        error   : function(request){
   //          alert('Error Get Data : '+request.responseText);
   //        }
   //    });   
   //  }

   function hapus_row(id){
		var rowCount = $("#tableRinciReturBKB td").closest("tr").length;
		if (rowCount != 1){
			$('#tr_'+id).remove();
		}
		else{
			swal('Tidak Bisa dihapus, item Retur BKB tinggal 1');
		}
  	}

  	function hapusRinci(no){
  	  $('#hidden_no_delete').val(no);
  	  $('#modalKonfirmasiHapus').modal('show');
  	}

  	function deleteData(){
  	  var no = $('#hidden_no_delete').val();
  	  $('#modalKonfirmasiHapus').modal('hide');

  	  var rowCount = $("#tableRinciReturBKB td").closest("tr").length;
  	      
  	  if (rowCount != 1){
  	    var form_data = new FormData();
  	    
  	    form_data.append('hidden_id_retskb',$('#hidden_id_retskb').val());
  	    form_data.append('hidden_no_ret',$('#hidden_no_ret').val());
  	    form_data.append('hidden_id_retskbitem',$('#hidden_id_retskbitem_'+no).val());
  	    
  	    $.ajax({
			type    : "POST",
			url     : "<?php echo site_url('retur_bkb/hapus_rinci'); ?>",
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
			},
			error   : function(request){
				alert(request.responseText);
			}
  	    });
  	  }
  	  else{
  	    swal('Tidak Bisa dihapus, item Retur BKB tinggal 1');
  	  }
  	}

  	function dateToMDY(date) {
		var d = date.getDate();
		var m = date.getMonth() + 1;
		var y = date.getFullYear();
		// return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
		return (m<=9 ? '0' + m : m) + '/' + (d <= 9 ? '0' + d : d) + '/' + y;
  	}

</script>