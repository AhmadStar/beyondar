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

                                    <div class="cn-contact-map">
                                        <a href="#">{{ __("Google Maps")}}</a>
                                    </div>
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



