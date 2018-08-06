// ---------- Dashboard page script file ----------------//


// ----function to preview selected image for brand------//
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

    var extension = $('#brand_image').val().split('.').pop().toLowerCase();
        // image validation
        if ($.inArray(extension, ['jpeg', 'png', 'jpg']) == -1) {
          $('#imgPreview').attr('src', '');
          $('#image_error').html('<i class="fa fa-remove"></i> ERROR: Please Select Image File. ');
          $("#addBrandbtn").attr("disabled", true);
        } else {
          $('#image_error').html('');
          reader.onload = function (e) {
           $('#imgPreview').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
         $('#addBrandbtn').removeAttr("disabled");
       }
     }
   }



// ----function to open modal product------//
function openModal(id) {
  var modal=$('#ProdModal_'+id);
  modal.addClass('in');
}


// Angular js for all product view
var app = angular.module("dashApp", ['ngSanitize']); 
app.controller("dashCtrl", function($scope,$http,$window) {

// remove product from db
$scope.removeBrand = function (brand_id) {
  $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete this brand?</span>',
    content: '',
    type: 'red',
    buttons: {
      confirm: function () {
       $http({
         method: 'get',
         url: '/delBrand/'+brand_id,
         //params: {product_id: product_id},
       }).then(function successCallback(response) {
        $scope.delMessage = response.data;
        $window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
          });
          location.reload();
        }, 10);

        // $scope.getServices();
      }); 
     },
     cancel: function () {
     }
   }
 });
}

// add new product
$("#addBrandForm").on('submit', function(e) {
 e.preventDefault(); 
$.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('#_token').val()
  }
});
$.ajax({
    url: "/addBrand", // point to server-side PHP script
    data: new FormData(this),
    type: 'POST',
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false,
    beforeSend: function(){
      $('#btnsubmit').html('<span class="w3-card w3-padding-small theme_text w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding...</b></span>');
    },
    success: function(data){
      $('#formOutput').html(data);
      $('#btnsubmit').html('<button class="btn w3-button theme_bg" id="addBrandbtn" type="submit"><i class="fa fa-plus"></i> Add Brand </button>');

      window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
       location.reload();
     }, 3000);
    },
    error:function(data){
     $('#formOutput').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
     $('#btnsubmit').html('<button class="btn w3-button theme_bg" id="addBrandbtn" type="submit"><i class="fa fa-plus"></i> Add Brand </button>');
     window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
     }, 5000);
   }
 });
return false;  //stop the actual form post !important!
});


// add new architect
$("#addArchitectForm").on('submit', function(e) {
 e.preventDefault(); 
$.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('#_token').val()
  }
});
$.ajax({
    url: "/addArch", // point to server-side PHP script
    data: new FormData(this),
    type: 'POST',
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false,
    beforeSend: function(){
      $('#archSubmit').html('<span class="w3-card w3-padding-small theme_text w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding Architect...</b></span>');
    },
    success: function(data){
      $('#archOutput').html(data);
      $('#archSubmit').html('<button class="btn theme_bg w3-center" type="submit"><i class="fa fa-plus"></i>  Add Architect </button>');

      window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
       location.reload();
     }, 3000);
    },
    error:function(data){
     $('#archOutput').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
     $('#archSubmit').html('<button class="btn theme_bg w3-center" type="submit"><i class="fa fa-plus"></i>  Add Architect </button>');
     window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
     }, 5000);
   }
 });
return false;  //stop the actual form post !important!
});

});
