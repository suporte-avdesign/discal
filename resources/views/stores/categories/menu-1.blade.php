@foreach($content->menu as $menu)
    <a href="javascript:void(0);" data-url="{{$menu->link}}" class="tag tag-blue">{{$menu->title}}</a>
@endforeach