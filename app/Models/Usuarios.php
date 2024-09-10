<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    // Define a tabela associada ao modelo
    protected $table = 'usuarios';

    // Define quais atributos podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'admin',
    ];

    // Define quais atributos são ocultos ao converter o modelo para arrays ou JSON
    protected $hidden = [
        'password',
    ];

    // Define os tipos de atributos para casting
    protected $casts = [
        'admin' => 'boolean',
    ];
}