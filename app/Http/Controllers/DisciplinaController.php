<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{

    public function index()
    {
        //
        return view('disciplinas.cs_disciplina')->with('disciplinas', Disciplina::all());
    }

    public function create()
    {
        //
        return view('disciplinas.cd_disciplina');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $disciplina = Disciplina::create([
            'nome' => $request->nome
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
        $disciplina = Disciplina::find($id);
        return view('disciplinas.ed_disciplina')->with('disciplina', $disciplina);
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $disciplina = Disciplina::find($id);

        $disciplina->nome = $request->nome;
        $disciplina->save();

        return redirect()->route('disciplina.index');

    }

    public function destroy($id)
    {
        //
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        return redirect()->back();
    }

    public function search(Request $request){

        $disciplinas = DB::table('disciplinas')
        ->where('nome', 'like', '%'.$request->nome.'%')
        ->get();

        return view('disciplinas.cs_disciplina')->with('disciplinas', $disciplinas);

    }
}
