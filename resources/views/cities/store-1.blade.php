@extends('layouts.template')
@push('title')
<title>{{$configStore->title}}</title>
<meta name="description" content="{{$configStore->description}}" />
@endpush
@push('head')
<style>
    .slide-inner {
        height: 1px;
    }
    #home_banner_blog{
        position: relative;
        padding: 0;
        z-index: 5;
        height: {{$configStore->banner_height}}px;
    }
</style>
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
                        @include('cities.sidebar.profile-1')

                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="blog-wrapper">
                        <!-- Banners -->
                        @include('cities.banners.banner-1')
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog-content blog-content-2">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12">
                    @include('cities.products.product-1')
                </div>

                <div class="col-md-4 col-sm-12">

                    <div class="item-sidebar">

                        @include('cities.sidebar.category-2')

                        @include('cities.sidebar.advertisement-1')

                        @include('cities.sidebar.stores-1')

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--include('stores.products.product-1') -->


    <div class="map">
        <div id="mapid" style="height: 450px; width: 100%;"></div>
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
        var storeMap = L.map('mapid').setView([{{$configStore->map_marker}}], 16);
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
