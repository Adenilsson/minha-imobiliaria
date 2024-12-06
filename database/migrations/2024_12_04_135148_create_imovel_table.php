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
        Schema::create('imovel', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->text('descricao')->nullable(false);
            $table->float('area_total')->nullable(false)->default(0);
            $table->float('area_construida')->nullable(false)->default(0);
            $table->integer('quartos')->nullable(false)->default(0);
            $table->integer('banheiros')->nullable(false)->default(0);
            $table->integer('suites')->nullable(false)->default(0);
            $table->integer('garagem')->nullable(false)->default(0);
            $table->string('valor')->nullable(false)->default(0);
            $table->dateTime('created_at')->nullable(true)->default(null);
            $table->dateTime('updated_at')->nullable(true)->default(null);
            $table->dateTime('deleted_at')->nullable(true)->default(null);
            $table->tinyInteger('status')->default(0);

            $table->bigInteger('users_id')->unsigned()->nullable(false);
            $table->bigInteger('endereco_id')->unsigned()->nullable(false);
            $table->bigInteger('proprietario_id')->unsigned()->nullable(false);
            $table->bigInteger('tb_tipo_imovel_id')->unsigned()->nullable(false);
            $table->bigInteger('condicao_id')->unsigned()->nullable(false)->default(0);

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('proprietario_id')->references('id')->on('proprietario');
            $table->foreign('tb_tipo_imovel_id')->references('id')->on('tb_tipo_imovel');
            $table->foreign('condicao_id')->references('id')->on('condicao');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imovel');
    }
};
