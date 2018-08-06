@extends('layouts.app')

@section('content')
<title>Impulse Trends | Home</title>


<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 550px;" data-loop="true">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('template/images/slider/2.jpg'); background-position: center top;">
                <div class="container clearfix">
                    <div class="slider-caption">
                        <h2>Welcome to Impulse Trends</h2>
                        <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-right">
                        <h2>Beautifully Flexible</h2>
                        <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                    </div>
                </div>
                <div class="video-wrap">
                    <video id="slide-video" poster="template/images/videos/1.jpg" preload="auto" loop autoplay muted>
                        <source src='template/images/videos/1.webm' type='video/webm' />
                        <source src='template/images/videos/1.mp4' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('template/images/slider/1.jpg'); background-position: center bottom;">
                <div class="container clearfix">
                    <div  class="slider-caption">
                        <h2>Premium Constructions</h2>
                        <p class="d-none d-sm-block">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

</section>

        <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap">
                    <!-- aboout us section -->
                    <div class="container clearfix">
                        <div class="row clearfix">
                            <div class="col-lg-5">
                                <div class="heading-block nobottomborder bottommargin-sm">
                                    <h3>BRAND DOES MATTER</h3>
                                    <span>Points that defines Why Brands really Matter!</span>
                                </div>
                                <p>When consumers trust a brand, it makes them loyal; and that's what we preserve more.</p>
                                <ul class="iconlist iconlist-large iconlist-color">
                                    <li><i class="icon-ok"></i> Brands create difference.</li>
                                    <li><i class="icon-ok"></i> Brands provide safety.</li>
                                    <li><i class="icon-ok"></i> Brands add value.</li>
                                    <li><i class="icon-ok"></i> Brands express who we are.</li>
                                    <li><i class="icon-ok"></i> Brands give consumers a reason to share.</li>
                                    <li><i class="icon-ok"></i> Brands provide peace of mind.</li>
                                </ul>
                            </div>

                            <div class="col-lg-7">
                                <ul class="clients-grid grid-4 nobottommargin clearfix">
                                    @if($brands!='')
                                    @foreach($brands as $br)
                                    <li><a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>"><img src="{{URL::to('/')}}/{{$br->brand_image}}" alt="{{$br->brand_name}} logo"></a></li>
                                    @endforeach
                                    @else
                                    <div class="w3-col l12 w3-center w3-padding">
                                        <h3>No Brands Available</h3>
                                    </div>
                                    @endif
                                </ul>
                            </div>
                            <div class="w3-col l12 w3-center">
                                <a href="{{URL::to('/')}}/brands" class="btn button button-3d w3-center">Browse More Brands <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>

                        <div class="divider divider-center divider-border"><i class="icon-diamond"></i></div>
                    </div>
                    <!-- end -->
                    <!-- Product list starts ============================================= -->
                    <div class="section nomargin nobg clearfix" style="padding: 0px 0;">
                        <div class="container clearfix">

                         <div class="heading-block center" style="margin-bottom: 20px">
                            <h3>Popular Products</h3>
                            <span>Checkout our Featured & Popular Products</span>
                        </div>
                        <div class="clear"></div>

                        <!-- Portfolio Items
                            ============================================= -->
                            <div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

                                @if($products!='')
                                @foreach($products as $prod)
                                <?php 
                                        $img_arr=json_decode($prod->prod_image,TRUE);
                                        ?>
                                <!-- Product div -->
                                <article class="portfolio-item cf-sedan" style="padding-bottom: 40px">
                                    <div class="portfolio-image">
                                        <a href="">
                                            <img src="{{URL::to('/')}}/{{$img_arr[0]}}" alt="{{$prod->prod_name}} Image Data">
                                            <div class="w3-opacity-min" style="position: absolute;top: 0px;left: 0;color: #FFF;padding:8px;z-index: 1;">
                                                <a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>">
                                                    <img src="{{URL::to('/')}}/{{$br->brand_image}}" alt="{{$br->brand_name}} logo" class="img img-responsive" style="height: 60px;width: 60px;border:2px black solid">
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w3-col l12">
                                        <a class="btn w3-right w3-small" href="{{URL::to('/')}}/category/{{$prod->category_name}}" style="padding:0"><span class="w3-right"><b>{{$prod->category_name}}</b></span></a>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="{{URL::to('/')}}/products/info/<?php echo base64_encode($prod->product_id); ?>">{{$prod->prod_name}}</a></h3>
                                        <span style="height: 60px;overflow: hidden">{{$prod->prod_description}}</span>
                                        <a class="btn" href="{{URL::to('/')}}/products/info/<?php echo base64_encode($prod->product_id); ?>" style="padding:0"><span class=" w3-text-red">Learn more</span></a>
                                    </div>
                                </article>
                                @endforeach
                                @else
                                <div class="w3-col l12 w3-center w3-padding">
                                    <h3>No Products Available</h3>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="divider divider-center divider-border"><i class="icon-building"></i></div>
                    </div> 
                    <!-- Product lists end -->

                    <!-- Projects section start -->
                    <!-- Recent projects section -->
                    <div class="container">
                       <div class="heading-block center" style="margin-top:0px;margin-bottom: 20px">
                        <h3>Recent Projects</h3>
                        <span>Know our recent projects and associated products</span>
                    </div>

                    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2" style="margin-bottom: 60px">

                        <div class="oc-item">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="template/images/blog/5.jpg" data-lightbox="image"><img class="image_fade" src="template/images/blog/5.jpg" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="#">Upcoming Projects in Australia</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li>10th Feb 2014</li>
                                    <li><a href="#comments">13 Comments</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="template/images/blog/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="template/images/blog/2.jpg" alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a href="template/images/blog/1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="template/images/blog/1.jpg" alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a href="template/images/blog/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="template/images/blog/3.jpg" alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="#">Real Estate just got a little more Expensive</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li>24th Feb 2014</li>
                                    <li><a href="#comments">21 Comments</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem!</p>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="template/images/blog/4.jpg" data-lightbox="image"><img class="image_fade" src="template/images/blog/4.jpg" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="#">Global Excellence Construction Award</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li>5th May 2014</li>
                                    <li><a href="#comments">6 Comments</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Projects section ends -->
                <!-- Contact us link -->
                <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center w3-margin-top tright bottommargin-lg t300 font-primary" style="font-size: 26px;">
                    <div class="container clearfix">
                        Send us your requirement and we will get back to you! <strong>Contact Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
                    </div>
                </a>
                <!-- Contact us link -->

                <!-- Services section starts -->
                <div class="container clearfix">
                    <div class="heading-block center" style="margin-top:0px;margin-bottom: 20px">
                        <a href="/services"><h3>Our Services</h3></a>
                    </div>

                    @if($services!='')
                    @foreach($services as $serv)
                    <div class="w3-col l3 w3-margin-bottom">
                        <div class="col-lg-12">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img style="border-radius: 2px;" src="{{URL::to('/')}}/{{$serv->service_image}}" alt="{{$serv->service_title}}">
                                </div>
                                <div class="fbox-desc">
                                    <h3>{{$serv->service_title}}</h3>
                                    <p>{{$serv->service_description}}</p>
                                </div>
                            </div>
                        </div>
                        <br>                        
                    </div>
                    @endforeach
                    @else
                    <div class="w3-col l12 w3-center w3-padding">
                        <h3>No Service Available</h3>
                    </div>
                    @endif

                </div>
                <!-- Services section ends -->

                <!-- Testimonials start -->
                <div class="section parallax dark" style="background-image: url('template/images/slider/1.jpg'); padding: 120px 0;"  data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

                    <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="template/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="template/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="template/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="video-wrap" style="z-index: 1;">
                        <div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
                    </div>
                </div>
                <!-- Testimonials section ends -->

                <!-- Quick quote starts -->
                <div class="container topmargin-lg cleafix">
                    <div class="col_three_fourth">
                        <div class="tabs tabs-justify nobottommargin clearfix" id="construction-tabs">

                            <ul class="tab-nav clearfix">
                                <li><a href="#construction-tab-1">Why Us?</a></li>
                                <li><a href="#construction-tab-2">Work Ethic</a></li>
                                <li><a href="#construction-tab-3">Team</a></li>
                                <li><a href="#construction-tab-4">Locations</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="construction-tab-1">
                                    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                                    <div class="col_one_fourth nobottommargin center">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
                                        <h5>Floors Built</h5>
                                    </div>

                                    <div class="col_one_fourth nobottommargin center">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
                                        <h5>Employees</h5>
                                    </div>

                                    <div class="col_one_fourth nobottommargin center">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="458" data-refresh-interval="50" data-speed="3500"></span></div>
                                        <h5>Happy Clients</h5>
                                    </div>

                                    <div class="col_one_fourth nobottommargin center col_last">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="14" data-to="159" data-refresh-interval="15" data-speed="2700"></span></div>
                                        <h5>Cities Served</h5>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-2">
                                    <img src="template/images/projects/3.jpg" width="260" alt="Image" class="img-thumbnail alignleft">
                                    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-3">
                                    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <ul class="iconlist nobottommargin">
                                                <li><i class="icon-ok"></i> 100% Assurance</li>
                                                <li><i class="icon-ok"></i> Hard Working</li>
                                                <li><i class="icon-ok"></i> Trustworthy</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="iconlist nobottommargin">
                                                <li><i class="icon-ok"></i> Intelligent</li>
                                                <li><i class="icon-ok"></i> Always Curious</li>
                                                <li><i class="icon-ok"></i> Perfectionists</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="iconlist nobottommargin">
                                                <li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
                                                <li><i class="icon-ok"></i> Accomodating Nature</li>
                                                <li><i class="icon-ok"></i> Available 24x7</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-4">

                                    <div class="clear-bottommargin-sm">
                                        <div class="row clearfix">
                                            <div class="col-md-7 bottommargin-sm">
                                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
                                                <div class="clear-bottommargin-sm">
                                                    <div class="row clearfix">
                                                        <div class="col-md-6 bottommargin-sm">
                                                            <address>
                                                                <strong>Headquarters:</strong><br>
                                                                795 Folsom Ave, Suite 600<br>
                                                                San Francisco, CA 94107<br>
                                                            </address>
                                                        </div>
                                                        <div class="col-md-6 bottommargin-sm">
                                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                                            <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 bottommargin-sm">
                                                <img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180" alt="Google Map" class="img-thumbnail">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col_one_fourth col_last">
                        <div class="widget quick-contact-widget clearfix">
                            <h4>Quick Quotation Form</h4>
                            <div class="quick-contact-form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
                                <div class="form-process"></div>
                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="clear"></div><div class="line notopmargin" style="margin-bottom: 0"></div> -->
                </div>
                <!-- Quick quotes ends -->                
            </div>
        </section>
        <!-- #content end -->

        <div class="w3-row">
           <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary" style="font-size: 26px;margin-top: 50px">
            <div class="container clearfix">
                Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>
    </div>

    @endsection
