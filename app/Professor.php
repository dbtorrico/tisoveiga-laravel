<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //
    protected $fillable = ['nome', 'email', 'telefone', 'disciplina_id'];

    public function disciplinas(){
        return $this->hasMany('App\Disciplina');
    }

    public function turmas(){
        return $this->hasMany('App\Turma');
    }
}
