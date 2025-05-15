<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="form-group col-md-6">
    <label class="control-label">Image </label>
    {!! Form::mediaImage('img', Arr::get($attributes, 'img')) !!}
</div>