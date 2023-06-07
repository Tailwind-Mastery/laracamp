<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
        <title>Laracamp</title>
        <meta name="description" content="Laracamp - Web Designer And Developer">
        
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="antialiased bg-slate-100">
        <main class="container mx-auto bg-white">
            <x-layout.header />
            <div class="">
                <x-auth.login /> 
                <x-auth.register /> 
            </div>
            @yield('main')
        </main>
    </body>
</html>
