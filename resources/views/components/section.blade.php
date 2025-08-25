@if ($highlighted)
  <div class="app-section w-full min-w-0 bg-red-100">
    <div class="mx-auto max-w-2xl px-4">
      {{ $slot }}
    </div>
  </div>
@else
  <div class="app-section mx-auto max-w-2xl">
    {{ $slot }}
  </div>
@endif
