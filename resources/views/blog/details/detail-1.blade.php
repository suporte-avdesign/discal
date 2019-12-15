@extends('layouts.template')
@push('title')
<title>{{$content->title}}</title>
<meta name="description" content="{{$content->description}}" />
@endpush
@push('head')
<style>
    .item-detail a {
        color: #2a3fff;
    }
</style>
@endpush
@push('body')
<body>
<!--PRELOADER-->
<div class="preloader"><div class="spinner"></div></div>
@endpush
@section('content')
    <!-- Breadcrumb -->
    <div class="page-cover">
        <div class="container">
            <div class="row">
                <div class="col-xs-5">
                    <div class="cover-content">
                        <div class="author-detail">
                            <a href="#" class="tag tag-blue">#Dicas</a>
                            <a href="#" class="tag tag-gold"><i class="fa fa-eye"></i> {{date('Y')}}</a>
                        </div>
                        <h1>{{$details->title}}</h1>
                        <div class="author-detail">
                            <p><i class="icon-clock"></i> Postado em : {{$details->date}}</p>
                            <p><a href="#"><i class="icon-profile-male"></i> {{$details->author}}</a></p>
                            <p><a href="#"><i class="icon-chat"></i> 0</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-7">
                    <img src="{{$details->image}}" alt="{{$details->title}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->
    <!-- Detail -->
    <section class="item-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="item-wrapper">
                        <div class="item-detail">{!! $details->html !!}</div>

                        @include('advertisements.blog-details-1')


                        @include('blockquotes.blockquote-1')


                        @include('blog.details.includes.author-profile-1')


                        @include('blog.details.includes.share-buttons-1')

                        @include('blog.details.includes.item-tags-1')


                        @include('blog.details.includes.comment-box-1')

                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="item-sidebar">

                        @include('blog.details.sidebar.author-1')

                        @include('blog.details.sidebar.categories-1')

                        @include('blog.details.sidebar.recent-post-1')

                        @include('blog.details.advertisements.ad1')

                        @include('blog.details.sidebar.popular-post-1')


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
