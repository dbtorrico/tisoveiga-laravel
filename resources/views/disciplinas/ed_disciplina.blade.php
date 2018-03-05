@extends('layouts.app')
@section('conteudo')
  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <h3>Editar Disciplina</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('disciplina.update', ["id" => $disciplina->id]) }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome Disciplina:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Nome da Disciplina" value="{{ $disciplina->nome }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="envio">Confirmar</button>
                    <button type="submit" class="btn btn-default"><a href="{{route('disciplina.index')}}">Cancelar</button></a>
                </div>
            </div>
        </form>
    </div>
  </section>
@endsection
