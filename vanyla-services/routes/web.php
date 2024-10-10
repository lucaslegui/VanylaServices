<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;


Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas que requieren que el usuario esté autenticado
Route::middleware('auth')->group(function () {
    // Gestión del perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grupo de rutas que requieren que el usuario sea administrador
Route::middleware(['auth', AdminMiddleware::class])
    ->name('admin.')
    ->group(function () {
        Route::resource('users', UserController::class);
    });

require __DIR__.'/auth.php';
