
// Angular js for all contact form view
var app = angular.module("contactApp", ['ngSanitize']); 
app.controller("contactCtrl", function($scope,$http,$window) {



});

// ------------POST form data to PHP controller--------------
$(function () {
  $("#contactForm").submit(function () {
    dataString = $("#contactForm").serialize();
    var service=$('#contactform-service').val();

    $('#serviceError').html('');
    $('#formOutput').html('');
    if(service==0){
      $('#serviceError').html('  ERROR: Please select Service. ');
      if(navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {           
        $("html,body").animate({scrollTop:0},"slow");
        document.scrollingElement.scrollTop;
      } else {
       $("html,body").animate({scrollTop:0},"slow");
     }
     return false;
   }
   $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('#_token').val()
    }
  });
   $.ajax({
    type: "POST",
    url: "/contact-us/postContact",
    dataType : 'text',
    data: dataString,
    return: false, 
    beforeSend: function(){
      $("#submitButton").attr("disabled", true);
      $('#submitButton').html(' Sending Message... ');
    },
    success: function(data){
      $('#formOutput').html(data);
      $('form :input').val("");
      $('#submitButton').removeAttr("disabled");
      $('#submitButton').html(' Send Message ');
    },
    error:function(data){
      $('#submitButton').removeAttr("disabled");
      $('#formOutput').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

      $('#submitButton').html(' Send Message ');
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