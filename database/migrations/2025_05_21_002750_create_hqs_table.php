<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHqsTable extends Migration
{
    public function up()
    {
        Schema::create('hqs', function (Blueprint $table) {
            $table->id(); // equivale a 'id int(11) NOT NULL'
            $table->string('titulo');
            $table->text('descricao');
            $table->string('generos');
            $table->string('autor');
            $table->date('lancamento');
            $table->string('imagens');
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('loja1', 100)->nullable();
            $table->string('loja2', 100)->nullable();
            $table->string('loja3', 100)->nullable();
            $table->timestamps(); // adiciona created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('hqs');
    }
}
