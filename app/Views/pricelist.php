<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading text-center">Daftar Harga</h1>
            </div>
        </div>
        <div class="product-item offers mt-3">
            <div class="content">
                <div class="table-heading text-center">
                    <div class="column">Nama produk</div>
                    <div class="column">Harga</div>
                    <div class="column">Kode Produk</div>
                </div>
                <?php foreach ($prices as $price): ?>
                <div class="table-item">
                    <div class="column"><?= $price['name_product'] . " " . $price['item']; ?></div>
                    <div class="column text-center">Rp. <?= $price['price']; ?></div>
                    <div class="column text-center"><?= $price['code_product']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>