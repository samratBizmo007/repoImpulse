@extends('layouts.app')

@section('content')
<title>Impulse Trends | Reset Password</title>


    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

        <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap nopadding">

                    <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('template/images/admin/1.jpg') center center no-repeat; background-size: cover;"></div>

                    <div class="section nobg full-screen nopadding nomargin">
                        <div class="container-fluid vertical-middle divcenter clearfix">

                            <div class="center w3-margin">
                                <a href="index.html"><img src="template/images/impulse-logo.png" class="img img-responsive" alt="Impulse Logo" style="width: 240px;height: auto"></a>
                            </div>

                            <div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                                <div class="card-body" style="padding: 40px;">
                                    @if (isset($resetpass_error))
                                    <div class="alert alert-danger">
                                        {{$resetpass_error}}
                                    </div>
                                    @endif
                                    <form id="resetpass-form" name="resetpass-form" class="nobottommargin" action="{{URL::to('/adminlogin')}}" method="post">
                                        <h3>Reset your password</h3>

                                        <div class="col_full">
                                            <label for="Admin_username">Email-ID:</label>
                                            <input type="email" id="Admin_email" name="Admin_email" value="" class="form-control not-dark" required @if ($errors->has('Admin_email') || isset($resetpass_error)) style="border:1px solid red"  @endif />
                                            <!-- print error message -->
                                            @if ($errors->has('Admin_email'))
                                            <span class="w3-text-red">
                                                <strong>{{ $errors->first('Admin_email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        <div class="col_full nobottommargin">
                                            <button class="button button-3d button-black nomargin" id="resetpass-form-submit" name="resetpass-form-submit" type="submit" value="resetpass">Reset</button>
                                            <a href="{{URL::to('/adminlogin')}}" class="fright">Login to your account <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="center dark"><small>Copyrights &copy; All Rights Reserved by Canvas Inc.</small></div>

                        </div>
                    </div>

                </div>

            </section><!-- #content end -->

        </div><!-- #wrapper end -->

        @endsection
