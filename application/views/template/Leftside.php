<div class="navbar nav_title" style="border: 0;">
	<a href="<?php echo site_url(); ?>" class="site_title">
		<!-- <i class="glyphicon glyphicon-th-large"></i>  -->
		<img class="img" width="45px" src="<?php echo base_url(); ?>assets/img/mips.png">
		<span>MIPS Logistik</span></a>
</div>
<div class="clearfix"></div>
<div class="profile clearfix">
	<div class="profile_pic">
		<img src="<?php echo base_url(); ?>assets/gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
	</div>
	<div class="profile_info">
		<span>Welcome,</span>
		<h2><?= $this->session->userdata('user'); ?></h2>
	</div>
</div>
<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<h3>Menu</h3>

		<ul class="nav side-menu" id="dashboard">
			<li>
				<a href="<?php echo site_url('dashboard') ?>">
					<i class="fa fa-home"></i> Dashboard
				</a>
			</li>
		</ul>
		<?php
		$thisUsr = $this->session->userdata('user');

		if (
			$thisUsr == 'User Agronomi' || $thisUsr == 'User HSE' ||
			$thisUsr == 'User BQC' || $thisUsr == 'User HRD GA' ||
			$thisUsr == 'User GIS' || $thisUsr == 'User SITE' ||
			$thisUsr == 'User FA' || $thisUsr == 'User Legal Humas' ||
			$thisUsr == 'User Teknik' || $thisUsr == 'User Audit' ||
			$thisUsr == 'User PKS' || $thisUsr == 'Asisten Maintenance' ||
			$thisUsr == 'Kasie Gudang' || $thisUsr == 'Kasie HRD GA' ||
			$thisUsr == 'Kasie FA' || $thisUsr == 'Staff Purchasing' ||
			$thisUsr == 'User HO' ||
			$thisUsr == 'Dept Head Purchasing'
		) { ?>
			<ul class="nav side-menu" id="menu_tr">
				<li>
					<a>
						<i class="fa fa-dashboard"></i> Menu Transaksi <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li>
						<li>
							<a>SPP <span class="fa fa-chevron-down"></span>
							</a>
							<ul class="nav child_menu">
								<li class="sub_menu">
									<a href="<?php echo site_url('spp/input') ?>">SPP Baru</a>
								</li>
								<li>
									<a href="<?php echo site_url('spp') ?>">SPP Approval</a>
								</li>
								<li>
									<a href="<?php echo site_url('spp/approval') ?>">Semua Data SPP</a>
								</li>
							</ul>
						</li>
				</li>
				<li>
					<!-- <a href="<?php echo site_url('po') ?>">PO</a> -->
				<li>
					<a>PO <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li class="sub_menu">
							<a href="<?php echo site_url('po/input') ?>">Input PO</a>
						</li>
						<li>
							<a href="<?php echo site_url('po') ?>">Data PO</a>
						</li>
					</ul>
				</li>
				</li>
				<li>
					<!-- <a href="<?php echo site_url('lpb') ?>">LPB</a> -->
				<li>
					<a>LPB <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li class="sub_menu">
							<a href="<?php echo site_url('lpb/input') ?>">Input LPB</a>
						</li>
						<li>
							<a href="<?php echo site_url('lpb') ?>">Data LPB</a>
						</li>
					</ul>
				</li>
				</li>
				<li>
					<!-- <a href="<?php echo site_url('bpb') ?>">BPB</a> -->
				<li>
					<a>BPB <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li class="sub_menu">
							<a href="<?php echo site_url('bpb/input') ?>">Input BPB</a>
						</li>
						<li>
							<a href="<?php echo site_url('bpb') ?>">Data BPB</a>
						</li>
					</ul>
				</li>
				</li>
				<li>
					<!-- <a href="<?php echo site_url('bkb') ?>">BKB</a> -->
				<li>
					<a>BKB <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li class="sub_menu">
							<a href="<?php echo site_url('bkb/input') ?>">Input BKB</a>
						</li>
						<!-- <li class="sub_menu">
										<a href="<?php // echo site_url('bkb_mutasi/input') 
													?>">Input BKB Mutasi</a>
									</li> -->
						<li>
							<a href="<?php echo site_url('bkb') ?>">Data BKB</a>
						</li>
						<li>
							<a href="<?php echo site_url('bkb/menunggu_approval') ?>">Approval Rev Qty</a>
						</li>
					</ul>
				</li>
				</li>
				<li>
					<!-- <a href="<?php echo site_url('pp') ?>">PO</a> -->
				<li>
					<a>PP <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<li class="sub_menu">
							<a href="<?php echo site_url('pp/input') ?>">Input PP</a>
						</li>
						<li>
							<a href="<?php echo site_url('pp') ?>">Data PP</a>
						</li>
					</ul>
				</li>
				</li>
				<li>
				<li>
					<a>Retur <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<!-- <li class="sub_menu">
										<a href="<?php // echo site_url('retur_lpb/input') 
													?>">Retur LPB</a>
									</li> -->
						<li>
							<a href="<?php echo site_url('retur_bkb/input') ?>">Retur BKB</a>
						</li>
					</ul>
				</li>
				</li>
			</ul>
			</li>


			<li>
				<a>
					<i class="fa fa-file"></i> Laporan
					<span class="fa fa-chevron-down"></span>
				</a>
				<ul class="nav child_menu">
					<li>
						<a href="<?php echo site_url('lap_barang'); ?>">Laporan Barang</a>
					</li>
					<li>
						<a onclick="lap_spp();">Surat Permintaan Pembelian (SPP)</a>
					</li>
					<li>
						<a onclick="lap_po();">Purchase Order (PO)</a>
					</li>
					<li>
						<a onclick="lap_pp();">Permohonan Pembayaran (PP)</a>
					</li>
					<li>
						<a>Analisa<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li class="sub_menu"><a onclick="lap_spp_po();">SPP vs PO</a></li>
							<li class="sub_menu"><a onclick="lap_lpb_po();">LPB vs PO</a></li>
							<li class="sub_menu"><a onclick="lap_dur_trans();">Durasi Transaksi</a></li>
						</ul>
					</li>
					<li>
						<a onclick="lap_lpb();">Laporan Penerimaan Barang (LPB)</a>
					</li>
					<li>
						<a onclick="lap_bkb();">Bukti Keluar Barang (BKB)</a>
					</li>
					<li>
						<a onclick="lap_rsh();">Laporan Register Stok Harian</a>
					</li>
					<li>
						<a href="<?php echo site_url('lap_rinci_stock'); ?>">Laporan Rinci Stock</a>
					</li>
				</ul>
			</li>
			<li>
				<a>
					<i class="fa fa-paper-plane"></i> Posting
					<span class="fa fa-chevron-down"></span>
				</a>
				<ul class="nav child_menu">
					<li>
						<!-- <a href="<?php // echo site_url('hitul_stok'); 
										?>">Hitung Ulang Stok</a> -->
						<a href="javascript:hitulStok();">Hitung Ulang Stok</a>
					</li>
					<!-- <li>
							<a href="javascript:transferGL();">Posting LPB dan BKB</a>
						</li> -->
					<li>
						<a href="javascript:transferGL();">Transfer Transaksi ke GL</a>
					</li>
					<li>
						<a href="<?php echo site_url('tutup_buku'); ?>">Tutup Buku</a>
					</li>
					<!-- <li>
							<a href="javascript:hitulStokHarian();">Hitung Rata - Rata Harian</a>
						</li> -->
				</ul>
			</li>
			<li>
				<a>
					<i class="fa fa-gear"></i> Master
					<span class="fa fa-chevron-down"></span>
				</a>
				<ul class="nav child_menu">
					<li>
						<a href="<?php echo site_url('master_barang'); ?>">Kode Barang</a>
					</li>
					<li>
						<a href="<?php echo site_url('stock_awal'); ?>">Input Stock Awal</a>
					</li>
					<li>
						<a href="<?php echo site_url('lap_rinci_stock'); ?>">Laporan Rinci Stock</a>
					</li>
				</ul>
			</li>
			</ul>
		<?php } ?>
	</div>
</div>

</div>
<!-- <body class="nav-md">
	<div class="container body">
		<div class="main_container">
			
		</div>
	</div>
</body> -->


<script type="text/javascript">
	$(document).ready(function() {
		var thisUsr = '<?= $this->session->userdata('user'); ?>';
		if (thisUsr == 'User Agronomi' || thisUsr == 'User HSE' ||
			thisUsr == 'User BQC' || thisUsr == 'User HRD GA' ||
			thisUsr == 'User GIS' || thisUsr == 'User SITE' ||
			thisUsr == 'User FA' || thisUsr == 'User Legal Humas' ||
			thisUsr == 'User Teknik' || thisUsr == 'User Audit' ||
			thisUsr == 'User PKS' || thisUsr == 'Asisten Maintenance' ||
			thisUsr == 'Kasie Gudang' || thisUsr == 'Kasie HRD GA' ||
			thisUsr == 'Kasie FA' || thisUsr == 'Staff Purchasing' ||
			thisUsr == 'User HO' || thisUsr == 'Dept Head Purchasing') {
			//$('#menu_tr').removeAttr('style');
		} else {
			$('#btn_input').css('display', 'none');
		}
	});


	function lap_spp() {
		$('#modalLapSPP').modal('show');
		$('#cmb_devisi').empty();
		$('#cmb_bagian').empty();
		pilihDevisi();
		pilihBagian();
		pilihTanggal();
	}

	function lap_po() {
		$('#modalLapPO').modal('show');
		$('#cmb_company').empty();
		pilihCompany();
		pilihTanggal1();
	}

	function lap_spp_po() {
		$('#modalLapSPPPO').modal('show');
		pilihTanggal3();
	}

	function lap_lpb_po() {
		$('#modalLapLPBPO').modal('show');
		$('#cmb_devisi2').empty();
		pilihDevisi2();
		pilihTanggal4();
	}

	function lap_dur_trans() {
		$('#modalLapDurTrans').modal('show');
		pilihTanggal5();
	}

	function lap_pp() {
		$('#modalLapPP').modal('show');
		$('#cmb_devisi1').empty();
		pilihDevisi1();
		pilihTanggal2();
	}

	function lap_lpb() {
		$('#modalLapLPB').modal('show');
		$('#cmb_devisi3').empty();
		pilihDevisi3();
		pilihTanggal6();
	}

	function lap_bkb() {
		$('#modalLapBKB').modal('show');
		$('#cmb_devisi4').empty();
		$('#cmb_bagian1').empty();
		pilihDevisi4();
		pilihBagian1();
		pilihTanggal7();
	}

	function lap_rsh() {
		$('#modalLapRSH').modal('show');
		$('#cmb_devisi5').empty();
		pilihDevisi5();
		pilihGroupBrg();
	}

	function pilihGroupBrg() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/list_group_brg'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_group_brg = '<option value="' + data[index].grp + '">' + data[index].grp + '</option>';
					$('#cmb_group_brg').append(opsi_cmb_group_brg);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function cariKodeBrg() {
		$('#modalListBarang').modal('show');
		$('#tableListBarang').DataTable().destroy();
		listBarang();
	}

	function listBarang() {
		$('#tableListBarang').DataTable().destroy();
		$('#tableListBarang').DataTable({
			"paging": true,
			"scrollY": false,
			"scrollX": false,
			"searching": true,
			"select": false,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": false,
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"order": [],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {},
			"ajax": {
				"url": "<?php echo site_url('laporan/list_barang'); ?>",
				"type": "POST",
				"data": {},
				"error": function(request) {
					alert(request.responseText);
				}
			},
			"columns": [{
					"width": "5%"
				},
				{
					"width": "10%"
				},
				{
					"width": "20%"
				},
				{
					"width": "20%"
				}
			],
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
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
		var rel = setInterval(function() {
			$('#tableListBarang').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100);
		$('#tableListBarang tbody').on('click', 'tr', function() {
			var data = $('#tableListBarang').DataTable().row(this).data();
			var row_id = data[1];
			console.log(row_id);
			$('#kode_stok').val(row_id);
			$('#modalListBarang').modal('hide');
			$('#tableListBarang').DataTable().destroy();
		});
	}

	function pilihTanggal() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode').val(today);
		$('#txt_periode1').val(today1);
		$('#txt_periode').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1",
		});
		$('#txt_periode1').daterangepicker({
			singleDatePicker: !0,
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal1() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode2').val(today);
		$('#txt_periode3').val(today1);
		$('#txt_periode2').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode3').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal2() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode4').val(today);
		$('#txt_periode5').val(today1);
		$('#txt_periode4').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode5').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal3() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode6').val(today);
		$('#txt_periode7').val(today1);
		$('#txt_periode6').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode7').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal4() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode8').val(today);
		$('#txt_periode9').val(today1);
		$('#txt_periode8').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode9').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal5() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode10').val(today);
		$('#txt_periode11').val(today1);
		$('#txt_periode10').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode11').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal6() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode12').val(today);
		$('#txt_periode13').val(today1);
		$('#txt_periode12').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode13').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihTanggal7() {
		var d = new Date();
		var today = (26) + '/' + d.getMonth() + '/' + d.getFullYear();
		var today1 = (25) + '/' + (d.getMonth() + 1) + '/' + d.getFullYear();
		$('#txt_periode14').val(today);
		$('#txt_periode15').val(today1);
		$('#txt_periode14').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
		$('#txt_periode15').daterangepicker({
			locale: {
				format: 'DD/MM/YYYY'
			},
			singleDatePicker: !0,
			singleClasses: "picker_1"
		});
	}

	function pilihDevisi() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				var stl = '<?= $this->session->userdata('status_lokasi'); ?>';
				if (stl == 'HO') {
					var opsi_cmb_all = '<option value="Semua">SEMUA</option>';
					$('#cmb_devisi').append(opsi_cmb_all);
				}
				$.each(data, function(index) {
					var opsi_cmb_devisi = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi').append(opsi_cmb_devisi);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisi1() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi1 = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi1').append(opsi_cmb_devisi1);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisi2() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi2 = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi2').append(opsi_cmb_devisi2);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisi3() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi3 = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi3').append(opsi_cmb_devisi3);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisi4() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi4 = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi4').append(opsi_cmb_devisi4);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihDevisi5() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				$.each(data, function(index) {
					var opsi_cmb_devisi5 = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_devisi5').append(opsi_cmb_devisi5);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihCompany() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_devisi'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				var stl = '<?= $this->session->userdata('status_lokasi'); ?>';
				if (stl == 'HO') {
					var opsi_cmb_company = '<option value="Semua">SEMUA</option>';
					$('#cmb_company').append(opsi_cmb_company);
				}
				$.each(data, function(index) {
					var opsi_cmb_company = '<option value="' + data[index].kodetxt + '">' + data[index].PT + '</option>';
					$('#cmb_company').append(opsi_cmb_company);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihBagian() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_bagian'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				var opsi_cmb_all = '<option value="Semua">SEMUA</option>';
				$('#cmb_bagian').append(opsi_cmb_all);
				$.each(data, function(index) {
					var opsi_cmb_bagian = '<option value="' + data[index].nama + '">' + data[index].nama + '</option>';
					$('#cmb_bagian').append(opsi_cmb_bagian);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function pilihBagian1() {
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('laporan/cari_bagian'); ?>",
			dataType: "JSON",
			beforeSend: function() {},
			cache: false,
			data: '',
			success: function(data) {
				var opsi_cmb_all = '<option value="Semua">Semua</option>';
				$('#cmb_bagian1').append(opsi_cmb_all);
				$.each(data, function(index) {
					var opsi_cmb_bagian1 = '<option value="' + data[index].nama + '">' + data[index].nama + '</option>';
					$('#cmb_bagian1').append(opsi_cmb_bagian1);
				});
			},
			error: function(request) {
				alert(request.responseText);
			}
		});
	}

	function tampilkanspp() {
		$('#modalListLapSPP').modal('show');
		var cmb_devisi = $('#cmb_devisi').val();
		var cmb_bagian = $('#cmb_bagian').val();
		var txt_periode = $('#txt_periode').val();
		var txt_periode1 = $('#txt_periode1').val();
		var rbt_pilihan = $("input[name='rbt_pilihan']:checked").val();

		$('#tableListLapSPP').DataTable().destroy();
		$('#tableListLapSPP').DataTable({
			"paging": true,
			"scrollY": false,
			"scrollX": false,
			"searching": true,
			"select": false,
			"bLengthChange": true,
			"scrollCollapse": true,
			"bPaginate": true,
			"bInfo": true,
			"bSort": true,
			"processing": true,
			"serverSide": true,
			"stateSave": true,
			"order": [],
			"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				console.log(aData);
			},
			"ajax": {
				"url": "<?php echo site_url('laporan/tampilkan_spp'); ?>",
				"type": "POST",
				"data": {
					"cmb_devisi": cmb_devisi,
					"cmb_bagian": cmb_bagian,
					"txt_periode": txt_periode,
					"txt_periode1": txt_periode1,
					"rbt_pilihan": rbt_pilihan
				},
				"error": function(request) {
					console.log(request.responseText);
				}
			},
			"columns": [{
					"width": "5%"
				},
				{
					"width": "25%"
				},
				{
					"width": "10%"
				},
				{
					"width": "10%"
				},
				{
					"width": "10%"
				},
			],
			"columnDefs": [{
				"targets": [],
				"orderable": false,
			}, ],
		});
		var rel = setInterval(function() {
			$('#tableListLapSPP').DataTable().ajax.reload();
			clearInterval(rel);
		}, 100);
	}

	function tampilkanpo() {
		var cmb_company = $('#cmb_company').val();
		var txt_periode2 = $('#txt_periode2').val();
		var txt_periode3 = $('#txt_periode3').val();
		var rbt_pilihan1 = $("input[name='rbt_pilihan1']:checked").val();
		console.log(cmb_company, txt_periode2, txt_periode3, rbt_pilihan1);

		if (rbt_pilihan1 == 'register') {
			window.open('<?= site_url("laporan/print_lap_po_register"); ?>/' + cmb_company + '/' + txt_periode2 + '/' + txt_periode3);
		} else if (rbt_pilihan1 == 'po_lokal_r') {
			window.open('<?= site_url("laporan/print_lap_po_lokal_r"); ?>/' + cmb_company + '/' + txt_periode2 + '/' + txt_periode3);
		} else if (rbt_pilihan1 == 'cash') {
			window.open('<?= site_url("laporan/print_lap_po_cash"); ?>/' + cmb_company + '/' + txt_periode2 + '/' + txt_periode3);
		} else if (rbt_pilihan1 == 'po_lokal_t') {
			window.open('<?= site_url("laporan/print_lap_po_lokal_t"); ?>/' + cmb_company + '/' + txt_periode2 + '/' + txt_periode3);
		} else if (rbt_pilihan1 == 'cetakan') {
			$('#modalListLapPO').modal('show');
			$('#tableListLapPOCetakan').DataTable().destroy();
			$('#tableListLapPOCetakan').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listPOCetakan'); ?>",
					"type": "POST",
					"data": {
						"cmb_company": cmb_company,
						"txt_periode2": txt_periode2,
						"txt_periode3": txt_periode3
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "25%"
					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapPOCetakan').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		}
	}

	function tampilkanpp() {
		var cmb_devisi1 = $('#cmb_devisi1').val();
		var txt_periode4 = $('#txt_periode4').val();
		var txt_periode5 = $('#txt_periode5').val();
		var rbt_pilihan2 = $("input[name='rbt_pilihan2']:checked").val();

		if (rbt_pilihan2 == 'register1') {
			window.open('<?= site_url("laporan/print_lap_pp_register"); ?>/' + cmb_devisi1 + '/' + txt_periode4 + '/' + txt_periode5);
		} else {
			$('#modalListLapPP').modal('show');
			$('#tableListLapPP').DataTable().destroy();
			$('#tableListLapPP').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listPPCetakan'); ?>",
					"type": "POST",
					"data": {
						"cmb_devisi1": cmb_devisi1,
						"txt_periode4": txt_periode4,
						"txt_periode5": txt_periode5
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "25%"
					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapPP').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		}

		console.log(cmb_devisi1, txt_periode4, txt_periode5, rbt_pilihan2);

	}

	function tampilkanspp_po() {

		var txt_periode6 = $('#txt_periode6').val();
		var txt_periode7 = $('#txt_periode7').val();
		var rbt_pilihan3 = $("input[name='rbt_pilihan3']:checked").val();

		if (rbt_pilihan3 == 'semua_data') {
			window.open('<?= site_url("laporan/print_lap_spp_po_semua"); ?>');
		} else if (rbt_pilihan3 == 'spp_sdh_po') {
			window.open('<?= site_url("laporan/print_lap_spp_po_sdhpo"); ?>');
		} else if (rbt_pilihan3 == 'spp_blm_po') {
			window.open('<?= site_url("laporan/print_lap_spp_po_blmpo"); ?>');
		} else if (rbt_pilihan3 == 'graphic') {
			window.open('<?= site_url("laporan/print_lap_spp_po_graphic"); ?>');
		}

		console.log(txt_periode6, txt_periode7, rbt_pilihan3);
	}

	function tampilkanpo_lpb() {
		var cmb_devisi2 = $('#cmb_devisi2').val();
		var noref_po = $('#noref_po').val();
		var txt_periode8 = $('#txt_periode8').val();
		var txt_periode9 = $('#txt_periode9').val();
		var rbt_pilihan4 = $("input[name='rbt_pilihan4']:checked").val();
		var dValid = true;
		$('#cmb_devisi2', '#noref_po', '#txt_periode8', '#txt_periode9').each(function(e) {
			if ($.trim($(this).val()) == '') {
				dValid = false;
			}
		});

		if (noref_po !== '') {
			if (rbt_pilihan4 == 'semua_tr') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_semua"); ?>');
			} else if (rbt_pilihan4 == 'by_barang') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_bybrg"); ?>');
			} else if (rbt_pilihan4 == 'by_supplier') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_bysup"); ?>');
			} else if (rbt_pilihan4 == 'po_blm_lpb_po') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_blm_lpb_po"); ?>');
			} else if (rbt_pilihan4 == 'po_cash_sh') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_po_cash_sh"); ?>');
			} else if (rbt_pilihan4 == 'po_cash_blm_lpb') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_po_cash_blm_lpb"); ?>');
			} else if (rbt_pilihan4 == 'po_lokal' || rbt_pilihan4 == 'po_blm_lpb_brg') {
				window.open('<?= site_url("laporan/print_lap_po_lpb_po_gab"); ?>');
			}
		} else {
			swal('Jangan ada field yang kosong!~');
		}



		console.log(cmb_devisi2, noref_po, txt_periode8, txt_periode9, rbt_pilihan4);
	}

	function tampilkan_data_tr() {
		var txt_periode10 = $('#txt_periode10').val();
		var txt_periode11 = $('#txt_periode11').val();
		var rbt_pilihan5 = $("input[name='rbt_pilihan5']:checked").val();

		if (rbt_pilihan5 == 'semua_data_trans') {
			window.open('<?= site_url("laporan/print_lap_data_tr_semua"); ?>');
		} else if (rbt_pilihan5 == 'graphic_trans') {
			window.open('<?= site_url("laporan/print_lap_data_tr_graphic"); ?>');
		}

		console.log(txt_periode10, txt_periode11, rbt_pilihan5);
	}


	function tampilkan_lpb() {
		var cmb_devisi3 = $('#cmb_devisi3').val();
		var no_lpb = $('#no_lpb').val();
		var txt_periode12 = $('#txt_periode12').val();
		var txt_periode13 = $('#txt_periode13').val();
		var rbt_pilihan6 = $("input[name='rbt_pilihan6']:checked").val();


		if (rbt_pilihan6 == 'register_lpb') {
			window.open('<?= site_url("laporan/print_lap_lpb_register"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'slip_lpb') {
			$('#modalListLapLPBSlip').modal('show');
			$('#tableListLapLPBSlip').DataTable().destroy();
			$('#tableListLapLPBSlip').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listLapLPBSlip'); ?>",
					"type": "POST",
					"data": {
						"cmb_devisi3": cmb_devisi3,
						"no_lpb": no_lpb,
						"txt_periode12": txt_periode12,
						"txt_periode13": txt_periode13
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "25%"
					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapLPBSlip').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		} else if (rbt_pilihan6 == 'per_brg_lpb') {
			window.open('<?= site_url("laporan/print_lap_lpb_per_brg_lpb"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'per_tgl_lpb') {
			window.open('<?= site_url("laporan/print_lap_lpb_per_tgl_lpb"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'po') {
			$('#modalListLapLPBPO').modal('show');
			$('#tableListLapLPBPO').DataTable().destroy();
			$('#tableListLapLPBPO').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listLapLPBPO'); ?>",
					"type": "POST",
					"data": {
						"cmb_devisi3": cmb_devisi3,
						"no_lpb": no_lpb,
						"txt_periode12": txt_periode12,
						"txt_periode13": txt_periode13
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"

					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapLPBPO').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		} else if (rbt_pilihan6 == 'po_lokal_lpb') {
			window.open('<?= site_url("laporan/print_lap_lpb_po_lokal_lpb"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'lpb_asset') {
			window.open('<?= site_url("laporan/print_lap_lpb_po_asset"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'lpb_mutasi') {
			window.open('<?= site_url("laporan/print_lap_lpb_mutasi"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		} else if (rbt_pilihan6 == 'slip_retur') {
			$('#modalListLapLPBSlipR').modal('show');
			$('#tableListLapLPBSlipR').DataTable().destroy();
			$('#tableListLapLPBSlipR').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listLapLPBSlipR'); ?>",
					"type": "POST",
					"data": {
						"cmb_devisi3": cmb_devisi3,
						"no_lpb": no_lpb,
						"txt_periode12": txt_periode12,
						"txt_periode13": txt_periode13
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"

					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapLPBSlipR').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		} else if (rbt_pilihan6 == 'regis_retur') {
			window.open('<?= site_url("laporan/print_lap_lpb_regis_retur"); ?>/' + cmb_devisi3 + '/' + txt_periode12 + '/' + txt_periode13 + '/' + no_lpb);
		}
		console.log(cmb_devisi3, no_lpb, txt_periode12, txt_periode13, rbt_pilihan6);
	}

	function tampilkan_bkb() {
		var cmb_devisi4 = $('#cmb_devisi4').val();
		var no_bkb = $('#no_bkb').val();
		var cmb_bagian1 = $('#cmb_bagian1').val();
		var cmb_bagian1 = cmb_bagian1.replaceAll(" ", ".");
		var cmb_bagian1 = cmb_bagian1.replaceAll("&", "-");
		var txt_periode14 = $('#txt_periode14').val();
		var txt_periode15 = $('#txt_periode15').val();
		var rbt_pilihan7 = $("input[name='rbt_pilihan7']:checked").val();

		if (rbt_pilihan7 == 'register_bkb') {
			window.open('<?= site_url("laporan/print_lap_bkb_register_bkb"); ?>/' + cmb_devisi4 + '/' + txt_periode14 + '/' + txt_periode15 + '/' + cmb_bagian1);
		} else if (rbt_pilihan7 == 'slip_bkb') {
			$('#modalListLapSlipBKB').modal('show');
			$('#tableListLapSlipBKB').DataTable().destroy();
			$('#tableListLapSlipBKB').DataTable({
				"paging": true,
				"scrollY": false,
				"scrollX": false,
				"searching": true,
				"select": false,
				"bLengthChange": true,
				"scrollCollapse": true,
				"bPaginate": true,
				"bInfo": true,
				"bSort": false,
				"processing": true,
				"serverSide": true,
				"stateSave": true,
				"order": [],
				"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
					console.log(aData);
				},
				"ajax": {
					"url": "<?php echo site_url('laporan/listLapSlipBKB'); ?>",
					"type": "POST",
					"data": {
						"cmb_devisi4": cmb_devisi4,
						"cmb_bagian1": cmb_bagian1,
						"no_bkb": no_bkb,
						"txt_periode14": txt_periode14,
						"txt_periode15": txt_periode15
					},
					"error": function(request) {
						console.log(request.responseText);
					}
				},
				"columns": [{
						"width": "5%"
					},
					{
						"width": "20%"
					},
					{
						"width": "20%"
					},
					{
						"width": "25%"
					},
					{
						"width": "20%"

					},
					{
						"width": "10%"
					},
				],
				"columnDefs": [{
					"targets": [],
					"orderable": false,
				}, ],
			});
			var rel = setInterval(function() {
				$('#tableListLapSlipBKB').DataTable().ajax.reload();
				clearInterval(rel);
			}, 100);
		} else if (rbt_pilihan7 == 'per_brg_bkb') {
			window.open('<?= site_url("laporan/print_lap_bkb_per_brg"); ?>/' + cmb_devisi4 + '/' + txt_periode14 + '/' + txt_periode15 + '/' + cmb_bagian1);
		} else if (rbt_pilihan7 == 'per_tgl_bkb') {
			var tgl1 = txt_periode14.replaceAll('/', '.');
			var tgl2 = txt_periode15.replaceAll('/', '.');
			window.open('<?= site_url("laporan/print_lap_bkb_per_tgl"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1);
		} else if (rbt_pilihan7 == 'per_bgn_rinci_tgl') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_per_bgn_rinci_tgl"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'per_bgn_grp_brg') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_per_bgn_grp_brg"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'per_kerja') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_per_kerja"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'mutasi_pt') {
			var tgl1 = txt_periode14.replaceAll('/', '.')
			var tgl2 = txt_periode15.replaceAll('/', '.')
			window.open('<?= site_url("laporan/print_lap_bkb_mutasi"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1);
		} else if (rbt_pilihan7 == 'per_bgn_grp_brg_n') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_per_bgn_grp_brg_n"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'per_kerja1') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_per_kerja1"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'summary_rsh') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_summary_rsh"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'sum_blok_ub') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_sum_blok_ub"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		} else if (rbt_pilihan7 == 'sum_blok_pk') {
			var dev = $('#cmb_devisi4 option:selected').text();
			dev = dev.replaceAll(' ', '-', dev);
			dev = dev.replaceAll('(', '._', dev);
			dev = dev.replaceAll(')', '_.', dev);
			if (cmb_bagian1 == 'Semua') {
				swal('Pilih salah satu bagian');
			} else {
				var tgl1 = txt_periode14.replaceAll('/', '.');
				var tgl2 = txt_periode15.replaceAll('/', '.');
				window.open('<?= site_url("laporan/print_lap_bkb_sum_blok_pk"); ?>/' + cmb_devisi4 + '/' + tgl1 + '/' + tgl2 + '/' + cmb_bagian1 + '/' + dev);
			}
		}

		console.log(cmb_devisi4, no_bkb, cmb_bagian1, txt_periode14, txt_periode15, rbt_pilihan7);
	}

	function tampilkan_rsh() {
		var cmb_devisi5 = $('#cmb_devisi5').val();
		var kode_stok = $('#kode_stok').val();
		var cmb_group_brg = $('#cmb_group_brg').val();
		var rbt_pilihan9 = $("input[name='rbt_pilihan9']:checked").val();

		if (rbt_pilihan9 == 'rinci_rsh') {
			window.open('<?= site_url("laporan/print_lap_rsh_rinci"); ?>/' + cmb_devisi5 + '/' + cmb_group_brg + '/' + kode_stok);
		} else if (rbt_pilihan9 == 'summary_rsh') {
			window.open('<?= site_url("laporan/print_lap_rsh_summary"); ?>/' + cmb_devisi5 + '/' + cmb_group_brg + '/' + kode_stok);
		} else if (rbt_pilihan9 == 'non_saldo') {
			window.open('<?= site_url("laporan/print_lap_rsh_non_saldo"); ?>/' + cmb_devisi5 + '/' + cmb_group_brg + '/' + kode_stok);
		}
		console.log(cmb_devisi5, kode_stok, cmb_group_brg, rbt_pilihan9);
	}

	function printLPBPOLokalClick() {
		window.open('<?= site_url("laporan/print_lap_lpb_po_lokal_lpb"); ?>');
	}

	function printLPBPOClick(noref, refpo, periode1, periode2) {
		window.open('<?= site_url("laporan/print_lap_lpb_per_po_lpb"); ?>/' + noref + '/' + refpo + '/' + periode1 + '/' + periode2);
	}


	function printLPBBrgClick() {
		window.open('<?= site_url("laporan/print_lap_lpb_per_brg_lpb"); ?>');
	}

	function printLPBSlipClick(noref, refpo) {
		$.ajax({
			url: "<?= site_url('laporan/cekcetak'); ?>",
			type: "POST",
			dataType: "JSON",
			data: {
				'noref': noref,
				'refpo': refpo
			},
			success: function(result) {
				if (result.status == 'true') {
					window.open('<?= site_url("laporan/print_lap_lpb_slip_lpb"); ?>/' + noref + '/' + refpo);
				} else {
					swal('Slip telah dicetak 2 kali');
				}
			},
			error: function(request) {
				console.log(request.responseText);
			}
		});

	}

	function printLPBSlipRClick(cmb_devisi3, noref, refpo) {
		window.open('<?= site_url("laporan/print_lap_lpb_slip_retur"); ?>/' + cmb_devisi3 + '/' + noref + '/' + refpo);
	}

	function printClick(noreftxt) {
		window.open('<?= site_url("laporan/print_lap_spp"); ?>/' + noreftxt);
	}

	function printLapPOCetClick(noreftxt, no_refppo, kode_supply) {
		window.open('<?= site_url("laporan/print_lap_po_cetakan"); ?>/' + noreftxt + '/' + no_refppo + '/' + kode_supply);
	}

	function printPPClick(nopp, ref_po, kode_supply) {
		window.open('<?= site_url("laporan/print_lap_pp_cetakan"); ?>/' + nopp + '/' + ref_po + '/' + kode_supply);
	}

	function printBKBSlipClick(NO_REF, skb, bag, tgl1, tgl2) {
		if (bag == "HRD & UMUM") bag = "UMUM & HRD";
		bag = bag.replaceAll(" ", ".");
		bag = bag.replaceAll("&", "-");
		window.open('<?= site_url("laporan/print_lap_bkb_slip_bkb"); ?>/' + NO_REF + '/' + skb + '/' + bag + '/' + tgl1 + '/' + tgl2);
	}

	function printBKBBgnTglClick(afd, tperiode1, tperiode2, cbagian, lok) {
		console.log(afd, tperiode1, tperiode2, cbagian, lok);
		cbagian = cbagian.replaceAll(' ', '.');
		window.open('<?= site_url("laporan/print_lap_bgn_tgl_rinci_bkb"); ?>/' + afd + '/' + tperiode1 + '/' + tperiode2 + '/' + cbagian + '/' + lok);
	}

	function hitulStok() {
		swal({
			buttons: {
				cancel: true,
				confirm: true,
			},
			content: {
				element: "input",
				attributes: {
					placeholder: "Masukan Password",
					type: "password",
				},
			},
		}).then((value) => {
			if (value != null && $.trim(value) != "") {
				$.ajax({
					url: "<?php echo site_url('transfer_gl/auth_hitul_stok'); ?>",
					data: {
						'value': value
					},
					type: "POST",
					dataType: "JSON",
					beforeSend: function() {},
					success: function(data) {
						if (data === true) {
							doHitulStok();
						} else {
							window.swal({
								title: "Password Salah",
								showConfirmButton: false,
								icon: "error",
							});
						}
					},
					error: function(request) {
						window.swal({
							title: "Failed !",
							showConfirmButton: false,
						});
						alert(request.responseText);
					}
				});
			}
		});
	}

	function doHitulStok() {
		$.ajax({
			url: "<?php echo site_url('posting/hitul_stok'); ?>",
			type: "POST",
			data: {
				'do': 'do'
			},
			beforeSend: function() {
				const content = document.createElement('span');
				const img = document.createElement('img');
				img.src = "<?php echo base_url(); ?>assets/img/loading3.gif";
				content.appendChild(img);

				window.swal({
					title: "Posting....",
					content,
					closeOnClickOutside: false,
					buttons: false,
				});
			},
			success: function(returnhtml) {
				//$("#loader").hide(); // hides loading sccreen in success call back
				window.swal({
					title: "Finished!",
					showConfirmButton: false,
					// timer: 5000
				});
			},
			error: function(request) {
				window.swal({
					title: "Failed !",
					showConfirmButton: false,
				});
				alert(request.responseText);
			}
		});



		// $.ajax({
		//   type    : "POST",
		//   url     : "<?php // echo site_url('regulasi/upload'); 
						?>",
		//   dataType  : "JSON",

		//   xhr: function() {
		//     var myXhr = $.ajaxSettings.xhr();
		//     if(myXhr.upload){
		//         myXhr.upload.addEventListener('progress',progress, false);
		//     }
		//     return myXhr;
		//   },

		//   cache   : false,
		//   contentType : false,
		//   processData : false,

		//   data    : form_data,
		//   beforeSend: function(){
		//     $('#btn_upload_regulasi').attr('disabled','');
		//   },
		//   success: function(data){
		//     $('#btn_upload_regulasi').removeAttr('disabled');
		//     $('#modalTambahFile').modal('hide');
		//     $('.modal-success').modal('show');
		//   },
		//   error   : function(request){
		//     alert(request.responseText);
		//   }
		// });
	}

	function progress(event) {
		var percent = (event.loaded / event.total) * 100;
		var newprogress = Math.round(percent) + '%';
		$('#progress-bar').attr('aria-valuenow', newprogress).css('width', newprogress);
		document.getElementById("status").innerHTML = newprogress;
	}

	function hitulStokHarian() {
		$.ajax({
			url: "<?php echo site_url('posting/hitul_stok_harian'); ?>",
			type: "POST",
			beforeSend: function() {
				const content = document.createElement('span');
				const img = document.createElement('img');
				img.src = "<?php echo base_url(); ?>assets/img/loading3.gif";
				content.appendChild(img);
				window.swal({
					title: "Posting Harian....",
					content,
					closeOnClickOutside: false,
					buttons: false,
				});
			},
			success: function(returnhtml) {
				window.swal({
					title: "Finished!",
					showConfirmButton: false,
				});
			},
			error: function(request) {
				window.swal({
					title: "Failed !",
					showConfirmButton: false,
				});
				alert(request.responseText);
			}
		});
	}

	function transferGL() {
		swal({
			buttons: {
				cancel: true,
				confirm: true,
			},
			content: {
				element: "input",
				attributes: {
					placeholder: "Masukan Password",
					type: "password",
				},
			},
		}).then((value) => {
			if (value != null && $.trim(value) != "") {
				$.ajax({
					url: "<?php echo site_url('transfer_gl/auth_trans_gl'); ?>",
					data: {
						'value': value
					},
					type: "POST",
					dataType: "JSON",
					beforeSend: function() {},
					success: function(data) {
						if (data === true) {
							doTransferGL();
						} else {
							window.swal({
								title: "Password Salah",
								showConfirmButton: false,
								icon: "error",
							});
						}
					},
					error: function(request) {
						window.swal({
							title: "Failed !",
							showConfirmButton: false,
						});
						alert(request.responseText);
					}
				});
			}
		});
	}

	function doTransferGL() {
		$.ajax({
			url: "<?php echo site_url('transfer_gl/transfer'); ?>",
			type: "POST",
			data: {
				'do': 'do'
			},
			beforeSend: function() {
				const content = document.createElement('span');
				const img = document.createElement('img');
				img.src = "<?php echo base_url(); ?>assets/img/loading3.gif";
				content.appendChild(img);
				window.swal({
					title: "Proses Transfer GL....",
					content,
					closeOnClickOutside: false,
					buttons: false,
				});
			},
			success: function(returnhtml) {
				window.swal({
					title: "Finished!",
					showConfirmButton: false,
				});
			},
			error: function(request) {
				window.swal({
					title: "Failed !",
					showConfirmButton: false,
				});
				console.log(request.responseText);
			}
		});
	}
</script>