
// Angular js for all menu view
var app = angular.module("menuApp", ['ngSanitize']); 
app.controller("menuCtrl", function($scope,$http,$window) {

  $scope.showCat1=false;
  $scope.showCat2=false;
  $scope.showBrand1=false;
  $scope.showBrand2=false;

  $scope.showCat=function(){
    alert('hii');
    $scope.showCat1=true;
    $scope.showCat2=true;
    $scope.showBrand1=false;
    $scope.showBrand2=false;
  }

  $scope.showBrand=function(){
    $scope.showCat1=false;
    $scope.showCat2=false;
    $scope.showBrand1=true;
    $scope.showBrand2=true;
  }

});

// ------------POST form data to PHP controller--------------
$(function () {
  $("#quickContact").submit(function () {
    dataString = $("#quickContact").serialize();
    $('#formOutput').html('');
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $('#_token').val()
      }
    });
    $.ajax({
      type: "POST",
      url: "/contact-us/quickContact",
      dataType : 'text',
      data: dataString,
      return: false, 
      beforeSend: function(){
        $("#quick-contact-form-submit").attr("disabled", true);
        $('#quick-contact-form-submit').html(' Sending Email... ');
      },
      success: function(data){
        $('#formOutput').html(data);
        $('form :input').val("");
        $('#quick-contact-form-submit').removeAttr("disabled");
        $('#quick-contact-form-submit').html(' Send Email ');
        window.setTimeout(function() {
          window.location.reload();
        }, 1000);
      },
      error:function(data){
        $('#quick-contact-form-submit').removeAttr("disabled");
        $('#formOutput').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

        $('#quick-contact-form-submit').html(' Send Email ');
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
// POST method to add product ends here--------------------------

// apply job ------------------------------------------------//
$(function () {
  $("#jobform").submit(function () {
   var pos=$('#jobform-position').val();
   $('#pos_err').html('');

   if(pos==0){
    $('#pos_err').html('  ERROR: Please select appropriate position. ');
    return false;
  }

// dataString = $("#jobform").serialize();
// $('#formOutput').html(dataString);
// return false;
$.ajaxSetup({
  headers: {
    'X-CSRF-Token': $('#_token').val()
  }
});
$.ajax({
    url: "career/apply-job", // point to server-side PHP script
    data: new FormData(this),
    type: 'POST',
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false,
    beforeSend: function(){
      $("#jobform-apply").attr("disabled", true);
      $('#jobform-apply').html('Sending Application...');
    },
    success: function(data){
      $('#formOutput').html(data);
      $('#jobform-apply').removeAttr("disabled");
      $('#jobform-apply').html('Send Application');
      window.setTimeout(function() {
       $(".alert").fadeTo(500, 0).slideUp(500, function(){
         $(this).remove(); 
       });
       window.location.reload();
     }, 1000);
    },
    error:function(data){
     $('#jobform-apply').removeAttr("disabled");
     $('#formOutput').html('Failure!</strong> Make sure all fields are filled with appropriate values.');

     $('#jobform-apply').html('Send Application');
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
// apply job ends --------------------------------------------//

function setCookie(key, value) {
  var expires = new Date();
  expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
  document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

function getCookie(key) {
  var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
  return keyValue ? keyValue[2] : null;
}

// ------------POST form data to PHP controller--------------
$(function () {
  $("#widget-subscribe-form").submit(function () {
    dataString = $("#widget-subscribe-form").serialize();

    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $('#_token').val()
      }
    });
    $.ajax({
      type: "POST",
      url: "/get-connect/subscribeEmail",
      dataType : 'text',
      data: dataString,
      return: false, 
      beforeSend: function(){
        $("#subscribeButton").attr("disabled", true);
        $('#subscribeButton').html('Subscribing...');
      },
      success: function(data){
      $('#subscribeMsg').html(data);
      //$('form :input').val("");
      $('#subscribeButton').removeAttr("disabled");
      $('#subscribeButton').html('Subscribe');
      window.setTimeout(function() {
        window.location.reload();
      }, 1000);
    },
    error:function(data){
      $('#subscribeButton').removeAttr("disabled");
      $('#subscribeMsg').html('<strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.');

      $('#subscribeButton').html('Subscribe');
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
// POST method to add product ends here--------------------------