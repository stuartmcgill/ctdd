@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <h1>{{ $item->description }}</h1>
  <div class="app-wysiwyg">
    {!! $item->renderBlocks() !!}
  </div>
@endsection
