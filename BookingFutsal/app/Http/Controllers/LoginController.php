<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Halaman Login index
    public function index(){
        return view('login.index-login');
    }
}
