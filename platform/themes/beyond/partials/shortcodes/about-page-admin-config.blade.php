<div class="form-group">
    <label class="control-label">Main Image</label>
    {!! Form::mediaImage('main_img', Arr::get($attributes, 'main_img')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control"
           placeholder="{{ __('Title') }}">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Text') }}</label>
    <textarea name="text" class="form-control" placeholder="{{ __('text') }}"
              rows="3">{{ Arr::get($attributes, 'text') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Btn Label') }}</label>
    <input type="text" name="btn" value="{{ Arr::get($attributes, 'btn') }}" class="form-control">
</div>


<div class="mb-3">
    <label class="form-label">{{ __('Btn URL') }}</label>
    <input type="text" name="url" value="{{ Arr::get($attributes, 'url') }}" class="form-control">
</div>
<div class="form-group">
    <label class="control-label">About Image 1</label>
    {!! Form::mediaImage('about_img_1', Arr::get($attributes, 'about_img_1')) !!}
</div>
<div class="form-group">
    <label class="control-label">About Image 2</label>
    {!! Form::mediaImage('about_img_2', Arr::get($attributes, 'about_img_2')) !!}
</div>
<div class="form-group">
    <label class="control-label">About Image 3</label>
    {!! Form::mediaImage('about_img_3', Arr::get($attributes, 'about_img_3')) !!}
</div>
<hr>
<div class="form-group">
    <label class="control-label">List</label>
@for($i=1;$i<18;$i++)
    <div class="mb-3">
        <label class="form-label">{{ __('Item') }} {{$i}}</label>
        <input type="text" name="list_item{{$i}}" value="{{ Arr::get($attributes, 'list_item'.$i) }}" class="form-control"
             >
    </div>
@endfor
</div>