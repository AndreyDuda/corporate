@foreach($items as $item)
    <li {{ ( URL::current() == $item->url() )? "class=active":'' }} >
        <a href="{{ $item->url() }}" >{{ $item->title }}</a>
        @if($item->hasChildren())
            <ul id="nav" class="sub-menu">
                @include( env('THEME') . '.customMenuItems', [ 'items' => $item->children() ] )
            </ul>
        @endif
    </li>
@endforeach