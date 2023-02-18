<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel blog - home page</title>
    @vite('resources/css/app.css')

</head>
<body>
    <header class="bg-neutral-700 text-neutral-300 p-4 px-6">
        <nav class="flex justify-between items-center">
            <a href="{{ route('/') }}" class="font-semibold font-roboto text-lg">Bloger</a>
            <ul class="flex justify-center items-center gap-7 text-gray-400 font-inter">
                <li class="hover:text-stone-100 transition-all"><a href="{{ route('blogs.index') }}">Blog</a></li>
                @auth
                    @if (Auth::user()->name)
                        <li class="hover:text-stone-100 transition-all">{{ Auth::user()->name }}</li>
                    @endif
                    <li class="hover:text-stone-100 transition-all"><a href="{{ route('logout') }}">Logout</a></li>
                @else
                    <li class="hover:text-stone-100 transition-all"><a href="{{ route('login') }}">Login</a></li>
                    <li class="hover:text-stone-100 transition-all"><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>

    <div>
        @include('layouts.footer')
    </div>
</body>
</html>