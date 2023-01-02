@props(['tagsCsv'])

@php
    $tags = explode(', ', $tagsCsv);
@endphp

<div class="pt-4 pb-2">
    @foreach ($tags as $tag)
        <span class="inline-block py-1 text-sm font-semibold text-gray-500 hover:text-indigo-500 hover:underline mr-1">
            <a href="/?tag={{$tag}}">{{'#'.$tag }}</a>
        </span>    
    @endforeach
</div>