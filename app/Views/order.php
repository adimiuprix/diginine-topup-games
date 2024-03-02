<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="themesflat-container">
            <div class="row flex flex-wrap">
                <div class="side-bar col-md-6 col-12 mb-4">
                    <div class="widget widget-related-posts">
                        <h5 class="title-widget"><?= $detailProduct['item_name']; ?></h5>
                        <div class="related-posts-item main">
                            <div class="card-media">
                                <img src="<?= base_url('public/assets/images/blog/sidebar-01.jpg'); ?>" alt="">
                            </div>
                            <h5><a href="">Deskripsi tentang <?= $detailProduct['item_name']; ?></a></h5>
                            <p><?= $detailProduct['description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <form action="<?= base_url('confirm-order'); ?>" method="post">
                        <input type="hidden" name="category" value="<?= $detailProduct['id_cats']; ?>">
                        <input type="hidden" name="service" value="<?= $detailProduct['id']; ?>">
                        <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                            <h6><i class="icon-clock"></i> Masukkan Player ID</h6>
                            <div class="content">
                                <fieldset>
                                    <input type="text" placeholder="Enter ID anda" name="player" required />
                                </fieldset>
                            </div>
                        </div>
                        <div data-wow-delay="0s" class="wow fadeInRight product-item traits animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                            <h6><i class="icon-description"></i>Pilih nominal</h6>
                            <style>
                                .radio-nominale {
                                display: none;
                                }
                            </style>
                            
                            <div class="content">
                                <?php foreach ($products as $product): ?>
                                <div class="trait-item">
                                    <label class="title"><?= $product['name_product']; ?></label>
                                    <input type="radio" class="radio-nominale" name="pricing" value="<?= $product['price']; ?>">
                                    <div class="title"><?= $product['item']; ?></div>
                                    <p>Rp. <?= $product['price']; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
    
                        </div>

                        <div data-wow-delay="0s" class="wow fadeInRight product-item traits animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                            <h6><i class="icon-description"></i>Pilih pembayaran</h6>
                            <div class="widget-category-checkbox style-1">
                                <div class="content-wg-category-checkbox">
                                    <?php foreach ($methods as $method): ?>
                                    <label>
                                        <input type="radio" name="payment" value="<?= $method['id']; ?>">
                                        <?= $method['method_name']; ?>
                                        <span class="btn-checkbox"></span>
                                    </label>
                                    <br>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                            <h6><i class="icon-clock"></i> Beli</h6>
                            <div class="content">
                                <div class="btn-submit flex gap30 justify-center">
                                    <button class="tf-button style-1 h50 w320" type="submit" data-toggle="modal" data-target="#popup_bid">
                                    Beli sekarang!<i class="icon-arrow-up-right2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mengambil semua elemen dengan kelas 'trait-item'
    const traitItems = document.querySelectorAll('.trait-item');
                            
    // Menambahkan event listener untuk setiap elemen dengan kelas 'trait-item'
    traitItems.forEach(item => {
        // Mengambil elemen input radio di dalam elemen yang diklik
        const radioInput = item.querySelector('input[type="radio"]');
    
        item.addEventListener('click', () => {
            // Menghapus kelas 'active' dari semua elemen
            traitItems.forEach(traitItem => {
                traitItem.classList.remove('active');
                traitItem.removeAttribute('selected');
    
                // Memeriksa apakah elemen input radio ditemukan
                if (radioInput) {
                    // Memilih input radio
                    radioInput.checked = true;
                }
            });
    
            // Menambahkan kelas 'active' ke elemen yang diklik
            item.classList.add('active');
    
            // Menetapkan atribut selected ke elemen yang diklik
            item.setAttribute('selected', 'selected');
        });
    });                         
</script>

<?= $this->endSection() ?>