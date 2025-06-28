<footer class="w-full mx-auto mt-auto text-white bg-red-600">
  <div class="p-4 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
    <ul class="mt-3 sm:mt-0 flex flex-wrap items-center gap-3 md:gap-4 text-sm">
      <li>
        <a href="/about-ctdd" class="hover:underline">About</a>
      </li>
      <li>
        <a href="/contact" class="hover:underline">Contact</a>
      </li>
      <li>
        <a href="/churches" class="hover:underline">Churches</a>
      </li>
    </ul>
    <span id="copyright" class="text-sm sm:text-center"/>
  </div>
</footer>

@push('scripts')
  <script>
    const el = document.getElementById('copyright')
    el.textContent = `© ${new Date().getFullYear()} Churches Together in Didcot and District`
  </script>
@endpush
