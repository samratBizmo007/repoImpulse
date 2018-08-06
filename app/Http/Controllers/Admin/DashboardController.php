<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
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
     * Show the application admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all categories from DB
        $categories = DB::select('select * from category_tab order by cat_id DESC');

        // get all brands from DB
        $brands = DB::select('select * from brand_tab order by brand_id DESC');

        // get all architects from DB
        $arch = DB::select('select * from architect_tab order by arch_id DESC');

        return view('admin.dash',['categories'=>$categories,'brands'=>$brands,'arch'=>$arch]);
    }

    /**
     * Insert category into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name'=>'required'
        ]);

        // insert category name into  db
        $checkInsert = DB::insert('insert into category_tab (category_name) values(?)', [$request->input('category_name')]);
        return redirect()->to('admin/dashboard');
    }

    /**
     * Delete category from DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function delCategory(Request $request)
    {
        // delete category name from  db
        $checkDelete = DB::delete('delete from category_tab where cat_id = ?', [$request->segment(2)]);
        return redirect()->to('admin/dashboard');
    }

    /**
     * insert architect into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addArch(Request $request)
    {
        $landline=$request->input('arch_landline');
        if($landline==''){
            $landline='0';
        }
        $mobile=$request->input('arch_mobile');
        if($mobile==''){
            $mobile='0';
        }
        $date=date('Y-m-d');

        // insert category name into  db
        $checkInsert = DB::insert('insert into architect_tab(arch_name,arch_email,arch_mobile,arch_landline,arch_address,added_on,status) values(?,?,?,?,?,?,?)', [$request->input('arch_name'),$request->input('arch_email'),$mobile,$landline,$request->input('arch_address'),$date,0]);
        //print_r($request->input('arch_address'));die();

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Architect added.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Architect addition failed!</div>';
        }
        //return redirect()->to('admin/dashboard');
    }

    /**
     * insert brand into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBrand(Request $request)
    {
       
        $file = $request->file('brand_image');
        // getting image extension
        $extension = $file->getClientOriginalExtension(); 
        $filename =$request->input('brand_name').'_logo.'.$extension;
        $brand_path=$file->move('template\images\brands', $filename);

        $link=$request->input('ext_link');
        if($link==''){
            $link='Null';
        }

        // insert category name into  db
        $checkInsert = DB::insert('insert into brand_tab (brand_name,brand_image,description,external_link) values(?,?,?,?)', [$request->input('brand_name'),$brand_path,$request->input('description'),$link]);

        if($checkInsert){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Brand added.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Brand addition failed!</div>';
        }
        //return redirect()->to('admin/dashboard');
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
        if($checkDelete){
            echo '<div class="alert alert-success alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success-</strong> Brand deleted.</div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade in alert-fixed w3-round"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Failure!</strong> Brand deletion failed!</div>';
        }
    }


}
