@if($content->products)
    <div class="row">
        @if($content->category)
            <div class="col-xs-12">
                <div class="list-fullwidth list-item grid-item margin-zero"  style="background-color: #303e4b">
                    <div class="list-content">
                        <h3 style="color: #ffffff"><b>{{$content->category}}</b></h3>
                    </div>
                </div>
            </div>
        @endif
        @foreach($content->products as $product)
            <div class="col-xs-6">
                <div class="list-item grid-item">
                    <div class="list-image">
                        @if($product->src)
                            <img src="{{$product->src}}" alt="Image">
                        @endif
                        <div class="image-overlay"></div>
                    </div>
                    <div class="list-content">
                        @if($product->name)
                            <h3><a href="javacript:void(0)">{{$product->name}}</a></h3>
                        @endif
                        @if($product->code && $product->code != $product->name)
                            <h3><a href="javacript:void(0)">{{$product->code}}</a></h3>
                        @endif
                        @if($product->description)
                                <p>{{limitText($product->description, 88)}} <a href="javascript:void(0)"><b>Saiba mais</b></a></p>
                        @endif
                        <div class="author-detail">
                            <p><a href="javascript:void(0)"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                            <p><a href="javascript:void(0)"><i class="icon-chat"></i> {{getComment('comments')}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @if($loop->index == 5)
                <div class="blog-ad1 col-xs-12">
                    <img src="{{asset('images/advertisements/pd4.jpg')}}" alt="img">
                </div>
            @endif
        @endforeach
    </div>
    <!--
    <div class="pagination">
        <ul class="pagination">
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
    </div>
    -->
@endif
