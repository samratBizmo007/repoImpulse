@extends('layouts.app')

@section('content')
<title>Impulse Trends | Admin Login</title>


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
                                    @if (isset($login_error))
                                    <div class="alert alert-danger">
                                        {{$login_error}}
                                    </div>
                                    @endif
                                    <form id="login-form" name="login-form" class="nobottommargin" action="{{URL::to('/adminlogin')}}" method="post">
                                        <h3>Login to your Account</h3>

                                        <div class="col_full">
                                            <label for="Admin_username">Username:</label>
                                            <input type="text" id="Admin_username" name="Admin_username" value="" class="form-control not-dark" required @if ($errors->has('Admin_username') || isset($login_error)) style="border:1px solid red"  @endif />
                                            <!-- print error message -->
                                            @if ($errors->has('Admin_username'))
                                            <span class="w3-text-red">
                                                <strong>{{ $errors->first('Admin_username') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col_full">
                                            <label for="Admin_password">Password:</label>
                                            <input type="password" id="Admin_password" name="Admin_password" value="" class="form-control not-dark" required @if ($errors->has('Admin_password') || isset($login_error)) style="border:1px solid red"  @endif />
                                            <!-- print error message -->
                                            @if ($errors->has('Admin_password'))
                                            <span class="w3-text-red">
                                                <strong>{{ $errors->first('Admin_password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        <div class="col_full nobottommargin">
                                            <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" type="submit" value="login">Login</button>
                                            <a href="{{URL::to('/forgot_password')}}" class="fright">Forgot Password?</a>
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
