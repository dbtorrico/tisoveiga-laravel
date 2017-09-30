<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Instrumento;

class InstrumentoController extends Controller
{

    public function index()
    {
        //
        return view('instrumentos.cs_instrumento')->with('instrumentos', Instrumento::all());
    }

    public function create()
    {
        //
        return view('instrumentos.cd_instrumento');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $instrumento = Instrumento::create([
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
        $instrumento = Instrumento::find($id);
        return view('instrumentos.ed_instrumento')->with('instrumento' , $instrumento);
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nome' => 'required'
        ]);

        $instrumento = Instrumento::find($id);
        $instrumento->nome = $request->nome;

        $instrumento->save();

        return redirect()->route('instrumento.index');
    }

    public function destroy($id)
    {
        //
        $instrumento = Instrumento::find($id);

        $instrumento->delete();

        return redirect()->route('instrumento.index');
    }
}
