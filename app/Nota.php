<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $guarded = ["id"];


    public function boletim(){
        return $this->belongsTo('App\Boletim');
    }
}
