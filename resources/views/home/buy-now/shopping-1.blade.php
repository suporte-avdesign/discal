<section class="buy-now-shopping">
    <div class="container">

        <div class="stock-slider">
            @foreach($shopping->stores as $store)
                <div class="stock-slider-item">
                    <a href="#"><img src="{{$store->lojaLogo}}"></a>
                    <h4>{{$store->nome}}</h4>
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
</section>