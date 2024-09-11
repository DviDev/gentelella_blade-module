@props([
    'title' => '',
    'value',
    'footer' => '',
])
<div class="col-md-2 col-sm-4 tile_stats_count">
    <span class="count_top">{{$title}}</span>
    @if(is_string($value))
        <div class="count">{{$value}}</div>
    @else
        <div {{ $value->attributes->class([])}}>{{$value}}</div>
    @endif
    <span class="count_bottom">{{$footer}}</span>
</div>
