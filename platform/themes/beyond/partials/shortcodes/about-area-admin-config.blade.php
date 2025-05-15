<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Text') }}</label>
    <textarea name="text" class="form-control" placeholder="{{ __('text') }}" rows="3">{{ Arr::get($attributes, 'text') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Btn Label') }}</label>
    <input type="text" name="btn" value="{{ Arr::get($attributes, 'btn') }}" class="form-control" >
</div>


<div class="mb-3">
    <label class="form-label">{{ __('Btn URL') }}</label>
    <input type="text" name="url" value="{{ Arr::get($attributes, 'url') }}" class="form-control" >
</div>