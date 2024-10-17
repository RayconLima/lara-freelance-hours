<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/anunciar-projeto', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projeto/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('como-funciona', AboutController::class)->name('about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('admin/usuarios', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('admin/projetos', [AdminProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('admin/projetos/{project}', [AdminProjectController::class, 'show'])->name('admin.projects.show');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
