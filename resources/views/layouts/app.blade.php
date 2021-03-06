<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- FONTS -->
    <!-- @TODO: Can this be at the bottom of the page -->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .card-new-task {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        <main class="container-fluid">
            @yield('content')
        </main>
    </div>

    @include ('layouts.footer')
</body>
</html>
