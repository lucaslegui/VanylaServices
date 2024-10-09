<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware; // Import the AdminMiddleware

// Ruta principal para la página de inicio
Route::get('/', function () {
    return view('home');
});

// Ruta protegida para el dashboard, requiere autenticación y verificación de correo electrónico
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
