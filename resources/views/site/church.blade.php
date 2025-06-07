@php
    $media = $item->medias('cover')->first();
    $imageUrl = $item->image('cover');
    $imageAlt = $media?->alt_text ?? $item->title;
@endphp

<!doctype html>
<html lang="en">
<head>
    <title>{{ $item->title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-menu/>
<div class="mx-auto max-2xl prose">
    <h1>{{ $item->title }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col">
            <div>{{ $item->location }}</div>
            <div><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></div>
            <div><a href="{{ $item->url }}">Website</a></div>
        </div>
        @if ($imageUrl)
            <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" />
        @endif
    </div>

    <div>{!! $item->description !!}</div>
    <div class="mt-12">{!! $item->map_link !!}</div>
</div>
</body>
</html>
