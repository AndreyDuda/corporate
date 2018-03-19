

    <div class="widget-first widget recent-posts">
        <h3>{{ Lang::get('ru.latest_project') }}</h3>
        <div class="recent-post group">
            @if( !$portfolios->isEmpty() )
                @foreach($portfolios as $item)

                    <div class="hentry-post group">
                        <div class="thumb-img"><img style="width: 55px" src="{{ asset(env('THEME')) }}/images/projects/{{ $item->img->mini }}" alt="001" title="001" /></div>
                        <div class="text">
                            <a href="{{ route('portfolios.show', ['alias' => $item->alias]) }}" title="{{ $item->title }}" class="title">{{ $item->title }}</a>
                            <p>{{ str_limit( $item->text, 130 ) }} </p>
                            <a class="read-more" href="{{ route('portfolios.show', ['alias' => $item->alias]) }}">&rarr; {{ Lang::get('ru.read_more') }}</a>
                        </div>
                    </div>

                @endforeach
            @endif



    @if( !empty($comments) )
        <div class="widget-last widget recent-comments">
            <h3>{{ Lang::get('ru.lates_comments') }}</h3>
            <div class="recent-post recent-comments group">
                @foreach($comments as $item)

                    <div class="the-post group">
                        <div class="avatar">
                            <img alt="" src="{{ asset(env('THEME')) }}/images/avatar/nicola55.jpeg" class="avatar" />
                        </div>
                        <span class="author"><strong><a href=#">{{ ($item->user->name)? $item->user->name : $item->name}}</a></strong> in</span>
                        <a class="title" href="#"></a>
                        <p class="comment">
                           {{ $item->text }}<a class="goto" href="#">&#187;</a>
                        </p>
                    </div>

                @endforeach
            </div>
        </div>

    @endif










