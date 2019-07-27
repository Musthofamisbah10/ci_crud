<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			

			<div class="card">
				<div class="card-header">
					Form Ubah Data Mahasiswa
				</div>
				<div class="card-body">

					<form action="" method="post">
						<!-- input hidden untuk kirim id -->
						<input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
						<!-- akhirr -->
						<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>">
						    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nama">Nim</label>
						    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>">
						    <small class="form-text text-danger"><?php echo form_error('nim'); ?></small>
						</div>
						<div class="form-group">
						    <label for="nama">email</label>
						    <input type="email" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>">
						    <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
						</div>
						<div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <select class="form-control" id="jurusan" name="jurusan">
						    	<?php foreach ($jurusan as $jur): ?>
						    		<?php if ( $jur == $mahasiswa['jurusan']): ?>
						    			<option value="<?php echo $jur; ?>" selected><?php echo $jur ?></option>
						    		<?php else: ?>
						    			<option value="<?php echo $jur; ?>"><?php echo $jur ?></option>
						    		<?php endif; ?>
						    	<?php endforeach; ?>
						    </select>
						  </div>

						<button type="submit" class="btn btn-primary float-right" name="ubah">Ubah Data</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>