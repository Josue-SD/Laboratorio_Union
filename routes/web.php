<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\NotificacionesController;
use App\Http\Controllers\Ordenes_detalleController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\Roles_permisosController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas tipo resource para tus controladores

Route::resource('usuarios', UsuarioController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('analisis', AnalisisController::class);
Route::resource('notificaciones', NotificacionesController::class);
Route::resource('ordenes-detalle', Ordenes_detalleController::class);
Route::resource('ordenes', OrdenesController::class);
Route::resource('pagos', PagosController::class);
Route::resource('resultados', ResultadosController::class);
Route::resource('roles-permisos', Roles_permisosController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // formulario login
Route::post('/login', [AuthController::class, 'login']); // enviar login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // cerrar sesión
