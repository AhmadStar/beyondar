@php
    $lang = app()->getLocale();
@endphp

<!-- hero area start -->
<div class="tm-hero-area tm-hero-ptb">
    <div class="container">
       <div class="row">
          <div class="col-xl-12">
             <div class="tm-hero-content">
                <span class="tm-hero-subtitle">{{ __("Beyond Creative")}}</span>
                <h4 class="tm-hero-title fs-220 tp-char-animation">{{ __("Work")}}</h4>
             </div>
             <div class="tm-hero-text tp_title_anim">
                <p>
                   {{ __("We’re a diverse team that works as fancies attention to details, enjoys beers on Friday nights and aspires to design the dent in the universe.")}}
                </p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- hero area end -->

 <!-- portfolio area start -->
 <div class="tp-project-5-2-area tp-project-5-2-pt pb-130">
    <div class="container container-1530">
       <div class="row justify-content-center">
          <div class="col-xl-8">
             <div class="portfolio-filter masonary-menu d-flex justify-content-center mb-60">
                <button data-filter="*" class="active"><span>{{ __("SHOW ALL")}}</span></button>
                <button data-filter=".Marketing"><span>{{ __("Marketing")}}</span></button>
                <button data-filter=".Design"><span>{{ __("Design")}}</span></button>
                <button data-filter=".Video"><span>{{ __("Video")}}</span></button>
                <button data-filter=".Planning"><span>{{ __("Planning")}}</span></button>
             </div>
          </div>
       </div>
       <div class="row grid">

        @foreach ($projects as $project)
          <div class="col-xl-4 col-lg-6 col-md-6 grid-item {{ $project->category }}">
             <div class="tp-project-5-2-thumb anim-zoomin-wrap mb-30 p-relative not-hide-cursor">
                <a class="cursor-hide" href="/{{ $lang }}/project/{{ $project->slug }}">
                   <span>
                      <img class="anim-zoomin" src="{{ RvMedia::getImageUrl($project->image, 'default') }}" alt="{{ $project->name }}">
                   </span>
                   <div class="tp-project-5-2-category tp_fade_anim">
                      <span>{{ $project->name }}</span>
                   </div>
                   <div class="tp-project-5-2-content tp_fade_anim">
                      <h4 class="tp-project-5-2-title-sm">{{ $project->name }}</h4>
                   </div>
                </a>
             </div>
          </div>
        @endforeach
       </div>
    </div>
 </div>
 <!-- portfolio area end -->

 <!-- contact area start -->
 <div class="sv-big-text-area pb-80">
    <div class="container container-1530">
       <div class="sv-small-text-box d-flex justify-content-between">
       </div>
       <div class="sv-big-text-box">
          <h4 class="sv-big-text tp-char-animation"><a href="/contact">Get in Touch</a></h4>
       </div>
    </div>
 </div>
 <!-- contact area end -->
