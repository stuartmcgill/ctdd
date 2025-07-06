@php
  $label = $block->input('button_text');

  $page = $block->getRelated('page')->firstWhere('published', true);
  $url = isset($page) ? route('frontend.page', $page->slug) : '#';
@endphp

<div>
  <x-app-button :label="$label" :url="$url"/>
</div>
