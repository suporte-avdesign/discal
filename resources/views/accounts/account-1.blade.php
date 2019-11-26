@extends('layouts.template')
@push('title')
<title>Nome da Loja</title>
@endpush
@section('content')
    <!-- Blog Content -->
    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="blog-wrapper">
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
                                <h3><a href="detail1.html">What Happens When?</a></h3>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                        <div class="blog-post-wrap">
                            <div class="blog-post-upper">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/UoD8G6X0y00" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="blog-post-detail">
                                <h3><a href="detail1.html">What Happens When?</a></h3>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                        <div class="blog-post-wrap">
                            <div class="blog-post-upper">
                                <iframe width="700" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/34019569&amp;color=0066cc"></iframe>
                            </div>
                            <div class="blog-post-detail">
                                <h3><a href="detail1.html">What Happens When?</a></h3>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                        <div class="blog-post-wrap">
                            <div class="blog-post-upper">
                                <img src="images/list1.jpg" alt="Image">
                            </div>
                            <div class="blog-post-detail">
                                <h3><a href="detail1.html">What Happens When?</a></h3>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                        <div class="blog-post-wrap">
                            <div class="blockquote-upper">
                                <blockquote>
                                    <p>Was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <div class="sectionoverlay"></div>
                                </blockquote>
                            </div>
                            <div class="blog-post-detail">
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                        <div class="blog-post-wrap">
                            <div class="blog-post-upper">
                                <img src="images/list1.jpg" alt="Image">
                                <div class="pulses">
                                    <button type="button" class="play-btn js-video-button" data-video-id='326824980' data-channel="vimeo"><i class="fa fa-play"></i></button>
                                </div>
                            </div>
                            <div class="blog-post-detail">
                                <h3><a href="detail1.html">What Happens When?</a></h3>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                    <p><i class="icon-clock"></i> 12 May</p>
                                    <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                </div>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. </p>
                                <a href="detail1.html" class="btn-white btn-red">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul class="pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
                <div id="sidebar" class="col-md-4 col-sm-12">
                    <div class="item-sidebar">
                        <div class="author sidebar-box">
                            <div class="sidebar-title">
                                <h3>Author</h3>
                            </div>
                            <div class="author-image">
                                <img src="images/profile1.jpg" alt="Image">
                            </div>
                            <div class="author-content">
                                <h4><a href="#">James Arthur</a></h4>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue.</p>
                                <ul class="header-social-links">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-categories sidebar-box">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <ul>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Humanities</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Biology</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                        <div class="recent-post clearfix sidebar-box">
                            <div class="sidebar-title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/profile1.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-blue">#News</a>
                                    <h4><a href="#">10 Tips you should follow</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent2.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-gold">#News</a>
                                    <h4><a href="#">Must have gadgets in life</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent1.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-green">#Health</a>
                                    <h4><a href="#">Selena, The talk of town</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent2.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-blue">#News</a>
                                    <h4><a href="#">Why Zlatan left United?</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad1 sidebar-box">
                            <div class="sidebar-title">
                                <h3>Advertisement</h3>
                            </div>
                            <div class="ad1-image">
                                <img src="images/footer1.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="popular-post sidebar-box">
                            <div class="sidebar-title">
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">01</span>
                                    <h4><a href="#">7 reasons Hollywood doesn’t make romantic comedies anymore</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">02</span>
                                    <h4><a href="#">Watch: the 3 best performances of the 2018 VMAs</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">03</span>
                                    <h4><a href="#">Why conservatives love to hate Alexandria?</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">04</span>
                                    <h4><a href="#">10 Tips you should follow before eating street foods</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Content Ends -->


    <!-- Maps -->
    <div class="map">
        <div id="map" style="height: 350px; width: 100%;"></div>
    </div>

@endsection
@push('scripts')
<script src="{{asset('js/custom-video.js')}}"></script>
<script src="{{asset('js/custom-map.min.js')}}"></script>

<!-- google map Jquery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>
@endpush
