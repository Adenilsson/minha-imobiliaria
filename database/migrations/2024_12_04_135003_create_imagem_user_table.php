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
        Schema::create('imagem_user', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('path',255)->nullable(false);
            $table->bigInteger('tb_user_id')->unsigned()->nullable(false);
            $table->foreign('tb_user_id')->references('id')->on('users')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem_user');
    }
};
