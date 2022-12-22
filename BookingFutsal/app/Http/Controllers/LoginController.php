<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Halaman Login index
    public function index(){
        return view('login.index-login',[
            "title" => "Login"
        ]);
    }

    public function Authenticate(Request $req){
        $validasi = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validasi)){
            $req->session()->regenerate();

            return redirect()->intended('/');
        }

        return back();
    }

    public function Logout(Request $req){

        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }
}
