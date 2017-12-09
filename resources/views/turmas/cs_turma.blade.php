@extends('layouts.app')
@section('conteudo')

  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
            <h1>Consulta de Turmas</h1>
        </div>
        <br>
        <br><br>
       <pre>
          <table width="100%">
              <tr>
                  <th>Update</th>
                  <th>Professor</th>
                  <th>Assunto</th>
                  <th>Turno</th>
              </tr>
              @if($turmas->count() > 0)
                  @foreach($turmas as $turma)
                      <tr>
                          <td><a href="{{ route('turma.edit' , ["id" => $turma->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              <a href="{{ route('turma.delete' , ["id" => $turma->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
                              <a href="{{ route('turma.show' , ["id" => $turma->id]) }}"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                          <td>{{ $turma->professor->nome }}</td>
                          <td>{{ $turma->professor->leciona }}</td>
                          <td>{{ $turma->turno }}</td>
                      </tr>
                  @endforeach
              @endif
          </table>
      </pre>
    </div>
  </section>

@endsection
