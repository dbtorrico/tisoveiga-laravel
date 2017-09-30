<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{

    protected $guarded = ["id"];
    //
    public function turmas(){
        return $this->belongsToMany('App\Turma');
    }

    public function alunos(){
        return $this->belongsTo('App\Aluno', 'aluno_id');
    }
}
