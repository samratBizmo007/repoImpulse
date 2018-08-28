<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
     * Show the Category page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('categories',['category_details'=>$request->segment(2)]);
    }

    /**
     * Show the Category page by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategory(Request $request)
    {
        //print_r(base64_decode($request->segment(3)));die();
        $cat_details='';
        // get all brand details
        $category_details = DB::select('select * from category_tab where cat_id=?',[base64_decode($request->segment(3))]);
        if(!empty($category_details)){
            $cat_details=$category_details[0];
        }
        // get all products and categories
        $menuCategories = DB::select('select * from category_tab order by category_name');

        // get related products from DB
        $related_products = DB::table('product_tab')
        ->join('brand_tab', 'brand_tab.brand_id', '=', 'product_tab.brand_id')
        ->select('*')
        ->where('product_tab.cat_id', '=', base64_decode($request->segment(3)))
        ->get();
        if($related_products->isEmpty()){
            $related_products='';   //if not found
        }
        
        // get related brands from DB
        $related_brands = DB::table('product_tab')
        ->join('brand_tab', 'brand_tab.brand_id', '=', 'product_tab.brand_id')
        ->select('*')
        ->where('product_tab.cat_id', '=', base64_decode($request->segment(3)))
        ->orderBy('brand_tab.brand_id')
        ->get();
        if($related_brands->isEmpty()){
            $related_brands='';   //if not found
        }

        // get related projects from DB
        $related_projects = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('*')
        ->where('product_tab.cat_id', '=', base64_decode($request->segment(3)))
        ->orderBy('prod_proj_assoc_tab.project_id')
        ->get();
        if($related_projects->isEmpty()){
            $related_projects='';   //if not found
        }
        

        return view('categories',['category_details'=>$cat_details,'related_products'=>$related_products,'related_brands'=>$related_brands,'related_projects'=>$related_projects,'menuCategories' => $menuCategories]);
    }
    
}
