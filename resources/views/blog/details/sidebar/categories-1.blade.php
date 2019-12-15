<div class="post-categories sidebar-box">
    <div class="sidebar-title">
        <h3>Categorias</h3>
    </div>
    <ul>
        @foreach($details->tags as $tag)
            @if($loop->index > 20 && $loop->index <= 30)
                <li><a href="{{$tag->link}}">{{$tag->text}}</a></li>
            @endif
        @endforeach
    </ul>
</div>