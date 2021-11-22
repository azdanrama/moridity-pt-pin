<?php $this->load->view('layouts/main_nav') ?>

<!-- Carousel -->
<section>
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
			<img src="<?=base_url('assets');?>/images/user/bg/about_img.png" class="img-fluid" alt="Image">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Moridity</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
			<img src="<?=base_url('assets');?>/images/user/bg/about_img.png" class="img-fluid" alt="Image">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Moridity</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
			<img src="<?=base_url('assets');?>/images/user/bg/about_img.png">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	</section>
<!-- end -->


<section class="process-wrap section">
	<div class="container">
	<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="heading text-center">
					<!-- <span class="text-color">Our Experience</span> -->
					<h2>Fitur Utaman MoriDity</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="process-item text-center text-lg-left ">
					<i class="ti-search"></i>
					<h4>MoriMap</h4>
					<p>Peta Persebaran Petani Kelor</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="process-item text-center text-lg-left ">
					<i class="ti-dashboard"></i>
					<h4>MoriData</h4>
					<p>Grafik Komoditas Kelor</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="process-item text-center text-lg-left ">
					<i class="ti-thought"></i>
					<h4>MoriStore</h4>
					<p>Etalase Produk</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-md-6 ">
				<div class="process-item text-center text-lg-left ">
					<i class="ti-bar-chart-alt"></i>
					<h4>MoriGraph</h4>
					<p>Grafik Komoditas Kelor</p>
				</div>
			</div>
		</div>
	</div>
</section>

</br>
</br>

<section class="feature">
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
					<h2 class="mt-3 mb-4 ">Apakah Anda ingin menjadi bagian dari keluarga komoditas kami?</h2>
					<a href="<?=base_url()?>kontak" class="btn btn-main-2">Hubungi Kami</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Menu -->
<section class="section store">
        <div class="menu-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="heading text-center">
                        <h2>Moridity Store</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                    </div>
                </div>
                        
                <div class="row special-list">
                    <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                    <img src="<?=base_url('assets');?>/images/user/product/olahan.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> Rp 20.000</h5>
                        </div>
                    </div>
                </div>
                        
                <div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
                    <img src="<?=base_url('assets');?>/images/user/product/olahan.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> Rp 20.000</h5>
                        </div>
                    </div>
                </div>
                        
                <div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
                    <img src="<?=base_url('assets');?>/images/user/product/olahan.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> Rp 20.000</h5>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12">
					<div class="title text-center">
						<span class="text-color"><a href="<?=base_url()?>moristore">Lihat Selengkapnya</a></span>
					</div>
                </div>
    </section>
<!-- End Menu -->

<?php $this->load->view('layouts/back-to-top') ?>

<?php $this->load->view('layouts/main_footer') ?>
