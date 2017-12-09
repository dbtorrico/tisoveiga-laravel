


@extends('layouts.app')
@section('conteudo')
<div class="container">
    <h1>Página inicial - navegue pelo menu acima</h1>
    </div>
{{-- 
  <div class="container">
        <div class="main" style="margin-top: 100px;">
            <div class="row">

                    <div class="col-md-3 topico ">
                        <h2>Alunos</h2>
                        <img src="{{ asset('img/aluno.ico')}}">
                        <div class="alinhar">
                            <p>▶<a class="link" href="{{ route('aluno.create') }}"><span class="op"> Cadastro</span></a>
                            <p>▶<a class="link" href="{{ route('aluno.index') }}"><span class="op"> Consulta</a>
                            <p>▶<a class="link" href=""><span class="op"> Notas</a>
                        </div>
                    </div>
                <div class="col-md-3 topico">
                    <h2>Professores</h2>
                    <img src="{{ asset('img/prof.ico') }}">
                    <div class="alinhar">
                        <p>▶<a class="link" href="{{ route('professor.create') }}"><span class="op"> Cadastro</a>
                        <p>▶<a class="link" href="{{ route('professor.index') }}"><span class="op"> Consulta</a>
                    </div>
                </div>
                <div class="col-md-3 topico">
                    <h2>Instrumento</h2>
                    <img src="{{ asset('img/inst.ico') }}">
                    <div class="alinhar">
                        <p>▶<a class="link" href="{{ route('instrumento.create') }}"><span class="op"> Cadastro</a>
                        <p>▶<a class="link" href="{{ route('instrumento.index') }}"><span class="op"> Consulta</a>
                    </div>
                </div>
                <div class="col-md-3 topico">
                    <h2>Documentos</h2>
                    <img src="{{ asset('img/doc.ico') }}">
                    <div class="alinhar">
                        <p>▶<a class="link" href=""><span class="op"> Arquivo Morto</a>
                        <p>▶<a class="link" href=""><span class="op"> Boletim</a>
                        <p>▶<a class="link" href=""><span class="op">Emitir Carteirinha</a>
                        <p>▶<a class="link" href="./views/classes/emissao_matricula.php"><span class="op">Emitir Declaração de Matrícula</a>
                        <p>▶<a class="link" href=""><span class="op"> Trancamento</a>
                    </div>
                </div>
                <div class="col-md-3 topico">
                    <h2>Turmas</h2>
                    <img src="{{ asset('img/turma.ico') }}">
                    <div class="alinhar">
                        <p>▶<a class="link" href="{{ route('turma.create')}}"><span class="op">Cadastro</a>
                        <p>▶<a class="link" href="{{ route('turma.index') }}"><span class="op">Consulta</a>
                        <p>▶<a class="link"><span class="op"> Enturmação</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
