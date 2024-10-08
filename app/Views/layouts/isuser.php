<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
        <title><?= $setting['site_name'];?></title>

        <meta name="author" content="themesflat.com" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/style.css')?>" />

        <!-- Reponsive -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/assets/css/responsive.css')?>" />

        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="<?= base_url('public/assets/icon/Favicon.png')?>" />
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('public/assets/icon/Favicon.png')?>" />
    </head>

    <body class="body dashboard1">
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
            <div id="page" class="market-page">

                <div id="market-header">
                    <div class="market-header flex items-center justify-between">
                        <div class="widget-search">
                        </div>
                        <div class="admin_active" id="header_admin">

                            <div class="popup-user relative">
                                <div class="user">
                                    <img src="<?= base_url('public/assets/images/avatar/avatar-12.png'); ?>" alt="" />
                                    <span><?= $username; ?><i class="icon-keyboard_arrow_down"></i></span>
                                </div>

                                <div class="avatar_popup2">
                                    <div class="">
                                        <div class="links">
                                            <a class="block mb-30" href="<?= base_url('dashboard/profile')?>">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.774902 18.333C0.774902 18.7932 1.14762 19.1664 1.60824 19.1664C2.06885 19.1664 2.44157 18.7932 2.44157 18.333C2.44157 15.3923 4.13448 12.7889 6.77329 11.5578C7.68653 12.1513 8.77296 12.4997 9.94076 12.4997C11.113 12.4997 12.2036 12.1489 13.119 11.5513C13.9067 11.9232 14.6368 12.4235 15.2443 13.0307C16.6611 14.4479 17.4416 16.3311 17.4416 18.333C17.4416 18.7932 17.8143 19.1664 18.2749 19.1664C18.7355 19.1664 19.1083 18.7932 19.1083 18.333C19.1083 15.8859 18.1545 13.5845 16.4227 11.8523C15.8432 11.2725 15.1698 10.7754 14.4472 10.3655C15.2757 9.3581 15.7741 8.06944 15.7741 6.66635C15.7741 3.44979 13.1569 0.833008 9.94076 0.833008C6.72461 0.833008 4.10742 3.44979 4.10742 6.66635C4.10742 8.06604 4.60379 9.35154 5.42863 10.3579C2.56796 11.9685 0.774902 14.9779 0.774902 18.333V18.333ZM9.94076 2.49968C12.2381 2.49968 14.1074 4.36898 14.1074 6.66635C14.1074 8.96371 12.2381 10.833 9.94076 10.833C7.6434 10.833 5.77409 8.96371 5.77409 6.66635C5.77409 4.36898 7.6434 2.49968 9.94076 2.49968V2.49968Z"
                                                        fill="white"
                                                    ></path>
                                                </svg>
                                                <span>My Profile</span>
                                            </a>
                                            <a class="block" href="<?= base_url('logout'); ?>" id="logout">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.9668 18.3057H2.49168C2.0332 18.3057 1.66113 17.9335 1.66113 17.4751V2.52492C1.66113 2.06644 2.03324 1.69437 2.49168 1.69437H9.9668C10.4261 1.69437 10.7973 1.32312 10.7973 0.863828C10.7973 0.404531 10.4261 0.0332031 9.9668 0.0332031H2.49168C1.11793 0.0332031 0 1.15117 0 2.52492V17.4751C0 18.8488 1.11793 19.9668 2.49168 19.9668H9.9668C10.4261 19.9668 10.7973 19.5955 10.7973 19.1362C10.7973 18.6769 10.4261 18.3057 9.9668 18.3057Z"
                                                        fill="white"
                                                    ></path>
                                                    <path
                                                        d="M19.7525 9.40904L14.7027 4.42564C14.3771 4.10337 13.8505 4.10755 13.5282 4.43396C13.206 4.76036 13.2093 5.28611 13.5366 5.60837L17.1454 9.16982H7.47508C7.01578 9.16982 6.64453 9.54107 6.64453 10.0004C6.64453 10.4597 7.01578 10.8309 7.47508 10.8309H17.1454L13.5366 14.3924C13.2093 14.7147 13.2068 15.2404 13.5282 15.5668C13.691 15.7313 13.9053 15.8143 14.1196 15.8143C14.3306 15.8143 14.5415 15.7346 14.7027 15.5751L19.7525 10.5917C19.9103 10.4356 20 10.2229 20 10.0003C20 9.77783 19.9111 9.56603 19.7525 9.40904Z"
                                                        fill="white"
                                                    ></path>
                                                </svg>
                                                <span>Log out</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="btn-canvas active">
                    <div class="canvas">
                        <span></span>
                    </div>
                </div>

                <?= $this->renderSection('user_valid'); ?>

            </div>
            <!-- /#page -->
            <?= $this->include('partials/deposit-modal.php'); ?>
        </div>
        <!-- /#wrapper -->

        <div class="tf-mouse tf-mouse-outer"></div>
        <div class="tf-mouse tf-mouse-inner"></div>

        <div class="progress-wrap active-progress">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>

        <!-- Javascript -->
        <script src="<?= base_url('')?>public/assets/js/jquery.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/popper.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/swiper-bundle.min.js"></script>
        <script src="<?= base_url('')?>public/assets/js/swiper.js"></script>
        <script src="<?= base_url('')?>public/assets/js/countto.js"></script>
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
