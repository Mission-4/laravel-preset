<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name'), 'Laravel' }}</title>
        <link rel="stylesheet" href="/css/app.css"/>
    </head>
    <body class="font-sans">
        <div class="flex items-center justify-center h-screen">
            <div class="content text-center">
                <div class="text-5xl uppercase tracking-wide text-blue-800 font-black mb-8">
                    {{ config('app.name'), 'Laravel' }}
                </div>

                <div>
                    <a
                        class="no-underline text-lg text-white uppercase font-semibold bg-blue-600 py-3 px-8 mx-4 rounded-full hover:bg-blue-800"
                        href="/login"
                        >
                        Log In
                    </a>
                    <a
                        class="no-underline text-lg text-white uppercase font-semibold bg-blue-600 py-3 px-8 mx-4 rounded-full hover:bg-blue-800"
                        href="/register"
                        >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
