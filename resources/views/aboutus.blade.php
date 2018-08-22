@extends('layouts.app')

@section('content')
<title>Impulse Trends | About Us</title>

<!-- Page Title============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('template/images/slider/1.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

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

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Why choose <span>Us</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

            <div class="col_one_third">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>Our <span>Mission</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

            <div class="col_one_third col_last">

                <div class="heading-block fancy-title nobottomborder title-bottom-border">
                    <h4>What we <span>Do</span>.</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

            </div>

        </div>

        <div class="section nomargin">
            <div class="container clearfix">

                <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                    <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                    <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                    <h5>Lines of Codes</h5>
                </div>

                <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-graph"></i>
                    <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                    <h5>KBs of HTML Files</h5>
                </div>

                <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-layers"></i>
                    <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
                    <h5>No. of Templates</h5>
                </div>

                <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                    <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-clock"></i>
                    <div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
                    <h5>Hours of Coding</h5>
                </div>

            </div>
        </div>
        <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center w3-margin-top tright bottommargin-lg t300 font-primary" style="font-size: 26px;">
            <div class="container clearfix">
                Send us your requirement and we will get back to you! <strong>Contact Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>
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

    <div class="section footer-stick">

        <h2 class="uppercase center">What <span>Clients</span> Say?</h2>

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

    </div>

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
