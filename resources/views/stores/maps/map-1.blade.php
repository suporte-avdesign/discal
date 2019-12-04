@if($configStore->maps->map == 1)
    <div class="map">
        <div id="map" style="height: {{config('stores.map.height')}}px; width: {{config('stores.map.width')}}%;">
            <iframe src="{{$map}}" width="{{config('stores.map.width')}}%" height="{{config('stores.map.height')}}" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
@endif