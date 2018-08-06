@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Services Section</title>
<!-- page content -->
<div class="right_col" role="main">

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="page_title">

        <div class="row x_title">
          <div class="col-md-6">
            <h4><i class="fa fa-plus"></i> Add Services </h4>
          </div>
        </div>
        <!-- <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
       <div class="alert alert-fixed"></div>
        <div class="row w3-padding w3-white theme_text">
            <form id="addService_form" name="addService_form" enctype="multipart/form-data">
                <div class="w3-col l12 s12 m12 w3-margin-top">
                    <div class="col-lg-6 w3-padding-small">
                        <div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
                            <label> Service Title: <font color ="red"><span id ="sname_star">*</span></font></label><br>
                            <input type="text" name="service_title" id="service_title" value="" placeholder="Add Service Title" class="w3-input w3-border w3-margin-bottom" required>
                        </div>                           
                        <!-- kk -->
                        <div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
                            <label> Service Description: <font color ="red"><span id ="sdescription_star">*</span></font></label><br>
                            <textarea class="w3-input w3-border w3-margin-bottom" name="service_description" id="service_description" rows="5" maxlength="255" placeholder="Add Service Description (maximum length 255 characters)" style="resize: none;" required></textarea>
                            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        </div>
                        <!-- kk -->                            
                        
                    </div>
                    <!-- ---div for images -->
                    <div class="col-lg-6 w3-padding-tiny">
                        <div class="w3-col l12 s12 m12 w3-small w3-margin-bottom">
                            <div class="w3-col l6 ">
                                <label>Service Image: <font color ="red"><span id ="simage_star">*</span></font></label>
                                <input type="file" name="service_image" id="service_image" class="w3-input w3-border" onchange="readURL(this);" required>
                                <span class="w3-text-red w3-small" id="image_error"></span>
                            </div>
                            <div class="w3-col l6 w3-padding-small w3-margin-top">
                                <img src="" width="auto" id="serviceImagePreview" height="150px" alt="Service Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
                            </div>
                        </div>
                        
                    </div>
                    <!-- ---div for images -->
                </div>                   
                <div class="w3-col l12 w3-center" id="btnsubmit">
                    <button type="submit" title="add service" id="submitForm" class="btn w3-red">Add Service</button>
                </div>
            </form>
        <div id="formOutput" class="w3-margin"></div>
        </div>
        
      </div>
    </div>

  </div>
  <br />

  <div class="row" ng-app="serviceApp" ng-cloak ng-controller="ServiceCtrl">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="page_title">

        <div class="row x_title">
          <div class="col-md-6">
            <h4><i class="fa fa-list"></i> All Services </h4>
          </div>
        </div>
        <!-- <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
       
        <div class="row w3-padding w3-white theme_text" style="overflow-x: scroll">
        	<div ng-html-bind="delMessage" class="w3-margin"></div>
        	<table class="table table-responsive table-bordered">
        		<thead>
        			<tr class="theme_text">
        				<th class="w3-center">Sr.No.</th>
        				<th class="w3-center">Service Title</th>
        				<th class="w3-center">Service Description</th>
        				<th class="w3-center">Image</th>
        				<th class="w3-center">Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr class="w3-text-grey" ng-show="dataTab" ng-repeat='ser in services'>
        				<td class="w3-center" style="width: 20px" ng-bind="$index+1.">.</td>
        				<td class="w3-center" style="width: 250px" ng-bind="ser.service_title"></td>
        				<td ng-bind="ser.service_description" style="width: 250px"></td>
        				<td class="w3-center" style="width: 220px">        					
        					<img src="{{URL::to('/')}}\@{{ser.service_image}}" class="img img-thumbnail img-responsive" style="width:200px;height: auto;" alt="@{{ser.service_title}} Image">
        				</td>
        				<td class="w3-center" style="width: 20px">
        					<a ng-click="removeService(ser.service_id)" class="btn w3-text-red"><i class="fa fa-remove"></i></a>
        				</td>
        			</tr>
        			<tr ng-show="emptyTab">
        				<td class="w3-center w3-text-grey" colspan="5"><label>No service available</label></td>
        			</tr>
        		</tbody>
        	</table>
        </div>
        
      </div>
    </div>
    
  </div>
  <br />
</div>
<script src="{{ asset('assets/js/module/admin/services.js') }}"></script>
<!-- /page content -->
@endsection


