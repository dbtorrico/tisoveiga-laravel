@extends('layouts.app')
@section('conteudo')

  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <h3>Editar Turma</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('turma.update', ["id" => $turma->id]) }}">
            {{ csrf_field() }}
            @if($professores->count() > 0)
              <div class="form-group font">
                <label class="control-label col-sm-2" for="nome">Professor:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="professor">
                      @foreach($professores as $professor)
                        <option value="{{ $professor->id }}"

                          @if($professor->id == $turma->professor->id)
                              selected
                          @endif

                        >{{ $professor->nome }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            @endif
            <div class="form-group font">
              <label class="control-label col-sm-2" for="cd_resp1">Turno:</label>
              <div class="col-sm-10">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="turno" value="Manhã"
                      @if($turma->turno == "Manhã")
                          checked
                      @endif
                    >
                    Manhã
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="turno" value="Tarde"
                      @if($turma->turno == "Tarde")
                          checked
                      @endif
                    >
                    Tarde
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="turno" value="Noite"
                      @if($turma->turno == "Noite")
                          checked
                      @endif
                    >
                    Noite
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="envio">Confirmar Edição</button>
                    <button type="submit" class="btn btn-default"><a href="./">Cancelar</button></a>
                </div>
            </div>
        </form>
    </div>
  </section>

@endsection
