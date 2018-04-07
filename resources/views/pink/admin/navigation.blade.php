@if($menu)
    <div class="menu classic">
        {!! $menu->asUL(['class' => 'menu']) !!}
    </div>
@endif