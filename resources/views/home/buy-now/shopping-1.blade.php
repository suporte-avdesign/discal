<section class="buy-now-shopping">
    <div class="container">


        <div class="stock-slider">
            @foreach($shopping->stores as $store)
                @php
                    $segment='';
                    foreach ($store->tags as $seg) {
                        $segment .= $seg.' ';
                    }
                @endphp
                <div class="stock-slider-item">
                    <a href="{{route('details-shopping', ['slug' => $shopping->slug, 'store' => $store->fields->lojaUrl, 'segment' => \Str::slug($segment)])}}">
                        <img src="{{$store->lojaLogo}}">
                    </a>
                    <h4>
                        <a href="{{route('details-shopping', ['slug' => $shopping->slug, 'store' => $store->fields->lojaUrl, 'segment' => \Str::slug($segment)])}}">
                        {{$store->nome}}
                        </a>
                    </h4>
                    <p>
                        @foreach($store->tags as $tag)
                            <span class="stock-green">{{$tag}} </span>
                        @endforeach
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="buy-now-content">
        <p>O Shopping Território do Calçado é o maior estabelecimento que reúne lojas de calçados femininos em toda a América Latina. São mais de duzentas!</p>
        <a href="#" class="btn-white">QUERO VISITAR</a>

    </div>
    <div class="sectionoverlay"></div>
    <div class="image-overlay-right" style="margin-top: 20px">
        <img width="200px" src="{{asset('images/shopping/territoriodocalcado/logo.png')}}">
    </div>

</section>