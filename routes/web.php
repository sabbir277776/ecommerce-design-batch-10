<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
// admin
Route::get('/admin', [AdminController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
