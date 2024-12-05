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
        Schema::create('imobiliaria', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('nome', 100)->nullable(false);
            $table->string('cnpj', 20)->nullable(false);
            $table->bigInteger('tb_endereco_id')->unsigned()->nullable(false);
            $table->foreign('tb_endereco_id')->references('id')->on('enderecos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imobiliaria');
    }
};
