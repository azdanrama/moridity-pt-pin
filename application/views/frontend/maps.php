<?php $this->load->view('layouts/main_nav') ?>

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="block">
         
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="<?=base_url()?>#">Beranda</a>
            </li>
             <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                Peta
            </li>
          </ul>
           <h1>Peta</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section services">
		<div class="content-body">
            <div class="container-fluid">
				<div class="heading text-center">
					<!-- <span class="text-color">Our Experience</span> -->
					<h2>Peta Persebaran Petani Kelor</h2>
				</div>
                <!-- row -->
                <!-- Vectormap -->
				<div class="container-fluid">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">

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
						var lokasi2 = L.marker([-6.156996, 106.692223]).bindPopup("<b>Petani Kali Deres</b><br>RT.11/RW.6, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta ").addTo(map);
						var lokasi3 = L.marker([-6.209315, 106.633660]).bindPopup("<b>Petani Tanggerang</b><br>Jl. Nn, RT.002/RW.009, Cikokol, Kec. Tangerang, Kota Tangerang, Banten 15117").addTo(map);
						var lokasi4 = L.marker([-6.155012, 106.980781]).bindPopup("<b>Petani Bekasi</b><br>Bekasi, Pusaka Rakyat, Kec. Tarumajaya, Bekasi, Jawa Barat 17214").addTo(map);
						var lokasi5 = L.marker([-6.230092, 106.835706]).bindPopup("<b>Petani Kuningan</b><br>Patra Kuningan 14 12-6, RT.6/RW.4, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950").addTo(map);
					</script>
				</div>
			</div>
        </div>
</section>

<?php $this->load->view('layouts/back-to-top') ?>
<?php $this->load->view('layouts/main_footer') ?>
