<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professors_id')->unsigned()->nullable();
            //Turma possui 1 professor
            $table->foreign('professors_id')->references('id')->on('professors')->onDelete('set null');
            $table->integer('disciplina_id')->unsigned()->nullable();
            //Turma possui 1 disciplina
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('set null');
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
        Schema::dropIfExists('turmas');
    }
}
