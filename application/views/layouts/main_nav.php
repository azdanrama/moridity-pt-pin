    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation main_menu " id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?=base_url()?>main">
                    <img src="<?=base_url('assets');?>/images/user/logomoridity-full.png" alt="Moridity" class="img-fluid" width="200 px">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu-alt"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                    	 <li class="nav-item <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>">
                            <a href="<?=base_url()?>main" class="nav-link js-scroll-trigger">
                                Beranda
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=base_url()?>tentang" class="nav-link js-scroll-trigger">
                                Tentang
                            </a>
                        </li>
                        <!-- <li class="nav-item ">
                            <a href="<?=base_url()?>maps" class="nav-link js-scroll-trigger">
                                Peta
                            </a>
                        </li> -->
                        <li class="nav-item ">
                            <a href="<?=base_url()?>kontak" class="nav-link">
                                Kontak
                            </a>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?=base_url()?>#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fitur
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3">
                                 <a class="dropdown-item " href="<?=base_url()?>#maps">
                                    MoriMaps
                                </a>
                                <a class="dropdown-item " href="<?=base_url()?>moridatafe">
                                    MoriData
                                </a>
                                <a class="dropdown-item " href="<?=base_url()?>#moristore">
                                    MoriStore
                                </a> 
                            </div>
                        </li>
                    </ul>

                     <ul class="list-inline header-contact float-lg-right">
                        <li class="list-inline-item">
                        	<a href="<?=base_url()?>auth" class="btn btn-main-2 btn-sm">Masuk</a>
                        </li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>