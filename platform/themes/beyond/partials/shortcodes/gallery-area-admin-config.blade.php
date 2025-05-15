<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           placeholder="{{ __('Title') }}">
</div>
@for($i=1;$i<7;$i++)
<div class="row">
    <div class="form-group col-md-6">
        <label class="control-label">Logo {{$i}}</label>
        {!! Form::mediaImage('logo'.$i, Arr::get($attributes, 'logo'.$i)) !!}
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Image URL') }} {{$i}}</label>
        <input type="" name="btn{{$i}}" value="{{ Arr::get($attributes, 'btn'.$i) }}" class="form-control">
    </div>
</div>





@endfor
