
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Data Komoditas Kelor </h4>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

						<a href="<?php echo base_url('moridata/create') ?>" class="btn btn-primary btn-sm">Tambah</a>
						<a href="<?php echo base_url('moridata/exportpdf') ?>" class="btn btn-danger btn-sm">Cetak PDF</a>
						<a href="<?php echo base_url('moridata/exportspreadsheet') ?>" class="btn btn-success btn-sm">Export Excel</a>
						
						<div id="table-data">
							<table class="table table-borderless">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Petani</th>
										<th scope="col">Nama Kebun</th>
										<th scope="col">Jenis Kelor </th>
										<th scope="col">Tanggal Panen</th>
										<th scope="col">Jumlah Panen</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($data_komoditas_kelor_general as $row) : ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $row->nama ?></td>
											<td><?php echo $row->nama_kebun ?></td>
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
			</div>

			

