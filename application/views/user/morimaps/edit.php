<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Edit Lokasi </h4><br>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

						<form action="<?php echo base_url('morimaps_user/update') ?>" method="post" enctype="multipart/form-data">
							<div class="mb-3">
								<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id') ?>">
                                <label for="longitude">longitude</label>
                                <input type="text" class="form-control" name="longitude" placeholder="longitude" />
								<br>
								
								<label class="form-label">latitude</label>
								<input type="text" class="form-control" name="latitude" placeholder="latitude" />
                                <br>

                                <label for="longitude">alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="alamat" />
								<br>
								</div>
								</div>
								</div>

								<div class="modal-footer d-block">
								<a href="<?=base_url();?>Morimaps_user/index" class="btn btn-warning float-start">Batal</a>
								<button type="submit" value="upload" class="btn btn-warning float-end">Simpan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
