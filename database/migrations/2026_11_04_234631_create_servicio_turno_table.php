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
        Schema::create('servicio_turno', function (Blueprint $table) {
            $table->id();

            $table->foreignId('servicio_id')->constrained('servicios')->onDelete();
            
            $table->foreignId('turno_id')->constrained('turnos')->onDelete();
            
            $table->timestamps();

            $table->unique(['servicio_id', 'turno_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicio_turno');
    }
};  
