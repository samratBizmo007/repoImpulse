<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the career page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all jobs
        $all_jobs = DB::select('select * from job_tab where status=?',['0']);

        return view('career',['all_jobs'   =>  $all_jobs]);
    }

    /**
     * Apply job for candidate
     *
     * @return \Illuminate\Http\Response
     */
    public function applyJob(request $request) {
        //print_r($_POST);die();
        if($request->hasfile('jobform-cvfile'))
        {
            $file = $request->file('jobform-cvfile');
        // getting image extension
            $extension = $file->getClientOriginalExtension(); 
            $filename =$request->input('jobform-name').'_CV.'.$extension;
            $cv_path=$file->move('uploads/files/career/CVs/'.$extension, $filename);
        }
        //echo $cv_path;die();
        // insert applied candidate details into  db
        $checkInsert = DB::insert('insert into candidates_tab (candidate_name,candidate_email,applied_position,cv,status) values(?,?,?,?,?)', [$request->input('jobform-name'),$request->input('jobform-email'),$request->input('jobform-position'),$cv_path,'0']);

        if($checkInsert){
            echo 'Thank You ! Your Application has been successfully send.';
        }
        else{
            echo 'Oops! Application was not send. Refresh the page and try again.';
        }
        // $requirements='';
        // if($request->input('skillAdded_field')!='' && $request->input('skillAdded_field')!='[]'){
        //     $requirements=$request->input('skillAdded_field');
        // }
        // // insert job details into  db
        // $checkInsert = DB::insert('insert into job_tab (job_title,job_description,required_skills,status) values(?,?,?,?)', [$request->input('job_title'), $request->input('job_description'), $requirements, '0']);

        // if ($checkInsert) {
        //     echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Job added successfully.</div>';
        // } else {
        //     echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Job was not added!</div>';
        // }
    }
}
