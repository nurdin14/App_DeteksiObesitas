// if ($data1['nama'] == "Obesitas 1") {
		// 		$id_s=2;
		// 	} else if($data1['nama'] == "Obesitas 2") {
		// 		$id_s=4;
		// 	} else if($data1['nama'] == "Obesitas 3") {
		// 		$id_s=5;
		// 	}
			
		// 	$query = mysqli_query($koneksi, "SELECT * FROM solusi where id_solusi = '".$id_s."'");
		// 	$data = mysqli_fetch_assoc($query);
		// 	$nama 	= $data1['nama'];
		// 	$status = $data['status'];
		// 	$solusi = $data['keterangan'];






<?php

include '../../koneksi/koneksi.php'; 

	if (isset($_POST['kirim'])) {
					
		$id = implode(",", $_POST['id_kriteria']);
		$cf_old = 0;
		$temp = 0;
		$query1 = mysqli_query($koneksi, "SELECT distinct kelompok_kriteria.nama, kelompok_kriteria.gambar, kriteria.* FROM kriteria INNER JOIN kelompok_kriteria ON kriteria.id_kelompok=kelompok_kriteria.id_kelompok where kriteria.id_kriteria in (".$id.")");
		$i =1;

		?>

		<table border="1">
			<tr>
				<th>Nama</th>
				<th>Gambar</th>
				<th>Prosentase Keyakinan</th>
				<th>Solusi</th>
			</tr>
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
						$solusi[$i]=array('id_kelompok'=>$data['id_kelompok'],
									'nama'=>$data['nama'],
									'kepercayaan'=>$combine*100,
									'gambar'=>$data['gambar']);
						$i++;
						
						 ?>
						
						

					<?php 
						}
						
						function cmp($a, $b)
						{
							return ($a["kepercayaan"] > $b["kepercayaan"]) ? -1 : 1;
						}
						usort($solusi, "cmp");

						if(sizeof($solusi)) {

						$query3 = mysqli_query($koneksi, "SELECT * FROM solusi where id_kelompok= '".$solusi[0]['id_kelompok']."'");
						$data3 = mysqli_fetch_array($query3);
						
						 ?>

					<tr>
							<td><?= $solusi[0]['nama']; ?></td>
							<td><img src="../../assets/img/<?= $solusi[0]['gambar']; ?>" width="100"></td>
							<td><?= $combine * 100; ?>%</td>
							<td><?= $data3['keterangan']; ?></td>
						</tr>

</table>
<p> Berdasarkan Hasil pemeeriksaan anda mendapatkan tingkat kepercayaan sebesar <?= $solusi[0]['kepercayaan']; ?></p>
					<?php } } ?>
		



