<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/blogs', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
route::get('/blogs/create', [\App\Http\Controllers\PostController::class, 'create'])->name('blogs.create');
route::post('/blogs', [\App\Http\Controllers\PostController::class, 'store'])->name('blogs.store');
route::get('/blogs/{blog}', [\App\Http\Controllers\PostController::class, 'show'])->name('blogs.show');
