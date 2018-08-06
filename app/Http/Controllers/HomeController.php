<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all categories from DB
        $categories = DB::select('select * from category_tab');

        // get all brands from DB
        $brands = DB::select('select * from brand_tab');
        // if($brands->isEmpty()){
        //     $brands='';   //if not found
        // }

        // get all products from DB
        $products = DB::table('product_tab')
            ->join('brand_tab', 'product_tab.brand_id', '=', 'brand_tab.brand_id')
            ->join('category_tab', 'product_tab.cat_id', '=', 'category_tab.cat_id')
            ->select('*')
            ->orderBy('product_tab.trending','DESC')
            ->limit(6)
            ->get();
        if($products->isEmpty()){
            $products='';   //if not found
        }
        //$products = DB::select('select * from product_tab order by trending DESC limit 6');

        // get all services
        $services = DB::select('select * from service_tab limit 4');
        // if($services->isEmpty()){
        //     $services='';   //if not found
        // }

        return view('index',['categories'=>$categories,'brands'=>$brands,'products'=>$products,'services'=>$services]);
    }
}
