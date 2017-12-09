<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
	public function __construct()
	{
    	//apenas visitantes enxergam a pagina de login. Ou seja, quem ja esta logado nao ve a pagina de login.
		$this->middleware('guest', ['except' => 'destroy' ]);
	}
	
	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		//aqui eh feita a autenticacao do usuario
		if(! auth()->attempt(request(['email', 'password'])))
		{
			return back()->withErrors([
				'message' => 'Login falhou. Favor confirmar seus dados e tentar novamente.'
				]);
		}

		//redireciona para a homepage
		return redirect()->home();
	}

	public function destroy()
	{
		auth()->logout();
		return redirect()->home();
	}
}
