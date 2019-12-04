@if($content->products)
    <section id="our_store" class="our_store">
        <div class="container">
            <div class="row">
                @foreach($content->products as $product)
                    @if($loop->index <= 11)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="rt-product-wrapper">
                            <div class="product-thumbnail-wrapper">
                                <a href="{{$product->link}}" target="_blank">
                                    <div class="product-image-2">
                                        <img src="{{$product->image}}" class="" alt="product-list">
                                    </div>
                                </a>
                                <div class="product-label"><span class="onsale pull-left">Sale</span></div>
                                <div class="product-label"><span class="hot pull-right">Hot</span></div>
                            </div>
                            <div class="rt-product-meta-wrapper">
                                <p class="product_title">
                                    <a title="{{$product->title}}" href="{{$product->link}}">{{$product->title}}</a>
                                </p>
                                <div class="rt-cartprice-wrapper">
                                    <span class="price mar-bottom-20">
                                        <del>
                                            <span class="rt-price-amount">
                                                <span >$</span>370.00
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="rrt-price-amount">
                                                <span>$</span>320.00
                                            </span>
                                        </ins>
                                    </span>
                                    <!--
                                    <div class="button">
                                        <a href="store-detail.html" class="btn-white btn-red">Comprar</a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif