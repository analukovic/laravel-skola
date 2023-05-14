<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


//registracija
Route::get('/',[UserController::class,'create']);

Route::post('/users',[UserController::class,'store']);

Route::get('/login',[UserController::class,'login']);

Route::post('/users/login',[UserController::class,'authenticate']);

Route::get('/sucessful',function(){return view('sucessful');});