<div id="withdraw" class="tabcontent">
    <div class="wrapper-content">
        <div class="inner-content">
            <div class="themesflat-container">
                <div class="heading-section">
                    <h2 class="tf-title pb-20" style="perspective: 400px;">
                        <div style="display: block;">Penarikan</div>
                    </h2>
                </div>

                <div class="col-12">
                    <div class="widget-login">
                        <form action="<?= base_url('withdraw'); ?>" method="post" class="comment-form">

                            <fieldset class="name">
                                <label>Bank *</label>
                                <input type="text" placeholder="Nama Bank*" name="bank" />
                            </fieldset>

                            <fieldset class="name">
                                <label>Jumlah *</label>
                                <input type="number" placeholder="Masukkan jumlah*" name="amount" />
                            </fieldset>

                            <div class="btn-submit mb-30">
                                <button class="tf-button style-1 h50 w-100" type="submit">Tarik</button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-12 animated pt-5" style="visibility: visible;">
                    <div class="product-item offers">
                        <h6><i class="icon-description"></i>Daftar penarikan</h6>
                        <i class="icon-keyboard_arrow_down"></i>
                        <div class="content">
                            <div class="table-heading">
                                <div class="column">Jumlah</div>
                                <div class="column">Tx hash</div>
                                <div class="column">Status</div>
                                <div class="column">Tanggal</div>
                            </div>
                            <?php foreach($withdraws as $withdraw): ?>
                            <div class="table-item">
                                <div class="column">Rp. <?= $withdraw['amount']; ?></div>
                                <div class="column"><?= $withdraw['hash']; ?></div>
                                <div class="column"><?= $withdraw['withdraw_status']; ?></div>
                                <div class="column"><?= $withdraw['create_at']; ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>