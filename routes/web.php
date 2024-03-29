<?php

<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======
use App\Http\Controllers\Halaman_loginController;
use App\Http\Controllers\Halaman_registerController;
>>>>>>> 9ce3e591032e95558bbb200cfc709c579dac490b
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

<<<<<<< HEAD
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route:: group(['middleware' => 'guest'], function () {
    Route::get('/Register', [AuthController::class, 'Register'])->name('Register');
    Route::get('/Register', [AuthController::class, 'RegisterPost'])->name('Register');
    Route::get('/login', [AuthController::class, 'Login'])->name('Login');
});
=======
Route::get('/', [HomeController::class, 'index'] );

Route::get('/login', [Halaman_loginController::class, 'index'] );

Route::get('/halaman_register', [Halaman_registerController::class, 'index'] );
Route::post('/halaman_register', [Halaman_registerController::class, 'store'] );
>>>>>>> 9ce3e591032e95558bbb200cfc709c579dac490b
