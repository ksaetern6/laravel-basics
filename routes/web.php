<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get("/", HomeController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{posts:id}', [PostController::class, 'show'])->name('posts.show');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/example', function () {
    $user = User::find(1);

    $user->posts()->create([
        'title' => 'Abc',
        'body' => 'Abc_body'
    ]);

});