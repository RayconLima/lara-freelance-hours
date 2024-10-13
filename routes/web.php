<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/anunciar-projeto', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projeto/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('como-funciona', AboutController::class)->name('about');
