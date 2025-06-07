<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cadastro_id');
            $table->unsignedBigInteger('h_q_id');
            $table->timestamps();
            $table->foreign('cadastro_id')->references('id')->on('cadastros')->onDelete('cascade');
            $table->foreign('h_q_id')->references('id')->on('hqs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoritos');
    }
};
