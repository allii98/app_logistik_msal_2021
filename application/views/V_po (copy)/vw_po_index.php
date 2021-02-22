<div class="">
	<div class="page-title">
		<div class="title_left">
			<h2>PO <small>Purchase Order</small></h2>
		</div>
		<!-- <div class="title_right">
			<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
		</div> -->
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a class="btn btn-round btn-info" href="<?php echo site_url('po/input'); ?>">Input PO</a>
			<div class="x_panel">
				<!-- <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalInputSPP">Input PO</button> -->
				<div class="x_title">
					<h2>Data PO</h2>
					<!-- <ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a>
								</li>
								<li><a href="#">Settings 2</a>
								</li>
							</ul>
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul> -->
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>No. PO</th>
								<th>No. Ref</th>
								<th>Tgl. Ref</th>
								<th>Tanggal</th>
								<th>Tgl. Terima</th>
								<th>Departemen Tujuan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>123456</td>
								<td>123456</td>
								<td>2011/04/25</td>
								<td>2011/04/25</td>
								<td>2011/04/25</td>
								<td>MIS</td>
								<td>
									<button class="btn btn-sm btn-info fa fa-info" type="button" data-toggle="tooltip" data-placement="top" title="Detail" onclick="saveRinciClick('1')"></button>
									<button class="btn btn-sm btn-warning fa fa-edit" type="button" data-toggle="tooltip" data-placement="top" title="Ubah" onclick="ubahRinci('1')"></button>
									<button class="btn btn-sm btn-danger fa fa-trash" type="button" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="hapusRinci('1')"></button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		// $.ajax({
		// 	type: "POST",
		// 	url: "<?php echo site_url('po/data_pt')?>",
		// 	data: "",
		// 	dataType: "JSON",
		// 	success:  function(data){
		// 		// console.log(data[0].AfdCode);
		// 		if(data[0].AfdCode == "no_data") {
		// 			$('#marquee_tbs_msal').append("No data available");
		// 		}
		// 		else {
		// 			$.each(data, function(index) {
		// 	            var text = 'AFD '+data[index].AfdCode+' ('+data[index].netto+' kg), ';
		// 	            $('#marquee_tbs_msal').append(text);
		// 	        });	
		// 		}
		//         date_update();
		// 	},
		// 	error   : function(request){
		// 		alert("Error Data Marquee TBS MSAL !!");
		// 		console.log(request.responseText);
		// 	}
		// });
	});
</script>