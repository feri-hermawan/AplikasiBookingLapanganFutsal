<?php

use App\Http\Controllers\AdminController;
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

Route::get('/login',[LoginController::class,'index']);
Route::controller(RegisterController::class)->group(function(){
    Route::get('/register','index');
    Route::get('/register/add-picture','AddPict');
});

Route::controller(Userprofilecontroller::class)->group(function(){
    Route::get('/profile/view','index');
    Route::get('/profile/edit','EditProfile');
    Route::get('/v/reset-password','ResetPassView');
    Route::get('/e/new-password','EditPassword');
});

Route::get('/v/check-email',[MailController::class, 'SendEmailView']);

/* ==================== Route Halama Admin ================================== */
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard','index');
    Route::get('/admin/profile/view','ProfileView');
});
