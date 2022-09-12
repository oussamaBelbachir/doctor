<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index(){
     
        if(Auth::user()->role == "2"){
            return view("doctor.dashboard");
        }
        return view("admin.dashboard");
    }

    public function profileView(){
        return view("user.profile");
    }

}
