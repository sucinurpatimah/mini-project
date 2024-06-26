<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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

// User
Route::get('/index', [UserController::class, 'index'])->name('user.index');
Route::get('/explore', [UserController::class, 'explore'])->name('user.explore');
Route::post('/search', [UserController::class, 'search'])->name('user.search');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/notifikasi', [UserController::class, 'notifikasi'])->name('user.notifikasi');
Route::get('/bookmark', [UserController::class, 'bookmark'])->name('user.bookmark');


// Post
Route::get('/posting', [PostController::class, 'addPost'])->name('post.addPost');
Route::post('/store', [PostController::class, 'storePost'])->name('post.store');
Route::get('/seePost/{id}', [PostController::class, 'seePost'])->name('post.seePost');
Route::post('/verify-password', 'AuthController@verifyPassword');


// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
