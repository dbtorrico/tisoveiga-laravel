@extends('layouts.app')
@section('conteudo')
  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
            <h1>Adicionar nota - {{ $matricula->aluno->nome }}</h1>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('nota.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Origem</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="origem" placeholder="Origem da nota">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nota" placeholder="Nota do aluno">
                </div>
            </div>

            <input type="hidden" name="matricula" value="{{ $matricula->id }}" />

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="envio">Adicionar</button>
                    <button type="submit" class="btn btn-default"><a href="{{ route('turma.index')}}">Cancelar</button></a>
                </div>
            </div>
        </form>
    </div>
  </section>
@endsection
