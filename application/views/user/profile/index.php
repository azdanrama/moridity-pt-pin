<?php foreach ($user as $row) : ?>

	<?php if ($row->id == $this->session->userdata('id')) : ?>
		<div class="content-body">
  <div class="container-fluid">
    <div class="page-titles">
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">My Profile</h6><br>
      </div>

      <div class="card-body">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-2">
              <div class="profile-photo">
                <img src="<?php echo base_url('./gambar/avatar/' .$row->avatar) ?>" class="img-fluid rounded-circle" alt="">
              </div>
              <!-- <img width="85px" src="http://localhost/newmoridity/assets/images/admin/petani.png"> -->


            </div>
			
            <div class="col-sm-8">
              <h1><?php echo $row->nama ?></h1>
              <h6><?php echo $row->level ?></h6>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-warning" href="<?php echo base_url('User/editProfile/' .$row->id) ?>">Edit</a>
              <!-- <img alt="image" width="30" src="http://localhost/newmoridity/assets/images/admin/edit.png" data-bs-toggle="modal" data-bs-target="#modalForm" alt=""> -->

            </div>

          </div>
        </div>
      </div>



      <div class="card-body">

        <table class="table table-borderless">
          <tbody>
            <tr>
              <th> Email </th>
              <td><span> : <?php echo $row->email ?> </span></td>
            </tr>
            <tr>
              <th> Username </th>
              <td><span> : <?php echo $row->username ?> </span></td>
            </tr>
            <tr>
              <th> Jenis Kelamin </th>
              <td><span> : <?php echo $row->jenis_kelamin ?> </span></td>
            </tr>
            <tr>
              <th> Tanggal Lahir </th>
              <td><span> : <?php echo $row->tgl_lahir ?> </span></td>
            </tr>
            <tr>
              <th> No Telepon </th>
              <td><span> : 0<?php echo $row->telepon ?> </span></td>
            </tr>
            <tr>
              <th> Alamat </th>
              <td><span> : <?php echo $row->alamat ?> </span></td>
            </tr>


          </tbody>
        </table>
      </div>

    </div>

  </div>
	<?php endif ?>

<?php endforeach ?>
