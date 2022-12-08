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

    public function ResetPassView(){
        return view('reset password.reset-pass',[
            "title" => "Reset Password"
        ]);
    }

    public function EditPassword(){
        return view('reset password.create-new-password',[
            "title" => "Create New Password"
        ]);
    }
}
