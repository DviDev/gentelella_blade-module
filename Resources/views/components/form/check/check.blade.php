@props([
    'icheck' => true,
])
@if($icheck)
    <x-gentelella::assets.icheck/>
@endif
<input type="checkbox" class="flat">
