<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\PosttController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthloginController;
use App\Http\Controllers\MainpanelController;

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


Route::get('/', [HomeController::class, 'home']);
Route::get('/video-url', [MainpanelController::class, 'GET']);
Route::get('/Search', [SearchController::class, 'search']);

Route::get('/postt', [PosttController::class, 'postt']);
Route::get('/Account', [AccountController::class, 'Account']);

Route::get('/Register', [AuthController::class, 'index']);
Route::post('/Register', [AuthController::class, 'store']);

Route::get('/Login', [AuthloginController::class, 'Login']);
Route::get('/Login-1', [AuthloginController::class, 'Login'])->name('Login');

Route::get('/Cloud', [CloudController::class, 'Cloud']);
