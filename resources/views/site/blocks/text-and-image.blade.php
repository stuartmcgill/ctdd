@php
  $textOrder = $block->input('flip_order') == 1 ? 'md:order-2' : 'md:order-1';
  $imageOrder = $block->input('flip_order') == 1 ? 'md:order-1' : 'md:order-2';
@endphp

<div class="my-4 md:my-8 overflow-clip relative"
     id="section-{{ Str::slug($block->input('title')) }}">
  <div class="container mx-auto relative">
    <div class="grid md:grid-cols-2">
      <div @class([
            'order-1',
            $textOrder,
            'md:flex', 'md:flex-col', 'md:justify-center',
        ])>
        <div class="rounded">
          <h2>{{ $block->input('title') }}</h2>
          <p>{!! $block->wysiwyg('text') !!}</p>
        </div>
      </div>
      <div @class([
            'order-2',
            $imageOrder,
            'md:flex', 'md:flex-col', 'md:justify-center',
        ])>
        <div class="py-8 mx-auto max-w-2xl flex items-center">
          <img src="{{ $block->image('highlight', 'desktop') }}"/>
        </div>
      </div>
    </div>
  </div>
</div>
