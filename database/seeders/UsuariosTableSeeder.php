<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@laboratoriounion.com',
            'password' => Hash::make('password123'),
        ]);

        // Puedes agregar más usuarios si lo necesitas
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'juan@laboratoriounion.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
    
