<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
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
     * Show the Brands page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // get all brand details
        $brands = DB::select('select * from brand_tab');
        return view('brands',['brands'=>$brands]);
    }
    
    /**
     * Show the Brands page by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBrand(Request $request)
    {
        //print_r(base64_decode($request->segment(3)));die();
        // get all brand details
        $brand_details = DB::select('select * from brand_tab where brand_id=?',[base64_decode($request->segment(3))]);

        // get related products from DB
        $related_products = DB::table('product_tab')
        ->select('*')
        ->where('product_tab.brand_id', '=', base64_decode($request->segment(3)))
        ->get();
        if($related_products->isEmpty()){
            $related_products='';   //if not found
        }


        // get related projects from DB
        $related_projects = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('*')
        ->where('product_tab.brand_id', '=', base64_decode($request->segment(3)))
        ->get();
        if($related_projects->isEmpty()){
            $related_projects='';   //if not found
        }

        return view('brands_info',['brand_details'=>$brand_details[0],'related_products'=>$related_products,'related_projects'=>$related_projects]);
    }
}
