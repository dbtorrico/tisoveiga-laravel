<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matricula;
use App\Aluno;
use App\Turma;

class MatriculaController extends Controller
{

    public function index()
    {
        //
    }

    public function create($id)
    {
        //
        return view('matriculas.cd_matricula')->with('aluno', Aluno::find($id))
                                              ->with('turmas', Turma::all());
    }

    public function store(Request $request)
    {
        //
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
