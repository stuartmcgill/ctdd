@extends('site.layouts.app')

@section('title', 'Page not found')

@section('content')
  <x-section>
    <h1>Page not found</h1>
    <p>The page you're looking for doesn't exist.</p>
    <x-app-button label="Go home" url="/"/>
  </x-section>
@endsection
