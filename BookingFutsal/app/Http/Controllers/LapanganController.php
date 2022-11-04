<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganController extends Controller
{
    //Halaman Jadwal-Lapangan
    public function jadwal(){
        return view('jadwal-lapangan');
    }

    //Halaman view Pesan Lapangan
    public function pesanview(){
        return view('pesan-lapangan');
    }
}
