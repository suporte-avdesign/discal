@extends('layouts.template')
@push('title')
<title>{{$configStore->title}}</title>
<meta name="description" content="{{$configStore->description}}" />
@endpush
@push('head')
@endpush
@push('body')
<body>
<!--PRELOADER-->
<div class="preloader"><div class="spinner"></div></div>
@endpush
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$configStore->name}}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="blog-content blog-content-2">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        @foreach($store->details->produtosImg as $image)
                            <div class="col-xs-12">
                                <div class="list-fullwidth list-item grid-item margin-zero">
                                    <div class="list-image">
                                        <img src="{{$store->pathImg}}{{$image}}" alt="{{$store->details->loja}}">
                                        <div class="image-overlay"></div>
                                    </div>
                                    <div class="list-content">
                                        <div class="author-detail">
                                            <ul class="header-social-links">
                                                @if($store->details->facebook)
                                                    <li><a href="{{$store->details->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                @endif
                                                @if($store->details->instagram)
                                                    <li><a href="{{$store->details->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                @endif
                                                @if($store->details->whatsapp)
                                                    <li><a href="https://api.whatsapp.com/send?phone=5514996181718&amp;text=oi" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                                @endif
                                            </ul>
                                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                            <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="item-sidebar">
                        <div class="author sidebar-box">
                            <div class="sidebar-title">
                                <h3>Loja</h3>
                            </div>
                            <div class="author-image">
                                <img src="{{$store->pathImg}}{{$store->details->lojaLogo}}" alt="{{$store->details->loja}}">
                            </div>
                            <div class="author-content">
                                <h4>{{$store->details->loja}}</h4>
                                <p>Localização: <strong>{{$store->details->corredor}}</strong></p>
                                @if($store->details->telefone)
                                    <p><i class="fa fa-phone" aria-hidden="true"></i> {{$store->details->telefone}}</p>
                                @endif
                                <ul class="header-social-links">
                                    @if($store->details->facebook)
                                        <li><a href="{{$store->details->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    @endif
                                    @if($store->details->instagram)
                                        <li><a href="{{$store->details->instagram}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    @endif
                                    @if($store->details->whatsapp)
                                        <li><a href="https://api.whatsapp.com/send?phone=5514996181718&amp;text=oi" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            @foreach($store->details->tags as $tag)
                                <a href="#" class="tag tag-blue margin-top-20">#{{$tag}}</a>
                            @endforeach
                        </div>

                        @include('shopping.other-stores-1')
                </div>

            </div>
        </div>
    </section>



@endsection
@push('scripts')

@endpush