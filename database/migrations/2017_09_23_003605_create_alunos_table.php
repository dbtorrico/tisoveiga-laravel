<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('idade');
            $table->boolean('escola_publica');
            $table->string('nome_escola');
            $table->string('ano_curso');
            $table->string('email');
            $table->string('certidao_nascimento');
            $table->string('livro');
            $table->string('folha');
            $table->string('registro_geral');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('nacionalidade');
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone');
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
        Schema::dropIfExists('alunos');
    }
}
