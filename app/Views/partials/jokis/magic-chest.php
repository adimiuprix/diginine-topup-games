                <style>
                .menu-dropdown {
                    background-color: transparent;
                    padding: 10px 12px;
                    font-size: 14px;
                    font-weight: 800;
                    line-height: 19px;
                    text-transform: capitalize;
                    color: #FFF;
                    display: flex;
                    align-items: center;
                    border-radius: 12px;
                    width: 100%;
                    height: 40px;
                    overflow: hidden;
                    border: 1px solid rgba(255, 255, 255, 0.12);
                }
                select.dropdown-toggle {
                    background: transparent;
                }
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
                <label>Login via</label>
                <div class="soft-right">
                    <div class="menu-dropdown">
                        <select name="login_via" class="dropdown-toggle">
                            <option>Pilih Salah satu</option>
                            <option value="moonton">Moonton (Rekomendasi)</option>
                            <option value="vk">VK (Rekomendasi)</option>
                            <option value="tiktok">Tiktok</option>
                            <option value="facebook">Facebook</option>
                        </select>
                    </div>
                </div>

            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>User ID & Nick Name</label>
                <input type="text" placeholder="Ketikkan user id & nickname" name="uid_nickname" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Email/No. Hp/Moonton ID</label>
                <input type="text" placeholder="Ketikkan Email/No. Hp/Moonton ID" name="account_detail" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Password</label>
                <input type="text" placeholder="Ketikkan Password" name="password" required />
            </fieldset>
        </div>
        <div class="content">
            <fieldset>
                <label>Catatan Untuk Penjoki</label>
                <textarea class="style-1" name="notice" rows="4" placeholder="Ketikkan catatan untuk penjoki" tabindex="4"></textarea>
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