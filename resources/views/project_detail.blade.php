@extends('layouts.app')

@section('content')
<title>Impulse Trends | <?php print_r($project_id); ?></title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?php print_r($project_id); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php print_r($project_id); ?></li>
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
                                

                    <div class=" w3-col l12 nobottommargin">

                        <!-- Portfolio Single Gallery
                        ============================================= -->
                        <div class="col_full portfolio-single-image">
                            <div class="fslider" data-arrows="true" data-animation="slide">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide"><a href="#"><img src="{{URL::to('/')}}/template/images/projects/1.jpg" alt=""></a></div>
                                        <div class="slide"><a href="#"><img src="{{URL::to('/')}}/template/images/projects/7.jpg" alt=""></a></div>
                                        <div class="slide"><a href="#"><img src="{{URL::to('/')}}/template/images/projects/3.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .portfolio-single-image end -->

                        <!-- Portfolio Single Content
                        ============================================= -->
                        <div class="col_three_fifth portfolio-single-content nobottommargin">
                             <h1><?php print_r($project_id) ?></h1>
                            <!-- Portfolio Single - Description
                            ============================================= -->
                            <div class="fancy-title title-dotted-border">
                                <h2>Project Info:</h2>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, veniam commodi est possimus obcaecati similique labore quo nostrum esse nulla.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ea, laboriosam, animi, ex vero harum ipsa ducimus dolorum consequuntur fugiat excepturi sunt perferendis reprehenderit veniam ullam necessitatibus dolor dicta culpa.</p>
                            <!-- Portfolio Single - Description End -->

                        </div><!-- .portfolio-single-content end -->

                        <div class="col_two_fifth col_last nobottommargin">

                            <!-- Portfolio Single - Meta
                            ============================================= -->
                            <div class="card events-meta">
                                <div class="card-body">
                                    <ul class="portfolio-meta nobottommargin">
                                        <li><span><i class="icon-calendar3"></i>Completed on:</span> 17th March 2014</li>
                                        <li><span><i class="icon-link"></i>Client:</span> <a href="#">Client Name</a></li>
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

                        <div class="clear"></div>

                        <div class="divider divider-center"><i class="icon-circle"></i></div>

                        <!-- Related Portfolio Items
                        ============================================= -->
                        <h4>Related Products:</h4>

                        <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-xl="3">

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
                                        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/2.jpg" alt="Locked Steel Gate">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="{{URL::to('/')}}/template/images/projects/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                        <span><a href="#">Illustrations</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="{{URL::to('/')}}/template/images/projects/3.jpg" alt="Mac Sunglasses">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="#">
                                            <img src="{{URL::to('/')}}/template/images/projects/4.jpg" alt="Mac Sunglasses">
                                        </a>
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="{{URL::to('/')}}/template/images/projects/5.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                        <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/5.jpg" alt="Console Activity">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="{{URL::to('/')}}/template/images/projects/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single-gallery.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/6.jpg" alt="Shake It!">
                                        </a>
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="{{URL::to('/')}}/template/images/projects/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single-video.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/7.jpg" alt="Backpack Contents">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/8.jpg" alt="Sunset Bulb Glow">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="{{URL::to('/')}}/template/images/projects/7.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                        <span><a href="#">Graphics</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/1.jpg" alt="Bridge Side">
                                        </a>
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="{{URL::to('/')}}/template/images/projects/2.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/8.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="{{URL::to('/')}}/template/images/projects/6.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                        <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="oc-item">
                                <div class="iportfolio">
                                    <div class="portfolio-image">
                                        <a href="portfolio-single-video.html">
                                            <img src="{{URL::to('/')}}/template/images/projects/5.jpg" alt="Study Table">
                                        </a>
                                        <div class="portfolio-overlay">
                                            <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                        <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .portfolio-carousel end -->

                    </div>


                
                            </div>
                        </div>        
                    </section>
                </div>
                <!-- main content div ends -->
            </div>

            @endsection
