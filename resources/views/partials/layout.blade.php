<!DOCTYPE html>
<html lang="en" data-theme="autumn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titel')</title>

        @vite('resources/css/app.css');
    </head>
    <body>
        @include('partials.nav')

        @yield('content')
    </body>
</html>
