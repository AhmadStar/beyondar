@if($shortcode->style==1)
      <!-- brand area start -->
<div class="ab-brand-area pt-120 mt-20 pb-120 black-bg-2" data-background="assets/img/inner-about/brand/brand-bg-shape.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="ab-brand-title-box mb-100">
                    <h4 class="ab-brand-title">{{$shortcode->title}}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="ab-brand-wrapper mb-80">
                    <div class="swiper-container ab-brand-slide-active">
                        <div class="swiper-wrapper ab-brand-slide-wrap">

                            @foreach($clients as $client)
                                <div class="swiper-slide">
                                    <div class="ab-brand-item">
                                        <img src="{{ RvMedia::getImageUrl($client->logo) }}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-9">
                <div class="ab-brand-content tp_title_anim">
                    <p>
                        {{$shortcode->text}}
                    </p>
                   <a href="{{$shortcode->url}}"><span>{{$shortcode->btn}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->

@else
        <!-- brand area start -->
<div class="tp-brand-3-area pb-120">
    <div class="container container-1400">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-brand-3-slider-wrapper">
                    <div class="swiper-container tp-brand-3-slider-active fix">
                        <div class="swiper-wrapper brand-wrapper">
                            @foreach($clients as $client)
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <img src="{{ RvMedia::getImageUrl($client->logo) }}" alt="">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->
@endif