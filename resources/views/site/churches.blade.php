<!doctype html>
<html lang="en">
<head>
    <title>CTDD church list</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-menu/>
<div class="mx-auto max-2xl prose">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    @foreach($churches as $church)
        <a href="{{ $church->url()  }}">
            <div class="flex flex-col">
                {{ $church->title }}
            </div>
        </a>
    @endforeach
</div>
</div>
</body>
</html>
