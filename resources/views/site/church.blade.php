@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  @php
    $media = $item->medias('cover')->first();
    $imageAlt = $media?->alt_text ?? $item->title;

    $desktopUrl = $item->image('cover');
    $mobileUrl = $item->image('cover', 'mobile');
  @endphp

  <div class="text-center sm:text-start">
    <h1>{{ $item->title }}</h1>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-[1fr,2fr] gap-4">
    <div
      class="mx-auto sm:mx-0 w-fit h-fit justify-center sm:justify-start px-4 py-2 text-xl font-semibold  text-red-700 bg-red-50 rounded-lg"
    >
      {{ $item->location }}
    </div>

    <div class="w-full flex flex-col gap-2 items-center sm:items-start">
      <div class="flex items-center flex-wrap gap-3 group">
        <x-icon-envelope class="w-5 h-5 text-red-700 group-hover:text-red-500"/>
        <a href="mailto:{{ $item->email }}" class=" group-hover:text-red-500">{{ $item->email }}</a>
      </div>

      @if($item->url)
        <a href="{{ $item->url }}" class=" flex items-center flex-wrap gap-3 group">
          <x-icon-globe class="w-5 h-5 text-red-700 group-hover:text-red-500"/>
          <button type="button"
                  class="app-button">
            Visit website
          </button>
        </a>
      @endif
    </div>
  </div>

  @if ($media)
    <picture>
      <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
      <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;"
           class="mt-8 w-full bg-white border border-red-100 shadow-sm">
    </picture>
  @endif

  <div class=" mt-8">{!! $item->description !!}</div>
  <h2 class="mt-16">Map</h2>
  <div class="iframe-wrapper">
    {!! $item->map_link !!}
  </div>
@endsection
