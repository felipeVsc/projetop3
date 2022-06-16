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

<div class="d-flex justify-content-center">
  <div class="group w-75">
    <div class="groupslot-header slot-1" data-toggle="collapse" data-target="#G1M, #G1L, #G1">
      <div class="groupslot-header-card slot-card slot-card-1 dark">
        <h4 class="header-title">Projeto e Análise de Algoritmos</h4>
        <h4 id="G1M" class="icon-sm collapse show">expand_more</h4>
        <h4 id="G1L" class="icon-sm collapse">expand_less</h4>
      </div>
    </div>

    <div id="G1" class="collapse show mt-3" aria-labelledby="headingOne">

      <div class="row">
        <div class="container">
          <div class="row mb-4">

            <div class="col align-self-center">
              <div class="d-flex justify-content-center">
                <i class="material-icons" style="font-size: 3.0em;">account_circle</i>
              </div>
            </div>

            <div class="col-8">
              <h5 id="nomeUser" class="text-left fonteCorDiferente robotoFlex">Jose Arthur Lopes</h5>
              <h6 id="emailUser" class="text-left fonteCorDiferente robotoFlex">ja@ic.ufal.br</h6>
            </div>

            <div class="col">
              <div class="d-flex justify-content-center">
                <i class="material-icons" style="font-size: 2.0em;">do_disturb_on</i>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="container">
          <div class="row mb-4">

            <div class="col align-self-center">
              <div class="d-flex justify-content-center">
                <i class="material-icons" style="font-size: 3.0em;">account_circle</i>
              </div>
            </div>

            <div class="col-8">
              <h5 id="nomeUser" class="text-left fonteCorDiferente robotoFlex">Felipe Ferreira Vasco</h5>
              <h6 id="emailUser" class="text-left fonteCorDiferente robotoFlex">ffv@ic.ufal.br</h6>
            </div>

            <div class="col">
              <div class="d-flex justify-content-center">
                <i class="material-icons" style="font-size: 2.0em;">do_disturb_on</i>
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</div>

<div class="d-flex justify-content-center">
  <button type="button" class="btn btn-primary mt-3">
    + Adicionar monitor
  </button>
</div>

@stop