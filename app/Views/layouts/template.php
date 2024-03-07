<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta charset="utf-8">
        <title><?= $setting['site_name']; ?></title>
        <meta name="author" content="themesflat.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/style.css')?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('')?>public/assets/css/responsive.css">
        <link rel="shortcut icon" href="<?= base_url('')?>public/assets/icon/Favicon.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('')?>public/assets/icon/Favicon.png">
    </head>
    <body class="body counter-scroll">
        <!-- preload -->
        <div class="preload preload-container">
            <div class="middle">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
            </div>
        </div>
        <!-- /preload -->
        <div id="wrapper">
            <div id="page" class="pt-40 slider-3d-page">
                <header id="header_main" class="header_1 header-fixed">
                    <div class="themesflat-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="site-header-inner">
                                    <div class="wrap-box flex">

                                        <div id="site-logo">
                                            <div id="site-logo-inner">
                                                <a href="<?= base_url('/'); ?>" rel="home" class="main-logo">
                                                <img id="logo_header" src="<?= base_url('public/assets/images/logo/logo.png')?>" data-retina="<?= base_url('public/assets/images/logo/logo.png')?>" >
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <!-- logo -->
                                        <div class="mobile-button">
                                            <span></span>
                                        </div>

                                        <!-- /.mobile-button -->
                                        <nav id="main-nav" class="main-nav">
                                            <ul id="menu-primary-menu" class="menu">
                                                <li class="menu-item">
                                                    <a href="<?= base_url('/'); ?>">Beranda</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url('price-list'); ?>">Daftar harga</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url('faqs'); ?>">Faq</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url('contact'); ?>">Kontak</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url('register'); ?>">Daftar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="<?= base_url('login'); ?>">Masuk</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- /#main-nav -->
                                        <div class="flat-wallet flex">
                                            <div class="canvas">
                                                <span></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="canvas-nav-wrap">
                        <div class="overlay-canvas-nav"></div>
                        <div class="inner-canvas-nav">
                            <div class="side-bar">
                                <a href="<?= base_url('/'); ?>" rel="home" class="main-logo">
                                <img id="logo_header" src="<?= base_url('public/assets/images/logo/logo.png')?>" data-retina="<?= base_url('public/assets/images/logo/logo.png')?>">
                                </a>
                                <div class="canvas-nav-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                                        <g>
                                            <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="widget-search mt-30">
                                    <form action="#" method="get" role="search" class="search-form relative">
                                        <input type="search" id="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                        <button class="search search-submit" type="submit" title="Search">
                                        <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="widget widget-categories">
                                    <h5 class="title-widget">Menu</h5>
                                    <ul>
                                        <li>
                                            <div class="cate-item"><a href="<?= base_url('/')?>">Beranda</a></div>
                                        </li>
                                        <li>
                                            <div class="cate-item"><a href="<?= base_url('tracking')?>">Lacak Pesanan</a></div>
                                        </li>
                                        <li>
                                            <div class="cate-item"><a href="<?= base_url('price-list')?>">Daftar Harga</a></div>
                                        </li>
                                        <li>
                                            <div class="cate-item"><a href="<?= base_url('winrate')?>">Kalkulator WR</a></div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget">
                                    <h5 class="title-widget">Join the community</h5>
                                    <div class="widget-social">
                                        <ul class="flex">
                                            <li><a href="#" class="icon-facebook"></a></li>
                                            <li><a href="#" class="icon-twitter"></a></li>
                                            <li><a href="#" class="icon-vt"></a></li>
                                            <li><a href="#" class="icon-tiktok"></a></li>
                                            <li><a href="#" class="icon-youtube"></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Mobile navbar -->
                    <div class="mobile-nav-wrap">
                        <div class="overlay-mobile-nav"></div>
                        <div class="inner-mobile-nav">
                            <a href="<?= base_url('/'); ?>" rel="home" class="main-logo">
                                <img id="mobile-logo_header" src="<?= base_url('public/assets/images/logo/logo.png')?>" data-retina="<?= base_url('public/assets/images/logo/logo.png')?>">
                            </a>
                            <div class="mobile-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve">
                                    <g>
                                        <path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/>
                                    </g>
                                </svg>
                            </div>
                            <nav id="mobile-main-nav" class="mobile-main-nav">
                                <ul id="menu-mobile-menu" class="menu">
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('/'); ?>">Beranda</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('tracking'); ?>">Lacak Pesanan</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('price-list'); ?>">Daftar Harga</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('winrate'); ?>">Kalkulator Winrate</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('register'); ?>">Daftar</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children-mobile">
                                        <a class="item-menu-mobile" href="<?= base_url('login'); ?>">Login</a>
                                    </li>

                                </ul>
                            </nav>

                            <!-- <div class="widget-search mt-30">
                                <form action="#" method="get" role="search" class="search-form relative">
                                    <input type="search" class="search-field style-1" placeholder="Search..." value="" name="s" title="Search for" required="">
                                    <button class="search search-submit" type="submit" title="Search">
                                    <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div> -->

                        </div>
                    </div>
                    <!-- Mobile navbar -->

                </header>

                <?= $this->renderSection('content'); ?>

                <?= $this->include('partials/about-section'); ?>
                
            </div>
            <!-- /#page -->

        </div>
        <!-- /#wrapper -->
        <div class="tf-mouse tf-mouse-outer"></div>
        <div class="tf-mouse tf-mouse-inner"></div>
        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>

        <footer id="footer">
            <div class="themesflat-container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content flex flex-grow">
                            <div class="widget-logo flex-grow">
                                <div class="logo-footer" id="logo-footer">
                                    <a href="">
                                        <img id="logo_footer" src="<?= base_url('public/assets/images/logo/logo.png'); ?>" data-retina="<?= base_url('public/assets/images/logo/logo.png'); ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="widget widget-menu style-1">
                                <h5 class="title-widget">Sosial Media</h5>
                                <ul>
                                    <li><a href="#">Tiktok SwgGameStore</a></li>
                                    <li><a href="#">Youtube SwgGameStore</a></li>
                                    <li><a href="#">Instagram SwgGameStore</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-menu style-2">
                                <h5 class="title-widget">Peta Situs</h5>
                                <ul>
                                    <li><a href="#">Beranda</a></li>
                                    <li><a href="#">Cek Transaksi</a></li>
                                    <li><a href="#">Hubungi Kami</a></li>
                                    <li><a href="#">Ulasan</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-menu style-3">
                                <h5 class="title-widget">Dukungan</h5>
                                <ul>
                                    <li><a href="#">WhastApp</a></li>
                                    <li><a href="#">Email</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>
                            </div>
                            <div class="widget-last">
                                <div class="widget-menu style-4">
                                    <h5 class="title-widget">Legalitas</h5>
                                    <ul>
                                        <li><a href="#">Kebijakan Pribadi</a></li>
                                        <li><a href="#">Syaratr & Ketentuan</a></li>
                                    </ul>
                                </div>
                                <h5 class="title-widget mt-30">Join the community</h5>
                                <div class="widget-social">
                                    <ul class="flex">
                                        <li><a href="#" class="icon-facebook"></a></li>
                                        <li><a href="#" class="icon-twitter"></a></li>
                                        <li><a href="#" class="icon-vt"></a></li>
                                        <li><a href="#" class="icon-tiktok"></a></li>
                                        <li><a href="#" class="icon-youtube"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>© 2023 Made By Adi miuprix</p>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="<?= base_url('')?>public/assets/js/jquery.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/popper.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/count-down.js"></script>
        <script src="<?= base_url('')?>public/assets/js/simpleParallax.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/gsap.js"></script>
        <script src="<?= base_url('')?>public/assets/js/SplitText.js"></script>
        <script src="<?= base_url('')?>public/assets/js/wow.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/ScrollTrigger.js"></script>
        <script src="<?= base_url('')?>public/assets/js/gsap-animation.js"></script>
        <script src="<?= base_url('')?>public/assets/js/tsparticles.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/tsparticles.js"></script>
        <script src="<?= base_url('')?>public/assets/js/main.js"></script>
    </body>
</html>