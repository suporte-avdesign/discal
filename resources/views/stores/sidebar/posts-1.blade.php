@if($cofigStore->posts == 1)
    <div class="recent-post clearfix sidebar-box">
        <div class="sidebar-title">
            <h3>Postagens Recentes</h3>
        </div>
        <div class="recent-item">
            <div class="recent-image">
                <img src="{{asset('images/stores/posts/profile1.jpg')}}" alt="Image">
            </div>
            <div class="recent-content">
                <a href="#" class="tag tag-blue">#Tag</a>
                <h4><a href="#">Titulo do Post</a></h4>
                <div class="author-detail">
                    <p><a href="#"><i class="icon-profile-male"></i> Autor</a></p>
                    <p><i class="icon-clock"></i> 12 Maio</p>
                </div>
            </div>
        </div>
        <div class="recent-item">
            <div class="recent-image">
                <img src="{{asset('images/stores/posts/recent2.jpg')}}" alt="Image">
            </div>
            <div class="recent-content">
                <a href="#" class="tag tag-gold">#Tag</a>
                <h4><a href="#">Titulo do Post</a></h4>
                <div class="author-detail">
                    <p><a href="#"><i class="icon-profile-male"></i> Autor</a></p>
                    <p><i class="icon-clock"></i> 12 Maio</p>
                </div>
            </div>
        </div>
        <div class="recent-item">
            <div class="recent-image">
                <img src="{{asset('images/stores/posts/recent1.jpg')}}" alt="Image">
            </div>
            <div class="recent-content">
                <a href="#" class="tag tag-green">#Tag</a>
                <h4><a href="#">Titulo do Post</a></h4>
                <div class="author-detail">
                    <p><a href="#"><i class="icon-profile-male"></i> Autor</a></p>
                    <p><i class="icon-clock"></i> 12 Maio</p>
                </div>
            </div>
        </div>
        <div class="recent-item">
            <div class="recent-image">
                <img src="{{asset('images/stores/posts/recent2.jpg')}}" alt="Image">
            </div>
            <div class="recent-content">
                <a href="#" class="tag tag-blue">#Tag</a>
                <h4><a href="#">Titulo do Post</a></h4>
                <div class="author-detail">
                    <p><a href="#"><i class="icon-profile-male"></i> Autor</a></p>
                    <p><i class="icon-clock"></i> 12 Maio</p>
                </div>
            </div>
        </div>
    </div>
@endif