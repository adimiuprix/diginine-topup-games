<!-- Modal Popup Bid -->
<div class="modal fade popup" id="topupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h2>Topup Saldo</h2>
                <p>Atur jumlah dan tentukan metode pembayaran.</p>
                <form action="<?= base_url('user-deposit'); ?>" method="post">
                    <input type="hidden" name="user" value="<?= $userData; ?>"/>
                    <fieldset class="balance">
                        <input type="number" name="amount" class="style-1" placeholder="Masukkan jumlah topup*" required />
                    </fieldset>
                    <div class="widget-category-checkbox p-5 mb-5">
                        <h5 class="name">Metode pembayaran</h5>
                        <div class="content-wg-category-checkbox">
                            <div>
                                <label>Dana
                                <input type="radio" name="method" value="DANA">
                                <span class="btn-checkbox"></span>
                                </label><br>
                                <label>QRIS
                                <input type="radio" name="method" value="QRIS">
                                <span class="btn-checkbox"></span>
                                </label><br>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="tf-button style-1 h20">Topup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>