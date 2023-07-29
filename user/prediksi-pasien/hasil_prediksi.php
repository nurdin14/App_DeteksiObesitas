<?php

if (isset($_POST['kirim'])) {
					
		$id = implode(",", $_POST['id_kriteria']);
		$cf_old = 0;
		$temp = 0;
		$query1 = mysqli_query($koneksi, "SELECT distinct kelompok_kriteria.nama, kelompok_kriteria.gambar, kriteria.* FROM kriteria INNER JOIN kelompok_kriteria ON kriteria.id_kelompok=kelompok_kriteria.id_kelompok where kriteria.id_kriteria in (".$id.")");
		$i =1;

?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Hasil Pemeriksaan</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-8">
					<table class="table table-bordered table-hover table-stripped">
						<thead  class="bg-secondary text-white">
							<tr>
								<th>Obesitas</th>
								<th>Prosentase</th>
							</tr>
						</thead>
						<?php 
							while($data = mysqli_fetch_array($query1)) { 

						 	$query2 = mysqli_query($koneksi, "select distinct id_kriteria,cf_rule,cf_user from kriteria where id_kelompok='".$data['id_kelompok']."' and id_kriteria in(".$id.")");

				    		$j = 0;
					    	while($data2 = mysqli_fetch_array($query2)) {
					    	 	$cf_he = $data2['cf_rule'] * $data2['cf_user'];
					    	 	$j++;
								if($j==1) {	
									$combine = $cf_he;
								} else {
									$combine = $cf_old + ($cf_he * (1 - $cf_old));
								}
							}

								$obesitas[$i]=array('id_kelompok'=>$data['id_kelompok'],
											'nama'=>$data['nama'],
											'kepercayaan'=>$combine*100,
											'gambar'=>$data['gambar']);
								$i++;
						
						 ?>
						
					<?php 

						}
						
						function cmp($a, $b){

							return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
						}

						usort($obesitas, "cmp");
						if(sizeof($obesitas)) {		
						
					?>

						<tbody>
							<tr>
								<td><?= $obesitas[0]['nama']; ?></td>
								<td><?= $combine * 100; ?>%</td>
							</tr>
						</tbody>
					</table>
					<div class="alert alert-warning" role="alert">
						<h5><b>Solusi : </b></h5>
						<?php 
							$query3 = mysqli_query($koneksi, "SELECT * FROM solusi where id_kelompok");
							while ($data3 = mysqli_fetch_array($query3)) { ?>

								<ul>
									<li><?= $data3['keterangan']; ?></li>
								</ul>
					  		
						<?php } ?> 
					</div>
					<div class="alert alert-primary" role="alert">
					  Berdasarkan Hasil pemeriksaan anda termasuk <?= $obesitas[0]['nama']; ?> mendapatkan tingkat kepercayaan sebesar <?= $obesitas[0]['kepercayaan']; ?>%.
					</div>
				</div>
				<div class="col-md-2">
					<img src="../assets/img/<?= $obesitas[0]['gambar']; ?>" style="width: 350px;">
				</div>
				
					<?php } } ?>
			</div>
		</div>
	</div>
</div> 