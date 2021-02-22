<style type="text/css">
	#tbodyPemesan tr:hover {
        background-color: #26b99a;
        color: #ffffff;
    }
</style>

<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>PO <small>Permohonan Order</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group div_form_1">
							<label class="control-label col-md-2 col-sm-3 col-xs-12">No. SPP <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_no_spp" name="txt_no_spp" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No. SPP" onfocus="pilihModalDataSPP()" readonly>
							</div>
							<label class="control-label col-md-1 col-sm-3 col-xs-12">Ref. SPP <span class="required">*</span>
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<input id="txt_no_ref" name="txt_no_ref" class="form-control col-md-3 col-xs-12" required="required" type="text" placeholder="Ref. SPP" readonly>
							</div>
							<label class="control-label col-md-1 col-sm-3 col-xs-12">Tgl. Ref <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_tgl_ref" name="txt_tgl_ref" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl. Referensi" data-date-format="yyyy-mm-dd" readonly>
							</div>
						</div>
						<div class="form-group div_form_1">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Departemen <span class="required">*</span>
							</label>
							<div class="col-md-1 col-sm-6 col-xs-12">
								<input id="txt_kode_departemen" name="txt_kode_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Kode" readonly>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<input id="txt_departemen" name="txt_departemen" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Nama Departemen" readonly>
							</div>
							<label class="control-label col-md-1 col-sm-3 col-xs-12">Tgl. SPP <span class="required">*</span>
							</label>
							<div class="col-md-2 col-sm-6 col-xs-12">
								<input id="txt_tanggal" name="txt_tanggal" class="form-control col-md-2 col-xs-12" required="required" type="text" data-date-format="yyyy-mm-dd" placeholder="Tgl. SPP" value="<?= date('m/d/Y') ?>" readonly>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group div_form_2">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tgl. PO <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<input id="txt_tgl_po" name="txt_tgl_po" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl. PO" readonly>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Supplier <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<input id="txt_kode_supplier" name="txt_kode_supplier" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Kode Supplier" onfocus="tampilModalSupplier()" readonly>
											</div>
											<div class="col-md-5 col-sm-6 col-xs-12">
												<input id="txt_supplier" name="txt_supplier" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Supplier" readonly>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Status Bayar <span class="required">*</span>
											</label>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<select class="form-control" id="cmb_status_bayar" name="cmb_status_bayar">
													<option value="Cash" selected>Cash</option>
													<option value="Kredit">Kredit</option>
													<option value="-">-</option>
												</select>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tempo Pembayaran <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_tempo_pembayaran" name="txt_tempo_pembayaran" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Tempo Pembayaran" value="0"><span>Hari</span>
											</div>
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tempo Pengiriman <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_tempo_pengiriman" name="txt_tempo_pengiriman" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Tempo Pembayaran" value="0"><span>Hari</span>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Keterangan Pengiriman </label>
											<div class="col-md-8 col-sm-9 col-xs-12">
												<textarea id="txt_ket_pengiriman" name="txt_ket_pengiriman" class="resizable_textarea form-control" placeholder="Keterangan Pengirman"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Lokasi Pengiriman <span>*</span> </label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_lokasi_pengiriman" name="txt_lokasi_pengiriman" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Lokasi Pengiriman">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Lokasi Pembelian <span>*</span> </label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<!-- <input id="txt_lokasi_pembelian" name="txt_lokasi_pembelian" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Lokasi Pembelian"> -->
												<select class="form-control" id="cmb_lokasi_pembelian" name="cmb_lokasi_pembelian">
													<option value="">-- Pilih --</option>
													<option value="HO">HO</option>
													<option value="RO">RO</option>
													<option value="SITE">SITE</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemesan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_pemesan" name="txt_pemesan" class="form-control col-md-6 col-xs-12" required="required" type="text" placeholder="Pemesan" onfocus="tampilModalPemesan()" readonly>
											</div>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_kode_pemesan" name="txt_kode_pemesan" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Kode" readonly>
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Uang Muka <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_uang_muka" name="txt_uang_muka" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Uang Muka" value="0">
											</div>	
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Voucher <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_voucher" name="txt_no_voucher" class="form-control col-md-6 col-xs-12" required="required" type="text" placeholder="No. Voucher">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">PPN <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select class="form-control" id="cmb_ppn" name="cmb_ppn">
													<option value="N" selected>N</option>
													<option value="Y">Y</option>
													<option value="X">X</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
											<div class="col-md-8 col-sm-9 col-xs-12">
												<textarea id="txt_keterangan" name="txt_keterangan" class="resizable_textarea form-control" placeholder="Keterangan"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Dikirim ke Kebun <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<select class="form-control" id="cmb_dikirim_ke_kebun" name="cmb_dikirim_ke_kebun">
													<option value="N" selected>N</option>
													<option value="Y">Y</option>
													<option value="X">X</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x_content div_form_3">
					<div class="table-responsive">
						<table id="tableRinciPO" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Kode Barang</th>
									<th>Qty</th>
									<th>Harga</th>
									<th>Biaya Lainnya</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="tbody_rincian" name="tbody_rincian">
								<tr id="tr">
									<input type="hidden" id="hidden_proses_status" name="hidden_proses_status" value="insert">
									<td width="3%">
										<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>
										<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row"></button>
									</td>
									<!-- <form id="form_rinci" name="form_rinci" method="POST" action="javascript:;"> -->
										<td width="5%">
											<input type="text" id="txt_cari_kode_brg" name="txt_cari_kode_brg" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang()"><br />
											<label>Kode : <?php ?></label>&nbsp;<label><?php ?></label><br />
											<label>Satuan : <?php ?></label>
										</td>
										<td>
											<input type="text" id="txt_qty" name="txt_qty" placeholder="Qty" size="5" value="1" required /><br />
											<label>Stok : </label>
										</td>
										<td>
											<label>Rp</label>&nbsp;<input type="text" id="txt_harga" name="txt_harga" size="15" value="0" placeholder="Harga dalam Rupiah" required /><br />
											<label>Kurs</label>
											<select id="cmb_kurs" name="cmb_kurs" required="">
												<option value="Rp">Rp IDR</option>
												<option value="USD">&dollar; USD</option>
												<option value="SGD">S&dollar; SGD</option>
												<option value="Euro">&euro; Euro</option>
												<option value="GBP">&pound; GBP</option>
												<option value="Yen">&yen; Yen</option>
												<option value="MYR">RM MYR</option>
											</select><br />
											<label>Disc</label>&nbsp;<input type="text" id="txt_disc" name="txt_disc" size="3" value="0" placeholder="Disc"/>&nbsp;<span>%</span>
										</td>
										<td>
											<input type="text" id="txt_biaya_lain" name="txt_biaya_lain" value="0" placeholder="Biaya Lain" size="15" required /><br />
											<label>Ket. Biaya : </label><br />
											<textarea size="10" id="txt_keterangan_biaya_lain" name="txt_keterangan_biaya_lain" placeholder="Keterangan Biaya"></textarea>
										</td>
										<td>
											<!-- <textarea id="txt_keterangan_rinci" name="txt_keterangan_rinci" size="26" placeholder="Keterangan, jika ada" onkeypress="saveRinciEnter(event)"></textarea><br /> -->
											<textarea id="txt_keterangan_rinci" name="txt_keterangan_rinci" size="26" placeholder="Keterangan, jika ada"></textarea><br />
											<label>Jumlah</label><br />
											<label>Rp</label>&nbsp;<input type="text" id="txt_jumlah" name="txt_jumlah" size="15" placeholder="Jumlah" readonly required/>
										</td>
										<td width="5%">
											<button class="btn btn-xs btn-success fa fa-save" type="button" data-toggle="tooltip" data-placement="top" title="Simpan" onclick="saveRinciClick()"></button>
											<button class="btn btn-xs btn-warning fa fa-edit" type="button" data-toggle="tooltip" data-placement="top" title="Ubah" onclick="ubahRinci('1')"></button>
											<button class="btn btn-xs btn-danger fa fa-trash" type="button" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusRinci('1')"></button>
										</td>
									<!-- </form> -->
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br />
	<br />

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalDataSPP">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pilih SPP</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-5 col-sm-3 col-xs-12">Alokasi 
							</label>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<select class="form-control" id="cmb_filter_alokasi" name="cmb_filter_alokasi">
									<option value="SEMUA" selected>TAMPILKAN SEMUA</option>
									<option value="PKS">PKS</option>
									<option value="SITE">SITE</option>
									<option value="RO">RO</option>
									<option value="HO">HO</option>
								</select>
							</div>
						</div>
						<div class="table-responsive">
							<table id="tableDetailSPP" class="table table-bordered">
								<thead>
									<tr>
										<th>No.</th>
										<th>No. SPP</th>
										<th>Tgl. SPP</th>
										<th>Ref. SPP</th>
										<th>Dept. SPP</th>
										<th>Ket</th>
										<th>Lokasi</th>
										<th>Status</th>
										<th>PO</th>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalSupplier">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pilih Supplier</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="table-responsive">
							<table id="tableSupplier" class="table table-bordered">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kode</th>
										<th>Nama Supplier</th>
										<th>Jenis Usaha</th>
									</tr>
								</thead>
								<tbody id="tbodySupplier">
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalPemesan">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pemesan</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="table-responsive">
							<table id="tablePemesan" class="table table-bordered">
								<thead>
									<tr>
										<th>Kode</th>
										<th>Pemesan</th>
									</tr>
								</thead>
								<tbody id="tbodyPemesan">
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
					<div class="table-responsive">
						<input type="hidden" id="hidden_no_row" name="hidden_no_row">
						<table id="tableListBarang" class="table table-bordered" style="width: 100%;">
							<thead>
								<tr>
									<th style="width: 3% !important;">#</th>
									<th style="width: 5% !important;">No</th>
									<th style="width: 10% !important;">Kode Barang</th>
									<th style="width: 20% !important;">Nama Barang</th>
									<th style="width: 20% !important;">Grup</th>
								</tr>
							</thead>
							<tbody id="tbody_listbarang">
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<!-- JQuery Number -->
<script src="<?php echo base_url();?>assets/jquerynumber/jquery.number.js"></script>

<script>
	$(document).ready(function(){
		// $('#txt_no_spp').focus();
	
		$('#txt_tgl_po').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
		// $('.div_form_2').hide();
		// $('.div_form_3').hide();

		setInterval(function(){
		  // check_form_1();
		  // check_form_2();
		}, 1000);
	});

	function number(){
		$('#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain,#txt_jumlah').number( true );
	}

	function check_form_1(){
		if($.trim($('#txt_no_spp').val()) != '' && $.trim($('#txt_no_ref').val()) != '' && $.trim($('#txt_tgl_ref').val()) != '' && $.trim($('#txt_kode_departemen').val()) != '' && $.trim($('#txt_departemen').val()) != '' && $.trim($('#txt_tanggal').val())){
			$('.div_form_2').show();
		}
		else{
			$('.div_form_2').hide();
			$('.div_form_3').hide();
		}
	}

	function check_form_2(){
		if($.trim($('#txt_tgl_po').val()) != '' && $.trim($('#txt_kode_supplier').val()) != '' && $.trim($('#txt_supplier').val()) != '' && $.trim($('#cmb_status_bayar').val()) != '' && $.trim($('#txt_tempo_pembayaran').val()) != '' && $.trim($('#txt_tempo_pengiriman').val()) && $.trim($('#txt_ket_pengiriman').val()) && $.trim($('#txt_lokasi_pengiriman').val()) && $.trim($('#cmb_lokasi_pembelian').val()) && $.trim($('#txt_pemesan').val()) && $.trim($('#txt_kode_pemesan').val()) && $.trim($('#txt_uang_muka').val()) && $.trim($('#txt_uang_muka').val()) && $.trim($('#txt_no_voucher').val()) && $.trim($('#txt_no_voucher').val()) && $.trim($('#cmb_ppn').val()) && $.trim($('#cmb_ppn').val()) && $.trim($('#txt_keterangan').val()) && $.trim($('#cmb_dikirim_ke_kebun').val()) ){
			$('.div_form_3').show();
		}
		else{
			$('.div_form_3').hide();
		}
	}

	function pilihModalDataSPP(){
		$('#modalDataSPP').modal('show');
		$('#cmb_filter_alokasi').val("SEMUA");
		$('#tableDetailSPP').DataTable().destroy();
		var filter = "Semua";
		tableDetailSPP(filter);
	}

	function tableDetailSPP(filter){
		$('#tableDetailSPP').DataTable().destroy();
		$('#tableDetailSPP').DataTable({
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
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('po/list_spp');?>",
            "type"        : "POST",
            "data"        : {'filter':filter},
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
          "drawCallback": function(settings) {
      		$('#tableDetailSPP tr').each(function() {
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

	$('#tableDetailSPP tbody').on('click', 'tr', function () {
        var data = $('#tableDetailSPP').DataTable().row( this ).data();
        // var no_row = $('#hidden_no_row').val();
        var row_id = data[1];
        // alert(no_row);
        // alert(row_id);
        $.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/get_detail_spp'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'no_spp': row_id},
	        success: function(data){
	        	$('#modalDataSPP').modal('hide');
	        	var tglref = new Date(data.tglref);
	        	// var tanggal = new Date(data.tglppo);

	        	// id: "6467"
				// ket: "spp pks"
				// kodept: "0"
				// lokasi: "PKS"
				$('#txt_kode_departemen').val(data.kodedept);
				$('#txt_departemen').val(data.namadept);
				// noppo: "4300001"
				$('#txt_no_spp').val(data.noppotxt);
				// noref: "4300001"
				$('#txt_no_ref').val(data.noreftxt);
				// po: "0"
				// pt: ""
				// status: "DALAM PROSES"
				// status2: "0"
				// $('#txt_tanggal').val(dateToMDY(tanggal));
				$('#txt_tgl_ref').val(dateToMDY(tglref));
				// tgltrm: "2019-02-23 00:00:00"

	        	// var id = data[0].id;
	        	// data_barang(id,no_row);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
    } );

    $('#cmb_filter_alokasi').change(function(){
    	var filter = $(this).val();
    	tableDetailSPP(filter);
    })

    function dateToMDY(date) {
	    var d = date.getDate();
	    var m = date.getMonth() + 1;
	    var y = date.getFullYear();
	    // return '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
	    return (m<=9 ? '0' + m : m) + '/' + (d <= 9 ? '0' + d : d) + '/' + y;
	}

	function tampilModalSupplier(){
		$('#modalSupplier').modal('show');
		$('#tableSupplier').DataTable().destroy();
		tableModalSupplier();
	}

	function tableModalSupplier(){
		$('#tableSupplier').DataTable().destroy();
		$('#tableSupplier').DataTable({
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
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('po/list_supplier');?>",
            "type"        : "POST",
            "data"        : {},
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
          "drawCallback": function(settings) {
      		$('#tableSupplier tr').each(function() {
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

	$('#tableSupplier tbody').on('click', 'tr', function () {
        var data = $('#tableSupplier').DataTable().row( this ).data();
        var kode = data[1];
        var nama_supplier = data[2];
        $('#txt_kode_supplier').val(kode);
        $('#txt_supplier').val(nama_supplier);
        $('#modalSupplier').modal('hide');
    } );

    function tampilModalPemesan(){
    	$('#modalPemesan').modal('show');
    	tablePemesan();
    }

    function tablePemesan(){
    	$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/get_pemesan'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {},
	        success: function(data){
	        	$('#tbodyPemesan').empty();
	        	$.each(data,function(index){
	        		var tr_buka = '<tr onclick="setPemesan(\''+data[index].kode+'\',\''+data[index].pemesan+'\')">';
	        		var tr_tutup = '</tr>';
	        		var td_kode = '<td>'+data[index].kode+'</td>';
	        		var td_pemesan = '<td>'+data[index].pemesan+'</td>';
	        		$('#tbodyPemesan').append(tr_buka+td_kode+td_pemesan+tr_tutup);
	        	})
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
    }

    function setPemesan(kode,pemesan){
    	$('#txt_kode_pemesan').val(kode);
    	$('#txt_pemesan').val(pemesan);
    	$('#modalPemesan').modal('hide');
    }

    function tambah_row(){
    	// $('#tbody_rincian tr:first').clone().appendTo("#tbody_rincian").find("input[type='text'],textarea,input[type='hidden']").not("#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain").val("");
    	$('#tbody_rincian tr:first').clone().appendTo("#tbody_rincian").find("input[type='text'],textarea,input[type='hidden']").val("");
    	number();
    }

    $('#tbody_rincian').on('click','.btn_hapus_row',function(){
    	var rowCount = $("#tableRinciPO td").closest("tr").length;
        
		if (rowCount != 1){
			$(this).parent().parent().remove();
		}
		else{
			swal('Tidak Bisa dihapus, item PO tinggal 1');
		}
	})

    $('#tbody_rincian').on('keyup','#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain,#txt_jumlah',function(e){
  //   	$(this).parent().siblings().children().each(function(index){
		// 	if($(this).is('#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain,#txt_jumlah')){
		// 		console.log(index);
		// 		console.log(this.value);
		// 	}
		// })

    	$('#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain').each(function(index,el){
    		// var arr = new Array;
    		// arr.push(index);
    		console.log($(this).eq(index).val());
    		// console.log('Index ke '+index);
    		// console.log($(this).val());
    		// console.log($(this).attr('id'));
    		// console.log(this.value);
    	})


    	// console.log($('#tbody_rincian #txt_qty').val());

    	// $('#txt_qty:last,#txt_harga:last,#txt_disc:last,#txt_biaya_lain:last').each(function(index){
    	// 	console.log('Value '+$(this).val());
    	// 	console.log('Id : '+$(this).attr('id'));
    	// 	console.log('Index : '+index);
    	// })

    });

    $('#tbody_rincian').on('keypress','#txt_keterangan_rinci',function(e){
    	if(e.keyCode == 13 && !e.shiftKey){
			if($('#hidden_proses_status').val() == 'insert'){
				// saveRinci();
				// var all_value = $(this).parent().siblings().children();
				// console.log(all_value);
				// $.each(this,function(index){
				// 	console.log($(this).parent().siblings().children().val());
				// 	// console.log(index);
				// 	// if(index == 0 || index == 6){
				// 		// return;
				// 	// }
				// })

				$(this).parent().siblings().children().each(function(index){
					// console.log($(this).parent().parent().children());
				// $(this).parent().parent().children().find("input[type='text'],textarea,input[type='hidden']").each(function(index){
					// console.log($(this).find('input,textarea,select'));
					// $(this).find('input,textarea,select').each(function(){
						// console.log(this[index].value);
						if($(this).is('input,textarea,select')){
						console.log(index);
						console.log(this.value);

						}
					// })
				})
			}
			else if($('#hidden_proses_status').val() == 'update'){
				updateRinci(no);
			}
		}
	})

    // function saveRinciEnter(e){
 //    $('#txt_keterangan_rinci').keypress(function(e){
 //    	if(e.keyCode == 13 && !e.shiftKey){
	// 		if($('#hidden_proses_status').val() == 'insert'){
	// 			// saveRinci();
	// 			console.log($(this).val());
	// 		}
	// 		else if($('#hidden_proses_status').val() == 'update'){
	// 			updateRinci(no);
	// 		}
	// 	}
	// })
	// }

	function cari_barang(){
		// $('#hidden_no_row').empty();
		// $('#hidden_no_row').val(no_row);
		$('#modalListBarang').modal('show');
		$('#tableListBarang').DataTable().destroy();
		listBarang();
	}

	function listBarang(){
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
          "order"           : [],
          "fnRowCallback": function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
          },
          "ajax"            : {
            "url"         : "<?php echo site_url('po/list_barang');?>",
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
		    { "width": "20%" }
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

	function saveRinciClick(){
		saveRinci();
	}

	function validasi(){

	}

	function saveRinci(){
		// validasi();
		saveData();
	}

	function saveData(){
		// console.log(this.value);
		// var form_data = new FormData();

		// form_data.append('cmb_jenis_permohonan',$('#cmb_jenis_permohonan').val());
	}

</script>