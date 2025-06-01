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
            @php
                // dd($client);   
            @endphp
            <div class="col">
                <div class="bd-brand-item mb-80">
                    <img src="{{ RvMedia::getImageUrl($client->logo) }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- brand area end -->

