@extends('layouts.app')

@section('content')
<title>Impulse Trends | About Us</title>

<!-- Page Title============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('template/images/showroom.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content============================================= -->
<section id="content">

    <div class="content-wrap" style="padding-top: 0">
        <div class="clear"></div>
                <br>
        <div class="container clearfix">
            <!-- why us div -->
            <div class="row common-height clearfix w3-hide-small w3-hide-medium">

                <div class="col-md-5 col-padding" >
                    <img src="{{URL::to('/')}}/template/images/about1.jpg" class="img img-responsive" style="width: 100%" alt="Bottom Trust">
                </div>

                <div class="col-md-7 col-padding">
                        <div>
                            <div class="heading-block nobottomborder">
                                <h2>Why Impulse World Trends?</h2>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <ul class="iconlist iconlist-large iconlist-color"> 
                                        <li><i class="icon-ok"></i> <b>Innovation & Creativity:</b> You will find it in each segment you are associated with.</li>
                                        <li><i class="icon-ok"></i> <b>Consultancy & Service:</b> We Provide Technical assistance at all levels.</li>
                                        <li><i class="icon-ok"></i> <b>Personal Attention:</b> Provided at all levels presentation, estimation & explanation.</li>
                                        <li><i class="icon-ok"></i> <b>Passion:</b>  Which Drives us to serve you the best.</li>
                                        <li><i class="icon-ok"></i> <b>Urge to Excel:</b> Our product range & product awareness converse better.</li>
                                        <li><i class="icon-ok"></i> <b>Training:</b> Always eager to train new comers, assistant architects & assistant Interior Designers.</li>
                                        <li><i class="icon-ok"></i> <b>Finally:</b> The world class products we got.</li>
                                        <li><b>.... because we believe products come last as compared to the above assets.</b> </li>
                                    </ul>                                   
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row clearfix w3-hide-large">

                <div class="col-md-5" >
                    <img src="{{URL::to('/')}}/template/images/about1.jpg" class="img img-responsive" style="width: 100%" alt="Bottom Trust">
                </div>

                <div class="col-md-7">
                        <div style="margin-top: 40px">
                            <div class="heading-block nobottomborder">
                                <h2>Why Impulse World Trends?</h2>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <ul class="iconlist iconlist-large iconlist-color"> 
                                        <li><i class="icon-ok"></i> <b>Innovation & Creativity:</b> You will find it in each segment you are associated with.</li>
                                        <li><i class="icon-ok"></i> <b>Consultancy & Service:</b> We Provide Technical assistance at all levels.</li>
                                        <li><i class="icon-ok"></i> <b>Personal Attention:</b> Provided at all levels presentation, estimation & explanation.</li>
                                        <li><i class="icon-ok"></i> <b>Passion:</b>  Which Drives us to serve you the best.</li>
                                        <li><i class="icon-ok"></i> <b>Urge to Excel:</b> Our product range & product awareness converse better.</li>
                                        <li><i class="icon-ok"></i> <b>Training:</b> Always eager to train new comers, assistant architects & assistant Interior Designers.</li>
                                        <li><i class="icon-ok"></i> <b>Finally:</b> The world class products we got.</li>
                                        <li><b>.... because we believe products come last as compared to the above assets.</b> </li>
                                    </ul>                                   
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- why us div ends -->
            </div>

            <div class="section nomargin" style="margin-bottom: 10px">
                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter fa fa-windows"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Floors Built</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge divcenter nobottommargin fa fa-users"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                        <h5>Staff</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge divcenter nobottommargin fa fa-smile-o"></i>
                        <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
                        <h5>Happy Clients</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge divcenter nobottommargin fa fa-building"></i>
                        <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
                        <h5>Cities Served</h5>
                    </div>

                </div>
            </div>

            <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary" style="font-size: 26px;">
                <div class="container clearfix">
                    Send us your requirement and we will get back to you! <strong>Contact Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>
            <div class="w3-container">
                <div class="section nobg nopadding" style="margin-bottom: 0px;">
                    <div class="container clearfix">

                        <div class="row">

                            <div class="col-lg-5 w3-padding">
                                <img src="{{URL::to('/')}}/template/images/about2.png" class="img img-responsive" style="width: 100%" alt="Bottom Trust">
                            </div>
                            <div class="col-lg-7 topmargin-sm">
                                <div class="heading-block nobottomborder">
                                    <h2>What we have?</h2>
                                    <span class="ls1">The winning features of our showroom which are sure to impress you are as follows:</span>
                                </div>

                                <ul class="iconlist iconlist-large iconlist-color">
                                    <li><i class="icon-ok"></i> The best collection of latest trends.</li>
                                    <li><i class="icon-ok"></i> Live display of showers.</li>
                                    <li><i class="icon-ok"></i> Special experience lounges for special selection.</li>
                                    <li><i class="icon-ok"></i> Friendly, trained and professional staff at your service.</li>
                                    <li><i class="icon-ok"></i> Ready stocks of maximum products.</li>
                                    <li><i class="icon-ok"></i> Our personalized attention to your requirement & much more awaits you at Impulse.</li>
                                    <li><i class="icon-ok"></i> The specially trained team of Interior Designers to design exclusive kitchens.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div> 
            </div>

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

        <!-- brands div start -->

            <div class="container clearfix">

                <div class="clear"></div>
                <br>
                <div class="heading-block center">
                    <h2 class="uppercase center">Top <span>Brands</span></h2>
                </div>

                <div class="col-lg-12">                
                    <ul class="clients-grid grid-4 nobottommargin clearfix">
                        @if($all_brands!='')
                        @foreach($all_brands as $br)                                    
                        <div class="w3-col l2 w3-padding w3-margin-bottom">
                          <div class="w3-col l12">
                            <a href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>" class="btn w3-hover-opacity" style="padding: 0;margin: 0">
                                <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img" style="width: 100%;height: 140px;">
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

        </div>
        <!-- Brands div ends -->
    </div>

</section>
<!-- #content end -->
<div class="w3-row">
 <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary" style="font-size: 26px;margin-top: 10px">
    <div class="container clearfix">
        Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
    </div>
</a>
</div>

@endsection
