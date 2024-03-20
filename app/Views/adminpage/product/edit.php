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
                        <h2 class="mr-40">Edit Produk</h2>
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
                    <h6 class="mb-25">Edit data</h6>

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

                    <form action="<?= base_url('admin/products/update/' . $id); ?>" method="post">
                        <div class="select-style-1">
                            <label>Atur Item</label>
                            <div class="select-position">

                                <select name="catitem">
                                    <option>Pilih salah satu</option>
                                    <?php foreach ($items as $item) : ?>
                                    <?php $selected = ($prodDetail['id_item'] == $item['id']) ? 'selected' : ''; ?>
                                    <option value="<?= $item['id']; ?>" <?= $selected ?>><?= $item['item_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Produk</label>
                            <input type="text" name="product" value="<?= $prodDetail['name_product'];?>" placeholder="Masukkan nama produk" required />
                        </div>
                        <div class="input-style-1">
                            <label>Kode Produk</label>
                            <input type="text" name="code" value="<?= $prodDetail['code_product'];?>" placeholder="Masukkan kode produk" required />
                        </div>
                        <div class="input-style-1">
                            <label>Tetapkan Harga</label>
                            <input type="number" name="price" value="<?= $prodDetail['price'];?>" placeholder="Atur harganya" required />
                        </div>
                        <div class="input-style-1">
                            <label>Item</label>
                            <input type="text" name="item" value="<?= $prodDetail['item'];?>" placeholder="Nama item pembelian" required />
                        </div>
                        <div class="text-center">
                            <button class="main-btn primary-btn rounded-full btn-hover">
                                <i class="lni lni-heart"></i>
                                Update
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