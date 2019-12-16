@if($relateds)
    @php $slug = $relateds->slug[0]; @endphp
    <section id="our_store" class="our_store related_store">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h3><span>{{$relateds->$slug->name}}</span></h3>
                    </div>
                </div>
            </div>

            <div class="row slider-shop">

                @foreach($relateds->$slug->banners as $related)
                    <div class="col-md-3 col-xs-12">
                        <div class="rt-product-wrapper">
                            <div class="product-thumbnail-wrapper">
                                <div class="product-image">
                                    <img src="{{$related->image}}" class="" alt="grendene kids disney fantasy">
                                </div>
                                <div class="image-overlay-{{$related->overlay}}">
                                    <img src="{{asset("images/fabricas/{$slug}.png")}}"alt="Clovis Atacado">
                                </div>
                            </div>
                            <div class="product-label text-center"><h4>{{$related->title}}</h4></div>
                            <p>{{$related->description}}</p>
                            <div class="author-detail">
                                <p><a href=""><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                <p><a href=""><i class="icon-chat"></i> {{getComment('comments')}}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
