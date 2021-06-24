<?php

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
//     return view('layout');
// });

// Route::get('/trang_chu', function () {
//     return view('layout');
// });
// front end 
Route::get('/', [HomeController::class,'index']);

Route::get('/trang_chu',  [HomeController::class,'index']);

// back end 
Route::get('/admin',   [AdminController::class,'index']);
Route::get('/dashboard',   [AdminController::class,'showDashboard']);