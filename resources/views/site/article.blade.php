@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <x-section class="app-wysiwyg">
    {!! $item->renderBlocks() !!}
  </x-section>
@endsection
