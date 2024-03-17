<style>
    textarea.style-1, input.style-1 {
        background-color: #161616 !important;
    }
</style>
<form action="<?= base_url('confirm-order'); ?>" method="post">
    <input type="hidden" name="category" value="<?= $detailProduct['id_cats']; ?>">
    <input type="hidden" name="service" value="<?= $detailProduct['id']; ?>">

    <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
        <h6><i class="icon-clock"></i> Masukkan Data Akun Kamu</h6>

        <div class="content">
            <fieldset>
                <label>User ID & Nick Name</label>
                <input type="text" placeholder="Ketikkan User ID & Nick Name" name="uid_nickname" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Nama Skin/Item/Kharisma</label>
                <input type="text" placeholder="Ketikkan Nama Skin/Item/Kharisma" name="gift_skin" required />
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
                <input type="hidden" name="skucode" value="<?= $product['code_product']; ?>">
                <input type="radio" class="radio-nominale" name="pricing" value="<?= $product['price']; ?>">
                <div class="title"><?= $product['item']; ?></div>
                <p>Rp. <?= $product['price']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?= $this->include('partials/payment-select.php'); ?>
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