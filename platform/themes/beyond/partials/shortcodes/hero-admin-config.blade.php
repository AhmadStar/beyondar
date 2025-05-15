<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>
<div class="form-group">
    <label class="control-label">Logo</label>
    {!! Form::mediaImage('logo', Arr::get($attributes, 'logo')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('SubTitle') }}</label>
    <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" placeholder="{{ __('Subtitle') }}">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Btn Label') }}</label>
    <input type="text" name="btn" value="{{ Arr::get($attributes, 'btn') }}" class="form-control" >
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Btn URL') }}</label>
    <input type="text" name="btnURL" value="{{ Arr::get($attributes, 'btnURL') }}" class="form-control" >
</div>