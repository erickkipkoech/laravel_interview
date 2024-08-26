<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//api creation

//Route for CRUD posts
Route::post('add_post', [PostController::class, 'add_post'])->middleware('auth:api');// create

Route::get('get_posts', [PostController::class, 'get_posts'])->middleware('auth:api'); //get

Route::delete('delete_post', [PostController::class, 'delete_post'])->middleware('auth:api'); //delete

Route::put('update_post', [PostController::class, 'update_post'])->middleware('auth:api'); //update

// Route for user login
Route::post('login', [UserController::class, 'login']);

// Route for filtering users
Route::get('register', [UserController::class, 'register']);

