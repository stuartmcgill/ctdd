@extends('site.layouts.app')

@section('title', 'CTDD church list')

@section('content')
  <div class="flex flex-col">
    <h1>Churches</h1>
    <div>There are {{ $churches->count() }} members of Churches Together in Didcot and District.
      You can find out more about each church below, or find a church
      <x-app-link href="#church-near-you">near
        you.
      </x-app-link>
    </div>
  </div>
  <div class="app-section lg:-mx-32 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($churches as $church)
      <x-church-card :church="$church"/>
    @endforeach
  </div>
  <div id="church-near-you" class="app-section flex flex-col">
    <h1>Find a church near you</h1>
    <div>This map shows the location of all the members of Churches Together in Didcot and District.</div>
    <div class="mt-4 iframe-wrapper">
      <div>{!! $allChurchesMapEmbedCode !!}</div>
    </div>
  </div>
@endsection

