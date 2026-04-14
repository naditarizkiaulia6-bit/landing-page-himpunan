<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/programs', [LandingController::class, 'programs'])->name('programs');
Route::get('/events', [LandingController::class, 'events'])->name('events');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
