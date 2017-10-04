<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    //
    protected $guarded = ["id"];

    public function matricula(){
        return $this->belongsTo('App\Matricula');
    }

    public function notas(){
        return $this->hasMany('App\Nota');
    }
}
