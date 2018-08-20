@extends('layouts.panel')

@section('admin')
<title>Impulse Trends | Career Section</title>
<!-- page content -->
<div class="right_col page_title" role="main" ng-app="PostJobApp" ng-cloak ng-controller="PostJobCtrl">
    <div class="container page_title">
        <div class="row x_title w3-margin-top"><div class="w3-padding"><h3><i class="fa fa-users"></i> Career Section</h3></div></div>
        <fieldset>
            <div class="row w3-padding">

                <div class="col-lg-6 w3-padding w3-margin-bottom" style="border:1px dotted">
                    <form id="add_jobform" role="form">
                        <div class="w3-col l12">
                            <h4><i class="fa fa-plus"></i> Post Job</h4>
                        </div>
                        <div class="col-lg-12 col-xs-12 col-sm-12 w3-margin-bottom">
                            <label>Job Title <b class="w3-text-red w3-medium">*</b></label>
                            <input type="text" name="job_title" ng-model="job.job_title" id="job_title" class="form-control" placeholder="Enter Job Title here..." value="" required>
                        </div>
                        <div class="col-lg-12 col-xs-12 col-sm-12 w3-margin-bottom">
                            <label>Job Description <b class="w3-text-red w3-medium">*</b></label>
                            <textarea class="required form-control" id="job_description" ng-model="job.job_description" name="job_description" rows="6" placeholder="Enter short Job description here..." required></textarea>
                        </div>
                        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                        <div class="col-lg-12 col-xs-12 col-sm-12 w3-margin-bottom">
                            <label for="operations">Requirements (optional) :</label>
                            <div class="w3-card">
                                <div class="w3-container w3-light-grey">
                                    <div class="w3-row w3-margin-top">
                                        <div class="w3-col l10 s10">
                                            <input type="text" name="skill_name" ng-model="job.addSkillbtn" id="skill_name" class="form-control" placeholder="List out Requirements" value="">
                                        </div>
                                        <div class="w3-col l2 s2">
                                            <button class="w3-button theme_bg" type="button" ng-click="addSkill()" title="add requirements"><i class="fa fa-plus w3-hide-large w3-hide-medium"></i><span class="w3-hide-small">Add</span></button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="skillAdded_field" value="@{{skillAdded_field}}" ng-model="skillAdded_field" id="skillAdded_field">
                                    <p class="w3-text-red w3-center">@{{errortext}}</p>
                                </div>
                                <ul class="w3-ul">
                                    <li ng-repeat="x in products">@{{x}}<span ng-click="removeSkill($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="w3-center">
                            <button  type="submit" title="Add Job" id="btnsubmit" class="w3-medium w3-button theme_bg"> Post Job</button>
                        </div>
                    </form>
                    <div class="w3-col l12" id="jobErrMsg"></div>
                </div>
                <div class="col-lg-6 w3-margin-bottom">
                    <h4><i class="fa fa-th-list"></i> All Jobs</h4>
                    <div class="w3-col l12" style="overflow: scroll;max-height: 420px">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr class="theme_bg">
                                    <th class="w3-center">Sr.No.</th>
                                    <th class="w3-center">Job Title</th>
                                    <th class="w3-center">Description</th>
                                    <th class="w3-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($all_jobs!='')
                                <?php $count=1; ?>
                                @foreach($all_jobs as $job)
                                <tr class="w3-center">
                                    <td>{{$count}}.</td>
                                    <td>{{$job->job_title}}</td>
                                    <td>{{$job->job_description}}</td>
                                    <td><a ng-click="removeJob('{{$job->job_id}}')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php $count++; ?>
                                @endforeach
                                @else
                                <tr>
                                    <td class="w3-center" colspan="4">No Jobs Available</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="" ng-bind-html="message"></div>
                
            </div>
        </fieldset>

        <div class="w3-col l12 w3-white w3-round w3-padding theme_text">
            <hr>
                <h3 class="theme_text"><i class="fa fa-copy"></i> Job Applications</h3>
            <div class="col-lg-1"></div>
            <div class="w3-col l10 w3-margin-top">
                    <table id="datatable" class="table table-striped table-bordered">

                      <thead>
                        <tr>
                          <th class="w3-center">#</th>
                          <th class="w3-center">Candidate Name</th>
                          <th class="w3-center">Candidate Email</th>
                          <th class="w3-center">Applied Position</th>
                          <th class="w3-center">Uploaded CV</th>
                          <th class="w3-center">Action</th>
                      </tr>
                  </thead>
                  @if($candidate_list!='')
                  <?php $count=0; ?>
        @foreach($candidate_list as $candidate)
        <?php $count++; ?>
        <tr>
            <td>{{$count}}.</td>
          <td>{{$candidate->candidate_name}}</td>
          <td>{{$candidate->candidate_email}}</td>
          <td>{{$candidate->job_title}}</td>
          <td>
            <a class="btn" target="_self" href="{{URL::to('/')}}/{{$candidate->cv}}" download="{{$candidate->candidate_name}}_CV" style="padding:0;margin: 0"><label class="w3-small w3-text-grey"><i class="fa fa-paperclip"></i> {{$candidate->candidate_name}}_CV</label></a>
          </td>
          <td class="w3-center"><a ng-click="removeApplication('{{$candidate->candidate_id}}')" title="Delete Application" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="7" class="w3-center theme_text">No Application Available</td>
        </tr>
        @endif


              </table>
      </div>
      <div class="col-lg-1"></div>

  </div>
</div>

</div>
<script src="{{ asset('assets/js/module/admin/job.js')}}"></script>
<!-- /page content -->
@endsection