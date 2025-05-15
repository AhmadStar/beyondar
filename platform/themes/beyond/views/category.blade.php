@php Theme::set('section-name', $category->name);
$post=$posts[0];@endphp
{{$category->name}}
@if($category->name=='Blog')
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
                @if ($posts->isNotEmpty())
                    @foreach ($posts->loadMissing('author') as $post)
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
                @else
                    <div class="alert alert-warning">
                        <p class="mb-0">{{ __('There is no data to display!') }}</p>
                    </div>
                @endif
                <div class="col-12">
                    <div class="page-pagination text-right">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@else

    <div class="tp-blog-list-banner">
        <div class="tp-blog-list-bg tp-blog-list-bg-overlay" data-background="
        {{ RvMedia::getImageUrl($post->image,'medium') }}
        ">
            <div class="container z-index">
                <div class="row align-items-end">
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="tp-blog-list-title-box">
                            <h2 class="tp-section-title fs-70 tp-char-animation"><a href="{{$post->url}}">{{$post->name}}</a></h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="tp-blog-list-text text-start text-md-end">
                            <span>{{$category->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-blog-list-area mb-30">
        <div class="container container-1480">
            <div class="tp-blog-list-wrap">

                @php
                $skipFirst = true;
                @endphp
                @foreach($posts->loadMissing('author') as $post)
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
                                            <img class="anim-zoomin" src="{{ RvMedia::getImageUrl($post->image) }}"
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

                {{--<div class="col-12">--}}
                    {{--<div class="basic-pagination mt-80 text-center">--}}
                        {{--<nav>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="blog-list.html">--}}
                                        {{--<span class="current">1</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="blog-list.html">--}}
                                        {{--<span>2</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="blog-list.html">--}}
                                        {{--<i class="fa-regular fa-arrow-right icon"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endif



{{--@if ($posts->isNotEmpty())--}}
{{--@foreach ($posts->loadMissing('author') as $post)--}}
{{--<article class="post post__horizontal mb-40 clearfix">--}}
{{--<div class="post__thumbnail">--}}
{{--{{ RvMedia::image($post->image, $post->name, 'medium') }}--}}
{{--<a href="{{ $post->url }}" title="{{ $post->name }}" class="post__overlay"></a>--}}
{{--</div>--}}
{{--<div class="post__content-wrap">--}}
{{--<header class="post__header">--}}
{{--<h3 class="post__title"><a href="{{ $post->url }}" title="{{ $post->name }}">{{ $post->name }}</a></h3>--}}
{{--<div class="post__meta">--}}
{{--{!! Theme::partial('blog.post-meta', compact('post')) !!}--}}
{{--</div>--}}
{{--</header>--}}
{{--<div class="post__content">--}}
{{--<p data-number-line="4">{{ $post->description }}</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</article>--}}
{{--@endforeach--}}
{{--<div class="page-pagination text-right">--}}
{{--{!! $posts->links() !!}--}}
{{--</div>--}}
{{--@else--}}
{{--<div class="alert alert-warning">--}}
{{--<p class="mb-0">{{ __('There is no data to display!') }}</p>--}}
{{--</div>--}}
{{--@endif--}}
