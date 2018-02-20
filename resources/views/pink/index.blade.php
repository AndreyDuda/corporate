@extends(env('THEME') . '.layouts.site')

@section('navigation')
    {!! $navigation !!}
@endsection

@section('slider')
    {!! $sliders !!}
@endsection

@section('content')
    {!! $content !!}
@endsection