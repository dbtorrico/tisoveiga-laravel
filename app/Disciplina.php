<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
	protected $fillable = ['nome', 'instrumento_id', 'professor_id'];

	public function professor()
	{
		return $this->belongsTo('App\Professor');
	}
	public function instrumento()
	{
		return $this->belongsTo('App\Instrumento');
	}
	public function turmas()
	{
		return $this->hasMany('App\Turma');
	}
}
