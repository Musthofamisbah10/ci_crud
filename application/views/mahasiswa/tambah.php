<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<!-- pesan error validation -->
					<?php if ( validation_errors() ): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php echo validation_errors(); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php endif ?>

					<form action="" method="post">
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="form-group">
						    <label for="nama">Nim</label>
						    <input type="text" class="form-control" id="nim" name="nim">
						</div>
						<div class="form-group">
						    <label for="nama">email</label>
						    <input type="email" class="form-control" id="email" name="email">
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