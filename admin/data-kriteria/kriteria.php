<div class="container-fluid">
	<div class="card">
		<div class="card-header">Data Kriteria</div>
		<div class="card-body text-dark">
			<div class="row">
				<div class="col-md-9">
					<a href="index.php?page=kriteriaTambah" class="btn btn-success btn-sm"><i  class="fas fa-plus"></i> Tambah Data</a>
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
						<th>Id Kelompok</th>
						<th>Kode</th>
						<th>Keterangan</th>
						<th>CF Rule</th>
						<th>CF User</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<?php 

					$no   = 1;

					if(isset($_POST['cari'])) {
						$cari = $_POST['cari'];
						$query = mysqli_query($koneksi, "SELECT * FROM kriteria where keterangan LIKE '%".$cari."%'");
					} else {

						$query = mysqli_query($koneksi, "SELECT * FROM kriteria");
					}  

					$cek  = mysqli_num_rows($query);
					if($cek > 0) {

						while ($data = mysqli_fetch_assoc($query)) { ?>

						
				<tbody>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['id_kelompok']; ?></td>
						<td><?= $data['kode']; ?></td>
						<td><?= $data['keterangan']; ?></td>
						<td><?= $data['cf_rule']; ?></td>
						<td><?= $data['cf_user']; ?></td>
						<td>
							<a href="index.php?page=edit_kriteria&id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
							<a href="data-kriteria/hapus_kriteria.php?id_kriteria=<?= $data['id_kriteria']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
						</td>
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