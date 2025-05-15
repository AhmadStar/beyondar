
<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           placeholder="{{ __('Title') }}">
</div>




<hr>
<div class="form-group">

@for($i=1;$i<5;$i++)
    <div class="mb-3">
        <label class="form-label">{{ __('Label') }} {{$i}}</label>
        <input type="text" name="lb{{$i}}" value="{{ Arr::get($attributes, 'lb'.$i) }}" class="form-control"
             >
    </div>
        <div class="mb-3">
            <label class="form-label">{{ __('Number') }} {{$i}}</label>
            <input type="number" name="number{{$i}}" value="{{ Arr::get($attributes, 'number'.$i) }}" class="form-control"
            >
        </div>
@endfor
</div>