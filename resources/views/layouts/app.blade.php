<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('template/css/w3.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('/') }}css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/construction.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/construction-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body class="stretched"> 
    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

        <!-- Top Bar
            ============================================= -->
            <div id="top-bar">

                <div class="container clearfix">

                    <div class="col_half nobottommargin clearfix">

                    <!-- Top Social
                        ============================================= -->
                        <div id="top-social">
                            <ul>
                                <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                                <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                                <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                                <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="fa fa-whatsapp"></i></span><span class="ts-text">Whatsapp</span></a></li>
                            </ul>
                        </div><!-- #top-social end -->

                    </div>

                    <div class="col_half fright col_last clearfix nobottommargin">

                    <!-- Top Links
                        ============================================= -->
                        <div class="top-links">
                            <ul>
                                <li><a>Locations</a>
                                    <ul>
                                        <li><a href="#">Pune</a></li>
                                        <li><a href="#">Outside Pune</a></li>
                                        <!-- <li><a href="#">Amsterdam</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="faqs.html">FAQs</a></li> -->
                                <li><a href="{{URL::to('/')}}/contact-us">Contact</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                </div>

            </div><!-- #top-bar end -->

        <!-- Header
            ============================================= -->
            <header id="header" class="sticky-style-2">

                <div class="container clearfix">

                <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="{{URL::to('/')}}" class="standard-logo w3-padding-top"><img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 230px;height: auto" alt="Impulse Logo"></a>
                        <a href="{{URL::to('/')}}" class="retina-logo w3-margin-top"><img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 240px;height: auto" alt="Impulse Logo"></a>
                    </div><!-- #logo end -->

                    <ul class="header-extras">
                        <li>
                            <i class="i-plain icon-call nomargin"></i>
                            <div class="he-text">
                                Call Us
                                <span>(91) 84110 09080</span>
                            </div>
                        </li>
                        <li>
                            <i class="i-plain icon-line2-envelope nomargin"></i>
                            <div class="he-text">
                                Email Us
                                <span>info@impulsetrend.com</span>
                            </div>
                        </li>
                        <li>
                            <i class="i-plain icon-line-clock nomargin"></i>
                            <div class="he-text">
                                We'are Open
                                <span>Mon - Sat, 10AM to 8PM</span>
                            </div>
                        </li>
                    </ul>

                </div>

                <div id="header-wrap">

                <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="with-arrows style-2 ">

                        <div class="container clearfix">

                            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                            <ul>
                                <li class="current"><a href="{{URL::to('/')}}"><div>Home</div></a></li>
                                <li><a><div>Company</div></a>
                                    <ul>
                                        <li><a href="{{URL::to('/')}}/contact-us"><div>Contact Us</div></a></li>
                                        <li><a href="{{URL::to('/')}}/career"><div>Careers</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Products</div></a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12">
                                            <li class="mega-menu-title"><a href="#"><div>By Category</div></a>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" style="padding-top:0px;border-left:none;">
                                                    <li><a href="portfolio-1.html"><div>C. P. Fitting</div></a></li>
                                                    <li><a href="portfolio-2.html"><div>Sanitary ware</div></a></li>
                                                    <li><a href="portfolio-3.html"><div>Pex</div></a></li>
                                                    <li><a href="portfolio.html"><div>Tece</div></a></li>
                                                    <li><a href="portfolio-5.html"><div>Tiles</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Roofing Tiles</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Kerakoll</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Wooden Floor</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Windows</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Kitchen</div></a></li>
                                                </ul>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" style="padding-top:0px">
                                                    <li><a href="portfolio-6.html"><div>Appliances</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Wardrobe</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Hunter Douglas</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Dorma</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>TCS</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Railing</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Thermory</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Forms &amp; Surfaces</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Accessories</div></a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12">
                                            <li class="mega-menu-title"><a href="#"><div>By Brand</div></a>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" style="padding-top:0px;border-left:none;">
                                                    <li><a href="portfolio-1.html"><div>Grohe</div></a></li>
                                                    <li><a href="portfolio-2.html"><div>Toto</div></a></li>
                                                    <li><a href="portfolio-3.html"><div>Delta</div></a></li>
                                                    <li><a href="portfolio.html"><div>Brizo</div></a></li>
                                                    <li><a href="portfolio-5.html"><div>Smartpool</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Amoro</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Catalano</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Tender Rain</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Tece</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Inda</div></a></li>
                                                </ul>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" style="padding-top:0px">
                                                    <li><a href="portfolio-6.html"><div>Giacomini</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Laminam</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Versace</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Marca Corona</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Johnson</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Nobilia</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Siemens</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Blanco</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Rauch</div></a></li>
                                                    <li><a href="portfolio-6.html"><div>Others</div></a></li>

                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                                <li><a href="{{URL::to('/')}}/trending"><div>Trends</div></a></li>
                                
                                <li><a href="{{URL::to('/')}}/projects"><div>Projects</div></a></li>
                                <li><a href="{{URL::to('/')}}/services"><div>Services</div></a></li>
                            </ul>

                        <!-- Top Search
                            ============================================= -->
                            <div id="top-search">
                                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                                <form action="search.html" method="get">
                                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                                </form>
                            </div><!-- #top-search end -->

                        </div>

                    </nav><!-- #primary-menu end -->

                </div>

            </header><!-- #header end -->      
            @yield('content')
    <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                    ============================================= -->
                    <div class="footer-widgets-wrap clearfix">

                        <div class="col_two_third">

                            <div class="widget clearfix">

                                <img src="{{URL::to('/')}}/template/images/impulse-logo.png" alt="" class="alignleft" style="width: 230px;height:auto;margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

                                <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

                                <div class="line" style="margin: 30px 0;"></div>

                                <div class="row">

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Forums</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Agency</a></li>
                                            <li><a href="#">eCommerce</a></li>
                                            <li><a href="#">Personal</a></li>
                                            <li><a href="#">One Page</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-3 col-6 bottommargin-sm widget_links">
                                        <ul>
                                            <li><a href="#">Restaurant</a></li>
                                            <li><a href="#">Wedding</a></li>
                                            <li><a href="#">App Showcase</a></li>
                                            <li><a href="#">Magazine</a></li>
                                            <li><a href="#">Landing Page</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            
                            <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                    </div>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                            <div class="widget clear-bottommargin-sm clearfix">

                                <div class="row">

                                    <div class="col-lg-12 bottommargin-sm">
                                        <div class="footer-big-contacts">
                                            <span>Call Us:</span>
                                            (91) 22 55412474
                                        </div>
                                    </div>

                                    <div class="col-lg-12 bottommargin-sm">
                                        <div class="footer-big-contacts">
                                            <span>Send an Email:</span>
                                            info@canvas.com
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="widget subscribe-widget clearfix">
                                <div class="row">

                                    <div class="col-lg-6 clearfix bottommargin-sm">
                                        <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-lg-6 clearfix">
                                        <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div><!-- .footer-widgets-wrap end -->

                </div>

            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="col_half">
                            Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col_half col_last tright">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

            </footer><!-- #footer end -->

        </div><!-- #wrapper end -->

    <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
    </body>
<!-- External JavaScripts
    ============================================= -->
    <script src="{{ asset('template/js/jquery.js') }}"></script>
    <script src="{{ asset('template/js/plugins.js') }}"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('template/js/functions.js') }}"></script>
        </html>
