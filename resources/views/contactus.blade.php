@extends('layouts.app')

@section('content')
<title>Impulse Trends | Home</title>

<section id="google-map" class="gmap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15132.900528883341!2d73.8324251!3d18.5187258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf850342e151%3A0x9b53009ae375dcaf!2sImpulse+World+Trends!5e0!3m2!1sen!2sin!4v1532939570739" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<section id="content" >
    <div class="content-wrap">

        <div class="container clearfix">

                    <!-- Postcontent
                        ============================================= -->
                        <div class="postcontent nobottommargin">

                            <h3>Send us an Email</h3>

                            <div class="contact-widget">

                                <div class="contact-form-result"></div>

                                <form class="nobottommargin" id="contactForm">

                                    <div class="col_one_third">
                                        <label for="contactform-name">Name <small>*</small></label>
                                        <input type="text" id="contactform-name" name="contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col_one_third">
                                        <label for="contactform-email">Email <small>*</small></label>
                                        <input type="email" id="contactform-email" name="contactform-email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="col_one_third col_last">
                                        <label for="contactform-phone">Phone</label>
                                        <input type="text" id="contactform-phone" name="contactform-phone" value="" class="sm-form-control" />
                                    </div>
                                    <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">

                                    <div class="clear"></div>

                                    <div class="col_two_third">
                                        <label for="contactform-subject">Subject <small>*</small></label>
                                        <input type="text" id="contactform-subject" name="contactform-subject" value="" class="required sm-form-control" />
                                    </div>

                                    <div class="col_one_third col_last">
                                        <label for="contactform-service">Services</label>
                                        <select id="contactform-service" name="contactform-service" class="sm-form-control">
                                            <option value="0">-- Select One --</option>
                                            @if($all_services!='')
                                            @foreach($all_services as $service)
                                            <option value="{{$service->service_id}}">{{$service->service_title}}</option>
                                            @endforeach
                                            @else
                                            <option disabled>No Service available</option>
                                            @endif
                                        </select>
                                        <label id="serviceError" class="w3-text-red w3-label"></label>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label for="contactform-message">Message <small>*</small></label>
                                        <textarea class="required sm-form-control" id="contactform-message" name="contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col_full hidden">
                                        <input type="text" id="contactform-botcheck" name="contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_full">
                                        <button class="button button-3d nomargin" type="submit" id="submitButton" name="submitButton" value="submit"> Send Message </button>
                                    </div>

                                </form>
                                
                            </div>
                            <div id="formOutput">
                                </div>

                        </div><!-- .postcontent end -->

                    <!-- Sidebar
                        ============================================= -->
                        <div class="sidebar col_last nobottommargin">

                            <div class="widget clearfix">

                                <h3 class="nobottommargin uppercase">India</h3><br>

                                <address>
                                    <strong>Headquarters:</strong><br>
                                    C.T.S. No.799-A, Bhandarkar Road,<br>
                                    Near VLCC,, Deccan Gymkhana,<br>
                                    Pune, Maharashtra 411004<br>
                                </address>
                                <abbr title="Contact Number"><strong>Phone:</strong></abbr> (91) 84110 09080<br>
                            </div>

                            <div class="line line-sm"></div>

                            <div class="widget notopmargin clearfix">

                                <a href="#" class="social-icon si-small si-dark si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-dark si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-dark fa fa-whatsapp">
                                    <!-- <i class="fa fa-whatsapp"></i> -->
                                    <!-- <i class="fa fa-whatsapp"></i> -->
                                </a>

                            </div>

                        </div><!-- .sidebar end -->

                    </div>
                    <a href="projects.html" class="button button-3d nobottomborder button-full center tright t300 font-primary topmargin footer-stick" style="font-size: 26px;">
                        <div class="container clearfix">
                            Would you like to Build your Dream Home with Us? <strong>Enquire Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
                        </div>
                    </a>

                </div>


            </section>
            <script src="{{ asset('assets/js/module/contact.js') }}"></script>
            @endsection
