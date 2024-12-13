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
        Schema::create('configuracion', function (Blueprint $table) {
            $table->bigIncrements('id_configuracion'); 
            $table->bigInteger('id_usuario')->unsigned(); 
            $table->text('etiquetas')->nullable(); 
            $table->text('simbolos')->nullable(); 
            $table->json('dashboard_personalizada')->nullable(); 

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuracion');
    }
};
