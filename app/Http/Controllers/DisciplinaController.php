<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Disciplina;
use App\Instrumento;
use App\Professor;

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
        return view('disciplinas.cd_disciplina')->with('instrumentos', Instrumento::all())->with('professores', Professor::all());
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nome' => 'required',
            'professor_id' => 'required'
        ]);

        $disciplina = Disciplina::create([
            'nome' => $request->nome,
            'instrumento_id' => $request->instrumento_id,
            'professor_id' => $request->professor_id
        ]);

        return redirect()->back()->with('success','Disciplina "'.$request->nome.'" cadastrada com sucesso!');;
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nome' => 'required',
            'professor_id' => 'required'
        ]);

        $disciplina = Disciplina::find($id);

        $disciplina->nome = $request->nome;
        $disciplina->instrumento_id = $request->instrumento_id;
        $disciplina->professor_id = $request->professor_id;
        $disciplina->save();

        return redirect()->route('disciplina.index')->with('success','Disciplina "'.$request->nome.'" editada com sucesso!');;

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $disciplina = Disciplina::find($id);
        return view('disciplinas.ed_disciplina')->with('disciplina', $disciplina)->with('instrumentos', Instrumento::all())->with('professores', Professor::all());
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
