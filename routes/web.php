<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplController;
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

Route::get('/', [AuthController::class, 'show_signup'])->name('show_signup');
Route::post('/', [AuthController::class, 'signup'])->name('signup');
Route::get('/signin', [AuthController::class, 'show_signin'])->name('show_signin');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/user', [AuthController::class, 'user'])->name('user');
Route::get('/admin', [ApplController::class, 'index'])->name('index');
Route::post('/user/create', [ApplController::class, 'create'])->name('create');
Route::get('/{id}/regect', [ApplController::class, 'regect'])->name('regect');
Route::get('/{id}/accept', [ApplController::class, 'accept'])->name('accept');

