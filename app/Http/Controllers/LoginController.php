<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tbl_employee_info;


use Redirect;
use Validator;
use Carbon\Carbon;
use Crypt;
use Session;
use DB;

class LoginController extends Controller
{
    public function index()
    {

    	$data['page'] = "Login";
    	return view('login.login',$data);
    }

    public function login(Request $request)
    {
    	$email      = $request->email;
        $password   = $request->password;

        $employee_info  = Tbl_employee_info::where('employee_email',$email)->where('password',$password)->first();
        
        if ($employee_info) 
        {
            
            Session::put('employee_email',$email);
            Session::put('employee_password',$password);
           
            return Redirect::to("/employee/dashboard");
        }
        else if($email == 'admin' && $password == 'admin')
        {
             return Redirect::to("/admin/dashboard");
        }
        else
        {
            return Redirect::back()->with('response','error');
        }
    }


    public function logout(Request $request)
    {
        Session::forget('employee_email');
        Session::forget('employee_password');
        
        return Redirect::to("/");
    }

    public function employee_login()
    {
        
    }
    
}
