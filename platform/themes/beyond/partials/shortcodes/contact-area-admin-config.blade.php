<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           placeholder="{{ __('Title') }}">
</div>
@for($i=1;$i<4;$i++)
<div class="row">
    <div class="form-group col-md-6">
        <label class="control-label">image {{$i}}</label>
        {!! Form::mediaImage('image'.$i, Arr::get($attributes, 'image'.$i)) !!}
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Country') }} {{$i}}</label>
        <input type="" name="Country{{$i}}" value="{{ Arr::get($attributes, 'Country'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Address') }} {{$i}}</label>
        <input type="" name="address{{$i}}" value="{{ Arr::get($attributes, 'address'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Email') }} {{$i}}</label>
        <input type="" name="email{{$i}}" value="{{ Arr::get($attributes, 'email'.$i) }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Phone') }} {{$i}}</label>
        <input type="" name="phone{{$i}}" value="{{ Arr::get($attributes, 'phone'.$i) }}" class="form-control">
    </div>
</div>





@endfor
