<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html dir="ltr" lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>

    <meta charset="UTF-8" />
    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>Pink Rio | A strong, powerful and multiporpose WordPress Theme</title>

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/images/favicon.ico" />
    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset(env('THEME')) }}/apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset(env('THEME')) }}/apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href={{ asset(env('THEME')) }}/apple-touch-icon-72x.png" />
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset(env('THEME')) }}/apple-touch-icon-57x.png" />
    <!-- [favicon] end -->

    <!-- CSSs -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/css/reset.css" /> <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset(env('THEME')) }}/style.css" /> <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" id="max-width-1024-css" href="{{ asset(env('THEME')) }}/css/max-width-1024.css" type="text/css" media="screen and (max-width: 1240px)" />
    <link rel="stylesheet" id="max-width-768-css" href="{{ asset(env('THEME')) }}/css/max-width-768.css" type="text/css" media="screen and (max-width: 987px)" />
    <link rel="stylesheet" id="max-width-480-css" href="{{ asset(env('THEME')) }}/css/max-width-480.css" type="text/css" media="screen and (max-width: 480px)" />
    <link rel="stylesheet" id="max-width-320-css" href="{{ asset(env('THEME')) }}/css/max-width-320.css" type="text/css" media="screen and (max-width: 320px)" />

    <!-- CSSs Plugin -->
    <link rel="stylesheet" id="thickbox-css" href="{{ asset(env('THEME')) }}/css/thickbox.css" type="text/css" media="all" />
    <link rel="stylesheet" id="styles-minified-css" href="{{ asset(env('THEME')) }}/css/style-minifield.css" type="text/css" media="all" />
    <link rel="stylesheet" id="buttons" href="{{ asset(env('THEME')) }}/css/buttons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="cache-custom-css" href="{{ asset(env('THEME')) }}/css/cache-custom.css" type="text/css" media="all" />
    <link rel="stylesheet" id="custom-css" href="{{ asset(env('THEME')) }}/css/custom.css" type="text/css" media="all" />

    <!-- FONTs -->
    <link rel="stylesheet" id="google-fonts-css" href="http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed%3A300%7CRokkitt%7CShadows+Into+Light%7CAbel%7CDamion%7CMontez&amp;ver=3.4.2" type="text/css" media="all" />
    <link rel='stylesheet' href='{{ asset(env('THEME')) }}/css/font-awesome.css' type='text/css' media='all' />

    <!-- JAVASCRIPTs -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/comment-reply.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.cycle.min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.anythingslider.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.easing.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.aw-showcase.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/layerslider.kreaturamedia.jquery-min.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/shortcodes.js"></script>
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.colorbox-min.js"></script> <!-- nav -->
    <script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.tweetable.js"></script>

</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="no_js responsive page-template-home-php stretched">

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
                <div id="header-shadow"></div>
                <div id="menu-shadow"></div>
            </div>

        </div>
        <!-- END HEADER -->

        <!-- START SLIDER -->
        <div id="slider-cycle" class="slider cycle no-responsive slider_cycle group" style="height:485px;">
            <ul class="slider">
                <li>
                    <div class="slide-holder" style="background:  url('images/slider-cycle/xx.jpg') no-repeat center center" style="height:483px;">
                        <div class="slide-content-holder inner" style="height:483px;">
                            <div class="slide-content-holder-content" style="position: absolute; top:30px;right:650px;">
                                <div class="slide-title">
                                    <h2 style="color:#fff">CORPORATE, MULTIPURPOSE.. <br /><span>PINK RIO</span></h2>
                                </div>
                                <div class="slide-content" style="color:#fff">
                                    <p>Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-holder" style="background:  url('images/slider-cycle/00314.jpg') no-repeat center center" style="height:483px;">
                        <div class="slide-content-holder inner" style="height:483px;">
                            <div class="slide-content-holder-content" style="position: absolute; top:80px;left:500px;">
                                <div class="slide-title">
                                    <h2 style="color:#fff">PINKRIO. <span>STRONG AND POWERFUL.</span></h2>
                                </div>
                                <div class="slide-content" style="color:#fff">
                                    <p>Nam id quam a odio euismod pellentesque. Etiam congue rutrum risus non vestibulum. Quisque a diam at ligula blandit consequat. Mauris ac mi velit, a tempor neque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-holder" style="background:  url('images/slider-cycle/dd.jpg') no-repeat center center" style="height:483px;">
                        <div class="slide-content-holder inner" style="height:483px;">
                        </div>
                    </div>
                </li>
            </ul>

            <div id="yit-widget-area" class="group">
                <div class="yit-widget-content inner group">
                    <div class="widget-first yit-widget widget col1_4 one-fourth col widget-icon-text group">
                        <img class="icon-img" src="images/icons/cloud.jpg" alt="" />
                        <h3>Great Design</h3>
                        <p>A widgetized area: add shorcodes, text, icons and more.</p>
                    </div>
                    <div class="yit-widget widget col1_4 one-fourth col widget-last-post group">
                        <img class="icon-img" src="images/icons/blog1.png" alt="" />
                        <div>
                            <h3><a class="text-color" href="#" title="">Blog news</a></h3>
                            <p>Section shortcodes &amp; sticky posts! <a href="article.html"> | more →</a></p>
                        </div>
                    </div>
                    <div class="widget-last yit-widget widget col1_4 one-fourth col yit_text_quote">
                        <blockquote class="text-quote-quote">“Anyone who has never made a mistake has never tried anything new.”</blockquote>
                        <cite class="text-quote-author">Albert Einstein</cite>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function($){

                var     yit_slider_cycle_fx = 'easing',
                    yit_slider_cycle_speed = 800,
                    yit_slider_cycle_timeout = 3000,
                    yit_slider_cycle_directionNav = true,
                    yit_slider_cycle_directionNavHide = true,
                    yit_slider_cycle_autoplay = true;

                var yit_widget_area_position = function(){
                    $('#yit-widget-area').css({ top: 33 - $('#yit-widget-area').height() });
                };
                $(window).resize(yit_widget_area_position);
                yit_widget_area_position();

                if( $.browser.msie && parseInt($.browser.version.substr(0,1),10) <= '8' ) {
                    $('#slider-cycle ul.slider').anythingSlider({
                        expand              : true,
                        startStopped        : false,
                        buildArrows         : yit_slider_cycle_directionNav,
                        buildNavigation     : false,
                        buildStartStop      : false,
                        delay               : yit_slider_cycle_timeout,
                        animationTime       : yit_slider_cycle_speed,
                        easing              : yit_slider_cycle_fx,
                        autoPlay            : yit_slider_cycle_autoplay ? true : false,
                        pauseOnHover        : true,
                        toggleArrows        : false,
                        resizeContents      : true
                    });
                } else {
                    $('#slider-cycle ul.slider').anythingSlider({
                        expand              : true,
                        startStopped        : false,
                        buildArrows         : yit_slider_cycle_directionNav,
                        buildNavigation     : false,
                        buildStartStop      : false,
                        delay               : yit_slider_cycle_timeout,
                        animationTime       : yit_slider_cycle_speed,
                        easing              : yit_slider_cycle_fx,
                        autoPlay            : yit_slider_cycle_autoplay ? true : false,
                        pauseOnHover        : true,
                        toggleArrows        : yit_slider_cycle_directionNavHide ? true : false,
                        onSlideComplete     : function(slider){},
                        resizeContents      : true,
                        onSlideBegin        : function(slider) {},
                        onSlideComplete     : function(slider) {}
                    });

                }
            });
        </script>
        <div class="mobile-slider">
            <div class="slider fixed-image inner"><img src="images/slider-cycle/cycle-fixed.jpg" alt="" /></div>
        </div>

        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-right">
            <div class="inner group">
                <!-- START CONTENT -->
                <div id="content-home" class="content group">
                    <div class="hentry group">
                        <div class="section portfolio">

                            <h3 class="title">Latest projects</h3>

                            <div class="hentry work group portfolio-sticky portfolio-full-description">
                                <div class="work-thumbnail">
                                    <a class="thumb"><img src="images/projects/0081-385x192.jpg" alt="0081" title="0081" /></a>
                                    <div class="work-overlay">
                                        <h3><a href="project.html">Steep This!</a></h3>
                                        <p class="work-overlay-categories"><img src="images/categories.png" alt="Categories" /> in: <a href="category.html">Brand Identity</a>, <a href="category.html">Web Design</a></p>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h2><a href="project.html">Steep This!</a></h2>
                                    <p class="work-categories">in: <a href="category.html">Brand Identity</a>, <a href="category.html">Web Design</a></p>
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                                    <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus [...]
                                        <a href="project.html" class="read-more">|| Read more</a>
                                </div>
                            </div>

                            <div class="clear"></div>

                            <div class="portfolio-projects">

                                <div class="related_project">
                                    <div class="overlay_a related_img">
                                        <div class="overlay_wrapper">
                                            <img src="images/projects/0061-175x175.jpg" alt="0061" title="0061" />
                                            <div class="overlay">
                                                <a class="overlay_img" href="images/projects/0061.jpg" rel="lightbox" title=""></a>
                                                <a class="overlay_project" href="project.html"></a>
                                                <span class="overlay_title">Love</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a href="project.html">Love</a></h4>
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]
                                </div>

                                <div class="related_project">
                                    <div class="overlay_a related_img">
                                        <div class="overlay_wrapper">
                                            <img src="images/projects/0071-175x175.jpg" alt="0071" title="0071" />
                                            <div class="overlay">
                                                <a class="overlay_img" href="images/projects/0071.jpg" rel="lightbox" title=""></a>
                                                <a class="overlay_project" href="project.html"></a>
                                                <span class="overlay_title">Kineda</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a href="project.html">Kineda</a></h4>
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]
                                </div>

                                <div class="related_project">
                                    <div class="overlay_a related_img">
                                        <div class="overlay_wrapper">
                                            <img src="images/projects/009-175x175.jpg" alt="009" title="009" />
                                            <div class="overlay">
                                                <a class="overlay_img" href="images/projects/009.jpg" rel="lightbox" title=""></a>
                                                <a class="overlay_project" href="project.html"></a>
                                                <span class="overlay_title">Guanacos</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a href="project.html">Guanacos</a></h4>
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]
                                </div>

                                <div class="related_project_last related_project">
                                    <div class="overlay_a related_img">
                                        <div class="overlay_wrapper">
                                            <img src="images/projects/0011-175x175.jpg" alt="0011" title="0011" />
                                            <div class="overlay">
                                                <a class="overlay_img" href="images/projects/0011.jpg" rel="lightbox" title=""></a>
                                                <a class="overlay_project" href="project.html"></a>
                                                <span class="overlay_title">Miller Bob</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a href="project.html">Miller Bob</a></h4>
                                    <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, [...]
                                </div>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- START COMMENTS -->
                    <div id="comments">
                    </div>
                    <!-- END COMMENTS -->
                </div>
                <!-- END CONTENT -->
                <!-- START SIDEBAR -->
                <div class="sidebar group">

                    <div class="widget-first widget recent-posts">
                        <h3>From our blog</h3>
                        <div class="recent-post group">
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="images/articles/001-55x55.png" alt="001" title="001" /></div>
                                <div class="text">
                                    <a href="article.html" title="Section shortcodes &amp; sticky posts!" class="title">Section shortcodes &amp; sticky posts!</a>
                                    <p class="post-date">September 24, 2012</p>
                                </div>
                            </div>
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="images/articles/003-55x55.jpg" alt="003" title="003" /></div>
                                <div class="text">
                                    <a href="article.html" title="Nice &amp; Clean. The best for your blog!" class="title">Nice &amp; Clean. The best for your blog!</a>
                                    <p class="post-date">September 24, 2012</p>
                                </div>
                            </div>
                            <div class="hentry-post group">
                                <div class="thumb-img"><img src="images/articles/0037-55x55.jpg" alt="0037" title="0037" /></div>
                                <div class="text">
                                    <a href="article.html" title="Another theme by YIThemes!" class="title">Another theme by YIThemes!</a>
                                    <p class="post-date">September 24, 2012</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-last widget text-image">
                        <h3>Customer support</h3>
                        <div class="text-image" style="text-align:left"><img src="images/callus.gif" alt="Customer support" /></div>
                        <p>Proin porttitor dolor eu nibh lacinia at ultrices lorem venenatis. Sed volutpat scelerisque vulputate. </p>
                    </div>

                </div>
                <!-- END SIDEBAR -->
                <!-- START EXTRA CONTENT -->
                <!-- END EXTRA CONTENT -->
            </div>
        </div>
        <!-- END PRIMARY -->

        <!-- START COPYRIGHT -->
        <div id="copyright">
            <div class="inner group">
                <div class="left">
                    <a href="http://yithemes.com/?ddownload=2046&ap_id=pinkrio-html"><strong>Download the free version for Wordpress</strong></a>
                </div>
                <div class="right">
                    <a href="#" class="socials-small facebook-small" title="Facebook">facebook</a>
                    <a href="#" class="socials-small rss-small" title="Rss">rss</a>
                    <a href="#" class="socials-small twitter-small" title="Twitter">twitter</a>
                    <a href="#" class="socials-small flickr-small" title="Flickr">flickr</a>
                    <a href="#" class="socials-small skype-small" title="Skype">skype</a>
                    <a href="#" class="socials-small google-small" title="Google">google</a>
                    <a href="#" class="socials-small pinterest-small" title="Pinterest">pinterest</a>
                </div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END BG SHADOW -->

<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.custom.js"></script>
<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/contact.js"></script>
<script type="text/javascript" src="{{ asset(env('THEME')) }}/js/jquery.mobilemenu.js"></script>

</body>
<!-- END BODY -->
</html>