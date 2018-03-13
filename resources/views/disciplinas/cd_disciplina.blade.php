@extends('layouts.app')
@section('conteudo')
@include('includes.errors') 

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
            <div class="form-group font">
              <label class="control-label col-sm-2 col-md-12">Instrumento (Escolha apenas um):</label>
              <div class="col-sm-10 col-md-12">
                @if($instrumentos->count() > 0)
                  @foreach($instrumentos as $instrumento)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="instrumento_id" value="{{ $instrumento->id }}">
                        {{ $instrumento->nome }}
                      </label>
                    </div>
                  @endforeach
                @endif
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2 col-md-12">Professor (Escolha apenas um):</label>
              <div class="col-sm-10 col-md-12">
                @if($professores->count() > 0)
                  @foreach($professores as $professor)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="professor_id" value="{{ $professor->id }}">
                        {{ $professor->nome }}
                      </label>
                    </div>
                  @endforeach
                @endif
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
