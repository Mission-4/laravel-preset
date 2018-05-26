<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <navbar>
            <template slot="brand">
                <span class="font-semibold text-xl">{{ config('app.name') }}</span>
            </template>
            <template slot="items">
                <div class="text-sm lg:flex-grow">
                    <a href="/home" class="block mt-4 lg:inline-block no-underline lg:mt-0 text-teal-lighter hover:text-white mr-4">
                        Home
                    </a>
                </div>
                <div>
                    @guest
                        <a
                            href="{{ route('register') }}"
                            class="block mt-4 mr-4 lg:inline-block no-underline lg:mt-0 text-teal-lighter hover:text-white"
                            >Register</a>
                        <a
                            href="{{ route('login') }}"
                            class="inline-block no-underline text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0"
                            >Log In</a>
                    @else
                        <a
                            href="#"
                            class="block mt-4 mr-4 lg:inline-block no-underline lg:mt-0 text-teal-lighter hover:text-white"
                            >{{ auth()->user()->name }}</a>
                        <form action="/logout" class="inline-block" method="post">
                            @csrf
                            <button
                                class="inline-block no-underline text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0"
                                >Log Out</button>
                        </form>
                    @endguest
                </div>
            </template>
        </navbar>

        <main class="py-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
