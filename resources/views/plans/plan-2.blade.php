@extends('layouts.template')
@push('title')
<title>Nossos Planos</title>
@endpush
@push('head')
<!--Pricing CSS -->
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
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title">Personal</h3>
                            <div class="price"><span class="dollar">$</span>15<span class="month">/Mo</span></div>
                        </div>

                        <div class="price-body">
                            <ul>
                                <li><b>Free</b> Security Service</li>
                                <li><b>1x</b> Security Service</li>
                                <li><b>Unlimited</b> Security Service</li>
                                <li><b>1x</b> Dashboard Access</li>
                                <li><b>3x</b> Job Listings</li>
                                <li><b>5x</b> invoices and quotes</li>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title">Business</h3>
                            <div class="price"><span class="dollar">$</span>39<span class="month">/Mo</span></div>
                        </div>

                        <div class="price-body">
                            <ul>
                                <li><b>Free</b> Security Service</li>
                                <li><b>1x</b> Security Service</li>
                                <li><b>Unlimited</b> Security Service</li>
                                <li><b>1x</b> Dashboard Access</li>
                                <li><b>3x</b> Job Listings</li>
                                <li><b>5x</b> invoices and quotes</li>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="pricing-table">
                        <div class="price-header">
                            <h3 class="title">Enterprise</h3>
                            <div class="price"><span class="dollar">$</span>99<span class="month">/Mo</span></div>
                        </div>

                        <div class="price-body">
                            <ul>
                                <li><b>Free</b> Security Service</li>
                                <li><b>1x</b> Security Service</li>
                                <li><b>Unlimited</b> Security Service</li>
                                <li><b>1x</b> Dashboard Access</li>
                                <li><b>3x</b> Job Listings</li>
                                <li><b>5x</b> invoices and quotes</li>
                            </ul>
                        </div>

                        <div class="price-footer">
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <canvas id="canvas"></canvas>
    </section>
    <!-- End Pricing Area -->

@endsection
@push('scripts')
