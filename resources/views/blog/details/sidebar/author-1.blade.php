<div class="author sidebar-box">
    <div class="sidebar-title">
        <h3>Autor</h3>
    </div>
    <div class="author-image">
        <img src="{{asset('images/profiles/profile1.jpg')}}" alt="Image">
    </div>
    <div class="author-content">
        <h4><a href="#">{{getComment('name')}}</a></h4>
        <p>{{config('slogan.'.rand(10,21))}}</p>        <ul class="header-social-links">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>