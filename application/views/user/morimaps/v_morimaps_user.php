<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Peta Persebaran Petani Kelor di Indonesia</h4><br>

						</div>
					</div>
					<a href="<?php echo base_url('morimaps_user/input') ?>" class="btn btn-sm btn-success">Tambah</a>
					<a href="<?php echo base_url('morimaps_user/uploud') ?>" class="btn btn-sm btn-warning">Edit</a>
					<a href="<?php echo base_url('morimaps_user/input') ?>" class="btn btn-sm btn-danger">Hapus</a>

				</div>

				<!-- <div class="col-xl-12"> -->
				<!-- peta -->
				<div class="container">
					<div id="map" style="width: 100%; height: 500px;">
					</div>

				</div>
			</div>
		</div>

		<!-- leafletjs -->
		<script>
			var map = L.map('map').setView([-2.5489, 118.0149], 5);
			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1
			}).addTo(map);


			var lokasi1 = L.marker([-6.1689608, 106.821153]).bindPopup("<b>Petani Jakarta Pusat</b><br>Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta ").addTo(map);
			var lokasi2 = L.marker([-6.156996, 106.692223]).bindPopup("<b>Petani Kali Deres</b><br>RT.11/RW.6, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta ").addTo(map);
			var lokasi3 = L.marker([-6.209315, 106.633660]).bindPopup("<b>Petani Tanggerang</b><br>Jl. Nn, RT.002/RW.009, Cikokol, Kec. Tangerang, Kota Tangerang, Banten 15117").addTo(map);
			var lokasi4 = L.marker([-6.155012, 106.980781]).bindPopup("<b>Petani Bekasi</b><br>Bekasi, Pusaka Rakyat, Kec. Tarumajaya, Bekasi, Jawa Barat 17214").addTo(map);
			var lokasi5 = L.marker([-6.230092, 106.835706]).bindPopup("<b>Petani Kuningan</b><br>Patra Kuningan 14 12-6, RT.6/RW.4, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950").addTo(map);
		</script>

	</div>
</div>

<!-- Click on Modal Button
<button type="button" class="btn btn-primary mx-auto d-block mt-5" data-bs-toggle="modal" data-bs-target="#modalForm">
	Tambah Data
</button> -->

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Petani</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label class="form-label">Nama Petani</label>
						<input type="text" class="form-control" id="nama_petani" name="nama_petani" placeholder="nama petani" />
					</div>

					<div class="mb-3">
						<label class="form-label">longitude </label>
						<input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude" />
					</div>
					<div class="mb-3">
						<label class="form-label">latitude</label>
						<input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" />
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" />
					</div>
					<div class="modal-footer d-block">
						<button type="submit" class="btn btn-warning float-start">Batal</button>
						<button type="submit" class="btn btn-warning float-end">Simpan Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalForm2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Petani</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label class="form-label">Nama Petani</label>
						<input type="text" class="form-control" id="nama_petani" name="nama_petani" placeholder="nama petani" />
					</div>

					<div class="mb-3">
						<label class="form-label">longitude </label>
						<input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude" />
					</div>
					<div class="mb-3">
						<label class="form-label">latitude</label>
						<input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" />
					</div>
					<div class="mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" />
					</div>
					<div class="modal-footer d-block">
						<button type="submit" class="btn btn-warning float-start">Batal</button>
						<button type="submit" class="btn btn-warning float-end">Simpan Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>



<!--**********************************
            Content body end
        ***********************************-->