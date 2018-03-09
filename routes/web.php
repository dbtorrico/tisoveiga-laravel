<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas de alunos -----------------------------------------
Route::get('/cd_aluno', [
  'uses' => 'AlunoController@create',
  'as' => 'aluno.create'
]);

Route::post('/st_aluno' , [
  'uses' => 'AlunoController@store',
  'as' => 'aluno.store'
]);

Route::get('/alunos', [
  'uses' => 'AlunoController@index',
  'as' => 'aluno.index'
]);

Route::get('/alunos/search' , [
  'uses' => 'AlunoController@search',
  'as' => 'aluno.search'
]);

Route::get('/ed_aluno/{id}', [
  'uses' => 'AlunoController@edit',
  'as' => 'aluno.edit'
]);

Route::post('/up_aluno/{id}',[
  'uses' => 'AlunoController@update',
  'as' => 'aluno.update'
]);

Route::get('/dt_aluno/{id}', [
  'uses' => 'AlunoController@destroy',
  'as' => 'aluno.delete'
]);
//--------------------------------------------------------------------------

//Rotas para disciplinas ---------------------------------------------------
Route::get('/cd_disciplina' , [
  'uses' => 'DisciplinaController@create',
  'as' => 'disciplina.create'
]);

Route::post('/st_disciplina' , [
  'uses' => 'DisciplinaController@store',
  'as' => 'disciplina.store'
]);

Route::get('/disciplinas' , [
  'uses' => 'DisciplinaController@index',
  'as' => 'disciplina.index'
]);

Route::get('/disciplinas/search' , [
  'uses' => 'DisciplinaController@search',
  'as' => 'disciplina.search'
]);

Route::get('dt_disciplina/{id}' , [
  'uses' => 'DisciplinaController@destroy',
  'as' => 'disciplina.delete'
]);

Route::get('ed_disciplina/{id}', [
  'uses' => 'DisciplinaController@edit',
  'as' => 'disciplina.edit'
]);

Route::post('up_disciplina/{id}', [
  'uses' => 'DisciplinaController@update',
  'as' => 'disciplina.update'
]);

//------------------------------------------------------------------------------
//Rotas de instrumentos --------------------------------------------------------
Route::get('cd_instrumento' , [
  'uses' => 'InstrumentoController@create',
  'as'=> 'instrumento.create'
]);

Route::post('st_instrumento' , [
  'uses' => 'InstrumentoController@store',
  'as' => 'instrumento.store'
]);

Route::get('instrumentos' , [
  'uses' => 'InstrumentoController@index',
  'as' => 'instrumento.index'
]);

Route::get('ed_instrumento/{id}' , [
  'uses' => 'InstrumentoController@edit',
  'as' => 'instrumento.edit'
]);

Route::post('up_instrumento/{id}' , [
  'uses' => 'InstrumentoController@update',
  'as' => 'instrumento.update'
]);

Route::get('dt_instrumento/{id}' , [
  'uses' => 'InstrumentoController@destroy',
  'as' => 'instrumento.delete'
]);
//------------------------------------------------------------------------------
//Rotas de professores ---------------------------------------------------------

Route::get('cd_professor' , [
  'uses' => 'ProfessorController@create',
  'as' => 'professor.create'
]);

Route::post('st_professor' , [
  'uses' => 'ProfessorController@store',
  'as' => 'professor.store'
]);

Route::get('professores' , [
  'uses' => 'ProfessorController@index',
  'as' => 'professor.index'
]);

Route::get('professores/search' , [
  'uses' => 'ProfessorController@search',
  'as' => 'professor.search'
]);

Route::get('ed_professor/{id}' , [
  'uses' => 'ProfessorController@edit',
  'as' => 'professor.edit'
]);

Route::post('up_professor/{id}' , [
  'uses' => 'ProfessorController@update',
  'as' => 'professor.update'
]);

Route::get('dt_professor/{id}' , [
  'uses' => 'ProfessorController@destroy',
  'as' => 'professor.delete'
]);
//------------------------------------------------------------
// Rotas para inscrições
Route::get('inscricao', [
  'uses' => 'InscricaoController@create',
  'as' => 'inscricao.create'
]);

Route::post('st_inscricao', [
  'uses' => 'InscricaoController@store',
  'as' => 'inscricao.store'
]);
//----------------------------------------------------------
//Rotas para turmas
Route::get('cd_turma', [
  'uses' => 'TurmaController@create',
  'as' => 'turma.create'
]);
Route::post('st_turma', [
  'uses' => 'TurmaController@store',
  'as' => 'turma.store'
]);
Route::get('turmas', [
  'uses' => 'TurmaController@index',
  'as' => 'turma.index'
]);
Route::get('ed_turma/{id}', [
  'uses' => 'TurmaController@edit',
  'as' => 'turma.edit'
]);
Route::post('up_turma/{id}', [
  'uses' => 'TurmaController@update',
  'as' => 'turma.update'
]);
Route::get('dt_turma/{id}', [
  'uses' => 'TurmaController@destroy',
  'as' => 'turma.delete'
]);
Route::get('sw_turma/{id}', [
  'uses' => 'TurmaController@show',
  'as' => 'turma.show'
]);
//-------------------------------------------------------
//Rotas para matrículas
Route::get('cd_matricula/{id}', [
  'uses' => 'MatriculaController@create',
  'as' => 'matricula.create'
]);
Route::post('st_matricula', [
  'uses' => 'MatriculaController@store',
  'as' => 'matricula.store'
]);
//controladores de autenticacao
// Route::get('/register', 'RegistrationController@create');
// Route::post('/register', 'RegistrationController@store');

Route::get('/login', [
  'uses' => 'SessionsController@create',
  'as' => 'login'
  ]);

Route::post('/login', [
  'uses' => 'SessionsController@store',
  'as' => 'login.store'
  ]);

Route::get('/logout', [
  'uses'=>'SessionsController@destroy',
  'as' => 'login.destroy'
  ]);
Route::post('/logout', [
  'uses'=>'SessionsController@destroy',
  'as' => 'logout'
  ]);
//--------------------------------------------------------------------------
//Rotas para notas
Route::get('cd_nota/{id}', [
  'uses' => 'NotasController@create',
  'as' => 'nota.create'
]);
Route::post('st_nota', [
  'uses' => 'NotasController@store',
  'as' => 'nota.store'
]);
