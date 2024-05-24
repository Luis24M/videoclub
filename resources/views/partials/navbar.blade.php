<nav class="bg-gray-100">
    <div class="container mx-auto flex justify-between items-center py-4">
        <a class="text-gray-600 text-xl flex items-center" href="/">
            <span class="text-2xl">&#9820;</span>
            <span class="ml-2">Videoclub</span>
        </a>

        <button class="text-gray-600 lg:hidden" id="navbar-toggler">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        @if( true || Auth::check() )
            <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="navbarSupportedContent">
                <ul class="lg:flex lg:items-center lg:space-x-4">
                    <li class="{{ Request::is('catalog') && ! Request::is('catalog/create') ? 'bg-gray-200' : '' }}">
                        <a class="text-gray-600 hover:text-gray-800 px-4 py-2 block" href="{{ url('/catalog') }}">
                            <span class="inline-block">&#127909;</span>
                            Catálogo
                        </a>
                    </li>
                    <li class="{{ Request::is('catalog/create') ? 'bg-gray-200' : '' }}">
                        <a class="text-gray-600 hover:text-gray-800 px-4 py-2 block" href="{{ url('/catalog/create') }}">
                            <span class="inline-block">&#10010;</span> Nueva película
                        </a>
                    </li>
                </ul>

                <ul class="lg:flex lg:items-center lg:space-x-4 ml-auto">
                    <li>
                        <form action="{{ url('/logout') }}" method="POST" class="inline">
                            {{ csrf_field() }}
                            <button type="submit" class="text-gray-600 hover:text-gray-800 px-4 py-2 block">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>

<script>
    document.getElementById('navbar-toggler').addEventListener('click', function() {
        var menu = document.getElementById('navbarSupportedContent');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });
</script>
