@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Dashboard</title>
<!-- page content -->
<!--  -->
<div class="right_col" role="main" ng-app="dashApp" ng-cloak ng-controller="dashCtrl">
  <!-- top tiles -->
  <!-- <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
      <div class="count">2500</div>
      <span class="count_bottom"><i class="green">4% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
      <div class="count">123.50</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
      <div class="count green">2,500</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
      <div class="count">4,567</div>
      <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
      <div class="count">2,315</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
      <div class="count">7,325</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
  </div> -->
  <!-- /top tiles -->

  <div class="w3-row">
    <!-- add category div start -->
    <div class="w3-col l3 w3-padding-small">
      <div class="w3-col l12 w3-white w3-round w3-padding theme_text">
        <label class="theme_text"><i class="fa fa-database"></i> All Categories:</label>

        <div class="w3-col l12 w3-margin-top">
          <form action="{{URL::to('/addCategory')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="input-group">
              <input type="text" name="category_name" class="w3-input w3-border" placeholder="Enter Category name" required @if ($errors->has('category_name') || isset($category_error)) style="border:1px solid red"  @endif>
              <div class="input-group-btn">
                <button class="btn w3-button theme_bg" type="submit">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- print error message -->
            @if ($errors->has('category_name'))
            <div class="w3-text-red w3-col l12">
              <strong>{{ $errors->first('category_name') }}</strong>
            </div>
            @endif
          </form>
          <hr style="margin: 2px">
        </div>

        <div class="w3-col l12 w3-padding-small">
          <div class="w3-col l12 w3-border" style="height: 250px;overflow-y: auto;">
            <ul style="list-style: none;padding: 0">


             @if(empty($categories))
             <li class="w3-border-bottom w3-padding w3-center w3-text-red">
              <span>
                No Category Found
              </span>
            </li>
            @else
            @foreach ($categories as $cat)
            <li class="w3-border-bottom w3-padding">
              <span>
                {{$cat->category_name}}
              </span>
              <a href="{{URL::to('/delCategory/'.$cat->cat_id)}}" title="Delete Category" class="btn w3-right" style="padding: 0"><i class="fa fa-close"></i></a>
            </li>
            @endforeach
            
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- add category div ends -->

  <!-- add brand div start -->
  <div class="w3-col l9">
    
      <div class="w3-col l12 w3-white w3-round w3-padding theme_text">
        <label class="theme_text"><i class="fa fa-database"></i> All Brands:</label>

        <div class="w3-col l12 w3-margin-top">
          <form id="addBrandForm" action="{{URL::to('/addBrand')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
            <div class="w3-col l12">
              <div class="w3-col l6">
              <div class="col-lg-6 col-xs-12 col-sm-12 w3-margin-bottom">
                <label>Brand Name:</label>
                <input type="text" name="brand_name" class="w3-input w3-border" placeholder="Enter Brand name" required>
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12 w3-margin-bottom">
                <label>External Link (optional):</label>
                <input type="url" name="ext_link" class="w3-input w3-border" placeholder="Copy-Paste Catalog link">
                
              </div>
              <div class="col-lg-12 col-sm-12 col-xs-12 w3-margin-bottom ">
                <label>Brand Description:</label>
                <textarea class="w3-input w3-border" name="description" placeholder="Type a short description about the Brand..." rows="4"></textarea>
              </div>
            </div>
            <div class="w3-col l6">
              
              <div class="col-lg-12 w3-margin-bottom">
                <label>Brand Image:</label>
                <input type="file" name="brand_image" onchange="readURL(this)" id="brand_image" class="w3-input w3-border" style="padding: 2px 2px 8px 2px" required>
                <div id="image_error" class="w3-text-red"></div>
              </div>
              <div class="col-lg-offset-3 col-lg-5 w3-padding w3-center">
                <img src="" width="auto" id="imgPreview" height="150px" alt="Brand Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
              </div>
            </div>
              <div class="col-lg-12 w3-margin-bottom w3-margin-top" id="btnsubmit">
                <button class="btn w3-button theme_bg" id="addBrandbtn" type="submit"><i class="fa fa-plus"></i> Add Brand </button>
              </div>
            </div>
            
          </form>
          <div id="formOutput" class="w3-margin"></div>
          <hr style="margin: 2px">
        </div>

        <div class="w3-col l7 w3-padding-small">
          <div ng-html-bind="@{{delMessage}}"></div>
          <div class="w3-col l12 w3-border" style="height: 180px;overflow-y: auto;">
            <ul style="list-style: none;padding: 0">
              

             @if(empty($brands))
             <li class="w3-border-bottom w3-padding w3-center w3-text-red">
              <span>
                No Brand Found
              </span>
            </li>
            @else
            @foreach ($brands as $br)
            <li class="w3-border-bottom w3-padding">
              <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img img-thumbnail w3-hide-small" alt="{{$br->brand_name}} brand logo" style="width: 100px;height: auto">
              <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img img-thumbnail w3-hide-large w3-hide-medium" alt="{{$br->brand_name}} brand logo" style="width: 50px;height: auto">
              <span class="w3-padding"><b> {{$br->brand_name}} </b></span>
              <a ng-click="removeBrand({{$br->brand_id}})" title="Delete Brand" class="btn w3-right" style="padding: 0"><i class="fa fa-close"></i></a>
            </li>
            @endforeach
            
            @endif
          </ul>
        </div>
      </div>
    </div>
  
  </div>
  <!-- add brand div ends -->

  <!-- Add architects div -->

    
      <div class="w3-col l12 w3-white w3-round w3-padding w3-margin-top theme_text">
        <label class="theme_text"><i class="fa fa-plus"></i> Add Architect:</label>
        <div id="archOutput"></div>
        <!-- add architect form -->
        <div class="w3-col l12">
          <div class="col-lg-3"></div>
          <div class="w3-col l6">
            <form id="addArchitectForm">    
            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">          
            <div class="w3-col l12 w3-margin-top">
              <div class="col-lg-6 w3-margin-bottom">
                <label>Architect Name / Company:</label>
                <input type="text" name="arch_name" class="w3-input w3-border" placeholder="Enter Architect / Company Name" required>
              </div>
              <div class="col-lg-6 w3-margin-bottom">
                <label>Architect Email:</label>
                <input type="email" name="arch_email" class="w3-input w3-border" placeholder="Enter Architect Email-Id" required>
              </div>
            </div>
            <div class="w3-col l12">
              <div class="col-lg-6 w3-margin-bottom">
                <label>Architect Landline (optional):</label>
                <input type="number" name="arch_landline" class="w3-input w3-border" placeholder="Enter Architect Landline number">
              </div>
              <div class="col-lg-6 w3-margin-bottom">
                <label>Architect Mobile (optional):</label>
                <input type="number" maxlength="10" name="arch_mobile" class="w3-input w3-border" placeholder="Enter Architect Mobile Number">
              </div>
            </div>
            <div class="w3-col l12">
              <div class="col-lg-12 w3-margin-bottom">
                <label>Architect Address:</label>
                 <textarea class="w3-input w3-border" name="arch_address" placeholder="Enter Architect Address here..." rows="4"></textarea>
              </div>
            </div>
            <div class="col-lg-12 w3-center w3-margin-bottom" id="archSubmit">
              <button class="btn theme_bg w3-center" type="submit"><i class="fa fa-plus"></i>  Add Architect </button>
            </div>
          
            </form>
          </div>
          <div class="col-lg-3"></div>
        </div>

        <div class="w3-col l12 w3-margin-top">
          <hr>
          <label class="theme_text"><i class="fa fa-database"></i> Architect List:</label>
          <table id="datatable" class="table table-striped table-bordered">

                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>LandLine No.</th>
                          <th>Mobile No.</th>
                          <th>Email-Id</th>
                          <th>Added on</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @if($arch!='')
                        @foreach($arch as $ar)
                        <tr>
                          <td>{{$ar->arch_name}}</td>
                          <td>{{$ar->arch_address}}</td>
                          <td>{{$ar->arch_landline}}</td>
                          <td>{{$ar->arch_mobile}}</td>
                          <td>{{$ar->arch_email}}</td>
                          <td>{{$ar->added_on}}</td>
                          <td>{{$ar->added_on}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                          <td colspan="7" class="w3-center theme_text">No Architect Available</td>
                        </tr>
                        @endif                        
                      </tbody>
                    
          </table>
        </div>

    </div>
  
  
  <!-- add architect div ends -->
</div>


</div>
<script src="{{ asset('assets/js/module/admin/dashboard.js') }}"></script>
<!-- /page content -->
@endsection


