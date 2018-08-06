<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class AdminloginController extends Controller
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
     * Show the application admin login.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    /**
     * check admin credentials.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkUSer(Request $request)
    {
        $request->validate([
            'Admin_username'=>'required',
            'Admin_password'=>'required | min:8'
        ]);

        $checkUSer = DB::select('select * from users_tab where username = ? and password= ? and role= ? ', [$request->input('Admin_username'),$request->input('Admin_password'),'admin']);
        $username='';
        $role='';

        // check user verification
        if(empty($checkUSer)){
            $login_error='Invalid credentials. Login Failed.';

            return view('admin.admin_login', ['login_error' => $login_error]);
        }
        else{
            foreach ($checkUSer as $user) {
                $username=$user->username;
                $role=$user->role;
            }
            $request->session()->put('sess_name',$username);
            $request->session()->put('sess_role',$role);
            //echo 'Hi '.$username.'! Login successful';
            return redirect()->to('admin/dashboard');
            //print_r($request->session()->all());
        }
        
        //print_r($username);
        //return view('user.index', ['users' => $users]);
        //print_r($request->input());
        //return view('admin.admin_login');
    }

    /**
     * Show the application admin forget module.
     *
     * @return \Illuminate\Http\Response
     */
    public function resetpassword()
    {
        // $request->validate([
        //     'Admin_email'=>'required'
        // ]);
        return view('admin.resetpassword');
    }
}
