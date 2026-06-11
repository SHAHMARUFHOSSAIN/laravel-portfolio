<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('post.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
