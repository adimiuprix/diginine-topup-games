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
                    <form action="<?= base_url('admin/transactions/update/' . $invoiceData['id_invoice'])?>" method="post">

                        <div class="input-style-1">
                            <label>Nama Pembeli</label>
                            <input type="text" name="item_name" value="<?= $invoiceData['username']; ?>" readonly />
                        </div>

                        <div class="input-style-1">
                            <label>Jenis Kategori</label>
                            <input type="text" name="item_name" value="<?= $invoiceData['category']; ?>" readonly />
                        </div>

                        <div class="input-style-1">
                            <label>Nama Layanan</label>
                            <input type="text" name="item_name" value="<?= $invoiceData['name_product'] . " " .$invoiceData['item']; ?>" readonly />
                        </div>

                        <div class="input-style-1">
                            <label>Metode Pembayaran</label>
                            <input type="text" name="item_name" value="<?= $invoiceData['methods_pay']; ?>" readonly />
                        </div>

                        <div class="input-style-1">
                            <label>Harga</label>
                            <input type="text" name="item_name" value="<?= $invoiceData['price']; ?>" readonly />
                        </div>

                        <div class="select-style-1">
                            <label>Status</label>
                            <div class="select-position">
                                <select name="status">
                                    <option>Pilih salah satu</option>
                                    <option value="pending">Pending</option>
                                    <option value="success">Berhasil</option>
                                    <option value="failed">Gagal</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="main-btn primary-btn rounded-full btn-hover">
                                <i class="lni lni-heart"></i>
                                Ubah Status
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