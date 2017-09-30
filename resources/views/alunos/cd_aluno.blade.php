 @extends('layouts.app')
 @section('conteudo')
    @include('includes.nav')
    <!-- /Forumlário -->
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $erro)
                <li class="list-group-item text-danger">
                    {{ $erro }}
                </li>
            @endforeach
        </ul>
    @endif

    <section class="main">
      <div class="container tittle">
          <a href="../../index.php"><i class="fa fa-3x fa-arrow-left" aria-hidden="true"></i></a>
          <h1>Cadastro de Aluno</h1>
      </div>
      <div class="container center">
        <form class="form-horizontal" method="POST" action="{{ route('aluno.store') }}">
          {{ csrf_field() }}
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nome">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="dNascimento">Data nascimento:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="dNascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="idade">Idade:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="idade" placeholder="Idade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cd_resp1">Escola pública:</label>
            <div class="col-sm-10">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="escola_publica" name="optionsRadios1" value="sim" checked>
                  Sim
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="escola_publica" name="optionsRadios2" value="nao">
                  Não
                </label>
              </div>
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomeEscola">Nome da escola:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeEscola" placeholder="Nome da escola">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="anoCurso">Ano curso:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="anoCurso" placeholder="Ano do curso">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="certidaoNascimento">Certidão Nascimento:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="certidaoNascimento" placeholder="Certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="livroCertidao">Livro:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="livroCertidao" placeholder="Livro da certidão de nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="folhaCertidao">Folha:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="folhaCertidao" placeholder="Folha do livro da certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="rg">Registro geral:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rg" placeholder="RG">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomePai">Nome do pai:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomePai" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nomeMae">Nome da mãe:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nomeMae" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="nacionalidade">Nacionalidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="rua">Endereço:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rua" placeholder="Logradouro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="numero">Número:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="numero" placeholder="Número">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="bairro">Bairro:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="bairro" placeholder="Bairro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cidade">Cidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="cidade" placeholder="Cidade que mora atualmente">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="cep">CEP:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="cep" placeholder="CEP">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2" for="telefone">Telefone:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="telefone" placeholder="Telefone de contato">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="envio" class="btn btn-default" >Cadastrar</button>
              <button type="submit" class="btn btn-default"><a href="consultaAluno.php">Cancelar</button></a>
            </div>
          </div>
        </form>
      </div>
    </section>
    @include('includes.footer')
@endsection
