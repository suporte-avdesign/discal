@extends('layouts.template')
@push('title')
<title>Não encontrado</title>
<meta name="description" content="Não encontrado" />
@endpush
@push('head')
<!-- Error CSS -->
<link href="{{asset('css/error.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('body')
<body class="page">
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
                        <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-intro">
                        <h1 class="error_number"> 4<span>0</span>4</h1>
                        <div class="main_title text-center">
                            <h2>OOPS !! PÁGINA NÃO ENCONTRADA</h2></div>
                        <div class="btn-white text-center">
                            <a href="javascript:history.go(-1)" class="hvr-pop">
                                <i class="fa fa-angle-left"></i>  VOLTE À PÁGINA INICIAL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection