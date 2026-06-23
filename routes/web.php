<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectIdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('ideas', ProjectIdeaController::class);

Route::get('/about', [AboutController::class, 'index'])->name('about');
