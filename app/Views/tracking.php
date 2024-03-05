<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="tf-section-2 pt-60 widget-box-icon">
    <div class="themesflat-container w920">
        <div class="row">

            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-16" style="perspective: 400px;">
                        <div style="display: block; text-align: center; position: relative; transform-origin: 460px 27.5px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Cek pesanan</div>
                    </h2>
                    <p class="pb-40">Masukkan code invoice di form untuk melacak pesanan.</p>
                </div>
            </div>

            <div class="col-12">
                <div class="widget-login">
                    <form action="<?= base_url('tracking-invoice'); ?>" class="comment-form" method="post">
                        <fieldset class="email">
                            <label>Code Invoice *</label>
                            <input type="text" placeholder="Masukkan code invoice disini." name="invoice" required>
                        </fieldset>
                        <div class="btn-submit mb-30 text-center">
                            <button class="tf-button style-1 h50 w-50" type="submit">Lacak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>