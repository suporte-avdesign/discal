@if($cofigStore->profile == 1)
    <div class="author sidebar-box">
        <div class="author-image-2" style="{{$cofigStore->bg_logo}}">
            <img height="100%" src="{{$content->logo}}" alt="Image">
        </div>


        <div class="author-content">
            <h4><a href="#">{{$cofigStore->title}}</a></h4>
            <p>{{$cofigStore->description}}</p>

            <!-- Whatsapp -->
            @include('stores.whatsapps.whatsapp-1')

            <!-- Social Links -->
            @include('stores.sidebar.social-links-1')

        </div>
    </div>
@endif