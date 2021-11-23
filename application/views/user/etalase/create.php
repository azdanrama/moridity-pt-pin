<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Tambah Etalase </h4><br>
						</div>

					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

						<form action="<?php echo base_url('etalase/create_data') ?>" method="post" enctype="multipart/form-data">
							<div class="mb-3">
								<select name="nama_kebun" class="form-control">
									<option value="#">Pilih jenis kelor</option>
									<?php foreach ($data_komoditas_kelor as $kebun) : ?>
										<option value="<?php echo $kebun->id_datakelor ?>"><?php echo $kebun->nama_kebun ?></option>
									<?php endforeach ?>
								</select><br>
								<label for="id_datakelor">Jenis Kelor</label>
								<select name="id_datakelor" class="form-control">
									<option value="#">Pilih jenis kelor</option>
									<?php foreach ($data_komoditas_kelor as $row) : ?>
										<option value="<?php echo $row->id_datakelor ?>"><?php echo $row->jenis_kelor ?></option>
									<?php endforeach ?>
								</select><br>
								<label class="form-label">Stok Kelor</label>
								<input type="text" class="form-control" name="stok_kelor" placeholder="Stok kelor" />
								</div>
								<div class="mb-3">
								<label class="form-label">Upload komoditas kelor</label>
								<input type="file" class="form-control" name="foto_kelor" placeholder="Upload kelor" />
								</div>
								</div>
								</div>

								<div class="modal-footer d-block">
								<a href="<?=base_url();?>/etalase/index" class="btn btn-warning float-start">Batal</a>
								<button type="submit" value="upload" class="btn btn-warning float-end">Simpan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
