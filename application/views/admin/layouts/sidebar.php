<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Moridity</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link rel="stylesheet" href="<?= base_url('vendor'); ?>/chartist/css/chartist.min.css">
<link href="<?= base_url('assets'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?= base_url('assets'); ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url('assets'); ?>/css/style_admin.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets');?>/images/admin/logomoridity.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<!--**********************************
            Sidebar start
        ***********************************-->

<div class="deznav">
	<div class="deznav-scroll">
		<ul class="metismenu" id="menu">
			<li><a class="" href="<?= base_url(); ?>Admin" aria-expanded="false">
					<i class="">
						<!-- <img alt="image" width="50" src="<?= base_url('assets'); ?>images/admin/Vector.png"> -->

						<img width="30" src="<?= base_url('assets'); ?>/images/admin/dashboard.png" alt="">
					</i>
					<span class="nav-text">Dashboard</span>
				</a>

			</li>

			<li><a class="" href="<?= base_url(); ?>Moridata_admin" aria-expanded="false">
					<i class="">
						<img alt="image" width="30" src="<?= base_url('assets'); ?>/images/admin/moridata.png" alt="">
					</i>
					<span class="nav-text">MoriData</span>
				</a>

			</li>

			<li><a class="" href="<?= base_url(''); ?>Morimaps_admin" aria-expanded="false">
					<i class="">
						<img alt="image" width="30" src="<?= base_url('assets'); ?>/images/admin/morimap.png" alt="">
					</i>
					<span class="nav-text">MoriMap</span>
				</a>

			</li>

		</ul>

		<div class="fixed-bottom">
			<div class="copyright">
				<p><strong>MoriDity Dashboard</strong> ?? 2021 All Rights Reserved</p>
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
