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
        Schema::create('titulos', function (Blueprint $table) {
            $table->id();
            // declarando colunas
            $table->unsignedBigInteger('clube_id');
            $table->unsignedBigInteger('competicao_id');
            $table->date('data');

            // setando relacionamentos
            $table->foreign('clube_id')->references('id')->on('clubes')->onDelete('cascade');
            $table->foreign('competicao_id')->references('id')->on('competicoes')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulos');
    }
};
