<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Edit Etalase </h4><br>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

					<?php foreach ($etalase as $row) : ?>
						<form action="<?php echo base_url('etalase/update') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id') ?>">
							<div class="mb-3">
								<input type="hidden" name="id_etalase" value="<?php echo $row->id_etalase ?>">
								<input type="hidden" name="id_datakelor" value="<?php echo $row->id_datakelor ?>">
								<label for="">Nama Kebun</label>
								<select name="nama_kebun" class="form-control">
									<?php foreach ($data_komoditas_kelor as $kebun) : ?>
										<option value="<?php echo $kebun->id_datakelor ?>"><?php echo $kebun->nama_kebun ?></option>
									<?php endforeach ?>
								</select><br>
								<label for="#">Jenis Kelor</label>
								<select name="jenis_Kelor" class="form-control">
									<?php foreach ($data_komoditas_kelor as $kelor) : ?>
										<option value="<?php echo $kelor->id_datakelor ?>"><?php echo $kelor->jenis_kelor ?></option>
									<?php endforeach ?>
								</select><br>
								<label class="form-label">Stok Kelor</label>
								<input type="text" class="form-control" name="stok_kelor" value="<?php echo $row->stok_kelor ?>" />
								</div>
								<div class="mb-3">
								<label class="form-label">Upload komoditas kelor</label>
								<input type="file" class="form-control" name="foto_kelor" placeholder="Upload kelor" />
								</div>
								</div>
								</div>

								<div class="modal-footer d-block">
								<button type="submit" class="btn btn-warning float-start">Batal</button>
								<button type="submit" class="btn btn-warning float-end">Simpan Data</button>
							</div>
						</form>
					<?php endforeach ?>

					</div>
				</div>
			</div>
