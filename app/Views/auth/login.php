<?= $this->extend('layouts/template');?>
<?= $this->section('content');?>

<div class="tf-section-2 pt-60 widget-box-icon">
    <div class="themesflat-container w920">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-16">Masuk</h2>
                    <p class="pb-40">Masukkan data di bawah ini untuk masuk ke dashboard member</p>
                </div>
            </div>
            <div class="col-12">
                <div class="widget-login">
                    <form action="<?= base_url('check-user'); ?>" method="post" class="comment-form">

                        <fieldset class="name">
                            <label>Nama *</label>
                            <input type="text" placeholder="Masukkan Username atau Whatsapp anda*" name="userlogin" value="" required>
                        </fieldset>

                        <fieldset class="password">
                            <label>Password *</label>
                            <input class="password-input" type="password" placeholder="Masukkan password anda" name="password" value="" required>
                            <i class="icon-show password-addon" id="password-addon"></i>
                        </fieldset>
                        <div class="btn-submit mb-30">
                            <button class="tf-button style-1 h50 w-100" type="submit">Masuk</button>
                        </div>
                    </form>
                    <div class="no-account mb-5">Belum punya akun?  <a href="<?= base_url('register')?>" class="tf-color">daftar</a> sekarang</div>
                    <h6>Dengan mendaftar otomatis anda telah menyetujui Ketentuan Layanan kami Sudah memiliki akun? Masuk Sekarang</h6>

                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>