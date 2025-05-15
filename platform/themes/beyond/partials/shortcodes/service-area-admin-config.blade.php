<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Btn URL') }}</label>
    <input type="text" name="btnURL" value="{{ Arr::get($attributes, 'btnURL') }}" class="form-control" >
</div>