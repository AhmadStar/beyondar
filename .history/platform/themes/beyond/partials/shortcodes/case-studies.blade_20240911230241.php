<div id="smooth-wrapper">
    <div id="smooth-content">

@if(1==0)
        {{--{{dd($casestudies)}}--}}
        <!-- PERSPECTIVE PORTFOLIO	 -->
        <div class="tp-portfolio-9-area  pt-50">
            <div class="container container-1685">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-perspective-slider">
                            @for($i=1;$i<10;$i++)
                                <div class="tp-slide">
                                    <div class="tp-slide-inner">
                                        <div class="tp-image" data-background="{{ RvMedia::getImageUrl($shortcode->{'logo'.$i}) }}">
                                            <div class="tp-slider-content">
                                                <span class="tp-portfolio-9-category tp_reveal_anim">Case Study</span>
                                                <h1 class="tp-portfolio-9-title tp_reveal_anim not-hide-cursor" data-cursor="View<br>Demo">
                                                    <a class="cursor-hide" href="{{($shortcode->{'btn'.$i})}}">{{($shortcode->{'lb'.$i})}}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor




                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PERSPECTIVE PORTFOLIO	 -->
        @endif
    </div>
</div>
<?php $lang='en' ?>
@if(1==1)
<div id="smooth-wrapper">
    <div id="smooth-content">
        <?php $lang='en' ?>
        {{--{{dd($casestudies)}}--}}
                <!-- PERSPECTIVE PORTFOLIO	 -->
        <div class="tp-portfolio-9-area  pt-50">
            <div class="container container-1685">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-perspective-slider">
                            @foreach($casestudies as $casestudy)
                                {{--$i=1;$i<=$shortcode->total;$i++)--}}
                                <div class="tp-slide">
                                    <div class="tp-slide-inner">
                                        <div class="tp-image" data-background="{{ RvMedia::getImageUrl($casestudy->image) }}">
                                            <div class="tp-slider-content">
                                                <span class="tp-portfolio-9-category tp_reveal_anim">Case Studies</span>
                                                <h1 class="tp-portfolio-9-title tp_reveal_anim not-hide-cursor" data-cursor="View<br>Demo">
                                                    <a class="cursor-hide" href="{{$lang}}/case-study/{{$casestudy->slug}}">{{$casestudy->name}}</a>
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

        <!-- PERSPECTIVE PORTFOLIO	 -->

    </div>
</div>
@endif