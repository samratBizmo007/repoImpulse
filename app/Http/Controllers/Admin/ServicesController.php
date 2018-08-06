<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class ServicesController extends Controller
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
     * Show the application admin product section.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all categories from DB
        // $categories = DB::select('select * from category_tab order by cat_id DESC');

        // get all brands from DB
        // $brands = DB::select('select * from brand_tab order by brand_id DESC');

        return view('admin.manage_services');
    }

    /**
     * get services into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllServices(Request $request)
    {
        
        // insert category name into  db
        $services = DB::select('select * from service_tab');
        echo json_encode($services);
    }

    /**
     * Insert services into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addService(Request $request)
    {
        $file = $request->file('file');
        // getting image extension
        $extension = $file->getClientOriginalExtension(); 
        $filename =uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;
        $service_path=$file->move('template/images/services', $filename);

        // insert category name into  db
        $checkInsert = DB::insert('insert into service_tab (service_title,service_description,service_image) values(?,?,?)', [$request->input('service_title'),$request->input('service_description'),$service_path]);

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Service added successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Service was not added!</div>';
        }
    }

    /**
     * Delete category from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delService(Request $request)
    {
        extract($_GET);
        // delete category name from  db
        $checkDelete = DB::delete('delete from service_tab where service_id = ?', [$service_id]);
        //return redirect()->to('admin/services#allServices');

        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Service deleted successfully.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Service was not deleted!</div>';
        }
    }


    /**
     * insert brand into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBrand(Request $request)
    {
        // validate image
        $request->validate([
            'brand_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('brand_image');
        // getting image extension
        $extension = $file->getClientOriginalExtension(); 
        $filename =$request->input('brand_name').'_logo.'.$extension;
        $brand_path=$file->move('template\images\brands', $filename);

        // insert category name into  db
        $checkInsert = DB::insert('insert into brand_tab (brand_name,brand_image) values(?,?)', [$request->input('brand_name'),$brand_path]);
        return redirect()->to('admin/dashboard');
    }

    /**
     * Delete brand from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delBrand(Request $request)
    {
        // delete category name from  db
        $checkDelete = DB::delete('delete from brand_tab where brand_id = ?', [$request->segment(2)]);
        return redirect()->to('admin/dashboard');
    }


}
