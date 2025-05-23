<!DOCTYPE html>
<html {!! Theme::htmlAttributes() !!}>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
          name="viewport"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    @php(Theme::set('headerMeta', Theme::partial('header-meta')))

    {!! Theme::header() !!}
</head>
{{--<body {!! Theme::bodyAttributes() !!}>--}}

<body id="body" class="tp-smooth-scroll  @if(Request::is('/')) home @else inner-page @endif">
{{--{!! apply_filters(THEME_FRONT_BODY, null) !!}--}}
    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- pre loader area start -->
<div id="loading" class="preloader-wrap">
    <div class="preloader-2 text-center">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
        <span class="line line-4"></span>
        <span class="line line-5"></span>
        <span class="line line-6"></span>
        <span class="line line-7"></span>
        <span class="line line-8"></span>
        <span class="line line-9"></span>
        <div class="loader-text">Loading ...</div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </button>
</div>
<!-- back to top end -->

<!-- tp-offcanvus-area-end -->
<div class="tp-offcanvas-area">
    <div class="tp-offcanvas-wrapper">
        <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
            <div class="tp-offcanvas-logo">
                <a href="index.html">
                    <img class="logo-1" src="/storage/general/1.png" alt="">
                    <img class="logo-2" src="/storage/general/1.png" alt="">
                </a>
            </div>
            <div class="tp-offcanvas-close">
                <button class="tp-offcanvas-close-btn">
                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="tp-offcanvas-main">
            <div class="tp-offcanvas-content">
                {{--<h3 class="tp-offcanvas-title">Beyond Creative</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>--}}
            </div>
            <div class="tp-offcanvas-main">
                <div class="tp-offcanvas-content">
                    <h3 class="tp-offcanvas-title">Beyond Creative</h3>
                    <p>We believe the media industry is more than just visual, audio, or written content.  </p>
                </div>
                <div class="tp-main-menu-mobile d-xl-none"></div>
                <div class="tp-offcanvas-gallery">
                    {{--<div class="row gx-2">--}}
                    {{--<div class="col-md-3 col-3">--}}
                    {{--<div class="tp-offcanvas-gallery-img fix">--}}
                    {{--<a href="#"><img src="assets/img/menu/offcanvas/offcanvas-1.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-3">--}}
                    {{--<div class="tp-offcanvas-gallery-img fix">--}}
                    {{--<a href="#"><img src="assets/img/menu/offcanvas/offcanvas-2.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-3">--}}
                    {{--<div class="tp-offcanvas-gallery-img fix">--}}
                    {{--<a href="#"><img src="assets/img/menu/offcanvas/offcanvas-3.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-3">--}}
                    {{--<div class="tp-offcanvas-gallery-img fix">--}}
                    {{--<a href="#"><img src="assets/img/menu/offcanvas/offcanvas-4.jpg" alt=""></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="tp-offcanvas-contact">
                    <h3 class="tp-offcanvas-title sm">Information</h3>

                    <ul>
                        <li><a href="tel:+90 552 455 15 51">+90 552 455 15 51</a></li>
                        <li><a href="mailto:{{theme_option('contact_email')}}">{{theme_option('contact_email')}}</a>
                        </li>
                        <li><a href="#">{{theme_option('address')}}</a></li>
                    </ul>
                </div>
                <div class="tp-offcanvas-social">
                    <h3 class="tp-offcanvas-title sm">Follow Us</h3>

                    @if ($socialLinks = Theme::getSocialLinks())
                        <ul>

                            @foreach($socialLinks as $socialLink)
                                <li>
                                    {{--{!! dd($socialLink) !!}--}}
                                    {{--@continue(! $icon = $socialLink->getIconHtml())--}}
                                    <a {{ $socialLink->getAttributes() }}><i
                                                class="fa-brands fa-{{$socialLink->getName()}}"></i></a>
                                </li>
                            @endforeach
                        </ul>

                    @endif

                </div>
            </div>
            {{--<div class="tp-offcanvas-contact">--}}
            {{--<h3 class="tp-offcanvas-title sm">Information</h3>--}}

            {{--<ul>--}}
            {{--<li><a href="tel:1245654">+ 4 20 7700 1007</a></li>--}}
            {{--<li><a href="mailto:hello@diego.com">hello@diego.com</a></li>--}}
            {{--<li><a href="#">Avenue de Roma 158b, Lisboa</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="tp-offcanvas-social">--}}
            {{--<h3 class="tp-offcanvas-title sm">Follow Us</h3>--}}
            {{--<ul>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<svg width="16" height="16" viewBox="0 0 16 16" fill="none"--}}
            {{--xmlns="http://www.w3.org/2000/svg">--}}
            {{--<path--}}
            {{--d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-linecap="round"--}}
            {{--stroke-linejoin="round"/>--}}
            {{--<path--}}
            {{--d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-linecap="round"--}}
            {{--stroke-linejoin="round"/>--}}
            {{--<path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5"--}}
            {{--stroke-linecap="round" stroke-linejoin="round"/>--}}
            {{--</svg>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<svg width="18" height="18" viewBox="0 0 18 18" fill="none"--}}
            {{--xmlns="http://www.w3.org/2000/svg">--}}
            {{--<path--}}
            {{--d="M2.50589 12.7494C4.57662 16.336 9.16278 17.5648 12.7494 15.4941C14.2113 14.65 15.2816 13.388 15.8962 11.9461C16.7895 9.85066 16.7208 7.37526 15.4941 5.25063C14.2674 3.12599 12.1581 1.82872 9.89669 1.55462C8.34063 1.366 6.71259 1.66183 5.25063 2.50589C1.66403 4.57662 0.435172 9.16278 2.50589 12.7494Z"--}}
            {{--stroke="currentColor" stroke-width="1.5"/>--}}
            {{--<path--}}
            {{--d="M12.7127 15.4292C12.7127 15.4292 12.0086 10.4867 10.5011 7.87559C8.99362 5.26451 5.28935 2.57155 5.28935 2.57155M5.68449 15.6124C6.79553 12.2606 12.34 8.54524 16.3975 9.43537M12.311 2.4082C11.1953 5.72344 5.75732 9.38453 1.71875 8.58915"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>--}}
            {{--</svg>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<svg width="18" height="11" viewBox="0 0 18 11" fill="none"--}}
            {{--xmlns="http://www.w3.org/2000/svg">--}}
            {{--<path--}}
            {{--d="M1 5.5715H6.33342C7.62867 5.5715 8.61917 6.56199 8.61917 7.85725C8.61917 9.15251 7.62867 10.143 6.33342 10.143H1.76192C1.30477 10.143 1 9.83823 1 9.38108V1.76192C1 1.30477 1.30477 1 1.76192 1H5.5715C6.86676 1 7.85725 1.99049 7.85725 3.28575C7.85725 4.58101 6.86676 5.5715 5.5715 5.5715H1Z"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>--}}
            {{--<path--}}
            {{--d="M10.9062 7.09454H17.0016C17.0016 5.41832 15.6301 4.04688 13.9539 4.04688C12.2777 4.04688 10.9062 5.41832 10.9062 7.09454ZM10.9062 7.09454C10.9062 8.77076 12.2777 10.1422 13.9539 10.1422H15.2492"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"--}}
            {{--stroke-linecap="round"--}}
            {{--stroke-linejoin="round"/>--}}
            {{--<path d="M16.1125 1.44434H11.668" stroke="currentColor" stroke-width="1.2"--}}
            {{--stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>--}}
            {{--</svg>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="#">--}}
            {{--<svg width="18" height="14" viewBox="0 0 18 14" fill="none"--}}
            {{--xmlns="http://www.w3.org/2000/svg">--}}
            {{--<path--}}
            {{--d="M12.75 13H5.25C3 13 1.5 11.5 1.5 9.25V4.75C1.5 2.5 3 1 5.25 1H12.75C15 1 16.5 2.5 16.5 4.75V9.25C16.5 11.5 15 13 12.75 13Z"--}}
            {{--stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"--}}
            {{--stroke-linecap="round"--}}
            {{--stroke-linejoin="round"/>--}}
            {{--<path--}}
            {{--d="M8.70676 5.14837L10.8006 6.40465C11.5543 6.90716 11.5543 7.66093 10.8006 8.16344L8.70676 9.41972C7.86923 9.92224 7.19922 9.50348 7.19922 8.5822V6.06964C7.19922 4.98086 7.86923 4.64585 8.70676 5.14837Z"--}}
            {{--fill="currentColor"/>--}}
            {{--</svg>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->

<!-- cart mini area start -->
<div class="cartmini__area">
    <div class="cartmini__wrapper d-flex justify-content-between flex-column">
        <div class="cartmini__top-wrapper">
            <div class="cartmini__top p-relative">
                <div class="cartmini__top-title">
                    <h4>Shopping cart</h4>
                </div>
                <div class="cartmini__close">
                    <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="cartmini__shipping">
                <p> Free Shipping for all orders over <span>$50</span></p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="cartmini__widget">
                <div class="cartmini__widget-item">
                    <div class="cartmini__thumb">
                        <a href="shop-details.html">
                            <img src="/themes/beyond/img/inner-blog/blog-sidebar/rc-post/rc-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="cartmini__content">
                        <h5 class="cartmini__title"><a href="shop-details.html">Level Bolt Smart Lock</a></h5>
                        <div class="cartmini__price-wrapper">
                            <span class="cartmini__price">$46.00</span>
                            <span class="cartmini__quantity">x2</span>
                        </div>
                    </div>
                    <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                </div>
            </div>
            <!-- for wp -->
            <!-- if no item in cart -->
            <div class="cartmini__empty text-center d-none">
                <img src="/themes/beyond/img/product/cartmini/empty-cart.png" alt="">
                <p>Your Cart is empty</p>
                <a href="shop.html" class="tp-btn">Go to Shop</a>
            </div>
        </div>
        <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
                <h4>Subtotal:</h4>
                <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
                <a href="cart.html" class="tp-btn-black-2 text-center mb-10 w-100"> view cart</a>
                <a href="checkout.html" class="tp-btn-black-2 text-center w-100"> checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- cart mini area end -->
<header class="tp-header-height">
    <!-- header top area start -->
    <div id="header-sticky" class="tp-header-area tp-header-mob-space tp-transparent pl-60 pr-60 z-index-9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="tp-header-logo">
                        <a class="logo-1" href="{{ BaseHelper::getHomepageUrl() }}">
                            {{ Theme::getLogoImage(maxHeight: 50) }}
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 d-none d-xl-block">
                    <div class="tp-header-menu header-main-menu text-center">
                        <nav class="tp-main-menu-content">
                            {!!
                             Menu::renderMenuLocation('main-menu', [
                                 'options' => ['class' => ' menu sub-menu--slideLeft'],
                                 'view'    => 'main-menu-new',
                             ])
                         !!}
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg col-6">
                    <div class="tp-header-bar text-end">
                        <button class="tp-offcanvas-open-btn">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top area end -->

</header>

@if(1==0)
    <header>

        <!-- header top area start -->
        <div id="header-sticky" class="tp-header-3-area mt-35 z-index-5">
            <span class="menu-bg"></span>
            <div class="container container-1740">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                        <div class="tp-header-logo tp-header-3-logo">
                            <a class="logo-1" href="{{ BaseHelper::getHomepageUrl() }}">
                                {{ Theme::getLogoImage(maxHeight: 50) }}
                            </a>
                            {{--<a class="logo-2" href="index.html"><img src="/themes/beyond/img/logo/logo-white.png" alt=""></a>--}}
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 header-section d-none d-xl-block">
                        <div class="tp-header-3-menu-wrap text-center">
                            <div class="tp-header-3-menu-box d-inline-flex align-items-center justify-content-between">
                                <div class="tp-header-3-menu header-main-menu">
                                    <nav class="tp-main-menu-content">
                                        {!!
                                Menu::renderMenuLocation('main-menu', [
                                    'options' => ['class' => ' menu sub-menu--slideLeft'],
                                    'view'    => 'main-menu-new',
                                ])
                            !!}
                                    </nav>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                        <div class="tp-header-3-right d-flex align-items-center justify-content-end">
                            <div class="tp-header-3-social d-none d-sm-block">
                                @if ($socialLinks = Theme::getSocialLinks())
                                    @foreach($socialLinks as $socialLink)
                                        {{--{!! dd($socialLink) !!}--}}
                                        {{--@continue(! $icon = $socialLink->getIconHtml())--}}
                                        <a {{ $socialLink->getAttributes() }}><i
                                                    class="fa-brands fa-{{$socialLink->getName()}}"></i></a>
                                    @endforeach
                                @endif

                                {{--<a href="#"><i class="fa-brands fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa-brands fa-instagram"></i></a>--}}
                            </div>
                            <button class="tp-header-3-bar tp-offcanvas-open-btn d-xl-none"><i
                                        class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->

    </header>
@endif
<div id="smooth-wrapper">
    <div id="smooth-content">

        <main class="@if(Request::is('/'))
                home
            @endif">