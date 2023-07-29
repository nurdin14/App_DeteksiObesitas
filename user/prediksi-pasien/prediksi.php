<div class="container-fluid">
	<div class="card">
		<div class="card-header">Prediksi Pasien</div>
		<div class="card-body text-dark">

			<?php

				$no = 1;

				$query = mysqli_query($koneksi, "SELECT * FROM kriteria");

				while ($data  = mysqli_fetch_assoc($query)) { ?>

			<form action="index.php?page=hasil_periksa" method="post">
				<div class="form-check">
				  <input class="form-check-input " type="checkbox" value="<?= $data['id_kriteria']; ?>" name="id_kriteria[]">
				  <label class="form-check-label" for="defaultCheck1">
				    <p class="font-weight-bolder align-middle h6"><?= $no++; ?>. <?= $data['keterangan']; ?></p>
				  </label>
				</div>
				<?php }	?>

				<button type="submit" name="kirim" class="btn btn-success">Cek Hasil</button>
			</form>
			<hr>
		</div>
	</div>
</div>