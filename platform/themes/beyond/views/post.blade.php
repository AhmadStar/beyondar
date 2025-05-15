@php
Theme::set('section-name', $post->name);
$post->loadMissing('metadata');

if ($bannerImage = $post->getMetaData('banner_image', true)) {
Theme::set('breadcrumbBannerImage', RvMedia::getImageUrl($bannerImage));
}

if($post->full_img)
$fullImg=RvMedia::getImageUrl($post->full_img, $post->name);
else
$fullImg=RvMedia::getImageUrl($post->image, $post->name);
@endphp
        <!-- hero area start -->
<div class="blog-details-area">
    <div class="blog-details-bg blog-details-bg-height blog-details-overlay p-relative d-flex align-items-end pt-170 pb-170"
          style="background:url({{ RvMedia::getImageUrl($fullImg, $post->name) }});background-size: cover;">
        <div class="blog-details-overlay-shape">
            {{--<img src="{{ RvMedia::getImageUrl($post->image, $post->name) }}" alt="">--}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-11">
                    <div class="blog-details-content z-index-5">
                        {{--<span class="blog-details-meta">Creative <i>. 01 Oct, 2022</i></span>--}}
                        <h1 class=" ">{{ $post->name }}</h1>
                        <div class="blog-details-top-author d-flex align-items-center">
                            {!! Theme::partial('blog.post-meta', compact('post')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hero area end -->

<!-- postbox area start -->
<section class="postbox__area tp-blog-sidebar-sticky-area mt-30 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="postbox__wrapper">
                    <div class="blog-details-top-text">
                        {!! BaseHelper::clean($post->content) !!}
                    </div>
                    {{--<div class="blog-details-left-content">--}}
                    {{--<h4 class="blog-details-left-title">What is Lorem Ipsum?</h4>--}}
                    {{--<p class="mb-20"><span>Lorem Ipsum</span> is simply dummy text of the printing and typesetting--}}
                    {{--industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when--}}
                    {{--an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
                    {{--<p>It has survived not only five centuries, but also the leap into electronic typesetting,--}}
                    {{--remaining essentially unchanged</p>--}}
                    {{--</div>--}}


                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="sidebar__wrapper">

                    <div class="sidebar__widget mb-65">
                        <div class="sidebar__widget-content">
                            <div class="sidebar__search">
                                <form action="{{ route('public.search') }}">
                                    <div class="sidebar__search-input-2">
                                        <input type="text" placeholder="Search product">
                                        <button type="submit">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.6 16.2C12.7974 16.2 16.2 12.7974 16.2 8.6C16.2 4.40264 12.7974 1 8.6 1C4.40264 1 1 4.40264 1 8.6C1 12.7974 4.40264 16.2 8.6 16.2Z"
                                                      stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                                <path d="M16.9984 17L15.3984 15.4" stroke="currentcolor"
                                                      stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-65">
                        <h3 class="sidebar__widget-title">Category</h3>
                        <div class="sidebar__widget-content">
                            <ul>
                                @foreach ($post->categories as $category)
                                    <li><a href="{{ $category->url }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-65">
                        <h3 class="sidebar__widget-title">Recent Post</h3>
                        <div class="sidebar__widget-content">
                            <div class="sidebar__post rc__post">
                                @php $relatedPosts = get_related_posts($post->id, 2); @endphp

                                @if ($relatedPosts->isNotEmpty())

                                    @foreach ($relatedPosts as $relatedItem)
                                        <div class="rc__post mb-30 d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href=" {{ $relatedItem->url }}"><img src="{{ RvMedia::getImageUrl($relatedItem->image, 'thumb') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <div class="rc__meta d-flex align-items-center">
                                                    <span>{{ Theme::formatDate($relatedItem->created_at) }}</span>
                                                </div>
                                                <h3 class="rc__post-title">
                                                    <a href="{{ $relatedItem->url }}">{{ $relatedItem->name }}</a>
                                                </h3>
                                            </div>
                                        </div>




                                        {{--<div class="col-md-6 col-sm-6 col-12">--}}
                                        {{--<div class="post__relate-group @if ($loop->last) post__relate-group--right text-end @else text-start @endif">--}}
                                        {{--<h4 class="relate__title">@if ($loop->first) {{ __('Previous Post') }} @else {{ __('Next Post') }} @endif</h4>--}}
                                        {{----}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    @endforeach

                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-65">
                        <h3 class="sidebar__widget-title">Tags</h3>
                        <div class="sidebar__widget-content">
                            <div class="tagcloud">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ $tag->url }}" class="me-0">{{ $tag->name }}</a>@if (!$loop->last)
                                        , @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{--<div class="sidebar__widget mb-65">--}}
                    {{--<div class="sidebar__widget-content">--}}
                    {{--<div class="sidebar__banner-img">--}}
                    {{--<img src="assets/img/inner-blog/blog-sidebar/banner/banner.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="sidebar__widget mb-65">--}}
                        {{--<h3 class="sidebar__widget-title">Follow Us</h3>--}}
                        {{--<div class="sidebar__widget-content">--}}
                            {{--<div class="sidebar__social">--}}
                                {{--{!! Theme::renderSocialSharing($post->url, SeoHelper::getDescription(), $post->image) !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- postbox area end -->
<!-- hero area start -->
{{--<div class="blog-details-area blog-details-without-sidebar">--}}
    {{--<div class="blog-details-without-sidebar p-relative d-flex align-items-end pt-170 pb-70">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-12">--}}
                    {{--<div class="blog-details-content z-index-5">--}}
                        {{--<span class="blog-details-meta text-black">Creative</span>--}}
                        {{--<h4 class="blog-details-title tp-text-black tp-char-animation">Taking Your <br> brand in the Metaverse</h4>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container container-1800">--}}
        {{--<div class="blog-details-thumb-wrap">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="blog-details-top-meta text-center">--}}
                        {{--<span>Mark Hopkins</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="blog-details-top-meta text-center">--}}
                        {{--<span>01 October, 2022</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="blog-details-top-meta text-center">--}}
                        {{--<span>7 mins</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-12">--}}
                    {{--<div class="blog-details-thumb">--}}
                        {{--<img class="w-100" data-speed=".8" src="assets/img/inner-blog/blog-details-without-sidebar/blog-details-3.jpg" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- hero area end -->--}}

{{--<!-- postbox area start -->--}}
{{--<section class="postbox__area tp-blog-sidebar-sticky-area pt-120 pb-120">--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-12">--}}
                {{--<div class="postbox__wrapper">--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-xl-8">--}}
                            {{--<div class="blog-details-top-text tp_fade_bottom">--}}
                                {{--<p>The metaverse can be viewed as an evolution of today’s internet, which in turn evolved from passive media that we simply consumed. In the age of radio and television, the consumer’s only job was to listen and decide if they wanted to buy. </p>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-left-content tp_fade_bottom">--}}
                                {{--<p class="pb-40">The metaverse can be viewed as an evolution of today’s internet, which in turn evolved from passive media that we simply consumed. In the age of radio and television, the consumer’s only job was to listen and decide if they wanted to buy. While the internet added active participation and community-building, the metaverse adds total immersion and the power to co-create, trade, promote and even profit in ways never before imagined – bringing an entirely new level of complexity to the ways in which brands can interact with their target market.</p>--}}
                                {{--<h4 class="blog-details-left-title">What is Lorem Ipsum?</h4>--}}
                                {{--<p class="mb-20"><span>Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
                                {{--<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="blog-details-thumb-box tp_fade_bottom">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="blog-details-thumb">--}}
                                    {{--<img class="mb-20" src="assets/img/inner-blog/blog-details-without-sidebar/blog-details-1.jpg" alt="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="blog-details-thumb">--}}
                                    {{--<img class="mb-20" src="assets/img/inner-blog/blog-details-without-sidebar/blog-details-2.jpg" alt="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-xl-8">--}}
                            {{--<div class="blog-details-left-content tp_fade_bottom">--}}
                                {{--<h4 class="blog-details-left-title">Relationship & Communication</h4>--}}
                                {{--<p>But, like most politicians, he promised more than he could deliver. Why not indeed! Daylight and everything. And then the battle’s not so bad? Hello, little man. I will destroy you! No, I’m Santa Claus! Kif might! Man, I’m sore all over. I feel like I just went ten rounds with mighty Thor. I found what I need. And it’s not friends, it’s things. Then we’ll go with that data file!</p>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-blockquote tp_fade_bottom">--}}
                                {{--<blockquote>--}}
                                       {{--<span class="quote-icon">--}}
                                          {{--<svg width="90" height="66" viewBox="0 0 90 66" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                              {{--<path d="M0 42.6672C0 27.2282 7.2986 14.2644 21.8957 3.77586C25.3156 1.25862 27.8597 0 29.528 0C30.6957 0 31.2796 0.755172 31.2796 2.26552C31.2796 3.69195 31.0294 4.7408 30.5289 5.41207C30.1118 5.99943 29.5697 6.54483 28.9024 7.04828C28.2351 7.55172 27.5678 8.01322 26.9005 8.43276C26.2332 8.8523 25.4408 9.48161 24.5232 10.3207C16.3488 17.369 12.2616 24.2494 12.2616 30.9621C12.2616 34.5701 13.7213 36.3741 16.6408 36.3741C28.9024 36.3741 35.0332 41.4506 35.0332 51.6034C35.0332 55.5471 33.5317 58.9034 30.5289 61.6724C27.5261 64.3575 24.2313 65.7 20.6445 65.7C14.055 65.7 8.96682 63.1408 5.3801 58.0224C1.79337 52.8201 0 47.7017 0 42.6672ZM55.0919 42.6672C55.0919 26.9764 62.182 14.1385 76.3621 4.15345C79.6986 1.38448 82.2009 0 83.8692 0C85.5374 0 86.3716 0.755172 86.3716 2.26552C86.3716 3.69195 86.1213 4.69885 85.6208 5.28621C85.2038 5.87356 84.6616 6.46092 83.9943 7.04827C83.327 7.55172 82.6597 8.01322 81.9924 8.43276C81.3251 8.8523 80.5744 9.48161 79.7403 10.3207C71.3156 17.8724 67.1033 24.7529 67.1033 30.9621C67.1033 34.5701 68.6464 36.3741 71.7327 36.3741C83.9109 36.3741 90 41.4086 90 51.4776C90 55.3374 88.4986 58.6937 85.4957 61.5465C82.5763 64.3155 79.2815 65.7 75.6114 65.7C69.1886 65.7 64.1422 63.1828 60.472 58.1483C56.8853 53.0299 55.0919 47.8695 55.0919 42.6672Z" fill="#19191A" fill-opacity="0.1"/>--}}
                                          {{--</svg>--}}
                                       {{--</span>--}}
                                    {{--<p>Don't watch the clock; do what it does. keep going.</p>--}}
                                    {{--<span class="blockquote-info">Sam Levenson</span>--}}
                                {{--</blockquote>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-left-content tp_fade_bottom">--}}
                                {{--<p>With any accomplished project, great time management is an essential component. We business owners hire product designers, they expect them to not only perform well, but also on time. At Stan Vision, we provide you with an experienced design team, led by an expert PM who knows how to prioritise your platform and product.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="blog-details-thumb-box">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-xl-12">--}}
                                {{--<div class="blog-details-thumb">--}}
                                    {{--<img class="w-100" src="assets/img/inner-blog/blog-details/blog-details-4.jpg" alt="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="col-xl-8">--}}
                            {{--<div class="blog-details-left-content tp_fade_bottom">--}}
                                {{--<h4 class="blog-details-left-title">What is Lorem Ipsum?</h4>--}}
                                {{--<p><span>Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
                                {{--<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-share-wrap mb-40">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xl-8">--}}
                                        {{--<div class="blog-details-tag">--}}
                                             {{--<span>--}}
                                                {{--<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--<path d="M15.371 9.92961L9.7597 15.5409C9.61433 15.6865 9.44171 15.8019 9.25169 15.8807C9.06168 15.9595 8.858 16 8.6523 16C8.44661 16 8.24293 15.9595 8.05292 15.8807C7.8629 15.8019 7.69027 15.6865 7.54491 15.5409L0.822266 8.82613V1H8.64839L15.371 7.72264C15.6626 8.01591 15.8262 8.41262 15.8262 8.82613C15.8262 9.23964 15.6626 9.63634 15.371 9.92961Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--<path d="M4.73633 4.91333H4.74467" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                            {{--<a href="#">Creative</a>--}}
                                            {{--<a href="#">Photography</a>--}}
                                            {{--<a href="#">Lifestyle</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xl-4">--}}
                                        {{--<div class="blog-details-share text-md-end text-start">--}}
                                             {{--<span>--}}
                                                {{--<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--<path d="M11.5004 5.2C12.6602 5.2 13.6004 4.2598 13.6004 3.1C13.6004 1.9402 12.6602 1 11.5004 1C10.3406 1 9.40039 1.9402 9.40039 3.1C9.40039 4.2598 10.3406 5.2 11.5004 5.2Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--<path d="M3.1 10.0999C4.2598 10.0999 5.2 9.1597 5.2 7.9999C5.2 6.8401 4.2598 5.8999 3.1 5.8999C1.9402 5.8999 1 6.8401 1 7.9999C1 9.1597 1.9402 10.0999 3.1 10.0999Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--<path d="M11.5004 14.9998C12.6602 14.9998 13.6004 14.0596 13.6004 12.8998C13.6004 11.74 12.6602 10.7998 11.5004 10.7998C10.3406 10.7998 9.40039 11.74 9.40039 12.8998C9.40039 14.0596 10.3406 14.9998 11.5004 14.9998Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--<path d="M4.91211 9.05688L9.69311 11.8429" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                    {{--<path d="M9.68611 4.15674L4.91211 6.94274" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
                                                {{--</svg>--}}
                                             {{--</span>--}}
                                            {{--<a href="#">Share Post</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-author d-flex mb-60">--}}
                                {{--<div class="blog-details-author-img">--}}
                                    {{--<img src="assets/img/inner-blog/blog-details/avatar/avatar-1.jpg" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="blog-details-author-content-wrap">--}}
                                    {{--<div class="blog-details-author-social text-end">--}}
                                        {{--<a href="#"><i class="fab fa-facebook-f"></i></a>--}}
                                        {{--<a href="#"><i class="fab fa-twitter"></i></a>--}}
                                        {{--<a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="blog-details-author-content">--}}
                                        {{--<h4 class="blog-details-author-title">Lea Cohen</h4>--}}
                                        {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed--}}
                                            {{--diam nonumy eirmod tempor.!</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="blog-details-navigation-style mb-120">--}}
                                {{--<div class="project-details-1-navigation d-flex justify-content-between align-items-center">--}}
                                    {{--<a class="project-details-1-prev" href="blog-details-without-sidebar.html">--}}
                                        {{--<i class="fa-sharp fa-regular fa-arrow-left"></i>--}}
                                        {{--<span>Prev</span>--}}
                                    {{--</a>--}}
                                    {{--<a href="#">--}}
                                          {{--<span>--}}
                                             {{--<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                 {{--<circle cx="17" cy="3" r="3" fill="#19191A"/>--}}
                                                 {{--<circle cx="3" cy="3" r="3" fill="#19191A"/>--}}
                                                 {{--<circle cx="3" cy="17" r="3" fill="#19191A"/>--}}
                                                 {{--<circle cx="17" cy="17" r="3" fill="#19191A"/>--}}
                                             {{--</svg>--}}
                                          {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<a class="project-details-1-next" href="blog-details-without-sidebar.html">--}}
                                        {{--<span>Next</span>--}}
                                        {{--<i class="fa-sharp fa-regular fa-arrow-right"></i>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="postbox__comment mb-100">--}}
                                {{--<h3 class="postbox__comment-title">3 Comments</h3>--}}
                                {{--<ul>--}}
                                    {{--<li>--}}
                                        {{--<div class="postbox__comment-box d-flex">--}}
                                            {{--<div class="postbox__comment-info ">--}}
                                                {{--<div class="postbox__comment-avater mr-20">--}}
                                                    {{--<img src="assets/img/inner-blog/blog-details/avatar/avatar-3.jpg" alt="">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="postbox__comment-text">--}}
                                                {{--<div class="postbox__comment-name d-flex justify-content-between align-items-center">--}}
                                                    {{--<h5>Farhan Firoz</h5>--}}
                                                    {{--<span class="post-meta"> April 8, 2022 at 7:38 am</span>--}}
                                                {{--</div>--}}
                                                {{--<p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis felis. Nunc non orci augue. Pellentesque elementum gravida arcu.</p>--}}
                                                {{--<div class="postbox__comment-reply">--}}
                                                    {{--<a href="#">Reply</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li class="children">--}}
                                        {{--<div class="postbox__comment-box d-flex">--}}
                                            {{--<div class="postbox__comment-info ">--}}
                                                {{--<div class="postbox__comment-avater mr-20">--}}
                                                    {{--<img src="assets/img/inner-blog/blog-details/avatar/avatar-4.jpg" alt="">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="postbox__comment-text">--}}
                                                {{--<div class="postbox__comment-name d-flex justify-content-between align-items-center">--}}
                                                    {{--<h5>Anne Marie</h5>--}}
                                                    {{--<span class="post-meta"> April 8, 2022 at 7:38 am</span>--}}
                                                {{--</div>--}}
                                                {{--<p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis--}}
                                                    {{--felis. Nunc non orci augue.</p>--}}
                                                {{--<div class="postbox__comment-reply">--}}
                                                    {{--<a href="#">Reply</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<div class="postbox__comment-box d-flex">--}}
                                            {{--<div class="postbox__comment-info ">--}}
                                                {{--<div class="postbox__comment-avater mr-20">--}}
                                                    {{--<img src="assets/img/inner-blog/blog-details/avatar/avatar-3.jpg" alt="">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="postbox__comment-text">--}}
                                                {{--<div class="postbox__comment-name d-flex justify-content-between align-items-center">--}}
                                                    {{--<h5>Justin Case</h5>--}}
                                                    {{--<span class="post-meta"> April 8, 2022 at 7:38 am</span>--}}
                                                {{--</div>--}}
                                                {{--<p>Quisque est tortor, condimentum eget faucibus vel, condimentum quis felis. Nunc non orci augue. Pellentesque elementum gravida arcu.</p>--}}
                                                {{--<div class="postbox__comment-reply">--}}
                                                    {{--<a href="#">Reply</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="tp-postbox-details-form">--}}
                                {{--<h3 class="tp-postbox-details-form-title">Leave a Reply</h3>--}}
                                {{--<p>Your email address will not be published. Required fields are marked *</p>--}}
                                {{--<div class="tp-postbox-details-form-wrapper">--}}
                                    {{--<div class="tp-postbox-details-form-inner">--}}
                                        {{--<form action="#">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-xl-12">--}}
                                                    {{--<div class="tp-postbox-details-input-box">--}}
                                                        {{--<div class="tp-postbox-details-input">--}}
                                                            {{--<textarea id="msg" placeholder="Write your message here..."></textarea>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xl-6">--}}
                                                    {{--<div class="tp-postbox-details-input-box">--}}
                                                        {{--<div class="tp-postbox-details-input">--}}
                                                            {{--<input type="text" placeholder="Farhan Firoz">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xl-6">--}}
                                                    {{--<div class="tp-postbox-details-input-box">--}}
                                                        {{--<div class="tp-postbox-details-input">--}}
                                                            {{--<input type="email" placeholder="liko@mail.com">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-xl-12">--}}
                                                    {{--<div class="tp-postbox-details-input-box">--}}
                                                        {{--<div class="tp-postbox-details-input">--}}
                                                            {{--<input type="text" placeholder="Website">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                    {{--<div class="tp-postbox-details-suggetions mb-20">--}}
                                        {{--<div class="tp-postbox-details-remeber d-flex align-items-start">--}}
                                            {{--<input id="remeber" type="checkbox">--}}
                                            {{--<label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tp-postbox-details-input-box">--}}
                                        {{--<button class="tp-btn-border-lg" type="submit">Post Comment</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- postbox area end -->--}}
