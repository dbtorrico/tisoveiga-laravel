@extends('layouts.app')
@section('conteudo')
<section class="main">
  <div class="container center">
    <div class="container tittle">
      <h1>Consulta de Professor</h1>
    </div>
    <table id="example" class="display" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Disciplinas</th>
          <th>Telefone</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Disciplinas</th>
          <th>Telefone</th>
          <th>Opções</th>
        </tr>
      </tfoot>
      <tbody>
        @if($professores->count() > 0)
        @foreach($professores as $professor)
        <tr>
          <td>{{ $professor->nome }}</td>
          <td>{{ $professor->email }}</td>
          <td>{{ $professor->leciona }}</td>
          <td>{{ $professor->telefone }}</td>
          <td><a href="{{ route('professor.edit', ['id' => $professor->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{ route('professor.delete', ['id' => $professor->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
            <a href="{{ route('matricula.create', ['id' => $professor->id]) }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</section>
@include("includes.table_js")
@endsection
