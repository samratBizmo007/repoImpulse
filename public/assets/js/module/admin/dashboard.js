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


// ----function to remove category-----//
// function delCategory(cat_id) {
//   alert(cat_id);
//   $.confirm({
//     title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete this Category?</span>',
//     content: '',
//     type: 'red',
//     buttons: {
//       confirm: function () {
//         $.ajax({
//           url: '/delCategory/'+cat_id,
//           type: 'get',
//           success: function(data){
//             $('#errCategoryMsg').html(data);  
//             // $("#allCategoryDiv").load(location.href+"#allCategoryDiv>*",""); 
//             window.setTimeout(function() {
//              $(".alert").fadeTo(500, 0).slideUp(500, function(){
//                $(this).remove(); 
//              });
//            }, 3000);   
//           },
//           error:function(data){
//            $('#errCategoryMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
//            window.setTimeout(function() {
//              $(".alert").fadeTo(500, 0).slideUp(500, function(){
//                $(this).remove(); 
//              });
//            }, 5000);
//          }
//        });
//         return false;
//       },
//       cancel: function () {
//       }
//     }
//   });
// }
function delCategory(cat_id)
{
 $.confirm({
  title: '<label class="w3-large w3-text-red"><i class="fa fa-envelope"></i> Please confirm your action.</label>',
  content: '<span class="w3-medium">Do You really want to delete this category permanantly?</span>',
  type: 'red',
  buttons: {
    confirm: function () {
      $.ajax({
        type:'get',
        url:'/delCategory/'+cat_id,                                    
        success:function(response) {
          $('#errCategoryMsg').html(response);  
          window.setTimeout(function() {
           $(".alert").fadeTo(500, 0).slideUp(500, function(){
             $(this).remove(); 
           });
           location.reload();
         }, 1000);                                  }
        });
    },
    cancel: function () {}
  }
});
}


// ----function to open modal product------//
function openModal(id) {
  var modal=$('#brandModal_'+id);
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

// remove architect from db
$scope.removeArch = function (arch_id) {
  $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete this architect?</span>',
    content: '',
    type: 'red',
    buttons: {
      confirm: function () {
       $http({
         method: 'get',
         url: '/delArch/'+arch_id,
         //params: {product_id: product_id},
       }).then(function successCallback(response) {
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
$("#addCategoryForm").on('submit', function(e) {
 e.preventDefault(); 
 $.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('#_token').val()
  }
});
 $.ajax({
    url: "/addCategory", // point to server-side PHP script
    data: new FormData(this),
    type: 'POST',
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false,
    beforeSend: function(){
      $('#errCategoryMsg').html('<span class="w3-small w3-padding-small theme_text w3-margin-bottom w3-round"><i class="fa fa-circle-o-notch fa-spin w3-large"></i> <b>Adding category...</b></span>');
      $('#addCatBtn').attr('disabled',true);
    },
    success: function(data){
      $('#addCatBtn').removeAttr('disabled');
      $('#errCategoryMsg').html(data);  
      $('#category_name').val('');
      $("#allCategoryDiv").load(location.href + " #allCategoryDiv>*", ""); 
      window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
     }, 1500);   
    },
    error:function(data){
     $('#errCategoryMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');
     $('#addCatBtn').removeAttr('disabled');
     window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
     }, 5000);
   }
 });
return false;  //stop the actual form post !important!
});

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
     }, 1500);
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
     }, 1500);
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

// ------------send mail to architects--------------
$(function () {
  $("#archListForm").submit(function () {
    dataString = $("#archListForm").serialize();
    $('#ArchMailErrMsg').html('');
    
   $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('#_token').val()
    }
  });
   $.ajax({
    type: "POST",
    url: "send-mail/sendTrendingMail",
    dataType : 'text',
    data: dataString,
    return: false, 
    beforeSend: function(){
      $("#SendMailBtn").attr("disabled", true);
      $('#SendMailBtn').html('<i class="fa fa-spinner fa-spin w3-medium"></i> Sending Mail...');
    },
    success: function(data){
      $('#ArchMailErrMsg').html(data);
      $('#SendMailBtn').removeAttr("disabled");
      $('#SendMailBtn').html('<i class="fa fa-paper-plane w3-medium"></i> Send Mail to Marked');
      window.setTimeout(function() {
        window.location.reload();
      }, 1500);
    },
    error:function(data){
      $('#SendMailBtn').removeAttr("disabled");
      $('#ArchMailErrMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

      $('#SendMailBtn').html('<i class="fa fa-paper-plane w3-medium"></i> Send Mail to Marked');
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
        });
      }, 5000);
    }
  });
  return false;
      });
});
