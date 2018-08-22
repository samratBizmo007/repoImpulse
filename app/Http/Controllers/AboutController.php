<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
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
     * Show the Services page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // get all brands from DB
        $brands = DB::select('select * from brand_tab order by status limit 12');
        return view('aboutus',['all_brands'=>$brands]);
    }
}
