<nav>
  <div
    class="mx-auto p-4 sm:p-6 md:p-8 max-w-screen-xl flex flex-wrap gap-2 sm:gap-8 items-center justify-between text-white bg-red-600">
    <a href="/" class="order-0 text-white w-[80px] h-[80px] flex items-center justify-center">
      <img
        src="{{ asset('assets/images/ctdd-logo.png') }}"
        alt="CTDD Logo"
        width="80"
        height="80"
        class="flex"
      >
    </a>
    <a href="/"
       id="heading"
       class="order-2 md:order-3 flex flex-col gap-2 self-center w-full sm:w-auto text-center sm:text-left">
      <span class="text-2xl sm:text-4xl font-semibold">Churches Together</span>
      <span class="uppercase text-lg sm:text-2xl text-gray-100">in Didcot and District</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button"
            class="order-1 sm:order-2 ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm
                   rounded-lg md:hidden hover:bg-red-500 focus:outline-none focus:ring-2
                   focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
              d="M3 5h14a1 1 0 100-2H3a1 1 0 100 2zm14 4H3a1 1 0 100 2h14a1 1 0 100-2zm0 6H3a1 1 0 100 2h14a1 1 0 100-2z"
              clip-rule="evenodd"/>
      </svg>
    </button>
    <div class="order-3 hidden w-full md:block md:w-auto" id="navbar-default">
      <ul
        class="bg-red-100 md:bg-red-600 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:rounded-none md:flex-row md:mt-0 md:border-0">
        @foreach ($links as $link)
          @php
            $page = $link->getRelated('page')->first();
            $url = $page ? route('frontend.page', [$page->slug]) : '#';
            $isActive = str_contains(request()->url(), $url);
          @endphp
          <li>
            <a href="{{route('frontend.page', [$link->getRelated('page')->first()->slug])}}"
               class="block py-2 px-3 text-red-600 md:text-white rounded md:rounded-none hover:text-red-700 md:underline-offset-8 hover:bg-gray-100 md:hover:bg-transparent
                      md:hover:text-red-100 md:p-3 md:px-2
                      {{ $isActive ? 'font-bold underline' : '' }}">
              {{ $link->title }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>

{{--Hide the header when the hamburger menu is open--}}
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const hamburgerMenu = document.querySelector('[data-collapse-toggle="navbar-default"]');
      const menu = document.getElementById('navbar-default');
      const heading = document.getElementById('heading');

      hamburgerMenu.addEventListener('click', () => {
        const isMenuOpen = !menu.classList.contains('hidden');
        // The `remove` and `add` are this way round because this script runs _before_ the menu has been
        // updated.
        if (isMenuOpen) {
          heading.classList.remove('hidden');
        } else {
          heading.classList.add('hidden');
        }
      });
    });

  </script>
@endpush
