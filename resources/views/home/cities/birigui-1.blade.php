<section class="categories" data-ref="container-3">
    <div class="container">
        <div class="box">
            <div class="section-title">
                <h2>BERIQUI</h2>
                <div class="category-box">
                    <ul class="post-category">
                        <li class="filter" data-filter=".entertainment"><i class="icon-hotairballoon"></i> Meninos</li>
                        <li class="filter" data-filter=".politics"><i class="icon-global"></i> Meninas</li>
                    </ul>
                </div>
            </div>
            <div class="row mix entertainment">
                <div class="col-sm-6">
                    <div class="item-large">
                        <div class="item-large-image">
                            <a href="{{route('details-city', ['slug' => $city->slug])}}">
                                <img alt="Calçados Birigui -São Paulo - Brasil" src="{{asset('images/fabricas/birigui/logo.jpg')}}">
                            </a>
                        </div>
                        <div class="item-large-image">
                            @foreach($city->banners as $citybanners)
                                @if($loop->index == 0)
                                    <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citybanners->store])}}">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->src}}">
                                    </a>
                                    <div class="image-overlay-right">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->logo}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <!--
                        <div class="item-large-content">
                            <h3><a href="detail.html">Titulo</a></h3>
                            <div class="post-tag">
                                <a href="#" class="tag tag-blue">#Tag 1</a>
                                <a href="#" class="tag tag-green">#Tag 2</a>
                                <a href="#" class="tag tag-gold">#Tag 3</a>
                            </div>
                            <p>Texto</p>
                            <div class="author-detail">
                                <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                <p><i class="icon-clock"></i> {{getComment('month')}}</p>
                                <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                <div class="col-sm-6">
                    @foreach($city->stores as $citystores)
                        @if($loop->index <= 2)
                            <div class="item-small">
                                <div class="item-small-image">
                                    <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}">
                                        <img alt="{{$citystores->name}}" src="{{$citystores->logo}}">
                                    </a>
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="item-small-content">
                                    <h4><a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}">{{$citystores->title}}</a></h4>
                                    <div class="author-detail">
                                        <p><a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}?comment"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                        <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                        <p><a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}?comment"><i class="icon-chat"></i> {{getComment('comments')}}</a></p>
                                    </div>
                                    <div class="post-tag">
                                        @foreach($citystores->tags as $tags)
                                            <a href="#" class="tag tag-gold">#{{$tags}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="row mix politics">
                <div class="col-sm-6">
                    @foreach($city->stores as $citystores)
                        @if($loop->index >= 3)
                            <div class="item-small">
                                <div class="item-small-image">
                                    <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}">
                                        <img alt="{{$citystores->name}}" src="{{$citystores->logo}}">
                                    </a>
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="item-small-content">
                                    <h4>
                                        <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}">{{$citystores->title}}</a>
                                    </h4>
                                    <div class="author-detail">
                                        <p><a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}?comment"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                        <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                        <p><a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citystores->slug])}}?comment"><i class="icon-chat"></i> {{getComment('comments')}}</a></p>
                                    </div>
                                    <div class="post-tag">
                                        @foreach($citystores->tags as $tags)
                                            <a href="#" class="tag tag-gold">#{{$tags}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-sm-6">
                    <div class="item-large item-margin">
                        <div class="item-large-image">

                            @foreach($city->banners as $citybanners)
                                @if($loop->index == 1)
                                    <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citybanners->store])}}">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->src}}">
                                    </a>
                                    <div class="image-overlay-bottom-right">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->logo}}">
                                    </div>
                        </div>
                                @endif
                        <div class="item-large-image">
                                @if($loop->index == 2)
                                    <a href="{{route('details-city-store', ['slug' => $city->slug, 'store' => $citybanners->store])}}">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->src}}">
                                    </a>
                                    <div class="image-overlay-right">
                                        <img alt="{{$citybanners->alt}}" src="{{$citybanners->logo}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <!--
                        <div class="item-large-content">
                            <h3><a href="detail.html">Titulo</a></h3>
                            <div class="post-tag">
                                <a href="#" class="tag tag-blue">#Tag 1</a>
                                <a href="#" class="tag tag-green">#Tag 2</a>
                                <a href="#" class="tag tag-gold">#Tag 3</a>
                            </div>
                            <p>Texto</p>
                            <div class="author-detail">
                                <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                <p><i class="icon-clock"></i> {{getComment('month')}}</p>
                                <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>