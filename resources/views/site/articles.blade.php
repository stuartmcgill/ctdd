@extends('site.layouts.app')

@section('title', 'CTDD article list')

@section('content')
  <div class="app-condensed ">
    <div class="lg:-mx-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($articles as $article)
        <x-article-card :article="$article"/>
      @endforeach
    </div>
  </div>
@endsection
