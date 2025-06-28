@php
  $textOrder = $block->input('flip_order') == 1 ? 'md:order-2' : 'md:order-1';
  $imageOrder = $block->input('flip_order') == 1 ? 'md:order-1' : 'md:order-2';
  $caption = $block->input('caption') ?? null;
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
        <div class="py-8 mx-auto max-w-2xl flex flex-col items-center gap-2">
          <img src="{{ $block->image('highlight', 'desktop') }}"/>
          @if(isset($caption))
            <div class="text-sm text-gray-500">{!! $block->input('caption') !!}</div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
