<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">

					<form action="" method="post">
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama">
						    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nama">Nim</label>
						    <input type="text" class="form-control" id="nim" name="nim">
						    <small class="form-text text-danger"><?php echo form_error('nim'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nama">email</label>
						    <input type="email" class="form-control" id="email" name="email">
						    <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
						</div>
						<div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <select class="form-control" id="jurusan" name="jurusan">
						    	<option value="Teknik Informatika">Teknik Informatika</option>
								    <option value="Teknik Komputer">Teknik Komputer</option>
								    <option value="Manajemen Informatika">Manajemen Informatika</option>
								    <option value="Sistem Informasi">Sistem Informasi</option>
								    <option value="Akuntansi">Akuntansi</option>
						    </select>
						  </div>

						<button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>