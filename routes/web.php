<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('index');

//User Routes
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){

//Showtime Route
Route::get('/create_showtime', [ShowtimeController::class, 'create'])->name('showtime');
Route::post('/create_showtime', [ShowtimeController::class, 'createShowtime'])->name('createShowtime');

// //Movie Route
Route::get('/create_movies', [MovieController::class, 'create'])->name('movie');
Route::post('/create_movies', [MovieController::class, 'createMovie'])->name('createMovie');
});


