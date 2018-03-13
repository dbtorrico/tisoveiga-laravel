 @extends('layouts.app')
 @section('conteudo')
  <section class="main">
      <div class="container tittle">
          <h3>Editar Aluno</h3>
      </div>
      <div class="container center">
        <form class="form-horizontal" method="POST" action="{{ route('aluno.update', ['id' => $aluno->id]) }}">
          {{ csrf_field() }}
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nome">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nome" value="{{$aluno->nome}}" placeholder="Nome Completo">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="dNascimento">Data nascimento:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$aluno->data_nascimento}}" name="dNascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="idade">Idade:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="idade" value="{{$aluno->idade}}" placeholder="Idade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cd_resp1">Escola pública:</label>
            <div class="col-sm-10">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" name="optionsRadios1" value="sim"
                    @if($aluno->escola_publica)
                      checked
                    @endif
                  >
                  Sim
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" name="optionsRadios2" value="nao"
                  @if(!$aluno->escola_publica)
                     checked
                  @endif
                  >
                  Não
                </label>
              </div>
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomeEscola">Nome da escola:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeEscola" value="{{$aluno->nome_escola}}" placeholder="Nome da escola">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="anoCurso">Ano curso:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="anoCurso" value="{{$aluno->ano_curso}}" placeholder="Ano do curso">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" value="{{$aluno->email}}" placeholder="Email">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="certidaoNascimento">Certidão Nascimento:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="certidaoNascimento" value="{{$aluno->certidao_nascimento}}" placeholder="Certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="livroCertidao">Livro:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="livroCertidao" value="{{$aluno->livro}}" placeholder="Livro da certidão de nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2"  for="folhaCertidao">Folha:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="folhaCertidao" value="{{$aluno->folha}}" placeholder="Folha do livro da certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="rg">Registro geral:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rg" value="{{$aluno->registro_geral}}" placeholder="RG">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomePai">Nome do pai:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomePai" value="{{$aluno->nome_pai}}" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomeMae">Nome da mãe:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeMae" value="{{$aluno->nome_mae}}" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nacionalidade">Nacionalidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nacionalidade" value="{{$aluno->nacionalidade}}" placeholder="Nacionalidade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="rua">Endereço:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rua" value="{{$aluno->rua}}" placeholder="Logradouro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="numero">Número:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="numero" value="{{$aluno->numero}}" placeholder="Número">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="bairro">Bairro:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="bairro" value="{{$aluno->bairro}}" placeholder="Bairro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cidade">Cidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="cidade" value="{{$aluno->cidade}}" placeholder="Cidade que mora atualmente">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cep">CEP:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="cep" value="{{$aluno->cep}}" placeholder="CEP">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="telefone">Telefone:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="telefone" value="{{$aluno->telefone}}" placeholder="Telefone de contato">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="edicao" class="btn btn-primary">Confirmar Edição</button>
            </div>
          </div>
        </form>
      </div>
    </section>
@endsection
