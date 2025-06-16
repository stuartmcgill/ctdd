<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Churches Together in Didcot and District')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<x-navbar />
<div class="mx-auto max-w-2xl my-12 px-8 md:px-0 prose app-content">
    @yield('content')
</div>
<x-footer />
@yield('scripts')
</body>
</html>
