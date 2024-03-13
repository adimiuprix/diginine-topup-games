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
                        <h2 class="mr-40">Table Produk</h2>
                        <a href="<?= base_url('admin/items/add')?>" class="main-btn primary-btn btn-hover btn-sm">
                        <i class="lni lni-plus mr-5"></i> Tambah Produk</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Nama Produk</h6>
                                        </th>
                                        <th>
                                            <h6>Code Produk</h6>
                                        </th>
                                        <th>
                                            <h6>Harga</h6>
                                        </th>
                                        <th>
                                            <h6>Item Produk</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium text-end">
                                                Aksi
                                            </h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    <?php $counter = 1; ?>
                                    <?php foreach($prodResult as $p_Res): ?>
                                    <tr>
                                        <td class="min-width">
                                            <p><?= $counter++; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $p_Res['name_product']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $p_Res['code_product']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $p_Res['price']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $p_Res['item']; ?></p>
                                        </td>
                                        <td>
                                            <div class="action justify-content-end">

                                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="lni lni-more-alt"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1" style="">
                                                    <li class="dropdown-item">
                                                        <a href="<?= base_url('admin/products/edit/' . $p_Res['id']); ?>" class="text-gray">Edit</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="<?= base_url('admin/products/delete/' . $p_Res['id']); ?>" class="text-gray">Hapus</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </td>

                                    </tr>
                                    <?php endforeach; ?>
                                    <!-- end table row -->
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>

<?= $this->endSection() ?>