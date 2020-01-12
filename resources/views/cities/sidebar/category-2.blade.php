@if($content->menu)
    <div class="post-categories sidebar-box">
        <div class="sidebar-title">
            <h3>Categorias</h3>
        </div>
        <ul>
            @foreach($content->menu as $menu)
                <li><a href="{{$menu->href}}">{{$menu->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endif