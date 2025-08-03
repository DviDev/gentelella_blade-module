@props([
    'alias'
])

<x-dvui::dev.info suite="{{config('gentelella.name_lower')}}" :alias="$alias"/>
