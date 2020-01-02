@extends('layouts.home-1')

@push('head')
<style>


    .image-overlay-left {
        position: absolute;
        top: 2px;
        left: 5px;
        width: 100px;
        z-index: 999;
    }

    .image-overlay-right {
        position: absolute;
        top: 2px;
        right: 5px;
        width: 100px;
        z-index: 999;
    }
    .image-overlay-bottom-right {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 100px;
        z-index: 999;
    }

    .image-overlay-bottom-left {
        position: absolute;
        bottom: 5px;
        left: 5px;
        width: 100px;
        z-index: 999;
    }

    .item-medium-comment {
        padding: 2px;
        text-align: center;
        width: 100%;
        bottom: 0;
        z-index: 1;
    }
    .item-medium-comment p, .item-medium-comment p a{
        color: #fff;
    }





</style>
@endpush
@section('content')
    <!-- Header -->
    @include('headers.header-1')
    <!-- Navigation Bar -->
    @include('headers.menu-1')
    <!-- Slider -->
    @include('home.sliders.slider-1')

    <!-- Breaking News -->
    @include('home.news.breaking-news-1')

    <!-- Buy Now -->
    @include('home.buy-now.shopping-1')

    <!-- Categorias -->
    @include('home.distributors.stores-1')

    <!-- Related First -->
    @include('home.related.grendene-kids');

    <!-- Top Trending -->
    @include('home.trends.trend-1')

    <!-- Advertisement Home -->
    @include('advertisements.home-1')

    <!-- Latest Posts -->
    @include('home.posts.post-1')

    <!-- Banner -->
    @include('home.buy-now.info-1')

    <!-- Mais Vistos -->
    @include('home.most-viewed.viewed-1')

    <!-- Categorias -->
    @include('home.clews.clew-1')

    <!-- Banners -->
    @include('home.banners.banners-2')

    <!-- Banners -->
    @include('home.banners.banners-3')

    <!-- Footer -->
    @include('footers.footer-1')

@endsection