<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application admin project section.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all products from DB
        $products = DB::select('select * from product_tab order by prod_name ASC');

        // get all products from DB
        $projects = DB::select('select * from project_tab order by project_id DESC');

        return view('admin.project',['products'=>$products,'projects'=>$projects]);
    }


    /**
     * get projects into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllProjects()
    {
        
        // get all projects
        $projects = DB::select('select * from project_tab order by project_id DESC');
        echo json_encode($projects);
    }


    /**
     * get project details by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject(Request $request)
    {
       // print_r($request->input('project_id'));die();
        // get details products from DB
        // get related projects from DB
        $projects = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('*')
        ->where('project_tab.project_id', '=', $request->input('project_id'))
        ->get();
        if($projects->isEmpty()){
            $projects='';   //if not found
        }
        //$projects = DB::select('select * from project_tab where project_id=?',[$request->input('project_id')]);
        print_r($projects);
    }
    
    /**
     * Insert project into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProject(Request $request)
    {
       
        $image_json='';
        $vid_json='';
        $ongoing='0';
        $end_date=$request->input('end_date');
 //
        if($request->input('ongoingcheck')!=''){
            $ongoing='1';
        }

        if($request->input('end_date')==''){
            $end_date='0000-00-00';
        }

        // image uploading code
        if($request->hasfile('proj_image'))
        {
            //$img_arr=array();
            foreach($request->file('proj_image') as $image)
            {
                $extension=$image->getClientOriginalExtension();
                $filename =$request->input('project_name').'_'.time().'_'.uniqid().'.'.$extension;
                $service_path=$image->move('template/images/projects', $filename);
                $img_arr[] = 'template/images/projects/'.$filename;  
            }
            $image_json=json_encode($img_arr);
        }

        
          // video link uploading code
        if($request->has('proj_video') && is_array($request->proj_video) && count($request->proj_video))
        {
            foreach($request->input('proj_video') as $vid)
            {
                $vid_arr[] = $vid;  
            }
            $vid_json=json_encode($vid_arr);
        }
         //print_r($file_json);die();
        
        // insert category name into  db
        $checkInsert = DB::insert('insert into project_tab (proj_name,proj_description,proj_images,proj_videos,start_date,end_date,ongoing,client_name,status) values(?,?,?,?,?,?,?,?,?)', [$request->input('project_name'),$request->input('project_description'),$image_json,$vid_json,$request->input('start_date'),$end_date,$ongoing,$request->input('client_name'),0]);
        //print_r($_POST);die();

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Project added successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Project was not added!</div>';
        }
    }

    /**
     * Delete product from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delProject(Request $request)
    {
        // delete product from  db
        $checkDelete = DB::delete('delete from project_tab where project_id = ?', [$request->input('project_id')]);
        //return redirect()->to('admin/services#allServices');

        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Project deleted successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Project was not deleted!</div>';
        }
    }


    /**
     * update product into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateChanges(Request $request)
    {      
        // update product details  db
        $checkUpdate = DB::update('update product_tab set brand_id = ?,cat_id=?,prod_name=?,prod_description=?,prod_image=?,prod_video=?,prod_files=? where product_id=?', [$request->input('update_product_brand'),$request->input('update_product_category'),$request->input('update_product_name'),$request->input('update_product_description'),$request->input('originalImages'),$request->input('originalVids'),$request->input('originalFiles'),$request->input('id')]);
        
        if($checkUpdate){
            echo '<div class="alert alert-success alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Product updated successfully.</div>';
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> You havent changed anything! Product not updated</div>';
        }
    }


    /**
     * mark Trending product into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function markTrending(Request $request)
    {      
        $pid=base64_decode($request->segment(4));

        // mark product trending  db 
        $checkUpdate =DB::table('product_tab')
        ->where('product_id', $pid)
        ->update(['trending' => '1']);

        $divVal=base64_encode($request->segment(4));
        return redirect()->to('admin/product#'.$divVal);
    }

}

