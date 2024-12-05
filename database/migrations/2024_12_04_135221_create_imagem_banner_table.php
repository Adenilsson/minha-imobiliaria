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
        Schema::create('imagem_banner', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('path',255)->nullable(false);
            $table->bigInteger('tb_imobiliaria_id')->unsigned()->nullable(false);
            $table->foreign('tb_imobiliaria_id')->references('id')->on('imobiliaria');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem_banner');
    }
};
