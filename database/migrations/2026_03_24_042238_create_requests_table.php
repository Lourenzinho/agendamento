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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->enum('espaco_tipo', [1, 2, 3]);
            $table->enum('espaco_extra', [0, 1, 2, 3]);
            $table->timestamp('agendado_data');
            $table->enum('horario_tipo', [1, 2, 3, 4]);
            $table->boolean('aprovado_flag');
            $table->dateTime('aprovado_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
