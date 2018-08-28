@extends('layouts.app')

@section('content')
<title>Impulse Trends | Home</title>
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

<section id="slider" class="slider-element slider-parallax swiper_wrapper clearfix" style="height: 550px;" data-loop="true">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('template/images/slider/slide2.jpg'); background-position: center top;">
                <div class="container clearfix">
                    <div class="slider-caption">
                        <h2>Welcome to Impulse Trends</h2>
                        <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('template/images/slider/slide3.jpg'); background-position: center top;">
                <div class="container clearfix">
                    <div class="slider-caption">
                        <h2>Welcome to Impulse Trends</h2>
                        <p class="d-none d-sm-block">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('template/images/slider/slide1.jpg'); background-position: center top;">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-right">
                        <h2>Beautifully Flexible</h2>
                        <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('template/images/slider/slide3.jpg'); background-position: center bottom;">
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
                                    <h2 style="color: #AB0000">BRAND DOES MATTER</h2>
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
                                    <div class="w3-col l4 w3-padding w3-margin-bottom">
                                      <div class="w3-col l12">
                                        <a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>" class="btn w3-hover-opacity" style="padding: 0;margin: 0">
                                            <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img" style="width: 100%;height: 160px;">
                                        </a>
                                    </div>
                                </div>
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
                                            <img src="{{URL::to('/')}}/{{$img_arr[0]}}" style="height: 250px" alt="{{$prod->prod_name}} Image Data">
                                            <div class="w3-opacity-min" style="position: absolute;top: 0px;left: 0;color: #FFF;padding:8px;z-index: 1;">
                                                <a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($prod->brand_id); ?>" title="{{$prod->brand_name}}">
                                                    <img src="{{URL::to('/')}}/{{$prod->brand_image}}" alt="{{$prod->brand_name}} logo" class="img img-responsive" style="height: 60px;width: 60px;border:2px black solid">
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w3-col l12">
                                        <a class="btn w3-right w3-small" href="{{URL::to('/')}}/category/info/<?php echo base64_encode($prod->cat_id); ?>" style="padding:0"><span class="w3-right"><b>{{$prod->category_name}}</b></span></a>
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

                    
                    @if($all_projects!='')
                    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2" style="margin-bottom: 60px">

                        @foreach($all_projects as $proj)
                        <?php 
                        $image_arr=json_decode($proj->proj_images,TRUE);
                        ?>
                        <div class="oc-item">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                @foreach($image_arr as $img)
                                                <div class="slide w3-center" style="max-height: 350px"><a href="{{URL::to('/')}}/{{$img}}" data-lightbox="gallery-item"><img class="image_fade" style="height: 350px" src="{{URL::to('/')}}/{{$img}}" alt="{{$proj->proj_name}} Gallery"></a></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="{{URL::to('/')}}/projects/info/<?php echo base64_encode($proj->project_id); ?>">{{$proj->proj_name}}</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 
                                        <?php 
                                        $todate='Ongoing';
                                        if($proj->ongoing!=1){
                                            $todate=date("d M Y", strtotime($proj->end_date));
                                        }
                                        ?>
                                        @if($proj->start_date=='0000-00-00')
                                        Not Available
                                        @else
                                        {{date("d M Y", strtotime($proj->start_date))}} - {{$todate}}                                        
                                    @endif </li>
                                </ul>
                                <div class="entry-content">
                                    <p style="height: 50px;overflow: hidden">{{$proj->proj_description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="container w3-center w3-padding">
                        <h3>No Project Available</h3>
                    </div>
                    @endif
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
                                    <img style="border-radius: 2px;" style="height: 150px;width: 100%" src="{{URL::to('/')}}/{{$serv->service_image}}" alt="{{$serv->service_title}}">
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
                <div class="section parallax dark" style="background-image: url('template/images/testimonials/testibg2.jpg'); padding: 100px 0;"  data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

                    <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="template/images/testimonials/testimonial1.jpeg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p class="w3-large">We have used various products from impulse and found the array of products exemplary. Your showroom is a great inspiration towards the wide variety of tiles, sanitary and related interior products. Rajeshbhai’s passion and the impeccable service towards his clientele are greatly appreciated. We look forward to working on many more projects.</p>
                                        <div class="testi-meta">
                                            Vinod Shah
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="template/images/testimonials/testimonial2.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p class="w3-large">We have been sourcing from Impulse World Trends for last several years. Mr. Rajesh Kurade takes personal interest in every project. Store has most wonderful display and they keep adding newer and innovative products at competitive rates. The staff at Impulse is very courteous and ever eager to serve the customers.</p>
                                        <div class="testi-meta">
                                            Ar. Anita Bhinge
                                            <span>SpaceTech</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonials section ends -->

                <!-- Quick quote starts -->
                <div class="container topmargin-lg cleafix">
                    <div class="col_three_fourth">
                        <div class="tabs tabs-justify nobottommargin clearfix" id="construction-tabs">

                            <ul class="tab-nav clearfix">
                                <li class="w3-hide-small"><a href="#construction-tab-1">Why Us?</a></li>
                                <li class="w3-hide-large w3-hide-medium"><a href="#construction-tab-1"><i class="fa fa-question-circle w3-large"></i> </a></li>
                                <li class="w3-hide-small"><a href="#construction-tab-3">Team</a></li>
                                <li class="w3-hide-large w3-hide-medium"><a href="#construction-tab-3"><i class="fa fa-users w3-large"></i></a></li>
                                <li class="w3-hide-small"><a href="#construction-tab-4">Locations</a></li>
                                <li class="w3-hide-large w3-hide-medium"><a href="#construction-tab-4"><i class="fa fa-map-marker w3-large"></i></a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="construction-tab-1">
                                    <p>We are fully aware of the tremendous, important responsibility on your shoulders, as creative professionals, to specify or select the latest and the best interior and exterior components for your projects. To assist you in this quest for quality and excellence, we take great pleasure in introducing ourselves <b>IMPULSE World Trends</b> as a premium one stop showroom of the world’s latest interior products.</p>
                                    <div class="col_one_fourth nobottommargin center">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="964" data-refresh-interval="50" data-speed="2000"></span></div>
                                        <h5>Floors Built</h5>
                                    </div>

                                    <div class="col_one_fourth nobottommargin center">
                                        <div class="counter ls1 t600" style="color: #D2D2D2;"><span data-from="100" data-to="8514" data-refresh-interval="50" data-speed="2500"></span></div>
                                        <h5>Staff</h5>
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
                                <div class="tab-content clearfix" id="construction-tab-3">
                                    <p>We possess a passionate and courteous staff and technical assistants to guide our clients and consult the best to them. Following qualities of our team will surely impress you:</p>
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
                                                <li><i class="icon-ok"></i> Creative</li>
                                                <li><i class="icon-ok"></i> Perfectionists</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="iconlist nobottommargin">
                                                <li><i class="icon-ok"></i> Friendly &amp; Helpful</li>
                                                <li><i class="icon-ok"></i> Trained</li>
                                                <li><i class="icon-ok"></i> Professional</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-4">

                                    <div class="clear-bottommargin-sm">
                                        <div class="row clearfix">
                                            <div class="col-md-7 bottommargin-sm">
                                                <p>After launching this dream display of 4000sq.ft of a space at Bhandarkar road, we are stringently sourced, selected and collected the latest and the best world trends for discerning clients. We are offering you the most fascinating and widest range in each product category.</p>
                                                <div class="clear-bottommargin-sm">
                                                    <div class="row clearfix">
                                                        <div class="col-md-6 bottommargin-sm">
                                                            <address>
                                                                <strong>Headquarters:</strong><br>
                                                                C.T.S. No.799-A, Bhandarkar Road,<br>
                                                                Near VLCC,, Deccan Gymkhana,<br>
                                                                Pune, Maharashtra 411004<br>
                                                            </address>
                                                        </div>
                                                        <div class="col-md-6 bottommargin-sm">
                                                            <abbr title="Contact Number"><strong>Phone:</strong></abbr> (91) 84110 09080<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 bottommargin-sm">
                                             <img src="template/images/showroom.jpg" width="260" alt="Image" class="img-thumbnail aligncenter">
                                         </div>
                                     </div>
                                 </div>

                             </div>

                         </div>

                     </div>

                 </div>

                 <div class="col_one_fourth col_last">

                    <h4>Quick Contact</h4>
                    <div class="quick-contact-form-result"></div>
                    <form id="quickContact" name="quickContact" class="quick-contact-form nobottommargin">
                        <input type="text" class="required sm-form-control input-block-level w3-margin-bottom" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                        <input type="text" class="required sm-form-control email input-block-level w3-margin-bottom" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                        <textarea class="required sm-form-control input-block-level short-textarea w3-margin-bottom" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                        <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin w3-margin-bottom" value="submit">Send Email</button>
                    </form>
                    <div id="formOutput"></div>
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
