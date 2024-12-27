<?php

/**
 * Documentación de Rutas de Laravel
 * 
 * Este archivo define las rutas utilizadas en la aplicación. Incluye rutas para autenticación,
 * perfiles de usuario y gestión de guías de remisión. Las rutas están agrupadas y protegidas
 * con middlewares según sea necesario para garantizar un control de acceso adecuado.
 */

use App\Http\Controllers\datosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuiaRemisionController;
use App\Models\GuiaRemision;

/**
 * Ruta para la página principal de la aplicación.
 * Muestra la vista de inicio de sesión.
 */
Route::get('/', function () {
    return view('auth.login');
});

/**
 * Ruta para el panel de control (dashboard).
 * Muestra la vista del panel para usuarios autenticados y verificados.
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Rutas protegidas que requieren autenticación.
 */
Route::middleware('auth')->group(function () {

    /**
     * Rutas de Perfil de Usuario
     * - Editar: Muestra el formulario para editar el perfil.
     * - Actualizar: Procesa las actualizaciones del perfil.
     * - Eliminar: Borra el perfil del usuario.
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Ruta para la Gestión de Usuarios
     * - Lista usuarios para administradores o gestores autenticados.
     */
    Route::middleware(['auth'])->get('/users', [UserController::class, 'index'])->name('users.index');

    /**
     * Rutas para Guías de Remisión
     * - Crear: Muestra el formulario para crear una nueva guía.
     * - Guardar: Procesa la creación de una nueva guía.
     */
    Route::controller(GuiaRemisionController::class)->group(function () {
        Route::get('/guiaremision-crear', 'create')->name('guiaremision.create');
        Route::post('/guiaremision-crear', 'store')->name('guiaremision.store');
    });

    /**
     * Ruta para la Vista de Creación de Guías
     * - Devuelve directamente la vista para crear una guía.
     */
    Route::view('/creardo', 'guiaremision.crear')->name('guiaremision.crear');
});

/**
 * Incluye las rutas de autenticación proporcionadas por el sistema Auth de Laravel.
 */
require __DIR__ . '/auth.php';
