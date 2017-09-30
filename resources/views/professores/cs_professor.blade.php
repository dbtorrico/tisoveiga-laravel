@extends('layouts.app')
@section('conteudo')
  <section class="main">
          <div class="container center">
              <div class="container tittle">
                  <a href="./"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
                  <h1>Consulta de Professor</h1>
              </div>
              <form action="{{ route('professor.search') }}" method="get">
                  {{ csrf_field() }}
                  <div class="formInput">
                      <input width="70%" type="text" name="nome" placeholder="Insira o nome do professor desejado">
                      <!-- <input type="submit" name="search" value="Filtrar"> -->
                      <button type="submit" name="search"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></button>
                      <a href="cd_prof.php" id="button"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
                  </div>
                  <pre>
                      <table width="100%">
                          <tr>
                              <th>Update</th>
                              <th>Nome</th>
                              <th>E-Mail</th>
                              <th>Telefone</th>
                          </tr>

                          <!-- populate table from mysql database -->
                          @if($professores->count() > 0)
                            @foreach($professores as $professor)
                              <tr>
                                  <td>
                                      <a href="{{ route('professor.edit' , ["id" => $professor->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                      <a href="{{ route('professor.delete' , ["id" => $professor->id]) }}"><i class="fa fa-user-times" aria-hidden="true"></i></a>
                                  </td>
                                  <td>{{ $professor->nome }}</td>
                                  <td>{{ $professor->email }}</td>
                                  <td>{{ $professor->telefone }}</td>
                              </tr>
                            @endforeach
                          @endif
                      </table>
                  </pre>
              </form>
          </div>
  </section>
@endsection
