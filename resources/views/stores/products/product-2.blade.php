@if($content->products)
                @foreach($content->products as $product)
                    <div class="col-sm-3 col-xs-6">
                        <div class="list-item grid-item">
                            <div class="list-image">
                                <a href="javascript:void(0)" data-url="{{$product->link}}">
                                    <img src="{{$product->image}}" alt="{{$product->title}}">
                                </a>
                                <div class="image-overlay"></div>
                            </div>
                            <div class="list-content">
                                <h5><a href="detail-fullwidth.html">{{$product->title}}</a></h5>
                                <h5><a href="detail-fullwidth.html">{{$product->qty}} {{$product->price}}</a></h5>
                                <div class="author-detail">
                                    <p><a href="#"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                                    <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                                    <p><a href="#"><i class="icon-chat"></i> {{getComment('comments')}} comentários</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-sm-12">
                    <div class="pagination">
                        <ul class="pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
@endif