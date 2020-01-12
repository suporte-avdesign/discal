@if($city)
    <div class="recent-post clearfix sidebar-box">
        <div class="sidebar-title">
            <h3>Outras Lojas</h3>
        </div>
        @foreach($city->stores as $store)
            @if($store->slug != $content->store)
                <div class="recent-item">
                    <div class="recent-image">
                        <a href="{{route('details-city-store', ['slug' => $content->city, 'store' => $store->slug])}}">
                            <img src="{{$store->logo}}" alt="img">
                        </a>
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
            @endif
        @endforeach
    </div>
@endif
