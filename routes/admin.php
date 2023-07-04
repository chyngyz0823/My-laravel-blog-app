<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['active', 'admin', 'auth'])->as('admin.')->group(function () {

    Route::redirect('/', '/example/public/admin/posts')->name('admin');
    Route::get('posts', [\App\Http\Controllers\Admin\PostController::class, 'index'])->name('posts');
    Route::get('posts/create', [\App\Http\Controllers\Admin\PostController::class, 'create'])->name('posts.create');
    Route::post('posts', [\App\Http\Controllers\Admin\PostController::class, 'store'])->name('posts.store');
    Route::get('posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [\App\Http\Controllers\Admin\PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{post}', [\App\Http\Controllers\Admin\PostController::class, 'delete'])->name('posts.delete');
    Route::put('posts/{post}/like', [\App\Http\Controllers\Admin\PostController::class, 'like'])->name('posts.like');
});
