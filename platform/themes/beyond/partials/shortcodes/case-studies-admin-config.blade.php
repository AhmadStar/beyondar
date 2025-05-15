<div class="mb-3">
    <label class="form-label">{{ __('total') }}</label>
    <input type="number" name="total" value="{{ Arr::get($attributes, 'total') }}" class="form-control"
           >
</div>
@for($i=1;$i<=Arr::get($attributes, 'total');$i++)
<div class="row">
    <div class="form-group col-md-6">
        <label class="control-label">Image {{$i}}</label>
        {!! Form::mediaImage('logo'.$i, Arr::get($attributes, 'logo'.$i)) !!}
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Label') }} {{$i}}</label>
        <input type="text" name="lb{{$i}}" value="{{ Arr::get($attributes, 'lb'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Image URL') }} {{$i}}</label>
        <input type="text" name="btn{{$i}}" value="{{ Arr::get($attributes, 'btn'.$i) }}" class="form-control">
    </div>
</div>





@endfor
