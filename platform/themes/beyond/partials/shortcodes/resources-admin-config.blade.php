<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           >
</div>

<div class="form-group">
    <label class="control-label">Image</label>
    {!! Form::mediaImage('img', Arr::get($attributes, 'img')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('News Title') }}</label>
    <input type="text" name="news_title" value="{{ Arr::get($attributes, 'news_title') }}" class="form-control">
</div>