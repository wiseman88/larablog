@if (Route::has('login'))
    <header class="p-4 bg-gradient-to-r from-indigo-700 to-purple-700 text-white">
        <div class="flex justify-between">
            <div class="sm:hidden dropdown">
                <button class="btn btn-square btn-ghost">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <ul tabindex="0"
                    class="text-slate-800 menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-lg w-52">
                    <li><a>Homepage</a></li>
                    <li><a>Portfolio</a></li>
                    <li><a>About</a></li>
                </ul>
            </div>
            <div class="hidden sm:block">
                <a href="{{ url('/') }}">
                    <img src="{{ @asset('/img/logo.svg') }}" alt="">
                </a>
            </div>
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="btn btn-ghost">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-ghost">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="btn btn-ghost">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </header>
@endif
