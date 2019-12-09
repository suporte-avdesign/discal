<section id="home_banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Group 1 -->
            <div class="swiper-slide">
                <!-- Banner 1 -->
                <div class="slide-inner half-slide slide-overlay" style="background-image:url({{asset('images/slider/slider1.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-blue">#ClovisAtacado</a>
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-gold">Veja Mais</a>
                        </div>
                        <h2><a href="javascript:">{{config('slogan.10')}}<br/>{{config('slogan.0')}}</a></h2>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('hour')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <!-- Banner 2 -->
                <div class="slide-inner quarter-slide slide-overlay" style="background-image:url({{asset('images/slider/slider2.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.11')}}</a></h2>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <!-- Banner 3 -->
                <div class="slide-inner quarter-slide quarter-slide-down slide-overlay" style="background-image:url({{asset('images/slider/slider3.jpg')}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.12')}}</a></h2>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('month')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Group 2 -->
            <div class="swiper-slide">
                <!-- Banner 1 -->
                <div class="slide-inner half-slide slide-overlay" style="background-image:url({{asset('images/slider/slider4.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.13')}}<br/>{{config('slogan.1')}}</a></h2>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('second')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <!-- Banner 2 -->
                <div class="slide-inner quarter-slide slide-overlay" style="background-image:url({{asset('images/slider/slider5.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.15')}}</a></h2>
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-gold">{{config('slogan.2')}}</a>
                        </div>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('hour')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <!-- Banner 3 -->
                <div class="slide-inner quarter-slide quarter-slide-down slide-overlay" style="background-image:url({{asset('images/slider/slider6.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.16')}}</a></h2>
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-blue">{{config('slogan.0')}}</a>
                        </div>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('second')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Group 3 -->
            <div class="swiper-slide">
                <!-- Banner 1 -->
                <div class="slide-inner half-slide slide-overlay" style="background-image:url({{asset('images/slider/slider7.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2 class="slogan-gold">{{config('slogan.14')}}</h2>
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-blue">Saiba Como</a>
                        </div>

                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('minute')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <!-- Banner 2 -->
                <div class="slide-inner quarter-slide slide-overlay" style="background-image:url({{asset('images/slider/slider8.jpg')}}?{{time()}})">
                    <div class="home_banner_text_center">
                        <h2><a href="detail.html">{{config('slogan.18')}}</a></h2>
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-blue">{{config('slogan.5')}}</a>
                        </div>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
                <div class="slide-inner quarter-slide quarter-slide-down slide-overlay" style="background-image:url({{asset('images/slider/slider19.jpg')}}?{{time()}})">
                    <div class="home_banner_text_top">
                        <h2><a href="detail.html">{{config('slogan.20')}}</a></h2>
                        <div class="banner-tag">
                            <a href="{{route('store', 'clovisatacado')}}" class="tag tag-gold">{{config('slogan.4')}}</a>
                        </div>
                    </div>
                    <div class="home_banner_text">
                        <div class="author-detail">
                            <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('minute')}}</p>
                            <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</section>
