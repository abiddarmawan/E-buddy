<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/vidio', function () {
    return view('vidio');
});

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
Route::post('/login',[LoginController::class,'auth']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');
Route::put('/profile/{user:name}',[ProfileController::class,'update'])->middleware('auth');
Route::delete('/profile/photo/{user:name}',[ProfileController::class,'delete'])->middleware('auth');
Route::get('/kalkulator',[kalkulatorController::class,'index'])->middleware('auth');
Route::get('/histori/{user}',[CatatanController::class,'index'])->middleware('auth');
Route::delete('/histori/delete/{berat_id}',[CatatanController::class,'delete'])->middleware('auth');
Route::post('/kalkulator',[kalkulatorController::class,'store'])->middleware('auth');
Route::get('/menuform',[AdminController::class,'index'])->middleware('admin');
Route::post('/menuform',[AdminController::class,'store'])->middleware('admin');
Route::get('/market',[MarketController::class,'index'])->middleware('auth');
Route::delete('/menu/del/{menu}',[AdminController::class,'delete'])->middleware('admin')->middleware('auth');
Route::get('/menu/edit/{menu}',[AdminController::class,'edit'])->middleware('admin')->middleware('auth');
Route::put('/menu/edit',[AdminController::class,'update'])->middleware('admin')->middleware('auth');
Route::post('/menu/add/{menu}',[PesanController::class,'store'])->middleware('auth');
Route::get('/order/{pesan}',[OrderController::class,'index'])->middleware('auth');
Route::post('/order/t/{order}',[OrderController::class,'order'])->middleware('auth');
Route::delete('/order/del/{order_id}',[OrderController::class,'delete'])->middleware('auth');
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/riwayatorder',[AdminController::class,'order'])->middleware('admin')->middleware('auth');


