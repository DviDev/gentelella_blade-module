@props([
    'icheck' => true,
])
@if($icheck)
    <x-gentelella::assets.icheck/>
@endif
<x-gentelella::dev.info :alias="$componentAlias->value"/>
<input type="checkbox" class="flat">
