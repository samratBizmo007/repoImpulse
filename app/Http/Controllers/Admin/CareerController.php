<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the app admin career section
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        // get all jobs
        $all_jobs = DB::select('select * from job_tab where status=?',['0']);

        // get all applied candidate list
        //$candidate_list = DB::select('select * from candidates_tab where status=?',['0']);
        $candidate_list= DB::table('candidates_tab')
        ->join('job_tab', 'candidates_tab.applied_position', '=', 'job_tab.job_id')
        ->select('*')
        ->orderBy('candidates_tab.candidate_id','DESC')
        ->get();
        if($candidate_list->isEmpty()){
            $candidate_list='';   //if not found
        }
        return view('admin.career_section',['all_jobs'  =>  $all_jobs,'candidate_list'  =>  $candidate_list]);
    }

    /**
     * Post job in career section.
     *
     * @return \Illuminate\Http\Response
     */
    public function addJob(request $request) {
        //print_r($_POST);die();

        $requirements='';
        if($request->input('skillAdded_field')!='' && $request->input('skillAdded_field')!='[]'){
            $requirements=$request->input('skillAdded_field');
        }
        // insert job details into  db
        $checkInsert = DB::insert('insert into job_tab (job_title,job_description,required_skills,status) values(?,?,?,?)', [$request->input('job_title'), $request->input('job_description'), $requirements, '0']);

        if ($checkInsert) {
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Job added successfully.</div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Job was not added!</div>';
        }
    }


    /**
     * Delete job from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delJob(Request $request)
    {
        // delete category name from  db
        $checkDelete = DB::delete('delete from job_tab where job_id = ?', [$request->input('job_id')]);
        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Architect deleted.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Architect deletion failed!</div>';
        }
    }

    /**
     * Delete candidate application from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delApplication(Request $request)
    {
        // delete category name from  db
        $checkDelete = DB::delete('delete from candidates_tab where candidate_id = ?', [$request->input('candidate_id')]);
        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Application deleted.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Application deletion failed!</div>';
        }
    }

}
