<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="page-title faqs">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 data-wow-delay="0s" class="wow fadeInUp heading text-center">Pertanyaan yang Sering Diajukan</h1>
                <p data-wow-delay="0.1s" class="wow fadeInUp ">Jawaban cepat atas pertanyaan yang mungkin Anda miliki.</p>
            </div>
        </div>
    </div>
</div>

<div class="tf-section-2 wrap-accordion">
    <div class="themesflat-container w730">
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="flat-accordion2">
                    <?php foreach($faqsSection as $faqss): ?>
                    <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                        <h6 class="toggle-title"><?= $faqss->question;?></h6>
                        <div class="toggle-content">
                            <p><?= $faqss->answer;?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>