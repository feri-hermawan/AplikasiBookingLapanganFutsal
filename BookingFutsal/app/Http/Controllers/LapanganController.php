<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pesan-lapangan',[
            "title" => "Pesan Lapangan"
        ]);
    }
}
