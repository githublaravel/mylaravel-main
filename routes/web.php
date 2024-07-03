<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\OtherController;
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
//R = Reall

Route::get('/home', [OtherController::class, 'home']);

//Route For Blog
Route::prefix('/blog')->group(function () {
    Route::get('/read/{id}', [BlogController::class, 'show']);
    Route::get('/create', [BlogController::class, 'create']);
    Route::post('/create', [BlogController::class, 'R_create']);
    Route::get('/edit/{id}', [BlogController::class, 'edit']);
    Route::post('/edit', [BlogController::class, 'Redite']);
    Route::get('/destory/{id}', [BlogController::class, 'destory']);
});

//Route For User
Route::prefix('/user')->group(function () {
    Route::get('/profile', [UserController::class, 'show']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/edit', [UserController::class, 'R_edit']);
});

