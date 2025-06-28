@extends('site.layouts.app')

{{--@section('title', $item->title)--}}

@section('content')
  <div class="app-wysiwyg">
    {!! $item->renderBlocks() !!}
  </div>
@endsection
