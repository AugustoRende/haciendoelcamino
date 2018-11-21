<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Haciendo El Camino @yield('title')</title>

        <!-- mobile specific metas ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS ================================================== -->
        <link rel="stylesheet" href="{{ url('css/base.css') }}">
        <link rel="stylesheet" href="{{ url('css/vendor.css') }}">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">

        <!-- script ================================================== -->
        <script src="{{ url('js/modernizr.js') }}"></script>
        <script src="{{ url('js/pace.min.js') }}"></script>

        <!-- favicons ================================================== -->
        <link rel="shortcut icon" href="{{ url('favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ url('favicon.png') }}" type="image/x-icon">
    </head>
    <body id="top">
        @include('layouts.navbar')
        
        <div class="container">
            @yield('content')
        </div>

        @include('layouts.footer')

        <!-- Java Script ================================================== -->
        <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ url('js/plugins.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </body>
</html>