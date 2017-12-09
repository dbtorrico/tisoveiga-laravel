@extends('layouts.app')
@section('conteudo')
  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <h3>Cadastro de Disciplina</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('disciplina.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome Disciplina:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Nome da Disciplina">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="envio">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
  </section>
@endsection
