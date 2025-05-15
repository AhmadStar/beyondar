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
        <div class="loader-text">{{ __("Loading") }} ...</div>
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
            </div>
            <div class="tp-offcanvas-main">
                <div class="tp-offcanvas-content">
                    <h3 class="tp-offcanvas-title">{{ __("Beyond Creative") }}</h3>
                    <p>{{ __("We believe the media industry is more than just visual, audio, or written content.") }}  </p>
                </div>
                <div class="tp-main-menu-mobile d-xl-none"></div>
                <div class="tp-offcanvas-gallery">
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
                                    <a {{ $socialLink->getAttributes() }}><i
                                                class="fa-brands fa-{{$socialLink->getName()}}"></i></a>
                                </li>
                            @endforeach
                        </ul>

                    @endif

                </div>
            </div>
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