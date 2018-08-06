@extends('layouts.app')

@section('content')
<title>Impulse Trends | <?php print_r($category_details); ?></title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?php print_r($category_details); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php print_r($category_details); ?></li>
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
                                
                                <!-- related brands start -->
                                <div class="w3-col l12">
                                    <div class="heading-block center" style="margin-bottom: 20px">
                                        <h3>Related Brands</h3>
                                        <span>Checkout brands associated with <?php print_r($category_details); ?></span>
                                    </div>

                                    <!-- Brands -->
                                    <ul class="clients-grid grid-5 nobottommargin clearfix">
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/1.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/2.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/3.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/4.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/5.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/6.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/7.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/8.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/9.jpg" alt="Brand logo"></a></li>
                                        <li><a href="{{URL::to('/')}}/brands/brand_name"><img src="{{URL::to('/')}}/template/images/clients/10.jpg" alt="Clients"></a></li>
                                    </ul>
                                </div>
                                <!-- related brands ends -->
                                <div class="divider divider-center"><i class="icon-diamond"></i></div>
                                <!-- related products starts -->
                                <div class="w3-col l12">
                                    <div class="heading-block center" style="margin-bottom: 20px">
                                        <h3>Related Products</h3>
                                        <span>Checkout products associated with <?php print_r($category_details); ?></span>
                                    </div>

                                    <!-- Products -->
                                    <div id="portfolio" class="portfolio grid-container clearfix">

                                        <article class="portfolio-item pf-media pf-icons">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/1.jpg" alt="The Atmosphere">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3><a href="#">The Atmosphere</a></h3>
                                                <span>Chicago, USA</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-illustrations">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/2.jpg" alt="Wavelength Structure">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Wavelength Structure</h3>
                                                <span>Madrid, Spain</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-graphics pf-uielements">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/3.jpg" alt="Greenhouse Garden">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Greenhouse Garden</h3>
                                                <span>Bali, Indonesia</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-icons pf-illustrations">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/4.jpg" alt="Industrial Hub">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Industrial Hub</h3>
                                                <span>Beijing, China</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-uielements pf-media">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/5.jpg" alt="Corporate Headquarters">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Corporate Headquarters</h3>
                                                <span>California, USA</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-graphics pf-illustrations">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/6.jpg" alt="Space Station">
                                                <div class="portfolio-overlay" data-lightbox="gallery">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Space Station</h3>
                                                <span>Moscow, Russia</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-uielements pf-icons">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/7.jpg" alt="Bent Architecture">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Bent Architecture</h3>
                                                <span>Melbourne, Australia</span>
                                            </div>
                                        </article>

                                        <article class="portfolio-item pf-graphics">
                                            <div class="portfolio-image">
                                                <img src="{{URL::to('/')}}/template/images/projects/8.jpg" alt="Lakeview Center">
                                                <div class="portfolio-overlay">
                                                    <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc">
                                                <h3>Lakeview Center</h3>
                                                <span>Auckland, New Zealand</span>
                                            </div>
                                        </article>

                                    </div>
                                </div>
                                <!-- related products ends -->
                                
                                <div class=" w3-col l12 nobottommargin">

                                 
                                    <div class="clear"></div>

                                    <div class="divider divider-center"><i class="icon-building"></i></div>

                        <!-- Related Portfolio Items
                            ============================================= -->
                            <h4>Related Projects:</h4>

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
