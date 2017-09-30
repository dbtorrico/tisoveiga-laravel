<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;

class RegistrationController extends Controller
{
    //
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	//Apenas o ADMIN cria um novo usuario
    	//Validar o form
    	$this->validate(request(), [
    			'name' => 'required',
    			'email' => 'required|email',
    			'password' => 'required|confirmed' //para isso funcionar, na view precisamos chamar o input de password_confirmation
    		]);
    	//Criar e salvar o usuario
        User::create(array(
            'email' => request('email'),
            'name' => request('name'),
            'password' => Hash::make(request('password'))
            ));
    	
    	//Redirecionar para a homepage
    	return redirect()->home();
    }
}
