<!DOCTYPE html>


<!-- START HEAD -->
<head>

    <meta charset="UTF-8" />


    <title>{{ $title }}</title>

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/reset.css" /> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/style.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/style-minifield.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/buttons.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/cache-custom.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/cache-custom.css" /> <!-- MAIN THEME STYLESHEET -->




    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href='{{ asset(env('THEME')) }}/css/font-awesome.css' type='text/css' media='all' />

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/bootstrap-filestyle.min.js"></script>


</head>
<!-- END HEAD -->

<!-- START BODY -->

<body class="no_js responsive {{ (Route::currentRouteName() == 'home') ? 'page-template-home-php' : ''}} stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="group">

        <!-- START HEADER -->
        <div id="header" class="group">

            <div class="group inner">

                <!-- START LOGO -->
                <div id="logo" class="group">
                    <a href="index.html" title="Pink Rio"><img src="{{ asset(env('THEME')) }}/images/logo.png" title="Pink Rio" alt="Pink Rio" /></a>
                </div>
                <!-- END LOGO -->

                <div id="sidebar-header" class="group">
                    <div class="widget-first widget yit_text_quote">
                        <blockquote class="text-quote-quote">&#8220;The caterpillar does all the work but the butterfly gets all the publicity.&#8221;</blockquote>
                        <cite class="text-quote-author">George Carlin</cite>
                    </div>
                </div>
                <div class="clearer"></div>

                <hr />

                <!-- START MAIN NAVIGATION -->
            @yield('navigation')
            <!-- END MAIN NAVIGATION -->

                <div id="menu-shadow"></div>
            </div>

        </div>
        <!-- END HEADER -->
        <!-- START PRIMARY -->

        @if (count($errors) > 0)
            <div class="box error-box">

                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach

            </div>
        @endif

        @if (session('status'))
            <div class="box success-box">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="box error-box">
                {{ session('error') }}
            </div>
        @endif

        <div id="primary" class="sidebar-{{ isset($bar) ? $bar : 'no' }}">
            <div class="inner group">
                <!-- START CONTENT -->




            @yield('content')

            <!-- END CONTENT -->
                <!-- START SIDEBAR -->

                <!-- END SIDEBAR -->

                <!-- START EXTRA CONTENT -->
                <!-- END EXTRA CONTENT -->
            </div>
        </div>
        <!-- END PRIMARY -->

        <!-- START COPYRIGHT -->
    @yield('footer')
    <!-- END COPYRIGHT -->
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END BG SHADOW -->


</body>
<!-- END BODY -->
</html>