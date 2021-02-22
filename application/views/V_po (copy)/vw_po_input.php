<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>PO <small>Purchase Order</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group" class="div_form_1">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih PO <span class="required">*</span></label>
							<div class="col-md-5 col-sm-9 col-xs-12">
								<button class="btn btn-sm btn-info" type="button" data-toggle="tooltip" data-placement="top" title="Pilih" onclick="pilihModalDataSPP()">Pilih</button>
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

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalDataSPP">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Detail PO</h4>
				</div>
				<div class="modal-body">
					<h5>Rubah Quantity yang Disetujui</h5>
					<div class="table-responsive">
						<table id="tableDetailSPP" class="table table-bordered">
							<thead>
								<tr>
									<th>No. SPP</th>
									<th>Tgl. SPP</th>
									<th>Ref. SPP</th>
									<th>Lokasi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>3244122</td>
									<td>2011/04/25</td>
									<td>SPP/3244122</td>
									<td>SITE</td>
								</tr>
								<tr>
									<td>3244122</td>
									<td>2011/04/25</td>
									<td>SPP/3244122</td>
									<td>SITE</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Status PO</label>
							<div class="col-md-5 col-sm-6 col-xs-12">
								<select id="cmb_status_spp" name="cmb_status_spp" class="form-control">
									<option value="">-- Pilih --</option>
									<option value="DS">Disetujui</option>
									<option value="DT">Ditolak</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-3 col-xs-12">
								<button class="btn btn-md btn-info" data-toggle="tooltip" data-placement="right" title="Simpan" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()">Simpan</button>
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
</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<script>
	$(document).ready(function(){


	});

	function pilihModalDataSPP(){
		$('#modalDataSPP').modal('show');
	}

</script>