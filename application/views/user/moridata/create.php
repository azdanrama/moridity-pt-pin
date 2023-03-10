<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Tambah Komoditas Kelor </h4><br>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

						<form action="<?php echo base_url('moridata/create_data') ?>" method="post">
							<div class="mb-3">
								<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id') ?>">
								<label class="form-label">Nama Kebun</label>
								<input type="text" class="form-control" id="nama_petani" name="nama_kebun" placeholder="Nama Kebun" />
								</div>
								<div class="mb-3">
								<label class="form-label">Jenis Kelor </label>
									<select name="jenis_kelor" id="email" class="form-control" placeholder="Jenis Kelor">
										<option value="Kelor Merah">Kelor Merah</option>
										<option value="Kelor Putih">Kelor Putih</option>
									</select>
								<!-- <input type="text" class="form-control" id="email" name="jenis_kelor" placeholder="jenenis kelor" /> -->
								</div>
								<div class="mb-3">
								<label class="form-label">Tanggal Panen </label>
								<input type="date" class="form-control" id="username" name="tgl_panen" placeholder="Tanggal Panen" />
								</div>
								<div class="mb-3">
								<label class="form-label">Jumlah Panen</label>
								<input type="text" class="form-control" name="jumlah_panen" placeholder="Jumlah Panen" />
								</div>
								</div>

								<div class="modal-footer d-block">
								<a href="<?=base_url();?>/moridata/index" class="btn btn-warning float-start">Batal</a>
								<!-- <button type="" class="btn btn-warning float-start">Batal</button> -->
								<button type="submit" class="btn btn-warning float-end">Simpan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
