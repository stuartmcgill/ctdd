@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <x-section>
    <h1 class="uppercase">{{ $item->description }}</h1>
    <div class="app-wysiwyg">
      {!! $item->renderBlocks() !!}
    </div>
  </x-section>
@endsection
