<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Professor;

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

        return redirect()->back();

    }

    public function show($id)
    {
        //
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

        return redirect()->route('turma.index');
    }

    public function destroy($id)
    {
        //
        $turma = Turma::find($id);
        $turma->delete();

        return redirect()->route('turma.index');
    }
}
