<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');

//User
Route::get('/index', [UserController::class, 'index'])->name('user.index');
Route::get('/explore', [UserController::class, 'explore'])->name('user.explore');
Route::post('/search', [UserController::class, 'search'])->name('user.search');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/posting', [UserController::class, 'addPost'])->name('user.addPost');
Route::post('/store', [UserController::class, 'storePost'])->name('user.store');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
