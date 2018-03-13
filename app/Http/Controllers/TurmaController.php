<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Professor;
use App\Matricula;
use App\Aluno;

class TurmaController extends Controller
{

    public function index()
    {
        //
        return view('turmas.cs_turma')->with('turmas', Turma::all());
    }

    public function create()
    {
        //
        return view('turmas.cd_turma')->with('professores', Professor::all());
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'professor' => 'required',
            'turno' => 'required'
        ]);

        $turma = Turma::create([
            'professors_id' => $request->professor,
            'turno' => $request->turno
        ]);
        $professor = Professor::find($request->professor);
        return redirect()->back()->with('success','Turma Prof: "'.$professor->nome.'", Turno: "'.$request->turno.'", cadastrada com sucesso!');;

    }

    public function show($id)
    {
        //
        $turma = Turma::find($id);
        $matriculas = $turma->matriculas()->get();
        return view('turmas.sw_turma')->with('matriculas', $matriculas);
    }

    public function edit($id)
    {
        //
        return view('turmas.ed_turma')->with('turma', Turma::find($id))
                                      ->with('professores', Professor::all());
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'professor' => 'required',
            'turno' => 'required'
        ]);

        $turma = Turma::find($id);

        $turma->professors_id = $request->professor;
        $turma->turno = $request->turno;

        $turma->save();

        return redirect()->route('turma.index')->with('success','Turma "'.$request->nome.'" editada com sucesso!');;
    }

    public function destroy($id)
    {
        //
        $turma = Turma::find($id);
        $turma->delete();

        return redirect()->route('turma.index');
    }
}
