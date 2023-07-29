<?php require 'update_kekriteria.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Edit Kriteria</div>
		<div class="card-body text-dark">
			<form action="data-kelompokKriteria/simpanEdit_data_kekriteria.php" method="post" enctype="multipart/form-data">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_kelompok" value="<?= $data['id_kelompok'] ?>">
			      <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
			      
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">Gambar</label>
			    <div class="col-sm-10">
			      <input type="hidden" id="gambar" name="gambar" value="<?= $data['gambar'] ?>">
			      <input type="file" id="gambar" name="gambar">
			    </div>
			  </div>
			  <div class="form-group">
			  	<img src="../assets/img/<?= $data['gambar']; ?>" class="img-thumbnail" width="150">
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