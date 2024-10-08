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
                        <h2 class="mr-40">Tambah Item</h2>
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
                    <form action="<?= base_url('admin/items/store')?>" method="post">
                        <div class="select-style-1">
                            <label>Atur Categori</label>
                            <div class="select-position">
                                <select name="items">
                                    <option>Pilih salah satu</option>
                                    <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'];?>"><?= $category['category'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Item</label>
                            <input type="text" name="item_name" placeholder="Masukkan nama item" required />
                        </div>
                        <div class="input-style-1">
                            <label>Deskripsi</label>
                            <textarea name="description" placeholder="Atur deskripsi item" rows="5"></textarea>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Vendor</label>
                            <input type="text" name="vendor" placeholder="Masukkan nama vendor (pabrik)" required />
                        </div>
                        <div class="input-style-1">
                            <label>Tetapkan Kolom</label>
                            <input type="number" name="coloum" placeholder="Atur jumlah kolom" required />
                        </div>
                        <div class="input-style-1">
                            <label>Gambar item</label>
                            <div class="mb-3">
                            <input name="image_item" class="form-control" type="file">
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Blog Gambar</label>
                            <div class="mb-3">
                            <input name="blog_img" class="form-control" type="file">
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Gambar Breadcrumb</label>
                            <div class="mb-3">
                            <input name="breadcrumb_img" class="form-control" type="file">
                            </div>
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