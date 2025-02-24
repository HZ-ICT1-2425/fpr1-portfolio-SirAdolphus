<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
