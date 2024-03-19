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
                    <form action="<?= base_url('admin/items/update/' . $items['id'])?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="select-style-1">
                            <label>Atur Categori</label>
                            <div class="select-position">
                                <select name="items">
                                    <option>Pilih salah satu</option>
                                    <?php foreach ($categories as $category) : ?>
                                    <?php $selected = ($items['id_cats'] == $category['id']) ? 'selected' : ''; ?>
                                    <option value="<?= $category['id'];?>" <?= $selected ?>><?= $category['category'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Item</label>
                            <input type="text" name="item_name" placeholder="Masukkan nama item" value="<?= $items['item_name']; ?>" required />
                        </div>
                        <div class="input-style-1">
                            <label>Deskripsi</label>
                            <textarea name="description" placeholder="Atur deskripsi item" rows="5"><?= $items['description']; ?></textarea>
                        </div>
                        <div class="input-style-1">
                            <label>Nama Vendor</label>
                            <input type="text" name="vendor" value="<?= $items['vendor']; ?>" placeholder="Masukkan nama vendor (pabrik)" required />
                        </div>
                        <div class="input-style-1">
                            <label>Tetapkan Kolom</label>
                            <input type="number" name="coloum" value="<?= $items['coloum']; ?>" placeholder="Atur jumlah kolom" required />
                        </div>
                        <div class="input-style-1">
                            <label>Gambar item</label>
                            <div class="mb-3">
                            <input name="image_item" type="file" value="<?= $items['image']; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Blog Gambar</label>
                            <div class="mb-3">
                            <input name="blog_img" type="file" value="<?= $items['blog_image']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Gambar Breadcrumb</label>
                            <div class="mb-3">
                            <input name="breadcrumb_img" type="file" value="<?= $items['breadcrumb']; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="select-style-1">
                            <label>Enable/Disable</label>
                            <div class="select-position">
                                <select name="status">
                                    <option>Pilih salah satu</option>
                                    <option value="enable">Enable</option>
                                    <option value="disable">Disable</option>
                                </select>
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