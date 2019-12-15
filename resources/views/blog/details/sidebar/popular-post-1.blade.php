<div class="popular-post sidebar-box">
    <div class="sidebar-title">
        <h3>Mais visto</h3>
    </div>
    @php $j=1; @endphp

    @foreach($details->tags as $tag)
        @if($loop->index >= 30)
            <div class="popular-item">
                <div class="popular-content">
                    <span class="item-no">@if($j < 9)0{{$j}} @else{{$j}}@endif</span>
                    <h4><a href="{{$tag->link}}">{{\Str::limit($tag->text, 25, '...')}}</a></h4>
                    <div class="author-detail">
                        <p><a href="{{$tag->link}}"><i class="icon-profile-male"></i> {{strstr(getComment('name'), ' ', true)}}</a></p>
                        <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                        <p><a href="{{$tag->link}}"><i class="icon-chat"></i> {{getComment('comments')}} </a></p>
                    </div>
                </div>
            </div>
            @php $j++; @endphp
        @endif
    @endforeach
</div>
