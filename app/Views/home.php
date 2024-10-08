<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="flat-pages-title">
    <div class="bg-grid-line">
        <div class="bg-line"></div>
    </div>
    <div class="themesflat-container w1358">
    <?= $this->include('partials/hero-section.php'); ?>
    </div>
</div>

<?php include('partials/favourite.php'); ?>

<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading text-center">Produk kami</h1>
            </div>
            <div class="col-12">
                <div class="widget-tabs relative">
                    <ul class="widget-menu-tab">
                        <?php foreach ($dataItems as $category => $items): ?>
                        <li class="item-title" id="navtab">
                            <span class="inner"><?= $category ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="container widget-content-tab pt-10">
                        <?php foreach ($dataItems as $category => $items): ?>
                        <div class="widget-content-inner" id="item-list">
                            <style>
                            @media (max-width: 768px) {
                                .col-sm-3 {
                                    width: 50%;
                                }
                            }
                            </style>
                            <div class="row">
                                <?php foreach ($items as $item): ?>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                                    <div class="tf-card-box style-1">
                                        <div class="card-media">
                                            <a href="<?= base_url('order/' . $item['category'] . '/' . $item['slug']) ?>">
                                                <img src="<?= base_url('public/uploads/items/' . $item['image']); ?>" alt="">
                                            </a>
                                            <span class="wishlist-button icon-heart"></span>
                                            <div class="button-place-bid">
                                                <a href="<?= base_url('order/' . $item['category'] . '/' . $item['slug']) ?>" class="tf-button"><span>Beli</span></a>
                                            </div>
                                        </div>
                                        <h5 class="name tf-font-name text-center"><a href="<?= base_url('order/' . $item['category'] . '/' . $item['slug']) ?>"><?= $item['name'] ?></a></h5>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Memilih elemen pertama dengan kelas "item-title"
    const navBarElement = document.getElementById('navtab');
    // Menambahkan kelas "active" ke elemen pertama
    navBarElement.classList.add('active');
    // Memilih elemen pertama dengan kelas "item-title"
    const itemList = document.getElementById('item-list');
    // Menambahkan kelas "active" ke elemen pertama
    itemList.classList.add('active');
</script>
<?= $this->endSection() ?>