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
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div class="flex flex-col text-sm">
      <div class="px-4 py-2 w-fit text-xl font-semibold  text-red-700 bg-red-50 rounded-lg">{{ $item->location }}</div>
      <div><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></div>
      @if($item->url)
        <div><a href="{{ $item->url }}">{{ $item->url }}</a></div>
      @endif
    </div>
    @if ($media)
      <picture>
        <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
        <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
        <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
        <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;"
             class="max-w-sm bg-white border border-red-100 shadow-sm">
      </picture>
    @endif
  </div>

  <div class=" mt-8">{!! $item->description !!}</div>
  <h2 class="mt-16">Map</h2>
  <div>{!! $item->map_link !!}</div>
@endsection
