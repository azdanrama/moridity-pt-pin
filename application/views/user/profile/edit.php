<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Ubah Profil </h4><br>
						</div>

					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

					<?php foreach ($user as $row) { ?>

					<form action="<?php echo base_url('User/updateData') ?>" method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label">Foto Profile</label>
							<input type="file" class="form-control" name="avatar"/>
						</div>
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="hidden" name="id" value="<?php echo $row->id ?>">
							<input type="text" class="form-control" name="username" value="<?php echo $row->username ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">Password </label>
							<input type="text" class="form-control" name="password" value="<?php echo $row->password ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $row->nama ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email" value="<?php echo $row->email ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">No Telepon</label>
							<input type="text" class="form-control" name="nohp" value="<?php echo $row->nohp ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat ?>" />
						</div>
						<div class="mb-3">
							<select name="jenis_kelamin" class="form-control">
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Tanggal Lahir</label>
							<input type="text" class="form-control" name="tgl_lahir" value="<?php echo $row->tgl_lahir ?>" />
						</div>
						<div class="mb-3">
							<label class="form-label">Telepon</label>
							<input type="text" class="form-control" name="telepon" value="<?php echo $row->telepon ?>" />
						</div>

						<div class="modal-footer d-block">
							<button type="submit" class="btn btn-warning float-start">Batal</button>
							<button type="submit" class="btn btn-warning float-end">Simpan Data</button>
						</div>
					</form>

					<?php } ?>

					</div>
				</div>
			</div>
