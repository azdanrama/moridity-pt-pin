<?php $this->load->view('admin/layouts/header_admin') ?>

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
                <img src="<?= base_url('assets'); ?>/images/admin/profile/profile.png" class="img-fluid rounded-circle" alt="">
              </div>
              <!-- <img width="85px" src="http://localhost/newmoridity/assets/images/admin/petani.png"> -->


            </div>
			
            <div class="col-sm-8">
              <h1>Zayya Humairah </h1>
              <h6>admin</h6>
              <h6>id user : 01</h6>
              <h6>id admin : 01</h6>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-warning" href="<?php echo base_url('profile/edit') ?>">Edit</a>
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
              <td><span> : Zayyahumairah@gmail.com </span></td>
            </tr>
            <tr>
              <th> Username </th>
              <td><span> : admin </span></td>
            </tr>
            <tr>
              <th> Password </th>
              <td><span> : **********</span></td>
            </tr>
            <tr>
              <th> Jenis Kelamin </th>
              <td><span> : P </span></td>
            </tr>
            <tr>
              <th> Tanggal Lahir </th>
              <td><span> : 30 Maret 2001 </span></td>
            </tr>
            <tr>
              <th> No Telepon </th>
              <td><span> : 082111255763 </span></td>
            </tr>
            <tr>
              <th> Alamat </th>
              <td><span> : Jl.Cempaka 1 no 28 </span></td>
            </tr>


          </tbody>
        </table>
      </div>

    </div>

  </div>

  

  

  <!--**********************************
            Content body end
        ***********************************-->

<?php $this->load->view('admin/layouts/footer_admin') ?>
