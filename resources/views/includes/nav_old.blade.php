<nav class="navbar topBar navbar-fixed-top">
    <div class="container ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Tiso <span class="blue">Veiga</span></a>
            <img src="{{ asset('img/tribitiso.png') }}" style="width: 45px">
        </div>
        <div class="collapse navbar-collapse " id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alunos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('aluno.index') }}">Consultar</a></li>
                        <li><a href="{{ route('aluno.create') }}">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Disciplina <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('disciplina.index') }}">Consultar</a></li>
                        <li><a href="{{ route('disciplina.create') }}">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Documentos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Arquivo Morto</a></li>
                        <li><a href="#">Boletim</a></li>
                        <li><a href="#">Declaração</a></li>
                        <li><a href="#">Matrícula</a></li>
                        <li><a href="#">Trancamento</a></li>
                    </ul>
                </li>
                <li ><a href="">Instrumento</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Professor <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="">Consultar</a></li>
                        <li><a href="">Cadastrar</a></li>
                    </ul>
                </li>
                </li>
                <li><a href="">Turmas<span class="sr-only">(current)</span></a></li>
        </div>
    </div>
</nav>
