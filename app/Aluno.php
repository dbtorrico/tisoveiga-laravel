<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $fillable = ['nome', 'data_nascimento', 'idade', 'escola_publica', 'nome_escola', 'ano_curso',
    'email','certidao_nascimento','livro','folha','registro_geral','nome_pai','nome_mae','nacionalidade','rua',
    'numero','bairro','cidade','cep', 'telefone'];

    public function matriculas(){
        return $this->hasMany('App\Matricula');
    }
}
