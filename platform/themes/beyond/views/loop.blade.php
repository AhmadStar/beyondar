<div class="tp-blog-standard-area pt-170">
    <div class="container container-1500">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-blog-standard-thumb-box p-relative">
                    <img data-speed=".8" src="{{ RvMedia::getImageUrl($shortcode->img) }}" alt="">
                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                        <h4 class="tp-blog-standard-title tp-char-animation">{{$shortcode->title}}</h4>
                    </div>
                    <div class="tp-blog-standard-meta d-none d-sm-block">
                        {{--<span>--}}
                        {{--OCT <br> 21--}}
                        {{--</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-details-realated-area pt-70 pb-70">
    <div class="container">

        <div class="row">
            @include(Theme::getThemeNamespace() . '::views.templates.posts', compact('posts'))

        </div>
    </div>
</div>
<br>
