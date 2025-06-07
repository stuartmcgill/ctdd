<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Churches Together in Didcot and District')</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-menu/>
<div class="mx-auto max-2xl prose">
    @yield('content')
</div>
</body>
</html>
