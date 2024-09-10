<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('sinopse', 255);
            $table->string('ano', 255);
            $table->string('categoria', 255);
            // Adaptado para permitir valores nulos e definir um padrão nulo
            $table->string('imagem_da_capa', 255)->nullable()->default(null);
            $table->string('link', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('filmes', function (Blueprint $table) {
            $table->dropColumn('imagem_da_capa');
        });
    }
};