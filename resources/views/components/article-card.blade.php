<a href="{{ $article->url() }}"
   class="app-card">
  <x-twill-image :item="$article"/>
  <div class="p-4">
    <h2 class="mb-2 app-card-heading">{{ $article->title }}</h2>
    <p class="mb-3 font-normal text-gray-700">{{ $article->description }}</p>
    <div class="flex items-center justify-between">
      <x-more-button/>
      <div class="uppercase text-gray-500">{{ $article->created_at->format('d M Y') }}</div>
    </div>
  </div>
</a>
