<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $val='Pune';
        if(isset($_COOKIE['Location'])) {
            $val=$_COOKIE['Location'];
        } 

        $loc_val='0';
        if($val=='Pune'){
            $loc_val='1';
        }
        // if($val=='OPune'){
        //     $loc_val='2';
        // }

        // get all categories from DB
        $categories = DB::select('select * from category_tab');

        // get all brands from DB
        $brands = DB::select('select * from brand_tab where status=0 limit 6');

        // get all projects from db
        $all_projects = DB::select('select * from project_tab order by project_id desc');

        // get all products from DB
        $products = DB::table('product_tab')
        ->join('brand_tab', 'product_tab.brand_id', '=', 'brand_tab.brand_id')
        ->join('category_tab', 'product_tab.cat_id', '=', 'category_tab.cat_id')
        ->select('*')
        ->where('product_tab.location','=',$loc_val)
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

        return view('index',['categories'=>$categories,'brands'=>$brands,'products'=>$products,'services'=>$services,'all_projects'=>$all_projects]);
    }

    public function setLocation(Request $request){
        $val='Pune';
        if($request->segment(3)=='2'){
            $val='OPune';
        }
        setcookie('Location', $val, time() + (86400 * 30), "/");
        return redirect()->to('/');
    }
}
