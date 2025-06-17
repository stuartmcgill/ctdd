@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
    @php
        $media = $item->medias('cover')->first();
        $imageAlt = $media?->alt_text ?? $item->title;

        $desktopUrl = $item->image('cover');
        $mobileUrl = $item->image('cover', 'mobile');
    @endphp

    <h1>{{ $item->title }}{{ $item->location !== 'Didcot' ? ", $item->location" : ''}}</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center">
        <div class="flex flex-col text-sm">
            <div>{{ $item->location }}</div>
            <div><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></div>
            <div><a href="{{ $item->url }}">Website</a></div>
        </div>
        @if ($media)
            <picture>
                <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
                <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
                <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
                <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;">
            </picture>
        @endif
    </div>

    <div>{!! $item->description !!}</div>
    <div class="mt-12">{!! $item->map_link !!}</div>
@endsection
