@if($claws)
    <section class="categories" data-ref="container-2">
    <div class="container">
        <div class="section-title">
            <h2>Dicas: Lojas Varejos</h2>
            <div class="category-box">
                <ul class="post-category">
                    <li class="filter" data-filter=".sales">Vendas</li>
                    <li class="filter" data-filter=".marketing">Marketing</li>
                    <li class="filter" data-filter=".manager">Gestão</li>
                    <li class="filter" data-filter=".product"> Produto</li>
                </ul>
            </div>
        </div>
        <div class="row mix sales">
            @foreach($claws[0]->sales as $claw)
                @if ($loop->first)
                    <div class="col-sm-6">
                        <div class="item-large">
                            <div class="item-large-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="image-overlay"></div>
                            <div class="item-large-content">
                                <h3><a href="{{$claw->link}}">{{$claw->title}}</a></h3>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag tag-blue">#Dicas</a>
                                    <a href="{{$claw->link}}" class="tag tag-green">#Revendedor</a>
                                    <a href="{{$claw->link}}" class="tag tag-gold">#Calçados</a>
                                </div>
                                <p>{{$claw->description}}</p>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="col-sm-6">
                @foreach($claws[0]->sales as $claw)
                    @if($loop->index >= 1 && $loop->index <= 3)
                        <div class="item-small">
                            <div class="item-small-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="item-small-content">
                                <h4><a href="detail.html">{{$claw->title}}</a></h4>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag-gold tag">#New</a>
                                    <a href="{{$claw->link}}" class="tag-green tag">#Sports</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>


        <div class="row mix marketing">
            @foreach($claws[1]->marketing as $claw)
                @if ($loop->first)
                    <div class="col-sm-6">
                        <div class="item-large">
                            <div class="item-large-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="image-overlay"></div>
                            <div class="item-large-content">
                                <h3><a href="detail.html">{{$claw->title}}</a></h3>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag tag-blue">#Dicas</a>
                                    <a href="{{$claw->link}}" class="tag tag-green">#Revendedor</a>
                                    <a href="{{$claw->link}}" class="tag tag-gold">#Calçados</a>
                                </div>
                                <p>{{$claw->description}}</p>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="col-sm-6">
                @foreach($claws[1]->marketing as $claw)
                    @if($loop->index >= 1 && $loop->index <= 3)
                        <div class="item-small">
                            <div class="item-small-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="item-small-content">
                                <h4><a href="detail.html">{{$claw->title}}</a></h4>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag-gold tag">#New</a>
                                    <a href="{{$claw->link}}" class="tag-green tag">#Sports</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>


        <div class="row mix manager">
            <div class="col-sm-6">
                @foreach($claws[2]->manager as $claw)
                    @if($loop->index >= 5 && $loop->index <= 7)
                        <div class="item-small">
                            <div class="item-small-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="item-small-content">
                                <h4><a href="detail.html">{{$claw->title}}</a></h4>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag-gold tag">#New</a>
                                    <a href="{{$claw->link}}" class="tag-green tag">#Sports</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @foreach($claws[2]->manager as $claw)
                @if($loop->index == 4)
                    <div class="col-sm-6">
                        <div class="item-large">
                            <div class="item-large-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="image-overlay"></div>
                            <div class="item-large-content">
                                <h3><a href="detail.html">{{$claw->title}}</a></h3>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag tag-blue">#Dicas</a>
                                    <a href="{{$claw->link}}" class="tag tag-green">#Revendedor</a>
                                    <a href="{{$claw->link}}" class="tag tag-gold">#Calçados</a>
                                </div>
                                <p>{{$claw->description}}</p>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>


        <div class="row mix product">
            @foreach($claws[3]->product as $claw)
                @if ($loop->first)
                    <div class="col-sm-6">
                        <div class="item-large">
                            <div class="item-large-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="image-overlay"></div>
                            <div class="item-large-content">
                                <h3><a href="detail.html">{{$claw->title}}</a></h3>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag tag-blue">#Dicas</a>
                                    <a href="{{$claw->link}}" class="tag tag-green">#Revendedor</a>
                                    <a href="{{$claw->link}}" class="tag tag-gold">#Calçados</a>
                                </div>
                                <p>{{$claw->description}}</p>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="col-sm-6">
                @foreach($claws[3]->product as $claw)
                    @if($loop->index >= 1 && $loop->index <= 3)
                        <div class="item-small">
                            <div class="item-small-image">
                                <img alt="Image" src="{{$claw->image}}">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="item-small-content">
                                <h4><a href="detail.html">{{$claw->title}}</a></h4>
                                <div class="author-detail">
                                    <p><a href="{{$claw->link}}"><i class="icon-profile-male"></i> {{$claw->author}}</a></p>
                                    <p><i class="icon-clock"></i> {{$claw->date}}</p>
                                    <p><a href="{{$claw->link}}"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                                <div class="post-tag">
                                    <a href="{{$claw->link}}" class="tag-gold tag">#New</a>
                                    <a href="{{$claw->link}}" class="tag-green tag">#Sports</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</section>
@endif