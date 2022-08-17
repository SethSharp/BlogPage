<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
{{--    <title> {{config('app.name', 'Blog Page')}} </title>--}}
</head>
<body>
    <div class="bg-gray-100 h-14">
        <h1 class="text-4xl inline-block px-8 font-black font-medium p-2">
            <a href="/blogs">
                @if(\Illuminate\Support\Facades\Auth::user())
                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                @else
                    Blog
                @endif
            </a>
        </h1>
        @guest
            <div class="float-right p-3">
                @if (Route::has('login'))
                    <h1 class="text-2xl inline-block px-8 font-black font-medium">
                        <a href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </h1>
                @endif

                @if (Route::has('register'))
                    <h1 class="text-2xl inline-block px-8 font-black font-medium">
                        <a href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </h1>
                @endif
            </div>
        @else
            <div class="float-right p-3">
                @if (Route::has('logout'))
                    <h1 class="text-xl inline-block px-8 font-black font-medium">
                        <a href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
                    </h1>
                @endif
            </div>
        @endguest
    </div>

    <main>
        @yield('content')
    </main>

</body>
</html>
