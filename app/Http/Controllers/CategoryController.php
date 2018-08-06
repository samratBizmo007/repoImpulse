<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
