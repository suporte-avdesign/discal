@if($configStore->video == 1)
    <div class="blog-post-wrap">
        <div class="blog-post-upper">
            <img src="{{asset('images/stores/videos/video1.jpg')}}" alt="Image">
            <div class="pulses">
                <button type="button" class="play-btn js-video-button" data-video-id='8658994' data-channel="vimeo"><i class="fa fa-play"></i></button>
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
            <a href="#" class="btn-white btn-red">Saiba mais</a>
        </div>
        -->
    </div>
@endif