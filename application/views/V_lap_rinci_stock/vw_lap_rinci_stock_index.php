<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>Laporan Rinci Stock</h2>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<!-- <div class="x_title">
					<h2>Laporan Rincian Stock</h2>
					<div class="clearfix"></div>
				</div> -->
				<div class="x_content">
					<div data-parsley-validate class="form-horizontal form-label-left" id="div_filter">
						<div class="form-group">
							<div class="col-md-9 col-sm-6 col-xs-12 col-md-offset-1">
								<div class="form-group">
									<label class="control-label col-md-3">PT</label>
									<div class="col-md-8">
										<select class="form-control" id="cmb_pt" name="cmb_pt">
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Kode Stock</label>
									<div class="col-md-4">
										<select class="form-control" id="cmb_kd_stock_1" name="cmb_kd_stock_1">
										</select>
									</div>
									<div class="col-md-4">
										<select class="form-control" id="cmb_kd_stock_2" name="cmb_kd_stock_2">
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Periode</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="txt_periode" name="txt_periode">
									</div>
								</div>
								<div class="form-group">
									<!-- <div class="col-md-2 col-md-offset-3"> -->
									<div class="col-md-2">
										<div class="radio">
											<label>
												<input type="radio" value="Rinci" id="rbt_rinci" name="rbt_pilihan" checked> Rinci
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="radio">
											<label>
												<input type="radio" value="Summary" id="rbt_summary" name="rbt_pilihan" > Summary
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="radio">
											<label>
												<input type="radio" value="Nilai Rupiah" id="rbt_nilai_rupiah" name="rbt_pilihan" > Nilai Rupiah
											</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="radio">
											<label>
												<input type="radio" value="Rupiah Minus" id="rbt_rupiah_minus" name="rbt_pilihan" > Rupiah Minus
											</label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="radio">
											<label>
												<input type="radio" value="Rupiah Rata - Rata Harian" id="rbt_rupiah_rata_rata_harian" name="rbt_pilihan" > Rupiah Rata - Rata Harian
											</label>
										</div>
									</div>									
								</div>
								<div class="form-group">
									<div class="col-md-2 col-md-offset-6">
										<!-- <a href="<?php echo site_url("lap_rinci_stock/rinci_tampil"); ?>" class="btn btn-info">Tampilkan</a> -->
										<!-- <button type="button" class="btn btn-info" id="btn_save" onclick="window.open('<?php // echo site_url("lap_rinci_stock/rinci_tampil") ?>');" >Tampilkan</button> -->
										<button type="button" class="btn btn-info" id="btn_save" onclick="printStock()" >Tampilkan</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <table id="tableStockAwal" class="table table-striped table-bordered" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>No.</th>
								<th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Group</th>
								<th>Saldo Awal (Qty)</th>
								<th>Saldo Awal (Nilai)</th>
								<th>Saldo Akhir (Qty)</th>
								<th>Saldo Akhir (Nilai)</th>
								<th>Keterangan</th>
								<th>Min. Stock</th>
							</tr>
						</thead>
						<tbody id="tbody_list_stock_awal">
						</tbody>
					</table> -->
					<br />
					<br />
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
		getPT();
		getKodebar();

		$('#txt_periode').daterangepicker({
			singleDatePicker:!0,
			singleClasses:"picker_1"
			// singleDatePicker: true,
			// showDropdowns: true,
			// minYear: 1901,
			// maxYear: parseInt(moment().format('YYYY'),10)
		},function(start,end,label){
			// start.format('YYYY-MM-DD')
		});
		
	});

	function getPT(){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('lap_rinci_stock/get_pt'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : '',
	        success: function(data){
				var opsi_cmb_all = '<option value="Gabungan">GABUNGAN</option>';
				$('#cmb_pt').append(opsi_cmb_all);
	        	$.each(data, function(index) {
	        		var opsi_pt = '<option value="'+data[index].kodetxt+'">'+data[index].PT+'</option>';
	          		$('#cmb_pt').append(opsi_pt);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	function getKodebar(){
		$.ajax({
	        type    : "POST",
	        url     : "<?php echo site_url('lap_rinci_stock/get_kodebar'); ?>",
	        dataType  : "JSON",
	        beforeSend: function(){
	        },
	        cache   : false,
	        // contentType : false,
	        // processData : false,
	        
	        data    : '',
	        success: function(data){
	        	$('#cmb_kd_stock_1').empty();
	        	$('#cmb_kd_stock_2').empty();

	        	$('#cmb_kd_stock_1').append('<option value="Semua">Semua</option>');
	        	$('#cmb_kd_stock_2').append('<option value="Semua">Semua</option>');

	        	$.each(data, function(index) {
	        		var opsi_kodebar = '<option value="'+data[index].kodebartxt+'">'+data[index].kodebartxt+' - '+data[index].nabar+'</option>';
	          		$('#cmb_kd_stock_1').append(opsi_kodebar);
	          		$('#cmb_kd_stock_2').append(opsi_kodebar);
				});
	        },
	        error   : function(request){
	          alert(request.responseText);
	        }
	    });
	}

	// function printStock(){
	// 	var pt = $('#cmb_pt').val();
	// 	var kd_stock_1 = $('#cmb_kd_stock_1').val();
	// 	var kd_stock_2 = $('#cmb_kd_stock_2').val();
	// 	var periode = $('#txt_periode').val();
	// 	var pilihan = $("input[name='rbt_pilihan']:checked"). val();

	// 	console.log(pt);
	// 	console.log(kd_stock_1);
	// 	console.log(kd_stock_2);
	// 	console.log(periode);
	// 	console.log(pilihan);
	// 	$.ajax({
	// 		type    : "POST",
	//         url     : "<?php // echo site_url('lap_rinci_stock/print_stock'); ?>",
	//         dataType  : "JSON",
	//         beforeSend: function(){
	//         },
	//         cache   : false,
	//         // contentType : false,
	//         // processData : false,
	        
	//         data    : {'pt':pt,'kd_stock_1':kd_stock_1,'kd_stock_2':kd_stock_2,'periode':periode,'pilihan':pilihan},
	//         success: function(data){

	//         },
	//         error   : function(request){
	//           alert(request.responseText);
	//         }
	// 	})
	// }

	function printStock(){
		var pt = $('#cmb_pt').val();
		var kd_stock_1 = $('#cmb_kd_stock_1').val();
		var kd_stock_2 = $('#cmb_kd_stock_2').val();
		var periode = $('#txt_periode').val();
		var replace_periode = periode.replace(/\//g,"_"); // YYYY/MM/DD menjadi YYYY_MM_DD
		var pilihan = $("input[name='rbt_pilihan']:checked"). val();
		var replace_pilihan = pilihan.replace(/ /g,"_"); // replace spasi menjadi _ (underscore)
		var namapt = $('#cmb_pt :selected').text();
		// var encode_namapt = encodeURI(namapt);
		// var encode_namapt = encodeURIComponent(namapt);
		var encode_namapt = escape(namapt);
		// PT.MULIA%20SAWIT%20AGRO%20LESTARI%20%28SITE%29
		// var encode_namapt = namapt.replace(/ /g,"_"); // replace spasi menjadi _ (underscore)
		// encode_namapt = encode_namapt.replace(/ ( /g,"%28");
		console.log(encode_namapt);
	
		window.open('<?php echo site_url("lap_rinci_stock/print_stock") ?>/'+pt+'/'+kd_stock_1+'/'+kd_stock_2+'/'+replace_periode+'/'+replace_pilihan+'/'+encode_namapt);

	}

</script>