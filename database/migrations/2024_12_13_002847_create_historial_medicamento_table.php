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
        Schema::create('historial_medicamento', function (Blueprint $table) {
            $table->bigIncrements('id_historial'); 
            $table->bigInteger('id_paciente')->unsigned(); 
            $table->decimal('cantidad_administrada', 8, 2); 
            $table->dateTime('fecha_administracion');  
            $table->text('observaciones')->nullable();
            $table->dateTime('fecha_creacion')->default(now()); 

            $table->foreign('id_paciente')->references('id_paciente')->on('pacientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_medicamento');
    }
};
