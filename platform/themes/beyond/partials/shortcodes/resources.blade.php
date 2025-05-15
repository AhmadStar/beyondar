@php
$post=$blog_posts[0];@endphp
<div class="tp-blog-standard-area pt-170">
    <div class="container container-1500">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-blog-standard-thumb-box p-relative">
                    <img data-speed=".8" src="{{ RvMedia::getImageUrl($post->image) }}" alt="">
                    <div class="tp-blog-standard-title-box d-none d-sm-block">
                        <h4 class="tp-blog-standard-title tp-char-animation"><a href="{{$post->url}}">{{$post->name}}</a></h4>
                    </div>
                    <div class="tp-blog-standard-meta d-none d-sm-block">
                              <span>
                                 {{$post->created_at->format('F')}} <br> {{$post->created_at->format('d')}}
                              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-details-realated-area pt-70 pb-70">
    <div class="container">

        <div class="row">
            @php
            $skipFirst = true;
            @endphp
            @foreach($blog_posts as $post)
                @if($skipFirst)
                    @php
                    $skipFirst = false;
                    continue;
                    @endphp
                @endif
                <div class="col-xl-4 col-lg-6 col-md-6 mb-50">

                    <div class="tp-blog-item">
                        <div class="tp-blog-thumb fix p-relative">
                            <img src="{{ RvMedia::getImageUrl($post->image,'medium') }}" alt="">
                            <div class="tp-blog-meta">
                               <span class="created_at">
                                    {!! BaseHelper::renderIcon('ti ti-clock') !!} {{ Theme::formatDate($post->created_at) }}
                                </span>
                            </div>
                        </div>
                        <div class="tp-blog-content">
                            <span> <a href="{{ $post->first_category->url }}">{{ $post->first_category->name }}</a></span>
                            <h4 class="tp-blog-title-sm"><a href="{{$post->url}}">{{$post->name}}</a></h4>
                        </div>
                    </div>

                </div>
            @endforeach
            <div class="col-md-12">
                <a href="/blog-page" class="tp-cart-checkout-btn w-100">{{__('More')}}</a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="tp-blog-list-area mt-30 mb-30">
    <div class="container container-1480">
        <div class="tm-hero-area  p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tm-hero-content">
                            <span class="tm-hero-subtitle">{{__('Beyond Creative')}}</span>
                            <h4 class="tm-hero-title-big tp-char-animation">{{$shortcode->news_title}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $postN=$blog_news[0];@endphp
        <div class="tp-blog-standard-area pt-170">
            <div class="container container-1500">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-blog-standard-thumb-box p-relative">
                            <img data-speed=".8" src="{{ RvMedia::getImageUrl($postN->image) }}" alt="{{$postN->name}}">
                            <div class="tp-blog-standard-title-box  d-sm-block">
                                <h4 class="tp-blog-standard-title tp-char-animation"><a href="{{$postN->url}}">{{$postN->name}}</a></h4>
                            </div>
                            <div class="tp-blog-standard-meta d-none d-sm-block">
                              <span>
                                 {{$postN->created_at->format('F')}} <br> {{$postN->created_at->format('d')}}
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-blog-list-wrap" style="
    margin-top: 5px;
">
            @php
            $skipFirst = true;
            @endphp
            @foreach($blog_news as $post)
                @if($skipFirst)
                    @php
                    $skipFirst = false;
                    continue;
                    @endphp
                @endif
                    <div class="tp-blog-list-item">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 tp-flex-end">
                                <div class="tp-blog-list-meta">
                           <span class="created_at">
    {!! BaseHelper::renderIcon('ti ti-clock') !!} {{ Theme::formatDate($post->created_at) }}
</span>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-7">
                                <div class="tp-blog-list-content-wrap">
                                    <div class="tp-blog-list-thumb anim-zoomin-wrap">
                                        <a href="#">
                                            <img class="anim-zoomin" src="{{ RvMedia::getImageUrl($post->image,'medium') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="tp-blog-list-content tp-flex-column">
                                    <div class="tp-blog-list-title-wrap">
                                        <h4 class="tp-blog-list-title-sm"><a href="{{$post->url}}">{{$post->name}}</a>
                                        </h4>
                                    </div>
                                    <p>{{ $post->description }}</p>
                                    <div class="tp-blog-list-link-wrap">
                                        <a class="tp-blog-list-link" href="{{$post->url}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach

                <div class="col-md-12">
                    <a href="/news" class="tp-cart-checkout-btn w-100">{{__('More')}}</a>
                </div>
        </div>
    </div>
</div>
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