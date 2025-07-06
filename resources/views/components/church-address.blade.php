<div class="mb-6">
  @if($officeAddress)
    <div class="grid grid-cols-1 md:grid-cols-[1fr,2fr] gap-x-4 gap-y-2">
      <div class="mt-4 md:mt-0 font-semibold">Sunday services</div>
      {{ $address }}
      <div class="mt-4 md:mt-0 font-semibold">Office</div>
      {{ $officeAddress }}
    </div>
  @else
    <div>
      {{ $address }}
    </div>
  @endif
</div>
