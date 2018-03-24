@extends(env('THEME') . '.layouts.site')

@section('navigation')
    {!! $navigation !!}
@endsection

@section('content')
<div id="content-index" class="content group">
    <img class="error-404-image group" src="{{ asset(env('THEME')) }}/images/features/404.png" title="Error 404" alt="404" />
    <div class="error-404-text group">
        <p>We are sorry but the page you are looking for does not exist.<br />You could <a href="index.html">return to the home page</a> or search using the search box below.</p>

    </div>
</div>
@endsection

@section('footer')
    @include(env('THEME') . '.footer')
@endsection
