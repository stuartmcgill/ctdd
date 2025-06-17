@extends('site.layouts.app')

@section('title', 'CTDD church list')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach($churches as $church)
          <x-church-card :church="$church" />
        @endforeach
    </div>
@endsection

