<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php echo $title ?></title>
		<!-- bootstrap.min css -->
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/bootstrap/css/bootstrap.min.css">
		<!-- Icofont Css -->
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/themify/css/themify-icons.css">
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/fontawesome/css/all.css">
		<!-- animate.css -->
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/animate-css/animate.css">
		<!-- Magnify Popup -->
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/magnific-popup/dist/magnific-popup.css">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/slick-carousel/slick/slick.css">
		<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/slick-carousel/slick/slick-theme.css">
		<link href="<?= base_url('assets'); ?>/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
		<!-- Custom Stylesheet -->
		<link href="<?= base_url('assets'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
		<link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		
		<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets');?>/images/admin/logomoridity.png">


		 <!--**********************************
				Scripts
			***********************************-->
			<!-- Required vendors -->
			<script src="<?=base_url('assets')?>/vendor/global/global.min.js"></script>
			<script src="<?=base_url('assets')?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
			<script src="<?=base_url('assets')?>/js/custom.min.js"></script>
			<script src="<?=base_url('assets')?>/js/deznav-init.js"></script>
			<script src="<?=base_url('assets')?>/js/script.js"></script>
			<script src="<?=base_url('assets')?>/js/back-to-top.js"></script>
			

			<!-- Vectormap -->
			<script src="<?=base_url('assets')?>/vendor/jqvmap/js/jquery.vmap.min.js"></script>
			<script src="<?=base_url('assets')?>/vendor/jqvmap/js/jquery.vmap.world.js"></script>
			<script src="<?=base_url('assets')?>/vendor/jqvmap/js/jquery.vmap.usa.js"></script>

			<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

			<!-- <script src="<?=base_url('assets')?>/js/slider/jquery.superslides.min.js"></script>
			<script src="<?=base_url('assets')?>/js/images-loaded.min.js"></script>
			<script src="<?=base_url('assets')?>/js/slider/legacy.js"></script>
			<script src="<?=base_url('assets')?>/js/slider/popper.min.js"></script>
			<script src="<?=base_url('assets')?>/js/slider/custom.js"></script>
			<script src="<?=base_url('assets')?>/js/slider/baguetteBox.js"></script>
			<script src="<?=base_url('assets')?>/js/slider/isotope.js"></script> -->

			<script type="text/javascript" src="<?php echo base_url('assets/vendor/pustaka_FSC/js/fusioncharts.js') ?>"></script>
			<script type="text/javascript" src="<?php echo base_url('pustaka_FSC/js/themes/fusioncharts.theme.zune.js') ?>"></script>
			<script type="text/javascript">
			FusionCharts.ready( function(){
			var G1 = new FusionCharts({
				"type": "column3d",
				"renderAt": "chart-container",
				"width":"800",
				"height":"500",
				"dataFormat":"jsonurl",
				"dataSource": "<?= base_url('assets');?>/fc/moridata_grafik.php"
				}
			);
			G1.render();
			}
			)
			</script>



			<!-- All init script -->
			<script src="<?=base_url('assets')?>/js/plugins-init/jqvmap-init.js"></script>
			

	</head>

	<body>
</html>
