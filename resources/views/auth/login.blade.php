<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap Core CSS -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('img/tribitiso.ico') }}" type="image/x-icon" />
      <!-- Custom CSS -->
      <link href="{{ asset('css/main.css') }}" rel="stylesheet">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


      <!-- fontawesome -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <title>Tiso Veiga</title>
  </head>

<body>
<section class="main">
          <div class="container">
              <div class="card card-container">
                  <img class="logo" src="{{ asset('img/tribitiso.ico') }}"/>
                  <form class="form-signin" method="POST" action="{{ route('login') }}">
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
                  </form>
              </div>
          </div>
</section>
<span class="footer">
  <hr class="style18">
  <p class="footer">Desenvolvido por Tribit Jr.<img src="{{ asset('img/tribit.png') }}">
</span>
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
