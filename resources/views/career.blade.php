@extends('layouts.app')

@section('content')
<title>Impulse Trends | Home</title>

<!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('template/images/slider/full/4.jpg'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

        <div class="container clearfix">
            <h1>Careers</h1>
            <span>Join our Fabulous Team of Intelligent Individuals</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Careers</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
    <section id="content">


        <div class="content-wrap">

            <div class="container clearfix">

                <div class="col_three_fifth nobottommargin">
                   @if($all_jobs!='')
                   @foreach($all_jobs as $job)
                  
                   <div class="w3-col l12">

                     <div class="fancy-title title-bottom-border">
                        <h3>{{$job->job_title}}</h3>
                    </div> 

                    <p>{{$job->job_description}}.</p>

                    <div class="accordion accordion-bg clearfix">
                        @if($job->required_skills!='' && $job->required_skills!='[]')
                        <?php $reqArr=json_decode($job->required_skills,TRUE); ?>
                        <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
                        <div class="acc_content clearfix">
                            <ul class="iconlist iconlist-color nobottommargin">
                                @foreach($reqArr as $skill)
                                <li><i class="icon-ok"></i>{{$skill}}.</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                    <a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a>
                    <div class="divider divider-short"><i class="icon-star3"></i></div>

                </div>
                @endforeach
                @else
                <div class="w3-col l12 w3-center w3-padding">
                    <h3>No Jobs Available</h3>
                </div>
                @endif


            </div>

            <div class="col_two_fifth nobottommargin col_last">
                <div class="w3-col l12">
                    

                <div id="job-apply" class="heading-block">
                    <h2>Apply Now</h2>
                    <span>And we'll get back to you within 48 hours.</span>
                </div>

                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    <form id="jobform" name="jobform" enctype="multipart/form-data">

                        <div class="col_full">
                            <label for="jobform-fname">Full Name <small>*</small></label>
                            <input type="text" id="jobform-name" name="jobform-name" value="" required class="sm-form-control">
                        </div>

                        <div class="col_full">
                            <label for="jobform-email">Email <small>*</small></label>
                            <input type="email" id="jobform-email" name="jobform-email" value="" required class="sm-form-control">
                        </div>

                        <div class="col_full">
                            <label for="jobform-service">Position <small>*</small></label>
                            <select name="jobform-position" id="jobform-position"  tabindex="9" class="sm-form-control">
                                <option value="0" class="w3-light-grey">-- Select Position --</option>
                                @foreach($all_jobs as $joblist)
                                <option value="{{$joblist->job_id}}">{{$joblist->job_title}}</option>
                                @endforeach
                            </select>
                            <span class="w3-text-red" id="pos_err"></span>
                        </div>

                        <div class="col_full">
                            <label for="jobform-cvfile">Upload CV <small>*</small></label>
                            <input type="file" id="jobform-cvfile" name="jobform-cvfile" required value="" class="sm-form-control">
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="jobform-botcheck" name="jobform-botcheck" value="" class="sm-form-control" />
                        </div>
                        <input type="hidden" name="_token" id="-token" value="{{csrf_token()}}">

                        <div class="col_full">
                            <button class="button button-3d button-large btn-block nomargin" id="jobform-apply" name="jobform-apply" type="submit" value="apply">Send Application</button>
                        </div>

                    </form>
                    <h4 id="formOutput"></h4>
                </div>

            
                </div>
            </div>

        </div>

    </div>


</section>
@endsection
