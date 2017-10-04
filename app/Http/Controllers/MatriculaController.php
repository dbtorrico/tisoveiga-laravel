<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Matricula;
use App\Aluno;
use App\Turma;
use App\Instrumento;
use App\Boletim;

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
        $instrumento = -1;
        $this->validate($request, [
          "id_aluno" => "required",
          "data_matricula" => "required"
        ]);
        foreach($request->turmas as $turma){
            $t = Turma::find($turma);
            if($t->professor->leciona != "Musicalização" && $t->professor->leciona != "Coral" && $t->professor->leciona != "Oficina de Cordas"){
                $instrumento = DB::table('instrumentos')->where('nome', $t->professor->leciona)->value('id');
            }
        }

        $matricula = Matricula::create([
            'aluno_id' => $request->id_aluno,
            'data_matricula' => $request->data_matricula,
            'instrumento_id' => $instrumento,
            'periodo' => 1
        ]);

        $matricula->turmas()->attach($request->turmas);

        $boletim = Boletim::create([
            'matricula_id' => $matricula->id,
            'periodo' => $matricula->periodo,
            'faltas' => 0
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
