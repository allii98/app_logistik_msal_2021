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
						<div class="form-group div_form_1">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Budget <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6 col-xs-12">
								<select class="form-control" id="cmb_jenis_budget" name="cmb_jenis_budget" required>
									<option value="">-- Pilih --</option>
									<option value="TEKNIK">TEKNIK</option>
									<option value="BIBITAN">BIBITAN</option>
									<option value="LC & TANAM">LC & TANAM</option>
									<option value="RAWAT">RAWAT</option>
									<option value="PANEN">PANEN</option>
									<option value="TEKNIK">TEKNIK</option>
									<option value="PABRIK">PABRIK</option>
									<option value="KANTOR">KANTOR</option>
									<option value="Kendaraan">Kendaraan</option>
									<option value="TBM">TBM</option>
								</select>
							</div>
							<!-- <label class="control-label col-md-2 col-sm-3 col-xs-12">Main Account <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<input id="txt_main_account" name="txt_main_account" class="form-control col-md-2 col-xs-12" required="required" type="text" value="0">
							</div> -->
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
												<textarea id="txt_ket_pengiriman" name="txt_ket_pengiriman" class="resizable_textarea form-control" placeholder="Keterangan Pengiriman"></textarea>
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
											<label class="control-label col-md-3 col-sm-3 col-xs-12">No. Penawaran
											</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_no_penawaran" name="txt_no_penawaran" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="No. Penawaran">
											</div>
										</div>
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
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Total Pembayaran <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_total_pembayaran" name="txt_total_pembayaran" class="form-control col-md-6 col-xs-12" required="required" type="text" placeholder="Total Pembayaran" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x_content div_form_3">
					<!-- <label id="lbl_spp_status" name="lbl_spp_status">No. PO : ...</label> -->
					<h4 id="h4_no_po" name="h4_no_po"></h4>
					<input type="hidden" id="hidden_no_po" name="hidden_no_po">
					<input type="hidden" id="hidden_id_po" name="hidden_id_po">
					<input type="hidden" id="hidden_no_ref_po" name="hidden_no_ref_po">
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
								<!-- <tr id="tr_1">
									<td width="3%">
										<input type="text" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
										<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>
										<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('1')"></button>
									</td>
									<form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
										<td width="5%">
											<input type="text" id="txt_cari_kode_brg_1" name="txt_cari_kode_brg_1" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('1')"><br />
											<label id="lbl_kode_brg_1">Kode : ... </label><br />
											<label id="lbl_nama_brg_1">Nama Barang : ...</label><br />
											<label id="lbl_merk_1">Merk : </label><br />
											<input type="text" id="txt_merk_1" name="txt_merk_1" placeholder="Merk" required>

											<input type="text" id="hidden_kode_brg_1" name="hidden_kode_brg_1">
											<input type="text" id="hidden_nama_brg_1" name="hidden_nama_brg_1">
										</td>
										<td>
											<input type="text" id="txt_qty_1" name="txt_qty_1" placeholder="Qty" size="8" value="1" onkeyup="jumlah('1')" required /><br />
											<label id="lbl_satuan_brg_1">Satuan : ...</label><br />
											
											<input type="text" id="hidden_satuan_brg_1" name="hidden_satuan_brg_1">
										</td>
										<td>
											<label>Rp</label>&nbsp;<input type="text" id="txt_harga_1" name="txt_harga_1" size="15" value="0" onkeyup="jumlah('1')" placeholder="Harga dalam Rupiah" required /><br />
											<label>Kurs</label>
											<select id="cmb_kurs_1" name="cmb_kurs_1" required="">
												<option value="Rp">Rp IDR</option>
												<option value="USD">&dollar; USD</option>
												<option value="SGD">S&dollar; SGD</option>
												<option value="Euro">&euro; Euro</option>
												<option value="GBP">&pound; GBP</option>
												<option value="Yen">&yen; Yen</option>
												<option value="MYR">RM MYR</option>
											</select><br />
											<label>Disc</label>&nbsp;<input type="text" id="txt_disc_1" name="txt_disc_1" size="3" value="0" onkeyup="jumlah('1')" placeholder="Disc"/>&nbsp;<span>%</span>
										</td>
										<td>
											<input type="text" id="txt_biaya_lain_1" name="txt_biaya_lain_1" value="0" onkeyup="jumlah('1')" placeholder="Biaya Lain" size="15" required /><br />
											<label>Ket. Biaya : </label><br />
											<textarea size="10" id="txt_keterangan_biaya_lain_1" name="txt_keterangan_biaya_lain_1" placeholder="Keterangan Biaya"></textarea>
										</td>
										<td>
											<textarea id="txt_keterangan_rinci_1" name="txt_keterangan_rinci_1" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,1)"></textarea><br />
											<label>Jumlah</label><br />
											<label>Rp</label>&nbsp;<input type="text" id="txt_jumlah_1" name="txt_jumlah_1" size="15" placeholder="Jumlah" readonly required/>
											<label id="lbl_status_simpan_1"></label>
											<input type="text" id="hidden_id_po_item_1" name="hidden_id_po_item_1">
										</td>
										<td width="5%">
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
									<th style="width: 20% !important;">No. SPP</th>
									<!-- <th style="width: 20% !important;">Grup</th> -->
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

		$('#txt_tempo_pembayaran,#txt_tempo_pengiriman,#txt_uang_muka').number( true );
		$('#txt_total_pembayaran').number( true );
		
		var id = <?php echo $this->uri->segment(3) ?>;
		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/get_edit_po'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id},
	        success: function(data){
	        	console.log(data);
	        	var tglref_spp = new Date(data.po.tgl_refppo);
	        	var tanggal = new Date(data.po.tglppo);
	        	var tgl_po = new Date(data.po.tglpo);

	        	$('#txt_no_spp').val(data.po.noppotxt);
	        	$('#txt_no_ref').val(data.po.no_refppo);
	        	$('#txt_tgl_ref').val(dateToMDY(tglref_spp));
	        	$('#txt_kode_departemen').val(data.po.kd_dept);
	        	$('#txt_departemen').val(data.po.ket_dept);
	        	$('#txt_tanggal').val(dateToMDY(tanggal));
	        	$('#cmb_jenis_budget').val(data.po.grup);
	        	$('#txt_tgl_po').val(dateToMDY(tgl_po));
	        	$('#txt_kode_supplier').val(data.po.kode_supply);
	        	$('#txt_supplier').val(data.po.nama_supply);
	        	$('#cmb_status_bayar').val(data.po.bayar);
	        	$('#txt_tempo_pembayaran').val(data.po.tempo_bayar);
	        	$('#txt_tempo_pengiriman').val(data.po.tempo_kirim);
	        	$('#txt_ket_pengiriman').val(data.po.ket_kirim);
	        	$('#txt_lokasi_pengiriman').val(data.po.lokasikirim);
	        	$('#cmb_lokasi_pembelian').val(data.po.lokasi_beli);
	        	$('#txt_no_penawaran').val(data.po.ket_acc);
	        	$('#txt_pemesan').val(data.po.pemesan);
	        	$('#txt_kode_pemesan').val(data.po.kode_pemesan);
	        	$('#txt_uang_muka').val(data.po.uangmuka);
	        	$('#txt_no_voucher').val(data.po.voucher);
	        	$('#cmb_ppn').val(data.po.ppn);
	        	$('#txt_keterangan').val(data.po.ket);

	        	data.po.kirim == 1 ? ($('#cmb_dikirim_ke_kebun').val('Y')) : ($('#cmb_dikirim_ke_kebun').val('N'));

	        	$('#txt_total_pembayaran').val(data.po.totalbayar);

	        	$('#h4_no_po').empty();
	        	$('#h4_no_po').append("No. PO : "+data.po.nopotxt);
	        	$('#hidden_no_po').val(data.po.nopotxt);
	        	$('#hidden_id_po').val(data.po.id);
	        	$('#hidden_no_ref_po').val(data.po.noreftxt);

	        	$.each(data.item_po,function(index,value){
	        		var n = parseInt(index)+parseInt(1);
	        		var tr_buka = '<tr id="tr_'+n+'">';
					var td_col_1 = 	'<td width="3%">'
										+'<input type="hidden" id="hidden_proses_status_'+n+'" name="hidden_proses_status_'+n+'" value="insert">'
										+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>'
										+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+n+')"></button>'
									+'</td>';
					var form_buka = '<form id="form_rinci_'+n+'" name="form_rinci_'+n+'" method="POST" action="javascript:;">';
					var td_col_2 =	'<td width="5%">'
										+'<input type="text" id="txt_cari_kode_brg_'+n+'" name="txt_cari_kode_brg_'+n+'" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('+n+')" disabled><br />'
										+'<label id="lbl_kode_brg_'+n+'">Kode : ... </label><br />'
										+'<label id="lbl_nama_brg_'+n+'">Nama Barang : ...</label><br />'
										+'<label id="lbl_merk_1">Merk : </label><br />'
										+'<input type="text" id="txt_merk_'+n+'" name="txt_merk_'+n+'" placeholder="Merk" readonly required>'
										+'<input type="hidden" id="hidden_kode_brg_'+n+'" name="hidden_kode_brg_'+n+'">'
										+'<input type="hidden" id="hidden_nama_brg_'+n+'" name="hidden_nama_brg_'+n+'">'
									+'</td>';
					var td_col_3 =	'<td>'
										+'<input type="text" class="number" id="txt_qty_'+n+'" name="txt_qty_'+n+'" placeholder="Qty" size="8" value="1" onkeyup="jumlah('+n+')" readonly required /><br />'
										+'<label id="lbl_satuan_brg_'+n+'">Satuan : ...</label><br />'
										+'<input type="hidden" id="hidden_satuan_brg_'+n+'" name="hidden_satuan_brg_'+n+'">'
									+'</td>';
					var td_col_4 =	'<td>'
										+'<label>Rp</label>&nbsp;<input type="text" id="txt_harga_'+n+'" name="txt_harga_'+n+'" size="15" value="0" onkeyup="jumlah('+n+')" placeholder="Harga dalam Rupiah" readonly required /><br />'
										+'<label>Kurs</label>'
										+'<select id="cmb_kurs_'+n+'" name="cmb_kurs_'+n+'" required="" disabled>'
											+'<option value="Rp">Rp IDR</option>'
											+'<option value="USD">&dollar; USD</option>'
											+'<option value="SGD">S&dollar; SGD</option>'
											+'<option value="Euro">&euro; Euro</option>'
											+'<option value="GBP">&pound; GBP</option>'
											+'<option value="Yen">&yen; Yen</option>'
											+'<option value="MYR">RM MYR</option>'
										+'</select><br />'
										+'<label>Disc</label>&nbsp;<input type="text" id="txt_disc_'+n+'" name="txt_disc_'+n+'" size="3" value="0" onkeyup="jumlah('+n+')" placeholder="Disc" readonly/>&nbsp;<span>%</span>'
									+'</td>';
					var td_col_5 = 	'<td>'
										+'<input type="text" id="txt_biaya_lain_'+n+'" name="txt_biaya_lain_'+n+'" value="0" onkeyup="jumlah('+n+')" placeholder="Biaya Lain" size="15" readonly required /><br />'
										+'<label>Ket. Biaya : </label><br />'
										+'<textarea class="resizable_textarea form-control" size="10" id="txt_keterangan_biaya_lain_'+n+'" name="txt_keterangan_biaya_lain_'+n+'" placeholder="Keterangan Biaya" readonly></textarea>'
									+'</td>';
					var td_col_6 = 	'<td>'
										+'<textarea class="resizable_textarea form-control" id="txt_keterangan_rinci_'+n+'" name="txt_keterangan_rinci_'+n+'" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+n+')" readonly></textarea><br />'
										+'<label>Jumlah</label><br />'
										+'<label>Rp</label>&nbsp;<input type="text" id="txt_jumlah_'+n+'" name="txt_jumlah_'+n+'" size="15" placeholder="Jumlah" readonly required/>'
										+'<label id="lbl_status_simpan_'+n+'"></label>'
										+'<input type="hidden" id="hidden_id_po_item_'+n+'" name="hidden_id_po_item_'+n+'">'
									+'</td>';
					var td_col_7 = '<td width="5%">'
										+'<button style="display:none;" class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+n+'" name="btn_simpan_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+n+')"></button>'
										+'<button style="display:block;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+n+'" name="btn_ubah_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+n+')"></button>'
										+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+n+'" name="btn_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+n+')"></button>'
										+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+n+'" name="btn_cancel_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+n+')"></button>'
										+'<button style="display:block;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+n+'" name="btn_hapus_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+n+')"></button>'
									+'</td>';
					var form_tutup = '</form>';
					var tr_tutup = '</tr>';	

					$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+form_tutup+tr_tutup);

					$('#lbl_kode_brg_'+n).empty();
					$('#lbl_nama_brg_'+n).empty();

					$('#lbl_kode_brg_'+n).append("Kode : "+data.item_po[index].kodebartxt);
					$('#lbl_nama_brg_'+n).append("Nama Barang : "+data.item_po[index].nabar);

					$('#lbl_satuan_brg_'+n).empty();

					if(typeof data.item_po[index].sat == "undefined"){
						data.item_po[index].sat = "-";
					}

					$('#txt_merk_'+n).val(data.item_po[index].merek);
					$('#hidden_kode_brg_'+n).val(data.item_po[index].kodebartxt);
					$('#hidden_nama_brg_'+n).val(data.item_po[index].nabar);
					
					var parse_qty = parseInt(data.item_po[index].qty);

					$('#txt_qty_'+n).val(parse_qty);
					$('#lbl_satuan_brg_'+n).append("Satuan : "+data.item_po[index].sat);
					$('#hidden_satuan_brg_'+n).val(data.item_po[index].sat);

					$('#txt_harga_'+n).val(data.item_po[index].harga);
					$('#cmb_kurs_'+n).val(data.item_po[index].kurs);
					$('#txt_disc_'+n).val(data.item_po[index].disc);

					$('#txt_biaya_lain_'+n).val(data.item_po[index].JUMLAHBPO);
					$('#txt_keterangan_biaya_lain_'+n).val(data.item_po[index].nama_bebanbpo);
					$('#txt_keterangan_rinci_'+n).val(data.item_po[index].ket);
					$('#txt_jumlah_'+n).val(data.item_po[index].jumharga);
					
					$('#hidden_id_po').val(data.po.id);
					$('#hidden_id_po_item_'+n).val(data.item_po[index].id);
					// number(index);
					$('#txt_qty_'+index+',#txt_harga_'+index+',#txt_disc_'+index+',#txt_biaya_lain_'+index+',#txt_jumlah_'+index).number( true,2 );

	        	});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	});

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

	function jumlah(no_row){
		// $('#tbody_rincian').on('keyup','#txt_qty,#txt_harga,#txt_disc,#txt_biaya_lain',function(e){
		var qty = $('#txt_qty_'+no_row).val();
    	var harga = $('#txt_harga_'+no_row).val();
    	var disc = $('#txt_disc_'+no_row).val();
    	var biaya_lain = $('#txt_biaya_lain_'+no_row).val();

    	var hargaDisc = (parseInt(harga)*parseInt(disc))/100;
    	var hargaSetelahDisc = parseInt(harga)-parseInt(hargaDisc);
    	
    	var nilai = (parseFloat(qty)*parseFloat(hargaSetelahDisc))+parseFloat(biaya_lain);
    	
    	$('#txt_jumlah_'+no_row).val(nilai);
		// })
	}

	function cari_barang(no_row){
		if($.trim($('#txt_no_spp').val()) == ''){
			swal('Pilih SPP Terlebih Dahulu');
		}
		else{
			$('#hidden_no_row').empty();
			$('#hidden_no_row').val(no_row);
			$('#modalListBarang').modal('show');
			$('#tableListBarang').DataTable().destroy();
			var no_spp = $('#txt_no_spp').val();
			listBarangSPP(no_row,no_spp);
			// listBarangSPP(no_row);
		}
	}

	function listBarangSPP(no_row,no_spp){
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
            "url"         : "<?php echo site_url('po/list_barang_spp');?>",
            "type"        : "POST",
            "data"        : {'no_spp':no_spp},
            "error"       : function(request){
              alert(request.responseText);
            }
          },
          "columns": [
		    { "width": "3%" },
		    { "width": "5%" },
		    { "width": "10%" },
		    { "width": "40%" },
		    { "width": "10%" }
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
        var data = $('#tableListBarang').DataTable().row( this ).data();
        var no_row = $('#hidden_no_row').val();
        var row_id = data[2];
        // alert(no_row);
        // alert(row_id);
        $.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/get_kodebar'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'row_id': row_id},
	        success: function(data){
	        	var id = data[0].id;
	        	data_barang(id,no_row);
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
    } );

    function data_barang(id,no_row){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/data_barang'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : {'id': id},
	        success: function(data){
	        	// $.each(data, function(index) {
	        		$('#lbl_kode_brg_'+no_row).empty();
					$('#lbl_nama_brg_'+no_row).empty()
					$('#lbl_satuan_brg_'+no_row).empty();

					$('#hidden_kode_brg_'+no_row).empty();
					$('#hidden_nama_brg_'+no_row).empty();
					$('#hidden_satuan_brg_'+no_row).empty();

					$('#lbl_kode_brg_'+no_row).append('Kode : '+data[0].kodebar);
					$('#lbl_nama_brg_'+no_row).append('Nama Barang : '+data[0].nabar);
					$('#lbl_satuan_brg_'+no_row).append('Satuan : '+data[0].satuan);

					$('#hidden_kode_brg_'+no_row).val(data[0].kodebar);
					$('#hidden_nama_brg_'+no_row).val(data[0].nabar);
					// $('#hidden_stok_'+no_row).val(data[0].stok);
					$('#hidden_satuan_brg_'+no_row).val(data[0].satuan);

					var kodbar = data[0].kodebar;
					$('#modalListBarang').modal('hide');
					$('#txt_qty_'+no_row).focus();
					// sum_stok(kodbar,no_row);
				// });
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function pilihModalDataSPP(){
		$('#modalDataSPP').modal('show');
		$('#cmb_filter_alokasi').val("SEMUA");
		$('#tableDetailSPP').DataTable().destroy();
		var filter = "Semua";
		tableDetailSPP(filter);
	}

	$('#cmb_filter_alokasi').change(function(){
    	var filter = $(this).val();
    	tableDetailSPP(filter);
    })

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
        var row_id = data[1];
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
				$('#cmb_jenis_budget').val(data.namadept);
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

    // var n = 2;

    function tambah_row(n){
    	++n;
		var tr_buka = '<tr id="tr_'+n+'">';
		var td_col_1 = 	'<td width="3%">'
							+'<input type="hidden" id="hidden_proses_status_'+n+'" name="hidden_proses_status_'+n+'" value="insert">'
							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row()"></button>'
							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row" name="btn_hapus_row" onclick="hapus_row('+n+')"></button>'
						+'</td>';
		var form_buka = '<form id="form_rinci_'+n+'" name="form_rinci_'+n+'" method="POST" action="javascript:;">';
		var td_col_2 =	'<td width="5%">'
							+'<input type="text" id="txt_cari_kode_brg_'+n+'" name="txt_cari_kode_brg_'+n+'" placeholder="Cari Kode/Nama Barang" onfocus="cari_barang('+n+')"><br />'
							+'<label id="lbl_kode_brg_'+n+'">Kode : ... </label><br />'
							+'<label id="lbl_nama_brg_'+n+'">Nama Barang : ...</label><br />'
							+'<label id="lbl_merk_1">Merk : </label><br />'
							+'<input type="text" id="txt_merk_'+n+'" name="txt_merk_'+n+'" placeholder="Merk" required>'
							+'<input type="hidden" id="hidden_kode_brg_'+n+'" name="hidden_kode_brg_'+n+'">'
							+'<input type="hidden" id="hidden_nama_brg_'+n+'" name="hidden_nama_brg_'+n+'">'
						+'</td>';
		var td_col_3 =	'<td>'
							+'<input type="text" class="number" id="txt_qty_'+n+'" name="txt_qty_'+n+'" placeholder="Qty" size="8" value="1" onkeyup="jumlah('+n+')" required /><br />'
							+'<label id="lbl_satuan_brg_'+n+'">Satuan : ...</label><br />'
							+'<input type="hidden" id="hidden_satuan_brg_'+n+'" name="hidden_satuan_brg_'+n+'">'
						+'</td>';
		var td_col_4 =	'<td>'
							+'<label>Rp</label>&nbsp;<input type="text" id="txt_harga_'+n+'" name="txt_harga_'+n+'" size="15" value="0" onkeyup="jumlah('+n+')" placeholder="Harga dalam Rupiah" required /><br />'
							+'<label>Kurs</label>'
							+'<select id="cmb_kurs_'+n+'" name="cmb_kurs_'+n+'" required="">'
								+'<option value="Rp">Rp IDR</option>'
								+'<option value="USD">&dollar; USD</option>'
								+'<option value="SGD">S&dollar; SGD</option>'
								+'<option value="Euro">&euro; Euro</option>'
								+'<option value="GBP">&pound; GBP</option>'
								+'<option value="Yen">&yen; Yen</option>'
								+'<option value="MYR">RM MYR</option>'
							+'</select><br />'
							+'<label>Disc</label>&nbsp;<input type="text" id="txt_disc_'+n+'" name="txt_disc_'+n+'" size="3" value="0" onkeyup="jumlah('+n+')" placeholder="Disc"/>&nbsp;<span>%</span>'
						+'</td>';
		var td_col_5 = 	'<td>'
							+'<input type="text" id="txt_biaya_lain_'+n+'" name="txt_biaya_lain_'+n+'" value="0" onkeyup="jumlah('+n+')" placeholder="Biaya Lain" size="15" required /><br />'
							+'<label>Ket. Biaya : </label><br />'
							+'<textarea size="10" id="txt_keterangan_biaya_lain_'+n+'" name="txt_keterangan_biaya_lain_'+n+'" placeholder="Keterangan Biaya"></textarea>'
						+'</td>';
		var td_col_6 = 	'<td>'
							+'<textarea id="txt_keterangan_rinci_'+n+'" name="txt_keterangan_rinci_'+n+'" size="26" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+n+')"></textarea><br />'
							+'<label>Jumlah</label><br />'
							+'<label>Rp</label>&nbsp;<input type="text" id="txt_jumlah_'+n+'" name="txt_jumlah_'+n+'" size="15" placeholder="Jumlah" readonly required/>'
							+'<label id="lbl_status_simpan_'+n+'"></label>'
							+'<input type="hidden" id="hidden_id_po_item_'+n+'" name="hidden_id_po_item_'+n+'">'
						+'</td>';
		var td_col_7 = '<td width="5%">'
							+'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+n+'" name="btn_simpan_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+n+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+n+'" name="btn_ubah_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+n+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+n+'" name="btn_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+n+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+n+'" name="btn_cancel_update_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+n+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+n+'" name="btn_hapus_'+n+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+n+')"></button>'
						+'</td>';
		var form_tutup = '</form>';
		var tr_tutup = '</tr>';	

		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+form_tutup+tr_tutup);
		number(n);
		n = parseInt(n)+ parseInt(1);
	}

	function hapus_row(id){
		var rowCount = $("#tableRinciPO td").closest("tr").length;
        
		if (rowCount != 1){
			$('#tr_'+id).remove();
		}
		else{
			swal('Tidak Bisa dihapus, item SPP tinggal 1');
		}
	}

	function number(row){
		$('#txt_qty_'+row+',#txt_harga_'+row+',#txt_disc_'+row+',#txt_biaya_lain_'+row+',#txt_jumlah_'+row).number( true,2 );
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
		saveRinci(no);
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
			if($('#'+arr_id).is('input') || $('#'+arr_id).is('textarea')){
				if(arr_id == 'hidden_kode_brg_'+no){
	            	$('#lbl_kode_brg_'+no).css({
	            		"background": "#FFCECE"
	            	})
	            	if(!$('#lbl_kode_brg_'+no).next().is('br#br_'+no)){
		            	$('#lbl_kode_brg_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');	
	            	}
	            }
	            else if(arr_id == 'hidden_nama_brg_'+no){
	            	$('#lbl_nama_brg_'+no).css({
	            		"background": "#FFCECE"
	            	})
	            	if(!$('#lbl_nama_brg_'+no).next().is('br#br_'+no)){
	            		$('#lbl_nama_brg_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
	            	}
	            }
	            // else if(arr_id == 'hidden_stok_'+no){
	            // 	$('#lbl_stok_'+no).css({
	            // 		"background": "#FFCECE"
	            // 	})
	            // 	if(!$('#lbl_stok_'+no).next().is('br#br_'+no)){
	            // 		$('#lbl_stok_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
	            // 	}
	            // }
	            else if(arr_id == 'hidden_satuan_brg_'+no){
	            	$('#lbl_satuan_brg_'+no).css({
	            		"background": "#FFCECE"
	            	})
	            	if(!$('#lbl_satuan_brg_'+no).next().is('br#br_'+no)){
	            		$('#lbl_satuan_brg_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
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

	function saveRinci(no){
		var isValid = true;
	    // $('#hidden_kode_brg_'+no+',#hidden_nama_brg_'+no+',#txt_qty_'+no+',#hidden_stok_'+no+',#hidden_satuan_brg_'+no).each(function (e) {
	    //     if ($.trim($(this).val()) == '') {
	    //         isValid = false;
	    //         validasi($(this).attr("id"),no);
	    //     }
	    //     else {
	    //     	if($(this).attr('id') == 'hidden_kode_brg_'+no){
	    //         	$('#lbl_kode_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_kode_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_kode_brg_'+no).next().remove();
		   //          	$('#lbl_kode_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else if($(this).attr('id') == 'hidden_nama_brg_'+no){
	    //         	$('#lbl_nama_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_nama_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_nama_brg_'+no).next().remove();
		   //          	$('#lbl_nama_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else if($(this).attr('id') == 'hidden_stok_'+no){
	    //         	$('#lbl_stok_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_stok_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_stok_'+no).next().remove();
		   //          	$('#lbl_stok_'+no).next().remove();
		   //      	}
	    //         }
	    //         else if($(this).attr('id') == 'hidden_satuan_brg_'+no){
	    //         	$('#lbl_satuan_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_satuan_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_satuan_brg_'+no).next().remove();
		   //          	$('#lbl_satuan_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else{
		   //          $(this).css({
		   //              "background": ""
		   //          });
		   //          if($(this).next().is('br#br_'+no)){
		   //          	$(this).next().remove();
		   //          	$(this).next().remove();
		   //      	}
		   //      }
	    //     }
	    // });
	    if (isValid == true){
	        saveData(no);
	    }
	}

	function saveData(no){
		var form_data = new FormData();

		form_data.append('txt_no_spp',$('#txt_no_spp').val());
		form_data.append('txt_no_ref',$('#txt_no_ref').val());
		form_data.append('txt_tgl_ref',$('#txt_tgl_ref').val());
		form_data.append('txt_kode_departemen',$('#txt_kode_departemen').val());
		form_data.append('txt_departemen',$('#txt_departemen').val());
		form_data.append('txt_tanggal',$('#txt_tanggal').val());
		form_data.append('cmb_jenis_budget',$('#cmb_jenis_budget').val());
		// form_data.append('txt_main_account',$('#txt_main_account').val());

		form_data.append('txt_tgl_po',$('#txt_tgl_po').val());
		form_data.append('txt_kode_supplier',$('#txt_kode_supplier').val());
		form_data.append('txt_supplier',$('#txt_supplier').val());
		form_data.append('cmb_status_bayar',$('#cmb_status_bayar').val());
		form_data.append('txt_tempo_pembayaran',$('#txt_tempo_pembayaran').val());
		form_data.append('txt_tempo_pengiriman',$('#txt_tempo_pengiriman').val());
		form_data.append('txt_ket_pengiriman',$('#txt_ket_pengiriman').val());
		form_data.append('txt_lokasi_pengiriman',$('#txt_lokasi_pengiriman').val());
		form_data.append('cmb_lokasi_pembelian',$('#cmb_lokasi_pembelian').val());
		form_data.append('txt_no_penawaran',$('#txt_no_penawaran').val());
		form_data.append('txt_pemesan',$('#txt_pemesan').val());
		form_data.append('txt_kode_pemesan',$('#txt_kode_pemesan').val());
		form_data.append('txt_uang_muka',$('#txt_uang_muka').val());
		form_data.append('txt_no_voucher',$('#txt_no_voucher').val());
		form_data.append('cmb_ppn',$('#cmb_ppn').val());
		// form_data.append('txt_keterangan',$('#txt_keterangan').val());
		form_data.append('cmb_dikirim_ke_kebun',$('#cmb_dikirim_ke_kebun').val());
		form_data.append('txt_total_pembayaran',$('#txt_total_pembayaran').val());

		form_data.append('txt_cari_kode_brg',$('#txt_cari_kode_brg_'+no).val());
		form_data.append('txt_merk',$('#txt_merk_'+no).val());
		form_data.append('txt_qty',$('#txt_qty_'+no).val());
		form_data.append('txt_harga',$('#txt_harga_'+no).val());
		form_data.append('cmb_kurs',$('#cmb_kurs_'+no).val());
		form_data.append('txt_disc',$('#txt_disc_'+no).val());
		form_data.append('txt_biaya_lain',$('#txt_biaya_lain_'+no).val());
		form_data.append('txt_keterangan_biaya_lain',$('#txt_keterangan_biaya_lain_'+no).val());
		form_data.append('txt_keterangan_rinci',$('#txt_keterangan_rinci_'+no).val());
		form_data.append('txt_jumlah',$('#txt_jumlah_'+no).val());

		form_data.append('hidden_no_po',$('#hidden_no_po').val());
		form_data.append('hidden_no_ref_po',$('#hidden_no_ref_po').val());
		form_data.append('hidden_kode_brg',$('#hidden_kode_brg_'+no).val());
		form_data.append('hidden_nama_brg',$('#hidden_nama_brg_'+no).val());
		form_data.append('hidden_satuan_brg',$('#hidden_satuan_brg_'+no).val());
		// form_data.append('hidden_stok',$('#hidden_stok_'+no).val());
		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/simpan_rinci_po'); ?>",
	        dataType  : "JSON",
	        beforeSend: function() {
	        	$('#lbl_status_simpan_'+no).empty();
	        	$('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
	        	if($.trim($('#hidden_no_po').val()) == ''){
	        		$('#lbl_spp_status').empty();
	        		$('#lbl_spp_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
	        	}
	        	$('#btn_ubah_'+no).css('display','block');
	        	$('#btn_hapus_'+no).css('display','block');
	        },
	        cache   : false,
	        contentType : false,
	        processData : false,
	        
	        data    : form_data,
	        success: function(data){
	        	if(data.status == true){
	        		$('#tableRinciPO tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_cari_kode_brg_'+no).attr('readonly','');
		        	$('#tableRinciPO tbody #tr_'+no+' td').find('#txt_cari_kode_brg_'+no+', #btn_simpan_'+no).attr('disabled','');
		        	
		        	$('#lbl_status_simpan_'+no).empty();
		        	$('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

		        	$('#lbl_spp_status').empty();
		        	$('#h4_no_po').empty();
		        	$('#h4_no_po').append('No. PO : '+data.no_po);
		        	$('#hidden_no_po').val(data.no_po);

		        	$('#hidden_id_po').empty();
		        	$('#hidden_no_ref_po').empty();
		        	$('#hidden_id_po_item_'+no).empty();
		        	
		        	$('#hidden_id_po').val(data.id_po);
		        	$('#hidden_no_ref_po').val(data.no_ref_po);
		        	$('#hidden_id_po_item_'+no).val(data.id_po_item);

		        	$('#btn_simpan_'+no).css('display','none');
	        	}
	        	else{
	        		alert('Error Save Data : '+request.responseText);
		          	$('#lbl_status_simpan_'+no).empty();
		        	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
	        	}
	        },
	        error   : function(request){
	          	alert('Error Save Data : '+request.responseText);
	          	
	          	$('#lbl_status_simpan_'+no).empty();
	        	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
	        	
	        	if($.trim($('#hidden_no_po').val()) == ''){
	        		$('#lbl_spp_status').empty();
	        		$('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
	        	}
	        }
	    });
	}

	function ubahRinci(no){
		$('#tableRinciPO tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_cari_kode_brg_'+no).removeAttr('readonly');
    	$('#tableRinciPO tbody #tr_'+no+' td').find('#txt_cari_kode_brg_'+no+',#cmb_kurs_'+no+',#btn_simpan_'+no).removeAttr('disabled');
    	$('#lbl_status_simpan_'+no).empty();
    	$('#btn_ubah_'+no).css('display','none');
    	$('#btn_update_'+no).css('display','block');
    	$('#btn_cancel_update_'+no).css('display','block');
    	$('#btn_hapus_'+no).attr('disabled','');

    	$('#hidden_proses_status_'+no).empty();
    	$('#hidden_proses_status_'+no).val('update');
    }

    function cancelUpdate(no){
    	$('#tableRinciPO tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_cari_kode_brg_'+no).attr('readonly','');
    	$('#tableRinciPO tbody #tr_'+no+' td').find('#txt_cari_kode_brg_'+no+', #btn_simpan_'+no).attr('disabled','');

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
    	
    	// form_data.append('hidden_id_po',$('#hidden_id_po_'+no).val());
    	form_data.append('hidden_id_po',$('#hidden_id_po').val());
		form_data.append('hidden_id_po_item',$('#hidden_id_po_item_'+no).val());

		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/cancel_ubah_rinci'); ?>",
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
	        	$('#lbl_kode_brg_'+no).empty();
				$('#lbl_nama_brg_'+no).empty();

				$('#lbl_kode_brg_'+no).append("Kode : "+data[0].kodebartxt);
				$('#lbl_nama_brg_'+no).append("Nama Barang : "+data[0].nabar);

				$('#lbl_satuan_brg_'+no).empty();

				if(typeof data[0].sat == "undefined"){
					data[0].sat = "-";
				}

				$('#lbl_satuan_brg_'+no).append("Satuan : "+data[0].sat);

				$('#hidden_satuan_brg_'+no).val(data[0].sat);
				
				$('#hidden_kode_brg_'+no).val(data[0].kodebartxt);
				$('#hidden_nama_brg_'+no).val(data[0].nabar);
				$('#txt_qty_'+no).val(data[0].qty);
				$('#txt_harga_'+no).val(data[0].hargasblm);
				$('#cmb_kurs_'+no).val(data[0].kurs);
				$('#txt_disc_'+no).val(data[0].disc);
				$('#txt_biaya_lain_'+no).val(data[0].jumlahbpo);
				$('#txt_keterangan_biaya_lain_'+no).val(data[0].nama_bebanbpo);
				$('#txt_keterangan_rinci_'+no).val(data[0].ket);
				$('#txt_jumlah_'+no).val(data[0].jumharga);

				
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

    function updateRinci(no){
    	var isValid = true;
	    // $('#hidden_kode_brg_'+no+',#hidden_nama_brg_'+no+',#txt_qty_'+no+',#hidden_satuan_brg_'+no).each(function (e) {
	    //     if ($.trim($(this).val()) == '') {
	    //         isValid = false;
	    //         validasi($(this).attr("id"),no);
	    //     }
	    //     else {
	    //     	if($(this).attr('id') == 'hidden_kode_brg_'+no){
	    //         	$('#lbl_kode_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_kode_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_kode_brg_'+no).next().remove();
		   //          	$('#lbl_kode_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else if($(this).attr('id') == 'hidden_nama_brg_'+no){
	    //         	$('#lbl_nama_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_nama_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_nama_brg_'+no).next().remove();
		   //          	$('#lbl_nama_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else if($(this).attr('id') == 'hidden_satuan_brg_'+no){
	    //         	$('#lbl_satuan_brg_'+no).css({
		   //              "background": ""
		   //          });
		   //          if($('#lbl_satuan_brg_'+no).next().is('br#br_'+no)){
		   //          	$('#lbl_satuan_brg_'+no).next().remove();
		   //          	$('#lbl_satuan_brg_'+no).next().remove();
		   //      	}
	    //         }
	    //         else{
		   //          $(this).css({
		   //              "background": ""
		   //          });
		   //          if($(this).next().is('br#br_'+no)){
		   //          	$(this).next().remove();
		   //          	$(this).next().remove();
		   //      	}
		   //      }
	    //     }
	    // });
	    if (isValid == true){
	        updateData(no);
	    }
	}

    function updateData(no){
    	var form_data = new FormData();

		form_data.append('txt_no_spp',$('#txt_no_spp').val());
		form_data.append('txt_no_ref',$('#txt_no_ref').val());
		form_data.append('txt_tgl_ref',$('#txt_tgl_ref').val());
		form_data.append('txt_kode_departemen',$('#txt_kode_departemen').val());
		form_data.append('txt_departemen',$('#txt_departemen').val());
		form_data.append('txt_tanggal',$('#txt_tanggal').val());
		form_data.append('cmb_jenis_budget',$('#cmb_jenis_budget').val());
		// form_data.append('txt_main_account',$('#txt_main_account').val());

		form_data.append('txt_tgl_po',$('#txt_tgl_po').val());
		form_data.append('txt_kode_supplier',$('#txt_kode_supplier').val());
		form_data.append('txt_supplier',$('#txt_supplier').val());
		form_data.append('cmb_status_bayar',$('#cmb_status_bayar').val());
		form_data.append('txt_tempo_pembayaran',$('#txt_tempo_pembayaran').val());
		form_data.append('txt_tempo_pengiriman',$('#txt_tempo_pengiriman').val());
		form_data.append('txt_ket_pengiriman',$('#txt_ket_pengiriman').val());
		form_data.append('txt_lokasi_pengiriman',$('#txt_lokasi_pengiriman').val());
		form_data.append('cmb_lokasi_pembelian',$('#cmb_lokasi_pembelian').val());
		form_data.append('txt_no_penawaran',$('#txt_no_penawaran').val());
		form_data.append('txt_pemesan',$('#txt_pemesan').val());
		form_data.append('txt_kode_pemesan',$('#txt_kode_pemesan').val());
		form_data.append('txt_uang_muka',$('#txt_uang_muka').val());
		form_data.append('txt_no_voucher',$('#txt_no_voucher').val());
		form_data.append('cmb_ppn',$('#cmb_ppn').val());
		// form_data.append('txt_keterangan',$('#txt_keterangan').val());
		form_data.append('cmb_dikirim_ke_kebun',$('#cmb_dikirim_ke_kebun').val());
		form_data.append('txt_total_pembayaran',$('#txt_total_pembayaran').val());

		form_data.append('txt_cari_kode_brg',$('#txt_cari_kode_brg_'+no).val());
		form_data.append('txt_merk',$('#txt_merk_'+no).val());
		form_data.append('txt_qty',$('#txt_qty_'+no).val());
		form_data.append('txt_harga',$('#txt_harga_'+no).val());
		form_data.append('cmb_kurs',$('#cmb_kurs_'+no).val());
		form_data.append('txt_disc',$('#txt_disc_'+no).val());
		form_data.append('txt_biaya_lain',$('#txt_biaya_lain_'+no).val());
		form_data.append('txt_keterangan_biaya_lain',$('#txt_keterangan_biaya_lain_'+no).val());
		form_data.append('txt_keterangan_rinci',$('#txt_keterangan_rinci_'+no).val());
		form_data.append('txt_jumlah',$('#txt_jumlah_'+no).val());

		form_data.append('hidden_no_po',$('#hidden_no_po').val());
		form_data.append('hidden_no_ref_po',$('#hidden_no_ref_po').val());
		form_data.append('hidden_kode_brg',$('#hidden_kode_brg_'+no).val());
		form_data.append('hidden_nama_brg',$('#hidden_nama_brg_'+no).val());
		form_data.append('hidden_satuan_brg',$('#hidden_satuan_brg_'+no).val());
		// form_data.append('hidden_stok',$('#hidden_stok_'+no).val());

		// form_data.append('hidden_id_ppo',$('#hidden_id_ppo_'+no).val());
		form_data.append('hidden_id_po',$('#hidden_id_po').val());
		form_data.append('hidden_id_po_item',$('#hidden_id_po_item_'+no).val());
		
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('po/ubah_rinci_po'); ?>",
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
	        	$('#tableRinciPO tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_cari_kode_brg_'+no).attr('readonly','');
	        	$('#tableRinciPO tbody #tr_'+no+' td').find('#txt_cari_kode_brg_'+no+', #btn_simpan_'+no).attr('disabled','');
	        	
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

	function hapusRinci(no){
		$('#hidden_no_delete').val(no);
		$('#modalKonfirmasiHapus').modal('show');
	}

	function deleteData(){
		var no = $('#hidden_no_delete').val();
		$('#modalKonfirmasiHapus').modal('hide');

		var rowCount = $("#tableRinciPO td").closest("tr").length;
        
		if (rowCount != 1){
			var form_data = new FormData();
    	
	    	// form_data.append('hidden_id_po',$('#hidden_id_po_'+no).val());
	    	form_data.append('hidden_id_po',$('#hidden_id_po').val());
			form_data.append('hidden_id_po_item',$('#hidden_id_po_item_'+no).val());
			
			$.ajax({
		        type    : "POST",
		        url     : "<?php echo site_url('po/hapus_rinci'); ?>",
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

</script>