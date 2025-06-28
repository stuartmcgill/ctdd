@php
  $media = $article->medias('cover')->first();
  $imageAlt = $media?->alt_text ?? $article->title;

  $desktopUrl = $article->image('cover');
  $mobileUrl = $article->image('cover', 'mobile');
@endphp

<a href="{{ $article->url() }}"
   class="app-card max-w-sm bg-white border border-red-100 rounded-lg shadow-sm hover:bg-red-50 hover:border-red-200">
  @if ($media)
    <picture>
      <source srcset="{{ $mobileUrl }}" media="(max-width: 639px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 640px) and (max-width: 1023px)">
      <source srcset="{{ $desktopUrl }}" media="(min-width: 1024px)">
      <img src="{{ $desktopUrl }}" alt="{{ $imageAlt }}" style="width:100%; height:auto;"
           class="object-cover rounded-b-none rounded-t-lg">
    </picture>
  @endif
  <div class="p-4">
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $article->title }}</h2>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->description }}</p>
    <div class="flex items-center justify-between">
      <button
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
        More
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
      </button>
      <div class="uppercase text-gray-500">{{ $article->created_at->format('d M Y') }}</div>
    </div>
  </div>
</a>
