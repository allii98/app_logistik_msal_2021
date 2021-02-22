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
					<h2>PP <small>Permohonan Pembayaran</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<div id="" data-parsley-validate class="form-horizontal form-label-left">
						<form action="javascript:;" class="form-horizontal" id="form_input_pp" name="form_input_pp" method="POST">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">No. PP</label>
											<label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_no_pp">-</label>
											<input type="hidden" id="hidden_no_pp" name="hidden_no_pp">
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Ref PO</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_no_ref_po" name="txt_no_ref_po" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="No. Ref. PO" onfocus="modalRefPO()">
												<input type="hidden" id="hidden_no_po" name="hidden_no_po">
												<input type="hidden" id="hidden_grup" name="hidden_grup">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Pembayaran</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_pembayaran" name="txt_pembayaran" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Pembayaran">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Supplier</label>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<input id="txt_kode_supplier" name="txt_kode_supplier" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Kode" readonly="">
											</div>
											<div class="col-md-5 col-sm-6 col-xs-12">
												<input id="txt_supplier" name="txt_supplier" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Supplier" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Nilai PO</label>
											<div class="col-md-7 col-sm-6 col-xs-12">
												<input id="txt_nilai_po" name="txt_nilai_po" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" placeholder="Nilai PO" onkeyup="hitungTotalPO()" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Kurs</label>
											<label class="control-label col-md-1 col-sm-3 col-xs-12" id="lbl_kurs" name="lbl_kurs"></label>
											<input type="hidden" id="hidden_kurs" name="hidden_kurs" required="">
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Pajak</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_pajak" name="txt_pajak" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" placeholder="Pajak" value="0.00" onkeyup="hitungTotalPO()">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Nilai BPO</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_nilai_bpo1" name="txt_nilai_bpo1" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO1" onkeyup="hitungTotalPO()">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-4">
												<input id="txt_nilai_bpo2" name="txt_nilai_bpo2" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" value="0.00" placeholder="Nilai BPO2" onkeyup="hitungTotalPO()">
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Total PO</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_total_po" name="txt_total_po" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" placeholder="Total PO" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Sudah dibayar</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_sudah_dibayar" name="txt_sudah_dibayar" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" placeholder="Sudah dibayar" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tgl. PP</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_tgl_pp" name="txt_tgl_pp" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Tgl. PP">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Tgl. PO</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_tgl_po" name="txt_tgl_po" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Tgl. PO" readonly="">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Dibayar ke</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_dibayar_ke" name="txt_dibayar_ke" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Dibayar ke">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Jumlah</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_jumlah" name="txt_jumlah" class="form-control col-md-7 col-xs-12 currencyduadigit" required="required" type="text" placeholder="Jumlah">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Terbilang</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<textarea class="resizable_textarea form-control" id="txt_terbilang" name="txt_terbilang" placeholder="Terbilang" required="" readonly=""></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-3 col-xs-12">Keterangan</label>
											<div class="col-md-8 col-sm-6 col-xs-12">
												<input id="txt_keterangan" name="txt_keterangan" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Keterangan">
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="col-md-12 col-sm-3 col-xs-12">Kode Budget : </label>
											<label class="col-md-12 col-sm-3 col-xs-12" id="lbl_kode_budget"></label>
											<input type="hidden" id="hidden_kode_budget" name="hidden_kode_budget">
										</div>
										<div class="form-group">
											<label class="col-md-12 col-sm-3 col-xs-12">Jenis Budget : </label>
											<label class="col-md-12 col-sm-3 col-xs-12" id="lbl_jenis_budget"></label>
											<input type="hidden" id="hidden_jenis_budget" name="hidden_jenis_budget">
										</div>
										<div class="form-group">
											<label class="col-md-12 col-sm-3 col-xs-12">Main Account Budget : </label>
											<label class="col-md-12 col-sm-3 col-xs-12" id="lbl_main_account_budget"></label>
											<input type="hidden" id="hidden_main_account" name="hidden_main_account">
										</div>
										<div class="form-group">
											<label class="col-md-12 col-sm-3 col-xs-12">Nama Account : </label>
											<label class="col-md-12 col-sm-3 col-xs-12" id="lbl_nama_account"></label>
											<input type="hidden" id="hidden_nama_account" name="hidden_nama_account">
										</div>
										<div>
											<label class="col-md-12 col-sm-3 col-xs-12">User : <?php echo $this->session->userdata('user'); ?></label>
										</div>
										<div>
											<label class="col-md-12 col-sm-3 col-xs-12">No. Voucher</label>
											<div class="col-md-12 col-sm-3 col-xs-12">
												<input type="text" class="form-control" id="txt_no_voucher" name="txt_no_voucher">
											</div>
										</div>
										<div>
											<label class="col-md-12 col-sm-3 col-xs-12">Tgl</label>
											<div class="col-md-12 col-sm-3 col-xs-12">
												<input type="text" class="form-control" id="txt_tgl_voucher" name="txt_tgl_voucher" readonly="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button class="btn btn-sm btn-success col-md-2 col-md-offset-5" data-toggle="tooltip" data-placement="top" title="Simpan" id="btn_simpan" name="btn_simpan">Simpan</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br />
	<br />

	<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false" id="modalRefPO">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button> -->
					<h4 class="modal-title" id="myModalLabel">PO</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div class="table-responsive">
							<table class="table table-striped" id="tableDataPO" width="100%">
								<thead>
									<tr>
										<th>Tgl</th>
										<th>No. Ref. PO</th>
										<th>No PO</th>
										<th>Kd Supplier</th>
										<th>Supplier</th>
										<th>Bayar</th>
										<th>Harga PO+PPN</th>
										<th>BPO</th>
										<th>Terbayar</th>
										<th>Saldo</th>
										<th>Kurs</th>
										<th>Grup</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal">Tutup</button>
				</div> -->
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
<script src="<?php echo base_url();?>assets/jquery-validate/jquery.validate.min.js"></script>

<!-- JQuery Number -->
<script src="<?php echo base_url();?>assets/jquerynumber/jquery.number.js"></script>

<!-- Terbilang JS -->
<script src="<?php echo base_url();?>assets/terbilang/terbilang.js"></script>

<script>
	$(document).ready(function(){
		// header(location.href:'po.html');

		var id = '<?php echo $this->uri->segment('3'); ?>';
		
		$.ajax({
  	        type    : "POST",
  	        url     : "<?php echo site_url('pp/get_data_pp'); ?>",
  	        dataType  : "JSON",
  	        beforeSend: function() {
  	        },
  	        cache   : false,
  	        // contentType : false,
  	        // processData : false,
  	        
  	        data    : {'id':id},
  	        success: function(data){
  	        	// console.log(data);
  	        	if(data.tglpp === null){
  	        		var tgl_pp = "";
  	        	}
  	        	else {
  	        		var tgl_pp = dateToMDY(new Date(data.data_pp.tglpp));
  	        	}

  	        	if(data.data_pp.tglpo === null){
  	        		var tglpo = "";
  	        	}
  	        	else {
  	        		var tgl_po = dateToMDY(new Date(data.data_pp.tglpo));
  	        	}

  	        	if(data.data_pp.tgl_vou === null){
  	        		var tgl_voucher = "";
  	        	}
  	        	else {
  	        		var tgl_voucher = dateToMDY(new Date(data.data_pp.tgl_vou));
  	        	}

  	        	$('#lbl_no_pp').html(data.data_pp.nopptxt);
  	        	$('#lbl_kurs').html(data.data_pp.KURS);

  	        	$('#hidden_no_pp').val(data.data_pp.nopptxt); 	  
  	        	$('#txt_no_ref_po').val(data.data_pp.ref_po); 	  
  	        	$('#hidden_no_po').val(data.data_pp.nopotxt);
  	        	$('#hidden_grup').val(data.data_pp.grup);
  	        	$('#txt_tgl_pp').val(tgl_pp); 	  
  	        	$('#txt_tgl_po').val(tgl_po);
  	        	$('#txt_pembayaran').val(data.data_pp.bayar);
  	        	$('#txt_kode_supplier').val(data.data_pp.kode_supplytxt);
  	        	$('#txt_supplier').val(data.data_pp.nama_supply);
  	        	$('#txt_nilai_po').val(data.data_pp.jumlahpo);
  	        	$('#hidden_kurs').val(data.data_pp.KURS);
  	        	$('#txt_pajak').val(data.data_pp.pajak);
  	        	$('#txt_nilai_bpo1').val(data.data_pp.KODE_BPO);
  	        	$('#txt_nilai_bpo2').val(data.data_pp.jumlah_bpo);
  	        	$('#txt_total_po').val(data.data_pp.total_po);
  	        	$('#txt_sudah_dibayar').val(data.sudah_bayar);
  	        	$('#txt_dibayar_ke').val(data.data_pp.kepada);
  	        	$('#txt_jumlah').val(data.data_pp.jumlah);
  	        	$('#txt_terbilang').val(data.data_pp.terbilang);
  	        	$('#txt_keterangan').val(data.data_pp.ket);
  	        	$('#hidden_main_account').val(data.data_pp.main_account);
  	        	$('#hidden_nama_account').val(data.data_pp.hidden_main_account);
  	        	$('#txt_no_voucher').val(data.data_pp.no_voutxt);
  	        	$('#txt_tgl_voucher').val(tgl_voucher);
  	        },
  	        error   : function(request){
  	          alert('Error Save Data : '+request.responseText);
  	            
  	          // $('#lbl_status_simpan_'+no).empty();
  	          // $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
  	          
  	          // if($.trim($('#hidden_no_bkb').val()) == ''){
  	          //   $('#lbl_spp_status').empty();
  	          //   $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
  	          // }
  	        }
  	    });

		$('#txt_tgl_pp,#txt_tgl_po,#txt_tgl_voucher').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
		
		// modalRefPO();
		// $('#txt_tgl_voucher').val('');
  	});

  	function modalRefPO(){
  		$('#modalRefPO').modal('show');
  		tableDataPO();
  	}

  	function tableDataPO(){
  		$('#tableDataPO').DataTable().destroy();
    	$('#tableDataPO').DataTable({
      		"paging"          : true,
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
          	  "url"         : "<?php echo site_url('pp/list_po');?>",
          	  "type"        : "POST",
          	  "data"        : {},
          	  "error"       : function(request){
          	    alert(request.responseText);
          	  }
          	},
          	"columns"		: [
          		{"width":"5%"},
          		{"width":"25%"},
          		{"width":"10%"},
          		{"width":"10%"},
          		{"width":"15%"},
          		{"width":"10%"},
          		{"width":"15%"},
          		{"width":"15%"},
          		{"width":"15%"},
          		{"width":"15%"},
          		{"width":null},
          		{"width":null},
          	],
			"columnDefs"    : [
				{
				  	"targets"   	 : [],
				  	"orderable" 	 : false,
				},
			],
			"drawCallback": function(settings) {
	          	$('#tableDataPO tr').each(function() {
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

  		$('#tableDataPO tbody').on('click', 'tr', function () {
  	  		var dataClick = $('#tableDataPO').DataTable().row( this ).data();
  	  		var tgl_po = new Date(dataClick[0]);
  	        var no_ref_po = dataClick[1];
  	        var no_po = dataClick[2];
  	        var kd_supplier = dataClick[3];
  	        var nama_supplier = dataClick[4];
  	        var bayar = dataClick[5];
  	        var nilai_po = dataClick[6];
  	        var nilai_bpo = dataClick[7];
  	        var sudah_dibayar = dataClick[8];
  	        var kurs = dataClick[10];
  	        var grup = dataClick[11];

  	        $('#txt_tgl_po').val(dateToMDY(tgl_po));
  	        $('#txt_no_ref_po').val(no_ref_po);
  	        $('#hidden_no_po').val(no_po);
  	        $('#txt_pembayaran').val(bayar);
  	        $('#txt_kode_supplier').val(kd_supplier);
  	        $('#txt_supplier').val(nama_supplier);
  	        $('#txt_dibayar_ke').val(nama_supplier);
  	        $('#txt_nilai_po').val(nilai_po);
  	        $('#txt_nilai_bpo2').val(nilai_bpo);
  	        $('#lbl_kurs').html(kurs);
  	        $('#hidden_kurs').val(kurs);
  	        $('#hidden_grup').val(grup);

  	        $('#txt_sudah_dibayar').val(sudah_dibayar);
  	        // $('#lbl_no_acc_'+row).html(no_coa);
  	        // $('#lbl_nama_acc_'+row).html(nama_account);
  	        // $('#txt_account_beban_'+row).val(no_coa);

  	        // $('#hidden_no_acc_'+row).val(no_coa);
  	        // $('#hidden_nama_acc_'+row).val(nama_account);

  	        $('#modalRefPO').modal('hide');
  	        hitungTotalPO();
  		})
  	}

  	function hitungTotalPO(){
  		var nilai_po = $('#txt_nilai_po').val();
  		var pajak = $('#txt_pajak').val();
  		var nilai_bpo1 = $('#txt_nilai_bpo1').val();
  		var nilai_bpo2 = $('#txt_nilai_bpo2').val();
  		var sudah_dibayar = $('#txt_sudah_dibayar').val();

  		var total_po = parseInt(nilai_po)+parseInt(pajak)+parseInt(nilai_bpo1)+parseInt(nilai_bpo2);
  		var sisabayar = (parseInt(nilai_po)+parseInt(pajak)+parseInt(nilai_bpo1)+parseInt(nilai_bpo2))-parseInt(sudah_dibayar);

  		$('#txt_total_po').val(total_po);
  		$('#txt_jumlah').val(sisabayar);
  		$('#txt_terbilang').val(terbilang(sisabayar));
  	}

  	$("#form_input_pp").validate({
  		ignore: [],
    	submitHandler: function(form) {
            saveData();
        }
  	});

  	function saveData(){
  		var form_data = new FormData();

  		var id = '<?php echo $this->uri->segment('3'); ?>';

		form_data.append('id_pp',id); 	  
		form_data.append('hidden_no_pp',$('#hidden_no_pp').val()); 	  
		form_data.append('txt_no_ref_po',$('#txt_no_ref_po').val()); 	  
		form_data.append('hidden_no_po',$('#hidden_no_po').val());
		form_data.append('hidden_grup',$('#hidden_grup').val());
		form_data.append('txt_tgl_pp',$('#txt_tgl_pp').val());  	  
		form_data.append('txt_tgl_po',$('#txt_tgl_po').val());  	  
		form_data.append('txt_pembayaran',$('#txt_pembayaran').val());  	  
		form_data.append('txt_kode_supplier',$('#txt_kode_supplier').val());  	  
		form_data.append('txt_supplier',$('#txt_supplier').val());
		form_data.append('txt_nilai_po',$('#txt_nilai_po').val());
		form_data.append('hidden_kurs',$('#hidden_kurs').val());  
		form_data.append('txt_pajak',$('#txt_pajak').val());
		form_data.append('txt_nilai_bpo1',$('#txt_nilai_bpo1').val());  	  
		form_data.append('txt_nilai_bpo2',$('#txt_nilai_bpo2').val());  	  
		form_data.append('txt_total_po',$('#txt_total_po').val());  	  
		form_data.append('txt_dibayar_ke',$('#txt_dibayar_ke').val());  	  
		form_data.append('txt_jumlah',$('#txt_jumlah').val());  	  
		form_data.append('txt_terbilang',$('#txt_terbilang').val());  	  
		form_data.append('txt_keterangan',$('#txt_keterangan').val());	  
		form_data.append('hidden_main_account',$('#hidden_main_account').val());	  
		form_data.append('hidden_nama_account',$('#hidden_nama_account').val());	  
		form_data.append('txt_no_voucher',$('#txt_no_voucher').val());	  
		form_data.append('txt_tgl_voucher',$('#txt_tgl_voucher').val());	  
		
  	  	$.ajax({
  	        type    : "POST",
  	        url     : "<?php echo site_url('pp/simpan_pp'); ?>",
  	        dataType  : "JSON",
  	        beforeSend: function() {
  	          	// $('#lbl_status_simpan_'+no).empty();
  	          	// $('#lbl_status_simpan_'+no).append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Proses Simpan</label>');
  	          	// if($.trim($('#hidden_no_bkb').val()) == ''){
  	           //  	$('#lbl_bkb_status').empty();
  	           //  	$('#lbl_bkb_status').append('<label style="color:#f0ad4e;"><i class="fa fa-spinner fa-spin" style="font-size:24px;color:#f0ad4e;"></i> Generate PO Number</label>');
  	          	// }
  	          	// $('#btn_ubah_'+no).css('display','block');
  	          	// $('#btn_hapus_'+no).css('display','block');
  	        },
  	        cache   : false,
  	        contentType : false,
  	        processData : false,
  	        
  	        data    : form_data,
  	        success: function(data){
  	 //          if(data == "kodebar_exist"){
    //     		swal('Tidak bisa ditambahkan. Barang sudah ada pada BKB yang sama !');
    //     		$('#lbl_status_simpan_'+no).empty();
	   //      	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
    //     	  }
    //     	  else{
        	  	if(data.status == true){
        	  		window.location.href = "<?php echo site_url('pp'); ?>";
    //     	  		$('.div_form_1').find('input,textarea').attr('readonly','');
    //     	  		$('.div_form_1').find('select').attr('disabled','');
	  	            
	  	//             $('#tableRinciBKB tbody #tr_'+no+' td').find('input,textarea').not('#txt_account_beban_'+no+',#txt_barang_'+no).attr('readonly','');
	  	//             $('#tableRinciBKB tbody #tr_'+no+' td').find('select,#txt_account_beban_'+no+',#txt_barang_'+no).attr('disabled','');

	  	//             $('#lbl_status_simpan_'+no).empty();
	  	//             $('#lbl_status_simpan_'+no).append('<label style="color:#6fc1ad;"><i class="fa fa-check" style="color:#6fc1ad;"></i> Berhasil disimpan</label>');

	  	//             $('#lbl_bkb_status').empty();
	  	//             $('#h4_no_bkb').empty();
	  	            
	  	//             $('#h4_no_ref_bkb').empty();
	  	            
	  	//             $('#h4_no_bkb').append('No. BKB : '+data.skb);
	  	//             $('#h4_no_ref_bkb').append('No. Ref BKB : '+data.no_ref);

	  	//             $('#hidden_no_bkb').val(data.skb);
	  	//             $('#hidden_no_ref_bkb').val(data.no_ref);

	  	//             if($.trim($('#hidden_id_stok_keluar').val()) == ''){
		  // 	            $('#hidden_id_stok_keluar').val(data.id_stockkeluar);
		  // 	        }
	  	//             $('#hidden_id_keluarbrgitem_'+no).val(data.id_keluarbrgitem);

	  	//             $('#btn_simpan_'+no).css('display','none');
	  	        }
				// else{
				// 	alert('Error Save Data');
				//   	$('#lbl_status_simpan_'+no).empty();
				// 	$('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
				// }
    //     	  }
  	        },
  	        error   : function(request){
  	          alert('Error Save Data : '+request.responseText);
  	            
  	          // $('#lbl_status_simpan_'+no).empty();
  	          // $('#lbl_status_simpan_'+no).append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Tersimpan !</label>');
  	          
  	          // if($.trim($('#hidden_no_bkb').val()) == ''){
  	          //   $('#lbl_spp_status').empty();
  	          //   $('#lbl_spp_status').append('<label style="color:#ff0000;"><i class="fa fa-close" style="color:#ff0000;"></i> Gagal Generate !</label>');
  	          // }
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

</script>