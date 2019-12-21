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
                        <div class="rt-product-wrapper" style="margin-bottom: 5px">

                            <div class="product-thumbnail-wrapper">
                                <div class="product-image">
                                    <img src="{{$related->image}}" class="" alt="grendene kids disney fantasy">
                                </div>
                                <div class="image-overlay-{{$related->overlay}}">
                                    <img src="{{asset("images/fabricas/{$slug}.png")}}"alt="Clovis Atacado">
                                </div>
                            </div>
                        </div>
                        <p class="text-center">
                            <strong>{{$related->title}}</strong> <br>
                            Vejá as opções de cores
                        </p>
                        <div class="related-colors">
                            <ul class="col-md-3 col-xs-3">
                                @foreach($related->details->products as $product)
                                    {!! $product !!}
                                @endforeach
                            </ul>
                            <div class="img-content col-md-3 col-xs-9">
                                <a title="{{$related->details->title}}" href="{{$related->details->url}}">
                                    <img src="{{$related->details->photo}}" alt="{{\Str::slug($slug.' '.$related->details->title, ' ')}}">
                                </a>
                            </div>
                            <div class="image-overlay-bottom-left" style="margin-bottom: 30px; margin-left: 10px">
                                <img src="{{asset("images/fabricas/{$slug}.png")}}"alt="{{$slug}}">
                            </div>
                        </div>

                        <div class="item-medium-comment col-xs-12" style="background-color: #702283;">
                            <div class="author-detail">
                                <p><a href="{{$related->details->url}}?comment"><i class="icon-profile-male"></i> {{strstr(getComment('name'), ' ', true)}}</a></p>
                                <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                <p><a href="{{$related->details->url}}?comment"><i class="icon-chat"></i> {{getComment('comments')}}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif