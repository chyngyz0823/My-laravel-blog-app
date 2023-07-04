<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/')->name('home redirect');

Route::get('/test', \App\Http\Controllers\TestController::class);

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store'])->name('login.store');
//Route::get('/login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');
//Route::post('/login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');


Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::post('blog/post/like', [\App\Http\Controllers\BlogController::class, 'like'])->name('blog.like');


///crud




Route::resource('posts/{post}/comments', \App\Http\Controllers\Posts\CommentController::class)->except([
   'index', 'show'
]);


Route::fallback(function () {
    return 'Fallback';
});
