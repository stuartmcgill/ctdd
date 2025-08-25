@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
  <x-group :group="$item"/>
@endsection
