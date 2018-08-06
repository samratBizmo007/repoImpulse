@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Projects Section</title>
<!-- page content -->
<div class="right_col" role="main" ng-app="projApp" ng-cloak ng-controller="ProjCtrl">

	<div class="row" >
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="page_title">

				<div class="row x_title">
					<div class="col-md-6">
						<h4><i class="fa fa-plus"></i> Add Project </h4>
					</div>
				</div>
        <!-- <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      </div> -->
      <div class="alert alert-fixed"></div>
      <div class="row w3-padding w3-white theme_text">
      	<form id="addProjectForm" name="addProjectForm" enctype="multipart/form-data">
      		<div class="w3-col l12 s12 m12 w3-margin-top">
      			<div class="col-lg-1"></div>
      			<div class="col-lg-9">
      				<div class="col-lg-12 w3-padding-small w3-margin-bottom">
      					<div class="col-lg-6">
      						
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Project Name: <font color ="red"><span id ="pname_star">*</span></font></label><br>
      							<input type="text" name="project_name" id="project_name" value="" placeholder="Add Project Name" class="w3-input w3-border w3-margin-bottom" required>
      						</div>
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Client Name: <font color ="red"><span id ="pclient_star">*</span></font></label><br>
      							<input type="text" name="client_name" id="client_name" value="" placeholder="Add Client Name" class="w3-input w3-border w3-margin-bottom" required>
      						</div>
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<div class="w3-col l6" style="padding-right: 10px">
      								<label>Start Date:</label>
      								<input type="date" name="start_date" id="start_date" class="w3-input w3-border" required>
      							</div>
      							<div class="w3-col l6">
      								<label>Ending Date:</label>
      								<input ng-disabled="ongoing" type="date" name="end_date" id="end_date" class="w3-input w3-border" required>
      								<span class="w3-padding-top"><b>OR</b></span>
      								<label class="w3-right"><input type="checkbox" ng-model="ongoing" name="ongoingcheck" id="ongoingcheck" class="w3-border"> Ongoing Project</label>
      							</div>
      						</div>
      					</div>
      					<div class="col-lg-6">
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Project Description: <font color ="red"><span id ="pdescription_star">*</span></font></label><br>
      							<textarea class="w3-input w3-border w3-margin-bottom" name="project_description" id="project_description" rows="11" placeholder="Add Project Description here..." required></textarea>
      							<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
      						</div>
      					</div>


      				</div>
      				<!-- ---div for images -->
      				<div class="col-lg-12 w3-padding-tiny">
      					<div class="col-lg-2"></div>
      					<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
      						<div class="w3-container w3-padding-small" style="border:1px dotted">
      							<div class="w3-col l12 ">
      								<label>Project Image: <font color ="red"><span id ="simage_star">*</span></font></label>
      								<input type="file" name="proj_image[]" id="proj_image_1" class="w3-input w3-border" onchange="readURL(this,1);" required>
      								<span class="w3-text-red w3-small" id="image_error_1"></span>
      							</div>
      							<div class="w3-col l12 w3-margin-top w3-margin-bottom">
      								<img src="" width="auto" id="projImagePreview_1" height="150px" alt="Project Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
      							</div>
      						</div>
      						<div class="w3-col l12" id="addedmore_imageDiv"></div>
      						<div class="w3-col l12 w3-margin-bottom">
      							<a id="add_moreimage" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add image <i class="fa fa-plus"></i></b>
      							</a>
      						</div>
      					</div>

      					<!-- video div -->
      					<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
      						<div class="w3-container w3-padding-small" style="border:1px dotted">
      							<div class="w3-col l12 ">
      								<label>Embed Video (optional):</label>
      								<input type="input" name="proj_video[]" id="proj_video_1" class="w3-input w3-border" onkeyup="readVideo(this,1);" placeholder="Copy & paste url link">
      								<span class="w3-text-red w3-small" id="video_error_1"></span>
      							</div>
      							<div class="w3-col l12 w3-margin-top">
      								<iframe src="" class="w3-border" style="width: 100%;height: 120px;display:none" id="projVideoPreview_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      							</div>
      						</div>
      						<div class="w3-col l12" id="addedmore_vidDiv"></div>
      						<div class="w3-col l12 w3-margin-bottom">
      							<a id="add_morevideo" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add Video <i class="fa fa-plus"></i></b>
      							</a>
      						</div>
      					</div>
      					<div class="col-lg-2"></div>

      				</div>
      				<!-- ---div for images -->
      			</div>
      			<div class="col-lg-2"></div>
      		</div>                   
      		<div class="w3-col l12 w3-center" id="btnsubmit">
      			<button type="submit" title="Add new project" id="submitForm" class="btn w3-red">Save and Add Project</button>
      		</div>
      	</form>
      	<div id="formOutput" class="w3-margin"></div>
      	<div ng-bind="delMessage" class="w3-margin">sdvsdv</div>

      </div>

  </div>
</div>

</div>
<br />

<div class="row w3-margin-bottom">	
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="page_title">
			<div class="row x_title">
				<div class="col-md-6">
					<h4><i class="fa fa-list"></i> All Projects </h4>
				</div>
			</div>
			<div class="alert alert-fixed"></div>
			<div class="row w3-padding w3-white theme_text">
				<div class="container">
					<div class="w3-col l12">
						<div class="w3-col l5 w3-padding w3-small" id="allProjectsDiv">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr class="text-center">
										<th>Name</th>
										<th>Client</th>
										<th>Duration</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@if($projects!='')
									@foreach($projects as $ar)
									<tr class="w3-center">
										<td>{{$ar->proj_name}}</td>
										<td>{{$ar->client_name}}</td>
										<td>{{$ar->start_date}}</td>
										<td>
											<a ng-click="viewProject('{{$ar->project_id}}')" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></a>
											<a ng-click="removeProject('{{$ar->project_id}}')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									@endforeach
									@else
									<tr>
										<td colspan="4" class="w3-center theme_text">No Project Available</td>
									</tr>
									@endif                        
								</tbody>

							</table>
							
						</div>
						<div class="w3-col l7 w3-padding">
							<div class="w3-col l12" style="border:1px dotted;">
								<div class="col-lg-12">
									<div class="w3-center w3-col l12 w3-text-grey" id="projectInfo_view">
										<h3><u>Project Info</u></h3>
									</div>
									<br>
									<div class="w3-col l7 w3-margin-top">
										
										<div class="fslider" data-arrows="false" data-lightbox="gallery">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide w3-center">
														<a href="{{URL::to('/')}}/template/images/projects/1.jpg" data-lightbox="gallery-item">
															<img class="image_fade" style="min-height: 100%" class="img" src="{{URL::to('/')}}/template/images/projects/1.jpg" alt=" Gallery">
														</a>
													</div>
													<div class="slide w3-center">
														<a href="{{URL::to('/')}}/template/images/projects/2.jpg" data-lightbox="gallery-item">
															<img class="image_fade" style="min-height: 100%" class="img" src="{{URL::to('/')}}/template/images/projects/1.jpg" alt=" Gallery">
														</a>
													</div>
													<div class="slide w3-center">
														<a href="{{URL::to('/')}}/template/images/projects/3.jpg" data-lightbox="gallery-item">
															<img class="image_fade" style="min-height: 100%" class="img" src="{{URL::to('/')}}/template/images/projects/1.jpg" alt=" Gallery">
														</a>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="w3-col l5 w3-margin-top">
										<div class="col-lg-12">
											<div class="w3-col l12 w3-margin-bottom">
												<h4>Project NAme 1</h4>
												<h5>Client Name</h5>
												<h5><i>28 May 2017 - Ongoing</i></h5>
											</div>
											
										</div>
									</div>
									<div class="w3-col l12 w3-margin-top">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>

									<div class="w3-col l12 w3-margin-top">
										<div class="w3-col l12">
											<label>Products Associated:</label>
											<div class="w3-col l12 w3-padding">
												<span class="badge theme_bg" > Product 1&nbsp;&nbsp;<a href="" class="btn" style="padding: 0"><i class="fa fa-times"></i> </a>
												</span>
												<span class="badge theme_bg" > Product 1&nbsp;&nbsp;<a href="" class="btn" style="padding: 0"><i class="fa fa-times"></i> </a>
												</span>
												<span class="badge theme_bg" > Product 1&nbsp;&nbsp;<a href="" class="btn" style="padding: 0"><i class="fa fa-times"></i> </a>
												</span>
												<span class="badge theme_bg" > Product 1&nbsp;&nbsp;<a href="" class="btn" style="padding: 0"><i class="fa fa-times"></i> </a>
												</span>
											</div>
										</div>
									</div>

									<div class="w3-col l12 w3-margin-top w3-margin-bottom">
										<a class="btn w3-card  w3-right"><i class="fa fa-edit"></i> Edit Product</a>
									</div>

								</div>

								<div class="col-lg-12">
									
									<div class="w3-center w3-col l12 w3-text-grey" id="projectInfo_view">
										<h3><u>Edit Project Info</u></h3>
									</div>
									<br>
									<div class="w3-col l12">
										
										<div class="col-lg-12 w3-padding-small w3-margin-bottom">
											<div class="col-lg-6">

												<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
													<label> Project Name: <font color ="red"><span id ="pname_star">*</span></font></label><br>
													<input type="text" name="project_name" id="project_name" value="" placeholder="Add Project Name" class="w3-input w3-border w3-margin-bottom" required>
												</div>
												<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
													<label> Client Name: <font color ="red"><span id ="pclient_star">*</span></font></label><br>
													<input type="text" name="client_name" id="client_name" value="" placeholder="Add Client Name" class="w3-input w3-border w3-margin-bottom" required>
												</div>
												<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
													<div class="w3-col l6" style="padding-right: 10px">
														<label>Start Date:</label>
														<input type="date" name="start_date" id="start_date" class="w3-input w3-border" required>
													</div>
													<div class="w3-col l6">
														<label>Ending Date:</label>
														<input ng-disabled="ongoing" type="date" name="end_date" id="end_date" class="w3-input w3-border" required>
														<span class="w3-padding-top"><b>OR</b></span>
														<label class="w3-right"><input type="checkbox" ng-model="ongoing" name="ongoingcheck" id="ongoingcheck" class="w3-border"> Ongoing Project</label>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
													<label> Project Description: <font color ="red"><span id ="pdescription_star">*</span></font></label><br>
													<textarea class="w3-input w3-border w3-margin-bottom" name="project_description" id="project_description" rows="11" placeholder="Add Project Description here..." required></textarea>
													<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
												</div>
											</div>


										</div>
										<!-- ---div for images -->
										<div class="col-lg-12 w3-padding-tiny">
											<div class="col-lg-2"></div>
											<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
												<div class="w3-container w3-padding-small" style="border:1px dotted">
													<div class="w3-col l12 ">
														<label>Project Image: <font color ="red"><span id ="simage_star">*</span></font></label>
														<input type="file" name="proj_image[]" id="proj_image_1" class="w3-input w3-border" onchange="readURL(this,1);" required>
														<span class="w3-text-red w3-small" id="image_error_1"></span>
													</div>
													<div class="w3-col l12 w3-margin-top w3-margin-bottom">
														<img src="" width="auto" id="projImagePreview_1" height="150px" alt="Project Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
													</div>
												</div>
												<div class="w3-col l12" id="addedmore_imageDiv"></div>
												<div class="w3-col l12 w3-margin-bottom">
													<a id="add_moreimage" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add image <i class="fa fa-plus"></i></b>
													</a>
												</div>
											</div>

											<!-- video div -->
											<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
												<div class="w3-container w3-padding-small" style="border:1px dotted">
													<div class="w3-col l12 ">
														<label>Embed Video (optional):</label>
														<input type="input" name="proj_video[]" id="proj_video_1" class="w3-input w3-border" onkeyup="readVideo(this,1);" placeholder="Copy & paste url link">
														<span class="w3-text-red w3-small" id="video_error_1"></span>
													</div>
													<div class="w3-col l12 w3-margin-top">
														<iframe src="" class="w3-border" style="width: 100%;height: 120px;display:none" id="projVideoPreview_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
													</div>
												</div>
												<div class="w3-col l12" id="addedmore_vidDiv"></div>
												<div class="w3-col l12 w3-margin-bottom">
													<a id="add_morevideo" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add Video <i class="fa fa-plus"></i></b>
													</a>
												</div>
											</div>
											<div class="col-lg-2"></div>

										</div>
										<!-- ---div for images -->

										<div class="w3-col l12 w3-margin-top w3-margin-bottom">
											<a class="btn w3-card  w3-right"><i class="fa fa-search"></i> View Product</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script src="{{ asset('assets/js/module/admin/project.js') }}"></script>
<!-- /page content -->
@endsection


