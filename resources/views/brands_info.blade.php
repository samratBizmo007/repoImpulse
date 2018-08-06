@extends('layouts.app')

@section('content')
<title>Impulse Trends | {{$brand_details->brand_name}}</title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$brand_details->brand_name}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Brands</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$brand_details->brand_name}}</li>
            </ol>
        </div>

    </section>
    <!-- #page-title end -->
    <div class="w3-container">
        <!-- sidebar nav div -->
        <div class="w3-col l3 w3-hide-small w3-hide-medium">
            <section class="content">                

                <div class="content-wrap">
                    <div class="container clearfix">
                        <div id="">
                            <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

                            <div class="side-panel-wrap">
                                <div class="widget clearfix ">
                                    <nav class="nav-tree nobottommargin">
                                        <ul>
                                            <li><a href="portfolio-1.html"><i class="fa fa-snowflake-o w3-tiny"></i>C. P. Fitting</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-2.html"><i class="fa fa-snowflake-o w3-tiny"></i>Sanitary ware</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-3.html"><i class="fa fa-snowflake-o w3-tiny"></i>Pex</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.html"><i class="fa fa-snowflake-o w3-tiny"></i>Tece</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-5.html"><i class="fa fa-snowflake-o w3-tiny"></i>Tiles</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Roofing Tiles</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Kerakoll</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Wooden Floor</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Windows</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Kitchen</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Appliances</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Wardrobe</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Hunter Douglas</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Dorma</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>TCS</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Railing</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Thermory</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Forms &amp; Surfaces</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-6.html"><i class="fa fa-snowflake-o w3-tiny"></i>Accessories</a>
                                                <ul>
                                                    <li><a href="#">Product 1</a></li>
                                                    <li><a href="#">Product 2</a>
                                                        <ul>
                                                            <li><a href="#">SubProduct 1</a></li>
                                                            <li><a href="#">SubProduct 2</a></li>
                                                            <li><a href="#">SubProduct 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product 3</a></li>
                                                </ul>
                                            </li>                                            
                                            <li><a href="#"><i class="fa fa-snowflake-o"></i>Others</a></li>
                                        </ul>
                                    </nav>

                                </div>

                                <div class="widget quick-contact-widget clearfix">

                                    <h4>Quick Contact</h4>
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
                        </div></div></div>
                    </section>
                </div>
                <!-- sidebar nav div ends -->
                <!-- Main content div -->
                <div class="w3-col l8">
                    <section class="content">
                        <div class="content-wrap">
                            <div class="container clearfix">

                                <!-- brands details start -->
                                <div class="w3-col l12" style="margin-bottom: 40px">
                                    <div class="w3-col l4 w3-padding-small">
                                        <img class="img img-responsive img-thumbnail" src="{{URL::to('/')}}/{{$brand_details->brand_image}}" alt="{{$brand_details->brand_name}}" style="width: 100%">
                                    </div>
                                    <div class="w3-col l8 w3-padding-small">
                                        <div class="heading-block nobottomborder" style="margin-bottom: 10px">
                                            <h3>{{$brand_details->brand_name}}</h3>
                                        </div>
                                        <p>{{$brand_details->description}}</p>
                                    </div>
                                </div>                                                   
                                <!-- brands details ends -->

                                <div class="divider divider-center"><i class="icon-diamond"></i></div>

                                <!-- related products starts -->
                                <div class="w3-col l12">
                                    <div class="heading-block center" style="margin-bottom: 20px">
                                        <h3>Related Products</h3>
                                        <span>Checkout products associated with <b>{{$brand_details->brand_name}}</b></span>
                                    </div>

                                    <!-- Products -->
                                    <div id="portfolio" class="portfolio grid-container clearfix">

                                        @if($related_products!='')
                                        @foreach($related_products as $prod)
                                        <?php 
                                        $img_arr=json_decode($prod->prod_image,TRUE);
                                        ?>
                                        <!-- Product div -->
                                        <article class="portfolio-item pf-media pf-icons">
                                            <div class="portfolio-image" >
                                                <img src="{{URL::to('/')}}/{{$img_arr[0]}}" style="height: 150px" alt="{{$prod->prod_name}} Image">
                                                <div class="portfolio-overlay">
                                                    <a href="{{URL::to('/')}}/products/info/<?php echo base64_encode($prod->product_id); ?>" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3><a href="{{URL::to('/')}}/products/info/<?php echo base64_encode($prod->product_id); ?>">{{$prod->prod_name}}</a></h3>
                                            </div>
                                        </article>
                                        @endforeach
                                        @else
                                        <div class="w3-col l12 w3-center w3-padding">
                                            <h4>No Product Available</h4>
                                        </div>
                                        @endif
                                        
                                    </div>
                                    <div class="w3-col l12 w3-center">
                                        <a href="{{$brand_details->external_link}}" target="_blank" class="btn button button-3d w3-right">Go to Catalog<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!-- related products ends -->

                                <div class=" w3-col l12 nobottommargin">
                                    <div class="clear"></div>
                                    <div class="divider divider-center"><i class="icon-building"></i></div>

                                    <!-- Related Portfolio Items ============================================= -->
                                    <h4>Related Projects:</h4>
                                    @if($related_projects!='')
                                    <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-xl="3">

                                        @foreach($related_projects as $proj)
                                        <?php 
                                        //$img_arr=json_decode($prod->prod_images)
                                        ?>
                                        <!-- project div -->

                                        <div class="oc-item">
                                            <div class="iportfolio">
                                                <div class="portfolio-image">
                                                    <a href="portfolio-single.html">
                                                        <img src="{{URL::to('/')}}/template/images/projects/7.jpg" alt="Open Imagination">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="{{URL::to('/')}}/template/images/projects/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="portfolio-single.html">{{$proj->proj_name}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div><!-- .portfolio-carousel end -->

                                    @else
                                    <div class="w3-col l12 w3-center w3-padding">
                                        <h4>No Project Available</h4>
                                    </div>
                                    @endif

                                </div>



                            </div>
                        </div>        
                    </section>
                </div>
                <!-- main content div ends -->
            </div>

            @endsection
