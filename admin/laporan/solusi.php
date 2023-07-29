<div class="container-fluid">
	<div class="card">
		<div class="card-header">Laporan Solusi</div>
		<div class="card-body text-dark">
			<div class="row">
				<div class="col-md-9">
					<a href="laporan/print_solusi.php" class="btn btn-danger btn-sm"><i  class="fas fa-file-medical"></i> Cetak Data</a>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<form action="" method="post">
						<input type="text" name="cari" placeholder="Masukan Pencarian..." class="form-control">
						</form>
					</div>
				</div>
			</div>
			<table class="table table-bordered table-hover table-stripped">
				<thead  class="bg-secondary text-white">
					<tr>
						<th>No.</th>
						<th>Kode</th>
						<th>Keterangan</th>
						<th>Status</th>
						<th>ID Kriteria</th>
					</tr>
				</thead>

				<?php 

					$no   = 1;

					if(isset($_POST['cari'])) {
						$cari = $_POST['cari'];
						$query = mysqli_query($koneksi, "SELECT * FROM laporan_solusi where kode LIKE '%".$cari."%'");
					} else {

						$query = mysqli_query($koneksi, "SELECT * FROM laporan_solusi");
					}  

					$cek  = mysqli_num_rows($query);
					if($cek > 0) {

						while ($data = mysqli_fetch_assoc($query)) { ?>

						
				<tbody>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['kode']; ?></td>
						<td><?= $data['keterangan']; ?></td>
						<td><?= $data['status']; ?></td>
						<td><?= $data['kriteria_id']; ?></td>
					</tr>
				</tbody>

				<?php } } else { ?>
					<div class="alert alert-primary" role="alert">
					  Maaf data anda yang cari tidak ditemukan
					</div>
				<?php } ?>

			</table>
			<hr>
		</div>
	</div>
</div>