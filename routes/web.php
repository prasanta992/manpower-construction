<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/service', [HomeController::class, 'service'])->name('service.index');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects.index');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials.index');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers.index');