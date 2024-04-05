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
                        <h2 class="mr-40">Tambah Produk</h2>
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
                    <h6 class="mb-25">Isi data review</h6>
                    <form action="<?= base_url('admin/review/store')?>" method="post">

                        <div class="input-style-1">
                            <label>Nama</label>
                            <input type="text" name="username" placeholder="Masukkan nama review" required />
                        </div>
                        <div class="input-style-1">
                            <label>Nomor WA</label>
                            <input type="number" name="wanumb" placeholder="Masukkan nomor whatsapp" required />
                        </div>
                        <div class="input-style-1">
                            <label>Rating</label>
                            <input type="number" name="rating" placeholder="Atur ratting" required />
                        </div>
                        <div class="input-style-1">
                            <label>Review</label>
                            <textarea type="text" name="revcontent" placeholder="Masukkan konten review"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="main-btn primary-btn rounded-full btn-hover">
                                <i class="lni lni-heart"></i>
                                Tambahkan
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