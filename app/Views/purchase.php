<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="col-12">
            <h3 class="heading text-center">Detail pembayaran</h3>
        </div>
    </div>
</div>
<div class="tf-section-5 tf-list-blog">
    <div class="themesflat-container">
        <div class="container flex flex-wrap">
            <div class="text-center wrap-inner col-md-12 col-12">
                <div class="widget widget-categories mb-5">
                    <ul>
                        <li>
                            <div class="cate-item"><a href="#">Invoice</a></div>
                            <div class="number">
                                <span class="tf-color"><?= $invoiceResult['hash_transaction']; ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="cate-item"><a href="#">Kategory</a></div>
                            <div class="number">
                                <span class="tf-color"><?= $invoiceResult['category']; ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="cate-item"><a href="#">Layanan</a></div>
                            <div class="number">
                                <span class="tf-color"><?= $invoiceResult['item_name']; ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="cate-item"><a href="#">Tujuan</a></div>
                            <div class="number">
                                <span class="tf-color"><?= $invoiceResult['id_player']; ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="cate-item"><a href="#">Metode pembayaran</a></div>
                            <div class="number">
                                <span class="tf-color"><?= $invoiceResult['method_name']; ?></span>
                            </div>
                        </li>
                        <li>
                            <div class="cate-item"><a href="#">Harga</a></div>
                            <div class="number">
                                <span class="tf-color">Rp <?= $invoiceResult['price']; ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-submit text-center">
                    <button class="" type="submit">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>