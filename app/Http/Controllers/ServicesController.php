<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        // $this->middleware('auth');
    }

    /**
     * Show the Services page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // get all services
        $services = DB::select('select * from service_tab');
        // if($services->isEmpty()){
        //     $services='';   //if not found
        // }
        return view('services')->with('services',$services);
    }
}
