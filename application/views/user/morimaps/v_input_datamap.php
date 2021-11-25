<div class="content-body">
	<div class="row">
    	<div class="col-6">
			<div class="panel panel-primary">
						<div class="panel-heading">
							Peta Persebaran Petani Kelor di Indonesia
						</div>
						<div class="panel-body">

							<div id="mapid" style="height: 500px; width: 500px;"></div>
    		<div class="col-6">
				<div class="col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Lokasi
			</div>
			<div class="panel-body">
				<?php
				//notifikasi gagal upload Gambar
				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' . $error_upload . '</div>';
				}
				//validasi data tidak boleh kosong
				echo validation_errors('<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

				//notifikasi pesan data berhasil disimpanasi
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}

				echo form_open_multipart('Morimaps_user/input');
				?>

				<div class="form-group">
					<label>Nama Kebun</label>
					<input name="nama_kebun" placeholder="Nama Kebun" value="<?= set_value('nama_kebun') ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label>Latitude</label>
					<input id="Latitude" name="latitude" placeholder="Latitude" value="<?= set_value('latitude') ?>" class="form-control" readonly />
				</div>

				<div class="form-group">
					<label>Longitude</label>
					<input id="Longitude" name="longitude" placeholder="Longitude" value="<?= set_value('longitude') ?>" class="form-control" readonly />
				</div>

				<div class="form-group">
					<label></label>
					<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					<button type="reset" class="btn btn-sm btn-success">Reset</button>
				</div>

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
	
				
			</div>
	</div>
</div>

	<div class="col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Lokasi
			</div>
			<div class="panel-body">
				<?php
				//notifikasi gagal upload Gambar
				if (isset($error_upload)) {
					echo '<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' . $error_upload . '</div>';
				}
				//validasi data tidak boleh kosong
				echo validation_errors('<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

				//notifikasi pesan data berhasil disimpanasi
				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}

				echo form_open_multipart('Morimaps_user/input');
				?>

				<div class="form-group">
					<label>Nama Kebun</label>
					<input name="nama_kebun" placeholder="Nama Kebun" value="<?= set_value('nama_kebun') ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label>Latitude</label>
					<input id="latitude" name="latitude" placeholder="Latitude" value="<?= set_value('latitude') ?>" class="form-control" readonly />
				</div>

				<div class="form-group">
					<label>Longitude</label>
					<input id="longitude" name="longitude" placeholder="Longitude" value="<?= set_value('longitude') ?>" class="form-control" readonly />
				</div>

				<div class="form-group">
					<label></label>
					<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
					<button type="reset" class="btn btn-sm btn-success">Reset</button>
				</div>

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>



<script>
	var curLocation = [0, 0];
	if (curLocation[0] == 0 && curLocation[1] == 0) {
		curLocation = [-2.5489, 118.0149];
	}

	var mymap = L.map('mapid').setView([-2.5489, 118.0149], 5);
	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	}).addTo(mymap);

	mymap.attributionControl.setPrefix(false);
	var marker = new L.marker(curLocation, {
		draggable: 'true'
	});

	marker.on('dragend', function(event) {
		var position = marker.getLatLng();
		marker.setLatLng(position, {
			draggable: 'true'
		}).bindPopup(position).update();
		$("#latitude").val(position.lat);
		$("#longitude").val(position.lng).keyup();
	});

	$("#Latitude, #longitude").change(function() {
		var position = [parseInt($("#latitude").val()), parseInt($("#longitude").val())];
		marker.setLatLng(position, {
			draggable: 'true'
		}).bindPopup(position).update();
		mymap.panTo(position);
	});
	mymap.addLayer(marker);
</script>
