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

                @if($trending_prods!='')
                @foreach($trending_prods as $prod)
                <?php 
                $img_arr=json_decode($prod->prod_image,TRUE);
                ?>
                <!-- Product div -->
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image" >
                        <img src="{{URL::to('/')}}/{{$img_arr[0]}}" style="height: 200px" alt="{{$prod->prod_name}} Image">
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

        <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary topmargin footer-stick" style="font-size: 26px;">
            <div class="container clearfix">
                Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
            </div>
        </a>

    </div>

</section>
<!-- #content end -->

@endsection
