<div data-wow-delay="0s" class="wow fadeInRight product-item traits animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
    <h6><i class="icon-description"></i>Pilih pembayaran</h6>

    <?php if($detailProduct['item_name'] == 'Mobile Legends'): ?>
    <div class="widget-category-checkbox style-1">
        <div class="content-wg-category-checkbox">
            <label>
                <input type="radio" name="payment" value="7">
                Manual
                <span class="btn-checkbox"></span>
            </label>
        </div>
    </div>
    <?php else: ?>
    <div class="widget-category-checkbox style-1">
        <div class="content-wg-category-checkbox">
            <?php foreach ($methods as $method): ?>
            <label>
                <input type="radio" name="payment" value="<?= $method['id']; ?>">
                <?= $method['method_name']; ?>
                <span class="btn-checkbox"></span>
            </label>
            <br>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

</div>
