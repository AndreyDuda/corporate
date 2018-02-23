

    <div class="widget-first widget recent-posts">
        @if($articles)
            <h3>{{ trans('ru.from_blog') }}</h3>
            <div class="recent-post group">
                @foreach($articles as $item)
                    <div class="hentry-post group">
                        <div class="thumb-img"><img src="{{ asset(env('THEME')) }}/images/articles/{{ $item->img->mini }}" alt="001" title="001" /></div>
                        <div class="text">
                            <a href="{{ route( 'articles.show', ['alias' => $item->alias] ) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $item->title }}</a>
                            <p class="post-date">{{ $item->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="widget-last widget text-image">
        <h3>Customer support</h3>
        <div class="text-image" style="text-align:left"><img src="{{ asset( env('THEME') ) }}/images/callus.gif" alt="Customer support" /></div>
        <p>Proin porttitor dolor eu nibh lacinia at ultrices lorem venenatis. Sed volutpat scelerisque vulputate. </p>
    </div>

