<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Livewire\after;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('imovel', function (Blueprint $table) {
            $table->integer('condicao_id')->nullable(false)->after('categoria_id');
            $table->integer('pretencao_id')->nullable(false)->after('condicao_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imovel', function (Blueprint $table) {
            $table->dropColumn('pretencao_id');
        });
    }
};
