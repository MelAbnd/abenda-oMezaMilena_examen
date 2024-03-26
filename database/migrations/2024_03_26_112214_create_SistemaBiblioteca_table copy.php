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
        Schema::create('SistemaBiblioteca', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('contraseña');
            $table->string('contacto');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SistemaBiblioteca');
    }
};