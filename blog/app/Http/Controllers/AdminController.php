<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //登入
    function login(){
        return view('backend.login');
    }
}
