<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use GuzzleHttp\Middleware;

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

Route::get('/',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register']);

Route::get('/dashboard',[UserController::class,'dashboard'])
->name('dashboard')
->Middleware(ValidUser::class);
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/register/save',[UserController::class,'registerSave'])->name('registerSave');
Route::post('/login/save',[UserController::class,'loginSave'])->name('loginSave');
