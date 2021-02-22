<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" style="font-size: 12px; border : 2px solid #ccc;">
		<thead>
			<tr>
				<td align="center">G/D</td>
				<td align="center">Lvl</td>
				<td align="center">Noac</td>
				<td align="center">Desc</td>
				<!-- <td align="center">Rp</td> -->
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($get_all_coa10 as $coa_1) {
					$gd_1 = $coa_1->gd; 
					$lvl_1 = $coa_1->lvl;
					$noac_1 = $coa_1->noac; 
					$noac_desc_1 = $coa_1->noac_desc;

					// $query_sum_rp_1 = "CALL filternoac_sum('$gd_1','$lvl_1','$noac_1')";
					// $get_sum_rp_1 = $this->db_lokal->query($query_sum_rp_1);
					// // jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
					// mysqli_next_result($this->db_lokal->conn_id);
					// $sum_rp_1 = $get_sum_rp_1->row();
					
					// $rp_1 = $sum_rp_1->sum_rp;
			?>
				<tr style="background-color: #1d88b3; color: #ffffff">
					<td><?= $gd_1 ?></td>
					<td><?= $lvl_1 ?></td>
					<td><?= $noac_1 ?></td>
					<!-- <td><?= $lvl_1.". ".$noac_desc_1 ?></td> -->
					<td><?= $noac_desc_1 ?></td>
					<!-- <td align="right"><?= number_format($rp_1, 2)?></td> -->
				</tr>
				<?php
					$query_coa2 = "CALL filternoac('$gd_1','$lvl_1','$noac_1')";
					$get_coa2 = $this->db_lokal->query($query_coa2);
					// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
					mysqli_next_result($this->db_lokal->conn_id);
					foreach ($get_coa2->result() as $coa_2) {
						$gd_2 = $coa_2->gd; 
						$lvl_2 = $coa_2->lvl;
						$noac_2 = $coa_2->noac; 
						$noac_desc_2 = $coa_2->noac_desc;

						// if ($gd_2 == "G") {
						// 	$query_sum_rp_2 = "CALL filternoac_sum('$gd_2','$lvl_2','$noac_2')";
						// 	$get_sum_rp_2 = $this->db_lokal->query($query_sum_rp_2);
						// 	// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
						// 	mysqli_next_result($this->db_lokal->conn_id);
						// 	$sum_rp_2 = $get_sum_rp_2->row();

						// 	$rp_2 = $sum_rp_2->sum_rp;
						// }
						// else {
						// 	$rp_2 = $coa_2->rp;
						// }

						if ($lvl_2 == "2") {
							$nbsp = "&nbsp;&nbsp;";
						}
						else if ($lvl_2 == "3") {
							$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						else if ($lvl_2 == "4") {
							$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						else if ($lvl_2 == "5") {
							$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						}

						if ($gd_2 == "G") {
							$bc = "style='background-color: #1d88b3; color: #ffffff'";
						}
						else{
							$bc = "";
						}

				?>
						<tr <?= $bc ?>>
							<td><?= $gd_2 ?></td>
							<td><?= $lvl_2 ?></td>
							<td><?= $noac_2 ?></td>
							<!-- <td><?= $nbsp.$lvl_2.". ".$noac_desc_2 ?></td> -->
							<td><?= $nbsp.$noac_desc_2 ?></td>
							<!-- <td align="right"><?= number_format($rp_2, 2) ?></td> -->
						</tr>
				<?php			
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>