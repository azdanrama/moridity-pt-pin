<?php $this->load->view('layouts/main_nav') ?>

<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.1.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.1.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

<!-- Carousel -->
<section>
<div class="swiffy-slider">
    <ul class="slider-container">
        <li>
		<img src="<?=base_url('assets');?>/images/user/banner/Moridity_slider.jpg" class="img-fluid" alt="Image" style="max-width: 100%;height: auto;"></li>
        <li>
		<img src="<?=base_url('assets');?>/images/user/banner/Moridity_slider2.jpg" class="img-fluid" alt="Image" style="max-width: 100%;height: auto;"></li>
        <li>
		<img src="<?=base_url('assets');?>/images/user/banner/Moridity_slider3.jpg" class="img-fluid" alt="Image" style="max-width: 100%;height: auto;"></li>
    </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
</div>
</section>
<!-- end -->


<section class="process-wrap section">
	<div class="container">
	<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="heading text-center" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
					<!-- <span class="text-color">Our Experience</span> -->
					<h2>Fitur Utama MoriDity</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-3 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="1000" data-aos-once="true">
				<div class="process-item text-center text-lg-center">
					<i class="ti-map"></i>
					<h4><a href="<?=base_url()?>#maps">MoriMap</a></h4>
					<p>Peta Persebaran Petani Kelor</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="2000" data-aos-once="true">
				<div class="process-item text-center text-lg-center ">
					<i class="ti-layout"></i>
					&ensp;
					<i class="ti-bar-chart"></i>
					<h4><a href="<?=base_url()?>moridatafe">MoriData & MoriGraph</a></h4>
					<p>Laporan dan Grafik Data Komoditas Kelor</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="3000" data-aos-once="true">
				<div class="process-item text-center text-lg-center ">
					<i class="ti-shopping-cart"></i>
					<h4><a href="<?=base_url()?>#moristore">MoriStore</a></h4>
					<p>Etalase Produk Kelor</p>
				</div>
			</div>
		</div>
	</div>
</section>

</br>
</br>

<section class="maps" id="maps">
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

<section class="section bg-grey cta">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="cta-content text-center">
					<!-- <span class="text-color">Get Consultant</span> -->
					<h2 class="mt-4 mb-4 ">Apakah Anda ingin menjadi bagian dari keluarga komoditas<br>kelor kami?</h2>
					<a href="<?=base_url()?>kontak" class="btn btn-main-3">Hubungi Kami</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Menu -->
<section class="section store" id="moristore">
        <div class="menu-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="heading text-center">
                        <h2>MoriDity Store</h2>
                        <p>Lihat dan berbelanja langsung dengan petani-petani kelor di Indonesia</p>
                    </div>
                    </div>
                </div>
                        
                <div class="row special-list">
                    <?php foreach ($etalase as $row) : ?>
                      <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">
                          <img src="<?=base_url();?>/gambar/<?php echo $row->foto_kelor ?>" class="img-fluid" alt="Image">
                          <div class="why-text">
                            <h3><?php echo $row->nama_kebun ?></h3>
                            <h6>Stok: <?php echo $row->stok_kelor ?></h6>
							<a href="<?=base_url()?>#" class="btn btn-main-4">Pesan</a>
                          </div>
                        </div>
                      </div>	
					    <?php endforeach ?>
                </div>
				<div class="title text-center">
					<a href="<?=base_url()?>moristore" class="btn btn-main-3">Lihat Selengkapnya</a>
                </div>
    </section>
<!-- End Menu -->


<?php $this->load->view('layouts/back-to-top') ?>

<?php $this->load->view('layouts/main_footer') ?>
