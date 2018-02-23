<div id="content-blog" class="content group">

    @if($articles)
        @foreach($articles as $item)

            <div class="sticky hentry hentry-post blog-big group">
                <!-- post featured & title -->
                <div class="thumbnail">
                    <!-- post title -->
                    <h2 class="post-title"><a href="{{ route( 'articles.show', ['alias' => $item->alias] ) }}">{{ $item->title }}</a></h2>
                    <!-- post featured -->
                    <div class="image-wrap">
                        <img src="{{ asset( env('THEME')) }}/images/articles/{{ $item->img->max }}" alt="001" title="001" />
                    </div>
                    <p class="date">
                        <span class="month">{{ ($item->created_at->format('M'))? $item->created_at->format('M'):'' }}</span>
                        <span class="day">{{ ($item->created_at->format('d'))? $item->created_at->format('d'):'' }}</span>
                    </p>
                </div>
                <!-- post meta -->
                <div class="meta group">
                    <p class="author"><span>by <a href="#" title="Posts by {{ $item->user->name }}" rel="author">{{ $item->user->name }}</a></span></p>
                    <p class="categories"><span>In: <a href="{{ route( 'articlesCat', ['cat_alias' => $item->category->alias] ) }}" title="{{ $item->category->title }}" rel="category tag">{{ $item->category->title }}</a></span></p>
                    <p class="comments"><span><a href="{{ route( 'articles.show', ['alias' => $item->alias] ) }}#respond" title="Comment on Section shortcodes &amp; sticky posts!">{{ ( count($item->comments) )? count($item->comments) : '0' }} {{ Lang::choice('ru.comments', count($item->comments)) }}</a></span></p>
                </div>
                <!-- post content -->
                <div class="the-content group">
                    {!! $item->desc !!}
                   <p><a href="{{ route('articles.show', ['alias' => $item->alias]) }}" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→ {{ Lang::get('ru.read_more') }}</a></p>
                </div>
                <div class="clear"></div>
            </div>

        @endforeach

        <div class="general-pagination group">
            @if($articles->lastPage() > 1)
                @if($articles->currentPage() != 1)
                    <a href="{{ $articles->url($articles->currentPage() - 1 ) }}" class="selected">{{ Lang::get('pagination.previous') }}</a>
                @endif

                @for($i = 1; $i <= $articles->lastPage(); $i++)

                    @if($articles->currentPage() == $i)
                        <a class="selected disabled" >{{ $i }}</a>
                    @else
                        <a href="{{ $articles->url($i) }}" >{{ $i }}</a>
                    @endif

                @endfor

                @if($articles->currentPage() != $articles->lastPage())
                        <a href="{{ $articles->url($articles->currentPage() + 1 ) }}">{{ Lang::get('pagination.next') }}</a>
                @endif
            @endif
        </div>
    @else
        {!!  Lang::get('ru.articles_no') !!}
    @endif

</div>