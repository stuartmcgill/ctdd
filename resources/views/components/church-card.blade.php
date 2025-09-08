<a href="{{ $church->buildUrl() }}"
   class="max-w-sm app-card flex flex-col h-full">
  <x-twill-image :item="$church" class="rounded-b-none rounded-t-lg"/>
  <div class="pt-0 p-4 h-full flex flex-col">
    <h3 class="mb-2 app-card-heading">{{ $church->title }}</h3>
    <p class="mb-3 font-normal text-gray-700">{{ $church->location }}</p>
    <div class="mt-auto">
      <x-more-button/>
    </div>
  </div>
</a>
