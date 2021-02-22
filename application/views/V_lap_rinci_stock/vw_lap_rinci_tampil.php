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
			<td><h2>PT MULIA SAWIT AGRO LESTARI</h2></td>
		</tr>
		<tr>
			<td><?= $alamatpt; ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><h3>Register Pemakaian Stock Material Gudang</h3></td>
		</tr>
		<tr>
			<td colspan="2"><?= $namapt; ?></td>
		</tr>
		<tr>
			<?php
				$Ymd_periode = $periode_str;
				$periode = date("F Y", strtotime($Ymd_periode));
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
						foreach ($stockawal as $list_stockawal) {
							$kodebartxt = $list_stockawal->kodebartxt;
							$nabar = $list_stockawal->nabar;
							$saldoawal_qty = $list_stockawal->saldoawal_qty;
							$satuan = $list_stockawal->satuan;
				?>
						<table width="100%">
							<tr>
								<td align="left"><b><?= $kodebartxt; ?> <?= $nabar; ?></b></td>
								<td align="right"><b>Saldo Sblm Periode <?= $saldoawal_qty; ?> <?= $satuan; ?></b></td>
							</tr>
						</table>
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
						<?php
							$query_tgl = "SELECT DISTINCT DATE(tgl) as dtgl FROM masukitem WHERE kdpt = '$pt' AND txtperiode = '$ym_periode' AND kodebartxt = '$kodebartxt' AND BATAL = '0'
								UNION 
								SELECT DISTINCT DATE(tgl) as dtgl FROM keluarbrgitem WHERE kodept = '$pt' AND txtperiode = '$ym_periode' AND kodebartxt = '$kodebartxt' AND BATAL = '0' ORDER BY dtgl ASC";

							$detail_tgl_lpb_bkb = $this->db_logistik_pt->query($query_tgl)->result();
							$grandtotal_masuk = "0";
							$grandtotal_keluar = "0";
							$no = 1;
							
							foreach ($detail_tgl_lpb_bkb as $list_tgl_lpb_bkb) {
								$tgl_lpb_bkb = $list_tgl_lpb_bkb->dtgl;
								$query_lpb_bkb = "SELECT 'LPB' AS jenis, CONCAT('LPB',' ',ttgtxt) AS no_transaksi, kodebartxt, ket, qty, tgl FROM masukitem WHERE kdpt = '$pt' AND txtperiode = '$ym_periode' AND kodebartxt = '$kodebartxt' AND BATAL = '0' AND DATE(tgl) = '$tgl_lpb_bkb'
									UNION 
									SELECT 'BKB' AS jenis, CONCAT('BKB',' ',SKBTXT) AS no_transaksi, kodebartxt, ket, qty2 AS qty, tgl FROM keluarbrgitem WHERE kodept = '$pt' AND txtperiode = '$ym_periode' AND kodebartxt = '$kodebartxt' AND BATAL = '0' AND DATE(tgl) = '$tgl_lpb_bkb' ORDER BY tgl ASC";

								$detail_lpb_bkb = $this->db_logistik_pt->query($query_lpb_bkb)->result();
								$total_qty_masuk = 0;
								$total_qty_keluar = 0;
								$saldo = 0;
							
								foreach ($detail_lpb_bkb as $list_lpb_bkb) {
									if($list_lpb_bkb->jenis == "LPB"){
										$QTY_MASUK = $list_lpb_bkb->qty;
										$QTY_KELUAR = "0.00";
									}
									if($list_lpb_bkb->jenis == "BKB"){
										$QTY_MASUK = "0.00";
										$QTY_KELUAR = $list_lpb_bkb->qty;
									}
									$sum_qty_masuk = $total_qty_masuk + $QTY_MASUK;
									$sum_qty_keluar = $total_qty_keluar + $QTY_KELUAR;
									$saldo = ($saldoawal_qty+$QTY_MASUK)-$QTY_KELUAR;
						?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= date('Y-m-d',strtotime($list_lpb_bkb->tgl)); ?></td>
										<td><?= $list_lpb_bkb->no_transaksi; ?></td>
										<td><?= $list_lpb_bkb->ket; ?></td>
										<td align="right"><?= number_format($QTY_MASUK, 2); ?></td>
										<td align="right"><?= number_format($QTY_KELUAR, 2); ?></td>
										<td align="right"><?= number_format($saldo, 2); ?></td>
									</tr>
						<?php
									$total_qty_masuk = $sum_qty_masuk;
									$total_qty_keluar = $sum_qty_keluar;
									// $saldoawal_qty = $saldo;
									$no++;
								}
						?>
								<tr>
									<td></td>		
									<td></td>		
									<td></td>		
									<td align="right"><b>SUB TOTAL</b></td>		
									<td align="right"><b><?= number_format($total_qty_masuk, 2); ?></b></td>		
									<td align="right"><b><?= number_format($total_qty_keluar, 2) ?></b></td>
									<td></td>
								</tr>
						<?php
								$grandtotal_masuk = round($grandtotal_masuk,2) + round($total_qty_masuk,2);
								$grandtotal_keluar = round($grandtotal_keluar,2) + round($total_qty_keluar,2);
							}
							$saldoakhir = (round($saldoawal_qty,2) + round($grandtotal_masuk, 2)) - round($grandtotal_keluar, 2);
						?>
									<tr>
										<td></td>		
										<td></td>		
										<td></td>		
										<td align="right"><b>GRAND TOTAL</b></td>		
										<td align="right"><b><?= number_format($grandtotal_masuk, 2); ?></b></td>		
										<td align="right"><b><?= number_format($grandtotal_keluar, 2); ?></b></td>
										<td></td>	
									</tr>
									<tr>
										<td colspan="5" align="right"><b>Saldo Akhir</b></td>
										<td align="right"><b><?= number_format($saldoakhir, 2); ?></b></td>
										<td></td>
									</tr>
							</tbody>
						</table>
						<?php
						}
					}
						?>
			</td>
		</tr>
	</table>
</body>
</html>
<script src="<?php echo base_url(); ?>assets/printjs/print.min.js"></script>