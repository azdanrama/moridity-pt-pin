ini etalase
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="col-xl-12 col-xxl-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-header">
						<div class="mr-auto pr-3">
							<h4 class="text-black font-w700 fs-20">Data Komoditas Kelor </h4><br>
						</div>

					</div>
				</div>
				<!-- <div class="col-xl-12"> -->
				<div class="card">
					<div class="card-body">

						<a href="<?php echo base_url('etalase/create') ?>">Tambah</a>
						<div id="table-data">
							<table class="table table-borderless">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Kebun</th>
										<th scope="col">Jenis Kelor</th>
										<th scope="col">Stok Kelor</th>
										<th scope="col">Foto Kelor</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = 1;
										foreach ($etalase as $row) :
									?>

									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->nama_kebun ?></td>
										<td><?php echo $row->jenis_kelor ?></td>
										<td><?php echo $row->stok_kelor ?></td>
										<td><img src="<?php echo base_url('./gambar/' .$row->foto_kelor) ?>" width="100"></td>
										<td>
											<a href="<?php echo base_url('Etalase/edit/' .$row->id_etalase) ?>" class="btn btn-sm btn-warning">Edit</a>
											<a href="<?php echo base_url('Etalase/delete/' .$row->id_etalase) ?>" class="btn btn-sm btn-danger">Hapus</a>
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			

