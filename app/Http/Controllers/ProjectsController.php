<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
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
     * Show the Projects page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all products and categories
        $menuCategories = DB::select('select * from category_tab order by category_name');

        $all_projects = DB::select('select * from project_tab order by project_id desc');
        return view('projects',['all_projects'=>$all_projects,'menuCategories' => $menuCategories]);
    }

    /**
     * Show the Projects page by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject(Request $request)
    {
        $project_details='';
        // get all brand details
        $proj_details = DB::select('select * from project_tab where project_id=?',[base64_decode($request->segment(3))]);
        if(!empty($proj_details)){
            $project_details=$proj_details[0];
        }

        // get all products and categories
        $menuCategories = DB::select('select * from category_tab order by category_name');
        
        // get related projects from DB
        $related_products = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('*')
        ->where('project_tab.project_id', '=', base64_decode($request->segment(3)))
        ->orderBy('prod_proj_assoc_tab.product_id')
        ->get();
        if($related_products->isEmpty()){
            $related_products='';   //if not found
        }

        return view('project_detail',['proj_details'=>$project_details,'related_products'=>$related_products,'menuCategories' => $menuCategories]);
        //return view('project_detail')->with('project_id',$request->segment(2));
    }
}
