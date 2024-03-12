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
                    <h6 class="mb-25">Isi data dengan lengkap</h6>
                    <form action="<?= base_url('admin/products/store')?>" method="post">
                        <div class="select-style-1">
                            <label>Atur Item</label>
                            <div class="select-position">

                                <select name="catitem">
                                    <option>Pilih salah satu</option>
                                    <?php foreach ($items as $item) : ?>
                                    <option value="<?= $item['id']; ?>"><?= $item['item_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Produk</label>
                            <input type="text" name="product" placeholder="Masukkan nama produk" required />
                        </div>
                        <div class="input-style-1">
                            <label>Kode Produk</label>
                            <input type="text" name="code" placeholder="Masukkan kode produk" required />
                        </div>
                        <div class="input-style-1">
                            <label>Tetapkan Harga</label>
                            <input type="number" name="price" placeholder="Atur harganya" required />
                        </div>
                        <div class="input-style-1">
                            <label>Item</label>
                            <input type="text" name="item" placeholder="Nama item pembelian" required />
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