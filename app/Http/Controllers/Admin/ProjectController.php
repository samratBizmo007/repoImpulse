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
     * get project details by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject(Request $request)
    {
        // get related projects from DB
        $projects = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('product_tab.product_id','product_tab.prod_name')
        ->where('project_tab.project_id', '=', $request->input('project_id'))
        ->get();
        if($projects->isEmpty()){
            $projects='';   //if not found
        }
        //$projects = DB::select('select * from project_tab where project_id=?',[$request->input('project_id')]);
        //print_r($projects);die();
        if($projects!=''){
            echo json_encode($projects);die();
            
        }
        else{
            echo '';
        }
        //echo json_encode($projects);
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
        $start_date=$request->input('start_date');
 //
        if($request->input('ongoingcheck')!=''){
            $ongoing='1';
        }

        if($request->input('end_date')==''){
            $end_date='0000-00-00';
        }
        if($request->input('start_date')==''){
            $start_date='0000-00-00';
            $end_date='0000-00-00';
        }
//echo $start_date;die();
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
//echo $image_json;die();
        
          // video link uploading code
        if($request->has('proj_video') && is_array($request->proj_video) && count($request->proj_video))
        {
            foreach($request->input('proj_video') as $vid)
            {
                $vid_arr[] = $vid;  
            }
            $vid_json=json_encode($vid_arr);
        }
         //print_r($vid_json);die();
        
        // insert category name into  db
        $checkInsert = DB::insert('insert into project_tab (proj_name,proj_description,proj_images,proj_videos,start_date,end_date,ongoing,client_name,status) values(?,?,?,?,?,?,?,?,?)', [$request->input('project_name'),$request->input('project_description'),$image_json,$vid_json,$start_date,$end_date,$ongoing,$request->input('client_name'),0]);
        //print_r($_POST);die();

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Project added successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Project was not added!</div>';
        }
    }


    /**
     * Insert product in project into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProductAssoc(Request $request)
    {       
        if($request->input('product_id')=='undefined' || $request->input('product_id')=='0' || $request->input('product_id')==''){
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> Please select appropriate product!</span>';
            die();
        }
        // check db 
        $checkProductExist = DB::select('select * from prod_proj_assoc_tab where project_id=? and product_id=?',[$request->input('project_id'),$request->input('product_id')]); 

        if($checkProductExist){
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> Product already associated! Choose other.</span>';
        } 
        else{
            // associate prodcut to project
        $checkInsert = DB::insert('insert into prod_proj_assoc_tab (project_id,product_id) values(?,?)', [$request->input('project_id'),$request->input('product_id')]);
        //print_r($_POST);die();

        if($checkInsert){
           echo '<span class="w3-text-green"><i class="fa fa-check"></i> Product added to Project.</span>';
        }
        else{
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> Product was not added to Project.</span>';
        }
        }  
        
    }

    /**
     * delete product in project into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delProductAssoc(Request $request)
    {       
        //print_r($_GET);die();
        // check db 
        $checkDelete = DB::delete('delete from prod_proj_assoc_tab where project_id=? and product_id=?',[$request->input('project_id'),$request->input('product_id')]); 

        if($checkDelete){
            echo '';
        } 
        else{            
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> Product was not deleted.</span>';
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
        //print_r($_POST);die();
        $ongoing='0';
        $end_date=$request->input('update_end_date');
        $start_date=$request->input('update_start_date');
 //
        if($request->input('update_ongoingcheck')!=''){
            $ongoing='1';
        }

        if($request->input('update_end_date')==''){
            $end_date='0000-00-00';
        }
        if($request->input('update_start_date')==''){
            $start_date='0000-00-00';
            $end_date='0000-00-00';
        }
        //print_r($start_date);die();
        // update product details  db
        $checkUpdate = DB::update('update project_tab set proj_name = ?,proj_description=?,proj_images=?,proj_videos=?,start_date=?,end_date=?,ongoing=?,client_name=? where project_id=?', [$request->input('update_project_name'),$request->input('update_project_description'),$request->input('update_image_json'),$request->input('update_vid_json'),$start_date,$end_date,$ongoing,$request->input('update_client_name'),$request->input('id')]);
        
        if($checkUpdate){
            echo '<div class="alert alert-success alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Product updated successfully.</div>';
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade in w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> You havent changed anything! Project not updated</div>';
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

