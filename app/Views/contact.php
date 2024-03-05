<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading text-center">Get In Touch</h1>
            </div>
        </div>
    </div>
</div>
<div class="tf-section-2 widget-box-icon">
    <div class="themesflat-container">

        <div class="col-12">
            <form id="commentform" class="comment-form">
                <div class="flex gap30">
                    <fieldset class="name">
                        <input class="style-1" type="text" placeholder="Your name*" name="name" required />
                    </fieldset>
                    <fieldset class="email">
                        <input class="style-1" type="email" placeholder="Email address*" name="email" required />
                    </fieldset>
                    <fieldset class="subject">
                        <input class="style-1" type="text" placeholder="Subject" name="subject" required >
                    </fieldset>
                </div>
                <fieldset class="message">
                    <textarea class="style-1" name="message" rows="4" placeholder="Your message*" required></textarea>
                </fieldset>
                <div class="btn-submit">
                    <button class="tf-button style-1" type="submit">Send message <i class="icon-arrow-up-right2"></i></button>
                </div>
            </form>
        </div>

    </div>

</div>
<?= $this->endSection() ?>