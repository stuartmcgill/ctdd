@extends('site.layouts.app')

@section('title', 'CTDD article list')

@section('content')
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    @foreach($articles as $article)
      <x-article-card :article="$article"/>
    @endforeach
  </div>
@endsection
