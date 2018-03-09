@extends('layouts.nonav')

@section('conteudo')

<section class="main">
          <div class="container">
              <div class="card card-container">
                  <form class="form-signin" method="POST" action="/login">
                  	{{ csrf_field() }}
                      
                      <span id="reauth-email" class="reauth-email"></span>
                      <input type="email" id="email"  name="email" class="form-control" placeholder="Email" required autofocus><br>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required><br>
                      <div id="remember" class="checkbox">
                          <label>
                              <input type="checkbox" name="remember" value="remember-me"> Lembrar me<br>
                          </label>
                      </div><p>
                      <button name="logar" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                      @include('includes.errors')
                  </form>
              </div>
          </div>
</section>

@endsection
