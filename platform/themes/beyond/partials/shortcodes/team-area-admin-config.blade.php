<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           placeholder="{{ __('Title') }}">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Total') }}</label>
    <input type="text" name="total" value="{{ Arr::get($attributes, 'total') }}" class="form-control"
           placeholder="{{ __('total') }}">
</div>
@for($i=1;$i<=Arr::get($attributes, 'total');$i++)
<div class="row">
    <div class="form-group col-md-6">
        <label class="control-label">Image {{$i}}</label>
        {!! Form::mediaImage('image'.$i, Arr::get($attributes, 'image'.$i)) !!}
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Name') }} {{$i}}</label>
        <input type="" name="name{{$i}}" value="{{ Arr::get($attributes, 'name'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Position') }} {{$i}}</label>
        <input type="" name="position{{$i}}" value="{{ Arr::get($attributes, 'position'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Image URL') }} {{$i}}</label>
        <input type="" name="btn{{$i}}" value="{{ Arr::get($attributes, 'btn'.$i) }}" class="form-control">
    </div>
</div>





@endfor
