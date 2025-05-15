<!DOCTYPE html>
<html {!! Theme::htmlAttributes() !!}>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    @php(Theme::set('headerMeta', Theme::partial('header-meta')))

    {!! Theme::header() !!}
</head>
{{-- <body {!! Theme::bodyAttributes() !!}> --}}

<body id="body" class="tp-smooth-scroll  @if (Request::is('/')) home @else inner-page @endif">
    {{-- {!! apply_filters(THEME_FRONT_BODY, null) !!} --}}
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
            <div class="loader-text">{{ __('Loading') }} ...</div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
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
                        <svg width="37" height="38" viewBox="0 0 37 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="tp-offcanvas-main">
                <div class="tp-offcanvas-content">
                </div>
                <div class="tp-offcanvas-main">
                    <div class="tp-offcanvas-content">
                        <h3 class="tp-offcanvas-title">{{ __('Beyond Creative') }}</h3>
                        <p>{{ __('We believe the media industry is more than just visual, audio, or written content.') }}
                        </p>
                    </div>
                    <div class="tp-main-menu-mobile d-xl-none"></div>
                    <div class="tp-offcanvas-gallery">
                    </div>
                    <div class="tp-offcanvas-contact">
                        <h3 class="tp-offcanvas-title sm">{{ __('Information') }}</h3>

                        <ul>
                            <li><a href="tel:+90 552 455 15 51">+90 552 455 15 51</a></li>
                            <li><a
                                    href="mailto:{{ theme_option('contact_email') }}">{{ theme_option('contact_email') }}</a>
                            </li>
                            <li><a href="#">{{ theme_option('address') }}</a></li>
                        </ul>
                    </div>
                    <div class="tp-offcanvas-social">
                        <h3 class="tp-offcanvas-title sm">{{ __('Follow Us') }}</h3>

                        @if ($socialLinks = Theme::getSocialLinks())
                            <ul>

                                @foreach ($socialLinks as $socialLink)
                                    <li>
                                        <a {{ $socialLink->getAttributes() }}><i
                                                class="fa-brands fa-{{ $socialLink->getName() }}"></i></a>
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
                                {!! Menu::renderMenuLocation('main-menu', [
                                    'options' => ['class' => ' menu sub-menu--slideLeft'],
                                    'view' => 'main-menu-new',
                                ]) !!}
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
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main class="@if (Request::is('/')) home @endif">
