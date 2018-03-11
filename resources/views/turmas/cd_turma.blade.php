@extends('layouts.app')
@section('conteudo')
@include('includes.errors') 

  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <h3>Cadastro de Turma</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('turma.store') }}">
            {{ csrf_field() }}
            @if($professores->count() > 0)
              <div class="form-group font">
                <label class="control-label col-sm-2" for="nome">Professor:</label>
                <div class="col-sm-10">
                  <select class="form-control" name="professor">
                      @foreach($professores as $professor)
                        <option value="{{ $professor->id }}">{{ $professor->nome }}</option>
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
                    <input type="radio" class="form-check-input" name="turno" value="Manhã" checked>
                    Manhã
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="turno" value="Tarde">
                    Tarde
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="turno" value="Noite">
                    Noite
                  </label>
                </div>
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
