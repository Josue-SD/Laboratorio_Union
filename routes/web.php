<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\Ordenes_detalleController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\Roles_permisosController;

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// RUTAS DE AUTENTICACIÓN

// Mostrar formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Procesar login
Route::post('/login', [AuthController::class, 'login']);

// Cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Mostrar formulario de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); // <- corregido

// Procesar registro
Route::post('/register', [AuthController::class, 'register']);

// Recuperación de contraseña
Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Restablecimiento de contraseña
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// RUTAS PROTEGIDAS CON AUTENTICACIÓN
Route::middleware(['auth'])->group(function () {
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('clientes', ClientesController::class);
    Route::resource('analisis', AnalisisController::class);
    Route::resource('notificaciones', NotificacionesController::class);
    Route::resource('ordenes-detalle', Ordenes_detalleController::class);
    Route::resource('ordenes', OrdenesController::class);
    Route::resource('pagos', PagosController::class);
    Route::resource('resultados', ResultadosController::class);
    Route::resource('roles-permisos', Roles_permisosController::class);
});
