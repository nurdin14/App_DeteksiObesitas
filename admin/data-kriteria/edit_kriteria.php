<?php require 'update_kriteria.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Edit Kriteria</div>
		<div class="card-body text-dark">
			<form action="data-kriteria/simpanEdit_data_kriteria.php" method="post">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">Kelompok</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_kriteria" value="<?= $data['id_kriteria'] ?>">
			      <select class="form-control" name="id_kelompok">
			      	<option value="<?= $data['id_kelompok']; ?>">~<?= $data['id_kelompok']; ?>~</option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id_kelompok, nama FROM kelompok_kriteria");
			      		while($data1 = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data1['id_kelompok']; ?>"><?= $data1['id_kelompok']; ?> - <?= $data1['nama']; ?></option>
			      	<?php }  ?>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="kode" name="kode" value="<?= $data['kode'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="keterangan" rows="4"><?= $data['keterangan']; ?></textarea>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">CF Rule</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="kode" name="cf_rule" value="<?= $data['cf_rule'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">CF User</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="kode" name="cf_user" value="<?= $data['cf_user'] ?>">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Simpan</button>
			    </div>
			  </div>
			</form>
			<hr>
		</div>
	</div>
</div>