<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
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
     * Show the Projects page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects');
    }

    /**
     * Show the Projects page by id.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProject(Request $request)
    {
        return view('project_detail')->with('project_id',$request->segment(2));
    }
}
