<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aluno;
use App\Matricula;
use App\Boletim;
use App\Nota;

class NotasController extends Controller
{

    public function index()
    {
        //
    }

    public function create($id)
    {
        $matricula = Matricula::find($id);
        return view("alunos.add_nota")->with('matricula', $matricula);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'origem' => 'required',
            'nota' => 'required|numeric'
        ]);

        $matricula = Matricula::find($request->matricula);

        $nota = Nota::create([
            'origem' => $request->origem,
            'nota' => $request->nota,
            'boletim_id' => $matricula->boletim->id
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
