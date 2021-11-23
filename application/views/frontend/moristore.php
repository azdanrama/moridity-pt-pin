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
                Mori Store
            </li>
          </ul>
           <h1>Moridity Store</h1>
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
                        <p>Lihat dan berbelanja langsung dengan petani-petani lokal Indonesia</p>
                    </div>
                    </div>
                </div>
                        
                <div class="row special-list">
                    <?php foreach ($etalase as $row) : ?>
						<div class="col-lg-4 col-md-6 special-grid drinks">
							<div class="gallery-single fix">
								<img src="<?=base_url();?>/gambar/<?php echo $row->foto_kelor ?>" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4><?php echo $row->nama_kebun ?></h4>
									<h5><?php echo $row->stok_kelor ?></h5>
								</div>
							</div>
						</div>	
					<?php endforeach ?>
                </div>
    </section>
<!-- End Menu -->

<?php $this->load->view('layouts/back-to-top') ?>
<?php $this->load->view('layouts/main_footer') ?>
