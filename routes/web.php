<?php

use App\Http\Controllers\datosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuiaRemisionController;
use App\Models\GuiaRemision;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// para manejar la rutas de guia de remision
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware(['auth'])->get('/users', [UserController::class, 'index'])->name('users.index');

    Route::controller(GuiaRemisionController::class)->group(function () {
        Route::get('/guiaremision-crear', 'create')->name('guiaremision.create');
        Route::post('/guiaremision-crear', 'store')->name('guiaremision.store');
    });
    Route::view('/creardo', 'guiaremision.crear')->name('guiaremision.crear');
});

require __DIR__ . '/auth.php';
