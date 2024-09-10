<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        // Cria 10 usuários com dados aleatórios
        Usuario::factory()->count(10)->create();
    }
}