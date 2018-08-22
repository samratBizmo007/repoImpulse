@extends('layouts.app')

@section('content')
<title>Impulse Trends | {{$category_details->category_name}}</title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$category_details->category_name}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Category</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">{{$category_details->category_name}}</li>
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
                                    <h4 style="color: #AB0000"><i class="fa fa-list"></i> Categories</h4>
                                    <nav class="nav-tree nobottommargin">
                                        <ul>
                                            @if(!empty($menuCategories))
                                            @foreach($menuCategories as $menu)
                                            <li><a href="{{URL::to('/')}}/category/info/<?php echo base64_encode($menu->cat_id); ?>"><i class="fa fa-snowflake-o w3-tiny"></i>{{$menu->category_name}}</a>
                                            </li>
                                            @endforeach
                                            @else
                                            <li class="w3-center"> No Category Available </li>
                                            @endif
                                            <!-- <li><a href="portfolio-1.html"><i class="fa fa-snowflake-o w3-tiny"></i>C. P. Fitting</a>
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
                                            </li> -->
                                        </ul>
                                    </nav>

                                </div>

                                <div class="widget quick-contact-widget clearfix">

                                    <h4>Quick Contact</h4>
                                    <div class="quick-contact-form-result"></div>
                                    <form id="quickContact" name="quickContact" class="quick-contact-form nobottommargin">
                                        <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                        <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                        <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                        <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
                                    </form>
                                    <div id="formOutput"></div>
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

                                <!-- related brands start -->
                                <div class="w3-col l12">
                                    <div class="heading-block center" style="margin-bottom: 20px">
                                        <h3>Related Brands</h3>
                                        <span>Checkout brands associated with {{$category_details->category_name}}</span>
                                    </div>

                                    <div class="w3-col l12">
                                        <!-- Brands -->
                                        @if(empty($related_products))
                                        <div class="w3-col l12 w3-center w3-padding">
                                            <h3>No Brands Available</h3>
                                        </div>
                                        @else
                                        @foreach ($related_products as $br)
                                        <div class="w3-col l2 s6 w3-padding-small w3-margin-bottom">
                                          <div class="w3-col l12">
                                            <a class="btn w3-opacity w3-hover-opacity-off" href="{{URL::to('/')}}/brands/info/<?php echo base64_encode($br->brand_id); ?>" style="padding: 0;margin: 0">
                                              <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img" style="width: 100%;height: 100px;">
                                          </a>

                                      </div>
                                  </div>
                                  @endforeach
                                  @endif                                  
                              </div>

                          </div>
                          <!-- related brands ends -->
                          <div class="divider divider-center"><i class="icon-diamond"></i></div>
                          <!-- related products starts -->
                          <div class="w3-col l12">
                            <div class="heading-block center" style="margin-bottom: 20px">
                                <h3>Related Products</h3>
                                <span>Checkout products associated with {{$category_details->category_name}}</span>
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
                        </div>
                        <!-- related products ends -->

                        <div class=" w3-col l12 nobottommargin">                            
                            <div class="clear"></div>
                            <div class="divider divider-center"><i class="icon-building"></i></div>

                            <!-- Related Portfolio Items ============================================= -->
                            <h4>Related Projects:</h4>
                            @if($related_projects!='')
                            <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="false" data-autoplay="5000" data-items-xs="2" data-items-sm="3" data-items-xl="4">
                                <?php $curr_proj=0; ?>
                                @foreach($related_projects as $proj)
                                <?php 
                                if($proj->project_id==$curr_proj){
                                    continue;
                                }else{
                                    $curr_proj=$proj->project_id;
                                }
                                $img_arr=json_decode($proj->proj_images,TRUE);
                                ?>
                                <!-- project div -->

                                <div class="oc-item" style="max-width: 200px;height: auto;">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{URL::to('/')}}/{{$img_arr[0]}}" style="height: 150px" alt="{{$proj->proj_name}} Image" >
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="{{URL::to('/')}}/{{$img_arr[0]}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                <a href="{{URL::to('/')}}/projects/info/<?php echo base64_encode($proj->project_id); ?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="{{URL::to('/')}}/projects/info/<?php echo base64_encode($proj->project_id); ?>">{{$proj->proj_name}}</a></h3>
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
