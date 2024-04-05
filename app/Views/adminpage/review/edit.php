<?= $this->extend('adminpage/layouts/template') ?>
<?= $this->section('content') ?>

<?= $this->include('adminpage/partials/header'); ?>

<section class="table-components">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Edit Item</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper">
            <!-- end row -->
            <!-- end row -->
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <h6 class="mb-25">Edit item</h6>

                    <div class="alert-box danger-alert pl-100">
                        <div class="left">
                            <h5 class="text-bold">Awas!</h5>
                        </div>
                        <div class="alert">
                            <h4 class="alert-heading">Perhatian</h4>
                            <p class="text-medium">
                                Pada form berikut, edit hanya jika anda paham resikonya.
                            </p>
                        </div>
                    </div>

                    <form action="<?= base_url('admin/review/update/' . $review['id_revs'])?>" method="post">

                    <div class="input-style-1">
                            <label>Nama</label>
                            <input type="text" name="username" value="<?= $review['name']; ?>" placeholder="Masukkan nama review" required />
                        </div>
                        <div class="input-style-1">
                            <label>Nomor WA</label>
                            <input type="number" name="wanumb" value="<?= $review['number_wa']; ?>" placeholder="Masukkan nomor whatsapp" required />
                        </div>
                        <div class="input-style-1">
                            <label>Rating</label>
                            <input type="number" name="rating" value="<?= $review['rating']; ?>" placeholder="Atur ratting" required />
                        </div>
                        <div class="input-style-1">
                            <label>Review</label>
                            <textarea type="text" name="revcontent" placeholder="Masukkan konten review"><?= $review['review']; ?></textarea>
                        </div>
                        <div class="text-center">
                            <button class="main-btn primary-btn rounded-full btn-hover">
                                <i class="lni lni-heart"></i>
                                Ubah
                            </button>
                        </div>

                    </form>
                    <!-- end input -->
                </div>
                <!-- end card -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>

<?= $this->endSection() ?>