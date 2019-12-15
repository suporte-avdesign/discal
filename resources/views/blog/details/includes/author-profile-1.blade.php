<div class="author-profile">
    <div class="profile-image">
        <img src="{{asset('images/profiles/profile1.jpg')}}" alt="Image">
    </div>
    <div class="profile-content">
        <h3>{{getComment('name')}}</h3>
        <ul class="profile-link">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
        </ul>
        <p>{{config('slogan.'.rand(10,21))}}</p>
    </div>
</div>
