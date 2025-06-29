<a href="{{ $church->url() }}"
   class="app-card">
  <x-twill-image :item="$church"/>
  <div class="p-4">
    <h2 class="mb-2 app-card-heading">{{ $church->title }}</h2>
    <p class="mb-3 font-normal text-gray-700">{{ $church->location }}</p>
    <x-more-button/>
  </div>
</a>
