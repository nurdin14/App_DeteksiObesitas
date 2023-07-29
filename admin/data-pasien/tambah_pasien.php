<div class="container-fluid">
	<div class="card">
		<div class="card-header">Form Tambah Pasien</div>
		<div class="card-body text-dark">
			<form action="data-pasien/simpan_data_pasien.php" method="post">
			  <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
			    <div class="col-sm-10">
			      <input type="hidden" name="id">
			      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Pasien">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="jenis_k" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="jenis_k" id="jenis_k">
			      	<option>Silahkan Pilih</option>
			      	<option value="L">L</option>
			      	<option value="P">P</option>
			      </select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="no_telp" class="col-sm-2 col-form-label">No. Telepon</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="xxxx-xxxx-xxxx">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda.." rows="4"></textarea>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="password" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="role" class="col-sm-2 col-form-label">Posisi</label>
			    <div class="col-sm-10">
			      <select class="form-control" name="role" id="role">
			      	<option>Silahkan Pilih</option>
			      	<option value="Admin">Admin</option>
			      	<option value="Pasien">Pasien</option>
			      	<option value="Pegawai">Pegawai</option>
			      </select>
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