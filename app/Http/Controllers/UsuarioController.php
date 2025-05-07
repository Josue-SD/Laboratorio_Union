<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de tener este modelo

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::all(); // Obtenemos todos los usuarios
        return view('usuarios.index', compact('usuarios')); // Enviamos a la vista
    }
}
