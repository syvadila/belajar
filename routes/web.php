<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('login',[App\Http\Controllers\LoginController::class,'index']);
Route::post('login',[App\Http\Controllers\LoginController::class,'login']);

Route::get('pendaftaran',[App\Http\Controllers\PendaftaranController::class,'index']);
Route::post('pendaftaran',[App\Http\Controllers\PendaftaranController::class,'pendaftaran']);



Route::get('/',[App\Http\Controllers\LandingPageController::class,'beranda']);
Route::get('asosiasi',[App\Http\Controllers\LandingPageController::class,'asosiasi']);
Route::get('jasa',[App\Http\Controllers\LandingPageController::class,'jasa']);
Route::get('katalog',[App\Http\Controllers\LandingPageController::class,'katalog']);




Auth::routes(['login'=>false,'register'=>false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);


// Admin
Route::get('pendaftar',[App\Http\Controllers\Admin\PendaftarController::class,'index']);
Route::get('pendaftarverif/{id}',[App\Http\Controllers\Admin\PendaftarController::class,'verifikasi']);
Route::get('pendaftartolakverif/{id}',[App\Http\Controllers\Admin\PendaftarController::class,'tolakverifikasi']);


Route::get('katalogadmin',[App\Http\Controllers\Admin\KatalogController::class,'index']);
Route::post('katalogadmin',[App\Http\Controllers\Admin\KatalogController::class,'store']);
Route::post('katalogadmin/{id}',[App\Http\Controllers\Admin\KatalogController::class,'update']);
Route::get('katalogadmin/hapus/{id}',[App\Http\Controllers\Admin\KatalogController::class,'destroy']);

Route::get('konsultasi',[App\Http\Controllers\Admin\KonsultasiController::class,'index']);

Route::get('design',[App\Http\Controllers\Admin\DesignController::class,'index']);


// User
Route::post('user/konsultasi/cekjadwal',[App\Http\Controllers\User\KonsultasiController::class,'cekjadwal']);

Route::get('user/konsultasi',[App\Http\Controllers\User\KonsultasiController::class,'index']);
Route::post('user/konsultasi',[App\Http\Controllers\User\KonsultasiController::class,'kirimjadwal']);

Route::get('user/design',[App\Http\Controllers\User\DesignController::class,'index']);
Route::post('user/design',[App\Http\Controllers\User\DesignController::class,'pesandesign']);

