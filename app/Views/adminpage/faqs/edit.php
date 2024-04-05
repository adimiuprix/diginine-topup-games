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
                        <h2 class="mr-40">Edit Faq</h2>
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
                    <h6 class="mb-25">Edit data faq</h6>

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

                    <form action="<?= base_url('admin/faqs/update/' . $faq['id'])?>" method="post">

                        <div class="input-style-1">
                            <label>question</label>
                            <input type="text" name="question" value="<?= $faq['question']; ?>" placeholder="Masukkan question" required />
                        </div>
                        <div class="input-style-1">
                            <label>Answer</label>
                            <input type="text" name="answer" value="<?= $faq['answer']; ?>" placeholder="Masukkan answer" required />
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