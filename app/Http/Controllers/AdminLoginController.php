<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;

class AdminLoginController extends Controller
{
    //
    //Where to redirect seller after login.
    protected $redirectTo = '/adminawal';

      //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard()
    {
      return Auth::guard('employees');
    }

    public function showLoginForm()
   {
       return view('admin.auth.login');
   }
}
