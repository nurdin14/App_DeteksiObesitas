<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Tambah Kriteria</div>
		<div class="card-body text-dark">
			<form action="data-kelompokKriteria/simpan_data_kriteria.php" method="post" enctype="multipart/form-data">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">Nama Kriteria</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id_kelompok">
			      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Kriteria">
			      <input type="file" name="gambar" class="form-control-file mt-2">
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