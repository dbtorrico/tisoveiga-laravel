@extends('layouts.app')
@section('conteudo')
  <section class="main">
      <div class="container center">
        <div class="container tittle">
            <h3>Cadastro de Professor</h3>
        </div>
          <form class="form-horizontal font" method="POST" action="{{ route('professor.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-2 col-md-12" for="nome">Nome:</label>
              <div class="col-sm-10 col-md-12">
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2 col-md-12" for="email">Email:</label>
              <div class="col-sm-10 col-md-12">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2 col-md-12" for="telefone">Telefone:</label>
              <div class="col-sm-10 col-md-12">
                <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
              </div>
            </div>
            <div class="form-group font">
              <label class="control-label col-sm-2 col-md-12" for="cd_resp1">Leciona (Escolha apenas um):</label>
              <div class="col-sm-10 col-md-12">
                <label>Instrumentos:</label>
                @if($instrumentos->count() > 0)
                  @foreach($instrumentos as $instrumento)
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="leciona" value="{{ $instrumento->nome }}" checked>
                        {{ $instrumento->nome }}
                      </label>
                    </div>
                  @endforeach
                @endif
                <label>Outros:</label>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="leciona" value="Musicalização" checked>
                    Musicalização
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="leciona" value="Coral" checked>
                    Coral
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group font">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="envio">Cadastrar</button>
                <button type="submit" class="btn btn-default"><a href="./">Cancelar</button></a>
              </div>
            </div>
          </form>
      </div>
  </section>
@endsection
