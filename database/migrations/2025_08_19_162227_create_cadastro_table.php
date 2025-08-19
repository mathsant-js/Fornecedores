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
        Schema::create('cadastro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', length: 60);
            $table->string('endereco', length: 120);
            $table->char('telefone', length: 15);
            $table->char('cnpj', length: 18);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro');
    }
};
