<div class="item-tags">
    @foreach($details->tags as $tag)
        @if($loop->index <= 20)
            <a href="{{$tag->link}}" class="tag tag-transparent">#{{$tag->text}}</a>
        @endif
    @endforeach
</div>
