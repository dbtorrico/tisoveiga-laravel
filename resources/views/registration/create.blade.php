@extends('layouts.nonav')

@section('conteudo')
<div class="main" style="margin-top: 100px;">
	<div class="col-sm-8">

		<h1>Registrar Usuario</h1>

	</div>
</div>

<form method="POST" action="/register">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="name">Nome:</label>
		<input type="text" class="form-control" id="name" name="name" required>
	</div>

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" required>
	</div>

	<div class="form-group">
		<label for="password">Senha:</label>
		<input type="password" class="form-control" id="password" name="password" required>
	</div>

	<div class="form-group">
		<label for="password_confirmation">Confirmar Senha:</label>
		<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Registrar</button>
	</div>

	
	@include('includes.errors')

</form>

@endsection
