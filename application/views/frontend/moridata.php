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
                Mori Data
            </li>
          </ul>
           <h1>Moridity Data</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section>
                <img src="<?=base_url('assets');?>/images/user/bg/Data.jpg" alt="Moridity" class="img-fluid w100">

</section> -->


<section class="section grafik">
		<div class="content-body">
      <div class="container-fluid">
				<div class="heading text-center">
					<!-- <span class="text-color">Our Experience</span> -->
					<h2>Grafik Peningkatan Panen Kelor</h2>
				</div>
        <div class="col-xl-12 col-xxl-12">
          <div class="row justify-content-md-center">
            <div class="col-sm-9">
              <div class="card">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                  <div class="mr-auto pr-3 mb-sm-0 mb-3">
                    <h4 class="text-black fs-20">Grafik Komoditas Kelor</h4>
                    <p class="fs-13 mb-0 text-black"></p>
                  </div>
                </div>
                <div class="card-body pt-0 pb-0">
                  <div id="chart-container"></div>
                </div>
              </div>
            </div>
			  </div>
    </div>
</section>

<section class="section table">
		<div class="content-body">
            <div class="container-fluid">
				<div class="heading text-center">
					<!-- <span class="text-color">Our Experience</span> -->
					<h2>Laporan Data Panen Komoditas Kelor</h2>
				    </div>
                <!-- row -->
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                Data dibawah ini merupakan laporan Data Kelor dalam beberapa tahun. Download Data di bawah ini.
                                <!-- <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> -->
                            </div>
                        </div>
                        <div class="card mb-9">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Laporan Komoditas Kelor
                            </div>
                            <div class="card-body">
                              <table class="table table-borderless">
                                <thead>
                                  <tr>
																		<th scope="col">No</th>
																		<th scope="col">Nama Petani</th>
																		<th scope="col">Jenis Kelor</th>
																		<th scope="col">Tanggal</th>
																		<th scope="col">Jumlah Panen</th>
                                  </tr>
                                </thead>
																	<tbody>
																		<?php 
																			$no = 1;
																			foreach ($user as $row) :
																		?>

																		<tr>
																			<th scope="row"><?php echo $no++ ?></th>
																			<td><?php echo $row->nama ?></td>
																			<td><?php echo $row->jenis_kelor ?></td>
																			<td><?php echo $row->tgl_panen ?></td>
																			<td><?php echo $row->jumlah_panen ?></td>
																		</tr>

																		<?php endforeach ?>
																	</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

			</div>
        </div>
</section>


<?php $this->load->view('layouts/back-to-top') ?>
<?php $this->load->view('layouts/main_footer') ?>
