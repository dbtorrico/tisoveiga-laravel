@extends('layouts.app')
@section('conteudo')
@include('includes.errors')

  <section class="main">
            <div class="container center">
              <div class="container tittle">
                  <h3>Instrumento</h3>
              </div>
              <form class="form-horizontal font" method="POST" action="{{ route('instrumento.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nome">Instrumento:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" placeholder="Nome do instrumento">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="envio" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>
              </form>
            </div>
  </section>
@endsection
