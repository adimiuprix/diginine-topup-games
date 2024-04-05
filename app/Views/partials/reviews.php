<style>
    .title-revs{
        color: #FFF;
        font-size: 18px;
        font-family: "Azeret Mono";
        font-weight: 700;
        line-height: 22px;
    }
    p.text-revs-fill.text-white {
        font-size: 14px;
        line-height: 22px;
    }
    .item.art.active {
        font-size: 14px;
        line-height: 16px;
        font-family: Manrope;
        font-weight: 500;
        position: relative;
        margin-bottom: 5px;
    }
</style>

<div class="tf-section-2 featured-item style-bottom">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section pb-20">
                    <h2 class="tf-title">
                        <div>Reviews</div>
                    </h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="featured pt-10 swiper-container swiper-container-pointer-events swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper="{
                    &quot;loop&quot;:true,
                    &quot;slidesPerView&quot;: 1,
                    &quot;observer&quot;: true,
                    &quot;observeParents&quot;: true,
                    &quot;spaceBetween&quot;: 30,
                    &quot;navigation&quot;: {
                    &quot;clickable&quot;: true,
                    &quot;nextEl&quot;: &quot;.slider-next&quot;,
                    &quot;prevEl&quot;: &quot;.slider-prev&quot;
                    },
                    &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                    },
                    &quot;breakpoints&quot;: {
                    &quot;768&quot;: {
                    &quot;slidesPerView&quot;: 2,
                    &quot;spaceBetween&quot;: 30
                    },
                    &quot;1024&quot;: {
                    &quot;slidesPerView&quot;: 3,
                    &quot;spaceBetween&quot;: 30
                    },
                    &quot;1300&quot;: {
                    &quot;slidesPerView&quot;: 4,
                    &quot;spaceBetween&quot;: 30
                    }
                    }
                    }">

                    <div class="swiper-wrapper" style="transform: translate3d(-285px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;" id="swiper-wrapper-7ab66c734913475b" aria-live="polite">
                        <?php foreach($reviews as $revs => $key): ?>
                        <div class="swiper-slide" style="width: 255px; margin-right: 30px;" role="group">
                            <article class="tf-card-article tf-blog-detail style-1">
                                <div class="inner-content">
                                    <div class="title-revs mb-3"><?= $key['name']; ?></div>
                                    <p class="text-revs-fill text-white"><?= $key['review']; ?></p>
                                    <span class="time"><?= $key['time_comment']; ?></span>
                                </div>
                            </article>
                            <div class="text-center">
                                <div class="item art active"><?= $key['number_wa']; ?></div>
                                <form>
                                    <label>
                                        <i class="icon-star active"></i><i class="icon-star active"></i><i class="icon-star active"></i><i class="icon-star active"></i><i class="icon-star active"></i>
                                    </label>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="slider-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true" aria-controls="swiper-wrapper-7ab66c734913475b"></div>
                    <div class="slider-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false" aria-controls="swiper-wrapper-7ab66c734913475b"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</div>