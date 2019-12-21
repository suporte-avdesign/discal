@extends('layouts.template')
@push('title')
<title>{{$configStore->title}} {{$configStore->name}}</title>
<meta name="description" content="{{$configStore->description}}" />
@endpush
@push('head')
@endpush
@push('body')
<body class="page">
<!--PRELOADER-->
<div class="preloader"><div class="spinner"></div></div>
@endpush
@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb_wrapper">
    <div class="container">
        <div class="breadcrumb-content">
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$configStore->title}}</li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--store detail -->
<section id="store-detail" class="store-detail">
    <div class="container">
        <div class="single-product-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail-images">
                        <div class="slider slider-store">
                            @foreach($configStore->images->products as $product)
                                <div>
                                    <img src="{{$product->src}}" alt="{{$product->alt}}">
                                </div>
                            @endforeach
                        </div>
                        <div class="slider slider-thumbs">
                            @foreach($configStore->images->products as $product)
                                <div>
                                    <img src="{{$product->src}}" alt="{{$product->alt}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-product-summary">
                        <div class="entry-summary">
                            <h2 class="single-product-title">{{$configStore->title}}</h2>
                            <div class="rt-product-meta-wrapper">
                                    <span class="price">
                                        <del>
                                            <span class="rt-price-amount">
                                                <span>$</span>370.00
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="rt-price-amount">
                                                <span>$</span>320.00
                                            </span>
                                        </ins>
                                    </span>
                            </div>
                            <div class="product-details_short-description mar-top-30">
                                <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit adipiscing elit.<br><br> Nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit adipiscing elit.</p>
                            </div>

                            <form class="cart mar-top-30" action="" method="post">

                                <div class="quantity-buttons">
                                    <label class="screen-reader-text">Quantity</label>
                                    <input type="number" class="quantity-input" name="quantity" min="1" max="100" placeholder="No.">
                                </div>

                                <button type="submit" name="add-to-cart" value="1605" class="btn-white btn-red">Add to cart</button>

                            </form>

                            <div class="product_meta mar-top-30">

                                <span class="sku_wrapper">SKU: <span class="sku">125</span></span>

                                <span class="posted_in">
                                        Category: <a href="#" rel="tag">Wall Decoration</a>
                                    </span>

                                <span class="tagged_as">Tags:
                                        <a href="#" rel="tag">Color</a>,
                                        <a href="#" rel="tag">Design</a>
                                    </span>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/End store detail -->

<!-- store tab -->
<section id="store-tabs" class="store-tabs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <div id="store-tab-main" class="">
                    <ul class="nav nav-tabs">
                        <li class="active"><a  href="#1" data-toggle="tab">Description</a></li>
                        <li><a href="#2" data-toggle="tab">Additional Information</a></li>
                        <li><a href="#3" data-toggle="tab">Solution</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="1">
                            <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                        </div>

                        <div class="tab-pane" id="2">
                            <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                        </div>

                        <div class="tab-pane" id="3">
                            <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End store tab -->

<!-- store -->
<section id="our_store" class="our_store related_store">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section-title">
                    <h3>
                        <span>Related Products</span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="row slider-shop">
            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list1.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Building Dozer</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list2.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale pull-left">Sale</span></div>
                        <div class="product-label"><span class="hot pull-right">Hot</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">

                        <h3 class="product_title">
                            <a href="store-detail.html">Bricks</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list3.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Still Cutter</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list4.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Elements Carrier</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list5.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Pipeline Elements</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list6.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Bull Dozer</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list7.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale pull-left">Sale</span></div>
                        <div class="product-label"><span class="hot pull-right">Hot</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Concrete Vibrator</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-xs-12">
                <div class="rt-product-wrapper">
                    <div class="product-thumbnail-wrapper">
                        <div class="product-image">
                            <img src="images/list8.jpg" class="" alt="product-list">
                        </div>
                        <div class="product-label"><span class="onsale">Sale</span></div>
                    </div>
                    <div class="rt-product-meta-wrapper">
                        <h3 class="product_title">
                            <a href="store-detail.html">Surveying Element</a>
                        </h3>
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
                            <div class="button">
                                <a href="store-detail.html" class="btn-white btn-red">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End store -->
@endsection
@push('scripts')

@endpush

