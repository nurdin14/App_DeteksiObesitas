<?php require 'update_solusi.php'; ?>

<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Edit Solusi</div>
		<div class="card-body text-dark">
			<form action="data-solusi/simpanEdit_data_solusi.php" method="post">
			  <div class="form-group row">
			    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_solusi" value="<?= $data['id_solusi'] ?>">
			      <input type="text" class="form-control" id="kode" name="kode" value="<?= $data['kode'] ?>">
			    </div>
			  </div>
			  <select class="form-control" name="id_kelompok">
			      	<option value="<?= $data['id_kelompok'] ?>"><?= $data['id_kelompok'] ?></option>
			      	<?php 

			      		$query = mysqli_query($koneksi, "SELECT id_kelompok, nama FROM kelompok_kriteria");
			      		while($data = mysqli_fetch_assoc($query)) { ?> 
			      	<option value="<?= $data['id_kelompok']; ?>"><?= $data['nama']; ?></option>
			      	<?php }  ?>
			      </select>
			  <div class="form-group row">
			    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="keterangan" id="keterangan" rows="4"><?= $data['keterangan']; ?></textarea>
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