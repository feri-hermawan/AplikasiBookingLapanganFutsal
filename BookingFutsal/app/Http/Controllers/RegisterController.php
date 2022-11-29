<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.create',[
            "title" => "Register" 
        ]);
    }

    public function AddPict(){
        return view('register.add-picture',[
            "title" => "Add Picture"
        ]);
    }
}
