<?php

use App\Http\Controllers\Halaman_loginController;
use App\Http\Controllers\Halaman_registerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'] );

Route::get('/login', [Halaman_loginController::class, 'index'] );

Route::get('/halaman_register', [Halaman_registerController::class, 'index'] );
Route::post('/halaman_register', [Halaman_registerController::class, 'store'] );
