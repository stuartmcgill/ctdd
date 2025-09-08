@if ($media)
  <picture>
    <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
    <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
    <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
    <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;"
         class="object-cover {{ $class }}">
  </picture>
@endif
