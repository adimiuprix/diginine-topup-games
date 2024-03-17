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
                <label>User ID</label>
                <input type="text" placeholder="Ketikkan ID kamu" name="user_id" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Server Game</label>
                <input type="text" placeholder="Ketikkan Server ID" name="server" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Nickname & Instagram</label>
                <input type="text" placeholder="Ketikkan Nickname & Instagram" name="nick_user_ig" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Contoh Komentar</label>
                <textarea class="style-1" name="comentary" rows="4" placeholder="Ketikkan contoh komentar" tabindex="4"></textarea>
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