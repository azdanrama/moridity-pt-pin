<?php $this->load->view('layouts/main_nav') ?>

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="block">
         
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="<?=base_url()?>main">Beranda</a>
            </li>
             <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                Kontak
            </li>
          </ul>
           <h1>Kontak</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="contact-info-wrap">
    <div class="container">
          <div class="row">
             <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="contact-info">
                    <i class="ti-email"></i>
                    <h4>E-mail</h4>
                    <p>moridity30@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                 <div class="contact-info">
                    <i class="ti-mobile"></i>
                    <h4>Hp</h4>
                    <p>+62 856 9122 4345</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="contact-info">
                    <i class="ti-location-pin"></i>
                    <h4>Alamat</h4>
                    <p>Graha Mobilkom, Jl. Raden Saleh Raya No.35 Kota Jakarta Pusat 10330</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form section">
    <div class="container">
        <div class="row no-gutters justify-content-md-center">
            <div class="col-lg-8 col-md-12">
                 <!-- Form Start -->
                 <form class="contact_form" id="contact-form" method="post" action="sendmail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- form element -->
                    <div class="row">
                        <div class="col-12">
                            <h3 align="center">Tinggalkan Pesan Untuk Kami </h3>
                           <p class="mt-3 mb-4">Kami sangat senang berkomunikasi dan bekerjasama dengan kamu. Hubungi tim kami melalui email ataupun media sosial.</p>
                       </div>
                        <div class="col-lg-12 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="col-lg-12 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                      
                        <div class="col-lg-12 form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Judul" required>
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="6" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="col-12">
                            <input name="submit" type="submit" class="btn btn-main" value="Kirim Pesan">
                        </div>
                    </div>
                </form>
                <!-- Form end -->
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('layouts/back-to-top') ?>

<?php $this->load->view('layouts/main_footer') ?>
