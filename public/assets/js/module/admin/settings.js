// ---------- Services page script file ----------------//

// <!-- script to hide or show password input field -->
function show_pass(item){ 
  if(item.innerText=='Show'){
    item.innerText=' Hide ';
    document.getElementById('admin_password').type="text"; 
  }else{
    item.innerText=' Show ';
    document.getElementById('admin_password').type="password"; 
  }


} 
// <!-- script end -->

// Angular js for all service view
var app = angular.module("settingApp", ['ngSanitize']); 
app.controller("settingCtrl", function($scope,$http,$window) {

	
});

// ------------update email id post--------------
$(function () {
  $("#addEmailForm").submit(function () {
    dataString = $("#addEmailForm").serialize();
    $('#errEmailMsg').html('');
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $('#_token').val()
      }
    });
    $.ajax({
      type: "POST",
      url: "change-settings/updateEmail",
      dataType : 'text',
      data: dataString,
      return: false, 
      beforeSend: function(){
        $("#addEmailBtn").attr("disabled", true);
        $('#addEmailBtn').html('Updating...');
      },
      success: function(data){
        $('#errEmailMsg').html(data);
        $('#addEmailBtn').removeAttr("disabled");
        $('#addEmailBtn').html('Update Email');
        window.setTimeout(function() {
          window.location.reload();
        }, 1500);
      },
      error:function(data){
        $('#addEmailBtn').removeAttr("disabled");
        $('#errEmailMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

        $('#addEmailBtn').html('Update Email');
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

// ------------update password post--------------
$(function () {
  $("#addPasswordForm").submit(function () {
    dataString = $("#addPasswordForm").serialize();
    $('#errPasswordMsg').html('');
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $('#_token').val()
      }
    });
    $.ajax({
      type: "POST",
      url: "change-settings/updatePassword",
      dataType : 'text',
      data: dataString,
      return: false, 
      beforeSend: function(){
        $("#addPassBtn").attr("disabled", true);
        $('#addPassBtn').html('Updating...');
      },
      success: function(data){
        $('#errPasswordMsg').html(data);
        $('#addPassBtn').removeAttr("disabled");
        $('#addPassBtn').html('Update Password');
        window.setTimeout(function() {
          window.location.reload();
        }, 1500);
      },
      error:function(data){
        $('#addPassBtn').removeAttr("disabled");
        $('#errPasswordMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

        $('#addPassBtn').html('Update Password');
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
