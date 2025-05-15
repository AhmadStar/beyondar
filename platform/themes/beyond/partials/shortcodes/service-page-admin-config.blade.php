<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" >
</div>
<div class="form-group">
    <label class="control-label">Image</label>
    {!! Form::mediaImage('img', Arr::get($attributes, 'img')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Text') }}</label>
    <textarea name="text" class="form-control" placeholder="{{ __('text') }}" rows="3">{{ Arr::get($attributes, 'text') }}</textarea>
</div>
<div class="form-group">
    <label class="control-label">icon 1</label>
    {!! Form::mediaImage('icon1', Arr::get($attributes, 'icon1')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Label Service 1') }}</label>
    <input type="text" name="ls1" value="{{ Arr::get($attributes, 'ls1') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Service 1') }}</label>
    <input type="text" name="s1" value="{{ Arr::get($attributes, 's1') }}" class="form-control" >
</div>
<div class="form-group">
    <label class="control-label">icon 2</label>
    {!! Form::mediaImage('icon2', Arr::get($attributes, 'icon2')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Label Service 2') }}</label>
    <input type="text" name="ls2" value="{{ Arr::get($attributes, 'ls2') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Service 2') }}</label>
    <input type="text" name="s2" value="{{ Arr::get($attributes, 's2') }}" class="form-control" >
</div>
<div class="form-group">
    <label class="control-label">icon 3</label>
    {!! Form::mediaImage('icon3', Arr::get($attributes, 'icon3')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Label Service 3') }}</label>
    <input type="text" name="ls3" value="{{ Arr::get($attributes, 'ls3') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Service 1') }}</label>
    <input type="text" name="s3" value="{{ Arr::get($attributes, 's3') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Btn Label') }}</label>
    <input type="text" name="btn" value="{{ Arr::get($attributes, 'btn') }}" class="form-control" >
</div>


<div class="mb-3">
    <label class="form-label">{{ __('Btn URL') }}</label>
    <input type="text" name="url" value="{{ Arr::get($attributes, 'url') }}" class="form-control" >
</div>