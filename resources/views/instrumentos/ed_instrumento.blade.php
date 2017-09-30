@extends('layouts.app')
@section('conteudo')
  @include('includes.nav')
  <section class="main">
            <div class="container center">
              <div class="container tittle">
                  <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
                  <h1>Instrumento</h1>
              </div>
              <form class="form-horizontal font" method="POST" action="{{ route('instrumento.update' , ["id" => $instrumento->id]) }}">
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nome">Instrumento:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Nome do instrumento" value="{{ $instrumento->nome }}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="envio" class="btn btn-default">Confirmar</button>
                    <button type="submit" class="btn btn-default"><a href="./">Cancelar</button></a>
                  </div>
                </div>
              </form>
            </div>
  </section>
  @include('includes.footer')
@endsection
