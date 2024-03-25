<div id="history-trx" class="tabcontent">
<div class="wrapper-content">
        <div class="inner-content">
            <div class="themesflat-container">
                <div class="heading-section">
                    <h2 class="tf-title pb-20" style="perspective: 400px;">
                        <div style="display: block;">Riwayat Transaksi</div>
                    </h2>
                </div>
                <div class="col-12 animated" style="visibility: visible;">
                    <div class="product-item offers">
                        <h6><i class="icon-description"></i>Riwayat</h6>
                        <i class="icon-keyboard_arrow_down"></i>
                        <div class="content">
                            <div class="table-heading">
                                <div class="column">Nomor Invoice</div>
                                <div class="column">Nama Item</div>
                                <div class="column">Inputan/ID</div>
                                <div class="column">Harga</div>
                                <div class="column">Tanggal</div>
                            </div>
                            <?php foreach($transactions as $trx): ?>
                            <div class="table-item">
                                <div class="column"><?= $trx['hash_transaction'];?></div>
                                <div class="column"><?= $trx['item_name'];?></div>
                                <div class="column"><?= $trx['id_player'];?></div>
                                <div class="column">Rp. <?= $trx['price'];?></div>
                                <div class="column"><?= $trx['create_at'];?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>