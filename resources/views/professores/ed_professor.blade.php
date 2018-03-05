@extends('layouts.app')
@section('conteudo')
  <section class="main">
      <div class="container center">
        <div class="container tittle">
            <h3>Editar Professor</h3>
        </div>
          <form class="form-horizontal font" method="POST" action="{{ route('professor.update' , ["id" => $professor->id]) }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-2" for="nome">Nome:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="{{ $professor->nome }}">
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $professor->email }}">
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2" for="telefone">Telefone:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" name="telefone" placeholder="Telefone" value="{{ $professor->telefone }}">
              </div>
            </div>
            <div class="form-group font">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="envio">Confirmar Edição</button>
                <button type="submit" class="btn btn-default"><a href="{{ route('professor.index') }}">Cancelar</button></a>
              </div>
            </div>
          </form>
      </div>
  </section>
@endsection
