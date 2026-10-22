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
        Schema::create('noticia_anexos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('noticia_id')->constrained()->onDelete('cascade');
            $table->string('tipo');
            $table->string('valor');
            $table->string('titulo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticia_anexos');
    }
};
