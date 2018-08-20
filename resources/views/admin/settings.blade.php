@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Settings Section</title>
<!-- page content -->
<div class="right_col" role="main" ng-app="settingApp" ng-cloak ng-controller="settingCtrl">

	<div class="row" >
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="page_title">

				<div class="row x_title">
					<div class="col-md-6">
						<h4><i class="fa fa-cogs"></i> General Settings </h4>
					</div>
				</div>
				<div class="row w3-white theme_text">

					<div class="col-lg-6 w3-margin-bottom">						
						<div class="w3-col l12 w3-white w3-round w3-padding theme_text theme_border">
							<h5 class="theme_text"><i class="fa fa-envelope"></i> Admin Email Address:</h5>

							<div class="w3-col l12">
								<form id="addEmailForm">
									<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
									<div class="input-group">
										<input type="text" name="admin_email" id="admin_email" value="{{$admin_details->user_email}}" class="w3-input w3-border" placeholder="Enter Email Id here..." autocomplete="off" required>
										<div class="input-group-btn">
											<button class="btn w3-button theme_bg" id="addEmailBtn" type="submit">
												Update Email
											</button>
										</div>
									</div>

									<div class="w3-col l12" id="errEmailMsg"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 w3-margin-bottom">						
						<div class="w3-col l12 w3-white w3-round w3-padding theme_text theme_border">
							<h5 class="theme_text"><i class="fa fa-lock"></i> Admin Password:</h5>

							<div class="w3-col l12">
								<form id="addPasswordForm">
									<!-- <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}"> -->
									<div class="w3-col l8">
										<div class="input-group">
											<input type="password" name="admin_password" id="admin_password" value="{{$admin_details->password}}" class="w3-input w3-border" placeholder="Enter Password here..." autocomplete="off" minlength="8" required>
											<div class="input-group-btn">
												<button class="btn w3-button w3-border" onclick="show_pass(this)" id="" type="button"> Show </button>
											</div>
										</div>
									</div>
									<div class="w3-col l4">
										<button class="btn w3-button theme_bg w3-right" id="addPassBtn" type="submit">
											Update Password
										</button>
									</div>
									
									<div class="w3-text-red w3-col l12" id="errPasswordMsg"></div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<br />

</div>
<script src="{{ asset('assets/js/module/admin/settings.js') }}"></script>
<!-- /page content -->
@endsection


