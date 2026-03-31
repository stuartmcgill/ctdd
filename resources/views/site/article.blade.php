@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <x-section class="app-wysiwyg">
    {!! $item->renderBlocks() !!}
  </x-section>
@endsection

@push('structured_data')
  <script type="application/ld+json">
    @php
      echo json_encode([
        '@context'      => 'https://schema.org',
        '@type'         => 'NewsArticle',
        '@id'           => url()->current() . '#article',
        'mainEntityOfPage' => [
          '@type' => 'WebPage',
          '@id'   => url()->current(),
        ],
        'headline'      => $item->title,
        'image'         => $item->image('cover'),
        'datePublished' => $item->created_at->toIso8601String(),
        'publisher'     => [
          '@type' => 'Organization',
          'name'  => 'Churches Together in Didcot and District',
          'logo'  => [
            '@type' => 'ImageObject',
            'url'   => 'https://www.ctdd.org.uk/assets/images/structured-data-logo.png',
          ],
        ],
      ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    @endphp
  </script>
@endpush
