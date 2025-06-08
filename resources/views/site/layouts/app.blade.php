<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Churches Together in Didcot and District')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<x-menu/>
<div id="app" class="mx-auto max-2xl prose">
    @yield('content')
</div>
</body>
</html>
