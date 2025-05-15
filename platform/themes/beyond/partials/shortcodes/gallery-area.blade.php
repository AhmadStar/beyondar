<!-- gallery area start -->
<div class="tp-gallery-area fix p-relative">
    <div class="tp-gallery-shape-1">
        <img class="img-1" src="/themes/beyond/img/home-03/gallery/gal-shape-1.png" alt="">
        <img class="img-2" src="/themes/beyond/img/home-03/gallery/gal-shape-dark-1.png" alt="">
    </div>
    <div class="tp-gallery-shape-2">
        <img class="img-1" src="/themes/beyond/img/home-03/gallery/gal-shape-2.png" alt="">
        <img class="img-2" src="/themes/beyond/img/home-03/gallery/gal-shape-dark-2.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-gallery-slider-wrap">
                    <div class="swiper-container tp-gallery-slider-active">
                        <div class="swiper-wrapper tp-gallery-titming">
                            @for($i=1;$i<7;$i++)
                            <div class="swiper-slide">
                                <div class="tp-gallery-item">
                                    <img src="{{ RvMedia::getImageUrl($shortcode->{'logo'.$i}) }}" alt="">
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery area end -->
