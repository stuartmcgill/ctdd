<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Churches Together in Didcot and District')</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="min-h-screen flex flex-col overflow-y-scroll scroll-smooth">
<x-navbar/>
<div class="mx-auto max-w-2xl my-4 sm:my-8 md:my-12 px-2 sm:px-4 md:px-8 prose app-content">
  @yield('content')
</div>
<x-footer/>
@stack('scripts')
</body>
</html>
