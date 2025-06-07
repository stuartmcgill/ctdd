@extends('site.layouts.app')

@section('title', $item->title)

@section('content')
    {!! $item->renderBlocks() !!}
@endsection
