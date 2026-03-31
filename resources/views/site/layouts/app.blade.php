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

  {{-- Default structured data: always present --}}
  <script type="application/ld+json">
    @php
      echo json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'Organization',
      'name' => 'Churches Together in Didcot and District',
      'alternateName' => 'CTDD',
      'description' => 'A group of local churches working together to serve our community and share the love of Christ',
      'url' => 'https://www.ctdd.org.uk',
      'logo' => 'https://www.ctdd.org.uk/assets/images/structured-data-logo.png',
      'email' => 'secretary@ctdd.org.uk',
      'foundingDate' => '1993-01-24',
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    @endphp
  </script>

  {{-- Additional page-specific schema pushed from child views --}}
  @stack('structured_data')
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
