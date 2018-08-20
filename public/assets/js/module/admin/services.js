// ---------- Services page script file ----------------//

// ----function to preview selected image for profile------//
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#serviceImagePreview').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}


// Angular js for all service view
var app = angular.module("serviceApp", ['ngSanitize']); 
app.controller("ServiceCtrl", function($scope,$http,$window) {

	// get all services in table box
	$scope.getServices= function(){
		$scope.dataTab=false;
		$scope.emptyTab=false;
		$http({
			method: 'get',
			url:'services/getAllServices'
		}).then(function successCallback(response) {
      // Assign response to services object
      
      if(response.data==''){
      	$scope.emptyTab=true;
      }
      else{
      	$scope.dataTab=true;
      	$scope.services = response.data;
      }
  }); 
	}
	$scope.getServices()


// remove service from table
$scope.removeService = function (service_id) {
  $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete this service?</span>',
    content: '',
    type: 'red',
    buttons: {
      confirm: function () {
       $http({
         method: 'get',
         url: 'services/delService',
         params: {service_id: service_id},
       }).then(function successCallback(response) {
        $scope.delMessage = response.data;
        $window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
          });
          //location.reload();
        }, 1500);
        $scope.getServices();
      }); 
     },
     cancel: function () {
     }
   }
 });
}

// add new service
$("#addService_form").on('submit', function(e) {
		e.preventDefault(); 
		
		// image file validation
		var extension = $('#service_image').val().split('.').pop().toLowerCase();
		if ($.inArray(extension, ['jpeg', 'png', 'jpg']) == -1) {
			$('#image_error').html('<i class="fa fa-remove"></i> ERROR: Please Select Image File. ');
			$('#btnsubmit').html('<button type="submit" title="add service" class="btn w3-red">Add new Service</button>');
		} else {

			var file_data = $('#service_image').prop('files')[0];
			var service_title = $('#service_title').val();
			var service_description = $('#service_description').val();
			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('service_title', service_title);
			form_data.append('service_description', service_description);
			$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('#_token').val()
				}
			});
			$.ajax({
            url: "services/addService", // point to server-side PHP script
            data: form_data,
            type: 'POST',
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            beforeSend: function(){
            	$('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding Service. Hold on...</b></span>');
            },
            success: function(data){
            	$('#formOutput').html(data);
            	$('#btnsubmit').html('<button type="submit" title="add service" class="btn w3-red">Add new Service</button>');
            	$('#service_title').val('');
            	$('#service_description').val('');
            	$('#service_image').val('');
            	$('#serviceImagePreview').attr('src', '');
            	$scope.getServices();
            	window.setTimeout(function() {
            		$(".alert").fadeTo(500, 0).slideUp(500, function(){
            			$(this).remove(); 
            		});
            	}, 2000);
            },
            error:function(data){
            	$('#formOutput').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
            	$('#btnsubmit').html('<button type="submit" title="add service" class="btn w3-red">Add new Service</button>');
            	window.setTimeout(function() {
            		$(".alert").fadeTo(500, 0).slideUp(500, function(){
            			$(this).remove(); 
            		});
            	}, 5000);
            }
        });
        return false;  //stop the actual form post !important!
    }

});

});
