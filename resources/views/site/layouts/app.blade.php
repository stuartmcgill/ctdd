<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Churches Together in Didcot and District')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<x-menu/>
<div class="mx-auto max-w-2xl scope">
{{--    TODO remove--}}
    <div id="app-button">
        <app-button label="Hello" />
    </div>

    @yield('content')
</div>
</body>
</html>
