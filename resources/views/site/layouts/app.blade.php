<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php
    $seoTitle = SEO::metatags()->getTitle();
    if (!$seoTitle) {
        $bladeTitle = trim($__env->yieldContent('title'));
        if ($bladeTitle) {
            SEO::setTitle("$bladeTitle | Churches Together in Didcot and District");
        } else {
            SEO::setTitle('Churches Together in Didcot and District');
        }

        $bladeDesc = trim($__env->yieldContent('description'));
        if ($bladeDesc) {
            SEO::setDescription($bladeDesc);
        }
    }
  @endphp

  {!! SEO::generate() !!}
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden overflow-y-scroll scroll-smooth">
<x-navbar/>
<div class="prose app-content">
  @yield('content')
</div>
<x-footer/>
@stack('scripts')
</body>
</html>
