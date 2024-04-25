<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\PostController;
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
Route::get('/videourl', [MainpanelController::class, 'index']);
Route::get('/Search', [SearchController::class, 'search'])->middleware('auth');

Route::get('/post', [PostController::class, 'post'])->name('post')->middleware('auth');
Route::post('/post', [PostController::class, 'move'])->name('post.move');
Route::delete('/post', [PostController::class, 'destroy'])->name('post.delete');

Route::get('/Account', [AccountController::class, 'Account'])->middleware('auth');
Route::post('/Account', [AccountController::class, 'Account'])->name('Account');

Route::get('/Register', [AuthController::class, 'create'])->name('Register')->middleware('guest');
Route::post('/Register', [AuthController::class, 'store'])->name('Register.store');

Route::get('/Login', [AuthloginController::class, 'create'])->name('Login')->middleware('guest');
Route::post('/Login', [AuthloginController::class, 'authenticate'])->name('Login');
Route::post('/Logout', [AuthloginController::class, 'logout'])->name('Logout');

Route::get('/Cloud', [CloudController::class, 'Cloud'])->middleware('auth');
