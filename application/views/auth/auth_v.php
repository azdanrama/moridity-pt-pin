<?php $this->load->view('layouts/auth/top') ?>

<div class="authincation h-100">
	<div class="container h-100">
		<div class="row justify-content-center h-100 align-items-center">
			<div class="col-md-6">
				<div class="authincation-content">
					<div class="row no-gutters">
						<div class="col-xl-12">
							<div class="auth-form">
								<div class="text-center mb-3 ml-0">
									<a href="<?=base_url('Auth/check');?>"><img src="<?=base_url('assets');?>/images/admin/logomoridity-full2.png" alt="" ></a>
								</div>
								<form action="<?=base_url('auth/check');?>" method="post">
									<div class="form-group">
										<label class="mb-1 text-success"><strong>Username</strong></label>
										<input type="text" class="form-control" name="username" placeholder="Masukan username anda">
									</div>
									<div class="form-group">
										<label class="mb-1 text-success"><strong>Kata Sandi</strong></label>
										<input type="password" class="form-control" name="password" placeholder="Masukan kata sandi anda">
									</div>
									<div class="form-row d-flex justify-content-between mt-4 mb-2">
										<div class="form-group">
						
										</div>
									</div>
									<div class="text-center">
										<button type="submit" name="login" class="btn bg-success text-white btn-block">Masuk</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layouts/auth/bottom') ?>
