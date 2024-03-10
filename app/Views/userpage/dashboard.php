<style>
    .box-user-item {
    border-radius: 30px;
    background: #232323;
    padding: 30px;
    text-align: left;
    }
    .text-bid {
    color: #e2fe26;
    font-size: 12px;
    font-family: 'Azeret Mono';
    font-weight: 400;
    line-height: 19px;
    }
    .tf-button {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    border: none;
    color: #161616;
    background-color: #DEE8E8;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 800;
    width: 116px;
    height: 42px;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    }
    .box-wallet p {
        font-family: 'Azeret Mono';
        font-size: 18px;
    }
    .item-stat{
        color: #fff;
        font-size: 18px;
    }
</style>
<div id="dashboard" class="tabcontent active">
    <div class="wrapper-content">
        <div class="inner-content">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="box-user-item">
                        <h5 class="name mb-3"><?= $username; ?></h5>
                        <div class="title">
                            <div class="divider"></div>
                            <div class="flex items-center justify-between pt-4">
                                <span class="text-bid">Nomor Whatsapp</span>
                                <h6 class="price gem"><?= $wa_number[0]['whatsapp_number'];?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="box-user-item">
                        <h5 class="name mb-3">Saldo anda</h5>
                        <div class="title">
                            <div class="divider"></div>
                            <div class="flex items-center justify-between pt-4">
                                <span class="text-bid">Saldo saat ini</span>
                                <h6 class="price gem">Rp. 400.000</h6>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="#" data-toggle="modal" data-target="#topupModal" class="tf-button"><span>Top up</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="heading-section">
                <h2 class="title-post mb-3">Jumlah Transaksi Hari Ini</h2>
            </div>

            <div id="connect-wallet-grid">
                <div class="wrap-box-card">

                    <div class="col-item col-lg-2 col-md-2 col-sm-12">
                        <div class="box-wallet">
                            <h6><a href="#">Total</a></h6>
                            <p class="item-stats text-white">0</p>
                        </div>
                    </div>
                    <div class="col-item col-lg-2 col-md-2 col-sm-12">
                        <div class="box-wallet">
                            <h6><a href="#">Diproses</a></h6>
                            <p class="item-stats text-white">0</p>
                        </div>
                    </div>
                    <div class="col-item col-lg-2 col-md-2 col-sm-12">
                        <div class="box-wallet">
                            <h6><a href="#">Berhasil</a></h6>
                            <p class="item-stats text-white">0</p>
                        </div>
                    </div>
                    <div class="col-item col-lg-2 col-md-2 col-sm-12">
                        <div class="box-wallet">
                            <h6><a href="#">Gagal</a></h6>
                            <p class="item-stats text-white">0</p>
                        </div>
                    </div>
                    <div class="col-item col-lg-2 col-md-2 col-sm-12">
                        <div class="box-wallet">
                            <h6><a href="#">Batal</a></h6>
                            <p class="item-stats text-white">0</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="heading-section">
                <h2 class="title-post mb-5">Riwayat Transaksi Terbaru Hari Ini</h2>
            </div>

            <div class="product-item" style="visibility: visible;">
                <h6><i class="icon-description"></i>Offers</h6>
                <i class="icon-keyboard_arrow_down"></i>
                <div class="content">
                    <div class="table-heading">
                        <div class="column">Nomor Invoice</div>
                        <div class="column">Item</div>
                        <div class="column">Inputan/ID</div>
                        <div class="column">Harga</div>
                        <div class="column">Status</div>
                    </div>

                    <?php foreach($invoices as $invoice):?>
                    <div class="table-item">
                        <div class="column"><?= $invoice['hash_transaction'];?></div>
                        <div class="column"><?= $invoice['item_name'];?></div>
                        <div class="column"><?= $invoice['id_player'];?></div>
                        <div class="column"><?= $invoice['price'];?></div>
                        <div class="column"><span class="tf-color"><?= $invoice['order_status'];?></span></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>