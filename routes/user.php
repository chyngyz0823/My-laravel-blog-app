<?php

use Illuminate\Support\Facades\Route;

Route::prefix('user')->as('user.')->group(function () {

    Route::redirect('/', '/example/public/user/posts')->name('user');
    Route::get('posts', [\App\Http\Controllers\User\PostController::class, 'index'])->name('posts');
    Route::get('posts/create', [\App\Http\Controllers\User\PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [\App\Http\Controllers\User\PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [\App\Http\Controllers\User\PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [\App\Http\Controllers\User\PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [\App\Http\Controllers\User\PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [\App\Http\Controllers\User\PostController::class, 'delete'])->name('posts.delete');
    Route::put('posts/{post}/like', [\App\Http\Controllers\User\PostController::class, 'like'])->name('posts.like');
});
