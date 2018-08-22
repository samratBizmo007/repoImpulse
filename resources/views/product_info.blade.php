@extends('layouts.app')

@section('content')
<title>Impulse Trends | {{$prod_details->prod_name}}</title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$prod_details->prod_name}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Products</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">{{$prod_details->prod_name}}</li>
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


                                <div class=" w3-col l12 nobottommargin">

                        <!-- Portfolio Single Gallery
                            ============================================= -->
                            <div class="col_full portfolio-single-image">
                                <div class="fslider" data-arrows="true" data-animation="slide">
                                    <div class="flexslider">
                                        <div class="slider-wrap w3-black">
                                            <?php 
                                            $image_arr=json_decode($prod_details->prod_image);
                                            ?>
                                            @foreach($image_arr as $img)
                                            <div class="slide w3-center" style="max-height: 600px">
                                                <a href="{{URL::to('/')}}/{{$img}}" data-lightbox="gallery-item">
                                                    <img class="image_fade" style="height: 600px" class="img" src="{{URL::to('/')}}/{{$img}}" alt="{{$prod_details->prod_name}} Gallery">
                                                </a>
                                            </div>
                                            @endforeach

                                            <?php 
                                            if($prod_details->prod_video!='[]' && $prod_details->prod_video!='[null]'){
                                                $video_arr=json_decode($prod_details->prod_video);
                                                ?>
                                                @foreach($video_arr as $vid)
                                                <div class="slide w3-center w3-hide-small">
                                                    <iframe src="{{$vid}}" scrolling="yes" seamless="seamless" style="display:block; width:100%; height:100vh;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                                <div class="slide w3-center w3-hide-medium w3-hide-large">
                                                    <iframe src="{{$vid}}" scrolling="yes" seamless="seamless" style="display:block; width:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                                @endforeach
                                                <?php 
                                            } 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .portfolio-single-image end -->

                        <!-- Portfolio Single Content
                            ============================================= -->
                            <div class="w3-col l8 portfolio-single-content nobottommargin">
                             <h1>{{$prod_details->prod_name}}</h1>
                            <!-- Portfolio Single - Description
                                ============================================= -->
                                <div class="fancy-title title-dotted-border">
                                    <h2>Product Info:</h2>
                                </div>

                                <p>{{$prod_details->prod_description}}</p>
                                <!-- Portfolio Single - Description End -->

                            </div><!-- .portfolio-single-content end -->

                            <div class="w3-col l4 w3-padding col_last nobottommargin">

                            <!-- Portfolio Single - Meta
                                ============================================= -->
                                <div class="card events-meta w3-col l12">
                                    <div class="card-body">
                                        <ul class="portfolio-meta nobottommargin">
                                            <li><span style="width: 180px;">Related Brochures:</span> 
                                                <ul style="list-style: none;">
                                                    <?php 

                                                    if($prod_details->prod_files!='[]' && $prod_details->prod_files!=''){
                                                        $file_arr=json_decode($prod_details->prod_files);
                                                        $count=1;

                                                        ?>
                                                        @foreach($file_arr as $file)
                                                        <?php 
                                                        $arr=explode('/', $file);
                                                        $fname=$arr[4];
                                                        ?>
                                                        <li style="padding-left: 0px"><a class="btn" target="_self" href="{{URL::to('/')}}/{{$file}}" download="{{$fname}}" style="padding:0"><label class="w3-medium w3-text-red"><i class="fa fa-paperclip"></i> {{$fname}}</label></a></li>
                                                        @endforeach
                                                        <?php 
                                                    } 
                                                    else{
                                                        echo "<label class='w3-text-grey w3-small'>  No Files available </label>";
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Portfolio Single - Meta End -->

                            <!-- Portfolio Single - Share
                                ============================================= -->
                           <!--  <div class="si-share noborder clearfix">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Single - Share End -->

                        </div>

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
                        <div class="clear"></div>

                    </div>



                </div>
            </div>        
        </section>
    </div>
    <!-- main content div ends -->
</div>

@endsection
