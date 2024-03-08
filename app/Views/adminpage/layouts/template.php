<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="<?= base_url('public/assets/images/favicon.svg')?>" type="image/x-icon" />
        <title>Dashboard</title>
        <!-- ========== All CSS files linkup ========= -->
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/lineicons.css')?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/materialdesignicons.min.css')?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/fullcalendar.css')?>" />
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/fullcalendar.css')?>" />
        <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/main.css')?>" />
    </head>
    <body>
        <!-- ======== Preloader =========== -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- ======== Preloader =========== -->

        <!-- ======== sidebar-nav start =========== -->
        <aside class="sidebar-nav-wrapper">
            <div class="navbar-logo">
                <a href="<?= base_url('admin/dashboard'); ?>">
                <img src="<?= base_url('public/admin/assets/images/logo/logo.svg')?>" alt="logo" />
                </a>
            </div>

            <?= $this->include('adminpage/partials/navbar'); ?>

        </aside>
        <div class="overlay"></div>
        <!-- ======== sidebar-nav end =========== -->

        <!-- ======== main-wrapper start =========== -->
        <main class="main-wrapper">

            <?= $this->renderSection('content'); ?>

            <!-- ========== footer start =========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-last order-md-first">
                            <div class="copyright text-center text-md-start">
                                <p class="text-sm">
                                    Designed and Developed by
                                    <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                                    PlainAdmin
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-md-6">
                            <div class="terms d-flex justify-content-center justify-content-md-end">
                                <a href="#0" class="text-sm">Term & Conditions</a>
                                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </footer>
            <!-- ========== footer end =========== -->
        </main>
        <!-- ======== main-wrapper end =========== -->
        <!-- ========= All Javascript files linkup ======== -->
        <script src="<?= base_url('')?>public/admin/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/Chart.min.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/dynamic-pie-chart.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/moment.min.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/fullcalendar.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/jvectormap.min.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/world-merc.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/polyfill.js"></script>
        <script src="<?= base_url('')?>public/admin/assets/js/main.js"></script>
    </body>
</html>