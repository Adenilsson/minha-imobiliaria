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
        Schema::create('tb_cidades', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('nome', 100)->nullable(false);
            $table->bigInteger('tb_estado_id')->unsigned()->nullable(false);
            $table->timestamps();
            $table->foreign('tb_estado_id')->references('id')->on('tb_estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
