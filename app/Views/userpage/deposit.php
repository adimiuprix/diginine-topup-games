<div id="history-deposit" class="tabcontent">
    <div class="wrapper-content">
        <div class="inner-content">
            <div class="themesflat-container">
                <div class="heading-section">
                    <h2 class="tf-title pb-20" style="perspective: 400px;">
                        <div style="display: block;">Riwayat Deposits</div>
                    </h2>
                </div>
                <div class="col-12 animated" style="visibility: visible;">
                    <div class="product-item offers">
                        <h6><i class="icon-description"></i>Riwayat</h6>
                        <i class="icon-keyboard_arrow_down"></i>
                        <div class="content">
                            <div class="table-heading">
                                <div class="column">Nomor Invoice</div>
                                <div class="column">Jumlah</div>
                                <div class="column">Metode Pembayaran</div>
                                <div class="column">Status</div>
                                <div class="column">Aksi</div>
                                <div class="column">Tanggal</div>
                            </div>
                            <?php foreach($deposits as $deposit): ?>
                            <div class="table-item">
                                <div class="column"><?= $deposit['hash_id']; ?></div>
                                <div class="column">Rp. <?= $deposit['amount']; ?></div>
                                <div class="column"><?= $deposit['method']; ?></div>
                                <div class="column"><span class="tf-color">Pending</span></div>
                                <div class="column"><a href="<?= 'https://tripay.co.id/checkout/'  . $deposit['reference'];?>" class="tf-color"><b>Bayar</b></a></div>
                                <div class="column"><?= $deposit['create_at']; ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>