<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //
    protected $fillable = ['nome', 'email', 'telefone', 'leciona'];

    public function turmas(){
        return $this->hasMany('App\Turma');
    }
}
