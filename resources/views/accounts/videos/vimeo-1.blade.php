@if($video == 1)
    <div class="blog-post-wrap">
        <div class="blog-post-upper">
            <img src="{{asset('images/videos/video1.jpg')}}" alt="Image">
            <div class="pulses">
                <button type="button" class="play-btn js-video-button" data-video-id='326824980' data-channel="vimeo"><i class="fa fa-play"></i></button>
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