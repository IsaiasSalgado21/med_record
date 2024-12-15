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
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->bigIncrements('id_cuidador');
            $table->bigInteger('id_usuario')->unsigned();
            $table->string('especialidad')->nullable(); 
            $table->string('telefono')->nullable(); 



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
        Schema::dropIfExists('cuidadores');
    }
};
