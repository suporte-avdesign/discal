<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{asset('css/plugin.min.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    @stack('head')
</head>

<body>

    @yield('content')

    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugin.min.js')}}"></script>
    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('js/custom-mixitup.min.js')}}"></script>

    @stack('scripts')
</body>
</html>
