@if($shopping)
    <div class="recent-post clearfix sidebar-box">
        <div class="sidebar-title">
            <h3>Outras Lojas</h3>
        </div>
        @foreach($shopping->stores as $outer)
            @if($configStore->name != $outer->nome)
                @php
                    $segment='';
                    foreach ($outer->tags as $seg) {
                        $segment .= $seg.' ';
                    }
                @endphp
                <div class="recent-item">
                    <div class="recent-image">
                        <a href="{{route('details-shopping', ['slug' => $shopping->slug, 'store' => $outer->fields->lojaUrl, 'segment' => \Str::slug($segment)])}}">
                            <img src="{{$outer->lojaLogo}}" alt="img">
                        </a>
                    </div>
                    <div class="recent-content">
                        <h4>
                            <a href="{{route('details-shopping', ['slug' => $shopping->slug, 'store' => $outer->fields->lojaUrl, 'segment' => \Str::slug($segment)])}}">
                                {{$outer->nome}}
                            </a>
                        </h4>
                        <div class="author-detail">
                            <p><a href="{{route('details-shopping', ['slug' => $shopping->slug, 'store' => $outer->fields->lojaUrl, 'segment' => 'comentario'])}}"><i class="icon-profile-male"></i> {{getComment('name')}}</a></p>
                            <p><i class="icon-clock"></i> {{getComment('day')}}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif