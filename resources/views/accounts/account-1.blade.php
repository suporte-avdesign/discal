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
                        <!-- Photos -->
                        @include('accounts.photos.photo-1')

                        <!-- Youtube -->
                        @include('accounts.youtubes.youtube-1')

                        <!-- Video -->
                        @include('accounts.videos.vimeo-1')

                        <!-- Sound -->
                        @include('accounts.soundcloud.sound-1')
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
                                <img src="{{asset('images/banners/footer1.jpg')}}" alt="Image">
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
