/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Angular js for all service view
var app = angular.module("PostJobApp", ['ngSanitize']);
app.controller("PostJobCtrl", function ($scope, $http, $window) {
    $scope.products = [];

    // add skill to temp 
    $scope.addSkill = function () {
        $scope.errortext = "";
        if (!$scope.job.addSkillbtn) {
            return;
        }
        if ($scope.products.indexOf($scope.job.addSkillbtn) == -1) {
            $scope.products.push($scope.job.addSkillbtn);
            $scope.requirementJSON = JSON.stringify($scope.products);
            $scope.skillAdded_field = JSON.stringify($scope.products);
            // alert($scope.requirementJSON);
            $scope.job.addSkillbtn = '';
        } else {
            $scope.errortext = "This Requirement is already Added.";
        }
    };

    // remove skill from temp
    $scope.removeSkill = function (x) {
        $scope.errortext = "";
        $scope.products.splice(x, 1);
        $scope.requirementJSON = JSON.stringify($scope.products);
        $scope.skillAdded_field = JSON.stringify($scope.products);
    };


    // remove job from db
$scope.removeJob = function (job_id) {
  $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete this post?</span>',
    content: '',
    type: 'red',
    buttons: {
      confirm: function () {
       $http({
         method: 'get',
         url: '/admin/delJob',
         params: {job_id: job_id},
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


    // remove application from db
$scope.removeApplication = function (candidate_id) {
  $.confirm({
    title: '<h4 class="w3-text-red">Please confirm the action!</h4><span class="w3-medium">Do yo really want to delete the record?</span>',
    content: '',
    type: 'red',
    buttons: {
      confirm: function () {
       $http({
         method: 'get',
         url: '/admin/delApplication',
         params: {candidate_id: candidate_id},
       }).then(function successCallback(response) {
        //alert(response.data);
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
});

// ------------update password post--------------
$(function () {
  $("#add_jobform").submit(function () {
    dataString = $("#add_jobform").serialize();
    $('#jobErrMsg').html('');
    
    $.ajaxSetup({
      headers: {
        'X-CSRF-Token': $('#_token').val()
      }
    });
    $.ajax({
      type: "POST",
      url: "careers/post-job",
      dataType : 'text',
      data: dataString,
      return: false, 
      beforeSend: function(){
        $("#btnsubmit").attr("disabled", true);
        $('#btnsubmit').html('Posting Job...');
      },
      success: function(data){
        $('#jobErrMsg').html(data);
        $('#btnsubmit').removeAttr("disabled");
        $('#btnsubmit').html(' Post Job');
        window.setTimeout(function() {
          window.location.reload();
        }, 1500);
      },
      error:function(data){
        $('#btnsubmit').removeAttr("disabled");
        $('#jobErrMsg').html('<div class="alert alert-warning alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Something went wrong. Please refresh the page and try once again.</div>');

        $('#btnsubmit').html(' Post Job');
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