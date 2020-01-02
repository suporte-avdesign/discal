 @if($news)
    <section class="breaking-news">
        <div class="container2">
            <h3>Notícias</h3>
            <marquee scrolldelay="50" behavior="scroll" onmouseover="this.stop();" onmouseleave="this.start();">
                @foreach($news->breaking as $new)
                <li><a href="{{$new->link}}" target="_blank"> &bull; {{$new->title}} </a></li>
                @endforeach
            </marquee>
        </div>
    </section>
 @endif