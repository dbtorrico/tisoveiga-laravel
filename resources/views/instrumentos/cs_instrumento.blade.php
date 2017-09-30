@extends('layouts.app')
@section('conteudo')
  <section class="main">
    <div class="container center">
      <div class="container tittle">
          <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
          <h1>Consulta de Instrumento</h1>
      </div>
          <pre>
              <table width="100%">
                  <tr>
                      <th>Update</th>
                      <th>Nome</th>
                  </tr>

                  <!-- populate table from mysql database -->
                  @if($instrumentos->count() > 0)
                    @foreach($instrumentos as $instrumento)
                    <tr style="text-align: center;">
                        <td><a href="{{ route('instrumento.edit' , ["id" => $instrumento->id])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ route('instrumento.delete' , ["id" => $instrumento->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a></td>
                        <td>{{ $instrumento->nome }}</td>
                    </tr>
                    @endforeach
                  @endif
              </table>
          </pre>
    </div>
  </section>
@endsection
