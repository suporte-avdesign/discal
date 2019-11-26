@if($photos == 1)

    <div class="blog-post-wrap">
        <div class="blog-post-upper">
            <img src="{{asset('images/products/list1.jpg')}}" alt="Image">
        </div>
        <div class="blog-post-detail">
            <h3><a href="#">What Happens When?</a></h3>
            <div class="author-detail">
                <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                <p><i class="icon-clock"></i> 12 May</p>
                <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
            </div>
            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
            <a href="detail1.html" class="btn-white btn-red">Read More</a>
        </div>
    </div>

@elseif($photos >= 2)

    <div class="blog-post-wrap">
        <div id="home_banner_blog">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-overlay" style="background-image:url({{asset('images/slider/slider1.jpg')}}">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-overlay" style="background-image:url({{asset('images/slider/slider2.jpg')}}">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-overlay" style="background-image:url({{asset('images/slider/slider3.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
        <div class="blog-post-detail">
            <h3><a href="#">What Happens When?</a></h3>
            <div class="author-detail">
                <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                <p><i class="icon-clock"></i> 12 May</p>
                <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
            </div>
            <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
            <a href="#" class="btn-white btn-red">Read More</a>
        </div>
    </div>

@endif