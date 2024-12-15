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
        Schema::create('asignacion_cuidador_paciente', function (Blueprint $table) {
            $table->bigIncrements('id_asignacion'); 
            $table->bigInteger('id_cuidador')->unsigned(); 
            $table->bigInteger('id_paciente')->unsigned();
            $table->dateTime('fecha_asignacion')->default(now());  
            $table->dateTime('fecha_termino')->nullable();  
            $table->foreign('id_cuidador')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_cuidador_paciente');
    }
};
