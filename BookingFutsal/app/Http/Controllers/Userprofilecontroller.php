<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userprofilecontroller extends Controller
{
    /*Masuk kehalaman index profile,
    bisa untuk melihat profile user, dan mengedit data informasi tentang user tersebut
    */
    public function index()
    {
        return view('user-profile.view-profile',[
            "title" => "Profile"
        ]);
    }

    public function EditProfile(){
        return view('user-profile.edit-profile',[
            "title" => "Edit Profile"
        ]);
    }
}
