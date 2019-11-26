@extends('layouts.template')
@push('title')
<title>Sobre Nós</title>
@endpush
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="breadcrumb-content">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Sobre Nós -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="about-content">
                        <div class="about-section">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="about-work">
                                        <h2>Bem-vindo a {{config('app.name')}}</h2>
                                        <p>O modelo de negócios inovador voltado aos dados da {{config('app.name')}}, que permite-o oferecer aos usuários do portal a satisfação ideal.</p>
                                        <p>Fundada em 2008, a {{config('app.name')}} é uma plataforma abrangente de comércio eletrônico de terceiros no Brasil, desenvolvida e operada pela AV Design Ltd. É dedicada a atender o comércio global e fornecer alta qualidade, informações sobre produtos e fornecedores de calçados no Brasil para compradores globais. Atualmente, a {{config('app.name')}} é um portal líder na América Latina, especializado em preencher a lacuna entre compradores globais e fornecedores de calçados Brasileiros de qualidade.</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="vision-image">
                                        <img src="{{asset('images/about/vision.jpg')}}" alt="image">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="about-work">
                            <h2>Nossa Missão</h2>
                            <p>Ajudar compradores e fornecedores a se comunicar e fazer negócios entre si de maneira eficaz e eficiente.</p>
                            <p>Facilitar o comércio global entre compradores mundiais e fornecedores de Calçados Brasileiros.</p>
                            <p>Fornecer informações precisas e confiáveis ​​sobre produtos e fornecedores Brasileiros para compradores globais.</p>
                        </div>
                        <div class="ad-content">
                            <img src="{{asset('images/advertisements/pd1.jpg')}}" alt="image">
                        </div>

                        <!-- Nosso Time -->
                        <div class="about-team">
                            <h3>Nosso Time</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="{{asset('images/about/team.jpg')}}" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>James Gray</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>Team Lead</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="{{asset('images/about/team2.jpg')}}" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>James Gray</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>Team Lead</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="team-item">
                                        <div class="team-image">
                                            <img src="{{asset('images/about/team1.jpg')}}" alt="image">
                                        </div>
                                        <div class="team-outer">
                                            <div class="team-content">
                                                <h4>James Gray</h4>
                                            </div>
                                            <div class="team-social-links">
                                                <ul class="header-social-links">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="team-info">
                                                <h5>Team Lead</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar" class="col-sm-3">
                    <div class="item-sidebar">
                        <div class="sidebar-sociallinks clearfix sidebar-box">
                            <div class="sidebar-title">
                                <h3>Social Links</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-quora" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-slack" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-facebook clearfix sidebar-box">
                            <div class="sidebar-title">
                                <h3>Facebook</h3>
                                <ul>
                                    <li class="text-center">
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/trendsfitness&tabs=timeline&width=230&height=350&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="230" height="350" style="border:none;overflow:hidden" allow="encrypted-media"></iframe>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-twitter clearfix sidebar-box">
                            <div class="sidebar-title">
                                <h3>Twitter</h3>
                                <ul>
                                    <li>
                                        <blockquote class="twitter-tweet" data-lang="pt_BR">
                                            <p lang="pt_BR" dir="ltr">Todo o amor como sempre</p>&mdash; Anselmo Velame. (@penso10)
                                            <a href="https://twitter.com/penso10">March 26, 2015</a>
                                        </blockquote>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
<script async src="https://platform.twitter.com/widgets.js"></script>
@endpush