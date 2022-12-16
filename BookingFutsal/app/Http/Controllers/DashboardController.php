<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    
    public function DaftarPesananView(){
        return view('admin.pesanan.daftar-pesanan',[
            "title" => "Daftar Pesanan"
        ]);
    }

    public function UnconfirmedView(){
        return view('admin.pesanan.unconfirmed',[
            "title" => "Pesanan Belum Terkonfirmasi"
        ]);
    }

    public function KonfigurasiView(){
        return view('admin.konfigurasi.config-view',[
            "title" => "Halaman Konfigurasi"
        ]);
    }

    public function DaftarUser(){
        return view('admin.daftar-user.user-view',[
            "title" => "Daftar User Terdaftar"
        ]);
    }
}
