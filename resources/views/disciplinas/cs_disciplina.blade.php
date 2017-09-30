@extends('layouts.app')
@section('conteudo')
  @include('includes.nav')
  <section class="main">
    <div class="container center">
        <div class="container tittle">
            <a href="../../index.php"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
            <h1>Consulta de Disciplina</h1>
        </div>
        <form action="{{ route('disciplina.search')}}" method="get">
            {{ csrf_field() }}
            <div class="formInput">
                <input width="70%" type="text" name="nome" placeholder="Pesquisar Disciplina">
                <!-- <input type="submit" name="search" value="Filtrar"> -->
                <button type="submit" name="search"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></button>
                <a href="cd_disciplina" id="button"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
            </div>
            <pre>
                    <table width="100%">
                        <tr>
                            <th>Update</th>
                            <th>Nome Disciplina</th>
                        </tr>

                        <!-- populate table from mysql database -->
                        @if($disciplinas->count() > 0)
                          @foreach($disciplinas as $disciplina)
                              <tr>
                              <td><a href="{{ route('disciplina.edit' , ["id" => $disciplina->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                  <a href="{{ route('disciplina.delete' , ["id" => $disciplina->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a></td>
                              <td>{{ $disciplina->nome }}</td>
                          </tr>
                          @endforeach
                        @endif
                    </table>
                </pre>
        </form>
    </div>
  </section>
  @include('includes.footer')
@endsection
