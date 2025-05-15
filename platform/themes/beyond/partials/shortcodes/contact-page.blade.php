<!-- hero area start -->
<div class="tm-hero-area tm-hero-ptb p-relative">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tm-hero-content">
                    <span class="tm-hero-subtitle">Beyond Creative</span>
                    <h4 class="tm-hero-title-big">Contact Us</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->

<!-- contact area start -->
<div class="cn-contactform-area cn-contactform-style p-relative pb-100">
    <div class="container container-1840">
        <div class="cn-contactform-2-bg black-bg">
            <div class="row">
                <div class="col-xl-6">
                    <div class="cn-contactform-2-map">

                        <iframe src="https://www.google.com/maps/d/embed?mid=1CzYr4m3Z6TsTKp2lV3XrRfdTO2GDELg&ehbc=2E312F" width="100%" height="auto"></iframe></iframe>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cn-contactform-wrap">
                        <h4 class="cn-contactform-2-title">Send a Message</h4>
                        {{do_shortcode('[contact-form][/contact-form]')}}
                        {{--<form action="#">--}}
                            {{--<div class="cn-contactform-input mb-25">--}}
                                {{--<label>Name</label>--}}
                                {{--<input type="text" placeholder="John Doe">--}}
                            {{--</div>--}}
                            {{--<div class="cn-contactform-input mb-25">--}}
                                {{--<label>Subject</label>--}}
                                {{--<input type="text" placeholder="Your@email.com">--}}
                            {{--</div>--}}
                            {{--<div class="cn-contactform-input mb-25">--}}
                                {{--<label>Message</label>--}}
                                {{--<textarea placeholder="Tell Us About Your Project"></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="cn-contactform-btn">--}}
                                {{--<button class="tp-btn-black-md white-bg w-100" type="submit">Send Message</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- about area start -->
<div class="cn-contactform-support-area mb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class=" d-flex align-items-center justify-content-center" data-background="assets/img/inner-contact/contact/contact-bg.png">
                    <div class="cn-contactform-support-text text-center">
                                 <span>{{$shortcode->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->

<!-- contact area start -->
<div class="cn-contact-info-area">
    <div class="container container-1840">
        <div class="cn-contact-info-bg black-bg">
            @for($i=1;$i<4;$i++)
                <div class="cn-contact-info-item">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="cn-contact-left d-flex flex-wrap align-items-center">
                                <div class="cn-contact-info-thumb">
                                    <img src="{{ RvMedia::getImageUrl($shortcode->{'image'.$i}) }}" alt="">
                                </div>
                                <div class="cn-contact-left-info">
                                    <h4 class="cn-contact-left-title">{{($shortcode->{'country'.$i})}}</h4>


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="cn-contact-right-wrap d-flex align-items-start justify-content-between">
                                <div class="cn-contact-right">
                                    <div class="cn-contact-location">
                                        <span class="cn-contact-location-title"><br></span>
                                        <a href="https://www.google.com/maps" target="_blank">{{($shortcode->{'address'.$i})}} </a>
                                        <br><div class="cn-contact-right-info text-start ">
                                            <a href="tel:{{($shortcode->{'phone'.$i})}}">{{($shortcode->{'phone'.$i})}}</a> <br>
                                            <a href="mailto:{{($shortcode->{'phone'.$i})}}">{{($shortcode->{'email'.$i})}}</a>
                                        </div>
                                    </div>

                                    {{--<div class="cn-contact-map">--}}
                                        {{--<a href="#">Google Maps</a>--}}
                                    {{--</div>--}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<!-- contact area end -->



