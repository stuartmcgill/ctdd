@php
  $page = $block->getRelated('page')->firstWhere('published', true);
  $url = isset($page) ? route('frontend.page', $page->slug) : '#';
@endphp

<div>
  <a href="{{ $url }}">
    <button class="app-button">{{ $block->input('button_text') }}</button>
  </a>
</div>
