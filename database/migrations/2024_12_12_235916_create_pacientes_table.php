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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id_paciente');
            $table->bigInteger('id_usuario')->unsigned();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('estado_salud');
            $table->timestamps();

            $table->foreign('id_usuario')
                  ->references('id_usuario')
                  ->on('usuarios')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
