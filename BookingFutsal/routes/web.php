<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Userprofilecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::controller(LapanganController::class)->group(function(){
    Route::get('/jadwal-lapangan', 'jadwal');
    Route::get('/pesan-lapangan', 'pesanview');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->middleware('guest');
    Route::post('/login','Authenticate')->middleware('guest');
    Route::post('/logout','Logout')->middleware('auth');
});

Route::controller(RegisterController::class)->middleware('guest')->group(function(){
    Route::get('/register','index');
    Route::post('/register/create','RegisterUser');
    Route::get('/register/add-picture/view/{id}','AddPict');
    Route::post('/register/add-picture','UploadImg');
    Route::get('/register/add-pict/skip/{id}','UploadImgDefault');
});

Route::controller(Userprofilecontroller::class)->middleware('auth')->group(function(){
    Route::get('/profile/view/{id}','index');
    Route::get('/profile/edit/{id}','EditProfile');
    Route::post('/profile/update','UpdateProfile');
    Route::get('/v/reset-password','ResetPassView');
    Route::get('/e/new-password','EditPassword');
});

Route::get('/v/check-email',[MailController::class, 'SendEmailView'])->middleware('auth');

/* ==================== Route Halama Admin ================================== */
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard','index');
    Route::get('/admin/profile/view','ProfileView');
});
Route::controller(DashboardController::class)->group(function(){

    Route::get('/admin/daftar-pesanan','DaftarPesananView');
    Route::get('/admin/pesanan/unconfirmed','UnconfirmedView');
    Route::get('/admin/konfigurasi','KonfigurasiView');
    Route::get('/admin/daftar-user','DaftarUser');
});
