<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('product_info')->with('product_id',$request->segment(2));
    }
}
