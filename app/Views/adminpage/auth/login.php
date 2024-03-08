<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="<?= base_url('')?>public/admin/assets/images/favicon.svg" type="image/x-icon" />
        <title>Sign In | PlainAdmin Demo</title>
        <!-- ========== All CSS files linkup ========= -->
        <link rel="stylesheet" href="<?= base_url('')?>public/admin/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url('')?>public/admin/assets/css/lineicons.css" />
        <link rel="stylesheet" href="<?= base_url('')?>public/admin/assets/css/materialdesignicons.min.css" />
        <link rel="stylesheet" href="<?= base_url('')?>public/admin/assets/css/fullcalendar.css" />
        <link rel="stylesheet" href="<?= base_url('')?>public/admin/assets/css/main.css" />
        <style>
            .area-auth {
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            min-height: 100vh;
            padding-bottom: 85px;
            position: relative;
            }
        </style>
    </head>
    <body>
        <!-- ======== Preloader =========== -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- ======== Preloader =========== -->
        <!-- ======== main-wrapper start =========== -->
        <main class="area-auth">
            <!-- ========== signin-section start ========== -->
            <section class="signin-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="auth-cover-wrapper bg-primary-100">
                                <div class="auth-cover">
                                    <div class="title text-center">
                                        <h1 class="text-primary mb-10">Welcome Back</h1>
                                        <p class="text-medium">
                                            Sign in to your Existing account to continue
                                        </p>
                                    </div>
                                    <div class="cover-image">
                                        <img src="<?= base_url('')?>public/admin/assets/images/auth/signin-image.svg" alt="" />
                                    </div>
                                    <div class="shape-image">
                                        <img src="<?= base_url('')?>public/admin/assets/images/auth/shape.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="signin-wrapper">
                                <div class="form-wrapper">
                                    <h6 class="mb-15">Masuk ke halaman admin</h6>
                                                                        
                                    <?php if(session()->getFlashdata('error')): ?>
                                    <div class="alert-box danger-alert">
                                        <div class="alert">
                                            <h4 class="alert-heading">Terjadi kesalahan!.</h4>
                                            <p class="text-medium">
                                            <?= session()->getFlashdata('error') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <form action="<?= base_url('admin/admincheck'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-style-1">
                                                    <label>Email</label>
                                                    <input type="email" name="email" placeholder="Masukkan Email" require/>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-12">
                                                <div class="input-style-1">
                                                    <label>Password</label>
                                                    <input type="password" name="password" placeholder="Masukkan Password" require/>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <!-- end col -->
                                            <div class="col-12">
                                                <div class="button-group d-flex justify-content-center flex-wrap">
                                                    <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                                    Masuk
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </section>
            <!-- ========== signin-section end ========== -->
            <!-- ========== footer start =========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-last order-md-first">
                            <div class="copyright text-center text-md-start">
                                <p class="text-sm">
                                    Designed and Developed by PlainAdmin
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