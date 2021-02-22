<!DOCTYPE html>
<html>
<head>
	<title>Register Pemakaian Stock Material Gudang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/printjs/print.min.css">
	<style type="text/css">
		table {
	      /*font-size: 12px;*/
	      /*border: 1px solid #dddddd;*/
	      border-collapse: collapse;
	    }

	    body { 
	      font-family: Verdana; 
	      font-size: 10px; 
	      font-style: normal; 
	      font-variant: normal; 
	      font-weight: 400; 
	      line-height: 20px; 
	    }
	</style>
</head>
<body>
	<button type="button" onclick="printJS('printJS-form', 'html')">
	    <span class="fa fa-print"> Print</span>
	</button>
	<table width="80%" align="center" border="0" id="printJS-form">
		<tr>
			<td colspan="2" align="center"><h3>Register Pemakaian Stock Material Gudang</h3></td>
		</tr>
		<tr>
			<?php
				// $Ymd_periode = $this->session->userdata('Ymd_periode');
				$Ymd_periode = $periode_str;
				$periode = date("F Y", strtotime($Ymd_periode));

				// $ym_periode_skrg = $this->session->userdata('ym_periode');
			?>
			<td width="50%" align="left"><b>Periode : <?= $periode; ?> </b></td>
			<td width="50%" align="right"><small>By MIPS</small></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php
					if(count($stockawal) == "0"){
				?>
						<table border="1" class="tablerinci" width="100%" align="center">
							<thead>
								<tr>
									<th>No</th>
									<th>Tgl</th>
									<th>Nomor</th>
									<th>Keterangan</th>
									<th>QTY MASUK</th>
									<th>QTY KELUAR</th>
									<th>SALDO</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="7">No Data Available</td>
								</tr>
							</tbody>
						</table>
				<?php
					}
					else {
				?>
						<table width="100%" border="1">
							<thead>
								<tr>
									<th>No</th>
									<th>Account</th>
									<th>Nama Barang</th>
									<th>SAT</th>
									<th>Saldo Awal</th>
									<th>QTY Masuk (LPB)</th>
									<th>QTY Keluar (BKB)</th>
									<th>Saldo Akhir</th>
								</tr>
							</thead>
							<tbody>
				<?php
						$grandtotal_saldoawal_qty = "0";
						$grandtotal_QTY_MASUK = "0";
						$grandtotal_QTY_KELUAR = "0";
						$grandtotal_saldoakhir_qty = "0";
						$no = 1;
						foreach ($stockawal as $list_stockawal) {
							$kodebartxt = $list_stockawal->kodebartxt;
							$nabar = $list_stockawal->nabar;
							$saldoawal_qty = $list_stockawal->saldoawal_qty;
							$satuan = $list_stockawal->satuan;
							$saldoawal_qty = $list_stockawal->saldoawal_qty;
							$QTY_MASUK = $list_stockawal->QTY_MASUK;
							$QTY_KELUAR = $list_stockawal->QTY_KELUAR;
							$saldoakhir_qty = $list_stockawal->saldoakhir_qty;
				?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $kodebartxt; ?></td>
									<td><?= $nabar; ?></td>
									<td><?= $satuan; ?></td>
									<td><?= number_format($saldoawal_qty, 2); ?></td>
									<td><?= number_format($QTY_MASUK, 2); ?></td>
									<td><?= number_format($QTY_KELUAR, 2); ?></td>
									<td><?= number_format($saldoakhir_qty, 2); ?></td>
								</tr>
				<?php
						$grandtotal_saldoawal_qty = $grandtotal_saldoawal_qty + $saldoawal_qty;
						$grandtotal_QTY_MASUK = $grandtotal_QTY_MASUK + $QTY_MASUK;
						$grandtotal_QTY_KELUAR = $grandtotal_QTY_KELUAR + $QTY_KELUAR;
						$grandtotal_saldoakhir_qty = $grandtotal_saldoakhir_qty + $saldoakhir_qty;
						$no++;
						}
				?>
								<tr>
									<td colspan="4" align="right">GRAND TOTAL</td>
									<td><?= number_format($grandtotal_saldoawal_qty, 2); ?></td>
									<td><?= number_format($grandtotal_QTY_MASUK, 2); ?></td>
									<td><?= number_format($grandtotal_QTY_KELUAR, 2); ?></td>
									<td><?= number_format($grandtotal_saldoakhir_qty, 2); ?></td>
								</tr>
							</tbody>
						</table>
				<?php
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>
<script src="<?php echo base_url(); ?>assets/printjs/print.min.js"></script>