<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Discal') }}</title>
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
</head>

<body>
    <!-- Header -->
    @include('headers.header-1')
    <!-- Navigation Bar -->
    @include('headers.menu-1')
    <!-- Slider -->
    @include('home.sliders.slider-1')

    <!-- Breaking News -->
    @include('home.news.breaking-news-1')

    <!-- Top Trending -->
    @include('home.trends.trend-1')

    <!-- Advertisement Section -->
    @include('home.advertisements.advertisement-1')

    <!-- Latest Posts -->
    @include('home.posts.post-1')

    <!-- Banner -->
    @include('home.banners.banner-1')

    <!-- Mais Vistos -->
    @include('home.most-viewed.viewed-1')

    <!-- Categorias -->
    @include('home.categories.category-1')

    <!-- Banners -->
    @include('home.banners.banners-2')

    <!-- Banners -->
    @include('home.banners.banners-3')

    <!-- Footer -->
    @include('footers.footer-1')

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
</body>
</html>
