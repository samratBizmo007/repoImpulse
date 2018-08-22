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

    <!-- angular-->
    <script src="{{ asset('assets/js/angular.js') }}"></script>
    <script src="{{ asset('assets/js/angular-sanitize.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/module/common.js') }}"></script>
    <!-- External JavaScripts ============================================= -->
    <script src="{{ asset('template/js/jquery.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $.ajax({
        url: "https://geoip-db.com/jsonp",
        jsonpCallback: "callback",
        dataType: "jsonp",
        success: function( location ) {
            // $('#country').html(location.country_name);
            // $('#state').html(location.state);
            $('#curr_location').html('<a>'+location.city+'</a>');
            $('#curr_location_text').val(location.city);
            $.cookie('Location', location.city, { expires: 30});

            // $('#latitude').html(location.latitude);
            // $('#longitude').html(location.longitude);
            // $('#ip').html(location.IPv4);  
        }
    }); 
        });
     
    </script>
</head>
<body class="stretched"> 
    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            @if(Request::url() != URL::to('/').'/adminlogin')

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
                                <li id="curr_location"><a>Locations</a>
                                    <ul>
                                        <li><a href="{{URL::to('/')}}/location/set/1">Pune</a></li>
                                        <li><a href="{{URL::to('/')}}/location/set/2">Outside Pune</a></li>
                                        <!-- <li><a href="#">Amsterdam</a></li> -->
                                    </ul>
                                </li>
                                <input type="hidden" name="curr_location_text" id="curr_location_text">
                                <!-- <li><a href="faqs.html">FAQs</a></li> -->
                                <li><a href="{{URL::to('/')}}/contact-us">Contact</a></li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                </div>

            </div><!-- #top-bar end -->

        <!-- Header
            ============================================= -->
            <header id="header" class="sticky-style-2" ng-app="menuApp" ng-cloak ng-controller="menuCtrl">

                <div class="container clearfix">

                <!-- Logo
                    ============================================= -->
                    <div id="logo" class=" w3-margin-top">
                        <a href="{{URL::to('/')}}" class="standard-logo w3-padding-top"><img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 230px;height: auto" alt="Impulse Logo"></a>
                        <a href="{{URL::to('/')}}" class="retina-logo w3-margin-top"><img src="{{URL::to('/')}}/template/images/impulse-logo.png" class="img img-responsive" style="width: 240px;height: auto" alt="Impulse Logo"></a>
                    </div><!-- #logo end -->
                    <ul class="header-extras" style="margin-bottom:24px">
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
                                <li><a href="#"><div>Company</div></a>
                                    <ul>
                                        <li><a href="{{URL::to('/')}}/contact-us"><div>Contact Us</div></a></li>
                                        <li><a href="{{URL::to('/')}}/career"><div>Careers</div></a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a href="#"><div>Products</div></a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12">
                                            <li class="mega-menu-title"><a href="#"><div>By Category</div></a>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" id="catMenu2" style="padding-top:0px;border-left:none;">
                                                    <?php 
                                                    $countCat=count($all_categories);
                                                    $rowCount=0;

                                                    foreach ($all_categories as $cat)
                                                    {
                                                        ?>                                                   
                                                        <li><a href="{{URL::to('/')}}/category/info/<?php echo base64_encode($cat->cat_id); ?>"><div><?php echo $cat->category_name; ?></div></a></li>
                                                        <?php 
                                                        $rowCount++;
                                                        if($rowCount==10){
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" ng-show="false" id="catMenu2" style="padding-top:0px">
                                                    <?php 
                                                    $countCat=count($all_categories);
                                                    $secRow=0;

                                                    for($i=$rowCount;$i<$countCat;$i++)
                                                    {
                                                        ?>                                                   
                                                        <li><a href="{{URL::to('/')}}/category/info/<?php echo base64_encode($all_categories[$i]->cat_id); ?>"><div><?php echo $all_categories[$i]->category_name; ?></div></a></li>
                                                        <?php 
                                                        $secRow++;
                                                        if($secRow==10){
                                                       
                                                        break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12">
                                            <li class="mega-menu-title"><a href="#"><div>By Brand</div></a>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" id="brandMenu1" style="padding-top:0px;border-left:none;">
                                                    <?php 
                                                    $countBrand=count($all_brands);
                                                    $rowCountBr=0;

                                                    foreach ($all_brands as $br)
                                                    {
                                                        ?>                                                   
                                                        <li><a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>"><div><?php echo $br->brand_name; ?></div></a></li>
                                                        <?php 
                                                        $rowCountBr++;
                                                        if($rowCountBr==10){
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <ul class="mega-menu-column col-lg-6 col-sm-12 col-xs-12" id="brandMenu2" style="padding-top:0px">
                                                    <?php 
                                                    $countBrand=count($all_brands);
                                                    $secRowBr=0;

                                                    for($i=$rowCountBr;$i<$countBrand;$i++)
                                                    {
                                                        ?>                                                   
                                                        <li><a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($all_brands[$i]->brand_id); ?>"><div><?php echo $all_brands[$i]->brand_name; ?></div></a></li>
                                                        <?php 
                                                        $secRowBr++;
                                                        if($secRowBr==9){
                                                        echo '<li><a href="'.URL::to('/').'/brands"><div>Others</div></a></li>';
                                                        break;
                                                        }
                                                    }
                                                    ?>
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
                            <!-- <div id="top-search">
                                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                                <form action="search.html" method="get">
                                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                                </form>
                            </div> --><!-- #top-search end -->

                        </div>

                    </nav><!-- #primary-menu end -->

                </div>

            </header><!-- #header end -->   
            @endif   
            @yield('content')
            @if(Request::url() != URL::to('/').'/adminlogin')  
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
                                <div class="w3-col l6">
                                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                <!-- 
                                    <div class="widget subscribe-widget clearfix">
                                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" class="nobottommargin" action="/get-connect/subscribeEmail" method="POST">
                                            <div class="input-group divcenter">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                                </div>
                                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" required>
                                                <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" id="subscribeButton" type="submit">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="formOutput"></div>
                                    </div>
                                 --></div>
                            </div>

                        </div>

                        <div class="col_one_third col_last">
                            <div class="widget clear-bottommargin-sm clearfix">
                                <div class="row">

                                    <div class="col-lg-12 bottommargin-sm">
                                        <div class="footer-big-contacts">
                                            <span>Call Us:</span>
                                            (91) 84110 09080
                                        </div>
                                    </div>

                                    <div class="col-lg-12 bottommargin-sm">
                                        <div class="footer-big-contacts">
                                            <span>Send an Email:</span>
                                            info@impulse.com
                                        </div>
                                    </div>

                                </div>

                            </div>
<!-- 
                            <div class="widget subscribe-widget clearfix">
                                <div class="row">

                                    <div class="col-lg-6 clearfix bottommargin-sm">
                                        
                                    </div>

                                </div>
                            </div> -->

                        </div>

                    </div><!-- .footer-widgets-wrap end -->

                </div>

            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="col_half">
                            Copyrights &copy; 2018 All Rights Reserved by Impulse World Trends.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col_half col_last tright">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="/">Home</a>/
                                <a href="/trending">Trends</a>/
                                <a href="/brands">Brands</a>/
                                <a href="/projects">Projects</a>/
                                <a href="/services">Services</a>/
                                <a href="/contact-us">Contact</a>/
                                <a href="/career">Career</a>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

            </footer><!-- #footer end -->
            @endif
        </div><!-- #wrapper end -->

    <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
    </body>
<script src="{{ asset('template/js/plugins.js') }}"></script>

<!-- Footer Scripts============================================= -->
<script src="{{ asset('template/js/functions.js') }}"></script>
</html>
