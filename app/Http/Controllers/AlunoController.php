<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Aluno;
use Session;

class AlunoController extends Controller
{

    public function index()
    {
        //
        return view('alunos.cs_aluno')->with('alunos', Aluno::all());
    }

    public function create()
    {
        //
        return view('alunos.cd_aluno');
    }

    public function store(Request $request)
    {
        //
        $escola = false;
        $this->validate($request, [
            'nome' => 'required',
            'dNascimento' => 'required',
            'idade' => 'required',
            'nomeEscola' => 'required',
            'anoCurso' => 'required',
            'email' => 'required',
            'certidaoNascimento' => 'required',
            'livroCertidao' => 'required',
            'folhaCertidao' => 'required',
            'rg' => 'required',
            'nomePai' => 'required',
            'nomeMae' => 'required',
            'nacionalidade' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'telefone' => 'required'
        ]);

        if($request->escola_publica == "sim"){
            $escola = true;
        }

        $aluno = Aluno::create([
          'nome' => $request->nome,
          'data_nascimento' => $request->dNascimento,
          'idade' => $request->idade,
          'escola_publica' => $escola,
          'nome_escola' => $request->nomeEscola,
          'ano_curso' => $request->anoCurso,
          'email' => $request->email,
          'certidao_nascimento' => $request->certidaoNascimento,
          'livro' => $request->livroCertidao,
          'folha' => $request->folhaCertidao,
          'registro_geral' => $request->rg,
          'nome_pai' => $request->nomePai,
          'nome_mae' => $request->nomeMae,
          'nacionalidade' => $request->nacionalidade,
          'rua' => $request->rua,
          'numero' => $request->numero,
          'bairro' => $request->bairro,
          'cidade' => $request->cidade,
          'cep' => $request->cep,
          'telefone' => $request->telefone
        ]);

        return redirect()->back();

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $aluno = Aluno::find($id);
        return view('alunos.ed_aluno')->with('aluno', $aluno);
    }

    public function update(Request $request, $id)
    {
        //
        $escola = false;
        $this->validate($request, [
            'nome' => 'required',
            'dNascimento' => 'required',
            'idade' => 'required',
            'nomeEscola' => 'required',
            'anoCurso' => 'required',
            'email' => 'required',
            'certidaoNascimento' => 'required',
            'livroCertidao' => 'required',
            'folhaCertidao' => 'required',
            'rg' => 'required',
            'nomePai' => 'required',
            'nomeMae' => 'required',
            'nacionalidade' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'telefone' => 'required'
        ]);

        $aluno = Aluno::find($id);

        if($request->escola_publica == "sim"){
            $escola = true;
        }

        $aluno->nome = $request->nome;
        $aluno->data_nascimento = $request->dNascimento;
        $aluno->idade = $request->idade;
        $aluno->escola_publica = $escola;
        $aluno->nome_escola = $request->nomeEscola;
        $aluno->ano_curso = $request->anoCurso;
        $aluno->email = $request->email;
        $aluno->certidao_nascimento = $request->certidaoNascimento;
        $aluno->livro = $request->livroCertidao;
        $aluno->folha = $request->folhaCertidao;
        $aluno->registro_geral = $request->rg;
        $aluno->nome_pai = $request->nomePai;
        $aluno->nome_mae = $request->nomeMae;
        $aluno->nacionalidade = $request->nacionalidade;
        $aluno->rua = $request->rua;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;
        $aluno->cep = $request->cep;
        $aluno->telefone = $request->telefone;

        $aluno->save();

        return redirect()->route('aluno.index');

    }

    public function destroy($id)
    {
        //
        $aluno = Aluno::find($id);
        $aluno->delete();

        return redirect()->back();
    }

    public function search(Request $request){

        $alunos = DB::table('alunos')
        ->where('nome', 'like', '%'.$request->nome.'%')
        ->get();

        return view('alunos.cs_aluno')->with('alunos', $alunos);
    }
}
