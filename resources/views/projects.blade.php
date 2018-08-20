@extends('layouts.app')

@section('content')
<title>Impulse Trends | Projects</title>
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Projects</h1>
            <span>Our Latest Projects in Grid Layout</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
                                <!-- Post Content============================================= -->
                                <div class="postcontent nobottommargin w3-col l12 clearfix">
                                    <!-- Posts============================================ -->
                                    <div id="posts" class="post-grid grid-container grid-3 clearfix" data-layout="fitRows">
                                        @if($all_projects!='')

                                        @foreach($all_projects as $proj)
                                        <?php 
                                        $img_arr=json_decode($proj->proj_images,TRUE);
                                        ?>
                                        <div class="entry clearfix">
                                            <div class="entry-image">
                                                <a href="{{URL::to('/')}}/{{$img_arr[0]}}" data-lightbox="image">
                                                    <img class="image_fade" style="height: 180px" src="{{URL::to('/')}}/{{$img_arr[0]}}" alt="{{$proj->proj_name}} Image">
                                                </a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="{{URL::to('/')}}/projects/info/<?php echo base64_encode($proj->project_id); ?>">{{$proj->proj_name}}</a></h2>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 
                                                    <?php 
                                                    $todate='Ongoing';
                                                    if($proj->ongoing!=1){
                                                        $todate=date("d M Y", strtotime($proj->end_date));
                                                    }
                                                    ?>
                                                    @if($proj->start_date=='0000-00-00')
                                                    Not Available
                                                    @else
                                                    {{date("d M Y", strtotime($proj->start_date))}} - {{$todate}}                                        
                                                    @endif 
                                                </li>
                                            </ul>
                                            <div class="entry-content">
                                                <p style="height: 60px;overflow: hidden">{{$proj->proj_description}}</p>
                                                <a href="{{URL::to('/')}}/projects/info/<?php echo base64_encode($proj->project_id); ?>" class="more-link">Read More</a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="w3-col l12 w3-center w3-padding">
                                            <h4>No Project Available</h4>
                                        </div>
                                        @endif
                                        <!-- Post Content============================================= -->
                                    </div>
                                   
                                    <!-- .pager end -->
                                </div>
                            </div>
                        </div>        
                    </section>
                </div>
                <!-- main content div ends -->
            </div>

            @endsection
