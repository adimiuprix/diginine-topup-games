<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="flat-pages-title">
    <div class="bg-grid-line">
        <div class="bg-line"></div>
    </div>
    <div class="themesflat-container w1358">
    <?php include('partials/hero-section.php'); ?>
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
                                                <img src="<?= base_url('public/assets/images/box-item/' . $item['image']); ?>" alt="">
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

<div class="tf-section create-sell top-collector-wrapper">
    <div class="themesflat-container">
        <div class="col-md-12">
            <div class="heading-section justify-content-center">
                <h2 class="pb-30">
                    <div>Tentang Situs</div>
                </h2>
            </div>
        </div>
        <div class="relative text-center type-1">
            <p class="content text-center text-white">SwgGameStore adalah Platform Top Up Game Termurah di Indonesia. Penuhi Kebutuhan Gaming Mu Bersama SwgGameStore. Store Specialist Game Mobile Legends No. 1 Murah , Aman, Terpercaya Dan Legal 100% ( Open 24 Jam Non Stop ). Kini kami memberikan layanan terbaik bagi untuk memenuhi kebutuhan para sahabat gamers . Jangan lewatkan kesempatan ini dan ikuti social media dan tetap update dengan informasi terbaru, tips, trik, dan promo-promo menarik lainnya. Jadilah bagian dari komunitas gamers terbesar dan terpercaya dengan SwgGameStore! Jangan lupa follow social media kita. Dapatkan info, promo dan hadiah menarik yang akan memberikan pengalaman dan kegembiraan di setiap game yang anda mainkan. Hanya di SwgGameStore solusi untuk semua kebutuhan gaming anda!</p>
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