@extends('layouts.app')
@section('conteudo')
  @include('includes.nav')
  <section class="main">
        <div class="container center">
            <div class="container tittle">
                <a href="../../index.php"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
                <h1 >Consulta de Aluno</h1>
            </div>
            <form action="{{ route('aluno.search') }}" method="get">
                {{ csrf_field() }}
                <div class="formInput">
                    <input width="70%" type="text" name="nome" placeholder="Insira o nome do aluno desejado">
                    <!-- <input type="submit" name="search" value="Filtrar"> -->
                    <button type="submit" name="search"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></button>
                    <a href="{{ route('aluno.create') }}" id="button"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a>
                </div>
                <pre>
                    <table width="100%">
                        <tr>
                            <th>Update</th>
                            <th>Nome</th>
                            <th>Nascimento</th>
                            <th>Idade</th>
                            <th>Escola Publica</th>
                            <th>Nome escola</th>
                            <th>Ano de Curso</th>
                            <th>Email</th>
                            <th>Certidao de Nascimento</th>
                            <th>Livro Certidao</th>
                            <th>Folha Certidao</th>
                            <th>R.G.</th>
                            <th>Nome da Pai</th>
                            <th>Nome do Mãe</th>
                            <th>Nacionalidade</th>
                            <th>Rua</th>
                            <th>Numero</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>CEP</th>
                            <th>Telefone</th>
                        </tr>

                        <!-- populate table from mysql database -->
                        @if($alunos->count() > 0)
                          @foreach($alunos as $aluno)
                            <tr>
                                <td><a href="{{ route('aluno.edit', ['id' => $aluno->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ route('aluno.delete', ['id' => $aluno->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
                                <a href="{{ route('matricula.create', ['id' => $aluno->id]) }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                                </td>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->data_nascimento }}</td>
                                <td>{{ $aluno->idade }}</td>
                                @if($aluno->escola_publica)
                                  <td>Sim</td>
                                @else
                                  <td>Não</td>
                                @endif
                                <td>{{ $aluno->nome_escola }}</td>
                                <td>{{ $aluno->ano_curso }}</td>
                                <td>{{ $aluno->email }}</td>
                                <td>{{ $aluno->certidao_nascimento }}</td>
                                <td>{{ $aluno->livro }}</td>
                                <td>{{ $aluno->folha }}</td>
                                <td>{{ $aluno->registro_geral }}</td>
                                <td>{{ $aluno->nome_pai }}</td>
                                <td>{{ $aluno->nome_mae }}</td>
                                <td>{{ $aluno->nacionalidade }}</td>
                                <td>{{ $aluno->rua }}</td>
                                <td>{{ $aluno->numero }}</td>
                                <td>{{ $aluno->bairro }}</td>
                                <td>{{ $aluno->cidade }}</td>
                                <td>{{ $aluno->cep }}</td>
                                <td>{{ $aluno->telefone }}</td>
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
