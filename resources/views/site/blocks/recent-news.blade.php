@php
  use App\Repositories\ArticleRepository;
  $recentNews = app(ArticleRepository::class)->fetchRecent(3);
@endphp

<div>
  {{ $recentNews }}
</div>
