<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Userprofilecontroller extends Controller
{
    /*Masuk kehalaman index profile,
    bisa untuk melihat profile user, dan mengedit data informasi tentang user tersebut
    */
    public function index($id)
    {
        $data = User::where('id', $id)->with('bio')->first();

        return view('user-profile.view-profile',[
            "title" => "Profile",
            "data" => $data

        ]);
    }

    public function EditProfile($id){
        $data = User::where('id',$id)->with('bio')->first();

        if(auth()->user()->id == $id){
            return view('user-profile.edit-profile',[
                "title" => "Edit Profile",
                'data' => $data
            ]);
        }
        
        return back();
    }

    public function UpdateProfile(Request $req){
        $user_id = auth()->user()->id;
        $user = Bio::where('user_id',$user_id)->first();


        $validasi = $req->validate([
            "name" => 'required',
            "email" => 'required',
            "telepon" => 'required',
            'alamat' => 'required',
        ]);

        if($user->image and $req->image != null){
            Storage::delete($user->image);
            $image = $req->file('image')->store('profile-image');
        }
        else{
            $image = $user->image;
        }
        User::find($user_id)->update([
            "name" => $validasi['name'],
            "email" => $validasi['email'],
        ]);

        Bio::where('user_id', $user_id)->update([
            "alamat" => $validasi['alamat'],
            "telepon" => $validasi['telepon'],
            "image" => $image
        ]);

        return redirect('/profile/view/'.$user_id);
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
