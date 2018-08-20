<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
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
     * Show the Products page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products');
    }

    /**
     * Show the Products page by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProduct(Request $request)
    {
        //print_r(base64_decode($request->segment(3)));die();
        $product_details='';
        // get all brand details
        $prod_details = DB::select('select * from product_tab where product_id=?',[base64_decode($request->segment(3))]);
        if(!empty($prod_details)){
            $product_details=$prod_details[0];
        }

        // get all products and categories
        $menuCategories = DB::select('select * from category_tab order by category_name');

        // get related projects from DB
        $related_projects = DB::table('prod_proj_assoc_tab')
        ->join('product_tab', 'product_tab.product_id', '=', 'prod_proj_assoc_tab.product_id')
        ->join('project_tab', 'project_tab.project_id', '=', 'prod_proj_assoc_tab.project_id')
        ->select('*')
        ->where('product_tab.product_id', '=', base64_decode($request->segment(3)))
        ->orderBy('prod_proj_assoc_tab.project_id')
        ->get();
        if($related_projects->isEmpty()){
            $related_projects='';   //if not found
        }

        return view('product_info',['prod_details'=>$product_details,'related_projects'=>$related_projects,'menuCategories' => $menuCategories]);
        //return view('product_info')->with('product_id',$request->segment(2));
    }
}
