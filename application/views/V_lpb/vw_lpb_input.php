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

	/*#tableRinciLPB{
	   overflow-x:scroll;
	   width:120%;
	   max-width:150%;
	   display:block;
	}*/

	.modal {
	  overflow-y:auto;
	}

	/*div.dataTables_scroll {*/
	/*.dataTables_wrapper {*/
	/*#tableDetailBKB {*/
	/*.div_tableDetailBKB {*/
	  	/*margin: 0 auto;*/
		/*width: 70%;*/
	/*}*/
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
					<h2>LPB <small>Laporan Penerimaan Barang</small></h2>
					<div id="txt_estate"></div>
					<div class="clearfix"></div>
				</div>
				<div class="x_content" id="div_tableDetailBKB" style="display: none;">
					<br />
					<a href="<?php echo site_url('lpb/input'); ?>" class="btn btn-sm btn-info" id="a_lpb_baru"><span class="fa fa-plus"></span> LPB Baru</a>
					<div class="form-horizontal">
						<div class="table-responsive">
							<table id="tableDetailBKB" class="table table-bordered" width="100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tgl BKB</th>
										<th>No. BKB</th>
										<th>Ref. BKB</th>
										<th>Item Barang</th>
										<th>Dari PT</th>
									</tr>
								</thead>
								<tbody id="tbodyDetailBKB">
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="x_content">
					<div id="" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group div_form_1">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tgl Terima <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_tgl_terima" name="txt_tgl_terima" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl. Terima" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No. Pengantar <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_no_pengantar" name="txt_no_pengantar" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No. Pengantar">
											</div>
										</div>
										<!-- <div class="form-group" id="div_no_bkb">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No. BKB <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_no_bkb" name="txt_no_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No. BKB" readonly=""> -->
												<!-- <input id="txt_no_bkb" name="txt_no_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" onfocus="pilihModalDataBKBMutasi()" placeholder="No. BKB"> -->
											<!-- </div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_no_ref_bkb" name="txt_no_ref_bkb" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="No Ref BKB" readonly="">
											</div>
										</div> -->
										<input type="hidden" id="hidden_no_bkb">
										<input type="hidden" id="hidden_no_ref_bkb">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No. PO <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_no_po" name="txt_no_po" class="form-control col-md-2 col-xs-12" required="required" type="text" onfocus="pilihModalDataPO()" placeholder="No. PO">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_ref_po" name="txt_ref_po" class="form-control col-md-2 col-xs-12" type="text" placeholder="Ref. PO" readonly>
											</div>
										</div>
										<!-- <div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Ref. PO <span class="required">*</span>
											</label>
											
										</div> -->
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Supplier <span class="required">*</span>
											</label>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<input id="txt_kd_supplier" name="txt_kd_supplier" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Kode Supplier" readonly>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_supplier" name="txt_supplier" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Supplier" readonly>
											</div>
										</div>
										<div class="form-group" id="div_bkb_dari_pt">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">BKB dari PT. <span class="required">*</span>
											</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_bkb_dari_pt" name="txt_bkb_dari_pt" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="BKB dari PT" readonly>
												<input type="hidden" id="hidden_bkb_dari_pt" name="hidden_bkb_dari_pt">
											</div>
										</div>
										<!-- <div class="form-group" id="div_lpb_dari_pt">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">LPB dari PT <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_lpb_dari_pt" name="txt_lpb_dari_pt" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="LPB dari PT">
											</div>
										</div> -->
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Input <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_tgl_input" name="txt_tgl_input" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl. Input" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi Gudang <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<input id="txt_lokasi_gudang" name="txt_lokasi_gudang" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Lokasi Gudang">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl. PO <span class="required">*</span>
											</label>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<input id="txt_tgl_po" name="txt_tgl_po" class="form-control col-md-2 col-xs-12" required="required" type="text" placeholder="Tgl. PO" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">Ket <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<textarea class="resizable_textarea form-control" id="txt_ket_pengiriman" name="txt_ket_pengiriman" placeholder="Keterangan" readonly="">-</textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x_content div_form_2">
					<label id="lbl_lpb_status" name="lbl_lpb_status">No. LPB : ... &nbsp; No. Ref. LPB : ...</label>
					<h4 id="h4_no_lpb" name="h4_no_lpb"></h4>
					<h4 id="h4_no_ref_lpb" name="h4_no_ref_lpb"></h4>
					<input type="hidden" id="hidden_no_lpb" name="hidden_no_lpb">
					<input type="hidden" id="hidden_id_stok_masuk" name="hidden_id_stok_masuk">
					<input type="hidden" id="hidden_no_ref_lpb" name="hidden_no_ref_lpb">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="tableRinciLPB" width="100%">
							<thead>
								<tr>
									<th></th>
									<th width="20%">Kd. Barang</th>
									<th>Nama Barang</th>
									<th width="10%">Qty</th>
									<th width="10%">Satuan</th>
									<th width="30%">Ket</th>
									<th></th>
								</tr>
							</thead>
							<tbody id="tbody_rincian" name="tbody_rincian">
								<tr id="tr_1">
									<td>
										<input type="hidden" id="hidden_proses_status_1" name="hidden_proses_status_1" value="insert">
										<!-- <button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalBarang('1')"></button><br /> -->
										<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('1')"></button><br />
										<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_1" name="btn_hapus_row_1" onclick="hapus_row('1')"></button>
									</td>
									<form id="form_rinci_1" name="form_rinci_1" method="POST" action="javascript:;">
										<td>
											<input type="text" class="form-control" id="txt_kode_barang_1" name="txt_kode_barang_1" placeholder="Kode Barang" onfocus="pilihModalBarang('1')" readonly>
											<label>
					                            <input type="checkbox" id="chk_asset_1" name="chk_asset_1" value=""> Asset ?
					                        </label>
										</td>
										<td>
											<input type="text" class="form-control" id="txt_nama_brg_1" name="txt_nama_brg_1" placeholder="Nama Barang" readonly>
										</td>
										<td>
											<input type="text" class="form-control currencyduadigit" id="txt_qty_1" name="txt_qty_1" placeholder="Qty">
											<label id="lbl_qty_po_1">Qty PO : </label>
											<label id="lbl_sisa_qty_1">Sisa Qty : </label>

											<input type="hidden" id="hidden_qty_po_1" name="hidden_qty_po_1">
											<input type="hidden" id="hidden_sisa_qty_1" name="hidden_sisa_qty_1">
										</td>
										<td>
											<input type="text" class="form-control" id="txt_satuan_1" name="txt_satuan_1" placeholder="Satuan" readonly>
											<label id="lbl_grup_1" name="lbl_grup_1">Grup : -</label>

											<input type="hidden" id="hidden_grup_1" name="hidden_grup_1">
										</td>
										<td>
											<textarea class="resizable_textarea form-control" id="txt_ket_rinci_1" name="txt_ket_rinci_1" placeholder="Keterangan" onkeypress="saveRinciEnter(event,1)"></textarea>
											<label id="lbl_status_simpan_1"></label>
											<input type="hidden" id="hidden_id_masuk_item_1" name="hidden_id_masuk_item_1">
										</td>
										<td>
											<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_1" name="btn_simpan_1" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_1" name="btn_ubah_1" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_1" name="btn_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_1" name="btn_cancel_update_1" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('1')"></button>
											<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_1" name="btn_hapus_1" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('1')"></button>
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
	<br />
	<br />

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="ModalDataBKBMutasi">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Pilih BKB</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<!-- <div class="table-responsive">
							<table id="tableDetailBKB" class="table table-bordered" width="100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tgl BKB</th>
										<th>No. BKB</th>
										<th>Ref. BKB</th>
										<th>Item Barang</th>
									</tr>
								</thead>
								<tbody id="tbodyDetailBKB">
								</tbody>
							</table>
						</div> -->
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
						<!-- <div class="form-group">
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
						</div> -->
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
		<div class="modal-dialog modal-md">
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
								<table id="tableListBarang" class="table table-bordered" style="width: 100%;">
									<thead>
										<tr>
											<th style="width: 5% !important;">No</th>
											<th style="width: 10% !important;">Kode Barang</th>
											<th style="width: 20% !important;">Nama Barang</th>
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
											<th>Qty PO</th>
											<th>Qty LPB</th>
											<th>Sisa Blm Terima</th>
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

	<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalSupplier">
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
	</div> -->

	<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalPemesan">
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
	</div> -->

	<!-- <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihJenisPO">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Jenis PO</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label">Pilih Jenis PO</label>
					</div>
					<div class="form-group">
						<select class="form-control" id="cmb_pilih_jenis_po">
						<?php
							switch ($lokasi_sesi) {
								case 'PKS':
						?>
							<option value="PO-Lokal">PO-Lokal</option>
						<?php
									break;
								case 'SITE':
						?>
							<option value="PO-Lokal">PO-Lokal</option>
						<?php
									break;
								case 'RO':
						?>
							<option value="PO-Lokal">PO-Lokal</option>
						<?php
									break;
								case 'HO':
						?>
							<option value="PO">PO</option>
							<option value="POA">POA - PO Asset</option>
							<option value="PO-Khusus">POK - PO Khusus</option>
						<?php
									break;
								default:
									break;
							}
						?>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_pilih_po" onclick="pilihPO()" >Pilih</button>
				</div>
			</div>
		</div>
	</div> -->

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

	<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true" id="modalOpsiMutasi">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button> -->
					<h4 class="modal-title" id="myModalLabel">Konfirmasi LPB Mutasi</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="hidden_no_delete" name="hidden_no_delete">
					<p>Apakah LPB ini bukan dari mutasi ?</p>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-info" id="btn_delete" onclick="modalPilihBKBDevisi()" >Mutasi</button> -->
					<button type="button" class="btn btn-info" id="btn_delete" onclick="pilihBKBDevisi()" >Mutasi</button>
					<button type="button" class="btn btn-primary" id="btn_delete" data-dismiss="modal">Bukan Mutasi</button>
					<!-- <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button> -->
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true" id="modalPilihBKBDevisi">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button> -->
					<h4 class="modal-title" id="myModalLabel">BKB dari Devisi</h4>
				</div>
				<div class="modal-body">
					<label class="control-label">Devisi : </label>
					<select class="form-control" id="cmb_devisi">
						<option value="1">PT MULIA SAWIT AGRO LESTARI (HO)</option>
						<option value="2">PT MULIA SAWIT AGRO LESTARI (RO)</option>
						<option value="3">PT MULIA SAWIT AGRO LESTARI (PKS)</option>
						<option value="6">PT MULIA SAWIT AGRO LESTARI (ESTATE)</option>
						<option value="10">PT MITRA AGRO PERSADA ABADI</option>
						<option value="08">PT PERSADA SEJAHTERA AGRO MAKMUR</option>
						<option value="09">PT PERSADA ERA AGRO KENCANA</option>
					</select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" id="btn_pilihbkbdevisi" onclick="pilihBKBDevisi()">Ya</button>
					<button type="button" class="btn btn-default btn_close" onclick="batalPilihBKBDevisi()">Batal</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalPilihEstate">
		<div class="modal-dialog modal-sm" style="width: 30%;">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Devisi</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label">Pilih Devisi</label>
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
<input type="hidden" id="hidden_no_table" name="hidden_no_table">

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

<!-- JQuery Number -->
<script src="<?php echo base_url();?>assets/jquerynumber/jquery.number.js"></script>

<script>
	$(document).ready(function(){
		$('#modalPilihEstate').modal('show');
        pilihDevisi();
		$('#a_lpb_baru').hide();
		$('#div_no_bkb').hide();
		$('#div_bkb_dari_pt').hide();

		$('#hidden_no_table').val(2);

		$('#txt_tgl_terima,#txt_tgl_input').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
		},function(start,end,label){});

		setInterval(function(){
		  check_form_1();
		}, 1000);

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
  		var est = $('#cmb_pilih_est option:selected').text();
        $('#_est').remove();
        $('#txt_estate').append('<div style="text-align: right;" class="form-group nav navbar-right col-md-4" id="_est"><div class="form-group"><label class="control-label col-md-12 col-sm-6 col-xs-12" >'+est+'</label></div></div>');
        $('#txt_input_estate').val(est);
  	}

	function modalPilihBKBDevisi(){
		$('#modalOpsiMutasi').modal('hide');
		$('#modalPilihBKBDevisi').modal('show');
	}

	function batalPilihBKBDevisi(){
		$('#modalOpsiMutasi').modal('show');
		$('#modalPilihBKBDevisi').modal('hide');
	}

	function pilihBKBDevisi(){
		$('#modalPilihBKBDevisi').modal('hide');
		$('#div_bkb_dari_pt').show();
		$('#div_no_bkb').show();

		// var bkb_dari_pt = $('#cmb_devisi :selected').text();
		// $('#txt_bkb_dari_pt').val(bkb_dari_pt);

		// var hidden_bkb_dari_pt = $('#cmb_devisi').val();
		// $('#hidden_bkb_dari_pt').val(hidden_bkb_dari_pt);

		$('#div_tableDetailBKB').show();
		$('#tbody_rincian').empty();
		$('#hidden_no_table').val(1);
		tableDetailBKB();
		$('#modalOpsiMutasi').modal('hide');
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
          	  "url"         : "<?php echo site_url('lpb/list_po');?>",
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
		var rel = setInterval( function () {
			$('#tableDetailPO').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100 );
	}

	$('#tableDetailPO tbody').on('click', 'tr', function () {
  		var dataClick = $('#tableDetailPO').DataTable().row( this ).data();
        var no_ref_po = dataClick[2];
        var no_po = dataClick[3];
        
        $.ajax({
          	type    : "POST",
          	url     : "<?php echo site_url('lpb/get_detail_po'); ?>",
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

	function pilihModalListBarang(row){
		$('#modalListBarang').modal('show');
		tableListBarang();
		$('#hidden_no_row').val(row);
	}

	function tableListBarang(){
		var no_po = $('#txt_no_po').val();
		var no_ref_po = $('#txt_ref_po').val();
		$('#tableListBarang').DataTable().destroy();
    	$('#tableListBarang').DataTable({
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
          	  "url"         : "<?php echo site_url('lpb/get_list_barang');?>",
          	  "type"        : "POST",
          	  "data"        : {'no_po':no_po,'no_ref_po':no_ref_po},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"select" 		: {
            	"style"		: "multi",
        	},
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
		var rel = setInterval( function () {
			$('#tableListBarang').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100 );
	}

	function pilihItem(){
		var row = $('#hidden_no_row').val();
  		var rowcollection = $('#tableListBarang').DataTable().rows({selected:true}).data().toArray();
  		console.log(rowcollection.length);
  		$.each(rowcollection,function(index,elem){
  			tambah_row(row);
  			row++;

  			$('#txt_kode_barang_'+row).val(rowcollection[index][1]);
        	$('#txt_nama_brg_'+row).val(rowcollection[index][2]);
        	// $('#txt_qty_'+row).val(rowcollection[index][3]);
        	$('#lbl_qty_po_'+row).html("Qty PO : "+rowcollection[index][3]);
        	$('#hidden_qty_po_'+row).val(rowcollection[index][3]);
        	$('#txt_satuan_'+row).val(rowcollection[index][4]);
        	$('#txt_ket_rinci_'+row).val(rowcollection[index][5]);
    	})
    	$('#modalListBarang').modal('hide');
  	}

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
          	  "url"         : "<?php echo site_url('lpb/get_list_barang');?>",
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
		var rel = setInterval( function () {
			$('#tableBarang').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100 );
   }

   $('#tableBarang tbody').on('click', 'tr', function () {
   		var dataClick = $('#tableBarang').DataTable().row( this ).data();
        var no_row = $('#hidden_no_row_barang').val();
        
        $('#txt_kode_barang_'+no_row).val(dataClick[1]);
        $('#txt_nama_brg_'+no_row).val(dataClick[2]);
        // $('#txt_qty_'+no_row).val(dataClick[3]);
        $('#lbl_qty_po_'+no_row).html("Qty PO : "+dataClick[3]);
        $('#hidden_qty_po_'+no_row).val(dataClick[3]);
        $('#lbl_sisa_qty_'+no_row).html("Sisa Qty : "+dataClick[5]);
        dataClick[5] = dataClick[5].toString().replace(/\,/g,'');
        $('#hidden_sisa_qty_'+no_row).val(dataClick[5]);
        $('#txt_satuan_'+no_row).val(dataClick[6]);
        $('#txt_ket_rinci_'+no_row).val(dataClick[7]);

        getGrupBarang(dataClick[1],no_row);

        $('#modalBarang').modal('hide');
   })

	function getGrupBarang(kodebar,no_row){
		$.ajax({
			type    : "POST",
			url     : "<?php echo site_url('lpb/get_grup_barang'); ?>",
			dataType  : "JSON",
			beforeSend: function() {

			},
			cache   : false,
			// contentType : false,
			// processData : false,

			data    : {'kodebar':kodebar},
			success: function(data){
				$('#hidden_grup_'+no_row).val(data.grp);
				$('#lbl_grup_'+no_row).html('Grup : '+data.grp);
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
		var td_col_1 = '<td>'
							+'<input type="hidden" id="hidden_proses_status_'+row+'" name="hidden_proses_status_'+row+'" value="insert">'
							// +'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="pilihModalBarang('+row+')"></button><br />'
							+'<button class="btn btn-xs btn-info fa fa-plus" data-toggle="tooltip" data-placement="left" title="Tambah" id="btn_tambah_row" name="btn_tambah_row" onclick="tambah_row('+row+')"></button><br />'
							+'<button class="btn btn-xs btn-danger fa fa-minus btn_hapus_row" type="button" data-toggle="tooltip" data-placement="left" title="Hapus" id="btn_hapus_row_'+row+'" name="btn_hapus_row_'+row+'" onclick="hapus_row('+row+')"></button>'
						+'</td>';
		var form_buka =	'<form id="form_rinci_'+row+'" name="form_rinci_'+row+'" method="POST" action="javascript:;">'
		var td_col_2 = '<td>'
							+'<input type="text" class="form-control" id="txt_kode_barang_'+row+'" name="txt_kode_barang_'+row+'" placeholder="Kode Barang" onfocus="pilihModalBarang('+row+')" readonly>'
							+'<label>'
	                            +'<input type="checkbox" id="chk_asset_'+row+'" name="chk_asset_'+row+'" value=""> Asset ?'
	                        +'</label>'
						+'</td>';
		var td_col_3 = '<td>'
							+'<input type="text" class="form-control" id="txt_nama_brg_'+row+'" name="txt_nama_brg_'+row+'" placeholder="Nama Barang" readonly>'
						+'</td>';
		var td_col_4 = '<td>'
							+'<input type="text" class="form-control currencyduadigit" id="txt_qty_'+row+'" name="txt_qty_'+row+'" placeholder="Qty">'
							+'<label id="lbl_qty_po_'+row+'">Qty PO : </label>'
							+'<label id="lbl_sisa_qty_'+row+'">Sisa Qty : </label>'

							+'<input type="hidden" id="hidden_qty_po_'+row+'" name="hidden_qty_po_'+row+'">'
							+'<input type="hidden" id="hidden_sisa_qty_'+row+'" name="hidden_sisa_qty_'+row+'">'
						+'</td>';
		var td_col_5 = '<td>'
							+'<input type="text" class="form-control" id="txt_satuan_'+row+'" name="txt_satuan_'+row+'" placeholder="Satuan" readonly>'
							+'<label id="lbl_grup_'+row+'" name="lbl_grup_'+row+'">Grup : -</label>'
							+'<input type="hidden" id="hidden_grup_'+row+'" name="hidden_grup_'+row+'">'
						+'</td>';
		var td_col_6 = '<td>'
							+'<textarea class="resizable_textarea form-control" id="txt_ket_rinci_'+row+'" name="txt_ket_rinci_'+row+'" placeholder="Keterangan" onkeypress="saveRinciEnter(event,'+row+')"></textarea>'
							+'<label id="lbl_status_simpan_'+row+'"></label>'
							+'<input type="hidden" id="hidden_id_masuk_item_'+row+'" name="hidden_id_masuk_item_'+row+'">'
						+'</td>';
		var td_col_7 = '<td>'
							+'<button class="btn btn-xs btn-success fa fa-save" id="btn_simpan_'+row+'" name="btn_simpan_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Simpan" onclick="saveRinciClick('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-warning fa fa-edit" id="btn_ubah_'+row+'" name="btn_ubah_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Ubah" onclick="ubahRinci('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-info fa fa-check" id="btn_update_'+row+'" name="btn_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Update" onclick="updateRinci('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-primary fa fa-close" id="btn_cancel_update_'+row+'" name="btn_cancel_update_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Cancel Update" onclick="cancelUpdate('+row+')"></button>'
							+'<button style="display:none;" class="btn btn-xs btn-danger fa fa-trash" id="btn_hapus_'+row+'" name="btn_hapus_'+row+'" type="button" data-toggle="tooltip" data-placement="right" title="Hapus" onclick="hapusRinci('+row+')"></button>'
						+'</td>';
		var form_tutup = '</form>';
		var tr_tutup = '</tr>';

		$('#tbody_rincian').append(tr_buka+td_col_1+form_buka+td_col_2+td_col_3+td_col_4+td_col_5+td_col_6+td_col_7+form_tutup+tr_tutup);

		$('#txt_qty_'+row).number(true, 2);

		$('html, body').animate({
	        scrollTop: $("#tr_"+row).offset().top
	    }, 2000);

	    row++;
		$('#hidden_no_table').val(row);
	}

	function check_form_1(){
		if($.trim($('#txt_tgl_terima').val()) != '' && 
			$.trim($('#txt_no_pengantar').val()) != '' && 
			$.trim($('#txt_no_po').val()) != '' && 
			$.trim($('#txt_ref_po').val()) != '' && 
			$.trim($('#txt_kd_supplier').val()) != '' && 
			$.trim($('#txt_supplier').val()) && 
			// $.trim($('#txt_lpb_dari_pt').val()) != '' && 
			$.trim($('#txt_tgl_input').val()) != '' && 
			$.trim($('#txt_lokasi_gudang').val()) != '' && 
			$.trim($('#txt_tgl_po').val()) != '' && 
			$.trim($('#txt_ket_pengiriman').val()) != '' ){
			$('.div_form_2').show();
		}
		else{
			$('.div_form_2').hide();
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
  			if($('#'+arr_id).is('input') || $('#'+arr_id).is('textarea')){
  				if(arr_id == 'hidden_qty_po_'+no){
  	            	$('#lbl_qty_po_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_qty_po_'+no).next().is('br#br_'+no)){
  		            	$('#lbl_qty_po_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');	
  	            	}
  	            }
  	            else if(arr_id == 'hidden_sisa_qty_'+no){
  	            	$('#lbl_sisa_qty_'+no).css({
  	            		"background": "#FFCECE"
  	            	})
  	            	if(!$('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
  	            		$('#lbl_sisa_qty_'+no).after('<br id="br_'+no+'" /><small id="pesan_error_'+no+'" style="margin-top:0px;color:red;">Harus diisi</small>');
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
  		console.log('txt_qty_'+$('#txt_qty_'+no).val());
  		console.log('parse txt_qty_'+parseInt($('#txt_qty_'+no).val()));
  		console.log('hidden_sisa_qty_'+parseInt($('#hidden_sisa_qty_'+no).val()));
		var isValid = true;
	    $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
	        if ($.trim($(this).val()) == '') {
	            isValid = false;
	            validasi($(this).attr("id"),no);
	        }
	        else if( $('#txt_qty_'+no).val() == '0.00' || $('#txt_qty_'+no).val() == '0' ){
	        	isValid = false;
	        	swal('Qty tidak boleh nol (0)');
	        	$('#txt_qty_'+no).css({
  	            		"background": "#FFCECE"
  	            	});
	        }
	        else if(parseFloat($('#txt_qty_'+no).val()) > parseFloat($('#hidden_sisa_qty_'+no).val())) {
	        	console.log(parseFloat($('#txt_qty_'+no).val()));
	        	console.log(parseFloat($('#hidden_sisa_qty_'+no).val()));
	  	  		isValid = false;
	  	  		swal('Qty melebihi PO');
	  	  	}
	        else {
	         	if($(this).attr('id') == 'hidden_qty_po_'+no){
	             	$('#lbl_qty_po_'+no).css({
	                	"background": ""
	              	});
	              	if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
	               		$('#lbl_qty_po_'+no).next().remove();
	               		$('#lbl_qty_po_'+no).next().remove();
	           	  	}
	            }
	            else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
				$('#lbl_sisa_qty_'+no).css({
				  "background": ""
				});
				if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
					$('#lbl_sisa_qty_'+no).next().remove();
					$('#lbl_sisa_qty_'+no).next().remove();
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
	        saveData(no);
	    }
  	}

  	function saveData(no){
  	  var form_data = new FormData();

  	  if($('#chk_asset_'+no).is(':checked')){
  	  	form_data.append('chk_asset','Asset');
  	  }
  	  else{
  	  	form_data.append('chk_asset','');
  	  }

  	  form_data.append('txt_tgl_terima',$('#txt_tgl_terima').val());
  	  form_data.append('txt_no_pengantar',$('#txt_no_pengantar').val());
  	  form_data.append('txt_no_po',$('#txt_no_po').val());
  	  form_data.append('txt_ref_po',$('#txt_ref_po').val());
  	  form_data.append('txt_bkb_dari_pt',$('#txt_bkb_dari_pt').val());
  	  form_data.append('txt_kd_supplier',$('#txt_kd_supplier').val());
  	  form_data.append('txt_supplier',$('#txt_supplier').val());
  	  // form_data.append('txt_lpb_dari_pt',$('#txt_lpb_dari_pt').val());
  	  form_data.append('txt_tgl_input',$('#txt_tgl_input').val());
  	  form_data.append('txt_lokasi_gudang',$('#txt_lokasi_gudang').val());
  	  form_data.append('txt_tgl_po',$('#txt_tgl_po').val());
  	  form_data.append('txt_ket_pengiriman',$('#txt_ket_pengiriman').val());
  	  
  	  form_data.append('txt_kode_barang',$('#txt_kode_barang_'+no).val());
  	  form_data.append('txt_nama_brg',$('#txt_nama_brg_'+no).val());
  	  form_data.append('txt_qty',$('#txt_qty_'+no).val());
  	  form_data.append('txt_satuan',$('#txt_satuan_'+no).val());
  	  form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());
  	  form_data.append('hidden_grup',$('#hidden_grup_'+no).val());

  	  form_data.append('hidden_no_lpb',$('#hidden_no_lpb').val());
  	  form_data.append('hidden_no_ref_lpb',$('#hidden_no_ref_lpb').val());

  	  form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());

  	  $.ajax({
  	        type    : "POST",
  	        url     : "<?php echo site_url('lpb/simpan_rinci_lpb'); ?>",
  	        dataType  : "JSON",
  	        beforeSend: function() {
  	          	$('#lbl_status_simpan_'+no).empty();
  	          	$('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
  	          	if($.trim($('#hidden_no_lpb').val()) == ''){
  	            	$('#lbl_lpb_status').empty();
  	            	$('#lbl_lpb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate LPB Number</label>');
  	          	}
  	          	$('#btn_ubah_'+no).css('display','block');
  	          	$('#btn_hapus_'+no).css('display','block');
  	        },
  	        cache   : false,
  	        contentType : false,
  	        processData : false,
  	        
  	        data    : form_data,
  	        success: function(data){
  	          if(data == "input_stock_awal"){
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
  	          	$('#lbl_status_simpan_'+no).empty();
	        	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
  	          }
  	          else if(data == "kodebar_exist"){
        		swal('Tidak bisa ditambahkan. Barang sudah ada pada LPB yang sama !');
        		$('#lbl_status_simpan_'+no).empty();
	        	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
        	  }
        	  else{
        	  	if(data.status == true){
        	  		var no_ref_po = $('#txt_ref_po').val();
        	  		var no_po = $('#txt_no_po').val();
        	  		var kodebar = $('#txt_kode_barang_'+no).val();

        	  		sisaQtyPO(no_ref_po, no_po, kodebar, no);

        	  		$('#a_lpb_baru').show();

        	  		$('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');
        	  		$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('disabled','');
	  	            
	  	            $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
	  	            $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

	  	            $('#lbl_status_simpan_'+no).empty();
	  	            $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

	  	            $('#lbl_lpb_status').empty();
	  	            $('#h4_no_lpb').empty();
	  	            
	  	            $('#h4_no_ref_lpb').empty();
	  	            
	  	            $('#h4_no_lpb').append('No. LPB : '+data.no_lpb);
	  	            $('#h4_no_ref_lpb').append('No. Ref LPB : '+data.no_ref_lpb);

	  	            $('#hidden_no_lpb').val(data.no_lpb);
	  	            $('#hidden_no_ref_lpb').val(data.no_ref_lpb);

	  	            if($.trim($('#hidden_id_stok_masuk').val()) == ''){
		  	            $('#hidden_id_stok_masuk').val(data.id_stok_masuk);
		  	        }
	  	            $('#hidden_id_masuk_item_'+no).val(data.id_masuk_item);

	  	            $('#btn_simpan_'+no).css('display','none');
	  	            $('#btn_hapus_row_'+no).css('display','none');
	  	        }
				else{
					swal('Error Save Data');
				  	$('#lbl_status_simpan_'+no).empty();
					$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
				}
        	  }
  	        },
  	        error   : function(request){
  	          alert('Error Save Data : '+request.responseText);
  	            
  	          $('#lbl_status_simpan_'+no).empty();
  	          $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
  	          
  	          if($.trim($('#hidden_no_lpb').val()) == ''){
  	            $('#lbl_spp_status').empty();
  	            $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
  	          }
  	        }
  	    });
  	}

  	function ubahRinci(no){
  		$('.div_form_1').find('input,textarea').removeAttr('readonly');
	  	$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').removeAttr('disabled');
	  	$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');

        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea').removeAttr('readonly');
        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea').removeAttr('disabled');
        $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('readonly','');

	    $('#lbl_status_simpan_'+no).empty();
	    $('#btn_ubah_'+no).css('display','none');
	    $('#btn_update_'+no).css('display','block');
	    $('#btn_cancel_update_'+no).css('display','block');
	    $('#btn_hapus_'+no).attr('disabled','');
		
		var sisa0 = parseInt($('#hidden_sisa_qty_'+no).val());
		var sisa1 = parseInt($('#txt_qty_'+no).val());
		$('#hidden_sisa_qty_'+no).val(sisa0+sisa1);

	    $('#hidden_proses_status_'+no).empty();
	    $('#hidden_proses_status_'+no).val('update');
	}

	function updateRinci(no){
	    var isValid = true;
	    $('#txt_kode_barang_'+no+',#txt_nama_brg_'+no+',#txt_qty_'+no+',#hidden_qty_po_'+no+',#hidden_sisa_qty_'+no+',#txt_satuan_'+no+',#txt_ket_rinci_'+no).each(function (e) {
  	        if ($.trim($(this).val()) == '') {
  	            isValid = false;
  	            validasi($(this).attr("id"),no);
  	        }
			else if( $('#txt_qty_'+no).val() == '0.00' || $('#txt_qty_'+no).val() == '0' ){
  	        	isValid = false;
  	        	swal('Qty tidak boleh nol (0)');
  	        	$('#txt_qty_'+no).css({
  	            		"background": "#FFCECE"
  	            	});
  	        }
  	        else if(parseFloat($('#txt_qty_'+no).val()) > parseFloat($('#hidden_sisa_qty_'+no).val())) {
  	        	console.log(parseFloat($('#txt_qty_'+no).val()));
	        	console.log(parseFloat($('#hidden_sisa_qty_'+no).val()));
				isValid = false;
				swal('Qty melebihi PO');
			}
  	        else {
  	         	if($(this).attr('id') == 'hidden_qty_po_'+no){
  	             	$('#lbl_qty_po_'+no).css({
  	                	"background": ""
  	              	});
  	              	if($('#lbl_qty_po_'+no).next().is('br#br_'+no)){
  	               		$('#lbl_qty_po_'+no).next().remove();
  	               		$('#lbl_qty_po_'+no).next().remove();
  	           	  	}
  	            }
  	            else if($(this).attr('id') == 'hidden_sisa_qty_'+no){
					$('#lbl_sisa_qty_'+no).css({
					  "background": ""
					});
					if($('#lbl_sisa_qty_'+no).next().is('br#br_'+no)){
						$('#lbl_sisa_qty_'+no).next().remove();
						$('#lbl_sisa_qty_'+no).next().remove();
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

	    if($('#chk_asset_'+no).is(':checked')){
	    	form_data.append('chk_asset','Asset');
	    }
	    else{
	    	form_data.append('chk_asset','');
	    }

		form_data.append('txt_tgl_terima',$('#txt_tgl_terima').val());
		form_data.append('txt_no_pengantar',$('#txt_no_pengantar').val());
		form_data.append('txt_no_po',$('#txt_no_po').val());
		form_data.append('txt_ref_po',$('#txt_ref_po').val());
		form_data.append('txt_bkb_dari_pt',$('#txt_bkb_dari_pt').val());
		form_data.append('txt_kd_supplier',$('#txt_kd_supplier').val());
		form_data.append('txt_supplier',$('#txt_supplier').val());
		// form_data.append('txt_lpb_dari_pt',$('#txt_lpb_dari_pt').val());
		form_data.append('txt_tgl_input',$('#txt_tgl_input').val());
		form_data.append('txt_lokasi_gudang',$('#txt_lokasi_gudang').val());
		form_data.append('txt_tgl_po',$('#txt_tgl_po').val());
		form_data.append('txt_ket_pengiriman',$('#txt_ket_pengiriman').val());

		form_data.append('txt_kode_barang',$('#txt_kode_barang_'+no).val());
		form_data.append('txt_nama_brg',$('#txt_nama_brg_'+no).val());
		form_data.append('txt_qty',$('#txt_qty_'+no).val());
		form_data.append('txt_satuan',$('#txt_satuan_'+no).val());
		form_data.append('txt_ket_rinci',$('#txt_ket_rinci_'+no).val());
		form_data.append('hidden_grup',$('#hidden_grup_'+no).val());

		form_data.append('hidden_no_lpb',$('#hidden_no_lpb').val());
		form_data.append('hidden_no_ref_lpb',$('#hidden_no_ref_lpb').val());
		form_data.append('hidden_id_stok_masuk',$('#hidden_id_stok_masuk').val());
		form_data.append('hidden_id_masuk_item',$('#hidden_id_masuk_item_'+no).val());

		form_data.append('hidden_no_ref_bkb',$('#hidden_no_ref_bkb').val());
	  
	  	$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('lpb/ubah_rinci_lpb'); ?>",
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
	        	var no_ref_po = $('#txt_ref_po').val();
	        	var no_po = $('#txt_no_po').val();
	        	var kodebar = $('#txt_kode_barang_'+no).val();

	        	sisaQtyPO(no_ref_po, no_po, kodebar, no);

	        	$('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');
        	  	$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('disabled','');
	  	            
	  	        $('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
	  	        $('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

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

	function hapus_row(id){
		var rowCount = $("#tableRinciLPB td").closest("tr").length;
		if (rowCount != 1){
			$('#tr_'+id).remove();
		}
		else{
			swal('Tidak Bisa dihapus, item LPB tinggal 1');
		}
  	}

  	function cancelUpdate(no){
     	$('.div_form_1').find('input,textarea').not('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('readonly','');
		$('.div_form_1').find('#txt_tgl_terima,#txt_no_po,#txt_tgl_input,#txt_tgl_po').attr('disabled','');

		$('#tableRinciLPB tbody #tr_'+no+' td').find('input,textarea,select').not('#txt_kode_barang_'+no).attr('readonly','');
		$('#tableRinciLPB tbody #tr_'+no+' td').find('#btn_simpan_'+no+',#txt_kode_barang_'+no).attr('disabled','');

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
      
      form_data.append('hidden_no_lpb',$('#hidden_no_lpb').val());
      form_data.append('hidden_no_ref_lpb',$('#hidden_no_ref_lpb').val());
      form_data.append('hidden_id_stok_masuk',$('#hidden_id_stok_masuk').val());
      form_data.append('hidden_id_masuk_item',$('#hidden_id_masuk_item_'+no).val());

      $.ajax({
          type    : "POST",
          url     : "<?php echo site_url('lpb/cancel_ubah_rinci'); ?>",
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
          	var tgl_terima = new Date(data.data_stokmasuk.tgl);
			var tgl_input = new Date(data.data_stokmasuk.tglinput);
			var tgl_po = new Date(data.data_po.tglpo);

			$('#txt_tgl_terima').val(dateToMDY(tgl_terima));
			$('#txt_no_pengantar').val(data.data_stokmasuk.no_pengtr);
			$('#txt_no_po').val(data.data_stokmasuk.nopotxt);
			$('#txt_ref_po').val(data.data_stokmasuk.refpo);
			$('#txt_kd_supplier').val(data.data_stokmasuk.kode_supply);
			$('#txt_supplier').val(data.data_stokmasuk.nama_supply);
			// $('#txt_lpb_dari_pt').val(data.data_stokmasuk.pt);
			$('#txt_bkb_dari_pt').val(data.data_stokmasuk.pt);
			$('#txt_tgl_input').val(dateToMDY(tgl_input));
			$('#txt_lokasi_gudang').val(data.data_stokmasuk.lokasi_gudang);
			$('#txt_tgl_po').val(dateToMDY(tgl_po));
			$('#txt_ket_pengiriman').val(data.data_stokmasuk.ket);

			$('#txt_kode_barang_'+no).val(data.data_masukitem.kodebartxt);
			$('#txt_nama_brg_'+no).val(data.data_masukitem.nabar);
			$('#txt_qty_'+no).val(data.data_masukitem.qty);

			$('#lbl_qty_po_'+no).html("Qty PO : "+data.data_qty_po.qty_po);
			$('#hidden_qty_po_'+no).val(data.data_qty_po.qty_po);

			var sisa_qty = parseFloat(data.data_masukitem.qty)-parseFloat(data.data_qty_po.qty_po);
			$('#lbl_sisa_qty_'+no).html("Sisa Qty : "+sisa_qty);
			$('#hidden_sisa_qty_'+no).val(sisa_qty);
			
			$('#txt_satuan_'+no).val(data.data_masukitem.satuan);
			$('#txt_ket_rinci_'+no).val(data.data_masukitem.ket);

			var no_ref_po = $('#txt_ref_po').val();
			var no_po = $('#txt_no_po').val();
			var kodebar = $('#txt_kode_barang_'+no).val();
			
			sisaQtyPO(no_ref_po, no_po, kodebar, no);
			
			if(data.data_masukitem.ASSET == "1"){
				$('#chk_asset_'+no).prop('checked');
			}

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

  	  var rowCount = $("#tableRinciLPB td").closest("tr").length;
  	      
  	  if (rowCount != 1){
  	    var form_data = new FormData();
  	    
  	    // form_data.append('hidden_id_po',$('#hidden_id_po_'+no).val());
  	    form_data.append('hidden_id_stok_masuk',$('#hidden_id_stok_masuk').val());
  	    form_data.append('hidden_id_masuk_item',$('#hidden_id_masuk_item_'+no).val());
  	    
  	    $.ajax({
			type    : "POST",
			url     : "<?php echo site_url('lpb/hapus_rinci'); ?>",
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
  	    swal('Tidak Bisa dihapus, item LPB tinggal 1');
  	  }
  	}

  	function pilihModalDataBKBMutasi(){
  		$('#ModalDataBKBMutasi').modal('show');
  		tableDetailBKB();
  	}

  	function tableDetailBKB(){
  		$('#tableDetailBKB').DataTable().destroy();
    	$('#tableDetailBKB').DataTable({
      		"paging"          : true,
			"scrollY"         : false,
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
          	  "url"         : "<?php echo site_url('lpb/get_list_bkb_mutasi');?>",
          	  "type"        : "POST",
          	  "data"        : {},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
          	"columns"		: [
          		{"width":"5%"},
          		{"width":"10%"},
          		{"width":"10%"},
          		{"width":"25%"},
          		{"width":"25%"},
          		{"width":"25%"},
          	],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableDetailBKB tr').each(function() {
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

   	$('#tableDetailBKB tbody').on('click', 'tr', function () {
   		var dataClick = $('#tableDetailBKB').DataTable().row( this ).data();
        var no_bkb = dataClick[2];
        var no_ref_bkb = dataClick[3];
        
        $.ajax({
          	type    : "POST",
          	url     : "<?php echo site_url('lpb/get_bkb_mutasi'); ?>",
          	dataType  : "JSON",
          	beforeSend: function(){
          	},
          	cache   : false,
          	// contentType : false,
          	// processData : false,
          
          	data    : {'no_bkb' : no_bkb, 'no_ref_bkb' : no_ref_bkb},
          	success: function(data){
          		// console.log(data);
          		var tgl_terima = '<?php echo date('m/d/Y') ?>';
          		var tgl_input = '<?php echo date('m/d/Y') ?>';
          		var tgl_po = '<?php echo date('m/d/Y') ?>';

          		$('#txt_tgl_terima').val(tgl_terima);
          		// $('#txt_no_pengantar').val(data.data_stockkeluar_mutasi);
          		$('#hidden_no_bkb').val(data.data_stockkeluar_mutasi.SKBTXT);
          		$('#hidden_no_ref_bkb').val(data.data_stockkeluar_mutasi.NO_REF);
          		$('#txt_no_po').val(data.data_stockkeluar_mutasi.SKBTXT);
          		$('#txt_ref_po').val('MUTASI');
          		$('#txt_kd_supplier').val(data.data_stockkeluar_mutasi.kode);
          		$('#txt_supplier').val(data.data_stockkeluar_mutasi.pt);
          		$('#txt_bkb_dari_pt').val(data.data_stockkeluar_mutasi.pt);
          		$('#hidden_bkb_dari_pt').val(data.data_stockkeluar_mutasi.kode);
          		$('#txt_tgl_input').val(tgl_input);
          		// $('#txt_lokasi_gudang').val(data.data_stockkeluar_mutasi);
          		$('#txt_tgl_po').val(tgl_po);
          		$('#txt_ket_pengiriman').val('MUTASI dari BKB NO. '+data.data_stockkeluar_mutasi.SKBTXT+' '+data.data_stockkeluar_mutasi.pt);

          		var row = $('#hidden_no_table').val();
          		$.each(data.data_keluarbrgitem_mutasi,function(index,elem){
          			tambah_row(row);
					$('#txt_kode_barang_'+row).val(data.data_keluarbrgitem_mutasi[index].kodebartxt);
					// $('#chk_asset_'+row).val(data.data_keluarbrgitem_mutasi[index].);
					$('#txt_nama_brg_'+row).val(data.data_keluarbrgitem_mutasi[index].nabar);
					$('#txt_qty_'+row).val(data.data_keluarbrgitem_mutasi[index].qty2);
					$('#lbl_qty_po_'+row).html('Qty PO : '+data.data_keluarbrgitem_mutasi[index].qty2);
					$('#lbl_sisa_qty_'+row).html('Sisa Qty : '+data.data_keluarbrgitem_mutasi[index].sisa_qty);
					$('#hidden_qty_po_'+row).val(data.data_keluarbrgitem_mutasi[index].qty2);
					$('#hidden_sisa_qty_'+row).val(data.data_keluarbrgitem_mutasi[index].sisa_qty);
					$('#txt_satuan_'+row).val(data.data_keluarbrgitem_mutasi[index].satuan);
					$('#lbl_grup_'+row).html('Grup '+data.data_keluarbrgitem_mutasi[index].grp);
					$('#hidden_grup_'+row).val(data.data_keluarbrgitem_mutasi[index].grp);
					$('#txt_ket_rinci_'+row).val(data.data_keluarbrgitem_mutasi[index].ket);

					row++;
					$('hidden_no_table').val(row);
          		});
          	},
        	error   : function(request){
            	alert(request.responseText);
        	}
        })
	})

	function sisaQtyPO(no_ref_po, no_po, kodebar, no){
		$.ajax({
			type    : "POST",
			url     : "<?php echo site_url('lpb/sum_sisa_qty_po'); ?>",
			dataType  : "JSON",
			beforeSend: function() {

			},
			cache   : false,
			// contentType : false,
			// processData : false,

			data    : {'no_ref_po':no_ref_po, 'no_po':no_po, 'kodebar':kodebar},
			success: function(data){
				// $('#hidden_grup_'+no_row).val(data.grp);
				// $('#lbl_grup_'+no_row).html('Grup : '+data.grp);
				$('#lbl_sisa_qty_'+no).html('Sisa Qty : '+data);
				$('#hidden_sisa_qty_'+no).val(data);
			},
			error   : function(request){
				alert(request.responseText);
			}
		});
	}
</script>