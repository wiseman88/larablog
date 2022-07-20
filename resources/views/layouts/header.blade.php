@if (Route::has('login'))
    <!-- header -->
    <header class="py-2 bg-white text-slate-900 dark:bg-indigo-700 dark:text-white dar">
        <div class="container px-4 mx-auto flex justify-between items-center">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
            <div class="space-x-2 capitalize">
                @auth
                    <a class="hover:bg-slate-200 dark:hover:bg-indigo-800 p-3 rounded" href="{{ url('/dashboard') }}">dashboard</a>
                @else
                    <a class="hover:bg-slate-200 dark:hover:bg-indigo-800 p-3 rounded" href="{{ route('login') }}">log
                        in</a>
                    @if (Route::has('register'))
                        <a class="hover:bg-slate-200 dark:hover:bg-indigo-800 p-3 rounded"
                           href="{{ route('register') }}">register</a>
                    @endif
                @endauth
            </div>
        </div>
    </header>
@endif
