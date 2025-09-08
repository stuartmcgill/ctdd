@php
  use App\Repositories\ArticleRepository;

  $news = app(ArticleRepository::class)->fetchRecent(3);
  $primary = $news[0] ?? null;
  $others = $news->skip(1);
@endphp

@if($primary)
  <div class="md:-mx-12 lg:-mx-40">
    <div class="my-8 sm:my-12 lg:mb-24">
      <div class="flex flex-col">
        <a href="{{ $primary->url() }}" class="grid grid-cols-1 sm:grid-cols-[67%_33%] gap-4 app-card">
          <x-twill-image :item="$primary" class="rounded-t-lg rounded-b-none sm:rounded-l-lg sm:rounded-r-none"/>
          <div class="p-4 flex flex-col gap-3">
            <div class="mt-2 sm:mt-6 text-xl font-semibold uppercase">{{ $primary->title }}</div>
            <div>{{ $primary->description }}</div>
          </div>
        </a>
      </div>
      @if($others->isNotEmpty())
        <div class="mt-6 flex items-center justify-between gap-4">
          <h2>Latest news</h2>
          <a href="/articles" class="mt-8 mb-4 text-md !no-underline">See all →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
          @foreach($others as $other)
            <a href="{{ $other->url() }}" class="flex flex-col app-card">
              <x-twill-image :item="$other" class="rounded-b-none rounded-t-lg"/>
              <div class="p-4 flex flex-col gap-3">
                <div class="mt-4 text-lg font-semibold uppercase">{{ $other->title }}</div>
                <div>{{ $other->description }}</div>
              </div>
            </a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
@endif
