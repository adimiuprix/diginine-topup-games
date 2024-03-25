<?= $this->extend('adminpage/layouts/template') ?>
<?= $this->section('content') ?>

<?= $this->include('adminpage/partials/header'); ?>

<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Api Settings</h2>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h6>Api Games</h6>
                    </div>

                    <form action="<?= base_url('admin/apis/apigame'); ?>" method="post">
                        <div class="profile-info">
                            <div class="input-style-1">
                                <label>Merchant ID</label>
                                <input type="text" name="mid" placeholder="Masukkan Merchant ID" value="<?= $apiGameData['merchant_id']; ?>">
                            </div>
                            <div class="input-style-1">
                                <label>Secret Key</label>
                                <input type="text" name="key" placeholder="Masukkan Secret Key" value="<?= $apiGameData['secret_key']; ?>">
                            </div>
                            <div class="text-center">
                                <button class="main-btn primary-btn btn-hover">
                                    Intergrate
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h6>Tripay Connection</h6>
                    </div>

                    <form action="<?= base_url('admin/apis/tripay'); ?>" method="post">
                        <div class="profile-info">
                            <div class="input-style-1">
                                <label>Code Merchant</label>
                                <input type="text" name="mcode" placeholder="Masukkan Merchant Code" value="<?= $tripay['merchant_id']; ?>">
                            </div>
                            <div class="input-style-1">
                                <label>Api Key</label>
                                <input type="text" name="apikey" placeholder="Masukkan Api Key" value="<?= $tripay['api_key']; ?>">
                            </div>
                            <div class="input-style-1">
                                <label>Private Key</label>
                                <input type="text" name="privkey" placeholder="Masukkan Private Key" value="<?= $tripay['private_key']; ?>">
                            </div>
                            <div class="text-center">
                                <button class="main-btn primary-btn btn-hover">
                                    Intergrate
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>