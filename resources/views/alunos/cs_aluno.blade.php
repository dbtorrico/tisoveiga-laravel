@extends('layouts.app')
@section('conteudo')
@include('includes.nav')
<section class="main">
    <div class="container">
        <div class="container tittle">
            <h3>Consulta de Aluno</h3>
        </div>
        <table id="example" class="display" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Idade</th>
                    <th>Escola Publica</th>
                    <th>Nome Escola</th>
                    <th>Ano Curso</th>
                    <th>Email</th>
                    <th>Opções</th>
                    {{-- <th>Certidao Nascimento</th>
                    <th>Livro</th>
                    <th>Folha</th>
                    <th>Nome Pai</th>
                    <th>Nome Mãe</th>
                    <th>Nacionalidade</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th> --}}
                </tr>
            </thead>
            <tfoot>
                    <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Idade</th>
                    <th>Escola Publica</th>
                    <th>Nome Escola</th>
                    <th>Ano Curso</th>
                    <th>Email</th>
                    <th>Opções</th>
                   {{--  <th>Certidao Nascimento</th>
                    <th>Livro</th>
                    <th>Folha</th>
                    <th>Nome Pai</th>
                    <th>Nome Mãe</th>
                    <th>Nacionalidade</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Criado em</th>
                    <th>Atualizado em</th> --}}
                </tr>
            </tfoot>
            <tbody>
                  @if($alunos->count() > 0)
                          @foreach($alunos as $aluno)
                            <tr>
                                
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
                                {{--<td>{{ $aluno->certidao_nascimento }}</td>
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
                                <td>{{ $aluno->telefone }}</td> --}}
                                <td><a href="{{ route('aluno.edit', ['id' => $aluno->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ route('aluno.delete', ['id' => $aluno->id]) }}" onClick="return confirm('Tem certeza que deseja deletar ?')"><i class="fa fa-user-times" aria-hidden="true"></i></a>
                                <a href="{{ route('matricula.create', ['id' => $aluno->id]) }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
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