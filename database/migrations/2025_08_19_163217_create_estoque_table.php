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
        Schema::create('estoque', function (Blueprint $table) {
            $table->unsignedBigInteger('cadastro_id');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', total: 5, places: 2);
            $table->timestamps();
        });

        Schema::table('estoque', function (Blueprint $table) {
            $table->foreign('cadastro_id')->references('cadastro_id')->on('cadastro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
