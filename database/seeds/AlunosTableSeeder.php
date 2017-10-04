<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'nome' => "Luis Gustavo",
            'data_nascimento' => '28/05/1993',
            'idade' => '24',
            'escola_publica' => false,
            'nome_escola' => 'Sagrado',
            'ano_curso' => '2011',
            'email' => 'gusouza980@gmail.com',
            'certidao_nascimento' => '111111111111',
            'livro' => '111111111111',
            'folha' => '1111111111111',
            'registro_geral' => '111111111111',
            'nome_pai' => 'Leonardo',
            'nome_mae' => 'Suely',
            'nacionalidade' => 'Brasileiro',
            'rua' => 'teste',
            'numero' => '190',
            'bairro' => 'teste',
            'cidade' => 'teste',
            'cep' => 'teste',
            'telefone' => 'teste'
        ]);
        DB::table('alunos')->insert([
            'nome' => "Torrico",
            'data_nascimento' => '28/05/1993',
            'idade' => '24',
            'escola_publica' => false,
            'nome_escola' => 'Sagrado',
            'ano_curso' => '2011',
            'email' => 'gusouza980@gmail.com',
            'certidao_nascimento' => '111111111111',
            'livro' => '111111111111',
            'folha' => '1111111111111',
            'registro_geral' => '111111111111',
            'nome_pai' => 'Leonardo',
            'nome_mae' => 'Suely',
            'nacionalidade' => 'Brasileiro',
            'rua' => 'teste',
            'numero' => '190',
            'bairro' => 'teste',
            'cidade' => 'teste',
            'cep' => 'teste',
            'telefone' => 'teste'
        ]);
        DB::table('alunos')->insert([
            'nome' => "Damaris",
            'data_nascimento' => '28/05/1993',
            'idade' => '24',
            'escola_publica' => false,
            'nome_escola' => 'Sagrado',
            'ano_curso' => '2011',
            'email' => 'gusouza980@gmail.com',
            'certidao_nascimento' => '111111111111',
            'livro' => '111111111111',
            'folha' => '1111111111111',
            'registro_geral' => '111111111111',
            'nome_pai' => 'Leonardo',
            'nome_mae' => 'Suely',
            'nacionalidade' => 'Brasileiro',
            'rua' => 'teste',
            'numero' => '190',
            'bairro' => 'teste',
            'cidade' => 'teste',
            'cep' => 'teste',
            'telefone' => 'teste'
        ]);
    }
}
