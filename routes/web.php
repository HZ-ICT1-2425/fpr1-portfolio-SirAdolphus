<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/blogs', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/blogs/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/blogs', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/blogs/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/blogs/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::put('/blogs/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::delete('/blogs/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
