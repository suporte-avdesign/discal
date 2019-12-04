@extends('layouts.template')
@push('title')
<title>{{$configStore->title}}</title>
<meta name="description" content="{{$configStore->description}}" />
@endpush
@push('head')
<!--Plugin Leaflet: Interactive maps-->
<link href="{{asset('plugins/leaflet/leaflet.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@push('body')
<body class="page">
<!--PRELOADER-->
<div class="preloader"><div class="spinner"></div></div>
@endpush
@section('content')
    <!-- Blog Content -->
    <section class="blog-content">
        <div class="container">
            <div class="row">

                <div id="sidebar" class="col-md-4 col-sm-12">
                    <div class="item-sidebar">

                        <!-- Profile -->
                        @include('stores.sidebar.profile-1')

                        <!-- Categories -->
                        @include('stores.categories.category-1')

                        <!-- Recents Post -->
                        @include('stores.sidebar.posts-1')

                        <!-- Advertisement -->
                        @include('stores.sidebar.advertisement-1')

                        @include('stores.categories.category-2')


                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="blog-wrapper">
                        <!-- Photos -->
                        @include('stores.photos.photo-1')

                        <!-- Youtube -->
                        @include('stores.videos.youtube-1')

                        <!-- Video -->
                        @include('stores.videos.vimeo-1')

                        <!-- Sound -->
                        @include('stores.sounds.sound-cloud-1')
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    @include('stores.products.products-1')


    <div class="map">
        <div id="mapid" style="height: {{config('stores.map.height')}}px; width: {{config('stores.map.width')}}%;"></div>
    </div>


@endsection

@push('scripts')
<script src="{{asset('js/custom-video.min.js')}}"></script>
<script src="{{asset('js/custom-map.min.js')}}"></script>
<script src="{{asset('js/custom-whatsapp.min.js')}}"></script>
<script src="{{asset('js/custom-mixitup.min.js')}}"></script>
<!--Plugin Leaflet: Interactive maps-->
<script src="{{asset('plugins/leaflet/leaflet.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var storeMap = L.map('mapid').setView([{{$configStore->map_marker}}], 18);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(storeMap);
        L.marker([{{$configStore->map_marker}}]).addTo(storeMap)
            .bindPopup("<b>{{$configStore->title}}</b><br/>{{$configStore->address}}").openPopup();
        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Você clicou em " + e.latlng.toString())
                .openOn(storeMap);
        }
        storeMap.on('click', onMapClick);
    });
</script>

<script type="text/javascript">
    function isMobile()
    {
        return (/Android|webOS|iPhone|iPad|iPod|Windows Phone|IEMobile|Mobile|BlackBerry/i.test(navigator.userAgent) );
    }
    var elm = jQuery('a[href*="whatsapp.com"]');
    jQuery.each(elm, function(index, value){
        var item = jQuery(value).attr('href');
        if(item.indexOf('chat') != -1){
            //nothing
        } else if (item.indexOf('web') != -1 && isMobile()){
            var itemLink = item;
            var newLink = itemLink.replace('web', 'api');
            jQuery(value).attr("href", newLink);
        } else if (item.indexOf('api') != -1 && !isMobile()){
            var itemLink = item;
            var newLink = itemLink.replace('api', 'web');
            jQuery(value).attr("href", newLink);
        }
    });
</script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5af1c98165adf700113897f3&product=inline-share-buttons"></script><!—- ShareThis END -—>
@endpush
