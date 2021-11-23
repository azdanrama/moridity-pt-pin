<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Petani Dashboard</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link rel="stylesheet" href="<?= base_url('vendor'); ?>/chartist/css/chartist.min.css">
<link href="<?= base_url('assets'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?= base_url('assets'); ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url('assets'); ?>/css/style_admin.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<!--**********************************
            Sidebar start
        ***********************************-->

<div class="deznav">
	<div class="deznav-scroll">
		<ul class="metismenu" id="menu">
			<li><a class="" href="<?= base_url('User'); ?>" aria-expanded="false">
					<i class="">
						<!-- <img alt="image" width="50" src="<?= base_url('assets'); ?>images/admin/Vector.png"> -->

						<img width="30" src="<?php echo base_url() ?>/assets/images/admin/dashboard.png" alt="">
					</i>
					<span class="nav-text">Dashboard</span>
				</a>

			</li>

			<li><a class="" href="<?= base_url(); ?>moridata" aria-expanded="false">
					<i class="">
						<img alt="image" width="30" src="<?php echo base_url() ?>/assets/images/admin/moridata.png" alt="">
					</i>
					<span class="nav-text">MoriData</span>
				</a>

			</li>


			<li><a class="" href="<?= base_url(''); ?>Morimaps_user" aria-expanded="false">
					<i class="">
						<img alt="image" width="30" src="<?php echo base_url() ?>/assets/images/admin/morimap.png" alt="">
					</i>
					<span class="nav-text">MoriMap</span>
				</a>

			</li>
			
			<li><a class="" href="<?= base_url(''); ?>etalase" aria-expanded="false">
					<i class="">
						<img alt="image" width="30" src="<?php echo base_url() ?>/assets/images/admin/moristore.png" alt="">
					</i>
					<span class="nav-text">MoriStore</span>
				</a>

			</li>




			<!-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url(); ?>/form-element">Form Elements</a></li>
                            <li><a href="<?= base_url(); ?>/form-wizard">Wizard</a></li>
                            <li><a href="<?= base_url(); ?>/form-editor-summernote">Summernote</a></li>
                            <li><a href="<?= base_url(); ?>form-pickers">Pickers</a></li>
                            <li><a href="<?= base_url(); ?>form-validation-jquery">Jquery Validate</a></li>
                        </ul>
                    </li> -->
			<!-- <li><a class="" href="<?= base_url(); ?>Data_Table" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">MoriStore</span>
						</a>
                        <ul >
                            
                        </ul>
                    </li> -->

		</ul>

		<div class="bottom">
			<div class="copyright">
				<p><strong>MoriDity Dashboard</strong> © 2021 All Rights Reserved</p>
				<p>Made with <span class="heart"></span> by Moridity</p>
			</div>
		</div>

	</div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->

<!-- Dashboard 1 -->
<script src="<?= base_url('assets'); ?>/js/dashboard/dashboard-1.js"></script>
<script>
	function carouselReview() {
		/*  testimonial one function by = owl.carousel.js */
		jQuery('.testimonial-one').owlCarousel({
			loop: true,
			autoplay: true,
			margin: 30,
			nav: false,
			dots: false,
			left: true,
			navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
				0: {
					items: 1
				},
				484: {
					items: 2
				},
				882: {
					items: 3
				},
				1200: {
					items: 2
				},

				1540: {
					items: 3
				},
				1740: {
					items: 4
				}
			}
		})
	}
	jQuery(window).on('load', function() {
		setTimeout(function() {
			carouselReview();
		}, 1000);
	});
</script>
