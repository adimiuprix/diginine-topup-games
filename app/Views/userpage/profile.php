<?= $this->extend('layouts/isuser'); ?>
<?= $this->section('user_valid') ?>

<div class="flat-tabs">

    <?= $this->include('partials/user-profile-menu'); ?>

	<div class="content-tabs">

        <div class="tf-section-2 pt-60 widget-box-icon">
            <div class="themesflat-container w920">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-section-1">
                            <h2 class="tf-title pb-16">Ubah data</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="widget-login">
                            <form action="<?= base_url('change-profile')?>" method="post" class="comment-form">
                                <?= csrf_field(); ?>
                                <fieldset class="name">
                                    <label>Username *</label>
                                    <input type="text" id="chname" placeholder="Masukkan username anda*" name="username" value="<?= $profile['username']; ?>" readonly>
                                </fieldset>

                                <fieldset class="name">
                                    <label>Email *</label>
                                    <input type="text" placeholder="Masukkan email anda*" name="chemail" value="<?= $profile['email']; ?>" required>
                                </fieldset>

                                <fieldset class="email">
                                    <label>Nomor Whatsapp *</label>
                                    <input type="text" placeholder="089xxxxxxxx" name="chwhatsapp" value="<?= $profile['whatsapp_number']; ?>" required>
                                </fieldset>

                                <fieldset class="password">
                                    <label>Password baru*</label>
                                    <input class="password-input" type="password" name="chpassword" id="password" placeholder="Masukkan password baru" />
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
                                    <button class="tf-button style-1 h50 w-100" type="submit">Simpan</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


	</div>
</div>

<?= $this->endSection() ?>