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
            <p style="margin-top: 90%; font-size: 35px; margin-bottom: 0;">Meu@IC</p>
        </div>
        <div class="p-1">
            <p style="margin-top:2px;">Login</p>
        </div>
        <div class="p-2">
            <div class="form-floating mb-4">
                <input type="email" class="form-control rounded-pill inputsTexto " id="userInput" placeholder="usuario">
                <label for="userInput" class="centralizarNomes">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-pill inputsTexto" id="senhaInput" placeholder="senha">
                <label for="senhaInput" class="centralizarNomes">Senha</label>
            </div>

        </div>
        <div class="p-2" ><button class="btn btn-primary rounded-pill buttonEntrar" type="submit" >Entrar</button></div>

        <div class="p-2">
            <p>Não possui conta? <a href=".">Cadastre-se</a></p>
        </div>
        <div class="p-2 bottomLine">
            <p>© 2022 MeuIC. Todos os direitos reservados.</p>
        </div>

    </div>

</body>

</html>