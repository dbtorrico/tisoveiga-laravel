<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrumento;
use App\Inscricao;

class InscricaoController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
        return view('inscricao.inscrever')->with('instrumentos', Instrumento::all());
    }

    public function store(Request $request)
    {
        //
        $escola = false;
        $this->validate($request, [
            'nome' => 'required',
            'dNascimento' => 'required',
            'escolaridade' => 'required',
            'idade' => 'required',
            'tel1' => 'required',
            'tel2' => 'required',
            'nomeEscola' => 'required',
            'instrumento' => 'required',
            'turno' => 'required'
        ]);

        if($request->escola_publica == "sim"){
            $escola = true;
        }

        $inscricao = Inscricao::create([
          'nome' => $request->nome,
          'data_nascimento' => $request->dNascimento,
          'idade' => $request->idade,
          'escolaridade' => $request->escolaridade,
          'telefone1' => $request->tel1,
          'telefone2' => $request->tel2,
          'escola_publica' => $escola,
          'nome_escola' => $request->nomeEscola,
          'instrumento' => $request->instrumento,
          'turno' => $request->turno
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
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
