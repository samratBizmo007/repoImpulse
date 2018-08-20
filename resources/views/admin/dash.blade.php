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
        <h4 class="theme_text"><i class="fa fa-database"></i> All Categories:</h4>

        <div class="w3-col l12 w3-margin-top">
          <form id="addCategoryForm">
            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
            <div class="input-group">
              <input type="text" name="category_name" id="category_name" class="w3-input w3-border" placeholder="Enter Category name" required>
              <div class="input-group-btn">
                <button class="btn w3-button theme_bg" id="addCatBtn" type="submit">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            
            <div class="w3-text-red w3-col l12" id="errCategoryMsg">
            </div>
          </form>
          <hr style="margin: 2px">
        </div>

        <div class="w3-col l12 w3-padding-small" id="allCategoryDiv">
          <div class="w3-col l12 w3-border" style="height: 325px;overflow-y: auto;">
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
              <div class="w3-row">

                <div class="w3-col l10 m10 s10">
                  <span>
                    {{$cat->category_name}}
                  </span>
                </div>
                <div class="w3-col l2 m2 s2">
                  <a onclick="delCategory('{{$cat->cat_id}}')" title="Delete Category" class="btn" style="padding: 0"><i class="fa fa-close"></i></a>
                </div>
              </div>
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
  <div class="w3-col l9 w3-padding-small">

    <div class="w3-col l12 w3-white w3-round w3-padding theme_text">
      <h4 class="theme_text"><i class="fa fa-first-order"></i> All Brands:</h4>

      <div class="w3-col l6 w3-margin-top">
        <form id="addBrandForm" action="{{URL::to('/addBrand')}}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
          <div class="w3-col l12">
            <div class="w3-col l12">
              <div class="col-lg-6 col-xs-12 col-sm-12 w3-margin-bottom">
                <label>Brand Name:</label>
                <input type="text" name="brand_name" class="w3-input w3-border" placeholder="Enter Brand name" required>
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12 w3-margin-bottom">
                <label>External Link (optional):</label>
                <input type="url" name="ext_link" class="w3-input w3-border" placeholder="Copy-Paste Catalog link">
                
              </div>
              <div class="col-lg-6 w3-margin-bottom">
                <label>Brand Image:</label>
                <input type="file" name="brand_image" onchange="readURL(this)" id="brand_image" class="w3-input w3-border" style="padding: 2px 2px 8px 2px" required>
                <div id="image_error" class="w3-text-red"></div>
              </div>
              <div class="col-lg-6 w3-padding w3-center">
                <img src="" width="auto" id="imgPreview" height="150px" alt="Brand Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
              </div>
              <div class="col-lg-12 col-sm-12 col-xs-12 w3-margin-bottom ">
                <label>Brand Description:</label>
                <textarea class="w3-input w3-border" name="description" placeholder="Type a short description about the Brand..." rows="4" required></textarea>
              </div>
            </div>
            <div class="col-lg-12 w3-center" id="btnsubmit">
              <button class="btn w3-button theme_bg" id="addBrandbtn" type="submit"><i class="fa fa-plus"></i> Add Brand </button>
            </div>
          </div>

        </form>
        <div id="formOutput" class="w3-margin"></div>
      </div>

      <div class="w3-col l6 w3-padding w3-border-left">
        <label class="theme_text"> Brands list:</label>
        <div ng-html-bind="@{{delMessage}}"></div>
        <div class="w3-col l12" style="height: 360px;overflow-y: auto;">
         @if(empty($brands))
         <li class="w3-border-bottom w3-padding w3-center w3-text-red">
          <span>
            No Brand Found
          </span>
        </li>
        @else
        @foreach ($brands as $br)
        <div class="col-lg-4 w3-padding-small w3-margin-bottom">
          <!-- <div class="w3-col l3 w3-padding-small" style="z-index: 1;position: absolute;">
            <span class="fa fa-star w3-text-orange w3-left" style="border:1px solid" title="Featured Brand"></span>
          </div> -->
          
          <div class="w3-col l12">
            <a data-toggle="modal" data-target="#brandModal_{{$br->brand_id}}" onclick="openModal('{{$br->brand_id}}')" class="btn w3-opacity w3-hover-opacity-off" style="padding: 0;margin: 0">
              <img src="{{URL::to('/')}}/{{$br->brand_image}}" class="img" style="width: 100%;height: 80px;">
            </a>

          </div>
        </div>
        <!-- Modal starts -->
        <div class="modal fade" id="brandModal_{{$br->brand_id}}" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-md ">
            <!-- Modal content starts -->
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title w3-center theme_text"> <u> Brand Info </u></h3>
              </div>
              <!-- Modal body starts -->
              <div class="modal-body">
                <div class="container">
                  <div class="w3-col l12">
                    <a ng-click="removeBrand({{$br->brand_id}})" title="Delete Brand" class="btn w3-right w3-red" style="padding:0 5px"><i class="fa fa-remove"></i> Delete</a>
                  </div>
                  <form id="updateBrandForm_{{$br->brand_id}}" name="updateBrandForm_{{$br->brand_id}}">
                    <div class="w3-col l12">
                      <div class="col-lg-5">
                        <div class="w3-col l12 w3-margin-bottom">
                          <label>Brand Image:</label>
                          <img src="{{URL::to('/')}}/{{$br->brand_image}}" width="100%" id="brand_image_update" alt="{{$br->brand_name}} logo" class=" w3-centerimg img-thumbnail">
                        </div>
                      </div>
                      <div class="col-lg-7">   
                        <div class="w3-col l12 w3-margin-bottom">
                          <label>Brand Name:</label>
                          <input type="text" name="update_brand_name" class="w3-input w3-border" value="{{$br->brand_name}}" placeholder="Enter Brand name" required>
                        </div>
                        <div class="w3-col l12 w3-margin-bottom">
                          <label>External Link (optional):</label>
                          <?php 
                          $link=$br->external_link;
                          if($link=='Null'){
                            $link='';
                          }
                          ?>
                          <input type="url" name="update_ext_link" class="w3-input w3-border" value="<?php echo $link; ?>" placeholder="Copy-Paste Catalog link">                
                        </div>                 
                      </div>                    
                    </div>

                    <div class="w3-col l12">
                      <div class="col-lg-12 w3-margin-bottom ">
                        <label>Brand Description:</label>
                        <textarea class="w3-input w3-border" name="update_description" placeholder="Type a short description about the Brand..." rows="4" required>{{$br->description}}</textarea>
                      </div>
                    </div>
                    <input type="hidden" name="id" value="{{$br->brand_id}}">
                    <input type="hidden" name="_token" id="_token_{{$br->brand_id}}" value="{{csrf_token()}}">
                    <div class="w3-col l12 w3-center">
                      <button type="submit" id="updateForm_{{$br->brand_id}}" class="btn theme_bg"> Save Changes </button>
                    </div>
                    <div class="col-lg-offset-3 col-lg-6 w3-center" id="update_formOutput_{{$br->brand_id}}"></div>
</form>
                  </div>
                
              </div>
              <script type="text/javascript">
                $("#updateBrandForm_{{$br->brand_id}}").on('submit', function(e) {
                  e.preventDefault(); 
                  $.ajaxSetup({
                    headers: {
                      'X-CSRF-Token': $('#_token_{{$br->brand_id}}').val()
                    }
                  });
                  $.ajax({
                    url: "/updateBrand", 
                    // point to server-side PHP script
                    data: new FormData(this),
                    type: 'POST',
                    contentType: false, 
                    // The content type used when sending data to the server.
                    cache: false, 
                    // To unable request pages to be cached
                    processData: false,
                    beforeSend: function(){
                      $('#update_formOutput_{{$br->brand_id}}').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Updating Changes...</b></span>');
                    },
                    success: function(data){
                      $('#update_formOutput_{{$br->brand_id}}').html(data);
                      window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                          $(this).remove(); 
                        });
                        location.reload();
                      }, 3000);
                    },
                    error:function(data){
                      $('#update_formOutput_{{$br->brand_id}}').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

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
              <!-- modal body ends -->
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>

</div>
<!-- add brand div ends -->

<!-- Add architects div -->


<div class="w3-col l12 w3-white w3-round w3-padding w3-margin-top theme_text">
  <h4 class="theme_text"><i class="fa fa-building"></i> Add Architect:</h4>
  <div id="archOutput"></div>
  <!-- add architect form -->
  <div class="w3-col l12">
    <div class="col-lg-3"></div>
    <div class="w3-col l6" style="border:1px dotted">
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
            <input type="number" min="9999999999" name="arch_mobile" class="w3-input w3-border" placeholder="Enter Architect Mobile Number">
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
    <form id="archListForm">
    <table id="datatable" class="table table-striped table-bordered">

      <thead>
        <tr>
          <th class="w3-center">#</th>
          <th class="w3-center">Name</th>
          <th class="w3-center">Address</th>
          <th class="w3-center">LandLine</th>
          <th class="w3-center">Mobile</th>
          <th class="w3-center">Email-Id</th>
          <th class="w3-center">Added-on</th>
          <th class="w3-center">Action</th>
        </tr>
      </thead>


      <tbody>
        @if($arch!='')
        @foreach($arch as $ar)
        <tr>
          <td><input type="checkbox" class="w3-input" value="{{$ar->arch_email}}" name="architect_list[]" id="arch_list_{{$ar->arch_id}}"></td>
          <td>{{$ar->arch_name}}</td>
          <td>{{$ar->arch_address}}</td>
          <td>@if($ar->arch_landline=='0')N/A @else{{$ar->arch_landline}}@endif</td>
          <td>@if($ar->arch_mobile=='0')N/A @else{{$ar->arch_mobile}}@endif</td>
          <td>{{$ar->arch_email}}</td>
          <td>{{date("d M Y", strtotime($ar->added_on))}}</td>
          <td class="w3-center"><a ng-click="removeArch('{{$ar->arch_id}}')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="7" class="w3-center theme_text">No Architect Available</td>
        </tr>
        @endif                        
      </tbody>
    </table>
    <button class="theme_bg btn w3-small" type="submit" id="SendMailBtn" style="margin: 0"><i class="fa fa-paper-plane w3-medium"></i> Send Mail to Marked</button>
    <span id="ArchMailErrMsg"></span>
  </form>

  </div>

</div>


<!-- add architect div ends -->
</div>


</div>
<script src="{{ asset('assets/js/module/admin/dashboard.js') }}"></script>
<!-- /page content -->
@endsection


