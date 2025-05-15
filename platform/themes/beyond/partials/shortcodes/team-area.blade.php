
<!-- team area start -->
<div class="tp-team-area pb-120 fix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-team-slider-wrapper">
                    <div class="swiper-container tp-team-slider-active">
                        <div class="swiper-wrapper">
                            @for($i=1;$i<=$shortcode->total;$i++)
                            <div class="swiper-slide">
                                <div class="tp-team-item tp-hover-btn-wrapper marque fix mb-30">
                                    <div class="tp-hover-btn-item">
                                        <img src="{{ RvMedia::getImageUrl($shortcode->{'image'.$i}) }}" alt="">
                                    </div>
                                    <div class="tp-team-content">
                                        <span>{{($shortcode->{'position'.$i})}}</span>
                                        <h4 class="tp-team-title-sm"><a href="{{($shortcode->{'url'.$i})}}">{{($shortcode->{'name'.$i})}}</a></h4>
                                    </div>
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
<!-- team area end -->
