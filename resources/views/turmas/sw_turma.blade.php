@extends('layouts.app')
@section('conteudo')

  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
            <h1>Consulta de Turmas</h1>
        </div>
        <br><br><br>
       <pre>
          <table width="100%">
              <tr>
                  <th>Opções</th>
                  <th class="text-center">Número de Matrícula</th>
                  <th class="text-center">Nome</th>
              </tr>
              @if($matriculas->count() > 0)
                  @foreach($matriculas as $matricula)
                      <tr>
                          <td><a href="{{ route("nota.create", ["id" => $matricula->id]) }}"><i class="fa fa-star-o" aria-hidden="true"></i></a><td>
                          <td>{{ $matricula->id }}</td>
                          <td>{{ $matricula->aluno->nome }}</td>
                      </tr>
                  @endforeach
              @endif
          </table>
      </pre>
    </div>
  </section>

@endsection
