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
        Schema::create('tb_estados', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique()->unsigned();
            $table->string('nome', 100)->nullable(false);
            $table->string('sigla', 2)->nullable(false);
            $table->bigInteger('tb_pais_id')->unsigned()->nullable(false);
            $table->foreign('tb_pais_id')->references('id')->on('tb_pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
