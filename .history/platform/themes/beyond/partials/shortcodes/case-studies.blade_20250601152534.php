@php
    $lang = 'en';
@endphp

<div id="smooth-wrapper">
    <div id="smooth-content">
        <?php $lang = 'en'; ?>
        <div class="tp-portfolio-9-area  pt-50">
            <div class="container container-1685">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-perspective-slider">
                            @foreach ($casestudies as $casestudy)
                                <div class="tp-slide">
                                    <div class="tp-slide-inner">
                                        <div class="tp-image"
                                            data-background="{{ RvMedia::getImageUrl($casestudy->image) }}">
                                            <div class="tp-slider-content">
                                                <span class="tp-portfolio-9-category tp_reveal_anim">Case Studies</span>
                                                <h1 class="tp-portfolio-9-title tp_reveal_anim not-hide-cursor"
                                                    data-cursor="View<br>Demo">
                                                    <a class="cursor-hide"
                                                        href="{{ $lang }}/case-study/{{ $casestudy->slug }}">{{ $casestudy->name }}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
