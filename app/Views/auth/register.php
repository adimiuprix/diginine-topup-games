<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('layouts/template');?>
<?= $this->section('content');?>

<div class="tf-section-2 pt-60 widget-box-icon">
    <div class="themesflat-container w920">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-16">Pendaftaran</h2>
                    <p class="pb-40">Masukkan data di bawah ini untuk  menjadi member</p>
                </div>
            </div>
            <div class="col-12">
                <div class="widget-login">
                    <form action="<?= base_url('save-user')?>" method="post" class="comment-form">
                        <?= csrf_field(); ?>
                        <fieldset class="name">
                            <label>Username *</label>
                            <input type="text" id="name" placeholder="Masukkan nama anda*" name="username" value="" required>
                        </fieldset>

                        <fieldset class="name">
                            <label>Email *</label>
                            <input type="text" placeholder="Masukkan email anda*" name="email" value="" required>
                        </fieldset>


                        <fieldset class="email">
                            <label>Nomor Whatsapp *</label>
                            <input type="text" placeholder="089xxxxxxxx" name="whatsapp" value="" required>
                        </fieldset>

                        <fieldset class="password">
                            <label>Password *</label>
                            <input class="password-input" type="password" name="password" value="" id="password" placeholder="Min. 8 character"  required>
                            <i class="icon-show password-addon" id="password-addon"></i>
                        </fieldset>
                        <script>
                            const passwordField = document.querySelector('.password-input');
                            const passwordAddon = document.getElementById('password-addon');

                            passwordAddon.addEventListener('click', function() {
                                if (passwordField.type === 'password') {
                                    passwordField.type = 'text';
                                } else {
                                    passwordField.type = 'password';
                                }
                            });
                        </script>
                        <div class="btn-submit mb-30">
                            <button class="tf-button style-1 h50 w-100" type="submit">Daftar</button>
                        </div>

                    </form>
                    <div class="no-account mb-5">Sudah punya akun?  <a href="<?= base_url('login')?>" class="tf-color">masuk</a> sekarang</div>
                    <h6>Dengan mendaftar otomatis anda telah menyetujui Ketentuan Layanan kami Sudah memiliki akun? Masuk Sekarang</h6>

                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>