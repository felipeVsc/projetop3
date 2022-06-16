@extends('basic_component')
@section('page content') 
<div class="row align-items-center py-4">
        <div class="col-2" style="width: min-content;">
            <button type="button" class="btn btn-dark material-icons" disabled style="background: #212529 !important; opacity: 1 !important;">
              <i class="material-icons">arrow_back</i>
            </button>
        </div>
        <div class="col-10 col-md-11">
            <h4 class="m-0 mb-1 row discipline-name">
                Gerenciamento de monitores
            </h4>
        </div>
</div>
<div class="dropdown alignMonitor">
  <button class="btn btn-secondary dropdown-toggle " style="width:600px"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    Projeto e Análise de Algoritmos
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">  
    <div class="alignItem">
        <i class="material-icons">account_circle</i>
        <div>
          <h5 class="dropdown-item" href="#" style="width:550px">Fulano da Silva<h5>
          <a class="dropdown-header">fulano@gmail.com</a>
        </div>
        <i class="material-icons">delete_forever</i>
      </div>
      <div class="alignItem">
        <i class="material-icons">account_circle</i>
        <div>
          <h5 class="dropdown-item" href="#" style="width:550px">Fulano dos Santos<h5>
          <a class="dropdown-header">fulano2@gmail.com</a>
        </div>
        <i class="material-icons">delete_forever</i>
      </div>
  </div>
</div>
<div class="" style="">
 <button type="button" class="btn btn-primary " style="magin-top:1000px;">
 + Adicionar monitor
</button>
</div>
@stop