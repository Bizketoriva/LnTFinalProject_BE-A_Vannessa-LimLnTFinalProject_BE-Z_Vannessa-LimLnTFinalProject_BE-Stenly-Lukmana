<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\registerController;

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
    return view('welcome',[
        'title' => 'Home Page'
    ]);
});

//Item Controller


//Category Controller
Route::get('/categories',[categoryController::class, 'index'])->middleware('is_admin');
Route::get('/create-category', [categoryController::class, 'createCategory'])->middleware('is_admin');
Route::POST('/store-category', [categoryController::class, 'store'])->middleware('is_admin');

//Login Controller
Route::get('/login', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::POST('/login', [loginController::class, 'authenticate']);
Route::POST('/logout', [loginController::class, 'logout'])->middleware('auth');

//Register Controller
Route::get('/register', [registerController::class, 'register'])->middleware('guest');
Route::POST('/register', [registerController::class, 'store']);