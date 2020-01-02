@if($configStore->profile == 1)
    <div class="author sidebar-box">
        <div class="author-image-2" style="{{$configStore->bg_logo}}">
            <img height="100%" src="{{$content->logo}}" alt="{{$configStore->title}}">
        </div>



        <div class="author-content">
            <h4><a href="#">{{$configStore->title}}</a></h4>
            <p>{{$configStore->description}}</p>

            <!-- Whatsapp -->
            @include('stores.whatsapps.whatsapp-1')

            <!-- Social Links -->
            @include('stores.sidebar.social-links-1')

        </div>
    </div>
@endif