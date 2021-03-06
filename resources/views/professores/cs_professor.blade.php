@extends('layouts.app')
@section('conteudo')
<section class="main">
  <div class="container center">
    <div class="container tittle">
      <h3>Consulta de Professor</h3>
    </div>
    <table id="example" class="display" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Email</th>
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
          {{-- {{dd($professor->disciplinas)}} --}}
          {{-- <td>{{ $professor->disciplinas->nome }}</td> --}}
          <td>{{ $professor->telefone }}</td>
          <td><a href="{{ route('professor.edit', ['id' => $professor->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{ route('professor.delete', ['id' => $professor->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
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
