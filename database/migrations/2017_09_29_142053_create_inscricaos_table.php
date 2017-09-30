<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('idade');
            $table->date('data_nascimento');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('escolaridade');
            $table->string('nome_escola');
            $table->boolean('escola_publica');
            $table->string('instrumento');
            $table->string('turno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscricaos');
    }
}
