<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Tes 2 - Coa 10 Digit</h2>
	<table border="1" style="font-size: 12px; border : 2px solid #ccc;">
		<thead>
			<tr>
				<td>G/D</td>
				<td>Lvl</td>
				<td>Noac</td>
				<td>Desc</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($get_all_coa10 as $coa_1) { 
					$gd_1 = $coa_1->gd; 
					$lvl_1 = $coa_1->lvl;
					$noac_1 = $coa_1->noac; 
					$noac_desc_1 = $coa_1->noac_desc;
			?>
				<tr>
					<td><?= $gd_1 ?></td>
					<td><?= $lvl_1 ?></td>
					<td><?= $noac_1 ?></td>
					<td><?= $lvl_1.". ".$noac_desc_1 ?></td>
				</tr>
				<?php
					$query_coa2 = "CALL filternoac4_tes('$gd_1','$lvl_1','$noac_1')";
					$get_coa2 = $this->db_lokal->query($query_coa2);
					// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
					mysqli_next_result($this->db_lokal->conn_id);
					foreach ($get_coa2->result() as $coa_2) {
						$gd_2 = $coa_2->gd; 
						$lvl_2 = $coa_2->lvl;
						$noac_2 = $coa_2->noac; 
						$noac_desc_2 = $coa_2->noac_desc;

						// if ($lvl_2 == "2") {
						// 	$nbsp = "&nbsp;&nbsp;";
						// }
						// else if ($lvl_2 == "3") {
						// 	$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;";
						// }
						// else if ($lvl_2 == "4") {
						// 	$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						// }
						// else if ($lvl_2 == "5") {
						// 	$nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						// }
				?>
					<tr>
						<td><?= $gd_2 ?></td>
						<td><?= $lvl_2 ?></td>
						<td><?= $noac_2 ?></td>
						<td>&nbsp;&nbsp;<?= $lvl_2.". ".$noac_desc_2 ?></td>
					</tr>

					<?php
						$query_coa3 = "CALL filternoac4_tes('$gd_2','$lvl_2','$noac_2')";
						$get_coa3 = $this->db_lokal->query($query_coa3);
						// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
						mysqli_next_result($this->db_lokal->conn_id);
						foreach ($get_coa3->result() as $coa_3) {
							$gd_3 = $coa_3->gd; 
							$lvl_3 = $coa_3->lvl;
							$noac_3 = $coa_3->noac; 
							$noac_desc_3 = $coa_3->noac_desc;
					?>
						<tr>
							<td><?= $gd_3 ?></td>
							<td><?= $lvl_3 ?></td>
							<td><?= $noac_3 ?></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;<?= $lvl_3.". ".$noac_desc_3 ?></td>
						</tr>

						<?php
							$query_coa4 = "CALL filternoac4_tes('$gd_3','$lvl_3','$noac_3')";
							$get_coa4 = $this->db_lokal->query($query_coa4);
							// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
							mysqli_next_result($this->db_lokal->conn_id);
							foreach ($get_coa4->result() as $coa_4) {
								$gd_4 = $coa_4->gd; 
								$lvl_4 = $coa_4->lvl;
								$noac_4 = $coa_4->noac; 
								$noac_desc_4 = $coa_4->noac_desc;
						?>
							<tr>
								<td><?= $gd_4 ?></td>
								<td><?= $lvl_4 ?></td>
								<td><?= $noac_4 ?></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $lvl_4.". ".$noac_desc_4 ?></td>
							</tr>

							<?php
								$query_coa5 = "CALL filternoac4_tes('$gd_4','$lvl_4','$noac_4')";
								if($gd_4 == "2201110100"){
									var_dump($query_coa5);
									exit();
								}
								$get_coa5 = $this->db_lokal->query($query_coa5);
								// jika menggukan store procedure harus menggunakan mysqli_next_result agar sp dapat dipanggil berulang
								mysqli_next_result($this->db_lokal->conn_id);
								foreach ($get_coa5->result() as $coa_5) {
									$gd_5 = $coa_5->gd; 
									$lvl_5 = $coa_5->lvl;
									$noac_5 = $coa_5->noac; 
									$noac_desc_5 = $coa_5->noac_desc;
							?>
								<tr>
									<td><?= $gd_5 ?></td>
									<td><?= $lvl_5 ?></td>
									<td><?= $noac_5 ?></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $lvl_5.". ".$noac_desc_5 ?></td>
								</tr>
				<?php
								}
							}
						}			
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>