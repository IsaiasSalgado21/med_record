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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->increments('id_medicamento');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('dosis');
            $table->string('frecuencia');
            $table->dateTime('fecha_creacion')->default(now());
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento');
    }
};
