@extends('layouts.app')
@section('conteudo')

    @include('includes.nav')

    <section class="main">
      <div class="container center">
          <div class="container tittle">
              <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
              <h1>Matricular {{ $aluno->nome }}</h1>
          </div>
          <form class="form-horizontal" method="POST" action="{{ route('matricula.store') }}">
              {{ csrf_field() }}
              <div class="form-group">
                  <label class="control-label col-sm-2" for="nome">Nome:</label>
                  <div class="col-sm-10">
                      <input type="hidden" name="id_aluno" value="{{ $aluno->id }}" />
                      <input type="text" class="form-control" name="nome" placeholder="Nome da Disciplina" value="{{ $aluno->nome }}" readonly>
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="nome">Data de Matrícula:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome" placeholder="Nome da Disciplina" value="{{ Carbon\Carbon::now()->day }}/{{ Carbon\Carbon::now()->month }}/{{ Carbon\Carbon::now()->year }}">
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-sm-2">Turmas</turmas>
                    @if($turmas->count() > 0)
                      @foreach($turmas as $turma)
                        <div class="checkbox">
                            <label><input type="checkbox" name="turmas[]" value="{{ $turma->id }}"> {{ $turma->professor->nome}} - {{ $turma->professor->leciona}} - {{ $turma->turno }} </label>
                        </div>
                      @endforeach
                    @endif
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="envio">Cadastrar</button>
                      <button type="submit" class="btn btn-default"><a href="consultaDisciplina.php">Cancelar</button></a>
                  </div>
              </div>
          </form>
      </div>
    </section>

    @include('includes.footer')

@endsection
