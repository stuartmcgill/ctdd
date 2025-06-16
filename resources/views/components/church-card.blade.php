@php
  $media = $church->medias('cover')->first();
  $imageAlt = $media?->alt_text ?? $church->title;

  $desktopUrl = $church->image('cover');
  $mobileUrl = $church->image('cover', 'mobile');
@endphp

{{--@ TODO SJM - rewrite without prose--}}
<a href="{{ $church->url }}" class="flex flex-col items-center bg-white border border-red-600 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
  @if ($media)
    <picture>
      <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
      <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;" class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg">
    </picture>
  @endif
  <div class="flex flex-col justify-between p-4 leading-normal">
    <div class="flex">hello</div>
{{--    <a href="mailto:{{ $church->email }}">{{ $church->email }}</a>--}}
{{--    <a href="{{ $church->url }}">Website</a>--}}
  </div>
</a>
