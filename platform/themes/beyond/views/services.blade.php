@php
    $lang = app()->getLocale();
@endphp

<div class="service-details__area service-details__space pt-200 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="service-details__title-box mb-40">
                    <span class="service-details__subtitle ">{{ __("Service")}}</span>
                    <h4 class="">{{$service->name}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-4 col-xl-5">
                    <div class="service-details__banner-text mb-80">
                        <p class="mb-30 tp_title_anim">{{$service->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="service-details__tab-wrapper text-center mb-120">
                    <div class="service-details__tab-thumb">
                        <img data-speed="0.4" src="{{ RvMedia::getImageUrl($service->img1) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="service-details__tab-wrapper text-center mb-120">
                    <div class="service-details__tab-thumb">
                        <img data-speed="0.4" src="{{ RvMedia::getImageUrl($service->img2) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="service-details__left-wrap">
                    <div class="service-details__left-text pb-20">
                        {!! $service->content !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="service-details__right-wrap fix p-relative">
                    <div class="service-details__rotate-text">
                        <span>{{ __("Full list of services")}}</span>
                    </div>
                    <div class="service-details__right-category">
                        @foreach($services as $item)
                            <a href="/{{$lang}}/service/{{$service->slug}}">{{$item->name}}</a>
                        @endforeach

                    </div>
                    <div class="service-details__right-text-box">
                        <h4>{{ __("Service Details")}} <br></h4>
                        {!! $service->list !!}
                        <a class="tp-btn-white background-black" href="/contact">{{__('Contact Us')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tp-line-text-wrap tp-line-text-wrap-2 pb-120">
    <div class="swiper tp-img-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-1">
                    <img src="assets/img/inner-service/portfolio/port-2.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-2">
                    <img src="assets/img/inner-service/portfolio/port-2.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-1">
                    <img src="assets/img/inner-service/portfolio/port-3.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-2">
                    <img src="assets/img/inner-service/portfolio/port-4.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-1">
                    <img src="assets/img/inner-service/portfolio/port-2.jpg" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="sv-port-thumb port-thumb-2">
                    <img src="assets/img/inner-service/portfolio/port-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
