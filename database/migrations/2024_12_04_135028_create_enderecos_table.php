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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('logradouro')->nullable(false);
            $table->integer('numero')->nullable(false);
            $table->string('apartamento')->nullable(true);
            $table->string('bairro')->nullable(false);
            $table->string('cep')->nullable(false);
            $table->string('complemento')->nullable(true);
            $table->bigInteger('tb_pais_id')->unsigned()->nullable(false);
            $table->bigInteger('tb_cidade_id')->unsigned()->nullable(false);
            $table->bigInteger('tb_estado_id')->unsigned()->nullable(false);
            $table->foreign('tb_pais_id')->references('id')->on('tb_pais');
            $table->foreign('tb_cidade_id')->references('id')->on('tb_cidades');
            $table->foreign('tb_estado_id')->references('id')->on('tb_estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
