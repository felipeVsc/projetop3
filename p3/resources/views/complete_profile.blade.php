@extends('basic_component')

@section('page content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center flex-column">
                <div class="p-4">
                    <p style="font-size: 35px; margin-bottom: 0; font-family: 'Roboto Flex', monospace;">
                        Conclua seu cadastro
                    </p>
                </div>
                <div class="p-2">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control rounded-pill inputsTexto" style="border-radius: 20px !important;" id="userInput"
                            placeholder="usuario">
                        <label for="userInput" class="align-items-center" style="color: grey;">Matrícula/SIAPE</label>
                    </div>
                    <div class="form-floating professorCheckbox">
                        <div class="form-check">
                            <input class="form-check-input" style="border-color: #12E58D;" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Sou professor
                            </label>
                        </div>
                    </div>

                </div>

                <div class="p-2">                    
                    <button class="buttonEntrar btn btn-primary " type="button">
                        Entrar
                    </button>                 
                </div>
            </div>
        </div>
        <div class="col coluna2 justify-content-start" >
            <div class="d-flex flex-column">
                
                    <div class="row">
                        <div class="col align-items-center profilepicture col-3">                                    
                            <img class="rounded-circle m-auto" src="https://static1.purepeople.com.br/articles/0/32/59/50/@/3678243-jade-picon-volta-a-comentar-polemica-com-624x600-2.jpg"  width="110px" height="110px">    
                        </div>
                        <div class="col" style="margin-top: 20px;">
                            <div>Nome</div>
                            <p id="nomeUser" class="fonteCorDiferente robotoFlex">Fulano de Tal</p>
                            <div>Email</div>

                            <p id="emailUser" class="fonteCorDiferente robotoFlex">fdt@ic.ufal.br</p>                                    
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@stop