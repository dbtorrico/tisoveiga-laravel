<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    //
      protected $fillable = ["nome", "data_nascimento", "idade", "escola_publica","telefone1","telefone2", "escolaridade", "nome_escola", "turno", "instrumento"];
}
