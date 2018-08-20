<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application admin setting section.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get admin details
        $admin_details = DB::select('select * from users_tab where role=?',['admin']);
        
        return view('admin.settings',['admin_details'=>$admin_details[0]]);
    }


    /**
     * update admin email into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateEmail(Request $request)
    {      
        //print_r($_POST);die();
        // update admin [email] details  db
        $checkUpdate = DB::update('update users_tab set user_email = ? where role=?', [$request->input('admin_email'),'admin']);
        
        if($checkUpdate){
            echo '<span class="w3-text-green"><i class="fa fa-check"></i> Email Id updated successfully.</span>';
        }
        else{
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> You have not changed the Email value!</span>';
        }
    }

     /**
     * update admin password into DB.
     *
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {      
        //print_r($_POST);die();
        // update admin [password] details  db
        $checkUpdate = DB::update('update users_tab set password = ? where role=?', [$request->input('admin_password'),'admin']);
        
        if($checkUpdate){
            echo '<span class="w3-text-green"><i class="fa fa-check"></i> Password updated successfully.</span>';
        }
        else{
            echo '<span class="w3-text-red"><i class="fa fa-warning"></i> You have not changed the Password value!</span>';
        }
    }


    
}

