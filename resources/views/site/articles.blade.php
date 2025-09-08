@extends('site.layouts.app')

@section('title', 'CTDD news')

@section('content')
  <x-section>
    <h1 class="uppercase">News</h1>
    <div class="sm:mt-8 md:mt-12 lg:-mx-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($articles as $article)
        <x-article-card :article="$article"/>
      @endforeach
    </div>
  </x-section>
@endsection
