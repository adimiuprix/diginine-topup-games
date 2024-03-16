<form action="<?= base_url('confirm-order'); ?>" method="post">
                            <input type="hidden" name="category" value="<?= $detailProduct['id_cats']; ?>">
                            <input type="hidden" name="service" value="<?= $detailProduct['id']; ?>">
                            <input type="hidden" name="forgame" value="<?= $detailProduct['code_game']; ?>">
                            <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                <h6><i class="icon-clock"></i> Masukkan Player ID</h6>

                                <?php if($detailProduct['coloum'] == 1): ?>
                                <div class="content">
                                    <fieldset>
                                        <input type="text" placeholder="Enter ID anda" name="player" required />
                                    </fieldset>
                                </div>

                                <?php else: ?>

                                <div class="content">
                                    <fieldset>
                                        <input type="text" placeholder="Enter ID anda" name="player" required />
                                    </fieldset>
                                </div>
                                <div class="content">
                                    <fieldset>
                                        <input type="text" placeholder="Enter Server ID" name="server" required />
                                    </fieldset>
                                </div>

                                <?php endif; ?>

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
