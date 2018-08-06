@extends('layouts.app')

@section('content')
<title>Impulse Trends | Services</title>


<!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="background: url('template/images/slider/1.jpg') bottom center / cover; padding: 100px 0;" data-stellar-background-ratio="0.7">

        <div class="container clearfix">
            <h1>Services</h1>
            <span>A Short Page Title Tagline</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </div>
    </section><!-- #page-title end -->
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">
                @if($services!='')
                @foreach($services as $serv)
                <div class="w3-col l3 w3-margin-bottom">
                    <div class="col-lg-12">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img style="border-radius: 2px;" src="{{URL::to('/')}}/{{$serv->service_image}}" alt="{{$serv->service_title}}">
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
                <div class="w3-col l12 w3-center">
                    <h2>No Services Available</h2>
                </div>
                @endif
            </div>
            <a href="{{URL::to('/')}}/contact-us" class="button button-3d nobottomborder button-full center tright t300 font-primary topmargin footer-stick" style="font-size: 26px;">
                <div class="container clearfix">
                    Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
                </div>
            </a>
            
            <div class="section nobg nopadding footer-stick" style="margin-bottom: 0px;">
                <div class="container clearfix">

                    <div class="row" style="margin-top: 30px">
                        <div class="col-lg-7">
                            <img src="template/images/services/bottom-trust.jpg" alt="Bottom Trust">
                        </div>
                        <div class="col-lg-5 topmargin-sm">
                            <div class="heading-block nobottomborder">
                                <h2>You're in Good Hands.</h2>
                                <span class="ls1">Five Points that define Our Reliability.</span>
                            </div>

                            <ul class="iconlist iconlist-large iconlist-color">
                                <li><i class="icon-ok"></i> Market Leader since 1915</li>
                                <li><i class="icon-ok"></i> Positive Results within Deadlines</li>
                                <li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
                                <li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
                                <li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div> 
            

        </div>


    </section>
    @endsection
