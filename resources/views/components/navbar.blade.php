<nav class="">
    <div class="mx-auto p-8 max-w-screen-xl flex flex-wrap gap-4 items-center justify-between text-white bg-red-600">
        <img src="{{ asset('assets/images/ctdd-logo.png') }}" alt="CTDD Logo" class="order-1 text-white">
        <a href="/" class="order-2 sm:order-3 flex flex-col gap-2 self-center">
            <span class="text-4xl font-semibold">Churches Together</span>
            <span class="uppercase text-2xl">in Didcot and District</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
                class="order-2 ml-auto text-white bg-red-600 inline-flex items-center p-2 w-10 h-10 justify-center text-sm
                   rounded-lg md:hidden hover:bg-red-500 focus:outline-none focus:ring-2
                   focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5h14a1 1 0 100-2H3a1 1 0 100 2zm14 4H3a1 1 0 100 2h14a1 1 0 100-2zm0 6H3a1 1 0 100 2h14a1 1 0 100-2z" clip-rule="evenodd" />
            </svg>
        </button>
        <div class="order-3 hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="bg-red-600 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:rounded-none md:flex-row md:mt-0 md:border-0">
                @foreach ($links as $link)
                    <li>
                        <a href="{{route('frontend.page', [$link->getRelated('page')->first()->slug])}}"
                        class="block py-2 px-3 text-white rounded md:rounded-none hover:text-red-700 hover:bg-gray-100 md:hover:bg-transparent
                      md:hover:text-red-100 md:p-3 md:px-2">
                            {{ $link->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
