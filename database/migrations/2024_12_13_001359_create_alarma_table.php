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
        Schema::create('alarma', function (Blueprint $table) {
            $table->bigIncrements('id_alarm'); 
            $table->bigInteger('id_usuario')->unsigned(); 
            $table->string('titulo'); 
            $table->string('color_icono');
            $table->text('descripcion')->nullable(); 
            $table->dateTime('hora_alarma'); 
            $table->enum('estado', ['pendiente', 'completada', 'perdida'])->default('pendiente');  // Estado de la alarma
            $table->dateTime('fecha_creacion')->default(now());  

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alarma');
    }
};
