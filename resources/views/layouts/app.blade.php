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
 <!-- Navbar -->

        @yield('conteudo')
      
        <!-- jQuery -->
        <script src="{{ asset('js/jquery.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
