<?= $this->extend('adminpage/layouts/template') ?>
<?= $this->section('content') ?>

<?= $this->include('adminpage/partials/header'); ?>

<section class="table-components">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>Daftar Semua Transaksi</h2>
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
                                            <h6>Nama Pembeli</h6>
                                        </th>
                                        <th>
                                            <h6>Tujuan pengiriman</h6>
                                        </th>
                                        <th>
                                            <h6>Server ID</h6>
                                        </th>
                                        <th>
                                            <h6>Nomor Invoice</h6>
                                        </th>
                                        <th>
                                            <h6>Pelayanan</h6>
                                        </th>
                                        <th>
                                            <h6>Status Pesanan</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    <?php foreach($invoices as $inv): ?>
                                    <tr>
                                        <td class="min-width">
                                            <p>1</p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['id_buyer']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['id_player']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['server']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['hash_transaction']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['item_name']; ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $inv['order_status']; ?></p>
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