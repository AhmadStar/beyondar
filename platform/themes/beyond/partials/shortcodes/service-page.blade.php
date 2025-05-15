<!-- hero area start -->
<div class="sv-hero-area sv-hero-ptb">
    <div class="container container-1530">
        <div class="row">
            <div class="col-xl-10">
                <div class="sv-hero-title-box">
                    <h4 class="sv-hero-title  tp-char-animation">{!! $shortcode->title !!}</h4>
                    <p class="tp_fade_bottom">{!! $shortcode->subtitle !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="sv-hero-thumb p-relative">
                    <div class="sv-hero-thumb-box">
                        <img data-speed=".7"
                             src="{{ RvMedia::getImageUrl($shortcode->img) }}"
                             alt="">
                    </div>
                    {{--<img class="sv-hero-thumb-shape d-none d-lg-block" src="/storage/general/blurred-soft-people-meeting-table-business-people-talking-modern-office-generative-ai.jpg" alt="">--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->

<!-- service area start -->
<div class="tp-service-5-area sv-service-style pb-70">
    <div class="container container-1530">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-service-5-title-box mb-90">
                           <span class="ab-inner-subtitle mb-20">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 0C12 3.0432 9.53292 5.5102 6.48975 5.5102C6.48975 2.46701 8.95677 0 12 0Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.0231934 0.0231209C3.06639 0.0231209 5.5334 2.49015 5.5334 5.53333C2.4902 5.53333 0.0231934 3.0663 0.0231934 0.0231209Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.48975 6.4898C9.53294 6.4898 12 8.95682 12 12C8.95675 12 6.48975 9.53297 6.48975 6.4898Z"
                                        fill="currentcolor"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.5102 6.48981C5.5102 9.533 3.04318 12 0 12C0 8.95681 2.46703 6.48981 5.5102 6.48981Z"
                                        fill="currentcolor"/>
                              </svg>
                              Services
                           </span>
                    <h4 class="tp-service-5-title">
                        {!! $shortcode->text !!}
                    </h4>
                </div>
            </div>
        </div>

        <div class="tp-service-5-wrap">
            <div class="row">
                <div class="col-xxl-3"></div>

                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="tp-service-5-item tp_fade_anim space-1">
                        <div class="tp-service-4-icon">
                            <img width="100px" src="{{ RvMedia::getImageUrl($shortcode->icon1) }}" alt="">
                        </div>
                        <div class="tp-service-4-content">
                            <h4 class="tp-service-4-title-sm tp-text-black"><a
                                        href="service-details.html"> {!! $shortcode->ls1 !!}</a></h4>
                            <p> {!! $shortcode->s1 !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="tp-service-5-item tp_fade_anim space-1">
                        <div class="tp-service-4-icon">
                            <img width="100px" src="{{ RvMedia::getImageUrl($shortcode->icon2) }}" alt="">
                        </div>
                        <div class="tp-service-4-content">
                            <h4 class="tp-service-4-title-sm tp-text-black"><a
                                        href="service-details.html"> {!! $shortcode->ls2 !!}</a></h4>
                            <p> {!! $shortcode->s2 !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="tp-service-5-item tp_fade_anim space-1">
                        <div class="tp-service-4-icon">
                            <img width="100px" src="{{ RvMedia::getImageUrl($shortcode->icon3) }}" alt="">                        </div>
                        <div class="tp-service-4-content">
                            <h4 class="tp-service-4-title-sm tp-text-black"><a
                                        href=""> {!! $shortcode->ls3 !!}</a></h4>
                            <p> {!! $shortcode->s2 !!}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- service area end -->

<!-- service area start -->
<div class="sv-service-area project-panel-area-2 mb-120">
    <div class="container-fluid p-0">
        @foreach($services as $service)
            <div class="sv-service-item project-panel-2">
                <div class="row g-0">
                    <div class="col-xl-6 col-lg-6">
                        <div class="sv-service-thumb">
                            <img width="100" src="{{ RvMedia::getImageUrl($service->img1) }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="sv-service-content-wrap d-flex align-items-center">
                            <div class="sv-service-content">
                                <div class="sv-service-title-box">
                                    {{--<span class="sv-service-subtitle"><i>01</i>{{__('Service')}}</span>--}}
                                    <h4 class="sv-service-title">{{$service->name}}</h4>
                                </div>
                                <div class="sv-service-space-wrap">
                                    <p class="sv-service-text mb-20" >
                                        {{$service->description}}
                                    </p>
                                    <div class="sv-service-list">
                                        {!! $service->list !!}
                                    </div>
                                    <div class="sv-service-btn">
                                        <a class="tp-btn-zikzak zikzak-inner p-relative" href="/service/{{$service->slug}}">
                                          <span class="zikzak-content">
                                             See <br>
                                             Details
                                             <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                 <path
                                                         d="M16.2434 8.16465C16.3866 8.31677 16.4668 8.52224 16.4668 8.73637C16.4668 8.9505 16.3866 9.15597 16.2434 9.30811L9.38818 16.53C9.24196 16.6773 9.04774 16.7599 8.84546 16.7607C8.74439 16.7602 8.64426 16.7399 8.55031 16.7005C8.41169 16.6392 8.2934 16.5359 8.21038 16.4038C8.12736 16.2717 8.0833 16.1167 8.08378 15.9583V9.53881H1.22849C1.02648 9.53881 0.832739 9.45428 0.689893 9.30378C0.547047 9.15329 0.466797 8.9492 0.466797 8.73637C0.466797 8.52356 0.547047 8.31945 0.689893 8.16897C0.832739 8.01848 1.02648 7.93395 1.22849 7.93395H8.08378V1.51445C8.0833 1.35603 8.12736 1.20101 8.21038 1.06892C8.2934 0.936828 8.41169 0.833584 8.55031 0.772196C8.691 0.714385 8.84436 0.699718 8.99264 0.729895C9.14092 0.760071 9.27805 0.833857 9.38818 0.942715L16.2434 8.16465Z"
                                                         fill="currentColor"/>
                                             </svg>
                                          </span>
                                            <svg class="anim" width="130" height="130" viewBox="0 0 130 130" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M58.6957 3.50452C61.9534 -0.481752 68.0466 -0.481752 71.3043 3.50452C74.073 6.89259 78.8543 7.84365 82.7089 5.77305C87.2441 3.33685 92.8735 5.66865 94.3577 10.5981C95.6191 14.7879 99.6725 17.4963 104.026 17.0583C109.148 16.5431 113.457 20.8517 112.942 25.9739C112.504 30.3275 115.212 34.3809 119.402 35.6423C124.331 37.1265 126.663 42.7559 124.227 47.2911C122.156 51.1456 123.107 55.927 126.495 58.6957C130.482 61.9534 130.482 68.0466 126.495 71.3043C123.107 74.073 122.156 78.8543 124.227 82.7089C126.663 87.2441 124.331 92.8735 119.402 94.3577C115.212 95.6191 112.504 99.6725 112.942 104.026C113.457 109.148 109.148 113.457 104.026 112.942C99.6725 112.504 95.6191 115.212 94.3577 119.402C92.8735 124.331 87.2441 126.663 82.7089 124.227C78.8543 122.156 74.073 123.107 71.3043 126.495C68.0466 130.482 61.9534 130.482 58.6957 126.495C55.927 123.107 51.1456 122.156 47.2911 124.227C42.7559 126.663 37.1265 124.331 35.6423 119.402C34.3809 115.212 30.3275 112.504 25.9739 112.942C20.8517 113.457 16.5431 109.148 17.0583 104.026C17.4963 99.6725 14.7879 95.6191 10.5981 94.3577C5.66864 92.8735 3.33685 87.2441 5.77305 82.7089C7.84365 78.8543 6.89259 74.073 3.50452 71.3043C-0.481752 68.0466 -0.481752 61.9534 3.50452 58.6957C6.89259 55.927 7.84365 51.1456 5.77305 47.2911C3.33685 42.7559 5.66865 37.1265 10.5981 35.6423C14.7879 34.3809 17.4963 30.3275 17.0583 25.9739C16.5431 20.8517 20.8517 16.5431 25.9739 17.0583C30.3275 17.4963 34.3809 14.7879 35.6423 10.5981C37.1265 5.66865 42.7559 3.33685 47.2911 5.77305C51.1456 7.84365 55.927 6.89259 58.6957 3.50452Z"
                                                      stroke="white" stroke-opacity="0.12"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- service area end -->

<!-- brand area start -->
<div class="tp-brand-4-area pt-160 pb-120">
    <div class="container">
        <div class="row gx-0">
            @foreach($clients as $client)
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-brand-4-item p-relative">
                        <img src="{{ RvMedia::getImageUrl($client->logo) }}" alt="">
                        {{--<div class="tp-brand-4-line-text d-flex align-items-center">--}}
                            {{--<span>TopoChico.com</span>--}}
                            {{--<span>TopoChico.com</span>--}}
                            {{--<span>TopoChico.com</span>--}}
                            {{--<span>TopoChico.com</span>--}}
                            {{--<span>TopoChico.com</span>--}}
                            {{--<span>TopoChico.com</span>--}}
                        {{--</div>--}}
                    </div>
                </div>



            @endforeach



        </div>
    </div>
</div>
<!-- brand area end -->

<!-- port area start -->
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
<!-- port area end -->

<!-- contact area start -->
<div class="sv-big-text-area pb-80">
    <div class="container container-1530">
        <div class="sv-small-text-box d-flex justify-content-between">
            {{--<span>DIGITAL DESIGN EXPERIENCE</span>--}}
            {{--<span>CREATIVE STUDIO</span>--}}
        </div>
        <div class="sv-big-text-box">
            <h4 class="sv-big-text tp-char-animation"><a href="/contact">Get in Touch</a></h4>
        </div>
    </div>
</div>
<!-- contact area end -->

