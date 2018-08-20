<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class TrendingController extends Controller
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
     * Show the Trending page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get trending products
        $prod_details = DB::select('select * from product_tab where trending=1');

        return view('trending',['trending_prods'=>$prod_details]);
    }
}
