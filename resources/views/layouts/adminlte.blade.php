<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed @yield('bodyClass')">
    <div class="wrapper" id="app">
        @include('template.navigation')
        @include('template.sidebar')
        @include('template.content-wrapper')
        @include('template.footer');
        @include('template.control-sidebar')
    </div>

    <script src="{{ mix('js/adminlte.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>