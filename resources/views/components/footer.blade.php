<footer class="w-full mx-auto mt-auto text-white bg-red-600">
  <div class="p-4 sm:p-8 flex items-center justify-between gap-4">
    <ul class="flex flex-wrap items-center mt-3 text-sm sm:mt-0">
      <li>
        <a href="/about-ctdd" class="hover:underline me-4 md:me-6">About</a>
      </li>
      <li>
        <a href="/contact" class="hover:underline">Contact</a>
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
