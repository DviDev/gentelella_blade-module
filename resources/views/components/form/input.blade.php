@props([
    'id' => null,
    'required' => false,
    'label' => null,
    'rounded' => false,
    'disabled' => false,
])
@php
    $id = $id ?: ($label ? Str::slug($label) : rand('1000', '9999'));
@endphp
<div class="item form-group">
    @if($label)
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="{{$id}}">
            {{ $label }}
            @if($required)
                <span class="required">*</span>
            @endif
        </label>
    @endif
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="{{$id}}"
               @if($required) required="required" @endif
               @disabled($disabled)
               {{ $attributes->class(["form-control", "rounded" => $rounded]) }}
            {{$attributes}}
        >
    </div>
</div>
