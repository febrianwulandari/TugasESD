<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
//     return view('login');
// });

// Route::get('daftar', function () {
//     return view('register');
// });

// Route::get('home', function () {
//     return view('data');
// });

Route::get('/',[PagesController::class, 'login']);
Route::get('/home',[PagesController::class, 'home']);
Route::get('/penyewa',[PagesController::class, 'index']);
Route::get('/penyewa/create',[PagesController::class, 'create']);
Route::post('/penyewa/store',[PagesController::class, 'store']);
Route::get('/penyewa/edit/{id}',[PagesController::class, 'edit']);
Route::post('/penyewa/update',[PagesController::class, 'update']);
Route::get('/penyewa/destroy/{id}',[PagesController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\PagesController::class, 'login']);
Route::get('/user',[App\Http\Controllers\UserController::class, 'index']);
Route::get('/lapangan',[App\Http\Controllers\LapanganController::class, 'index']);
Route::get('/lapangan/create',[App\Http\Controllers\LapanganController::class, 'create']);
Route::post('/lapangan/store',[App\Http\Controllers\LapanganController::class, 'store']);
Route::get('/user/create',[App\Http\Controllers\UserController::class, 'create']);
Route::post('/user/store',[App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/destroy/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/lapangan/destroy/{id}',[App\Http\Controllers\LapanganController::class, 'destroy']);
Route::get('/lapangan/edit/{id}',[App\Http\Controllers\LapanganController::class, 'edit']);
Route::post('/lapangan/update',[App\Http\Controllers\LapanganController::class, 'update']);
Route::post('/user/update',[App\Http\Controllers\UserController::class, 'update']);
Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'edit']);