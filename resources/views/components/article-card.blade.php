<a href="{{ $article->url() }}"
   class="sm:max-w-sm app-card flex flex-col">
  <x-twill-image :item="$article" class="rounded-b-none rounded-t-lg"/>
  <div class="pt-0 p-4 flex flex-col h-full">
    <h2 class="mb-2 app-card-heading">{{ $article->title }}</h2>
    <p class="mb-3 font-normal text-gray-700">{{ $article->description }}</p>
    <div class="mt-auto">
      <x-more-button/>
    </div>
  </div>
</a>
