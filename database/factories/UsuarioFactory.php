<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class UsuarioFactory extends Factory
{
    protected $model = \App\Models\Usuario::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // Em produção, use bcrypt() ou um valor mais seguro
            'admin' => $this->faker->boolean, // Gera um valor booleano aleatório
        ];
    }
}