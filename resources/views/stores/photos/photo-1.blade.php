@if($configStore->photos == 1)

    <div class="blog-post-wrap">
        <div class="blog-post-upper">
            <img src="{{asset('images/products/list1.jpg')}}" alt="Image">
        </div>
        <!--
        <div class="blog-post-detail">
            <h3><a href="#">O que acontece quando?</a></h3>
            <div class="author-detail">
                <p><a href="#"><i class="icon-profile-male"></i> Anselmo Velame</a></p>
                <p><i class="icon-clock"></i> 12 Maio</p>
                <p><a href="#"><i class="icon-chat"></i> 3 comentários</a></p>
            </div>
            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, Sit amet cursus nisl aliquam. </p>
            <a href="#" class="btn-white btn-red">Saiba mais</a>
        </div>
        -->
    </div>

@elseif($configStore->photos >= 2)

    <div class="blog-post-wrap">
        <div id="home_banner_blog" style="height: {{$configStore->banner_height}}px;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($content->banners as $banner)
                        <div class="swiper-slide">
                            <div class="slide-inner slide-overlay">
                                <img src="{{$banner->image}}">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
        <!--
        <div class="blog-post-detail">
            <h3><a href="#">O que acontece quando?</a></h3>
            <div class="author-detail">
                <p><a href="#"><i class="icon-profile-male"></i> Anselmo Velame</a></p>
                <p><i class="icon-clock"></i> 12 Maio</p>
                <p><a href="#"><i class="icon-chat"></i> 3 comentários</a></p>
            </div>
            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, Sit amet cursus nisl aliquam. </p>
            <a href="{{$banner->link}}" class="btn-white btn-red">Saiba mais</a>
        </div>
        -->
    </div>

@endif