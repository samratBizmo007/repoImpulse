@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Products Section</title>
<!-- page content -->
<div class="right_col" role="main" ng-app="prodApp" ng-cloak ng-controller="ProdCtrl">

	<div class="row" >
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="page_title">

				<div class="row x_title">
					<div class="col-md-6">
						<h4><i class="fa fa-plus"></i> Add Product </h4>
					</div>
				</div>
        <!-- <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      </div> -->
      <div class="alert alert-fixed"></div>
      <div class="row w3-padding w3-white theme_text">
      	<form id="addProduct_form" name="addProduct_form" enctype="multipart/form-data">
      		<div class="w3-col l12 s12 m12 w3-margin-top">
      			<div class="col-lg-1"></div>
      			<div class="col-lg-9">
      				<div class="col-lg-12 w3-padding-small">
      					<div class="col-lg-6">
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Product Category: <font color ="red"><span id ="pcat_star">*</span></font></label><br>
      							<select class="w3-input w3-border w3-margin-bottom" name="product_category" id="product_category">
      								<option value="0" class="w3-light-grey">Choose product category</option>
      								@foreach ($categories as $cat)
      								<option value="{{$cat->cat_id}}">{{strtoupper($cat->category_name)}}</option>
      								@endforeach
      							</select>
      							<span class="w3-text-red w3-small" id="cat_error"></span>
      						</div>
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Product Brand: <font color ="red"><span id ="pbrand_star">*</span></font></label><br>
      							<select class="w3-input w3-border w3-margin-bottom" name="product_brand" id="product_brand">
      								<option value="0" class="w3-light-grey">Choose product brand</option>
      								@foreach ($brands as $br)
      								<option value="{{$br->brand_id}}">{{strtoupper($br->brand_name)}}</option>
      								@endforeach
      							</select>
      							<span class="w3-text-red w3-small" id="brand_error"></span>
      						</div>
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Product Name: <font color ="red"><span id ="pname_star">*</span></font></label><br>
      							<input type="text" name="product_name" id="product_name" value="" placeholder="Add Product Name" class="w3-input w3-border w3-margin-bottom" required>
      						</div>
      					</div>
      					<div class="col-lg-6">
      						<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
      							<label> Product Description: <font color ="red"><span id ="pdescription_star">*</span></font></label><br>
      							<textarea class="w3-input w3-border w3-margin-bottom" name="product_description" id="product_description" rows="11" placeholder="Add Product Description" required></textarea>
      							<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
      						</div>
      					</div>


      				</div>
      				<!-- ---div for images -->
      				<div class="col-lg-12 w3-padding-tiny">
      					<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
      						<div class="w3-container w3-padding-small" style="border:1px dotted">
      							<div class="w3-col l12 ">
      								<label>Product Image: <font color ="red"><span id ="simage_star">*</span></font></label>
      								<input type="file" name="prod_image[]" id="prod_image_1" class="w3-input w3-border" onchange="readURL(this,1);" required>
      								<span class="w3-text-red w3-small" id="image_error_1"></span>
      							</div>
      							<div class="w3-col l12 w3-margin-top w3-margin-bottom">
      								<img src="" width="auto" id="prodImagePreview_1" height="150px" alt="Product Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
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
      								<input type="input" name="prod_video[]" id="prod_video_1" class="w3-input w3-border" onkeyup="readVideo(this,1);" placeholder="Copy & paste url link">
      								<span class="w3-text-red w3-small" id="video_error_1"></span>
      							</div>
      							<div class="w3-col l12 w3-margin-top">
                            	<iframe src="" class="w3-border" style="width: 100%;height: 120px;display:none" id="prodVideoPreview_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><!-- 
                            	<img src="" width="auto" id="prodVideoPreview_1" height="150px" alt="Video will be loaded here if link is correct" class=" w3-centerimg img-thumbnail"> -->
                            </div>
                        </div>
                        <div class="w3-col l12" id="addedmore_vidDiv"></div>
                        <div class="w3-col l12 w3-margin-bottom">
                        	<a id="add_morevideo" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add Video <i class="fa fa-plus"></i></b>
                        	</a>
                        </div>
                    </div>

                    <!-- Brochures div -->
                    <div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
                    	<div class="w3-container w3-padding-small" style="border:1px dotted">
                    		<div class="w3-col l12 ">
                    			<label>Brochures (optional):</label>
                    			<input type="file" name="prod_file[]" id="prod_file_1" class="w3-input w3-border">
                    			<span class="w3-text-red w3-small" id="file_error_1"></span>
                    		</div>
                    	</div>
                    	<div class="w3-col l12" id="addedmore_fileDiv"></div>
                    	<div class="w3-col l12 w3-margin-bottom">
                    		<a id="add_morefile" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add More <i class="fa fa-plus"></i></b>
                    		</a>
                    	</div>
                    </div>

                </div>
                <!-- ---div for images -->
            </div>
            <div class="col-lg-2"></div>
        </div>                   
        <div class="w3-col l12 w3-center" id="btnsubmit">
        	<button type="submit" title="Add new product" id="submitForm" class="btn w3-red">Save and Add Product</button>
        </div>
    </form>
    <div id="formOutput" class="w3-margin"></div>
    <div ng-html-bind="delMessage" class="w3-margin"></div>

</div>

</div>
</div>

</div>
<br />

<div class="row" >
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="page_title">

			<div class="row x_title">
				<div class="col-md-6">
					<h4><i class="fa fa-list"></i> All Products </h4>
				</div>

			</div>
			<div class="row w3-padding w3-white theme_text" id="allProductDiv">
				<div class="w3-col l12 w3-padding-small">
					
					<div class="w3-col l12">
						@foreach ($products as $prod)                                
						<div class="col-md-55" id="<?php echo base64_encode(base64_encode($prod->product_id)); ?>">
							<div class="thumbnail ">
								
								<div class="image view view-first w3-black">
									
									<div class="fslider" data-arrows="false" data-lightbox="gallery">

										<div class="flexslider">
											@if($prod->trending!=0)
											<div class="w3-col l3 w3-padding-small" style="z-index: 1;position: absolute;">
												<span class="fa fa-certificate fa-spin w3-border-black w3-text-orange w3-xlarge w3-left" title="Trending Product"></span>
											</div>
											@endif
											<div class="slider-wrap ">
												
												<?php 
												$image_arr=json_decode($prod->prod_image);
												?>
												@foreach($image_arr as $img)
												<div class="slide w3-center">
													<a href="{{URL::to('/')}}/{{$img}}" data-lightbox="gallery-item">
														<img class="image_fade" style="min-height: 100%" class="img" src="{{URL::to('/')}}/{{$img}}" alt="{{$prod->prod_name}} Gallery">
													</a>
												</div>
												@endforeach

												<?php 
												if($prod->prod_video!='[]' && $prod->prod_video!='[null]'){
													$video_arr=json_decode($prod->prod_video);
													?>
													@foreach($video_arr as $vid)
													<div class="slide w3-center">
														<iframe src="{{$vid}}" style="width: 100%;min-height: 100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
														<a href="{{URL::to('/')}}/{{$img}}" data-lightbox="gallery-item">
														</a>
													</div>
													@endforeach
													<?php 
												} 
												?>
												
											</div>
										</div>
									</div>
									<div class="mask" style="height: 120px;">
										<div class="tools tools-bottom" style="margin: 90px 0 0;">
											@if($prod->trending==0)
											<a href="{{URL::to('/')}}/admin/product/marktrending/<?php echo base64_encode($prod->product_id); ?>" style="padding-right: 1px" class="btn" title="Mark as Trending"><i class="fa fa-trophy"></i></a>
											@else
											<a href="{{URL::to('/')}}/admin/product/unmarktrending/<?php echo base64_encode($prod->product_id); ?>" style="padding-right: 1px" class="btn" title="Remove Trending"><i class="fa fa-unlink"></i></a>
											@endif
											<a class="btn" style="padding-right: 1px" data-toggle="modal" data-target="#ProdModal_{{$prod->product_id}}" onclick="openModal('{{$prod->product_id}}')" title="Edit Product"><i class="fa fa-pencil"></i></a>
											<a ng-click="removeProduct({{$prod->product_id}})" class="btn" style="padding: 0" title="Delete Product"><i class="fa fa-times"></i></a>
										</div>
									</div>
								</div>
								<div class="caption">
									<p><strong>{{$prod->prod_name}}</strong></p>
								</div>

								<!-- Modal to edit product -->
								<div class="modal fade bs-example-modal-lg" id="ProdModal_{{$prod->product_id}}" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">

											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
												</button>
												<h4 class="modal-title w3-center theme_text" id="Edit Product title"> <b>EDIT : {{$prod->prod_name}} </b></h4>
											</div>
											<div class="modal-body">
												<div class="row w3-padding w3-white theme_text">
													<form id="updateProduct_form_{{$prod->product_id}}" name="updateProduct_form_{{$prod->product_id}}" >
														<div class="w3-col l12 s12 m12 w3-margin-top">
															<div class="col-lg-1"></div>
															<div class="col-lg-9">
																<div class="col-lg-12 w3-padding-small">
																	<div class="col-lg-6">
																		<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																			<label> Product Category: <font color ="red"><span id ="update_pcat_star">*</span></font></label><br>
																			<select class="w3-input w3-border w3-margin-bottom" name="update_product_category" id="update_product_category_{{$prod->product_id}}">
																				<option value="0" class="w3-light-grey">Choose product category</option>
																				@foreach ($categories as $cat)
																				<option value="{{$cat->cat_id}}" <?php if($prod->cat_id==$cat->cat_id){ echo 'selected';} ?>>{{strtoupper($cat->category_name)}}</option>
																				@endforeach
																			</select>
																			<span class="w3-text-red w3-small" id="cat_error_{{$prod->product_id}}"></span>
																		</div>
																		<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																			<label> Product Brand: <font color ="red"><span id ="update_pbrand_star">*</span></font></label><br>
																			<select class="w3-input w3-border w3-margin-bottom" name="update_product_brand" id="update_product_brand_{{$prod->product_id}}">
																				<option value="0" class="w3-light-grey">Choose product brand</option>
																				@foreach ($brands as $br)
																				<option value="{{$br->brand_id}}" <?php if($prod->brand_id==$br->brand_id){ echo 'selected';} ?>>{{strtoupper($br->brand_name)}}</option>
																				@endforeach
																			</select>
																			<span class="w3-text-red w3-small" id="brand_error_{{$prod->product_id}}"></span>
																		</div>
																		<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																			<label> Product Name: <font color ="red"><span id ="update_pname_star">*</span></font></label><br>
																			<input type="text" name="update_product_name" id="update_product_name" value="{{$prod->prod_name}}" placeholder="Add Product Name" class="w3-input w3-border w3-margin-bottom" required>
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="w3-col l12 s12 m12 w3-small w3-padding-bottom">
																			<label> Product Description: <font color ="red"><span id ="update_pdescription_star">*</span></font></label><br>
																			<textarea class="w3-input w3-border w3-margin-bottom" name="update_product_description" id="update_product_description" rows="11" placeholder="Add Product Description" required>{{$prod->prod_description}}</textarea>
																			<input type="hidden" name="_token" id="_token_{{$prod->product_id}}" value="{{csrf_token()}}">
																		</div>
																	</div>


																</div>
																<!-- ---div for images -->
																<div class="col-lg-12 w3-padding-tiny">
																	<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
																		@foreach($image_arr as $img)
																		<div class="w3-container w3-padding-small w3-margin-bottom" style="border:1px dotted">
																			<div class="w3-col l12 ">
																				<label>Product Image: <font color ="red"><span id ="update_simage_star">*</span></font></label>
																			</div>
																			<div class="w3-col l12 w3-margin-top w3-margin-bottom">
																				<img src="{{URL::to('/')}}/<?php echo $img ?>" width="auto" id="update_prodImagePreview_1" height="150px" alt="Product Image will be displayed here once chosen." class=" w3-centerimg img-thumbnail">
																				
																			</div>
																		</div>
																		@endforeach
																		<input type="hidden" name="originalImages" value="{{$prod->prod_image}}">
																		<div class="w3-col l12" id="update_addedmore_imageDiv"></div>
																		<div class="w3-col l12 w3-margin-bottom">
																			<!-- <a id="update_add_moreimage" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add image <i class="fa fa-plus"></i></b> -->
																			</a>
																		</div>
																	</div>

																	<!-- video div -->
																	<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
																		<?php 
																		if($prod->prod_video!='[]' && $prod->prod_video!='[null]'){
																		?>
																		@foreach($video_arr as $vid)
																		<div class="w3-container w3-padding-small w3-margin-bottom" style="border:1px dotted">
																			<div class="w3-col l12 ">
																				<label>Embeded Video :</label>
																				
																				<iframe src="{{$vid}}" class="w3-border" style="width: 100%;height: 120px;display:block" id="update_prodVideoPreview_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

																				
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
																		<input type="hidden" name="originalVids" value="{{$prod->prod_video}}">
																		<div class="w3-col l12" id="update_addedmore_vidDiv"></div>
																		<div class="w3-col l12 w3-margin-bottom">
																			<!-- <a id="update_add_morevideo" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add Video <i class="fa fa-plus"></i></b> -->
																			</a>
																		</div>
																	</div>

																	<!-- Brochures div -->
																	<div class="w3-col l4 s12 m12 w3-small w3-padding-small w3-margin-bottom">
																		<div class="w3-container w3-padding-small">
																			<div class="w3-col l12 ">
																				<label>Uploaded Brochures :</label>
																				<?php 
																				
																				if($prod->prod_files!='[]' && $prod->prod_files!=''){
																					$file_arr=json_decode($prod->prod_files);
																					$count=1;

																					?>
																					@foreach($file_arr as $file)
																					<?php 
																					$arr=explode('/', $file);
																					$fname=$arr[4];
																					?>
																					<a class="w3-text-grey btn" target="_self" href="{{URL::to('/')}}/{{$file}}" download="{{$fname}}" style="padding:0"><b><i class="fa fa-download"></i> {{$fname}} </b></a>
																					@endforeach
																					<?php 
																				} 
																				else{
																					echo "<label class='w3-text-grey w3-small'>  No Files available </label>";
																				}
																				?>
																				<input type="hidden" name="originalFiles" value="{{$prod->prod_files}}">
																				<input type="hidden" name="id" value="{{$prod->product_id}}">
																			</div>
																		</div>
																		<div class="w3-col l12" id="update_addedmore_fileDiv"></div>
																		<div class="w3-col l12 w3-margin-bottom">
																			<!-- <a id="update_add_morefile" title="Add new Item" class="btn w3-text-red add_moreProduct w3-small w3-right"><b>Add More <i class="fa fa-plus"></i></b> -->
																			</a>
																		</div>
																	</div>

																</div>
																<!-- ---div for images -->
															</div>
															<div class="col-lg-2"></div>
															
														</div>                   
														<div class="w3-col l12 w3-center" id="update_btnsubmit_{{$prod->product_id}}">
															<button type="submit" title="Add new product" id="update_submitForm_{{$prod->product_id}}" class="btn w3-red"> Save Changes </button>
														</div>
													</form>
													<div id="update_formOutput_{{$prod->product_id}}" class="w3-margin"></div>
												</div>
											</div>
											<script type="text/javascript">
											// update new product
											$("#updateProduct_form_{{$prod->product_id}}").on('submit', function(e) {
												e.preventDefault(); 
												var cat=$('#update_product_category_{{$prod->product_id}}').val();
 var brand=$('#update_product_brand_{{$prod->product_id}}').val();

 if(cat==0){
  $('#cat_error_{{$prod->product_id}}').html('  ERROR: Please select Product Category. ');
  return false;
 }
 if(brand==0){
  $('#brand_error_{{$prod->product_id}}').html('  ERROR: Please select Product Brand. ');
  return false;
 }
												dataString = $("#updateProduct_form_{{$prod->product_id}}").serialize();
												//alert(dataString);return false;
												$.ajaxSetup({
													headers: {
														'X-CSRF-Token': $('#_token_{{$prod->product_id}}').val()
													}
												});
												$.ajax({
    url: "product/updateProduct", // point to server-side PHP script
    data: new FormData(this),
    type: 'POST',
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false,
    beforeSend: function(){
    	$('#update_btnsubmit_{{$prod->product_id}}').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Updating Changes...</b></span>');
    },
    success: function(data){
    	$('#update_formOutput_{{$prod->product_id}}').html(data);
    	$('#update_btnsubmit_{{$prod->product_id}}').html('<button type="submit" title="Add new product" id="update_submitForm_{{$prod->product_id}}" class="btn w3-red"> Save Changes </button>');

    	window.setTimeout(function() {
    		$(".alert").fadeTo(500, 0).slideUp(500, function(){
    			$(this).remove(); 
    		});
    	}, 5000);
    },
    error:function(data){
    	$('#update_formOutput_{{$prod->product_id}}').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
    	$('#update_btnsubmit_{{$prod->product_id}}').html('<button type="submit" title="Add new product" id="update_submitForm_{{$prod->product_id}}" class="btn w3-red"> Save Changes </button>');
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
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>

	</div>
</div>

</div>
<br />
</div>

<script src="{{ asset('assets/js/module/admin/product.js') }}"></script>
<!-- /page content -->
@endsection


