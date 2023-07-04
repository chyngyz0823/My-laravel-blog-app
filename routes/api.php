<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts');
Route::get('posts/post', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');
Route::post('posts/post/like', [\App\Http\Controllers\Api\PostController::class, 'like'])->name('posts.like');


