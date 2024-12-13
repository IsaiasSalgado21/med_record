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
        Schema::create('informe_salud', function (Blueprint $table) {
            $table->bigIncrements('id_informe'); 
            $table->bigInteger('id_paciente')->unsigned(); 
            $table->text('sintomas');  
            $table->text('diagnostico'); 
            $table->text('actividades_realizadas'); 
            $table->dateTime('fecha_creacion')->default(now()); 
            $table->dateTime('fecha_modificacion')->nullable();

            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe_salud');
    }
};
