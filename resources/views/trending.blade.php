@extends('layouts.app')

@section('content')
<title>Impulse Trends | Trends</title>
<!-- Page Title============================================= -->
<section id="page-title" class="">

    <div class="container clearfix">
        <h1>Trends</h1>
        <span>A Short Page Title Tagline</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Trends</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->
<!-- Content============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <h2 class="center ls1 bottommargin">Some of Our Trending Products</h2>

            <div id="portfolio" class="portfolio grid-container clearfix">

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <img src="template/images/projects/1.jpg" alt="The Atmosphere">
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
                        <img src="template/images/projects/2.jpg" alt="Wavelength Structure">
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
                        <img src="template/images/projects/3.jpg" alt="Greenhouse Garden">
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
                        <img src="template/images/projects/4.jpg" alt="Industrial Hub">
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
                        <img src="template/images/projects/5.jpg" alt="Corporate Headquarters">
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
                        <img src="template/images/projects/6.jpg" alt="Space Station">
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
                        <img src="template/images/projects/7.jpg" alt="Bent Architecture">
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
                        <img src="template/images/projects/8.jpg" alt="Lakeview Center">
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

        <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary topmargin footer-stick" style="font-size: 26px;">
            <div class="container clearfix">
                Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>

    </div>

</section>
<!-- #content end -->

@endsection
