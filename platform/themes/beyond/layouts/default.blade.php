{!! Theme::partial('header') !!}
{{--@if (Theme::get('section-name'))--}}
    {{--{!! Theme::partial('breadcrumbs') !!}--}}
{{--@endif--}}

                    {!! Theme::content() !!}

            {{--<div class="col-lg-3">--}}
                {{--<div class="page-sidebar">--}}
                    {{--{!! Theme::partial('sidebar') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
      
{!! Theme::partial('footer') !!}
