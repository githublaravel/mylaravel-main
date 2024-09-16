<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
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

//Basic
//r = Reall
Route::get('/', [OtherController::class, 'home']);

//Route For Blog
Route::prefix('/blog')->group(function () {
    Route::get('/read/{id}', [BlogController::class, 'show']);
    Route::post('/comment', [CommentController::class, 'create']);
});
//End Blog

//Route For User
Route::prefix('/user')->group(function () {
    Route::get('/profile', [UserController::class, 'show']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/edit', [UserController::class, 'r_edit']);
});
//End User

//Route For Question
Route::prefix('/question')->group(function () {
    Route::get('/read/{id}', [QuestionController::class, 'show']);
    Route::get('/create', [QuestionController::class, 'create']);
    Route::post('/create', [QuestionController::class, 'r_create']);
    Route::get('/edit/{id}', [QuestionController::class, 'edit']);
    Route::post('/edit', [QuestionController::class, 'r_edit']);
    Route::get('/delete', [QuestionController::class, 'destory']);
    Route::post('/chat', [ChatController::class, 'create']);
});

//Route For AUTH
Route::prefix('/auth')->group(function(){
    Route::get('/register',[AuthController::class,'show_register']);
    Route::get('/login',[AuthController::class,'show_login']);
});

//End Question
//End basic

//Route For Admins
//a = admin
Route::prefix('/admin')->group(function () {
    Route::prefix('/blog')->group(function () {
        Route::get('/read/', [BlogController::class, 'table']);
        Route::get('/create', [BlogController::class, 'a_create']);
        Route::post('/create', [BlogController::class, 'a_r_create']);
        Route::get('/edit/{id}', [BlogController::class, 'a_edit']);
        Route::post('/edit', [BlogController::class, 'a_r_edite']);
        Route::get('/destory/{id}', [BlogController::class, 'delete']);
    });
    Route::prefix('/user')->group(function () {
        Route::get('/read', [UserController::class, 'table']);
        Route::get('/edit/{id}', [UserController::class, 'a_edit']);
        Route::post('/edit', [UserController::class, 'a_r_edit']);
        Route::get('/delete', [UserController::class, 'delete']);
    });
    Route::prefix('/question')->group(function () {
        Route::get('/read', [QuestionController::class, 'table']);
        Route::get('/create', [QuestionController::class, 'a_create']);
        Route::post('/create', [QuestionController::class, 'a_r_create']);
        Route::get('/edit/{id}', [QuestionController::class, 'a_edit']);
        Route::post('/edit', [QuestionController::class, 'a_r_edit']);
        Route::get('/delete', [QuestionController::class, 'delete']);
    });
    Route::prefix('comment')->group(function () {
        Route::get('/read', [CommentController::class, 'table']);
        Route::get('/accept', [CommentController::class, 'accpet']);
        Route::get('/decline', [CommentController::class, 'decline']);
    });
    Route::prefix('chat')->group(function () {
        Route::get('/read', [CommentController::class, 'table']);
        Route::get('/accept', [CommentController::class, 'accpet']);
        Route::get('/decline', [CommentController::class, 'decline']);
    });
});
