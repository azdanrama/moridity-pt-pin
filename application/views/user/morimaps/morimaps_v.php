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
							<h4 class="text-black font-w700 fs-20">Data petani</h4><br>

						</div>

					</div>

					<div class="row">
						<div class="col-sm-2">

						</div>
						<div class="col-sm-4">
							<label>&nbsp;&nbsp;Longitude</label>
							<form class="d-flex">
								<input class="form-control " height="10px" type="search" placeholder="-6.1689608" aria-label="Search">
							</form>
						</div>
						<div class="col-sm-4">
							<label>&nbsp;&nbsp;Langitude</label>
							<form class="d-flex">
								<input class="form-control " height="10px" type="search" placeholder="106.821153" aria-label="Search">
							</form>
						</div>
						<div class="col-sm-2">
							<h4> &nbsp;</h4>
							<a class="btn btn-warning" href="">Simpan</a>
						</div>
					</div>
					<!-- <div class="col-xl-12">
						<img alt="image" width="30" src="http://localhost/newmoridity/assets/images/admin/add.png" data-bs-toggle="modal" data-bs-target="#modalForm" alt="">
						&nbsp; &nbsp;&nbsp; &nbsp;
						<img alt="image" width="30" src="http://localhost/newmoridity/assets/images/admin/pencil.png" data-bs-toggle="modal" data-bs-target="#modalForm2" alt="">
						&nbsp; &nbsp;&nbsp; &nbsp;
						<img alt="image" width="30" src="http://localhost/newmoridity/assets/images/admin/trash.png" alt="">
					</div> -->

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
			var map = L.map('map').setView([-6.1711354, 106.8267866], 12);
			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1
			}).addTo(map);


			var lokasi1 = L.marker([-6.1689608, 106.821153]).bindPopup("<b>Petani Jakarta Pusat</b><br>Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta ").addTo(map);
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