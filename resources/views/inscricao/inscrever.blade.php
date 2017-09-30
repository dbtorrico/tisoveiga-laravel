@extends('layouts.nonav')
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
     <div class="container tittle">
         <h1>Inscrição</h1>
     </div>
     <br>
     <div class="container center">
       <form class="form-horizontal" method="POST" action="{{ route('inscricao.store') }}">
         {{ csrf_field() }}
         <div class="form-group font">
           <label class="control-label col-sm-2" for="nome">Nome:</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
           </div>
         </div>
         <div class="form-group font">
           <label class="control-label col-sm-2" for="nome">Escolaridade:</label>
           <div class="col-sm-10">
             <select class="form-control" name="escolaridade">
                <option>Ensino Fundamental Completo</option>
                <option>Ensino Fundamental Incompleto</option>
                <option>Ensino Médio Completo</option>
                <option>Ensino Médio Incompleto</option>
                <option>Ensino Superior Completo</option>
                <option>Ensino Superior Incompleto</option>
             </select>
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
           <label class="control-label col-sm-2" for="idade">Telefone 1:</label>
           <div class="col-sm-10">
             <input type="number" class="form-control" name="tel1" placeholder="Telefone 1">
           </div>
         </div>
         <div class="form-group font">
           <label class="control-label col-sm-2" for="idade">Telefone 2:</label>
           <div class="col-sm-10">
             <input type="number" class="form-control" name="tel2" placeholder="Telefone 2">
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
           <label class="control-label col-sm-2" for="cd_resp1">Turno Disponível:</label>
           <div class="col-sm-10">
             <div class="form-check">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="turno" value="Manhã" checked>
                 Manhã
               </label>
             </div>
             <div class="form-check">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="turno" value="Tarde">
                 Tarde
               </label>
             </div>
             <div class="form-check">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="turno" value="Noite">
                 Noite
               </label>
             </div>
           </div>
         </div>
         <div class="form-group font">
           <label class="control-label col-sm-2" for="cd_resp1">Instrumento Musical (Apenas um):</label>
           <div class="col-sm-10">
             @if($instrumentos->count() > 0)
               @foreach ($instrumentos as $instrumento)
                 <div class="form-check">
                   <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="instrumento" name="optionsRadios1" value="{{$instrumento->nome}}" checked>
                     {{$instrumento->nome}}
                   </label>
                 </div>
               @endforeach
             @endif
           </div>
         </div>
         <div>
         <br>
         <hr>
         <br>
         <div class="form-group">
            <div class="col-lg-12">
                <p class="" style="font-size: 20px; color:black; text-align: center;">É necessário comparecer em três aulas na semana, sendo uma de instrumento, uma de teoria e uma de atividade de conjunto.<br><br>
                <b>Obs.: A data e o horário do Teste de Aptidão Musical de cada cadidato inscrito estarão afixados a partir do dia 18 de agosto de 2017
                no Centro Municipal de música Professora Walda Tiso Veigo e no site da Prefeitura Municipal de Alfenas.<br><br>
                O Teste de Aptidão Musical será realizado de 21 a 23 de agosto de 2017.</b><br><br>
                No dia do seu teste, o candidato deverá trazer o comprovante de inscrição, documento de identidade, lápis, borracha e caneta.</p>
            </div>
         </div>
         <br>
         <hr>
         <div class="form-group">
           <div class="col-sm-12 text-center">
             <button type="submit" name="envio" class="btn btn-default" >Inscrever</button>
           </div>
         </div>
       </form>
     </div>
   </section>
@endsection
