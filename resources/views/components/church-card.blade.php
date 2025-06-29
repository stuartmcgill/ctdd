<a href="{{ $church->url() }}"
   class="app-card flex flex-col h-full">
  <x-twill-image :item="$church"/>
  <div class="pt-0 p-4 h-full flex flex-col">
    <h2 class="mb-2 app-card-heading">{{ $church->title }}</h2>
    <p class="mb-3 font-normal text-gray-700">{{ $church->location }}</p>
    <div class="mt-auto">
      <x-more-button/>
    </div>
  </div>
</a>
