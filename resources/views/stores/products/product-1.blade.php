@if($content->products)
    <section id="our_store" class="our_store">
        <div class="container">
            <div class="row">
                @foreach($content->products as $product)
                    @if($loop->index <= 11)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="rt-product-wrapper">
                            <div class="product-thumbnail-wrapper">
                                <a href="javascript:void(0)" data-url="{{$product->link}}">
                                    <div class="product-image-2">
                                        <img src="{{$product->image}}" class="" alt="{{$product->title}}">
                                    </div>
                                </a>
                            </div>
                            <div class="rt-product-meta-wrapper">
                                <p class="product_title">
                                    <a title="{{$product->title}}" href="javascript:void(0)" data-url="{{$product->link}}">
                                        {{$product->title}}
                                    </a>
                                </p>
                                <div class="rt-cartprice-wrapper">
                                    <span class="price mar-bottom-20">{{$product->qty}} {{$product->price}}

                                    </span>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                        <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                        <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                    </div>
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