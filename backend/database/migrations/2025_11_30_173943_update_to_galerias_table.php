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
        Schema::table('galerias', function (Blueprint $table) {
            $table->string('foto')->nullable();
            $table->dropColumn('url_imagem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galerias', function (Blueprint $table) {
            $table->string('foto');
            $table->dropColumn('url_imagem')->nullable();
        });
    }
};
