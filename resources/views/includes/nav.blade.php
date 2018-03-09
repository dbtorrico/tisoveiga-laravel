<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Tiso <span class="blue">Veiga</span></a>
  <img src="{{ asset('img/tribitiso.png') }}" style="width: 45px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown_alunos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alunos
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown_alunos">
          <a class="dropdown-item" href="{{ route('aluno.create') }}">Cadastrar</a>
          <a class="dropdown-item" href="{{ route('aluno.index') }}">Consultar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown_disciplina" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Disciplina
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown_disciplina">
          <a class="dropdown-item" href="{{ route('disciplina.create') }}">Cadastrar</a>
          <a class="dropdown-item" href="{{ route('disciplina.index') }}">Consultar</a>
        </div>
      </li>
      {{-- DOCUMENTOS --}}
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown_documentos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Documentos
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown_documentos">
          <a class="dropdown-item" href="#">Arquivo Morto</a>
          <a class="dropdown-item" href="#">Boletim</a>
          <a class="dropdown-item" href="#">Declaração</a>
          <a class="dropdown-item" href="#">Matrícula</a>
          <a class="dropdown-item" href="#">Trancamento</a>
        </div>
      </li> --}}
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown_professores" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Professores
       </a>
       <div class="dropdown-menu" aria-labelledby="dropdown_professores">
        <a class="dropdown-item" href="{{ route('professor.create') }}">Cadastrar</a>
        <a class="dropdown-item" href="{{ route('professor.index') }}">Consultar</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="dropdown_turma" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Turma
     </a>
     <div class="dropdown-menu" aria-labelledby="dropdown_turma">
      <a class="dropdown-item" href="{{ route('turma.create') }}">Cadastrar</a>
      <a class="dropdown-item" href="{{ route('turma.index') }}">Consultar</a>
    </div>
  </li>

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav navbar-right">
      <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
          <li>
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
  </ul>
</div>
</nav>