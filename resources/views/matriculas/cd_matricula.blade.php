@extends('layouts.app')
@section('conteudo')

    <section class="main">
      <div class="container center">
          <div class="container tittle">
              <h3>Matricular {{ $aluno->nome }}</h3>
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
                      <input type="text" class="form-control" name="data_matricula" value="{{ Carbon\Carbon::now()->day }}/{{ Carbon\Carbon::now()->month }}/{{ Carbon\Carbon::now()->year }}">
                  </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Turmas:</label>
                <div class="col-sm-10">
                  @if($turmas->count() > 0)
                    @foreach($turmas as $turma)
                        <label><input type="checkbox" name="turmas[]" value="{{ $turma->id }}"> {{ $turma->professor->nome }} - {{ $turma->professor->leciona}} - {{ $turma->turno}}</label><br>
                    @endforeach
                  @endif
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="envio">Cadastrar</button>
                      <button type="submit" class="btn btn-default"><a href="consultaDisciplina.php">Cancelar</button></a>
                  </div>
              </div>
          </form>
      </div>
    </section>

@endsection
