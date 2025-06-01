<!-- hero area start -->
<div class="tm-hero-area tm-hero-ptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tm-hero-content">
                    <span class="tm-hero-subtitle">{{ __("Beyond Creative") }}</span>
                    <h4 class="tm-hero-title ">{{$shortcode->title}}</h4>
                </div>
                <div class="tm-hero-text tp_title_anim">
                    <p>
                        {{$shortcode->subtitle}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->


<!-- brand area start -->
<div class="bd-brand-area">
    <div class="container">
        <div class="row gx-80 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
            @foreach($clients as $client)
            <div class="col">
                <div class="bd-brand-item mb-80">
                    <img src="{{ RvMedia::getImageUrl($client->logo) }}" alt="">
                </div>
            </div>

            @endforeach


        </div>
        {{--<div class="row justify-content-center">--}}
            {{--<div class="bd-brand-btn-box mb-100 d-flex justify-content-center">--}}
                {{--<div class="tp-hover-btn-wrapper">--}}
                    {{--<a class="tp-btn-circle style-2 tp-hover-btn-item tp-hover-btn" href="#">--}}
                        {{--<span class="tp-btn-circle-text">More<br>Browser</span>--}}
                                 {{--<span class="tp-btn-circle-icon">--}}
                                    {{--<svg width="12" height="12" viewBox="0 0 12 12" fill="none"--}}
                                         {{--xmlns="http://www.w3.org/2000/svg">--}}
                                        {{--<path d="M1 11L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"--}}
                                              {{--stroke-linejoin="round" />--}}
                                        {{--<path d="M1 1H11V11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"--}}
                                              {{--stroke-linejoin="round" />--}}
                                    {{--</svg>--}}
                                 {{--</span>--}}
                        {{--<i class="tp-btn-circle-dot"></i>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
<!-- brand area end -->

