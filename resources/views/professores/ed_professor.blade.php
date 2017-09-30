@extends('layouts.app')
@section('conteudo')
  @include('includes.nav')
  <section class="main">
      <div class="container center">
        <div class="container tittle">
            <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
            <h1>Editar Professor</h1>
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
                <button type="submit" class="btn btn-default" name="envio">Confirmar</button>
                <button type="submit" class="btn btn-default"><a href="./">Cancelar</button></a>
              </div>
            </div>
          </form>
      </div>
  </section>
  @include('includes.footer')
@endsection
