@extends('layouts.template')
@push('title')
<title>Nossos Planos</title>
@endpush
@push('head')
<!--Pricing CSS -->
    <link href="{{asset('css/pricing.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/pricing.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('body')
<body>
@endpush
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Planos</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Start Pricing Area -->
    <section class="pricing-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-xs-6">
                    <div class="pricingTable">
                        <div class="pricing-icon">
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">R$</span>100,00
                        </div>
                        <span class="month">/Mensal</span>
                        <div class="pricingHeader">
                            <h3 class="title">Plano 1</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li class="active">Reduza e gerencie o custo de aquisição de novos clientes</li>
                                <li class="active">Melhore a visibilidade e a imagem de marca</li>
                                <li class="active">Maximize o retorno do investimento</li>
                                <li class="active">Atinja novos clientes</li>
                                <li class="active">Alcance pessoas que realmente pretendem comprar</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary">Contrate</a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6">
                    <div class="pricingTable">
                        <div class="pricing-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">R$</span>200,00
                        </div>
                        <span class="month">/Mensal</span>
                        <div class="pricingHeader">
                            <h3 class="title">Plano 1</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li class="active">Reduza e gerencie o custo de aquisição de novos clientes</li>
                                <li class="active">Melhore a visibilidade e a imagem de marca</li>
                                <li class="active">Maximize o retorno do investimento</li>
                                <li class="active">Atinja novos clientes</li>
                                <li class="active">Alcance pessoas que realmente pretendem comprar</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary">Contrate</a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-6">
                    <div class="pricingTable">
                        <div class="pricing-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <div class="price-Value">
                            <span class="currency">R$</span>300,00
                        </div>
                        <span class="month">/Mensal</span>
                        <div class="pricingHeader">
                            <h3 class="title">Plano 1</h3>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li class="active">Reduza e gerencie o custo de aquisição de novos clientes</li>
                                <li class="active">Melhore a visibilidade e a imagem de marca</li>
                                <li class="active">Maximize o retorno do investimento</li>
                                <li class="active">Atinja novos clientes</li>
                                <li class="active">Alcance pessoas que realmente pretendem comprar</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary">Contrate</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Pricing Area -->
@endsection
@push('scripts')
