<?php

use Botble\Base\Facades\BaseHelper;
use Botble\Shortcode\View\View;
use Botble\Theme\Theme;

return [

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these events can be overridden by package config.
    |
     */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function (Theme $theme) {
        },
        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme) {
            // You may use this event to set up your assets.

            $version = get_cms_version();

            $theme->asset()->container('footer')->usePath()->add('jquery', 'js/vendor/jquery.js');
            $theme->asset()->container('footer')->usePath()->add('bootstrap-jquery', 'js/bootstrap-bundle.js');

            $theme->asset()->container('footer')->usePath()->add('gsap', 'js/gsap.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('scroll-to-plugin', 'js/gsap-scroll-to-plugin.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('gsap-scroll-smoother', 'js/gsap-scroll-smoother.js', ['gsap-scroll-to'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('gsap-scroll-trigger', 'js/gsap-scroll-trigger.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('gsap-split-text', 'js/gsap-split-text.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('chroma.min', 'js/chroma.min.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('three', 'js/three.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('tween-max', 'js/tween-max.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('scroll-magic', 'js/scroll-magic.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('range-slider', 'js/range-slider.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('swiper-bundle', 'js/swiper-bundle.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('slick', 'js/slick.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('magnific-popup', 'js/magnific-popup.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('nice-select', 'js/nice-select.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('purecounter', 'js/purecounter.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('beforeafter', 'js/beforeafter.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('isotope-pkgd', 'js/isotope-pkgd.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('imagesloaded-pkgd', 'js/imagesloaded-pkgd.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('webgl', 'js/webgl.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('main', 'js/main.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('tp-cursor', 'js/tp-cursor.js', ['jquery'], [], $version);
            $theme->asset()->container('footer')->usePath()->add('custom.js', 'js/custom.js', ['jquery'], [], $version);

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('bootstrap-css', 'plugins/bootstrap/css/bootstrap.rtl.min.css');
                $theme->asset()->usePath()->add('ar-css', 'css/ar.css');
            } else {
                $theme->asset()->usePath()->add('bootstrap-css', 'css/bootstrap.css');
            }

            $theme->asset()->usePath()->add('animate', 'css/animate.css', [], [], $version);
            $theme->asset()->usePath()->add('swiper-bundle', 'css/swiper-bundle.css', [], [], $version);
            $theme->asset()->usePath()->add('magnific', 'css/magnific-popup.css', [], [], $version);
            $theme->asset()->usePath()->add('font-awesome-pro', 'css/font-awesome-pro.css', [], [], $version);
            $theme->asset()->usePath()->add('slick', 'css/slick.css', [], [], $version);
            $theme->asset()->usePath()->add('spacing', 'css/spacing.css', [], [], $version);
            $theme->asset()->usePath()->add('custom-animation', 'css/custom-animation.css', [], [], $version);
            $theme->asset()->usePath()->add('main', 'css/main.css', [], [], $version);
            $theme->asset()->usePath()->add('custom', 'css/custom.css', [], [], rand(1,99));

            if (BaseHelper::isRtlEnabled()) {
                $theme->asset()->usePath()->add('rtl-style', 'css/rtl.css', [], [], $version);
                $theme->asset()->usePath()->add('rtl-style', 'css/ar-style.css', [], [], $version);
                $theme->asset()->usePath()->add('rtl-custom', 'css/rtl-custom.css', [], [], $version);

            }

            if (function_exists('shortcode')) {
                $theme->composer(['page', 'post'], function (View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function (Theme $theme) {
            },
        ],
    ],
];
