<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LapanganController extends Controller
{
    //Halaman Jadwal-Lapangan
    public function jadwal(){
        return view('jadwal-lapangan',[
            "title" => "Jadwal Lapangan"
        ]);
    }

    //Halaman view Pesan Lapangan
    public function pesanview(){
        if(Auth::check()){
            return view('pesan-lapangan',[
                "title" => "Pesan Lapangan"
            ]);
        }

        return back();
    }
}
