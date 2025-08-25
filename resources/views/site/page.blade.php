@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <div class="app-condensed">
    <h1>{{ $item->description }}</h1>
    <div class="app-wysiwyg">
      {!! $item->renderBlocks() !!}
    </div>
  </div>
@endsection
