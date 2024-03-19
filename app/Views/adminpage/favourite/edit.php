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
                    <form action="<?= base_url('admin/favourite/update/'. $favourites['id_fav'])?>" enctype="multipart/form-data" method="post">
                        <div class="select-style-1">
                            <label>Favourite</label>
                            <div class="select-position">
                                <select name="tofav">
                                    <option>Pilih salah satu</option>
                                    <?php foreach ($items as $item) : ?>
                                    <?php $selected = ($favourites['section'] == $item['id']) ? 'selected' : ''; ?>
                                    <option value="<?= $item['id'];?>" <?= $selected ?>><?= $item['item_name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-style-1">
                            <label>Gambar Populer</label>
                            <div class="mb-3">
                            <input name="popular_image" class="form-control" type="file">
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