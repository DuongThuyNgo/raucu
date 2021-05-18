<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function getLogin(){
        return view('backend.admin.login');
    }

    // public function postLogin(Request $request){
    //     $credentials=$request->only('email','password');
    //     if(Auth::guard('admins')->attempt($credentials)){

    //         return redirect()->view('backend.home.index');
    //     }
    //     return redirect()->back();
    // }
}