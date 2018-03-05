@extends('layouts.app')
@section('conteudo')
<section class="main">
  <div class="container center">
    <div class="container tittle">
      <h3>Consulta de Disciplina</h3>
    </div>
    <table id="example" class="display" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Nome</th>
          <th>Opções</th>
        </tr>
      </tfoot>
      <tbody>
        @if($disciplinas->count() > 0)
        @foreach($disciplinas as $disciplina)
        <tr>
          <td>{{ $disciplina->nome }}</td>
          <td><a href="{{ route('disciplina.edit', ['id' => $disciplina->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{ route('disciplina.delete', ['id' => $disciplina->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
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
