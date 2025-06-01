<!-- project details area start -->

<div class="showcase-details-2-area showcase-details-2-bg p-relative"
    data-background="{{ RvMedia::getImageUrl($project->image) }}">
    <div class="showcase-details-2-link">
        <a class="project-details-custom-link" href=" {{ $project->website }}">
            {{-- Visit Website --}}
            <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.27344 9.5L9.27344 1.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.27344 1.5H9.27344V9.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </span>
        </a>
    </div>
    <div class="showcase-details-2-wrapper" data-lag="0.2" data-stagger="0.08">
        <div class="container container-1550">
            <div class="row">
                <div class="col-xl-8">
                    <div class="showcase-details-2-title-box">
                        <span class="showcase-details-2-subtitle tp_title_anim">{{ __('Case Study') }}</span>

                        <h5 class="showcase-details-2-title mb-20 tp-char-animation">{{ $project->name }}</h5>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-10">
                    <div class="showcase-details-2-content tp_title_anim">
                        {{ $project->description }}
                    </div>
                </div>
                <div class="col-xxl-12 col-xl-12">
                    <div class="showcase-details-2-info-wrap mt-30 d-flex align-items-center justify-content-between">

                        <div class="showcase-details-2-info tp_fade_bottom">
                            <span>{{ __('Date') }}</span><br>
                            <span>{{ \Carbon\Carbon::parse($project->date)->format('F j, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="showcase-details-2-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="showcase-details-2-section-box">
                    <h4 class="showcase-details-2-section-title tp-char-animation">{{ __("Case Study") }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="showcase-details-2-section-left">
                    <span class="ab-inner-subtitle mb-25">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C12 3.0432 9.53292 5.5102 6.48975 5.5102C6.48975 2.46701 8.95677 0 12 0Z"
                                fill="currentcolor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.0231934 0.0231209C3.06639 0.0231209 5.5334 2.49015 5.5334 5.53333C2.4902 5.53333 0.0231934 3.0663 0.0231934 0.0231209Z"
                                fill="currentcolor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.48975 6.4898C9.53294 6.4898 12 8.95682 12 12C8.95675 12 6.48975 9.53297 6.48975 6.4898Z"
                                fill="currentcolor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.5102 6.48981C5.5102 9.533 3.04318 12 0 12C0 8.95681 2.46703 6.48981 5.5102 6.48981Z"
                                fill="currentcolor" />
                        </svg>
                        {{ $project->name }}
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="showcase-details-2-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="showcase-details-2-section-box">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12">
                <div class="showcase-details-2-content-right tp_title_anim">
                    {!! $project->content !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="showcase-details-2-slider-area pb-120">
    <div class="moving-gallery">
        <div class="showcase-details-2-slider-wrap wrapper-gallery slider-wrap-top d-flex align-items-end mb-20">
            @if ($project->images)

                @foreach ($project->images as $img)
                    <div class="showcase-details-2-slider-item">
                        <img style="max-width:380px" src="{{ RvMedia::getImageUrl($img) }}" alt="">
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="moving-gallery">
        <div class="showcase-details-2-slider-wrap wrapper-gallery slider-wrap-bottom d-flex align-items-start">
            @if ($project->images)
                @foreach (array_reverse($project->images) as $img)
                    <img style="max-width:390px" src="{{ RvMedia::getImageUrl($img) }}" alt="">
                @endforeach
            @endif
        </div>
    </div>
</div>
