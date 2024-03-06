<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="tf-section-2 pt-60 widget-box-icon">
    <div class="themesflat-container w920">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-16">Kalkulator Win Rate</h2>
                    <p class="pb-40">Digunakan untuk menghitung total jumlah pertandingan yang harus diambil untuk mencapai target tingkat kemenangan yang diinginkan.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="widget-login">
                    <form action="<?= base_url('check-winrate'); ?>" method="post" class="comment-form">

                        <fieldset class="name">
                            <label>Total Pertandingan Kamu Saat Ini</label>
                            <input type="number" placeholder="Contoh: 310" name="tot_match" value="">
                            <?php if (session()->has('match')) : ?>
                            <p class="text-danger"><?php echo session('match'); ?></p>
                            <?php endif; ?>
                        </fieldset>

                        <fieldset class="password">
                            <label>Total Win Rate Kamu Saat Ini</label>
                            <input type="number" placeholder="Contoh: 62" name="tot_wr" value="">
                            <?php if (session()->has('wr_now')) : ?>
                            <p class="text-danger"><?php echo session('wr_now'); ?></p>
                            <?php endif; ?>

                        </fieldset>

                        <fieldset class="password">
                            <label>Win Rate Total yang Kamu Inginkan</label>
                            <input type="number" placeholder="Contoh: 75" name="req_wr" value="">
                            <?php if (session()->has('req_wr')) : ?>
                            <p class="text-danger"><?php echo session('req_wr'); ?></p>
                            <?php endif; ?>

                        </fieldset>

                        <div class="btn-submit mb-30">
                            <button class="tf-button style-1 h50 w-100" type="submit">Check</button>
                        </div>
                    </form>

                    <?php if (session()->has('data')) : ?>
                    <div class="wow fadeInUp col-lg-12 col-md-6 mb-10 animated">
                        <div class="tf-author-box style-2 type-1">
                            <div class="author-infor ">
                                <h5><?php echo session('data'); ?></h5>
                            </div>
                        </div>  	
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>