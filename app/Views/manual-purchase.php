<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="flat-title-page">
    <div class="themesflat-container">

    <div class="col-12 mb-4">
        <h1 class="heading text-center">
            Ikuti petunjuk
            <span class="tf-color">
                <span>pembayaran</span>
            </span>
        </h1>
    </div>

</div>

<style>
    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        -moz-border-radius: 4px;
        border-radius: 4px;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    }
    .instructure-way {
        font-family: 'Ubuntu', sans-serif;
        letter-spacing: -1px;
        text-shadow: 0 0 2px #ccc;
        font-size: 18px;
        font-weight: 700;
    }
    .details-item span {
        font-family: 'Azeret Mono';
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
    }
    .details-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }
    .price.gem {
        font-family: 'Azeret Mono';
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
    }
</style>

<div class="tf-section-2 widget-term-condition">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="content-tab po-sticky-footer">
                    <div class="content-inner">
                        <h5 class="title-widget">Detail Pembayaran</h5>
                        <div class="well">
                            <div class="content">
    
                                <div class="details-item">
                                    <span>Invoice</span>
                                    <span class="tf-color">60SEQBKBHK4TIDH</span>
                                </div>

                                <div class="details-item">
                                    <span>Berita</span>
                                    <span class="tf-color">Pembayaran [NAMA_PRODUK]</span>
                                </div>

                                <div class="details-item">
                                    <span>Total tagihan</span>
                                    <span class="tf-color">Rp. 500.000</span>
                                </div>

                                <div class="details-item">
                                    <span>Status</span>
                                    <span class="tf-color">Pending</span>
                                </div>

                                <div class="details-item">
                                    <span>Data Bank:</span>
                                </div>
                                <div class="price gem">BCA Neraka</div>
                                <div class="price gem">No. Rek. 1234567890</div>
                                <div class="price gem">a/n Adimiuprix</div>
    
                            </div>
                            <p class="tf-color">Ketikkan berita di atas pada saat Anda melakukan pembayaran melalui ATM Non-Tunai, setoran Bank, atau Internet Banking.</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 col-12">
                <div class="content-tab po-sticky-footer">
                    <div class="content-inner">
                        <h5 class="title-widget">Jangan lupa konfirmasi</h5>

                        <div class="well">
                            <div class="content">
                                
                                <p class="tf-color">Segera lakukan konfirmasi setelah Anda melakukan pembayaran.</p>
                            
                                <div class="content">
                                    <p>Kirimkan Whatsapp ke nomor <a href="https://wa.me/+6287820800007" target="_blank">087820800007</a> dengan format berikut: 
                                        <strong class="tf-color">BAYAR</strong>&lt;spasi&gt;<strong class="tf-color">INVOICE</strong>&lt;spasi&gt;<strong class="tf-color">BANK</strong>&lt;spasi&gt;<strong class="tf-color">NAMA PENGIRIM</strong>
                                    </p><br/>
                                    <p>Contoh: BAYAR 60SEQBKBHK4TIDH BCA AMRY</p>
                                    <p>Klik <a href="https://wa.me/+6287820800007">di sini</a> untuk melakukan konfirmasi.</p>
                                    <p>Pembayaran yang tidak dikonfirmasikan tidak akan diproses!</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>


<?= $this->endSection() ?>