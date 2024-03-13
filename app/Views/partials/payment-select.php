<div data-wow-delay="0s" class="wow fadeInRight product-item traits animated" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
    <h6><i class="icon-description"></i>Pilih pembayaran</h6>
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
</div>
