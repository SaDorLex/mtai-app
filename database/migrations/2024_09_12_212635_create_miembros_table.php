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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_p');
            $table->string('ap_m');
            $table->integer('edad');
            $table->string('dni');
            $table->string('genero');
            $table->string('local');
            $table->string('telefono');
            $table->string('correo');
            $table->string('categoria');
            $table->string('modulo');
            $table->string('seminario');
            $table->string('fecha_nac');
            $table->string('ondas_d');
            $table->string('usuario');
            $table->string('password');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
