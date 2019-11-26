@extends('layouts.home-1')


@section('content')
    <!-- Header -->
    @include('headers.header-1')
    <!-- Navigation Bar -->
    @include('headers.menu-1')
    <!-- Slider -->
    @include('home.sliders.slider-1')

    <!-- Breaking News -->
    @include('home.news.breaking-news-1')

    <!-- Categorias -->
    @include('home.categories.category-1')

    <!-- Top Trending -->
    @include('home.trends.trend-1')

    <!-- Advertisement Home -->
    @include('advertisements.home-1')

    <!-- Latest Posts -->
    @include('home.posts.post-1')

    <!-- Banner -->
    @include('home.banners.banner-1')

    <!-- Mais Vistos -->
    @include('home.most-viewed.viewed-1')

    <!-- Categorias -->
    @include('home.categories.category-2')

    <!-- Banners -->
    @include('home.banners.banners-2')

    <!-- Banners -->
    @include('home.banners.banners-3')

    <!-- Footer -->
    @include('footers.footer-1')

@endsection