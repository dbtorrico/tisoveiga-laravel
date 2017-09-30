<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    protected $fillable = ["professors_id", "turno"];

    public function professor(){
        return $this->belongsTo('App\Professor', 'professors_id');
    }

    public function matriculas(){
        return $this->belongsToMany('App\Matricula');
    }
}
