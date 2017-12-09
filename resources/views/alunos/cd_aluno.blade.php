 @extends('layouts.app')
 @section('conteudo')
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
      <div class="container center">
      <div class="container tittle">
          <h3>Cadastro de Aluno</h3>
      </div>
      
        <form class="form-horizontal" method="POST" action="{{ route('aluno.store') }}">
          {{ csrf_field() }}
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="nome">Nome:</label>
            <div class="col-sm-10  col-md-12">
              <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2  col-md-12" for="dNascimento">Data nascimento:</label>
            <div class="col-sm-10  col-md-12">
              <input type="date" class="form-control" name="dNascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2  col-md-12" for="idade">Idade:</label>
            <div class="col-sm-10  col-md-12">
              <input type="number" class="form-control" name="idade" placeholder="Idade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2  col-md-12" for="cd_resp1">Escola pública:</label>
            <div class="col-sm-10  col-md-12">
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
            <label class="control-label col-sm-2  col-md-12" for="nomeEscola">Nome da escola:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="nomeEscola" placeholder="Nome da escola">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="anoCurso">Ano curso:</label>
            <div class="col-sm-10 col-md-12">
              <input type="number" class="form-control" name="anoCurso" placeholder="Ano do curso">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="email">Email:</label>
            <div class="col-sm-10 col-md-12">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="certidaoNascimento">Certidão Nascimento:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="certidaoNascimento" placeholder="Certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="livroCertidao">Livro:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="livroCertidao" placeholder="Livro da certidão de nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="folhaCertidao">Folha:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="folhaCertidao" placeholder="Folha do livro da certidão de Nascimento">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="rg">Registro geral:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="rg" placeholder="RG">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="nomePai">Nome do pai:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="nomePai" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="nomeMae">Nome da mãe:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="nomeMae" placeholder="Filiação">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="nacionalidade">Nacionalidade:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="rua">Endereço:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="rua" placeholder="Logradouro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="numero">Número:</label>
            <div class="col-sm-10 col-md-12">
              <input type="number" class="form-control" name="numero" placeholder="Número">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="bairro">Bairro:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="bairro" placeholder="Bairro">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="cidade">Cidade:</label>
            <div class="col-sm-10 col-md-12">
              <input type="text" class="form-control" name="cidade" placeholder="Cidade que mora atualmente">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="cep">CEP:</label>
            <div class="col-sm-10 col-md-12">
              <input type="number" class="form-control" name="cep" placeholder="CEP">
            </div>
          </div>
          <div class="form-group font">
            <label class="control-label col-sm-2 col-md-12" for="telefone">Telefone:</label>
            <div class="col-sm-10 col-md-12">
              <input type="number" class="form-control" name="telefone" placeholder="Telefone de contato">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 col-md-12">
              <button type="submit" name="envio" class="btn btn-primary">Cadastrar</button>

              {{-- <button type="submit" class="btn btn-danger"><a href="consultaAluno.php">Cancelar</button></a> --}}
            </div>
          </div>
        </form>
      </div>
    </section>
@endsection
