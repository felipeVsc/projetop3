<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link href="/css/stylelogin.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz@8..144&family=Roboto+Mono:wght@700&display=swap');
    </style>

</head>
<!-- fazer depois o css funcionar que nao está por algum motivo !-->
<body>
    <div class="d-flex align-items-center flex-column">
        <div class="p-2" >
            <p class="meuIc">Meu@IC</p>
        </div>
        <div class="p-1">
            <p style="margin-top:2px;">Cadastro</p>
        </div>
        <div class="p-2">
            <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill inputsTexto" id="nomeInput" placeholder="usuario">
                <label for="nomeInput" class="centralizarNomes" >Nome </label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control rounded-pill inputsTexto" id="userInput" placeholder="senha">
                <label for="userInput" class="centralizarNomes">Usuário</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control rounded-pill inputsTexto " id="emailInput" placeholder="usuario">
                <label for="emailInput" class="centralizarNomes">Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="number" class="form-control rounded-pill inputsTexto" id="matriculaInput" placeholder="senha">
                <label for="matriculaInput" class="centralizarNomes">Matrícula</label>
                
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control rounded-pill inputsTexto" id="senhaInput" placeholder="senha">
                <label for="senhaInput" class="centralizarNomes">Senha</label>
            </div>


        </div>
        <div class="p-2" ><button class="btn btn-primary rounded-pill buttonEntrar" type="submit" >Cadastrar</button></div>

        <div class="p-2">
            <p>Voltar para <a href=".">Login</a></p>
        </div>
        <div class="p-2 bottomLine">
            <p>© 2022 MeuIC. Todos os direitos reservados.</p>
        </div>

    </div>

</body>

</html>