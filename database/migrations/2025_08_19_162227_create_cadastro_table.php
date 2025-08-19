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
            $table->id('cadastro_id');
            $table->string('nome', length: 75);
            $table->string('endereco', length: 120);
            $table->char('telefone', length: 15);
            $table->char('cnpj', length: 18)->unique();
            $table->timestamps();
        });

        Schema::table('cadastro', function (Blueprint $table) {
            $table->string('razao_social', length: 50);
            $table->string('nome_fantasia', length: 75);
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
