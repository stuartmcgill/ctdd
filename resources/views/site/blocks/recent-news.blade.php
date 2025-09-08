@php
  use App\Repositories\ArticleRepository;

  $news = app(ArticleRepository::class)->fetchRecent(3);
  $primary = $news[0] ?? null;
  $others = $news->skip(1);
@endphp

@if($primary)
  <div class="flex flex-col">
    <div class="grid grid-cols-1 sm:grid-cols-2">
      <x-twill-image :item="$primary"/>
      <div>{{ $primary->desccription }}</div>
    </div>
    @if($others->isNotEmpty())
      <h2>Latest news</h2>
    @endif
  </div>
@endif
