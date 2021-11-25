<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Petani Moridity</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/chartist/css/chartist.min.css">
    <link href="<?= base_url('assets'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/css/style_admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets');?>/images/admin/logomoridity.png">
    <link rel="stylesheet" href="<?= base_url(); ?>leaflet/leaflet.css" />
    <script src="<?= base_url(); ?>leaflet/leaflet.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
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
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?= base_url(); ?>User" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url('assets'); ?>/images/admin/logomoridity.png" alt="">
                <img class="logo-compact" src="<?= base_url('assets'); ?>/images/admin/logomoridity-text.png" alt="">
                <img class="brand-title" src="<?= base_url('assets'); ?>/images/admin/logomoridity-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <?php foreach ($user as $row) : ?>
										<?php if ($row->id == $this->session->userdata('id')) : ?>
											<img src="<?php echo base_url('./gambar/avatar/' .$row->avatar) ?>" width="20" alt="" />
										<?php endif ?>
									<?php endforeach ?>
                                    <div class="header-info">
                                        <span class="text-black">
                                            <strong>
                                                <!-- <?php echo 'Selamat Datang , ' . $p->username; ?> -->
                                            </strong>
                                        </span>
                                        <p class="fs-12 mb-0"><?php echo $this->session->userdata('nama') ?></p>
                                        
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
									<a href="<?= base_url('user/profile'); ?>" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ml-2">Profile </span>
									</a>
                                    <a href="<?= base_url('Auth/logout'); ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
