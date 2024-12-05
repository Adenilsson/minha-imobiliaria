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
        Schema::create('imagem_imovel', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('path',255)->nullable(false);
            $table->tinyInteger('capa')->nullable(false)->default(0);
            $table->bigInteger('tb_imovel_id')->unsigned()->nullable(false);
            $table->foreign('tb_imovel_id')->references('id')->on('imovel')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem_imovel');
    }
};
