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
      								<input type="date" name="start_date" id="start_date" class="w3-input w3-border">
      							</div>
      							<div class="w3-col l6">
      								<label>Ending Date:</label>
      								<input ng-disabled="ongoing" type="date" name="end_date" id="end_date" class="w3-input w3-border">
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
      								<a data-toggle="modal" data-target="#embedVidModal" onclick="openHelp('embedVidModal')" style="padding: 0;margin: 0" class="btn w3-right w3-large theme_text fa fa-question-circle"></a>
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
      	<div ng-bind="delMessage" class="w3-margin"></div>
      	 <!-- Modal embed video help -->
    <div class="modal fade bs-example-modal-md" id="embedVidModal" role="dialog" aria-hidden="true">
    	<div class="modal-dialog modal-md">
    		<div class="modal-content">

    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
    				</button>
    				<h4 class="modal-title w3-center theme_text" id="Edit Product title"> <b>Embed Video (HELP) </b></h4>
    			</div>
    			<div class="modal-body">
    				<p>Following are the instructions to embed video with product gallery. </p>
    				<ul>
    					<li>Copy and Paste the remote url link in given input field.</li>
    					<li>As you paste the url link, if the url link is valid, you may see video controls and poster below input field.</li>
    					<li>Examples:
    						<ol>
    							<li>"https://player.vimeo.com/video/197879767" <i class="fa fa-check w3-large w3-text-green"></i></li>
    							<li>"https://vimeo.com/197879767" <i class="fa fa-remove w3-large w3-text-red"></i></li>
    							<li>"https://www.youtube.com/embed/OdCqB-uouHA" <i class="fa fa-check w3-large w3-text-green"></i></li>
    							<li>"https://www.youtube.com/watch?v=OdCqB-uouHA" <i class="fa fa-remove w3-large w3-text-red"></i></li>
    						</ol>
    					</li>
    					
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- end help modal -->

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
						<div class="w3-col l12 w3-padding w3-small" id="allProjectsDiv">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr >
										<th class="text-center">Name</th>
										<th class="text-center w3-hide-small" style="width: 500px">Description</th>
										<th class="text-center w3-hide-small">Client</th>
										<th class="text-center w3-hide-small">Duration</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									@if($projects!='')
									@foreach($projects as $proj)
									<tr class="w3-center">
										<td>{{$proj->proj_name}}</td>
										<td class="w3-hide-small">
											<div style="max-height: 35px;overflow: hidden;" class="">{{$proj->proj_description}}</div>
											<a class="btn w3-text-red w3-small w3-right" data-toggle="modal" data-target="#ProjModal_{{$proj->project_id}}" ng-click="openModal('{{$proj->project_id}}')" style="padding:0"><b>more</b></a>
										</td>
										<td class="w3-hide-small">{{$proj->client_name}}</td>
										<td class="w3-hide-small">
										<?php 
										$todate='Ongoing';
										if($proj->ongoing!=1){
											$todate=date("d M Y", strtotime($proj->end_date));
										}
										?>
										@if($proj->start_date=='0000-00-00')
										N/A
										@else
										{{date("d M Y", strtotime($proj->start_date))}}-{{$todate}}
										@endif
									</td>
										<td>
											<a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ProjModal_{{$proj->project_id}}" ng-click="openModal('{{$proj->project_id}}')" title="View Project"><i class="fa fa-search"></i></a>
											<a ng-click="removeProject('{{$proj->project_id}}')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
										</td>
										<!-- Modal to edit product -->
										<div class="modal fade bs-example-modal-lg" id="ProjModal_{{$proj->project_id}}" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-md ">
												<!-- Modal content starts -->
												<div class="modal-content">

													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
														</button>
														<h3 class="modal-title w3-center theme_text"> <u> Project Info </u></h3>
													</div>
													<!-- Modal body starts -->
													<div class="modal-body">

														<!-- Modal conatiner starts -->
														<div class="container">	
															<div class="col-lg-12" ng-show="viewProj" >
																<?php 
																$image_arr=json_decode($proj->proj_images);
																?>
																<?php 
																if($proj->proj_videos!='[]' && $proj->proj_videos!='[null]'){
																	$video_arr=json_decode($proj->proj_videos);
																}
																?>
																<div class="w3-col l12 w3-margin-top">
																	<div class="w3-col l6">
																		<label>Products Associated:</label>
																		<div class="w3-col l12 w3-border">
																			<div class="w3-col l12" ng-bind-html="relatedProdsSpinner"></div>
																			<ul class="w3-ul" ng-if="relatedProds!=''">
																				<li ng-repeat="x in relatedProds track by $index" ng-model="assocProd_{{$proj->project_id}}">@{{x.prod_name}}<span ng-click="removeAssoc(x.product_id,{{$proj->project_id}})"  style="cursor:pointer;" class="w3-right w3-margin-right"><i class="fa fa-remove"></i></span></li>
																			</ul>
																			<label class="w3-text-grey" ng-if="relatedProds==''">No products associated for this project.</label>
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="w3-container">
																			<label>Select Product:</label>
																			<div class="w3-col l10 s10">
																				<select name="productList" id="productList_{{$proj->project_id}}" class="w3-input w3-border" ng-model="add_assoc_field[{{$proj->project_id}}]">
																					<option value="0" class="w3-light-grey" selected>Choose one product</option>
																					@foreach($products as $product)
																					<option value="{{$product->product_id}}">{{$product->prod_name}}</option>
																					@endforeach
																				</select>
																			</div>
																			<div class="w3-col l2 s2">
																				<button class="w3-button theme_bg" type="button" ng-click="addAssoc({{$proj->project_id}})" title="add operation">Add</button>
																			</div>
																			<div class="w3-col l12 w3-padding-small" ng-bind-html="productAddMessage"></div>
																		</div>
																	</div>
																</div>

																<div class="w3-col l12 w3-margin-top w3-margin-bottom">
																	<a class="btn w3-card  w3-right" ng-click="projectAction(0)"><i class="fa fa-edit"></i> Edit Product</a>
																</div>
															</div>

															<!-- Edit product section -->
															<div class="w3-col l12" ng-show="editProj">

																<form id="updateProj_{{$proj->project_id}}" name="updateProj_{{$proj->project_id}}">
																	<div class="col-lg-12 w3-padding-small w3-margin-bottom">
																		<div class="col-lg-6">

																			<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																				<label> Project Name: <font color ="red"><span id ="update_pname_star_{{$proj->project_id}}">*</span></font></label><br>
																				<input type="text" name="update_project_name" id="update_project_name_{{$proj->project_id}}" value="{{$proj->proj_name}}" placeholder="Add Project Name" class="w3-input w3-border w3-margin-bottom" required>
																			</div>
																			<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																				<label> Client Name: <font color ="red"><span id ="update_pclient_star_{{$proj->project_id}}">*</span></font></label><br>
																				<input type="text" name="update_client_name" id="update_client_name_{{$proj->project_id}}" value="{{$proj->client_name}}" placeholder="Add Client Name" class="w3-input w3-border w3-margin-bottom" required>
																			</div>
																			<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																				<div class="w3-col l6" style="padding-right: 10px">
																					<label>Start Date:</label>
																					<input type="date" name="update_start_date" id="update_start_date_{{$proj->project_id}}" class="w3-input w3-border" value="<?php if($proj->start_date!='' && $proj->start_date!='0000-00-00'){echo date('Y-m-d',strtotime($proj->start_date));} ?>">
																				</div>
																				<div class="w3-col l6" <?php if($proj->ongoing=='1'){echo 'ng-init="update_ongoing_'.$proj->project_id.'=true"';} ?> >
																					<label>Ending Date:</label>
																					<input ng-disabled="update_ongoing_{{$proj->project_id}}" type="date" name="update_end_date" id="update_end_date_{{$proj->project_id}}" class="w3-input w3-border" value="<?php if($proj->ongoing!='1' && $proj->start_date!='0000-00-00'){echo date('Y-m-d',strtotime($proj->end_date));} ?>">
																					<p class="w3-padding-top w3-center"><b>OR</b></p>
																					<label class="w3-center"><input type="checkbox" ng-model="update_ongoing_{{$proj->project_id}}" name="update_ongoingcheck" id="update_ongoingcheck_{{$proj->project_id}}" class="w3-border"> Ongoing Project</label>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																				<label> Project Description: <font color ="red"><span id ="pdescription_star">*</span></font></label><br>
																				<textarea class="w3-input w3-border w3-margin-bottom" name="update_project_description" id="update_project_description__{{$proj->project_id}}" rows="11" placeholder="Add Project Description here..." required>{{$proj->proj_description}}</textarea>
																				<input type="hidden" name="_token" id="_token__{{$proj->project_id}}" value="{{csrf_token()}}">
																			</div>
																		</div>
																	</div>

																	<!-- ---div for images -->
																	<div class="col-lg-12 w3-padding-tiny">
																		<div class="col-lg-2"></div>
																		<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
																			<input type="hidden" name="update_image_json" value="{{$proj->proj_images}}">
																			@foreach($image_arr as $img)
																			<div class="w3-container w3-padding-small w3-margin-bottom" style="border:1px dotted">
																				<div class="w3-col l12 ">
																					<label>Project Image: <font color ="red"><span id ="simage_star">*</span></font></label>
																					<span class="w3-text-red w3-small" id="image_error_1"></span>
																				</div>
																				<div class="w3-col l12 w3-margin-top w3-margin-bottom">
																					<img src="{{URL::to('/')}}/{{$img}}" width="auto" id="projImagePreview_1" height="150px" alt="Project Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
																				</div>
																			</div>
																			@endforeach
																		</div>

																		<!-- video div -->
																		<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
																			<input type="hidden" name="update_vid_json" value="{{$proj->proj_videos}}">
																			<?php 
																			if($proj->proj_videos!='[]' && $proj->proj_videos!='[null]'){
																				?>
																				@foreach($video_arr as $vid)
																				<div class="w3-container w3-padding-small" style="border:1px dotted">
																					<div class="w3-col l12 ">
																						<label>Embed Video (optional):</label>
																					</div>
																					<div class="w3-col l12 w3-margin-top">
																						<iframe src="{{$vid}}" class="w3-border" style="width: 100%;height: 120px;" id="projVideoPreview_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
																					</div>
																				</div>
																				@endforeach
																				<?php 
																			} 
																			else{ ?>
																				<div class="w3-container w3-padding-small w3-margin-bottom">
																					<div class="w3-col l12 ">
																						<label>Embeded Video :</label>

																						<label class='w3-text-grey w3-small'>  No Videos available </label>


																					</div>
																				</div>
																				<?php
																			}
																			?>

																		</div>
																		<div class="col-lg-2"></div>
																		<input type="hidden" name="id" value="{{$proj->project_id}}">
																		<div class="w3-col l12 w3-center" id="update_btnsubmit_{{$proj->project_id}}">
																			<button type="submit" title="Add new Project" id="update_submitForm_{{$proj->project_id}}" class="btn theme_bg"> Save Changes </button>

																		</div>
																		<div class="col-lg-offset-3 col-lg-6 w3-center" id="update_formOutput_{{$proj->project_id}}"></div>
																		<br>
																		<br>
																	</div>
																	<!-- ---div for images -->

																	<script type="text/javascript">

																		$("#updateProj_{{$proj->project_id}}").on('submit', function(e) {
																			e.preventDefault(); 
																			$.ajaxSetup({
																				headers: {
																					'X-CSRF-Token': $('#_token_{{$proj->project_id}}').val()
																				}
																			});
																			$.ajax({
																				url: "project/updateProject", 
    																				// point to server-side PHP script
    																				data: new FormData(this),
    																				type: 'POST',
    																				contentType: false, 
    																				// The content type used when sending data to the server.
    																				cache: false, 
    																				// To unable request pages to be cached
    																				processData: false,
    																				beforeSend: function(){
    																					$('#update_formOutput_{{$proj->project_id}}').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Updating Changes...</b></span>');
    																				},
    																				success: function(data){
    																					$('#update_formOutput_{{$proj->project_id}}').html(data);
    																					

    																					window.setTimeout(function() {
    																						$(".alert").fadeTo(500, 0).slideUp(500, function(){
    																							$(this).remove(); 
    																						});
    																					}, 5000);
    																				},
    																				error:function(data){
    																					$('#update_formOutput_{{$proj->project_id}}').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
    																					
    																					window.setTimeout(function() {
    																						$(".alert").fadeTo(500, 0).slideUp(500, function(){
    																							$(this).remove(); 
    																						});
    																					}, 5000);
    																				}
    																			});
																			return false;
																		});

																	</script>
																	<div class="w3-col l12 w3-margin-top w3-margin-bottom">
																		<a class="btn w3-card  w3-right" ng-click="projectAction(1)"><i class="fa fa-search"></i> View Product</a>
																	</div>

																</form>
															</div>

														</div>
														<!-- Modal container ends -->
													</div>
													<!-- Modal Body ends -->
												</div>
												<!-- Modal contenet ends -->
											</div>
										</div>
										<!-- Modal ends here -->

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
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script src="{{ asset('assets/js/module/admin/project.js') }}"></script>
<!-- /page content -->
@endsection


