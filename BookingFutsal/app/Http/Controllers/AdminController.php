<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index-dashboard',[
            "title" => "Dashboard"
        ]);
    }

    public function ProfileView(){
        return view('admin.profile.admin-profile-view',[
            "title" => "Admin Profile"
        ]);
    }
}
