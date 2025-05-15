@if ($posts->isNotEmpty())
    @foreach($posts as $post)
        <div class="col-xl-4 col-lg-6 col-md-6 mb-50">

            <div class="tp-blog-item">
                <div class="tp-blog-thumb fix p-relative">
                    <img src="{{ RvMedia::getImageUrl($post->image,'medium') }}" alt="">
                    <div class="tp-blog-meta">
                               <span class="created_at">
                                    {!! BaseHelper::renderIcon('ti ti-clock') !!} {{ Theme::formatDate($post->created_at) }}
                                </span>
                    </div>
                </div>
                <div class="tp-blog-content">
                    <span> <a href="{{ $post->first_category->url }}">{{ $post->first_category->name }}</a></span>
                    <h4 class="tp-blog-title-sm"><a href="{{$post->url}}">{{$post->name}}</a></h4>
                </div>
            </div>

        </div>
    @endforeach
    <div class="page-pagination text-right">
        {!! $posts->withQueryString()->links() !!}
    </div>
@endif

<style>
    .section.pt-50.pb-100 {
        background-color: #ecf0f1;
    }
</style>
