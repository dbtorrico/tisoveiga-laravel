<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Professor;
use App\Disciplina;

class ProfessorController extends Controller
{

    public function index()
    {
        //
        return view('professores.cs_professor')->with('professores', Professor::all());
    }

    public function create()
    {
        //
        return view('professores.cd_professor')->with('disciplinas', Disciplina::all());
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required'
        ]);
        
        $professor = Professor::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone
        ]);

        return redirect()->back()->with('success','Professor "'.$request->nome.'" cadastrado com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $professor = Professor::find($id);

        return view('professores.ed_professor')->with('professor', $professor);
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required',
            'telefone' => 'required'
        ]);

        $professor = Professor::find($id);

        $professor->nome = $request->nome;
        $professor->email = $request->email;
        $professor->telefone = $request->telefone;

        $professor->save();

        return redirect()->route('professor.index')->with('success','Professor "'.$request->nome.'" editado com sucesso!');;
    }

    public function destroy($id)
    {
        //
        $professor = Professor::find($id);

        $professor->delete();

        return redirect()->back();
    }

    // public function search(Request $request){

    //     $professores = DB::table('professors')
    //     ->where('nome', 'like', '%'.$request->nome.'%')
    //     ->get();

    //     return view('professores.cs_professor')->with('professores', $professores);

    // }
}
